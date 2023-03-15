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

