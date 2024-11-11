const sliderContainer = document.querySelector('.slider-wrapper');
const slider = document.querySelector('.slider');
const nextBtn = document.querySelector('.carousel-button.prev');
const prevBtn = document.querySelector('.carousel-button.next');
const interval = 3000;

let sliders = document.querySelectorAll('.slider-item');
let index = 1;

const firstClone = sliders[0].cloneNode(true);
const lastClone = sliders[sliders.length - 1].cloneNode(true);

firstClone.id = 'first-clone';
lastClone.id = 'last-clone';

slider.append(firstClone);
slider.prepend(lastClone);

// let slideWidth = sliders[index].clientWidth;

let slideWidth = sliderContainer.clientWidth
slider.style.transform = `translateX(${-slideWidth * index}px)`;

const moveToNextSlide = () =>{
  if(index >= sliders.length - 1) return;
  slideWidth = sliderContainer.clientWidth
  index++;
  slider.style.transform = `translateX(${-slideWidth * index}px)`;
  slider.style.transition = '0.7s';
};

const moveToPreviusSlide = () =>{
  if(index <= 0) return;
  slideWidth = sliderContainer.clientWidth
  index--;
  slider.style.transform = `translateX(${-slideWidth * index}px)`;
  slider.style.transition = '0.7s';
};

const startSlide = () => {
  intervalId = setInterval(() => {
    moveToNextSlide();
  }, interval);
};

slider.addEventListener('transitionend', () => {
  sliders = document.querySelectorAll('.slider-item');
  console.log(index);
  try{
    if(sliders[index].id === firstClone.id) {
      slider.style.transition = 'none';
      slideWidth = sliderContainer.clientWidth
      index = 1;
      slider.style.transform = `translateX(${-slideWidth * index}px)`;
    }
    if(sliders[index].id === lastClone.id) {
      slider.style.transition = 'none';
      slideWidth = sliderContainer.clientWidth
      index = sliders.length - 2;
      slider.style.transform = `translateX(${-slideWidth * index}px)`;
    }
  }
  catch{
    index = 1 ;
  }
});

// Stop the interval
const stopSlide = () => {
  clearInterval(intervalId);
};

// Handle visibility change events
document.addEventListener('visibilitychange', () => {
  if (document.hidden) {
    stopSlide(); // Stop sliding when the tab is hidden
  } else {
    startSlide(); // Resume sliding when the tab is active
  }
});

sliderContainer.addEventListener('mouseenter', stopSlide);
sliderContainer.addEventListener('mouseleave', startSlide);

nextBtn.addEventListener('click', moveToPreviusSlide);
prevBtn.addEventListener('click', moveToNextSlide);


startSlide();

