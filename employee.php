<!-- link here lib/f -->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Blessed Trust | Application Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" " />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
		}
		







// form validation   
//setTimeout=(validate(),2000);
// Form validation code will come here.
function validate() {
    //let error = document.getElementById("error");

   if( document.contactform.name.value == "" ) {
      //alert( "Please provide your name!" );
      document.contactform.name.focus() ;
      document.contactform.name.style.borderColor="red";
      error.style.backgroundColor="red";
      error.innerHTML="empty fields not allowed";
      error.style.display="block";
      return false;
   }else{
       document.contactform.name.style.borderColor="green";
   }
   
   if( document.contactform.addrss.value == "" ) {
      //alert( "Please provide your Email!" );
      document.contactform.addrss.focus() ;
      document.contactform.addrss.style.borderColor="red";
      error.style.backgroundColor="red";
      error.innerHTML="empty fields not allowed";
      error.style.display="block";
      return false;
   }else{
       document.contactform.addrss.style.borderColor="green";
   }
   if( document.contactform.phone.value == "" ) {
      //alert( "Please provide your Email!" );
      document.contactform.phone.focus() ;
      document.contactform.phone.style.borderColor="red";
      error.style.backgroundColor="red";
      error.innerHTML="empty fields not allowed";
      error.style.display="block";
      return false;
   }else{
       document.contactform.phone.style.borderColor="green";
   }

   if( document.contactform.txt_email.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.txt_email.focus() ;
	document.contactform.txt_email.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.txt_email.style.borderColor="green";
 }

 if( document.contactform.gender.value == "-1" ) {
	 // alert( "Please provide your country!" );
	  document.contactform.gender.focus() ;
      document.contactform.gender.style.borderColor="red";
      error.style.backgroundColor="red";
      error.innerHTML="empty fields not allowed";
      error.style.display="block";
      return false;
   }else{
    document.contactform.gender.style.borderColor="green";
       
   }
   
   if( document.contactform.nationality.value == "" ) {
      //alert( "Please provide your Email!" );
      document.contactform.nationality.focus() ;
      document.contactform.nationality.style.borderColor="red";
      error.style.backgroundColor="red";
      error.innerHTML="empty fields not allowed";
      error.style.display="block";
      return false;
   }else{
       document.contactform.nationality.style.borderColor="green";
   }
   
  

   if( document.contactform.soo.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.soo.focus() ;
	document.contactform.soo.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.soo.style.borderColor="green";
 }
   if( document.contactform.lga.value == "" ) {
	document.contactform.lga.focus();
	document.contactform.lga.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.lga.style.borderColor="green";
 }
   if( document.contactform.hometown.value == "" ) {
	
	document.contactform.hometown.focus();
	document.contactform.hometown.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.hometown.style.borderColor="green";
 }
   if( document.contactform.dob.value == "" ) {
	document.contactform.dob.focus() ;
	document.contactform.dob.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.dob.style.borderColor="green";
 }
   if( document.contactform.pob.value == "" ) {
	document.contactform.pob.focus() ;
	document.contactform.pob.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.pob.style.borderColor="green";
 }
   if( document.contactform.mstat.value == "select" ) {
	document.contactform.mstat.focus() ;
	document.contactform.mstat.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.mstat.style.borderColor="green";
 }
   if( document.contactform.instattended.value == "" ) {
	document.contactform.instattended.focus() ;
	document.contactform.instattended.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.instattended.style.borderColor="green";
 }
   if( document.contactform.qual.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.qual.focus() ;
	document.contactform.qual.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.qual.style.borderColor="green";
 }
   if( document.contactform.course.value == "" ) {
	document.contactform.course.focus() ;
	document.contactform.course.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.course.style.borderColor="green";
 }
   if( document.contactform.cphone.value == "" ) {

	document.contactform.cphone.focus() ;
	document.contactform.cphone.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.cphone.style.borderColor="green";
 }
   if( document.contactform.cname.value == "" ) {

	document.contactform.cname.focus() ;
	document.contactform.cname.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.cname.style.borderColor="green";
 }
   if( document.contactform.postt.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.postt.focus() ;
	document.contactform.postt.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.postt.style.borderColor="green";
 }
   if( document.contactform.salary.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.salary.focus() ;
	document.contactform.salary.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.salary.style.borderColor="green";
 }
   if( document.contactform.reason.value == "" ) {
	//alert( "Please provide your Email!" );
	document.contactform.reason.focus() ;
	document.contactform.reason.style.borderColor="red";
	error.style.backgroundColor="red";
	error.innerHTML="empty fields not allowed";
	error.style.display="block";
	return false;
 }else{
	 document.contactform.reason.style.borderColor="green";
 }
   error.innerHTML="Good";
   error.style.backgroundColor="green";
   return true ;
}

