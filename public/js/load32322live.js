(function () {
    var container = $('#container'), el = $('[data-fetch="home.html"]');

    setTimeout(function () {
        $(el[1]).trigger('click');
    }, 500);

    $('.menu__item').on('click', 'a', function () {
        $this = $(this), $('.menu__item').removeClass('menu__item--current'), $this.parent().addClass('menu__item--current');

        if ($this.data('fetch') !== "home.html") { $('.hideme').hide(); $('#home').addClass('inner-bg-w3'); } else { $('.hideme').show(); $('#home').removeClass('inner-bg-w3'); };

        container.load('./pages/' + $this.data('fetch'), function () {
             ////document.location.href = "./" + $this.data('fetch').substr(0, 5);
             
            
        });


    });
    container.off().on('click', '[data-load]', function fetchPage() {
        console.info($(this).data('load'));
        container.load('./pages/' + $(this).data('load'));
    });


})();