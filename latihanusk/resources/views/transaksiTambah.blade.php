@extends('template');
@section('title', $title)
@section('content')
    <div class="container-fluid mt-2">
        <form action="{{url('/transaksi/store')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-6 text-center">
                    <label for="">Kategori</label>
                </div>
                <div class="col-4">
                    <select class="form-control form-control-sm" name="kategori" id="kategori">
                        <option value="" disabled selected>---Pilih Kategori---</option>
                        @foreach($kategori as $kt)
                        <option value="{{$kt->id_kategori}}">{{$kt->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <label for="">Barang</label>
                </div>
                <div class="col-4">
                    <select class="form-control form-control-sm" name="barang" id="barang">
                        <option value="" disabled selected>---Pilih Barang---</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
@endsection