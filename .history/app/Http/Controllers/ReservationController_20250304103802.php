namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'property_id'   => 'required|exists:properties,id',
            'checkin'       => 'required|date|after_or_equal:today',
            'checkout'      => 'required|date|after:checkin',
            'total_nights'  => 'required|integer|min:1',
            'estimated_total' => 'required|numeric|min:0',
        ]);

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
