<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metamorphosis — SMMC Student Publication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<!-- ═══════════ HEADER ═══════════ -->
<header>
    <nav class="navbar">
        <div class="logo-section">
<img src="{{ asset('images/logo.png') }}" alt="Metamorphosis Logo" class="nav-logo">
            <div class="brand">
                <h1>METAMORPHOSIS</h1>
                <p>THE OFFICIAL STUDENT PUBLICATION OF SAN MATEO MUNICIPAL COLLEGE</p>
            </div>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home" class="nav-link active" data-page="home">HOME</a></li>
            <li><a href="#latest" class="nav-link" data-page="latest">LATEST</a></li>
            <li><a href="#news" class="nav-link" data-page="news">NEWS</a></li>
            <li><a href="#sports" class="nav-link" data-page="sports">SPORTS</a></li>
            <li><a href="#feature" class="nav-link" data-page="feature">FEATURE</a></li>
            <li><a href="#literary" class="nav-link" data-page="literary">LITERARY</a></li>
            <li><a href="#cartoon" class="nav-link" data-page="cartoon">CARTOON</a></li>
            <li><a href="#about" class="nav-link" data-page="about">ABOUT</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search..." id="search-input">
            <button id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
    <div class="mobile-nav" id="mobile-nav">
        <ul>
            <li><a href="#home" class="nav-link" data-page="home">HOME</a></li>
            <li><a href="#latest" class="nav-link" data-page="latest">LATEST</a></li>
            <li><a href="#news" class="nav-link" data-page="news">NEWS</a></li>
            <li><a href="#sports" class="nav-link" data-page="sports">SPORTS</a></li>
            <li><a href="#feature" class="nav-link" data-page="feature">FEATURE</a></li>
            <li><a href="#literary" class="nav-link" data-page="literary">LITERARY</a></li>
            <li><a href="#cartoon" class="nav-link" data-page="cartoon">CARTOON</a></li>
            <li><a href="#about" class="nav-link" data-page="about">ABOUT</a></li>
        </ul>
    </div>
</header>

<!-- ═══════════ SEARCH OVERLAY ═══════════ -->
<div class="search-overlay" id="search-overlay">
    <div class="search-overlay-inner">
        <button class="search-close" id="search-close"><i class="fa-solid fa-xmark"></i></button>
        <p class="search-label">SEARCH METAMORPHOSIS</p>
        <input type="text" class="search-big" id="search-big" placeholder="Type to search...">
        <div class="search-results" id="search-results"></div>
    </div>
</div>

<!-- ═══════════ ARTICLE DETAIL PAGE ═══════════ -->
<div class="page" id="page-article">
    <div class="article-back-bar">
        <button class="article-back-btn" id="article-back-btn"><i class="fa-solid fa-arrow-left"></i> <span id="article-back-label">Back</span></button>
    </div>
    <main class="article-main container">
        <div class="article-layout">
            <div class="article-body">
                <p class="article-date" id="article-date"></p>
                <h1 class="article-title" id="article-title"></h1>
                <p class="article-byline" id="article-byline"></p>
                <div class="article-hero-img">
                    <img id="article-img" src="" alt="">
                    <p class="article-photo-credit" id="article-photo-credit"></p>
                </div>
                <div class="article-text" id="article-text"></div>
                <div class="article-actions">

                </div>
            </div>
        </div>
    </main>
</div>

