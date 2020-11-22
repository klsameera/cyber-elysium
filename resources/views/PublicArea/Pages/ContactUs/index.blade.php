@section('title','CyberElysium | Contact Us')
@section('ogtitle','CyberElysium | Contact Us')
@extends('PublicArea.Layouts.app')

@section('head')
<div class="page-title-area" style="padding-top: 0vh">
</div>
@endsection

@section('content')
<section class="main-contact-area ptb-100">
    <div class="container">
        <h4 class="text-center text-info">Please give us your valuable feedback for improve our service...</h4>
        <div class="row justify-content-center pt-4">
            <div class="col-lg-8">
                <div class="contact-wrap">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h2>Write Us</h2>
                        </div>
                        <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-danger">
                                       Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-info">
                    <h3>Our contact details</h3>
                    <p></p>
                    <ul class="address">
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <span>Email</span>
                            <a href="mailto:klsameerapathmakumara@gmail.com">Email</a>
                        </li>

                    </ul>

                    <div class="sidebar-follow-us">
                        <h3>Follow us:</h3>

                        <ul class="social-wrap">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
