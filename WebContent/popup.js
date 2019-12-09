var pop = {
  open : function (title, text) {
  // open() : open the popup
  // PARAM title : title of popup box
  //       text : text

    document.getElementById("pop-title").innerHTML = title;
    document.getElementById("pop-text").innerHTML = text;
    document.getElementById("pop-up").classList.add("open");
  },

  close : function () {
  // close() : close the popup

    document.getElementById("pop-up").classList.remove("open");
  }
};