<!-- -------------------------Footer-------------------------- -->

<footer class="footer">
    <div class="container" data-aos="fade-right" data-aos-delay="200">
        <div class="about-us">
            <h2>Proyecto</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illum corrupti maiores cupiditate non vitae possimus exercitationem, distinctio vero voluptatibus omnis. Necessitatibus quidem nesciunt officiis, exercitationem nam fuga quis quae?</p>
        </div>
        <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
            <h2>Comenzar</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur saepe, eligendi hic, ea commodi deserunt sapiente assumenda enim cum labore architecto aspernatur nesciunt reiciendis ab impedit possimus cupiditate? Explicabo, unde.</p>
        </div>
        <div class="impacto-footer" data-aos="fade-left" data-aos-delay="200">
            <h2>Impacto</h2>
            <div class="flex-row">
                <img src="./assets/territorio.jpg" alt="imp1">
                <img src="./assets/sociedad.jpg" alt="imp2">
                <img src="./assets/identidad.jpg" alt="imp3">
            </div>
            <div class="flex-row">
                <img src="./assets/economia.jpg" alt="imp4">
                <img src="./assets/cultura.jpg" alt="imp5">
                <img src="./assets/politico.jpg" alt="imp6">
            </div>
        </div>
        <div class="follow" data-aos="fade-left" data-aos-delay="200">
            <h2>Lorem</h2>
            <p>lorem ipsum</p>
            <div>
                <i class="fas fa-leaf"></i>
                <i class="fas fa-seedling"></i>
                <i class="fas fa-leaf"></i>
                <i class="fas fa-seedling"></i>
            </div>
        </div>
    </div>
    <div class="rights flex-row">
        <h4 class="text-gray">
            Copyright ©2020 Todos los derechos reservados | Hecho por
            <a href="" target="_black">Lorem ipsum</a>
        </h4>
    </div>
    <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
</footer>

<!-- -------------x--------------Footer----------x------------ -->

<script type="text/javascript">
$(document).ready(function () {
    $("#next-1").click(function () {
        $("#second").show();
        $("#first").hide();
        $("#progressBar").css("width", "28%");
        $("#progressText").html("Sociedad");
    });

    $("#next-2").click(function () {
        $("#third").show();
        $("#second").hide();
        $("#progressBar").css("width", "42%");
        $("#progressText").html("Identidad");
    });

    $("#prev-2").click(function () {
        $("#second").hide();
        $("#first").show();
        $("#progressBar").css("width", "14%");
        $("#progressText").html("Territorio");
    });

    $("#next-3").click(function () {
        $("#fourth").show();
        $("#third").hide();
        $("#progressBar").css("width", "56%");
        $("#progressText").html("Economía");
    });

    $("#prev-3").click(function () {
        $("#third").hide();
        $("#second").show();
        $("#progressBar").css("width", "28%");
        $("#progressText").html("Sociedad");
    });

    $("#next-4").click(function () {
        $("#fifth").show();
        $("#fourth").hide();
        $("#progressBar").css("width", "70%");
        $("#progressText").html("Cultura");
    });

    $("#prev-4").click(function () {
        $("#fourth").hide();
        $("#third").show();
        $("#progressBar").css("width", "42%");
        $("#progressText").html("Identidad");
    });

    $("#next-5").click(function () {
        $("#sixth").show();
        $("#fifth").hide();
        $("#progressBar").css("width", "84%");
        $("#progressText").html("Político");
    });

    $("#prev-5").click(function () {
        $("#fifth").hide();
        $("#fourth").show();
        $("#progressBar").css("width", "56%");
        $("#progressText").html("Economía");
    });

    $("#next-6").click(function () {
        $("#seventh").show();
        $("#sixth").hide();
        $("#progressBar").css("width", "100%");
        $("#progressText").html("Ambiental");
    });

    $("#prev-6").click(function () {
        $("#sixth").hide();
        $("#fifth").show();
        $("#progressBar").css("width", "70%");
        $("#progressText").html("Cultura");
    });

    $("#prev-7").click(function () {
        $("#seventh").hide();
        $("#sixth").show();
        $("#progressBar").css("width", "84%");
        $("#progressText").html("Político");
    });
});
</script>

</body>

</html>