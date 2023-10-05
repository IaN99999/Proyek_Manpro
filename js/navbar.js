// document.addEventListener('DOMContentLoaded', function() {
//     const navbarToggle = document.querySelector('.navbar-toggler');
//     const navbarCollapse = document.querySelector('.navbar-collapse');

//     navbarToggle.addEventListener('click', function() {
//         navbarCollapse.classList.toggle('show');
//     });
// });

    document.addEventListener('DOMContentLoaded', function () {
        var navbarToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.querySelector('.navbar-collapse');

        navbarToggler.addEventListener('click', function () {
            if (!navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.add('collapsing');
                navbarCollapse.classList.remove('collapse');
                setTimeout(function () {
                    navbarCollapse.classList.remove('collapsing');
                    navbarCollapse.classList.add('collapse');
                }, 300);
            } else {
                navbarCollapse.classList.add('collapsing');
                setTimeout(function () {
                    navbarCollapse.classList.remove('collapsing');
                    navbarCollapse.classList.remove('show');
                }, 300);
            }
        });
    });
