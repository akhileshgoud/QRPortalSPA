
<?php
error_reporting(E_ALL);

$to = "nithin.k@accendotechnologies.com";
// $to = "akhil1302@gmail.com";
$user = $_REQUEST["usr"];
$id = $_REQUEST["id"];
$subject = $_REQUEST["sub"];
$priority = $_REQUEST["priority"];
$message = '<br/>Ticket Generated on:  ' . date("d/m/Y") . '<br/> <br/>';
$message .= '<br/>Hi <br/>';
$message .= '<br/> Greetings <br/>';
$message .= '<br/> <br/> Requester NAME:  ';
$message .= $user;
$message .= '<br/> <br/> Employee ID:  ';
$message .= $id;
$message .= '<br/> <br/> Subject:  ';
$message .= $subject;
$message .= '<br/> <br/> Priority:  ';
$message .= $priority;
$message .= '<br/> <br/> Description:  ';
$message .= $_REQUEST["comments"];


//uploading file

$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
$upload_dir =  'files';
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
   
    if (file_exists( '/var/www/html/portal/files/' . $_FILES["file"]["name"]))
      {
      echo " <br/> ** ERROR ** 
             <br/> The file " . $_FILES["file"]["name"] . " already exists. 
             <br/> Change the file name and resend the mail.";
      }
    else
      {
      $filename = $_FILES['file']['name'];
      if(move_uploaded_file($_FILES["file"]["tmp_name"], "$upload_dir/$filename"))
      {
      $message .= '<br/> <br/> Screenshot uploaded to: /var/www/html/portal/files ';
      $message = wordwrap($message,70);
      $message = str_replace("\n.", "\n..", $message);
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
      $headers .= 'From: <admin@accendotechnologies.com>' . "\r\n";
      $headers .= 'Cc: goutham.b@accendotechnologies.com' . "\r\n";
//      $headers .= 'Cc: akhiL1302@gmail.com' . "\r\n";
       if(mail($to,$subject,$message,$headers))	
       {
       echo "<br/> Your Mail has been succesfully sent
             <br/> The issue will be addressed soon.
             <br/> Thank you.";       }
       else
       {
       echo "Sending Failed";
       }
      }
      else
      {
     	echo 'File Uploding Failed.';
      }
      }
    }
  }
else
  {
      $message .= '<br/> <br/> No Screenshot uploaded';
      $message = wordwrap($message,70);
      $message = str_replace("\n.", "\n..", $message);
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
      $headers .= 'From: <admin@accendotechnologies.com>' . "\r\n";
      $headers .= 'Cc: goutham.b@accendotechnologies.com' . "\r\n";
//      $headers .= 'Cc: akhiL1302@gmail.com' . "\r\n";
       if(mail($to,$subject,$message,$headers))
       {
//echo $headers;
//echo $to;
       echo "<br/> Your Mail has been succesfully sent.
             <br/> The issue will be addressed soon.
             <br/> Thank you";      
       }
       else
       {
       echo "Sending Failed";
       }
  }
  
?>                                                                        
