document.getElementById('toggle').addEventListener("click", function() {
    let element=document.getElementById('password')
    if (element.type === "password"){
        element.type = "text";
    } else {
        element.type="password"
    }
})
