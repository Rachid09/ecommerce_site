@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> Les Clients </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active"> les clients
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
                                                {{-- <th>Nom</th> --}}
                                                <th>Nom</th>
                                                <th>Prènom</th>
                                                <th>Téléphone</th>
                                                <th>les actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($clients)
                                            @foreach($clients as $index => $client)
                                            <tr>
                                                <td>{{$client -> first_name}}</td>
                                                {{-- <td><img style="width: 150px; height: 100px;" src="{{$client -> 	logo}}"></td> --}}
                                                <td>{{$client -> last_name}}</td>
                                                <td>{{$client -> phone}}</td>
                                                {{-- <td> {{$client -> email}}</td> --}}


                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">

                                                        <a href="{{route('admin.clients.edit',$client -> id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>

                                                                                         <form
                                                            action="{{route('admin.clients.delete',$client->id)}}"
                                                            method="post" id="show-delete-alert{{$client->id}}">
                                                            @csrf

                                                            <a href="javascript:void(0)"
                                                                onclick="showDeletAlert({{$client->id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                        </form>

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
        text: 'vous etes sur de supprimer ce client?',
        showCancelButton: true,
        confirmButtonText: 'Supprimer',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`show-delete-alert${formId}`).submit();
            Swal.fire(
      'Supprimeé!',
      'Ce client est bien été supprimeé',
      'success'
    )
        }
    });
}

</script>
@endsection

