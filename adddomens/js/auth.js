(function () {
  (function () {
    getHosts();
  })();

  $("#btnAdd").on("click", (e) => {
    e.preventDefault();

    $.ajax({
      type: "post",
      url: "php/addLink.php",
      data: $("#formAddLink").serialize(),
      success: function () {
        $("#nameInput").val("");
        getHosts();
      },
    });
  });

  $("#addLinks").on("click", (e) => {
    e.preventDefault();
    // console.log($("#formAddArrLinks").serialize().split("%0D%0A"));

    $.ajax({
      type: "post",
      url: "php/addArrLinks.php",
      data: $("#formAddArrLinks").serialize(),
      success: function () {
        $("#nameTextarea").val("");
        getHosts();
      },
    });
  });

  function getHosts() {
    $.ajax({
      type: "get",
      url: "php/getHosts.php",
      dataType: "html",
      success: function (response) {
        $(".tbl-content").empty();
        $(".tbl-content").append(response);
      },
    });
  }

  function deleteLink() {
    let $id = $(this).parent().attr("id");

    $.ajax({
      type: "post",
      url: "php/deleteLink.php",
      data: {
        id: $id,
      },
      success: function () {
        getHosts();
      },
    });
  }

  function getVerificationId() {
    let $id = $(this).parent().attr("id");
    let $name = $(this).text().trim();
    $.ajax({
      type: "post",
      url: "php/getVerificationId.php",
      data: {
        id: $id,
        name: $name,
      },
      success: function (res) {
        window.location.replace(res);
      },
    });
  }

  $(".tbl-content").on("click", ".tbl-content__item .btn__delete", deleteLink);

  $(".tbl-content").on(
    "click",
    ".tbl-content__item .name__host",
    getVerificationId
  );
})();
