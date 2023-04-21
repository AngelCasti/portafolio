function sumarFunc(){
    var num1, num2;
    num1=parseFloat(document.getElementById("num1").value);
    num2=parseFloat(document.getElementById("num2").value);
    document.getElementById("resultado").innerHTML=(num1+num2);
}
function restarFunc(){
    var num1, num2;
    num1=parseFloat(document.getElementById("num1").value);
    num2=parseFloat(document.getElementById("num2").value);
    document.getElementById("resultado").innerHTML=(num1-num2);
}
function multFunc(){
    var num1, num2;
    num1=parseFloat(document.getElementById("num1").value);
    num2=parseFloat(document.getElementById("num2").value);
    document.getElementById("resultado").innerHTML=(num1*num2);
}
function dividirFunc(){
    var num1, num2;
    num1=parseFloat(document.getElementById("num1").value);
    num2=parseFloat(document.getElementById("num2").value);
    document.getElementById("resultado").innerHTML=(num1/num2);
}