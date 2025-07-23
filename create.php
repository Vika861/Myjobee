<script>
if(performance.navigation.type == 2){
   location.reload(true);
}
</script>
<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="style.css"> <title>Tx|Vikas</title> </head> <body> <div class="center_div"><h1>Myjobee Refer SCRIPT</h1><h1>PROVIDED BY Tx|Vikas<h1>




 <?php



error_reporting(0);




	$filename="counterR.json";   

if(!file_exists($filename)){ $counter= 0; file_put_contents($filename, $counter);  }   else { $counter = file_get_contents("counterR.json"); }





function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$cook=rando(strlen("94jj426p91ftdfam9krdp7j7g6"));

$f = array("Aadarsh","Abhay","Abhijeet","Abhimanu","Abhinav","Abhishek","Akhil","Aman","Ambuj","Amit","Anand","Anil","Ankit","Ankush","Anuj","Arjun","Ashish","Atul","Avdesh","Ayush","Bhanu","Bhavesh","Chandan","Deepak","Dev","Devbrat","Dipu","Ganesh","Gaurav","Gopal","Hariom","Harshit","Himanshu","Jatin","Kapil","Karan","Kanhiya","Krish","Krishna","Kunal","Manish","Mangal","Mohan","Mohit","Monu","Nishant","Nitish","Lav","Parmod","Parth","Praduman","Prashant","Prem","Raghu","Rahul","Raj","Rakesh","Rambhu","Ramesh","Ravi","Ravindra","Rishabh","Rishi","Rohan","Ronak","Roshan","Sachin","Sagar","Sanjit","Samar","Sameer","Sant","Sanju","Satish","Satya","Shivam","Shirshant","Shrikant","Sohan","Sonu","Sonal","Sourabh","Sudhanshu","Sudheer","Sujeet","Sumit","Sunil","Sushil","Suraj","Suresh","Umesh","Vijay","Vikram","Vinay","Vinod","Vishal","Vishu","Virat","Vivek","Yash","Yogesh");
$l = array("Aarya","Agarwal","Ahir","Akela","Arora","Awasthi","Banerjee","Bhaduriya","Bhatt","Chakra","Chakarvarti","Chattarjee","Chaubey","Chaturvedi","Chandravanshi","Chauhan","Choudhary","Dhawal","Dhawan","Deshmukh","Dubey","Dokhle","Gandhi","Gokhil","Ghoshal","Gokul","Gond","Goswami","Gupta","Hooda","Jaat","Jain","Jatara","Jayes","Jugi","Kapoor","Kumar","Kharwar","Kesari","Kohli","Kumhaar","Kurmi","Kushwaha","Lala","Lakhani","Lohar","Lokhande","Malhotra","Marvare","Maurya","Maali","Mauryavanshi","Mehra","Mital","Modi","Naidu","Naveen","Nehru","Patani","Paatil","Pal","Pandey","Paneri","Panjiwan","Pathak","Patel","Pele","Prajapati","Prashad","Prabhu","Raghuwanshi","Raj","Rajput","Raja","Ram","Ramdin","Raydu","Rotle","Roy","Sardar","Seikh","Seth","Sharma","Singh","Singhania","Sukla","Shinghle","Surya","Survanshi","Suryavanshi","Swasthi","Talpade","Talwar","Tahrik","Tilakdhari","Tiwari","Tripathi","Trivedi","Verma","Yadav","Yaduvanshi");

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
$fname = $f[mt_rand(0,100)];
$lname = $l[mt_rand(0,100)];
$name1 = "$fname$lname$mo";
$mo = RandomNumber(8);
$name=''.$fname.''.$otp.'';

$num = $_REQUEST['num'];
$otp = $_REQUEST['otp'];
$ref = $_REQUEST['ref'];
$dev = $_REQUEST['dev'];
$data=$_REQUEST['data'];
$token=$_REQUEST['token'];


$iip = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);



$ip= $_SERVER['REMOTE_ADDR'];


