particlesJS.load('particles-js', '/snippets/wp-content/themes/snippets/assets/particles.json')

jQuery(function() {
    const wp_block_search__button = document.getElementById("wp-block-search__button");
    const wp_block_search__input = document.getElementById("wp-block-search__input");
    
    wp_block_search__button.addEventListener("click", function() {
        if (wp_block_search__input.classList.contains("hidden")) {
            wp_block_search__input.classList.remove("hidden");
            wp_block_search__input.focus();
        } else {
            wp_block_search__input.classList.add("hidden");
        }
    });
});