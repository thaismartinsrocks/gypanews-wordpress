<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico?q=<?php echo md5('favicon'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico?q=<?php echo md5('favicon'); ?>" type="image/x-icon">
    <title>GypaNews</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/fontawesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/lightbox2/dist/css/lightbox.css" rel='stylesheet' type='text/css'>

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var server_url = '<?php echo get_home_url(); ?>';
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>

    <?php get_template_part('tag', 'analytics'); ?>

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=522695374411593";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--[if lt IE 7]>
<p>Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize-o</a> para ter uma melhor experiência.</p>
<![endif]-->

<div class="container-fluid">
<?php get_template_part('top', 'menu'); ?>