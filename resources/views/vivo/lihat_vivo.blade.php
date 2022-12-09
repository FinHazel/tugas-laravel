@extends('admin.index')
@section('Judul','Tambah Smartphone Vivo')
@section('Content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Halaman Detail Vivo</h1>

            <div class="card">
                <div class="card-body">
                    <div class="">
                        <img src="/image/{{ $vivo->image }}" alt="" width="250" style="border-radius:10px;">
                    </div>
                    <h5 class="card-title">Type : {{ $vivo->type }}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">Harga : {{ $vivo->harga }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Spesifikasi : {{ $vivo->spesifikasi }}</h6>
                    <p class="card-text">Posted : {!! date('d M y', strtotime($vivo->created_at)) !!}</p>

                    <a href="/vivo" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>

@endsection