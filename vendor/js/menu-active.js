$(".navbar-nav .nav-link.active").removeClass('active');
// add active class to proper navbar item that matches window.location
$('.navbar-nav a[href="' + location + '"].nav-link').closest('.nav-link').addClass('active');