

function hj_readless()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var pe = document.getElementById('s_l_past_events');
      pe.innerHTML= xhttp.responseText;

      var br = document.getElementById('b_readmore');
      br.setAttribute("onclick","hj_readmore()");
      br.setAttribute("value","See more");
      history.replaceState($(".back-grey1").html(), null, "");
    }
  };
  xhttp.open("GET", "http://localhost/wordpress/wp-content/themes/2017S_Web_Engineering_WP/past_readless.php", true);
  xhttp.send();
}





function hj_readmore() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var pe = document.getElementById('s_l_past_events');
      pe.innerHTML= xhttp.responseText;

      var br = document.getElementById('b_readmore');
      br.setAttribute("onclick","hj_readless()");
      br.setAttribute("value","Hide");
      history.replaceState($(".back-grey1").html(), null, "");
    }
  };
  xhttp.open("GET", "http://localhost/wordpress/wp-content/themes/2017S_Web_Engineering_WP/past_readmore.php", true);
  xhttp.send();
}
