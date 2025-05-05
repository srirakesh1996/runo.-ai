<!-- Deals Section Start -->
<section class="deals-section" id="dealsSection">
<img src="img/tri.png" class="motion-deals" data-wow-delay="0.5s">
<img src="img/tri2.png" class="motion-deals2" data-wow-delay="0.7s">
  <div class="container py-4">
    <div class="row deals-content">
    
      <!-- Section Title -->
      <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
        <h2>Whooosh...That's the Sound of Closing Deals Faster</h2>
      </div> 
      
      <!-- Left Column -->
      <div class="col-md-5 wow fadeInLeft" data-wow-delay="0.4s">
        <div class="side-nav" id="textNav">
          <div class="deals-item active" data-index="0">
            <h5>No more RNRs</h5>
            <p>Improved call connect ratio (>78% rate). Our SIM-based call management system ensures your number appears genuine, not a potential spam.</p>
          </div>
          <div class="deals-item" data-index="1">
            <h5>Qualify Calls with AI</h5>
            <p>Calls are recorded, transcribed, and summarized, with AI providing sentiment analysis and quality scores.
            </p>
          </div>
          <div class="deals-item" data-index="2">
            <h5>Never Miss Follow-Ups</h5>
            <p>Get automated reminders to ensure timely follow-ups for every lead on calls or Whatsapp</p>
          </div>
          <div class="deals-item" data-index="3">
            <h5>Track Performance</h5>
            <p>Use live team tracking to monitor who in your team is active and their performing in real-time</p>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-7 wow fadeInRight" data-wow-delay="0.6s">
        <div class="image-display" id="imageContainer" style="position: relative; overflow: hidden;">
          <img id="mainImage" src="img/deals1.png" alt="Display" class="fade-transition" />
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Styles for Fade Transition -->
<style>
.fade-transition {
  transition: opacity 0.6s ease-in-out;
}

.fade-out {
  opacity: 0;
}
</style>

<!-- Script -->
<script>
  const navItems = document.querySelectorAll(".deals-item");
  const mainImage = document.getElementById("mainImage");
  const dealsSection = document.getElementById("dealsSection");

  const data = [
    { img: "img/deals1.png" },
    { img: "https://placehold.co/800x450?text=Image+2" },
    { img: "https://placehold.co/800x450?text=Image+3" },
    { img: "https://placehold.co/800x450?text=Image+4" }
  ];

  let currentIndex = 0;
  let intervalStarted = false;
  let switchInterval;

  function updateContent(index) {
    // Add fade-out effect
    mainImage.classList.add('fade-out');

    setTimeout(() => {
      mainImage.src = data[index].img;
      mainImage.classList.remove('fade-out');
    }, 500); // wait half transition time

    navItems.forEach(item => item.classList.remove("active"));
    navItems[index].classList.add("active");

    currentIndex = index;
  }

  // Manual navigation on click
  navItems.forEach(item => {
    item.addEventListener("click", () => {
      updateContent(parseInt(item.getAttribute("data-index")));
    });
  });

  // Start switching when in view
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !intervalStarted) {
        intervalStarted = true;
        switchInterval = setInterval(() => {
          const nextIndex = (currentIndex + 1) % data.length;
          updateContent(nextIndex);
        }, 500000); // Switch every 5 sec
      }
    });
  }, { threshold: 0.5 }); // 50% visible

  observer.observe(dealsSection);
</script>

