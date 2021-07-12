@extends('layouts.client')

@section('content')
        <div class="full-row bg-light py-5">
            <div class="container">
                <div class="row text-secondary">
                    <div class="col-sm-6">
                        <h3 class="mb-2 text-secondary">Mon Compte</h3>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="d-flex justify-content-sm-end align-items-center h-100">
                            <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i>Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mon Compte</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!--==================== Login Form Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="woocommerce">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                                     @include('client.alerts.errors')
                                     @include('client.alerts.success')
                                    <div class="sign-in-form">
                                        <h3>User Login</h3>
                                        <form class="woocommerce-form-login" action="{{route('client.login')}}" method="post" novalidate>
                                            @csrf
                                            <p>
                                                <label for="username">Username ou adresse email&nbsp;<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="email" id="email" /> </p>
                                            <p>
                                                <label for="password">Mot de passe&nbsp;<span class="required">*</span></label>
                                                <input class="form-control" type="password" name="password" id="password" />
                                            </p>
                                            <p class="form-row">
                                                <label class="woocommerce-form__label-for-checkbox">
                                                    <input name="remember_me" type="checkbox" />
                                                    <span>Se souvenir de moi</span>
                                                </label>
                                                <button type="submit" class="woocommerce-form-login__submit btn btn-primary rounded-0" name="login" value="Log in">Log in</button>
                                            </p>
                                            <p>
                                                <a href="#" class="text-secondary">Mot de passe oublié?</a>
                                            </p>
                                            <p>
                                                <a href="{{route('client.register')}}" class="text-secondary">Pas de compte ? inscrivez vous</a>
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
