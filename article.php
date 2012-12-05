<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- keyword -->
<meta name="keywords" content="article, articles, bisptop articles" />
	<title>Article | BISPTOP</title>
	<link href="./css/body.css" type="text/css" rel="stylesheet" />
	<link href="./css/content_stage.css" type="text/css" rel="stylesheet" />
	<link rel="icon" href="./images/logo.ico" type="image/x-icon" />
		<script type="text/javascript" src="./js/jquery.js"></script>
		<!-- lava lamp intgration -->

		<script type="text/javascript" src="./js/jquery.lavalamp-1.3.5.js"></script>
		<script type="text/javascript">
    $(function() {

    	$(".wrapper").find("ul.menu").lavaLamp();


    });
    </script>
</head>
		<body>

			<div class="wrapper" id="wrapper">


				<!-- require wordpress php page -->
			<?php
			/* Short and sweet */
			define('WP_USE_THEMES', false);
			require('./blog/wp-blog-header.php');


			?>

				<div class="header_wrapper_sub">
					<center>
						<div class="header_main_sub">
							<div class="header_left">
								<div class="head"><span style="color:#626262;">BIS</span><span
						style="color:#2B99F2">PTOP</span> </div> <span class="headSub">SOFTWARES
					</span>
							</div>
							<div class="header_right">
								<ul class="menu">
									<li id="home"><a href="index">HOME</a>
									</li>
									<li id="article"><a href="article" class="active">ARTICLE</a>
									</li>
									<li id="products"><a href="products">PRODUCTS</a>
									</li>
									<li id="service"><a href="service">SERVICES</a>
									</li>
									<li id="team"><a href="team">TEAM</a>
									</li>
									<li id="career"><a href="career">CAREER</a>
									</li>
									<li id="contact"><a href="contact">CONTACT&nbsp;US</a>
									</li>
								</ul>
							</div>
						</div>
					</center>
				</div>
				<div class="wrapper_sub">
					<center>
						<!-- <div class="article_gallery">
  </div> -->

						<div class="main">
							<!-- article -->

							<div class="content" style="height: 100%; border-width: 0px;">
								<!--<div class="side_head"> <h3><strong> Article</strong><h3></div>-->
								<br />
								<div class="content_sub">
									<ul class="article_view">

									<?php
									$posts = get_posts('numberposts=10&order=DSC&orderby=post_title');
									foreach ($posts as $post) : start_wp(); ?>
										<li>
											<div class="article_view_hd">
												<div style="width: 680px; float: left; text-align: left">
													<h1><a href="<?php the_permalink();  ?>" class="article_title">
															<?php the_title(); ?>
														 </a></h1>
												</div>

												<div class="date">
												<?php the_date();  ?>
												</div>
											</div>
											<div class="article_view_content">
											<?php the_excerpt(); ?>
												<div style="float: right; height: 35px; width: 150px;">
													<a class='article_more '
														href="<?php the_permalink();  ?>">read&nbsp;more</a>
												</div>
											</div>
										</li>
										<?php
										endforeach;
										?>
									</ul>
								</div>
							</div>

							<!-- end  article -->

						</div>
					</center>
					<!-- end main section -->
					<div class="footer_wrapper">
						<!--<div class="cloud4">

    </div>-->
						<center>
							<div class="footer">
								<div class="footer_left">
									<ul>
										<li><a href="index">HOME</a>
										</li>
										<li><a href="article">ARTICLE</a>
										</li>
										<li><a href="products">PRODUCTS</a>
										</li>
										<li><a href="service">SERVICES</a>
										</li>
										<li><a href="team">TEAM</a>
										</li>
										<li><a href="career">CAREER</a>
										</li>

									</ul>
								</div>
								<div class="footer_right">
									<div class="copyrg" align="center">
										Copyright&nbsp;&#169;&nbsp;2012&nbsp;bisptop&nbsp;Softwares&nbsp;Pvt.&nbsp;Ltd.&nbsp;
										All&nbsp;rights&nbsp;reserved.</div>
									<ul class="share_exp">
										<li><img src="./images/Ln2.png" alt="Linked In" />

										</li>
										<li><img src="./images/Fb2.png" alt="Facebook" />

										</li>
										<li><img src="./images/gpl2.png" alt="google +" />

										</li>
										<li><img src="./images/twt2.png" alt="follow" />

										</li>
									</ul>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36680486-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		</body>

</html>