<!-- ═══════════ HOME PAGE ═══════════ -->
<div class="page active" id="page-home">
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                Citadel of Truth and<br>
                <em>Responsible Journalism</em>
            </h1>
            <p class="hero-subtitle">The official student publication documenting campus life, culture, sports, and the voices that shape our community.</p>
            <div class="hero-actions">
                <a href="#latest" class="cta-button nav-link" data-page="latest"><i class="fa-solid fa-pen-nib"></i> Read Latest Issue</a>
                <a href="#about" class="cta-outline nav-link" data-page="about">About Us</a>
            </div>
        </div>
        <div class="scroll-hint">
            <span>Scroll</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <main class="container">
        <section class="section-row reveal">
            <div class="section-header">
                <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Latest Stories</span>
                <div class="line"></div>
                <a href="#latest" class="nav-link view-all" data-page="latest">View All →</a>
            </div>
            <div class="split-grid">
                <div class="two-col-grid reveal-stagger">
                    <article class="card" data-article-id="campus-highlights">
                        <img src="{{ asset('images/story1.jpg') }}" alt="Story" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2214%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2240%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22><tspan>📷</tspan></text><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2262%25%22 text-anchor=%22middle%22>Campus Life</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Campus Life</span>
                            <h3>Campus Highlights 2026</h3>
                            <p>Recent events showing the growth of our college community and the milestones we've achieved together...</p>
                            <a href="#" class="read-more article-link" data-article-id="campus-highlights">Read More</a>
                        </div>
                    </article>
                    <article class="card" data-article-id="academic-excellence">
                        <img src="story2.jpg" alt="Story" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Academics</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Academics</span>
                            <h3>Academic Excellence</h3>
                            <p>Celebrating the top achievers of this semester's examinations and the dedication behind their success...</p>
                            <a href="#" class="read-more article-link" data-article-id="academic-excellence">Read More</a>
                        </div>
                    </article>
                </div>
                <aside>
                    <div class="section-header" style="margin-bottom:14px;">
                        <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Features</span>
                        <div class="line"></div>
                    </div>
                    <div class="feature-stack">
                        <div class="feature-item article-link" data-article-id="creative-pulse">
                            <img src="feat1.jpg" alt="F1" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🎨</text></svg>'">
                            <div class="feature-text">
                                <p>The Creative Pulse: Student Art Gallery opening this Friday.</p>
                                <a href="#" class="read-more article-link" data-article-id="creative-pulse">Read More</a>
                            </div>
                        </div>
                        <div class="feature-item article-link" data-article-id="green-campus">
                            <img src="feat2.jpg" alt="F2" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🌿</text></svg>'">
                            <div class="feature-text">
                                <p>Green Campus: New initiatives for a sustainable SMMC.</p>
                                <a href="#" class="read-more article-link" data-article-id="green-campus">Read More</a>
                            </div>
                        </div>
                        <div class="feature-item article-link" data-article-id="mental-health">
                            <img src="feat3.jpg" alt="F3" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>💙</text></svg>'">
                            <div class="feature-text">
                                <p>Mental Health Matters: Building a supportive environment.</p>
                                <a href="#" class="read-more article-link" data-article-id="mental-health">Read More</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section class="section-row reveal">
            <div class="section-header">
                <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> News</span>
                <div class="line"></div>
                <a href="#news" class="nav-link view-all" data-page="news">View All →</a>
            </div>
            <div class="three-col-grid reveal-stagger">
                <article class="card">
                    <img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Campus News</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Campus</span>
                        <h3>Local Updates</h3>
                        <p>Latest changes in the municipal college guidelines and what they mean for students...</p>
                        <a href="#" class="read-more article-link" data-article-id="local-updates">Read More</a>
                    </div>
                </article>
                <article class="card">
                    <img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Achievement</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Achievement</span>
                        <h3>Regional Win</h3>
                        <p>Students take home the gold in regional debate championships, proving SMMC's excellence...</p>
                        <a href="#" class="read-more article-link" data-article-id="regional-win">Read More</a>
                    </div>
                </article>
                <article class="card">
                    <img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Technology</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Technology</span>
                        <h3>Tech Upgrade</h3>
                        <p>New computer labs now open for all IT students, featuring state-of-the-art equipment...</p>
                        <a href="#" class="read-more article-link" data-article-id="tech-upgrade">Read More</a>
                    </div>
                </article>
            </div>
        </section>

        <div class="section-row split-grid reveal">
            <section>
                <div class="section-header">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Sports</span>
                    <div class="line"></div>
                    <a href="#sports" class="nav-link view-all" data-page="sports">View All →</a>
                </div>
                <div class="two-col-grid reveal-stagger">
                    <article class="card">
                        <img src="sports1.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Basketball</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Basketball</span>
                            <h3>Varsity Victory</h3>
                            <p>Basketball team secures a spot in the finals with a stunning last-quarter comeback...</p>
                            <a href="#" class="read-more article-link" data-article-id="varsity-victory">Read More</a>
                        </div>
                    </article>
                    <article class="card">
                        <img src="sports2.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 font-family=%22sans-serif%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22>Volleyball</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Volleyball</span>
                            <h3>Volleyball Prep</h3>
                            <p>Training intensifies for the upcoming season as the team eyes the championship title...</p>
                            <a href="#" class="read-more article-link" data-article-id="volleyball-prep">Read More</a>
                        </div>
                    </article>
                </div>
            </section>
            <aside>
                <div class="section-header" style="margin-bottom:14px;">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Cartoon</span>
                    <div class="line"></div>
                </div>
                <div class="cartoon-stack">
                    <div class="cartoon-thumb-item article-link" data-article-id="arts-month-poster">
                        <img src="feat1.jpg" alt="C1" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🎨</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Illustration</span>
                            <p>Arts Month Poster — Visual tribute to SMMC's celebration.</p>
                            <a href="#" class="read-more article-link" data-article-id="arts-month-poster">View</a>
                        </div>
                    </div>
                    <div class="cartoon-thumb-item article-link" data-article-id="editorial-cartoon">
                        <img src="feat2.jpg" alt="C2" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🖼️</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Editorial</span>
                            <p>Editorial Cartoon — Tradition meets modern student life.</p>
                            <a href="#" class="read-more article-link" data-article-id="editorial-cartoon">View</a>
                        </div>
                    </div>
                    <div class="cartoon-thumb-item article-link" data-article-id="campus-lens">
                        <img src="feat3.jpg" alt="C3" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📷</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Photography</span>
                            <p>Campus Lens — Memorable moments this semester.</p>
                            <a href="#" class="read-more article-link" data-article-id="campus-lens">View</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</div>

