// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

// Load HTML file
$('#primary-nav a').click( function (e) {
    var elAnchor = $(this).attr('href');
    if ( (elAnchor.length > 0) && (elAnchor != "#")) {
        e.preventDefault();
        $('#primary-content').load('./layouts/' + elAnchor + '?' + Math.random());
    }
});
// Load active
var activeElAnchor = $('#primary-nav .uk-active a').attr('href');
$('#primary-content').load('./layouts/' + activeElAnchor + '?' + Math.random());

// Load Login page
$('#login-page').click( function (e) {
    var elAnchor = $(this).attr('href');
    if ( (elAnchor.length > 0) && (elAnchor != "#")) {
        e.preventDefault();
        $('html, body').addClass('uk-height-1-1 tm-muted-background');
        $('body').load('./layouts/' + elAnchor + '?' + Math.random());
    }
});


