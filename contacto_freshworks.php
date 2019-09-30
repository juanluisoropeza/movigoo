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
        <a href="#" class="btn btn-outline-danger">AGENDA UNA CALL</a>
      </div>
    </div>
  </header>
  <main class="mcont">
    <section id="contacto_freshworks">
      <div class="container">
        <form id="contactForm" novalidate>
          <div class="row">
            <div class="col-lg-8 left_content">
              <img src="images/freshworks-light-bg.png" alt="freshworks" class="img-fluid">
              <h1>
                ¡Solicita tu prueba gratis por 30 días!
              </h1>
              <p>
                Selecciona el software que quieres probar *
              </p>
              <p class="obligatorio">
                (*) Campos obligatrios
              </p>
              <div class="row control-group">
                <div class="col-md-4 col-lg-4 info_check">
                  <div class="form-check form-check-inline">
                    <label class="ctn_check">
                      <img src="images/logo-freshsales-black.png" alt="Movigoo" class="img-fluid">
                      <input type="radio" checked="checked" name="inlineRadioOptions" id="inlineRadio1" value="freshsales" required data-validation-required-message="Por favor, debe seleccionar <b>el software que quieres probar</b>.">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 info_check">
                  <div class="form-check form-check-inline">
                    <label class="ctn_check">
                      <img src="images/freshdesk-light-bg.png" alt="Movigoo" class="img-fluid">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="freshdesk">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="col-md-4 col-lg-4 info_check">
                  <div class="form-check form-check-inline">
                    <label class="ctn_check">
                      <img src="images/freshservice-light2-bg.png" alt="Movigoo" class="img-fluid">
                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="freshservice">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mt-3">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 right_content">
              <h3>
                Déjanos tus datos y te contactaremos en menos de 24 horas!
              </h3>
              <div class="row">
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="text" class="form-control" placeholder="Nombre y apellido *" id="txt_nombre" required data-validation-required-message="Por favor, Ingrese su <b>Nombre y apellido</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group col-xs-12 col-md-6 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="txt_correo_empresa" class="form-control" placeholder="Correo empresa *" id="txt_correo_empresa" required data-validation-required-message="Por favor, Ingrese el <b>correo de la empresa</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="control-group col-xs-12 col-md-12 col-lg-12">
                  <div class="form-group floating-label-form-group controls">
                    <input type="txt_empresa" class="form-control" placeholder="Empresa *" id="txt_empresa" required data-validation-required-message="Por favor, Ingrese la <b>empresa</b>.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 boton">
                  <div id="success"></div>
                  <input type="hidden" name="formulario" id="formulario" value="formContactoFreshworks">
                  <button type="submit" class="btn btn-danger" id="btnSubmit">ENVIAR!</button>
                </div>
              </div>
            </div>
          </div>
        </form>
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