
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
    
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<style type="text/css">
   .element{margin-bottom:15px;}
</style>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
         
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employees Information</h3>
            </div>
                 <?php er()?>              
   <div class="box-body">
          
<div class="col-md-6">
<table id="customers">
  <tr>
    <th></th>
    <th></th>
  </tr>
 <tr>
   <td>Name</td> 
    <td><?php aproko("name")?></td> 
</tr> 
 <tr>
   <td>Phone</td> 
    <td> <?php aproko("phone")?> </td> 
</tr> 

<tr>
   <td>Address</td> 
    <td> <?php aproko("lang")?> </td> 
</tr> 

 <tr>
   <td>Gender</td> 
    <td><?php aproko("gender")?></td> 
</tr> 

 <tr>
   <td>Means of Identification</td> 
    <td><?php aproko("idcard")?></td> 
</tr> 

 <tr>
   <td>Nationality</td> 
    <td><?php aproko("nationality")?></td> 
</tr> 
 <tr>
   <td>State of Origin</td> 
    <td><?php aproko("soo")?></td> 
</tr> 
 <tr>
   <td>LGA of Origin</td> 
    <td> <?php aproko("lgaoo")?> </td> 
</tr> 
 <tr>
   <td>Hometown</td> 
    <td><?php aproko("hometown")?></td> 
</tr> 
 <tr>
   <td>Date of Birth</td> 
    <td><?php aproko("dob")?></td> 
</tr> 
 <tr>
   <td>Place of Birth</td> 
    <td><?php aproko("pob")?></td> 
</tr> 
 <tr>
   <td>Marital Status</td> 
    <td><?php aproko("mstat")?></td> 
</tr> 
 
   <td>Institution Attended</td> 
    <td> <?php aproko("instattended")?> </td> 
</tr> 
 <tr>
   <td>Qualification</td> 
    <td> <?php aproko("quali")?> </td> 
</tr> 
 <tr>
   <td>Course of study</td> 
    <td> <?php aproko("costudy")?> </td> 
</tr> 
 
 <tr>
   <td>Employer</td> 
    <td> <?php aproko("employer")?> </td> 
</tr> 
 <tr>
   <td>Phone</td> 
    <td> <?php aproko("phoneno")?> </td> 
</tr> 
 <tr>
   <td>Company Email</td> 
    <td> <?php aproko("compemail")?> </td> 
</tr> 
 <tr>
   <td>Post Held</td> 
    <td> <?php aproko("postheld")?> </td> 
</tr> 
 
 <tr>
   <td>Salary</td> 
    <td> <?php aproko("salary")?> </td> 
</tr> 
 <tr>
   <td>Reason for Leaving</td> 
    <td> <?php aproko("leavereason")?> </td> 
</tr> 
 <tr>
   
  
  
</table>
    <p>&nbsp;</p>
    <button class="btn btn-default" onclick="location.assign('?s_=employees')"><i class="fa fa-arrow-left"></i> Back </button> |  <button class="btn btn-primary" onclick="print()">Print <i class="fa fa-print"></i></button>
</div>  
       
              </div>

        </div>         
      </div>
    </div>
    </section>


    
    