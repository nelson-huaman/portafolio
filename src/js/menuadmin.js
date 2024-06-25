(function() {

   const menuDIV = document.querySelector('#menu_admin')
   if(menuDIV) {

      // Mostrar Menu
      menuDIV.addEventListener('click', mostrarSidebarOpen)
      
      function mostrarSidebarOpen() {
         const SidebarOpen = document.querySelector('#sidebar')
         SidebarOpen.classList.toggle('sidebar--open')
      }

      const sidebarClose = document.querySelector('.sidebar__cerrar-menuadmin')
      sidebarClose.addEventListener('click', cerrarSibebarClose)
      function cerrarSibebarClose() {
         const SidebarOpen = document.querySelector('#sidebar')
         SidebarOpen.classList.toggle('sidebar--open')
      }

   }


})();