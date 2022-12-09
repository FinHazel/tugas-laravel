@extends('admin.index')
@section('Judul','Smartphone Samsung')
@section('Content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Produk Smartphone Samsung</h1>

    <div style="float:right;">
         <form class="" action="/cari_samsung" method="GET">
          <div class="input-group mb-3">
            <div class="input-group-prepend col-3">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
            <input type="text" name="keyword" type="search" class="form-control col-8" placeholder="Cari Product"
            aria-label="" aria-describedby="basic-addon1">
          </div>
         </form>
    </div>

    <div>
    <a href="/tambahsamsung" class="btn btn-primary">Tambah Produk Samsung</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe</th>
      <th scope="col">Harga</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($samsung as $s)
  <tbody>
    <tr>
      <th scope="row">{{$samsung->firstItem() + $loop->index}}</th>
      <td>{{$s->type}}</td>
      <td>{{$s->harga}}</td>
      <td>{{$s->spesifikasi}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="basic mixed styles example">
      <form action="/samsung/{{ $s->id }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
        <a href="/edit_samsung/{{$s->id}}" class="btn btn-warning">Edit</a>
        <a href="/lihatsamsung/{{$s->id}}" class="btn btn-success">Lihat</a>
      </form>
      </div>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
<div style="">
  {{$samsung->links()}}
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

@endsection