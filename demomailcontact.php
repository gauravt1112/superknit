<?php

$to = "gaurav@togglehead.in,vishal@togglehead.in";
$subject = "Message From Superknit Contact Us Form";

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png","doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"tempimg/".strtotime('now')."".$file_name);
         //echo "Success";
      }
      else{
         print_r($errors);
      }
   }

$message = '<html><body>';
$message .= '<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
              <tr>
                <td width="35%" class="contact-form">Forename:<font color="red" size="3">*</font></td>
                <td width="5%" class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Forename'].'</td>
              </tr>
              <tr>
                <td class="contact-form">Surname:<font color="red" size="3"></font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Surname'].'</td>
              </tr>
              <tr>
                <td class="contact-form">Organisation:<font color="red" size="3">*</font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Organisation'].'</td>
              </tr>
              <tr>
                <td class="contact-form">Address:<font color="red" size="3"></font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Address'].'</td>
              </tr>
              <tr>
                <td class="contact-form">Email:<font color="red" size="3"></font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Email'].'</td>
              </tr>
              <tr>
                <td class="contact-form">Phone:<font color="red" size="3"></font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['Phone'].'</td>
              </tr>
                <tr>
                <td class="contact-form">ask:<font color="red" size="3"></font></td>
                <td class="contact-form">:</td>
                <td width="70%" class="contact-text-form">'.$_REQUEST['ask'].'</td>
              </tr>
              
			</table>';
$message .= '</body></html>';
//include attachment
/*$message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/octet-stream; 
name=\"404.html\"\r\n"."Content-Transfer-Encoding: 
base64\r\n"."Content-Disposition: attachment\r\n\r\n";
$message .= $attachment;
$message .= "/r/n--PHP-mixed-$random_hash--";*/
//End Html Page Here

// Always set content-type when sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <gaurav@togglehead.in>' . "\r\n";

mail($to,$subject,$message,$headers);
header("Location:../thank-you2.php");
?>