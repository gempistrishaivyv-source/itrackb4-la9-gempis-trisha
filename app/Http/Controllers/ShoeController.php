<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index(Request $request)
    {
        $shoes = Shoe::all();

        $category = $request->query('category', 'all');
        $brand = $request->query('brand', 'all');

        return view('shoes.index', compact('shoes', 'category', 'brand'));
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

        Shoe::create($data);

        return redirect()->route('shoes.index')
            ->with('success', 'Shoe added successfully.');
    }

    public function show(string $id)
    {
        $shoe = Shoe::findOrFail($id);

        return view('shoes.show', ['item' => $shoe]);
    }

    public function featured()
    {
        $item = Shoe::findOrFail(3);

        return view('shoes.featured', ['item' => $item]);
    }
}