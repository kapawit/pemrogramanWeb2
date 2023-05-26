// theme
const htmlElement = document.documentElement;
const theme = localStorage.getItem('theme') || 'light';
htmlElement.setAttribute('data-bs-theme', theme);

const toggleSwitch = document.querySelector('#toggleSwitch');
toggleSwitch.checked = theme === 'dark';

toggleSwitch.addEventListener('change', function() {
  if (this.checked) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
  
  const theme = localStorage.getItem('theme') || 'light';
  htmlElement.setAttribute('data-bs-theme', theme);
});

(function(){
  var watermark = document.createElement("div");
  watermark.innerHTML = "Pawit wahib";
  var watermarkStyle = watermark.style;
  watermarkStyle.position = "fixed";
  watermarkStyle.bottom = "20px";
  watermarkStyle.right = "20px";
  watermarkStyle.backgroundColor = "rgba(0, 0, 0, 0.5)";
  watermarkStyle.color = "#fff";
  watermarkStyle.fontFamily = "Arial";
  watermarkStyle.fontSize = "14px";
  watermarkStyle.padding = "5px";
  watermarkStyle.zIndex = "9999";

  document.body.appendChild(watermark);
})();