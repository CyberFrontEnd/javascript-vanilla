const heading1 = document.querySelector('.one');
const heading2 = document.querySelector('.two');
const heading3 = document.querySelector('.three');

const btn = document.querySelector('.btn');

btn.addEventListener('click', () => {
});

const promicess = new Promice((resolve, reject) => {
  let value = true;
  if (value) {
    resolve('hey value is true')
  } else  {
    reject(`there was a error, value is false`)
  }
});

console.log(promicess);