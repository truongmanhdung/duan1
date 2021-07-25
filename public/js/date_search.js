
$(function() {
    var today = new Date();
    $('input[name="datefilter1"]').daterangepicker({
        autoUpdateInput: false,
        minDate: today,
        
        locale: {
            cancelLabel: 'Xóa',
            applyLabel: 'Chọn',
            
        }
    });
    // $('#datetimepicker').datetimepicker({  minDate:new Date()});
    $('input[name="datefilter1"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
    });

    $('input[name="datefilter1"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

});
