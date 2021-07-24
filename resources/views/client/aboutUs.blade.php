@extends('layouts.client')
@section('custom-css')
<link rel="stylesheet" href="{{asset("public/css/category/minimal.css")}}">
@endsection
@section('top-header')
@include('client.includes.shopTopHeader')
@endsection
@section('bottom-header')
@endsection
@section('mobile-header')
@include('client.includes.shopMobileHeader')
@endsection
@section('breadcrumb')
@include('client.includes.breadcrumb',['title'=>$title])
@endsection
@section('content')



<!--==================== About Owner Section Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <span class="h6 text-primary">Notre Entreprise</span>
                <h3 class="text-dark down-line-primary mb-4">Description</h3>
                <p>« Digital Solutions »,  est une agence digital
                    création de sites internet, sites eCommerce ou applications mobiles pour leurs clients. Cependant,
                    la tendance est à la spécialisation pour atteindre une expertise, Notre agence se tournent vers
                    l’acquisition de trafic, la création de contenus, la création de sites web, d’applications mobiles,
                    ou bien de site eCommerce.</p>

            </div>
            <div class="col-lg-5 col-md-12 sm-mx-none">
                <img class="sm-mb-30" src="{{asset('public/images/Digital-Solutions-Logo-1.png')}}" alt="Image not found!">
            </div>
        </div>
    </div>
</div>



<div class="full-row bg-secondary" style="padding-bottom: 100px">
    <div class="container position-relative z-index-1">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <span class="h5 text-center text-white d-table w-50 mx-auto">Jetez un œil à notre
 services</span>
                <h3 class="text-white down-line-white mb-4 text-center w-75 mx-auto w-sm-100 text-center">Services</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex my-3">
                    <div class="pe-3 text-light text-end">
                        <h4 class="mb-3"><a class="text-light" href="service.html">Communication digitale</a></h4>
                        <p>Fusce nec tortor velit ante sagittis nunc malesuada. Lectus malesuada fringilla fames fames
                            fermentum curabitur, duis fusce varius.</p>
                    </div>
                    <span class="d-table py-1"><i class="far fa-dot-circle text-primary"></i></span>
                </div>
                <div class="d-flex my-3">
                    <div class="pe-3 text-light text-end">
                        <h4 class="mb-3"><a class="text-light" href="service.html"> création des site vitrine et e-commerce</a></h4>
                        <p>Fusce nec tortor velit ante sagittis nunc malesuada. Lectus malesuada fringilla fames fames
                            fermentum curabitur, duis fusce varius.</p>
                    </div>
                    <span class="d-table py-1"><i class="far fa-dot-circle text-primary"></i></span>
                </div>
            </div>
            <div class="col-lg-3 mx-auto sm-mx-none">
                <img class="y-center position-relative" src="{{asset('public/images/service-check.png')}}" alt="Image not found!">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex my-3">
                    <span class="d-table py-1"><i class="far fa-dot-circle text-primary"></i></span>
                    <div class="ps-3 text-light text-left">
                        <h4 class="mb-3"><a class="text-light" href="service.html">Rédaction de contenus optimisés SEO</a></h4>
                        <p>Fusce nec tortor velit ante sagittis nunc malesuada. Lectus malesuada fringilla fames fames
                            fermentum curabitur, duis fusce varius.</p>
                    </div>
                </div>
                <div class="d-flex my-3">
                    <span class="d-table py-1"><i class="far fa-dot-circle text-primary"></i></span>
                    <div class="ps-3 text-light text-left">
                        <h4 class="mb-3"><a class="text-light" href="service.html"> Webdesign (UX & UI Design)</a></h4>
                        <p>Fusce nec tortor velit ante sagittis nunc malesuada. Lectus malesuada fringilla fames fames
                            fermentum curabitur, duis fusce varius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--==================== About Owner Section End ====================-->


@endsection
