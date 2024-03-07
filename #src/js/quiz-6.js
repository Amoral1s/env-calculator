jQuery(document).ready(function ($) {

  const quizWrapperStart = document.querySelectorAll('.quiz-start .item');

  if (quizWrapperStart.length == 0) {
    return
  }
  const btnStart = document.querySelector('.button.start-btn');
  const coupons = document.querySelectorAll('.coupons-hidden span');
  const inputCoupons = document.querySelectorAll('input[name="Coupon"]');
  let couponsArr = [];

  if (coupons.length > 0) { //ищем все купоны
    coupons.forEach(elem => {
      const name = elem.textContent.trim().toLowerCase();
      const amount = elem.dataset.amount;
      couponsArr.push({name: name, amount: amount});
    });
  } else {
    inputCoupons.forEach(e => e.style.display = 'none');
  }
  let forcedNext = false;

  quizWrapperStart.forEach(elem => { // Стартовый экран - выбор квиза
    elem.addEventListener('click', () => {
      quizWrapperStart.forEach(e => e.classList.remove('active'));
      elem.classList.add('active');
      btnStart.classList.add('ready');
    });
  });
  // Получаем кнопки "Назад" и "Далее"
  const backButton = document.querySelector('.button.back');
  const nextButton = document.querySelector('.button.next');
  const submitButton = document.querySelectorAll('.button.subm');
  const hiddenQuizForm = document.querySelector('.hidden-quiz-form');

  let quizTitlte = '';

  function quizStart(index) {
    const quizStartTitle = quizWrapperStart[index].querySelector('b');
    quizTitlte = quizStartTitle.textContent.trim();
    console.log(quizTitlte)
    const quizWrappers = document.querySelectorAll('.quiz-wrap');
    const quiz = quizWrappers[index];
    const quizStartWrapper = document.querySelector('.quiz-start');
    const quizLineWrapper = document.querySelector('.quiz-steps');
    const quizLine = document.querySelector('.steps-list');
    const quizSteps = quiz.querySelectorAll('.quiz-wrap-step');
    const countAll = document.querySelector('.steps-count .all');
    const countNow = document.querySelector('.steps-count .now');

    if (quizSteps.length > 0) {
      quizSteps.forEach((elem, index) => {
        const newLine = document.createElement('span');
        if (index == 0) {
          newLine.classList.add('active');
        }
        quizLine.appendChild(newLine);
      });
      countAll.textContent = quizSteps.length;
      countNow.textContent = 1;
    }
    function setSubmitBtn() {
      const activeSubmit = document.querySelectorAll('.step-price.step-date.crew.active input');
      if (activeSubmit.length > 0) {
        activeSubmit.forEach(elem => {
          if (elem.parentElement.classList.contains('wpcf7-not-valid') || elem.value == '') {
            $(submitButton).addClass('disabled');
          } else {
            $(submitButton).removeClass('disabled');
          }
        })
      }
      
    }
    // Получаем все скрытые блоки квиза
    

    // Устанавливаем индекс текущего активного шага
    let currentStep = 0;
    const stepIndicators = quizLine.querySelectorAll('span');
    quizLineWrapper.style.display = 'flex';
    quizStartWrapper.style.display = 'none';

    // Функция для обновления состояния квиза
    function updateQuizState() {
      // Перебираем все шаги квиза
      quizSteps.forEach((step, index) => {
        // Если индекс шага соответствует текущему активному шагу, добавляем класс "active", иначе удаляем его
        if (index === currentStep) {
          step.classList.add('active');
        } else {
          step.classList.remove('active');
        }
      });

      stepIndicators.forEach((indicator, index) => {
        if (index === currentStep) {
          indicator.classList.add('active');
        } else {
          indicator.classList.remove('active');
        }
      });
      // Обновляем отображение текущего шага
      countAll.textContent = quizSteps.length;
      countNow.textContent = currentStep + 1;

      // Если текущий шаг является первым, скрываем кнопку "Назад", иначе показываем её
      
      if (currentStep === 0) {
        backButton.addEventListener('click', () => {
          location.reload()
        });
        //backButton.style.display = 'none';
      } else {
        backButton.style.display = 'flex';
      }

      // Если текущий шаг является последним, скрываем кнопку "Далее", иначе показываем её
      if (currentStep === quizSteps.length - 1) {
        nextButton.style.display = 'none';
        if (index == 1 || index == 3) {
          $(submitButton).css('display', 'flex');
          forcedNext = true;
        }
      } else {
        nextButton.style.display = 'flex';
        if (index == 1 || index == 3) {
          $(submitButton).css('display', 'none');
        }
      }
      quizValidation(quiz);
      
    }
    // Функция для перехода к следующему шагу
    function goToNextStep() {
      if (currentStep < quizSteps.length - 1) {
        currentStep++;
        updateQuizState();
        setSubmitBtn();
        var destination = $('#topQuiz').offset().top - 150;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
        return false;
      }
    }

    // Функция для перехода к предыдущему шагу
    function goToPreviousStep() {
      if (currentStep > 0) {
        currentStep--;
        updateQuizState();
        nextButton.classList.remove('disabled');
        var destination = $('#topQuiz').offset().top - 150;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
        return false;
      }
    }

    // Назначаем обработчики событий на кнопки "Назад" и "Далее"
    backButton.addEventListener('click', goToPreviousStep);
    nextButton.addEventListener('click', goToNextStep);
    // Обновляем состояние квиза в начале
    updateQuizState();
    
    quiz.addEventListener('click', (event) => {
      quizValidation(quiz);
      setSubmitBtn();
    })
    quiz.addEventListener('change', (event) => {
      quizValidation(quiz)
      setSubmitBtn();
    });
    quiz.addEventListener('input', (event) => {
      quizValidation(quiz)
      setSubmitBtn();
    });

    const quizTabs = quiz.querySelectorAll('.item-toggle');

    quizTabs.forEach((elem) => {
      const elemItems = elem.querySelectorAll('.toggle');
      elem.addEventListener('click', (event) => {
        let target = event.target;
        elemItems.forEach(el => el.classList.remove('active'));
        if (target.closest('.toggle')) {
          target.closest('.toggle').classList.add('active')
        }
      })
    });

    const termsCheck = quiz.querySelector('.question.terms .qanswer');
    if (termsCheck) {
      termsCheck.addEventListener('click', () => {
        if (termsCheck.parentElement.classList.contains('checked')) {
          termsCheck.parentElement.classList.remove('checked');
          nextButton.classList.add('disabled');
        } else {
          termsCheck.parentElement.classList.add('checked');
          nextButton.classList.remove('disabled');
        }
      });
    }
    
  }
  let data = {
    from: '',
    to: '',
    stop: '',
    date: '',
    time: '',
    email: '',
    phone: 0,
    crewName: '',
    minCost: 0,
    hourCost: 0,
    couponAmount: 0,
    summaryCost: 0,
    itemsToMove: [],
    addServicesLast: [],
  }

  function quizValidation(quizWrap, stepIndex) {

    data.quizTitle = quizTitlte;
    
    const checkboxesWrappers = quizWrap.querySelector('.items-to-move');

    if (checkboxesWrappers) {
      titleCheckboxes = checkboxesWrappers.querySelector('.title').textContent.trim();
      const items = checkboxesWrappers.querySelectorAll('input');
      data.itemsToMove = [];
      items.forEach(input => {
        if (input.checked) {
          data.itemsToMove.push(input.value);
        }
      });
    } // Сбор данных о доп услугах

    const additionalServices = quizWrap.querySelector('.add-services');

    if (additionalServices) {
      titleCheckboxes = additionalServices.querySelector('.title').textContent.trim();
      const items = additionalServices.querySelectorAll('input');
      data.addServicesLast = [];
      items.forEach(input => {
        if (input.checked) {
          data.addServicesLast.push(input.value);
        }
      });
    } // Сбор данных о доп услугах

    const stepDate = quizWrap.querySelector('.step-date'); // email, tel, time, date values
    const dateInput = stepDate.querySelector('input[name="Move_date"]');
    const emailInput = stepDate.querySelector('input[type="email"]');
    const timeInput = stepDate.querySelector('select[name="Time"]');
    const phoneInput = stepDate.querySelector('input[type="tel"]');
    data.date = dateInput.value;
    data.email = emailInput.value;
    data.phone = phoneInput.value;
    data.time = timeInput.value;
    if (stepDate && stepDate.classList.contains('active')) {
      
      if (dateInput.value != '' && emailInput.value != '' && timeInput.value != '' && phoneInput.value != '') {
        nextButton.classList.remove('disabled');
        
      } else {
        nextButton.classList.add('disabled');
      }
      
    }

    const stepAddress = quizWrap.querySelector('.step-address'); // address points end, start, stop point
    const fromPoint = stepAddress.querySelector('.input.start input');
    const stopPoint = stepAddress.querySelector('.input.stop input');
    const endPoint = stepAddress.querySelector('.input.end input');

    data.from = fromPoint.value;
    if (stopPoint.value != '') {
      data.stop = `No stop point`;
    } else {
      data.stop = stopPoint.value;
    }
    data.to = endPoint.value;

    if (stepAddress && stepAddress.classList.contains('active')) {
      
      if (fromPoint.value != '' && endPoint.value != '') {
        
        nextButton.classList.remove('disabled');
      } else {
        nextButton.classList.add('disabled');
      }
      
    }
    

    const crewSelect = quizWrap.querySelector('.crew');

    if (crewSelect) {
      const crewPrice = crewSelect.querySelectorAll('.item');
      crewTitle = crewSelect.querySelector('.title').textContent.trim();

      crewPrice.forEach((elem) => {
        const name = elem.querySelector('.item-top b').textContent.trim();
        const priceHour = elem.querySelector('.meta-price').textContent.trim();
        const minCost = elem.querySelector('.item-content .row p').textContent.trim();
        if (elem.classList.contains('active')) {
          data.from = fromPoint.value;
          data.stop = stopPoint.value;
          data.to = endPoint.value;
          data.minCost = +minCost;
          data.crewName = name;
          data.hourCost = +priceHour.replace(/[^0-9.]/g, "");
        }
      });
    }

    const summary = quizWrap.querySelector('.result-step');
    let matchCoupon = null;

    if (summary) {
      const fromText = summary.querySelector('.summary-from b');
      const toText = summary.querySelector('.summary-to b');
      const stopText = summary.querySelector('.summary-stop b');
      const dateText = summary.querySelector('.summary-date b');
      const hourRateText = summary.querySelector('.hourly-rate p');
      const minRateText = summary.querySelector('.min-cost-rate p');
      const summText = summary.querySelector('.auth strong');
      const mainForm = quizWrap.querySelector('.main-form');
      const formName = mainForm.querySelector('input[name="Full_name"]')
      const formPhone = mainForm.querySelector('input[name="Phone"]')
      const formEmail = mainForm.querySelector('input[name="Email"]')
      const formDate = mainForm.querySelector('input[name="Date"]');
      const formStop = mainForm.querySelector('input[name="Stop"]');
      const formFrom = mainForm.querySelector('input[name="From"]');
      const formTo = mainForm.querySelector('input[name="To"]');
      const formTime = mainForm.querySelector('input[name="Time"]');
      const formItemsToMove = mainForm.querySelector('input[name="ItemsToMove"]');
      const formaddServices = mainForm.querySelector('input[name="addServices"]');
      const formaAmount = mainForm.querySelector('input[name="amount"]');
      const formCoupon = mainForm.querySelector('input[name="Coupon"]');
      const formCrewName = mainForm.querySelector('input[name="crewName"]');
      const formTitleQuiz = mainForm.querySelector('input[name="quizName"]');
      const formCouponAmount = mainForm.querySelector('input[name="CouponAmount"]');
      const formFullPrice = mainForm.querySelector('input[name="fullAmount"]');

      
      if (summary.classList.contains('active') && forcedNext == false) {
        nextButton.classList.add('disabled');
      }

      const couponRow = summary.querySelector('.row .coupon-amount');
      for (const coupon of couponsArr) {
        if (coupon.name == formCoupon.value.toLowerCase()) {
          matchCoupon = coupon;
          formCoupon.parentElement.classList.add('applied');
          break;
        } else {
          matchCoupon = null;
          formCoupon.parentElement.classList.remove('applied');
        }
      }
      if (matchCoupon != null) { //Купоны и вывода в инпуты и текст
        couponRow.parentElement.style.display = 'flex';
        couponRow.textContent = `- $${matchCoupon.amount}.00`;
        summText.textContent = `$${Math.round(data.minCost - matchCoupon.amount)}.00`;
        data.couponAmount = matchCoupon.amount;
        data.summaryCost = Math.round(data.minCost - matchCoupon.amount);
        formCouponAmount.value = `- $${matchCoupon.amount}.00`;
        formFullPrice.value = `$${data.minCost}.00`;
      } else {
        couponRow.parentElement.style.display = 'none';
        summText.textContent = `$${Math.round(data.minCost)}.00`;
        data.couponAmount = 0;
        data.summaryCost = Math.round(data.minCost);
        formFullPrice.value = `$${data.minCost}.00`;
        formCouponAmount.value = `No coupon applied`;
      }

      formTitleQuiz.value = quizTitlte; // Заголовок квиза
      formCrewName.value = data.crewName; // Выбранная команда и тариф
      
      data.name = formName.value; //Имя отправителя
      formaAmount.value = data.summaryCost; //сумма с учтом купона

      fromText.textContent = data.from; //текст откуда
      toText.textContent = data.to; //текст куда
      if (data.stop != '') { //Есть ли остановка
        stopText.textContent = data.stop;
        stopText.parentElement.parentElement.style.display = 'flex';
        formStop.value = data.stop;
      } else {
        stopText.parentElement.parentElement.style.display = 'none';
        formStop.value = `No stop point`;
      }
      

      dateText.textContent = data.date; //текст даты
      hourRateText.textContent = `$${data.hourCost}.00`; //почасовая текст
      minRateText.textContent = `$${data.minCost}.00`; // минимальная цена текст
      
      if (summary.classList.contains('active')) { //Телефон и емаил
        data.phone = formPhone.value; 
        data.email = formEmail.value;
      } else {
        formPhone.value = data.phone;
        formEmail.value = data.email;
      }
      formDate.value = data.date; //Дата инпут
      formFrom.value = data.from; //Откуда инпут
      formTo.value = data.to; // куда инпут
      formTime.value = data.time;  //Время инпут
      formItemsToMove.value = data.itemsToMove; //Доп предметы
      formaddServices.value = data.addServicesLast; //Доп услуги
      
    }
    console.log(data);

    if (hiddenQuizForm) {
      const name = hiddenQuizForm.querySelector('input[name="Full_name"]');
      const email = hiddenQuizForm.querySelector('input[name="E_mail"]');
      const phone = hiddenQuizForm.querySelector('input[name="Phone_number"]');
      const from = hiddenQuizForm.querySelector('input[name="Moving_from"]');
      const to = hiddenQuizForm.querySelector('input[name="Moving_to"]');
      const date = hiddenQuizForm.querySelector('input[name="Move_date"]');
      const notice = hiddenQuizForm.querySelector('textarea[name="More_detalis"]');
      const consumedInput = quizWrap.querySelector('input[name="consumed"]');
      

      if (consumedInput && consumedInput.checked) {
        data.consumed = 'true';
      } else {
        data.consumed = 'false';
      }
      name.value = data.name;
      email.value = data.email;
      phone.value = data.phone;
      from.value = data.from;
      to.value = data.to;
      date.value = data.date;
      notice.value = `

      Name of Quiz: ${data.quizTitle}; 
      Stop point: ${data.stop != '' ? data.stop : 'No stop point'}; 
      Crew name: ${data.crewName}; 
      Cost per hour: $${data.hourCost}.00; 
      Min. cost: $${data.minCost}.00;
      Coupon: ${matchCoupon != null ? matchCoupon.name + '; Amount: -$' + matchCoupon.amount + '.00; ' : 'No coupon applied; '}
      Paid by the client: $${data.summaryCost}.00;  
      Items to move or (WG add. services): ${data.itemsToMove}; 
      Additional Services (not WG): ${data.addServicesLast}; 
      Consent to receive SMS and email: ${data.consumed}
      `;
      

    }
  } //сбор данных quizvalidation

  
  $(submitButton).on('click', function() {
    const btn = hiddenQuizForm.querySelector('input[type="submit"]');
    $(btn).trigger('click');
  })
  

  //quiz start
  btnStart.addEventListener('click', () => {
    if (btnStart.classList.contains('ready')) {
      quizWrapperStart.forEach((el, index) => {
        if (el.classList.contains('active')) {
          quizStart(index);
        }
      });
    }
  });

  $(".wpcf7").on('wpcf7mailsent', function(event){
 
		if (event.detail.contactFormId == '3580') { // stripe quiz
			
			$('.success').fadeIn(200);
			
     
      setTimeout(() => {
        const btn = hiddenQuizForm.querySelector('input[type="submit"]');
        $(btn).trigger('click');
      }, 2000);
		} 
		if (localStorage.getItem('url')) {
			localStorage.removeItem('url')
		}
  });

  $('.time.select').on('click', function() {
    $(this).children('span').children('select').trigger('mousedown');
  });

 $('.input.stop .icon').on('click', function() {
  if ($(this).parent().hasClass('noadded')) {
    $(this).parent().removeClass('noadded');
  } else {
    $(this).parent().addClass('noadded');
    $(this).parent().removeClass('listen');
    $(this).next('input').val('');
  }
 });


}); //end
