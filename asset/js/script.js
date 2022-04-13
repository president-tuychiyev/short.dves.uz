$(document).ready(function () {
  $(".modal-trigger").leanModal();
});

$(".btn-short").click(function () {
  let url = $("#url").val();
  let domain = window.location.protocol + '//' + window.location.hostname;
  if (url.search(domain) == -1) {
    if (url.search("https://") != -1 || url.search("http://") != -1) {
      $.post(domain + "/api/create", { url: url }, function (result) {
        $("#url").val(domain + "/s/" + result.shortUrl);
      });

      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });

      Toast.fire({
        icon: "success",
        title:
          "The link has been turned into a short link, you can copy and use",
      });
    } else {
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });

      Toast.fire({
        icon: "error",
        title:
          "Address error entered! https or http protocol is not available",
      });
    }
  } else {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "warning",
      title: "This link is abbreviated!",
    });
  }
});
