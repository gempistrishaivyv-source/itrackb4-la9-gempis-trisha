<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    private function shoes()
    {
        $path = storage_path('app/shoes.json');

        return json_decode(file_get_contents($path), true);
    }

    private function saveShoes(array $shoes)
    {
        file_put_contents(
            storage_path('app/shoes.json'),
            json_encode($shoes, JSON_PRETTY_PRINT)
        );
    }

    public function index(Request $request)
    {
        $shoes = $this->shoes();

        $category = $request->query('category', 'all');
        $brand = $request->query('brand', 'all');

        $filtered = [];

        foreach ($shoes as $item) {
            $categoryMatch = $category === 'all' || $item['category'] === $category;
            $brandMatch = $brand === 'all' || $item['brand'] === $brand;

            if ($categoryMatch && $brandMatch) {
                $filtered[] = $item;
            }
        }

        return view('shoes.index', [
            'shoes' => $filtered,
            'category' => $category,
            'brand' => $brand
        ]);
    }

    public function create()
    {
        return view('shoes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'brand' => 'required|in:Nike,Converse,Puma,Vans,ASICS,New Balance',
            'category' => 'required|in:Sneakers,Casual,Running',
            'price' => 'required|numeric|min:1'
        ]);

        $shoes = $this->shoes();

        $id = 1;

        foreach ($shoes as $item) {
            if ($item['id'] >= $id) {
                $id = $item['id'] + 1;
            }
        }

        $data['id'] = $id;

        $shoes[$id] = $data;

        $this->saveShoes($shoes);

        return redirect()->route('shoes.index')
            ->with('success', 'Shoe added successfully.');
    }

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

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $shoes = $this->shoes();

        $item = $shoes[3];

        return view('shoes.featured', [
            'item' => $item
        ]);
    }
}