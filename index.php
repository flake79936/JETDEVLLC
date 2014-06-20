
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEAT - Developed by JET App Development, LLC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />	
<!--[if IE 6]>
<style type="text/css">img, div, { behavior: url("js/iepngfix.htc") }
</style>
<![endif]-->
<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script src="js/iepngfix_tilebg.js" type="text/javascript"></script>
<script src="js/scrollTo.js" type="text/javascript"></script>
<script src="js/global.js" type="text/javascript"></script>
<script type="text/javascript">

$(function(){
		$("#talktous-nav, #findstadarena-nav, #emaildeals-nav, #product-nav, #faq-nav").scrollTo({ offset:-54 });
		
		$(".mobile-nav").scrollTo({ offset:0 });
	
		
	
});

$(document).ready(function(){
		$(".mobile-menu-list").hide();
		$('.mobile-menu-btn').click(function(){
			$(this).toggleClass("active");
			$(".mobile-menu-list").slideToggle(200);
		});
 });
</script>
</head>
<body>

<div class="header-wrap">
	<div class="header">
    	<a class="login-btn" href="login-home.php">Log In</a>
    	<ul class="head-social-icons">
        	<li><a class="facebook" href="#"></a></li>
            <li><a class="twitter" href="#"></a></li>
            <li><a class="googleplus" href="#"></a></li>
        </ul><!--//head-social-icons-->
    
    	<ul class="nav">
        	<li><a id="talktous-nav" href="#talktous">Talk to Us</a></li>
            <li><span class="shadow">|</span></li>
            <li><a id="findstadarena-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
            <li><span class="shadow">|</span></li>
            <li><a id="emaildeals-nav" href="#emaildeals">Email Deals</a></li>
            <li><span class="shadow">|</span></li>
            <li><a id="product-nav" href="#product">Product</a></li>
            <li><span class="shadow">|</span></li>
            <li><a id="faq-nav" href="#faq">FAQ</a></li>
        </ul>    
        
        <div class="mobile-menu-btn"><span class="icon-reorder"></span></div>

        
        
	</div><!--//header-->
</div><!--//header-wrap-->

<div class="mobile-menu-list">
  <ul>
      <li><a class="mobile-nav" href="#talktous">Talk to Us</a></li>
      <li><a class="mobile-nav" href="#findstadarena">Find a Stadium/Arena</a></li>
      <li><a class="mobile-nav" href="#emaildeals">Email Deals</a></li>
      <li><a class="mobile-nav" href="#product">Product</a></li>
      <li><a class="mobile-nav" href="#faq">FAQ</a></li>
      <li><a class="mobile-nav" href="#"><span class="icon-lock"></span> Login</a></li>
  </ul>   
</div><!--//mobile-menu-list-->

