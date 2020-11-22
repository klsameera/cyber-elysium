@extends('PublicArea.Layouts.app')
@section('head')
<div class="page-title-area" style="padding-top: 0vh">
</div>
@endsection
@section('content')
<!-- Start About Us Area -->
<section class="our-approach-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>“The greatest enemy of knowledge is not ignorance, it is the illusion of knowledge.”</h2>
            <h5 class="text-left">- Daniel J. Boorstin</h5>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="approach-img">
                    <img src="{{ asset('img/logo1.png') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="approach-content">
                    <p>Sri Lanka’s best GPA calculator for university students for calculate their GPA themselves..</p>
                    <p>Calculating the GPA correctly is a big problem for many university students. Because of this we have provided a very easy way to easily calculate their GPA themselves.</p>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Thoughtful</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Meaningful</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Useful</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Easily</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->

<!-- Start Our Challenges Area -->
<section class="challenges-area challenges-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title white-title">
            <span>How To Use</span>
            <h2>How to Use GPA Calculator</h2>
            <h5 class="text-white">To make the experience with GPA calculator easier, we provide you with the basic steps to calculate your GPA .</h5>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one h-100">
                    <div class="overly-two">
                        <i class="fas fa-hand-pointer"></i>
                        <h3>Select</h3>
                        <p>Select A+ Grade GPA</p>
                        <span class="fas fa-hand-pointer"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one h-100">
                    <div class="overly-two">
                        <i class="fas fa-keyboard"></i>
                        <h3>Enter</h3>
                        <p>Enter the course details</p>
                        <span class="fas fa-keyboard"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one h-100">
                    <div class="overly-two">
                        <i class="fas fa-plus-square"></i>
                        <h3>Add</h3>
                        <p>Click the add button</p>
                        <span class="fas fa-plus-square"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one h-100">
                    <div class="overly-two">
                        <i class="fas fa-sliders-h"></i>
                        <h3>change</h3>
                        <p>Change other settings</p>
                        <span class="fas fa-sliders-h"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="challenges-shape">
        <img src="{{ asset('img/challenges-shape.png') }}" alt="Image">
    </div>
</section>

@endsection
