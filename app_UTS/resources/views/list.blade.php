@extends('app')

@section('content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-3">{{ $pageTitle }}</h4>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>Name Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listbarangdb as $listbarang)
                    <tr>
                        <td>{{ $listbarang->name_barang }}</td>
                        <td>{{ $listbarang->deskripsi }}</td>
                        <td>{{ $listbarang->harga }}</td>
                        <td>{{ $listbarang->stok }}</td>
                        <td>{{ $listbarang->satuan->name}}</td>
                        <td>@include('menu')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
