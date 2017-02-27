$(document).ready(function() {
	$('footer .row.flex2').scrollToFixed( { bottom: 0} );
    $('#my_popup').popup({
        blur:false,
        transition: 'all 0.3s',
        scrolllock: false,
        background: false,
        backgroundactive:false,
        onclose: function() {setTimeout(showchat, 40000);}
    });
    var d = new Date();
    var gio = d.getHours();
    var phut = d.getMinutes();
    if((7<gio&&gio<22)||(gio==22&&phut<=30)||(gio==7&&phut>=30)){
        setTimeout(showchat, 15000);
    }
});
function showchat() {
    $('#my_popup').popup('show');
  }
$(function(){
    $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
    $('main .flex1col1 >.box').css({'height':($('main .flex1col1').height())+'px'});
    $('.sualoipvtruong .lists .flex3col1 >.box').css({'height':($('.sualoipvtruong .lists .flex3col1').height())+'px'});
    $('.sualoipvtruong .lists .flex4col1 >.box').css({'height':($('.sualoipvtruong .lists .flex4col1').height())+'px'});
    $('.sualoipvtruong .lists .flex2col1 >.box').css({'height':($('.sualoipvtruong .lists .flex2col1').height())+'px'});
    $(window).resize(function(){
        $('menu .flex1col1 >.box').css({'height':($('menu .flex1col1').height())+'px'});
        $('main .flex1col1 >.box').css({'height':($('main .flex1col1').height())+'px'});
        $('.sualoipvtruong .lists .flex3col1 >.box').css({'height':($('.sualoipvtruong .lists .flex3col1').height())+'px'});
        $('.sualoipvtruong .lists .flex4col1 >.box').css({'height':($('.sualoipvtruong .lists .flex4col1').height())+'px'});
        $('.sualoipvtruong .lists .flex2col1 >.box').css({'height':($('.sualoipvtruong .lists .flex2col1').height())+'px'});
    });
});