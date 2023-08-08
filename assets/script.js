document.addEventListener("DOMContentLoaded", function () {
  const gridCards = document.querySelectorAll(".grid_card");

  gridCards.forEach((card) => {
    card.addEventListener("click", function () {
      card.classList.toggle("hovered");

      
      gridCards.forEach((otherCard) => {
        if (otherCard !== card) {
          otherCard.classList.remove("hovered");
        }
      });
    });
  });
});

