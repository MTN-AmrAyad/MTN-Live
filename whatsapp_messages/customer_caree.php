<?php


require_once 'index(1).php';




$key = '4e1e63db98cf544db9b0fcfac49682117b125cd5ddd434fc'; //this is demo key please change with your own key
$url = 'http://116.203.191.58/api/send_message';

$updatenum = userData::get_user_number_carre();

foreach ($updatenum as $number) {
    
$message='✨تم فتح باب التسجيل ل 15 مقعد إضافي لبرنامج ( الطب التصنيفي - الجزء العضوي) 
الذي سوف تبدأ فعالياته غدا الجمعة الموافق 12 يوليو في المغرب الدار البيضاء وتستمر حتي 17 يوليو 

⏰الساعة 4:30 مساء بتوقيت المغرب 
📍ويوم 14 يوليو راحة 

⬅️للتسجيل والحصول على التذكرة من خلال اللينك 👇🏻
https://managethenow.com/forms/CTRL-organic-reservation/
📌شرط الحضور في القاعة إظهار التذكرة 

⬅️لإضافة البرنامج على الموقع للمشتركين والبرنامج غير مضاف التسجيل من خلال اللينك 👇🏻
https://managethenow.net/mtn-live/courses_page/add_ctrl_organic.php';

  if ($number['done_send'] == '1') {
  } else {
    $secnumber = $number['number'];


    $data = array(
      "phone_no"  => $secnumber,
      "key"       => $key,
      "message"   => $message,
      "skip_link" => True, // This optional for skip snapshot of link in message
      "flag_retry"  => "on", // This optional for retry on failed send message
      "pendingTime" => 3 // This optional for delay before send message
    );
    $data_string = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 360);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt(
      $ch,
      CURLOPT_HTTPHEADER,
      array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
      )
    );
    echo $res = curl_exec($ch);
    curl_close($ch);


    userData::update_user_number_caeer($secnumber);
  }
}
