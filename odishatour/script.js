// booking Selection-starting
document.addEventListener("DOMContentLoaded", function () {
  let hotelBtn = document.getElementById("hotel");
  let flightBtn = document.getElementById("flight");
  let trainBtn = document.getElementById("train");
  let hotelArea = document.getElementById("hotel-area-popup");
  let flightArea = document.getElementById("flight-popup");
  let trainArea = document.getElementById("train-popup");

  hotelBtn.addEventListener("click", function () {
    hotelArea.style.visibility = "visible";
    hotelArea.style.opacity = "1";
    flightArea.style.visibility = "hidden";
    flightArea.style.opacity = "0";
    trainArea.style.visibility = "hidden";
    trainArea.style.opacity = "0";
    hotelBtn.style.backgroundColor = "yellow";
    flightBtn.style.backgroundColor = "white";
    trainBtn.style.backgroundColor = "white";
  });

  flightBtn.addEventListener("click", function () {
    hotelArea.style.visibility = "hidden";
    hotelArea.style.opacity = "0";
    flightArea.style.visibility = "visible";
    flightArea.style.opacity = "1";
    trainArea.style.visibility = "hidden";
    trainArea.style.opacity = "0";
    flightBtn.style.backgroundColor = "yellow";
    hotelBtn.style.backgroundColor = "white";
    trainBtn.style.backgroundColor = "white";
  });

  trainBtn.addEventListener("click", function () {
    hotelArea.style.visibility = "hidden";
    hotelArea.style.opacity = "0";
    flightArea.style.visibility = "hidden";
    flightArea.style.opacity = "0";
    trainArea.style.visibility = "visible";
    trainArea.style.opacity = "1";
    trainBtn.style.backgroundColor = "yellow";
    hotelBtn.style.backgroundColor = "white";
    flightBtn.style.backgroundColor = "white";
  });
});

// booking Selection-ending
