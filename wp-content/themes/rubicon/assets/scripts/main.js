import 'materialize-css/dist/js/materialize';
import 'select2/dist/js/select2.min';

document.addEventListener('DOMContentLoaded', function() {
    
    // Навигационное меню
    let elems1 = document.querySelectorAll('.sidenav');
    window.M.Sidenav.init(elems1, {});
  
    // Слайдер
    let mainSlider = document.getElementById('main-slider');
    if(mainSlider){
      let instanceMainSlider = window.M.Carousel.init(mainSlider,  {fullWidth: true, indicators: true});
      setInterval(()=>{
        if(instanceMainSlider){
          instanceMainSlider.next();
        }
      }, 3000);
    }
    // Select
    $('.select-country').select2();
    window.select = document.querySelector('.select-country');
    if(window.select){
      window.select.oninput = ()=>{ showSpiner();
                                    request(themeVars.ajaxurl + '?action=get_suspects_data&office=' + window.select.value);
                                  };
    }
    
    if(themeVars.is_auth) document.getElementById('mobile-demo').style.top = '46px';
    
    window.spinner = document.querySelector('.spinner');

    countdownToEvent('counter');
    typing('type');
});

// Функция запроса данных
function request(url){
  fetch(url)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        render(data);
      });     
}

// Функция вывода данных с аякса на страницу
function render(data){
  let htmlData = '';
  data.items.forEach(function(item){
    let priceReward;
    if(item.reward) { let arr = /\$([0-9,]+)(\s?million)?s?/.exec(item.reward);
                      if(arr) priceReward = arr[0];
                    }
    htmlData += `<div class="col s12 m6 l4 wanted-item">
                  <div class="wanted-wrap relative">`;
      htmlData += `<a href="${item.link_url}" target="_blank" class="wanted-slider">`;
      if(priceReward) htmlData += `<div class="price-reward">${priceReward}</div>`;
        htmlData += `<div class="carousel carousel-slider">`;
                      item.foto.forEach(function(imgUrl){
                        htmlData += `<div class="carousel-item"><img src="${imgUrl}"></div>`;
                      });
        htmlData += `</div>
                    </a>
                    <div class="wanted-docket">
                      <div class="center wanted-name"><a href="${item.link_url}" target="_blank">${item.name}</a></div>
                      <div class="wanted-reward">${item.reward ? item.reward : '&nbsp;'}</div>
                      <div class="wanted-description">${item.description}</div>
                    </div>
                  </div>
                </div>`;
  });
  let paginationOn = data.pages > 1;
  let paginBeginSp;
  let paginEndSp;
  let paginLong;
  let paginationBegin;
  let paginationEnd;
  if(paginationOn){
    paginationBegin = data.page > 3 ? data.page - 2 : 1;
    paginationEnd = data.page < (data.pages - 2) ? data.page + 2 : data.pages;
    paginBeginSp = paginationBegin > 1;
    paginEndSp = paginationEnd < data.pages;
    paginLong = data.pages > 5;
    htmlData += `<div class="col s12">
                  <div class="pagination">`;
      if(paginLong) htmlData += `<span id="first" class="round${data.page == 1 ? ' deactive' : ''}">«</span>`;
      htmlData +=  `<span id="prev" class="round${data.page == 1 ? ' deactive' : ''}"><</span>`;
      if(paginBeginSp) htmlData += `<span>...</span>`;
                    for (let i = paginationBegin; i <= paginationEnd; i++) {
                      htmlData += `<span id="p${i}" class="round${i == data.page ? ' active' : ''}">${i}</span>`;  
                    }
      if(paginEndSp) htmlData += `<span>...</span>`;
        htmlData += `<span id="next" class="round${data.page == data.pages ? ' deactive' : ''}">></span>`;
      if(paginLong) htmlData += `<span id="last" class="round${data.page == data.pages ? ' deactive' : ''}">»</span>`;
      htmlData += `</div>
                </div>`;
  }
  hideSpiner();
  document.getElementById('rendering').innerHTML = htmlData;
  if(paginationOn){
    if(data.page > 1 ){
      if(paginLong) document.getElementById('first').onclick = getPaginationClick(1);
      document.getElementById('prev').onclick = getPaginationClick(data.page - 1);
    }
    for (let i = paginationBegin; i <= paginationEnd; i++) {
      if(i == data.page) continue; 
      document.getElementById('p' + i).onclick = getPaginationClick(i);
    }
    if(data.page < data.pages ){
      document.getElementById('next').onclick = getPaginationClick(data.page + 1);
      if(paginLong) document.getElementById('last').onclick = getPaginationClick(data.pages);
    }
  }
    // Инициализируем выведенные слайдеры
  let slidersWanted = document.querySelectorAll('.wanted-slider .carousel.carousel-slider');
  let instancesSliderWanted = window.M.Carousel.init(slidersWanted,  {fullWidth: true});
  let i = 0;
  instancesSliderWanted.forEach(function(instance){
    i++;
    setInterval(()=>{
      if(instance){
        instance.next();
      }
    }, 4000 + i * 300);
    if(i == 3) i=0;
  });
}

