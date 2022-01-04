$(document).ready(function () { 
    $(".adminLoginBtn").click(function(){
        $(".loginForm").attr("action", "http://127.0.0.1:8000/admin/login");
    });
    
    $(".header__userLoginBtn").click(function(){
        $(".loginForm").attr("action", "http://127.0.0.1:8000/login");
    });
})
