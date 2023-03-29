/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 2000,
  reset: false
});


/*SCROLL HOME*/
sr.reveal('.banner__img',{delay: 400}); 
sr.reveal('.about__container', {delay: 400});
sr.reveal('.work', {delay: 400})
sr.reveal('.info', {delay: 400})
sr.reveal('.info-container', {delay: 400})
sr.reveal('.participar', {delay: 400})