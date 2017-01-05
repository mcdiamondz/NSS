function employment(){
    var job_start = document.getElementsByName('job_start')[0].value;
    var job_end = document.getElementsByName('job_end')[0].value;
    var postData = {
        uid : $('#uid').val(),
        employer :  $('#employer').val(),
        job_start : job_start,
        job_end :  job_end,
        position :  $('#position').val()
      };
    $.ajax({
      url: '../include/addemployer.php',
      type: 'POST',
      data: postData,
      success: function (data, status, xhr) {
        $('#empresult').html(data);
        //Reset The pane fields
        $('#employer').val('');
        $('#job_start_date').val('');
        $('#job_end_date').val('');
        $('#position').val('');
      },
      error: function(jqXHR, status, errorThrown){
        $("#empresult").html('there was an error ' + errorThrown + ' with status ' + textStatus);
      }
    });
}


function addeducation() {

    var sch_start = document.getElementsByName('sch_start')[0].value;
    var sch_end = document.getElementsByName('sch_end')[0].value;
    var postData = {
        uid : $('#uid').val(),
        nos :  $('#nos').val(),
        sch_start : sch_start,
        sch_end :  sch_end,
        edutype :  $('#edutype').val(),
        qualification :  $('#qualification').val()
      };
    $.ajax({
      url: '../include/addeducation.php',
      type: 'POST',
      data: postData,
      success: function (data, status, xhr) {
        $('#eduresult').html(data);
        //Reset The pane fields
        $('#nos').val('');
        $('#sch_start_date').val('');
        $('#sch_end_date').val('');
        $('#edutype').val('');
        $('#qualification').val('');
      },
      error: function(jqXHR, status, errorThrown){
        $("#eduresult").html('there was an error ' + errorThrown + ' with status ' + textStatus);
      }
    });
}

function stateoforigin() {
      var stateid = document.getElementById('state_of_origin').value;
      var postData = {stateid : stateid};
      $.ajax({
            url: '../../include/displaylga.php',
            type: 'POST',
            data: postData,
            success: function (data, status, xhr) {
              $('#displaylga').html(data);
            },
            error: function(jqXHR, status, errorThrown){
              $("#displaylga").html('there was an error ' + errorThrown + ' with status ' + textStatus);
            }

        });
    }

    function stateofresidence() {
          var stateid = document.getElementById('state_of_residence').value;
          var postData = {stateid : stateid};
          $.ajax({
                url: '../include/displaylga.php',
                type: 'POST',
                data: postData,
                success: function (data, status, xhr) {
                  $('#LGA_of_residence').html(data);
                },
                error: function(jqXHR, status, errorThrown){
                  $("#LGA_of_residence").html('there was an error ' + errorThrown + ' with status ' + textStatus);
                }

            });
        }
