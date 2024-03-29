@extends('layout')

@section('content')
    <section class="home-slider owl-carousel">
        <div  class="slider-item bread-item" style="background-image: url({{url('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/otomasyon/hastalar">Hastalar</a></span> <span>Hasta Ekle</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Hasta Ekle</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 pr-md-5">
                    <form class="form-contact contact_form" method="POST" action="{{route('hasta.index')}}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="hastaTC" id="hastaTC" placeholder="Hasta TC Kimlik No">                                </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="hastaTel" id="hastaTel" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="hastaAd" id="hastaAd" placeholder="Hasta Adı">                                </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="hastaSad" id="hastaSad" placeholder="Hasta Soyadı">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <select name="kurumID" id="kurumID" class="form-control">
                                            <option value="">Kurum</option>
                                            @foreach($kurumlar ?? '' as $kurum)
                                                <option value="{{$kurum->id}}">{{$kurum->kurumAd}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <select name="hastaTipiID" id="hastaTipiID" class="form-control">
                                            <option value="">Hasta Tipi</option>
                                            @foreach($hastaTipleri ?? '' as $hastaTipi)
                                                <option value="{{$hastaTipi->id}}">{{$hastaTipi->hastaTipiAd}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_date" name="dogumTarihi" id="dogumTarihi" placeholder="Doğum Tarih">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <input type="text" class="form-control" name="dogumYeri" placeholder="Doğum Yeri">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <select name="cinsiyet" id="cinsiyet" class="form-control">
                                            <option value="">Cinsiyet</option>
                                            <option value="Erkek">Erkek</option>
                                            <option value="Kız">Kız</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" >
                                    <div class="select-wrap">
                                        <select name="medeniHal" id="medeniHal" class="form-control">
                                            <option value="">Medeni Hal</option>
                                            <option value="Bekar">Bekar</option>
                                            <option value="Evli">Evli</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="adres" id="adres" placeholder="Adres">
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
