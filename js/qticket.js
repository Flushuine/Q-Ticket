//Modal logout
$(document).ready(function() {
  $("a#logout").click(function() {
    var url = this.href;
    //console.log(url);
    $("#modalLogout .btn-danger").click(function() {
      window.location.href = url;
      //console.log(url);
    });
  });
});

//Get parameters url
var url_string = window.location.href.toLowerCase();
var url = new URL(url_string);
var err = url.searchParams.get("err");

if (err == 1) {
  $(window).on("load", function() {
    $("#err1").modal("show");
  });
} else if (err == 2) {
  $(window).on("load", function() {
    $("#err2").modal("show");
  });
} else if (err == 3) {
  $(window).on("load", function() {
    $("#err3").modal("show");
  });
}

//Set class to active
$(function() {
  $("#signup").addClass("active");
});

$(function() {
  $("#home").addClass("active");
});

//Date picker
$(function() {
  $("#inputDate").datepicker({
    format: "yyyy-mm-dd"
  });
});
