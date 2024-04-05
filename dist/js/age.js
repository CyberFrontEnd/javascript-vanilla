const btnEl = document.getElementById('btn');
const birthdayE1 = document.getElementById('birthday');

function calculateAge() {
  const birthdayValue = birthdayE1.value;

  if (birthdayValue === "") {
    alert("Please enter your birthday");
  }
}

btnEl.addEventListener('click', calculateAge);