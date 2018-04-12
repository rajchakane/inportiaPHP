<script type="text/javascript" src="../vendor/js/myscript.js"></script>



<div class = "row">
  <div class="table-responsive" style="font-size: 15px;">
    <table class="table table-hover table-bordered">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Action</th>
          <th>First Name </th>
          <th>Middle</th>
          <th>Last Name</th>
          <th>Email id</th>
          <th>Mobile</th>      
          <th>Source</th>
          <th>Course</th>
          <th>Gender</th>
          <th>Birth Date</th>
          <th>Alt Contact</th>
          <th>Street Name</th>
          <th>Area</th>
          <th>City</th>
          <th>State</th>
          <th>pin</th>
          <th>Qualification</th>
          <th>Passing Year</th>
          <th>Organisation Type</th>
          <th>organisation</th>
          <th>Exp (in Yrs)</th>
        </tr>
      </thead>
      <tbody>
        <?php
          //include('conconfig.php');   
          $srNo=0;                       
           $link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
          $sql = "SELECT pi.personal_id AS personal_id, pi.fname AS fname, pi.mname AS mname, pi.lname AS lname, pi.gender AS gender, pi.birth_date AS birth_date, pi.entry_date AS entry_date, c.mobile AS mobile, c.alt_mobile AS alt_mobile, c.email AS email, ad.street_name AS street_name, ad.area , ad.city, ad.state, ad.pincode, pdt.qualification, pdt.passing_year, pdt.organasation_type, pdt.organasation_name, pdt.years_of_exp, ds.source_name, crs.name AS course_name FROM personal_info AS pi LEFT JOIN professional_details pdt ON pdt.personal_id = pi.personal_id LEFT join contact AS c ON c.personal_id = pi.personal_id LEFT JOIN address AS ad ON ad.personal_id = pi.personal_id LEFT JOIN dataSource AS ds ON ds.source_id = pi.source_id LEFT JOIN course AS crs ON crs.course_id = pi.course_id ";
                                      
          $personalData= $link->query($sql);
                               
          if ($personalData->num_rows > 0) {
                                          
            while($row = $personalData->fetch_assoc()){           
              
              $srNo++;
              echo "<tr><td>".$srNo."</td><td id='".$row['personal_id']."'><a href='javascript:void(0)' onclick=\"get_record('".$row['personal_id']."','".$row['fname']."','".$row['mname']."','".$row['lname']."','".$row['gender']."','".$row['birth_date'] ."','".$row['mobile']."','".$row['alt_mobile'] ."','".$row['email']."','".$row['course_name']."','".$row['street_name'] ."','"
              .$row['area'] ."','".$row['city']."','".$row['state'] ."','".$row['pincode'] ."','".$row['qualification'] ."','".$row['passing_year'] ."','".$row['organasation_type'] ."','".$row['organasation_name'] ."','".$row['years_of_exp'] ."');\"> EDIT</a></td><td>"
                    .$row['fname']."</td><td> ".$row['mname']." </td><td>".$row['lname']."</td><td>"
                    .$row['email']."</td><td>".$row['mobile']."</td><td>".$row['source_name'] ."</td><td>"
                    .$row['course_name']."</td><td>".$row['gender'] ."</td><td>".$row['birth_date'] ."</td>"
                    ."<td>".$row['alt_mobile'] ."</td>"
                    ."<td>".$row['street_name'] ."</td><td> ".$row['area'] ."</td><td> ".$row['city'] ."</td> <td> ".$row['state'] ."</td><td> ".$row['pincode'] ."</td>"
                    ."<td>".$row['qualification'] ."</td><td>".$row['passing_year'] ."</td>"
                    ."<td>".$row['organasation_type'] ."</td><td>".$row['organasation_name'] ."</td>"
                    ."<td>".$row['years_of_exp'] ."</td>"
                    ." ";

/*
echo "<tr><td>".$srNo."</td><td id='".$row['personal_id']."'><a href='javascript:void(0)' onclick=\"get_record('".$row['personal_id']."','".$row['fname']."','".$row['mname']."','".$row['lname']."','".$row['gender']."','".$row['birth_date'] ."','".$row['mobile']."','".$row['alt_mobile'] ."','".$row['email']."','".$row['course_name']."','".$row['street_name'] ."','"
              .$row['area'] ."','".$row['city']."','".$row['state'] ."','".$row['pincode'] ."','".$row['qualification'] ."','".$row['passing_year'] ."','".$row['organasation_type'] ."','".$row['organasation_name'] ."','".$row['years_of_exp'] ."');\"> EDIT</a></td><td>"
                    .$row['fname']." ".$row['mname']." ".$row['lname']."</td><td>"
                    .$row['email']."</td><td>".$row['mobile']."</td><td>".$row['source_name'] ."</td><td>"
                    .$row['course_name']."</td><td>".$row['gender'] ."</td><td>".$row['birth_date'] ."</td>"
                    ."<td>".$row['alt_mobile'] ."</td>"
                    ."<td>".$row['street_name'] .", ".$row['area'] .", ".$row['city'].", -".$row['pincode'] ."</td>"
                    ."<td>".$row['qualification'] ."</td><td>".$row['passing_year'] ."</td>"
                    ."<td>".$row['organasation_type'] ."</td><td>".$row['organasation_name'] ."</td>"
                    ."<td>".$row['years_of_exp'] ."</td>"
                    ." ";
*/
            }
          } else {
            echo "No results Found";
          }  
                                    
          $link->close();
        ?>
     
      </tbody>
    </table>
  </div>
</div>
