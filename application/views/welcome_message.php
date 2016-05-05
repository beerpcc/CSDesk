<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

      <div class="row">
      	<div class="col-md-8 col-md-offset-2">
      	<h1 class="page-header">CSDesk</h1>
	      	<div class="col-md-6">

	      	</div>
	      	<div class="col-md-6">
	      		<form>
				  <div class="form-group">
				    <label for="inputId">Student ID</label>
				    <input type="email" name="student_id" class="form-control" id="inputId" placeholder="Student ID">
				  </div><!-- 
				  <div class="form-group">
				    <label for="exampleInputPassword1">Category</label>
				    <select name="ticket_category" class="form-control">
					  <option value="1">Design</option>
					  <option value="2">Tech</option>
					  <option value="3">Infrastucture</option>
					</select>
				  </div> -->
				  <button type="submit" class="btn btn-default btn-success">Sign in</button>
				</form>
	      	</div>
	    </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