<div class="wrap">
	
    <div id="talktous" class="below-header-bg"></div>
    <div class="banner-box">
    	<div class="left-col"><img src="images/two-phone-with-shadow.png" alt="" /></div>
        <div class="right-col">
        	<div class="intro-text">
            	<div class="logo"><img src="images/logo-seat.png" alt="" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis. Sed quis eleifend diam.</p>
                <ul>
                	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                </ul>
            </div><!--//intro-text-->
            <div class="icons-row hide-r800">
            	<div class="burger-drink-icon"><a href="#"><img src="images/burger-drink-icon.png" alt="" /></a></div>
            	<div class="download-box">
                	<div class="orange-box">
	                	<div class="title">Download Seat</div>
    	                <a class="app-store-btn" href="#"></a>
        	            <a class="google-play-btn" href="#"></a>
                    </div><!--//orange-box-->
                    <div class="btm-text">It's Free!</div>                
                </div><!--//download-box-->
            </div><!--//icons-row-->
        </div><!--//right-col-->
        <div class="hide-desktop show-r800 hide-r479">
            <div class="icons-row">
                <div class="burger-drink-icon"><img src="images/burger-drink-icon.png" alt="" /></div>
                <div class="download-box">
                    <div class="orange-box">
	                	<div class="title">Download Seat</div>
    	                <a class="app-store-btn" href="#"></a>
        	            <a class="google-play-btn" href="#"></a>
                    </div><!--//orange-box-->
                    <div class="btm-text">It's Free!</div>                
                </div><!--//download-box-->
                <div class="clearboth"></div>
            </div><!--//icons-row-->
        </div><!--//hide-desktop-->
    </div><!--//banner-box-->
    <div class="black-bar-banner"></div>
    
    <div class="icons-row hide-desktop show-r479">
            	<div class="burger-drink-icon"><a href="#"><img src="images/burger-drink-icon.png" alt="" /></a></div>
            	<div class="download-box">
                	<div class="orange-box">
	                	<div class="title">Download Seat</div>
    	                <a class="app-store-btn" href="#"></a>
        	            <a class="google-play-btn" href="#"></a>
                    </div><!--//orange-box-->
                    <div class="btm-text">It's Free!</div>                
                </div><!--//download-box-->
                <div class="clearboth"></div>
     </div><!--//icons-row-->
    
    <div id="findstadarena" class="gray-box-logos">
    	<div class="each-logo"><img src="images/gray-logo-1.jpg" alt="" /></div>
        <div class="each-logo"><img src="images/gray-logo-2.jpg" alt="" /></div>
        <div class="each-logo"><img src="images/gray-logo-3.jpg" alt="" /></div>
        <div class="each-logo"><img src="images/gray-logo-4.jpg" alt="" /></div>   
    </div><!--//gray-box-logos-->
    
    <div id="emaildeals" class="home-content">
    	<div class="each-row">
        	<div class="text-left-col">
            	<h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis. Sed quis eleifend diam. Praesent mauris nunc, vehicula ut laoreet vel, molestie id felis.</p>
            </div><!--//text-right-col-->
            <div class="image-right-col"><img src="images/monitor-image.jpg" alt="" /></div>
        </div><!--//each-row-->
        <div class="each-row">
        	
            <div class="text-right-col">
            	<h2>Praesent mauris nunc</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis. Sed quis eleifend diam. Praesent mauris nunc, vehicula ut laoreet vel, molestie id felis.</p>
            </div><!--//text-right-col-->  
            <div class="image-left-col"><img src="images/iphone-image.jpg" alt="" /></div>      
        </div><!--//each-row-->
        <div class="each-row last-row">
        	<div class="text-left-col">
            	<h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis. Sed quis eleifend diam. Praesent mauris nunc, vehicula ut laoreet vel, molestie id felis.</p>
            </div><!--//text-right-col-->
            <div class="image-right-col"><img src="images/location-image.jpg" alt="" /></div>
        </div><!--//each-row-->
    </div><!--//home-content-->
    
    <div id="faq" class="gray-box">
    	<div class="top-shadow"></div>
        <div class="testi-wrap">	
        	<h1>FAQs</h1>
            <div class="table">
        		  <table width="100%">
                      <tr class="even">
                        <td>Choose your seat, menu items, checkout securely, and relax while your order is delivered to you.</td>
                      </tr>
                      <tr class="odd">
                        <td>
                        	<li>
						       	<ul>Free download</ul>
                                <ul>Quick and easy to use</ul>
                                <ul>Food, drinks, and merchandise delivered right to your seat</ul>
                                <ul>Completly secure transactions with emailed receipt</ul>
                                <ul>Responsive Customer Support team</ul>
                            </li>
                        </td>
                      </tr>
                      <tr class="even">
                        <td style="padding: 8px 0 0 10px">How can I contact SEAT Customer Support?</td>
                      </tr>
                      <tr class="odd">
                        <td>Just click on the Get in Touch button at the bottom of this screen and you will be able to Call, Email, or Tweet us from there. Please don&rsquo;t hesitate to contact us with any needs you have before, during, or after your event.</td>
                      </tr>
                      <tr class="even">
                        <td>How long does it take to get my order delivered?</td>
                      </tr>
                      <tr class="odd">
                        <td>The answer depends on the venue and the amount of orders that are currently being served. We would estimate that most orders will take anywhere from 10-20 min to be delivered. You are prompted with the current delivery time on the confirmation of your order.</td>
                      </tr>
                      <tr class="even">
                        <td>Once I have submitted my order can I make any changes?</td>
                      </tr>
                      <tr class="odd">
                        <td>Unfortunately once an order is submitted, it cannot be changed. Please contact us if you need any help.</td>
                      </tr>
                      <tr class="even">
                        <td>Does SEAT save my payment and personal information? Is it Safe?</td>
                      </tr>
                      <tr class="odd">
                        <td>If you create an account and save your credit card info, your information is stored to give you the best expirience possible. This eliminates the extra work of having to input your credit card info every time you want to make an order. Your information is safe with us behind industry standard encryption.</td>
                      </tr>
