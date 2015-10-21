var social = {

    share: {

        url: function()
        {
            return encodeURIComponent(window.location.href);
        },

        title: function()
        {
            return document.title;
        },

        facebook: function()
        {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + social.share.url(), '_blank', 'width=626,height=436');
        },

        twitter: function(text)
        {
            window.open('https://twitter.com/share?text=' + text + '&url=' + social.share.url(), '_blank', 'width=626,height=436');
        },

        google: function()
        {
            window.open('https://plus.google.com/share?url=' + social.share.url(), '_blank', 'width=626,height=436');
        },

        linkedin: function()
        {
            window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + social.share.url() + '&title=' + social.share.title() + '&summary=&source=', '_blank');
        },

        email: function()
        {

            $(".share-email-container").fadeIn( "fast" );

        },

        validEmail: function(val) {
            if(!val.match(/\S+@\S+\.\S+/)){ // Jaymon's / Squirtle's solution
                // Do something
                return false;
            }
            if( val.indexOf(' ')!=-1 || val.indexOf('..')!=-1){
                // Do something
                return false;
            }
            return true;
        },

        sendEmail: function(arquivo, id)
        {
            $(".share-email-error").text("").hide();
            var email = $("#email-share").val();
            if($.trim(email) == "" || !social.share.validEmail(email) ) {
                $(".share-email-error").text("Digite um e-mail válido").css("color", "#cd0a0a").fadeIn( "fast" );
                return false;
            }

            $(".share-email-error").text("Aguarde...").css("color", "#0A5ECD").fadeIn( "fast" );

            // envia e-mail
            $.post(ajaxurl, {
                action: "share_mail",
                "email": email,
                "arquivo": arquivo,
                "id": id
            }, function(response){
                if( !response ) {
                    $(".share-email-error").text("Não foi possível compartilhar por e-mail. Tente novamente mais tarde").css("color", "#cd0a0a").fadeIn( "fast" );
                }else {
                    $(".share-email-error").text("A sua mensagem foi compartilhada com sucesso").css("color", "#058A24").fadeIn( "fast" );
                }
            });

        },

        closeModal: function()
        {
            $(".share-email-error").text("").css("color", "#ffffff").hide();
            $(".share-email-container").hide();
        },

        whatsapp: function()
        {
            window.location = "whatsapp://send?text=" + social.share.url();
        }

    }

}