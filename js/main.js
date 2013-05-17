$(document).ready(function() {
  $.get("menu.html", function(data) { 
    $("#navigation-menu").append(data); 
    var page = window.location.href.slice(window.location.href.lastIndexOf("/")+1);
    $("a[href*='" + page + "']").parent().addClass("active");
  });
});