//var target = document.querySelector('.box');
// 
    </script>

	<script src="script.js"></script>
	
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
	
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>


	<!-- email validation -->
	<script type="text/javascript">
	function emailvalidate(){

var emailtxt = document.getElementById('txt_email');
var errormsg = document.getElementById('errormsg');
var mainemail = emailtxt.value;
var regexpres = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//testing the regular expression for the email in email txtbox (regexpres.test(mainemail))
if(regexpres.test(mainemail))
{
	errormsg.style.display="none";
	emailtxt.style.borderColor = "green";
	emailtxt.style.boxShadow ="3px 2px 4px green";
}else {
	errormsg.innerHTML="enter a valid email address";
	errormsg.style.color="white";
	errormsg.style.backgroundColor="red";
	emailtxt.style.borderColor = "red";
	emailtxt.style.boxShadow ="3px 2px 4px red";
}
return false;
}

</script> 


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
			<li class="breadcrumb-item" aria-current="page">Application Form</li>
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
				<h4 class="mb-sm-4 mb-3 w3f_title">Application Form</h4>

				<p class="required">* Required</p>
				<p>&nbsp;</p>
				<!-- link er()-->
				
				<form name="contactform" id="contactform" method="post" action="lib/ff.php?fm=3" >
				<div id="s1">
                        <div class="form-group">

