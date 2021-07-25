var $temp2 = $("<input>");
var $url = $(location).attr('href');

$('.clipboard').on('click', function() {
    $("body").append($temp2);
    $temp2.val($url).select();
    document.execCommand("copy");
    $temp2.remove();
    $(".clipboard span").text("Đã sao chép");
    setTimeout(function() {
        $(".clipboard span").text("Sao chép đường dẫn");
    }, 1800);
})
$('.share-facebook').click(function() {
    var myWindowURL = encodeURIComponent(location.href);
    var myWindowTitle = "Temp Title";
    var myWindowDescription = "Temp Description";
    var myWindowPicture = "http://cdn.business2community.com/wp-content/uploads/2014/04/profile-picture.jpg";
    window.open(
        'https://www.facebook.com/sharer/sharer.php?u=' + myWindowURL + '&title=' + myWindowTitle + '&description=' + myWindowDescription + '&picture=' + myWindowPicture,
        'facebook-share-dialog',
        'width=626,height=436');
    return false;
});

$('.sendEmailDefault').click(function() {
    var email = "";
    var subject = "";
    window.open(`mailto:${email}?subject=${subject}&body=${$url}`);
});