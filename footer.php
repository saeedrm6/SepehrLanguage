<footer>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="contactfot" id="contacttopp">
                <h4 class="text-center">شبکه های اجتماعی</h4>
                <ul class="">
                    <li><a href="https://instagram.com/_u/sepehr.language"><img src="<?php echo sepehr; ?>/images/insta.png" alt="" class="img-responsive"></a></li>
                    <li><a href="https://t.me/sepehr_institute"><img src="<?php echo sepehr; ?>/images/tele.png" alt="" class="img-responsive"></a></li>
                    <li><a href=""><img src="<?php echo sepehr; ?>/images/aparat.png" alt="" class="img-responsive"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <img src="<?php echo sepehr;?>/images/logo-mobile.png" alt="" class="img-responsive logofot">
            <p class="text-center">مجیدیه شمالی ، میدان ملت، کوچه قنبری، پلاک 14 <br>تلفن : 22332802</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <ul id="banks" class="text-center">
                <li><img src="<?php echo sepehr;?>/images/shaparak.png" alt="" class="img-responsive"></li>
                <li><img src="<?php echo sepehr;?>/images/melat.png" alt="" class="img-responsive"></li>
                <li><img src="<?php echo sepehr;?>/images/zarin.png" alt="" class="img-responsive"></li>
            </ul>
            <a style="display: block; color: #000;" href="http://rahimimanesh.com" class="text-center">طراحی و برنامه نویسی : سعید رحیمی منش</a>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php  wp_footer(); ?>
<script>
    jQuery(document).ready(function() {
        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true,
            rtl: true,
            margin: 10,
            nav: false,
            loop: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
        jQuery( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
        jQuery( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });

    </script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#lanCarousel").carousel({
            interval : 2000,
            pause: false
        });
    });
</script>
</body>
</html>