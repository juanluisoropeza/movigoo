<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>..:: Movigoo | Contacto ::..</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <header>
    <div class="row w-100 h-100 align-content-center">
      <div class="col-5 col-md-6 d-flex align-items-center logo">
        <a href="index.html"><img src="images/logo.svg" alt="Movigoo"></a>
      </div>
      <div class="col-7 col-md-6 btn_header">
        <a href="https://calendly.com/movigoo" target="_blank" class="btn btn-outline-danger">AGENDA UNA CALL</a>
      </div>
    </div>
  </header>
  <main class="mcont">
    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 left_content">
            <h1>
              ¡Encuéntranos en Chile, Perú, Colombia y México!
            </h1>
            <p>
              ó escríbenos a: <a href="mailto:hola@movigoo.com" class="txt_rojo"><b>hola@movigoo.com</b></a>
            </p>
            <div class="row">
              <div class="col-md-6 col-lg-6 info_ubic">
                <div class="icon">
                  <img src="images/icon_ubicacion.svg" alt="ubicacion" class="img-fluid">
                </div>
                <div class="info">
                  <h4>CHILE:</h4>
                  <p>
                    Antonio Varas Nº 303, oficina 606<br>
                    Providencia, Santiago - Chile.<br>
                    <span class="txt_rojo"><b>Teléfono: (+56) 2 29148485</b></span>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 info_ubic">
                <div class="icon">
                  <img src="images/icon_ubicacion.svg" alt="ubicacion" class="img-fluid">
                </div>
                <div class="info">
                  <h4>PERÚ:</h4>
                  <p>
                    Pasaje Mártir Olaya N° 129, oficina 1704 <br>
                    Miraflores, Lima - Perú. <br>
                    <span class="txt_rojo"><b>Teléfono: (+51) 1 6405032 anexo 2</b></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-6 col-lg-6 info_ubic">
                <div class="icon"></div>
                <div class="info">
                  <h4>COLOMBIA:</h4>
                  <p>PRÓXIMAMENTE…</p>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-6 info_ubic">
                <div class="icon"></div>
                <div class="info">
                  <h4>MÉXICO:</h4>
                  <p>PRÓXIMAMENTE…</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 right_content">
            <h3>
              Déjanos tus datos y te contactaremos en menos de 24 horas!
            </h3>
            <form id="contactForm" novalidate>
              <div class="row">
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="text" class="form-control" placeholder="Nombre y apellido *" id="txt_nombre" name="txt_nombre" required data-validation-required-message="Por favor, Ingrese su <b>Nombre y apellido</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="text" class="form-control" placeholder="Correo empresa *" id="txt_correo_empresa" name="txt_correo_empresa" required data-validation-required-message="Por favor, Ingrese el <b>correo de la empresa</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="text" class="form-control" placeholder="Cargo *" id="txt_cargo" name="txt_cargo" required data-validation-required-message="Por favor, Ingrese el <b>cargo</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="text" class="form-control" placeholder="Empresa *" id="txt_empresa" name="txt_empresa" required data-validation-required-message="Por favor, Ingrese la <b>empresa</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="number" class="form-control" placeholder="Número de contacto *" id="txt_numero" name="txt_numero" required data-validation-required-message="Por favor, Ingrese el <b>número de contacto</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <textarea name="txt_mensaje" id="txt_mensaje" rows="3" class="form-control" placeholder="Cuéntanos en qué te podemo ayudar…" required data-validation-required-message="Por favor, Cuéntanos en <b>qué te podemos ayudar</b>."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 boton">
                  <div id="success"></div>
                  <input type="hidden" name="formulario" id="formulario" value="formContacto">
                  <button type="submit" class="btn btn-danger" id="btnSubmit">ENVIAR!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="row w-100 h-100 align-items-center colm_footer">
      <div class="col-md-6 col-lg-8 d-none d-md-block info">
        Plataforma 100% segura. No publicaremos tus datos ni tampoco haremos un mal uso de ellos.
      </div>
      <div class="col-md-6 col-lg-4 rs">
        <span class=" d-none d-md-inline-block txt">Síguenos!</span>
        <a href="https://www.instagram.com/movigoo/" target="_blank"><img src="images/icon-instagram.svg" alt="Instagram" class="img-fluid"></a>
        <a href="https://twitter.com/Movigoo" target="_blank"><img src="images/icon-tw.svg" alt="Twitter" class="img-fluid"></a>
        <a href="https://www.linkedin.com/company/movigoo/" target="_blank"><img src="images/icon-linkedin.svg" alt="Linkedin" class="img-fluid"></a>
        <a href="https://www.facebook.com/movigoo" target="_blank"><img src="images/icon-fb.svg" alt="Facebook" class="img-fluid"></a>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="js/contact_me.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>