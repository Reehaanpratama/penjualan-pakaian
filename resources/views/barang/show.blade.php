@extends('admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data barang</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.update', $barang->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                            <label for="">Masukan Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{$barang->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror" disabled>
                             @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="form-group">
                            <label for="">Nama supplier</label>
                            <select name="id_supplier" class="form-control @error('id_supplier') is-invalid @enderror" disabled>
                                @foreach($supplier as $data)
                                    <option value="{{$data->id}}">{{$data->nama_supplier}}</option>
                                @endforeach
                            </select>
                            @error('id_supplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="">Masukan Harga</label>
                                <input type="text" name="harga" value="{{$barang->harga}}" class="form-control @error('harga') is-invalid @enderror" disabled>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Stok</label>
                                <input type="text" name="stok" value="{{$barang->stok}}" class="form-control @error('stok') is-invalid @enderror" disabled>
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Warna</label>
                                <input type="text" name="warna" value="{{$barang->warna}}" class="form-control @error('warna') is-invalid @enderror" disabled>
                                @error('warna')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Ukuran</label>
                                <input type="text" name="ukuran" value="{{$barang->ukuran}}" class="form-control @error('ukuran') is-invalid @enderror" disabled>
                                @error('ukuran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="">Masukan gambar</label>
                            <br>
                            <img src="{{ $barang->image() }}" height="200" style="padding:5px;" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
