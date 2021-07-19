  @extends('layouts.admin')

  @section('content')
  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-md-6 col-12 mb-2">
                  <h3 class="content-header-title"> Les catégories </h3>
                  <div class="row breadcrumbs-top">
                      <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                              </li>
                              <li class="breadcrumb-item active"> les catégories
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
                                  {{-- <h4 class="card-title">جميع الاقسام الرئيسية </h4> --}}
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
                                                  <th>la catègorie </th>
                                                  <th>la langue</th>
                                                  <th>Status</th>
                                                  <th>Image</th>
                                                  <th>Actions</th>
                                              </tr>
                                          </thead>
                                          <tbody>

                                              @isset($categories)
                                              @foreach($categories as $category)
                                              <tr>
                                                  <td>{{$category -> libelle}}</td>
                                                  <td>{{get_default_lang()}}</td>
                                                  <td>{{$category -> getIsActive()}}</td>
                                                  <td> <img style="width: 150px; height: 100px;" src="{{$category -> 	photo}}"></td>
                                                  <td>
                                                      <div class="btn-group" role="group" aria-label="Basic example">
                                                          <a href="{{route('admin.maincategories.edit',$category -> id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modifier</a>
                                                          <form
                                                            action="{{route('admin.maincategories.delete',$category->id)}}"
                                                            method="post" id="show-delete-alert{{$category->id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showDeletAlert({{$category->id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Supprimer</a>

                                                        </form>

                                                          <form
                                                            action="{{route('admin.maincategories.status',$category -> id)}}"
                                                            method="get" id="show-activate-alert{{$category -> id}}">
                                                            @csrf



                                                            <a href="javascript:void(0)"
                                                                onclick="showActivateAlert({{$category -> id}});
                                                              " class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" id="status-btn{{$category->id}}">
                                                            @if($category -> is_active == 0)
                                                            activer
                                                            @else
                                                            desactiver
                                                            @endif
                                                            </a>

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
        text: 'vous etes sur de supprimer cette catègorie?',
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
      'vote catègorie est protegée',
      'error'
    )
  }

    });
}



function showActivateAlert(formId)
{   var statusbtn = document.getElementById(`status-btn${formId}`).innerText;
     console.log(statusbtn);

    Swal.fire({
        icon: 'error',
        text: `vous voulez ${statusbtn == 'Activer' ? 'activer':'desactiver'} cette catègorie?`,
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
      'Cette catègorie est protegée',
      'error'
    )
  }

    });
}

</script>
@endsection


