$(document).ready(function(){
    $("#Form").submit(function() {
        var form_data = $(this).serialize(); 
        $.ajax({
            type: "POST",
            url: "telegram_bot.php",
            data: form_data,
            success: swal({
                title: "Спасибо за обращение, скоро вам ответим!",
                icon: "success",
                timer: 2000
            })
        });
        $('#Send_button').prop('disabled', true)
        event.preventDefault();
    });
});
