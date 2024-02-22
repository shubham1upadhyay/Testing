<?
    // send email to user
	 
	    $name=$_POST["name"]; 
		  $mailus=$_POST["mailus"];	  
		  $mobile=$_POST["mobile"]; 
		  $msg=$_POST["msg"]; 
		
		  
		 /*  if(($Fname=="")||($phone=="")||($comments=="")||($from==""))
			{
			header("Location:error.htm");
			} */
				 //------------------   Email Coding (Start)----------------------//
		       
	           $message .= "<html>";
	           $message .= "<head><style type='text/css'>";
	           $message .= "tr {background-color: #FFFFFF;}";
	           $message .= "th {font-family: Arial, Helvetica, sans-serif; font-size: 10pt; color: #660033; font-weight: bold;text-align: left;}";
	           $message .= "td {font-family: Arial, Helvetica, sans-serif; font-size: 8pt; color: #660033;}";
	           $message .= "p {font-family: Arial, Helvetica, sans-serif; font-size: 12pt; color: #660033;}";
	           $message .= "h1 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18pt; color: #006633;}";


	          $message .= "</style><head>";
	          $message .= "<body>";
	          $message .= "<h3>Below find the Contact Details !!</h3>";
			  
	        $message .= "<table border='1' bordercolor='#FF9800' cellpadding='0' cellspacing='0'  bgcolor='#ffffff' align='Center' width='80%'>"; 
 			
		    $message .= "<tr><th width=40%> Name</th><td width=60%>$name</td></tr>";
			$message .= "<tr><th width=40%>Email Id.</th><td width=60%>$mailus</td></tr>";		 		
			$message .= "<tr><th width=40%>Phone No.</th><td width=60%>$mobile</td></tr>";		 		
            $message .= "<tr><th width=40%>Message</th><td width=60%>$msg</td></tr>"; 
      

	        $message .= "</table>";
			$message .= "</body></html>"; 
			$to="nishant@intensivecreations.com";
			$From="nishant@intensivecreations.com"; 
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$From.''. "\r\n";
			$subject.= "Enquiry for - (NK TYAGI & ASSOCIATES)";
			//$headers  = "From: $from\r\nContent-type: text/html; charset=iso-8859-1\n"; 
			$success = mail($to, $subject, $message, $headers); 
			header("Location:thanks.php"); 
			
			?>
