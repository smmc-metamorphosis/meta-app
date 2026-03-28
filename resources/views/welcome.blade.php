<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metamorphosis - Student Publication</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo-section">
                <img src="logo.png" alt="Logo" class="nav-logo">
                <div class="brand">
                    <h1>METAMORPHOSIS</h1>
                    <p>THE OFFICIAL STUDENT PUBLICATION OF SAN MATEO MUNICIPAL COLLEGE</p>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="index.html" class="active">HOME</a></li>
                <li><a href="latest.html">LATEST</a></li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="sports.html">SPORTS</a></li>
                <li><a href="feature.html">FEATURE</a></li>
                <li><a href="literary.html">LITERARY</a></li>
                <li><a href="graphics.html">GRAPHICS</a></li>
                <li><a href="about.html">ABOUT</a></li>
            </ul>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button id="search-btn">🔍</button>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2 class="hero-welcome">Welcome to the,</h2>
            <h1 class="hero-title">
                SMMC Student<br>
                <span>Publication</span>
            </h1>
            
            <a href="latest.html" class="cta-button">
                <i class="fa-solid fa-pen-nib"></i> Read Latest Issue
            </a>
        </div>
    </section>
<style>
    /* --- CSS VARIABLES & RESET --- */
:root {
    --primary-blue: #0044cc;
    --accent-green: #00a651; /* Matches the building green from the image */
    --text-white: #ffffff;
    --overlay-dark: rgba(0, 0, 0, 0.4); /* Darkens background for text readability */
    --navy: #0a0a45;
    --dark-navy: #0a0a45;
    --gold: #f1c40f;
    --white: #ffffff;
    --bg: #e5e5e5;
    --bg-gray: #e5e5e5;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    overflow-x: hidden;
}

/* --- NAVBAR STYLING --- */
header {
    background-color: var(--navy);
    color: var(--white);
    padding: 10px 5%;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
}

.logo-section {
    display: flex; /* Aligns logo image and text in a row */
    align-items: center; /* Centers them vertically */
    gap: 15px; /* Space between the logo and the publication name */
}

.nav-logo {
    width: 50px; /* Adjust size as needed */
    height: auto;
    object-fit: contain;
}

.brand h1 {
    margin: 0;
    font-size: 1.4rem;
    letter-spacing: 1px;
    line-height: 1;
}

.brand p {
    margin: 0;
    font-size: 0.6rem;
    opacity: 0.8;
    letter-spacing: 0.5px;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 20px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: bold;
}

.nav-links a.active { 
    color: var(--gold); 
}

/* --- 4. Search Bar --- */
.search-bar {
    border: 1.5px solid var(--gold);
    border-radius: 20px;
    padding: 2px 10px;
}

.search-bar input {
    background: transparent;
    border: none;
    color: white;
    outline: none;
}

.search-bar button {
    background: none;
    border: none;
    cursor: pointer;
}

/* --- 5. Layout Containers (Overlap Fix Applied) --- */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 50px; /* This creates the even vertical spacing between rows */
}

.layout-grid, .split-grid {
    display: grid;
    grid-template-columns: 2fr 1fr; /* Matches the 2/3 and 1/3 split */
    gap: 30px; /* Horizontal gap between main content and sidebar */
}

.section-row {
    width: 100%;
}

/* --- 6. Section Headers --- */
.section-header {
    display: flex;
    align-items: flex-end;
    margin-bottom: 15px;
}

.section-label, .label {
    background-color: var(--navy);
    color: white;
    padding: 5px 15px;
    font-size: 0.9rem;
    margin: 0;
    font-weight: bold;
    text-transform: uppercase;
}

.header-line, .line {
    flex-grow: 1;
    height: 3px;
    background-color: var(--navy);
}

/* --- HERO SECTION STYLING --- */
.hero {
    height: 100vh;
    width: 100%;
    /* IMPORTANT: Replace the URL below with your actual campus image */
    background-image: linear-gradient(var(--overlay-dark), var(--overlay-dark)), url('https://scontent.fmnl33-4.fna.fbcdn.net/v/t39.30808-6/490405795_605722305755902_7679458958080356871_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeGS-NfIgP-ApSbrkfGW-qOAlMumhnscBU2Uy6aGexwFTcDT0vRQT9_yn-4zJmDXdBk1r3RMuebF7ZFXURpmtOeU&_nc_ohc=rYcVnSXDtH0Q7kNvwFpo1dN&_nc_oc=Adlj1pbFHqXnGn_3z69u6ZEAiAXiDnVg-pGPdvLtaBQ-5UwLvJO7yII5Kgyg6Tq268A&_nc_zt=23&_nc_ht=scontent.fmnl33-4.fna&_nc_gid=jl_nO8MZw8i4ucmFhpFZgQ&oh=00_AfvnYBE6QQEoeYG1daI5K4oNzdkK-L3jG1kefWIDKmejeg&oe=698E3FC1'); 
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    padding-left: 5%;
    position: relative;
}

.hero-content {
    color: var(--text-white);
    max-width: 800px;
    margin-top: 50px; 
}

.hero-welcome {
    font-size: 1.5rem;
    font-weight: 300;
    margin-bottom: 5px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero-title {
    font-size: 4rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 25px;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
}

.hero-title span {
    display: block;
}

.cta-button {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background-color: var(--primary-blue);
    color: white;
    padding: 12px 30px;
    border-radius: 30px; 
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: transform 0.3s, background 0.3s;
    box-shadow: 0 4px 15px rgba(0, 68, 204, 0.4);
}

.cta-button:hover {
    transform: translateY(-3px);
    background-color: #003399;
}

/* --- RESPONSIVE DESIGN --- */
@media (max-width: 768px) {
    .nav-menu {
        display: none; /* Hidden on mobile */
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
}
/* --- HAMBURGER MENU STYLES --- */
.menu-toggle {
    display: none; /* Hidden on desktop */
    flex-direction: column;
    cursor: pointer;
}

.menu-toggle .bar {
    width: 25px;
    height: 3px;
    background-color: var(--text-white);
    margin: 3px 0;
    transition: 0.4s;
}

/* --- RESPONSIVE DESIGN & MOBILE NAV --- */
@media (max-width: 768px) {
    /* Show the hamburger icon */
    .menu-toggle {
        display: flex; 
    }

    /* Style the navigation menu as a dropdown */
    .nav-menu {
        display: grid;
        grid-template-rows: repeat(3, auto);
        background: rgba(0, 0, 0, 0.95); /* Dark background */
        position: absolute;
        top: 100%; /* Push it right below the header */
        left: 0;
        width: 100%;
        height: 0; /* Hidden by default */
        overflow: hidden; /* Hide content when closed */
        transition: all 0.4s ease;
        z-index: 999;
        gap: 0; /* Remove gap handled by padding */
    }

    /* The 'active' class slides the menu open */
    .nav-menu.active {
        height: 200px; /* Adjust height based on number of items */
    }

    /* Style individual links for mobile */
    .nav-menu li {
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-menu li a {
        width: 100%;
        padding: 20px;
        display: table; 
    }

    .nav-menu li a:hover {
        background-color: var(--primary-blue);
        color: var(--text-white);
    }

    /* Hamburger Animation to 'X' */
    .menu-toggle.is-active .bar:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .menu-toggle.is-active .bar:nth-child(2) {
        opacity: 0;
    }

    .menu-toggle.is-active .bar:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
}
</style>
    <script src="script.js"></script>
</body>
</html>
