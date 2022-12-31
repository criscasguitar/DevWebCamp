<main class="devwebcamp">
    <h2 class="devwebcamp__heading"> <?php echo $titulo ?></h2>
    <p class="devwebcamp__descripcion"> Conoce la Conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <picture srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="imagen Devwebcamp">
            </picture>
        </div>
        <div <?php aos_animacion(); ?> class="devwebcamp_contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp_texto">Dolor sit amet consectetur adipisicing elit. Delectus iusto quaerat enim itaque obcaecati id corporis corrupti molestiae? Dicta commodi nesciunt placeat quod labore et tempore culpa aspernatur dolorum vel</p>
            
            <p <?php aos_animacion(); ?> class="devwebcamp_texto">Dolor sit amet consectetur adipisicing elit. Delectus iusto quaerat enim itaque obcaecati id corporis corrupti molestiae? Dicta commodi nesciunt placeat quod labore et tempore culpa aspernatur dolorum vel</p>
        </div>
    </div>
</main>