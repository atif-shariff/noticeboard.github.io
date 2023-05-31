const aboutUsLink = document.querySelector('nav ul li:nth-of-type(1) a');
const aboutUsSection = document.querySelector('.about-us');

aboutUsLink.addEventListener('click', () => {
  aboutUsSection.style.display = 'block';
});