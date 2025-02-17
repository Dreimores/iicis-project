<?php
include_once('models/loginStudentModel.php');
include_once('models/loginAdminModel.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class send_email
{
   public function send($fullname,$email)
   {
      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

      try {
         //Server settings
         $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
         $mail->isSMTP();                                            //Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
         $mail->Username   = 'dreiandmores04@gmail.com';             //SMTP username
         $mail->Password   = 'fbnxhzqmyfeuslgn';                     //SMTP password
         $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
         $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

         //Recipients
         $mail->setFrom('from@example.com', 'Mailer');
         $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
         $mail->addAddress('ellen@example.com');               //Name is optional
         $mail->addReplyTo('info@example.com', 'Information');
         $mail->addCC('cc@example.com');
         $mail->addBCC('bcc@example.com');

         //Attachments
         $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
         $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

         //Content
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = 'Here is the subject';
         $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

         $mail->send();
         echo 'Message has been sent';
      } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
   }
}


class loginStudentController extends send_email
{

   private $loginModel;
   private $loginAdminModel;

   public function __construct()
   {
      $this->loginModel      = new loginStudentModel();
      $this->loginAdminModel = new loginAdminModel();
   }

   public function sign_up()
   {
      $txtOldStudentNo = $_POST['txtOldStudentNo'] ?? '';
      $txtStudentNo = $_POST['txtStudentNo'] ?? '';
      $txtPassword  = $_POST['txtPassword'] ?? '';
      $txtFirstName = $_POST['txtFirstName'] ?? '';
      $txtMiddleName = $_POST['txtMiddleName'] ?? '';
      $txtLastName  = $_POST['txtLastName'] ?? '';
      $cbYearLevel  = $_POST['cbYearLevel'] ?? '';
      $txtEmail     = $_POST['txtEmail'] ?? '';
      $cbCourse     = $_POST['courseid'] ?? '';
      $cbCollege    = $_POST['collegeid'] ?? '';
      $cbMajor      = $_POST['majorid'] ?? '';
      $filesname    = $_FILES['files']['name'] ?? '';
      $tmp_name     = $_FILES['files']['tmp_name'] ?? '';

      if (isset($_POST['btnSubmitSaveAdd'])) {

         $this->loginModel->sign_up($txtStudentNo, $txtPassword, $txtLastName, $txtFirstName, $txtMiddleName, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $filesname);
         move_uploaded_file($tmp_name, 'uploads/' . $filesname);
         $_SESSION['success'] = "Student account has been created successfully!";
      } else if (isset($_POST['btnSubmitSaveEdit'])) {

         $old_image = $_POST['old__image'] ?? '';

         if (!empty($filesname)) {
            # Remove the old uploaded file
            unlink('uploads/' . $old_image);
            # Move the new uploaded file and set it as the old_image
            move_uploaded_file($tmp_name, 'uploads/' . $filesname);
            $old_image = $filesname;
         }

         $this->loginModel->sign_update($txtStudentNo, $txtPassword, $txtLastName, $txtFirstName, $txtMiddleName, $cbYearLevel, $txtEmail, $cbCourse, $cbCollege, $cbMajor, $old_image, $txtOldStudentNo);
         $_SESSION['success'] = "Student account has been edited successfully!";
      } else if (isset($_POST['btnDelete'])) {

         $studentId = $_POST['studentId'];
         $this->loginModel->sign_delete($studentId);
         unlink("uploads/" . $_POST['unlinkimg']);
         $_SESSION['success'] = "Student account has been deleted successfully!";
      } else {

         $_SESSION['error'] = "Something went wrong! Please try again.";
      }
   }

   # sign in an account
   public function sign_in()
   {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

         $txtUName = $_POST['txtUName'];
         $txtPWord = $_POST['txtPWord'];

         $result       = $this->loginModel->sign_in($txtUName, $txtPWord);
         $admin_result = $this->loginAdminModel->sign_in_admin($txtUName, $txtPWord);

         if (empty($txtUName)) {

            $_SESSION['errUName'] = "Username is required!";
            header("Location: ?route=sign-in");
         } elseif (empty($txtPWord)) {

            $_SESSION['errPWord'] = "Password is required!";
            header("Location: ?route=sign-in");
         } else if ($result) {

            $_SESSION['username'] = $txtUName;
            header("Location: ?route=dashboard");
         } elseif ($admin_result) {

            $_SESSION['admin-username'] = $txtUName;
            header("Location: ?route=admin-dashboard");
         } else {

            $_SESSION['errIncor'] = "Incorrect Username or Password.";
            header("Location: ?route=sign-in");
         }
      }
   }
   # end

   # for approved an account of student
   public function update_approved()
   {
      if ($_SERVER['REQUEST_METHOD'] === "POST") {
         $fullname = $_POST['fullname'];
         $email    = $_POST['email'];

         if ($_POST['status'] === "Approved") {

            $this->loginModel->update_approved("Pending...", $_POST['approved']);
         } else {

            $this->loginModel->update_approved("Approved", $_POST['approved']);
         }
      }
   }
   # end
}

?>
