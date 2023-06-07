/*---------- Renaud Vmb ----------*/
document.documentElement.classList.add("js-enabled");
const body = document.querySelector('body');

import "./menu";

// Highlight Effect
const cards = document.getElementById("cards");
cards.addEventListener("mousemove", e => {
    for(const card of document.getElementsByClassName("card")) {
        const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
    }
});

// Typing Effect
const panels = document.querySelectorAll('.panel');
let index = 0;

function animatePanels(panel) {
    const str = panel.innerHTML.toString();
    let i = 0;

    panel.textContent = "";

    setTimeout(function() {
        const se = setInterval(function() {
            i++;
            panel.innerHTML = str.substr(0, i) + "<span class='benefits__cursor'>|</span>";
            if (i === str.length) {
                clearInterval(se);
                panel.textContent = str;
            }
        }, 25);
    });

    index++;
    if (index < panels.length) {
        setTimeout(() => animatePanels(panels[index]), 1000); // 1000 ms = 1 seconde
    }
}

let animationDone = false;

function startAnimation() {
    if (!animationDone) {
        animationDone = true;
        animatePanels(panels[index]);
    }
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            startAnimation();
        }
    });
});

panels.forEach((panel) => {
    observer.observe(panel);
});

// Effet de parallax sur l'élément d'id "parallax"
const elem = document.querySelector(".parallax");
function parallax(e) {
    let w = window.innerWidth/1.5;
    let h = window.innerHeight/3.5;
    let mouseX = e.clientX;
    let mouseY = e.clientY;
    let _depth1 = `${50 - (mouseX - w) * 0.01}% ${50 - (mouseY - h) * 0.01}%`;
    let _depth2 = `${50 - (mouseX - w) * 0.02}% ${50 - (mouseY - h) * 0.015}%`;
    let _depth3 = `${50 - (mouseX - w) * 0.06}% ${50 - (mouseY - h) * 0.02}%`;
    /*console.log(x);*/
    elem.style.backgroundPosition = `${_depth3}, ${_depth2}, ${_depth1}`;
}
document.addEventListener("mousemove", parallax);


// Bouncing text effect on header__title
const titre = document.querySelector('.bouncing-letters');
const lettres = titre.textContent;

titre.textContent = ""; // pour supprimer le texte de base

for (const lettre of lettres) {
    const createSpan = document.createElement('span');
    titre.appendChild(createSpan);
    if (lettre === ' ') {
        createSpan.appendChild(document.createTextNode('\u00A0'));
    } else {
        createSpan.appendChild(document.createTextNode(lettre));
    }
}

document.querySelectorAll(".bouncing-letters>span").forEach((element) => {
    element.addEventListener("mouseover", (e) => bounce(e.target));
});

function bounce(letter) {
    if (!letter.classList.contains("bounce")) {
        letter.classList.add("bounce");
        setTimeout(
            function () {
                letter.classList.remove("bounce");
            },
            1000
        );
    }
}

// JavaScript to handle tabbed navigation
const filterBtns = document.querySelectorAll('[data-target]'); // Get all filter buttons
let projects = document.querySelectorAll('.work__grid__project'); // Get all projects
let activeBtn = null; // Track the currently active filter button

// Add click event listeners to all filter buttons
filterBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-target'); // Get the target filter
        filterProjects(target, btn);
    });

    // Add keydown event listeners to all filter buttons
    btn.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            const target = btn.getAttribute('data-target'); // Get the target filter
            filterProjects(target, btn);
        } else if (event.key === 'ArrowLeft' && index > 0) {
            event.preventDefault();
            const prevBtn = filterBtns[index - 1]; // Get the previous filter button
            prevBtn.focus();
            filterProjects(prevBtn.getAttribute('data-target'), prevBtn);
        } else if (event.key === 'ArrowRight' && index < filterBtns.length - 1) {
            event.preventDefault();
            const nextBtn = filterBtns[index + 1]; // Get the next filter button
            nextBtn.focus();
            filterProjects(nextBtn.getAttribute('data-target'), nextBtn);
        }
    });
});

