    <!-- <footer> -->
        <!-- <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p> -->
    <!-- </footer> -->






  <footer>
    <div class="container">
      <p>&copy; 2025 Pullup Recs. All Rights Reserved.</p>
    </div>
  </footer>


    <?php wp_footer(); // Hook for scripts, etc. ?>


    <script>



// Toggle the mobile menu when the burger icon is clicked
const mobileMenu = document.getElementById("mobile-menu");
const navLinks = document.getElementById("nav-links");

mobileMenu.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    // alert("done");
});

    </script>


<script>

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 1,              // Number of items per slide
    loop: true,            // Infinite loop
    margin: 10,            // Space between items
    nav: true,             // Show next/prev buttons
    autoplay: true,        // Enable auto play
    autoplayTimeout: 3000, // Auto play interval
    dots: true             // Show dot indicators
  });
});

</script>


</body>
</html>



