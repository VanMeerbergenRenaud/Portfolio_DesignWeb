// Menu Buttons
const searchButton = document.getElementById("search__button");
const searchSvgAnimation = document.querySelector(".search__button");
const searchBar = document.getElementById("search__bar");

function animateSearchBar() {
    searchSvgAnimation.classList.add("rotate-animation");

    // remove the animation class after the animation is finished
    setTimeout(() => {
        searchSvgAnimation.classList.remove("rotate-animation");
    }, 500);
}

searchButton.addEventListener("click", () => {
    searchBar.classList.toggle("hidden");
    animateSearchBar();
});

// Add a click event listener to the search bar to hide it when clicked outside
searchBar.addEventListener("click", (e) => {
    if (e.target === searchBar) {
        searchBar.classList.add("hidden");
    }
});

// Add a keyboard event listener to show the search bar when the "CMD/CTRL + K" key combination is pressed
document.addEventListener("keydown", (e) => {
    if ((e.metaKey || e.ctrlKey) && e.key === "k") {
        searchBar.classList.toggle("hidden");
        const audio = new Audio("https://renaud-vmb.com/wp-content/themes/portfolio/public/sounds/search.mp3");
        audio.play();
        animateSearchBar();
        e.preventDefault();
    }
});

// Ajout d'un son aux boutons du menu
const buttons = [/* ATTENTION valeurs écrites en dure */
    { element: document.getElementById('search__button'), sound: "https://renaud-vmb.com/wp-content/themes/portfolio/public/sounds/search.mp3" },
    { element: document.getElementById('menu__button'), sound: "https://renaud-vmb.com/wp-content/themes/portfolio/public/sounds/menu.mp3" }
];

buttons.forEach(button => {
    const audio = new Audio(button.sound);
    button.element.addEventListener('click', () => {
        audio.play();
    });
});