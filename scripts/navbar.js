// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
	// Get references to the button and menu 
	const menuButton = document.getElementById('mobile-menu-button');
	const mobileMenu = document.getElementById('mobile-menu');
	// Toggle the menu when the button is clicked 
	menuButton.addEventListener('click', (event) => {
		mobileMenu.classList.toggle('open');
		menuButton.classList.toggle('active');
		// Prevent event propagation to avoid closing menu immediately
		event.stopPropagation();
	});
	// Close the menu when clicking outside of it
	document.addEventListener('click', (event) => {
		const isClickInside = menuButton.contains(event.target) || mobileMenu.contains(event.target);
		if (!isClickInside && mobileMenu.classList.contains('open')) {
			mobileMenu.classList.remove('open');
			menuButton.classList.remove('active');
		}
	});
	// Close mobile menu when window resizes to desktop size
	window.addEventListener('resize', () => {
		if (window.innerWidth >= 768 && mobileMenu.classList.contains('open')) {
			mobileMenu.classList.remove('open');
			menuButton.classList.remove('active');
		}
	});
	// Prevent clicks inside the menu from closing it
	mobileMenu.addEventListener('click', (event) => {
		event.stopPropagation();
	});
});