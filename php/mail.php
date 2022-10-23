<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>

        <?php 
            if(isset($_POST['submit'])){
                $to = "mr.abirmahamud@gmail.com"; // this is your Email address
                
                $name = $_POST['name'];
                $from = $_POST['email']; 
                $message = $_POST['message']; 
                $subject = "Form submission";
                $subject2 = "Copy of your form submission";
                $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
                $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                $sendadmin = mail($to,$subject,$message,$headers);
                $senduser = mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
                // You can also use header('Location: thank_you.php'); to redirect to another page.

                if( $sendadmin == true ) {
                    echo "Message sent successfully...";
                }else {
                    echo "Message could not be sent...";
                }

                if( $senduser == true ) {
                    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
                }else {
                    echo "Message could not be sent...";
                }
            }
        ?>
      
   </body>
</html>