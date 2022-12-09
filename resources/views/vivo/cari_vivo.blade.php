@extends('admin.index')
@section('Judul','Smartphone Vivo')
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
    <h1>Produk Smartphone Vivo</h1>

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
  @foreach($vivo as $v)
  <tbody>
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$v->type}}</td>
      <td>{{$v->harga}}</td>
      <td>{{$v->spesifikasi}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="basic mixed styles example">
      <form action="/vivo/{{ $v->id }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
        <a href="/edit_vivo/{{$v->id}}" class="btn btn-warning">Edit</a>
        <a href="/lihatvivo/{{$v->id}}" class="btn btn-success">Lihat</a>
      </form>
      </div>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

@endsection