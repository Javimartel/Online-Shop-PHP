    <footer id="footer">
        <div class="container">
            <div class="row">

                <div class="wrap flex-container">

                <div class="col-md-3 footer-logo text-center mb-3">
                    <img src="../images/img-template/main-logo.png" class="mb-3">
                </div>		

                <div class="col-md-5 mr-5 mb-3">
                    <div class="widget-newsletter mb-5">
                        <h4 class="widget-title">Suscribete para estar actualizado</h4>
                        <div class="newsletter-button d-flex">
                            <input type="text" name="Subscribe" placeholder="Tu email">
                            <button class="btn-hvr-effects">Suscribirse</button>
                        </div>
                        
                    </div>

                    <div class="working-schedule">
                        <h4 class="widget-title">Horario</h4>
                        <div class="time-list d-flex">
                            <ul class="list-unstyled mr-5">
                                <li>Lunes - Viernes</li>
                                <li>8:00am - 8:30 pm</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>Sábados - Domingos</li>
                                <li>10:00am - 16:00 pm</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="quick-links">
                        <h4 class="widget-title">Enlaces</h4>
                        <div class="footer-menu">
                            <ul class="list-unstyled">
                                <li><a href="../index.php">Inicio</a></li>
                                <li><a href="./shop.php">Tienda</a></li>
                                <li><a href="./about.php">Sobre nosotros</a></li>
                                <li><a href="./blog.php">Blogs</a></li>
                                <li><a href="./contact.php">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                </div>

            </div>
        </div>
    </footer>


    <div class="footer-bottom">
        <div class="container">
            <div class="wrap flex-container padding-small">
                <div class="copyright">
                    <p class="mb-0">© 2023 Tienda online by Javi</p>
                </div>
                <div class="payment-card">
                    <span>Aceptamos:</span>
                    <img src="../images/img-template/visa.png" class="cardImg">
                    <img src="../images/img-template/american-express.png" class="cardImg">
                    <img src="../images/img-template/master-card.png" class="cardImg">
                </div>
            </div>
        </div>
    </div>

    </div>    	

    <!-- Script para abrir el navbar -->
    <script>
        let button = document.querySelector(".navbar-toggler");
        let navbar = document.querySelector(".navbar-collapse");
        let action_menu = document.querySelector(".action-menu");
        button.addEventListener("click", function() {
            console.log("click")
            if (navbar.classList.contains("show")) {
                navbar.classList.remove("show");
                action_menu.classList.remove("show");
            } else {
                navbar.classList.add("show");
                action_menu.classList.add("show");
            }
        });
    </script>

    <script src="../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
    <script src="https://kit.fontawesome.com/81af316a53.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>

</body>
</html>
