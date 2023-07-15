
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
$(document).ready(function(){

$('.buttons').click(function(){

$(this).addClass('active').siblings().removeClass('active');

var filter = $(this).attr('data-filter')

if(filter == 'all'){
  $('.image').show(400);
 }else{
 $('.image').not('.'+filter).hide(200);
 $('.image').filter('.'+filter).show(400);
 }

});

$('.gallery').magnificPopup({

 delegate:'a',
 type:'image',
 gallery:{
     enabled:true
     
 }

});

});



</script>
