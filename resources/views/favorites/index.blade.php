<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
    <div class="container">
        <h2 class="text-2xl font-bold mb-4">Your Favorite Properties</h2>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($favorites as $favorite)
                    <div class="border rounded-lg p-4 shadow-lg relative">
                        <h3 class="text-lg font-semibold">{{ $favorite->name }}</h3>
                        <p class="text-gray-600">{{ $favorite->city }}, {{ $favorite->country }}</p>
                        <p class="text-gray-700 mt-2">Price: ${{ $favorite->base_price }} per night</p>


                    </div>
                @endforeach
            </div>
    </div>
</body>
</html>
