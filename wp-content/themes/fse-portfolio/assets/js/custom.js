// Scroll to Top
document.addEventListener('DOMContentLoaded', () => {
  const fse_portfolio_btn = document.body.appendChild(document.createElement('button'));
  fse_portfolio_btn.className = 'return-to-top-btn';
  fse_portfolio_btn.innerHTML = '<span class="dashicons dashicons-arrow-up-alt"></span>';

  window.addEventListener('scroll', () =>
    fse_portfolio_btn.classList.toggle('show', window.scrollY > 300)
  );

  fse_portfolio_btn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
});

document.addEventListener("DOMContentLoaded", function () {
  // Combined tab functionality
  const tabs = document.querySelectorAll(".tab-btn");
  const cards = document.querySelectorAll(".event-card");
  const eventContainers = document.querySelectorAll("[id^='event-cards-']");
  const tabButtons = document.querySelectorAll("[id^='tab-btn-']");

  function fse_portfolio_handleTabDisplay(index) {
    // Handle main tab switching
    eventContainers.forEach((container, i) => {
      const isActive = i === index;
      container.style.display = isActive ? 'block' : 'none';
      container.classList.toggle('active', isActive);
    });

    // Update tab button states
    tabButtons.forEach((btn, i) => btn.classList.toggle('active', i === index));
  }

  // Event listeners for category filtering
  tabs.forEach(tab => {
    tab.addEventListener("click", function() {
      tabs.forEach(t => t.classList.remove("active"));
      this.classList.add("active");

      const category = this.getAttribute("data-category");
      cards.forEach(card => {
        card.style.display = (category === "all" || category === card.getAttribute("data-category")) 
          ? "block" 
          : "none";
      });
    });
  });

  // Event listeners for tab switching
  tabButtons.forEach((btn, index) => {
    btn.addEventListener('click', () => fse_portfolio_handleTabDisplay(index));
  });

  // Initialize first tab
  fse_portfolio_handleTabDisplay(0);
   wow = new WOW(
    {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
  }
  )
  wow.init();
});