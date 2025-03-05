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

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.getElementById('payButton').addEventListener('click', async function () {
            const stripe = Stripe('{{ config("services.stripe.key") }}');

            const response = await fetch("{{ route('checkout') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    reservation_id: "{{ $reservation->id }}"
                })
            });

            const session = await response.json();

            stripe.redirectToCheckout({ sessionId: session.id });
        });
    </script>
</body>
</html>
