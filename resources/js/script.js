document.addEventListener('DOMContentLoaded', () => {
    // Search button functionality
    const searchBtn = document.getElementById('search-btn');
    const searchInput = document.querySelector('.search-bar input');

    searchBtn.addEventListener('click', () => {
        const query = searchInput.value;
        if (query) {
            alert(`Searching for: ${query}`);
        }
    });

    // Simple scroll reveal for cards
    const cards = document.querySelectorAll('.card, .feature-item, .opinion-item');
    
    const revealOnScroll = () => {
        cards.forEach(card => {
            const cardTop = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (cardTop < windowHeight - 50) {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }
        });
    };

    // Set initial state for cards
    cards.forEach(card => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "all 0.6s ease-out";
    });

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Run once on load
});

// Add this to your reveal script to prevent layout jumping
document.querySelectorAll('.card, .feature-item, .opinion-item').forEach(el => {
    el.style.opacity = "0";
    el.style.transform = "translateY(20px)";
    el.style.transition = "all 0.6s ease-out";
    el.style.visibility = "visible"; // Ensure it still takes up space
});