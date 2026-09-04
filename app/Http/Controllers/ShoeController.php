<?php

namespace App\Http\Controllers;

class ShoeController extends Controller
{
    public function index()
    {
        $shoes = $this->shoes();

        return view('shoes.index', [
            'shoes' => $shoes
        ]);
    }

    public function show($id)
    {
        $shoes = $this->shoes();

        if (!isset($shoes[$id])) {
            abort(404);
        }

        $item = $shoes[$id];

        return view('shoes.show', [
            'item' => $item
        ]);
    }

    public function featured()
    {
        $shoes = $this->shoes();

        $item = $shoes[3];

        return view('shoes.featured', [
            'item' => $item
        ]);
    }

    public function filter($value = null)
    {
        $shoes = $this->shoes();

        if ($value === null) {
            return view('shoes.filter', [
                'shoes' => $shoes,
                'activeFilter' => 'All'
            ]);
        }

        $filtered = [];

        foreach ($shoes as $item) {
            if ($item['category'] === $value) {
                $filtered[] = $item;
            }
        }

        return view('shoes.filter', [
            'shoes' => $filtered,
            'activeFilter' => $value
        ]);
    }

    private function shoes()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Air Force 1',
                'brand' => 'Nike',
                'category' => 'Sneakers',
                'price' => 5495,
            ],

            2 => [
                'id' => 2,
                'name' => 'Chuck Taylor All Star',
                'brand' => 'Converse',
                'category' => 'Casual',
                'price' => 3990,
            ],

            3 => [
                'id' => 3,
                'name' => 'Suede Classic',
                'brand' => 'Puma',
                'category' => 'Sneakers',
                'price' => 4200,
            ],

            4 => [
                'id' => 4,
                'name' => 'Old Skool',
                'brand' => 'Vans',
                'category' => 'Casual',
                'price' => 3995,
            ],

            5 => [
                'id' => 5,
                'name' => 'Gel-Kayano 30',
                'brand' => 'ASICS',
                'category' => 'Running',
                'price' => 8990,
            ],

            6 => [
                'id' => 6,
                'name' => '574 Core',
                'brand' => 'New Balance',
                'category' => 'Running',
                'price' => 5995,
            ],
        ];
    }
}