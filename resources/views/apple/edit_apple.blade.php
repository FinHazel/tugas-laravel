@extends('admin.index')
@section('Judul','Edit Smartphone Apple')
@section('Content')

<h1 class="mt-3">Edit Produk Apple</h1>

<form method="post" action="/proseseditapple/{{$apple->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-1 col-5">
        <label for="type" class="form-label">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Masukkan Type" name="type" value="{{$apple->type}}" require>
    </div>
    <div class="mb-3 col-5">
        <label for="harga" class="form-label">Harga</label>
        <input class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan Harga" name="harga" value="{{$apple->harga}}" require>
    </div>
    <div class="mb-3 col-5">
        <label for="spesifikasi" class="form-label">Spesifikasi</label>
        <input class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" placeholder="Masukkan Spesifikasi" name="spesifikasi" value="{{$apple->spesifikasi}}" require>
    </div>
    <div class="form-group mb-3 col-5">
        <label for="image">Pilih Foto</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="" style="margin-left:15px;">
    <img src="/image/{{ $apple->image }}" alt="" width="90" height="90">
</div>
<br>
    <button type="submit" class="btn btn-primary" style="margin-left:15px;">Edit</button>
</form>

@endsection