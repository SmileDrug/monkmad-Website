

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<center> <h1>Thank You!</h1><br> <h3>Monk will call you for your inquiry.<br>Enjoy Your Day :)
</h3>
<h3 style="color:#ff4545;"> <a href="index.php">Open The Pandora Box Again</a> </h3>
</center>
    <?php

    if($_POST["Submit"]) {
        $recipient="contact@monkmad.in";
        $subject="Inquiry from MonkMad";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];

        $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        $thankYou="<p>Thank you! Your message has been sent.</p>";
    }

    ?>

  </body>
</html>
