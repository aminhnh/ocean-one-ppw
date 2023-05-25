function takeAction() {
  alert("I am taking action!");
}
function editText() {
  var paraAlign = document.getElementById("align-para");
  var paraKick = document.getElementById("kickstart-para");
  var editButton = document.getElementById("editButton");

  paraAlign.innerHTML =
    `<form><textarea name="" id="edited-text" cols="40" rows="3">` +
    paraKick.innerText +
    `</textarea>
  </form>`;
  editButton.innerHTML = `<button onclick="saveEdit()">Save</button>`;
}
function saveEdit() {
  var paraAlign = document.getElementById("align-para");
  var editedText = document.getElementById("edited-text").value;
  var editButton = document.getElementById("editButton");
  paraAlign.innerHTML = `<p>${editedText}</p>`;
  editButton.innerHTML = `<button onclick="editText()">Edit</button>`;
}
