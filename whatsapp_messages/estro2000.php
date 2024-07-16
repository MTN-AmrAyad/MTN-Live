<?php


require_once 'index(1).php';




$key = '53e6845a7bc50f05f3bee7133ebe9994690f1d6aa78d56df'; //this is demo key please change with your own key
$url = 'http://116.203.191.58/api/send_message';

$updatenum = userData::get_user_number();

foreach ($updatenum as $number) {
    
$message='الحدث الأكبر لهذا العام قادم! 
إنتِ مدعوة الآن إلي محاضرة جماهيرية مجانية "رحلة الحمل الممتعة" في دبي🤰

لكل أنثى في فترة الحمل او مقبلة علي الحمل او في بداية الزواج وعندها شعور الخوف من هذه التجربة... المحاضرة الجماهيرية صُممت خصيصًا لكِ... 🥰🤱

المحاضرة الجماهيرية يوم الثلاثاء 23 ابريل 2024 
Edge Creekside Hotel 📍 IN DUBAI
متاح الحضور في القاعة او اونلاين

من الساعة 5 الي الساعة 6 مساءا بتوقيت السعودية
من الساعة 6 الي الساعة 7 بتوقيت الإمارات 

متاح التسجيل من خلال هذا اللينك 👇🏻
https://managethenow.com/forms/PregnancyLecture/';

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


    userData::update_user_number($secnumber);
  }
}
