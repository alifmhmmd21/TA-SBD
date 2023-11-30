@extends('layout.v_template')
@section('title' , 'Edit Barang')

@section('content')

<form action="/barang/update/{{ $barang->id_barang }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" >
                        <div class="text-danger">
                            @error('nama_barang')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" class="form-control" value="{{ $barang->harga }}">
                        <div class="text-danger">
                            @error('harga')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input name="deskripsi" class="form-control" value="{{ $barang->deskripsi }}">
                        <div class="text-danger">
                            @error('deskripsi')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input name="stok" class="form-control" value="{{ $barang->stok }}">
                        <div class="text-danger">
                            @error('stok')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection