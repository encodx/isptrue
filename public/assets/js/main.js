const hamburger = document.querySelector('.hamburger');
const body = document.querySelector('body');

hamburger.addEventListener('click', () => {
    body.classList.toggle('sidebar-collapsed');
});