<!-- ═══════════ LATEST PAGE ═══════════ -->
<div class="page" id="page-latest">
    <div class="page-banner">
        <p class="page-banner-eyebrow">This Issue</p>
        <h2><span>Latest</span> Stories</h2>
    </div>
    <main class="container">
        <div class="section-row split-grid reveal">
            <section>
                <div class="section-header">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Latest Stories</span>
                    <div class="line"></div>
                </div>
                <div class="two-col-grid reveal-stagger">
                    <article class="card">
                        <img src="{{ asset('images/story1.jpg') }}" alt="Story" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Campus Life</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Campus Life</span>
                            <h3>Campus Highlights 2026</h3>
                            <p>Recent events showing the growth of our college community and the milestones we've achieved together...</p>
                            <a href="#" class="read-more article-link" data-article-id="campus-highlights">Read More</a>
                        </div>
                    </article>
                    <article class="card">
                        <img src="story2.jpg" alt="Story" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Academics</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Academics</span>
                            <h3>Academic Excellence</h3>
                            <p>Celebrating the top achievers of this semester's examinations and the dedication behind their success...</p>
                            <a href="#" class="read-more article-link" data-article-id="academic-excellence">Read More</a>
                        </div>
                    </article>
                </div>
            </section>
            <aside>
                <div class="section-header" style="margin-bottom:14px;">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Features</span>
                    <div class="line"></div>
                </div>
                <div class="feature-stack">
                    <div class="feature-item">
                        <img src="feat1.jpg" alt="F1" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🎨</text></svg>'">
                        <div class="feature-text">
                            <p>The Creative Pulse: Student Art Gallery opening this Friday.</p>
                            <a href="#" class="read-more article-link" data-article-id="creative-pulse">Read More</a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <img src="feat2.jpg" alt="F2" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🌿</text></svg>'">
                        <div class="feature-text">
                            <p>Green Campus: New initiatives for a sustainable SMMC.</p>
                            <a href="#" class="read-more article-link" data-article-id="green-campus">Read More</a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <img src="feat3.jpg" alt="F3" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>💙</text></svg>'">
                        <div class="feature-text">
                            <p>Mental Health Matters: Building a supportive environment.</p>
                            <a href="#" class="read-more article-link" data-article-id="mental-health">Read More</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <section class="section-row reveal">
            <div class="section-header">
                <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> News</span>
                <div class="line"></div>
            </div>
            <div class="three-col-grid reveal-stagger">
                <article class="card">
                    <img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Campus</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Campus</span>
                        <h3>Local Updates</h3>
                        <p>Latest changes in the municipal college guidelines and what they mean for students...</p>
                        <a href="#" class="read-more article-link" data-article-id="local-updates">Read More</a>
                    </div>
                </article>
                <article class="card">
                    <img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Achievement</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Achievement</span>
                        <h3>Regional Win</h3>
                        <p>Students take home the gold in regional debate championships...</p>
                        <a href="#" class="read-more article-link" data-article-id="regional-win">Read More</a>
                    </div>
                </article>
                <article class="card">
                    <img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Technology</text></svg>'">
                    <div class="card-content">
                        <span class="card-tag">Technology</span>
                        <h3>Tech Upgrade</h3>
                        <p>New computer labs now open for all IT students, featuring state-of-the-art equipment...</p>
                        <a href="#" class="read-more article-link" data-article-id="tech-upgrade">Read More</a>
                    </div>
                </article>
            </div>
        </section>

        <div class="section-row split-grid reveal">
            <section>
                <div class="section-header">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Sports</span>
                    <div class="line"></div>
                </div>
                <div class="two-col-grid reveal-stagger">
                    <article class="card">
                        <img src="sports1.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Basketball</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Basketball</span>
                            <h3>Varsity Victory</h3>
                            <p>Basketball team secures a spot in the finals with a stunning last-quarter comeback...</p>
                            <a href="#" class="read-more article-link" data-article-id="varsity-victory">Read More</a>
                        </div>
                    </article>
                    <article class="card">
                        <img src="sports2.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Volleyball</text></svg>'">
                        <div class="card-content">
                            <span class="card-tag">Volleyball</span>
                            <h3>Volleyball Prep</h3>
                            <p>Training intensifies for the upcoming season as the team eyes the championship title...</p>
                            <a href="#" class="read-more article-link" data-article-id="volleyball-prep">Read More</a>
                        </div>
                    </article>
                </div>
            </section>
            <aside>
                <div class="section-header" style="margin-bottom:14px;">
                    <span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Cartoon</span>
                    <div class="line"></div>
                </div>
                <div class="cartoon-stack">
                    <div class="cartoon-thumb-item">
                        <img src="feat1.jpg" alt="C1" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🎨</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Illustration</span>
                            <p>Arts Month Poster — Visual tribute to SMMC's celebration.</p>
                            <a href="#" class="read-more article-link" data-article-id="arts-month-poster">View</a>
                        </div>
                    </div>
                    <div class="cartoon-thumb-item">
                        <img src="feat2.jpg" alt="C2" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>🖼️</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Editorial</span>
                            <p>Editorial Cartoon — Tradition meets modern student life.</p>
                            <a href="#" class="read-more article-link" data-article-id="editorial-cartoon">View</a>
                        </div>
                    </div>
                    <div class="cartoon-thumb-item">
                        <img src="feat3.jpg" alt="C3" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📷</text></svg>'">
                        <div class="cartoon-thumb-text">
                            <span class="cartoon-thumb-tag">Photography</span>
                            <p>Campus Lens — Memorable moments this semester.</p>
                            <a href="#" class="read-more article-link" data-article-id="campus-lens">View</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</div>

