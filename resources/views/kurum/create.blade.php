@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon/kurumlar">Kurumlar</a></span> <span>Kurum Ekle</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Kurum Ekle</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 pr-md-5">
                    <form class="form-contact contact_form" method="POST" action="{{route('kurum.index')}}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="kurumAd" id="kurumAd" placeholder="kurum Ad">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" >
                                    <div class="select-wrap">
                                        <select name="aktif" id="" class="form-control">
                                            <option value="">Aktif</option>
                                            <option value="Evet">Evet</option>
                                            <option value="Hayir">Hayir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Oluştur" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
