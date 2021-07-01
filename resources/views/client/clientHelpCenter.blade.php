@extends('layouts.client')

@section('content')
<!-- breadcrumb -->
<div class="full-row bg-light overlay-dark py-5" style="background-image: url(assets/images/background/4.png); background-position: center center; background-size: cover;">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="col-12">
                        <h3 class="mb-2 text-primary">Help Center</h3>
                    </div>
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Help Center</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->


        <!--============== Help center section start ==============-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center mx-auto down-line mb-5">How May we help You</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" method="post">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-5 sm-mb-20">
                                    <input type="text" class="form-control bg-white" name="search" placeholder="Search Here...">
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <button class="btn btn-primary w-100">Get Help Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row">
            <div class="container">
                <div class="row g-3 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cos-1">
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-work flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Service Information</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-support flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">General Support</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-settings flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Technical Support</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-survey flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Complain & Objection</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-id-card flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Payment Guarantee</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-user flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Account Support</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-shopping-1 flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Purchase Support</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light hover-bg-primary hover-text-white transation p-40 text-center h-100">
                            <span class="flaticon-touch flat-large text-secondary"></span>
                            <h3 class="mt-4"><a href="#" class="text-secondary hover-text-white">Now Getting Started</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Help center section end ==============-->



        <!--==================== Service Info Section Start ====================-->
        <div class="full-row bg-light">
            <div class="container">
                <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-sm-2 row-cols-1 g-0 gy-4 gy-xxl-0">
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-smartphone-1 flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Great Value</a></h5>
                                <p>We offer competitive prices on our product range.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-airplane flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">World Wide Delevery</a></h5>
                                <p>we ship product to over 200 countries & regions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-life-insurance flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Safe Payment</a></h5>
                                <p>Pay with the world’s most secure payment methods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-shopping-1 flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Shop With Confidence</a></h5>
                                <p>Our Buyer Protection covers your purchase.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-24-hours flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">24/7 Help Center</a></h5>
                                <p>Round-the-clock assistance for a smooth shopping.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Service Info Section End ====================-->

@endsection