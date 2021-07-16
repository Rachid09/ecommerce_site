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
        <!--==================== Registration Form Start ====================-->
        {{-- <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="woocommerce">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="registration-form">
                                        <h3>S'inscrire </h3>
                                        <form method="post">
                                        <div class="col-lg-6 col-md-12 ">
                                            <p>
                                                <label for="reg_email">Username &nbsp;<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="name" id="" />
                                            </p>
                                            </div>
                                        <div class="col-lg-6 col-md-12 ">
                                            <p>
                                                <label for="reg_email">Adresse email &nbsp;<span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" id="reg_email" />
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 ">
                                            <p>
                                                <label for="reg_email">Mot de passe&nbsp;<span class="required">*</span></label>
                                                <input type="password" class="form-control" name="password" id="" />
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 ">
                                            <p>
                                                <label for="name">Retappez le mot de passe &nbsp;<span class="required">*</span></label>
                                                <input type="password" class="form-control" name= "secondpassword" id="name" />
                                            </p>
                                        </div>

                                            <p>
                                                <button type="submit" class="btn btn-primary rounded-0" name="register" value="Register">S'inscrire</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--==================== Registration Form Start ====================-->


    <div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="woocommerce">
                    <div class="row">
                        <div class="col-12">
                            <div class="sign-in-form">
                                 @include('client.alerts.errors')
                                @include('client.alerts.success')
                                <form class="woocommerce-form-login" action="{{route('client.register')}}" method="post"
                                    novalidate enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Prenom&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" />
                                            @error('first_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>


                                        <div class="col-lg-6">
                                            <label for="name">Nom&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text" class="form-control" name="last_name" />
                                            @error('last_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                         </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">N° tele&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text" class="form-control" name="phone" id="email" />
                                            @error('phone')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                         <div class="col-lg-6">
                                            <label for="name">Email&nbsp;<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="email" id="email" />
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror </div>


                                    </div>
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <label for="name">Mot de pass&nbsp;<span class="required">*</span></label>
                                            <input type="password" class="form-control" name="password" id="password" />
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</div>

                                            <div class="col-lg-6">
                                                <label for="name">Adresse&nbsp;<span class="required"></span></label>
                                                <input type="text" class="form-control" name="adresse" id="adresse" />
                                            @error('adresse')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror</div>
                                                <button type="submit" class="woocommerce-form-login__submit btn btn-primary rounded-0" style="margin-top: 3rem" name="register" value="Log in">S'inscrire</button>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
