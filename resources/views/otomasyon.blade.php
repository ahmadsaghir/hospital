@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Ana Sayfa</a></span> <span>Otomasyon</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Otomasyon</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bu sayfada Tüm Dosyaları Göstermektedir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Otomasyon</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-3 ftco-animate">
                        <div class="pricing-entry pb-5 text-center">
                            <div>
                                <p><span class="price">Unvanlar</span></p>
                            </div>
                            <p class="button text-center"><a href="/otomasyon/unvanlar" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                        </div>
                    </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Doktorlar</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/doktorlar" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Poliklinikler</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/poliklinikler" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Kurumlar</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/kurumlar" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Hasta Tipleri</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/hastaTipleri" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Öncelikler</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/oncelikler" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Hastalar</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/hastalar" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Viziteler</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/viziteler" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price">Randevular</span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/Randevular" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price"></span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price"></span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <p><span class="price"> </span></p>
                        </div>
                        <p class="button text-center"><a href="/otomasyon/" class="btn btn-primary btn-outline-primary px-4 py-3">Görüntele</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