<!--                      <tr class="even">
                        <td>Row 1</td>
                      </tr>
                      <tr class="odd">
                        <td>Row 2</td>
                      </tr>  -->                    
                  </table>
            </div>
        </div><!--//testi-wrap-->
        
        <div id="help" class="gray-box">
    	<div class="top-shadow"></div>
        <div class="testi-wrap">	
        	<h1>Clients</h1>
            <div class="testi-box">
            	<span class="quote-open"></span>
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis." 
                <span class="quote-close"></span>
                <div class="name">- Proin bibendum</div>
            </div><!--//testi-box-->
        </div><!--//testi-wrap-->
        
        <div class="home-two-column">
        	<div class="text-col">
            	<h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum tortor eget dolor consequat sagittis. Sed quis eleifend diam. Praesent mauris nunc, vehicula ut laoreet vel, molestie id felis.</p>
               
                <a class="download-btn" href="#">Download Seat</a>
            </div><!--//text-col-->
            <div class="image-col">
            	<div class="each-row">
                	<div class="each-image"><img src="images/gray-logo-2.jpg" alt="" /></div>
                    <div class="each-image"><img src="images/gray-logo-2.jpg" alt="" /></div>
                </div><!--//each-row-->
                <div class="each-row">
                	<div class="each-image"><img src="images/gray-logo-1.jpg" alt="" /></div>
                    <div class="each-image"><img src="images/gray-logo-1.jpg" alt="" /></div>
                </div><!--//each-row-->
                <div class="each-row">
                	<div class="each-image"><img src="images/gray-logo-3.jpg" alt="" /></div>
                    <div class="each-image"><img src="images/gray-logo-3.jpg" alt="" /></div>
                </div><!--//each-row-->
                <div class="each-row">
                	<div class="each-image"><img src="images/gray-logo-4.jpg" alt="" /></div>
                    <div class="each-image"><img src="images/gray-logo-4.jpg" alt="" /></div>
                </div><!--//each-row-->            
            </div><!--//image-col-->
        </div><!--//home-two-column-->
    </div><!--//gray-box-->

	<div class="footer-wrap">
    	<ul>
        	<li><a href="#">Promo Code</a></li>
            <li>|</li>
            <li><a href="#">Check Out</a></li>
            <li>|</li>
            <li><a href="#">Confirmation</a></li>
            <li>|</li>
            <li><a href="#">Who We Are</a></li>
            <li>|</li>
            <li><a href="#">Customer Service</a></li>
            <li>|</li>
            <li><a href="#faq">FAQs</a></li>
            <li>|</li>
            <li><a href="#">Sitemap</a></li>
            <li>|</li>
            <li><a href="#">Disclaimer</a></li>
        </ul>    
    </div><!--//footer-wrap-->

</div><!--//wrap-->

</body>
</html>
