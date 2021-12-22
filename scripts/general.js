$(function () {
    const origin = window.location.origin;
    if(origin === "http://localhost"){
        $("a[href='/']").attr("href", "/WebDevFinal/")
        $("a[href='./views/admin.php']").attr("href", "/WebDevFinal/views/admin.php")
        $("a[href='./views/signup.php']").attr("href", "/WebDevFinal/views/signup.php")
        $("a[href='./views/login.php']").attr("href", "/WebDevFinal/views/login.php")
    }

})