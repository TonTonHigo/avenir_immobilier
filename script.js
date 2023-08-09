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

    // quand on scroll vers le bas nav change
    $(document).scroll(function(){
        if ($(this).scrollTop() > 0) {
            $('header').css("background-color", "#298BEA");
            $('.lienscol').css("color", "#FFFFFF");
            
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
    
});