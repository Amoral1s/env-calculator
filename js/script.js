jQuery(document).ready(function ($) {
	
	
	
	
/* 
	$('.magnific-about').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
*/

/* const links = document.querySelectorAll('a');

if (links) {
	links.forEach((elem) => {
		if (elem.href.indexOf('#') != -1) {
			elem.classList.add('click');
		}
	});
} */


	
	document.addEventListener('input', (event) => {
		if (event.target.value != '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.add('listen');
			}
		}
		if (event.target.value === '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.remove('listen');
			}
		}
	});
	//Header
	
	if (window.screen.width <= 992) {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 200) {
				$('.header').addClass('active');
			} else {
				$('.header').removeClass('active');
			}
		});
		$('.burger').on('click', function() {
			$('.mobile-menu').slideDown(200);
			$('.phone-toggle .phone-mini').slideUp(200);
		});
		$('.mobile-menu .close').on('click', function() {
			$('.mobile-menu').slideUp(200);
			$('.phone-toggle .phone-mini').slideUp(200);
		});
		$('.close-mini').on('click', function() {
			$('.phone-toggle .phone-mini').slideUp(200);
		});

		$('li.menu-item-has-children > a').click(function(e) {
			e.preventDefault();
			$(this).next().next('ul').slideToggle(200);
			$(this).toggleClass('active');
		});

		$('.phone-toggle .toggle').on('click', function() {
			$(this).next().slideDown(200);
		});

	} else {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 300) {
				$('.header').addClass('active-pc');
			} else {
				$('.header').removeClass('active-pc');
			}
		});

		$('li.menu-item-has-children').hover(function() {
			$(this).children('ul').slideToggle(200);
		});
	}
	$('.search-toggle').on('click', function() {
		$('.popup-search').fadeIn(300);
		$('.overlay').fadeIn(300)
	});
	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300)
	});
	$('.popup .close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300)
	});
	//Header end
	$('.about-us-video ').on('click', function() {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			$(this).children('img').fadeOut(0);
			$(this).children('iframe').fadeIn(300);
			$(this).children('iframe').attr('src', $(this).children('img').attr('data-video'))
		}
		
	});


	


	if (window.screen.width <= 578) {
		const destWrap = document.querySelector('.destination-wrap')
		if (destWrap && destWrap.scrollHeight > 230) {
			const newBtn = document.createElement('div');
			newBtn.classList.add('button');
			newBtn.textContent = 'Show more';
			destWrap.parentElement.appendChild(newBtn);
			destWrap.style.height = '230px';
			destWrap.classList.add('show-more');
			newBtn.addEventListener('click', () => {
				destWrap.style.height = 'auto';
				destWrap.classList.remove('show-more');
				newBtn.remove();
			});
		}
	}

	const reviewsList = document.querySelectorAll('.reviews-list .item');

	if (reviewsList.length > 5) {
		const revWrap = reviewsList[0].parentElement;
		revWrap.parentElement.classList.add('show-more');
		const newBtn = document.createElement('div');
		newBtn.classList.add('button');
		newBtn.textContent = 'Load more';
		revWrap.appendChild(newBtn);
		newBtn.addEventListener('click', () => {
			revWrap.parentElement.classList.remove('show-more');
			newBtn.remove();
			window.scrollBy(0, 1);
		});
	}

	$('.button.add-review').on('click', function() {
		$('.popup.review').fadeIn(300);
		$('.overlay').fadeIn(300);
		starRatingFunc();
	});

	const starRatingFunc = () => {
		const stars = document.querySelectorAll('.popup.review .form-stars img');
		const starsWrap = stars[0].parentElement;

		stars.forEach((e, i) => {
			e.addEventListener('click', (event) => {
				starsWrap.classList.add('selected');
				$('.stars-input').val(i + 1)
				stars.forEach(e => {
					e.classList.remove('active')
				})
				for (let r = 0; r < i + 1; r++) {
					stars[r].classList.add('active');
				}
				
			})
		})
		
		$(stars).hover(function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).addClass('active');
				$(this).prev().addClass('active');
				$(this).prev().prev().addClass('active');
				$(this).prev().prev().prev().addClass('active');
				$(this).prev().prev().prev().prev().addClass('active');
			}
		}, function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).removeClass('active');
				$(this).prev().removeClass('active');
				$(this).prev().prev().removeClass('active');
				$(this).prev().prev().prev().removeClass('active');
				$(this).prev().prev().prev().prev().removeClass('active');
			}

			
		});

	}
	
	const vacancyMenu = document.querySelector('.vacancy-menu');

	if (vacancyMenu) {
		const menuItems = vacancyMenu.querySelectorAll('.item');
		const vanacyWrappers = document.querySelectorAll('.vacancy-wrap .wrapper');
		vacancyMenu.addEventListener('click', (event, index) => {
			let target = event.target;
			menuItems.forEach((menuItem, indexMenuItem) => {
				menuItem.classList.remove('active');
				if (menuItem == target.closest('.item')) {
					menuItem.classList.add('active');
					vanacyWrappers.forEach((wrap) => {
						wrap.style.display = 'none';
					});
					if (indexMenuItem === 0) {
						vanacyWrappers.forEach((wrap) => {
							wrap.style.display = 'block';
						});
					} else {
						vanacyWrappers[indexMenuItem - 1].style.display = 'block';
					}
				}
			});
		})
	}

	const checlistPage = document.querySelector('.checklist-wrap');

	if (checlistPage) {
		
		checlistPage.addEventListener('click', (event) => {
			let target = event.target;
			if (target.closest('.item')) {
				if (target.closest('.item').classList.contains('active')) {
					target.closest('.item').classList.remove('active');
				} else {
					target.closest('.item').classList.add('active');
				}
			}
		})
	}

	const faqCosts = document.querySelector('.faq-costs');

	if (faqCosts) {
		faqCosts.addEventListener('click', (event) => {
			let target = event.target;
			
			if (target.closest('.faq-toggle').classList.contains('active')) {
				$(target.closest('.item')).children('.content').slideUp(200);
				target.closest('.faq-toggle').classList.remove('active');
			} else {
				$(target.closest('.item')).children('.content').slideDown(200);
				target.closest('.faq-toggle').classList.add('active');
			}
		})
	}

	const blogBreadcrumbs = document.querySelector('.blog-bread > span');

	if (blogBreadcrumbs) {
		const blogLink = document.createElement('span');
		blogLink.innerHTML = `<span><a href="/our-blog/">Our blog</a></span> / `;
		const referenceElement = blogBreadcrumbs.querySelector('.breadcrumb_last');
		blogBreadcrumbs.insertBefore(blogLink, referenceElement);
	}

	const singlePage = document.querySelector('.only-single-page');

	if (singlePage) {
		const navWrap = document.querySelector('.single-nav-wrap');
		const navWrapParent = navWrap.parentElement;
		const content = document.querySelector('.content');
		const contentBlocks = content.querySelectorAll('*');
		let elems = 0;
		contentBlocks.forEach((elem, index) => {
			if (elem.id) {
				const navLink = document.createElement('a');
				navLink.href = `#${elem.id}`;
				navLink.classList.add('anchor');
				navLink.textContent = elem.id.replace(/\-/g, ' ');
				navWrap.appendChild(navLink);
				elems++;
			}
		});
		if (elems === 0) {
			navWrapParent.remove();
		}
		const rating = document.querySelector('.wpd-rating-stars').cloneNode(true);
		const ratngTopWrap = document.querySelector('.new-rating');
		const ratngVotes = document.querySelector('.wpd-rating-value .wpdrc').textContent;
		const votes = document.querySelector('.votes');

		ratngTopWrap.appendChild(rating);
		votes.textContent = ratngVotes;
	} 
	$(".anchor").click(function () { 
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top - 50;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	});

 const fileWrap = document.querySelectorAll('form .file');

 if (fileWrap.length > 0) {
	fileWrap.forEach(wrap => {
		const fileInput = wrap.querySelector('input');
		wrap.addEventListener('click', () => {
			fileInput.click();
		});
		const text = wrap.querySelector('b');

		fileInput.addEventListener('change', () => {
			if (fileInput.files.length > 0) {
				text.textContent = '';
				for (let i = 0; i < fileInput.files.length; i++) {
					text.textContent += fileInput.files[i].name + ' | ';
				}
			} else {
				text.textContent = 'Drop a file here or click to upload';
			}
		});
	});
 }



	const tabsItem = document.querySelectorAll('.tabs-title .item');

	if (tabsItem.length > 0) {
		const tabsWrappers = document.querySelectorAll('.tabs-wrapper .wrap');
		tabsItem.forEach((elem, index) => {
			elem.addEventListener('click', () => {
				if (!elem.classList.contains('active')) {
					tabsItem.forEach(e => e.classList.remove('active'))
					elem.classList.add('active');
					tabsWrappers.forEach(e => e.classList.remove('active'));
					tabsWrappers[index].classList.add('active');
				} 
			});
		});
	}

	if (window.screen.width <= 992) {
		const landingContentRows = document.querySelectorAll('.img-content .wrap');

		if (landingContentRows.length > 0) {
			landingContentRows.forEach(e => {
				const img = e.querySelector('.right img');
				const left = e.querySelector('.left');
				const right = e.querySelector('.right');
				const newImg = img.cloneNode(true);

				left.appendChild(newImg);
				right.remove();
			})
		}
	}

	const accelerator = document.querySelectorAll('a');

	accelerator.forEach(e => {
		if (e.href.indexOf('accelerator') != -1) {
			e.remove();
			setTimeout(() => {
				if (e) {
					e.remove();
				}
			}, 5000);
		}
	});
	
	function initialize(elem) {
			var input = elem;
			var autocomplete = new google.maps.places.Autocomplete(input);
	}

	const inputFromMap = document.querySelectorAll('.input-from');
	const inputToMap = document.querySelectorAll('.input-to');

	if (inputFromMap.length > 0 && inputToMap.length > 0) {
		inputFromMap.forEach(elem => {
			google.maps.event.addDomListener(window, 'load', initialize(elem));
		});
		inputToMap.forEach(elem => {
			google.maps.event.addDomListener(window, 'load', initialize(elem));
		});
	 
	}
	const inputFromMapGOT = document.querySelectorAll('.got-from');
	const inputToMapGOT = document.querySelectorAll('.got-to');

	if (inputFromMapGOT.length > 0 && inputToMapGOT.length > 0) {
		inputFromMapGOT.forEach(elem => {
			google.maps.event.addDomListener(window, 'load', initialize(elem));
		});
		inputToMapGOT.forEach(elem => {
			google.maps.event.addDomListener(window, 'load', initialize(elem));
		});
	}
	
	const vacancyBtns = document.querySelectorAll('.vacancy-wrap .item .button');

	if (vacancyBtns.length > 0) {
		vacancyBtns.forEach(e => {
			e.addEventListener('click', (event) => {
				event.preventDefault();
				localStorage.setItem('vacancy', e.dataset.vac);
				window.location.href = e.href;
			})
		})
	}

	const vacNameInput = document.querySelector('.vac-name-input');
	if (vacNameInput) {
		setTimeout(() => {
			if (localStorage.getItem('vacancy')) {
				vacNameInput.value = localStorage.getItem('vacancy');
			} else {
				vacNameInput.value = 'Error';
			}
		}, 3000);
		
	}
	const zoomFunc = () => {
		if (localStorage.getItem('name')) {
			const inputName = document.querySelector('.zoom-section input[name="Full_name"]');
			inputName.value = localStorage.getItem('name');
		} 
		if (localStorage.getItem('email')) {
			const inputEmail = document.querySelector('.zoom-section input[name="E_mail"]');
			inputEmail.value = localStorage.getItem('email');
		} 
		if (localStorage.getItem('phone')) {
			const inputPhone = document.querySelector('.zoom-section input[name="Phone_number"]');
			inputPhone.value = localStorage.getItem('phone');
		} 
}
 
		
  $(".wpcf7").on('wpcf7mailsent', function(event){

		if (event.detail.contactFormId == '426') {
			$('#thx-sub').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx-sub').removeClass('popup-thx');
			$('.overlay').fadeIn(300);

		} else if (event.detail.contactFormId == '445' || event.detail.contactFormId == '2019' || event.detail.contactFormId == '2020' || event.detail.contactFormId == '2145') {
			
			$('#thx').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx').removeClass('popup-thx');
			$('.overlay').fadeIn(300);

			const name = event.target.querySelector('input[name="First_name"]');
			const email = event.target.querySelector('input[name="E_mail"]');
			const phone = event.target.querySelector('input[name="Phone_number"]');

			localStorage.setItem('name', name.value);
			localStorage.setItem('email', email.value);
			localStorage.setItem('phone', phone.value);

			setTimeout(function(){
				$('.main-quote').fadeOut(200);
				$('.zoom-section').fadeIn(200);
				zoomFunc();
    	}, 2500);
			var destination = $('#top').offset().top;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		} else {
			$('#thx').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		}
		if (localStorage.getItem('url')) {
			localStorage.removeItem('url')

		}
  });
  $(".wpcf7").on('wpcf7invalid', function(event){
    alert('Fill in all fields correctly and submit the form again!');
  });
  $(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Error sending! Try submitting your application later!');
  });
	const getForm = document.querySelectorAll('.get-form');
	if (getForm.length > 0) {
		getForm.forEach((form, formIndex) => {
			const button = form.querySelector('a');
			const inputFrom = form.querySelector('.input-from');
			const inputTo = form.querySelector('.input-to');

			button.addEventListener('click', (event) => {
				event.preventDefault();
				if (button.dataset.type) {
					localStorage.setItem("Type", button.dataset.type);
				}
				localStorage.setItem("From", inputFrom.value);
				localStorage.setItem("To", inputTo.value);
				window.location = button.href;
			})
		});
	}
	const quotePage = document.querySelector('.quote-page');

	if (quotePage) {
			const startPageFunc = (elem, input) => {
				const tabs = document.querySelectorAll('.quote-tabs .item');
				setTimeout(() => {
					elem.value = localStorage.getItem(input);
					if (localStorage.getItem('Type')) {
						if (tabs.length > 0) {
							tabs.forEach(e => {
								if (e.dataset.id == localStorage.getItem('Type')) {
									e.click();
									localStorage.removeItem('Type');
								}
							})
						}
					}
				}, 1000);
			}

			const inputFrom = document.querySelectorAll('input.got-from');
			const inputTo = document.querySelectorAll('input.got-to');

			inputFrom.forEach(elem => {
				elem.parentElement.classList.add('listen');
				startPageFunc(elem, 'From');
			})
			inputTo.forEach(elem => {
				elem.parentElement.classList.add('listen');
				startPageFunc(elem, 'To');
			})
			
	}

	const qouteTabs = document.querySelector('.quote-tabs');

	if (qouteTabs) {

		qouteTabs.addEventListener('click', (event) => {
			let target = event.target;
			
			const ResForm = document.querySelector('.q-residential');
			const CommForm = document.querySelector('.q-commercial');
			const ArtForm = document.querySelector('.q-art');
			const allForms = document.querySelectorAll('.q-main');
			const tabs = qouteTabs.querySelectorAll('.item')
			tabs.forEach(e => e.classList.remove('active'))
			allForms.forEach(e => e.style.display = 'none'); 

			if (target.closest('.item').dataset.id == 'Residential') {
				ResForm.style.display = 'block';
				target.closest('.item').classList.add('active');
			} else if (target.closest('.item').dataset.id == 'Commercial / Office') {
				CommForm.style.display = 'block';
				target.closest('.item').classList.add('active');
			} else if (target.closest('.item').dataset.id == 'Fine Art') {
				ArtForm.style.display = 'block';
				target.closest('.item').classList.add('active');
			}
		});
	}

	const inputPhones = document.querySelectorAll('.wpcf7-tel');

	if (inputPhones.length > 0) {
		inputPhones.forEach(input => {
			IMask(input, {mask: '(000) 000-0000'})
		});
	}

	const setUrl = () => {
		const date = new Date;
		const hours = date.getHours();
		const min = date.getMinutes();
		const href = window.location.href;

		if (localStorage.getItem('url')) {
			const localUrls = localStorage.getItem('url');
			const newUrl = `
			${localUrls} | 

			${hours}:${min} - ${href} | 

			`;
			localStorage.setItem('url', newUrl);
		} else {
			const newUrl = `

			${hours}:${min} - ${href} | 
			
			`;
			localStorage.setItem('url', newUrl);
		}
		const inputURLS = document.querySelectorAll('input.user_urls');

		if (inputURLS.length > 0) {
			setTimeout(() => {
				inputURLS.forEach(input => {
					if (localStorage.getItem('url')) {
						input.value = localStorage.getItem('url');
					}
				});
			}, 5000);
		}
	}
	setUrl();

