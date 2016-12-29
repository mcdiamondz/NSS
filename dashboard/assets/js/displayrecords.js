// NOT WORKING FOR REASONS I HAVE NO I.DEA OF
$(function (){
  var user_id = uid;
  // var uid = document.getElementById('uid').value;
          $.ajax({
                url: "../include/displayemp.php",
                type: 'POST',
                data: { uid: user_id},
                success: function (data) {
                  $('#empresult').html(data);
                },
                error: function(jqXHR, status, errorThrown){
                  $("#empresult").html('there was an error ' + errorThrown + ' with status ' + textStatus);

                }

            });

});



    // $("#displayemp").load(function() {
        //   $.ajax({    //create an ajax request to load_page.php
        //     type: "GET",
        //     url: "../include/displayemp.php",
        //     dataType: "html",   //expect html to be returned
        //     success: function(response){
        //         $("#responsecontainer").html(response);
        //         //alert(response);
        //     }
        //
        // });
    // });
