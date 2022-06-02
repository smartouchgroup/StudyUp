const navContainer = document.querySelector('.navContainer')
const nav = document.querySelector('.smt-sm-sidebar')
const showNavBtn = document.querySelector('.smt-sm-showNavBtn')
const hideNavBtn = document.querySelector('.smt-sm-hideNavBtn')

showNavBtn.addEventListener('click', function () {
  navContainer.style.display = "flex";
  nav.style.width = "80%";
})
hideNavBtn.addEventListener('click', function () {
  nav.style.width = "0%";
  navContainer.style.display = "none";

})

function goToID(id) {
  document.querySelector(id).scrollIntoView({
    behavior: 'smooth'
  });
}