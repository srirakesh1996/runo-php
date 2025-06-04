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
                     <form id="partnersForm" method="POST"
                        data-page-name="<?php echo htmlspecialchars(!empty($page_name) ? $page_name : 'Others'); ?>"
                        data-uuid="<?php echo htmlspecialchars(!empty($form_uuid) ? $form_uuid : '540c6a38-0072-4c48-9fac-b443f814a999'); ?>">

                        <div class="row">
                           <div class="form-group col-md-12 mb-4">
                              <label for="name">Your Name</label>
                              <input type="text" name="your_name" class="form-control" id="pname" placeholder="Your Name" maxlength="30" />
                              <small class="text-danger d-none" id="nameError2">Name is required and must be less than 30 characters.</small>
                           </div>

                           <div class="form-group col-md-12 mb-4">
                              <label for="email">Your Email</label>
                              <input type="email" name="your_email" class="form-control" id="pemail" placeholder="Your Email" />
                              <small class="text-danger d-none" id="emailError2">Valid email is required.</small>
                           </div>

                           <div class="form-group col-md-12 mb-4">
                              <label for="phone">Your Phone</label>
                              <input type="text" name="your_phone" class="form-control" id="phone2" placeholder="Your Phone" />
                              <small class="text-danger d-none" id="phoneError2">Phone number is required, numeric, and max 10 digits.</small>
                           </div>

                           <div class="form-group col-md-12 mb-3">
                              <label for="message">Message</label>
                              <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message.." maxlength="150"></textarea>
                              <small class="text-danger d-none" id="messageError2">Message must be 150 characters or less and only allow letters, numbers, commas, periods, and spaces.</small>
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
                           const phoneInput = document.querySelector("#phone2");
                           const iti = window.intlTelInput(phoneInput, {
                              initialCountry: "in",
                              separateDialCode: true,
                              utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js",
                           });

                           const fakeNumbers = [
                              "1234567890", "0000000000", "1111111111", "2222222222",
                              "3333333333", "4444444444", "5555555555", "6666666666",
                              "7777777777", "8888888888", "9999999999"
                           ];

                           const countryLengthMap = {
                              in: [10],
                              ae: [9],
                              us: [10],
                              ca: [10],
                              gb: [10, 11],
                              sa: [9],
                              ph: [10],
                              id: [10, 11],
                              sg: [8],
                              au: [9],
                              nz: [8, 9],
                              pk: [10],
                              bd: [10],
                              lk: [9],
                              ng: [10, 11],
                              ke: [9],
                              za: [9, 10],
                              my: [9, 10],
                              th: [9, 10],
                              vn: [9, 10],
                              kr: [9, 10, 11],
                              jp: [10, 11],
                              cn: [11],
                              hk: [8],
                              tw: [9, 10],
                              de: [10, 11],
                              fr: [9, 10],
                              it: [10],
                              es: [9],
                              br: [10, 11],
                              mx: [10],
                              ar: [10, 11],
                              ru: [10],
                              tr: [10],
                              eg: [10, 11],
                              iq: [10],
                           };



                           function getMaxLengthForCountry() {
                              const countryCode = iti.getSelectedCountryData().iso2;
                              const allowedLengths = countryLengthMap[countryCode] || [11];
                              return Math.max(...allowedLengths);
                           }

                           // phone input restrictions (numbers only, max length)
                           phoneInput.addEventListener("input", () => {
                              phoneInput.value = phoneInput.value.replace(/\D/g, "");
                              const maxLength = getMaxLengthForCountry();
                              if (phoneInput.value.length > maxLength) {
                                 phoneInput.value = phoneInput.value.slice(0, maxLength);
                              }
                           });

                           phoneInput.addEventListener("countrychange", () => {
                              const maxLength = getMaxLengthForCountry();
                              phoneInput.value = phoneInput.value.slice(0, maxLength);
                              validatePhone();
                           });

                           // Patterns
                           const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                           const messagePattern = /^[a-zA-Z0-9,. ]*$/;

                           // Live validation functions
                           function validateName() {
                              const val = $("#pname").val().trim();
                              if (val.length > 0 && val.length <= 30) {
                                 $("#nameError2").addClass("d-none");
                                 return true;
                              } else {
                                 $("#nameError2").removeClass("d-none");
                                 return false;
                              }
                           }

                           function validateEmail() {
                              const val = $("#pemail").val().trim();
                              if (emailPattern.test(val)) {
                                 $("#emailError2").addClass("d-none");
                                 return true;
                              } else {
                                 $("#emailError2").removeClass("d-none");
                                 return false;
                              }
                           }

                           function validatePhone() {
                              const phoneNational = phoneInput.value;
                              const selectedCountry = iti.getSelectedCountryData().iso2;
                              const validLengths = countryLengthMap[selectedCountry] || [15];

                              if (iti.isValidNumber() && !fakeNumbers.includes(phoneNational) && validLengths.includes(phoneNational.length)) {
                                 $("#phoneError2").addClass("d-none");
                                 return true;
                              } else {
                                 $("#phoneError2").removeClass("d-none");
                                 return false;
                              }
                           }

                           function validateMessage() {
                              let val = $("#message").val();
                              // Remove invalid chars immediately
                              if (!messagePattern.test(val)) {
                                 val = val.replace(/[^a-zA-Z0-9,. ]/g, "");
                                 $("#message").val(val);
                              }
                              if (val.length > 0 && val.length <= 150) {
                                 $("#messageError2").addClass("d-none");
                                 return true;
                              } else {
                                 $("#messageError2").removeClass("d-none");
                                 return false;
                              }
                           }

                           // Attach live validation handlers
                           $("#pname").on("input", validateName);
                           $("#pemail").on("input", validateEmail);
                           $("#phone2").on("input", validatePhone);
                           $("#message").on("input", validateMessage);

                           // On form submit
                           $("#partnersForm").on("submit", function(event) {
                              event.preventDefault();

                              const validName = validateName();
                              const validEmail = validateEmail();
                              const validPhone = validatePhone();
                              const validMessage = validateMessage();

                              if (!(validName && validEmail && validPhone && validMessage)) {
                                 return; // Do not submit
                              }

                              // Prepare form data
                              let formData = $(this).serializeArray().reduce(function(obj, item) {
                                 obj[item.name] = item.value;
                                 return obj;
                              }, {});

                              formData["your_phone"] = iti.getNumber();
                              formData["custom_page"] = window.location.pathname.replace(/^\/|\/$/g, "") || "Home";

                              const uuid = $(this).data("uuid");

                              submitForm("partnersForm", formData, uuid);
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