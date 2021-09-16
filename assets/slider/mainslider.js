/**
 * Инициализация слайдера
 * @param {number} config.slideToShow сколько слайдов показывать
 * @param {number} config.slideToScroll на сколько слайдов скролить за один  раз
 * @param {string} config.anchor якорь где инициализировать в DOM
 */

class renderingSlider {
  constructor(config) {
    // SET CONFIG PARAMETRES
    this.slideToShow = config.slideToShow || 1;
    this.slideToScroll = config.slideToScroll || 1;
    this.anchor = config.anchor || document.body;
    this.delay = config.delay || 3000;
    this.autoplay = config.autoplay || false;

    this.position = 0; //сдвиг трека в px
    this.currentSlide = 0; // номер слайда в показе     
    this.interval;

    this.slider1 = document.querySelector("#slider-1");   
    this.track = this.anchor.querySelector(".slider-track");
    this.wrapper = document.querySelector('.slider-wrapper');
    this.btnPrev = this.anchor.querySelector(".btn-prev");
    this.btnNext = this.anchor.querySelector(".btn-next");
    this.preview = document.querySelector(".preview");
    this.items = this.anchor.querySelectorAll(" .slider-item"); 
    this.dot =this.anchor.querySelectorAll('.dot'); 
    
    
    this.itemsCount = this.items.length; // кол-во всех слайдеров
    this.itemWidth = this.anchor.clientWidth / this.slideToShow; //размер каждого слайдера = размер контейнера всех элементов / на кол-во слайдеров в показе
    this.movePosition = this.slideToScroll * this.itemWidth; //на сколько двигать трек за один раз в px
    

  }
  

  start() {   
    const self = this;
    // проверка на наличие слайдов
    if (this.items === null || this.itemsCount === 0)  {
      console.log("Не найден в Dom", track);
    } else {
      this.preview.style.display = "none";
      this.anchor.style.opacity= "1";
         // добавляем в стили ширину каждого слайда
      this.items.forEach((item) => {
        item.style.minWidth = `${this.itemWidth}px`;
        // console.log(item.style.minWidth);
      });  
      // запускаем инициализацию обработчик событий      
      this.eventsListeners(); 
         
      // автопрокрутка
      // console.log(this.anchor === this.slider1);
      if (this.autoplay && this.delay !== 0  && this.anchor === this.slider1) {
        this.interval = setInterval(self.slideScrollNext.bind(self), self.delay);
      }   
         
    }
 
  }
  //сдвиг слайда на кол-во slideToScroll
  // вправо
  slideScrollNext() {
    //Ширина сдвинутых слайдов = (размер в px всех проскроленных слайдеров - кол-во слайдов для показа, которые отображены в данный момент на странице* ширину одного слайда)/ширину одного слайда
    const shiftedSlidesWidth =
      (Math.abs(this.position) + this.slideToShow * this.itemWidth) /
      this.itemWidth;
    //оставшееся количество слайдов для прокрутки = к-во слайдов всего - ширина сдвинутых слайдов
    const itemsLeft = this.itemsCount - shiftedSlidesWidth;

    //movePosition - на сколько мы сдвинаем обычно
    let remainingWidth = itemsLeft * this.itemWidth; // оставшаяяся ширина несдвинутых слайдов

    //slideToScroll - количество сладйов, на сколько мы сдвигаем за один раз
    //проверим хватает ли оставшихся слайдов для обычного шага
    let isRemainingSlidersEnough = itemsLeft >= this.slideToScroll;

    //если да сдвигаем на  movePosition
    //если нет сдигаем на оставшуюся ширину remainingWidth
    this.position -= isRemainingSlidersEnough ? this.movePosition : remainingWidth;      
    this.currentSlide++;    
    // console.log(this.currentSlide[0]);
    if(this.currentSlide >= this.itemsCount){   
      for (var i = 0; i <= this.itemsCount; i++) {
        this.slideScrollPrev();
    }          
    }
    this.setComputedTreckStyle();
    this.disableEdgeButtons();
  }

