function toggleTheme() {
  document.body.classList.toggle("dark-mode");
}

document.addEventListener("DOMContentLoaded", () => {
  const btn = document.createElement("button");
  btn.innerText = "Theme";
  btn.onclick = toggleTheme;
  document.body.prepend(btn);
});
