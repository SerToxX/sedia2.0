document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('img');

    images.forEach((img) => {
        const isHeaderIcon =
            img.closest('.class-header-search-icon') ||
            img.closest('.class-header-cart-icon');

        if (!img.hasAttribute('decoding')) {
            img.setAttribute('decoding', 'async');
        }

        if (isHeaderIcon || img.hasAttribute('loading')) {
            return;
        }

        const rect = img.getBoundingClientRect();
        const isNearViewport = rect.top < window.innerHeight * 1.2;

        if (isNearViewport) {
            img.setAttribute('loading', 'eager');
            if (!img.hasAttribute('fetchpriority')) img.setAttribute('fetchpriority', 'high');
        } else {
            img.setAttribute('loading', 'lazy');
            if (!img.hasAttribute('fetchpriority')) img.setAttribute('fetchpriority', 'low');
        }
    });

    const preventIfImageTarget = (event) => {
        if (event.target.closest('img')) {
            event.preventDefault();
        }
    };

    document.addEventListener('contextmenu', preventIfImageTarget);
    document.addEventListener('dragstart', preventIfImageTarget);

    document.addEventListener('keydown', (event) => {
        const key = event.key.toLowerCase();
        const isSaveShortcut = event.ctrlKey && key === 's';
        const isViewSourceShortcut = event.ctrlKey && key === 'u';

        if (isSaveShortcut || isViewSourceShortcut) {
            event.preventDefault();
        }
    });

    images.forEach((img) => {
        img.setAttribute('draggable', 'false');
    });
});
