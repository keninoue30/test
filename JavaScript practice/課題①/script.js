//問１
for (var star = 1; star < 6; star++) {
    document.write("★");
}
document.write("<br><br>");


//問２ 8未満
for (var star = 1; star < 8; star++) {
    if (star < 4 || star >4 ) {
        document.write("★");
    }else {
        document.write("<br>");
    }
}
document.write("<br><br>");


//問３
for (var star = 1; star < 11; star++) {
    // ココからコードを書く
    document.write("☆");
    if (star == 5) {
        // ココからコードを書く
        document.write("<br>");
        // ココから
    }
}
document.write("<br><br>");


//問４
for　(var br = 1; br < 5; br++) {
    // ココから
    for　(var star =1; star < 6; star++)　{
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br><br>");


//問５
for　(var br = 1; br < 5; br++) {
    for　(var star =1; star < 4; star++)　{
        document.write("★");
    } 
    document.write("<br>");
}
document.write("<br><br>");


//問６
for　(var br =1; br < 4; br++) {
    for　(var star = 1; star < 4; star++)　{
        if (star % 2 == 0 ) {
            document.write("★");
        }else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br><br>");


//問７
for (var br = 0; br < 4; br++) {
    for (var star =1; star < 6; star++) {
        // ココから
        if (star % 3 == 0 ) {
            document.write("★");
        }else {
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br><br>");


//問８
for (var br =1; br < 6; br++) {
    for ( var star = 1; star <= br; star++) {
        document.write("★");
    }
    document.write("<br>");
}
