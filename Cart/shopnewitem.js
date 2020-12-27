
$(document).ready(function() {

            var name = "base";

    $.ajax({
                type: "POST", 
                url: "shopfunc.php", 
                data: {              
                    search: name 
                },
                success: function(response) {
                
                    $("#display").html(response).show();
                }
            });

    $("#search").keypress(function() {

         name = $('#search').val();

        if (name == "") {

           name = "base";
        }

        if (name === "") {

            $("#display").html("");
        }
        else {

            $.ajax({
                type: "POST", 
                url: "shopfunc.php", 
                data: {              
                    search: name 
                },
                success: function(response) {
                 
                    $("#display").html(response).show();

                }

            });
        }
    });
});

