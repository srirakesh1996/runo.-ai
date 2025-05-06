<?php include('doctype.php'); ?>

<head>

	<!-- Page Title -->
  <title>Runo - Best Outbound Call Center CRM with auto dialer for Telecalling</title>

<?php include('head.php'); ?>


</head>
<body>
<div style="background:#000" id="home">

 <!-- Preloader Start -->
 <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="img/logo.png" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <?php include('home-banner.php'); ?>

    <?php include('home-clients.php'); ?>

    <?php include('home-deals.php'); ?>
    
    <?php include('home-demo.php'); ?>

    <?php include('home-features.php'); ?>

    <?php include('home-cta.php'); ?>

    <?php include('home-leads.php'); ?>

    <?php include('home-comparision.php'); ?>

    <?php include('home-testimonials.php'); ?>

    <?php include('home-faqs.php'); ?>
  
    <?php include('home-contact.php'); ?>

    </div>

    
    <?php //include('footer.php'); ?>

    <?php include('footerjs.php'); ?>
    <script>
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.header-sticky');
    if (window.scrollY > 100) {
      header.classList.add('active');
    } else {
      header.classList.remove('active');
    }
  });
</script>

    </body>

</html>