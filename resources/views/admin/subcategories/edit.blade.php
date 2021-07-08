@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.sellers')}}">sous-categories </a>
                            </li>
                            <li class="breadcrumb-item active">Modifier sous categorie
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
                                <h4 class="card-title" id="basic-layout-form"> modification sous categorie متجر </h4>
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
                                    <form class="form" action="{{route('admin.subcategories.update',$category -> id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">
                                             <input type="hidden" name="id" value="{{$category -> id}}">

                                            <h4 class="form-section"><i class="ft-home"></i> Modifer une sous categorie
                                            </h4>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">nom du sous categorie</label>
                                                        <input type="text" value="{{$category->name}}" id="name" class="form-control"
                                                            placeholder="  " name="name">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> choisir la categorie principal
                                                        </label>
                                                            <div class="form-group">
                                                                <select name="maincategory_id" id="maincategory_id"
                                                                    class="jui-select-default form-control">
                                                                      @if($categories && $categories -> count() > 0)
                                                                @foreach($categories as $category)
                                                                <option value="{{$category -> id }}" @foreach($category -> mainCategory as $cat)
                                                                    @if ($cat->id == $category->id)
                                                                    selected
                                                                    @endif
                                                                    @endforeach
                                                                    >{{$category -> libelle}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        @error('maincategory_id')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6" id="append_categories_level">
                                                    @include('admin.subcategories.append_subcategories_level')
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="projectinput1"> image du categorie</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="photo" class="custom-file-input"
                                                                id="inputGroupFile01">
                                                            <label class="custom-file-label"
                                                                for="inputGroupFile01">Choisire une image</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="projectinput1"> description</label>
                                                    <fieldset class"form-group">
                                                        <textarea class="form-control" id="placeTextarea" rows="3"
                                                            placeholder="Simple Textarea" name="description"></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1" name="status"
                                                            id="switcheryColor4" class="switchery" data-color="success"
                                                            checked />
                                                        <label for="switcheryColor4" class="card-title ml-1">status
                                                        </label>

                                                        @error("status")
                                                        <span class="text-danger"> </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                onclick="history.back();">
                                                <i class="ft-x"></i> annuler
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> enregistrer
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