// Функция формирования обработчиков кликов по элементам пагинации
function getPaginationClick(i){
  return ()=>{  showSpiner();
                request(themeVars.ajaxurl + '?action=get_suspects_data&office=' + window.select.value + '&page=' + i);
              }
}

// Функция вывода заставки загрузки
function showSpiner(){
  document.getElementById('rendering').innerHTML = '';
  window.spinner.style.visibility = 'visible';
}

// Функция скрытия заставки загрузки
function hideSpiner(){
  window.spinner.style.visibility = 'hidden';
}

function typing(id, cursor = '|'){
  window.typingBlock = {};
  window.typingBlock.elem = document.getElementById(id);
  if(!window.typingBlock.elem) return false;
  window.typingBlock.cursor = cursor;
  window.typingBlock.data = window.typingBlock.elem.innerText.split('#');
  for(let i=0; i < window.typingBlock.data.length; i++){
    window.typingBlock.data[i] = window.typingBlock.data[i].split('');
  }
  window.typingBlock.elem.innerText = '';
  window.typingBlock.currentText = '';
  window.typingBlock.phrase = -1;
  window.typingBlock.counter = -1;
  window.typingBlock.elem.style.opacity = '1';
  setInterval(function(){
    window.typingBlock.counter++;
    if(window.typingBlock.counter >= 0){
      if(window.typingBlock.counter == 0){
        window.typingBlock.currentText = '';
        window.typingBlock.elem.innerText = '';
        window.typingBlock.phrase++;
        if(window.typingBlock.phrase >= window.typingBlock.data.length){
          window.typingBlock.phrase = 0;
        }
      }
      if(window.typingBlock.counter < window.typingBlock.data[window.typingBlock.phrase].length){
        window.typingBlock.currentText = window.typingBlock.currentText + window.typingBlock.data[window.typingBlock.phrase][window.typingBlock.counter];
        window.typingBlock.elem.innerText = window.typingBlock.currentText  + window.typingBlock.cursor;
      }else{
        window.typingBlock.counter = -6;
      }
    }
  }, 100);
}

function countdownToEvent(id, timeIsUp = 'Time is over...'){
  window.countdown = {};
  window.countdown.counter = document.getElementById(id);
  if(!window.countdown.counter) return false;
  window.countdown.timeIsUp = timeIsUp;
  window.countdown.days = window.countdown.counter.querySelector('[data-role="days"]');
  window.countdown.hours = window.countdown.counter.querySelector('[data-role="hours"]');
  window.countdown.minutes = window.countdown.counter.querySelector('[data-role="minutes"]');
  window.countdown.seconds = window.countdown.counter.querySelector('[data-role="seconds"]');
  let eventTime = Math.round(Date.parse(window.countdown.counter.getAttribute('data-dateto')) / 1000);
  let interval = eventTime - Math.round( Date.parse(new Date()) / 1000 );
  if(interval <= 0) { window.countdown.counter.innerHTML = timeIsUp; return }
  let seconds = Math.floor(interval % 60);
  let minutes = Math.floor((interval / 60) % 60);
  let hours = Math.floor((interval / (60 * 60)) % 24);
  window.countdown.seconds.innerText = seconds < 10 ? '0' + seconds : seconds;
  window.countdown.minutes.innerText = minutes < 10 ? '0' + minutes : minutes;
  window.countdown.hours.innerText = hours < 10 ? '0' + hours : hours;
  window.countdown.days.innerText = Math.floor(interval / (60 * 60 * 24));
  window.countdown.timerId = setInterval(function(){
    let sec = parseInt(window.countdown.seconds.innerText);
    if(sec != 0){
      sec--;
      window.countdown.seconds.innerText = sec < 10 ? '0' + sec : sec;
    }else{
      window.countdown.seconds.innerText = 59;
      let min = parseInt(window.countdown.minutes.innerText);
      if(min != 0){
        min--;
        window.countdown.minutes.innerText = min < 10 ? '0' + min : min;
      }else{
        window.countdown.minutes.innerText = 59;
        let hour = parseInt(window.countdown.hours.innerText);
        if(hour != 0){
          hour--;
          window.countdown.hours.innerText = hour < 10 ? '0' + hour : hour;
        }else{
          window.countdown.hours.innerText = 23;
          let day = parseInt(window.countdown.days.innerText);
          if(day != 0){
            window.countdown.days.innerText = --day;
          }else{
            window.countdown.counter.innerHTML = window.countdown.timeIsUp;
            clearInterval(window.countdown.timerId);
          }
        }
      }
    }
  }, 1000);
}
