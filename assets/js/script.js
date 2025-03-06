/* swiper js */
document.addEventListener("DOMContentLoaded", function () {
	var swiper = new Swiper(".mySwiper", {
		loop: true,
		autoplay: true,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	var swiper = new Swiper(".irrigation_Swiper", {
		loop: true,
		autoplay: true,
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			640: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			},
			768: {
			  slidesPerView: 4,
			  spaceBetween: 40,
			},
		  },
	});

});

/* popup message after form submission */
document.addEventListener("DOMContentLoaded", function () {
	// Check if success parameter is in URL
	const urlParams = new URLSearchParams(window.location.search);
	if (urlParams.get("success") === "true") {
		const popup = document.getElementById("popup-message");
		popup.classList.remove("hidden");
		setTimeout(() => {
			popup.classList.add("opacity-100");
		}, 100); // Small delay for fade-in effect

		setTimeout(() => {
			popup.classList.remove("opacity-100");
			setTimeout(() => {
				popup.classList.add("hidden");
			}, 500); // Fade-out after 3 seconds
		}, 3000);
	}
});

/* gsap animations */
document.addEventListener("DOMContentLoaded", function () {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from(".fade-up", {
		opacity: 0,
		y: 50,
		duration: 4,
		ease: "power2.out",
		scrollTrigger: {
			trigger: ".fade-up",
			start: "top 80%",
			toggleActions: "play none none reverse",
		},
	});

	gsap.from(".fade", {
		opacity: 0.1,
		duration: 3,
		ease: "power2.out",
		scrollTrigger: {
			trigger: ".fade-up",
			start: "top 80%",
			toggleActions: "play none none none",
		},
	});

	gsap.from(".fade-down", {
		opacity: 0,
		y: -80,
		duration: 3,
		ease: "power2.out",
		scrollTrigger: {
			trigger: ".fade-up",
			start: "top 80%",
			toggleActions: "play none none reverse",
		},
	});

	gsap.from(".fade-down-header", {
		opacity: 0,
		y: -80,
		duration: 3,
		ease: "power2.out",
	});

	gsap.utils.toArray(".fade-left").forEach((card, index) => {
		gsap.from(card, {
			opacity: 0,
			x: -190,
			duration: 4,
			ease: "power2.out",
			scrollTrigger: {
				trigger: card,
				start: "top 80%",
				toggleActions: "play none none reverse",
			},
		});
	});

	gsap.utils.toArray(".fade-right").forEach((card, index) => {
		gsap.from(card, {
			opacity: 0,
			x: 190,
			duration: 4,
			ease: "power2.out",
			scrollTrigger: {
				trigger: card,
				start: "top 80%",
				toggleActions: "play none none reverse",
			},
		});
	});

	gsap.from(".fade-items .item", {
		opacity: 0,
		y: 40,
		stagger: 0.3,
		ease: "power2.out",
		duration: 4,
		scrollTrigger: {
			trigger: ".fade-items",
			start: "top 70%",
			toggleActions: "play none none reverse",
		},
	});

	gsap.utils.toArray(".popup1").forEach((card, index) => {
		gsap.from(card, {
			scale: 0.5,
			opacity: 0,
			duration: 2,
			ease: "elastic.out(1, 0.5)",
			stagger: 0.2,
			scrollTrigger: {
				trigger: card,
				start: "top 90%",
				toggleActions: "play none none none",
			},
			delay: index * 0.3,
		});
	});

	gsap.from(".popup", {
		scale: 0.5,
		opacity: 0,
		duration: 1,
		ease: "elastic.out(1, 0.5)",
		stagger: 0.2,
		scrollTrigger: {
			trigger: ".popup",
			start: "top 60%",
			toggleActions: "play none none reverse",
		},
	});

	// Scroll Animation for Stats Section
	gsap.from(".stat-item", {
		opacity: 0,
		y: 50,
		duration: 1,
		ease: "power2.out",
		stagger: 0.2,
		scrollTrigger: {
			trigger: ".stats-container",
			start: "top 80%",
			toggleActions: "play none none reverse",
		},
	});

	gsap.from(".stat-icon", {
		scale: 0.5,
		opacity: 0,
		duration: 1,
		ease: "elastic.out(1, 0.5)",
		stagger: 0.2,
		scrollTrigger: {
			trigger: ".stats-container",
			start: "top 85%",
			toggleActions: "play none none reverse",
		},
	});

	gsap.from(".stat-text", {
		opacity: 0,
		y: 20,
		duration: 1,
		ease: "power3.out",
		stagger: 0.2,
		scrollTrigger: {
			trigger: ".stats-container",
			start: "top 75%",
			toggleActions: "play none none reverse",
		},
	});

	// Number Counting Animation
	function animateNumbers() {
		let numbers = document.querySelectorAll(".stat-number");

		numbers.forEach((num) => {
			let target = +num.getAttribute("data-target");
			let count = { value: 0 };

			gsap.to(count, {
				value: target,
				duration: 2,
				ease: "power1.out",
				onUpdate: function () {
					num.textContent = Math.floor(count.value);
				},
			});
		});
	}

	// Trigger number animation on scroll
	ScrollTrigger.create({
		trigger: ".stats-container",
		start: "top 80%",
		onEnter: animateNumbers,
	});
});

/* service card animation */
document.addEventListener("DOMContentLoaded", function () {
	gsap.registerPlugin(ScrollTrigger);

	gsap.utils.toArray(".service-card").forEach((card, index) => {
		gsap.from(card, {
			opacity: 0,
			scale: 0.8,
			y: 50,
			duration: 0.3,
			ease: "linear",
			scrollTrigger: {
				trigger: card,
				start: "top 80%",
				toggleActions: "play none none none", // ✅ Plays only when scrolling down
			},
			delay: index * 0.1, // ✅ Staggers animation for a smooth effect
		});
	});
});

/* gallery animations */
document.addEventListener("DOMContentLoaded", function () {
	gsap.registerPlugin(ScrollTrigger);

	gsap.from(".gallery-item", {
		opacity: 0,
		scale: 0.8,
		y: 50,
		duration: 1,
		ease: "power2.out",
		stagger: 0.2,
		scrollTrigger: {
			trigger: ".gallery-container",
			start: "top 85%",
			toggleActions: "play none none none",
		},
	});

	let images = document.querySelectorAll(".flip-card");

	images.forEach((img) => {
		img.addEventListener("mouseenter", () => {
			gsap.to(img, { rotateY: 180, duration: 0.6, ease: "power2.out" });
		});

		img.addEventListener("mouseleave", () => {
			gsap.to(img, { rotateY: 0, duration: 0.6, ease: "power2.out" });
		});
	});
});
