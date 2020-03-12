
<!-- lib/f -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blessed Trust | Employer Detail</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=""/>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
		}

		
         // Form validation code will come here.
function validate() {
   //let error = document.getElementById("error");

  if( document.contactform.fname.value == "" ) {
     //alert( "Please provide your name!" );
     document.contactform.fname.focus() ;
     document.contactform.fname.style.borderColor="red";
     error.style.backgroundColor="red";
     error.innerHTML="empty fields not allowed";
     error.style.display="block";
     return false;
  }else{
      document.contactform.fname.style.borderColor="green";
  }
  if( document.contactform.oname.value == "" ) {
     //alert( "Please provide your Email!" );
     document.contactform.oname.focus() ;
     document.contactform.oname.style.borderColor="red";
     error.style.backgroundColor="red";
     error.innerHTML="empty fields are not allowed";
     error.style.display="block";
     return false;
  }else{
      document.contactform.oname.style.borderColor="green";
  }

  if( document.contactform.phone1.value == "" ) {
     //alert( "Please provide your Email!" );
     document.contactform.phone1.focus() ;
     document.contactform.phone1.style.borderColor="red";
     error.style.backgroundColor="red";
     error.innerHTML="empty fields not allowed";
     error.style.display="block";
     return false;
  }else{
      document.contactform.phone1.style.borderColor="green";
  }

  if( document.contactform.phone2.value == "" ) {
     //alert( "Please provide your Email!" );
     document.contactform.phone2.focus() ;
     document.contactform.phone2.style.borderColor="red";
     error.style.backgroundColor="red";
     error.innerHTML="empty fields not allowed";
     error.style.display="block";
     return false;
  }else{
      document.contactform.phone2.style.borderColor="green";
  }
  

 if( document.contactform.biztype.value == "-1" ) {
    // alert( "Please provide your country!" );
     document.contactform.biztype.style.borderColor="red";
     error.style.backgroundColor="red";
     error.innerHTML="empty fields not allowed";
     error.style.display="block";
     return false;
  }else{
   document.contactform.biztype.style.borderColor="green";
      
  }

  if( document.contactform.bizadd.value == "" ) {
  //alert( "Please provide your Email!" );
  document.contactform.bizadd.focus() ;
  document.contactform.bizadd.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.bizadd.style.borderColor="green";
}
  if( document.contactform.lga.value == "" ) {
  //alert( "Please provide your Email!" );
  document.contactform.lga.focus() ;
  document.contactform.lga.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.lga.style.borderColor="green";
}
  if( document.contactform.state.value == "") {
  //alert( "Please provide your Email!" );
  document.contactform.state.focus() ;
  document.contactform.state.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.state.style.borderColor="green";
}
  if( document.contactform.town.value == "") {
  //alert( "Please provide your Email!" );
  document.contactform.town.focus() ;
  document.contactform.town.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.town.style.borderColor="green";
}
  if( document.contactform.locality.value == "") {
  //alert( "Please provide your Email!" );
  document.contactform.locality.focus() ;
  document.contactform.locality.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.locality.style.borderColor="green";
}
  if( document.contactform.landmark.value == "") {
  //alert( "Please provide your Email!" );
  document.contactform.landmark.focus() ;
  document.contactform.landmark.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.landmark.style.borderColor="green";
}
  if( document.contactform.accname.value == "" ) {
  //alert( "Please provide your Email!" );
  document.contactform.accname.focus();
  document.contactform.accname.style.borderColor="red";
  error.style.backgroundColor="red";
  error.innerHTML="empty fields not allowed";
  error.style.display="block";
  return false;
}else{
   document.contactform.accname.style.borderColor="green";
}
  error.innerHTML="Good";
  error.style.backgroundColor="green";
  return true ;
}

//var target = document.querySelector('.box');
// 

    </script>

<!-- <script src="script.js"></script> -->

	<script type="text/javascript" src="main.js"></script>
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <!-- <link href="css/wavy.css" link rel='stylesheet' type='text/css' /> custom css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- <div class="loader">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="main1"> -->
<!-- header -->
<?php include("nav.php")?>
<!-- //header -->

