
$(document).ready(function() {

 window.idlog = "журнал" ;
    document.getElementById('btn_create').hidden = true;
    document.getElementById('searchglog').hidden = true;

    $("#searchglog").keyup(function() {
           
        var name = $('#searchglog').val();
                   if (name === "") {

            $("#displaylog").html("<div class='col-12 InfoWoodLandsquarelog' ><div class='InfoWoodLandText'><p><h3>Поле пустое</p></h3></div></div>");
        }
        else {   
            $.ajax({
                type: "POST", 
                url: "log/searchg_log.php", 
                data: {
                searchglog: name,
                id_page :idlog
                 },
                success: function(response) {              
                    $("#displaylog").html(response).show();
                }
            }); 
            }       
    });

    $(".btn_log").click(function() {
            idlog = "заказчики";
                document.getElementById('btn_create').hidden = false;
    document.getElementById('searchglog').hidden = false;

   document.getElementById("searchglog").value = "";

        var name = $('#searchglog').val();         
            $.ajax({
                type: "POST", 
                url: "log/total_order_page.php", 
                data: {
                searchglog: name,
                id_page :idlog
                 },
                success: function(response) {              
                    $("#displaylog").html(response).show();
                }
            }); 
    });

 $(".btn_order").click(function() {
                        idlog = "журнал";
           document.getElementById('btn_create').hidden = false;
    document.getElementById('searchglog').hidden = false;

   document.getElementById("searchglog").value = "";

        var name = $('#searchglog').val();         
            $.ajax({
                type: "POST", 
                url: "log/orders_page.php", 
                data: {
                searchglog: name,
                id_page :idlog
                 },
                success: function(response) {              
                    $("#displaylog").html(response).show();
                }
            }); 
    });
         


      $(document).on('click', '.btn_del', function() {
                  var id_button = $(this).attr("id");
   document.getElementById("searchglog").value = "";

              $.ajax({
                    type: "POST", 
                    url: "log/delete.php", 
                    data: {       
                    btn_del_id :id_button,
                    id_page :idlog
                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


       $(document).on('click', '.btn_edit', function() {
                  var id_button = $(this).attr("id");
   document.getElementById("searchglog").value = "";
              $.ajax({
                    type: "POST", 
                    url: "log/edit.php", 
                    data: {       
                    btn_del_id :id_button,
                    id_page :idlog
                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


       $(document).on('click', '.btn_update_order', function() {

        var order_email = $('#order_email').val();
        var order_name = $('#order_name').val();
        var order_adress = $('#order_adress').val();
        var order_total_id = $('#order_total_id').val();
        var order_total_price = $('#order_total_price').val();
        var Time_order = $('#Time_order').val();
        var id_button = $(this).attr("id");

   document.getElementById("searchglog").value = "";
              $.ajax({
                    type: "POST", 
                    url: "log/update.php", 
                    data: {       
                    btn_del_id :id_button,
                    id_page :idlog,
                    order_email_text :order_email,
                    order_name_text :order_name,
                    order_adress_text :order_adress,
                    order_total_id_text :order_total_id,
                    order_total_price_text :order_total_price,
                    Time_order_text :Time_order

                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


        $(document).on('click', '.btn_update_total_order', function() {


        var id_button = $(this).attr("id");
        var order_number = $('#order_number').val();
        var total_order_email = $('#total_order_email').val();
        var total_order_time = $('#total_order_time').val();
        var total_order_product = $('#total_order_product').val();

   document.getElementById("searchglog").value = "";
              $.ajax({
                    type: "POST", 
                    url: "log/update.php", 
                    data: {       
                    btn_del_id :id_button,
                    id_page :idlog,
                    order_number_text :order_number,
                    total_order_email_text :total_order_email,
                    total_order_time_text :total_order_time,
                    total_order_product_text :total_order_product


                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


 $(".btn_create").click(function() {
   document.getElementById("searchglog").value = "";

        var name = $('#searchglog').val();         
            $.ajax({
                type: "POST", 
                url: "log/create_page.php", 
                data: {
                searchglog: name,
                id_page :idlog
                 },
                success: function(response) {              
                    $("#displaylog").html(response).show();
                }
            }); 
    });


       $(document).on('click', '.btn_create_order', function() {

        var order_email = $('#order_email').val();
        var order_name = $('#order_name').val();
        var order_adress = $('#order_adress').val();
        var order_total_id = $('#order_total_id').val();
        var order_total_price = $('#order_total_price').val();
        var Time_order = $('#Time_order').val();

   document.getElementById("searchglog").value = "";
              $.ajax({
                    type: "POST", 
                    url: "log/create.php", 
                    data: {       
                    id_page :idlog,
                    order_email_text :order_email,
                    order_name_text :order_name,
                    order_adress_text :order_adress,
                    order_total_id_text :order_total_id,
                    order_total_price_text :order_total_price,
                    Time_order_text :Time_order

                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


        $(document).on('click', '.btn_create_total_order', function() {


        var order_number = $('#order_number').val();
        var total_order_email = $('#total_order_email').val();
        var total_order_time = $('#total_order_time').val();
        var total_order_product = $('#total_order_product').val();

   document.getElementById("searchglog").value = "";
              $.ajax({
                    type: "POST", 
                    url: "log/create.php", 
                    data: {       
                    id_page :idlog,
                    order_number_text :order_number,
                    total_order_email_text :total_order_email,
                    total_order_time_text :total_order_time,
                    total_order_product_text :total_order_product


                    },
                    success: function(response) { 
                   $("#displaylog").html(response).show();

                    }
            });
        });


});


