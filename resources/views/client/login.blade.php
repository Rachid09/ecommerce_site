@extends('layouts.client')

@section('content')

<!--==================== Login Form Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="woocommerce">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-12 mx-auto">
                            <div class="sign-in-form">
                                <h3>User Login</h3>
                                <form class="woocommerce-form-login" method="post">
                                    <p>
                                        <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="username" id="username" />
                                    </p>
                                    <p>
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="form-control" type="password" name="password" id="password" />
                                    </p>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label-for-checkbox">
                                            <input name="rememberme" type="checkbox" />
                                            <span>Remember me</span>
                                        </label>
                                        <button type="submit" class="woocommerce-form-login__submit btn btn-primary rounded-0" name="login" value="Log in">Log in</button>
                                    </p>
                                    <p>
                                        <a href="#" class="text-secondary">Lost your password?</a>
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
<!--==================== Login Form END ====================-->


@endsection