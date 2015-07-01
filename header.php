<!DOCTYPE html>
<head>
<title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>
<meta name="title" content="<?php bloginfo('title'); ?>"/>
<meta name="description" content="<?php bloginfo('description'); ?>"/>
<meta name="author" content="oemunix"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta charset="utf-8"/>
<link href="<?php bloginfo('stylesheet_url'); ?>"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<!-- Logo and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"></a>
</div> <!-- end navbar-header -->
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
	<li class="active"><a href="#">Link</a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
</ul>
</div> <!-- end navbar-collapse -->
</div> <!-- end container-fluid -->
	</nav>
<div class="jumbotron">
<h1>Hello World</h1>
<h2>Welcome at <?php bloginfo('title'); ?></h2>
<p><?php bloginfo('description'); ?></p>
</div>
<div class="row">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_widget') ) { ?>	
<div class="col-md-4">
<h3>Service</h3>
<p>Widget Article / Service Here</p>
<a href="<?php echo home_url() ; ?>/wp-admin/widgets.php"><button class="btn btn-success">Edit Widget</button></a>
</div>
<div class="col-md-4">
<h3>Service</h3>
<p>Widget Article / Service Here</p>
<a href="<?php echo home_url() ; ?>/wp-admin/widgets.php"><button class="btn btn-primary">Edit Widget</button></a>
</div>
<div class="col-md-4">
<h3>Service</h3>
<p>Widget Article / Service Here</p>
<a href="<?php echo home_url() ; ?>/wp-admin/widgets.php"><button class="btn btn-danger">Edit Widget</button></a>
</div>
<?php } ?>

</div>