<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Import Questions</h3>
            </div>
              <?php er()?>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="process/3" method="post" enctype="multipart/form-data">
              <div class="box-body">
                    <div class="form-group">
                  <input type="hidden" id="exampleInputFile" class="form-control" name="test">
                </div>
                  
                   <div class="form-group">
                  <label for="exampleInputEmail1">Select Type</label>
                  <select class="form-control" name="type">
                  <option value="Objective">Objective</option>
                  <option value="Subjective">Subjective</option>
                    </select>
                </div>
                  
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Subject</label>
                  <select class="form-control" name="subj">
                   <?php subjects();?>
                    </select>
                </div>
                   <div class="form-group">
                  <label for="exampleInputFile">Mark per Question</label>
                  <input type="text" id="exampleInputFile" class="form-control" name="mark">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Select Class</label>
                 <select class="form-control" name="class">
                    <?php classes();?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Select File</label>
                  <input type="file" id="exampleInputFile" class="form-control" name="file">
                </div>
                  
                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Import Questions</button>
              </div>
            </form>
          </div>
          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
         
      </div>
      <!-- /.row -->
    </section>