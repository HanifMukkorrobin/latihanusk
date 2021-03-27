@extends('template');
@section('title', $title)
@section('content')
    <div class="container-fluid mt-2">
        <a href="{{action('TransaksiController@create')}}" class="btn btn-primary btn-md">Tambah Transaksi</a>
        <table class="table table-hover table-bordered text-center mt-2">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Bayar</th>
                <th scope="col">Nama Kasir</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach($data as $tr)
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$tr->id_transaksi}}</th>
                    <th>{{date('d F Y H.i', strtotime($tr->tgl_transaksi))}}</th>
                    <th>{{$tr->getBarang->nama_barang}}</th>
                    <th>{{$tr->qty}}</th>
                    <th>{{$tr->total_bayar}}</th>
                    <th>{{$tr->getPengguna->username}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection