@extends('layout.v_template')
@section('title' , 'Edit Pelanggan')

@section('content')

<form action="/pelanggan/update/{{ $pelanggan->id_pelanggan }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama_pelanggan" class="form-control" value="{{ $pelanggan->nama_pelanggan }}" >
                        <div class="text-danger">
                            @error('nama_pelanggan')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" value="{{ $pelanggan->alamat }}">
                        <div class="text-danger">
                            @error('alamat')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input name="nomor_telepon" class="form-control" value="{{ $pelanggan->nomor_telepon }}">
                        <div class="text-danger">
                            @error('nomor_telepon')
                                    {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control" value="{{ $pelanggan->email }}">
                        <div class="text-danger">
                            @error('email')
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