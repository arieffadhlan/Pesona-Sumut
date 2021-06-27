<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <title>Pesona Sumut</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
     <link rel="stylesheet" href="{{ asset('css/templatemo-main.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

     <!-- Icon -->
     <link rel="icon" href="https://i.pinimg.com/originals/4a/a5/34/4aa534605d1afc465c5bdc5dd80f1ecb.png"
          type="image/x-icon">

     <style>
          .first-content h1 {
               font-size: 70px;
          }

          .more-ps {
               margin-top: -50px;
          }

          .contact-form {
               margin-top: -5px;
          }

     </style>
</head>

<body>
     @include('layouts.navigation')
     @include('alert')

     <div class="parallax-content baner-content" id="home">
          <div class="container">
               <div class="first-content">
                    <h1>Pesona Sumut</h1>
                    <span>pesona keindahan</span>
               </div>
          </div>
     </div>


     <div class="parallax-content projects-content" id="portfolio">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div id="owl-testimonials" class="owl-carousel owl-theme">
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/1st-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Istana Maimun</h4>
                                             <span>Medan</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/2nd-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Hairos Water Park</h4>
                                             <span>Deli Serdang</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/3rd-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Mikie Holiday</h4>
                                             <span>Brastagi</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/4th-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Kebun Teh Sidamanik</h4>
                                             <span>Simalungun</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/5th-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Kuil Shri Mariamman</h4>
                                             <span>Medan</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/6th-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Aek Sijorni</h4>
                                             <span>Padang Sidempuan</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/7th-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Sigale-Gale</h4>
                                             <span>Samosir</span>
                                        </div>
                                   </div>
                              </div>
                              <div class="item">
                                   <div class="testimonials-item">
                                        <img src="{{ asset('img/homePage/items/8th-item.jpg') }}" alt="">
                                        <div class="text-content">
                                             <h4>Gunung Sibayak</h4>
                                             <span>Karo</span>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="service-content" id="about">
          <div class="container">
               <div class="row more-ps">
                    <div class="col-md-4">
                         <div class="left-text text-justify">
                              <h4>More About Pesona Sumut</h4>
                              <div class="line-dec"></div>
                              <p>Website Pesona Sumut adalah sebuah website pariwisata yang berluang lingkup di daerah
                                   Sumatera Utara.
                                   Sehubungan dengan kualitas, kinerja dan harga, kami menawarkan keuntungan menarik
                                   bagi wisatawan dan pengunjung.
                                   Kami dapat menangani pelanggan Nasional baik dari daerah Sumatrea Utara maupun dari
                                   luar daerah kapan saja.
                                   Kami berusaha untuk memberikan pelayanan yang terbaik.
                                   Berkat Pemandu perjalanan kami yang baik dan profesional, kami menangani semua aspek
                                   perjalanan di seluruh Sumatera Utara.
                                   Kami juga menyediakan program individu berdasarkan permintaan dan kebutuhan pelanggan
                                   Pastikan bahwa perjalanan Anda di Sumatera Utara sangat menyenangkaan.
                              </p>
                         </div>
                    </div>
                    <div class="col-md-8">
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="service-item">
                                        <h4>Informasi Terpercaya</h4>
                                        <div class="line-dec"></div>
                                        <p class="text-justify">Website Pesona Sumut memberikan informasi terpercaya
                                             mengenai kegiatan
                                             (event) wisata yang ada di Sumatera Utara.
                                             Menyediakan informasi yang relevan sesuai dengan informasi terupdate
                                        </p>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="service-item">
                                        <h4>100% Responsive</h4>
                                        <div class="line-dec"></div>
                                        <p class="text-justify">Halaman website Pesona Sumut memiliki tampilan yang akan
                                             cocok, rapi dan
                                             tetap enak dilihat
                                             jika diakses dari perangkat apapun dengan resolusi layar yang berbeda.
                                        </p>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="service-item">
                                        <h4>Pemandu Wisata </h4>
                                        <div class="line-dec"></div>
                                        <p class="text-justify">Semua pemandu wisata kami adalah orang indonesia dan
                                             seorang pramuwisata
                                             resmi yang profesional.</p>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="service-item">
                                        <h4>Pelayanan Terbaik</h4>
                                        <div class="line-dec"></div>
                                        <p class="text-justify">Kami memberikan pelayanan terbaik sehingga memberikan
                                             kepuasan dan pengalaman
                                             yang baik kepada pelanggan.</p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="parallax-content contact-content" id="contact-us">
          <div class="container">
               <div class="rw">
                    <div class="col-md-6">
                         <div class="wrapper">
                              <div class="contact-form">
                                   <form id="contact" action="/contact" method="post" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                             <div class="col-md-12">
                                                  <fieldset>
                                                       <input name="name" type="text" class="form-control" id="name"
                                                            placeholder="Your name..." required>
                                                  </fieldset>
                                             </div>
                                             <div class="col-md-12">
                                                  <fieldset>
                                                       <input name="email" type="email" class="form-control" id="email"
                                                            placeholder="Your email..." required>
                                                  </fieldset>
                                             </div>
                                             <div class="col-md-12">
                                                  <fieldset>
                                                       <textarea name="message" rows="6" class="form-control"
                                                            id="message" placeholder="Your message..."
                                                            required></textarea>
                                                  </fieldset>
                                             </div>
                                             <div class="col-md-12">
                                                  <fieldset>
                                                       <button type="submit" id="form-submit" class="btn">Send
                                                            Message</button>
                                                  </fieldset>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <footer>
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <div class="primary-button">
                              <a href="#navbar" class="text-white">Back To Top</a>
                         </div>
                         <p>©Copyright Kelompok 5
                    </div>
               </div>
          </div>
     </footer>

     <script src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/plugins.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>
     <script>
          $(document).ready(function() {
               // Add smooth scrolling to all links
               $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                         // Prevent default anchor click behavior
                         event.preventDefault();

                         // Store hash
                         var hash = this.hash;

                         // Using jQuery's animate() method to add smooth page scroll
                         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                         $('html, body').animate({
                              scrollTop: $(hash).offset().top
                         }, 800, function() {

                              // Add hash (#) to URL when done scrolling (default click behavior)
                              window.location.hash = hash;
                         });
                    } // End if
               });
          });
     </script>

</body>

</html>
