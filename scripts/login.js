$(function () {
    $("#login-btn").on('click', (e) => {
        e.preventDefault();
        const formData = new FormData(document.getElementById("login-form"));
        for (const value of formData.values()) {
            console.log(value);
        }
    })
    $(".form").keypress(function (e) {
        if (e.which == 13){
            e.preventDefault();
            const formData = new FormData(document.getElementById("login-form"));
            for (const value of formData.values()) {
                console.log(value);
            }
            return false;
        }
    });
})
