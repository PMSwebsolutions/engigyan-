<?php
         $to = "prvs17ec@cmrit.ac.in";
         $subject = $_POST['subject'];
         
         $message = "<h1> Name: "  . $_POST['name'] . "</h1>";
         $message .= "<h1> EMAIL: "  . $_POST['email'] . "</h1>";
		 $message .= "<h1> MOBILE: "  . $_POST['mobile'] . "</h1>";
		 $message .= "<h1> MESSAGE: "  . $_POST['message'] . "</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $langs = $_POST['langs'];
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script type='text/javascript'>alert('MESSAGE SENT SUCCESSFULLY');</script>";
			//sleep(10);
			if( $langs == "ta" ){
				echo "<script type='text/javascript'>window.location.href = 'contact-ta.html';</script>";
			}elseif ($langs == "hi"){
				echo "<script type='text/javascript'>window.location.href = 'contact-hi.html';</script>";
			}else{
				echo "<script type='text/javascript'>window.location.href = 'contact-en.html';</script>";
			}
         }else {
            echo "Message could not be sent...";
         }
      ?>
