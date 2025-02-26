<?php

   //Import PHPMailer classes into the global namespace
   //These must be at the top of your script, not inside a function
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

   //Load Composer's autoloader
   require_once('phpmailer/vendor/autoload.php');
   class forgotpassController
   {
      private $forgotpassModel;

      public function __construct()
      {
         $this->forgotpassModel = new forgotpassModel();
      }

      public function forgotPass($fullname,$sendemail)
      {
         //Create an instance; passing `true` enables exceptions
         $mail = new PHPMailer(true);

         try {
            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dreiandmores04@gmail.com';             //SMTP username
            $mail->Password   = 'fbnxhzqmyfeuslgn';                     //SMTP password
            $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('dreiandmores04@gmail.com', $fullname);
            $mail->addAddress($sendemail);                              //Add a recipient

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = 'Email Verification from CSU Lasam Campus';
            $email_template = "
               <h4>Hi $fullname!</h4>
               <p>
                  You are receiving this email because we received a request from your CCSO account.</br>
                  Your account is already approved by CCSO Admin.</br>
                  Already have an account? Login! Click the link below.
               </p>
               <br/><br/>
               <a href='http://localhost/iicis-project/?route='> Click to login </a>
         ";
         $mail->Body = $email_template;
            $mail->send();
         } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }
      }

      public function forgot_password()
      {

         if($_SERVER['REQUEST_METHOD'] === "POST") 
         {

            $fullName = $_POST['fullName'];
            $userName = $_POST['userName'];
            $emailAdd = $_POST['emailAddress'];
   
            if ($this->forgotpassModel->forgot_password($userName,$emailAdd)) {
               $this->forgotPass($fullName, $emailAdd);
            } else {
               $_SESSION['error'] = "Something went wrong. Please try again.";
            }
            header('Location: ?route=forgot-password');
         }

      }

   }

?>