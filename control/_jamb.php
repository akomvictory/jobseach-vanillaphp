
 <script type="text/javascript">        
             var symbols = "±, √, π"; 
     
        function up(){     
        var sym = document.getElementById("symbols");            
            sym.value = "<sup>" + sym.value + "</sup>"
        }
     
      function down(){     
        var sym = document.getElementById("symbols");            
            sym.value = "<sub>" + sym.value + "</sub>"
        }
        
        function resett(){     
        var sym = document.getElementById("symbols");            
            sym.value = symbols;
        }

    </script>

<style type="text/css">
   .element{margin-bottom:15px;}
</style>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-9">
         
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Question</h3>
            </div>
                 <?php er()?>              
   <div class="box-body">
          
       
       <form action="lib/ff.php?pro=7" method="post" enctype="multipart/form-data">
           <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
				  <div class="input-group">
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
				      <option value="ACCOUNTING">ACCOUNTING</option>
			        </select>
			      </div>
           <br>
				   <div class="input-group">
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
			        </select>
			      </div>
				<br>
					  <div class="input-group">
    <span class="input-group-addon"><i class="">Image</i></span>
                        Browse Picture:
  <label for="pix"></label>
  <input type="file" name="pix" id="pix" class="form-control" />
  <br /></div><p>&nbsp;</p>
                        
  <div class="input-group">
    <span class="input-group-addon"><i class="">Instruction</i></span>
    <input id="email" type="text" class="form-control" name="instr" >
  </div><br>
                     
                      <div class="input-group">
    <span class="input-group-addon"><i class="">Comprehension</i></span>
    <textarea name="dep" rows="4" class="textarea form-control" id="dep"><?php  aproko("depn");?></textarea>
           </div>
           <br>
                      
  <div class="input-group">
    <span class="input-group-addon"><i class="">Question Number</i></span>
   <input name="qno" class="form-control" id="a6" value="<?php  aproko("qno");?>" size="2" maxlength="2" />
  </div><br>
                        
                       <div class="input-group">
    <span class="input-group-addon"><i class="">Question </i></span>
 <textarea name="ques" rows="4" class="textarea form-control"><?php  aproko("ques");?></textarea>
                      </div>
           <br>
                
                  <div class="input-group">
    <span class="input-group-addon"><i class="">A</i></span>
                      <input id="a" name="a" class="form-control"  value="<?php  aproko("a");?>" />
                  </div>
                  <div class="input-group">
    <span class="input-group-addon"><i class="">B</i></span>
                      <input id="b" name="b" class="form-control"  value="<?php  aproko("b");?>"/>
                    </div>
                  <div class="input-group">
    <span class="input-group-addon"><i class="">C</i></span>
                      <input id="c" name="c" class="form-control" value="<?php  aproko("c");?>" />
                    </div>
                     <div class="input-group">
    <span class="input-group-addon"><i class="">D</i></span>                      
                      <input id="d" name="d" class="form-control" value="<?php  aproko("d");?>"/>
                    </div>
                    <div class="input-group">
    <span class="input-group-addon"><i class="">E</i></span>
              <input id="e" name="e" class="form-control" value="<?php aproko("e");?>"/>
                  </div>
           <br>
                    <div class="input-group">
    <span class="input-group-addon"><i class="">Correct Answer</i></span>
                      <select name="ans" class="form-control"  id="ans">
                      <option value="<?php aproko("ans");?>"><?php aproko("ans");?></option>
                        <option value="A">Select Correct Answer</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                      </select>
                    </div>
                    <br>                     
  <div class="input-group">
  <span class="input-group-addon"><i class="">Solution </i></span>
 <textarea name="solu" rows="4" class="textarea form-control" id="solut"> <?php aproko("solu");?></textarea>
  </div>  <br>
           
             </div>
                    <div class="input-group">
                        <span id="verted"></span><br>
    <span class="input-group-addon"><i class="">Symbols</i></span>
              <input id="symbols" class="form-control"/><br>
 <span style="cursor: pointer;" onclick="resett()">Show symbols</span> | <span style="cursor: pointer;" onclick="up()">Up</span> | <span style="cursor: pointer;" onclick="down()">Down</span>                        
                  </div>
                    <div class="element"></div>
                  <div class="entry"><button type="submit" class="btn btn-info">Save Changes <i class="fa fa-save"></i></button> 
					</div>
				</form>
              </div>

        </div>         
      </div>
    </section>


    
    