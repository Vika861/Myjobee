<script>
if(performance.navigation.type == 2){
   location.reload(true);
}
</script>

<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="style.css"> <title>Tx|Vikas</title> </head> <body> <div class="center_div"><h1>Myjobee Refer SCRIPT</h1><h1>PROVIDED BY Tx|Vikas<h1>



 <?php
 

		$filename="counterR.json";   

if(!file_exists($filename)){ $counter= 0; file_put_contents($filename, $counter);  }   else { $counter = file_get_contents("counterR.json"); }




if(isset($_REQUEST['submit'])){

 

error_reporting(0);
function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function useragent(){
$l6 = array("5","6","7","8","9","10","11","12");
$d1=$l6[mt_rand(0,7)];
 $l64 = array("0","1");
$d2=$l64[mt_rand(0,1)];
$d="$d1.$d2.0";
 $de1 = array("Redmi","Realme","Oppo","Vivo","Google","Samsung","Xiomi","mi","Techno","Nokia","Oneplus","Reno");
$de11=$de1[mt_rand(0,11)];
 $de2 = array("Y1","Y2","Y3","Y5","X1","X2","1","3","5","7","8","9","6","C12","C15","Note2","Note5","Pixle3","Pixel5","Reno5","Reno2","Galaxy 4","Galaxy 5");
$de12=$de2[mt_rand(0,22)];
$dname="$de11 $de12";
$ip = long2ip(rand());
return$u='Mozilla/5.0 (Linux; Android '.$d.'; '.$dname.') AppleWebKit/537.36 (KHTML, like Gecko) Chrome/'.$ip.' Mobile Safari/537.36';
}
$u=useragent();
$cook=rando(strlen("94jj426p91ftdfam9krdp7j7g6"));

$dev = rando(32);
$num = $_REQUEST['num'];
$ref = $_REQUEST['ref'];
$iip = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);


$ip= $_SERVER['REMOTE_ADDR'];


$url = "https://api.myjobee.com/user/token?appVersion=1.45.1";

$data = '{
  "query":"mutation{ sendOTPMessage( mobile_number:{ country_code:\"91\", number:\"'.$num.'\"},user_type: 0,check_user_existence: false) { status data { is_registered registration_step resend_after user_data { _id email mobile_number{ country_code number } whatsapp_enabled profile_type is_suspended suspension_reason last_login device_id failed_attempts timezone image token OTP valid_till user_recruiter_collection { _id user_id first_name middle_name last_name role hide_phone_number } user_job_seeker_collection { _id user_id dob gender } } } error httpStatusCode }}",
  "variables":{}
}';

$headers = [];
$headers[] = 'Host: api.myjobee.com';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'device-id: '.$dev.'';
$headers[] = 'x-api-key: saPWEAUkwbiStkiygODZqTDFPmsVAHC8J8S0+rRseHA=';
$headers[] = 'x-country-code: IN';
$headers[] = 'x-device-country-code: IN';
$headers[] = 'x-user-platform: android';
$headers[] = 'content-type: application/json';
$headers[] = 'accept-encoding: gzip';
$headers[] = 'user-agent: okhttp/4.9.2';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

$output = curl_exec($ch);
$json = json_decode($output, true);



$status = $json['data']['sendOTPMessage']['status'];
$is_registered = $json['data']['sendOTPMessage']['data']['is_registered'];





 
if($is_registered === false){


echo "<div class='success'><center>
<font color='green'> Otp Send Successfully To :- $num
	</font></div>
";  


echo"

<form action='otp.php' method='POST'>



   <input type='hidden' name='num' value='$num' required>
   
   <input type='hidden' name='refuser' value='$refuser' required>

   

   <input type='hidden' name='ref' value='$ref' required>

   

   <input type='hidden' name='dev' value='$dev' required>

   

   <input type='text' class='input_text' name='otp' placeholder='Enter OTP' required>

   

   <input type='submit' class='submit_btn' name='submit' value='ADD REFER'>

</form>";



}else{

if($is_registered==true){



echo "<div class='error'><center>
<font color='green'>Already registered with this number
	</font></div>
";  

  echo"<meta http-equiv=refresh content=2;url='https://telegram.dog/TxScripter>";
 

}else{




echo "<div class='error'><center>
<font color='green'>$output
	</font></div>
";  

  echo"<meta http-equiv=refresh content=2;url='https://telegram.dog/TxScripter>";
 

}}
}





if(!isset($_REQUEST['submit'])){



   echo"

   <form action='' method='POST'>

   

  <input type='text' class='input_text' name='num' placeholder='Enter Unregistered Number' required>

  

    <input type='text' class='input_text' name='ref' placeholder='Enter Refer Code' required>

  

  <input type='submit' class='submit_btn' name='submit' value='SEND OTP'>



  </form>";

  
}

     echo "<div class='success'><center>
<font color='green'>  Total Refer Done => $counter
	</font></div>
";  


  

 ?>
 
<div class="telegram"> <script type="text/javascript"> (function(){ var script=document.createElement("script"); script.type="text/javascript"; script.async =true;script.src="//telegram.im/widget-button/index.php?id=@TxScripter"; document.getElementsByTagName("head")[0].appendChild(script);})(); </script> <a href="https://telegram.dog/TxScripter" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"style="font-size:23px; letter-spacing:1px; max-width:400px;font-family: 'Rajdhani', sans-serif; background:rgb(88, 33, 206);box-shadow:1px 1px 5px rgb(88, 33, 206);font-weight: 500; border:1px solid rgb(88, 33, 206); color:#ffffff;border-radius:50px;" title="Join Now"><i></i>Join Our Telegram<small><span class="telegramim_count" data-for="@TxScripter">Join Now</span></small></a><hr><center><script type="text/javascript" src="//widget.supercounters.com/ssl/online_i.js"></script><script type="text/javascript">sc_online_i(1615318,"ffffff","e61c1c");</script><noscript><a href="https://www.supercounters.com/">free online counter</a></noscript> </center> </div> </div> </body> </html>