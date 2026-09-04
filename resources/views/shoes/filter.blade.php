<!DOCTYPE html>
<html>
<head>
    <title>Shoe Filter</title>
</head>
<body>

    <h1>Shoe Collection</h1>

    <h2>Active Filter: {{ $activeFilter }}</h2>

    @if (count($shoes) > 0)

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

    @else

        <p>No shoes found for this filter.</p>

    @endif

    <br>

    <a href="{{ route('shoes.index') }}">
        Back to Shoe List
    </a>

</body>
</html>