<?php 


$input = [":bee:", ":bug:", ":beetle:", ":ant:", ":spider:"];
$rand_keys = rand(0, 4);
$icon = $input[$rand_keys]; 

$message = "SOMEONE FIXED A BUG!"; 
$room = "test"; 
$data = "payload=" . json_encode(array(         
        "channel"       =>  "#{$room}",
        "text"          =>  $message,
        "icon_emoji"    =>  $icon
    ));
$url = "https://hooks.slack.com/services/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";
         
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false
));

$result = curl_exec($ch);
echo var_dump($result);
if($result === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
 
curl_close($ch);