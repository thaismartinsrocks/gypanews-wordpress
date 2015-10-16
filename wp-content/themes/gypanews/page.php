<?php get_header(); ?>

<div class="container">

    <?php include "aside.php"; ?>

    <article class="article col-xs-12 col-sm-8">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elits</h1>
        <div class="image col-xs-12">
            <img src="http://placehold.it/800x300" alt="Noticia" title="Noticia">
        </div>
        <div class="content col-xs-12">
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
        <div class="comments col-xs-12">
            <div class="col-xs-12">
                <?php comments_template(); ?>
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

<?php get_footer(); ?>