<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="referrer" content="no-referrer" />
    <title>Pricing</title>
</head>

<body style="overflow: hidden">
<iframe id="payment" referrerpolicy="no-referrer" style="height: 0px; width: 100%; border: 0" src="/pricing?<?php echo str_replace('level=1', 'level=2', $_SERVER['QUERY_STRING']); ?>"></iframe>
</body>
<script src="/plugins/jQuery/jquery-3.2.1.min.js?v1.0"></script>
<script type="text/javascript">
    function sendEventToParent(event, data) {
        if (true || location.href != parent.location.href) {
            parent.postMessage(JSON.stringify({
                event,
                data
            }), "*");
        }
    }

    addEventListener("message", function (event) {
        try {
            const dataParse = JSON.parse(event.data);
            if (dataParse.event == 'click-item-package') {
                sendEventToIframe('#payment', dataParse.event, dataParse.data);
            } else {
                sendEventToParent(dataParse.event, dataParse.data);
            }

            if (dataParse.event == 'change-height') {
                $('#payment').css('height', dataParse.data.height + 25);
            }
        } catch (e) {

        }
    }, false);

    async function sendEventToIframe(element, event, data) {
        try {
            let contentWindow = document.querySelector(element).contentWindow;
            if (contentWindow) {
                contentWindow.postMessage(JSON.stringify({
                    event,
                    data
                }), "*");
            }
        } catch (e) {
            console.log(e);
        }
    }
</script>
</html>