<!-- ═══════════ NEWS PAGE ═══════════ -->
<div class="page" id="page-news">
    <div class="page-banner">
        <p class="page-banner-eyebrow">Stay Informed</p>
        <h2>Campus <span>News</span></h2>
    </div>
    <main class="container">
        <!-- News Tab Navigation -->
        <div class="news-tabs">
            <button class="news-tab active" data-tab="campus-news"><i class="fa-solid fa-building-columns"></i> Campus News</button>
            <button class="news-tab" data-tab="community-news"><i class="fa-solid fa-users"></i> Community News</button>
        </div>

        <!-- Campus News Tab -->
        <section class="news-tab-content active" id="tab-campus-news">
            <div class="news-tab-header">
                <div class="news-section-title">Campus News <span>● SMMC</span></div>
            </div>
            <div class="three-col-grid reveal-stagger" id="campus-grid">
                <article class="card"><img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Campus</text></svg>'"><div class="card-content"><span class="card-tag">Campus</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-1">Read More</a></div></article>
                <article class="card"><img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Campus</text></svg>'"><div class="card-content"><span class="card-tag">Campus</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-2">Read More</a></div></article>
                <article class="card"><img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Campus</text></svg>'"><div class="card-content"><span class="card-tag">Campus</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-3">Read More</a></div></article>
                <article class="card"><img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Event</text></svg>'"><div class="card-content"><span class="card-tag">Event</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-4">Read More</a></div></article>
                <article class="card"><img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Event</text></svg>'"><div class="card-content"><span class="card-tag">Event</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-5">Read More</a></div></article>
                <article class="card"><img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Event</text></svg>'"><div class="card-content"><span class="card-tag">Event</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="campus-news-6">Read More</a></div></article>
            </div>
            <div class="pagination" id="campus-pagination">
                <a href="#" class="page-prev"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active" data-page="1">1</span>
                <a href="#" data-page="2">2</a>
                <a href="#" data-page="3">3</a>
                <a href="#" class="page-next"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>

        <!-- Community News Tab -->
        <section class="news-tab-content" id="tab-community-news">
            <div class="news-tab-header">
                <div class="news-section-title">Community News <span>● LOCAL</span></div>
            </div>
            <div class="three-col-grid reveal-stagger" id="community-grid">
                <article class="card"><img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Community</text></svg>'"><div class="card-content"><span class="card-tag">Community</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-1">Read More</a></div></article>
                <article class="card"><img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Community</text></svg>'"><div class="card-content"><span class="card-tag">Community</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-2">Read More</a></div></article>
                <article class="card"><img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Community</text></svg>'"><div class="card-content"><span class="card-tag">Community</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-3">Read More</a></div></article>
                <article class="card"><img src="news1.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Local</text></svg>'"><div class="card-content"><span class="card-tag">Local</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-4">Read More</a></div></article>
                <article class="card"><img src="news2.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Local</text></svg>'"><div class="card-content"><span class="card-tag">Local</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-5">Read More</a></div></article>
                <article class="card"><img src="news3.jpg" alt="News" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Local</text></svg>'"><div class="card-content"><span class="card-tag">Local</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem...</p><a href="#" class="read-more article-link" data-article-id="community-news-6">Read More</a></div></article>
            </div>
            <div class="pagination" id="community-pagination">
                <a href="#" class="page-prev"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active" data-page="1">1</span>
                <a href="#" data-page="2">2</a>
                <a href="#" data-page="3">3</a>
                <a href="#" class="page-next"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
    </main>
