$(document).ready(function(){
  $(".preload").fadeOut()
  
  $(".navbar-toggler").on("click", function(){
    $(".sidenav, .bg-sidenav").removeClass("hide")
    $(".sidenav, .bg-sidenav").addClass("show")
  })
  
  $(".bg-sidenav").on("click", function(){
    $(".sidenav, .bg-sidenav").removeClass("show")
    $(".sidenav, .bg-sidenav").addClass("hide")
  })
  
  
})