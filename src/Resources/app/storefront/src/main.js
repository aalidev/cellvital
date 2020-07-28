function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

docReady(function() {
    var body = document.querySelector('body');
    var header = document.querySelector('#sticky-header');
    var offset = header.offsetTop;

    window.onscroll = function() {
        if (window.pageYOffset > offset) {
            body.classList.add('sticky');
        } else {
            body.classList.remove('sticky');
        }
    }
});
