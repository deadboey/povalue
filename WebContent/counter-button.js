function onCount() {
    var clicks = Number(document.getElementById("clicks").innerHTML);
    if (document.getElementById("plusfresh").onclick) {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    } 
    
}
