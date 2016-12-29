
  function delete_rec(){
    row_id = $('#hidden_row_id').val();
    uid = $('#uid').val();
    alert(uid);
    $.ajax({
          url: "../include/deletemp.php",
          type: 'POST',
          data: { uid: uid, row_id: row_id },
          success: function (data) {
            alert(data)
            //$('#empresult').html(data);
          },
          error: function(jqXHR, status, errorThrown){
            $("#empresult").html('there was an error ' + errorThrown + ' with status ' + textStatus);

          }

      });
  }
