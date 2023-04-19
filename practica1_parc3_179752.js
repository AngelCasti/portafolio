function suma(){
    var num1 = parseInt(prompt("Número 1",""));
    var num2 = parseInt(prompt("Número 2",""));
    alert("El número 1 mas el número 2 es: "+(num1+num2));
}
function restar(){
    var num1 = parseInt(prompt("Número 1",""));
    var num2 = parseInt(prompt("Número 2",""));
    alert("El número 1 menos el número 2 es: "+(num1-num2));
}
function mult(){
    var num1 = parseInt(prompt("Número 1",""));
    var num2 = parseInt(prompt("Número 2",""));
    alert("El número 1 por el número 2 es: "+(num1*num2));
}
function dividir(){
    var num1 = parseInt(prompt("Número 1",""));
    var num2 = parseInt(prompt("Número 2",""));
    alert("El número 1 entre el número 2 es: "+(num1/num2));
}
function posneg(){
    var num1 = parseInt(prompt("Número 1",""));
    if(num1<0){
        alert("El número es negativo");
    }else{
        alert("El número es positivo");
    }
}