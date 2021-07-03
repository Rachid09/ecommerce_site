@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"> المتاجر </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active"> لمتاجر
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
                                <h4 class="card-title">جميع المتاجر </h4>
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
                                                <th>الاسم</th>
                                                <th> اللوجو</th>
                                                <th>اسم المتجر</th>
                                                <th>الهاتف</th>
                                                <th> ألحالة </th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @isset($vendors)
                                            @foreach($vendors as $index => $vendor)
                                            <tr>
                                                <td>{{$vendor -> full_name}}</td>
                                                <td><img style="width: 150px; height: 100px;" src="{{$vendor -> 	logo}}"></td>

                                                <td>{{$vendor -> store_name}}</td>
                                                <td> {{$vendor -> mobile}}</td>

                                                <td> {{$vendor -> getActive()}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="" class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1" data-toggle="modal" data-target="#headingDefault{{$index}}">الاقسام الرئيسية</a>
                                                        <a href="{{route('admin.vendors.edit',$vendor -> id)}}" class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                        <a href="{{route('admin.vendors.delete',$vendor->id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


                                                        <a href="{{route('admin.vendors.status',$vendor->id)}}" class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1"> @if($vendor -> active == 0)
                                                            تفعيل
                                                            @else
                                                            الغاء تفعيل
                                                            @endif</a>

                                                        <div class="modal fade text-left" id="headingDefault{{$index}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel25" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h2 class="modal-title text-text-bold-600" id="myModalLabel25"> الاقسام الرئيسية</h2>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        @foreach($vendor -> MainCategory as $cat)
                                                                        <div class="badge badge-primary">{{$cat->libelle}}</div>

                                                                        @endforeach

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



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