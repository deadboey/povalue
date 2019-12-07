function like(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter += 1;
        document.getElementById(id).innerHTML = counter;
    } 
}

function dislike(num) {
    var id = "clicks-" + num;
    var counter = Number(document.getElementById(id).innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        counter -= 1;
        document.getElementById(id).innerHTML = counter;
    } 
}
