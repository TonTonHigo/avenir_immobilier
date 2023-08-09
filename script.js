$(document).ready(function(){

    // lien nav
    $('.lienscol').hover(
        function() {
            $(this).css("color", "#000000");
        },
        function() {
            $(this).css("color", "#298BEA");
        }
    );

    // boutton nav
    $('#butsearch').hover(
        function() {
            $(this).css("color", "#000000");
        },
        function() {
            $(this).css("color", "#FFFFFF");
        }
    );
    
    $('#icon').hide();
    // quand on scroll vers le bas nav change
    $(document).scroll(function(){
        if ($(this).scrollTop() > 0) {
            $('header').css("background-color", "#298BEA");
            $('.lienscol').css("color", "#FFFFFF");
            $('#icon').show();
            $('#icon').hover(function(){
                $(this).css("bottom","60px");
            },function(){
                $(this).css("bottom","50px");
            });
            $('.lienscol').hover(
                function() {
                    $(this).css("color", "#000000");
                },
                function() {
                    $(this).css("color", "#FFFFFF");
                }
            );
            $('#butsearch').css("background-color","#FFFFFF")
            $('#butsearch').css("color","#000000")
            $('#butsearch').hover(
                function() {
                    $(this).css("color", "#298BEA");
                },
                function() {
                    $(this).css("color", "#000000");
                }
            );
            
            
        } else {
            $('header').css("background-color", "transparent");
            $('.lienscol').css("color", "#298BEA");
            $('#icon').hide();
            $('.lienscol').hover(
                function() {
                    $(this).css("color", "#000000");
                },
                function() {
                    $(this).css("color", "#298BEA");
                }
            );
            $('#butsearch').css("background-color","#298BEA")
            $('#butsearch').css("color","#FFFFFF")
            $('#butsearch').hover(
                function() {
                    $(this).css("color", "#000000");
                },
                function() {
                    $(this).css("color", "#FFFFFF");
                }
            );
        }
        
    });

    // cartes
    $('.btn').hover(function(){
        $(this).css("background-color","#000000")
        $(this).css("color","#FFFFFF")
    },function(){
        $(this).css("background-color","#298BEA")
    });
    $('.card').mouseover(function(){
        $(this).find('.card-text').slideDown("slow");
    }).mouseleave(function(){
        $(this).find('.card-text').slideUp("slow");
    });


    // burger modal
    $('.liensmodal').click(function(){
        $('.modal').modal('toggle');
    });
    

    // AJAX LE DEMON
    $("#envoye_contact").click(function(){
        // récupère les valeurs des inputs
        var formData = {
            controller: $("#controller").val(),
            nom: $("#nom").val(),
            prenom: $("#prenom").val(),
            mail: $("#mail").val(),
            message: $("#message").val()
        };
        console.log(formData);

        
        var type = "POST";
        var ajaxurl = "controller.php";

        $.ajax({
            type: type,
            // en minuscule url
            url: ajaxurl,
            dataType: 'json',
            data: formData,
            success: function(data){
                alert("Votre message a bien été envoyé!");
            },
            error: function(xhr,status,error){
                console.log("Erreur AJAX : " + error);
                console.log("Erreur AJAX : " + status);
                console.log("Erreur AJAX : " + xhr);
            }
        });

    });
});