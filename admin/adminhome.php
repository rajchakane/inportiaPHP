<!DOCTYPE html>
<?php
  include('conconfig.php');
  include('session.php');

?>
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
    <link href="../css/home-page.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/social.css" rel="stylesheet" type="text/css">
    <link href="../css/test.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
  </head>
  <body>
    <!-- Navigation -->
    <?php
    include '../nastedpage/navigation.php';
    ?>
    
    <!-- Page Content -->
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Admin Panel</a>
        </li>
        <li class="breadcrumb-item active"> Home</li>
      </ol>
    </div>

    <div  class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-9">
          
          <hr>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-datasource-tab" data-toggle="pill" href="#pills-datasource" role="tab" aria-controls="pills-datasource" aria-selected="true">Enquiry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-calling-tab" data-toggle="pill" href="#pills-calling" role="tab" aria-controls="pills-calling" aria-selected="false">Calling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-followup-tab" data-toggle="pill" href="#pills-followup" role="tab" aria-controls="pills-followup" aria-selected="false">Follow Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-demo-tab" data-toggle="pill" href="#pills-demo" role="tab" aria-controls="pills-demo" aria-selected="false">Demo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-enrollment-tab" data-toggle="pill" href="#pills-enrollment" role="tab" aria-controls="pills-enrollment" aria-selected="false">Enrollment</a>
            </li>
          </ul>

            
          <div class="tab-content container" id="pills-tabContent">

          <!-- /Tab Enquiry  -->
            <div class="tab-pane fade show active" id="pills-datasource" role="tabpanel" aria-labelledby="pills-datasource-tab">
                          
              <?php
                include('enquiryTab.php');
              
                include('viewDatasource.php');
              ?>               
            </div>

          <!-- /Tab Enquiry  -->  

          <!-- Tab Followup  -->
            <div class="tab-pane fade" id="pills-calling" role="tabpanel" aria-labelledby="pills-calling-tab">

              <?php
                include('followupTab.php');
              ?>

            </div>
          <!-- /Tab Followup  -->

            <div class="tab-pane fade" id="pills-followup" role="tabpanel" aria-labelledby="pills-followup-tab">
            </div>
            <div class="tab-pane fade" id="pills-demo" role="tabpanel" aria-labelledby="pills-demo-tab">
            </div>
            <div class="tab-pane fade" id="pills-enrollment" role="tabpanel" aria-labelledby="pills-enrollment-tab">
            </div>
          </div>        
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-3">
          
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Other Courses</h5>
            <div class="card-body">
              <button type="button" class="btn course_btn btn-block text-white" onclick="window.location.href = 'showFollowUp.php'" >SELENIUM</button>
              <button type="button" class="btn course_btn btn-block text-white">REACT JS</button>
              <button type="button" class="btn course_btn btn-block text-white">ANGULAR JS</button>
              <button type="button" class="btn course_btn btn-block text-white">ANDROID</button>
              <button type="button" class="btn course_btn btn-block text-white">SALESFORCE</button>
              <button type="button" class="btn course_btn btn-block text-white">AWS</button>
              <button type="button" class="btn course_btn btn-block text-white">PYTHON</button>
              <button type="button" class="btn course_btn btn-block text-white">JAVA</button>
            </div>
          </div>
        </div>
      
      <!-- /.row -->
    </div>
  </div>

    <!-- /.container -->
    <!-- Footer -->
    <?php
    include '../nastedpage/footer.php';
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>



    <script type="text/javascript">
      $(document).ready(function(){
        $('a[data-toggle="pill"]').on('show.bs.tab', function(e) {
          localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
          $('#pills-tab a[href="' + activeTab + '"]').tab('show');
        }
      });
    </script>




  </body>
</html>