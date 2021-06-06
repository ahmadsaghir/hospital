@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon">Otomasyon</a></span> <span>Viziteler</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">viziteler</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bu sayfada Tüm vizitelerın Dosyasını Ön Görüntüleyebilirsiniz.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/otomasyon/viziteler/create" class="btn btn-primary px-4 py-3">Yeni vizite Ekle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">viziteler</h2>
                </div>
                <div class="offset-8 col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box indexsearch">
                        <form method="GET" action="{{route('vizite.search')}}" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="vizite Ara">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="row">
                @foreach($viziteler as $vizite)
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">{{$vizite->id}}</span></p>
                            <h3 class="mb-4">{{$vizite->hasta->hastaAd}} {{$vizite->hasta->hastaSad}}</h3>
                        </div>
                        <ul>
                            <li>{{$vizite->hasta->hastaTC}}</li>
                            <li>{{$vizite->poliklinik->doktor->doktorAd}} {{$vizite->poliklinik->doktor->doktorSad}}</li>
                            <li>{{$vizite->poliklinik->poliklinikAd}}</li>
                            <li>{{$vizite->oncelik->oncelikAd}}</li>
                            <li>{{$vizite->viziteTarihi}}</li>
                        </ul>
                        <p class="button text-center"><a href="/otomasyon/viziteler/{{$vizite->id}}" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
