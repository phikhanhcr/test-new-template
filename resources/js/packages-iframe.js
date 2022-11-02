var price = 0
var total = undefined
var time = undefined
var package_id = undefined
var planId = undefined
var paddleId = undefined
var domainTracking = `https://pay.${location.host}/admin`;
var payDomain = `https://pay.${location.host}`;
var initHeight = 0;
var paddlePercent = 20;

function calcPrice() {
    let resultPrice = price;
    if (false && source == 'amzfootball.com') {
        if ($('.item-payment.active').data('type') == 'paddle') {
            resultPrice = price + ( price * paddlePercent / 100);
            $('.note-paddle').css('display', 'inline-block');
        } else {
            resultPrice = price;
            $('.note-paddle').css('display', 'none');
        }
    }
    return resultPrice;
}

function paddleSuccessCallback(data) {
    console.log('paddleSuccessCallback');
}

function onClickItemPackage(data) {
    package_id = data.package_id;
    planId = data.planId;
    paddleId = data.paddleId;
    price = data.price ? parseFloat(data.price) : 0;
    time = data.time ? data.time : '';
    total = data.total ? data.total : undefined;

    if (total) {
        $('.total-price').html(data.total);
    } else {
        $('.total-price').html(`US$${calcPrice()} - ${time}`);
    }
}

addEventListener("message", function (event) {
    try {
        const dataParse = JSON.parse(event.data);
        if (dataParse.event == 'click-item-package') {
            onClickItemPackage(dataParse.data);
        }
    } catch (e) {

    }
}, false);

function getDataPay() {
    paddlePassthrough.voucher = $('.voucher-code').val();
    paddlePassthrough.trackingcode = trackingcode;
    paddlePassthrough.package_id = package_id;
    console.log(paddlePassthrough);
}

