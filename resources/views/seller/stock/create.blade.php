@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}">Tableau de bord </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('seller.products')}}">List des produits  </a>
                            </li>
                            <li class="breadcrumb-item active"> Ajouter un produit
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
                                <h4 class="card-title" id="basic-layout-form">  Ajout d'un produit </h4>
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
                            @include('seller.includes.alerts.success')
                            @include('seller.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{route('seller.product.store')}}" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <input type="hidden" name="seller_id" value="{{$id = Auth::user()->id}}">
                                        <div class="form-group">
                                            <label> l'image du produit </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="main_image">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('main_image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> Les details du produit </h4>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> nom du produit </label>
                                                        <input type="text" value="" id="name" class="form-control" placeholder="  " name="name">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> choisir la categorie
                                                        </label>
                                                        <div class="form-group">
                                                            <select  name="maincategory_id" id="maincategory_id"
                                                                class="jui-select-default form-control">
                                                                {{-- <option value="">choisir</option> --}}
                                                                @if(!empty($categories)> 0)
                                                                @foreach($categories as $category)
                                                                <option value="{{$category -> id }}">
                                                                    {{$category -> libelle}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>


                                                        @error('maincategory_id')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> le code du produit  </label>
                                                        <input type="text" id="code" class="form-control" placeholder="  " name="code">

                                                        @error("code")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> le prix du produit  </label>
                                                        <input type="text" id="price" class="form-control" placeholder="  " name="price">

                                                        @error("code")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> choisissez la couleur
                                                        </label>
                                                        <div class="form-group">
                                                            <select name="color" id="color"
                                                                class="jui-select-default form-control">
                                                                <option value="">choisir</option>
                                                                @if(!empty($colors))
                                                                @foreach($colors as  $color)
                                                                <option value="{{$color}}">
                                                                    {{$color}}</option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>


                                                        @error('color')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="class col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">description </label>
                                                        <textarea id="description" type="text" cols="1" class="form-control" placeholder="Ecrire une bref description" name="description"></textarea>

                                                        @error("description")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>

                                                </div>


                                            </div>


                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> promotion </label>
                                                        <input type="text" id="discount" class="form-control" placeholder=" entrer une pourcentage du promotion " name="discount">

                                                        @error("discount")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> quantité </label>
                                                        <input type="text" id="stock" class="form-control" placeholder=" quantite du produit " name="quantite">

                                                        @error("quantite")
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1" name="status" id="switcheryColor4" class="switchery" data-color="success" checked />
                                                        <label for="switcheryColor4" class="card-title ml-1">status </label>

                                                        @error("status")
                                                        <span class="text-danger"> </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
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
