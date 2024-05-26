let count = 0;
const result = document.getElementById("result");
const btns = document.querySelectorAll(".btn");

btns.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    const styles = event.currentTarget.classList;

    if (styles.contains("increase")) {
      count++;
    } else if(styles.contains("decrease")) {
      count--;
    } else {
      count = 0
    }

    if (count > 0) {
      result.style.color = "green"
    }

    if (count < 0) {
      result.style.color = "red"
    }

    if (count===0){
      result.style.color = "black"
    }

    result.textContent = count;
  });
})