<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico?q=<?php echo md5('favicon'); ?>" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico?q=<?php echo md5('favicon'); ?>" type="image/x-icon">
    <title>GypaNews</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="bower_components/fontawesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="bower_components/lightbox2/dist/css/lightbox.css" rel='stylesheet' type='text/css'>

    <link href="style.css" rel='stylesheet' type='text/css'>
    <link href="css/blog.css" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <?php include('header.php'); ?>

        <div class="container">

            <?php include "aside.php"; ?>

            <article class="article col-xs-12 col-sm-8">
                <div class="col-xs-12">
                    <a href="$" class="category">
                        <p>Entretenimento</p>
                    </a>
                </div>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elits</h1>
                <div class="col-xs-12">
                    <p class="small">10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                </div>
                <div class="image col-xs-12">
                    <img src="http://placehold.it/800x300" alt="Noticia" title="Noticia">
                    <p>3ª Edição</p>
                </div>
                <div class="content col-xs-12">
                    <ul class="share">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#comments"><i class="fa fa-comments"></i></a></li>
                    </ul>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pretium est vel nisi porttitor pellentesque. Suspendisse mauris eros, tempus sit amet nibh sit amet, faucibus blandit diam. In volutpat enim eu mi vulputate pulvinar. Duis eleifend sagittis erat, sit amet interdum enim tincidunt in. Aenean elit turpis, tempus at odio quis, volutpat lobortis risus. In diam diam, commodo eget nisl eu, hendrerit condimentum magna. Cras quis accumsan enim, at tristique purus. Pellentesque facilisis suscipit sodales.</p>
                        <blockquote>Tid turpis sed, tincidunt vulputate tellus. Aenean quis commodo turpis, at facilisis</blockquote>
                        <p>Ut ac odio pharetra, mollis massa in, lacinia sem. Donec pellentesque ac massa nec fringilla. Praesent euismod quam quam, sit amet dapibus lorem mattis in. Integer vel enim at diam vestibulum vehicula eget quis urna. Sed finibus ultrices fringilla. Phasellus ornare eros non nulla fringilla, a scelerisque ligula laoreet. Fusce vestibulum mi lacus. Maecenas pharetra arcu risus, et mollis elit feugiat dignissim. Donec imperdiet purus vel diam vehicula, sed ultricies est tincidunt. Proin in tellus justo. In hac habitasse platea dictumst. Nullam quis odio efficitur, cursus nunc vitae, molestie eros.</p>
                        <p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                        </p>
                        <p>Quisque dui nisl, scelerisque id turpis sed, tincidunt vulputate tellus. Aenean quis commodo turpis, at facilisis libero. Proin efficitur felis ac vestibulum cursus. Maecenas cursus diam quis massa suscipit, quis placerat sem molestie. Vivamus fermentum leo velit, quis pretium libero venenatis eu. Cras sagittis metus sit amet convallis tincidunt. Pellentesque pretium, nunc vel rhoncus porta, dolor elit molestie dolor, vitae sagittis ante ligula ac libero.</p>
                        <blockquote class="left">Tid turpis sed, tincidunt vulputate tellus. Aenean quis commodo turpis, at facilisis</blockquote>
                        <p>Praesent rhoncus eros nec metus vestibulum, in lacinia elit placerat. Ut magna mi, luctus ac molestie nec, bibendum maximus enim. Nam facilisis leo eget varius tincidunt. Ut id efficitur risus. Sed bibendum porta sapien, sit amet pharetra augue tempor at. Suspendisse vel volutpat metus, vitae molestie magna. Phasellus nec magna odio. Nulla fermentum lorem non euismod finibus. Phasellus ac nisl vitae nunc sodales pellentesque. Ut pellentesque justo a bibendum imperdiet. Vestibulum commodo magna eget neque aliquam, quis commodo mi auctor.</p>
                        <blockquote class="right">Tid turpis sed, tincidunt vulputate tellus. Aenean quis commodo turpis, at facilisis</blockquote>
                        <p>Fusce volutpat, magna id bibendum tempus, lectus purus rhoncus ante, vitae vulputate nisi nulla at sem. Nam iaculis ut lectus eu vestibulum. Nunc euismod malesuada sapien, lobortis sodales nisl efficitur non. Donec vitae sapien nec est tempus vestibulum ac non odio. In eros leo, rhoncus in purus ut, consectetur eleifend neque. Donec ut purus at velit placerat vestibulum. Phasellus et sapien sit amet augue ornare fermentum. Donec malesuada augue ut mauris tempor, pretium molestie velit mollis. Vivamus iaculis a lorem nec dictum. Cras tellus nunc, gravida et pellentesque vulputate, vehicula in dolor. Proin eu laoreet libero.</p>
                    </div>
                </div>
                <div class="buttons col-xs-12">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-left pull-left"></i>
                                <p class="pull-right text-left">Post Anterior  Post Anterior Post Anterior Post Anterior</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <p class="pull-left text-right">Próximo Post Próximo Post Próximo Post Próximo Post Próximo Post</p>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="author col-xs-12">
                    <div class="image col-xs-2">
                        <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                    </div>
                    <div class="resume col-xs-10">
                        <h2>Nome do Autor</h2>
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, vix probo partiendo id, harum vitae ne vix. Salutandi similique eum ne, mea alia sensibus efficiendi eu. Per doctus gloriatur ut, eum dico enim democritum an. Vel tollit nonumy an, at error nominavi antiopam nam. Ea erroribus vituperatoribus nec. In usu quod prodesset, ex unum blandit quo.</p>
                    </div>
                </div>
                <div class="comments col-xs-12">
                    <div class="col-xs-12">
                        <h2>4 Comentário(s)</h2>
                        <ul>
                            <?php for($i = 1; $i < 5; $i++){ ?>
                                <li>
                                    <p class="title">Nome | 12/12/2015</p>
                                    <p>Lorem ipsum dolor sit amet, cum diceret noluisse apeirian et, paulo choro aliquam id vim. Ea his fastidii menandri, novum abhorreant vel in, dico oblique quaeque at sed. An vitae impedit ius. Facer epicuri nec no, ludus quidam consequuntur no vix.</p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="col-xs-12">
                        <a name="comments"></a>
                        <h2>Deixe seu recado</h2>
                        <form>
                            <input type="text" name="nome" placeholder="Seu Nome">
                            <input type="text" name="nome" placeholder="Seu Email">
                            <input type="text" name="nome" placeholder="Seu Site">
                            <textarea name="comment" rows="5" placeholder="Sua Mensagem"></textarea>
                            <input type="submit" name="submit" value="Enviar">
                        </form>
                    </div>

                </div>
            </article>
        </div>

        <?php include "footer.php"; ?>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/main.js"></script>
</body>
</html>