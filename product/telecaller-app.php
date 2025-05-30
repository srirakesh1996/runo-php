<?php include('doctype.php'); ?>

<head>

    <!-- Page Title -->
    <title>Runo - Best Outbound Call Center CRM with auto dialer for Telecalling</title>

    <?php include('head.php'); ?>


</head>

<body>


    <?php include('preloader.php'); ?>

    <?php

    $page_name = 'Home';
    $form_uuid = '2eddbc70-045d-41ff-8866-dbf34f73f6f1';

    include('home-modal.php');
    ?>



    <?php include('header.php'); ?>





    <div class="telecaller-hero mb-20">
        <div class="container">
            <!-- Header Start -->

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <div class="banner-cont">
                            <div class="section-title dark-section wow fadeInUpCustom" data-wow-delay="0.3s" style="width: 100%">
                                <h1 class="wow fadeInUpCustom" data-wow-delay="0.4s">
                                    SIM-Based <br>
                                    Telecaller App <br>With Built-In CRM
                                </h1>
                                <p>Your dialer, CRM, and live call tracker, rolled into one app
                                </p>

                                <ul>
                                    <li>SIM-based calling for higher call connection rates</li>
                                    <li>Designed for businesses with 5 to 500+ agents</li>
                                    <li>Monitor team activity, follow-ups, and call status in one view</li>
                                    <li>Works without cloud telephony or PBX setup</li>
                                    <li>Plug and play in 30 minutes, ideal for mobile-first teams</li>
                                </ul>


                                <!-- Hero Buttons -->
                                <div class="hero-body wow fadeInUpCustom mt-50" data-wow-delay="0.6s" data-wow-duration="1s">
                                    <div class="hero-btn">
                                        <a href="contact" class="btn-plain">Book a Demo</a>
                                        <p class="banner-btn1">&nbsp;</p>
                                    </div>
                                    <div class="hero-btn">
                                        <button class="btn-default btn-highlighted" type="button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#contactModal">Start 10-day free trial</button>
                                        <p style="font-size:13px;margin-top:5px;text-align:center">No Credit Card required</p>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="https://runo-ai-website.onrender.com/img/telecaller/telecaller.webp" class="img-fluid" alt="Runo Telecaller CRM" style="width: 80%;margin: 0 auto;display: block;">

                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->



    <?php include('clients.php'); ?>


    <!-- why choose runo-->
    <section class="deals-section mt-20" id="dealsSection">
        <div class="container">
            <div class="row deals-content">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Why Growing Teams Choose Runo</h2>
                </div>

                <!-- Tabs and Mobile Images -->
                <div class="col-md-6">
                    <div class="left-tabs" id="tabContainer">
                        <div class="scroll-bar"></div>
                        <div class="scroll-indicator" id="scrollIndicator"></div>
                        <div class="btn-group-vertical w-100" id="tabButtons">
                            <!-- Tab Buttons -->
                            <button class="tab-btn active" data-tab-index="0" data-bs-target="#tab1">
                                <span>Connect 3x Faster</span>
                                <p>No more shuffling through Excel sheets. Leads are auto-assigned and queued for calling, so your agents can start dialing instantly.</p>
                            </button>
                            <div class="mobile-tab-img d-md-none" id="mobileImg0">
                                <img src="https://runo-ai-website.onrender.com/img/telecaller/3x.webp" class="img-preview" alt="Tab 1 Image">
                            </div>

                            <button class="tab-btn" data-tab-index="1" data-bs-target="#tab2">
                                <span>Independent of cloud telephony, IVRs, or PBX</span>
                                <p>Call directly from your phone’s SIM without needing a cloud setup or high-speed internet.</p>
                            </button>
                            <div class="mobile-tab-img d-md-none" id="mobileImg1" style="display:none;">
                                <img src="https://runo-ai-website.onrender.com/img/telecaller/cloud.webp" class="img-preview" alt="Tab 2 Image">
                            </div>

                            <button class="tab-btn" data-tab-index="2" data-bs-target="#tab3">
                                <span>Track Every Call, Follow-Up, and Agent in Real Time</span>
                                <p>View live call activity, follow-up status, and team performance in one dashboard.</p>
                            </button>
                            <div class="mobile-tab-img d-md-none" id="mobileImg2" style="display:none;">
                                <img src="https://runo-ai-website.onrender.com/img/telecaller/team.webp" class="img-preview" alt="Tab 3 Image">
                            </div>

                            <button class="tab-btn" data-tab-index="3" data-bs-target="#tab4">
                                <span>Cut Telecalling Costs by 60%</span>
                                <p>One app replaces your dialer, CRM, and call tracker. No extra tools. No cloud bills.</p>
                            </button>
                            <div class="mobile-tab-img d-md-none" id="mobileImg3" style="display:none;">
                                <img src="https://runo-ai-website.onrender.com/img/telecaller/cut60.webp" class="img-preview" alt="Tab 4 Image">
                            </div>

                            <button class="tab-btn" data-tab-index="4" data-bs-target="#tab5">
                                <span>Zero training. Get Started in 30 minutes</span>
                                <p>Get started quickly with no IT help. Set up, onboard your team, and start calling in under 30 minutes</p>
                            </button>
                            <div class="mobile-tab-img d-md-none" id="mobileImg4" style="display:none;">
                                <img src="https://runo-ai-website.onrender.com/img/telecaller/zero.webp" class="img-preview" alt="Tab 5 Image">
                            </div>




                        </div>
                    </div>
                </div>

                <!-- Desktop Image Preview -->
                <div class="col-md-6 d-none d-md-block">
                    <div class="tab-content text-center">
                        <div class="tab-pane fade show active" id="tab1">
                            <img src="https://runo-ai-website.onrender.com/img/telecaller/3x.webp" class="img-preview" alt="Tab 1 Image">
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <img src="https://runo-ai-website.onrender.com/img/telecaller/cloud.webp" class="img-preview" alt="Tab 2 Image">
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <img src="https://runo-ai-website.onrender.com/img/telecaller/team.webp" class="img-preview" alt="Tab 3 Image">
                        </div>
                        <div class="tab-pane fade" id="tab4">
                            <img src="https://runo-ai-website.onrender.com/img/telecaller/cut60.webp" class="img-preview" alt="Tab 4 Image">
                        </div>
                        <div class="tab-pane fade" id="tab5">
                            <img src="https://runo-ai-website.onrender.com/img/telecaller/zero.webp" class="img-preview" alt="Tab 5 Image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
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
            const targetHeight = isMobile ? 138 : 90;
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

        function switchTab(i) {
            if (isAnimating || index === i) return;
            isAnimating = true;

            // Hide all mobile images
            const mobileImgs = document.querySelectorAll('.mobile-tab-img');
            mobileImgs.forEach(img => img.style.display = 'none');

            // Show active mobile image
            if (window.innerWidth <= 767) {
                const currentMobileImg = document.getElementById(`mobileImg${i}`);
                if (currentMobileImg) currentMobileImg.style.display = 'block';
            }

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

            currentPane.classList.remove("show", "active");
            nextPane.classList.add("show", "active");

            updateScrollIndicator(i);
            index = i;
            isAnimating = false;
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

    <!-- why choose runo ends-->


    <section class="features-section mt-70" id="features">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Features Built for High-Volume Telecalling
                </h2>
                <p class="feat-text">Designed to make your daily calling smoother and smarter</p>
            </div>
            <!-- Desktop Layout -->

            <div class="row d-none d-md-flex">
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/7.webp" class="img-fluid mb-2" alt="Auto Dialer">
                    <h5>Auto Dialer</h5>
                    <p class="feat-text">Designed to make your daily calling smoother and smarter</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/1.webp" class="img-fluid mb-2" alt="Advanced Caller ID">
                    <h5>Advanced Caller ID</h5>
                    <p class="feat-text">See the lead’s name, last interaction, and notes before every call</p>
                </div>
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/2.webp" class="img-fluid mb-2" alt="Call Recording">
                    <h5>Call Recording</h5>
                    <p class="feat-text">Record every call automatically for training, compliance, and audit purposes.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/9.webp" class="img-fluid mb-2" alt="Live Performance Dashboard">
                    <h5>Live Performance Dashboard</h5>
                    <p class="feat-text">Track daily calling metrics, follow-ups, and lead movement with visual reports.</p>
                </div>
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/6.webp" class="img-fluid mb-2" alt="Follow-Up Notifications">
                    <h5>Follow-Up Alerts</h5>
                    <p class="feat-text">Get automatic reminders for pending follow-ups to avoid losing hot leads.</p>
                </div>




                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/lm.webp" class="img-fluid mb-2" alt="Lead Management">
                    <h5>Lead Management</h5>
                    <p class="feat-text">Capture, track, and update every lead in real time from a single dashboard.</p>
                </div>


                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/10.webp" class="img-fluid mb-2" alt="Auto Lead Allocation">
                    <h5>Auto Lead Allocation</h5>
                    <p class="feat-text">Distribute leads instantly to the right agent based on pre-set rules.</p>
                </div>
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/crm.webp" class="img-fluid mb-2" alt="CRM Integration">
                    <h5>CRM Integration</h5>
                    <p class="feat-text">Access lead details, call notes, and previous interactions without leaving the app.</p>
                </div>
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/3.webp" class="img-fluid mb-2" alt="Real-Time Team Tracking">
                    <h5>Real-Time Team Tracking</h5>
                    <p class="feat-text">Monitor agent activity live. See who is calling, who is idle, and who is behind on follow-ups.</p>
                </div>


                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/wa.webp" class="img-fluid mb-2" alt="WhatsApp Templates">
                    <h5>WhatsApp Templates</h5>
                    <p class="feat-text">Send pre-approved WhatsApp templates directly from the app after each call.</p>
                </div>
            </div>
            <!-- Desktop Layout -->

            <!-- Mobile Swiper Layout -->
            <!-- Mobile Swiper Layout (14 Features) -->
            <div class="swiper-container d-block d-md-none mt-4">
                <div class="swiper-wrapper text-center">
                    <!-- Feature Slides -->
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/7.webp" class="img-fluid mb-2" alt="Auto Dialer">
                        <h5>Auto Dialer</h5>
                        <p class="feat-text">Designed to make your daily calling smoother and smarter</p>
                    </div>

                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/1.webp" class="img-fluid mb-2" alt="Advanced Caller ID">
                        <h5>Advanced Caller ID</h5>
                        <p class="feat-text">See the lead’s name, last interaction, and notes before every call</p>
                    </div>


                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/2.webp" class="img-fluid mb-2" alt="Call Recording">
                        <h5>Call Recording</h5>
                        <p class="feat-text">Record every call automatically for training, compliance, and audit purposes.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/9.webp" class="img-fluid mb-2" alt="Live Performance Dashboard">
                        <h5>Live Performance Dashboard</h5>
                        <p class="feat-text">Track daily calling metrics, follow-ups, and lead movement with visual reports.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/6.webp" class="img-fluid mb-2" alt="Follow-Up Notifications">
                        <h5>Follow-Up Alerts</h5>
                        <p class="feat-text">Get automatic reminders for pending follow-ups to avoid losing hot leads.</p>
                    </div>


                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/lm.webp" class="img-fluid mb-2" alt="Lead Management">
                        <h5>Lead Management</h5>
                        <p class="feat-text">Capture, track, and update every lead in real time from a single dashboard.</p>
                    </div>



                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/10.webp" class="img-fluid mb-2" alt="Auto Lead Allocation">
                        <h5>Auto Lead Allocation</h5>
                        <p class="feat-text">Distribute leads instantly to the right agent based on pre-set rules.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/crm.webp" class="img-fluid mb-2" alt="CRM Integration">
                        <h5>CRM Integration</h5>
                        <p class="feat-text">Access lead details, call notes, and previous interactions without leaving the app.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/3.webp" class="img-fluid mb-2" alt="Real-Time Team Tracking">
                        <h5>Real-Time Team Tracking</h5>
                        <p class="feat-text">Monitor agent activity live. See who is calling, who is idle, and who is behind on follow-ups.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/wa.webp" class="img-fluid mb-2" alt="WhatsApp Templates">
                        <h5>WhatsApp Templates</h5>
                        <p class="feat-text">Send pre-approved WhatsApp templates directly from the app after each call.</p>
                    </div>

                </div>
                <!-- Custom navigation buttons below -->
                <div class="swiper-nav-buttons text-center">
                    <button class="swiper-custom-prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="swiper-custom-next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-custom-next',
                prevEl: '.swiper-custom-prev',
            },
        });
    </script>


    <!-- spin with your team Section Start -->

    <section class="home-app-cta wow animate__animated animate__fadeInUp mt-20" data-wow-delay="0.2s">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
                Give it a spin with your <br>
                team today
            </h2>
            <button class="btn-schedule wow animate__animated animate__zoomIn" data-wow-delay="0.6s">
                Start 10-day free trial
            </button>
        </div>
    </section>


    <!-- spin with your team Section Ends -->



    <section class="features-section mt-70" id="features">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>
                    Make Smarter Calls With <br>
                    <span class="gradient-text" style="background: linear-gradient(92.13deg, #FF5730 32.73%, #5E33EC 43.87%, #0065F2 55%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;display: inline-block;">Runo’s AI</span> Tools
                </h2>


                <p class="feat-text">Power up your team with real call intelligence</p>
            </div>
            <!-- Desktop Layout -->

            <div class="row d-none d-md-flex">
                <!-- Feature card 1 -->
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/ts.webp" class="img-fluid mb-2" alt="AI Call Transcripts">
                    <h5>AI Call Transcripts</h5>
                    <p class="feat-text">Get a complete, accurate text version of every call. No need to re-listen or take notes.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/8.webp" class="img-fluid mb-2" alt="AI Call Summaries">
                    <h5>AI Call Summaries</h5>
                    <p class="feat-text">View the key highlights from each call. Quickly understand what was discussed and what needs to happen next.</p>
                </div>
                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/5.webp" class="img-fluid mb-2" alt="AI Sentiment Analysis">
                    <h5>Sentiment Analysis</h5>
                    <p class="feat-text">See whether a call went positively or negatively. Spot unhappy leads before they drop off.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/mom.webp" class="img-fluid mb-2" alt="Meeting Notes (MoM)">
                    <h5>Meeting Notes (MoM)</h5>
                    <p class="feat-text">Captures key takeaways, urgency level, and action items from every call for faster follow-ups.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/dummy2.png" class="img-fluid mb-2" alt="Agent-Customer Talk Ratio">
                    <h5>Agent-Customer Talk Ratio</h5>
                    <p class="feat-text">Check how much your agents talk vs how much the customer speaks. Helps improve listening skills and pitch balance.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/dummy2.png" class="img-fluid mb-2" alt="Call Quality Scoring">
                    <h5>Call Quality Scoring</h5>
                    <p class="feat-text">Every call gets a quality score based on clarity, filler words, and interruptions. Use it for coaching & performance reviews.</p>
                </div>

                <div class="col-md-4 mb-4 text-center zoom-hover">
                    <img src="https://runo-ai-website.onrender.com/img/feature/4.webp" class="img-fluid mb-2" alt="AI Chat Assistant">
                    <h5>AI Assistant</h5>
                    <p class="feat-text">Ask questions like “show me missed follow-ups” or “how many positive calls today” and get instant answers from your call data.</p>
                </div>


            </div>
            <!-- Desktop Layout -->

            <!-- Mobile Swiper Layout -->
            <!-- Mobile Swiper Layout (14 Features) -->
            <div class="swiper-container2 d-block d-md-none mt-4">
                <div class="swiper-wrapper text-center">
                    <!-- Feature Slides -->
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/1.webp" class="img-fluid mb-2" alt="AI Call Transcripts">
                        <h5>AI Call Transcripts</h5>
                        <p class="feat-text">Get a complete, accurate text version of every call. No need to re-listen or take notes.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/8.webp" class="img-fluid mb-2" alt="AI Call Summaries">
                        <h5>AI Call Summaries</h5>
                        <p class="feat-text">View the key highlights from each call. Quickly understand what was discussed and what needs to happen next.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/5.webp" class="img-fluid mb-2" alt="AI Sentiment Analysis">
                        <h5>Sentiment Analysis</h5>
                        <p class="feat-text">See whether a call went positively or negatively. Spot unhappy leads before they drop off.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/5.webp" class="img-fluid mb-2" alt="Meeting Notes (MoM)">
                        <h5>Meeting Notes (MoM)</h5>
                        <p class="feat-text">Captures key takeaways, urgency level, and action items from every call for faster follow-ups.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/dummy2.png" class="img-fluid mb-2" alt="Agent-Customer Talk Ratio">
                        <h5>Agent-Customer Talk Ratio</h5>
                        <p class="feat-text">Check how much your agents talk vs how much the customer speaks. Helps improve listening skills and pitch balance.</p>
                    </div>

                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/dummy2.png" class="img-fluid mb-2" alt="Call Quality Scoring">
                        <h5>Call Quality Scoring</h5>
                        <p class="feat-text">Every call gets a quality score based on clarity, filler words, and interruptions. Use it for coaching & performance reviews.</p>
                    </div>

                    <div class="swiper-slide">
                        <img src="https://runo-ai-website.onrender.com/img/feature/4.webp" class="img-fluid mb-2" alt="AI Chat Assistant">
                        <h5>AI Assistant</h5>
                        <p class="feat-text">Ask questions like “show me missed follow-ups” or “how many positive calls today” and get instant answers from your call data.</p>
                    </div>

                </div>
                <!-- Custom navigation buttons below -->
                <div class="swiper-nav-buttons text-center">
                    <button class="swiper-custom-prev1">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="swiper-custom-next1">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        var swiper = new Swiper('.swiper-container2', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-custom-next1',
                prevEl: '.swiper-custom-prev1',
            },
        });
    </script>


    <section class="home-app-cta wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <h2 class="wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
                Take a closer look at how Runo <br>
                works for real teams like yours
            </h2>
            <button class="btn-schedule wow animate__animated animate__zoomIn" data-wow-delay="0.6s">
                Book a Demo
            </button>
        </div>
    </section>





    <?php include('testimonials.php'); ?>



    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Got Questions?
                        We’ve Got Answers
                    </h2>
                </div>
                <div class="col-lg-10" style="margin:0 auto">
                    <div class="page-faqs-catagery">
                        <div class="faq-accordion page-faq-accordion" id="runo_faqs">
                            <div class="faq-accordion" id="accordionRuno">
                                <!-- FAQ Items Start -->
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What is a SIM-based telecaller app?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            A SIM-based telecaller app allows your team to make business calls using their phone’s SIM card. It also helps manage leads, track calls, and follow up with prospects, all from within the app, without relying on cloud telephony.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            How does Runo work for telecalling?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Runo lets agents call from their own SIM, update lead details, get follow-up reminders, and log calls. Managers can track performance and call activity in real time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            How is this different from cloud or VoIP apps?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Cloud or VoIP apps rely on internet-based calling using virtual or masked numbers, which often get flagged or ignored by customers. Runo uses your team’s actual SIM numbers, so calls appear like regular mobile calls and are more likely to be answered. Unlike cloud systems, Runo doesn’t need internet, PBX, or complex setup. It works directly from your phone, with better call quality and higher connect rates.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            Can I track outgoing and incoming calls?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. Runo tracks and logs both outgoing and incoming calls made through the app.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            Does it support call recording?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. All calls are automatically recorded and stored securely for future reference.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            Does Runo offer CRM integration?
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. Runo has a built-in CRM and also integrates with tools like Zoho, LeadSquared, and others.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            Can I monitor agent performance?
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. You can view call activity, follow-up progress, and live agent status in one dashboard.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Is this suitable for remote or field teams?
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. Runo works anywhere your SIM works, making it perfect for remote and on-the-go teams.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Can I automate follow-ups or reminders?
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            The app automatically reminds agents when it’s time to follow up on leads.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Is my call data secure?
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Yes. Runo encrypts and protects all call logs, recordings, and lead data.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp">
                                    <h2 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Who is this app meant for?
                                        </button>
                                    </h2>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionRuno">
                                        <div class="accordion-body">
                                            Runo is ideal for any business that depends on telecalling, including sales teams, customer support teams, and telecalling agencies in industries like real estate, finance, education, and healthcare.
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Items End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faq End -->

    <!-- Security Section with WOW animations -->
    <section class="security-section wow fadeInUp" data-wow-delay="0.2s" style="background: #F5F3ED;margin: 0px auto 50px auto;">
        <div class="row align-items-center">
            <!-- Left Text -->
            <div class="col-md-7 security-text">
                <h2>Committed to the Highest <br> Standards of Data Protection
                </h2>
            </div>
            <!-- Right Image -->
            <div class="col-md-5 text-md-end text-center security-badges">s
                <img src="https://runo-ai-website.onrender.com/img/security.webp" alt="ISO Badge" class="img-fluid">
            </div>
        </div>
    </section>



    <?php include('home-contact.php'); ?>


    <?php include('footer.php'); ?>

    <?php include('footerjs.php'); ?>


</body>

</html>