window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    let serviceBlock = document.querySelectorAll('.service_block');

    for (let i = 0; i < serviceBlock.length; i++) {
        serviceBlock[i].style.backgroundImage = "url('/img/services/" + serviceBlock[i].id + "_mono.jpg')";
    }

    for (let i = 0; i < serviceBlock.length; i++) {
        serviceBlock[i].addEventListener('mouseenter', function () {
            serviceBlock[i].style.backgroundImage = "url('/img/services/" + serviceBlock[i].id + ".jpg')";
        })
    }

    for (let i = 0; i < serviceBlock.length; i++) {
        serviceBlock[i].addEventListener('mouseleave', function () {
            serviceBlock[i].style.backgroundImage = "url('/img/services/" + serviceBlock[i].id + "_mono.jpg')";
        })
    }
});
