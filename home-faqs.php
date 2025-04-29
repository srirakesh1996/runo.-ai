<!-- Our Faqs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>Got Doubts? Let’s Smash ‘Em Together</h2>
            </div>         
            
            <div class="col-lg-11" style="display:block;margin:0 auto">
                <!-- FAQ Buttons Start -->
                <div class="faq-buttons wow fadeInUp" data-wow-delay="0.5s">
                    
                    <div class="faq-item active">
                        <button class="faq-question">Is Runo really the CRM of the future? Or just a fancy gimmick?</button>
                        <div class="faq-answer" style="display: block;">
                            <p>Gimmick? Nah. Runo’s like the Terminator of CRMs. It doesn’t just show up, it crushes the competition and takes over. The future is here, and it’s powered by Runo.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Can Runo handle my sales team’s chaos?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What happens if my team forgets to use Runo?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Does Runo come with a manual? Because I hate reading.</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How much of my time is Runo gonna steal?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Is Runo for people who don’t like wasting time?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Can Runo really help me beat the competition?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Will Runo give me superpowers?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How easy is it to switch from my old CRM to Runo?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque aliquam odio et faucibus.</p>
                        </div>
                    </div>

                </div>
                <!-- FAQ Buttons End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Faqs Section End -->

<!-- Add Some Custom Script -->
<script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            faqItems.forEach(i => {
                i.classList.remove('active');
                if (i.querySelector('.faq-answer')) {
                    i.querySelector('.faq-answer').style.display = 'none';
                }
            });
            item.classList.add('active');
            if (item.querySelector('.faq-answer')) {
                item.querySelector('.faq-answer').style.display = 'block';
            }
        });
    });
</script>
