<script src="https://cdn.jsdelivr.net/npm/allminjs@latest/allmin.min.js"></script>


<!-- Demo Section Start -->
<section class="demo-section">
  <div class="container">
    <div class="row">
      <!-- Section Title -->
      <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
        <h2>Experience Runo AI in Action: Try Our Interactive Demo</h2>
        <p>Perfect for lean teams to get started fast.</p>
      </div>
      <!-- Video Wrapper -->
      <div class="video-wrapper wow zoomIn" data-wow-delay="0.4s" style="position: relative;background: linear-gradient(107.57deg, #FF5730 0%, #FFCC00 23.09%, #0065F2 47.82%, #5E33EC 74.03%, #FF5730 100%);">
        <img src="img/video.webp" alt="Demo Video" class="video-thumbnail" style="width: 100%; height: auto; border-radius: 12px;">
        <button class="play-button" id="openModal"> <i class="fas fa-play"></i></button>
      </div>
      <!-- Modal -->
      <div id="videoModal" class="modal">
        <div class="vid-modal-content">
          <span class="close-button" id="closeModal">&times;</span>
          <iframe id="youtubeVideo" width="100%" height="400" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <!-- Hero Button -->
      <div class="hero-btn mt-50 demo-btn text-center wow fadeInUp" data-wow-delay="0.6s">
        <a href="contact.html" class="btn-default btn-highlighted">Start Your 10-Day Free Trial</a>
        <p style="font-size:13px">No Credit Card required</p>
      </div>
    </div>
  </div>
</section>
<script>
  const openModal = document.getElementById('openModal');
  const closeModal = document.getElementById('closeModal');
  const videoModal = document.getElementById('videoModal');
  const youtubeVideo = document.getElementById('youtubeVideo');

  openModal.addEventListener('click', () => {
    videoModal.style.display = 'block';
    youtubeVideo.src = "https://www.youtube.com/embed/2bSKlD-nVbg?si=BwgrkqairEzYqfpF"; // Replace YOUR_VIDEO_ID
  });
  closeModal.addEventListener('click', () => {
    videoModal.style.display = 'none';
    youtubeVideo.src = "";
  });

  window.addEventListener('click', (e) => {
    if (e.target === videoModal) {
      videoModal.style.display = 'none';
      youtubeVideo.src = "";
    }
  });
</script>