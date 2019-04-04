<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Diplomado en digitalización y nuevos negocios</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Este diplomado te brinda la posibilidad la oportunidad de conocer er e identificar oportunidades para desarrollar negocios y aprender de una forma más inteligente y rápida. Combinando expertos en tecnología y estrategia, que te ayudarán a aprovechar este enorme mercado que requerirá profesionales con las ideas y las capacidades para aprovecharlo.">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="img/ideaufro.png" rel="icon">
  <link href="img/ideaufro.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left" >
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto img-fluid col-lg-7"><img src="img/ideaufro.png" alt="IdeaUfro" title="IdeaUfro"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#speakers">Docentes</a></li>
          <li><a href="#schedule">Agenda</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Diplomado en <br><span>Digitalización</span> y nuevos<span> Negocios</span></h1>
      <p class="mb-4 pb-0">1 Abril - 30 noviembre, Universidad de La Frontera, iDEAUFRO</p>
      <a href="https://www.youtube.com/watch?v=zv-X5ZBnogI" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">Acerca Diplomado</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Acerca del Diplomado</h2>
            <p>En el marco del programa, aprenderás solucionando problemas reales, participando directamente del Torneo Tecnológico: “Transformando la industria global de servicios básicos en la era digital”, </p>
          </div>
          <div class="col-lg-3">
            <h3>¿Donde?</h3>
            <p>Sala iDEAUFRO, Temuco</p>
          </div>
          <div class="col-lg-3">
            <h3>Cuando</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
            <a href="mas-info.html" class="btn btn-danger">Mas información</a>
          </div>
        </div>
      </div>
    </section>


    <!--==========================
      Suscripción con MailChimp
    ============================-->

    <section id="contact1" class="section-bg wow fadeInUp">
     <div class="container">
       <h2 class="text-center">¿Interesado en el diplomado? 😀</h2>
       <h4 class="text-center" style="padding:20px 0px;">Envía tus datos y descarga el brochure aquí 👇</h4>

       <div class="form">
        <form method="post" action="action.php">
          <div class="form-row pt-2">
            <div class="form-group col-md-4">
              <p><input type="text" name="fname" class="form-control" id="subject" placeholder="Nombre" /></p>
            </div>
            <div class="form-group col-md-4">
              <p><input type="text" name="lname" class="form-control"  placeholder="Apellido" /></p>
            </div>
            <div class="form-group col-md-4">
              <p><input type="text" name="email" class="form-control" placeholder="Email"  /></p>
            </div>
            <div class="form-group col-md-12 text-center">
              <p><input type="submit" name="submit" value="Enviar" class="btn btn-danger text-center"/></p>
            </div>
          </div>
        </form>
        </div>
     </div>
    </section>

    <!--==========================
      Carlos
    ============================-->

    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <div class="container">
            <b class="quote-right wow fadeInDown delay-03"><i class="fa fa-quote-right classpa"></i></b>
            <div class="row">
              <div class="col-lg-12">
                <p class="client-part-haead wow fadeInDown delay-05 margincar">"El aprendizaje es más valioso cuando importa, cuando lo no concreto se hace concreto y personal"</p>
              </div>
            </div>
            <ul class="client wow fadeIn delay-05s">
              <li><a href="#">
                    <img src="img/speakers/carlos-isaac.png" alt="" class="img-fluid imgcir">
                      <h3>Carlos Isaacs</h3>
                      <span>Director del Programa</span>
                  </a></li>
            </ul>
          </div>

        </div>
      </div>
    </section>


    <!--==========================
       Services Section
     ============================-->
     <section id="services" class="section-bg">
       <div class="container">

         <header class="section-header">
           <h3>Contenido</h3>
           <p>Innovación Tecnológica</p>
         </header>

         <div class="row">
 <!--sadas-->
           <div class="col-md-6 col-lg-4 wow bounceInUp  " data-wow-duration="1.4s">
             <div class="box">
               <div class="icon" ><i class="fas fa-wifi"></i></div>
               <h4 class="title"><a href="">INTERNET DE LAS COSAS</a></h4>
               <p class="description txtcenter">Sistemas de computación interrelacionados y objetos cotidianos conectados a Internet comunicándose entre sí con plataformas que permiten procesar e interpretar información, esto y mucho más será expuesto por Paulo Colomés.</p>
             </div>
           </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-duration="1.4s">
             <div class="box">
               <div class="icon"><i class="fab fa-python"></i></div>
               <h4 class="title"><a href="">INTELIGENCIA ARTIFICIAL</a></h4>
               <p class="description  txtcenter">Modelamiento estadístico de datos para la toma de decisiones, redes neuronales, deep learning y su utilización en ámbitos comerciales, será lo que Cristobal Pereira nos explicará a través de la implementación práctica de algoritmos de inteligencia artificial.</p>
             </div>
           </div>

           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
             <div class="box">
               <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
               <h4 class="title"><a href="">CLOUD COMPUTING</a></h4>
               <p class="description txtcenter">Damodaran Raman en la tecnología Cloud Computing nos entragará herramientas para la implementación de aplicaciones en la nube, conceptos básicos, sistemas e infraestructura, arquitectura de software cloud y acceso remoto.</p>
             </div>
           </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
             <div class="box">
               <div class="icon" ><i class="fas fa-database"></i></div>
               <h4 class="title"><a href="">BIG DATA</a></h4>
               <p class="description txtcenter">Introducción en los aspectos básicos del Big Data y su programación, infraestructura requerida para su implementación, sistemas de Big Data, análisis de datos para predicciones es lo que Angelo Cares nos enseñará.  </p>
             </div>
           </div>

           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
             <div class="box">
               <div class="icon" ><i class="fas fa-shield-alt"></i></div>
               <h4 class="title"><a href="">CIBER SEGURIDAD</a></h4>
               <p class="description txtcenter">Paulo Colomés nos expondrá cómo enfrentar el nuevo desafío de resguardar la seguridad de los datos, labor que es cada vez más complicada, hacking ético para dar alerta de vulnerabilidades, auditoria de ciberseguridad, aspectos legales, entre otros.</p>
             </div>
           </div>
           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
             <div class="box">
               <div class="icon" ><i class="fab fa-bitcoin"></i></div>
               <h4 class="title"><a href="">BLOCK CHAIN</a></h4>
               <p class="description txtcenter">Conocimientos y herramientas para desarrollar aplicaciones basadas en la tecnología Block Chain, criptomonedas y aplicaciones, criptografía y minería será lo que Christian Bobadilla nos presentará a través de aplicaciones avanzadas e implementaciones en proyectos.</p>
             </div>
           </div>

         </div>

       </div>
     </section><!-- #services -->

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Docentes</h2>
          <p>Nuestros expositores</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/Erkko-Autio-2019.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Erkko Autio</a></h3>
                <p>Profesor de Estrategia Tecnológica</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/ideaufro.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details2.html">Damodarán Ramán</a></h3>
                <p>Profesor de Cloud Computing</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/paulocolomes.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details3.html">Paulo Colomés</a></h3>
                <p>IoT & CiberSeguridad</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/chrisitian-bobadilla.png" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Christian Bobadilla</a></h3>
                <p>Inteligencia Artificial</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/cristobal-pereira.jpg" alt="cristobal-pereira" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details4.html">Cristobal Pereira</a></h3>
                <p>Block Chain</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/Angelo-Cares.jpg" alt="Angelo-Cares" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details5.html">Angelo Cares</a></h3>
                <p>Big data</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/Belen-Conejeros.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Belén Conejeros</a></h3>
                <p>Proyecto de Innovación Tecnológica</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/Gerardo-Lagos.png" alt="Speaker 1" class="img-fluid">
            <div class="details">
              <h3><a href="speaker-details6.html">Gerardo Lagos</a></h3>
              <p>Modelo de Negocios Digitales</p>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker">
          <img src="img/speakers/carlos-isaacs.png" alt="Speaker 1" class="img-fluid">
          <div class="details">
            <h3><a href="speaker-details9.html">Carlos Isaacs</a></h3>
            <p>Estrategia Emprendedora & Desarrollo de Producto</p>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Cronograma</h2>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Inauguración</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">3</a>
          </li> -->
        </ul>

        <h3 class="sub-heading"> A continuación puedes revisar el cronograma para las clases presenciales</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:40</time></div>
              <div class="col-md-10">
                <h4>Acreditación</h4>
                <p>Acreditación y bienvenida</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:10</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Brenden Legros">
                </div>
                <h4>Saludos</h4>
                <p>Saludos autoridades invitadas</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:20</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/Rodrigo-Seguel.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Bloque de trabajo <span>Rodrigo Seguel - IBM</span></h4>
                <p>Primer bloque de trabajo con Rodrigo Seguel IBM</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:50</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/cristobal-pereira.jpg" alt="Cole Emmerich">
                </div>
                <h4>Segundo bloque <span>Cristobal Pereira</span></h4>
                <p>Segundo bloque de trabajo Cristobal Pereira</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:20 </time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/ideaufro.png" alt="Jack Christiansen">
                </div>
                <h4>Diplomado</h4>
                <p>Presentación Diplomado en Digitalización y Nuevos Negocios</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:30</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/carlos-isaac.png" alt="Carlos Isaacs">
                </div>
                <h4>Preguntas</h4>
                <p>Se entregará un tiempo para responder preguntas que puedan surgir durante la charla.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>13:00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Cierre</h4>
                <p>Cierre del acto de inauguración</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/5.jpg" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/6.jpg" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/aguas-araucania.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/ibm.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/ufro.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/corfo.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>





    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2 style="color:white;">Contáctanos</h2>
        </div>

        <div class="row contact-info">

        </div>

        <div class="form">
          <div id="sendmessage">Tu mensaje ha sido enviado. Gracias, te responderemos a la brevedad!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>




  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>El diplomado será realizado en las dependencias de la Universidad de La Frontera, en el departamento de ciencias jurídicas y empresarias en el 4º piso, en la sala de formación de iDEAUFRO</p>
          </div>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacto</h4>
            <p>
              Francisco Salazar 01145 <br>
              Temuco<br>
              Chile <br>
              <strong>Teléfono:</strong> 452 596656 <br>
              <strong>Email:</strong> ideaufro@ufrontera.cl<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/iDEAUFRO/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/ideaufro/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/idea-ufro-a45a3a177/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
