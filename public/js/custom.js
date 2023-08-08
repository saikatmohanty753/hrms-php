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
function validateForm() {
    $(".alpha").each(function () {
        var textPattern = /^\S+$/;
        if (!textPattern.test($(this).val())) {
            $(this).addClass("invalid");
        } else {
            $(this).removeClass("invalid");
        }
    });

    $(".numeric").each(function () {
        var numericPattern = /^\d*$/;
        if (!numericPattern.test($(this).val())) {
            $(this).addClass("invalid");
        } else {
            $(this).removeClass("invalid");
        }
    });

    $(".form-error, .form-success").each(function () {
        const isEmpty = $(this).val() === "";

        if (!isEmpty) {
            $(this).removeClass("form-error").addClass("form-success");
        } else {
            $(this).removeClass("form-success").addClass("form-error");
        }
    });
}


/* Ends here */
