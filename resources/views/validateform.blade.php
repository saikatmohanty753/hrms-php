<script type="text/javascript">
function submitForm() {
    var form = $("#formSave")
    $('input[type="text"]').each(function(){
        console.log('ok');
        if($(this).val() == ''){
            $(this).addClass('form-error');
            return false;
        }else{
            $(this).removeClass('form-error');
            $(this).addClass('form-success');
        }
    });
    return false;
}
</script>
