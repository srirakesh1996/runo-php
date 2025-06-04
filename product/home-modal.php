<!-- Modal -->
<div class="modal fade" id="requestDemoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="custom-modal-box">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5>Get in touch now!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="demo-form" method="POST"
                        data-page-name="<?php echo htmlspecialchars(!empty($page_name) ? $page_name : 'Others'); ?>"
                        data-uuid="<?php echo htmlspecialchars(!empty($form_uuid) ? $form_uuid : '540c6a38-0072-4c48-9fac-b443f814a999'); ?>">

                        <div class="mb-3">
                            <input type="text" name="your_name" class="form-control" id="name" placeholder="Name" />
                            <small class="text-danger d-none" id="nameError">Name is required.</small>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="your_email" class="form-control" id="email" placeholder="Email Address" />
                            <small class="text-danger d-none" id="emailError">Valid email is required.</small>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="your_phone" class="form-control" id="phone" placeholder="Phone Number" autocomplete="tel" />
                            <small class="text-danger d-none" id="phoneError">Enter a valid phone number.</small>
                        </div>

                        <div class="mb-3">
                            <select name="agents" class="form-select" id="agents">
                                <option value="" disabled selected style="color: #858585;">Number of Calling Agents</option>
                                <option value="1-5">1–5</option>
                                <option value="6-10">6–10</option>
                                <option value="11+">11+</option>
                            </select>
                            <small class="text-danger d-none" id="agentsError">Please select an option.</small>
                        </div>

                        <p style="font-size: 12px;">
                            By submitting this form, I agree to the <a href="../privacy-policy" target="_blank">privacy policy</a>.
                        </p>

                        <button type="submit" id="demo-form-btn" class="btn-default btn-highlighted" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jQuery(function($) {
        const phoneInput = document.querySelector("#phone");
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
            const allowedLengths = countryLengthMap[countryCode] || [10];
            return Math.max(...allowedLengths);
        }

        // Restrict phone input to digits only and max length live
        phoneInput.addEventListener("input", () => {
            phoneInput.value = phoneInput.value.replace(/\D/g, "");
            const maxLength = getMaxLengthForCountry();
            if (phoneInput.value.length > maxLength) {
                phoneInput.value = phoneInput.value.slice(0, maxLength);
            }
            validatePhone();
        });

        // Trim phone on country change & revalidate
        phoneInput.addEventListener("countrychange", () => {
            const maxLength = getMaxLengthForCountry();
            phoneInput.value = phoneInput.value.slice(0, maxLength);
            validatePhone();
        });

        // Validation helper functions

        function validateName() {
            const val = $("#name").val().trim();
            if (!val || val.length > 30) {
                $("#nameError").removeClass("d-none");
                return false;
            }
            $("#nameError").addClass("d-none");
            return true;
        }

        function validateEmail() {
            const val = $("#email").val().trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!val || !emailPattern.test(val)) {
                $("#emailError").removeClass("d-none");
                return false;
            }
            $("#emailError").addClass("d-none");
            return true;
        }

        function validatePhone() {
            const phoneNational = phoneInput.value;
            const selectedCountry = iti.getSelectedCountryData().iso2;
            const validLengths = countryLengthMap[selectedCountry] || [10];
            if (
                !iti.isValidNumber() ||
                fakeNumbers.includes(phoneNational) ||
                !validLengths.includes(phoneNational.length)
            ) {
                $("#phoneError").removeClass("d-none");
                return false;
            }
            $("#phoneError").addClass("d-none");
            return true;
        }

        function validateAgents() {
            if (!$("#agents").val()) {
                $("#agentsError").removeClass("d-none");
                return false;
            }
            $("#agentsError").addClass("d-none");
            return true;
        }

        // Live validation events for form fields
        $("#name").on("input", validateName);
        $("#email").on("input", validateEmail);
        $("#phone").on("input", validatePhone);
        $("#agents").on("change", validateAgents);

        // On submit
        $("#demo-form").on("submit", function(event) {
            event.preventDefault();

            // Validate all fields again
            const validName = validateName();
            const validEmail = validateEmail();
            const validPhone = validatePhone();
            const validAgents = validateAgents();

            if (!(validName && validEmail && validPhone && validAgents)) {
                return; // Don't submit if any invalid
            }

            // Prepare form data
            let formData = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

            formData["your_phone"] = iti.getNumber(); // international phone
            formData["custom_page"] = window.location.pathname.replace(/^\/|\/$/g, "") || "Home";

            const uuid = $(this).data("uuid");

            // Submit form (replace with your actual submit function)
            submitForm("demo-form", formData, uuid);
        });

    });
</script>
<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <h5 class="mb-3">Thank you!</h5>
            <p>Your submission has been received. We'll be in touch shortly.</p>
            <button type="button" class="btn-default btn-highlighted mt-3" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>