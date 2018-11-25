$(document).ready(function(){
    $('.event__select-itembox').on('click', function(){
        var v = $(this).find('input').data('item');
        $('.event__select-info').hide();
        $('#event__select-item' + v).show();
    })
})


popup = {
    open: function(target){
        $('#blackbg').show();
        $('.popup.' + target).stop().fadeIn('500')
    },
    close: function(){
        $('.popup').add('#blackbg').hide();
    }
}