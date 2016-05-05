<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <h2 class="page-header">
    <div class="container"><?php echo $title; ?></div>
  </h2>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
        <div class="col-md-12">
          <form enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="ticket_category" class="form-control">
            <option value="1">Design</option>
            <option value="2">Tech</option>
            <option value="3">Infrastucture</option>
          </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Question</label>
            <textarea class="form-control" style="height:200px;">
              
            </textarea>
          </div>
           <div class="form-group">
            <label for="attachment">Attachment</label>
            <input type="file" id="attachment" accept="image/*" multiple>
            <p class="help-block">Hold CTRL and click on file to select multiple.</p>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
