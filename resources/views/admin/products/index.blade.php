@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> List des produis </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
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
                                {{-- <h4 class="card-title">جميع المتاجر </h4> --}}
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
                                <div class="card-body card-dashboard">
                                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                            <tr>
                                                <th>nom du produit</th>
                                                <th> l'image</th>
                                                <th> categorie du produit</th>
                                                <th>code du produit</th>
                                                <th> prix du produit </th>
                                                <th>les actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($products)
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$product -> name}}</td>
                                                <td><img style="width: 150px; height: 100px;" src="{{$product -> 	main_image}}"></td>
                                                {{-- <td>{{$product ->seller->name }}</td> --}}
                                                <td>{{$product ->maincategory->libelle }}</td>
                                                <td> {{$product -> code}}</td>

                                                <td> {{$product -> price}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">


                                                        <form
                                                            action="{{route('admin.products.status',$product -> id)}}"
                                                            method="post" id="show-activate-alert{{$product -> id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showActivateAlert({{$product -> id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" id="status-btn{{$product->id}}">
                                                            @if($product -> status == 0)
                                                            Activer
                                                            @else
                                                            Desactiver
                                                            @endif
                                                            </a>

                                                        </form>




                                                            <form
                                                            action="{{route('admin.products.delete',$product -> id)}}"
                                                            method="get" id="show-delete-alert{{$product -> id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showDeletAlert({{$product -> id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                        </form>





                                                        <a href="{{route('admin.products.featured',$product->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                            @if($product -> is_featured == 'No')
                                                            mettre en top
                                                            @else
                                                            supprimer du top
                                                            @endif
                                                            </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endisset


                                        </tbody>
                                    </table>
                                    <div class="justify-content-center d-flex">

                                    </div>
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
         cancelButtonText: 'Annuler',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`show-delete-alert${formId}`).submit();



        }
        else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swal.fire(
      'Annulée',
      'vote produit est protegée',
      'error'
    )
  }

    });
}






window.showActivateAlert = function(formId)
{   var statusbtn = document.getElementById(`status-btn${formId}`).innerText;
    Swal.fire({
        icon: 'error',
        text: `vous voulez ${statusbtn == 'Activer' ? 'activer':'desactiver'} ce produit?`,
        showCancelButton: true,
        confirmButtonText: `${statusbtn == 'Activer' ? 'Activer':'Desactiver'}`,
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
      'vote produit est protegée',
      'error'
    )
  }

    });
}
</script>
@endsection


