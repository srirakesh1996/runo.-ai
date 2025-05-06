<!-- Styles -->
<style>
  .tab-content {
    min-height: 300px;
  }

  .left-tabs {
    position: relative;
    border-radius: 15px;
    padding: 20px 15px 20px 30px;
    overflow: hidden;
  }

  .tab-btn {
    font-size: 17px !important;
    line-height: 1.6;
    color: white;
    text-align: left;
    background: none;
    border: none;
    width: 100%;
    padding: 15px;
    font-weight: bold;
    border-radius: 10px;
    background-color: transparent;
    position: relative;
    transition: background 0.3s ease;
    z-index: 2;
  }

  .tab-btn:hover {
    background: #222;
  }

  .tab-btn.active {
    background-color: #292929;
  }

  .tab-btn p {
    font-size: 15px;
    font-weight: normal;
    color: #ccc;
    margin: 8px 0 0;
    display: none;
    transition: all 0.3s ease;
  }

  .tab-btn.active p {
    display: block;
  }

  .scroll-bar {
    position: absolute;
    left: 0;
    top: 20px;
    width: 6px;
    background-color: #444;
    border-radius: 5px;
    z-index: 1;
    height: calc(100% - 40px);
  }

  .scroll-indicator {
    position: absolute;
    left: 0;
    width: 6px;
    background-color: orange;
    border-radius: 5px;
    z-index: 2;
    top: 20px;
    height: 0;
  }

  .img-preview {
    max-width: 100%;
    border-radius: 20px;
    height: auto;
  }
</style>

<!-- HTML -->
<section class="deals-section" id="dealsSection">
  <img src="img/tri.png" class="motion-deals" data-wow-delay="0.5s">
  <img src="img/tri2.png" class="motion-deals2" data-wow-delay="0.7s">
  <div class="container py-5">
    <div class="row deals-content">
      <h2 class="text-center mb-4">Whooosh…That’s the Sound of Closing Deals Faster</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="left-tabs" id="tabContainer">
            <div class="scroll-bar"></div>
            <div class="scroll-indicator" id="scrollIndicator"></div>
            <div class="btn-group-vertical w-100" id="tabButtons">
              <button class="tab-btn active" data-bs-target="#tab1">
                No more RNRs with Direct SIM Calling
                <p>Improved call connect ratio (>78% rate). Our SIM-based call management system ensures your number appears genuine, not a potential spam.</p>
              </button>
              <button class="tab-btn" data-bs-target="#tab2">
                Qualify Calls like a Pro with AI Call Scoring
                <p>Calls are recorded, transcribed, and summarized, with AI providing sentiment analysis and quality scores.</p>
              </button>
              <button class="tab-btn" data-bs-target="#tab3">
                Never Lose a Deal to Missed Follow-ups
                <p>Get automated reminders to ensure timely follow-ups for every lead on calls or WhatsApp.</p>
              </button>
              <button class="tab-btn" data-bs-target="#tab4">
                Know who’s crushing it. And who’s faking it.
                <p>Use live team tracking to monitor who in your team is active and how they're performing in real-time.</p>
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tab-content text-center">
            <div class="tab-pane fade show active" id="tab1">
              <img src="img/deals1.png" class="img-preview" alt="Tab 1 Image">
            </div>
            <div class="tab-pane fade" id="tab2">
              <img src="img/deals1.png" class="img-preview" alt="Tab 2 Image">
            </div>
            <div class="tab-pane fade" id="tab3">
              <img src="img/deals1.png" class="img-preview" alt="Tab 3 Image">
            </div>
            <div class="tab-pane fade" id="tab4">
              <img src="img/deals1.png" class="img-preview" alt="Tab 4 Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  const tabs = document.querySelectorAll(".tab-btn");
  const panes = document.querySelectorAll(".tab-pane");
  const scrollIndicator = document.getElementById("scrollIndicator");

  let index = 0;

  function animateScrollIndicator(toTop, toHeight) {
    const startTop = parseFloat(scrollIndicator.style.top) || 0;
    const startHeight = parseFloat(scrollIndicator.style.height) || 0;
    const duration = 500;
    const startTime = performance.now();

    function animate(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      const newTop = startTop + (toTop - startTop) * progress;
      const newHeight = startHeight + (toHeight - startHeight) * progress;

      scrollIndicator.style.top = `${newTop}px`;
      scrollIndicator.style.height = `${newHeight}px`;

      if (progress < 1) {
        requestAnimationFrame(animate);
      }
    }

    requestAnimationFrame(animate);
  }

  function updateScrollIndicator(i) {
    const spacingTop = tabs[i].offsetTop + 20; // account for padding
    const tabHeight = tabs[i].offsetHeight;
    animateScrollIndicator(spacingTop, tabHeight);
  }

  function switchTab(i) {
    tabs.forEach(tab => tab.classList.remove("active"));
    panes.forEach(pane => pane.classList.remove("show", "active"));

    tabs[i].classList.add("active");
    const targetId = tabs[i].getAttribute("data-bs-target");
    document.querySelector(targetId).classList.add("show", "active");

    updateScrollIndicator(i);
    index = i;
  }

  tabs.forEach((tab, i) => {
    tab.addEventListener("click", () => switchTab(i));
  });

  setInterval(() => {
    index = (index + 1) % tabs.length;
    switchTab(index);
  }, 5000);

  window.onload = () => {
    updateScrollIndicator(0);
  };
</script>