<!-- inner-banner -->
<section class="inner-banner" id="home">
	<div class="inner-layer">
  <img class="my-images" src="images/handshake.jpg">
		<div class="container">
		</div>
	</div>
</section>
<!-- //inner-banner -->

<!-- breadcrumb -->
<div class="breadcrumb-w3pvt bg-light">
	<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item" aria-current="page">Employers Request Form</li>
		</ol>
	</nav>
	</div>
</div>
<!-- //breadcrumb -->
	
<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-5">
		<div class="row">
			
			<div class="col-lg-6 col-md-6 contact-form mt-md-0 mt-4">
				<h4 class="mb-sm-4 mb-3 w3f_title">Employers Request Form</h4>
				
				<p class="required">* Required</p>
				<p>&nbsp;</p>
				<!-- php link er()-->
        
				<form name="contactform" id="contactform" method="post" action="lib/ff.php?fm=2" >
						
                        <div class="form-group">
						  <label>First Name:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="name" placeholder="First Name" name="fname" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Other Names:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" placeholder="Other Names" name="oname" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Contact Phone 1:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email"  placeholder="Contact Phone 1" name="phone1" onblur="validate()">
						</div> 
                    
						<div class="form-group">
						  <label>Contact Phone 2:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="contact" required placeholder="Contact Phone 2" name="phone2" onblur="validate()">
						
						</div>

						<div class="form-group">
						  <label>Email:</label><p class="fa fa-asteriks">*</p>
						  <input type="text" class="form-control" id="txt_email" placeholder="Email" name="email" onkeyup="emailvalidate()">
						</div>
                    
						<!-- <div class="form-group">
						  <label>Select Agent Class:</label>
						 <select class="form-control" name="agent">
                        <option value="Business">Business</option> 
                        <option value="Individual">Individual</option>    
                        </select>
						</div> -->
                    
						<!-- <div class="form-group">
						  <label>Business Registration No:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="biz">
						</div> -->
                     
						<div class="form-group">
						  <label>Type of business:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="Type of business" name="biztype" onblur="validate()">
						</div>
                    
						 <div class="form-group">
						  <label>Office Address:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required  placeholder="Office Address" name="bizadd" onblur="validate()">
						</div> 
                    <!--  
						<div class="form-group">
						  <label>PHCN Bill:</label><br>
						  <input type="file" class="form-control" name="phcn">
						</div>
                    
						<div class="form-group">
						  <label>C.A.C Documents :</label><br>
						  <input type="file" class="form-control" type="cac">
						</div>
                    
						<div class="form-group">
						  <label>Bank:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="bank">
						</div>
                    
						<div class="form-group">
						  <label>BVN:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="bvn">
						</div> -->
<!--                     
						<div class="form-group">
						  <label>Account No:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="accno">
						</div>
                    
						<div class="form-group">
						  <label>Account Name:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="accname">
						</div> -->
                    
						<div class="form-group">
						  <label>State:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="State" name="state" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>LGA:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required  placeholder="LGA" name="lga" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Available Position:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required  placeholder="Available Position" name="town" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Company/Bussiness Name:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="Bussiness Name" name="locality" onblur="validate()">
						</div>
                    
						<!-- <div class="form-group">
						  <label>House Address:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="street">
						</div> -->
                    
						<div class="form-group">
						  <label>Number Of Employee:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="Number Of Employee" name="landmark" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Salary Details:</label><i class="fa fa-asteriks">*</i></i>
						  <input type="text" class="form-control" id="email" required placeholder="Salary Details" name="accname" onblur="validate()">
						</div>
                    
						<!-- <div class="form-group">
						  <label>Count:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="countt">
						</div>
                    
						<div class="form-group">
						  <label>Volume:</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="volumee">
						</div> -->
                    
						<!-- <div class="form-group">
						  <label>Nearness to Bank (Yes/No):</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="neartobank">
						</div> -->
                    										
						<button type="submit" class="btn btn-default" >Submit</button>
					</form>
			</div>
			
		</div>
	</div>
</section>
<!-- //contact -->



<!-- footer -->
<?php include("footer.php")?>
</div>

<script src="main.js"></script>	
</body>
</html>