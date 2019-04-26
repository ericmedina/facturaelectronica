@extends('layouts.home.main')
@section('contenido')
  <div class="container">
    <section class="servicios row mt-5">
      <div class="col-12 d-block d-sm-none d-lg-none">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/sistemas_medida.svg')}}" alt="" >
          </div>
      </div>
      <div class="col-lg-6 col-12 texto-servicio derecha mt-5 pt-5">
        <h2 class="slogan-servicio">Sistemas a medida</h2>
        <p class="resumen-servicio mt-2">
            Los sistemas a medida han dejado de ser un lujo o privilegio en todo el mundo, su implementación se ha convertido en una estructura fundamental en el ámbito empresarial. En un mundo tan innovador, las empresas deben ser lo más optimizadas posible, rápidas y eﬁcientes en todos sus procesos. El avance de la tecnología conllevo en brindar la solución a aquellos problemas de organización a través de sistemas innovadores y adaptables a las necesidades de cada empresa
        </p>
      </div>
      <div class="col-6 d-none d-lg-block">
          <div class="img-servicios">
           <img class="svg-sistemas" id="" src="{{asset('images/home/sistemas_medida.svg')}}" alt="" >
          </div>
      </div>
    </section>
    <style type="text/css">
      .color_titulo{
        color: #888;
      }
      .letras_circulo{
          font-weight: 600;
          color: #444;
          font-size: 1.5rem;
      }
      #circulo {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 3px solid var(--celeste);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: absolute;
        background-color: #f0f0f0;
      }
      .titulo-pasos{
        color: var(--celeste);
        font-size: 1.2rem;
        font-weight: 700;
      }
      .descripcion-pasos{
        color:#444;
        font-size: 1rem;
        font-weight: 700;
      }
      @media (min-width: 576px) {
        .letras_circulo{              
          font-size: 1.8rem;
        }
        #circulo {
          width: 53px;
        }
        .sistemas_contactanos{
          font-size: 1.5rem;
          font-weight: 700;
          color: var(--celeste);
        }
      }
      @media (min-width: 768px) {
        .letras_circulo{
          font-size: 2.3rem;
        }
        #circulo {
          width: 63px;
        }
      }
      @media (min-width: 992px) {
        .linea{
          height: 100%;
          position: relative;
          padding-top: 20px;
          box-sizing: border-box;
          margin-bottom: 20px;
        }
        .linea::before{
          content: "";
          position: absolute;
          width: 5px;
          height: 100%;
          background-color: var(--celeste);
          left: 50%;
          margin-left: -2.5px;
        }
        .pasos-sistemas{
          height: 100px;
          width: 50%;
          position: relative;
          padding: 20px;
        }
        .paso-derecha{
          margin-left: 2.5px;
          left: 50%;
        }
        .paso-izquierda{
          left: 0;
        }
        .letras_circulo{
          font-size: 3rem;
        }
        .width_40{
          width: 40%;
          margin-left: 0px !important;
          margin-right: 0px !important;
        }
        #circulo{
          width: 80px;
          height: 80px;
        }
        .circulo-izquierda{
          left: -42.5px
        }
        .circulo-derecha{
          right: -42.5px;
        }
        .texto-derecha{
          padding-left: 40px;
        }
        .texto-izquierda{
          padding-right: 40px;
        }
      }
      @media (min-width: 1200px) and (max-width: 3000px) {
        #circulo {
          width: 80px;
          height: 80px;         
        }
      }
    </style>
    <section class="mt-5">
      <div class="datos-servicio">
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-chico fondo-celeste">
            <p class="titulo_recuadro">Control efectivo</p>
            <p class="desarrollo_recuadro">de las actividades de empresa.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-chico fondo-celeste">
            <p class="titulo_recuadro">Disminuye</p>
            <p class="desarrollo_recuadro">errores, tiempo y consumo de recursos.</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-chico fondo-celeste">
            <p class="titulo_recuadro">Integración</p>
            <p class="desarrollo_recuadro">de nuevas herramientas de vanguardia.</p>
          </div>
        </div>
      </div>
      <div class="datos-servicio mt-3">
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Disponibilidad</p>
            <p class="desarrollo_recuadro">de información de calidad para los usuarios en tiempo real</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Incrementa</p>
            <p class="desarrollo_recuadro">la efectividad de los procesos de tu empresa</p>
          </div>
        </div>
        <div class="cuadro-servicio columnas-3">
          <div class="cuadro-grande fondo-celeste">
            <p class="titulo_recuadro">Control efectivo</p>
            <p class="desarrollo_recuadro">de las actividades de empresa.</p>
          </div>
        </div>
      </div>
    </section>
    <section style="" class="container">
      <div class="text-center">
        <h2 class="color-titulo">PROCESO DE DESARROLLO</h2>
      </div>
      <div class="linea">
        <div class="pasos-sistemas paso-derecha">
          <div id="circulo" class="circulo-izquierda">
            <span class="letras_circulo">1</span>
          </div> 
          <div class="texto-derecha">
              <p class="titulo-pasos mb-0">Análisis de problemas:</p>
              <p class="descripcion-pasos">Indagamos sobre posibles falencias en los procesos para brindar una solució</p>
          </div>
        </div>
        <div class="pasos-sistemas paso-izquierda">
          <div id="circulo" class="circulo-derecha">
            <span class="letras_circulo">2</span>
          </div> 
          <div class="texto-izquierda">
              <p class="titulo-pasos mb-0">Propuesta:</p>
              <p class="descripcion-pasos">Diseñamos una propuesta de valor a aquella necesidad de tu empresa.</p>
          </div>
        </div>
        <div class="pasos-sistemas paso-derecha">
          <div id="circulo" class="circulo-izquierda">
            <span class="letras_circulo">3</span>
          </div> 
          <div class="texto-derecha">
              <p class="titulo-pasos mb-0">Desarrollo:</p>
              <p class="descripcion-pasos">Plasmamos en un software a medida todo lo recaudado en los pasos anteriores.</p>
          </div>
        </div>
        <div class="pasos-sistemas paso-izquierda">
          <div id="circulo" class="circulo-derecha">
            <span class="letras_circulo">4</span>
          </div> 
          <div class="texto-izquierda">
              <p class="titulo-pasos mb-0">Testing:</p>
              <p class="descripcion-pasos">Se pone en funcionamiento y se mejora la propuesta dada.</p>
          </div>
        </div>
      </div>
    </section>
      <div class="clearfix"></div>
  </div>
  <hr class="mt-lg-0 mt-0">
  <section class="contacto pb-5" style="">
    <div class="container">
      <h1 class="titulo-servicio">¿TENÉS ALGUNA DUDA O CONSULTA?</h1>
      <h2 class="slogan-servicio">Conectate con nosotros</h2>
      <form action="{{ url('/consulta') }}" method="get" class="form-horizontal" accept-charset="utf-8">
        <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre/Razón social">
        <select class="form-control round" name="categoria">
          <option value="" selected="">Categoría a la que se dedica</option>
        </select>
        <input class="form-control" type="text" name="telefono" value="" placeholder="Teléfono">
        <input class="form-control" type="text" name="email" value="" placeholder="E-mail">
        <textarea rows="5" class="form-control" name="consulta" placeholder="Ingrese su consulta.."></textarea>
        <div class="g-recaptcha" data-sitekey="6LdAe50UAAAAACup8Ycv_VfHOoWlyXVyESMsQmsO"></div>
        <button class="float-right boton celeste" type="submit">Enviar</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </section> 
@endsection