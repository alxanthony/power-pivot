<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        the_title(); echo ' - ';  bloginfo( 'name' );
    }?>
</title>

    <?php wp_head() ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

