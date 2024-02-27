jQuery(document).ready(function ($) {
  const stripeOffer = document.querySelector('section.stripe-offer');

  if (!stripeOffer) {
    return
  }

  const stripeTotal = document.querySelector('.total');
  const stripeTotalCurrent = stripeTotal.querySelector('b');
  const stripeTotalOld = stripeTotal.querySelector('p');
  const stripeInputs = document.querySelectorAll('.radio input');
  const quantityInput = document.querySelector('.quantity input');
  const inputName = document.querySelector('input[name="Coupon_name"]');
  const inputCount = document.querySelector('input[name="Coupon_price"]');
  const inputPrice = document.querySelector('input[name="Coupon_count"]');
  const popupPrice = document.querySelector('.c-total p');

  function init() {
    stripeTotalCurrent.textContent = `$${stripeInputs[0].value}`;
    stripeTotalOld.textContent = `$${stripeInputs[0].dataset.old}`;
  }
  init();

  const minus = stripeOffer.querySelector('.minus');
  const plus = stripeOffer.querySelector('.plus');

  minus.addEventListener('click', () => {
    quantityInput.value--;
    if (quantityInput.value <= 0) {
      quantityInput.value = 1;
    }
    stripeInputs.forEach(elem => {
      if (elem.checked) {
        calculate(elem.value, elem.dataset.old, quantityInput.value, elem.dataset.name);
      }
    });
  })
  plus.addEventListener('click', () => {
    quantityInput.value++;
   
    stripeInputs.forEach(elem => {
      if (elem.checked) {
        calculate(elem.value, elem.dataset.old, quantityInput.value, elem.dataset.name);
      }
    });
  })

  function calculate(currentPrice, oldPrice, count, name) {
    stripeTotalCurrent.textContent = `$${Math.round(currentPrice * count)}`;
    stripeTotalOld.textContent = `$${Math.round(oldPrice * count)}`;
    inputCount.value = count;
    inputPrice.value = currentPrice;
    inputName.value = name;
    popupPrice.textContent = `$${Math.round(currentPrice * count)}`;
  }
  quantityInput.addEventListener('change', () => {
    if (quantityInput.value <= 0) {
      quantityInput.value = 1;
    }
    stripeInputs.forEach(elem => {
      if (elem.checked) {
        calculate(elem.value, elem.dataset.old, quantityInput.value, elem.dataset.name);
      }
    });
  });
  stripeInputs.forEach(elem => {
    elem.addEventListener('click', () => {
      calculate(elem.value, elem.dataset.old, quantityInput.value, elem.dataset.name);
    });
  });

  
  $('.square-submit').on('click', function() {
    $('.popup.sq-coupon-form').fadeIn(200);
    $('.overlay').fadeIn(200);
    stripeInputs.forEach(elem => {
      if (elem.checked) {
        calculate(elem.value, elem.dataset.old, quantityInput.value, elem.dataset.name);
      }
    });
  });
  

}); //end
