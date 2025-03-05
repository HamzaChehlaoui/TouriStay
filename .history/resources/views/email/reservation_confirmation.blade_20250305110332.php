<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation</title>
</head>
<body>
    <h2>Votre réservation est confirmée !</h2>
    <p>Bonjour {{ $reservation->user->name }},</p>
    <p>Votre réservation pour <strong>{{ $reservation->property->name }}</strong> est bien enregistrée.</p>
    <p>Dates: {{ $reservation->checkin }} - {{ $reservation->checkout }}</p>
    <p>Total: <strong>${{ number_format($reservation->estimated_total, 2) }}</strong></p>

    <button id="payButton" style="background-color: blue; color: white; padding: 10px; border: none; cursor: pointer;">
        Payer Maintenant avec Stripe
    </button>

    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
    <script>

    </script>
</body>
</html>
