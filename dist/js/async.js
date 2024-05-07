const heading1 = document.querySelector('.one');
const heading2 = document.querySelector('.two');
const heading3 = document.querySelector('.three');

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {
  setTimeout(() => {
    heading1.style.color = 'red';
  }, 1000);

  setTimeout(() => {
    heading2.style.color = 'blue';
  }, 2000);

  setTimeout(() => {
    heading3.style.color = 'yellow';
  }, 3000);
})