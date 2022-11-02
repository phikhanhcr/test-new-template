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
                        <h1 class="heading-light title mb-20 text-dark">Refund Policy for Premium Plans</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item text-dark">Home</li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Refund Policy for Premium Plans</li>
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
                            <h3 class="title mb-20">Refund Policy Details</h3>
                            <div class="container" style="flex-direction: column; align-items: unset">
							<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">When purchasing a subscription, you can cancel your premium plan at any time to prevent it from being automatically renewed. After cancellation, your subscription can still be used until it expires.</span></span></span></p>
							<ul>
								<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">Refund requests have to be submitted within </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>7 DAYS</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""> after the day of receipt </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>AND</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""> we </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>ONLY</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""> issue refunds for the following cases:</span></span></span></li>
								</ul>
									<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - You already canceled the auto-renewal of your subscription but you are still charged for that subscription in the next cycle.</span></span></span></p>
									<p><span style="font-size:11pt"><span style="font-family:Arial"><span style="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Your subscription is activated but you have to encounter difficulties while watching: unable to watch on TV, freezing, lags, or there is no match of your need. </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><em>(Please provide us with the evidence and additional information right at the time of the error.)</em></span></span></span></p>
									<ul>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">If you cannot access your subscription </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>after payment</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="">, i.e. “user not match” error or encountering pop ups while watching, this may be because you have logged in using a different email from the email you used to make payments. In this case, we will assist you to find the right login email and you are </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>NOT</strong></span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""> eligible for a refund.&nbsp;</span></span></span></li>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">In the event that we do issue a refund, </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><strong>your access to the Service(s) will be revoked.</strong></span></span></span></li>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">Accounts which have been used for more than half of the account’s duration are not valid for refund.</span></span></span></li>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">Refunds usually take 5~7 workdays to take place and it’s not in our hands to reduce this period. Our payment processors will take care of refund requests. We will refund any users immediately after seeing the request and checking user information.</span></span></span></li>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">We are not responsible for any bank charges, commissions or overdrafts. The only way to remove these charges is through direct negotiation with your bank.</span></span></span></li>
									<li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="">If you consider your situation to be a special circumstance then please send the refund request to our support mail and we shall consider your individual request. </span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style=""><em>(Please provide us with the evidence and additional information right at the time of the error.)</em></span></span></span></li>
								</ul>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection