$(document).ready(function(){
    $('input,select,textarea').on('blur',validateForm);
});
function submitForm() {
    var error = 0;
    $('.required').each(function(){
        if($(this).val() == ''){
            $(this).addClass('form-error');
            if($(this).hasClass('form-success')){
                $(this).removeClass('form-success');
            }
            error++;
        }else{
            $(this).removeClass('form-error');
            $(this).addClass('form-success');
        }
    });

    if(error == 0){
        var html = '<button class="btn btn-info space-button" type="button" disabled><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Saving...</button>';
        $('button[type="submit"]').after(html);
        $('button[type="submit"]').hide();
        return true;
    }
    return false;
}



function validateForm() {
    $('.form-error').each(function(){
        if($(this).val() == ''){
            if(!$(this).hasClass('form-error')){
                $(this).addClass('form-error');
            }
            if($(this).hasClass('form-success')){
                $(this).removeClass('form-success');
            }
        }else{
            if($(this).hasClass('form-error')){
                $(this).removeClass('form-error');
            }
            if(!$(this).hasClass('form-success')){
                $(this).addClass('form-success');
            }
        }
    });
    $('.form-success').each(function(){
        if($(this).val() == ''){
            if(!$(this).hasClass('form-error')){
                $(this).addClass('form-error');
            }
            if($(this).hasClass('form-success')){
                $(this).removeClass('form-success');
            }
        }else{
            if($(this).hasClass('form-error')){
                $(this).removeClass('form-error');
            }
            if(!$(this).hasClass('form-success')){
                $(this).addClass('form-success');
            }
        }
    });
}

/* *******Added by Priyanka */

/* Ends here */
