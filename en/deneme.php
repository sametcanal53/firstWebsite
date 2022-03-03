<?php



use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require '../PHPMailer/src/Exception.php';

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//İletişim formumuzdan gelen bilgileri alıyoruz.

$adisoyadi = $_POST['name'];

$eposta = $_POST['email'];

$subject = $_POST["subject"];

$mesaj = $_POST['message'];



$mail = new PHPMailer(); //ilgili PHPMailer class'ımızdan bir nesne türetiyoruz.

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->Host = 'srvc49.turhost.com'; //SMTP için kullanılacak sunucu adresi

$mail->Port = 465; //TLS protokolünün kullanacağı port numarası

$mail->SMTPSecure = 'ssl'; //kullanacağımız güvenlik protokolü SSL veya TLS olabilir.

$mail->Username = 'info@sametcanal.com'; //Email gönderecek adres

$mail->Password = '3yR&$?8x'; ////Email gönderecek adresin şifresi

$mail->SetFrom($mail->Username, 'info@sametcanal.com');

$mail->AddAddress('info@sametcanal.com', '

'); //Bu emaili gideceği e-posta adresi

$mail->CharSet = 'UTF-8'; //Karakterlerin düzgün görünmesi için utf-8 ekliyoruz.

$mail->Subject = "Siteden mail var! "; //emailimizin konusu



//email içeriğimiz

$icerik = "Gönderenin ; <br /> Adı Soyadı = " . $adisoyadi .

    "<br /> E-posta = " . $eposta .

    "<br /> Konu = " . $subject .

    "<br /> Mesaj = " . $mesaj;



$mail->MsgHTML($icerik);



//Artık emailimizi gönderiyoruz, yukarıdaki bilgilerde bir hata varsa bu satırda hata verecektir.

if ($mail->Send()) {

    //E-posta gönderildi
    header("Location:  https://sametcanal.com/en/index?email=1");
} else {

    // Bir hata oluştu, hata mesajı yazdırıyoruz

    echo $mail->ErrorInfo;
    header("Location: https://sametcanal.com/en/index");
}



// SİTE YONLENDIRMELERI YAPILACAK.