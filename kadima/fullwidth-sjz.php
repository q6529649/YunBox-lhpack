<?php //Template Name:Full-Width-TimeSheet Page
get_header(); 
get_template_part('breadcrums'); ?>
<style>

.cd-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.cd-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}


#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#cd-timeline::before {
  /* this is the vertical line */
  content: '';
  position: absolute;
  top: 0;
  left: 18px;
  height: 100%;
  width: 4px;
  background: #d7e4ed;
}
@media only screen and (min-width: 1170px) {
  #cd-timeline {
    margin-top: 3em;
    margin-bottom: 3em;
  }
  #cd-timeline::before {
    left: 50%;
    margin-left: -2px;
  }
}

.cd-timeline-block {
  position: relative;

}
.cd-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-block:first-child {
  margin-top: 0;
}
.cd-timeline-block:last-child {
  margin-bottom: 0;
}


  }
  .cd-timeline-block:first-child {
    margin-top: 0;
  }
  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }

@media only screen and (max-width: 480px) {
  .cd-timeline-block {
    margin: 4em 0;
  }
  .cd-timeline-block:first-child {
    margin-top: 0;
  }
  .cd-timeline-block:last-child {
    margin-bottom: 0;
  }
}

.cd-timeline-img {
  position: absolute;
  top: 20px;
  left: 0;
  width: 40px;
  height: 40px;
  border-radius: 50%;

}
.cd-timeline-img img {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -12px;
}
.cd-timeline-img.cd-picture {
  background: #3398ff;
}
.cd-timeline-img.cd-movie {
  background: #3398ff;
}
.cd-timeline-img.cd-location {
  background: #3398ff;
}

@media only screen and (min-width: 1170px) {
  .cd-timeline-img {
    width: 20px;
    height: 20px;
    left: 50%;
    margin-left: -10px;
    /* Force Hardware Acceleration in WebKit */
    -webkit-transform: translateZ(0);
    -webkit-backface-visibility: hidden;
  }
  .cssanimations .cd-timeline-img.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-img.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-1 0.6s;
    -moz-animation: cd-bounce-1 0.6s;
    animation: cd-bounce-1 0.6s;
  }
}

@-webkit-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
  }

  100% {
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -moz-transform: scale(0.5);
  }

  60% {
    opacity: 1;
    -moz-transform: scale(1.2);
  }

  100% {
    -moz-transform: scale(1);
  }
}
@keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
  }

  100% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
  }
}
.cd-timeline-content {
  position: relative;
  margin-left: 60px;
 
  border-radius: 0.25em;
  padding: 1em;

}
.cd-timeline-content:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-content h2 {
  color: #303e49;
}
.cd-timeline-content .right1 {
  text-align: right;
}

.cd-timeline-content p, .cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
  font-size: 13px;
  font-size: 0.8125rem;
}
.cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
  display: inline-block;
}
.cd-timeline-content p {
  margin: 1em 0;
  line-height: 1.6;
  font-size: 18px !important;
}
.cd-timeline-content .cd-read-more {
  float: right;
  padding: .8em 1em;
  background: #acb7c0;
  color: white;
  border-radius: 0.25em;
}
.cd-timeline-content .cd-read-more2 {
  padding: 10px 15px;
  color: #fff;
  background-color: #3398ff;
  border-radius: 5px;
  font-size: 18px !important;
}

