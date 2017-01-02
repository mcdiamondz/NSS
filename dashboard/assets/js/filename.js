function displayName(){

var file_name = $('#sel_file').val().replace(/C:\\fakepath\\/i, '')
$('#name_of_doc').html(file_name);

}
