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
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Feedback Form</li>
          </ol>
      
          <h2 class="mt-4 mb-3">
            <small>Express your training experience with us</small>
          </h2>
     
          <form class="well form-horizontal" action="feeedback.php" method="post" id="feedback_form">
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
              <input name="area" type="text" class="form-control" placeholder="Course Name" aria-label="" aria-describedby="basic-addon">
            </div>     
            <div class="input-group input-group mb-3 col-sm-6">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
              <input name="zipcode" type="text" class="form-control" placeholder="Trainer Name" aria-label="" aria-describedby="basic-addon">
            </div>     
            <div class="input-group input-group mb-3 col-sm-6">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
              </div>
              <input name="organisation" type="text" class="form-control" placeholder="Course Start End" aria-label="" aria-describedby="basic-addon">
            </div>
            <div class="input-group input-group mb-3 col-sm-6">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
              </div>
              <input name="organisation" type="text" class="form-control" placeholder="Course End Date" aria-label="" aria-describedby="basic-addon">
            </div>     
          
            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">The trainer was well prepared </span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">The time alloted for training was sufficient </span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                 <option value="selectRating">Select Rating</option>
                 <option value="5">5</option>
                 <option value="4">4</option>
                 <option value="3">3</option>
                 <option value="2">2</option>
                 <option value="1">1</option>
               </select>
              </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">The provided sessions were engaging</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">Full attention was given by trainer</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">The presentations were loud and clear</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">The notes and assignments were helpful</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">Facilities were adequate & comfortable</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 
            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">Fee structure was appropriate</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 
            <div class="input-group input-group mb-3 col-sm-6">
              <span class="col-sm-8">Course covered in time</span>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
              </div>
              <select name="gender" class="form-control selectpicker">                           
                <option value="selectRating">Select Rating</option>
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
              </select>
            </div> 

          <div class="input-group input-group mb-3 col-sm-6">
            <span class="col-sm-8">Office location was easily accessible</span>
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
            </div>
            <select name="gender" class="form-control selectpicker">                           
              <option value="selectRating">Select Rating</option>
              <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1">1</option>
            </select>
          </div> 

          <div class="input-group input-group mb-3 col-sm-12">
            <span class="col-sm-10">How much are you satisfied with the overall training ?</span>
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
            </div>
            <select name="gender" class="form-control selectpicker">                           
              <option value="selectRating">Select Rating</option>
              <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1">1</option>
            </select>
          </div> 

          <div class="input-group input-group mb-3 col-sm-12">    
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
            </div>
            <textarea class="form-control" name="comment" placeholder="What did you like most about this training ?"></textarea>        
          </div>

          <div class="input-group input-group mb-3 col-sm-12">    
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
            </div>
            <textarea class="form-control" name="comment" placeholder="What aspects of the training could be improved ? "></textarea>        
          </div>
                  
          <div class="input-group input-group mb-3 col-sm-12">
            <span class="col-sm-10">Will you recommend inportia to your friends ?</span>
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-male"></i><i class="fas fa-female"></i></span>
            </div>
            <select name="gender" class="form-control selectpicker">                           
              <option value="yes">Yes</option>
              <option value="no">No</option>                  
            </select>
          </div>   
         
          <div class="col-sm-6 col-md-2 col-lg-2 offset-md-5">            
            <button type="submit" class="btn course_btn btn-block text-white">SUBMIT</button>
          </div>
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
