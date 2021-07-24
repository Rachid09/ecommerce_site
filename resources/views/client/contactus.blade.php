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

<div class="full-row">
    <div class="container">

                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <h3 class="down-line mb-5">Envoyer un Message</h3>
                        <div class="form-simple mb-5">
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Nom complet</label>
                                            <input type="text" class="form-control bg-gray" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Email:</label>
                                            <input type="email" class="form-control bg-gray" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Sujet:</label>
                                            <input type="text" class="form-control bg-gray" name="subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Message:</label>
                                            <textarea class="form-control bg-gray" name="message" rows="8" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <h3 class="down-line mb-5">Contactez nous</h3>
                        <p>
Digital Solutions Group</p>
                        <div class="d-flex mb-3">
                            <ul>
                                <li class="mb-3">
                                    <strong>Office Address :</strong><br> 96, Bd d'Anfa, 6ème étage N°63
Casablanca, 20250 Morocco
                                </li>
                                <li class="mb-3">
                                    <strong>Contact Number :</strong><br> +212 (0) 6 61 44 04 14
                                </li>
                                <li class="mb-3">
                                    <strong>Email Address :</strong><br>Contact@digital-soltions.com
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--==================== Map Section Start ====================-->
        <!--==================== Contact Section End ====================-->

@endsection
