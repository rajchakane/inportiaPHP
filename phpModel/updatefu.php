<?php
	//this will call on Update button click 
	//echo 'Welcome';
	$ufname =  $_POST['ufname']; 
  $upid =  $_POST['upid'];
  $umname =  $_POST['umname'];
  $ulname =  $_POST['ulname'];
  $ugender =  $_POST['ugender'];
  $ubirth_date =  $_POST['ubirth_date'];
  $umobile =  $_POST['umobile'];
  $uemail = $_POST['uemail'];
  $ualt_mobile =  $_POST['ualt_mobile'];
  //$ucourse_name =  $_POST['ucourse_name'];
  $ustreet_name =  $_POST['ustreet_name'];
  $uarea =  $_POST['uarea'];
  $ucity =  $_POST['ucity'];
  $ustate =  $_POST['ustate'];
  $upincode= $_POST['upincode'] == '' ? 'NULL' : $_POST['upincode'];
  $uqualification =  $_POST['uqualification'];
  $upassing_year = $_POST['upassing_year'] == '' ? 'NULL' : $_POST['upassing_year']; 
  $uorganasation_type =  $_POST['uorganasation_type'];
  $uorganisation =  $_POST['uorganisation'];
  $uyears_of_exp = $_POST['uyears_of_exp'] == '' ? 'NULL' : $_POST['uyears_of_exp'];

  $callstatus = $_POST['callstatus'];
  $nextdate = $_POST['nextdate'];
  $fsummary = $_POST['fsummary'];
  $callsummary = $_POST['callsummary'];

  $message='';
  	
  include('conconfig.php');
  if($nextdate != ''){
  	// Formating Date
  	$nextdate =  new DateTime($nextdate);
		$nextdate = date_format($nextdate, 'Y-m-d');

		$insertsql = "INSERT INTO `follow_up` (`fu_status`,  `next_date`, `personal_id`, `fsummary`, `call_summary`) VALUES ('$callstatus', '$nextdate', '$upid', '$fsummary', '$callsummary')";
  		echo $insertsql;
		$link->query($insertsql);
	}
  	//echo $nextdate;

  if($upid != '')
  {  		
  	$sql="UPDATE `personal_info` SET `fname` = '$ufname', `mname` = '$umname', `lname` = '$ulname', `gender` = '$ugender', `birth_date` = '$ubirth_date' WHERE `personal_info`.`personal_id` = '$upid' ";

  	//echo $sql;
  	
	 	$sql1 = "UPDATE `address` SET `street_name` = '$ustreet_name', `area` = '$uarea', `city` = '$ucity', `state` = '$ustate', `pincode` = $upincode WHERE `address`.`personal_id` = '$upid' ";
	  	
  	$sql2= "UPDATE `contact` SET `mobile` = '$umobile', `alt_mobile` = '$ualt_mobile', `email` = '$uemail' WHERE `contact`.`personal_id` = '$upid' ";
  
  	$sql3 ="UPDATE `professional_details` SET `qualification` = '$uqualification', `passing_year` = $upassing_year, `organasation_type` = '$uorganasation_type', `organasation_name` = '$uorganisation', `years_of_exp` = $uyears_of_exp WHERE `professional_details`.`personal_id` = '$upid' ";
    //	echo $sql3;
  	
    if ( $link->query($sql)  && $link->query($sql1) && $link->query($sql2) && $link->query($sql3) ) {

	 		header("location: ../admin/adminhome.php");	

    	echo "Record updated successfully";
		} else {
   	 	echo "Error updating record: " . $link->error;
		}
	} else {
		echo "No Lead Selected";
	}

?>

    
  