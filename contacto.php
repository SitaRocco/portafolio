
<section class="cta-section ">
  
    <div class="cta-content text-center  rounded-3 mt-5  w-100">
      <h2>¿Tienes algún proyecto en mente?</h2>
      <a href="mailto:rociocastillo.s@gmail.com?subject=Contacto desde tu portafolio web" target="_blank" id="cta-botoncito" class="d-md-inline-block mt-5 mt-sm-5  ">Escríbeme</a>
    </div>
  
  <div class="falling-shapes "></div>
 
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
<script>

  const container = document.querySelector('.falling-shapes');
  const shapes = [ 'square'];

  for (let i = 0; i < 25; i++) {
    const shapeEl = document.createElement('div');
    const shapeType = shapes[Math.floor(Math.random() * shapes.length)];
    shapeEl.classList.add('shape', shapeType);
    shapeEl.style.left = `${Math.random() * 100}%`;
    shapeEl.style.animationDuration = `${5 + Math.random() * 4}s`;
    shapeEl.style.animationDelay = `${Math.random() * 5}s`;
    shapeEl.style.transform = `rotate(${Math.random() * 360}deg)`;
    container.appendChild(shapeEl);
  }
  
</script>


