function copy(id) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(id).text()).select();
    document.execCommand("copy");
    $('.copied').addClass('active');
    setTimeout(function() {
        $('.copied').removeClass('active');
    }, 1800);
    $temp.remove();
};