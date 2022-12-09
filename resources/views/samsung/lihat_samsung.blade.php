@extends('admin.index')
@section('Judul','Tambah Smartphone Samsung')
@section('Content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Halaman Detail Samsung</h1>

            <div class="card">
                <div class="card-body">
                    <div class="">
                        <img src="/image/{{ $samsung->image }}" alt="" width="250" style="border-radius:10px;">
                    </div>
                    <h5 class="card-title">Type : {{ $samsung->type }}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">Harga : {{ $samsung->harga }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Spesifikasi : {{ $samsung->spesifikasi }}</h6>
                    <p class="card-text">Posted : {!! date('d M y', strtotime($samsung->created_at)) !!}</p>

                    <a href="/smartphone" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>

@endsection