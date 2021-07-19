
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
                            <li class="breadcrumb-item"><a href="{{route('seller.stock.product.create')}}">Ajouter
                                    produit</a>
                            </li>
                            <li class="breadcrumb-item active"> List des produits
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
                                <a href="{{route('seller.stock.product.create')}}" class="btn btn-success">Ajouter
                                    produit</a>
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
                                                <th>nom du produit</th>
                                                <th>image</th>
                                                <th>code</th>
                                                {{-- <th>la couleur</th> --}}
                                                <th>prix</th>
                                                <th> la categorie</th>
                                                <th>les actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($products)
                                            @php
                                            $i=1
                                            @endphp
                                            @foreach($products as $index=> $product)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$product -> name}}</td>
                                                <td><img style="width: 150px; height: 100px;"
                                                        src="{{$product -> main_image}}"></td>

                                                <td>{{$product -> code}}</td>
                                                {{-- <td> {{$product -> color}}</td> --}}
                                                <td>{{$product -> price}}</td>

                                                <td> {{$product -> maincategory->libelle}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href=""
                                                            class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1"
                                                            data-toggle="modal"
                                                            data-target="#headingDefault{{$index}}">les details</a>

                                                        <a href="{{route('seller.stock.product.edit',$product ->id)}}"
                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>

                                                        <form
                                                            action="{{route('seller.stock.product.delete',$product->id)}}"
                                                            method="post" id="show-delete-alert{{$product->id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showDeletAlert({{$product->id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                        </form>


                                                        <a href="{{route('seller.stock.product.images',$product->id)}}"
                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">ajouter
                                                            images</a>





                                                             <form
                                                            action="{{route('seller.stock.product.status',$product->id)}}"
                                                            method="post" id="show-activate-alert{{$product->id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showActivateAlert({{$product->id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" id="status-btn{{$product->id}}">@if($product -> status == 0)
                                                            Activer
                                                            @else
                                                            Desactiver
                                                            @endif</a>

                                                        </form>


                                                    </div>



                                                    <div class="modal fade text-left" id="headingDefault{{$index}}"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel25"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h2 class="modal-title text-text-bold-600"
                                                                        id="myModalLabel25"> les couleurs</h2>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    @foreach($product -> colors as $color)
                                                                    <div class="badge badge-primary">{{$color->name}}
                                                                    </div>
                                                                    @endforeach

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn grey btn-outline-secondary"
                                                                        data-dismiss="modal">Close</button>

                                                                </div>
                                                            </div>
                                                        </div>
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

@section('sweetalert-js')
<script >
window.showDeletAlert = function(formId)
{
    Swal.fire({
        icon: 'error',
        text: 'vous etes sur de supprimer ce produit?',
        showCancelButton: true,
        confirmButtonText: 'Supprimer',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`show-delete-alert${formId}`).submit();
            Swal.fire(
      'Supprimeé!',
      'Votre produit est supprimeé avec succèss',
      'success'
    )
        }
    });
}




function showActivateAlert(formId)
{   var statusbtn = document.getElementById(`status-btn${formId}`).innerText;
     console.log(statusbtn);

    Swal.fire({
        icon: 'error',
        text: `vous voulez ${statusbtn == 'Activer' ? 'activer':'desactiver'} ce produit?`,
        showCancelButton: true,
        confirmButtonText: `${statusbtn == 'Activer' ? 'activer':'desactiver'}`,
         cancelButtonText: 'Annuler',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`show-activate-alert${formId}`).submit();
        }
        else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swal.fire(
      'Annulée',
      'Ce produit est protegée',
      'error'
    )
  }

    });
}
</script>
@endsection
