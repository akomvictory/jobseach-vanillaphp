<section class="content">
    
    
      <div class="row">
       
   
      <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Edit Questions</h3>
            </div>
          
          
          
          <form action="lib/ff.php?pro=6" method="post">
          <div class="col-md-3">
  <br> <div class="input-group">
    <span class="input-group-addon"><i class="">Subject</i></span>
                    
				    <select name="subj" class="form-control" id="subj">
                         <?php if(isset($_SESSION['subj'])) { echo "<option value=\"".$_SESSION['subj']."\">".$_SESSION['subj']."</option>"; }?>
				      <option value="ENGLISH">ENGLISH</option>
				      <option value="MATHEMATICS">MATHEMATICS</option>
				      <option value="PHYSICS">PHYSICS</option>
				      <option value="BIOLOGY">BIOLOGY</option>
				      <option value="CHEMISTRY">CHEMISTRY</option>
				      <option value="GOVERNMENT">GOVERNMENT</option>
				      <option value="COMMERCE">COMMERCE</option>
				      <option value="LITERATURE">LITERATURE</option>
				      <option value="CRS">CRS</option>
				      <option value="HISTORY">HISTORY</option>
				      <option value="ACCOUNT">ACCOUNT</option>
			        </select>
			      </div> <br></div>
              
               <div class="col-md-3">
  <br> <div class="input-group">
    <span class="input-group-addon"><i class="">Year</i></span>
                    
				    <select name="year" class="form-control" id="year">
                        <?php if(isset($_SESSION['year'])) { echo "<option value=\"".$_SESSION['year']."\">".$_SESSION['year']."</option>"; }?>                      
				      <option value="2000">2000</option>
				      <option value="2001">2001</option>
				      <option value="2002">2002</option>
				      <option value="2003">2003</option>
				      <option value="2004">2004</option>                        
				      <option value="2005">2005</option>
				      <option value="2006">2006</option>
				      <option value="2007">2007</option>
				      <option value="2008">2008</option>
				      <option value="2009">2009</option>
				      <option value="2010">2010</option>
				      <option value="2011">2011</option>
				      <option value="2012">2012</option>
				      <option value="2013">2013</option>
				      <option value="2014">2014</option>
				      <option value="2015">2015</option>
				      <option value="2016">2016</option>
				      <option value="2017">2017</option>
				      <option value="2018">2018</option>
				      <?php //loadinfo("cathegorie")?>
			        </select>
			      </div> <br></div>
              
              
               <div class="col-md-3"><br>
                   <button class="btn btn-info">Show Questions</button>
              </div>
             
              
              <p>&nbsp;</p>
              
              
          </form>
            <!-- /.box-header -->
            <div class="box-body"><br>
                 <hr>
                 <p>&nbsp;</p>
              <table id="example1" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>Qno</th>
                  <th>Instruction</th>
                  <th>Question</th>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>E</th>                    
                  <th>Ans</th>
                  <th>Solu</th>
                  <th>Pix</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                              
               <?php jamb();?>               
               
                </tbody>               
              </table>
             
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                
                 <a href="?s_=add_jamb"><button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add New Question</button>   &nbsp;  &nbsp;  &nbsp;</a> 
                             
           
            </div>
          </div>
    </div>
      <!-- /.row -->
    </section>