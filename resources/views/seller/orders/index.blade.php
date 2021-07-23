@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> List des commandes </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('seller.dashboard')}}">Home</a>
                            </li>
                            {{-- <li class="breadcrumb-item"><a href="{{route('seller.order.product.create')}}">Ajouter
                                    Commande</a>
                            </li> --}}
                            <li class="breadcrumb-item active"> List des Commandes
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Les commandes</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover table-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom du client</th>
                                            <th class="border-top-0">Tèlèphone</th>
                                            <th class="border-top-0">Email</th>
                                            {{-- <th class="border-top-0">Adress de livraison</th> --}}
                                            <th class="border-top-0">Status</th>
                                            {{-- <th class="border-top-0">Total</th> --}}
                                            <th class="border-top-0">Date du commande</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($orders)
                                        @php
                                        $i=1
                                        @endphp
                                        @foreach ($orders as $index=>$item)
                                        <tr>

                                            <td class="text-truncate"><a href="#">{{$i}}</a></td>
                                            <td class="text-truncate">
                                                <span>{{$item['user_name']}}</span>
                                            </td>
                                            <td class="text-truncate">
                                                <span>{{$item['phone']}}</span>
                                            </td>
                                            <td class="text-truncate">
                                                <span>{{$item['email']}}</span>
                                            </td>
                                            <td class="text-truncate">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-warning round">{{$item['order_status']}}</button>
                                            </td>


                                            <td>
                                                <span>{{date('d-m-Y',strtotime($item['created_at']))}}</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-primary round"
                                                    data-toggle="modal"
                                                    data-target="#detailsOrder{{$index}}" >Details</button>
                                            </td>

                                            <div class="modal fade text-left" id="detailsOrder{{$index}}" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel25" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h2 class="modal-title text-text-bold-600" id="myModalLabel25">
                                                                Details du commande</h2>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @foreach($item['products'] as $product)
                                                            <h2 class="modal-title text-text-bold-600">Nom du produits</h2>
                                                            <div class="badge badge-primary">{{$product['name']}}
                                                            </div>
                                                             <h2 class="modal-title text-text-bold-600">Code du produit</h2>
                                                            <div class="badge badge-primary">{{$product['code']}}
                                                            </div>
                                                             <h2 class="modal-title text-text-bold-600">Prix du produit</h2>
                                                            <div class="badge badge-primary">{{$product['price']}}
                                                            </div>
                                                             <h2 class="modal-title text-text-bold-600">quantite du produit</h2>
                                                            {{-- <div class="badge badge-primary">{{$product['pivot']['qty']}} --}}
                                                            </div>
                                                            @endforeach

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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

        </div>
    </div>
</div>
























</div>



@endsection
