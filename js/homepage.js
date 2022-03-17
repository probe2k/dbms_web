const whiteHeart = '\u2661';
const blackHeart = '\u2665';
const button = document.querySelector(".heart_button");
button.addEventListener('click', toggle);

function toggle() {
  const like = button.textContent;
  if(like==whiteHeart) {
    button.textContent = blackHeart;
  } else {
    button.textContent = whiteHeart;
  }
}
