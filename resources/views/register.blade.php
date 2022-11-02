@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- Sign Up Content Start -->
        <div class="signup-section-02">
            <div class="signup-section-02__bg d-flex align-items-center justify-content-center">
                <div style="z-index: 5" class="d-flex justify-content-between align-items-center">
                    <img src="/img/plan/anh1.png" alt="background-image" style="width: 70%; margin-left: 170px; border-radius: 20px;">
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-xs-10 col-sm-10">
                        @if($errors->any())
                            <p class="error alert alert-danger">{{$errors->first()}}</p>
                        @endif
                        <div class="signup-form-02 block-title">
                            <a href="{{ route('getIndex') }}" class="title signup-form-02__title" style="color: rgba(19, 15, 53, 0.46);">Back to Home</a>
                            <h3 class="title signup-form-02__title">Create your account</h3>
                            <form action="{{ route('postSignup') }}" class="from" method="POST">
                                @csrf
                                <div class="from__input-group">
                                    <label for="username" class="from__input-group--label text-dark">Your name*</label>
                                    <input class="from__input-group--input" type="text" placeholder="Full name"
                                        name="name" id="name" autocomplete="off" />
                                </div>
                                <div class="from__input-group">
                                    <label for="useremail" class="from__input-group--label text-dark">Enter email
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
                                <div class="from__input-group">
                                    <label for="passField-02" class="from__input-group--label text-dark">Confirm
                                        password</label>
                                    <div class="from__pass-box">
                                        <input class="from__input-group--input from__pass-box--input" id="passField-02"
                                            type="password" placeholder="**********" />
                                    </div>
                                </div>
                                <div class="from__check">
                                    <h6 class="from__check--title text-dark">Terms & Conditions</h6>
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I agree with the terms & conditions
                                    </label>
                                </div>
                                <div class="from__button-group">
                                    <div class="from__button-group--one">
                                        <button class="btn btn-secondary btn-secondary-hvr" id="btn-register">Create Your
                                            Account</button>
                                    </div>
                                    <div class="from__button-group--two">
                                        <a class="account-btn text-dark" href="{{ route('getSignin') }}">Already have an account? </a>
                                        <a class="createanaccout-btn" href="{{ route('getSignin') }}"> Sign in now</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up Content End -->
    </div>
@endsection