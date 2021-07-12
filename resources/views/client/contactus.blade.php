@extends('layouts.client')

@section('content')
<!-- breadcrumb -->
<div class="full-row bg-light py-5">
            <div class="container">
                <div class="row text-secondary">
                    <div class="col-sm-6">
                        <h3 class="mb-2 text-secondary">Contact</h3>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="d-flex justify-content-sm-end align-items-center h-100">
                            <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!--==================== Map Section Start ====================-->
        <div class="full-row p-0">
            <div class="container-fluid">
                <div class="row">
                    <div id="map" style="height: 500px; width: 100%; overflow: hidden;"></div>
                </div>
            </div>
        </div>
        <!--==================== Map Section End ====================-->

        <!--==================== Contact Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <h3 class="down-line mb-5">Send Message</h3>
                        <div class="form-simple mb-5">
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Full Name:</label>
                                            <input type="text" class="form-control bg-gray" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Your Email:</label>
                                            <input type="email" class="form-control bg-gray" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Subject:</label>
                                            <input type="text" class="form-control bg-gray" name="subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>Message:</label>
                                            <textarea class="form-control bg-gray" name="message" rows="8" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <h3 class="down-line mb-5">Get In Touch</h3>
                        <p>Nullam vel enim risus. Integer rhoncus hendrerit sem egestas porttitor.</p>
                        <div class="d-flex mb-3">
                            <ul>
                                <li class="mb-3">
                                    <strong>Office Address :</strong><br> Level 13, 2 Elizabeth St, Melbourne, Victoria 3000 Australia
                                </li>
                                <li class="mb-3">
                                    <strong>Contact Number :</strong><br> (1) 000 991 8830, (800) 8001-8588
                                </li>
                                <li class="mb-3">
                                    <strong>Email Address :</strong><br> Info@patron.com, support@patron.com
                                </li>
                            </ul>
                        </div>
                        <h4 class="mb-2">Career Info</h4>
                        <p>If you’re interested in employment opportunities at Unicoder, please email us:<br> <a href="#">support@unicoderbd.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Contact Section End ====================-->

@endsection