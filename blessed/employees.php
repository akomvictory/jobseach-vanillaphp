
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
          
       
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>State of Origin</th>
    <th>Date of Birth</th>
    <th>Option</th>
  </tr>
  <?php employ_view(); ?>
 
</table>
       
              </div>

        </div>         
      </div>
    </div>
    </section>


    
    