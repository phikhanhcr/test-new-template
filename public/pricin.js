var initHeight = 0;
var trackingUrl = undefined;
var dataPush = {};
$(document).ready(function () {
    setData();
    if(!dataPush.token || !dataPush.email){
        sendEventToParent('401', {});
        return;
    }
    price = $.getUrlVar("price");
    trackingUrl = $.getUrlVar("callback");

    

    $(`[data-btn-show]`).hide();
    $(`[data-btn-show="${dataPush.gateway}"]`).css('display', 'flex');

    if(dataPush.gateway == 0){
        if(dataPush.productType == 0){
            loadPaypalSubcription();
        }else{
            loadPaypalProduct()
        }
    }
    setTimeout(function () {
        changeHeight();
    }, 1000);
});

function loadPaypalProduct() {
    var ppclientid = $.getUrlVar("ppclientid");
    if (ppclientid) {
        try {
            loadAsync(
                "https://www.paypal.com/sdk/js?client-id=" +
                    ppclientid +
                    "&vault=true&disable-funding=credit",
                function () {
                    paypal.Buttons({
                        createOrder: async function (data, actions) {
                            if (dataPush.ppcode == undefined) {
                                alert('Please select package!');
                                return;
                            } else if (dataPush.email == '') {
                                alert('Please login!');
                            } else {
                                let dataCreatePayment = await $.ajax(`${trackingUrl}/paypal/create-product`, {
                                    method: 'POST',
                                    data: dataPush
                                }).fail(function (jqXHR, textStatus, error) {
                                    alert(jqXHR.responseJSON.msg);
                                });

                                if(dataCreatePayment.code){
                                    return actions.order.create({
                                        purchase_units: [{
                                            reference_id: dataCreatePayment.code,
                                            amount: {
                                                value: dataCreatePayment.price,
                                                currency_code: dataCreatePayment.currency,
                                            },
                                        }]
                                    });
                                } else {
                                    alert('ERROR!');
                                }
                            }
                        },

                        onApprove: function(data, actions) {
                            dataPush.checkoutCode = data.orderID;
                            dataPush.paymentType = data.paymentSource;
                            sendEventToParent('payment-success', dataPush)
                        },
                        onError: function(err) {
                            console.log('onError', err);
                        },
                        onClick: function(data) {
                            console.log('onClick', data);
                            changeHeight();
                        },
        
                        onCancel: function(data) {
                            console.log('onCancel', data);
                            changeHeight();
                        },
                        onInit: function(data, actions)  {
                            changeHeight();
                        },
                    }).render('#paypal-button-container');
                }
            );
        } catch (e) {
            console.log(e);
        }
    }
}

function loadPaypalSubcription() {
    var ppclientid = $.getUrlVar("ppclientid");
    if (ppclientid) {
        try {
            loadAsync(
                "https://www.paypal.com/sdk/js?client-id=" +
                    ppclientid +
                    "&vault=true&disable-funding=credit",
                function () {
                    paypal.Buttons({
                        createSubscription: async function (data, actions) {
                            if (dataPush.ppcode == undefined) {
                                alert('Please select package!');
                                return;
                            } else if (dataPush.email == '') {
                                alert('Please login!');
                            } else {
                                let dataCreatePayment = await $.ajax(`${trackingUrl}/paypal/create-product`, {
                                    method: 'POST',
                                    data: dataPush
                                }).fail(function (jqXHR, textStatus, error) {
                                    alert(jqXHR.responseJSON.msg);
                                });

                                if(dataCreatePayment.code){
                                    var passData = {
                                        plan_id: dataPush.productId,
                                        custom_id:dataCreatePayment.code,
                                        subscriber: {
                                            name: {
                                                given_name: dataPush.token,
                                                surname: dataPush.email
                                            },
                                            email_address: dataPush.email
                                        }
                                    };
                                    return actions.subscription.create(passData);
                                } else {
                                    alert('ERROR!');
                                }
                            }
                        },
                        onApprove: function(data, actions) {
                            dataPush.checkoutCode = data.subscriptionID;
                            dataPush.paymentType = data.paymentSource;
                            sendEventToParent('payment-success', dataPush)
                        },
                        onError: function(err) {
                            console.log('onError', err);
                        },
                        onClick: function(data) {
                            console.log('onClick', data);
                            changeHeight();
                        },
        
                        onCancel: function(data) {
                            console.log('onCancel', data);
                            changeHeight();
                        },
                        onInit: function(data, actions)  {
                            changeHeight();
                        },
                    }).render('#paypal-button-container');
                }
            );
        } catch (e) {
            console.log(e);
        }

    }
}

function setData(){
    dataPush.token = $.getUrlVar("token");
    dataPush.email = $.getUrlVar("email");
    dataPush.gateway = $.getUrlVar("gateway");
    dataPush.packageId = $.getUrlVar("package_id");
    dataPush.productId = $.getUrlVar("productId");
    dataPush.accountId = $.getUrlVar("acc");
    dataPush.productType = $.getUrlVar("productType");
    dataPush.ppcode = $.getUrlVar("ppcode");
    
    dataPush.price = $.getUrlVar("price");
}

function changeHeight() {
    if (initHeight != document.querySelector('.container-btn-payment').scrollHeight) {
        initHeight = document.querySelector('.container-btn-payment').scrollHeight;
        sendEventToParent('change-height', {
            height: initHeight
        });
    }
}

function loadAsync(url, callback) {
    var s = document.createElement("script");
    s.setAttribute("src", url);
    s.onload = callback;
    document.head.insertBefore(s, document.head.firstElementChild);
}

function sendEventToParent(event, data) {
    parent.postMessage(
        JSON.stringify({
            event,
            data,
        }),
        "*"
    );
}
addEventListener("message", function (event) {
    try {
        const dataParse = JSON.parse(event.data);
        if (dataParse.event == 'click-item-package') {
            onClickItemPackage(dataParse.data);
        }
        if (dataParse.event == 'click-item-payment') {
            $(`[data-btn-show]`).hide();
            $(`[data-btn-show="${dataParse.data.type}"]`).css('display', 'flex');
        }
    } catch (e) {
        console.log(e);
    }
}, false);

function onClickItemPackage(data) {
    package_id = data.package_id;
    productId = data.productId;
}

$.extend({
    getUrlVars: function () {
        var vars = [],
            hash;
        var hashes = window.location.href
            .slice(window.location.href.indexOf("?") + 1)
            .split("&");
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split("=");
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function (name) {
        return $.getUrlVars()[name];
    },
});