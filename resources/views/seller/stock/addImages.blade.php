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
                             <div class="card-header">
                                  <h4 class="card-title"> les information du produit </h4>
                                  <form action="{{route('seller.stock.product.addImages',$productArray['name'])}}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <table>
                                      <tr>
                                          <th>le nom du produit</th>
                                          <td>{{$productArray['name']}}</td>
                                          <td>{{$productArray['name']}}</td>
                                      </tr>
                                      <tr>
                                          <th>le code du produit</th>
                                          <td>{{$productArray['name']}}</td>

                                      </tr>
                                      <tr>
                                          <th>la couleur du produit</th>
                                          <td>{{$productArray['name']}}</td>

                                      </tr>
                                      <tr>

                                          <td>
                                              <input type="file" name="images[]" id="product_images" multiple="">
                                          </td>

                                      </tr>
                                  </table>

                                </form>
                                    <button type="submit" class="btn-infos">
                                        add images
                                    </button>
                               </div>

                        </div>
                    </div>
                </div>


                {{-- <div class="row">
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

                            @include('seller.alerts.success')
                            @include('seller.alerts.errors')

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

                                            @isset($product)
                                            @php
                                            $i=1
                                            @endphp
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$product ->productImages->product_image }}</td>
                                                <td><img style="width: 150px; height: 100px;"
                                                        src="{{$product -> main_image}}"></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <a href="{{route('seller.stock.product.delete',$product->id)}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>


                                                        <a href="{{route('seller.stock.product.status',$product->id)}}"
                                                            class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                            @if($product -> status == 0)
                                                            activer
                                                            @else
                                                            desactiver
                                                            @endif</a>
                                                    </div>
                                                </td>
                                            </tr>
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
                </div> --}}
            </section>
        </div>
    </div>
</div>
@endsection