</div>

<!-- ═══════════ SPORTS PAGE ═══════════ -->
<div class="page" id="page-sports">
    <div class="page-banner">
        <p class="page-banner-eyebrow">Game On</p>
        <h2><span>Sports</span> News</h2>
    </div>
    <main class="container">
        <section class="section-row reveal">
            <div class="section-header"><span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Recently</span><div class="line"></div></div>
            <div class="split-grid">
                <div class="two-col-grid reveal-stagger">
                    <article class="card"><img src="sports1.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Basketball</text></svg>'"><div class="card-content"><span class="card-tag">Basketball</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="sports-1">Read More</a></div></article>
                    <article class="card"><img src="sports2.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Volleyball</text></svg>'"><div class="card-content"><span class="card-tag">Volleyball</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="sports-2">Read More</a></div></article>
                </div>
                <aside>
                    <div class="section-header"><span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Announcements</span><div class="line"></div></div>
                    <div class="feature-stack">
                        <div class="feature-item"><img src="feat1.jpg" alt="A" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📢</text></svg>'"><div class="feature-text"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur.</p><a href="#" class="read-more article-link" data-article-id="sports-ann-1">Read More</a></div></div>
                        <div class="feature-item"><img src="feat2.jpg" alt="A" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📢</text></svg>'"><div class="feature-text"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur.</p><a href="#" class="read-more article-link" data-article-id="sports-ann-2">Read More</a></div></div>
                        <div class="feature-item"><img src="feat3.jpg" alt="A" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2272%22 height=%2272%22><rect fill=%22%2307073a%22 width=%2272%22 height=%2272%22/><rect fill=%22%230d0d5c%22 x=%228%22 y=%228%22 width=%2256%22 height=%2256%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2226%22 x=%2250%25%22 y=%2255%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📢</text></svg>'"><div class="feature-text"><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur.</p><a href="#" class="read-more article-link" data-article-id="sports-ann-3">Read More</a></div></div>
                    </div>
                </aside>
            </div>
        </section>
        <section class="section-row reveal">
            <div class="section-header"><span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Intramurals 2025</span><div class="line"></div></div>
            <div class="three-col-grid reveal-stagger">
                <article class="card"><img src="sports1.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Intramurals</text></svg>'"><div class="card-content"><span class="card-tag">Intramurals</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="intra-1">Read More</a></div></article>
                <article class="card"><img src="sports2.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Intramurals</text></svg>'"><div class="card-content"><span class="card-tag">Intramurals</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="intra-2">Read More</a></div></article>
                <article class="card"><img src="sports1.jpg" alt="Sports" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Intramurals</text></svg>'"><div class="card-content"><span class="card-tag">Intramurals</span><h3>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="intra-3">Read More</a></div></article>
            </div>
            <div class="pagination">
                <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active">1</span><a href="#">2</a><a href="#">3</a>
                <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
    </main>
