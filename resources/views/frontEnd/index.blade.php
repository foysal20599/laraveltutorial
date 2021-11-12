@extends('frontEnd.layouts.master')
@section('content')
@include('frontEnd.include.header')

<!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
	<div class="modal-dialog" role="document">
		<div class="modal-content right-toggle-bg">

			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

			<div class="modal-body">
				<div class="modal__content">
					<h2 class="logo"><a class="logo-brand" href="index.html">
							Publication
						</a></h2>
					<!-- if logo is image enable this   
		<h2 class="logo">
			<img src="{{asset('frontEnd')}}/image-path" alt="Your logo" title="Your logo" style="height:35px;" />
		</h2> -->
					<p class="mt-md-3 mt-2">Lorem ipsum dolor sit amet, elit. Eos expedita ipsam at fugiat ab.</p>
					<div class="widget-menu-items mt-sm-5 mt-4">
						<h5 class="widget-title">Menu Items</h5>
						<nav class="navbar p-0">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="index.html">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="widget-social-icons mt-sm-5 mt-4">
						<h5 class="widget-title">Contact Us</h5>
						<ul class="icon-rounded address">
							<li>
								<p> Lorem dolor sit, New York, USA</p>
							</li>
							<li class="mt-3">
								<p><span class="fa fa-phone"></span> <a href="tel:+44-568-88-33">+44-568-88-33</a></p>
							</li>
							<li class="mt-2">
								<p><span class="fa fa-envelope"></span> <a href="mailto:publication@mail.com">publication@mail.com</a></p>
							</li>
						</ul>
					</div>
					<div class="widget-social-icons mt-sm-5 mt-4">
						<h5 class="widget-title">Follow Us</h5>
						<ul class="icon-rounded">
							<li><a class="social-link twitter" href="#url" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a class="social-link linkedin" href="#url" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="social-link tumblr" href="#url" target="_blank"><i class="fa fa-tumblr"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //modal-content -->
	</div>
	<!-- //modal-dialog -->
</div>
<!-- //Domain modal -->
<!-- main-slider -->
<section class="w3l-main-slider position-relative" id="home">
  <div class="companies20-content">
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg text-center">
                  <a href="#blog-single.html" class="blog_post_title">How to Make Cappuccino without a Machine</a>
                  <ul class="author-date mb-4 d-flex align-items-center mt-4 justify-content-center">
                    <li class="circle avatar"><img src="{{asset('frontEnd')}}/assets/images/author1.jpg" alt=""></li>
                    <li>by <a href="#author.html">John Michele</a></li>
                    <li><span class="fa fa-clock-o" aria-hidden="true"></span> Mar 16, 2020</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg text-center">
                  <a href="#blog-single.html" class="blog_post_title">Create a Stunning Website!</a>
                  <ul class="author-date mb-4 d-flex align-items-center mt-4 justify-content-center">
                    <li class="circle avatar"><img src="{{asset('frontEnd')}}/assets/images/author2.jpg" alt=""></li>
                    <li>by <a href="#author.html">Daniel Roberto</a></li>
                    <li><span class="fa fa-clock-o" aria-hidden="true"></span> Jan 22, 2020</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg text-center">
                  <a href="#blog-single.html" class="blog_post_title">See yourself in a New Light.</a>
                  <ul class="author-date mb-4 d-flex align-items-center mt-4 justify-content-center">
                    <li class="circle avatar"><img src="{{asset('frontEnd')}}/assets/images/author3.jpg" alt=""></li>
                    <li>by <a href="#author.html">Emma Stone</a></li>
                    <li><span class="fa fa-clock-o" aria-hidden="true"></span> Aug 14, 2020</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</section>
