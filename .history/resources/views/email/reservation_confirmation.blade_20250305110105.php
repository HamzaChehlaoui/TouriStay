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

        document.getElementById("payButton").addEventListener("click", function () {
        let stripe = Stripe("{{ env('STRIPE_KEY') }}");
        let checkoutData = {
            property_id: document.getElementById("modalPropertyId").value,
            checkin: document.getElementById("checkin").value,
            checkout: document.getElementById("checkout").value,
            total_nights: document.getElementById("totalNights").textContent,
            estimated_total: document.getElementById("estimatedTotal").textContent.replace("$", ""),
            stripeToken: null
        };

        stripe.createToken('card').then(function (result) {
            if (result.error) {
                alert(result.error.message);
            } else {
                checkoutData.stripeToken = result.token.id;
                fetch("{{ route('payment.process') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(checkoutData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        alert(data.message);
                        window.location.reload();
                    } else {
                        alert(data.error);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
