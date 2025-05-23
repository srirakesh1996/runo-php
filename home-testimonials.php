<!-- Testimonial Section -->
<div class="our-tesimonial">
  <!-- Security Section with WOW animations -->
  <section class="security-section wow fadeInUp" data-wow-delay="0.2s">
    <div class="row align-items-center">
      <!-- Left Text -->
      <div class="col-md-7 security-text">
        <h2>Enterprise-grade security</h2>
        <p>Have peace of mind that your company’s data is fully secure and compliant with the latest industry standard certifications.</p>
      </div>
      <!-- Right Image -->
      <div class="col-md-5 text-md-end text-center security-badges">
        <img src="img/security.webp" alt="ISO Badge" class="img-fluid">
      </div>
    </div>
  </section>
  <div class="container">
    <!-- Section Title Row with Navigation -->
    <div class="row section-row align-items-center justify-content-between mb-4 wow fadeInUp" data-wow-delay="0.2s">
      <div class="col-md-8">
        <div class="section-title" style="text-align:left;width:100%">
          <h2>
            We’re Not Saying Runo’s Magic…
            But People Think It Is
          </h2>
        </div>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0" id="arrow-ico">
        <div class="testimonial-nav-buttons gap-2">
          <button class="testimonial-prev-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="testimonial-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Testimonial Slider -->
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-slider wow fadeInUp" data-wow-delay="0.3s">
          <div class="swiper">
            <div class="swiper-wrapper" data-cursor-text="Drag">
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
                  <div class="testimonial-header">
                    <p>RUNO is one unique mobile-based calling solution we came across 3 months back. It quickly helped us to streamline our sales process and added quality to sales pitch.</p>
                    <p>With the monitoring tools, our conversation rates have moved up by 120 percent. Our overall team experience was enhanced in all directions...</p>
                  </div>
                  <div class="testimonial-body">
                    <div class="testimonial-line"></div>
                    <div class="people">
                      <div class="author-image">
                        <figure class="image-anime">
                          <img src="img/review2.webp" alt="">
                        </figure>
                      </div>
                      <div class="author-content">
                        <h3>Dr. Surendranath Reddy Kaswa</h3>
                        <p>Founder - Plato Digi Education</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
                  <div class="testimonial-header">
                    <p>As a fast growing organization in edu-tech, always felt the need to manage business calls for enhanced customer experience.</p>
                    <p>We did reach out to a few cloud based service providers, but somehow, due to very high pricing and calls originating from virtual numbers, was not very convincing.</p>
                  </div>
                  <div class="testimonial-body">
                    <div class="testimonial-line"></div>
                    <div class="people">
                      <div class="author-image">
                        <figure class="image-anime">
                          <img src="img/review1.webp" alt="">
                        </figure>
                      </div>
                      <div class="author-content">
                        <h3>ISHAN GUPTA</h3>
                        <p>Founder, Q-in-1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 3 (Duplicate as example) -->
              <div class="swiper-slide">
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.4s">
                  <div class="testimonial-header">
                    <p>Great app! It helps track my telesales team's calls and live status, and the custom CRM is very useful. The support team responds quickly. We can now manage our leads easily. Thanks, Runo Call Manager.</p>
                  </div>
                  <div class="testimonial-body">
                    <div class="testimonial-line"></div>
                    <div class="people">
                      <div class="author-image">
                        <figure class="image-anime">
                          <img src="img/review3.webp" alt="">
                        </figure>
                      </div>
                      <div class="author-content">
                        <h3>Skylinks Consultancy</h3>
                        <p>Founder, Skylinks Consultancy</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End swiper-wrapper -->
          </div>
          <!-- End swiper -->
        </div>
        <!-- End testimonial-slider -->
      </div>
    </div>
  </div>
</div>
<script>
  function updateNavState(swiper) {
    const prevBtn = document.querySelector(".testimonial-prev-btn");
    const nextBtn = document.querySelector(".testimonial-next-btn");

    if (swiper.isBeginning) {
      prevBtn.classList.add("swiper-button-disabled");
    } else {
      prevBtn.classList.remove("swiper-button-disabled");
    }

    if (swiper.isEnd) {
      nextBtn.classList.add("swiper-button-disabled");
    } else {
      nextBtn.classList.remove("swiper-button-disabled");
    }
  }
</script>