  // влево
  slideScrollPrev() {
    const itemsLeft = Math.abs(this.position) / this.itemWidth; //оставшееся количество слайдов для прокрутки
    //movePosition - на сколько мы сдвинаем обычно
    let remainingWidth = itemsLeft * this.itemWidth; // оставшаяяся ширина несдвинутых слайдов

    //slideToScroll - количество сладйов, на сколько мы сдвигаем за один раз

    //проверим хватает ли оставшихся слайдов для обычного шага
    let isRemainingSlidersEnough = itemsLeft >= this.slideToScroll;

    //если да сдвигаем на  movePosition
    //если нет сдигаем на оставшуюся ширину remainingWidth
    this.position += isRemainingSlidersEnough ? this.movePosition : remainingWidth;

    this.setComputedTreckStyle(); //выставим стили вычисленной позиции трека
    this.disableEdgeButtons();
  
    this.currentSlide--;
    
  }
  // остановка и запуск прокрутки слайдера при наведении мышки
   startSlide(){
    this.interval = setInterval(this.slideScrollNext.bind(this), this.delay);      
  }
  stopSlide(){
    clearInterval(this.interval);
  }
  eventMouse(){
    this.slider1.addEventListener("mouseover", this.stopSlide.bind(this)); 
    this.slider1.addEventListener("mouseout", this.startSlide.bind(this));  
  }
  eventsListeners() {
    this.btnNext.addEventListener("click", this.slideScrollNext.bind(this));    
    this.btnPrev.addEventListener("click", this.slideScrollPrev.bind(this));   
    
  }
  // устанавливает позицию для track
  setComputedTreckStyle() {
    this.track.style.transform = `translateX(${this.position}px)`;
  }
  // крайние кнопки disabled ads
  disableEdgeButtons() {
    this.btnPrev.disabled = this.position === 0;
    this.btnNext.disabled =
      this.position <= -(this.itemsCount - this.slideToShow) * this.itemWidth;
      // clearInterval(self.slideScrollNext.bind(self));
  }

  // активация точек слайдера
  tabs(){
    const sliderDots = document.querySelector('.slider-dots'),
          tab = sliderDots.querySelectorAll('.dot'),
          items = this.anchor.querySelectorAll(" .slider-item"); 
        const toggleTabContent = (index) => {         
          for(let i =0; i< items.length; i++){
             if(index === i){
              //  передаем индекс таба слайду и добавляем или удаляем классы
               items[i].classList.remove('d-none');
               tab[i].classList.add('dot-active');
             } else {
              items[i].classList.add('d-none');
              tab[i].classList.remove('dot-active');
             }
          }
        }
          sliderDots.addEventListener('click', (event)=>{
            let target = event.target;
            if(target.classList.contains('dot')){
              //получаем индекс таба и передаем его как параметр в функцию
              tab.forEach((item, i) =>{
                if(item === target){
                  console.log( i);
                  toggleTabContent(i);
                }
              })
            }

          })

  }
  
}

/* конец функции слайдера */

document.addEventListener("DOMContentLoaded", function () {
  "use strict";
  const slider1 = document.querySelector("#slider-1");
  const slider2 = document.querySelector("#slider-2");

  // const config = {slideToShow: 5 , slideToScroll: 2, anchor: slider2, delay: 3000 , autoplay: 2000};

 //  первый слайдер  
  const firstSlider = new renderingSlider({
    anchor: document.querySelector("#slider-1"),
    slideToShow: 1,
    slideToScroll: 1,
    delay: 2500,
    autoplay: true,
    
  });
  firstSlider.eventMouse();  
  firstSlider.tabs();  
  firstSlider.start();

//  второй слайдер
  let secondSlider;
  if (window.matchMedia("(min-width: 1025px)").matches && slider2) {
    secondSlider = new renderingSlider({
      anchor: document.querySelector("#slider-2"),
      slideToShow: 5,
      slideToScroll: 2,
      delay: 0,
    });
  } else if (
    window.matchMedia("(min-width: 769px) and (max-width: 1024px)").matches
  ) {
    secondSlider = new renderingSlider({
      anchor: document.querySelector("#slider-2"),
      slideToShow: 3,
      slideToScroll: 1,
      delay: 0,
    });
  } else if (
    window.matchMedia("(min-width: 471px) and (max-width: 7681px)").matches
  ) {
    secondSlider = new renderingSlider({
      anchor: document.querySelector("#slider-2"),
      slideToShow: 2,
      slideToScroll: 1,
      delay: 0,
    });
  } else if (window.matchMedia("(max-width: 470px)").matches) {
    secondSlider = new renderingSlider({
      anchor: document.querySelector("#slider-2"),
      slideToShow: 1,
      slideToScroll: 1,
      delay: 0,
    });
  }
  secondSlider.start();
});
