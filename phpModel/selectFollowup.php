<?php
	//echo "Selecting Followup  for:";

	$pid = $_REQUEST["pid"];

	if($pid != '')
	{
		include('conconfig.php');
		$sql = "SELECT `fu_status`, `fu_date`, `next_date`, `personal_id`, `fsummary`, `call_summary` FROM `follow_up` WHERE personal_id=".$pid." ORDER BY `fu_date`DESC";

		$result = $link->query($sql);
		if ($result->num_rows > 0) {
                                  
            while($row = $result->fetch_assoc()){
            	//echo $row['fu_status'];
            	$date = new DateTime($row['fu_date']);
            	$nextDate = new DateTime($row['next_date']);
            	echo " <div class='card my-1'>"
            	."         <div class='card-header'>"
            	."             Call Date: ". $date->format('d-m-Y')." "//date_format($row['fu_date'],'d/m/Y')." \t"
            	."          </div>"
            	."          <div class='card-body'>"
            	."		  <p><strong>Call Status: </strong> ".$row['fu_status']."</p>"
                  ."            <p><strong>Call Summary: </strong> ".$row['call_summary']."</p>";
                  if($row['fu_status'] == 'Connected'){
            	     echo "	  <p><strong>Next Followup Date: </strong> ".$nextDate->format('d-m-Y H:i:s')."</p>"
            	     ."		  <p><strong>Followup Summary: </strong> ".$row['fsummary']."</p><hr>";
                  }
            	echo "          </div>"
            	."      </div>";


            }
        }

	}
	
?>