@extends('layouts.app')

@section('main')
<div class="site-wrapper overflow-hidden">
    <div class="breadcrumb-section">
        <div class="breadcrumb-section__bg-shape">
            <img src="/image/breadcrumb/breadcrumb-shape.png" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
            <img src="/image/breadcrumb/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-2 circle-animation">
            <img src="/image/breadcrumb/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
            <img src="/image/breadcrumb/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                    <div class="breadcrumb-section__content hero-content text-center">
                        <h1 class="heading-light title mb-20">{!! $GLOBALS['seo']['h1'] !!}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item" aria-current="page">{!! $GLOBALS['seo']['h1'] !!}</li>
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
                            {!! $GLOBALS['seo']['content'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
