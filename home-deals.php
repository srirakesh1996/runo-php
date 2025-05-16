<section class="deals-section" id="dealsSection">
  <div class="container">
    <div class="row deals-content">
      <div class="section-title text-center wow fadeInUp" data-wow-delay="0.3s">
        <h2>Whooosh…That’s the Sound of Closing Deals Faster</h2>
      </div>
      <div class="col-md-6">
        <div class="left-tabs" id="tabContainer">
          <div class="scroll-bar"></div>
          <div class="scroll-indicator" id="scrollIndicator"></div>
          <div class="btn-group-vertical w-100" id="tabButtons">
            <button class="tab-btn active" data-bs-target="#tab1">
              <span>Boost Call Connect Rate With SIM-Based Calling</span>
              <p>No virtual or random numbers. Just your real number for calling, which means more trust and better pickup rates.</p>
            </button>
            <button class="tab-btn" data-bs-target="#tab2">
              <span>Improve Call Efficiency With AI Call Scoring & Evaluation</span>
              <p>Calls are recorded, transcribed, and summarized, with AI providing sentiment analysis and quality scores.</p>
            </button>
            <button class="tab-btn" data-bs-target="#tab3">
              <span>Never Miss Follow-Ups With Smart Reminders</span>
              <p>Get automated reminders to ensure timely follow-ups for every lead on calls or WhatsApp.</p>
            </button>
            <button class="tab-btn" data-bs-target="#tab4">
              <span>Get Instant Visibility With Live Team Tracking</span>
              <p>Stay on top of your team’s activity with real-time status updates for active, idle, offline and on-call</p>
            </button>
            <button class="tab-btn" data-bs-target="#tab5">
              <span>Improve CRM Adoption With User-Friendly Interface</span>
              <p>Get your team to adopt CRM faster with a simple, sales-friendly interface that’s easy to learn and use every day</p>
            </button>
            <button class="tab-btn" data-bs-target="#tab6">
              <span>Get Started With 30-Minute Quick Setup</span>
              <p>Set up Runo in under 30 minutes and start managing calls, leads, and follow-ups without any delays.</p>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tab-content text-center">
          <div class="tab-pane fade show active" id="tab1">
            <img src="img/deal1.webp" class="img-preview" alt="Tab 1 Image">
          </div>
          <div class="tab-pane fade" id="tab2">
            <img src="img/deal2.webp" class="img-preview" alt="Tab 2 Image">
          </div>
          <div class="tab-pane fade" id="tab3">
            <img src="img/deal3.webp" class="img-preview" alt="Tab 3 Image">
          </div>
          <div class="tab-pane fade" id="tab4">
            <img src="img/deal4.webp" class="img-preview" alt="Tab 4 Image">
          </div>
          <div class="tab-pane fade" id="tab5">
            <img src="img/deal5.webp" class="img-preview" alt="Tab 5 Image">
          </div>
          <div class="tab-pane fade" id="tab6">
            <img src="img/deal6.webp" class="img-preview" alt="Tab 6 Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tab Script -->

<script>
  const tabs = document.querySelectorAll(".tab-btn");
  const panes = document.querySelectorAll(".tab-pane");
  const scrollIndicator = document.getElementById("scrollIndicator");

  let index = 0;
  let autoSlideInterval;
  let observerStarted = false;
  let isAnimating = false;

  function animateScrollIndicator(toTop) {
    const startTop = parseFloat(scrollIndicator.style.top) || 0;
    const startHeight = parseFloat(scrollIndicator.style.height) || 0;
    const isMobile = window.innerWidth <= 767;
    const targetHeight = isMobile ? 120 : 110;
    const duration = 500;
    const startTime = performance.now();

    function animate(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const newTop = startTop + (toTop - startTop) * progress;
      const newHeight = startHeight + (targetHeight - startHeight) * progress;

      scrollIndicator.style.top = `${newTop}px`;
      scrollIndicator.style.height = `${newHeight}px`;

      if (progress < 1) {
        requestAnimationFrame(animate);
      }
    }

    requestAnimationFrame(animate);
  }

  function updateScrollIndicator(i) {
    const spacingTop = tabs[i].offsetTop + 35;
    animateScrollIndicator(spacingTop);
  }

  function resetWowAnimation(el) {
    el.classList.remove("animate__animated");
    void el.offsetWidth;
    el.classList.add("animate__animated");
  }

  function switchTab(i) {
    if (isAnimating || index === i) return;
    isAnimating = true;

    const currentPane = document.querySelector(".tab-pane.show.active");
    const nextTab = tabs[i];
    const nextPaneId = nextTab.getAttribute("data-bs-target");
    const nextPane = document.querySelector(nextPaneId);

    if (!nextPane) {
      isAnimating = false;
      return;
    }

    tabs.forEach(tab => tab.classList.remove("active"));
    nextTab.classList.add("active");

    const currentImg = currentPane.querySelector("img");
    const nextImg = nextPane.querySelector("img");

    // Fade out current image
    currentImg.style.opacity = 0;

    setTimeout(() => {
      // Hide current
      currentPane.classList.remove("show", "active");

      // Show next and fade in image
      nextPane.classList.add("show", "active");
      nextImg.style.opacity = 0;

      setTimeout(() => {
        nextImg.style.opacity = 1;
        if (nextImg.classList.contains("wow")) resetWowAnimation(nextImg);
        isAnimating = false; // ✅ Unlock animation lock
      }, 50);
    }, 500); // Match fade-out

    updateScrollIndicator(i);
    index = i;
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
      const nextIndex = (index + 1) % tabs.length;
      switchTab(nextIndex);
    }, 5000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
  }

  tabs.forEach((tab, i) => {
    tab.addEventListener("click", () => {
      switchTab(i);
      resetAutoSlide();
    });
  });

  function observeSection() {
    const section = document.getElementById("dealsSection");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !observerStarted) {
          observerStarted = true;
          updateScrollIndicator(0);
          startAutoSlide();
        }
      });
    }, {
      threshold: 0.3
    });

    observer.observe(section);
  }

  document.addEventListener("DOMContentLoaded", observeSection);
</script>