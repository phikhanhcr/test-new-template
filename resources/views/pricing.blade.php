@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- navbar- -->
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <svg width="125" height="249" viewBox="0 0 125 249" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <path opacity="0.1"
                        d="M125 0.00165362C92.0182 -0.168411 60.3199 12.7853 36.8781 36.0132C13.4364 59.2411 0.171526 90.8404 0.00165179 123.86C-0.168223 156.879 12.7708 188.613 35.9723 212.082C59.1738 235.55 90.7372 248.83 123.719 249L125 0.00165362Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <ellipse opacity="0.1" cx="26.5" cy="26" rx="26.5" ry="26" fill="white">
                    </ellipse>
                </svg>
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <svg width="55" height="109" viewBox="0 0 55 109" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <path opacity="0.1"
                        d="M0.751495 109C15.2384 108.901 29.0924 103.063 39.2657 92.7724C49.439 82.4815 55.0984 68.5799 54.9987 54.1258C54.899 39.6716 49.0486 25.849 38.7343 15.6987C28.4201 5.54839 14.4869 -0.0981367 0 0.00129118L0.751495 109Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-dark title mb-20">Pricing</h1>
                            <h3 class="text-dark mb-20">Organize your work with Planbig Premium</h2>
                            {{-- <p class="text-light">Quickly record your archievements and thoughts with messenger-styled notes.</p>
                            <p class="text-light">More functions. More peace of mind. Planbig Premium is a bit of your second brain (and more reliable)..</p>
                            <p class="text-light">Celebrate your progress. Trust the premium features of Planbig to help you manage your work, no matter how complex..</p>
                            <p class="text-light">More than 500,000 people rely on Planbig Premium to structure their work and personal life.</p> --}}
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-dark">Home</li>
                                    <li class="breadcrumb-item text-dark" aria-current="page">Pricing</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->
        <!-- Price Section Start -->
        <div class="pricing-section-07">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title pricing-section-07__title">
                            <h2 class="title">We offer simple pricing <br class="d-none d-xs-block"> plan for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row three-row-mobile-slider mobile-slider justify-content-center align-items-center widgets-row"
                    data-pricing-dynamic="" id="table-price-value" data-value-active="yearly">
                    @if($packages)
                    @php($width = 4)
                    @foreach ($packages as $package)
                        <div class="col-md-{{ $width }} pricing__item item-package text-dark" style=""
                            tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10"
                            aria-hidden="true" data-id="{!! $package['id'] !!}" data-name="{!! $package['name'] !!}"
                            data-time="{!! $package['day_using'] !!}-{{ $package['day_code'] }}"
                            data-order-total="US${!! number_format($package['price'], 0, '', '.') !!} - {!! $package['day_using'] !!} {{ $package['day_code'] }}"
                            data-paddle-id="{!! checkIs($package, ['paddle_plan', 'product_id']) !!}"
                            data-paypal-id="{!! checkIs($package, ['paypal_plan', 'plan_id']) !!}">
                            <div class="card card-pricing--06">
                                <div class="card-pricing--06__head">
                                    <h3 class="card-pricing--06__plan-title text-green">
                                        {{ $package['name'] }}

                                        @if ($package['most_popular'])
                                            <div class="pricing__note text-red">Most popular</div>
                                        @endif
                                    </h3>
                                    <h2 class="card-pricing--06__price dynamic-value" data-active="${{ $package['pricePerMonth'] }}"
                                        data-monthly="${{ $package['pricePerMonth'] }}" data-yearly="${{ $package['pricePerMonth'] }}">
                                        <span class="sr-only">$ {{ $package['pricePerMonth'] }}</span>
                                    </h2>
                                    <span class="card-pricing--06__plan-text text-dark">Per Month</span>
                                </div>
                                <div class="d-flex justify-content-center">
                                  <ul class="card-pricing--02__list list-unstyled">
                                    @foreach(explode("\n", $package['description']) as $item)
                                        <li>
                                            <img src="/img/home-4/icon-check.svg" alt=""
                                                 class="make-it-inline icon-check">{{ $item }}
                                        </li>
                                    @endforeach
                                  </ul>
                                </div>
                                <div class="card-pricing--06__button text-center">
                                    <button class="btn btn-rounded-secondary btn-select-package" tabindex="-1">
                                        Get Plan
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    <div id="before-pay-now"></div>
                </div>
            </div>
        </div>
        <!-- Price Section End -->
        <!-- Cta Section Start -->
        <div class="cta-section-04 cta-bg-group-1">
            <div class="container">
                <div class="cta-section-04__wrapper overflow-hidden">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-md-10 co-xs-12 col-sm-12 col-12">
                            <div class="row justify-content-center">
                                <div style="width: 600px; margin: 30px auto 0 auto">
                                    <div class="text-center selected-package text-dark" style="font-size: 20px; font-weight: bold">
                                        Please choose package
                                    </div>
                                    <div class="text-center text-dark" style="margin-bottom: 20px">
                                        Automatically renews. Cancel at any time.
                                    </div>
                                    <div class="list-payment d-none">
                                        <div class="item-payment" data-type="paypal">
                                            <div class="item-payment-radio"></div>
                                            <img src="/img/paypal.svg">
                                        </div>
                                        <div class="item-payment" data-type="paddle">
                                            <div class="item-payment-radio"></div>
                                            <img src="/img/paddle.svg">
                                        </div>
                                    </div>
                                    <div class="container-btn-payment">
                                        <div id="paypal-button-container" data-btn-show="paypal"></div>
                                        <div class="btn-payment" data-btn-show="paddle">
                                            Payment via Paddle
                                        </div>
                                    </div>
                                    <div class="text-dark">
                                        By purchasing, you accept the
                                        <a href="/terms-of-service" class="text-dark" target="_blank"><b>Terms of Service</b></a>
                                        and acknowledge reading the
                                        <a href="/privacy-policy" class="text-bule" target="_blank"><b>Privacy Policy</b></a>. You also agree
                                        to our <a href="/refund-policy" class="text-bule" target="_blank"><b>Refund
                                            Policy</b></a> and auto renewal of your subscription, which can be disabled at any
                                        time through your
                                        account. Your card details will be saved for future purchases and subscription
                                        renewals.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta-section-04__wrapper--shape-3 floating-Y-animation-reverse-03">
                        <svg width="36" height="72" viewBox="0 0 36 72" fill="none"
                            xmlns="http://www.w3.org/2000/svg" src="/image/common/cta-shape-3.svg"
                            class="make-it-inline" alt="shape">
                            <path opacity="0.1"
                                d="M0.490524 71.3168C9.94657 71.2517 18.9895 67.433 25.6299 60.7005C32.2704 53.9681 35.9644 44.8735 35.8993 35.4175C35.8343 25.9614 32.0155 16.9185 25.2831 10.2781C18.5506 3.63763 9.45605 -0.0563895 0 0.0086572L0.490524 71.3168Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="cta-section-04__wrapper--shape-4 circle-animation-02">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg" src="/image/common/cta-shape-4.svg"
                            class="make-it-inline" alt="shape">
                            <circle opacity="0.1" cx="11.0206" cy="11.0206" r="11.0206" fill="white">
                            </circle>
                        </svg>
                    </div>
                    <div class="cta-section-04__wrapper--shape-5 floating-X-animation-reverse-01">
                        <svg width="121" height="61" viewBox="0 0 121 61" fill="none"
                            xmlns="http://www.w3.org/2000/svg" src="/image/common/cta-shape-5.svg"
                            class="make-it-inline" alt="shape">
                            <path opacity="0.1"
                                d="M0.000800766 6.86646e-05C-0.0815534 15.9646 6.1913 31.308 17.4394 42.6548C28.6875 54.0016 43.9895 60.4223 59.9791 60.5046C75.9687 60.5868 91.3361 54.3238 102.701 43.0932C114.065 31.8627 120.496 16.5847 120.578 0.62014L0.000800766 6.86646e-05Z"
                                fill="white"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="cta-bg-group-1--shape-1">
                <svg width="261" height="184" viewBox="0 0 261 184" fill="none"
                    xmlns="http://www.w3.org/2000/svg" src="/image/common/cta-shape-1.svg" class="make-it-inline"
                    alt="shape">
                    <circle cx="240.5" cy="-57.4053" r="240.5" fill="#001C80"></circle>
                </svg>
            </div>
            <div class="cta-bg-group-1--shape-2">
                <svg width="199" height="184" viewBox="0 0 199 184" fill="none"
                    xmlns="http://www.w3.org/2000/svg" src="/image/common/cta-shape-2.svg" class="make-it-inline"
                    alt="shape">
                    <circle cx="218" cy="-34.9053" r="218" fill="#FFC83E"></circle>
                </svg>
            </div>
        </div>
        <!-- Footer Section End -->
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
    @if (!empty($paypalAccount))
        <script src="https://www.paypal.com/sdk/js?client-id={{ $paypalAccount['client_id'] }}&vault=true"></script>
    @endif
    <script>
        var total = 0
        var package_id = null;
        var planId = null;
        var paddleId = null;
        var firstClick = true;
        const paddle_vendor_id = {{ !empty($paddleAccount['vendor_id']) ? $paddleAccount['vendor_id'] : 0 }};
        const userEmail = '{{ auth()->check() ? auth()->user()->email : '' }}';
        const userName = '{{ auth()->check() ? auth()->user()->name : '' }}';
        const userId = {{ auth()->check() ? auth()->user()->id : 0 }};
        const paddlePassthrough = {
            id: userId,
            email: userEmail
        };

        function getDataPay() {
            paddlePassthrough.voucher = $('.voucher-code').val();
            paddlePassthrough.trackingcode = '';
            paddlePassthrough.package_id = package_id;
            console.log(paddlePassthrough);
        }
    </script>
    <script>
        $(document).ready(function() {
            loadPaypal();
            loadPaddle();

            $('.item-payment').on('click', function (){
                if (!paddlePassthrough.id) {
                    $('[href="#popup-sign-in"]').click();
                }

                $('.item-payment').removeClass('active');
                $(this).addClass('active');

                let type = $(this).data('type');
                $(`[data-btn-show]`).hide();
                $(`[data-btn-show="${type}"]`).css('display', 'flex');
            });

            $('[data-btn-show="paddle"]').on('click', function () {
                Paddle.Checkout.open({
                    product: paddleId,
                    email: userEmail,
                    passthrough: paddlePassthrough
                })
            });

            $('.btn-select-package').on('click', function () {
                total = $(this).parents('.item-package').attr('data-order-total')
                package_id = $(this).parents('.item-package').attr('data-id')
                planId = $(this).parents('.item-package').attr('data-paypal-id')
                paddleId = $(this).parents('.item-package').attr('data-paddle-id')
                $('.item-package > div').removeClass('active');
                $(this).parents('.item-package > div').addClass('active');
                $('.selected-package').html(total);

                if (firstClick == false) {
                    if (!paddlePassthrough.id) {
                        location.href = '/signin';
                        return;
                    }
                    document.querySelector('#before-pay-now').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
                firstClick = false;
            });

            $('.item-package > .active').find('.btn-select-package').click();
                    
            if ($('.item-payment').length > 0) {
                $('.item-payment')[0].click();
            }

            if ($('.item-payment:not(.hide)').length < 2) {
                $('.item-payment').addClass('hide');
            }
        });

        function loadPaypal() {
            paypal.Buttons({
                createSubscription: function (data, actions) {
                    if (package_id == undefined) {
                        alert('Please select package!');
                        return;
                    } else if (!paddlePassthrough.id) {
                        location.href = '/signin';
                    } else {

                        getDataPay();

                        return actions.subscription.create({
                            plan_id: planId,
                            subscriber: {
                                name: {
                                    given_name: `${paddlePassthrough.id}`,
                                    surname: JSON.stringify(paddlePassthrough)
                                },
                                email_address: paddlePassthrough.email
                            }
                        });
                    }
                },
                onApprove: function (data, actions) {
                    location.href = '/thank-you';
                },
            }).render('#paypal-button-container');
        }

        function loadPaddle() {
            Paddle.Setup({
                vendor: paddle_vendor_id,
                eventCallback: function (data) {
                    if (package_id == undefined) {
                        alert('Please select package!');
                        return;
                    }
                    console.log(data)
                    if (data.event == 'Checkout.Loaded') {

                    }
                    if (data.event == 'Checkout.Close') {

                    }
                    if (data.event == 'Checkout.Complete') {

                    }
                }
            });
        }
    </script>
@endsection
