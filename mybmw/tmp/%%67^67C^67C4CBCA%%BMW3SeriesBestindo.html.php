<?php /* Smarty version 2.6.13, created on 2016-08-05 11:00:44
         compiled from application/web/apps/BMW3SeriesBestindo.html */ ?>

<?php echo $this->_tpl_vars['navigation']; ?>

<?php echo '
<style>
  #promotionDetail .thecontent p{
    max-width500px;
  }
</style>
'; ?>

<div id="promotionDetail">
    <section id="BMW3SeriesBestindo" class="section">
        <div class="thecontent" style="padding:70px 0 70px;">
            <div class="container">
                <div class="row">
                    <div class="promocontent">
                        <h2>SPORTIER THAN ALL. MORE ELEGANT THAN EVER.</h2>
						<h3 style="margin:0 0 20px 0;">NOW WITH 4,9 MIO/MONTH ON THE NEW BMW 320d.</h3>
                     				<p>The BMW 3 Series redefines dynamic design and unrivaled agility that is as impressive as ever. With the BMW TwinPower Turbo diesel engine on the BMW 320d, presenting the adrenaline rush of pure constant embodiment of the legendary 3 Series.</p>
                            <p>Enjoy buy back guarantee for every car purchase at PT. Bestindo Car Utama.*</p>
                         <p>
                           Features and technologies of BMW 320d:
                           <ul>
                             <li>New BMW TwinPower Turbo diesel engine (with 190 hp and 400 Nm)</li>
                             <li>Combined fuel consumption in 23.3 km/l</li>
                             <li>M leather steering wheel</li>
                             <li>LED Headlight</li>
                             <li>Comfort Access</li>
                           </ul>
                         </p>
                         <p>
                           Write to <a href="mailto:bmw.bintaro@bestindocar.co.id">bmw.bintaro@bestindocar.co.id</a> to find
out more details on product specification and financial scheme, or
                         </p>
                            <a href="http://www.bestindocar.co.id/inside_index.php?r=aboutus" target="_blank" class="button btnblue test_drive">Request a test drive</a>
                                <a href="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/download/e-BrochureThenewBMW3Series.pdf" target="_blank" class="button btnblue test_drive"><i class="icon-download"></i>Download E-Brochure</a><br />
                        <div class="bottomtexts"><br />
                        <p>
					 <span class="small"><i>*Terms and conditions apply.</i></span></p>
                     	<p>More information: <br />
                     		BMW PT. Bestindo Car Utama<br>
CBD Bintaro Jaya Sektor VII Kav. B6 No. 1<br>
Tangerang 15224<br>
Tel: (021) 74868000<br>
Fax: (021) 74863535</p>

<p id="BMWFSLogos"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/content/BMWFSLogo.png" width="300" /></p>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="fl">
                                <p style="margin:0 0 10px 0; font-size:12px;">
                                  Supported by:
                                </p>
                                <img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/maya.png"  width="150" />
                                </div>
                                <div class="fr">
                                <p style="margin:0 0 10px 0; font-size:12px;">&nbsp;
                                  
                                </p>
                                <a href="http://www.bmw.co.id/en/topics/offers-and-services/for-your-vehicle/warranty.html" target="_blank"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/waranty3th.png" /></a>
                                <a href="http://www.bmw.co.id/en/topics/offers-and-services/for-your-vehicle/service-inclusive.html" target="_blank"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/waranty5th.png" /></a>
                                <a href="http://www.bmw.co.id/en/topics/offers-and-services/bmw-tire-coverage.html" target="_blank"><img src="<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/waranty3tire.png" /></a>

                                </div>
                              </div>
                            </div>
                        </div>
                    </div><!-- end .col-md-6 -->
                </div><!-- end .row -->
            </div><!-- end .container -->
        </div><!-- end .thecontent -->
    </section>
</div>
<div class="social">
<!--     <a class="facebookshare"  target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[title]=THE BMW X1&p[url]=<?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMWX1&p[summary]=THE BMW X1. NOW STARTING FROM IDR 599 MILLION ON THE ROAD. More info on <?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMWX1&p[images][0]=<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/THEBMWX1.jpg" data-url="<?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMWX1"> <i class="icon-facebook">&nbsp;</i></a> -->
	<a class="facebookshare" href="javascript:void(0)" onclick="shareFB('SPORTIER THAN ALL. MORE ELEGANT THAN EVER.','<?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMW3SeriesBestindo','<?php echo $this->_tpl_vars['basedomain']; ?>
assets/images/THEBMWX1.jpg','','NOW WITH 4,9 MIO/MONTH ON THE NEW BMW 320d. More info on <?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMW3SeriesBestindo')"><i class="icon-facebook">&nbsp;</i></a>
	<a class="twittershare" href="http://twitter.com/share?text=THE SPORTIER THAN ALL. MORE ELEGANT THAN EVER. More info on &url=<?php echo $this->_tpl_vars['basedomain']; ?>
programs/BMWX1"  target="_blank"><i class="icon-twitter">&nbsp;</i></a>
</div>
<footer id="footer">
<?php echo $this->_tpl_vars['footer']; ?>

</footer>

<script>
<?php echo '
$(document).ready(function(){
			$(".twittershare").on("click", function(){
			var  typenya = 2;

				$.ajax({
                        \'type\': \'POST\',
                        \'url\': basedomain+\'tracking\',
                        \'data\': {typenya:typenya},
						\'dataType\':\'json\'

					})
				});
			});
'; ?>

</script>
<script>
<?php echo '

	function shareFB(fb_name,fb_link,fb_img,fb_user,fb_post){
			$("#bg-popup").fadeOut();
			$(".popup,.popup2").fadeOut();
			FB.init();
			FB.ui({
				method: \'feed\',
				name: fb_name,
				link: fb_link,
				picture: fb_img,
				caption: fb_user,
				description: fb_post


			});

		}
'; ?>

</script>