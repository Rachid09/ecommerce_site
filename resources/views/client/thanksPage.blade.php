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
@section('content')
<div class="full-row">
    <div class="container">
        <div class="row mr-2 ml-2">
        </div>
        <div class="row">

            <div  style="display: grid;place-items:center">
                <img src="{{asset('public/images/empty-cart.png')}}" alt="" srcset="">
                <h2>Merci cher client</h2>
                <p>Votre commande a bien été enregistrer</p>
                <a href="{{route('shop.all-products')}}"
                    class="woocommerce-form-login__submit btn btn-primary rounded-0">recommencez vos achat</a>
            </div>
        </div>
    </div>
</div>



@endsection
