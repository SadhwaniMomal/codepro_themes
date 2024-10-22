  $(document).ready(function () {
    function updateCarouselSettings() {
      if (window.innerWidth <= 768) {
        // Mobile view: Show 1 card
        visibleCards = 1;
      } else {
        // Desktop view: Show 3 cards
        visibleCards = 3;
      }
      cardWidth = $(".card").outerWidth(true);
    }

    let cardWidth = $(".card").outerWidth(true);
    let currentPosition = 0;
    const totalCards = $(".card").length;
    let visibleCards = 3;

    // Update settings on page load and window resize
    updateCarouselSettings();
    $(window).resize(updateCarouselSettings);

    function slideNext() {
      if (currentPosition > -(totalCards - visibleCards) * cardWidth) {
        currentPosition -= cardWidth;
        $("#carouselInner").animate({ scrollLeft: -currentPosition }, 400);
      } else {
        // Reset to the first card if reached the end
        currentPosition = 0;
        $("#carouselInner").animate({ scrollLeft: -currentPosition }, 400);
      }
    }

    function slidePrev() {
      if (currentPosition < 0) {
        currentPosition += cardWidth;
        $("#carouselInner").animate({ scrollLeft: -currentPosition }, 400);
      } else {
        // Move to the last card if at the beginning
        currentPosition = -(totalCards - visibleCards) * cardWidth;
        $("#carouselInner").animate({ scrollLeft: -currentPosition }, 400);
      }
    }

    $("#nextBtn").click(slideNext);
    $("#prevBtn").click(slidePrev);

    // Auto-slide every 3000ms
    setInterval(slideNext, 3000);
  });