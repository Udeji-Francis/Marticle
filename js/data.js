$(document).ready(function() {
  
  var form = $('#my-form');
  /*
  form.on('submit', function(e) {
    e.preventDefault();

    var content = tinymce.get('textarea').getContent();
    var value = $('#textarea').val();
    
    //var title = $('#title').val();

    $('.container').html(content);

    //submitForm(title, content);
    console.log(content);
  });*/

});

function submitForm(title, content) {
  $.ajax({
    url: "../admin/index.php",
    method: "post",
    dataType: "text",
    data: {
      key: "add",
      title: title,
      body: content
    },
    success: function(res) {
      console.log(res);
    },
    error: function(err) {
      console.log(err);
    }
  });
}