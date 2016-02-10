<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to iBabble</title>
      <link href="<?php echo VIEWS_URI; ?>/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo VIEWS_URI; ?>/css/custom.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
      <script src="<?php echo VIEWS_URI; ?>/js/bootstrap.js"></script>
      <script src="<?php echo VIEWS_URI; ?>/js/ckeditor/ckeditor.js"></script>
    <!--      Check title-->
	<?php if(!isset($title))              $title = SITE_TITLE; ?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">iBabble</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
			<?php if(!isLoggedIn()) : ?>
				<li><a href="register.php">Create An Account</a></li>
			<?php else : ?>
				<li><a href="create.php">Create Topic</a></li>
			<?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left"><?php echo $title; ?></h1>
						<h4 class="pull-right">Brought to you by Duc Anh Tran</h4>
						<div class="clearfix"></div>
						<hr>
						<?php displayMessage(); ?>