document.getElementById('toggle').addEventListener("click", function() {
    let element=document.getElementById('passwordInput')
    if (element.type === "password"){
        element.type = "text";
    } else {
        element.type="password"
    }
})
