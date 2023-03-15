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

  //  sidebar 
  // Get all list-group-items
var items = document.querySelectorAll('.list-group-item');

// Add click event listener to each item
items.forEach(function(item) {
  item.addEventListener('click', function() {
    // Remove active state from any previously active items
    items.forEach(function(otherItem) {
      otherItem.classList.remove('active');
    });
    
    // Set active state for clicked item
    this.classList.add('active');
    
    // Save active state in local storage
    var key = 'activeItem';
    var value = this.getAttribute('data-id');
    localStorage.setItem(key, value);
  });
});

// On page load, set active state for last clicked item
var key = 'activeItem';
var value = localStorage.getItem(key);
if (value) {
  var item = document.querySelector('.list-group-item[data-id="' + value + '"]');
  if (item !== null) {
    item.classList.add('active');
  } else {
    console.log('Item with data-id "' + value + '" not found');
  }
}
