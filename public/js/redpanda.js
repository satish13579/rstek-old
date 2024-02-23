$('body').on('mouseenter mouseleave', '.dropdown', function (e) {
    var _d = $(e.target).closest('.dropdown')
    if (e.type === 'mouseenter') _d.addClass('show')
    setTimeout(function () {
      _d.toggleClass('show', _d.is(':hover'))
      $('[data-toggle="dropdown"]', _d).attr('aria-expanded', _d.is(':hover'))
    }, 300)
  })
  
  /* this is not needed, just prevents page reload when a dd link is clicked */
  $('.dropdown a').on('click tap', (e) => e.preventDefault())