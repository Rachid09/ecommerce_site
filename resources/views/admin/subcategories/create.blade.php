@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.sellers')}}">المتاجر </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة متجر
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
                                <h4 class="card-title" id="basic-layout-form"> إضافة تاجر </h4>
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


                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> Ajouter une sous categorie </h4>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">nom du category</label>
                                                        <input type="text" value="" id="name" class="form-control" placeholder="  " name="name">
                                                        @error("full_name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2"> choiasir la categorie principal </label>
                                                        <select name="categories" class="select2 form-control">
                                                            <optgroup label="من فضلك أختر القسم ">
                                                                @if($categories && $categories -> count() > 0)
                                                                @foreach($categories as $category)
                                                                <option value="{{$category -> id }}">{{$category -> libelle}}</option>
                                                                @endforeach
                                                                @endif
                                                            </optgroup>
                                                        </select>
                                                        @error('category_id')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> niveau de la catègorie</label>
                                                        <select name="parent_id" class="select2 form-control">
                                                            <optgroup label="choisir le niveau du categorie">
                                                              <option value="0">categorie principal</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                      <fieldset class="form-group">
                                                            <label for="projectinput1"> image du categorie</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                            </fieldset>
                                                </div>
                                            </div>


                                                <div class="row">
                                                    <div class="col-12">

                                                                                            <fieldset class="form-group">
                                                                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Simple Textarea" name="category_description"></textarea>
                                                                    </fieldset>
                                                    </div>

                                                </div>






                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" value="1" name="active" id="switcheryColor4" class="switchery" data-color="success" checked />
                                                        <label for="switcheryColor4" class="card-title ml-1">الحالة </label>

                                                        @error("active")
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
