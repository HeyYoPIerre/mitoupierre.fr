window.requestAnimFrame = (function () {
  return (
    window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    function (callback) {
      window.setTimeout(callback, 1000 / 60);
    }
  );
})();

const wrapSlider = document.querySelector("#js-wrapSlider");
if (wrapSlider != null) {
  const widthWrap = wrapSlider.offsetWidth;

  let items;
  let sliders;
  let sliderList = [];

  const getSliderList = () => {
    sliders = document.querySelectorAll(".js-slider");
    // get the dom elements in a array to better use it
    sliderList = [...sliders];
  };
  // made a function for update later
  getSliderList();

  const slider = document.querySelectorAll(".js-slider")[0];
  const sliderWidth = slider.offsetWidth;

  const sumIsLargerThanSlider = sliderWidth >= widthWrap + sliderWidth;

  const iterationItems = Math.ceil((widthWrap + sliderWidth) / sliderWidth);

  // we clone number of slider we need
  if (iterationItems > 1) {
    for (let i = 0; i < iterationItems - 1; i++) {
      const clone = slider.cloneNode(true);
      wrapSlider.appendChild(clone);
    }

    getSliderList();
  }

  // we create an array for knowing the state of each item
  let stateList = sliderList.map((item, i) => {
    let pos = 0;
    let start = false;

    // here we allow the slide to start fully at left
    if (i < iterationItems - 1) {
      pos = -widthWrap + sliders[i].offsetWidth * i;
      start = true;

      sliders[i].style.transform = `translate(${pos}px, -50%)`;
    }

    return {
      pos,
      start
    };
  });

  // logic animation for sliding each item at a time
  const translate = () => {
    for (let i = 0; i < sliderList.length; i++) {
      const slider = sliderList[i];
      const sliderWidth = slider.offsetWidth;
      const nextIndex = i != sliderList.length - 1 ? i + 1 : 0;
      let pos;

      // if slider should be in movement
      if (stateList[i].start) {
        stateList[i].pos -= 1;
        pos = stateList[i].pos;

        slider.style.transform = `translate(${pos}px, -50%)`;
      }

      const isComplete = pos <= -sliderWidth;
      const isOutSeen = pos <= -widthWrap - sliderWidth;

      // if the slider is fully on screen
      if (isComplete) {
        stateList[nextIndex].start = true;
      }
      // if the slider finished crossing the slider and has disappeared
      if (isOutSeen) {
        stateList[i].start = false;
        stateList[i].pos = 0;
      }
    }
  };

  let isPaused = false;

  function start() {
    if (!isPaused) {
      translate();
    }

    requestAnimFrame(start);
  }

  wrapSlider.addEventListener("mouseover", () => {
    isPaused = true;
  });
  wrapSlider.addEventListener("mouseout", () => {
    isPaused = false;
  });

  start();
};

//text fade-in on scroll
//Selectionne toutes les classes .reveal puis pour chaque entrée du tableau, les observes(API intersection observer).
let targets = document.querySelectorAll('[class*="reveal-"]')
if (targets) {
  //
  let observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      //console.log(entry.isIntersecting)
      //console.log(entry.intersectionRatio) 
      if (entry.isIntersecting) {
        entry.target.classList.add("reveal-visible");
      }

    })
  }, {
    threshold: [0]
  });
  targets.forEach(target => {
    observer.observe(target);
  });
};



function animateCounter() {
  const counters = document.querySelectorAll('.counter');

  const options = {
    threshold: 1,
    rootMargin: '0px'
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const targetValue = +entry.target.getAttribute('data-count');
        const duration = 2400;
        const increment = Math.ceil(targetValue / (duration / 16));

        let currentValue = 0;

        const interval = setInterval(() => {
          currentValue += increment;

          if (currentValue >= targetValue) {
            entry.target.innerText = targetValue;
            clearInterval(interval);
            observer.unobserve(entry.target);
          } else {
            entry.target.innerText = currentValue;
          }
        }, 16);
      }
    });
  }, options);

  counters.forEach((counter) => {
    observer.observe(counter);
  });
}

animateCounter();

var className = "bg-c5";
var scrollTrigger = 60;
const header = document.querySelector("#header");

window.addEventListener("scroll", (event) => {animateHeader()});

function animateHeader() {
  if (window.scrollY >= scrollTrigger) {
    header.classList.add(className);
  } else {
    header.classList.remove(className);
  }
};
