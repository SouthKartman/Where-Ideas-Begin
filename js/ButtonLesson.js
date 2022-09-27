// Появление блоков по кнопке

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  jQuery(function() {
  var c = $(".content").size();
  x = 1;
  $('.content:lt(' + x + ')').fadeIn();
  $('.buttonns').click(function(e) {
    e.preventDefault();
    x = (x + 2 <= c) ? x + 2 : c;
    $('.content:lt(' + x + ')').show();
  });
});

$(document).ready(function() {
  var x = get_cookie ( "link_Id_click" );
  if (x == "true") {
  document.getElementById('link_Id').style.display = 'none';
  }
  $("#link_Id").click(function() {
     this.style.display='none';
     document.cookie = "link_Id_click=true; expires=Mon, 01-Jan-2018 00:00:00 GMT";
  });
});
 
function get_cookie (cookie_name) {
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
  if (results)
    return (unescape (results[2] ));
  else
    return null;
}