@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> List des images </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('seller.stock.product.create')}}">Ajouter
                                    produit</a>
                            </li>
                            <li class="breadcrumb-item active"> List des images
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
              <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @include('seller.alerts.success')
                            @include('seller.alerts.errors')

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <form action="{{route('seller.stock.product.storeImages',$productArray['id'])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                            <tr>
                                                {{-- <th>id</th> --}}
                                                <th> le nom du produit</th>
                                                <th> l'image principale</th>
                                                <th>le code du produit</th>
                                                <th>la couleur du produit</th>
                                                <th>les actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($productArray)


                                            <tr>
                                                <td>{{$productArray['name']}}</td>

                                                <td><img style="width: 150px; height: 100px;"
                                                        src="{{$productArray['main_image']}}"></td>

                                                        <td>{{$productArray['code']}}</td>
                                                        <td>{{$productArray['color']}}</td>
                                                <td>
                                                   <input type="file" name="images[]" multiple="" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" id="">
                                                </input>

                                                    </div>
                                                </td>
                                            </tr>


                                            @endisset


                                        </tbody>

                                    </table>
                                     <button type="submit" class="btn btn-primary" >
                                                <i class="la la-check-square-o"></i> حفظ
                                    </button>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

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


                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                            <tr>
                                                <th>id</th>
                                                <th> l'image</th>
                                                <th>les actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($productArray)
                                            @php
                                            $i=1
                                            @endphp
                                            @foreach ($productArray['product_images'] as $img)
                                            <tr>
                                                <td>{{$i}}</td>

                                                <td><img style="width: 150px; height: 100px;"
                                                        src="{{$img['product_image']}}"></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <a href="{{route('seller.stock.product.deleteImage',['prod_id'=>$productArray['id'],'id'=>$img['id']])}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>


                                                        <a href="{{route('seller.stock.product.changeImageStatus',['prod_id'=>$productArray['id'],'id'=>$img['id']])}}"
                                                            class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                            @if($img['status'] == 0)
                                                            activer
                                                            @else
                                                            desactiver
                                                            @endif</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @php
                                            $i++
                                            @endphp
                                            @endisset


                                        </tbody>
                                    </table>

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
