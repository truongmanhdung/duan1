var information = document.getElementById("in4");
information.style.display = "flex";
var information = document.getElementById("in42");
information.style.display = "block";

function openEvent(evt, anhien, abc) {
    var i, tabcontent, chucnang;
    tabcontent = document.getElementsByClassName("tabcontent");
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    for (i = 0; i < tabcontent2.length; i++) {
        tabcontent2[i].style.display = "none";
    }
    chucnang = document.getElementsByClassName("chucnang");
    for (i = 0; i < chucnang.length; i++) {
        chucnang[i].className = chucnang[i].className.replace(" active", "");
    }
    document.getElementById(anhien).style.display = "flex";
    document.getElementById(abc).style.display = "block";
    evt.currentTarget.className += " active";
}