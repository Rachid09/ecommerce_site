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
                            <li class="breadcrumb-item"><a href="{{route('seller.stock.product.create')}}">Ajouter produit</a>
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
             <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Invoice#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Products</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Shipping</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                            alt="avatar">
                          </span>
                          <span>Elizabeth W.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-4.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%"
                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>                          Declined</td>
                        <td class="text-truncate"><a href="#">INV-001002</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                            alt="avatar">
                          </span>
                          <span>Doris R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+2 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1850.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i>                          Pending</td>
                        <td class="text-truncate"><a href="#">INV-001003</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                            alt="avatar">
                          </span>
                          <span>Megan S.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Groceries</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 3200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001004</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                            alt="avatar">
                          </span>
                          <span>Andrew D.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+1 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-info round">Apparels</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 4500.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>                          Paid</td>
                        <td class="text-truncate"><a href="#">INV-001005</a></td>
                        <td class="text-truncate">
                          <span class="avatar avatar-xs">
                            <img class="box-shadow-2" src="../../../app-assets/images/portrait/small/avatar-s-9.png"
                            alt="avatar">
                          </span>
                          <span>Walter R.</span>
                        </td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="../../../app-assets/images/portfolio/portfolio-3.jpg"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Food</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%"
                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1500.00</td>
                      </tr>
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
