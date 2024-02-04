/* responsive menu */
function openNav() {
    $('body').addClass("active");
    document.getElementById("mySidenav").style.width = "280px";
}
function closeNav() {
    $('body').removeClass("active");
    document.getElementById("mySidenav").style.width = "0";
}

 /* loader */
$(window).load(function myFunction() {
  $(".s-panel .loader").removeClass("wrloader");
});

//go to top
$(document).ready(function () {
    $("#common-home").parent().addClass("home-page");
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});


$(document).ready(function () {
    if ($(window).width() <= 991) {
        $('.menusp').appendTo('.appmenu');
        $('.curr').appendTo('.haccount');
        $('.langg').appendTo('.haccount');
    }

    $('.toprightw .owl-carousel.owl-theme .owl-buttons').appendTo('.apponbtn');
});


// function openSearch() {
//     $('body').addClass("active-search");
//     document.getElementById("search").style.height = "auto";
//     $('#search').addClass("sideb");
//     // $('.search_query').attr('autofocus', 'autofocus').focus();
// }
// function closeSearch() {
//     $('body').removeClass("active-search");
//     document.getElementById("search").style.height = "0";
//     $('#search').addClass("siden");
//     // $('.search_query').attr('autofocus', 'autofocus').focus();
// }


$(document).ready(function () {
$("#ratep,#ratecount").click(function() {
    $('body,html').animate({
        scrollTop: $(".product-tab").offset().top 
    }, 1500);
});
});

/* dropdown effect of account */
$(document).ready(function () {
    if ($(window).width() <= 767) {
    $('.catfilter').appendTo('.appres');

    $('.dropdown a.account').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
}
$('.imgleft').appendTo('.imgleftspe');
});

$(document).ready(function () {
$('.dropdown button.test').on("click", function(e)  {
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
});
});



/* dropdown */

/* sticky header */
  if ($(window).width() >= 992) {
 $(document).ready(function(){
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            // $('.homemenu').addClass('fixed fadeInDown animated');
        } else {
            // $('.homemenu').removeClass('fixed fadeInDown animated');
        }
      });
});
};


// $(document).ready(function(){
//     if ($(window).width() >= 992) {
// var number_blocks =7;
//     var count_block = $('#menu .m-menu');
//     var moremenu = count_block.slice(number_blocks, count_block.length);
//     moremenu.wrapAll('<li class="view_cat_menu tab-menu"><div class="more-menu sub-menu">');
//     $('.view_cat_menu').prepend('<a href="#" class="submenu-title">More</a>');
//     $('.view_cat_menu').mouseover(function(){
//     $(this).children('div').show();
//     })
//     $('.view_cat_menu').mouseout(function(){
//     $(this).children('div').hide();
//     });
//     };
// });


$(document).ready(function(){
       if ($(window).width() >= 1410){
    var count_block = $('.moremenu').length;
    var number_blocks = 8;
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.moremenu').each(function(i,n){
            $('moremenu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><a class="dropdown-toggle"><i class="fa fa-plus thumb_img"></i>More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 1200 && $(window).width() <= 1409){
    var count_block = $('.moremenu').length;
    var number_blocks = 6;
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.moremenu').each(function(i,n){
            $('moremenu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><a class="dropdown-toggle"><i class="fa fa-plus thumb_img"></i>More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 992 && $(window).width() <= 1199){
    var count_block = $('.moremenu').length;
    var number_blocks = 5;
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.moremenu').each(function(i,n){
            $('moremenu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><a class="dropdown-toggle"><i class="fa fa-plus thumb_img"></i>More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 768 && $(window).width() <= 991){
    var count_block = $('.moremenu').length;
    var number_blocks = 3;
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.moremenu').each(function(i,n){
            $('moremenu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><a class="dropdown-toggle"><i class="fa fa-plus thumb_img"></i>More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

// if ($(document).width() >= 1200){
//      var count_block = $('.nav.navbar-nav .moremenu').length;
//      var number_blocks = 9;
//      if(count_block < number_blocks){
//           return false; 
//      } else {
          
//           $('.nav.navbar-nav .moremenu').each(function(i,n){
//                 if(i == number_blocks) {
//                      $('.nav.navbar-nav').append('<li class="view_more"><a class="dropdown-item"><i class="fa fa-plus"></i> More Categories</a></li>');
//                 }
//                 if(i> number_blocks) {
//                      $(this).addClass('wr_hide_menu');
//                 }
//           })
//           $('.wr_hide_menu').hide();
//           $('.view_more').click(function() {
//                 $(this).toggleClass('active');
//                 $('.wr_hide_menu').slideToggle();
//           });
//      }
// }