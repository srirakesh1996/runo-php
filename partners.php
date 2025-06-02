<?php include('doctype.php'); ?>

<head>
   <title>Runo - Best Outbound Call Center CRM with auto dialer for Telecalling</title>
   <?php include('head.php'); ?>
</head>

<body>
   <div>
      <?php include('preloader.php'); ?>
      <?php

      $page_name = 'Contact';
      $form_uuid = '540c6a38-0072-4c48-9fac-b443f814a999';

      include('home-modal.php');
      ?>

      <?php include('header.php'); ?>
      <!-- Page Header Start -->
      <div class="page-title">
         <div class="container">
            <div class="row">
               <div class="title-content wow fadeIn" data-wow-delay="0.3s">
                  <div class="col-lg-12">
                     <div class="tagline wow fadeInDown" data-wow-delay="0.4s">Partners</div>
                     <h2 class="text-anime-style-2 wow fadeInUp" data-wow-delay="0.6s" data-cursor="-opaque">
                        Collaborate with Runo to Transform Business Communication
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay="0.8s">
                        Join our growing network of partners and unlock new opportunities to deliver innovative SIM-based call management solutions to businesses worldwide.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page Header End -->
      <!-- Page Contact Us Start -->
      <div class="page-contact-us">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 py-3">
                  <!-- Contact Us Content Start -->
                  <div class="contact-us-content wow fadeInLeft" data-wow-delay="0.2s">
                     <div class="section-title" style="width:100%">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Runo Partnership Program</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           We would love to see you partner with us in the growth story of future of outbound cloud telephony.
                        </p>
                     </div>
                     <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-2">
                           <img src="img/partners-icon/1.svg" width="24" class="me-2 mt-1" />
                           <span>300+ trusted client base in the first year</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                           <img src="img/partners-icon/2.svg" width="24" class="me-2 mt-1" />
                           <span>New age technology and future ready telephony</span>
                        </li>
                        <li class="d-flex align-items-start mb-2">
                           <img src="img/partners-icon/3.svg" width="24" class="me-2 mt-1" />
                           <span>Negligible competition in the SIM based cloud telephony space</span>
                        </li>
                        <li class="d-flex align-items-start">
                           <img src="img/partners-icon/4.svg" width="24" class="me-2 mt-1" />
                           <span>High recurring revenue sharing throughout the customer lifecycle</span>
                        </li>

                        <li class="d-flex align-items-start">
                           <img src="img/partners-icon/5.svg" width="24" class="me-2 mt-1" />
                           <span>Best in class support system</span>
                        </li>
                     </ul>
                  </div>
                  <!-- Contact Us Content End -->
               </div>
               <div class="col-lg-6">
                  <!-- Contact Form Start -->
                  <div class="contact-form wow fadeInRight" data-wow-delay="0.4s">
                     <form id="partnersForm" name="partnersForm" method="POST">
                        <div class="row">
                           <div class="form-group col-md-12 mb-4">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                              <small class="text-danger d-none" id="nameError2">Name is required and must be less than 30 characters.</small>
                           </div>
                           <div class="form-group col-md-12 mb-4">
                              <label for="email">Your Email</label>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                              <small class="text-danger d-none" id="emailError2">Valid email is required.</small>
                           </div>
                           <div class="form-group col-md-12 mb-4">
                              <label for="phone">Your Phone</label>
                              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone">
                              <small class="text-danger d-none" id="phoneError2">Phone number is required, numeric, and max 10 digits.</small>
                           </div>
                           <div class="form-group col-md-12 mb-3">
                              <label for="message">Message</label>
                              <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message.."></textarea>
                              <small class="text-danger d-none" id="messageError2">Message must be 150 characters or less.</small>
                           </div>

                           <p style="font-size: 12px;">
                              By submitting this form, I agree to the <a href="privacy-policy" target="_blank">privacy policy</a>.
                           </p>

                           <div class="col-md-12">
                              <button type="submit" id="partnersForm-btn" class="btn-default btn-highlighted wow fadeInUp">Send Inquiry</button>
                           </div>
                        </div>
                     </form>

                     <script>
                        jQuery(function($) {
                           const $form = $("#partnersForm");

                           const $name = $form.find("#name");
                           const $email = $form.find("#email");
                           const $phone = $form.find("#phone");
                           const $message = $form.find("#message");

                           const $nameError = $form.find("#nameError2");
                           const $emailError = $form.find("#emailError2");
                           const $phoneError = $form.find("#phoneError2");
                           const $messageError = $form.find("#messageError2");

                           // Restrict phone input to digits only & live error clear
                           $phone.on("input", function() {
                              this.value = this.value.replace(/[^0-9]/g, '');
                              if (this.value.trim().length > 0 && this.value.trim().length <= 10) {
                                 $phoneError.addClass("d-none");
                              }
                           });

                           // Live clear errors for other inputs...
                           $name.on("input", function() {
                              if ($(this).val().trim().length > 0 && $(this).val().trim().length <= 30) {
                                 $nameError.addClass("d-none");
                              }
                           });

                           $email.on("input", function() {
                              if ($(this).val().trim().length > 0) {
                                 $emailError.addClass("d-none");
                              }
                           });

                           $message.on("input", function() {
                              if ($(this).val().trim().length <= 150) {
                                 $messageError.addClass("d-none");
                              }
                           });

                           $form.on("submit", function(event) {
                              event.preventDefault();

                              $nameError.addClass("d-none");
                              $emailError.addClass("d-none");
                              $phoneError.addClass("d-none");
                              $messageError.addClass("d-none");

                              let isValid = true;

                              const name = $name.val().trim();
                              const email = $email.val().trim();
                              const phone = $phone.val().trim();
                              const message = $message.val().trim();

                              const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                              const phonePattern = /^\d+$/; // digits only

                              if (!name || name.length > 30) {
                                 $nameError.removeClass("d-none");
                                 isValid = false;
                              }

                              if (!email || !emailPattern.test(email)) {
                                 $emailError.removeClass("d-none");
                                 isValid = false;
                              }

                              if (!phone || !phonePattern.test(phone) || phone.length > 10) {
                                 $phoneError.removeClass("d-none");
                                 isValid = false;
                              }

                              if (message.length > 150) {
                                 $messageError.removeClass("d-none");
                                 isValid = false;
                              }

                              if (!isValid) return;

                              let formData = $form.serializeArray().reduce(function(obj, item) {
                                 obj[item.name] = item.value;
                                 return obj;
                              }, {});

                              const pagePath = window.location.pathname;
                              formData["custom_page"] = pagePath !== "/" ? pagePath.replace(/^\/|\/$/g, "") : "Home";

                              submitForm("partnersForm", formData, "2eddbc70-045d-41ff-8866-dbf34f73f6f1");
                           });
                        });
                     </script>
                  </div>
                  <!-- Contact Form End -->
               </div>
            </div>
         </div>
      </div>
      <!-- Page Contact Us End -->
   </div>
   </div>
   <?php include('footer.php'); ?>
   <?php include('footerjs.php'); ?>
</body>

</html>