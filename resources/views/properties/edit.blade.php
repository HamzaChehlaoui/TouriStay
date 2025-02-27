<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>


    <form action="{{ route('properties.update', $property->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block text-gray-700">Property Name</label>
        <input type="text" name="name" value="{{ $property->name }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <label class="block text-gray-700">Base Price (€)</label>
        <input type="number" name="base_price" value="{{ $property->base_price }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <label class="block text-gray-700">City</label>
        <input type="text" name="city" value="{{ $property->city }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <label class="block text-gray-700">Country</label>
        <input type="text" name="country" value="{{ $property->country }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <label class="block text-gray-700">Bedrooms</label>
        <input type="number" name="bedrooms" value="{{ $property->bedrooms }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <label class="block text-gray-700">Bathrooms</label>
        <input type="number" name="bathrooms" value="{{ $property->bathrooms }}" class="w-full border-gray-300 rounded-lg p-2 mb-3">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Save Changes
        </button>
    </form>

</body>
</html>