</div>

<!-- ═══════════ FEATURE PAGE ═══════════ -->
<div class="page" id="page-feature">
    <div class="page-banner">
        <p class="page-banner-eyebrow">In Depth</p>
        <h2><span>Feature</span> Stories</h2>
    </div>
    <main class="container">
        <section class="section-row reveal">
            <div class="section-header"><span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Featured Articles</span><div class="line"></div></div>
            <div class="three-col-grid reveal-stagger">
                <article class="card"><img src="feat1.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Arts &amp; Culture</text></svg>'"><div class="card-content"><span class="card-tag">Arts & Culture</span><h3>The Creative Pulse of SMMC</h3><p>Exploring the vibrant arts scene that is quietly transforming how students express themselves on campus...</p><a href="#" class="read-more article-link" data-article-id="creative-pulse">Read More</a></div></article>
                <article class="card"><img src="feat2.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Environment</text></svg>'"><div class="card-content"><span class="card-tag">Environment</span><h3>Green Campus Initiative</h3><p>New sustainability programs are reshaping how San Mateo Municipal College approaches its environmental footprint...</p><a href="#" class="read-more article-link" data-article-id="green-campus">Read More</a></div></article>
                <article class="card"><img src="feat3.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Wellness</text></svg>'"><div class="card-content"><span class="card-tag">Wellness</span><h3>Mental Health Matters</h3><p>Building a more empathetic campus where students feel seen, heard, and supported through every challenge...</p><a href="#" class="read-more article-link" data-article-id="mental-health">Read More</a></div></article>
                <article class="card"><img src="feat1.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Student Life</text></svg>'"><div class="card-content"><span class="card-tag">Student Life</span><h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="feature-4">Read More</a></div></article>
                <article class="card"><img src="feat2.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Innovation</text></svg>'"><div class="card-content"><span class="card-tag">Innovation</span><h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="feature-5">Read More</a></div></article>
                <article class="card"><img src="feat3.jpg" alt="Feature" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Leadership</text></svg>'"><div class="card-content"><span class="card-tag">Leadership</span><h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae...</p><a href="#" class="read-more article-link" data-article-id="feature-6">Read More</a></div></article>
            </div>
            <div class="pagination">
                <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active">1</span><a href="#">2</a><a href="#">3</a>
                <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
    </main>
</div>

