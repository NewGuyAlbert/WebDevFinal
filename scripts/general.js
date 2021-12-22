$(function () {
    const origin = window.location.origin;
    if(origin === "http://localhost"){
        $("a[href='/']").attr("href", "/WebDevFinal/")
        $("a[href='./admin.php']").attr("href", "/WebDevFinal/views/admin.php")
        $("a[href='./signup.php']").attr("href", "/WebDevFinal/views/signup.php")
        $("a[href='./login.php']").attr("href", "/WebDevFinal/views/login.php")
    }

})