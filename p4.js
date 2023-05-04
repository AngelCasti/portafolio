function rfc(){
    var erefc;
    var nom= document.getElementById("nombre").value;
    var apePa= document.getElementById("apPa").value;
    var apeMa= document.getElementById("apMa").value;
    var year=document.getElementById("ano").value;
    var month=document.getElementById("mes").value;
    var day=document.getElementById("dia").value;

    erefc=apePa.charAt(0);
    erefc+=apePa.charAt(1);
    erefc+=apeMa.charAt(0);
    erefc+=nom.charAt(0);
    erefc+=year.charAt(2);
    erefc+=year.charAt(3);
    erefc+=month.charAt(0);
    erefc+=month.charAt(1);
    erefc+=day.charAt(0);
    erefc+=day.charAt(1);

    var ERREFC=erefc.toUpperCase();

    document.getElementById("resultado").innerHTML=ERREFC;
}