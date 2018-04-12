<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selenium, React JS, Angular JS, Android, Python, Java</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/home-page.css" rel="stylesheet">          
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/social.css" rel="stylesheet" type="text/css">
    <link href="css/test.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
  </head>

  <body>
    
    <!-- Navigation -->
    <?php
      include 'nastedpage/navigation.php'; 
    ?>
    <!-- Navigation -->
    
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      
        <small></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Register</li>
      </ol>
      
      <h2 class="mt-4 mb-3">
        <small>Fill the form to attend the free demo</small>
      </h2>
     
      <form class="well form-horizontal" action="php/process.php" method="post" id="contact_form">
        <div class="row">
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="fname" type="text" class="form-control" placeholder="First Name" aria-label="" aria-describedby="basic-addon">
          </div>
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="lname"  type="text" class="form-control" placeholder="Last Name" aria-label="" aria-describedby="basic-addon">
          </div>  
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
            </div>
            <select name="gender" class="form-control selectpicker">                           
                  <option value="selectGender">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
          </div> 
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input name="dob" type="text" class="form-control" placeholder="Date of Birth- dd/mm/yyyy" aria-label="" aria-describedby="basic-addon">
          </div>
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input name="email" type="text" class="form-control" placeholder="E-mail ID" aria-label="" aria-describedby="basic-addon">
          </div>
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-mobile-alt "></i></span>
            </div>
            <input name="phone" type="text" class="form-control" placeholder="Mobile number" aria-label="" aria-describedby="basic-addon">
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
            <select name="city" class="form-control selectpicker" >
                  <option value="default">Interested Branch</option>
                  <option value="Pimple_Saudagar">Pimple Saudagar</option>
                  <option value="Ravet">Ravet</option>
                  <option value="Any">Any</option>
                </select>
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <input name="zipcode" type="text" class="form-control" placeholder="Zip code" aria-label="" aria-describedby="basic-addon">
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-certificate"></i></span>
            </div>
            <select name="qualification" class="form-control selectpicker">
                    <option value="default">Please select your qualification</option>             
                  <option value="diploma">Diploma</option>
                  <option value="be">BE</option>
                  <option value="bcs">BCS</option>
                  <option value="bca">BCA</option>
                  <option value="bsc">BSC</option>
                  <option value="me">ME</option>
                  <option value="mcs">MCS</option>
                  <option value="mca">MCA</option>    
                  <option value="msc">MSC</option>        
                  <option value="other">Other</option>
                </select>
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-road"></i></span>
            </div>
            <select name="profession" class="form-control selectpicker">
                    <option value="default">What do you do?</option>              
                  <option value="student">Student</option>
                  <option value="working">Working</option>
                <option value="business">Business</option>
                <option value="housewife">Housewife</option>
                <option value="searching for job">Searching For Job</option>
                <option value="other">Other</option>                                    
                </select>
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
            </div>
            <input name="organisation" type="text" class="form-control" placeholder="College or Company Name" aria-label="" aria-describedby="basic-addon">
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book"></i></span>
            </div>
            <select name="course" class="form-control selectpicker">
                    <option value="default">Interested in program/course</option>   
          <option value="internship">Internship</option>
                  <option value="selenium">(Selenium) Automation Testing and Framework Development</option>
                  <option value="angularjs">(AngularJS) Web Development</option>
                  <option value="android">(Android)Mobile App Development</option>
                  <option value="hadoop">(Hadoop) Big Data Analytics</option>
                  <option value="java">Java</option>
                  <option value="c c++">C C++</option>
                  <option value="c#">C#</option>
                  <option value="python">Python</option>
                  <option value=".net">.Net</option>
                  <option value="web">HTML5-CSS3-JavaScript</option>            
                  <option value="php">PHP</option>
                  <option value="teaching">Teaching</option>
                  <option value="other">Other</option>
                </select>
          </div>     
          <div class="input-group input-group mb-3 col-sm-6">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-home"></i></span>
            </div>
            <select name="know" class="form-control selectpicker">    
                  <option>How did you come to know?</option>                        
                  <option value="whatsapp">WhatsApp</option>
                  <option value="fb">Facebook</option>
                  <option value="li">Linkedin</option>
                  <option value="email">Email</option>            
                  <option value="banner">Banner</option>
                  <option value="friend">Friends</option>
                  <option value="urbanpro">UrbanPro</option>
                  <option value="justdl">Just Dial</option>
                  <option value="other">Other</option>
                </select>                
          </div>  



          <div class="input-group input-group mb-3 col-sm-6 offset-md-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
            </div>
            <textarea class="form-control" name="comment" placeholder="We would like to know more about you!"></textarea>
          </div> 
          <div class="col-md-5"></div>  
          <div class="col-sm-6 col-md-2 col-lg-2">            
            <button type="submit" class="btn course_btn btn-block text-white">SUBMIT</button>
          </div>
          <div class="col-md-5"></div> 
        </div>
      </form>

    </div>

    <!-- Social Media Side Bar -->
    <?php
      include 'nastedpage/smediasidebar.php';
    ?>
    <!-- Social Media Side Bar -->

    <!-- Footer -->
    <?php
      include 'nastedpage/footer.php';
    ?>
    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  </body>

</html>