function filterProjects(target, btn) {
    // Loop through all projects and show/hide them based on the target filter
    projects.forEach((project) => {
        const id = project.getAttribute('data-id'); // Get the project's data-id attribute

        if (target === 'all' || id === target) {
            project.style.display = 'block'; // Show the project
        } else {
            project.style.display = 'none'; // Hide the project
        }
    });

    // Remove the active class from all filter buttons
    filterBtns.forEach((btn) => {
        btn.classList.remove('active');
    });

    // Add the active class to the clicked filter button
    btn.classList.add('active');

    // Set focus to the clicked filter button
    btn.focus();

    // Update the active filter button
    activeBtn = btn;
}

// Add keydown event listener to the document for arrow key navigation
document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowLeft' && activeBtn && activeBtn.previousElementSibling) {
        event.preventDefault();
        const prevBtn = activeBtn.previousElementSibling;
        prevBtn.focus();
        filterProjects(prevBtn.getAttribute('data-target'), prevBtn);
    } else if (event.key === 'ArrowRight' && activeBtn && activeBtn.nextElementSibling) {
        event.preventDefault();
        const nextBtn = activeBtn.nextElementSibling;
        nextBtn.focus();
        filterProjects(nextBtn.getAttribute('data-target'), nextBtn);
    }
});

// Add a height on the hero__scroll section if viewport(width) >= 1000px
let heroScroll = document.querySelector('.hero__scroll');
if (window.innerWidth >= 1500) {
    heroScroll.style.height = '3200px';
} else if (window.innerWidth >= 1000) {
    heroScroll.style.height = '2800px';
}

// Scroll horizontal dans le slider hero__scroll__bg
let heroScrollBg = document.querySelector('.hero__scroll__bg');
window.addEventListener('scroll', () => {
    heroScrollBg.scrollLeft = window.scrollY - 750;
});

// Bouton 'Tout voir' pour les accordéons qui permettent de cocher ou décocher tous les checkbox
const toggleAllBtn = document.getElementById('toggle-all-btn');
const checkboxes = document.querySelectorAll('input[type="checkbox"][name="accordion"]');

toggleAllBtn.addEventListener('click', () => {
    const isChecked = toggleAllBtn.checked;
    checkboxes.forEach((checkbox) => {
        checkbox.checked = isChecked;
    });
});

/* BackEnd section */
function initTabs() {
    setupTabs();
}

let tabLinks = document.querySelectorAll('.tablinks');
let tabContent = document.querySelectorAll('.tabcontent');

function setupTabs() {
    tabLinks.forEach((link) => {
        link.addEventListener('click', (e) => {
            openTabs(e);
        });
    });
}

function openTabs(e) {
    const btnTarget = e.currentTarget;
    const {language} = btnTarget.dataset;
    tabLinks.forEach((link) => {
        link.classList.remove('active');
    });
    tabContent.forEach((tab)  =>{
        tab.classList.remove('active');
    });
    document.querySelector(`#${language}`).classList.add('active');
    btnTarget.classList.add('active');
}

initTabs();

// Arrow following link
const arrow = document.querySelector('.arrow');
const rotationFactor = 25; // Facteur de rotation

function rotateArrow(event) {
    let x = (arrow.getBoundingClientRect().left) + (arrow.clientWidth / 2);
    let y = (arrow.getBoundingClientRect().top) + (arrow.clientHeight / 2);

    let radian = Math.atan2(event.pageX - x, event.pageY - y);
    let rot = (radian * (180 / Math.PI) * -1) + 45;
    // Multiplier par le facteur de rotation
    rot *= rotationFactor;
    arrow.style.transform = "rotate(" + rot + "deg)";
}

body.addEventListener('mousemove', rotateArrow);


