
<?php
				require "vendor/autoload.php";

				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\SMTP;

				if (isset($_POST['appoint'])) {
				    $name = $_POST['name'];
				    $email = $_POST['email'];
				    $branch = $_POST['branch'];
				    $phone = $_POST['phone'];
				    $msg = $_POST['message'];


				    $mail = new PHPMailer(true);
		        $mail->isSMTP();
		        $mail->SMTPAuth = true;

		        $mail->Host = "mail.dscmuni.com";
		        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		        $mail->Port = 587;

		        $mail->Username = "support@dscmuni.com";
                $mail->Password = "Mawarich@2023";

		        $mail->setFrom($email, $name);
				$mail->addAddress("support@dscmuni.com");

		        $mail->Subject = $name." "."Appointment";
		        $mail->Body    = $msg."on the".$branch." Kindly reach me out on".$phone;
		        $mail->IsHTML(true);

		        
		        
            $mail->send();
            echo '<script type="text/javascript">alert("Your appointment has been successfully sent for Review");</script>'; 
				    }
				

				 
				

?>