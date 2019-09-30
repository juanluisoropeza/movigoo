$(document).ready(function () {

  $(".item_menu").click(function(){
    if($(this).hasClass("active")) {
      console.log("es el menu activo")
    } else {
      $(".item_menu").not(this).removeClass("active");
    }
    $(this).toggleClass("active");
  });

  $('#menu_ppal').click(function (e) {
		var $menu = $('.sidenav');
		$menu.toggleClass("open");
		e.preventDefault();
  });

  $('#cerrar').click(function (e) {
    var $menu = $('.sidenav');
		$menu.removeClass("open");
		e.preventDefault();
  });

  $('.navbar-toggler').on('click', function() {
    var img = $('#img_menu');
    var img1 = "images/cerrar.svg";
    var img2 = "images/menu-negro.svg";
    img.attr('src', img.attr('src') == img1 ? img2 : img1);
  });

});
