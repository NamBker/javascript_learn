
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Javascript</title>
    <?php echo Asset::css('bootstrap.min.css') ?>
    <?php echo Asset::css('styles.css') ?>
  	  
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
     <!-- end Nav -->
  
    <div class="container">
      <div class="row">
      	<div class="col-md-2">
      		<div class="navbar-collapse collapse">
        <ul class="nav">
          <?php
            $files = new GlobIterator(APPPATH.'views/BaiTap/*.php');
            foreach($files as $file)
            {
              $section_segment = $file->getBasename('.php');
              $section_title = Inflector::humanize($section_segment);
              ?>
              <li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
                <?php echo Html::anchor('/learn/'.$section_segment, $section_title) ?>
              </li>
              <?php
            }
          ?>
        </ul>        
      </div>
      	</div>
      	<div class="col-md-4"></div>
      	<div class="col-md-4"></div>

      </div>
    </div><!-- /.container -->
</html>
