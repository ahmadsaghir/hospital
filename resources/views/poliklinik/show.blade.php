@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image:  url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon/poliklinikler">Poliklinikler</a></span> <span>{{$poliklinik->poliklinikAd}}</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">{{$poliklinik->poliklinikAd}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry">
                                <div class="text d-flex py-4">
                                    <div class="meta mb-3">
                                        <div><a>{{ $poliklinik->updated_at->format('M')}}. {{ $poliklinik->updated_at->format('d')}}, {{ $poliklinik->updated_at->format('Y')}}</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <div class="desc pl-sm-3 pl-md-5">
                                        <h3 class="heading">{{$poliklinik->poliklinikAd}}</h3>
                                        <p>Doktor :{{$poliklinik->doktor->doktorAd}} {{$poliklinik->doktor->doktorSad}}</p>
                                        <p>Aktif : {{$poliklinik->aktif}}</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <p><a href=/otomasyon/poliklinikler/{{$poliklinik->id}}/edit class="btn btn-primary btn-outline-primary">Düzenle</a></p>
                                            </div>
                                            <div class="col-2">
                                                <p><a href="{{route('poliklinik.delete',$poliklinik->id)}}" class="btn btn-primary btn-outline-primary">Sil</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form method="GET" action="{{ route('poliklinik.search') }}" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="Poliklinik Ara">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
