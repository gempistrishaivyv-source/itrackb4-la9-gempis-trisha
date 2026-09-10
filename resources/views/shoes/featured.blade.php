@extends('layouts.app')

@section('title', 'Featured Shoe')

@section('content')

    <h2>⭐ Featured Shoe</h2>

    <div class="card">
        <div class="card-body">

            <h3>{{ $item['name'] }}</h3>

            <p>
                <strong>ID:</strong>
                {{ $item['id'] }}
            </p>

            <p>
                <strong>Shoe:</strong>
                {{ $item['name'] }}
            </p>

            <p>
                <strong>Brand:</strong>
                {{ $item['brand'] }}
            </p>

            <p>
                <strong>Category:</strong>
                {{ $item['category'] }}
            </p>

            <p>
                <strong>Price:</strong>
                ₱{{ $item['price'] }}
            </p>

            <a
                class="btn btn-primary"
                href="{{ route('shoes.index') }}"
            >
                Back to Shoe List
            </a>

        </div>
    </div>

@endsection