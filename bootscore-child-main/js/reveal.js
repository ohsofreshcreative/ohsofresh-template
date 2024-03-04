// Funkcja do dodawania klasy aktywnej w przypadku intersekcji
const addActiveClass = (selector, activeClass) => {
    const items = document.querySelectorAll(selector);
    const observerCallback = function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add(activeClass);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback);
    items.forEach(item => {
        observer.observe(item);
    });
};

// Dodawanie klasy dla elementów .blurIn
addActiveClass('.blur', 'active');

// Dodawanie klasy dla elementów .animate2
addActiveClass('.animate2', 'active2');

// Dodawanie klasy dla elementów .blur-1, .blur-2 itd.
for (let i = 1; i <= 100; i++) {
    addActiveClass(`.blur-${i}`, 'active');
}
