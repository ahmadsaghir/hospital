@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon">Otomasyon</a></span> <span>Unvanlar</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">unvanlar</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bu sayfada Tüm unvanların Dosyasını Ön Görüntüleyebilirsiniz.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="/otomasyon/unvanlar/create" class="btn btn-primary px-4 py-3">Yeni Unvan Ekle</a></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Unvanlar</h2>
                </div>
            </div>
            <div class="row">
                @foreach($unvanlar as $unvan)
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">{{$unvan->unvanID}}</span></p>
                            <h3 class="mb-4">{{$unvan->unvanAd}}</h3>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/unvanlar/{{$unvan->id}}" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{ $unvanlar -> links() }}
@endsection
