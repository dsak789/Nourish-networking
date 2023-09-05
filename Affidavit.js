
function preview()
{
    var first = document.getElementById("first").value;
    var last = document.getElementById("last").value;
    var pay = document.getElementById("pay").value;
    var term = document.getElementById("term").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;
    
    document.write("<link rel='StyleSheet' href='Style.css'/>");
    document.write("<div class='result'><center>");
    document.write("<h1>Declaration</h1><br/><br/>");
    document.write("I <u>"+first+" "+last+"</u> residing at <u>"+address+"</u> ");
    // document.write("<br/><br/><br/>");
    document.write("is promised to pay a sum of "+pay+" "+term+" to <u>Batch-III Nourish Network Non-profit Organization.</u>");
    document.write("<br/><br/>");
    // var rpy = Number.parseInt(rent)*12;
    document.write("Contact : <u>"+email+"</u><br/><br/>");
    document.write("</center></div>");
    document.write("<button onclick='printPDF()'>Print as PDF</button>");
}

function printPDF(){
    window.print();
}