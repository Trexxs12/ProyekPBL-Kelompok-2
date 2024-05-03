@extends('layouts.list')

@section('title', 'ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @php
        // Contoh array data
        $data = [
            ['id' => 1, 'product' => 'Produk A'],
            ['id' => 2, 'product' => 'Produk B'],
            ['id' => 3, 'product' => 'Produk C'],
            // dan seterusnya
        ];
        @endphp

        @foreach($data as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['product'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection