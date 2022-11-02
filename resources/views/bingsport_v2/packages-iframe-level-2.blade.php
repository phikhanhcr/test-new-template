@extends('layouts.application-iframe')

@section('styles')
    @if (!empty($_GET['source']))
        <style>
            @if ($_GET['source'] == '1')
        html {
                background-color: unset;
                color: #333;
            }
            .item-payment {
                background-color: #FFF!important;
                border: 1px solid #CCC!important;
            }
            .item-payment.active {
                border: 1px solid #f91e4e!important;
                background-color: rgba(249,30,78,.13333333333333333)!important;
            }
            .btn-payment {
                color: #FFF!important;
            }
            .note-payment {
                color: #333!important;
            }
            .count-step {
                width: 36px;
                height: 36px;
                border: 1px solid #333!important;
                color: #333!important;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 16px;
                font-family: Poppins-SemiBold;
                margin-right: 16px;
                border-radius: 50%;
            }
            @endif
            @if ($_GET['source'] == 'amzfootball.com')

            .voucher-container {
                text-align: center;
                display: flex;
                align-items: center;
            }
            .voucher-container > div {
                flex: 1;
            }
            .voucher-code {
                border: 1px solid #CCC;
                border-radius: 8px;
                height: 40px;
                margin: 10px auto;
                outline: 0;
                color: #333;
                padding: 0 15px;
            }
            @endif
            @if ($_GET['source'] == 'btsportlivestream.com' || $_GET['source'] == 'livesport365.net')
            .step-2, .note-payment, .count-step {
                color: #333!important;
            }
            .item-payment {
                background-color: unset!important;
                border: 1px solid #CCC!important;
            }
            .item-payment.active {
                border: 1px solid #ffa528;
                background-color: rgb(255 165 40 / 21%)!important;
            }
            .btn-payment {
                color: #FFF!important;
            }
            .count-step {
                border: 1px solid #333!important;
            }
            .voucher-container {
                text-align: center;
                display: flex;
                align-items: center;
            }
            .voucher-container > div {
                flex: 1;
            }
            .voucher-code {
                border: 1px solid #CCC;
                border-radius: 8px;
                height: 40px;
                margin: 10px auto;
                outline: 0;
                color: #333;
                padding: 0 15px;
            }
            @endif
        </style>
    @endif
    <link rel="stylesheet" href="https://{{ $source }}/css/payment.css?v={{ time() }}" />
@endsection

@section('main')
    <div>
        <div class="container">
            <div class="main">
                <div class="step-2">
                    <div class="item-step">
                        <div class="count-step">2</div>
                        <div class="desc-step">Select your preferred method of payment</div>
                    </div>
                    <div class="preview-price">
                        Total: <span class="total-price"></span><sub class="note-paddle" style="position: relative; top: -5px; right: -5px; font-size: 25px; color: #F91E4E; display: none">*</sub>
                    </div>
                    <div class="note-payment note-paddle" style="display: none; color:#F91E4E;">
                        (*) Include an additional charge for card processing fee:  20% of the order amount
                    </div>
                    <div class="note-payment">
                        Automatically renews. Cancel at any time.
                    </div>
                    <div class="payment-container">
                        <div class="list-payment">
                            <div class="item-payment" data-type="paypal">
                                <div class="item-payment-radio"></div>
                                <img src="/images/paypal.svg" />
                            </div>
                            <div class="item-payment {{ $show_paddle ? '' : 'hide' }}" data-type="paddle">
                                <div class="item-payment-radio"></div>
                                <img src="/images/paddle.svg" />
                                <span class="percent-20" style="position: absolute; right: 15px; font-weight: bold; font-size: 17px; color: #f91e4e; display: none">+20%</span>
                            </div>
                            <div class="item-payment {{ $show_stripe == 'true' ? '' : 'hide' }}" data-type="stripe">
                                <div class="item-payment-radio"></div>
                                <svg viewBox="0 0 60 25" xmlns="http://www.w3.org/2000/svg" width="60" height="25" class="UserLogo variant-- "><title>Stripe logo</title><path fill="#FFFFFF" d="M59.64 14.28h-8.06c.19 1.93 1.6 2.55 3.2 2.55 1.64 0 2.96-.37 4.05-.95v3.32a8.33 8.33 0 0 1-4.56 1.1c-4.01 0-6.83-2.5-6.83-7.48 0-4.19 2.39-7.52 6.3-7.52 3.92 0 5.96 3.28 5.96 7.5 0 .4-.04 1.26-.06 1.48zm-5.92-5.62c-1.03 0-2.17.73-2.17 2.58h4.25c0-1.85-1.07-2.58-2.08-2.58zM40.95 20.3c-1.44 0-2.32-.6-2.9-1.04l-.02 4.63-4.12.87V5.57h3.76l.08 1.02a4.7 4.7 0 0 1 3.23-1.29c2.9 0 5.62 2.6 5.62 7.4 0 5.23-2.7 7.6-5.65 7.6zM40 8.95c-.95 0-1.54.34-1.97.81l.02 6.12c.4.44.98.78 1.95.78 1.52 0 2.54-1.65 2.54-3.87 0-2.15-1.04-3.84-2.54-3.84zM28.24 5.57h4.13v14.44h-4.13V5.57zm0-4.7L32.37 0v3.36l-4.13.88V.88zm-4.32 9.35v9.79H19.8V5.57h3.7l.12 1.22c1-1.77 3.07-1.41 3.62-1.22v3.79c-.52-.17-2.29-.43-3.32.86zm-8.55 4.72c0 2.43 2.6 1.68 3.12 1.46v3.36c-.55.3-1.54.54-2.89.54a4.15 4.15 0 0 1-4.27-4.24l.01-13.17 4.02-.86v3.54h3.14V9.1h-3.13v5.85zm-4.91.7c0 2.97-2.31 4.66-5.73 4.66a11.2 11.2 0 0 1-4.46-.93v-3.93c1.38.75 3.1 1.31 4.46 1.31.92 0 1.53-.24 1.53-1C6.26 13.77 0 14.51 0 9.95 0 7.04 2.28 5.3 5.62 5.3c1.36 0 2.72.2 4.09.75v3.88a9.23 9.23 0 0 0-4.1-1.06c-.86 0-1.44.25-1.44.9 0 1.85 6.29.97 6.29 5.88z" fill-rule="evenodd"></path></svg>
                            </div>
                        </div>
                        <div class="voucher-container">
                            <div style="display: flex; justify-content: flex-end; margin-right: 15px;">Enter your voucher:</div>
                            <div style="display: block; text-align: left;">
                                <input type="text" class="voucher-code" value="{{ request()->get('voucher') }}" placeholder="Enter your voucher">
                            </div>
                        </div>
                        <div class="container-btn-payment">
                            <div class="btn-payment" data-btn-show="paddle">
                                Payment via Paddle
                            </div>
                            <div id="paypal-button-container" data-btn-show="paypal"></div>
                            <div id="card-element" data-btn-show="stripe"></div>
                            <div id="card-element-errors" data-btn-show="stripe"></div>
                            <div class="btn-payment" data-btn-show="stripe">
                                Payment via Stripe
                            </div>
                        </div>
                        <div class="note-payment" style="text-align: justify; font-size: 14px">
                            By purchasing, you accept the <a target="_blank" style="color: #fb9708" href="https://{{ $source }}/terms">Terms of Service</a> and acknowledge reading the <a target="_blank" style="color: #fb9708" href="https://{{ $source }}/security">Privacy Policy</a>. You also agree to our <a target="_blank" style="color: #fb9708" href="https://{{ $source }}/refund-policy">Refund Policy</a> and auto renewal of your subscription, which can be disabled at any time through your account. Your card details will be saved for future purchases and subscription renewals.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id={{ $paypal_client_id }}&vault=true&disable-funding=credit"></script>
    <script>
        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // console.log('getCookie', getCookie('test_xem'));
        // console.log('window.parent.document.title', window.parent.document.title);
        // console.log('window.parent.parent.document.title', window.parent.parent.document.title);

        function showLoading() {
            $('body').append('<div id="mask" style="display: none;"><img style="width: 25px" src="/images/loading.svg" /> Please wait....</div>');
            $('#mask').css("display", "flex").hide().fadeIn(300);
        }

        function sendEventToParent(event, data) {
            parent.postMessage(JSON.stringify({
                event,
                data
            }), "*");
        }

        function hideLoading() {
            $('#mask').fadeOut(300);
            setTimeout(function () {
                $('#mask').remove();
            }, 300);
        }

        var url = new URL(location.href);
        var private_token = url.searchParams.get("private_token") ? url.searchParams.get("private_token") : '';
        var site_name = url.searchParams.get("site_name") ? url.searchParams.get("site_name") : '';
        const countryStripe = ['US', 'MY', 'SG'];
        const country = '{{ !empty($_SERVER["HTTP_CF_IPCOUNTRY"]) ? $_SERVER["HTTP_CF_IPCOUNTRY"] : 'local' }}';
        const userEmail = '{{ !empty($user['email']) ? $user['email'] : '' }}';
        const userName = '{{ !empty($user['name']) ? $user['name'] : '' }}';
        const userId = '{{ !empty($user['id']) ? $user['id'] : '' }}';
        const paddlePassthrough = {!! !empty($arrInfor) ? json_encode($arrInfor) : '[]' !!};
        const status_show_stripe = '{{ $status_show_stripe }}';
        const paddle_vendor_id = {{ !empty($paddle_vendor_id) ? $paddle_vendor_id : 0 }};
        const source = '{{ $source }}';
        const paypal_client_id = '{{ $paypal_client_id }}';
        const trackingcode = '{{ !empty(request()->get('trackingcode')) ? request()->get('trackingcode') : '' }}';
        const stripe_public_key = '{{ $stripe_public_key }}';
        var stripe = undefined;

        if (stripe_public_key != '') {
            stripe = Stripe(stripe_public_key);
        }


        let firstScroll = true;
    </script>
    <script src="{{ mix('/js/packages-iframe.min.js') }}"></script>
@endsection
