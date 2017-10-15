$(document).ready(function(){
  var $root = $('html,body');
  $(".pagelink").on('click', function(event) {
    console.log(event);
    $root.animate({
      scrollTop: $(event.currentTarget.hash).offset().top },
      1000
    );
    return false;
  });

  $(".proj.dropdown").hover(
    function() {
        $('.proj.dropdown-content').slideDown('100');
    },
    function() {
        $('.proj.dropdown-content').slideUp('100');
    }
);

  $(".con.dropdown").hover(
    function() {
        $('.con.dropdown-content').stop(true, true).slideDown('medium');
    },
    function() {
        $('.con.dropdown-content').stop(true, true).slideUp('medium');
    }
);

var stickyHeaderTop = $('#stickyheader').offset().top;

$(window).scroll(function(){
  console.log(stickyHeaderTop);
        if( $(window).scrollTop() > stickyHeaderTop ) {
                $('#stickyheader').css({position: 'fixed', top: '0px'});
                $('#stickyalias').css('display', 'block');
        } else {
                $('#stickyheader').css({position: 'static', top: '0px'});
                $('#stickyalias').css('display', 'none');
        }
});

});
