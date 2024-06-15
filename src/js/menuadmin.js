(function() {

   const menuDIV = document.querySelector('#menu_admin')
   if(menuDIV) {
      menuDIV.addEventListener('click', mostrarMenuSidebar)
      
      function mostrarMenuSidebar() {
         const menuSidebar = document.querySelector('#sidebar')
         menuSidebar.classList.toggle('sidebar--open')
      }
   }

})();