<!-- ═══════════ LITERARY PAGE ═══════════ -->
<div class="page literary-bg" id="page-literary">
    <div class="page-banner" style="text-align:center;">
        <p class="page-banner-eyebrow" style="justify-content:center;">Written Words</p>
        <h2><span>Literary</span></h2>
    </div>
    <main class="container">
        <section class="section-row reveal" style="margin-bottom:0;">
            <div class="section-header" style="margin-bottom:36px;">
                <span class="label" style="background:rgba(255,255,255,0.1);"><span class="label-gold"><i class="fa-solid fa-star"></i></span>&nbsp; National Literature Month 2025</span>
                <div class="line" style="background:linear-gradient(90deg,rgba(255,255,255,0.2),transparent);"></div>
            </div>
            <div class="literary-list reveal-stagger">
                <div class="literary-row article-link" data-article-id="lit-sailor">
                    <div class="literary-cover">
                        <img src="feat1.jpg" alt="The Sailor" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22260%22><rect fill=%22%230d0d5c%22 width=%22200%22 height=%22260%22/><rect fill=%22%2307073a%22 x=%2210%22 y=%2210%22 width=%22180%22 height=%22240%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2240%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📖</text></svg>'">
                    </div>
                    <div class="literary-info">
                        <span class="literary-genre">Poetry</span>
                        <h3 class="literary-title">The Sailor</h3>
                        <p class="literary-author">By Shania Kate Estrera</p>
                        <p class="literary-excerpt">I sailed across the sea so wide, drawn by a hum the winds can't hide. I chased the breeze with a soul grown thin, yearning for the place where I begin...</p>
                        <a href="#" class="btn-outline-gold article-link" data-article-id="lit-sailor">Read More</a>
                    </div>
                </div>
                <div class="literary-row article-link" data-article-id="lit-2">
                    <div class="literary-cover">
                        <img src="feat2.jpg" alt="Literary 2" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22260%22><rect fill=%22%230d0d5c%22 width=%22200%22 height=%22260%22/><rect fill=%22%2307073a%22 x=%2210%22 y=%2210%22 width=%22180%22 height=%22240%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2240%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📖</text></svg>'">
                    </div>
                    <div class="literary-info">
                        <span class="literary-genre">Short Story</span>
                        <h3 class="literary-title">Lorem Ipsum Title</h3>
                        <p class="literary-author">By Author Name</p>
                        <p class="literary-excerpt">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus ex sapien...</p>
                        <a href="#" class="btn-outline-gold article-link" data-article-id="lit-2">Read More</a>
                    </div>
                </div>
                <div class="literary-row article-link" data-article-id="lit-3">
                    <div class="literary-cover">
                        <img src="feat3.jpg" alt="Literary 3" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22260%22><rect fill=%22%230d0d5c%22 width=%22200%22 height=%22260%22/><rect fill=%22%2307073a%22 x=%2210%22 y=%2210%22 width=%22180%22 height=%22240%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2240%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📖</text></svg>'">
                    </div>
                    <div class="literary-info">
                        <span class="literary-genre">Essay</span>
                        <h3 class="literary-title">Lorem Ipsum Title</h3>
                        <p class="literary-author">By Author Name</p>
                        <p class="literary-excerpt">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus ex sapien...</p>
                        <a href="#" class="btn-outline-gold article-link" data-article-id="lit-3">Read More</a>
                    </div>
                </div>
                <div class="literary-row article-link" data-article-id="lit-4">
                    <div class="literary-cover">
                        <img src="feat1.jpg" alt="Literary 4" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22260%22><rect fill=%22%230d0d5c%22 width=%22200%22 height=%22260%22/><rect fill=%22%2307073a%22 x=%2210%22 y=%2210%22 width=%22180%22 height=%22240%22 rx=%224%22/><text fill=%22%23f0b429%22 font-size=%2240%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>📖</text></svg>'">
                    </div>
                    <div class="literary-info">
                        <span class="literary-genre">Poetry</span>
                        <h3 class="literary-title">Lorem Ipsum Title</h3>
                        <p class="literary-author">By Author Name</p>
                        <p class="literary-excerpt">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus ex sapien...</p>
                        <a href="#" class="btn-outline-gold article-link" data-article-id="lit-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="pagination" style="margin-top:40px;">
                <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active">1</span><a href="#">2</a><a href="#">3</a>
                <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
    </main>
</div>

