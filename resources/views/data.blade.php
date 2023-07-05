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
                <th style="width: 150px; text-align: center">Ket</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($datas as $data)
                {{-- @php
                    $rp = 'Rp. ' . number_format($data->harga, 0, ',', '.');
                @endphp --}}
                <tr>
                    <td style="text-align: center">{{ $i++ }}</td>
                    <td style="text-align: center">{{ $data->id_produk }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->status }}</td>
                    <td style="text-align: center">
                        <div class="col">
                            <button data-href="/edit-product/{{ $data->id }}" data-toggle="modal"
                                data-target="#popupModal" class="btn btn-warning">Edit</button>
                            <button data-href="/delete/{{ $data->id }}" data-toggle="modal" data-target="#popupModal"
                                class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
