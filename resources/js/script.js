/* ═══════════════════════════════════════════════
   METAMORPHOSIS — Unified Script
   SPA Navigation · Search · Scroll Reveal · Article Detail · News Tabs
═══════════════════════════════════════════════ */

// ═══════════ ARTICLE DATA ═══════════
const articles = {
    'campus-highlights': {
        title: 'Campus Highlights 2026',
        date: 'March 16, 2026',
        byline: 'Article by: Metamorphosis Staff',
        photo: 'story1.jpg',
        photoCredit: 'Photo by: SMMC Photography Club',
        tag: 'Campus Life',
        backPage: 'latest',
        text: `<p>San Mateo Municipal College kicked off 2026 with a remarkable series of events that showcased the growth and resilience of its student community. From academic symposia to cultural showcases, the campus was alive with energy and purpose.</p>
        <p>The year began with the grand opening of the newly renovated Student Activity Center, a modern hub designed to foster collaboration among student organizations. The ribbon-cutting ceremony was attended by college administrators, faculty, and hundreds of enthusiastic students.</p>
        <p>Throughout the first quarter, various departments held open days where students showcased their research projects and creative works. The Engineering Department's robotics exhibit drew particular attention, with students demonstrating autonomous machines they had built from scratch.</p>
        <p>The College also celebrated notable achievements in academic competitions, with teams representing SMMC in regional and national contests. Their performance reflects the dedication of both students and faculty in maintaining academic excellence.</p>`
    },
    'academic-excellence': {
        title: 'Academic Excellence',
        date: 'March 10, 2026',
        byline: 'Article by: Metamorphosis Staff',
        photo: 'story2.jpg',
        photoCredit: 'Photo by: SMMC Photography Club',
        tag: 'Academics',
        backPage: 'latest',
        text: `<p>This semester's examination results have once again proven the outstanding caliber of students at San Mateo Municipal College. The College recorded its highest passing rate in five years, a testament to the hard work of students and the dedication of the faculty.</p>
        <p>Top honors went to students from the College of Arts and Sciences, with several achieving perfect scores in their major subjects. The Dean's List this semester features over two hundred students — a new record for the institution.</p>
        <p>Faculty members attribute this success to the implementation of new pedagogical methods and the increased availability of academic resources, including extended library hours and expanded tutoring services.</p>`
    },
    'creative-pulse': {
        title: 'The Creative Pulse of SMMC',
        date: 'February 28, 2026',
        byline: 'Article by: Metamorphosis Feature Team',
        photo: 'feat1.jpg',
        photoCredit: 'Photo by: Arts Department',
        tag: 'Arts & Culture',
        backPage: 'feature',
        text: `<p>Deep within the corridors of San Mateo Municipal College, a quiet revolution is taking place. Student artists, musicians, and writers are redefining what campus culture looks like — and the results are nothing short of extraordinary.</p>
        <p>The College's arts scene has blossomed in recent years, driven by passionate students who believe that creativity is as vital as any academic discipline. The recently inaugurated Student Gallery has become a focal point for this movement, displaying works that range from abstract paintings to digital installations.</p>
        <p>Music echoes through the covered walkways on most afternoons, as student bands practice for the upcoming Campus Arts Festival. Literature circles meet weekly in the library, sharing poems and short stories that speak to the Filipino student experience.</p>`
    },
    'green-campus': {
        title: 'Green Campus Initiative',
        date: 'February 20, 2026',
        byline: 'Article by: Metamorphosis Feature Team',
        photo: 'feat2.jpg',
        photoCredit: 'Photo by: SMMC Media Office',
        tag: 'Environment',
        backPage: 'feature',
        text: `<p>San Mateo Municipal College has launched an ambitious sustainability program aimed at reducing the institution's carbon footprint and instilling environmental consciousness among its students.</p>
        <p>The initiative includes the installation of solar panels on three major buildings, a comprehensive waste segregation program, and the conversion of unused land into a productive campus garden managed by students.</p>
        <p>The College's Environment Club has been instrumental in pushing for these changes, lobbying the administration for years and finally seeing their efforts bear fruit. Club president notes that this is just the beginning of a long-term commitment to sustainability.</p>`
    },
    'mental-health': {
        title: 'Mental Health Matters',
        date: 'February 14, 2026',
        byline: 'Article by: Metamorphosis Feature Team',
        photo: 'feat3.jpg',
        photoCredit: 'Photo by: SMMC Wellness Center',
        tag: 'Wellness',
        backPage: 'feature',
        text: `<p>In response to growing concerns about student wellbeing, San Mateo Municipal College has expanded its mental health services and launched a comprehensive awareness campaign that seeks to destigmatize help-seeking behavior among students.</p>
        <p>The College's Guidance and Counseling Office now operates extended hours and has added two new licensed counselors to its staff. Walk-in consultations are available five days a week, and an online booking system has been introduced for students who prefer scheduled appointments.</p>
        <p>Peer support groups have also been established in each department, trained to provide first-response emotional support to classmates in distress. These student volunteers serve as bridges between their peers and professional counselors.</p>`
    },
    'local-updates': {
        title: 'Local Updates — New College Guidelines',
        date: 'March 1, 2026',
        byline: 'Article by: News Desk',
        photo: 'news1.jpg',
        photoCredit: 'Photo by: SMMC Media Office',
        tag: 'Campus',
        backPage: 'news',
        text: `<p>San Mateo Municipal College has released a new set of guidelines affecting student conduct, classroom policies, and campus access. The updated handbook takes effect at the start of the second semester and has been distributed to all enrolled students.</p>
        <p>Key changes include a revised attendance policy that allows for a maximum of three excused absences per subject, an updated dress code that balances professionalism with student comfort, and new protocols for the use of electronic devices during lectures.</p>
        <p>The administration encourages students to read the handbook thoroughly and direct any questions to their respective department offices or the Student Affairs Office.</p>`
    },
    'regional-win': {
        title: 'Regional Win — Debate Championship',
        date: 'February 25, 2026',
        byline: 'Article by: News Desk',
        photo: 'news2.jpg',
        photoCredit: 'Photo by: Competition Organizers',
        tag: 'Achievement',
        backPage: 'news',
        text: `<p>The San Mateo Municipal College debate team brought home the gold trophy from the Regional Universities Debate Championship held in Antipolo City. The team bested twelve other colleges in a grueling three-day competition.</p>
        <p>SMMC's team, composed of four junior students, argued brilliantly across multiple rounds on topics ranging from digital privacy to educational reform. Their final round performance against defending champions was described by judges as "exemplary."</p>
        <p>The team will now represent Region IV-A in the National Inter-Collegiate Debate Competition scheduled for later this year.</p>`
    },
    'tech-upgrade': {
        title: 'Tech Upgrade — New Computer Labs Open',
        date: 'February 18, 2026',
        byline: 'Article by: News Desk',
        photo: 'news3.jpg',
        photoCredit: 'Photo by: SMMC Media Office',
        tag: 'Technology',
        backPage: 'news',
        text: `<p>IT students at San Mateo Municipal College now have access to state-of-the-art computing facilities following the opening of three newly equipped laboratories in the Engineering and Technology Building.</p>
        <p>Each laboratory features high-specification workstations capable of running professional-grade design and development software. The College invested in the upgrade following feedback from students and faculty about the limitations of the previous equipment.</p>
        <p>The labs are open to all IT-related programs and are available for student use during and after class hours, subject to scheduling. Tutorials on the new equipment will be offered to students during the first two weeks of the semester.</p>`
    },
    'varsity-victory': {
        title: 'Varsity Victory — Basketball Finals',
        date: 'March 5, 2026',
        byline: 'Article by: Sports Desk',
        photo: 'sports1.jpg',
        photoCredit: 'Photo by: SMMC Sports Photography',
        tag: 'Basketball',
        backPage: 'sports',
        text: `<p>The SMMC Falcons basketball team delivered one of the most thrilling performances in recent memory, securing their berth in the championship finals with a dramatic last-quarter comeback against rival Rizal Technological College.</p>
        <p>Trailing by eight points with four minutes remaining, the Falcons went on a 15-2 run fueled by inspired defense and clutch shooting. The final buzzer sounded with SMMC ahead by five, sending the packed gymnasium into a frenzy.</p>
        <p>The championship game is scheduled for next month, and the entire SMMC community is rallying behind the team as they seek the school's first regional basketball title in a decade.</p>`
    },
    'volleyball-prep': {
        title: 'Volleyball Prep — Season Preview',
        date: 'March 3, 2026',
        byline: 'Article by: Sports Desk',
        photo: 'sports2.jpg',
        photoCredit: 'Photo by: SMMC Sports Photography',
        tag: 'Volleyball',
        backPage: 'sports',
        text: `<p>The SMMC women's volleyball team has been quietly building something special. With new recruits bolstering a core of experienced players, this year's squad may be the strongest the College has fielded in years.</p>
        <p>The team has been training six days a week since the start of the semester, working on precision, communication, and conditioning. Their new coach has introduced a more dynamic playing system that maximizes the team's athleticism.</p>
        <p>The season opener is just weeks away, and expectations are high. The team's goal is simple: bring home the regional championship trophy that has eluded SMMC for three consecutive years.</p>`
    },
    'arts-month-poster': {
        title: 'Arts Month Poster — San Mateo Municipal College',
        date: 'February 19, 2026',
        byline: 'Artwork by: Diana Perdonio',
        photo: 'feat1.jpg',
        photoCredit: 'Photo by: Diana Perdonio',
        tag: 'Illustration',
        backPage: 'cartoon',
        text: `<p>The official poster for SMMC's Arts Month celebration captures the vibrant spirit of creativity and expression that defines the annual event. Designed by student artist Diana Perdonio, the artwork blends traditional Filipino motifs with contemporary graphic design elements.</p>
        <p>The poster was selected from over thirty submissions in a competitive design challenge open to all students. The brief called for a design that embodied the theme "Katotohanan at Giting" — Truth and Excellence.</p>
        <p>Diana shared that her inspiration came from watching fellow students perform during previous Arts Month events. "I wanted to capture that energy, that feeling of pride and creativity all in one image," she said.</p>`
    },
    'editorial-cartoon': {
        title: 'Editorial Cartoon — This Month\'s Issue',
        date: 'March 1, 2026',
        byline: 'Artwork by: Metamorphosis Art Team',
        photo: 'feat2.jpg',
        photoCredit: 'Photo by: Metamorphosis',
        tag: 'Editorial',
        backPage: 'cartoon',
        text: `<p>This month's editorial cartoon takes a thoughtful look at the intersection of Filipino tradition and the realities of modern student life. Through bold lines and vivid imagery, the artwork poses a question that resonates with many SMMC students: how do we honor our roots while embracing the future?</p>
        <p>The piece depicts a young student standing at a crossroads, one path lined with traditional landmarks, the other with the icons of digital modernity. Rather than suggesting conflict, the cartoon implies synthesis — the idea that these two worlds can and should coexist.</p>
        <p>Editorial cartoons have long been a cornerstone of Metamorphosis, serving as visual editorials that speak to issues affecting the campus community.</p>`
    },
    'campus-lens': {
        title: 'Campus Lens — A Visual Journey',
        date: 'February 28, 2026',
        byline: 'Photography by: SMMC Photography Club',
        photo: 'feat3.jpg',
        photoCredit: 'Photos by: SMMC Photography Club',
        tag: 'Photography',
        backPage: 'cartoon',
        text: `<p>Through the lens of student photographers, the everyday moments of campus life are transformed into something extraordinary. This semester's Campus Lens collection documents the laughter, the late-night study sessions, the spontaneous friendships, and the quiet determination that define the SMMC experience.</p>
        <p>The collection features over thirty photographs taken across campus throughout the semester. From the early morning mist over the quadrangle to the golden hour light filtering through the library windows, each image tells a story of a community in motion.</p>
        <p>The photographers represented in this collection are members of the SMMC Photography Club, an organization dedicated to documenting campus life and developing the craft of visual storytelling.</p>`
    },
    'lit-sailor': {
        title: 'The Sailor',
        date: 'April 23, 2025',
        byline: 'By Shania Kate Estrera',
        photo: 'feat1.jpg',
        photoCredit: 'Photo by: Shania Kate Estrera',
        tag: 'Poetry',
        backPage: 'literary',
        text: `<p>I sailed across the sea so wide,<br>
        Drawn by a hum the winds can't hide.<br>
        I chased the breeze with a soul grown thin,<br>
        Yearning for the place where I begin.</p>
        <p>Somewhere adrift, I heard a Beacon's call,<br>
        a flicker in fog, a light through it all.<br>
        "Are you home, or merely afloat?" it said,<br>
        I was lost, with questions in my head.</p>
        <p>I sank beneath waves that knew my fears,<br>
        Each current carved from silent tears.<br>
        No storm was louder than my own cry,<br>
        Yet still I rose, though I knew not why.</p>
        <p>The captain, perhaps grief, told me to dive,<br>
        Where forgotten dreams are kept alive.<br>
        No map could chart the truths I found,<br>
        Buried like bones beneath sacred ground.</p>
        <p>A voyage unending, with tides that teach,<br>
        Where healing lies just out of reach.<br>
        My journey is unclear, but I still believe,<br>
        In the treasure I seek, and in the life I weave.</p>`
    }
};

