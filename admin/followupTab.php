
<div class="container px-0" id="editrecord" style="display:none;">
  <div class="row">

    <div class="col-md-7 col-sm-12 ">
            <div class="card">
        <div class="card-header">
          Edit Details
        </div>
        <div class="card-body">
        <form class="well form-horizontal" action="../phpModel/updatefu.php" method="post" id="Update_form" >
         
          <div class="row">
            <div class="input-group input-group mb-3 col-md-6">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
              </div>
              <select name="callstatus" class="form-control selectpicker" >
                <option>Call Status</option>
                <option value="Connected">Connected</option>
                <option value="Not Answered">Not Answered</option>
                <option value="Busy">Busy Call Later</option>
                <option value="Not Reachable">Not Reachable</option>                        
              </select>
            </div>
            <div class="input-group input-group mb-3 col-md-6">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
              </div>
              <input id="nextdate" name="nextdate"  type="date" class="form-control" placeholder="NextDate" aria-label="" aria-describedby="basic-addon" value="" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
            </div>
            <div class="input-group input-group mb-3 col-md-12">
              <div class="input-group-prepend">
                <span class="input-group-text"> Attention</span>
              </div>
              <input id="fsummary" name="fsummary"  type="text" class="form-control" placeholder="Next followup attension" aria-label="" aria-describedby="basic-addon" value="">
            </div>
            <div class="input-group input-group mb-3 col-sm-12">
              <div class="input-group-prepend">
                  <span class="input-group-text">Call Details</span>
              </div>
              <textarea  id="callsummary" name="callsummary"  type="text" class="form-control" placeholder="Call Summary"  aria-label="" aria-describedby="basic-addon" value=""></textarea>
            </div>
          </div>

          <div class="row">
            <div class="input-group input-group mb-3 col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <span class="input-group-text">First</span>
              </div>
              <input id="ufname" name="ufname" type="text" class="form-control" placeholder="First Name" aria-label="" aria-describedby="basic-addon" value="">
              <input type="Hidden" id='upid' name="upid" name="Personal_ID">
            </div>
            <div class="input-group input-group mb-3 col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <span class="input-group-text">Middle</span>
              </div>
              <input id="umname" name="umname"  type="text" class="form-control" placeholder="Middle Name" 
                         aria-label="" aria-describedby="basic-addon" value="">
            </div>
            <div class="input-group input-group mb-3  col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <span class="input-group-text">Last</span>
              </div>
              <input id="ulname" name="ulname"  type="text" class="form-control" placeholder="Last Name" 
                        aria-label="" aria-describedby="basic-addon" value="">
            </div>
            <div class="input-group input-group mb-3 col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <span class="input-group-text">Gender</span>
              </div>
              <input id="ugender" name="ugender" type="text" class="form-control" placeholder="Gender" 
                           aria-label="" aria-describedby="basic-addon" value="">
            </div>
            <div class="input-group input-group mb-3 col-md-6 col-sm-12">
              <div class="input-group-prepend">
                <span class="input-group-text">Birth-Date</span>
              </div>
              <input id="ubirth_date" name="ubirth_date"  type="text" class="form-control" placeholder="Birth date" aria-label="" aria-describedby="basic-addon" value="">
            </div>
          <div class="input-group input-group mb-3 col-md-6 col-sm-12">
            <div class="input-group-prepend">
              <span class="input-group-text">Mobile</span>
            </div>
            <input id="umobile" name="umobile"  type="text" class="form-control" placeholder="Mobile" aria-label="" aria-describedby="basic-addon" value="" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9">
          </div>
          <div class="input-group input-group mb-3 col-md-6 col-sm-12">
            <div class="input-group-prepend">
              <span class="input-group-text">Alt No</span>
            </div>
            <input id="ualt_mobile" name="ualt_mobile"  type="text" class="form-control" placeholder="Alternate No" aria-label="" aria-describedby="basic-addon" value="" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9">
          </div>
          <div class="input-group input-group mb-3 col-md-6 col-sm-12">
            <div class="input-group-prepend">
              <span class="input-group-text">Email</span>
            </div>
            <input id="uemail" name="uemail"  type="email" class="form-control" placeholder="Email" aria-label="" aria-describedby="basic-addon" value="">
          </div>
                     <!-- <div class="input-group input-group mb-3 col-sm-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Course</span>
                        </div>
                        <input id="ucourse_name" name="ucourse_name"  type="text" class="form-control" placeholder="Course" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div> -->
          <div class="input-group input-group mb-3 col-md-6 col-sm-12">
            <div class="input-group-prepend">
              <span class="input-group-text">Street</span>
            </div>
                        <input id="ustreet_name" name="ustreet_name"  type="text" class="form-control" placeholder="Street" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Area</span>
                        </div>
                        <input id="uarea" name="uarea"  type="text" class="form-control" placeholder="Area" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">City</span>
                        </div>
                        <input id="ucity" name="ucity"  type="text" class="form-control" placeholder="City" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">State</span>
                        </div>
                        <input id="ustate" name="ustate"  type="text" class="form-control" placeholder="State" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Zip</span>
                        </div>
                        <input id="upincode" name="upincode"  type="text" class="form-control" placeholder="Zip" aria-label="" aria-describedby="basic-addon" value="" pattern="[0-9]{6}" title="Invalid Pincode">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Qualification</span>
                        </div>
                        <input id="uqualification" name="uqualification"  type="text" class="form-control" placeholder="Qualification" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Passing Year</span>
                        </div>
                        <input id="upassing_year" name="upassing_year"  type="text" class="form-control" placeholder="Passing Year" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Organisation Type</span>
                        </div>
                        <input id="uorganasation_type" name="uorganasation_type"  type="text" class="form-control" placeholder="Organisation Type" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Orgnisation</span>
                        </div>
                        <input id="uorganisation" name="uorganisation"  type="text" class="form-control" placeholder="Organisation Name" 
                        aria-label="" aria-describedby="basic-addon" value="">
                      </div>
                      <div class="input-group input-group mb-3 col-md-6 col-sm-12">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Exp-Yrs</span>
                        </div>
                        <input id="uyears_of_exp" name="uyears_of_exp"  type="text" class="form-control" placeholder="Exp in Yrs" aria-label="" aria-describedby="basic-addon" value="" title="Invalid value" pattern="^\d*(\.\d{0,2})?$">
                      </div>
                        
                      <div class="offset-md-4 offset-sm-3 col-sm-6 col-md-4 col-lg-4">
                        <button type="submit" class="btn course_btn btn-block text-white" name="update">Update</button>
                      </div>
                     

                      <div class="col-md-5"></div>
                    </div>
        </form>
      </div>
   
      </div>

    </div>
    <!--Follow up status for selectec Lead -->
    <div class="col-md-5 col-sm-12 px-0">
      <div class="container px-0">
 
          <div class="card px-0">
            <div class="card-header breadcrumb" >
            Follow Up Details
            </div>
              <div id="followupData" class="card-body px-0 fs-15"  style="max-height:765px;  overflow-y: scroll;">

              </div>
          </div>
      </div>


  </div>
  </div>
   <hr>

</div>
<div class="container px-0">
  <?php
     include('../phpModel/showFollowUp.php');
   ?> 
</div>









