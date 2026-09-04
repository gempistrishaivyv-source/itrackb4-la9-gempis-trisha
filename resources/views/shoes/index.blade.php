<!DOCTYPE html>
<html>
<head>
    <title>Shoe Collection</title>
</head>
<body>

    <h1>My Shoe Collection</h1>

    <p>Created by: Trisha Ivy Gempis</p>

    <p>
        <a href="{{ route('shoes.featured') }}">
            ⭐ View Featured Shoe
        </a>
    </p>

    <p>
        <a href="{{ route('shoes.filter') }}">
            View All Shoes
        </a>
    </p>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Shoe</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Price</th>
        </tr>

        @foreach ($shoes as $item)
            <tr>
                <td>{{ $item['id'] }}</td>

                <td>
                    <a href="{{ route('shoes.show', $item['id']) }}">
                        {{ $item['name'] }}
                    </a>
                </td>

                <td>{{ $item['brand'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>₱{{ $item['price'] }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>