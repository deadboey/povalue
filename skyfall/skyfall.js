jQuery.fn.rotate = function (degrees) {
    $(this).css({ 'transform': 'rotate(' + degrees + 'deg)' });
    return $(this);
};

var activeModules = 0;

function generateModule() {
    var max = 70;
    var min = 30;
    var mW = Math.random() * (max - min) + min;
    var pos = Math.random() * (80 - (-140)) + (-140);

    colors = ["#ff9100", "#ffc400", "#ff3d00"];

    activeModules += 1;

    var bselm = $('<div class="hb-module-wrapper"><div class="hb-module" ></div ></div>').css("width", mW).css("height", mW).css("margin-left", pos).appendTo('#animation-wrapper');
    bselm.find(".hb-module").first().css("background-color", colors[Math.floor(Math.random() * colors.length)]);
    fallDown(bselm);
}

function fallDown(jQObj) {
    var rotation = 0;

    var iv1 = setInterval(function () {
        jQObj.find('.hb-module').first().rotate(rotation += 1);
    }, 4)
    var iv2 = setInterval(function () {
        if (jQObj.position().top > 1000 || activeModules > 5) {
            clearInterval(iv1);
            clearInterval(iv2);
            jQObj.remove();
            activeModules -= 1;
        }
        jQObj.css('top', jQObj.position().top + 2);
        counter += 1;
    }, 8);
}