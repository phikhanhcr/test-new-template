@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <div class="site-wrapper overflow-hidden">
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <img src="img/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <img src="img/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <img src="img/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-light title mb-20 text-white">Profile</h1>
                            <h3 class="text-light">Hello, {{ $user->name }}!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="termscontent-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="termscontent-section__content">
                            <div class="termscontent-section__content--texts">
                                <div class="container" style="flex-direction: column; align-items: unset">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span>Profile</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Full name</span>
                                                <div class="form-control">{{ $user->name }}</div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Email</span>
                                                <div class="form-control">{{ $user->email }}</div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Registration Date</span>
                                                <div class="form-control">{{ $user->created_at->format('d/m/Y') }}</div>
                                            </div>
                                        </div>
                                        @if (!is_null($user->expire_date))
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Current Package</span>
                                                <div class="form-control">{{ $user->email }}</div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Expire</span>
                                                <div class="form-control">{{ $user->expire_date->format('d/m/Y') }}</div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span>Your Transaction</span>

                                                @if (count($user->transaction) > 0)
                                                    <span
                                                        class="badge badge-secondary badge-pill">{!! count($user->transaction) !!}</span>
                                                @endif

                                            </h4>
                                            <ul class="list-group mb-3 c-transactions"
                                                style="height: 100%;max-height: 435px;overflow-x: auto; border: 1px solid #fff;">
                                                @if (count($user->transaction) == 0)
                                                    <br />
                                                    <div class="text-center">No transaction</div>
                                                @endif
                                                @foreach ($user->transaction as $tran)
                                                    <li class="list-group-item d-flex justify-content-between lh-condensed d-flex align-items-center">
                                                        <div>
                                                            <h6 class="my-0">{!! isset($tran->package->name) ? $tran->package->name : '' !!}</h6>
                                                            <small class="text-dark">{!! isset($tran->package->day_using) ? $tran->package->day_using : '' !!}
                                                                {!! isset($tran->package->day_code) ? 'per ' . $tran->package->day_code : '' !!}</small>
                                                        </div>
                                                        <span
                                                            class="text-success" style="font-size: 20px; font-weight: 700">$ {{ $tran->package->price }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
