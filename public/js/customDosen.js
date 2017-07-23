$(document).ready(function(){


  $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");

    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  });
  
  /*$(".list-group > .list-group-item").hover(
    function(){ $(this).addClass('active') },
    function(){ $(this).removeClass('active') }
  )*/

  /*$(document).ready(function(){
    $('.assignedSubject').click(function() {
        var a = document.getElementsByClassName('assignedSubject');
        for (i = 0; i < a.length; i++) {
          // Remove the class 'active' if it exists
          //$(a[i]).removeClass('active');
          $(a[i]).removeClass(function(n) {
          if (n==0||n==1) {return "active"}
          else {return "list-group-item-action"}
          });
        }
        $(this).addClass('active');
        $('.assignedTitle').text($(this).text());
        var b = <?php echo $assigned[]; ?>;
        $('.assignedContent').text(b);
    });
  }*/

  
});