.no-touch .cd-timeline-content .cd-read-more:hover {
  background-color: #bac4cb;
}
.cd-timeline-content .cd-date {
  float: left;
  padding: .8em 0;
  opacity: .7;
}
.cd-timeline-content::before {
  content: '';
  position: absolute;
  top: 16px;
  right: 100%;
  height: 0;
  width: 0;
  border: 7px solid transparent;
  border-right: 7px solid white;
}
@media only screen and (min-width: 768px) {
  .cd-timeline-content h2 {
    font-size: 20px;
    font-size: 1.25rem;
  }
  .cd-timeline-content p {
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-content .cd-read-more, .cd-timeline-content .cd-date {
    font-size: 14px;
    font-size: 0.875rem;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-timeline-content {
    margin-left: 0;
    padding: 1.6em;
    width: 45%;
  }
  .cd-timeline-content::before {
    top: 24px;
    left: 100%;
    border-color: transparent;
    
  }
  .cd-timeline-content .cd-read-more {
    float: left;
  }
  .cd-timeline-content .cd-date {
    position: absolute;
    width: 100%;
    left: 122%;
    top: 6px;
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
    top: 24px;
    left: auto;
    right: 100%;
    border-color: transparent;
    
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
    float: right;
  }
  .cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
    left: auto;
    right: 122%;
    text-align: right;
  }
  .cssanimations .cd-timeline-content.is-hidden {
    visibility: hidden;
  }
  .cssanimations .cd-timeline-content.bounce-in {
    visibility: visible;
    -webkit-animation: cd-bounce-2 0.6s;
    -moz-animation: cd-bounce-2 0.6s;
    animation: cd-bounce-2 0.6s;
  }
}



@media only screen and (min-width: 1170px) {
  /* inverse bounce effect on even content blocks */
  .cssanimations .cd-timeline-block:nth-child(even) .cd-timeline-content.bounce-in {
    -webkit-animation: cd-bounce-2-inverse 0.6s;
    -moz-animation: cd-bounce-2-inverse 0.6s;
    animation: cd-bounce-2-inverse 0.6s;
  }
}
@-webkit-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
  }

  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
  }

  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -moz-transform: translateX(-100px);
  }

  60% {
    opacity: 1;
    -moz-transform: translateX(20px);
  }

  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2 {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
    -moz-transform: translateX(-100px);
    -ms-transform: translateX(-100px);
    -o-transform: translateX(-100px);
    transform: translateX(-100px);
  }

  60% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }

  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
@-webkit-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
  }

  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
  }

  100% {
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -moz-transform: translateX(100px);
  }

  60% {
    opacity: 1;
    -moz-transform: translateX(-20px);
  }

  100% {
    -moz-transform: translateX(0);
  }
}
@keyframes cd-bounce-2-inverse {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100px);
    -moz-transform: translateX(100px);
    -ms-transform: translateX(100px);
    -o-transform: translateX(100px);
    transform: translateX(100px);
  }

  60% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }

  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}
	<!--style.css-->
		</style>
		
<div style="background:url(../wp-content/themes/kadima/images/history.jpg) repeat ;background-size: cover;">
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">	
		<?php wp_nav_menu( array(
			'theme_location' => 'timelinenav',
			'menu_class' => 'nav cl-effect-6',
			'walker' => new kadima_nav_walker(),
			)
		);	?>
		<section id="cd-timeline" class="cd-container">
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture" style="top:-60px;width: 300px;height: 40px;margin-left: -145px;border-radius: 5px;    text-align: center">
					<p style="color: #fff;padding-top: 10px;font-size: 1.3em;font-weight: bold;">2008 Company Formation</p>
				</div>
				<div class="cd-timeline-img cd-picture">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2 class="right1"><a class="cd-read-more2">2009</a></h2>
					<p>We invented three-way electricity defender technology of instant electric water heater,prevented users fromelectric shock todeath in the shower</p>
					<!--<a href="#0" class="cd-read-more">查看详情</a>-->

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2><a class="cd-read-more2">2010</a></h2>
					<p>One of the top 500 companies'strategic partner</p>


				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2 class="right1"><a class="cd-read-more2">2012</a></h2>
					<p style="text-align: right;">Top 100 Enterprises awarded by government</p>


				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2><a class="cd-read-more2 ">2013</a></h2>
					<p>New and high technology enterprise awarded by govemment</p>


				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2 class="right1"><a class="cd-read-more2">2014</a></h2>
					<p style="text-align: right;">IEC TC61 W35 China sole representative</p>


				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2><a class="cd-read-more2">2015</a></h2>
					<p>China largest electric instant waler heater manufacturer</p>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-location">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2 class="right1" ><a class="cd-read-more2">2016</a></h2>
					<p style="text-align: right;">China assistant living care products alliance enterprises</p>


				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">

				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h2><a class="cd-read-more2">2017</a></h2>
					<p>We are on the way</p>

				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
		</section> <!-- cd-timeline -->
		</div>		
	</div>
</div>	
</div>	
<?php get_footer(); ?>