//Sliders
const reviewsSlider = document.querySelectorAll('.reviews-wrap.swiper');
if (reviewsSlider.length > 0) {
	reviewsSlider.forEach(elem => {
		const arrPrev = elem.parentElement.querySelector('.arr-prev');
		const arrNext = elem.parentElement.querySelector('.arr-next');
		new Swiper(elem, {
			navigation: {
				nextEl: arrNext,
				prevEl: arrPrev,
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				}
			},
		});
	});
	
}
const howWorkSlider = document.querySelector('.how-wrap-slider.swiper');
if (howWorkSlider) {
	new Swiper(".how-wrap-slider.swiper", {
		navigation: {
			nextEl: '.how .arr-next',
			prevEl: '.how .arr-prev',
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 20,
			}
		},
	});
}
const teamSlider = document.querySelector('.team-slider.swiper');
if (teamSlider) {
	new Swiper(".team-slider.swiper", {
		navigation: {
			nextEl: '.team .arr-next',
			prevEl: '.team .arr-prev',
		},
		breakpoints: {
			300: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			579: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			992: {
				slidesPerView: 4,
				spaceBetween: 20,
			},
			1245: { 
				slidesPerView: 4,  
				spaceBetween: 20,
			}
		},
	});
}

if (window.screen.width <= 992) {
	const blogSlider = document.querySelector('.blog-slider.swiper');
	if (blogSlider) {
		new Swiper(".blog-slider.swiper", {
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				767: {
					slidesPerView: 2,
					spaceBetween: 10,
				}
			},
		});
	}
}
//Sliders end

	
		let wow = new WOW({
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       0,          // default
		mobile:       true,       // default
		live:         true        // default
	});
	
	if (wow) {
wow.init();
}
	

}); //end