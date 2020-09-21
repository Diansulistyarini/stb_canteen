@extends('layouts/main')

@section('title', 'Add Foods Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Tambah Menu</h6>
        </div>
        <div class="card-body">
            <form class=" form-signin" action="/makanan" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" id="nama_makanan"
                        placeholder="Masukan Nama Menu" name="nama_makanan" value="{{ old('nama_makanan') }}">
                    @error('nama_makanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control @error('harga_makanan') is-invalid @enderror" id="harga_makanan"
                        placeholder="Masukan Harga" name="harga_makanan" value="{{ old('harga_makanan') }}">
                    @error('harga_makanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="stok">Stok Menu</label>
                    <input type="number" class="form-control @error('qty_makanan') is-invalid @enderror" id="qty_makanan"
                        placeholder="Masukan Stok Menu" name="qty_makanan" value="{{ old('qty_makanan') }}">
                    @error('qty_makanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Menu</label>
                    <input type="file" @error('gambar_makanan') is-invalid @enderror id="gambar_makanan"
                        placeholder="Masukan Stok Menu" name="gambar_makanan" value="{{ old('gambar_makanan') }}">
                    @error('gambar_makanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-small btn-success btn-block" type="submit"><i
                        class="far fa-save"></i><span class="ml-2">Save Changes</span></button>
            </form>
        </div>
    </div>
    <a href="/makanan" class="text-danger float-right">
        <button type="button" class="btn btn-primary"><i class="fas fa-arrow-left"><span class="ml-2">Back</span></i></button>
    </a>
</div>
<!-- container-fluid -->
@endsection