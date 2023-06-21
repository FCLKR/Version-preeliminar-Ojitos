<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ojitos</title>
    <link rel="stylesheet" href=".\vista\html\Homepage\Import.css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style> body { border: 15px solid transparent;} </style>
</head>

<body style='background-color: #ffffff;', style=background-origin:border-box >
    <div class="container">
        <header style='background-color: #ffffff;'>
            <div class="row">
                <div class="col-7" id="Logo">
                    <img src=".\vista\html\Homepage\Media\Imgs\Header\Logo.png">
                </div>
                    <div class="col-5" id="Login">
                        <h6 class="titulo1">
                            <a href=".\vista\html\Homepage\Login\Login.html" style="text-decoration:none; color: purple" >Login</a>
                        </h6>
                        <h6 class="titulo2">
                        <a href=".\vista\html\Homepage\Register\Sing_Up.php" style="text-decoration:none; color: purple;">|SignUp</a>
                        </h6>
                    </div>
                    
                    <h5 id="Prom">
                        <b>Promotores del bienestar Animal</b>
                    </h5>

            </div>
        </header>
    </div>
    <nav id="main-menu">
       <ul>
        <li>
            <a href="#" font face="display">Inicio</a>
        </li>
        <li></li>
        <li></li>
        <li>
            <a href=".\vista\html\Homepage\NuesServ.html" font face="display">Nuestros servicios</a>
        </li>
        <li></li>
        <li></li>
        <li>
            <a href=".\vista\html\Homepage\Productos.html" font face="display">Productos</a>
        </li>
        <li></li>
        <li></li>
        <li>
            <a href=".\vista\html\Homepage\Adopcion.html" font face="display">Adopcion</a>
        </li>

        </ul>

    </nav>
    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        </style>
        </head>
        <body>
        <br>
        <div class="row">
            <h1 id="aea">¡Revoluciona el cuidado de tu mascota o adopta una!</h1>
                <p id="new">Ojitos tiene todo lo que podrías llegar a necesitar en el cuidado de tu peludito, una vez crees tu usuario podrás acceder a todos los servicios que tenemos para tú mascota.</p>
        </div>

        <div class="slideshow-container">
        
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src=".\vista\html\Homepage\Media\Imgs\Banner\Paseador_3.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src=".\vista\html\Homepage\Media\Imgs\Banner\Food_Public_1.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src=".\vista\html\Homepage\Media\Imgs\Banner\Food_Public_2.jpg" style="width:100%">
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
                                <div class="row">
                
                                    <h2 id="aea"></h2>
                                    <p id="new">Más que una veterinaria o una tienda el servicio de mascotas “Ojitos" brinda un mejor cuidado, a través de un servicio a domicilio para el cuidado de mascotas, paseo de perros, entregas de productos personalizados, asesoramiento veterinario y servicios de adopción. </p>
                                    <p id="aea" align-text="center"></p>
                                  </div>

                          <br>

            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src=".\vista\html\Homepage\Media\Imgs\Header\about.jpg" style="object-fit: cover;">
                            </div>
                        </div>
               <div class="col-lg-7">
                <div class="border-start border-5 border-primary ps-5 mb-5">
                    <h6 class="text-primary text-uppercase"></h6>
                    <h1 class="display-5 text-uppercase mb-0" id="aea">Nos enfocamos en la felicidad de tus mascotas!</h1>
                </div>
                <ul style="font-family: inherit; font-size: 16px; list-style-type: disc;" >
                    <b>
                    <li style="box-sizing: inherit; font-family: inherit; font-size: 16px;">Atención las 24 horas.</li>
                    <li style="box-sizing: inherit; font-family: inherit; font-size: 16px;">Personal altamente capacitado.</li>
                    <li style="box-sizing: inherit; font-family: inherit; font-size: 16px;">Diágnostico exhaustivo de tu mascota y control.</li>
                    <li style="box-sizing: inherit; font-family: inherit; font-size: 16px;">Tienda veterinaria y de productos varios.</li>
                    <li style="box-sizing: inherit; font-family: inherit; font-size: 16px;">Servicios enfocados al cuidado de tu mascota.</li></ul>            
                    </b>
                </div>
        </div>
                </div>
                <br>
        <div>
            <h2  id="aea">¿Quieres un amigo?</h2>
            <h7 id="new"><b>¡Te presentamos los ultimos compañeros de vida que nos han llegado en busca de un hogar calido!  </b><img src=".\vista\html\Homepage\Media\Imgs\Body\DC_Icon.jpg" width="50" height="50" ></h7>
            <br>
        </div>   
        <!--<div class="container_1">

            <ul class="slider">
                <li id="slide1">
                    <img src="Media/Imgs/BAdopcion/Criolla_blanca.JPG">
                </li>
                <li id="slide2">
                    <img src="Media/Imgs/BAdopcion/Criollo_blanco.JPG">
                </li>
                <li id="slide3">
                    <img src="Media/Imgs/BAdopcion/Pcriollonegro.JPG">
                </li>
                <li id="slide4">
                    <img src="Media/Imgs/BAdopcion/Pcriollonegro_2.JPG">
                </li>
            </ul>

            <ul class="menu_1">
                <li>
                    <a href="#slide1">1
                    </a>
                </li>
                <li>
                    <a href="#slide2">2
                    </a>
                </li>
                <li>
                    <a href="#slide3">3
                    </a>
                </li>
                <li>
                    <a href="#slide4">4
                    </a>
                </li>

            </ul>

        </div>-->
        <div class="container_2">
            <div class="row">
                        
                <div class="col-lg-3 text-center">
                    <a style="color:#000000; text-decoration: none;">
                    <div style="background: url('vista/html/Homepage/Media/Imgs/BAdopcion/Dog1.jpg'); width:200px; height: 200px; margin: auto; display: block; background-size: cover;  background-position: center center; border-radius: 100px; "></div>
                    <center><h2>Luker</h2></center>
                    <h7 id=new>2 años - Macho </h7>
                    </a>
                    <br>
                    
                    <a style="color:#58eaf9; font-size:20px; font-weight: bold;display:none;">!Conoce más!</a>
                    </div>
                                    
                
                
                
                <div class="col-lg-3 text-center">
                    <a style="color:#000000; text-decoration: none;">
                    <div style="background: url('vista/html/Homepage/Media/Imgs/BAdopcion/Dog2.jpg'); width:200px; height: 200px; margin: auto; display: block; background-size: cover;  background-position: center center; border-radius: 100px; "></div>
                    <center><h2>Sasha </h2></center>
                    <h7 id=new>8 años - hembra</h7>
                    </a>
                    <br>
                    
                    <a style="color:#58eaf9; font-size:20px; font-weight: bold;display:none;">!Conoce más!</a>
                    </div>
                                    
                
                
                
                <div class="col-lg-3 text-center">
                    <a style="color:#000000; text-decoration: none;">
                    <div style="background: url('vista/html/Homepage/Media/Imgs/BAdopcion/Cat1.jpg'); width:200px; height: 200px; margin: auto; display: block; background-size: cover;  background-position: center center; border-radius: 100px; "></div>
                    <center><h2>Dalila</h2></center>
                    <h7 id=new>3 años - hembra</h7>
                    </a>
                    <br>
                    
                    <a style="color:#58eaf9; font-size:20px; font-weight: bold;display:none;">!Conoce más!</a>
                    </div>
                                    
                
                
                
                <div class="col-lg-3 text-center">
                    <a style="color:#000000; text-decoration: none;">
                    <div style="background: url('vista/html/Homepage/Media/Imgs/BAdopcion/Cat3.jpg'); width:200px; height: 200px; margin: auto; display: block; background-size: cover;  background-position: center center; border-radius: 100px; "></div>
                    <center><h2>Timothy </h2></center>
                    <h7 id=new>4 años - macho </h7>
                    </a>
                    <br>
                    
                    <a style="color:#58eaf9; font-size:20px; font-weight: bold;display:none;">!Conoce más!</a>
                    </div>
                                    
                
                
                
                
            </div>
            
    
    
        </div>


            </div>
            
                <button id="button_1">
                    <form action=".\vista\html\Homepage\Register\Sing_Up.html">
                        <input type="submit" value="Conoce más amigos" />
                    </form>                    
                </button>
        </div>

      
    <footer>
    <div id="footer">
        <div class="container_5">
            <div class="row">
                <div class="col-6">
                    <h6>
                        <b>¿Quienes somos?</b>
                    </h6>
                    <h6>
                        <p>Somos un servicio de mascotas, dedicado a que nuestros queridos compañeros gatos y/o perros tengan la mejor experiencia posible y tenga momentos inolvidables. 
                            <br>
                            <b>___________________________________________________________________</b>
                            <br>
                            <br>Registrate y prueba algunos de nuestros servicios</br></p>
                    </h6>

                </div>
                <div class="col-6">
                    <h6>
                        <b>Tambien puedes ponerte contacto con nosotros</b>
                    </h6>
                    <h6>Cel. 320 416 7449</h6>
                    <h6>Tel. (601) 772 13 95
                        <br>
                        <e-mail>OjitosCC@hotmail.com</e-mail>
                    </h6>
                    <h6>Direccion. Calle 173 #8-50</h6>


                </div>

            </div>


        </div>
    </div>

    </footer>

</body>

</html>