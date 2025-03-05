<?php
include_once('models/loginStudentModel.php');
include_once('models/loginAdminModel.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once('phpmailer/vendor/autoload.php');

class send_email
{
   public function header_email($f,$e)
   {
      
      $mail = new PHPMailer(true);                                   //Create an instance; passing `true` enables exceptions
      
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
         $mail->setFrom('dreiandmores04@gmail.com', $f);
         $mail->addAddress($e);                                      //Add a recipient
         //Content
         $mail->isHTML(true);                                        //Set email format to HTML
         return $mail;

      } catch (Exception $e) {
         
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      
      }
   
   }

   public function send_approved($f,$e)
   {
      $mail = $this->header_email($f,$e);

      if (!$mail) {
         echo "Email setup failed.";
         return false;
      }

      try {
         
         $mail->Subject = 'Your CCSO Account Has Been Approved!';
         $email_template = "
            <h4>Hello, $f!</h4>
            <p>
               We received a request regarding your account, and we're happy to inform you that it has been approved by the Admin of CSU Lasam Guidance Counselor .
               If you already have an account, you can log in using the link below:
            </p>
            <br/>
            <a href='http://localhost/iicis-project/?route='> Click to login </a>
         ";
         $mail->Body = $email_template;
         
         $mail->send();
         return true;

      } catch (Exception $e) {

         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      
      }
      
   }

   public function send_disapproved($fullname,$sendemail)
   {
      $mail = $this->header_email($fullname,$sendemail);

      if (!$mail) {
         echo "Email setup failed.";
         return false;
      }

      try {

         $mail->Subject = 'Update on Your CCSO Account Request';
         $email_template = "
            <h4>Hello, $fullname!</h4>
            <p>
               Regarding to your account. Unfortunately, your account has been disapproved by the Admin of CSU Lasam Guidance Counselor.</br>
               If you have any questions or need further assistance, please feel free to reach out to us.</br>
            </p>
        ";
        $mail->Body = $email_template;
         $mail->send();

      } catch (Exception $e) {
         
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      
      }
   }

   public function send_signup($fullname,$sendemail)
   {
      $mail = $this->header_email($fullname,$sendemail);

      if (!$mail) {
         echo "Email setup failed.";
         return false;
      }

      try {

         $mail->Subject = 'Your Account is Pending Approval!';
         $email_template = "
            <h4>Hello, $fullname!</h4>
            <p>
               We have received your account request, and it is currently under review by the Admin. 
               <br>
               You will receive a notification once your account has been approved.
            </p>
        ";
        $mail->Body = $email_template;
         $mail->send();

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
         $this->send_signup($txtLastName." ".$txtFirstName ." ". substr($txtMiddleName,0,1),$txtEmail);

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
            $this->send_disapproved($fullname,$email);

         } else {
            
            $this->loginModel->update_approved("Approved", $_POST['approved']);
            $this->send_approved($fullname,$email);
         
         }
      }
   }
   # end
}

?>
