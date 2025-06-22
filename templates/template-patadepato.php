<?php /* Template Name: Pata de Pato */ ?>

<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<section class="project-detail mt-5 ">
  <div class="container text-center">
    <div class="col-12 mx-auto">
     <div class="section-background" style="background-image: url('<?php the_field('imagen-fondo-proyecto'); ?>'); background-size: cover; background-position: center; padding: 200px 20px;border-radius:5px">

    <h1 class="project-title " id="titulo" style="color:black;"><?php the_field('titulo_proyecto'); ?></h1>

    <div class="text-center tools-section" id="tools">
        <p class="mb-0">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js-square"></i>
            <i class="fab fa-php"></i>
            <i class="fab fa-wordpress"></i>
            <i class="fab fa-bootstrap"></i>
        </p>
    </div>

</div>

     <div class="project-description mt-4">
        <p class="descripcion text-center text-md-start"><?php the_field('descripcion-1'); ?></p>
     </div>
      <a href="https://www.patadepato.cl/" target="_blank" class="btn-website ">Visita el sitio</a>


<section class="project-detail py-5">
    <div class="container">

    <!-- Imagen 1 -->
    <div class="row align-items-center mb-5 gsap-section"  >
        <div class="col-lg-6 mb-3 mb-lg-0">
        <?php if (wp_is_mobile()): ?>
        <img src="<?php echo esc_url(get_field('imagen-1')); ?>" alt="Imagen 1" class="img-fluid rounded shadow" >
        <?php else: ?>
        <a href="<?php echo esc_url(get_field('imagen-1')); ?>" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-imgsrc="<?php echo esc_url(get_field('imagen-1')); ?>">
          <img src="<?php echo esc_url(get_field('imagen-1')); ?>" alt="Imagen 1" class="img-fluid rounded shadow image-trigger">
        </a>
        <?php endif; ?>
       </div>
       
       <div class="col-lg-6 text-light text-start">
       <p ><?php the_field('imagen-1descripcion'); ?></p>
       </div>
    </div>

    <!-- Imagen 2 -->
    <div class="row align-items-center mb-5 flex-lg-row-reverse gsap-section">
        <div class="col-lg-6 mb-3 mb-lg-0">
        <?php if (wp_is_mobile()): ?>
        <img src="<?php echo esc_url(get_field('imagen-2')); ?>" alt="Imagen 2" class="img-fluid rounded shadow">
        <?php else: ?>
        <a href="<?php echo esc_url(get_field('imagen-2')); ?>" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-imgsrc="<?php echo esc_url(get_field('imagen-2')); ?>">
          <img src="<?php echo esc_url(get_field('imagen-2')); ?>" alt="Imagen 2" class="img-fluid rounded shadow image-trigger">
        </a>
        <?php endif; ?>
        </div>
        
        <div class="col-lg-6 text-light text-start">
        <p><?php the_field('imagen-2descripcion'); ?></p>
        </div>
    </div>

  <!-- Imagen 3 -->
  <div class="row align-items-center mb-5 gsap-section">
    <div class="col-lg-6 mb-3 mb-lg-0">
      <?php if (wp_is_mobile()): ?>
        <img src="<?php echo esc_url(get_field('imagen-3')); ?>" alt="Imagen 3" class="img-fluid rounded shadow">
      <?php else: ?>
        <a href="<?php echo esc_url(get_field('imagen-3')); ?>" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-imgsrc="<?php echo esc_url(get_field('imagen-3')); ?>">
          <img src="<?php echo esc_url(get_field('imagen-3')); ?>" alt="Imagen 3" class="img-fluid rounded shadow image-trigger">
        </a>
      <?php endif; ?>
    </div>
    <div class="col-lg-6 text-light text-start">
      <p><?php the_field('imagen-3descripcion'); ?></p>
    </div>
  </div>

  <!-- Imagen 4 -->
  <div class="row align-items-center mb-5 flex-lg-row-reverse gsap-section">
    <div class="col-lg-6 mb-3 mb-lg-0">
      <?php if (wp_is_mobile()): ?>
        <img src="<?php echo esc_url(get_field('imagen-4')); ?>" alt="Imagen 4" class="img-fluid rounded shadow">
      <?php else: ?>
        <a href="<?php echo esc_url(get_field('imagen-4')); ?>" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-imgsrc="<?php echo esc_url(get_field('imagen-4')); ?>">
          <img src="<?php echo esc_url(get_field('imagen-4')); ?>" alt="Imagen 4" class="img-fluid rounded shadow image-trigger">
        </a>
      <?php endif; ?>
    </div>
    <div class="col-lg-6 text-light text-start">
      <p><?php the_field('imagen-4descripcion'); ?></p>
    </div>
  </div>

