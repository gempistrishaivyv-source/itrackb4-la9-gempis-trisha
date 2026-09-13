<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
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

    public function index()
    {
         $shoes = $this->shoes();

        return view('shoes.index' , [
            'shoes' => $shoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
