
<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<footer id="content" class="w-100">
    <div class="footerwrapper bg-primary text-white text-center" style="margin-top: 0px; width: 100%;">
        <div class="container">
            <div class="row">
                <!-- Footer Logo and Address -->
                <div class="col-lg-3 col-sm-4 col-xs-12 fg-ft-details">
                    <div class="footer-logo">
                        <img src="/img/Logo_Multifarma.png" alt="Logo Farmacias Guadalajara" width="380" height="150" alt="Nombre de la Marca">
                    </div>
                    <div class="fg-address">
                        <p>Av. de las Américas #1254 - Int. UP6, P2<br>
                            Col. Country Club<br>
                            Guadalajara, Jalisco <br>
                            C.P. 44610</p>
                        <p><strong>Teléfonos Contact Center:</strong><br>
                            <a href="tel:+523338181818" style="color: white; text-decoration: underline">(33) 3818 1818</a><br>
                            <a href="tel:+528332762242" style="color: white; text-decoration: underline">(83) FARMACIA (32762242)</a>
                        </p>
                    </div>
                </div>

                <!-- Online Store Links -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <br>
                    <h3>TIENDA EN LÍNEA</h3>
                    <ul class="fg-link-box">
                        <li><a href="/salud" style="color: white;">Salud</a></li>
                        <li><a href="/departamento/alimentos" style="color: white;">Alimentos</a></li>
                        <li><a href="/bebes" style="color: white;">Bebés</a></li>
                        <li><a href="/departamento/bebidas-es" style="color: white;">Bebidas</a></li>
                        <li><a href="/bebes/alimentos" style="color: white;">Alimentos Infantiles</a></li>
                        <li><a href="/departamento/vitaminas" style="color: white;">Vitaminas y Suplementos</a></li>
                    </ul>
                </div>

                <!-- Help Links -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <br>
                    <h3>AYUDA</h3>
                    <ul class="fg-link-box">
                        <li><a href="/ayuda/contáctanos" class="fg-contact-us" style="color: white;">Contacto</a></li>
                        <li><a href="/ayuda/preguntas-frecuentes--24" style="color: white;">Preguntas Frecuentes</a></li>
                        <li><a href="/ayuda/localizador-de-superfarmacias" style="color: white;">Encuentra Tu SuperFarmacia</a></li>
                        <li><a href="/facturación-electrónica" style="color: white;">Factura Electrónica</a></li>
                        <li><a href="/locker-inteligente" style="color: white;">Smart & Collect</a></li>
                        <li><a href="/blog-es" style="color: white;">Blog</a></li>
                    </ul>
                </div>

                <!-- Company Links -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <br>
                    <h3>EMPRESA</h3>
                    <ul class="fg-link-box">
                        <li><a href="/sobre-nosotros/sobre-nosotros" style="color: white;">Conócenos</a></li>
                        <li><a href="/sobre-nosotros/informacion-corporativa" style="color: white;">Corporativo</a></li>
                        <li><a href="/sobre-nosotros/relacion-con-inversionistas" style="color: white;">Relación con Inversionistas</a></li>
                        <li><a target="_blank" href="https://fragua.csod.com/ux/ats/careersite/1/home?c=fragua" style="color: white;">Bolsa de Trabajo</a></li>
                        <li><a href="/sobre-nosotros/politicas-de-privacidad" style="color: white;">Políticas de Privacidad</a></li>
                        <li><a href="/sobre-nosotros/terminos-y-condiciones" style="color: white;">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom Text -->
            <div class="row fg-copyrt">
                <div class="col-xs-12">
                    <p>Los precios y promociones mostrados en esta página online son exclusivos y estos pueden diferir de los precios y promociones de sucursal.</p>
                    <p style="margin-bottom: 10px">Las imágenes mostradas son exclusivamente para uso ilustrativo.</p>
                    <p>© MultiFarma es una empresa de Corporativo Fragua, S.A.B. de C.V. Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
/* Footer Styles */
#content {
    width: 100%;
}

.footerwrapper {
    padding: 20px 0;
}

.footer-logo img {
    max-width: 100%;
    height: auto;
}

.fg-ft-details .fg-address {
    margin-top: 20px;
}

.fg-ft-details p {
    margin: 0;
    line-height: 1.5;
}

.fg-link-box {
    list-style: none;
    padding: 0;
    margin: 0;
}

.fg-link-box li {
    margin-bottom: 10px;
}

.fg-link-box a {
    color: white;
    text-decoration: none;
}

.fg-link-box a:hover {
    text-decoration: underline;
}

.fg-copyrt p {
    margin: 0;
    line-height: 1.5;
}

.fg-copyrt {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .footerwrapper .row > div {
        margin-bottom: 20px;
    }
    
    .fg-ft-details .footer-logo {
        text-align: center;
    }

    .fg-ft-details .fg-address {
        text-align: center;
    }
}

@media (max-width: 576px) {
    .fg-ft-details .footer-logo {
        text-align: center;
    }

    .fg-ft-details .fg-address {
        text-align: center;
    }

    .footerwrapper .row > div {
        text-align: center;
    }

    .footer-logo img {
        margin: 0 auto;
    }
}

</style>