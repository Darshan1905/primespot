const prevIcon = "<img src='/assets/images/Prev-Next-icon/w-arrow-left.svg' />";
const nextIcon =
  "<img src='/assets/images/Prev-Next-icon/w-arrow-right.svg' />";

$(".index1").owlCarousel({
  items: 6,
  nav: true,
  autoplay: true,
  autoplayHoverPause:true,
  autoplayTimeout: 2000,
  margin: 30,
  dots: false,
  loop: true,
  navText: [prevIcon, nextIcon],
  responsive: {
    0: {
      items: 2,
      nav: false,
      dots: true,
    },
    600: {
      items: 3,
      nav: true,
    },
    1000: {
      items: 6,
      // nav:true,
      // loop:false
    },
  },
});

$(".index2").owlCarousel({
  items: 1,
  nav: true,
  autoplay: true,
  mouseDrag: false,
  autoplayTimeout: 2000,
  // animateIn: true,
  //   animateOut: "slideOutUp",
  animateOut: "fadeOut",
  animateIn: "fadeIn",
  margin: 30,
  dots: false,
  loop: true,
  navText: [prevIcon, nextIcon],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 1,
      nav: true,
    },
    1000: {
      items: 1,
      // nav:true,
      // loop:false
    },
  },
});




const iprevIcon = "<img src='/assets/images/Prev-Next-icon/b-arrow-left.svg' />";
const inextIcon =
  "<img src='/assets/images/Prev-Next-icon/b-arrow-right.svg' />";

$(".index3").owlCarousel({
  items: 1,
  nav: true,
  autoplay: true,
  mouseDrag: false,
  autoplayTimeout: 2000,
  // animateIn: true,
  //   animateOut: "slideOutUp",
  // animateOut: "fadeOut",
  // animateIn: "fadeIn",
  margin: 30,
  dots: false,
  loop: true,
  navText: [iprevIcon, inextIcon],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 1,
      nav: true,
    },
    1000: {
      items: 1,
      // nav:true,
      // loop:false
    },
  },
});
// clientele

$(".home-2").owlCarousel({
  mouseDrag: false,
  touchDrag: false,
  pullDrag: false,
  freeDrag: false,
  items: 1,
  nav: false,
  dots: true,
  dotsData: true,
  // animateOut: true,
  // animateIn: true,
  // loop: true,
  // nav: true,
  // navText: [snextIcon, sprevIcon],
});

// **************

const cliprevIcon =
  "<img src='/assets/images/Prev-Next-icon/w-circle-arrow-left.svg' />";
const clinextIcon =
  "<img src='/assets/images/Prev-Next-icon/w-circle-arrow-right.svg' />";

$(".clientele1").owlCarousel({
  items: 4,
  nav: true,
  margin: 10,
  dots: false,
  autoplay: true,
  autoplayTimeout: 2000,
  loop: true,
  navText: [cliprevIcon, clinextIcon],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 2,
      nav: true,
    },
    1000: {
      items: 4,
      // nav:true,
      // loop:false
    },
  },
});

// Company Page

const cprevIcon =
  "<img src='/assets/images/Prev-Next-icon/w-circle-arrow-left.svg' />";
const cnextIcon =
  "<img src='/assets/images/Prev-Next-icon/w-circle-arrow-right.svg' />";

$(".company1").owlCarousel({
  items: 4,
  nav: true,
  dots: false,
  
  autoplay: true,
  autoplayTimeout: 2000,
  loop: true,
  navText: [cprevIcon, cnextIcon],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 2,
      nav: true,
    },
    1000: {
      items: 4,
      // nav:true,
      // loop:false
    },
  },
});

const comprevIcon =
  "<img src='/assets/images/Prev-Next-icon/b-circle-arrow-left.svg' />";
const comnextIcon =
  "<img src='/assets/images/Prev-Next-icon/b-circle-arrow-right.svg' />";

$(".company2").owlCarousel({
  nav: true,
  dots: false,
  autoplay: true,
  margin:20,
  autoplayTimeout: 2000,
  loop: true,
  navText: [comprevIcon, comnextIcon],
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    600: {
      items: 2,
      nav: true,
    },
    1000: {
      items: 3,
      // nav:true,
      // loop:false
    },
  },
});


// Solution page

const sprevIcon =
  "<img src='/assets/images/Prev-Next-icon/b-arrow-left.svg' />";
const snextIcon =
  "<img src='/assets/images/Prev-Next-icon/b-arrow-right.svg' />";

$(".solution1").owlCarousel({
  nav: true,
  dots: false,
  // loop: true,
  mouseDrag: false,
  touchDrag: false,
  pullDrag: false,
  navText: [sprevIcon, snextIcon],
  responsive: {
    0: {
      items: 1,
      // nav: false,
      // dots: true,
    },
    617: {
      items: 2,
      // nav: true,
    },
    1000: {
      items: 3,
      // nav:true,
      // loop:false
    },
    1199: {
      items: 4,
      // nav:true,
      // loop:false
    },
  },
});


// Integration page 

// const sprevIcon =
//   "<img src='/assets/images/Prev-Next-icon/b-arrow-left.svg' />";
// const snextIcon =
//   "<img src='/assets/images/Prev-Next-icon/b-arrow-right.svg' />";

$(".integration1").owlCarousel({
  nav: true,
  dots: false,
  // loop: true,
  rewind:false,
  mouseDrag: false,
  touchDrag: false,
  pullDrag: false,
  navText: [sprevIcon, snextIcon],
  responsive: {
    0: {
      items: 2,
      // nav: false,
      // dots: true,
    },
    617: {
      items: 3,
      // nav: true,
    },
    1000: {
      items: 3,
      // nav:true,
      // loop:false
    },
    1199: {
      items: 4,
      // nav:true,
      // loop:false
    },
  },
});


$(".integration2").owlCarousel({
  nav: true,
  dots: false,
  // loop: true,
  rewind:false,
  mouseDrag: false,
  touchDrag: false,
  pullDrag: false,
  navText: [sprevIcon, snextIcon],
  responsive: {
    0: {
      items: 2,
      // nav: false,
      // dots: true,
    },
    617: {
      items: 3,
      // nav: true,
    },
    1000: {
      items: 3,
      // nav:true,
      // loop:false
    },
    1199: {
      items: 4,
      // nav:true,
      // loop:false
    },
  },
});