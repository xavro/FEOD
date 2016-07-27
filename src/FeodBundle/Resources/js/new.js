$('a[data-toggle="tab"]').on('shown.bs.tab', function () {
    $(this.hash).find('.chosen-select').chosen('destroy').chosen();
});
$('.rougebox').on('change',function(){
    if($(this).is(':checked')){
        console.log('salut')
        $('#rouge').addClass('alert rouge');
    }else{
        $('#rouge').removeClass('alert rouge');
    }
});