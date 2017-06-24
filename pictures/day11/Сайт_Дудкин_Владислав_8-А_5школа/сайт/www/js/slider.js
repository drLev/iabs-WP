
    function ClickItem1 ()
    {
      $("#slide").carousel(0);
      $(this).parents("ul.nav-tabs").find("li").removeClass("active");
  		$(this).parent().addClass("active");
      return false;
    }
    function ClickItem2 ()
    {
        $("#slide").carousel(1);
        $(this).parents("ul.nav-tabs").find("li").removeClass("active");
  		  $(this).parent().addClass("active");
        return false;
    }
    function ClickItem3 ()
    {
        $("#slide").carousel(2);
        $(this).parents("ul.nav-tabs").find("li").removeClass("active");
  		  $(this).parent().addClass("active");
        return false;
    }