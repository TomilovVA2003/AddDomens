(function () {
  (function () {
    getSitemaps();
  })();
  function getSitemaps() {
    $.ajax({
      type: "get",
      url: "php/getSitemaps.php",
      dataType: "html",
      success: function (res) {
        $(".tbl-content").empty();
        $(".tbl-content").append(res);
      },
    });
  }

  $("#btnAdd").on("click", (e) => {
    e.preventDefault();

    $.ajax({
      type: "post",
      url: "php/createSitemap.php",
      data: $("#formAddLink").serialize(),
      success: () => {
        getSitemaps();
        $("#nameInput").val("");
      },
    });
  });

  function deleteSitemap() {
    let $id = $(this).parent().attr("id");

    $.ajax({
      type: "post",
      url: "php/deleteSitemap.php",
      data: {
        id: $id,
      },
      success: function () {
        getSitemaps();
      },
    });
  }

  $(".tbl-content").on(
    "click",
    ".tbl-content__item .btn__delete",
    deleteSitemap
  );
})();
