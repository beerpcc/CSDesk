<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CSDesk Support</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php echo uri_string() === 'question/index' ? 'active' : '' ; ?>"><a href="index"><i class="fa fa-question-circle" aria-hidden="true"></i>
 Current Question</a></li>
            <li class="<?php echo uri_string() === 'question/create' ? 'active' : '' ; ?>"><a href="create"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 New Question</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Sign out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>