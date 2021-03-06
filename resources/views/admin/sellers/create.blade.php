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
                            <li class="breadcrumb-item"><a href="{{route('admin.sellers')}}">Les vendeurs </a>
                            </li>
                            <li class="breadcrumb-item active"> Ajouter vendeur
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
                                {{-- <h4 class="card-title" id="basic-layout-form"> إضافة تاجر </h4> --}}
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
                                    <form class="form" action="{{route('admin.sellers.store')}}" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <label>  L'image </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="logo">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('logo')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>Les informaion du vendeur</h4>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Nom complete</label>
                                                        <input type="text" value="" id="name" class="form-control" placeholder="  " name="full_name">
                                                        @error("full_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                  <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Nom du coperative </label>
                                                        <input type="text" value="" id="name" class="form-control" placeholder="  " name="cop_name">
                                                        @error("cop_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Nom du boutique </label>
                                                        <input type="text" value="" id="name" class="form-control" placeholder="  " name="store_name">
                                                        @error("store_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Nom du boutique  </label>
                                                        <input type="text" id="mobile" class="form-control" placeholder="  " name="mobile">

                                                        @error("mobile")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> Choisissez les catégories des produits  </label>
                                                        <select name="categories[]" class="select2 form-control" multiple>
                                                            <optgroup label="">
                                                                @if($categories && $categories -> count() > 0)
                                                                @foreach($categories as $category)
                                                                <option value="{{$category -> id }}">{{$category -> libelle}}</option>
                                                                @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                        @error('categories')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Email </label>
                                                        <input type="text" id="email" class="form-control" placeholder="  " name="email">

                                                        @error("email")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="class col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Mot de pass </label>
                                                        <input type="password" id="password" class="form-control" placeholder="  " name="password">

                                                        @error("password")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>

                                                </div>


                                            </div>


                                            <di class="row">
                                                <div class="col-12 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Adresse </label>
                                                        <input type="text" id="pac-input" class="form-control" placeholder="  " name="address">

                                                        @error("address")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </di>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1" name="active" id="switcheryColor4" class="switchery" data-color="success" checked />
                                                        <label for="switcheryColor4" class="card-title ml-1">Status </label>

                                                        @error("active")
                                                        <span class="text-danger"> </span>
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
