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


</body>
</html>



