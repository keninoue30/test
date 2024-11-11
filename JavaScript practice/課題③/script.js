
//var hankei = ["5","7","10"];
//var en = 3.14
//
//for(var x = 0; x <3; x++){
//    var o =hankei[x] * hankei[x] * en
//    document.write(o,"<br>");
//}
//document.write("<br><br>");

//引数　hankei=半径、en=円周率

function menseki(hankei) {
    return hankei * hankei * 3.14;
}
document.write( menseki(5) +"<br>");
document.write( menseki( 7) +"<br>");
document.write( menseki( 10) +"<br>");

document.write("<br><br>");


//引数 on=大人人数、Kn=子供人数、otona=大人単価、kodomo=子供単価
function ryoukin(on, kn, otona = 500, kodomo = 200) {
    return (on * otona) + (kn * kodomo) + "円です。";
}
document.write(ryoukin(2, 4)+"<br>");
document.write(ryoukin(1, 5)+"<br>");
document.write(ryoukin(3, 7)+"<br>");


