<!-- 							
							<input type="text" name="name"  class="" id="name" autocomplete="off" />
							<label for="name" class="label-name">
							<span class="content-name">First Name</span> -->
							<!-- <i class="fa fa-asteriks">*</i> -->

        				<!-- </label> -->


						  <label>Full Name:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="name" required  name="name" >
						</div>
					





						
						<div class="form-group">
						  <label>Residential Address:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder=""  name="addrss" onblur="validate()">
						</div>

						<div class="form-group">
						  <label>Phone:</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder=""  name="phone" onblur="validate()">
						</div>

						<div class="form-group"><i class="fa fa-asteriks">*</i>
						  <label>Email</label><div id="errormsg"></div>
						  <input type="text" class="form-control" id="txt_email"required  placeholder="" onkeyup="emailvalidate()" onblur="validate()" name="cemail">
						</div>
                    
                    
                    
						<div class="form-group">
						<label>Gender</label><i class="fa fa-asteriks">*</i>
						<select style="height:20%";   class="form-control"  id="email" required placeholder=""   name="gender" onblur="validate()">
						<option value="-1">Select</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						</select>
						</div>


						<!-- <div class="form-group">
						  <label>Gender</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" required="required"  name="gender">
						</div>
                     -->
						<!-- <div class="form-group">
						  <label>Means of Identification</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email"required  placeholder="" required="required" name="idcard">
						</div> -->
                    
						<!-- <div class="form-group">
						  <label>Identification No</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="idno">
						</div> -->
                    
						<div class="form-group">
						  <label>Nationality</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email"required  placeholder=""  name="nationality" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>State of Origin</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder=""  name="soo" onblur="validate()">
						</div>
                            
                        <button type="button" class="btn btn-default" onclick="nxt('#s2')">Next</button>
                    </div>
                    
                    
                    <div id="s2" style="display:none;">
						<div class="form-group">
						  <label>LGA </label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" placeholder="" name="lga" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Hometown</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="hometown" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Date of Birth</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="dob" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Place of Birth</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required  placeholder="" name="pob"onblur="validate()">
						</div>


						
						<div class="form-group dropdown">
						<label>Marital Status</label><i class="fa fa-asteriks">*</i>
						<select title="status" class="form-control " 
						style="height:20%";  id="email" required placeholder="" required="required"  name="mstat"onblur="validate()">
						<option value="select">Select</option>
						<option value="single">Single</option>
						<option value="married">Married</option>
						</select>
						</div>
                    
						<!-- <div class="form-group">
						  <label>Marital Status</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="mstat">
						</div>
                    
						 -->
						<!-- <div class="form-group">
						  <label>Bank Verification Number (BVN)</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="bvn">
						</div> -->

						<!-- <div class="form-group">
						  <label>Spouse Name</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="sname">
						</div>
                    
						<div class="form-group">
						  <label>Spouse Address</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="saddrss">
						</div>
                    
						<div class="form-group">
						  <label>Spouse Phone No</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="sphone">
						</div>
                    
						<div class="form-group">
						  <label>Bank Verification Number (BVN)</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="bvn">
						</div>
                    
						<div class="form-group">
						  <label>Next of Kin (NOK)</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="nok">
						</div>
                   
						<div class="form-group">
						  <label>Relationship</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="rela">
						</div>
                    
						<div class="form-group">
						  <label>NOK Address</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="nokaddrss">
						</div>
                    
						<div class="form-group">
						  <label>NOK Telephone</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="nokphone">
						</div>
                    
						<div class="form-group">
						  <label>NOK Email</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="nokemail">
						</div>
                         -->
                        <button type="button" class="btn btn-default" onclick="prev('#s1')">Previous</button> 
                        <button type="button" class="btn btn-default" onclick="nxt('#s3')">Next</button>
                     </div>
                    
                    
                    
                    <div id="s3" style="display:none;">
					<legend>Education</legend>
					
                        
                    
						<div class="form-group">
						  <label>Institution Attended</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="instattended" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Qualification</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="qual" onblur="validate()">
						</div>
                    
						<div class="form-group">
						  <label>Course of Study</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="course" onblur="validate()">
						</div>
                    
						<!-- <div class="form-group">
						  <label>Professional Certification</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="cert">
						</div>
                       -->
						<!-- <div class="form-group">
						  <label>Detail of any other training Received</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="training">
						</div>
                     -->
						<!-- <div class="form-group">
						  <label>Spoken Languages</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="lang">
						</div> -->
                    
                        <p>Current/Last Employment History</p>

						<div class="form-group">
						  <label>Company Phone Number</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="cphone" onblur="validate()">
						</div>


						<div class="form-group">
						  <label>Name of Company</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="cname" >
						</div>
                    
					
                    
						
						<div class="form-group">
						  <label>Position</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="postt" >
						</div>
                    <!--  
						<div class="form-group">
						  <label>Details of Responsibilities</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="detailresp">
						</div> -->
                    
						<div class="form-group">
						  <label>Salary</label>
						  <input type="text" class="form-control" id="email"  placeholder="" name="salary">
						</div>
                                           
						<div class="form-group">
						  <label>Reason for leaving</label><i class="fa fa-asteriks">*</i>
						  <input type="text" class="form-control" id="email" required placeholder="" name="reason" onblur="validate()">
						</div>
                        
                        <button type="button" class="btn btn-outline-success" onclick="prev('#s2')">Previous</button>
						<!-- <button type="button" class="btn btn-default" onclick="nxt('#s5')">Next</button> -->
						<button type="submit" class="btn btn-outline-success">Submit</button>
                    </div>
                                       
                    
                    
                    <!-- <div id="s4" style="display:none;"> -->
						<!-- <div class="form-group">
						  <label>Outstanding Loan</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="loan">
						</div>
                    
						<div class="form-group">
						  <label>Repayment Plan</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="pplan">
						</div>
                    <p>Have you been involved in any issue while at work? </p>
						<div class="form-group">
						  <label>insubordination</label>
						  <select name="insubordination">
                          <option value="Yes">Yes</option> 
                          <option value="No">No</option>  
                          </select>
						</div>
                        
                        <div class="form-group">
						  <label>disciplinary issues</label>
						  <select name="disciplinary">
                          <option value="Yes">Yes</option> 
                          <option value="No">No</option>  
                          </select>
						</div>
                        
                       
                                                
						<div class="form-group">
						  <label>What happened?</label>
						  <textarea name="whathappened"></textarea>
						</div> -->
                        
                    
                            
                    
						<!-- 
                    
                        
                        <p>Personal Reference</p>
						<div class="form-group">
						  <label>Referee Name </label>
						  <input type="text" class="form-control" id="email" placeholder="" name="referee">
						</div> -->
                        <!-- <button type="button" class="btn btn-default" onclick="prev('#s3')">Previous</button>
                        <button type="button" class="btn btn-default" onclick="nxt('#s5')">Next</button>
                     </div> -->
                    
                    
                    
                    <!-- <div id="s5" style="display:none;"> -->
						<!-- <div class="form-group">
						  <label>Dep </label>
						  <input type="text" class="form-control" id="email" placeholder="" name="ofnmae">
						</div>
                    
						<div class="form-group">
						  <label>Office Address </label>
						  <input type="text" class="form-control" id="email" placeholder="" name="ofaddrss">
						</div>
                    
						<div class="form-group">
						  <label>Department</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="ofdept">
						</div> -->
                    
						<!-- <div class="form-group">
						  <label>Office/ Personal Telephone </label>
						  <input type="text" class="form-control" id="email" placeholder="" name="oftel">
						</div> -->
                    
                        
                        <!-- <p><b>Medical History</b></p>
						<div class="form-group">
						  <label>Have you suffered from any major illness</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="illness">
						</div>
                    
						<div class="form-group">
						  <label>If so, when</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="duration">
						</div>
                    
						<div class="form-group">
						  <label>Type of illness</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="illnesstype">
						</div>
                    
						<div class="form-group">
						  <label>If yes, please give details</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="email">
						</div>
                    
						<div class="form-group">
						  <label>If required to undergo a medical check-up, would you agree</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="checkup">
						</div>
                    
						<div class="form-group">
						  <label>Extra-Curricular Activities Give details of your hobbies</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="hobby">
						</div>
                    
						<div class="form-group">
						  <label>Notice required from present Employer</label>
						  <input type="text" class="form-control" id="email" placeholder="" name="notice">
						</div>
You will have to wait while we process your application , we will contact you through the information provided on this form.
Application /processing fee is N2000 (two thousand naiara only) ……………………………… NOT REFUNDABLE<p>&nbsp;</p>
<p> By clicking the submit button,  I declare that the statement made in this Application form and in any documents supplied by me to support my application are, the best of my knowledge and belief, factually correct and true. I understand that, should any such statements be found to be false or misleading, my application/processing fee will not be refunded and my application will be subject to review and may be terminated. 
</p> -->
                        
  <!-- <button type="button" class="btn btn-default" onclick="prev('#s3')">Previous</button>
<button type="submit" class="btn btn-default">Submit</button> -->
<!-- </div> -->
										
						
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

<script type="text/javascript">
     function nxt(x){ 
     $("#s1").css("display","none")
     $("#s2").css("display","none")
     $("#s3").css("display","none")
     $("#s4").css("display","none")
     $("#s5").css("display","none")
     $(x).css("display","block")
}

  function prev(x){ 
     $("#s1").css("display","none")
     $("#s2").css("display","none")
     $("#s3").css("display","none")
     $("#s4").css("display","none")
     $("#s5").css("display","none")
     $(x).css("display","block")
} 
</script>
    
</html>