@extends('frontend.template')
@section('judul','Halaman Apple')

@section('isi')
<div class="container-fluid mt-2 mv-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Product Apple</span>
            </div>
            <form class="" action="/carifapple" method="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend col-1">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                    <input type="text" name="keyword" type="search" class="form-control col-3" placeholder="Cari Product"
                    aria-label="" aria-describedby="basic-addon1">
                </div>
            </form>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($fapple as $fa)
            <div class="col-md-4">
                <div class="card"> <img class="gambar" src="/image/{{ $fa->image }}" class="card-img-top">
                <div class="card-body">
                    <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{ $fa->type }}</span> <span class="font-weight-bold">{{ $fa->harga }}</span>
                    </div>
                    <p class="cad-ext mb-1 mt-1">{{ $fa->spesifikasi }}</p>
                    <div class="d-flex align-items-center flex-row"> <img src="{{asset('images/icon.png')}}" width="20"> <span class="guarantee"></span>
                </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="text-right buttons"> <button class="btn btn-outline-dark">add to wishlist</button> <button class="btn btn-dark">add to cart</button>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div style="">
    {{$fapple->links()}}
</div>
@endsection