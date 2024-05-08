function updateDauX2(operation, id) {
    var dauX2 = document.getElementById(id);
    var currentVal = parseInt(dauX2.textContent);

    if (operation === '+') {
        dauX2.textContent = currentVal + 1;
    } else if (operation === '-' && currentVal > 0) {
        dauX2.textContent = currentVal - 1;
    }
}
function increaseChatbox() {
    var chatbox2 = document.getElementById('chatbox2');
    var currentValue = parseInt(chatbox2.textContent);
    chatbox2.textContent = currentValue + 1;
  }
  

  const searchWrapper = document.querySelector(".search-input");
  const inputBox = searchWrapper.querySelector("input");
  const suggBox = searchWrapper.querySelector(".autocom-box");
// if user press any key and release 
inputBox.onkeyup = (e) => {
    console.log(e.target.value);
}