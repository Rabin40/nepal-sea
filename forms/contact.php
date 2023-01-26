
<!-- 
  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'rabinbalayar40@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
// -->

<?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $to='rabinbalayar40@gmail.com';
        $subject='Customer Enquiry';
        $message="Full Name: ".$fname." ".$lname. "\n\n"."Email-Address: ".$email."\n\n". "Phone: ".$phone."\n\n"."Feedback Content: "."\n\n".$message;
        $headers="From ".$to;

        if (mail($to, $subject, $message, $headers)) {
            echo "<h1>Thanks for your Feedback.</h1>".$name;
        }
        else{
            echo "Something went Wrong!!!!";
        }
    }
?>