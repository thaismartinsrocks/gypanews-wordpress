<?php get_header(); ?>
<div class="highlights col-xs-12">
    <div class="container">
        <div class="slide col-xs-12 col-sm-8">
            <ul>
                <?php for($i = 1; $i < 4; $i++){ ?>
                    <li>
                        <a href="#">
                            <img src="http://placehold.it/700x320" alt="Destaque" title="Destaque">
                            <div class="details">
                                <div class="edition"><?php echo $i; ?>ª Edição</div>
                                <h1>Lorem ipsum dolor sit amet no his propriae reprimiq</h1>
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="buttons">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
        <div class="search col-xs-12 col-sm-4">
            <form method="post">
                <input type="text" name="s" placeholder="Pesquisar por...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="facebook-box col-xs-12 col-sm-4">
            <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/gypanews">
                        <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news col-xs-12">

    <div class="container">
        <section class="nopadding-mobile col-xs-12 col-sm-8">
            <h1><span>Reportagens</span></h1>

            <article class="first col-xs-12 col-sm-6">
                <div class="image col-xs-12">
                    <a href="#">
                        <img src="http://placehold.it/350x230" alt="Noticia" title="Noticia">
                        <p>3° Edição</p>
                    </a>
                </div>

                <div class="content col-xs-6">
                    <p class="small">10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                </div>
                <div class="content col-xs-6">
                    <p class="small pull-right"><a href="#"><i class="fa fa-comments-o"></i> 1 comentário</a></p>
                </div>

                <div class="content col-xs-12">
                    <a href="#">
                        <h2>Teste de Título</h2>
                        <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis elitr, quis reprimique omittantur has cu, everti sapientem et vis.</p>
                    </a>
                </div>
            </article>

            <?php for($i = 1; $i < 4; $i++){ ?>
                <article class="col-xs-12 col-sm-6">
                    <div class="image col-sm-4 hidden-xs">
                        <a href="#">
                            <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                            <p>3° Edição</p>
                        </a>
                    </div>
                    <div class="content col-sm-8 col-xs-12">
                        <div class="small col-xs-12">
                            <p>10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                        </div>
                        <div class="resume col-xs-12">
                            <a href="#">
                                <h2>Teste de Título</h2>
                                <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis... </p>
                            </a>
                        </div>
                        <div class="small col-xs-12">
                            <p class="pull-right"><a href="#"><i class="fa fa-comments-o"></i> 1 comentário</a></p>
                        </div>
                    </div>
                </article>
            <?php } ?>
            <div class="more col-xs-12">
                <a href="#">
                    <p>Mais Reportagens <i class="fa fa-angle-double-right"></i></p>
                </a>
            </div>
        </section>

        <div class="ads paddingtop col-xs-12 col-sm-4">
            <ul>
                <?php for($i = 1; $i < 6; $i++){ ?>
                    <li>
                        <div class="ad col-xs-12 col-sm-12">
                            <a href="#" target="_blank">
                                <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                            </a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<div class="ads col-xs-12">
    <div class="container">
        <ul>
            <?php for($i = 1; $i < 4; $i++){ ?>
                <li>
                    <div class="ad col-xs-12 col-sm-4">
                        <a href="#" target="_blank">
                            <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="interviews col-xs-12">
    <div class="container">
        <div class="ads ads-double">
            <ul>
                <?php for($i = 1; $i < 3; $i++){ ?>
                    <li>
                        <div class="ad ad-border col-xs-12 col-sm-4">
                            <a href="#" target="_blank">
                                <img src="http://placehold.it/320x200?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                            </a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="box col-xs-12 col-sm-4">
            <h1><span>Entrevistas</span></h1>
            <?php for($i = 1; $i < 3; $i++){ ?>
                <article class="row">
                    <div class="col-sm-4 hidden-xs">
                        <img src="http://placehold.it/100x100" alt="Entrevistado" title="Entrevistado">
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <h2>Nome do entrevistado</h2>
                        <p>Lorem ipsum dolor sit amet, ius semper quaeque an. Eam te meis elitr...</p>
                    </div>
                </article>
            <?php } ?>
        </div>

        <div class="more col-xs-12">
            <a href="#">
                <p>Mais Entrevistas <i class="fa fa-angle-double-right"></i></p>
            </a>
        </div>

    </div>
</div>
<?php get_footer(); ?>