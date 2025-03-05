<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function getAvailableDates($propertyId)
    {
        // Get all booked dates for the specific property
        $bookedReservations = Reservation::where('property_id', $propertyId)
            ->get();

        // Create an array to store all reserved date ranges
        $reservedDates = [];

        foreach ($bookedReservations as $reservation) {
            $checkin = Carbon::parse($reservation->checkin);
            $checkout = Carbon::parse($reservation->checkout);

            // Add all dates between checkin and checkout (inclusive)
            while ($checkin <= $checkout) {
                $reservedDates[] = $checkin->format('Y-m-d');
                $checkin->addDay();
            }
        }

        return response()->json([
            'reserved_dates' => array_unique($reservedDates)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_id'   => 'required|exists:properties,id',
            'checkin'       => 'required|date|after_or_equal:today',
            'checkout'      => 'required|date|after:checkin',
            'total_nights'  => 'required|integer|min:1',
            'estimated_total' => 'required|numeric|min:0',
        ]);

        // Check for date conflicts
        $isBooked = Reservation::where('property_id', $request->property_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('checkin', [$request->checkin, $request->checkout])
                      ->orWhereBetween('checkout', [$request->checkin, $request->checkout])
                      ->orWhere(function ($query) use ($request) {
                          $query->where('checkin', '<=', $request->checkin)
                                ->where('checkout', '>=', $request->checkout);
                      });
            })
            ->exists();

        if ($isBooked) {
            return response()->json([
                'message' => 'Sorry, the selected dates are already booked.'
            ], 422);
        }

        $reservation = Reservation::create([
            'user_id'        => Auth::id(),
            'property_id'    => $request->property_id,
            'checkin'        => $request->checkin,
            'checkout'       => $request->checkout,
            'total_nights'   => $request->total_nights,
            'estimated_total'=> $request->estimated_total,
        ]);

        return response()->json([
            'message' => 'Reservation added successfully!',
            'reservation' => $reservation
        ], 201);
    }
}
