<?php include('doctype.php'); ?>

<head>
   <title>Contact Us - Runo</title>
   <meta name="description" content="Contact the Runo team for any questions or feedback. We're here to help with any sales or support-related queries.">

   <!-- Updated Open Graph tags -->
   <meta property="og:title" content="Contact Us - Runo">
   <meta property="og:description" content="Contact the Runo team for any questions or feedback. We're here to help with any sales or support-related queries.">

   <!-- Updated Twitter tags -->
   <meta name="twitter:title" content="Contact Us - Runo">
   <meta name="twitter:description" content="Contact the Runo team for any questions or feedback. We're here to help with any sales or support-related queries.">

   <?php include('head.php'); ?>
</head>

<body>
   <div>
      <?php include('preloader.php'); ?>
      <?php
      $page_name = 'Contact';
      $form_uuid = 'f355be52-b83b-49d5-80bb-cf3288441078';

      include('home-modal.php');
      ?>
      <?php include('header.php'); ?>
      <!-- Page Header Start -->
      <div class="page-title">
         <div class="container">
            <div class="row">
               <div class="title-content  fadeIn" data--delay="0.3s">
                  <div class="col-lg-12">
                     <div class="tagline  fadeInDown" data--delay="0.4s">Contact Us</div>
                     <h2 class="text-anime-style-2  fadeInUp" data--delay="0.6s" data-cursor="-opaque">
                        We're Here to Help — Let’s Connect
                     </h2>
                     <p class=" fadeInUp" data--delay="0.8s">
                        Whether you have questions, need support, or want to explore a partnership, the Runo team is ready to assist you. Reach out and let's start the conversation.
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
                  <div class="contact-us-content  fadeInLeft" data--delay="0.2s">
                     <div class="section-title" style="width: 100%;">
                        <h2 class=" text-anime-style-2" data-cursor="-opaque">We’d Always Love to Hear From You</h2>
                        <p class=" fadeInUp" data--delay="0.3s">
                           Have any questions about RUNO, product demo or support? Shoot them away here.
                        </p>
                     </div>
                     <ul class="list-unstyled">
                        <!-- Address -->
                        <li class="d-flex align-items-start mb-4">
                           <div class="me-3" style="width: 40px;">
                              <!-- Address Icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="40" height="40" viewBox="0 0 32 32">
                                 <path d="M16,2A11.0134,11.0134,0,0,0,5,13a10.8885,10.8885,0,0,0,2.2163,6.6s.3.3945.3482.4517L16,30l8.439-9.9526c.0444-.0533.3447-.4478.3447-.4478l.0015-.0024A10.8846,10.8846,0,0,0,27,13,11.0134,11.0134,0,0,0,16,2Zm1,16H15V16h2Zm0-4H15V12h2Zm4,4H19V10H13v8H11V10a2.0023,2.0023,0,0,1,2-2h6a2.0023,2.0023,0,0,1,2,2Z"></path>
                              </svg>
                           </div>
                           <span>
                              <strong>Rutakshi Technologies Private Limited</strong><br>
                              Cyber Towers, Patrika Nagar,<br>
                              HITEC City, Hyderabad,<br>
                              Telangana, INDIA.
                           </span>
                        </li>
                        <!-- Phone -->
                        <li class="d-flex align-items-start mb-4">
                           <div class="me-3" style="width: 40px;">
                              <!-- Phone Icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9741 5.02589C17.1865 3.23828 14.5882 2.60925 12.26 3.23607C11.7267 3.37965 11.178 3.06373 11.0344 2.53043C10.8908 1.99714 11.2067 1.44842 11.74 1.30484C14.7375 0.497836 18.0793 1.30264 20.3883 3.61167C22.6974 5.92071 23.5022 9.26252 22.6951 12.26C22.5516 12.7933 22.0029 13.1092 21.4696 12.9656C20.9363 12.822 20.6203 12.2733 20.7639 11.74C21.3907 9.41183 20.7617 6.8135 18.9741 5.02589Z" />
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3647 7.6353C15.8073 7.07789 14.9437 6.87132 14.3162 7.08048C13.7923 7.25513 13.226 6.97197 13.0513 6.44802C12.8767 5.92408 13.1598 5.35776 13.6838 5.18311C15.1042 4.70965 16.7435 5.1857 17.7789 6.22109C18.8143 7.25647 19.2904 8.89583 18.8169 10.3162C18.6422 10.8402 18.0759 11.1233 17.552 10.9487C17.028 10.774 16.7449 10.2077 16.9195 9.68378C17.1287 9.05631 16.9221 8.19271 16.3647 7.6353Z" />
                                 <path d="M22.9813 18.1823C22.8816 17.2789 22.3828 16.5763 21.5849 16.0745L17.994 13.9667C16.8968 13.3645 15.5004 13.5652 14.6027 14.3682L14.2037 14.7697C12.3085 13.5652 10.4134 11.6582 9.21642 9.75119L9.6154 9.34971C10.5131 8.54675 10.7126 7.14158 10.1141 6.03751L8.01947 2.4242C7.62049 1.62124 6.82253 1.11939 5.92482 1.01902C5.12685 0.91865 4.22914 1.21976 3.63067 1.82198L2.43373 3.02642C1.03729 4.43159 0.638307 6.33862 1.33653 8.0449C2.33398 10.3534 4.02965 13.766 7.12176 16.8774C10.2139 19.9889 13.6052 21.7956 15.8994 22.6989C16.4978 22.8996 17.0963 23 17.595 23C18.792 23 19.9889 22.4982 20.8866 21.5948L22.0836 20.3904C22.7818 19.8885 23.081 18.9852 22.9813 18.1823Z" />
                              </svg>
                           </div>
                           <span><strong>Phone:</strong><a href="tel:+91 8179880074" style="color:#212121">+91 8179880074</a></span>
                        </li>
                        <!-- Email -->
                        <li class="d-flex align-items-start">
                           <div class="me-3" style="width: 40px;">
                              <!-- You can use any other email icon or reuse one of the above if needed -->
                              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                                 <path d="M12 13.5l8-6V6l-8 6-8-6v1.5l8 6zm8-8.5c.552 0 1 .448 1 1v12c0 .552-.448 1-1 1H4c-.552 0-1-.448-1-1V6c0-.552.448-1 1-1h16z" />
                              </svg>
                           </div>
                           <span><strong>Email:</strong> <a href="mailto:care@runo.in" style="color:#212121">care@runo.in</a></span>
                        </li>
                     </ul>
                  </div>
                  <!-- Contact Us Content End -->
               </div>
               <div class="col-lg-6">
                  <!-- Contact Form Start -->
                  <div class="contact-form  fadeInRight" data--delay="0.4s">
                     <form id="contact-form" name="contact-form" method="POST"
                        data-page-name="<?php echo htmlspecialchars(!empty($page_name) ? $page_name : 'Others'); ?>"
                        data-uuid="<?php echo htmlspecialchars(!empty($form_uuid) ? $form_uuid : '540c6a38-0072-4c48-9fac-b443f814a999'); ?>">
                        <div class="row">
                           <div class="form-group col-md-12 mb-4">
                              <label for="name">Your Name</label>
                              <input type="text" name="your_name" class="form-control" id="cname" placeholder="Your Name" maxlength="30" />
                              <small class="text-danger d-none" id="nameError2">Name is required and must be less than 30 characters.</small>
                           </div>
                           <div class="form-group col-md-12 mb-4">
                              <label for="email">Your Email</label>
                              <input type="email" name="your_email" class="form-control" id="cemail" placeholder="Your Email" />
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
                              <button type="submit" id="contact-form-btn" class="btn-default btn-highlighted  fadeInUp">Contact Us</button>
                           </div>
                        </div>
                     </form>
                     <script>
                        jQuery(function($) {
                           const phoneInput = document.querySelector("#phone2");
                           const iti = window.intlTelInput(phoneInput, {
                              initialCountry: "auto", // <-- add this line
                              geoIpLookup: function(callback) {

                                 fetch('https://ipapi.co/json/')
                                    .then(res => {

                                       return res.json();
                                    })
                                    .then(data => {

                                       const countryCode = (data && data.country_code) ? data.country_code.toLowerCase() : 'in';

                                       callback(countryCode);
                                    })
                                    .catch(err => {
                                       console.error("geoIpLookup error:", err);
                                       callback('in');
                                    });
                              },
                              separateDialCode: true,
                              utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js",
                           });
                           const fakeNumbers = [
                              "1234567890", "0000000000", "1111111111", "2222222222",
                              "3333333333", "4444444444", "5555555555", "6666666666",
                              "7777777777", "8888888888", "9999999999"
                           ];

                           const countryLengthMap = {
                              in: [10], // India
                              ae: [9], // United Arab Emirates
                              us: [10], // United States
                              ca: [10], // Canada
                              gb: [10, 11], // United Kingdom
                              sa: [9], // Saudi Arabia
                              ph: [10], // Philippines
                              id: [10, 11], // Indonesia
                              sg: [8], // Singapore
                              au: [9], // Australia
                              nz: [8, 9], // New Zealand
                              pk: [10], // Pakistan
                              bd: [10], // Bangladesh
                              lk: [9], // Sri Lanka
                              ng: [10, 11], // Nigeria
                              ke: [9], // Kenya
                              za: [9, 10], // South Africa
                              my: [9, 10], // Malaysia
                              th: [9, 10], // Thailand
                              vn: [9, 10], // Vietnam
                              kr: [9, 10, 11], // South Korea
                              jp: [10, 11], // Japan
                              cn: [11], // China
                              hk: [8], // Hong Kong
                              tw: [9, 10], // Taiwan
                              de: [10, 11], // Germany
                              fr: [9, 10], // France
                              it: [10], // Italy
                              es: [9], // Spain
                              br: [10, 11], // Brazil
                              mx: [10], // Mexico
                              ar: [10, 11], // Argentina
                              ru: [10], // Russia
                              tr: [10], // Turkey
                              eg: [10, 11], // Egypt
                              iq: [10], // Iraq
                              gt: [8] // Guatemala
                           };


                           let phoneTouched = false;

                           $("#phone2").on("focus input", function() {
                              phoneTouched = true;
                              validatePhone();
                           });

                           function getMaxLengthForCountry() {
                              const countryCode = iti.getSelectedCountryData().iso2;
                              const allowedLengths = countryLengthMap[countryCode];
                              return allowedLengths ? Math.max(...allowedLengths) : 15; // fallback to max 15 digits
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
                              const val = $("#cname").val().trim();
                              if (val.length > 0 && val.length <= 30) {
                                 $("#nameError2").addClass("d-none");
                                 return true;
                              } else {
                                 $("#nameError2").removeClass("d-none");
                                 return false;
                              }
                           }

                           function validateEmail() {
                              const val = $("#cemail").val().trim();
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
                              const validLengths = countryLengthMap[selectedCountry];

                              if (!phoneTouched) {
                                 $("#phoneError2").addClass("d-none");
                                 return false;
                              }

                              if (!iti.isValidNumber()) {
                                 $("#phoneError2").text("Please enter a valid phone number.").removeClass("d-none");
                                 return false;
                              }

                              if (fakeNumbers.includes(phoneNational)) {
                                 $("#phoneError2").text("Please enter a real phone number.").removeClass("d-none");
                                 return false;
                              }

                              if (validLengths && !validLengths.includes(phoneNational.length)) {
                                 $("#phoneError2").text(`Phone number must be ${validLengths.join(" or ")} digits.`).removeClass("d-none");
                                 return false;
                              }

                              $("#phoneError2").addClass("d-none");
                              return true;
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
                           $("#cname").on("input", validateName);
                           $("#cemail").on("input", validateEmail);
                           $("#phone2").on("input", validatePhone);
                           $("#message").on("input", validateMessage);

                           // On form submit
                           $("#contact-form").on("submit", function(event) {
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
                              formData["custom_Page Name"] = window.location.pathname.replace(/^\/|\/$/g, "") || "Contact";

                              const uuid = $(this).data("uuid");

                              submitForm("contact-form", formData, uuid);
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
      <!-- Google Map Start -->
      <div class="google-map">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="google-map-iframe">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.1888616937695!2d78.37831027331957!3d17.450672400982572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb936fdf3be187%3A0xe65d34457dbf8d14!2sRutakshi%20Technologies%20Private%20Limited%20(Runo)!5e0!3m2!1sen!2sin!4v1746098549108!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Google Map End -->
   </div>
   <?php include('footer.php'); ?>
   <?php include('footerjs.php'); ?>
</body>

</html>