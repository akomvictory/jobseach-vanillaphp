
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
              <h3 class="box-title">Employees Request</h3>
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
    <td><?php aprok("fname")?> <?php aprok("oname")?></td> 
</tr> 
 <tr>
   <td>Phone</td> 
    <td> <?php aprok("phone1")?> - <?php aprok("phone2")?> </td> 
</tr> 
 <tr>
   <td>Email</td> 
    <td><?php aprok("email")?></td> 
</tr> 
<tr>
   <td>Business Type</td> 
    <td><?php aprok("biztype")?></td> 
</tr> 
<tr>
   <td>Business Address</td> 
    <td><?php aprok("bizadd")?></td> 
</tr> 
  
 
   
 <!-- <tr> -->
 

 <tr>
   <td>State</td> 
    <td><?php aprok("state")?></td> 
</tr>  
 <tr>
   <td>LGA</td> 
    <td><?php aprok("lga")?></td> 
</tr>  
 <tr>
   <td>Available Position</td> 
    <td><?php aprok("town")?></td> 
</tr>  
  
<tr>
<tr>
   <td>Salary Details</td> 
    <td><?php aprok("accname")?></td> 
</tr> 
 <tr>
   <td>Number Of Employee:</td> 
    <td><?php aprok("landmark")?></td> 
</tr>  
<tr>
   <td>Company Name</td> 
    <td><?php aprok("locality")?></td> 
</tr> 
</table>
    <p>&nbsp;</p>
    <button class="btn btn-default" onclick="location.assign('?s_=employers')"><i class="fa fa-arrow-left"></i> Back </button> |  <button class="btn btn-primary" onclick="print()">Print <i class="fa fa-print"></i></button>
</div>  
       
              </div>

        </div>         
      </div>
    </div>
    </section>


    
    