var option = {
    stringsElement: '.texts',
    typeSpeed: 60,
    backSpeed: 60,
    smartBackspace: true,
    loop: true,
    autoInsertCss: true,
    cursorChar: ""
};

var typed = new Typed('#elements', option);   

$(window).scroll(function() {
    if ($(document).scrollTop() > (window.innerHeight*2) && $("#myModal").attr("displayed") === "false") {
      $('#myModal').modal('show');
      $("#myModal").attr("displayed", "true");
    }
  });