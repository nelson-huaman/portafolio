(function() {

   const sidebaradmin = document.querySelector('#sidebar')
   if(sidebaradmin) {

      const menuItem = document.querySelectorAll('.menu_admin__item')
      menuItem.forEach(function(item) {
         item.addEventListener('click', function() {
            menuItem.forEach(function(item) {
               item.classList.remove('menu_admin__open')
            })
            if(item.querySelector('.menu_admin__submenu')) {
               item.classList.add('menu_admin__open')
            }
         })
      })

   }

})();