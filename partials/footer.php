<?php
/** Footer + shared scripts. Expects $is_home (set by the page, defaults false). */
$is_home = $is_home ?? false;
$h = $is_home ? '' : '/';
?>
  <!-- ── FOOTER ── -->
  <footer class="footer" id="kontakt">
    <div class="container">
      <div class="footer-grid">

        <div>
          <div class="footer-logo">ProDriving</div>
          <p class="footer-desc">Køreskole i Aalborg med personlig undervisning. Små hold. Vi tager hensyn til ADHD og ordblindhed.</p>
          <a href="tel:+4560441223" class="btn btn-wa" style="font-size:.88rem; padding:.65rem 1.3rem;">
            Ring: 60 44 12 23
          </a>
        </div>

        <div>
          <h4>Ydelser</h4>
          <ul class="footer-links">
            <li><a href="/korekort-til-bil-aalborg/">Kørekort til bil</a></li>
            <li><a href="/generhvervelse-aalborg/">Generhvervelse</a></li>
            <li><a href="/saerlig-koreundervisning/">Særlig køreundervisning</a></li>
            <li><a href="/rutinetimer-aalborg/">Rutinetimer</a></li>
          </ul>
        </div>

        <div>
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="<?= $h ?>#priser">Priser</a></li>
            <li><a href="<?= $h ?>#hold-start">Hold start</a></li>
            <li><a href="<?= $h ?>#faq">FAQ</a></li>
            <li><a href="/guides/">Guides</a></li>
            <li><a href="<?= $h ?>#om">Om Carina</a></li>
          </ul>
        </div>

        <div>
          <h4>Kontakt</h4>
          <div class="footer-ci">
            <span class="ic">💬</span>
            <div>
              <a href="tel:+4560441223">Telefon: 60 44 12 23</a>
            </div>
          </div>
          <div class="footer-ci">
            <span class="ic">📍</span>
            <div>Enggårdsgade 5, kld.<br>9000 Aalborg</div>
          </div>
          <div class="footer-ci">
            <span class="ic">🏢</span>
            <div>CVR: 30416627</div>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <span>© 2026 ProDriving · CVR 30416627</span>
        <span>Enggårdsgade 5, kld., 9000 Aalborg</span>
        <a href="#" onclick="openPolicy(event)" style="color:rgba(255,255,255,.55); text-decoration:underline; font-size:.78rem;">Privatlivspolitik</a>
      </div>
    </div>
  </footer>

  <script>
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.toggle('open');
      hamburger.classList.toggle('open', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    function closeMenu() {
      mobileMenu.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }

    // Contact form
    const tilmeldForm = document.getElementById('tilmeldForm');
    if (tilmeldForm) {
      tilmeldForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const btn = tilmeldForm.querySelector('button[type="submit"]');
        btn.textContent = 'Sender…'; btn.disabled = true;
        const res = await fetch(tilmeldForm.action, {
          method: 'POST', body: new FormData(tilmeldForm),
          headers: { 'Accept': 'application/json' }
        });
        if (res.ok) {
          tilmeldForm.reset();
          document.getElementById('formSuccess').style.display = 'block';
          btn.style.display = 'none';
        } else {
          btn.textContent = 'Prøv igen'; btn.disabled = false;
        }
      });
    }

    // Cookie consent
    const cookieBar = document.getElementById('cookieBar');
    const policyOverlay = document.getElementById('policyOverlay');

    if (localStorage.getItem('cookieConsent')) {
      cookieBar.classList.add('hidden');
    }

    function acceptCookies() {
      localStorage.setItem('cookieConsent', 'accepted');
      cookieBar.classList.add('hidden');
    }

    function rejectCookies() {
      localStorage.setItem('cookieConsent', 'rejected');
      cookieBar.classList.add('hidden');
    }

    function openPolicy(e) {
      e.preventDefault();
      policyOverlay.classList.add('open');
      document.body.style.overflow = 'hidden';
    }

    function closePolicy() {
      policyOverlay.classList.remove('open');
      document.body.style.overflow = '';
    }

    policyOverlay.addEventListener('click', (e) => {
      if (e.target === policyOverlay) closePolicy();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closePolicy();
    });

    // FAQ accordion
    document.querySelectorAll('.faq-q').forEach(btn => {
      btn.addEventListener('click', () => {
        const item   = btn.closest('.faq-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
      });
    });
  </script>

  <!-- ── SNOW (active 1–25 Dec) ── -->
  <canvas id="snowCanvas" style="position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:9999;display:none;"></canvas>
  <script>
    (function(){
      const now = new Date();
      const m = now.getMonth(); // 0-indexed, 11 = December
      const d = now.getDate();
      if (!(m === 11 && d >= 1 && d <= 25)) return;

      const canvas = document.getElementById('snowCanvas');
      canvas.style.display = 'block';
      const ctx = canvas.getContext('2d');
      let W, H, flakes = [];

      function resize() {
        W = canvas.width  = window.innerWidth;
        H = canvas.height = window.innerHeight;
      }
      window.addEventListener('resize', resize);
      resize();

      function rand(a, b) { return a + Math.random() * (b - a); }

      function init() {
        flakes = [];
        const count = Math.floor(W * 0.08);
        for (let i = 0; i < count; i++) {
          flakes.push({
            x:     rand(0, W),
            y:     rand(-H, H),
            r:     rand(1.5, 4.5),
            speed: rand(0.6, 2.2),
            drift: rand(-0.4, 0.4),
            opacity: rand(0.5, 0.95)
          });
        }
      }
      init();

      function draw() {
        ctx.clearRect(0, 0, W, H);
        for (const f of flakes) {
          ctx.beginPath();
          ctx.arc(f.x, f.y, f.r, 0, Math.PI * 2);
          ctx.fillStyle = `rgba(255,255,255,${f.opacity})`;
          ctx.fill();

          f.y += f.speed;
          f.x += f.drift;

          if (f.y > H + 10) { f.y = -10; f.x = rand(0, W); }
          if (f.x > W + 10) f.x = -10;
          if (f.x < -10)    f.x = W + 10;
        }
        requestAnimationFrame(draw);
      }
      draw();
    })();
  </script>

</body>
</html>
