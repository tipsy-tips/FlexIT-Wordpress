// <!-- Script for Slider with arrow -->
var slider = tns({
  container: ".test__contentlist",
  items: 1,
  controls: true,
  nav: false,
  autoplayButtonOutput: false,
  slideBy: "page",
  autoplay: false,
  mouseDrag: true,
  controlsText: [
    '<i class="fa-solid fa-chevron-left"></i>',
    '<i class="fa-solid fa-chevron-right"></i>',
  ],
});
