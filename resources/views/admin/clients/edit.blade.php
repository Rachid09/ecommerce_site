@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.clients')}}">List des Clients </a>
                            </li>
                            <li class="breadcrumb-item active">Modifier Client
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Modification </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{route('admin.clients.update',$client -> id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="id" value="{{$client -> id}}">

                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> Les informations du client </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Nom  </label>
                                                        <input type="text" value="{{$client -> first_name}}" id="name" class="form-control" placeholder="  " name="first_name">
                                                        @error("first_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  Prènom  </label>
                                                        <input type="text" value="{{$client -> last_name}}" id="name" class="form-control" placeholder="  " name="last_name">
                                                        @error("last_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="row">

                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Tèlèphone </label>
                                                        <input type="text" id="mobile" class="form-control" placeholder="  " name="phone" value="{{$client -> phone}}">

                                                        @error("phone")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                  <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Email </label>
                                                        <input type="text" id="mobile" class="form-control" placeholder="  " name="email" value="{{$client -> email}}">

                                                        @error("email")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>




                                            </div>


                                            <div class="row">
                                                <div class="class col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Mot de pass </label>
                                                        <input type="password" id="password" class="form-control" placeholder="  " name="password">

                                                        @error("password")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Adresse </label>
                                                        <input type="text" id="pac-input" class="form-control" placeholder="  " name="adresse" value="{{$client -> adresse}}">

                                                        @error("adresse")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>

                                        </div>




                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                                <i class="ft-x"></i> Annuler
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Enregistrer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>

@endsection
