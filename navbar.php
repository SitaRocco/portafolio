<nav class="navbar navbar-expand-md fixed-top">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <a href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="logo" />
    </a>

    <a href="mailto:rociocastillo.s@gmail.com?subject=Contacto%20desde%20tu%20portafolio%20web" 
       class= "d-md-none me-2">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download.svg" alt="Logo" class="logo" />
    </a>

    <button class="navbar-toggler" type="button" >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
      <div class="navbar-nav">
        <a class="nav-link me-3" href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/">Inicio</a>
        <a class="nav-link me-3" href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/#about">Sobre mí</a>
        <a class="nav-link me-3" href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/#proyectos">Portafolio</a>
      </div>

     
      <a href="mailto:rociocastillo.s@gmail.com?subject=Contacto%20desde%20tu%20portafolio%20web" 
         class="btn-escribeme d-none d-md-inline-block ms-3">
         Escríbeme
      </a>
    </div>

  </div>
</nav>

<script>

document.addEventListener("DOMContentLoaded", function () {
  const toggler = document.querySelector(".navbar-toggler");
  const menu = document.getElementById("navbarMenu");
  const icon = toggler.querySelector(".navbar-toggler-icon");


  const bsCollapse = new bootstrap.Collapse(menu, { toggle: false });

  toggler.addEventListener("click", function () {
    if (menu.classList.contains("show")) {
      bsCollapse.hide();
    } else {
      bsCollapse.show();
    }
  });

  menu.addEventListener("show.bs.collapse", () => {
    icon.classList.add("rotate-icon");
  });

  menu.addEventListener("hide.bs.collapse", () => {
    icon.classList.remove("rotate-icon");
  });

  window.addEventListener("scroll", () => {
    if (menu.classList.contains("show")) {
      bsCollapse.hide();
    }
  });

 
  document.querySelectorAll('#navbarMenu .nav-link').forEach(link => {
    link.addEventListener("click", () => {
      if (menu.classList.contains("show")) {
        bsCollapse.hide();
      }
    });
  });
});
</script>

<style>

  .rotate-icon {
    transform: rotate(90deg);
    transition: transform 0.3s ease;
  }
  
</style>

