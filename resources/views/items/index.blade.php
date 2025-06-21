@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Barang Belanja</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->notes ?? '-' }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection