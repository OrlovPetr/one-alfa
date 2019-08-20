window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    let loader = document.querySelector('#loader');

    setTimeout(function () {
        loader.classList.add('fadeOut');
    }, 500);

    setTimeout(function () {
        loader.style.display = "none";
    }, 1500);
});
