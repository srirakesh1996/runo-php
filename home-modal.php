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
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" />
                            <small class="text-danger d-none" id="nameError">Name is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" />
                            <small class="text-danger d-none" id="emailError">Valid email is required.</small>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="your_phone" class="form-control" id="phone" placeholder="Phone Number" />
                            <small class="text-danger d-none" id="phoneError">Phone number is required and must be numeric.</small>
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
                            By submitting this form, I agree to the <a href="privacy-policy">privacy policy</a>.
                        </p>
                        <button type="submit" id="demo-form-btn" class="btn-default btn-highlighted" style="width: 100%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS: Cookie + Validation + Submit -->
<script>
    // 🔐 Restrict only numbers in phone field on input
    jQuery(function($) {
        $("#phone").on("input", function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // remove non-numeric
        });

        $("#demo-form").on("submit", function(event) {
            event.preventDefault();

            // Hide all errors
            $("#nameError, #emailError, #phoneError, #agentsError").addClass("d-none");

            let isValid = true;

            const name = $("#name").val().trim();
            const email = $("#email").val().trim();
            const phone = $("#phone").val().trim();
            const agents = $("#agents").val();

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phonePattern = /^\d+$/;

            if (!name) {
                $("#nameError").removeClass("d-none");
                isValid = false;
            }

            if (!email || !emailPattern.test(email)) {
                $("#emailError").removeClass("d-none");
                isValid = false;
            }

            if (!phone || !phonePattern.test(phone)) {
                $("#phoneError").removeClass("d-none");
                isValid = false;
            }

            if (!agents) {
                $("#agentsError").removeClass("d-none");
                isValid = false;
            }

            if (!isValid) return;

            let formData = $(this)
                .serializeArray()
                .reduce(function(obj, item) {

                    obj[item.name] = item.value;

                    const pagePath = window.location.pathname;
                    let cleanedPath = pagePath.replace(/^\/|\/$/g, ""); // remove leading/trailing slashes
                    obj["custom_page"] = cleanedPath ? cleanedPath : "Others";

                    return obj;
                }, {});



            const uuid = $(this).data("uuid");

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