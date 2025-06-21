<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Tambahkan field yang boleh diisi massal
    protected $fillable = [
        'name', 
        'quantity', 
        'notes',
        // tambahkan field lain jika ada
    ];

    // Rules untuk validasi
    public static $rules = [
        'name' => 'required|string|unique:items|max:255',
        'quantity' => 'required|integer|min:1',
        'notes' => 'nullable|string',
    ];
}