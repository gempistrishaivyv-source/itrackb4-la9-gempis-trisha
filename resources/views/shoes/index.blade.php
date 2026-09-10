@extends('layouts.app')

@section('title', 'Shoe Collection')

@section('content')

    <h2>Shoe List</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Shoe</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($shoes as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item['id'] }}</td>

                    <td>
                        <a href="{{ route('shoes.show', $item['id']) }}">
                            {{ $item['name'] }}
                        </a>
                    </td>

                    <td>{{ $item['brand'] }}</td>

                    <td>{{ $item['category'] }}</td>

                    <td>
                        ₱{{ $item['price'] }}

                        @if ($item['price'] >= 8000)
                            <span class="badge bg-primary">Premium</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        No shoes are available in the collection.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection