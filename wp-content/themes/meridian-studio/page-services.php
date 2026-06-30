<?php
/*
Template Name: Services Page
*/
get_header(); 
?>

<main class="site-main">
    <section class="services-hero reveal">
        <div class="grid-container">
            <span class="eyebrow">WHAT WE DO</span>
            <h1 class="display-title">Four ways we help brands grow</h1>
        </div>
    </section>

    <section class="services-list-section page-padding work-page">
        <div class="grid-container">
            <div class="services-intro">
                <div class="services-intro-row services-intro-row__header">
                    <div>
                        <p class="section-eyebrow">WHAT WE DO</p>
                        <h2 class="section-title">Four ways we help brands grow</h2>
                    </div>
                    <div class="services-intro-copy">
                        <p class="values-text">We craft strategy, identity, websites and motion to help companies communicate clearly and grow effectively.</p>
                    </div>
                </div>
            </div>

            <div class="services-columns">
                <div class="service-col">
                    <div class="service-number">01</div>
                    <h3 class="service-name">Brand Strategy</h3>
                    <p class="service-desc">Positioning, naming, messaging and the story that holds it together.</p>
                </div>

                <div class="service-col">
                    <div class="service-number">02</div>
                    <h3 class="service-name">Identity Design</h3>
                    <p class="service-desc">Logo systems, type, colour and the rules that keep them consistent.</p>
                </div>

                <div class="service-col">
                    <div class="service-number">03</div>
                    <h3 class="service-name">Web Design &amp; Build</h3>
                    <p class="service-desc">Sites that load fast, read clearly and convert — designed and built in-house.</p>
                </div>

                <div class="service-col">
                    <div class="service-number">04</div>
                    <h3 class="service-name">Content &amp; Motion</h3>
                    <p class="service-desc">Art direction, photography and motion that gives the brand a pulse.</p>
                </div>
            </div>

            <div class="divider" style="margin: var(--space-40) 0;"></div>

            <div class="selected-work">
                <div class="selected-work-header">
                    <h3 class="section-title">Selected work</h3>
                    <a href="/work" class="read-more-link">View our work &rarr;</a>
                </div>

                <div class="portfolio-grid">
                    <article class="portfolio-card">
                        <div class="portfolio-image-wrapper">
                            <div class="image-placeholder aspect-card"></div>
                        </div>
                        <div class="portfolio-meta">
                            <div class="portfolio-title">Northwind</div>
                            <div class="portfolio-tags">Identity · Web</div>
                        </div>
                    </article>

                    <article class="portfolio-card">
                        <div class="portfolio-image-wrapper">
                            <div class="image-placeholder aspect-card"></div>
                        </div>
                        <div class="portfolio-meta">
                            <div class="portfolio-title">Atlas Coffee</div>
                            <div class="portfolio-tags">Brand · Packaging</div>
                        </div>
                    </article>

                    <article class="portfolio-card">
                        <div class="portfolio-image-wrapper">
                            <div class="image-placeholder aspect-card"></div>
                        </div>
                        <div class="portfolio-meta">
                            <div class="portfolio-title">Lumen Health</div>
                            <div class="portfolio-tags">Strategy · Web</div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <section class="cta-band">
        <div class="cta-container">
            <div class="cta-title">Have a project in mind?</div>
            <a href="/contact" class="btn btn-primary">Start a project →</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>