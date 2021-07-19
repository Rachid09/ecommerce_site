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

<!-- breadcrumb -->
<!-- breadcrumb -->

<!--==================== registration Form Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="woocommerce">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                <a href="{{route('seller.login')}}">Avez vous deja un compte ? Se
                                    connecter</a>
                            </p>
                            <div class="sign-in-form">
                                @include('seller.alerts.errors')
                                @include('seller.alerts.success')
                                <form class="woocommerce-form-login" action="{{route('seller.register')}}" method="post"
                                    novalidate enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Nom complet&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="full_name" id="full_name" />
                                            @error('full_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>


                                        <div class="col-lg-6">
                                            <label for="name">le nom du coperative&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text" class="form-control" name="cop_name" />
                                            @error('cop_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">le nom de la boutique&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text" class="form-control" name="store_name" id="email" />
                                            @error('store_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="name">categorie des produits&nbsp;<span
                                                    class="required">*</span></label>
                                            <select multiple name="categories[]" class="select2 form-control"
                                                style="width: 100%;">

                                                @if($maincategories && $maincategories -> count() > 0)
                                                @foreach($maincategories as $maincat)
                                                <option value="{{$maincat -> id }}">{{$maincat -> libelle}}</option>
                                                @endforeach
                                                @endif

                                            </select>
                                            @error('categories')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">N° telephone&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="mobile" id="mobile" />
                                            @error('mobile')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror </div>

                                        <div class="col-lg-6">
                                            <label for="name">Email&nbsp;<span class="required">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email" />
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Mot de pass&nbsp;<span class="required">*</span></label>
                                            <input type="password" class="form-control" name="password" id="email" />
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>

                                        <div class="col-lg-6">
                                            <label for="name">Adresse&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="address" id="email" />
                                            @error('address')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Logo du boutique&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="file" name="logo" class="form-control custom-file-input"
                                                id="inputGroupFile01">
                                            @error('logo')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                        <input type="hidden" name="active" value="0">

                                        <button type="submit"
                                            class="woocommerce-form-login__submit btn btn-primary rounded-0"
                                            name="register" value="Log in" style="margin-top: 2rem">S'inscrire</button>
                                        <p>
                                            <a href="{{route('client.register')}}" class="text-secondary">Pas de compte
                                                ? Se connecter</a>
                                        </p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Login Form Start ====================-->






@endsection
