<!DOCTYPE html><!--  This site was created by Dennis Snellenberg (Code by Dennis)  -->
<html lang="en_US">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title>News | On Screen Solution</title>
   <meta name="description" content="Our News section brings valuable updates, expert opinions, and trends shaping the digital landscape. Join us as we share stories that inspire, inform, and empower your business journey.">


   <?php include_once "./include/headlink.php"; ?>

</head>

<body data-barba="wrapper">


   <?php include_once "./include/header.php"; ?>

   <main class="main theme-nav-light main-theme-light" id="contact" data-barba="container" data-barba-namespace="contact">
      <div class="main-fade"></div>
      <div class="data-change-color-main"></div>
      <!-- <div class="overlay nav-links-back"></div> -->
      <div class="main-wrap" data-scroll-container="">



         <header class="section default-header theme-light theme-lightgray contact-header" data-scroll-section="">
            <div class="container" data-scroll="" data-scroll-speed="-7.5" data-scroll-position="top" data-scroll-offset="0%, -25%">
               <div class="row row-title">
                  <div class="flex-col">
                     <div class="header-title">
                        <h1 class="split-words-wrap">Need a fresh perspective?</h1>
                        <h1 class="split-words-wrap">
                           <div style="position:relative;display:inline-block;" class="single-word">
                              <div class="icon-sprite"><svg width="120" height="24" viewbox="0 0 120 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18.28C4.7948 17.5625 3.79406 16.5476 3.09366 15.3324C2.39326 14.1172 2.01668 12.7425 2 11.34C2.08 6.64 6.62 2.91 12.14 3C17.66 3.09 22.07 7 22 11.66C21.93 16.32 17.38 20.09 11.86 20C11.2362 19.99 10.6142 19.9298 10 19.82L5.5 22L6 18.28Z" stroke="black" stroke-width="2"></path>
                                    <path d="M69.5 5H50.5V19H69.5V5Z" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <path d="M50.5 5L60 12L69.5 5" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <path d="M102 16C104.485 16 106.5 13.9853 106.5 11.5C106.5 9.01472 104.485 7 102 7C99.5147 7 97.5 9.01472 97.5 11.5C97.5 13.9853 99.5147 16 102 16Z" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <path d="M114 16C116.485 16 118.5 13.9853 118.5 11.5C118.5 9.01472 116.485 7 114 7C111.515 7 109.5 9.01472 109.5 11.5C109.5 13.9853 111.515 16 114 16Z" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <path d="M102 16H114" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <path d="M40.4774 13.8543L37.8543 15.5729C35.5814 14.2962 33.7038 12.4186 32.4271 10.1457L34.1457 7.52261L32.3367 3H28.7186L27 4.71859C27.401 8.90085 29.2451 12.8131 32.216 15.784C35.1869 18.7549 39.0991 20.599 43.2814 21L45 19.2814V15.6633L40.4774 13.8543Z" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                                    <g clip-path="url(#clip0_201_633)">
                                       <path d="M85 3L76 14H84L83 21L92 10H84L85 3Z" stroke="black" stroke-width="2"></path>
                                    </g>
                                    <defs>
                                       <clippath id="clip0_201_633">
                                          <rect width="24" height="24" fill="white" transform="translate(72)"></rect>
                                       </clippath>
                                    </defs>
                                 </svg>
                              </div>
                           </div>
                        </h1>
                     </div>
                     <div class="header-text styled large fade-in">
                        <p>Contact us to discuss how we can help enhance your brand and achieve your business goals.</p>
                     </div>
                  </div>
                  <div class="flex-col form-col fade-in">
                     <form class="styled-form" action="" method="">
                        <div class="form-col hidden-field">
                           <input type="hidden" name="randomToken" value="ede195ef-2e26-4927-a213-e57fd1022354">
                        </div>
                        <div class="form-col">
                           <label for="name">
                              <span>Name</span>
                           </label>
                           <input type="text" name="name" id="name" placeholder="John Doe">
                           <div class="alert alert-error"><span>Please enter a valid name.</span></div>
                        </div>
                        <div class="form-col">
                           <label for="email">
                              <span>Email</span>
                           </label>
                           <input type="email" name="email" id="email" placeholder="your@email.com">
                           <div class="alert alert-error"><span>Please enter a valid email address.</span></div>
                        </div>
                        <div class="form-col">
                           <label for="message">
                              <span>Message</span>
                           </label>
                           <textarea name="message" id="message"></textarea>
                           <div class="alert alert-error"><span>Please enter a message.</span></div>
                        </div>
                        <div class="form-col form-col-btn">
                           <div class="btn btn-normal">
                              <div class="btn-click">
                                 <div class="btn-fill btn-original-fill"></div>
                                 <div class="btn-text btn-original-text">
                                    <span>Send form</span>
                                 </div>
                                 <div class="btn-fill btn-duplicate-fill"></div>
                                 <div class="btn-text btn-duplicate-text">
                                    <span>Send form</span>
                                 </div>
                                 <input type="submit" value="Submit">
                              </div>
                           </div>
                           <p><span class="reply">We typically reply within 30 min!</span></p>
                        </div>
                        <p data-success="true" style="display:none">Form succesfully sent.</p>
                     </form>
                  </div>
               </div>
            </div>
         </header>

         <section class="section theme-dark address-bar data-change-color-section" data-scroll-section="" style="background-color: #18181A;">
            <div class="container">
               <div class="row">
                  <div class="flex-col">
                     <div class="address-list">
                        <div class="single-address-list toggle-fade visible">
                           <p><strong>On Screen Solution</strong></p>
                           <br>
                           <p class="address">
                              <a href="#">office@onscreensolution.co</a>
                           </p>
                           <p class="phone">
                              <a href="tel:877 463 6217">0301-2482611</a>
                           </p>
                           <p class="address">
                              <a href="#">Address: 104B, Gulshan e Iqbal, 13D, Karachi, Pakistan</a>
                           </p>

                           <!-- <p>
                              <a href="/cdn-cgi/l/email-protection#6c05020a032c0e0d1f090f1e090d1809420f0301"><span class="__cf_email__" data-cfemail="234a4d454c63414250464051464257460d404c4e">support@americanwebsmaster.com</span></a>
                           </p> -->

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <?php include_once "./include/footer.php"; ?>

      </div>
   </main>

   <?php include_once "./include/footlink.php"; ?>
</body>

</html>