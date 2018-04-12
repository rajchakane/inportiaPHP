
  function get_record(pid,fname,mname,lname,gender,birth_date,mobile,alt_mobile,email,course_name,street_name,area,city,state,pincode,qualification,passing_year,organasation_type,organisation,years_of_exp)
  {
    console.log(pid);
    document.getElementById("ufname").value=fname;
    document.getElementById("upid").value=pid;
    document.getElementById("umname").value=mname;
    document.getElementById("ulname").value=lname;    
    document.getElementById("ugender").value=gender;
    document.getElementById("ubirth_date").value=birth_date;    
    document.getElementById("umobile").value=mobile;
    document.getElementById("ualt_mobile").value=alt_mobile;    
    document.getElementById("uemail").value=email;
    //document.getElementById("ucourse_name").value=course_name;
    document.getElementById("ustreet_name").value=street_name;
    document.getElementById("uarea").value=area;    
    document.getElementById("ucity").value=city;
    document.getElementById("ustate").value=state;
    document.getElementById("upincode").value=pincode;
    document.getElementById("uqualification").value=qualification;
    document.getElementById("upassing_year").value=passing_year;
    document.getElementById("uorganasation_type").value=organasation_type;
    document.getElementById("uorganisation").value=organisation;
    document.getElementById("uyears_of_exp").value=years_of_exp; 

    var x = document.getElementById("editrecord");
    if (x.style.display === "none") {
        x.style.display = "block";       
    }   
  }


