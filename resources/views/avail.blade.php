@extends('home')
@section('content')
    <table id="produkTable" class="table data-table">
        <thead>
            <tr>
                <th style="text-align: center">No.</th>
                <th style="text-align: center">ID Produk</th>
                <th style="text-align: center">Nama Produk</th>
                <th style="width: 150px; text-align: center">Harga</th>
                <th style="width: 250px; text-align: center">Kategori</th>
                <th style="width: 150px; text-align: center">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($datas as $data)
                {{-- @php
                    $rp = 'Rp. ' . number_format($data->harga, 2, ',', '.');
                @endphp --}}
                <tr>
                    <td style="text-align: center">{{ $i++ }}</td>
                    <td style="text-align: center">{{ $data->id_produk }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
