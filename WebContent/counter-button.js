function onLike() {
    var clicks = 0;
    clicks += 1;
    document.getElementById("clicks").innerHTML = clicks;
}

function onDislike() {
    var clicks = 0;
    clicks -= 1;
    document.getElementById("clicks").innerHTML = clicks;
}