<!-- //banner-slider-->
<!-- main-slider -->
<section class="w3l-blog">
  <div class="text-element-9">
    <div class="row no-gutters">
      <a href="#blog-single.html" class="col-lg-6 blog-article-posts bg-color-one">
        <div class="blog-post d-flex flex-wrap align-content-between">
          <div class="post-content">
            <ul class="author-date mb-4 d-flex align-items-center">
              <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author4.jpg" alt=""></li>
              <li>by <b>Daniel Roberto</b></li>
              <li><span class="fa fa-clock-o" aria-hidden="true"></span> Feb 16, 2020</li>
            </ul>
            <h4 class="blog_post_title mb-4">That’s what I want to show you how to do here. In this article, I will:</h4>
            <p class="sub-para">#Market Tips <sup> 36</sup></p>
            <p class="sub-para">#Sports <sup> 235</sup></p>
            <p class="sub-para">#Techniques <sup> 59</sup></p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </div>
      </a>
      <a href="#blog-single.html" class="col-lg-6 blog-article-posts bg-color-two">
        <div class="blog-post d-flex flex-wrap align-content-between">
          <div class="post-content">
            <ul class="author-date mb-4 d-flex align-items-center">
              <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author5.jpg" alt=""></li>
              <li>by <b>Marko Dugonji</b></li>
              <li><span class="fa fa-clock-o" aria-hidden="true"></span> Apr 21, 2020</li>
            </ul>
            <h4 class="blog_post_title mb-4">Blog post titles that follow templates show lack of creativity. Also, due to the fact that they are being
              overused by many.</h4>
            <p class="sub-para">#Market Tips <sup> 36</sup></p>
            <p class="sub-para">#Sports <sup> 235</sup></p>
            <p class="sub-para">#Techniques <sup> 59</sup></p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </div>
      </a>
      <a href="#blog-single.html" class="col-lg-6 blog-article-posts bg-color-three">
        <div class="blog-post d-flex flex-wrap align-content-between">
          <div class="post-content">
            <ul class="author-date mb-4 d-flex align-items-center">
              <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author6.jpg" alt=""></li>
              <li>by <b>Max Stoiber</b></li>
              <li><span class="fa fa-clock-o" aria-hidden="true"></span> Jun 08, 2020</li>
            </ul>
            <h4 class="blog_post_title mb-4">Guide topics work because they promise readers they’ll find all the necessary information about a topic
            </h4>
            <p class="sub-para">#Market Tips <sup> 36</sup></p>
            <p class="sub-para">#Sports <sup> 235</sup></p>
            <p class="sub-para">#Techniques <sup> 59</sup></p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </div>
      </a>
      <a href="#blog-single.html" class="col-lg-6 blog-article-posts bg-color-four">
        <div class="blog-post d-flex flex-wrap align-content-between">
          <div class="post-content">
            <ul class="author-date mb-4 d-flex align-items-center">
              <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author7.jpg" alt=""></li>
              <li>by <b>Dhony Abraham</b></li>
              <li><span class="fa fa-clock-o" aria-hidden="true"></span> Sep 14, 2020</li>
            </ul>
            <h4 class="blog_post_title mb-4">Provide you with 5 creative variations on a common template to each title</h4>
            <p class="sub-para">#Market Tips <sup> 36</sup></p>
            <p class="sub-para">#Sports <sup> 235</sup></p>
            <p class="sub-para">#Techniques <sup> 59</sup></p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </div>
      </a>
    </div>
  </div>