$(document).ready(function () {
    if (document.referrer) {
        console.log('document.referrer', document.referrer);
    } else {
        console.log('no referer')
    }

    if (false && source == 'amzfootball.com') {
        $('.percent-20').css('display', 'block');
    }

    changeHeight();

    setTimeout(function () {
        changeHeight();
    }, 1000);

    if ($('.item-payment:not(.hide)').length == 1) {
        $('.item-payment:not(.hide)').addClass('hide');
    }

    console.log('paddle_vendor_id', paddle_vendor_id)

    Paddle.Setup({
        vendor: paddle_vendor_id,
        eventCallback: function (data) {
            if (data.event == 'Checkout.Loaded') {
                hideLoading();
            }
            if (data.event == 'Checkout.Close') {
                hideLoading();
                sendEventToParent('change-height', {
                    height: initHeight
                });
                $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+`&type=paddle&action=cancel&site_name=${site_name}&account=${paddleId}`);
                sendEventToParent('payment-cancel', {
                    package_id,
                    type: 'paddle'
                })
            }
            if (data.event == 'Checkout.Complete') {
                sendEventToParent('change-height', {
                    height: initHeight
                });
                hideLoading();
                let receive_code = data.eventData.checkout.id;
                sendEventToParent('payment-success', {
                    url: "/thank-you?user_id="+userId+"&package_id=" + package_id + "&receive_code="+receive_code+"&type=paddle",
                    fullData: data
                })
            }
        }
    });

    $('.item-payment').on('click', function (){
        $('.item-payment').removeClass('active');
        $(this).addClass('active');

        let type = $(this).data('type');
        // type = 'paddle';
        $(`[data-btn-show]`).hide();
        $(`[data-btn-show="${type}"]`).css('display', 'flex');
        setTimeout(function () {
            changeHeight();
        }, 500);
        for (let i =0; i<=20; i++) {
            setTimeout(function () {
                changeHeight();
            }, i * 50)
        }

        if (false && source == 'amzfootball.com') {
            $('.total-price').html(`US$${calcPrice()} - ${time}`);
        }

    })

    $('[data-btn-show="paddle"]').on('click', function () {
        $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+`&type=paddle&action=click&site_name=${site_name}&account=${paddleId}`);
        sendEventToParent('change-height', {
            height: 800
        });
        sendEventToParent('show-loading');

        getDataPay();

        Paddle.Checkout.open({
            product: paddleId,
            email: userEmail,
            passthrough: paddlePassthrough
        })
    });

    if(typeof (paypal) != 'undefined') {
        paypal.Buttons({
            createSubscription: function (data, actions) {
                if (package_id == undefined) {
                    alert('Please select package!');
                    return;
                } else if (userEmail == '') {
                    alert('Please login!');
                } else {

                    getDataPay();

                    console.log({
                        plan_id: planId,
                        subscriber: {
                            name: {
                                given_name: `${paddlePassthrough.id}`,
                                surname: JSON.stringify(paddlePassthrough)
                            },
                            email_address: userEmail
                        }
                    });

                    return actions.subscription.create({
                        plan_id: planId,
                        subscriber: {
                            name: {
                                given_name: `${paddlePassthrough.id}`,
                                surname: JSON.stringify(paddlePassthrough)
                            },
                            email_address: userEmail
                        }
                    });
                }
            },
            onApprove: function (data, actions) {
                sendEventToParent('payment-success', {
                    url: "/thank-you?user_id="+userId+"&package_id=" + package_id + "&type=paypal&&receive_code=" + data.orderID + "&subscriptionID=" + data.subscriptionID,
                    fullData: data
                })
            },
            onError: function (err) {
                console.log(err)
                $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+'&site_name='+site_name+'&account='+paypal_client_id+'&type=paypal&action=error&data=' + err);
                // alert('Please reload website')
                // sendEventToParent('reload-page')
            },

            onClick: function (e) {
                $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+'&site_name='+site_name+`&type=paypal&action=click&account=${paypal_client_id}`);
            },

            onCancel: function (e) {
                console.log('e', e);
                $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+'&site_name='+site_name+`&type=paypal&action=cancel&account=${paypal_client_id}`);
                sendEventToParent('payment-cancel', {
                    package_id,
                    type: 'paypal'
                });
            }
        }).render('#paypal-button-container');
    }

    var elements = undefined;
    var card = undefined;

    if (stripe_public_key != '' && typeof (stripe) != 'undefined') {
        try {
            elements = stripe.elements();
            card = elements.create('card', { style: {
                    base: {
                        lineHeight: '3',
                        color: '#FFF',
                        fontSize: '16px',
                        fontFamily: '"Open Sans", sans-serif',
                        fontSmoothing: 'antialiased',
                        '::placeholder': {
                            color: '#999',
                        }
                    },
                    invalid: {
                        color: '#e5424d',
                        ':focus': {
                            color: '#303238',
                        },
                    },
                }});
            card.mount('#card-element');

            card.on('change', function (event) {
                displayError(event);
            });
            function displayError(event) {
                // changeLoadingStatePrices(false);
                let displayError = document.getElementById('card-element-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            }
        } catch (e) {
            console.log(e);
        }
    }

    $('.btn-payment[data-btn-show="stripe"]').on('click', async function (e) {
        if (userEmail == '') {
            alert('Please login!');
            location.href = source
            return;
        }
        e.preventDefault();
        $.get(domainTracking + '/tracking-click-payment?private_token='+private_token+'&site_name='+site_name+`&type=stripe&action=click&account=${stripe_public_key}`);
        showLoading();
        $('#submit-payment-btn').html('Get client secret...');
        let stripe_subcription = await $.get(`${payDomain}/api/v1/thanh-toan/stripe-get-subcription?private_token=${private_token}&source=${source}&package_id=${package_id}&public_key=${stripe_public_key}`);

        if (stripe_subcription && stripe_subcription.clientSecret) {
            $('#submit-payment-btn').html('Paying...');
            stripe.confirmCardPayment(stripe_subcription.clientSecret, {
                payment_method: {
                    card,
                    billing_details: {
                        email: userEmail,
                        name: userName
                    },
                }
            }).then((result) => {
                hideLoading();
                if (result.error) {
                    alert(result.error.message);
                } else {
                    showLoading();
                    console.log('stripeSuccess');
                    sendEventToParent('payment-success', {
                        url: "/thank-you?client_secret="+stripe_subcription.clientSecret+"&user_id="+userId+"&package_id=" + package_id + "&type=stripe"
                    })
                }
            });
        } else {
            hideLoading();
            alert('Not found ClientSecret');
        }
    })

    $('.item-payment')[0].click();
})

function changeHeight() {
    if (initHeight != document.querySelector('.step-2').scrollHeight) {
        initHeight = document.querySelector('.step-2').scrollHeight;

        sendEventToParent('change-height', {
            height: initHeight
        });
    }
}
