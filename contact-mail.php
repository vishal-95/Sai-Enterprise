<?php
if(isset($_POST['submit']))

{

	 extract($_POST);
/*echo"<pre>";print_r($_POST);die;*/

    $msg = "";

    $submsg = "";

	$to    =    "info@sai-enterprise.com";



	$subject	=	"CONTACT FORM";

	$submsg    .=
				
				"Name : ".$name."<br>

				E-mail : ".$email."<br>

				
				
				Mobile : ".$mobile."<br>
				
				
				
				Enquiry : ".$enquiry;  
				 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 @mail($to, $subject, $submsg, $headers); 

	$msg .='<font color="#FF0000">Thank you for sending your query.</font>';

}

header ("location:http://sai-enterprise.com");

?>