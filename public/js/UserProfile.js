$(document).ready(function () {

    $(".adminLoginBtn").click(function () {
        $(".loginForm").attr("action", "http://127.0.0.1:8000/admin/login");
    });

    $(".header__userLoginBtn").click(function () {
        $(".loginForm").attr("action", "http://127.0.0.1:8000/login");
    });

    $("form input:not([class=header__searchInput]), label").attr('disabled', true);
    $('form input[type=submit], label[for=""]').hide();

    $(".profile__contentTitle span").click(function () {

        if ($(this).text() === 'Edit') {

            $(this).closest("form").find('input[type=submit], label[for=""]').show();
            $(this).text('Cancel');
            $(this).closest("form").find("input, label").attr('disabled', false);

        } else {

            $(this).text('Edit');
            $(this).closest("form").find('input[type=submit], label[for=""]').hide();
            $(this).closest("form").find("input, label").attr('disabled', true);
            
        }
    })
})