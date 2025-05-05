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
            <p>Chaos? Runo thrives on chaos. It’s like a sales team with no brakes, just pure high-octane efficiency. Bring the madness, Runo can handle it.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">What happens if my team forgets to use Runo?</button>
        <div class="faq-answer">
            <p>Oh, trust us. They won’t forget. Runo’s got AI reminders like a mother-in-law on a mission. It’ll make sure no lead gets left behind.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Does Runo come with a manual? Because I hate reading.</button>
        <div class="faq-answer">
            <p>You won’t need one. It’s like the iPhone of CRMs, no instruction manual required. You’re gonna pick it up and be like, “How did I live without this?”</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">How much of my time is Runo gonna steal?</button>
        <div class="faq-answer">
            <p>Don’t worry. Runo’s not a time thief. It gives your time back. It handles the boring stuff so you can focus on the fun stuff (like, you know, making sales).</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Is Runo for people who don’t like wasting time?</button>
        <div class="faq-answer">
            <p>Oh yeah. If you hate wasting time, Runo’s your spirit animal. It does more in 30 minutes than your old CRM does in a week.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Can Runo really help me beat the competition?</button>
        <div class="faq-answer">
            <p>Beat them? Nah. Runo leaves them in the dust. Your competition won’t even know what hit ‘em. They’ll be like, “Where did they get that superpower?” (Spoiler: it’s Runo.)</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">Will Runo give me superpowers?</button>
        <div class="faq-answer">
            <p>Superpowers? You’ll have X-ray vision to see every lead, teleportation to close deals faster, and invisibility to sneak past your old CRM. Basically, you’ll be unstoppable.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">How easy is it to switch from my old CRM to Runo?</button>
        <div class="faq-answer">
            <p>Easier than changing the channel during a boring commercial. You won’t even miss the old one. Runo’s ready to make the switch smooth like butter.</p>
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
