<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Property</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-blue-500">Edit Property</h1>

        <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Basic Information</h2>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Property Name</label>
                    <input type="text" name="name" value="{{ $property->name }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Base Price (€)</label>
                    <input type="number" name="base_price" value="{{ $property->base_price }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">City</label>
                    <input type="text" name="city" value="{{ $property->city }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Country</label>
                    <input type="text" name="country" value="{{ $property->country }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Property Photos</h2>

                @if ($property->photos)
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-4">
                        @foreach ($property->photos as $photo)
                            <div class="relative group">
                                <img src="{{ asset('storage/' . $photo) }}" alt="Property Image" class="w-full h-32 object-cover rounded-lg shadow-sm">
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="mt-4 mb-6 p-4 border border-dashed border-gray-300 rounded-lg bg-gray-50">
                    <label for="photos" class="block text-gray-700 font-medium mb-2">Upload New Images:</label>
                    <input type="file" name="photos[]" id="photos" accept="image/*" multiple class="w-full text-gray-700">
                    <p class="text-sm text-gray-500 mt-1">You can select multiple images</p>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Property Details</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Bedrooms</label>
                        <input type="number" name="bedrooms" value="{{ $property->bedrooms }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Bathrooms</label>
                        <input type="number" name="bathrooms" value="{{ $property->bathrooms }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</body>
</html>
