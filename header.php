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