</div>

</section>

<!--  Lightbox escritorio -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark border-0">
      <div class="modal-body p-0 d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <img src="" alt="Imagen ampliada" id="lightboxImg" style="max-width: 100%; object-fit: contain; display: block; margin: auto;">
      </div>
      <div class="modal-footer border-0 justify-content-center">
        <button type="button" class="btn-escribeme" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>

  gsap.registerPlugin(ScrollTrigger);

  if (window.innerWidth > 768) {
    document.querySelectorAll(".gsap-section").forEach(section => {
      gsap.from(section, {
        scrollTrigger: {
          trigger: section,
          start: "top 80%",
          toggleActions: "play none none reset"
        },
        opacity: 0,
        x: section.classList.contains('flex-lg-row-reverse') ? 100 : -100,
        duration: 1,
        ease: "power2.out"
      });
    });

    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');

    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(el => {
      el.addEventListener('click', function () {
        const src = this.getAttribute('data-imgsrc');
        lightboxImg.setAttribute('src', src);
      });
    });

  } else {
    document.querySelectorAll(".gsap-section").forEach(section => {
      gsap.from(section, {
        scrollTrigger: {
          trigger: section,
          start: "top 90%",
          toggleActions: "play none none reset"
        },
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out"
      });
    });
  }
</script>


<style>

.tools-image-container {
  margin-left: auto;
  margin-right: auto;
}

.tools-image {
  width: 100%;
  height: auto;
  border-radius: 15px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.3);
  object-fit: cover;
}

p,
.descripcion,
#detalles {
  font-family: "Montserrat", sans-serif;
  color: white;
}


p {
  font-size: 2.5vh;
  margin-bottom: 0;
  
}

.descripcion {
  font-size: 2.5vh;
  padding: 1rem 0;
}

.btn-website {
  margin: 20px auto 50px;
  width:300px;
  display: block;
  text-align: center;
  font-size: 1rem!important ;
  padding: 10px 60px;
  background-color: #d2d907;
  color: black !important;
  font-weight: 800;
  letter-spacing: 2px;
  border: 2px solid #d2d907 ;
  border-radius: 30px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn-website:hover {
  background-color: transparent;
  color: #d2d907 !important;
}

.tools-section i {
  font-size: 3rem;
  vertical-align: middle;
  margin-right: 10px;
  color: black;
}

.project-detail .col-lg-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

@media (max-width: 768px) {
  .project-detail .container {
    padding-left: 0;
    padding-right: 0;
    max-width: 100%;
  }

  .project-detail .row.align-items-center {
    flex-direction: column !important;
    margin: 0;
  }

  .project-detail .col-lg-6 {
    width: 100% !important;
    padding: 0 !important;
  }

  .project-detail img.img-fluid {
    width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
  }

  .project-detail p {
    font-size: 4.5vw;
    padding: 1rem;
    
  }
  
  .project-detail p,
  .descripcion {
    text-align: center;
  }
  
}

@media (max-width: 576px) {
 
  #titulo {
    font-size: 5vh;
    text-align: center;
    margin-top: 80px;
  }

  #tools {
    text-align: center !important;
  }

  .section-background {
      padding: 60px 20px!important;
  }
  
  .project-detail p,
  .descripcion {
    text-align: center;
  }
}

</style>

<?php include get_template_directory() . '/contacto.php'; ?>
<?php get_footer(); ?>

