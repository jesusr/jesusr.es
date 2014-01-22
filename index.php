<!DOCTYPE html>
<html lang="es">
<head>
	<title>Jes&uacute;s R Peinado - Dise&ntilde;ador y desarrollador web</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="sitemap" 	type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="icon" 		type="image/ico" href="images/icon/favicon.ico" />
	<link rel="stylesheet" 	type="text/css" href="css/style.css" media="screen"/>
	<link rel="stylesheet" 	type="text/css" href="http://fonts.googleapis.com/css?family=Offside">
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/1140.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll/jquery.smooth-scroll.js"></script>
	<!--<script type="text/javascript" src="js/form-validate.js"></script>-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	      $('ul#mprincipal li a').smoothScroll();
	      $('a[href=#header]').smoothScroll();
        });
  	</script>
	<script type="text/javascript">
  	$(document).ready(function(){
	$('.boton_envio').click(function() {
		
		var nombre = $('.nombre').val();
			email = $('.email').val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			mensaje = $('.mensaje').val();
		
		if (nombre == "") {
		    $('.nombre').focus();
		    return false;
		}else if(email == "" || !validacion_email.test(email)){
		    $('.email').focus();	
		    return false;
		}else if(mensaje == ""){
		    $('.mensaje').focus();
		    return false;
		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'nombre='+ nombre + 
						'&email=' + email + 
						'&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST",
	    		url: "ajaxSubmit.php",
	    		data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Enviado').addClass('msg_ok');	
	    		},
				error: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Error').addClass('msg_error');					
				}
	   		});
	 		return false;	
		}
	});
});</script>
</head>
<body class="container">
	<div id="header" class="row">
		<div class="row">
			<div class="onecol"></div>
			<div class="tencol">
				<header class="row">
					<hgroup id="hlogo" class="fivecol">
						<h1 id="logo" class="fourcol"><a href="http://www.jesusr.es">Jes&uacute;sR</a></h1>
						<h2 class=""><a href="http://www.jesusr.es">Jes&uacute;s R Peinado<br/><span>Web Designer</span></a></h2>
					</hgroup>
					<div class="onecol"></div>
					<div id="hmenu" class="sixcol last">
						<nav id="principal" class="">
							<ul id="mprincipal">
								<li class=""><a href="#portfolio">01.<span>Portfolio</span></a></li>
								<li class=""><a href="#cv">02.<span>CV</span></a></li>
								<li class=""><a href="#contact">03.<span>Contacto</span></a></li>			
								<li class=""><a href="./yo/">04.<span>Personal</span></a></li>
							</ul>
						</nav>
					</div> 
				</header>
			</div>
			<div class="onecol last"></div>
		</div>
	</div>
	<div id="main">
		<section id="portfolio" class="portfolio row">
			<div id="der" class="sixcol">		
				<h1>Portfolio · </h1>
				<aside id="minibio" class="bio">
					<p lang="es" class="vcard">Soy <span class="name fn">Jesús R Peinado</span>, <span class="key">diseñador</span> y <span class="key">desarrollador web</span>, especialista en diseño adaptable, creación de identidad corporativa, accesibilidad y usabilidad. Amante del minimalismo.</p>
				</aside>
				<article>
					<a href="http://www.dsong.es" target="_blank" title="dSong.es una canción para cada día">
						<img src="images/portfolio/card-frontal-web.jpg" alt="dSong, proyecto en funcionamiento desde 2008" style="opacity: 1;" lang="es">
					</a>
					<p style="bottom: -85px;">
						<a href="http://www.dsong.es" target="_blank" title="dSong.es una canción para cada día">
							<span>dSong</span>
						</a>
					</p>
				</article>
				<article class="square">
					<a href="http://dv.ujaen.es" target="_blank" title="Docencia Virtual, Universidad de Jaén">
						<img src="images/portfolio/ujados.png" alt="Universidad de Jaén, Docencia Virtual" lang="es">
					</a>
					<p>
						<a href="http://dv.ujaen.es" target="_blank" title="Docencia Virtual, Universidad de Jaén">
							<span>UJaén - Docencia Virtual</span>
						</a>
					</p>
				</article>
				<article class="square-alt">
					<a href="http://www.ujaen.es"  target="_blank" title="Universidad de Jaén">
						<img src="images/portfolio/ujauno.png" alt="Universidad de Jaén, rediseño del sistema web" lang="es">
					</a>
					<p>
						<a href="http://www.ujaen.es"  target="_blank" title="Universidad de Jaén">
							<span>UJaén - Rediseño</span>
						</a>
					</p>
				</article>
				<article>
					<a href="http://www.psicoednos.com"  target="_blank" title="Psicoednos, psicólogos en Jaén">
						<img src="images/portfolio/logo-psicoednospsd.jpg" alt="Psicoednos, diseño web e identidad corporativa" lang="es">
					</a>
					<p style="bottom: -85px;">
						<a href="http://www.psicoednos.com"  target="_blank" title="Psicoednos, psicólogos en Jaén">
							<span>Psicoednos - Identidad</span>
						</a>
					</p>
				</article>
			</div>
			<div id="izq" class="sixcol last">
				<article class="square">
					<a href="#" title="CulturAll">
						<img src="images/portfolio/culturall-logo-web.jpg" alt="Culturall, idea y proyecto de diseño" lang="es">
					</a>
					<p>
						<a href="#" title="CulturAll"><span>Cultur/all - Idea</span></a>
					</p>
				</article>
				<article class="square-alt">
					<a href="#" title="IntegraPsicologos">
						<img src="images/portfolio/integra2.jpg" alt="Integra Psicólogos, diseño de identidad corporativa" lang="es">
					</a>
					<p>
						<a href="#" title="IntegraPsicologos"><span>Integra Psicólogos - Identidad</span></a>
					</p>
				</article>
				<article>
					<a href="#" class="lacuerva" title="LaCuerva">
						<img src="images/portfolio/lacuerva.jpg" alt="LaCueva, diseño y desarrollo en proceso" lang="es">
					</a>
					<p>
						<a href="#" title="LaCuerva"><span>Revista La Cuerva - En proceso</span></a>
					</p>
				</article>
				<article>
					<a href="http://www.enelnombredetux.com" title="En el nombre de Tux, proyecto web investigación" target="_blank">
						<img src="images/portfolio/eendt.png" alt="En el nombre de Tux, proyecto en funcionamiento desde 2006" lang="es">
					</a>
					<p>
						<a href="http://www.enelnombredetux.com" title="En el nombre de Tux, proyecto web investigación" target="_blank">
							<span>En el Nombre de Tux</span>
						</a>
					</p>
				</article>
			</div>
		</section>
		<p class="scroller row"><a href="#header" class="elevencol last">&uarr;Arriba</a></p>
		<section id="cv" class="hresume cv row">
			<div id="leftcv" class="sixcol">
				<h1>Curriculum Vitae · </h1>
				<p class="note"><strong class="fn">Jesús R Peinado Vergara</strong> nació en 1986, en Jaén (España). Cursó estudios de bachillerato tecnológico e <strong>Ingeniería Técnica en Informática de Gestión en la Universidad de Jaén.</strong> Actualmente vive en Madrid.</p>
				<p class="vcard">jesusrpeinado (at) gmail (dot) com</p>
				<h2>Formación superior</h2>
				<p><em>2012</em>. <strong>Ingeniería Técnica en Informática de Gestión</strong> en <a href="http://www.ujaen.es">Universidad de Jaén.</a></p>
				<p><em>2008</em>. <strong>Cisco Certified Network Associate (Level 3)</strong> en <a href="http://www.esf.es/">Escuela Superior de Formación de Madrid.</a></p>
				<h2 class="skills">Extracto</h2>
				<p class="skill frontend"><strong>Front-end</strong>: Responsive web design (RWD) con estándares W3C, Accesibilidad AAA y 'cross-browser' – HTML5 Y CSS3; preprocesadores de CSS como SASS, Less y Stylus. Desarrollo con Javascript o con CoffeeScript indistintamente, al igual que trabajo con jQuery – mobile y UI, Mootools, D3, Backbone, Iris.js, Angular.js y otros.</p>
				<p class="skill backend"><strong>Back-end</strong>: Desarrollo de aplicaciones web con PHP, Ruby on Rails y Node. Desarrollo de REST API para comunicación y arquitectura de información, junto a MongoDB y Redis. </p>
				<p class="skill test"><strong>TDD/BDD</strong>: Cucumber - RSpec - TestUnit (Rails), Mocha (Node)</p>
				<p class="skill cms">Sistemas de Gestión de Contenidos (CMS): experto en Wordpress y Drupal. Experimentado en Joomla y formatos colaborativos.</p>
				<p class="skill training">Docencia y  training en Tic E Informática.</p>
			</div>
			<div id="rightcv" class="sixcol last work">
				<h2>Profesional</h2>
				<div>
					<div class="experience vevent gowex">
						<h3>
							<span class="summary">Diseñador y Desarrollador web - Frontend Marketing</span> 
							<em></em><br/> en 
							<a href="http://www.gowex.com" class="location">GOWEX</a>
						</h3>
						<p>
							<em class='dtstart'>Octubre 2013</em> – 
							<em class='dtend'>Actualmente</em>
						</p>
					</div>
					<div class="experience vevent abada">
						<h3> 
							<span class="summary">Diseñador de interfaces y Desarrollador web</span> 
							<em></em><br/> en 
							<a href="http://www.abadasoft.com" class="location">Abada Soft</a>
						</h3>
						<p>
							<em class='dtstart'>Junio 2013</em> – 
							<em class='dtend'>Octubre 2013</em>
						</p>
					</div>
					<div class="experience vevent ujaen">
						<h3>
							<span class="summary">Diseñador y desarrollador</span> 
							<em>(beca de colaboración)</em><br/>en 
							<a href="http://victic.ujaen.es" class="location">Vic. Tecnologías de la Información y comunicación, Universidad de Jaén</a>
						</h3>
						<p>
							<em class='dtstart'>Mayo 2010</em> – 
							<em class='dtend'>Junio 2013(3 años y 1 mes)</em>
						</p>
					</div>
					<div class="experience vevent ujaen">
						<h3>
							<span class="summary">Técnico de soporte y desarrollo</span> 
							<em>(beca de prácticas)</em><br/>en 
							<a href="http://victic.ujaen.es" class="location">Servicio de apoyo en TIC (SecTIC), Universidad de Jaén</a>
						</h3>
						<p>
							<em class='dtstart'>Junio 2009</em> - 
							<em class='dtend'>Abril 2010 (9 meses)</em>
						</p>
					</div>
					<div class="experience vevent lacaixa">
						<h3>
							<span class="summary">Docente (informática general para tercera edad)</span> 
							<em>(beca de prácticas, obra y servicio)</em> en 
							<a href="http://obrasocial.lacaixa.es" class="location">Fundación "la Caixa"</a> y 
							<a href="http://www.fidetia.es/">Fidetia</a></h3>
						<p>
							<em class='dtstart'>Abril 2008</em> - 
							<em class='dtend'>Junio 2009 (1 año y 3 meses)</em>
						</p>
					</div>
					<div class="experience vevent eduocio">
						<h3>
							<span class="summary">Diseñador y desarrollador</span> 
							<em>(obra y servicio)</em> en <a href="#cv" class="location">Eduocio SL</a></h3>
						<p>
							<em class='dtstart'>Octubre 2007</em> - 
							<em class='dtend'>Noviembre 2007 (2 meses)</em>
						</p>
					</div>
					<h2>Proyectos personales</h2>
					<h3><a href="http://www.dsong.es" class="web">dSong.es</a></h3>
					<p>Fundador, Diseñador (front-end), Administrador y editor.</p>
					<p><em>Mayo 2009 – Actualidad</em></p>
					<h3><a href="http://enelnombredetux.com" class="web">EnElNombreDeTux.com</a></h3>
					<p>Fundador, Diseñador, editor</p>
					<p><em>Febrero 2006 – Actualidad</em></p>
					<aside id="cv-pdf"><p><a href="./other/CV-jesusrpeinado.pdf">PDF</a></p></aside>
				</div>
			</div>
		</section>
		<p class="scroller row"><a href="#header" class="elevencol last">&uarr;Arriba</a></p>
		<section id="contact" class="row">
			<div id="form-div" class="sixcol ">
				<form method="post" class="contacto">
			 	    <fieldset>
						<label for="fnombre">Nombre</label>
						<input placeholder="Nombre" type="text" class="nombre sixcol" name="nombre" id="fnombre" />
						<label for="femail">Email</label>
						<input placeholder="E·mail" type="text" class="email sixcol last" name="email" id="femail" />
						<label for="fmensaje">Mensaje</label>
						<textarea placeholder="¿Dígame?" cols="30" rows="5" class="mensaje" name="mensaje" id="fmensaje"></textarea>
						<img src="ajax.gif" class="ajaxgif hide" alt="Cargando..."/>
						<div class="msg sixcol"></div>
						<button class="boton_envio sixcol last">Enviar Mensaje</button>
			 	    </fieldset>
			 	</form>
			</div>
			<div class="sixcol last">
				<h1>Contacto·</h1>
				<p>Para lo que requiera, puede ponerse en contacto conmigo mediante el formulario de la izquierda, o si lo prefiere, puede encontrarme en <span>jesusrpeinado (at) gmail.com</span> o en las redes sociales cuyos iconos puede encontrar a continuación.</p>
				<p>Si prefiere un método más cercano, como el teléfono, avíseme mediante correo electrónico y se lo facilitaré.</p>
				<a href="http://www.facebook.com/jesusr" class="fb threecol"><img alt="facebook icon" src="images/icon/Facebook.png"/></a>
				<a href="http://www.twitter.com/jesusrpeinado" class="tw threecol"><img alt="twitter icon" src="images/icon/Twitter.png"/></a>
				<a href="skype:jesusrpeinado?call/" class="sk threecol"><img alt="skype icon" src="images/icon/Skype.png"/></a>
				<a href="http://www.linkedin.com/in/jrpeinado" class="li threecol last"><img alt="linkedin icon" src="images/icon/LinkedIn.png"/></a>
			</div>
		</section>
		<p class="scroller row"><a href="#header" class="elevencol last">&uarr;Arriba</a></p>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){									
			$('article').hover(
				function(){
					$(this).find('img').animate({opacity: ".6"}, 300);	
					$(this).find('p').animate({bottom:"0"}, 300);		
				}, 
				function(){
					$(this).find('img').animate({opacity: "1.0"}, 300);	
					$(this).find('p').animate({bottom:"-85px"}, 100);
				}		
			);
		});
	</script>
</body>
</html>	