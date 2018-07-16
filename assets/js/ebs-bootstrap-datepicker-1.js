$(document).ready(function(){
    $('.datepicker').datepicker({
        inline: true,
        todayHighlight: false,
		autoclose: true
    }).datepicker('update', new Date());
});