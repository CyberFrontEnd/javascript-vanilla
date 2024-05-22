const about = document.querySelector(".about");
const btns = document.querySelectorAll(".tab-btn");
const content = document.querySelectorAll(".content");

about.addEventListener("click", function (event) {
  // получения значения data
  const value = event.target.dataset.id;

  if (value) {
    // удаляет класс active
    btns.forEach(function (btn) {
      btn.classList.remove("active")
    });

    // добавляет active на data-id
    event.target.classList.add("active");

    // Удаляет класс Active в контексте
    content.forEach(function (content) {
      content.classList.remove("active");
    });

    // Добавляет класс к контенту
    const element = document.getElementById(value);
    element.classList.add("active");
  }
})