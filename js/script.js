particlesJS.load('particles-js', '/snippets/wp-content/themes/snippets/assets/particles.json')

function waitForElement(selector) {
    return new Promise(resolve => {
        if (document.querySelector(selector)) {
            return resolve(document.querySelector(selector));
        }

        const observer = new MutationObserver(mutations => {
            if (document.querySelector(selector)) {
                observer.disconnect();

                resolve(document.querySelector(selector));
            }
        });

        observer.observe(document.body, {childList: true, subtree: true});
    });
}

jQuery(async function() {
    const wp_block_search__button = await waitForElement('.wp-block-search__button');
    const wp_block_search__input = await waitForElement('.wp-block-search__input');
    
    wp_block_search__button.addEventListener("click", function() {
        if (wp_block_search__input.classList.contains("hidden")) {
            wp_block_search__input.classList.remove("hidden");
            wp_block_search__input.focus();
        } else {
            wp_block_search__input.classList.add("hidden");
        }
    });

    const hljs = require('../libraries/highlight/highlight.js');
});