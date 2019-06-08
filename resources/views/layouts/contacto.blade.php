
<section id="contactUs" class="contact-parlex">
    <div class="parlex-back">
        <div class="container">
            <div class="row">
                <div class="heading  col-md-8 pc-m-auto">
                    <!-- Heading -->
                    <h2 class="titulo-contacto">¿Tenés alguna duda o consulta?</h2>
                    <h4 class="subtitulo-contacto">Conectate con nosotros</h4>
                </div>
            </div>
            <div class="row cell-p-0">  
                  <div class="col-sm-12 col-md-12"> 
                      <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                        <form name="sentMessage" id="contactForm" novalidate class="cell-p-0 col-md-8 pc-m-auto"> 
                            <div class="control-group">
                              <div class="controls">
                                <input type="text" class="form-control" placeholder="Nombre/Razón social" id="name" required data-validation-required-message="Por favor ingresa tu nombre" />
                                <p class="help-block"></p>
                              </div>
                            </div>  
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Por favor ingresa tu email" />
                                </div>
                            </div>  
                            <div class="control-group">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" 
                                    placeholder="Tu consulta" id="message" required
                                    data-validation-required-message="Por favor ingresa tu consulta" minlength="5" 
                                    data-validation-minlength-message="El mínimo debe ser 5 caracteres." 
                                    maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>     
                            <div id="success"> </div> <!-- For success/fail messages -->
                            <button type="submit" class="btn boton-celeste pull-right ">Enviar consulta</button><br />
                        </form>
                    </div>         
            </div>
        </div>
        <!--/.container-->
    </div>
</section>