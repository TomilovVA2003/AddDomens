(function () {
  $("#myDIV").on("click", "button:not(.active)", function () {
    $(".status__block").css({ display: "none" });
    $(this)
      .addClass("active")
      .siblings()
      .removeClass("active")
      .closest("div.tabs")
      .find("div.tabs__content")
      .removeClass("active")
      .eq($(this).index())
      .addClass("active");
  });

  function startVerification() {
    $id = $(this).parent().attr("id");
    $type = $("#myDIV button.active").attr("id");
    $.ajax({
      type: "post",
      url: "php/startVerification.php",
      data: {
        id: $id,
        type: $type,
      },
      success: function (res) {
        if (res === "VERIFIED") {
          console.log(res);
        } else {
          console.log(1);
          $(".status__block").css({ display: "block" });
        }
      },
    });
  }

  $(".tabs").on("click", "#btnStart", startVerification);
})();
