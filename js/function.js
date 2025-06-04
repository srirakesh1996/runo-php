(function ($) {
  "use strict";
  var $window = $(window);
  var $body = $("body");

  /* Preloader Effect */
  $window.on("load", function () {
    $(".preloader").fadeOut(400);
  });

  /* Sticky Header */
  if ($(".active-sticky-header").length) {
    $window.on("resize", function () {
      setHeaderHeight();
    });

    function setHeaderHeight() {
      $("header.main-header").css(
        "height",
        $("header .header-sticky").outerHeight()
      );
    }

    $window.on("scroll", function () {
      var fromTop = $(window).scrollTop();
      setHeaderHeight();
      var headerHeight = $("header .header-sticky").outerHeight();
      $("header .header-sticky").toggleClass(
        "hide",
        fromTop > headerHeight + 100
      );
      $("header .header-sticky").toggleClass("active", fromTop > 600);
    });
  }

  /* Slick Menu JS */
  $("#menu").slicknav({
    label: "",
    prependTo: ".responsive-menu",
  });

  if ($("a[href='#top']").length) {
    $(document).on("click", "a[href='#top']", function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  }

  /* Hero Slider Layout JS */
  const hero_slider_layout = new Swiper(".hero-slider-layout .swiper", {
    slidesPerView: 1,
    speed: 1000,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 4000,
    },
    pagination: {
      el: ".hero-pagination",
      clickable: true,
    },
  });

  /* Company Client Slider JS */
  if ($(".company-client-slider").length) {
    const testimonial_company_slider = new Swiper(
      ".company-client-slider .swiper",
      {
        slidesPerView: 5,
        speed: 2000,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 5000,
        },
        breakpoints: {
          768: {
            slidesPerView: 5,
          },
          991: {
            slidesPerView: 5,
          },
        },
      }
    );
  }

  /* testimonial Slider JS */
  if ($(".testimonial-slider").length) {
    const testimonial_slider = new Swiper(".testimonial-slider .swiper", {
      slidesPerView: 1,
      speed: 1000,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      navigation: {
        nextEl: ".testimonial-next-btn",
        prevEl: ".testimonial-prev-btn",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        991: {
          slidesPerView: 2,
        },
      },
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".track-btn").forEach(function (btn) {
      btn.addEventListener("click", function () {
        const label = this.getAttribute("data-label");
        console.log("Button clicked:", label);

        // Example for Google Analytics 4 (GA4)
        gtag("event", "button_click", {
          event_category: "CTA",
          event_label: label,
        });

        // Optional: prevent default if needed for testing
        // event.preventDefault();
      });
    });
  });

  /* Youtube Background Video JS */
  if ($("#herovideo").length) {
    var myPlayer = $("#herovideo").YTPlayer();
  }

  /* Animated Wow Js */
  new WOW().init();

  /* Popup Video */
  if ($(".popup-video").length) {
    $(".popup-video").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true,
    });
  }

  /* How It Work Active Start */
  var $process_steps_list = $(".process-steps-list");
  if ($process_steps_list.length) {
    var $steps_items = $process_steps_list.find(".process-step-box");

    if ($steps_items.length) {
      $steps_items.on({
        mouseenter: function () {
          if (!$(this).hasClass("active")) {
            $steps_items.removeClass("active");
            $(this).addClass("active");
          }
        },
        mouseleave: function () {
          // Optional: Add logic for mouse leave if needed
        },
      });
    }
  }
  /* How It Work Active End */
})(jQuery);

function submitForm(formId, formData, formToken) {
  $(`#${formId}-btn`).prop("disabled", true);

  // Retrieve UTM values from localStorage
  const utmSource = localStorage.getItem("utm_source");
  const utmCampaign = localStorage.getItem("utm_campaign");

  formData["custom_source"] = "Website Enquiry- IB";
  formData["custom_status"] = "Api Allocation";
  if (utmSource) formData["custom_utm source"] = utmSource;
  if (utmCampaign) formData["custom_utm campaign"] = utmCampaign;

  // ✅ Print data to console
  console.log("Submitting form:", formId);
  console.log("Form Data Sent to API:", formData);

  $.ajax({
    type: "POST",
    url: `https://api-call-crm.runo.in/integration/webhook/wb/5d70a2816082af4daf1e377e/${formToken}`,
    data: JSON.stringify(formData),
    headers: {
      "Content-Type": "application/json",
    },
    contentType: "application/json",
  })
    .done(function (data) {
      console.log("✅ Success:", data);
      $(`#${formId}`)[0].reset();
      $(`#${formId}-btn`).prop("disabled", false);
      $("#requestDemoModal").modal("hide");
      // Show thank you modal after a short delay
      setTimeout(function () {
        $("#thankYouModal").modal("show");
      }, 50);
    })
    .fail(function (a, b) {
      console.log("✅ Problem is:", data);
      console.log("❌ Error:", a, b);
      $(`#${formId}`)[0].reset();
      $(`#${formId}-btn`).prop("disabled", false);
      alert("Oops! Something went wrong.");
    });
}
