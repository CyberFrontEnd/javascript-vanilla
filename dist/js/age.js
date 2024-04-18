// const btnEl = document.getElementById('btn');
// const birthdayE1 = document.getElementById('birthday');
// const resultEl = document.getElementById("result");
//
// function calculateAge() {
//   const birthdayValue = birthdayE1.value;
//
//   if (birthdayValue === "") {
//     alert("Please enter your birthday");
//   } else {
//     const age = getAge(birthdayValue);
//     resultEl.innerText = `Your age is ${age} ${age > 1 ? "years" : "year"} old`;
//   }
// }
//
// function getAge (birthdayValue) {
//   const currentDate = new Date(); // текущий год
//   const birthdayDate = new Date(birthdayValue); // год рождения
//   let age = currentDate.getFullYear() - birthdayDate.getFullYear(); // тут мы вычитаем текущий год от года рождения
//   const month = currentDate.getMonth() - birthdayDate.getMonth(); // тут мы вычитаем текущий месяц от месяца рождения
//
//
//   // если месяц меньше 0 || если месяц равен 0 && в обоих случи ях меньше 0 или месяц равен 0 или день меньше чем мы планируем
//   // age-- что бы уменьшить возраст на 1
//   if (month < 0 || (month === 0 && currentDate.getDate() < birthdayDate.getDate()) ) {
//     age--
//   }
//
//   return age;
// }
//
// btnEl.addEventListener('click', calculateAge);


// Step 1
// const bthE1 = document.getElementById('btn');
// const birthdayE1 = document.getElementById('birthday');
// const result = document.getElementById('result');
//
// Step 3
// function calculateAge() {
//   const birthdayValue = birthdayE1.value;
//
//   if (birthdayValue === "") {
//     alert('Пожалуйте введите день вашего рождения');
//
//   } else {
//     const age = getAge(birthdayValue);
//     result.innerText = `Your age is ${age} ${age < 1 ? "years" : "year"} old`;
//   }
// }
//
// Step 4
// function getAge(birthdayValue) {
//   const currentDate = new Date();
//   const birthdayDate = new Date(birthdayValue);
//   let age = currentDate.getFullYear() - birthdayDate.getFullYear();
//   const month = currentDate.getMonth() - birthdayDate.getMonth();
//
//   if (month < 0 || (month === 0 && currentDate.getDate() < birthdayDate.getDate())) {
//     age--;
//   }
//
//   return age
// }
//
// Step 2
// bthE1.addEventListener('click', calculateAge);


const btn = document.getElementById('btn');
const input = document.getElementById('birthday');
const result = document.getElementById('result');

function calculate() {
  const inputValue = input.value;
  if (inputValue === '') {
    alert("Введи данные")
  } else {
    let age = ageCalc(inputValue);
   result.innerText = `Your age is ${age} ${age < 1 ? "years" : "year"} old`;
  }
}

function ageCalc(inputValue) {
  const now = new Date();
  const birthday = new Date(inputValue);
  let currentDay = now.getFullYear() - birthday.getFullYear();
  const currentMonth = now.getMonth() - birthday.getMonth();

  if (currentMonth < 0 || (currentMonth === 0 && now.getDate() < birthday.getDate())) {
    currentDay --;
  }

  return currentDay;
}

btn.addEventListener('click', calculate)






























