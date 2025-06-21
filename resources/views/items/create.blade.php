@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Tambah Barang Baru</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Catatan (Opsional)</label>
            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection