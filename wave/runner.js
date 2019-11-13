document.ready

function init() {
    var myWave1 = wavify(document.getElementById('feel-the-wave'), {
        height: 500,
        bones: 4,
        amplitude: 40,
        color: 'rgba(0, 146, 21, .8)',
        speed: .2
    });

    var myWave2 = wavify(document.getElementById('feel-the-wave-two'), {
        height: 520,
        bones: 3,
        amplitude: 70,
        color: 'rgba(0, 222, 32, .8)',
        speed: .15
    });

    setInterval(generateModule, 2500);
}

document.getElementById("hb-hamburger").addEventListener("click", function () {
    this.classList.toggle("is-active");
    document.getElementById("hb-menu").classList.toggle("hb-menu-active");
}, false);