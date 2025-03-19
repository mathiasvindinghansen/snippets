particlesJS.load('particles-js', '/snippets/wp-content/themes/snippets/assets/particles.json')

jQuery(function() {
    const search_icon_button = document.getElementById("search-icon-button");
    const search_bar_toggleable = document.getElementById("search-bar-toggleable");
    
    search_icon_button.addEventListener("click", function() {
        if (search_bar_toggleable.classList.contains("hidden")) {
            search_bar_toggleable.classList.remove("hidden");
        } else {
            search_bar_toggleable.classList.add("hidden");
        }
    });
});