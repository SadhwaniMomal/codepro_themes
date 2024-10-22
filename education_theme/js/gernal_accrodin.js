function toggleAccordion(header) {
    const $header = $(header);
    const $body = $header.next(".accordion-body");
    const $icon = $header.find(".icon");
    const isOpen = $body.height() && $body.height() !== 0;

    // Close all open accordion items
    $(".accordion-body").height(0);
    $(".accordion-header").removeClass("active");
    $(".accordion-header .icon").text("+");

    // Toggle the clicked item
    if (!isOpen) {
      $body.height($body[0].scrollHeight); // Set the height to content's height
      $header.addClass("active");
      $icon.text("−"); // Change icon to minus when opened
    } else {
      $body.height(0);
    }
  }

  $(document).ready(function () {
    $(".accordion-header").on("click", function () {
      toggleAccordion(this);
    });
  });