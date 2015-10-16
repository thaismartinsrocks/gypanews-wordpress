<div class="paddingtop-double paddingbottom mobile-nopaddingbottom col-xs-12 col-sm-4 pull-right">
    <div class="search hidden-xs">
        <form method="post">
            <input type="text" name="s" placeholder="Pesquisar por...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="facebook-box hidden-xs">
        <div class="fb-page" data-href="https://www.facebook.com/gypanews" data-small-header="true" data-width="380px" data-height="245px" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/gypanews">
                    <a href="https://www.facebook.com/gypanews">Conheça a página do Facebook da Gypa News</a>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="ads">
        <ul>
            <?php for($i = 1; $i < 5; $i++){ ?>
                <li>
                    <div class="ad">
                        <a href="#" target="_blank">
                            <img src="http://placehold.it/320x100?text=Anuncio+<?php echo $i ?>" alt="Anuncie Aqui" title="Anuncie Aqui">
                        </a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="news hidden-xs">
        <h1><span>Mais Lidas</span></h1>
        <?php for($i = 1; $i < 5; $i++){ ?>
            <article class="col-xs-12">
                <div class="image col-xs-2">
                    <a href="#">
                        <img src="http://placehold.it/100x100" alt="Noticia" title="Noticia">
                    </a>
                </div>
                <div class="content col-xs-10">
                    <div class="col-sm-12 hidden-xs">
                        <p class="small"><a href="#">Entretenimento</a> | 10/05/2015 - Por <a href="#">Ana Claudia</a></p>
                    </div>
                    <div class="col-xs-12">
                        <a href="#">
                            <p>Teste de Título</p>
                        </a>
                    </div>
                </div>
            </article>
        <?php } ?>
    </div>
    <div class="categories hidden-xs">
        <h1><span>Categorias</span></h1>
        <ul>
            <?php for($i = 1; $i < 9; $i++){ ?>
                <li>
                    <a href="#">
                        <p>Teste de Título</p>
                    </a>
                </li>
            <?php } ?>
    </div>
</div>