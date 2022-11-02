@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
<div class="site-wrapper overflow-hidden">
    <div class="breadcrumb-section">
        <div class="breadcrumb-section__bg-shape">
            <img src="/img/breadcrumb-shape.png" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
            <img src="/img/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-2 circle-animation">
            <img src="/img/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
            <img src="/img/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                    <div class="breadcrumb-section__content hero-content text-center">
                        <h1 class="heading-light title mb-20 text-dark">Renewal Policy</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item text-dark">Home</li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Renewal Policy</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="termscontent-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="termscontent-section__content">
                        <div class="termscontent-section__content--texts">
                            <h3 class="title mb-20">Generate Terms</h3>
                            <p class="text-dark">All subscriptions renew automatically for the same duration of the original order (1, 3, 6, 12 months) unless canceled one week prior to expiration. If you want to cancel your subscription, please go to the Profile section and follow our instructions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection