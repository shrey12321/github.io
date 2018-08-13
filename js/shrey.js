function myf()
{
   if("600px" == document.getElementsByClassName("option")[0].style.maxHeight) 
         {
           document.getElementsByClassName("ham")[0].style.transform = "rotate(0deg)";
           document.getElementsByClassName("ham")[0].style.transition = "0.9s ";
           document.getElementsByClassName("option")[0].style.maxHeight = "0px";
         }
        else
         {
            document.getElementsByClassName("ham")[0].style.transform = "rotate(-90deg)";
            document.getElementsByClassName("ham")[0].style.transition = "0.9s ";
            document.getElementsByClassName("option")[0].style.maxHeight = "600px";
            document.getElementsByClassName("option")[0].style.transition = "0.5s ";
         }
}

function isInViewport(e)
{
   return elementTop = $(e).offset().top, elementBottom = elementTop + $(e).outerHeight(), viewportTop = $(window).scrollTop(), viewportBottom = viewportTop + $(window).height(), elementBottom > viewportTop && viewportBottom > elementTop
}
$("body").css("overflow-y", "hidden");
window.onload = function()
{
   $("html,body").scrollTop(0);
  /* if(screen.width<750)
     {
      document.getElementsByClassName('nav')[0].style.position="absolute";
      document.getElementsByClassName('ham')[0].style.position="absolute";
      
     }
     */
    window.scrollY >= $(".bg").offset().top && window.scrollY < $(".about").offset().top && $("#home").addClass("liactivate"), $("body").css("overflow-y", "auto"), document.getElementsByClassName("page")[0].style.display = "block", document.getElementsByClassName("loader")[0].style.display = "none", $(".arrow").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".about").offset().top
      }, "slow")
   }), $("#home").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".bg").offset().top
      }, 500)
   }), $("#about").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".about").offset().top
      }, 500)
   }), $("#skills").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".skill").offset().top
      }, 500)
   }), $("#education").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".education").offset().top
      }, 500)
   }), $("#experiance").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".experiance").offset().top
      }, 500)
   }), $("#contact").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".contact").offset().top+40
      }, 500)
   }), $("#portfolio").click(function()
   {
      $("html,body").animate(
      {
         scrollTop: $(".portfolio").offset().top
      }, 500)
   });
     document.getElementsByClassName("container")[0].style.display = "block";
     document.getElementsByClassName("container")[0].className += " anim-container";
      if(screen.width>700 || (screen.height > 550 ))
      {
       document.getElementsByClassName("ham")[0].style.position = "fixed";
       document.getElementsByClassName("nav")[0].style.position = "fixed";
       }
       else
       {
          document.getElementsByClassName("ham")[0].removeAttribute("style");
           document.getElementsByClassName("nav")[0].removeAttribute("style");
       }
};
 window.onresize = function()
{
   screen.width > 750 && document.getElementsByClassName("option")[0].removeAttribute("style"), document.getElementsByClassName("ham")[0].removeAttribute("style"), screen.height > 380 ? (document.getElementsByClassName("ham")[0].style.position = "fixed", document.getElementsByClassName("nav")[0].style.position = "fixed") : (document.getElementsByClassName("ham")[0].removeAttribute("style"), document.getElementsByClassName("nav")[0].removeAttribute("style"))
   /*  if(screen.width<750)
     {
      document.getElementsByClassName('nav')[0].style.position="absolute";
      document.getElementsByClassName('ham')[0].style.position="absolute";
      
     }
     */

      if( screen.width>700 || (screen.height > 550 ) )
      {
       document.getElementsByClassName("ham")[0].style.position = "fixed";
       document.getElementsByClassName("nav")[0].style.position = "fixed";
       }
       else
       {
          document.getElementsByClassName("ham")[0].removeAttribute("style");
           document.getElementsByClassName("nav")[0].removeAttribute("style");
       }
};

 
var elementTop, elementBottom, viewportTop, viewportBottom;
$(window).scroll(function()
{
   $(".li1").removeClass("liactivate"), window.scrollY >= $(".bg").offset().top && window.scrollY < $(".about").offset().top && $("#home").addClass("liactivate"), window.scrollY >= $(".about").offset().top && window.scrollY < $(".skill").offset().top && $("#about").addClass("liactivate"), window.scrollY >= $(".skill").offset().top && window.scrollY < $(".education").offset().top && $("#skills").addClass("liactivate"), window.scrollY >= $(".education").offset().top && window.scrollY < $(".experiance").offset().top && $("#education").addClass("liactivate"), window.scrollY >= $(".experiance").offset().top && window.scrollY < $(".portfolio").offset().top && $("#experiance").addClass("liactivate"),window.scrollY >= $(".portfolio").offset().top && window.scrollY < $(".contact").offset().top && $("#portfolio").addClass("liactivate"), window.scrollY >= $(".contact").offset().top && $("#contact").addClass("liactivate");
});
