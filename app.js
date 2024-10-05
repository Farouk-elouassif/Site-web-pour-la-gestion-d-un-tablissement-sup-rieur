  // Toggle the dropdown visibility for desktop
  document.querySelectorAll('.dropdown').forEach(function(menuItem) {
    menuItem.addEventListener('mouseenter', function() {
      const targetMenu = menuItem.getAttribute('data-target');
      document.getElementById(targetMenu).classList.remove('hidden');
    });
    menuItem.addEventListener('mouseleave', function() {
      const targetMenu = menuItem.getAttribute('data-target');
      document.getElementById(targetMenu).classList.add('hidden');
    });
  });

  // For mobile: Toggle the menu on click
  document.getElementById('menu-toggle').addEventListener('click', function() {
    var navbar = document.getElementById('navbar');
    navbar.classList.toggle('hidden');
  })