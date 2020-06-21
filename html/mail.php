<?php

$request_param = $_POST;

$request_datetime = date("Y年m月d日 H時i分s秒");


$mailto = $request_param['email'];
$to = "naoki4178@i.softbank.jp";
$mailfrom = "naoki4178@i.softbank.jp";
$subject = "お問い合わせ、ありがとうございます。";

$content = "";
$content .= $request_param['name']. "様\r\n";
$content .= "お問い合わせ、ありがとうございます。\r\n";
$content .= "=================================\r\n";
$content .= "お名前　 　　　　　　" . htmlspecialchars($request_param['name'])."\r\n";
$content .= "学校名　 　　　　　　" . htmlspecialchars($request_param['school'])."\r\n";
$content .= "郵便番号　 　　　　　" . htmlspecialchars($request_param['postalcode'])."\r\n";
$content .= "住所　 　　　　　　　" . htmlspecialchars($request_param['addr11'])."\r\n";
$content .= "電話番号　 　　　　　" . htmlspecialchars($request_param['phonenumber'])."\r\n";
$content .= "メールアドレス　 　　" . htmlspecialchars($request_param['mail'])."\r\n";
$content .= "ご用件　 　　　　　　" . htmlspecialchars($request_param['requirement'])."\r\n";
$content .= "希望資料　 　　　　　" . htmlspecialchars($request_param['document'])."\r\n";
$content .= "第一志望校　 　　　　" . htmlspecialchars($request_param['desiredschool'])."\r\n";
$content .= "内容詳細　 　　　　　" . htmlspecialchars($request_param['content'])."\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "お問い合わせがありました。";
$content2 = "";
$content2 .= "お問い合わせがありました。\r\n";
$content2 .= "=================================\r\n";
$content2 .= "お名前　 　　　　　" . htmlspecialchars($request_param['name'])."\r\n";
$content2 .= "学校名　 　　　　　　" . htmlspecialchars($request_param['school'])."\r\n";
$content2 .= "郵便番号　 　　　　　" . htmlspecialchars($request_param['postalcode'])."\r\n";
$content2 .= "住所　 　　　　　　　" . htmlspecialchars($request_param['addr11'])."\r\n";
$content2 .= "電話番号　 　　　　　" . htmlspecialchars($request_param['phonenumber'])."\r\n";
$content2 .= "メールアドレス　 　　" . htmlspecialchars($request_param['mail'])."\r\n";
$content2 .= "ご用件　 　　　　　　" . htmlspecialchars($request_param['requirement'])."\r\n";
$content2 .= "希望資料　 　　　　　" . htmlspecialchars($request_param['document'])."\r\n";
$content2 .= "第一志望校　 　　　　" . htmlspecialchars($request_param['desiredschool'])."\r\n";
$content2 .= "内容詳細　 　　　　　" . htmlspecialchars($request_param['content'])."\r\n";
$content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
$content2 .= "================================="."\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信
if($request_param['token'] === '1234567'){
if(mb_send_mail($to, $subject2, $content2, $mailfrom)){
   mb_send_mail($mailto,$subject,$content,$mailfrom);
   ?>

   <script>
       window.location = "./contact.html";
   </script>
   <?php
} else {
   header('Content-Type: text/html; charset=UTF-8');
 echo "メールの送信に失敗しました";
};
} else {
echo "メールの送信に失敗しました（トークンエラー）";
}

?>



