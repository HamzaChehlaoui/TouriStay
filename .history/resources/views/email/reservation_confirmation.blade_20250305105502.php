<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de réservation</title>
</head>
<body>
    <h1>Merci pour votre réservation !</h1>
    <p>Votre réservation pour <strong>{{ $reservation->property->name }}</strong> a été confirmée.</p>
    <p><strong>Date d'arrivée :</strong> {{ $reservation->checkin }}</p>
    <p><strong>Date de départ :</strong> {{ $reservation->checkout }}</p>
    <p><strong>Total payé :</strong> ${{ $reservation->estimated_total }}</p>
    <p>Contactez le propriétaire sur {{ $reservation->property->owner->email }}</p>
</body>
</html>
