@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> List des produit </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"> ma boutique
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
                            <div class="card-header">
                                {{-- <h4 class="card-title"> التاجر </h4> --}}
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

                            @include('seller.alerts.success')
                            @include('seller.alerts.errors')

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                            <tr> <th>id</th>
                                                <th>nom du produit</th>
                                                <th>Image</th>
                                                <th>Code</th>
                                                {{-- <th>la couleur</th> --}}
                                                 <th>Prix</th>
                                                <th>Categorie</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($products)
                                            @php
                                                $i=1
                                            @endphp
                                            @foreach($products as  $product)
                                            <tr>  <td>{{$i}}</td>
                                                <td>{{$product -> name}}</td>
                                                <td><img style="width: 150px; height: 100px;" src="{{$product -> main_image}}"></td>

                                                <td>{{$product -> code}}</td>
                                                {{-- <td> {{$product -> color}}</td> --}}
                                                 <td>{{$product -> price}}</td>

                                                <td> {{$product -> maincategory->libelle}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <a href="{{route('seller.store.product.edit',$product ->id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>


                                                        <a href="{{route('seller.store.product.status',$product->id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                    </div>
                                                </td>
                                            </tr>
                                           @php
                                               $i++
                                           @endphp
                                            @endforeach
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