</section>
<section class="w3l-latest-posts py-5">
  <div class="container pt-lg-3">
    <div class="header-section text-center mb-md-5 mb-4">
      <h3>Latest Posts</h3>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">2 Days ago</h6>
            <h4 class="blog_post_title">How to Create your blog domain to make it live
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Rhoda Byrd</b></li>
            </ul>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto necessitatibus consectetur dolor ipsam adipisci aperiam,
              voluptatum ipsum harum ducimus veritatis iusto velit labore rerum quibusdam!</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">1 Week ago</h6>
            <h4 class="blog_post_title">Register a Domain or Subdomain With a Website Host
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Emma Stone</b></li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio incidunt doloribus minima minus, quidem, sed iusto alias, vero
              cupiditate at nobis itaque aut. Doloremque excepturi distinctio earum perspiciatis, cum quas magni ratione ut quae dolore....</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">2 Weeks ago</h6>
            <h4 class="blog_post_title">Home to Customize your blog's theme with 3 simple steps
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Anthony</b></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto neque perspiciatis debitis nostrum, similique ut vel nobis explicabo
              ducimus ratione, aut asperiores nemo veniam. Voluptatum at hic id quis delectus!</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="w3l-latest-posts py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 position-relative">
        <img src="{{asset('frontEnd')}}/assets/images/img1.jpg" class="img-fluid" alt="" />
        <div class="member-login-content text-center position-absolute">
          <div>
            <h3>All you want is a fast, secure web?</h3>
            <p class="mt-md-4 mt-3 mb-md-5 mb-4">A friendly community that keeps this website alive. With books, webinars, discounts and networking —
              for just 1
              coffee a month. Join the
              family.</p>
            <a href="#signup.html" class="btn btn-light theme-button">Join us</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <a href="#blog-single.html" class="blog-article-post bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">2 Days ago</h6>
            <h4 class="blog_post_title">Disabled People Must Be Front And Centre On</h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>John Michele</b></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto neque perspiciatis debitis nostrum, similique ut vel nobis explicabo
              ducimus ratione, aut asperiores nemo veniam. Voluptatum at hic id quis delectus!</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="w3l-latest-posts pt-lg-5 pt-0 pb-5">
  <div class="container pb-lg-3">
    <div class="row">
      <div class="col-lg-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">July 04, 2020</h6>
            <h4 class="blog_post_title"> How to Identify first blog post's topic
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Gwen Johnson</b></li>
            </ul>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto necessitatibus consectetur dolor ipsam adipisci aperiam,
              voluptatum ipsum harum ducimus veritatis iusto velit labore rerum quibusdam!</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">Sep 18, 2020</h6>
            <h4 class="blog_post_title"> 5 ways to fix a leaky faucet
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Marko Dugonji</b></li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio incidunt doloribus minima minus, quidem, sed iusto alias, vero
              cupiditate at nobis itaque aut. Doloremque excepturi distinctio earum perspiciatis, cum quas magni ratione ut quae dolore....</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <a href="#blog-single.html" class="blog-article-post height-full bg-color-three d-flex flex-wrap align-content-between">
          <div class="post-content">
            <h6 class="sub-title">nov 24, 2020</h6>
            <h4 class="blog_post_title"> Write an intro (make it captivating).
            </h4>
            <ul class="author-date my-4 d-flex align-items-center">
              <li>by <b>Daniel Roberto</b></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto neque perspiciatis debitis nostrum, similique ut vel nobis explicabo
              ducimus ratione, aut asperiores nemo veniam. Voluptatum at hic id quis delectus!</p>
          </div>
          <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="w3l-index5">
  <div class="row abouthy-img-grids no-gutters">
    <div class="col-lg-6 img-one order-1">
      <a href="#blog-single.html"><img src="{{asset('frontEnd')}}/assets/images/img2.jpg" alt=" " class="img-fluid"></a>
    </div>
    <a href="#blog-single.html" class="col-lg-6 order-2 blog-article-posts bg-color-one">
      <div class="blog-post d-flex flex-wrap align-content-between">
        <div class="post-content">
          <ul class="author-date mb-4 d-flex align-items-center">
            <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author8.jpg" alt=""></li>
            <li>by <b>Dhony Abraham</b></li>
            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Feb 16, 2020</li>
          </ul>
          <h4 class="blog_post_title mb-4">That’s what I want to show you how to do here.</h4>
          <p class="sub-para">#Market Tips <sup> 36</sup></p>
          <p class="sub-para">#Sports <sup> 235</sup></p>
          <p class="sub-para">#Techniques <sup> 59</sup></p>
        </div>
        <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
      </div>
    </a>
    <a href="#blog-single.html" class="col-lg-6 order-lg-3 order-4 blog-article-posts bg-color-two">
      <div class="blog-post d-flex flex-wrap align-content-between">
        <div class="post-content">
          <ul class="author-date mb-4 d-flex align-items-center">
            <li class="circle-lg avatar"><img src="{{asset('frontEnd')}}/assets/images/author9.jpg" alt=""></li>
            <li>by <b>Rhoda Byrd</b></li>
            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Apr 19, 2020</li>
          </ul>
          <h4 class="blog_post_title mb-4">Blog post titles that follow templates show lack of creativity.</h4>
          <p class="sub-para">#Market Tips <sup> 36</sup></p>
          <p class="sub-para">#Sports <sup> 235</sup></p>
          <p class="sub-para">#Techniques <sup> 59</sup></p>
        </div>
        <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
      </div>
    </a>
    <div class="col-lg-6 img-one order-lg-4 order-3">
      <a href="#blog-single.html"><img src="{{asset('frontEnd')}}/assets/images/img3.jpg" alt=" " class="img-fluid"></a>
    </div>
  </div>
</section>
<!-- /w3l-content-grids-->
<!-- author section -->
<section id="author" class="w3l-author py-5">
    <div class="container py-lg-3">
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-4 col-7 order-first">
                <div class="author-image">
                    <img src="{{asset('frontEnd')}}/assets/images/main-author.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 order-md-first mt-lg-0 mt-4">
                <span class="category">Person of the Week</span>
                <h2 class="mt-2 mb-3 title">Hello!! I'm Gwen Johnson </h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam beatae, assumenda ab voluptates maxime non iusto ullam aut veniam
                    reiciendis neque autem at earum ea nam <a href="#url">this is the url link</a> quam quae sed quis iste alias. Adipisci, itaque!
                    Voluptatum aliquid rem deleniti? Accusantium inventore eaque odio vero hic officia? Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Velit, maiores?
                </p>
                <ul class="author-icons mt-4">
                    <li><a class="facebook" href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a> </li>
                    <li><a class="twitter" href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                    <li><a class="google" href="#url"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>
                    <li><a class="linkedin" href="#url"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                    <li><a class="github" href="#url"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                    <li><a class="dribbble" href="#url"><span class="fa fa-dribbble" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //author section -->
