const swiper = new Swiper(".swiper-container", {
	// Optional parameters
	direction: "horizontal",
	loop: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination",
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	// And if we need scrollbar
	scrollbar: {
		el: ".swiper-scrollbar",
	},
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		1000: {
			slidesPerView: 5,
			spaceBetween: 16,
		},
	},
});
const swiper1 = new Swiper(".swiper-container2", {
	// Optional parameters
	direction: "horizontal",
	loop: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination",
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	// And if we need scrollbar
	scrollbar: {
		el: ".swiper-scrollbar",
	},
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		1000: {
			slidesPerView: 4,
			spaceBetween: 16,
		},
	},
});
const swiper2 = new Swiper(".swiper-container3", {
	// Optional parameters
	direction: "horizontal",
	loop: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination",
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	// And if we need scrollbar
	scrollbar: {
		el: ".swiper-scrollbar",
	},
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		1000: {
			slidesPerView: 3,
			spaceBetween: 16,
		},
	},
});
const swiper3 = new Swiper(".swiper-container4", {
	// Optional parameters
	direction: "horizontal",
	loop: true,

	// If we need pagination
	pagination: {
		el: ".swiper-pagination",
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	// And if we need scrollbar
	scrollbar: {
		el: ".swiper-scrollbar",
	},
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 480px
		480: {
			slidesPerView: 2,
			spaceBetween: 10,
		},
		// when window width is >= 640px
		640: {
			slidesPerView: 4,
			spaceBetween: 10,
		},
		1000: {
			slidesPerView: 3,
			spaceBetween: 16,
		},
	},
});
function myFuntion() {
	var x = document.getElementById("infor_khachhang")
	if (x.style.display === "none") {
		x.style.display = "block";
		
	} else{
		x.style.display = "none";
	}
	
}