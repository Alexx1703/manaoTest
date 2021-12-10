$(function(auth) {

    $.validator.addMethod("alphabetsnspace", function(value, element) {
        return this.optional(element) || /^[A-Za-zА-Яа-яЁё0-9]*$/.test(value);
    });

    $("#auth").validate({
        rules: {
            login: {
                required: true,
            },
            pass: {
                required: true,
                alphabetsnspace: true,
            },   
        },
    });

    jQuery.ajax({
        url:      "url", 
        type:     "POST", 
        dataType: "html", 
        data: jQuery("#auth").serialize(),  
        success: function(response) { 
            result = jQuery.parseJSON(response);
            console.log(result);
            },
        error: function(response) { 
            console.log('Ошибка. Данные не отправлены.');
        }

    });
});