<section class="w3l-authors" id="testimonials">
  <div class="testimonials pb-5">
    <div class="container py-lg-3">
      <div class="row">
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author1.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Max Stoiber</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Sep 16, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author2.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Daniel Roberto</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Oct 14, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author3.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Dhony Abraham</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Noc 28, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author4.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Marko Dugonji</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Dec 11, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author5.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Anthony</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Feb 10, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="slider-info">
            <div class="img-circle">
              <a href="#author.html"><img src="{{asset('frontEnd')}}/assets/images/author6.jpg" class="img-fluid" alt="author image"></a>
            </div>
            <div class="message">
              <ul class="blog-single-author-date d-flex align-items-center">
                <li><a href="#author.html">Emma Stone</a></li>
                <li><span class="fa fa-clock-o" aria-hidden="true"></span> Mar 15, 2020</li>
              </ul>
              <a class="author-book-title" href="#author.html">Book title here.</a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis deleniti praesentium doloremque. Repellendus soluta quos
                nemo quisquam consectetur temporibus quam obcaecati sapiente quaerat et.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our products -->
<section class="w3l-products py-5" id="projects">
  <div class="container py-lg-3">
    <div class="header-section text-center mb-5">
      <h3>Featured News </h3>
    </div>
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <!--Horizontal Tab-->
        <div id="parentHorizontalTab">
          <ul class="resp-tabs-list hor_1">
            <li>Newest</li>
            <li>Popular</li>
            <li>Trendy</li>
            <div class="clear"></div>
          </ul>
          <div class="resp-tabs-container hor_1">
            <div class="products-content">
              <div class="row">
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-0">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Mar 16, 2021</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img10.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Gwen Johnson</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Feb 24, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img11.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Daniel Roberto</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Mar 14, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img12.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Dhony Abraham</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="products-content">
              <div class="row">
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-0">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Apr 18, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img4.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Marko Dugonji</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">May 11, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img5.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Anthony</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Jun 24, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img6.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Emma Stone</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="products-content">
              <div class="row">
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-0">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">July 04, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img7.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Rhoda Byrd</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Aug 19, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img8.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>Max Stoiber</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
                <a href="#blog-single.html" class="col-lg-4 bg-color-three mt-lg-0 mt-5">
                  <div class="blog-article-post d-flex flex-wrap align-content-between">
                    <div class="post-content">
                      <h6 class="sub-title">Sep 05, 2020</h6>
                      <img src="{{asset('frontEnd')}}/assets/images/img9.jpg" alt=" " class="img-fluid">
                      <h4 class="blog_post_title my-2">Featured Blog Post</h4>
                      <ul class="author-date mb-3 d-flex align-items-center">
                        <li>by <b>John Michele</b></li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit....</p>
                    </div>
                    <div class="read-button mt-5">Read story <span class="fa fa-long-arrow-right" aria-hidden="true"></span></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //our products -->
<section class="w3l-index-7 py-5">
  <div class="container py-lg-3">
    <div class="header-section text-center mb-5">
      <h3>Don't Miss - Browse all topics</h3>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="d-flex flex-wrap align-content-between blog-article-post">
          <div class="post-content">
            <h6 class="sub-title">Programming</h6>
            <h4 class="blog_post_title">The loss is not all that surprising</h4>
            <ul class="more-post-links mt-4">
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">Today Highlights</a></li>
              <li><a href="#blog.html">The Beginner's Guide to Starting a Successful Blog</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-5">
        <div class="d-flex flex-wrap align-content-between blog-article-post">
          <div class="post-content">
            <h6 class="sub-title">Entertainment News</h6>
            <h4 class="blog_post_title">Amazing Posts to improve your skill</h4>
            <ul class="more-post-links mt-4">
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">Today Highlights</a></li>
              <li><a href="#blog.html">The Beginner's Guide to Starting a Successful Blog</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-5">
        <div class="d-flex flex-wrap align-content-between blog-article-post">
          <div class="post-content">
            <h6 class="sub-title">Graphic Design</h6>
            <h4 class="blog_post_title">Instantly Improve your Ui Design.</h4>
            <ul class="more-post-links mt-4">
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">Today Highlights</a></li>
              <li><a href="#blog.html">The Beginner's Guide to Starting a Successful Blog</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
              <li><a href="#blog.html">Changing the topic scope</a></li>
              <li><a href="#blog.html">Your Blog Posts are Boring</a></li>
              <li><a href="#blog.html">10 Fresh Ways to Get Better</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- subscribe form -->
<section class="w3l-subscribe">
  <div class="main-w3 py-5">
    <div class="container py-lg-3">
      <div class="grids-forms text-center">
        <div class="row">
          <div class="col-md-12">
            <span class="fa fa-envelope mb-3" aria-hidden="true"></span>
            <div class="header-section text-center">
              <h3>Keep up to date - Get Email updates</h3>
              <p>Get our latest news straight into your inbox</p>
            </div>
          </div>
        </div>
        <div class="row mt-md-5 mt-4">
          <div class="col-lg-7 col-md-9 mx-auto main-midd-2">
            <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Input your e-mail" required>
              <button type="submit" class="btn btn-primary theme-button">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //subscribe form -->


  @endsection