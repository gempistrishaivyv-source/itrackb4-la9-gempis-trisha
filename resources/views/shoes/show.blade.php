<!DOCTYPE html>
<html>
<head>
    <title>Shoe Details</title>
</head>
<body>

    <h1>{{ $item['name'] }}</h1>

    <p><strong>ID:</strong> {{ $item['id'] }}</p>
    <p><strong>Shoe:</strong> {{ $item['name'] }}</p>
    <p><strong>Brand:</strong> {{ $item['brand'] }}</p>
    <p><strong>Category:</strong> {{ $item['category'] }}</p>
    <p><strong>Price:</strong> ₱{{ $item['price'] }}</p>

    <p>Created by: Trisha Ivy Gempis</p>

    <a href="{{ route('shoes.index') }}">
        Back to Shoe List
    </a>

</body>
</html>