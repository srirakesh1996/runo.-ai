<!-- Demo Section Start -->
<section class="demo-section">
  <div class="container">

  <img src="img/tri2.png" class="motion-demo" data-wow-delay="0.5s">
<img src="img/tri.png" class="motion-demo2" data-wow-delay="0.7s">
    <div class="row">

      <!-- Section Title -->
      <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
        <h2>Experience Runo AI in Action: Try Our<br> Interactive Demo</h2>
        <p>Perfect for small teams to get started fast.</p>
      </div>

      <!-- Video Wrapper -->
      <div class="video-wrapper wow zoomIn" data-wow-delay="0.4s" style="position: relative;">
        <img src="img/video.webp" alt="Demo Video" class="video-thumbnail" style="width: 100%; height: auto; border-radius: 12px;">
        <button class="play-button" id="openModal">&#9658;</button>
      </div>

      <!-- Modal -->
      <div id="videoModal" class="modal">
        <div class="modal-content">
          <span class="close-button" id="closeModal">&times;</span>
          <iframe id="youtubeVideo" width="100%" height="400" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Hero Button -->
      <div class="hero-btn demo-btn text-center wow fadeInUp" data-wow-delay="0.6s">
        <a href="contact.html" class="btn-default btn-highlighted">Start 7-day free trial</a>
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