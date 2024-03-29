$(function () {
  var group = $(".mypag");

  group.each(function () {
    var _group = new GroupTon(this);
  });

  function GroupTon(groupElement) {
    var box = $(groupElement).find(".C");
    //    var title = $(groupElement).find(".MDetails");

    box.each(function (idx) {
      var newBox = new RootBox(this);
      if (idx > 0) {
        newBox.siblingsClose();
      }
    });
  }

  function RootBox(boxElement) {
    var _this = this;
    var boxEl = $(boxElement);
    var target = $(boxEl).find(".MDetails");
    var cont = $(boxEl).find(".test");

    target.on("click", ClickEvent);

    function ClickEvent() {
      if (cont.is(":hidden")) {
        _this.open();
      } else {
        _this.close();
      }
    }

    _this.siblingsClose = function () {
      cont.css("display", "none");
    };

    _this.open = function () {
      cont.slideDown();
    };
    _this.close = function () {
      cont.slideUp();
    };
  }
});
