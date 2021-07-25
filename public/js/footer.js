$(document).ready(function () {
    $(selector).submit(function (e) { 
        e.preventDefault();
        
    });
    $.ajax({
        type: "method",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
});