<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Frist Project </title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/style-starter.css">

</head>

<body>




@yield('content')



  <!-- footer-66 -->
  <footer class="w3l-footer">
    <section class="footer-inner-main">
      <div class="footer-hny-grids py-5">
        <div class="container py-lg-4">
          <div class="text-txt">
            <div class="right-side">
              <div class="row footer-about pb-5">
                <div class="col-lg-9 footer-links">
                  <div class="header-section">
                    <h3 class="mb-3">About Us</h3>
                    <p class="pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Consequuntur hic odio voluptatem tenetur consequatur.Lorem ipsum dolor sit amet
                      consectetur adipisicing elit. </p>
                  </div>
                  <div class="columns-2 mt-4">
                    <ul class="social">
                      <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                      </li>
                      <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="row footer-links">

                <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                  <h6>Quick Links</h6>
                  <ul>
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="about.html">About</a> </li>
                    <li><a href="#login.html">Login</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                  <h6>Designing</h6>
                  <ul>
                    <li><a href="#articles.html">Design Patterns</a> </li>
                    <li><a href="#articles.html">Performance</a> </li>
                    <li><a href="#articles.html">Photoshop</a> </li>
                    <li><a href="#articles.html">User Experience</a> </li>
                    <li><a href="#articles.html">Typography</a> </li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                  <h6>Business</h6>
                  <ul>
                    <li><a href="#blog.html">Investment</a> </li>
                    <li><a href="#blog.html">Politics</a> </li>
                    <li><a href="#blog.html">Markets</a> </li>
                    <li><a href="#blog.html">Stock Exchange</a> </li>
                    <li><a href="#blog.html">Business Stats</a> </li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 sub-two-right mt-5">
                  <h6>Health</h6>
                  <ul>
                    <li><a href="#blog.html">Living Science</a> </li>
                    <li><a href="#blog.html">Child’s Health</a> </li>
                    <li><a href="#blog.html">Mental Health</a> </li>
                    <li><a href="#blog.html">Medicine Export</a> </li>
                    <li><a href="#blog.html">Heart Health</a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="below-section">
        <div class="container">
          <div class="copyright-footer">
            <div class="columns text-lg-left">
              <p>&copy; 2020 Publication. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
            </div>
            <ul class="columns text-lg-right">
              <li><a href="#privacy-policy.html">Privacy Policy</a>
              </li>
              <li><a href="about.html">About Us</a>
              </li>
              <li><a href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-arrow-up" aria-hidden="true"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->

    </section>
  </footer>
  <!--//footer-66 -->

  <!-- jQuery JS -->
  <!-- <script src="assets/js/jquery-3.4.1.slim.min.js"></script> -->
  <script src="{{asset('frontEnd')}}/assets/js/jquery-1.9.1.min.js"></script>
  <script src="{{asset('frontEnd')}}/assets/js/theme-change.js"></script>
  <!-- responsive tabs -->
  <script src="{{asset('frontEnd')}}/assets/js/easyResponsiveTabs.js"></script>
  <!-- Template JavaScript -->
  <script src="{{asset('frontEnd')}}/assets/js/owl.carousel.js"></script>
  <script src="{{asset('frontEnd')}}/assets/js/custom.js"></script>
  <!-- Bootstrap JS -->
  <script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>
  </body>

  </html>