// Generic fallback for articles without specific data
function getGenericArticle(id) {
    return {
        title: 'Lorem Ipsum Dolor Sit Amet Consectetur',
        date: 'March 2026',
        byline: 'Article by: Metamorphosis Staff',
        photo: 'news1.jpg',
        photoCredit: 'Photo by: Metamorphosis',
        tag: 'News',
        backPage: 'news',
        text: `<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elit quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus a a in lacus ut. Mauris euismod justo ligula. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <p>On behalf of the OIC College Administrator, Dr. Teresita O. Dela Cruz, Mr. Joe Papa delivered the opening remarks by conveying the message of Dr. Dela Cruz to the participants and audience.</p>
        <p>The activities that were held included various performances and presentations from students across different departments. Grand winners from the different activities were also announced during the event.</p>
        <p>In the midst of rivalry, student groups delivered lively performances — awakening the creative minds of every student in the arts, and developing their unique minds, talents, and confidence, allowing each individual to continuously learn, create, and thrive.</p>`
    };
}

document.addEventListener('DOMContentLoaded', () => {

    // ═══════════ SPA PAGE NAVIGATION ═══════════
    const pages = document.querySelectorAll('.page');
    const navLinks = document.querySelectorAll('.nav-link');
    const logoSection = document.querySelector('.logo-section');

    function showPage(pageId) {
        pages.forEach(p => p.classList.remove('active'));
        navLinks.forEach(l => l.classList.remove('active'));

        const target = document.getElementById('page-' + pageId);
        if (target) {
            target.classList.add('active');
            target.style.animation = 'none';
            target.offsetHeight;
            target.style.animation = '';
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        navLinks.forEach(l => {
            if (l.dataset.page === pageId) l.classList.add('active');
        });

        setTimeout(initReveal, 100);
        history.replaceState(null, '', '#' + pageId);
    }

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const page = link.dataset.page;
            if (page) { showPage(page); closeMobileNav(); }
        });
    });

    if (logoSection) {
        logoSection.addEventListener('click', () => { showPage('home'); closeMobileNav(); });
    }

    // ═══════════ ARTICLE DETAIL ═══════════
    let previousPage = 'home';

    function showArticle(articleId) {
        const data = articles[articleId] || getGenericArticle(articleId);

        previousPage = data.backPage || 'home';
        document.getElementById('article-back-label').textContent = 'Back to ' + previousPage.charAt(0).toUpperCase() + previousPage.slice(1);
        document.getElementById('article-date').textContent = data.date;
        document.getElementById('article-title').textContent = data.title;
        document.getElementById('article-byline').textContent = data.byline;
        document.getElementById('article-photo-credit').textContent = data.photoCredit;
        document.getElementById('article-text').innerHTML = data.text;

        const imgEl = document.getElementById('article-img');
        imgEl.src = data.photo;
        imgEl.alt = data.title;
        imgEl.onerror = function() {
            this.src = `data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="780" height="440"><rect fill="%230d0d5c" width="780" height="440"/><text fill="%23f0b429" font-size="16" font-family="sans-serif" x="50%25" y="50%25" text-anchor="middle" dominant-baseline="middle">${data.tag}</text></svg>`;
        };

        showPage('article');
    }

    // Back button
    const backBtn = document.getElementById('article-back-btn');
    if (backBtn) {
        backBtn.addEventListener('click', () => showPage(previousPage));
    }

    // Article link clicks (event delegation)
    document.addEventListener('click', (e) => {
        const link = e.target.closest('.article-link');
        if (link) {
            e.preventDefault();
            const id = link.dataset.articleId;
            if (id) showArticle(id);
        }
    });

    // ═══════════ MOBILE HAMBURGER ═══════════
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');

    function closeMobileNav() {
        hamburger && hamburger.classList.remove('open');
        mobileNav && mobileNav.classList.remove('open');
    }

    if (hamburger && mobileNav) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('open');
            mobileNav.classList.toggle('open');
        });
    }

    // ═══════════ SEARCH ═══════════
    const searchBtn = document.getElementById('search-btn');
    const searchInput = document.getElementById('search-input');
    const searchOverlay = document.getElementById('search-overlay');
    const searchClose = document.getElementById('search-close');
    const searchBig = document.getElementById('search-big');
    const searchResults = document.getElementById('search-results');

    const searchableContent = [
        { title: 'Campus Highlights 2026', page: 'latest', tag: 'Campus Life', articleId: 'campus-highlights' },
        { title: 'Academic Excellence', page: 'latest', tag: 'Academics', articleId: 'academic-excellence' },
        { title: 'Local Updates', page: 'news', tag: 'Campus', articleId: 'local-updates' },
        { title: 'Regional Win', page: 'news', tag: 'Achievement', articleId: 'regional-win' },
        { title: 'Tech Upgrade', page: 'news', tag: 'Technology', articleId: 'tech-upgrade' },
        { title: 'Varsity Victory', page: 'sports', tag: 'Basketball', articleId: 'varsity-victory' },
        { title: 'Volleyball Prep', page: 'sports', tag: 'Volleyball', articleId: 'volleyball-prep' },
        { title: 'The Creative Pulse of SMMC', page: 'feature', tag: 'Arts & Culture', articleId: 'creative-pulse' },
        { title: 'Green Campus Initiative', page: 'feature', tag: 'Environment', articleId: 'green-campus' },
        { title: 'Mental Health Matters', page: 'feature', tag: 'Wellness', articleId: 'mental-health' },
        { title: 'The Sailor', page: 'literary', tag: 'Literary', articleId: 'lit-sailor' },
        { title: 'Arts Month Poster', page: 'cartoon', tag: 'Illustration', articleId: 'arts-month-poster' },
        { title: 'Editorial Cartoon', page: 'cartoon', tag: 'Editorial', articleId: 'editorial-cartoon' },
        { title: 'About Metamorphosis', page: 'about', tag: 'About' },
    ];

    function openSearch() {
        searchOverlay.classList.add('open');
        setTimeout(() => searchBig.focus(), 100);
    }

    function closeSearch() {
        searchOverlay.classList.remove('open');
        searchBig.value = '';
        searchResults.innerHTML = '';
    }

    if (searchBtn) searchBtn.addEventListener('click', openSearch);
    if (searchInput) {
        searchInput.addEventListener('click', openSearch);
        searchInput.addEventListener('keydown', (e) => { if (e.key === 'Enter') openSearch(); });
    }
    if (searchClose) searchClose.addEventListener('click', closeSearch);
    if (searchOverlay) {
        searchOverlay.addEventListener('click', (e) => { if (e.target === searchOverlay) closeSearch(); });
    }
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeSearch(); });

    if (searchBig) {
        searchBig.addEventListener('input', () => {
            const q = searchBig.value.toLowerCase().trim();
            if (!q) { searchResults.innerHTML = ''; return; }
            const results = searchableContent.filter(item =>
                item.title.toLowerCase().includes(q) || item.tag.toLowerCase().includes(q)
            );
            if (results.length === 0) {
                searchResults.innerHTML = '<p style="color:rgba(255,255,255,0.4);font-size:0.85rem;">No results found.</p>';
            } else {
                searchResults.innerHTML = results.map(r => `
                    <div class="search-result-item" data-page="${r.page}" data-article-id="${r.articleId || ''}" style="
                        display:flex; align-items:center; gap:14px;
                        padding:12px 0; border-bottom:1px solid rgba(255,255,255,0.07);
                        cursor:pointer; transition:all 0.25s ease;">
                        <span style="font-family:'DM Mono',monospace;font-size:0.6rem;color:var(--gold);letter-spacing:2px;text-transform:uppercase;min-width:90px;">${r.tag}</span>
                        <span style="color:white;font-family:'Bebas Neue',sans-serif;font-size:1.1rem;letter-spacing:1px;">${r.title}</span>
                        <span style="color:rgba(255,255,255,0.3);margin-left:auto;">→</span>
                    </div>
                `).join('');

                document.querySelectorAll('.search-result-item').forEach(item => {
                    item.addEventListener('mouseenter', () => item.style.paddingLeft = '12px');
                    item.addEventListener('mouseleave', () => item.style.paddingLeft = '0');
                    item.addEventListener('click', () => {
                        closeSearch();
                        if (item.dataset.articleId) {
                            showArticle(item.dataset.articleId);
                        } else {
                            showPage(item.dataset.page);
                        }
                    });
                });
            }
        });
    }

    // ═══════════ NEWS TABS ═══════════
    const newsTabs = document.querySelectorAll('.news-tab');
    newsTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            newsTabs.forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.news-tab-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            const target = document.getElementById('tab-' + tab.dataset.tab);
            if (target) {
                target.classList.add('active');
                setTimeout(initReveal, 100);
            }
        });
    });

    // ═══════════ SCROLL REVEAL ═══════════
    function initReveal() {
        const revealEls = document.querySelectorAll('.page.active .reveal, .page.active .reveal-stagger');
        if (revealEls.length === 0) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(el => observer.observe(el));
    }

    // ═══════════ LIKE BUTTON ═══════════
    document.addEventListener('click', (e) => {
        const likeBtn = e.target.closest('.like-btn');
        if (likeBtn && !e.target.closest('.article-link')) {
            const liked = likeBtn.dataset.liked === 'true';
            likeBtn.dataset.liked = !liked;
            likeBtn.style.background = !liked ? 'var(--gold)' : '';
            likeBtn.style.color = !liked ? 'var(--navy)' : '';
            likeBtn.style.borderColor = !liked ? 'var(--gold)' : '';
            const countEl = likeBtn.querySelector('.like-count');
            if (countEl) countEl.textContent = !liked ? 68 : 67;
        }
    });

    // ═══════════ HASH ROUTING ON LOAD ═══════════
    const hash = window.location.hash.replace('#', '');
    const validPages = ['home', 'latest', 'news', 'sports', 'feature', 'literary', 'cartoon', 'about'];
    if (hash && validPages.includes(hash)) {
        showPage(hash);
    } else {
        showPage('home');
    }

    // ═══════════ CARTOON CARD HOVER ═══════════
    document.querySelectorAll('.cartoon-card').forEach(card => {
        card.addEventListener('mouseenter', () => { card.style.filter = 'brightness(1.05)'; });
        card.addEventListener('mouseleave', () => { card.style.filter = ''; });
    });

    // ═══════════ FOOTER SOCIAL ═══════════
    document.querySelectorAll('.social-links p').forEach(el => {
        el.addEventListener('click', () => {
            if (el.textContent.includes('facebook') || el.textContent.includes('smmcmeta')) {
                window.open('https://facebook.com/smmcmetamorphosis', '_blank');
            } else if (el.textContent.includes('@')) {
                window.location.href = 'mailto:metamorphosis.smmc@gmail.com';
            }
        });
    });

    // ═══════════ NAV LOGO ═══════════
    const navLogo = document.querySelector('.nav-logo');
    if (navLogo) {
        navLogo.title = 'Go to Home';
        navLogo.style.cursor = 'pointer';
        navLogo.addEventListener('click', () => showPage('home'));
    }

});
