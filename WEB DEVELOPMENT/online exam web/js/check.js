document.getElementById("check").onclick = function(){
    var p = document.getElementById("PASS").value;
    var cp = document.getElementById("CPASS").value;

    if(p != cp) {
        alert("Password Dont Match");
        return false;
    }
}