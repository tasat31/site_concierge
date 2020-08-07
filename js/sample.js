<script>
var timerFlg = false;
var timer;


$(document).ready(function(){
  $('#tarux2').attr('data-content', 'こんにちは!サイトの案内をします。クリックして下さい。') ;
  $('[data-toggle="popover"]').popover('show');
  timer = setInterval(site_concierge, 7000);
});


function site_concierge_interval() {

  if ( timerFlg === true ) {
    timerFlg = false;
    $('#tarux2').attr('data-content', 'ありがとうございます!') ;
  } else {
    timerFlg = true;
  }
}

function site_concierge() {
   var xhttp;
   if (timerFlg === false) {
     return;
   }

   xhttp = new XMLHttpRequest();

   xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
        $('#tarux2').attr('data-content', this.responseText) ;
        $('[data-toggle="popover"]').popover('show');
        /* popover hide after 5 sec */
        setTimeout(function(){$('[data-toggle="popover"]').popover('hide');}, 3000);
     }
   };
   xhttp.open("GET", "{{ "scripts/site_concierge_service.php" | absURL }}?rand_val=" + (Math.random()).toString(), false);
   xhttp.send();
}
</script>