<!-- ═══════════ CARTOON PAGE ═══════════ -->
<div class="page" id="page-cartoon">
    <div class="page-banner cartoon-banner">
        <p class="page-banner-eyebrow">Visual Stories</p>
        <h2><span>Cartoon</span> & Art</h2>
    </div>
    <main class="container">
        <section class="section-row reveal">
            <div class="section-header"><span class="label"><span class="label-gold"><i class="fa-solid fa-star"></i></span> Illustrations & Cartoons</span><div class="line"></div></div>
            <div class="three-col-grid reveal-stagger">
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat1.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Illustration</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Illustration</span>
                        <h3>Arts Month Poster</h3>
                        <p>A vibrant visual tribute to the Arts Month celebration at San Mateo Municipal Stadium...</p>
                        <a href="#" class="read-more article-link" data-article-id="arts-month-poster">View</a>
                    </div>
                </article>
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat2.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Editorial</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Editorial</span>
                        <h3>Editorial Cartoon</h3>
                        <p>This month's editorial cartoon explores the intersection of tradition and modern student life...</p>
                        <a href="#" class="read-more article-link" data-article-id="editorial-cartoon">View</a>
                    </div>
                </article>
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat3.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Photography</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Photography</span>
                        <h3>Campus Lens</h3>
                        <p>A photographic journey through SMMC's most memorable moments this semester...</p>
                        <a href="#" class="read-more article-link" data-article-id="campus-lens">View</a>
                    </div>
                </article>
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat1.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Comic Strip</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Comic Strip</span>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus...</p>
                        <a href="#" class="read-more article-link" data-article-id="cartoon-4">View</a>
                    </div>
                </article>
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat2.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Digital Art</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Digital Art</span>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus...</p>
                        <a href="#" class="read-more article-link" data-article-id="cartoon-5">View</a>
                    </div>
                </article>
                <article class="card cartoon-card">
                    <div class="cartoon-panel">
                        <img src="feat3.jpg" alt="Cartoon" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22215%22><rect fill=%22%230d0d5c%22 width=%22400%22 height=%22215%22/><text fill=%22%23f0b429%22 font-size=%2212%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 dominant-baseline=%22middle%22 font-family=%22sans-serif%22>Caricature</text></svg>'">
                        <div class="comic-dots"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-tag cartoon-tag">Caricature</span>
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus...</p>
                        <a href="#" class="read-more article-link" data-article-id="cartoon-6">View</a>
                    </div>
                </article>
            </div>
            <div class="pagination">
                <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                <span class="active">1</span><a href="#">2</a><a href="#">3</a>
                <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </section>
    </main>
</div>

<!-- ═══════════ ABOUT PAGE ═══════════ -->
<div class="page" id="page-about">
    <div class="about-hero">
        <img src="logo.png" alt="Logo" class="about-hero-logo" onerror="this.style.display='none'">
        <h1 class="about-title">META<span>MORPHOSIS</span></h1>
        <p class="about-sub">The Official Student Publication of San Mateo Municipal College</p>
    </div>
    <div class="about-content">
        <div class="mission-box reveal">
            <h3>Our Mission</h3>
            <p>Metamorphosis is the official student publication of San Mateo Municipal College, dedicated to informing, inspiring, and uniting the SMMC community through honest journalism, creative expression, and responsible media. We believe every student has a story worth telling — and we're here to tell it.</p>
        </div>
        <div class="staff-section reveal">
            <h3>Meet the Team</h3>
            <div class="staff-grid reveal-stagger">
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-pen-nib"></i></div><div class="staff-info"><p class="staff-name">Editor-in-Chief</p><p class="staff-role">Editorial Board</p></div></div>
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-file-pen"></i></div><div class="staff-info"><p class="staff-name">Managing Editor</p><p class="staff-role">Editorial Board</p></div></div>
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-newspaper"></i></div><div class="staff-info"><p class="staff-name">News Editor</p><p class="staff-role">News Department</p></div></div>
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-trophy"></i></div><div class="staff-info"><p class="staff-name">Sports Editor</p><p class="staff-role">Sports Department</p></div></div>
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-palette"></i></div><div class="staff-info"><p class="staff-name">Arts Editor</p><p class="staff-role">Visual Arts</p></div></div>
                <div class="staff-card"><div class="staff-card-img"><i class="fa-solid fa-camera"></i></div><div class="staff-info"><p class="staff-name">Photo Editor</p><p class="staff-role">Photography</p></div></div>
            </div>
        </div>
    </div>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer>
    <div class="footer-container">
        <div class="social-links">
            <p><i class="fa-brands fa-facebook"></i> /smmcmetamorphosis</p>
            <p><i class="fa-solid fa-envelope"></i> metamorphosis.smmc@gmail.com</p>
        </div>
        <div class="footer-logo">
            <img src="logo.png" alt="Logo" onerror="this.style.display='none'">
            <span>META<span style="color:var(--gold)">MORPHOSIS</span></span>
        </div>
    </div>
    <p class="footer-copy">© 2026 Metamorphosis — The Official Student Publication of San Mateo Municipal College</p>
</footer>

<script src="script.js"></script>
</body>
</html>
