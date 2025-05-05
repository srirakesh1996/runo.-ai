
    <style>
.testimonial-section {
    position: relative;
    z-index: 0;
}

.testimonial-swiper {
  width: 100%;
}

.testimonial-slide {
  display: flex;
  justify-content: center;
}

.testimonial-card {
  max-width: 950px;
  position: relative;
  gap: 1.5rem;
  padding-left: 170px;
}

.testimonial-image {
  position: absolute;
  left: 14%;
 
  transform: translateX(-50%);
  z-index: 2;
}

.testimonial-image img {
    height: 300px;
    object-fit: cover;
}

.testimonial-content {
  background: #fff;
  max-width: 700px;
}

.swiper-pagination-bullet {
  background-color: #fff !important;
  opacity: 0.6;
}

.swiper-pagination-bullet-active {
  background-color: #f15b2a !important;
  opacity: 1;
}

#testimonials-content h5{

    margin-left:160px;
}

#testimonials-content small{

margin-left:160px;
}


#testimonials-content p{

margin-left:160px;
}

.content-background {

    background-color: rgba(35, 34, 33, 0.8);
    padding: 20px;
    border-radius: 30px;

}

.testimonial-section .swiper-pagination {

    bottom: 0px !important;
}
</style>
<section class="testimonial-section py-5 bg-black">
  <div class="container text-center mb-5">
  
        <!-- Section Title -->
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
      <h2>We’re Not Saying Runo’s Magic…<br>But People Think It Is</h2>
    </div>

  </div>

  <div class="container">
    <div class="swiper testimonial-swiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide testimonial-slide wow fadeInUp" data-wow-delay="0.6s">
          <div class="testimonial-card position-relative d-flex align-items-center justify-content-start p-4">
            <div class="testimonial-image">
              <img src="img/man1.png" alt="Client" class="img-fluid rounded-3">
            </div>
            <div class="content-background">
              <div class="testimonial-content bg-white p-4 rounded-4 shadow" id="testimonials-content">
                <h5 class="text-danger fw-bold mb-1">ISHAN GUPTA</h5>
                <small class="text-muted d-block mb-2">Founder, Q-in-1</small>
                <p class="mb-0 text-dark">
                  As a fast growing organization in edu-tech, always felt the need to manage business calls for enhanced customer experience.
                  We did reach out to a few cloud-based service providers, but somehow, due to very high pricing and calls originating from
                  virtual numbers, was not very convincing.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Duplicate .testimonial-slide for more testimonials -->
        <div class="swiper-slide testimonial-slide wow fadeInUp" data-wow-delay="0.8s">
          <div class="testimonial-card position-relative d-flex align-items-center justify-content-start p-4">
            <div class="testimonial-image">
              <img src="img/man1.png" alt="Client" class="img-fluid rounded-3">
            </div>
            <div class="content-background">
              <div class="testimonial-content bg-white p-4 rounded-4 shadow" id="testimonials-content">
                <h5 class="text-danger fw-bold mb-1">RAVI SHARMA</h5>
                <small class="text-muted d-block mb-2">CEO, Innovate Solutions</small>
                <p class="mb-0 text-dark">
                  Runo has completely transformed our sales team's ability to track and manage client communications seamlessly.
                  The ease of use and integration with our CRM has saved us hours of work every week.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
