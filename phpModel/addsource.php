<?php
    include("conconfig.php");
    
    $fname = $_POST['fname']; 
    $mname = $_POST['mname']; 
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $area = $_POST['area'];
    $know = $_POST['know'];
    $course = $_POST['course'];

     // Insert Personal Information
    $sql = "INSERT INTO `personal_info` (`fname`, `mname`, `lname`, `entry_date`,  `source_id`, `course_id`) SELECT  '$fname', '$mname', '$lname', now(), ds.source_id, c.course_id FROM course c, dataSource ds WHERE c.name = '$course' AND ds.source_name =  '$know' ";
    
   
    $count = 0;
    $last_id = 0;

   //$link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

    if ($link->query($sql) === TRUE) {
        $last_id = $link->insert_id;
        $count++;
        //$sql1= "UPDATE `personal_info` SET `entry_date`= now() WHERE `personal_id`=$last_id";
        //$link->query($sql1);
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

     // Insert Contact Details
     $sql2= "INSERT INTO `contact` ( `mobile`, `email`,`personal_id`) VALUES ('$phone', '$email', '$last_id')";
     //echo $sql2;

    if ($link->query($sql2) === TRUE) {
        $count++;
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $link->error;
    } 

     // Insert Address Details
     $sql3= "INSERT INTO `address` ( `area`,  `personal_id`) VALUES ('$area', '$last_id')";
      //echo $sql3;

    if ($link->query($sql3) === TRUE) {
        $count++;
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql3 . "<br>" . $link->error;
    }  




    $sql4= "INSERT INTO `professional_details` ( `personal_id`) VALUES ('$last_id')";
    echo $sql4;

    if ($link->query($sql4) === TRUE) {
        $count++;
        echo $sql4. "   New record created successfully";
    } else {
        echo "Error: " . $sql4 . "<br>" . $link->error;
    }  







       
    $link->close();
    echo $count;
    //header("location: adminhome.php");
?>