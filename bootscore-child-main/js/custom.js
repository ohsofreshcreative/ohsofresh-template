jQuery(function ($) {

    // Do stuff here

}); // jQuery End


//submenu

  document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
  
    menuItems.forEach(item => {
        const link = item.querySelector('.nav-link.dropdown-toggle');
        const dropdownMenu = item.querySelector('.dropdown-menu');
  
        if (link && dropdownMenu) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                dropdownMenu.classList.toggle('submenu-show');
  
                const toggleIcon = link.querySelector('.dropdown-toggle::after');
                if (toggleIcon) {
                    toggleIcon.classList.toggle('rotate');
                }
            });
  
            document.addEventListener('click', function(event) {
                const isClickInside = item.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.remove('submenu-show');
                    
                    const toggleIcon = link.querySelector('.dropdown-toggle::after');
                    if (toggleIcon) {
                        toggleIcon.classList.remove('rotate');
                    }
                }
            });
        }
    });
  });