$url = "https://api.myjobee.com/jobSeeker?appVersion=1.45.1";

$data = '{
  "query": "mutation updateJobSeeker($email:String, $about_me:String, $aadhar_number:String, $dob:String, $gender:String, $lang:[lang_type], $registrationStep:String, $languages:[languages], $address:[address], $referral_code:String,$whatsapp_enable:Boolean,$mobile_number:mobile_number_input){  updateJobSeeker(email:$email,about_me:$about_me, aadhar_number:$aadhar_number, dob:$dob, gender:$gender, lang:$lang, registration_step: $registrationStep, languages: $languages, address:$address, referral_code:$referral_code,whatsapp_enabled: $whatsapp_enable,mobile_number: $mobile_number){ _id }  }",
  "variables": {
    "email": "",
    "about_me": "",
    "aadhar_number": null,
    "passport_number": null,
    "gender": "male",
    "whatsapp_enable": true,
    "mobile_number": {
      "country_code": "91",
      "number": "' . $num . '"
    },
    "lang": [{
      "lang_code": "en",
      "details": {
        "first_name": "' . $fname . '",
        "middle_name": "",
        "last_name": "' . $lname . '"
      }
    }],
    "registrationStep": null,
    "languages": [{
      "_id": null,
      "title": "English",
      "code": "en",
      "is_primary": true
    }],
    "referral_code": "' . $ref . '",
    "address": [{
      "geoCoordinates": {
        "type": "Point",
        "coordinates": [28.6139298, 77.2088282]
      },
      "radius": null,
      "details": [{
        "location_details": {
          "address": "New Delhi",
          "address2": "",
          "area": "",
          "state": "Delhi",
          "country": "India",
          "city": "New Delhi",
          "zip": ""
        }
      }]
    }]
  }
}';

$headers = [];
$headers[] = 'Host: api.myjobee.com';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'x-access-token:'.$token.'';
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



$iid = $json['data']['updateJobSeeker'][0]['_id'];




if ($iid !="") {
   

echo "<div class='success'><center>
<font color='green'>Profile Created Successfully..
	</font></div><br>
";  

echo "<div class='success'><center>
<font color='green'>Refer Done Successfully.
	</font></div><br>
";  


echo"<meta http-equiv=refresh content=2;url='https://telegram.dog/TxScripter>";
 




$filename="counterR.json"; 
if(!file_exists($filename)){ $counter= 0; } else $counter = file_get_contents ($filename); $counter++; file_put_contents($filename, $counter);







}else{

echo "<div class='error'>  <p>looks! like something went wrong!</p> <br><p>Message :- $output</p>
  </div>
";  
  
echo"<meta http-equiv=refresh content=4;url='https://telegram.dog/TxScripter>";
 

  }



   echo "<div class='success'><center>
<font color='green'>  Total Refer Done => $counter
	</font></div>
";  




?> 

<div class="telegram"> <script type="text/javascript"> (function(){ var script=document.createElement("script"); script.type="text/javascript"; script.async =true;script.src="//telegram.im/widget-button/index.php?id=@TxScripter"; document.getElementsByTagName("head")[0].appendChild(script);})(); </script> <a href="https://telegram.dog/TxScripter" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"style="font-size:23px; letter-spacing:1px; max-width:400px;font-family: 'Rajdhani', sans-serif; background:rgb(88, 33, 206);box-shadow:1px 1px 5px rgb(88, 33, 206);font-weight: 500; border:1px solid rgb(88, 33, 206); color:#ffffff;border-radius:50px;" title="Join Now"><i></i>Join Our Telegram<small><span class="telegramim_count" data-for="@TxScripter">Join Now</span></small></a><hr><center><script type="text/javascript" src="//widget.supercounters.com/ssl/online_i.js"></script><script type="text/javascript">sc_online_i(1615318,"ffffff","e61c1c");</script><noscript><a href="https://www.supercounters.com/">free online counter</a></noscript> </center> </div> </div> </body> </html>