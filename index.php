 <?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<!-- Seccion principal -->
<section class="hero">
  <div class="d-flex w-100 h-100 justify-content-center align-items-center flex-wrap flex-md-nowrap">
    <div class="text-center text-light px-4 py-3 d-flex flex-column align-items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Tecla RO" class="keycap gsap-logo" />
    </div>

    <div class="text-center">
      <h1 class="tagline gsap-texto"><?php the_field('presentacion'); ?></h1>
      <p class="descripcion gsap-texto"><?php the_field('presentacion2'); ?></p>
    </div>
  </div>

  <div class="scroll-down-indicator">
    <a href="#proyectos"><i class="fa-solid fa-angles-down" style="color: #e7e000;"></i></a>
  </div>
</section>

<!-- Seccion Sobre mi -->
<section class="sobre-mi" id="about">
  <div class="container mt-5 px-0 px-md-3">
    <div class="row align-items-center gy-4">
       <div class="col-lg-7">
        <h2 id="sobre-mi" class="titulo text-center text-md-start "><?php the_field('titulo'); ?></h2>
          <div class="d-block d-md-none text-center my-3">
          <?php 
            $imagen = get_field('image'); 
            if ($imagen): ?>
            <img src="<?php echo esc_url($imagen); ?>" alt="Foto de perfil" class="img-fluid imagen-central " id="ro">
          <?php endif; ?>
         </div>
         
         <p class="parrafo-desktop mt-4 text-center text-md-start "><?php the_field('descripcion'); ?></p>
         <p class="parrafo-desktop text-center text-md-start"><?php the_field('descripcion2'); ?></p>
         
        </div>

      <!-- Imagen para escritorio -->
        <div class="col-lg-5 position-relative text-end d-none d-md-block">
        <?php 
          if ($imagen): ?>
          <img src="<?php echo esc_url($imagen); ?>" alt="Foto de perfil" class="img-fluid imagen-central gsap-foto" id="ro">
        <?php endif; ?>
        </div>
    </div>
  </div>
</section>

<!-- Sección Proyectos -->
<section id="proyectos" class="mt-5" style="padding-top: 6rem; padding-bottom: 6rem;">
  <div class="container">
    <h2 class="mb-5 mt-5 text-center" id="proyecto"><?php the_field('seccion-proyectos'); ?></h2>

    <div class="row g-4 mt-5 justify-content-center">
        
      <!-- Proyecto 1 -->
      <div class="col-12 col-md-6 col-lg-4 text-center">
        <?php $imagen = get_field('imagen-proyecto1'); if ($imagen): ?>
          <img src="<?php echo esc_url($imagen); ?>" alt="Proyecto 1" class="img-fluid gsap-proyecto efecto-circulo mb-3">
          <p class="mb-5 mt-2 text-center" id="d-web"><?php the_field('patadepato'); ?></p>
        <?php endif; ?>
        <a href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/pata-de-pato" target="_blank" class="btn-website mt-2">Ver proyecto</a>
      </div>

      <!-- Proyecto 2 -->
      <div class="col-12 col-md-6 col-lg-4 text-center">
        <?php $imagen = get_field('imagen-proyecto2'); if ($imagen): ?>
          <img src="<?php echo esc_url($imagen); ?>" alt="Proyecto 2" class="img-fluid gsap-proyecto efecto-circulo mb-3" style="border-radius:5px;">
           <p class="mb-5 mt-2 text-center" id="d-web"><?php the_field('britpop'); ?></p>
        <?php endif; ?>
        <a href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/britpop" target="_blank" class="btn-website mt-2">Ver proyecto</a>
      </div>

      <!-- Proyecto 3 -->
      <div class="col-12 col-md-6 col-lg-4 text-center ">
        <?php $imagen = get_field('imagen-proyecto3'); if ($imagen): ?>
          <img src="<?php echo esc_url($imagen); ?>" alt="Proyecto 3" class="img-fluid gsap-proyecto efecto-circulo  mb-3 " style="border-radius:5px; ">
           <p class="mb-5 mt-2 text-center" id="d-web"><?php the_field('abogados'); ?></p>
        <?php endif; ?>
        <a href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/abogados/" target="_blank" class="btn-website mt-2">Ver proyecto</a>
      </div>

      <!-- Proyecto 4 
      <div class="col-12 col-lg-6 text-center">
        <?php $imagen = get_field('imagen-proyecto4'); if ($imagen): ?>
          <img src="<?php echo esc_url($imagen); ?>" alt="Proyecto 4" class="img-fluid gsap-proyecto efecto-circulo mb-3" style="border-radius:5px;">
        <?php endif; ?>
        <a href="https://roc.castillos.laboratoriodiseno.cl/portafolio/wordpress/calare-joyas/" target="_blank" class="btn-website mt-2">Ver proyecto</a>
      </div>
      -->
    </div>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>

window.addEventListener("load", () => {
  gsap.registerPlugin(ScrollTrigger);


  gsap.fromTo(".gsap-logo", 
    { opacity: 0, scale: 0.5 }, 
    { opacity: 1, scale: 1, duration: 1.5, ease: "power2.out" }
  );

  gsap.fromTo(".gsap-texto", 
    { opacity: 0, y: 30 }, 
    { opacity: 1, y: 0, duration: 1.5, ease: "power2.out", delay: 0.6 }
  );

  gsap.from(".gsap-proyecto", {
    scrollTrigger: {
      trigger: "#proyectos",
      start: "top 80%",
    },
    opacity: 0,
    y: 40,
    duration: 1,
    stagger: 0.2,
    ease: "power2.out"
  });
});
  
const imgEsquinas = document.querySelectorAll('.efecto-circulo');

imgEsquinas.forEach((img) => {
  img.addEventListener('mouseenter', () => {
    gsap.to(img, {
      borderTopLeftRadius: "15%",
      borderBottomRightRadius: "15%",
      borderTopRightRadius: "10px",
      borderBottomLeftRadius: "10px",
      duration: 0.4,
      ease: "power2.out"
    });
  });

  img.addEventListener('mouseleave', () => {
    gsap.to(img, {
      borderRadius: "10px",
      duration: 0.4,
      ease: "power2.out"
    });
  });


  img.addEventListener('touchstart', () => {
    gsap.to(img, {
      borderTopLeftRadius: "50%",
      borderBottomRightRadius: "50%",
      borderTopRightRadius: "10px",
      borderBottomLeftRadius: "10px",
      duration: 0.4,
      ease: "power2.out"
    });

    setTimeout(() => {
      gsap.to(img, {
        borderRadius: "10px",
        duration: 0.4,
        ease: "power2.out"
      });
    }, 600);
  });
});

</script>

<style>

.btn-website {
  margin: 20px auto 50px;
  width:250px;
  display: block;
  text-align: center;
  font-size: 1rem!important ;
  padding: 10px 60px;
  background-color: transparent;
  color: #d2d907 !important;
  font-weight: 800;
  letter-spacing: 2px;
  border: 2px solid #d2d907 ;
  border-radius: 30px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn-website:hover {
  background-color: #d2d907;
  color: black !important;
}

#d-web{
    font-family:"Montserrat",  sans-serif;
    font-size:2vh;
    color:white;
    letter-spacing:2px;
}

</style>

<?php include get_template_directory() . '/contacto.php'; ?>
<?php get_footer(); ?>

