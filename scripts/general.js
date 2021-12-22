$(function () {
    const origin = window.location.origin;
    if(origin === "http://localhost"){
        $("a[href='/']").attr("href", "/WebDevFinal/")
        $("a[href='/admin']").attr("href", "/WebDevFinal/admin")
        $("a[href='/signup']").attr("href", "/WebDevFinal/signup")
        $("a[href='/login']").attr("href", "/WebDevFinal/login")
    }

})