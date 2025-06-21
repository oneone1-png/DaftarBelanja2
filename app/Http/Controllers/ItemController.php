<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
         'name' => 'required|string|unique:items|max:255',
         'quantity' => 'required|integer|min:1',
         'notes' => 'nullable|string',
       ]);
    
         Item::create($validated);
    
         return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan!');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:items,name,'.$item->id,
        'quantity' => 'required|integer|min:1',
        'notes' => 'nullable|string',
    ]);
    
    $item->update($validated);
    
    return redirect()->route('items.index')->with('success', 'Item berhasil diperbarui!');
}


    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item berhasil dihapus!');
    }
}