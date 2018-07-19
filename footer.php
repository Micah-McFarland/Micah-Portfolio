<div class="container footer-bg">
  <div class="row">
    <div class="col-md-12" style="padding-top:20px;">
      <a class="btn contact-btn" data-toggle="modal" data-target="#modalContact">Let's Talk</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 40px; margin-top:40px; ">
      <p style="color:#DDD; text-align:center;font-size:16px;">Copyright 2018 by Micah McFarland</p>
    </div>
  </div>
</div>
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Contact Me</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
        <script>
            hbspt.forms.create({
	            portalId: "4744360",
	            formId: "9e8f928c-6005-41ad-889c-06b2b9f21e41"
            });
        </script>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
  var $nav = $('.navbar');
  $(function(){
    $nav.fadeOut();
  })
});
$(document).ready(function(){
    var $nav = $('.navbar');//Caching element

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {
            // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) { //For dynamic effect use $nav.height() instead of '100'
                $nav.fadeIn().css("display","inline-flex");
            } else {
                $nav.fadeOut();
            }
        });
    });
});
</script>
</body>
</html>
