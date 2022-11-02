@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- Sign In Content Start -->
        <div class="signin-section-02">
            <div class="signin-section-02__bg d-flex align-items-center justify-content-center">
                <div style="z-index: 5">
                    <img src="/img/plan/anh3.png" alt="background-image" style="width: 70%; margin-left: 170px; border-radius: 20px;">
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-10">
                        @if($errors->any())
                            <p class="error alert alert-danger">{{$errors->first()}}</p>
                        @endif
                        <div class="signin-form-02 block-title">
                            <a href="{{ route('getIndex') }}" class="title signup-form-02__title" style="color: rgba(19, 15, 53, 0.46);">Back to Home</a>
                            <h3 class="title signin-form-02__title">Login to you account</h3>
                            <div class="from__button-group--two mb-5">
                                <a class="account-btn text-dark" href="{{ route('getSignup') }}">Don’t have an account?</a>
                                <a class="createanaccout-btn" href="{{ route('getSignup') }}"> Create an account</a>
                            </div>
                            <form action="{{ route('postSignin') }}" class="from" method="POST">
                                @csrf
                                <div class="from__input-group">
                                    <label for="email" class="from__input-group--label text-dark">Enter email
                                        address*</label>
                                    <input class="from__input-group--input" type="text" placeholder="Enter email address"
                                        name="email" id="email" autocomplete="off" />
                                </div>
                                <div class="from__input-group">
                                    <label for="passField" class="from__input-group--label text-dark">Password*</label>
                                    <div class="from__pass-box">
                                        <input class="from__input-group--input from__pass-box--input" id="passField" name="password"
                                            type="password" placeholder="**********" />
                                        <i id="eye" class="from__pass-box--eye far fa-eye-slash"></i>
                                    </div>
                                </div>
                                <div class="from__check d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Remember me</label>
                                    </div>
                                    <a class="forgot-btn text-dark" href="#">Forgot password?</a>
                                </div>
                                <div class="from__button-group">
                                    <div class="from__button-group--one">
                                        <button class="btn btn-secondary btn-secondary-hvr">Login Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Content End -->
    </div>
@endsection
