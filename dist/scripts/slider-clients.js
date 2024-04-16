// <!-- Script for Slider Clients -->

var slider = tns({
  container: ".clients__slider",
  items: 3,
  autoplay: true,
  autoplayButtonOutput: false,
  controls: false,
  mouseDrag: true,
  nav: false,
  slideBy: "page",
  swipeAngle: false,
  speed: 100,
  gutter: 15,
  responsive: {
    420: {
      items: 6,
      gutter: 20,
    },
  },
});
