$(document).ready(function(){
    // click sur nous contacter dans la nav emmene en bas de la page
    $('#contact').click(function() {
        $("html, body").animate({ scrollTop: $(document).height() });
      });
    // lien nav hover change de couleur
    $('.lienscol').hover(
        function() {
            $(this).css("color", "#000000");
        },
        function() {
            $(this).css("color", "#298BEA");
        }
    );

    // boutton nav hover change de couleur
    $('#butsearch').hover(
        function() {
            $(this).css("color", "#000000");
        },
        function() {
            $(this).css("color", "#FFFFFF");
        }
    );
    
    $('#icon').hide();
    // quand on scroll vers le bas nav change de couleur de background et ces élément comme les liens aussi
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

    // quand on hover les cartes leur contenu s'affiche sinon ils sont hide
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


    // cliquer sur le burger en mode tel ouvre un modal
    $('.liensmodal').click(function(){
        $('.modal').modal('toggle');
    });
    

    // AJAX pour le form contact en bas de page
    $("#envoye_contact").click(function () {
        // récupère les valeurs des inputs
        var formData = {
            controller: $("#controller").val(),
            nom: $("#nom").val(),
            prenom: $("#prenom").val(),
            mail: $("#mail").val(),
            message: $("#message").val(),
        };

        // vide les inputs
        $('#nom').val('');
        $('#prenom').val('');
        $('#mail').val('');
        $('#message').val('');

        var type = "POST";
        var ajaxurl = "controller.php";

        $.ajax({
            type: type,
            // en minuscule url
            url: ajaxurl,
            dataType: 'json',
            data: formData,
            success: function (data) {
                alert("Votre message a bien été envoyé!\nNous vous répondrons au plus vite.");
            },
            error: function (xhr, status, error) {
                console.log("Erreur AJAX : " + error);
                console.log("Erreur AJAX : " + status);
                console.log("Erreur AJAX : " + xhr);
            },
        });
    });

    // cache toute les cartes sauf celles affichées de base
    $('.cache').hide();

    // quand on submit une recherche dans la barre de recherche affiche ce que l'on souhaite voir

    $('#searchForm').submit(function(event) {
        event.preventDefault();
        
        var inputcol = $('#inputcol').val().toLowerCase();
        
        $('.original').hide();
        $('.cache').hide();
        
        var selector = '.' + inputcol;

        // Iterate through each card and check if it matches the search input
        $('.card').each(function() {
            var cardTitle = $(this).find('.card-title').text().toLowerCase();
            var cardText = $(this).find('.card-text').text().toLowerCase();
            
            if (cardTitle.includes(inputcol) || cardText.includes(inputcol)) {
                $(selector).show();
            }
        });
    });

    // quand on submit une recherche dans le modal de la version tel affiche ce que l'on souhaite voir

    $('#modalsearch').submit(function(event) {
        event.preventDefault();
        
        var inputcol = $('#modalinput').val().toLowerCase();
        
        $('.original').hide();
        $('.cache').hide();
        
        var selector = '.' + inputcol;

        // Iterate through each card and check if it matches the search input
        $('.card').each(function() {
            var cardTitle = $(this).find('.card-title').text().toLowerCase();
            var cardText = $(this).find('.card-text').text().toLowerCase();
            
            if (cardTitle.includes(inputcol) || cardText.includes(inputcol)) {
                $(selector).show();
            }
        });
    });




    // quand on submit un filtre show les cartes que l'on veut voir et cache celle qui ne souihaite plus voir
    $('#filtre').submit(function(event) {
        event.preventDefault();
    
        var type = $('#type').val();
        var surface = $('#surface').val();
        var prix = $('#prix').val();
    
        $('.original').hide();
        $('.cache').hide();
    
        var selector = '.' + type;
    
        if (type === "villa") {
            if (surface === "petite à grande") {
                selector += '-surfacecrois';
            } else if (surface === "grande à petite") {
                selector += '-surfacedes';
            } else if (prix === "croissant") {
                selector += '-prixcrois';
            } else if (prix === "decroissant") {
                selector += '-prixdes';
            } else {
                selector += ''; // No additional class needed
            }
        } else if (type === "maison") {
            // Similar logic for "maison"
        } else if (type === "cabane") {
            // Similar logic for "cabane"
        } else if (type === "appartement") {
            // Similar logic for "appartement"
        } else {
            $('.original').show();
            $('.cache').hide();
            return;
        }
    
        if (surface === "petite à grande") {
            selector += '-surfacecrois';
        } else if (surface === "grande à petite") {
            selector += '-surfacedes';
        }
    
        if (prix === "croissant") {
            selector += '-prixcrois';
        } else if (prix === "decroissant") {
            selector += '-prixdes';
        }
    
        $(selector).show();
    });
    
});