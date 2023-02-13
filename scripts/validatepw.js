function validate() {
    var pwd = document.getElementById("pwd").value;

    var pwdregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[+\-#$]).{8,20}$/

    if(pwd.match(pwdregex)) {
        return true;
    } else {
        document.getElementById("pwd_reqs").style.color = "red";
        return false;
    }
}