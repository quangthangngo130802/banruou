<?php
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class SendMail {
        public function send($title, $content, $nTo, $mTo){
            $mail = new PHPMailer(true);
            try{
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username   = 'thangngo138202@gmail.com';                     //SMTP username
                $mail->Password   = 'uehajyflxprkwfdj';  
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('hoangthaocl02@gmail.com', 'Quen mat khau');
                $mail->addAddress($mTo, $nTo);

                $mail->isHTML(true);
                $mail->Subject = $title;
                $mail->Body = $content;
                //$mail->AltBody = '';

                $mail->send();
                return true;

            } catch (Exception $e) {
                echo 'Không thể gửi. Có lỗi! ' . $mail->ErrorInfo;
            }
        }
    }
?>