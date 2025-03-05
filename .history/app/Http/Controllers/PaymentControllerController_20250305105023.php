<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Reservation;
use App\Models\Property;
use App\Mail\ReservationConfirmation;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'checkin' => 'required|date|after_or_equal:today',
            'checkout' => 'required|date|after:checkin',
            'total_nights' => 'required|integer|min:1',
            'estimated_total' => 'required|numeric|min:0',
            'stripeToken' => 'required'
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $request->estimated_total * 100, // Convert to cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Payment for property reservation'
            ]);

            $reservation = Reservation::create([
                'user_id' => Auth::id(),
                'property_id' => $request->property_id,
                'checkin' => $request->checkin,
                'checkout' => $request->checkout,
                'total_nights' => $request->total_nights,
                'estimated_total' => $request->estimated_total,
                'payment_status' => 'paid'
            ]);

            Mail::to(Auth::user()->email)->send(new ReservationConfirmation($reservation));

            return response()->json(['message' => 'Payment successful!', 'reservation' => $reservation], 201);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Payment failed: ' . $e->getMessage()], 500);
        }
    }
}
