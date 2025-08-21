
    <footer id="colophon" class="site-footer footer-section">
        <p class="text-white text-[12px] py-[9px] font-bold text-center bg-[var(--color-orange)] my-0 tracking-[1px]">
            Copyright © 株式会社C＆Cメディカル All rights Reserved.
        </p>
    </footer>
</div>

<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

window.addEventListener("scroll", function() {
    const header = document.getElementById("header");
    if (window.scrollY > 0) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>

<?php wp_footer(); ?>

</body>
</html>
