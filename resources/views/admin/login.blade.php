@extends('layouts.adminLogin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                       <svg width="125px" height="70px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1302.28 300.7">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e6ab67;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path
                                            d="M450.71,167.45q28-28,28-67.78,0-39.36-28-67.55-23.41-23.41-57-28h-76.9v293h16.59V195.64h54.71l65.29,101.54h20.31L406.14,192.94Q431.22,186.94,450.71,167.45Zm-67.57,11.4H333.41V20.92h49.73q32.53,0,55.76,23t23.21,55.74q0,33-23.21,56.07T383.14,178.85Z" />
                                        <path class="cls-1"
                                            d="M1258.23,44q-44-44-106.4-44-62.19,0-106.21,44t-44,106.22q0,62.38,44,106.42t106.21,44q62.36,0,106.4-44t44-106.42Q1302.28,88.09,1258.23,44Zm-11.92,200.72q-39.16,39.18-94.48,39.16-55.14,0-94.3-39.16t-39.15-94.5q0-55.11,39.15-94.31t94.3-39.15q55.31,0,94.48,39.15t39.18,94.31Q1285.49,205.58,1246.31,244.75Z" />
                                        <polygon
                                            points="591.1 142.47 591.1 158.85 551.05 158.85 551.05 297.18 534.67 297.18 534.67 158.85 494.62 158.85 494.62 142.47 534.67 142.47 534.67 4.16 551.05 4.16 551.05 142.47 591.1 142.47" />
                                        <polygon
                                            points="663.9 20.51 663.9 280.8 703.96 280.8 703.96 297.18 607.47 297.18 607.47 280.8 647.52 280.8 647.52 20.51 607.47 20.51 607.47 4.13 703.96 4.13 703.96 20.51 663.9 20.51" />
                                        <path class="cls-1"
                                            d="M938,180.9a47.29,47.29,0,0,0-14.48,92.3,131.18,131.18,0,0,1-53.12,10.71q-55.11,0-94.2-39t-39-94.3q0-55.11,39-94.07t94.2-39A131.13,131.13,0,0,1,922.64,28,47.29,47.29,0,1,0,971.29,39.8l-.2-.21c-1.7-1.54-3.42-3-5.16-4.52,0,0-.1-.08-.16-.1Q924.69.62,870.37.62q-62.39,0-106.22,44t-43.82,106q0,62.39,43.82,106.21T870.37,300.7q55.33,0,96.92-35.43c1.18-1,2.36-2.06,3.54-3.11a3.05,3.05,0,0,0,.44-.44A47.26,47.26,0,0,0,938,180.9ZM953.68,46.78c.52.31,1,.64,1.49,1a34.65,34.65,0,0,1,3.47,2.88l.2.21a30.41,30.41,0,1,1-5.16-4.06Zm1.18,207a30.64,30.64,0,1,1,4-3.11A30.5,30.5,0,0,1,954.86,253.79Z" />
                                        <path
                                            d="M265.68,200.65,194.38,4.16h-17L124.29,148.89q-45.72,7.43-80.26,42Q0,234.93,0,297.08v.1H16.79v-.1q0-55.11,39.15-94.3,27-27,61.55-35.36L69.83,297.18H87.45l48.78-132.89q6.86-.66,14-.67,55.31,0,94.48,39.16l.07.07a43.26,43.26,0,0,1,10,15.86l28.51,78.47H300.7ZM150.25,146.83c-2.6,0-5.14,0-7.68.18L185.88,29l53.25,146.63Q200.7,146.83,150.25,146.83Z" />
                                    </g>
                                </g>
                            </svg>

                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>Connexion Admin </span>
                                </h6>
                            </div>

                            @include('admin.includes.alerts.errors')
                            @include('admin.includes.alerts.success')

                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" action="{{route('admin.login')}}" method="post" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" name="email" class="form-control form-control-lg input-lg" value="" id="email" placeholder="Entrez votre email ">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror



                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Entrer votre mot de pass">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" name="remember_me" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> se souvenir de moi</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <button type="submit" style="border:unset !important" name="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                                            Entrer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


@endsection
