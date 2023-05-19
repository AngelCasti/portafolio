function comprueba(){
    var x=document.getElementById("fecha").value;
    var mes=x.charAt(5);
    mes+=x.charAt(6);

    var messi=parseInt(mes);
    if(messi==5){
        document.getElementById("resul").value="Felicidades, obtuviste un 2x1";
        
    }else{
        document.getElementById("resul").value="No fuiste tan suertud@...";
    }

    
}