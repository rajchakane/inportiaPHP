              <div class = "row">
                <div class="table-responsive" style="font-size: 15px;">
                  <table class="table table-hover table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email id</th>
                        <th>Mobile</th>
                        <th>Area</th>
                        <th>Source</th>
                        <th>Course</th>
                      <!--  <th>Action</th>  "<td><a href=\"javascript:void(0)\" onclick=\"document.getElementById('fname').value='link1'; document.getElementById('mname').value='link3';\"> Edit </a> </td>" -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          //include('conconfig.php');
                          $srNo=1;
                          $sql = "SELECT personal_info.personal_id, personal_info.fname, personal_info.mname, personal_info.lname, contact.mobile, contact.email, address.area, course.name as course_name, dataSource.source_name FROM personal_info LEFT JOIN contact ON personal_info.personal_id = contact.personal_id LEFT JOIN address ON address.personal_id = personal_info.personal_id LEFT JOIN dataSource ON dataSource.source_id = personal_info.source_id LEFT JOIN course ON personal_info.course_id = course.course_id ORDER BY personal_info.entry_date DESC";
                              
                          $personalData= $link->query($sql);
                         
                            if ($personalData->num_rows > 0) {
                                  
                              while($row = $personalData->fetch_assoc()){
                                  echo "\t<tr><td>".$srNo."</td><td>".$row['fname']." ".$row['mname']." ".
                                  $row['lname']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['area']."</td><td>".$row['source_name'] .
                                      "</td><td>".$row['course_name']."</td></tr>\n";
                                        $srNo++;
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




