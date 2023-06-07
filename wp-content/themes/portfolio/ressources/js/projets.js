/*---------- Renaud Vmb ----------*/
document.documentElement.classList.add("js-enabled");

import "./menu";

/* Effect letter title */
const spansLetter = document.querySelectorAll('.word span');

spansLetter.forEach((span, idx) => {
    span.addEventListener('click', (e) => {
        e.currentTarget.classList.add('active');
    });
    span.addEventListener('animationend', (e) => {
        e.currentTarget.classList.remove('active');
    });

    // Initial animation
    setTimeout(() => {
        span.classList.add('active');
    }, 750 * (idx+1))
});

// Image hover effect
