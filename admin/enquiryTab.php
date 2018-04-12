<form class="well form-horizontal" action="addsource.php" method="post" id="contact_form">
                  <div class="row">
                    <div class="input-group input-group mb-3 col-sm-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" aria-label="" aria-describedby="basic-addon">
                    </div>
                    <div class="input-group input-group mb-3 col-sm-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input id="mname" name="mname"  type="text" class="form-control" placeholder="Middle Name" aria-label="" aria-describedby="basic-addon">
                    </div>
                    <div class="input-group input-group mb-3 col-sm-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input name="lname"  type="text" class="form-control" placeholder="Last Name" aria-label="" aria-describedby="basic-addon">
                    </div>
                    
                    <div class="input-group input-group mb-3 col-sm-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                      </div>
                      <input name="email" type="email" class="form-control" placeholder="E-mail ID" aria-label="" aria-describedby="basic-addon">
                    </div>
                    <div class="input-group input-group mb-3 col-sm-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile-alt "></i></span>
                      </div>
                      <input type="text" name="phone"  class="form-control" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" aria-describedby="basic-addon">
                      <!-- <input name="phone" type="number" class="form-control" placeholder="Mobile number" aria-label="" aria-describedby="basic-addon"> -->
                    </div>
                    <div class="input-group input-group mb-3 col-sm-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                      </div>
                      <input name="area" type="text" class="form-control" placeholder="Area" aria-label="" aria-describedby="basic-addon">
                    </div>
                    <div class="input-group input-group mb-3 col-sm-6">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                      </div>
                      <select name="know" class="form-control selectpicker" >
                        <option>Data Source</option>
                        <option value="JustDial">JustDial</option>
                        <option value="UrbanPro">UrbanPro</option>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Linkedin">Linkedin</option>
                        <option value="Email">Email</option>
                        <option value="Banner">Banner</option>
                        <option value="Friend">Friend</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    
                    <div class="input-group input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                      </div>
                      <select name="course" class="form-control selectpicker">
                        <option value="default">Course Keyword</option>
                        <option value="Internship">Internship</option>
                        <option value="Selenium">Selenium - Automation Testing and Framework Development</option>
                        <option value="AngularJS">AngularJS - Web Development</option>
                        <option value="Android">Android -Mobile App Development</option>
                        <option value="Hadoop ">Hadoop - Big Data Analytics</option>
                        <option value="Java">Java</option>
                        <option value="C C++">C C++</option>
                        <option value="C#">C#</option>
                        <option value="Python">Python</option>
                        <option value=".Net">.Net</option>
                        <option value="web">Basic Web Development -HTML5-CSS3-JavaScript</option>
                        <option value="PHP">PHP</option>
                        <option value="Teaching">Teaching</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    
                    <div class="col-md-5"></div>
                    <div class="col-sm-6 col-md-2 col-lg-2">
                      <button type="submit" class="btn course_btn btn-block text-white">SUBMIT</button>
                    </div>
                    <div class="col-md-5"></div>
                  </div>
                </form>
                 <!-- // Add Datasource  -->
              <hr>
  