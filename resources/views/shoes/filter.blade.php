@extends('layouts.app')

@section('title', 'Shoe Filter')

@section('content')

    <h2>Shoe Collection</h2>

    <h3>Active Filter: {{ $activeFilter }}</h3>

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
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        No shoes found for this filter.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a
        class="btn btn-primary"
        href="{{ route('shoes.index') }}"
    >
        Back to Shoe List
    </a>

@endsection