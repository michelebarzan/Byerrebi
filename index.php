<!DOCTYPE html>
<html>
	<head>
		<title>By Errebi</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styleV6.css" />
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Cinzel|Josefin+Slab|Jura|Poiret+One|Yanone+Kaffeesatz" rel="stylesheet">
		<script>
			function resizeLogo()
			{
				//var heightAv=window.screen.availHeight;
				var heightAv=document.getElementById("bgimg-1").offsetHeight;
				var widthAv=window.screen.availWidth;
				var height=heightAv-60;
				document.getElementById('bgimg-2').style.height=height+"px";
				document.getElementById('bgimg-2-container').style.height=height+"px";
				height=height-50;
				var width=(height*656)/2676;
				var width2=width+10;
				var width1=widthAv-width2-20;
				document.getElementById('bgimg-2').style.width=width2+"px";
				document.getElementById('bgimg-2-container').style.width=width2+"px";
				//document.getElementById('bgimg-1').style.width=width1+"px";
				document.getElementById('bgimg-2').style.backgroundSize=width+"px "+height+"px";
				width2=width2+50;
				//document.getElementById('testoImmagine').style.marginLeft=width2+"px";
				
				//-------------------------------------------------------
				
				if (widthAv<=600 || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) 
				{
					document.getElementById('bgimg-mobile').style.display = 'block';
					document.getElementById('logo').style.display = 'block';
					document.getElementById('bgimg-1').style.display = 'none';
					document.getElementById('bgimg-2').style.display = 'none';
					document.getElementById('bgimg-2-container').style.display = 'none';
					document.getElementById('testoImmagine').style.display = 'none';
				} 
				else 
				{
					document.getElementById('bgimg-mobile').style.display = 'none';
					document.getElementById('logo').style.display = 'none';
					document.getElementById('bgimg-1').style.display = 'block';
					document.getElementById('bgimg-2').style.display = 'block';
					document.getElementById('bgimg-2-container').style.display = 'block';
					document.getElementById('testoImmagine').style.display = 'block';
				}
			}
			function topFunction() 
			{
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
			function hideSpinner()
			{
				setTimeout(function()
				{ 
					document.getElementById('containerProgressBar').style.display='none';
					document.body.style.maxHeight='';
					document.body.style.overflow='';
					getPage();
				}, 1000);
			}
			function getPage()
			{
				if(document.getElementById('hiddenPage').value=="about")
					document.getElementById('btnAbout').click();
				if(document.getElementById('hiddenPage').value=="contact")
					document.getElementById('btnContact').click();
			}
			/*function opacityLogo()
			{
				var logo=document.getElementById('opLogo').value;
				if(logo==10)
					val=1;
				else
					val="0."+logo;
				document.getElementById('bgimg-2-container').style.opacity=val;
			}
			function opacityImmagine()
			{
				var logo=document.getElementById('opImg').value;
				if(logo==10)
					val=1;
				else
					val="0."+logo;
				document.getElementById('bgimg-1').style.opacity=val;
			}*/
			function accettaCookie()
			{
				//console.log("ok1");
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() 
				{
					//console.log("ok2");
					if (this.readyState == 4 && this.status == 200) 
					{
						//console.log("ok3");
						//console.log("response: "+this.responseText);
						if(this.responseText=="ok")
							document.getElementById('cookie-privacy').style.display="none";
					}
				};
				xmlhttp.open("POST", "accettaCookie.php?", true);
				xmlhttp.send();
				//console.log("ok4");
			}
			function sendMail()
			{
				var nome=document.getElementById('inputNome').value;
				var oggetto=document.getElementById('inputOggetto').value;
				var email=document.getElementById('inputEmail').value;
				var messaggio=document.getElementById('inputMessaggio').value;
				
				/*console.log(nome);
				console.log(oggetto);
				console.log(email);
				console.log(messaggio);*/
				
				/*if(nome==null || nome=='')
					document.getElementById('inputNome').style.borderColor="red";
				if(oggetto==null || oggetto=='')
					document.getElementById('inputOggetto').style.borderColor="red";
				if(email==null || email=='')
					document.getElementById('inputEmail').style.borderColor="red";
				if(messaggio==null || messaggio=='')
					document.getElementById('inputMessaggio').style.borderColor="red";*/
				
				if(nome=='' || oggetto=='' || email=='' || messaggio=='')
				{
					window.alert("Tutti i campi sono obbligatori");
					document.getElementById('failIcon').style.display="inline-block";
					setTimeout(function(){ document.getElementById('failIcon').style.display="none"; }, 3000);
				}
				else
				{
					/*document.getElementById('inputNome').style.borderColor="";
					document.getElementById('inputOggetto').style.borderColor="";
					document.getElementById('inputEmail').style.borderColor="";
					document.getElementById('inputMessaggio').style.borderColor="";*/
					
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) 
						{
							if(this.responseText=="ok")
							{
								document.getElementById('inputNome').value="";
								document.getElementById('inputOggetto').value="";
								document.getElementById('inputEmail').value="";
								document.getElementById('inputMessaggio').value="";
								document.getElementById('successIcon').style.display="inline-block";
								setTimeout(function(){ document.getElementById('successIcon').style.display="none"; }, 3000);
							}
							else
							{
								document.getElementById('inputNome').value="";
								document.getElementById('inputOggetto').value="";
								document.getElementById('inputEmail').value="";
								document.getElementById('inputMessaggio').value="";
								document.getElementById('failIcon').style.display="inline-block";
								setTimeout(function(){ document.getElementById('failIcon').style.display="none"; }, 3000);
							}
						}
					};
					xmlhttp.open("POST", "sendMail.php?nome="+nome+"&oggetto="+oggetto+"&email="+email+"&messaggio="+messaggio, true);
					xmlhttp.send();
				}
			}
		</script>
		<style>
			#tunerOpacity
			{
				z-index:99;
				position:absolute;
				height:auto;
				width:auto;
				padding:20px;
				background:white;
				left:500px;
				top:200px;
				border:2px solid black;
			}
		</style>
	</head>
	<body onload="setInterval(function(){ resizeLogo(); }, 1000);hideSpinner();getPage()">
	<?php
	if(isset($_COOKIE['avviso']) && $_COOKIE['avviso']=="si")
	{
		?>
		<div id="cookie-privacy" style="display:none">
			Per garantire all' utente un miglior servizio, questo sito, o gli strumenti terzi da questo utilizzati, si avvalgono di cookies. Continuando accetti la nostra <a href="policy.html" class="cookie-link" >cookie policy</a><input type="button" class="cookie-button" value="Accetto" onclick="accettaCookie()" />
		</div>
		<?php
	}
	else
	{
		?>
		<div id="cookie-privacy">
			Per garantire all' utente un miglior servizio, questo sito, o gli strumenti terzi da questo utilizzati, si avvalgono di cookies. Continuando accetti la nostra <a href="policy.html" class="cookie-link" >cookie policy</a><input type="button" class="cookie-button" value="Accetto" onclick="accettaCookie()" />
		</div>
		<?php
	}
	?>
	<!--<div id="tunerOpacity">
		Logo
		<input type="number" id="opLogo" value="5" min="1" max="10" onchange="opacityLogo()" /><br><br>
		Immagine
		<input type="number" id="opImg" value="5" min="1" max="10" onchange="opacityImmagine()" /><br>
	</div>-->
	
	<?php
		if(isset($_POST['hiddenPage']))
			$page=$_POST['hiddenPage'];
		else
			$page="";
		echo '<input type="hidden" value="'.$page.'" name="hiddenPage" id="hiddenPage" />';
	?>
		<script>
			document.body.style.maxHeight='100%';
			document.body.style.overflow='hidden';
		</script>
		<div id="containerProgressBar">
			<div id="middle">
				<div id="fasciaProgressBar">
					<div class="sk-cube-grid">
						<div class="sk-cube sk-cube1"></div>
						<div class="sk-cube sk-cube2"></div>
						<div class="sk-cube sk-cube3"></div>
						<div class="sk-cube sk-cube4"></div>
						<div class="sk-cube sk-cube5"></div>
						<div class="sk-cube sk-cube6"></div>
						<div class="sk-cube sk-cube7"></div>
						<div class="sk-cube sk-cube8"></div>
						<div class="sk-cube sk-cube9"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Navbar (sit on top) -->
		<div class="w3-top" style="z-index:5;">
		  <div class="w3-bar w3-white w3-card" id="myNavbar">
			<a href="#" onclick="topFunction()" class="w3-bar-item w3-button w3-wide" style="padding:0px"><div id="logo"></div></a>
			<!-- Right-sided navbar links -->
			<div class="w3-right w3-hide-small">
			  <a href="#" onclick="topFunction()" class="w3-bar-item w3-button">Homepage</a>
			  <a href="#about" class="w3-bar-item w3-button"> Chi siamo</a>
			  <a href="servizi.html" class="w3-bar-item w3-button"> Servizi</a>
			  <a href="news.html" class="w3-bar-item w3-button"> News</a>
			  <a href="#contact" class="w3-bar-item w3-button"> Contatti</a>
			</div>
			<!-- Hide right-floated links on small screens and replace them with a menu icon -->

			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
			  <i class="fa fa-bars"></i>
			</a>
		  </div>
		</div>

		<!-- Sidebar on small screens when clicking the menu icon -->
		<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none;z-index:5;" id="mySidebar">
			<a class="button w3-bar-item" href="javascript:void(0)" onclick="w3_close()" role="button">
				<span>Chiudi</span>
				<div class="icon">
					<i class="fa fa-remove"></i>
				</div>
			</a>
		  <!--<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>-->
		  <a href="#" onclick="w3_close();topFunction()" class="w3-bar-item w3-button">Homepage</a>
		  <a href="#about" id="btnAbout" onclick="w3_close()" class="w3-bar-item w3-button">Chi siamo</a>
		  <a href="servizi.html" onclick="w3_close()" class="w3-bar-item w3-button">Servizi</a>
		  <a href="news.html" onclick="w3_close()" class="w3-bar-item w3-button">News</a>
		  <a href="#contact" id="btnContact" onclick="w3_close()" class="w3-bar-item w3-button">Contatti</a>
		</nav>

		<!-- Header with full-height image -->
		<header id="bgimg-2" class="w3-display-container w3-grayscale-min" ></header>
		<header id="bgimg-2-container" ></header>
		
		<!--<span id="testoImmagine" >Non esistono problemi,<br>solo soluzioni</span>-->
		<!--mobile
		<span class="w3-xxlarge w3-hide-large w3-hide-medium" ><b style="">Non esistono problemi,<br>solo soluzioni</b></span>-->
		
		<header id="bgimg-1" class="w3-display-container w3-grayscale-min"></header>
		
		<header id="bgimg-mobile" class="w3-display-container w3-grayscale-min" >
		  <div class="w3-display-left w3-text-white" style="padding:48px">
			<span class="w3-xxlarge w3-hide-large w3-hide-medium" ><b style="text-shadow: black 0px 0px 10px;font-weight:normal;color:white;font-family: 'Poiret One', cursive;font-weight:bold">Non esistono problemi, <br>solo soluzioni</b></span>
		  </div> 
		</header>
		
		<div id="about" style="height:70px;width:100%;"></div>
		<div id="testoImmagine" ><b style="color:gray">"Non esistono problemi,</b> solo soluzioni"</div>
		<div style="height:70px;width:100%"></div>
		
		<!-- about Section -->
		<div class="w3-container" style="padding-bottom:50px;" >
		  <h3 class="w3-center" >Chi siamo</h3>
		  <p class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;">La “by errebi solutions” è nata nel 2001 come impresa di manutenzioni generali meccaniche, elettriche e manutenzioni di macchine utensili. Grazie a questa attività, alla passione dei dipendenti ed ai rapporti di collaborazione da sempre instaurati con i propri clienti, la “by errebi” è cresciuta ed ha maturato un’esperienza che le ha consentito di ampliare i suoi rami d’attività. Ad oggi l’azienda conta 14 addetti interni e diversi collaboratori esterni… ha inoltre sviluppato vari rapporti di collaborazione con varie aziende in regione al fine di poter raggiungere il suo scopo primario che è la continua innovazione e la totale apertura alle esigenze del cliente.</p>
		  <p class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;">I Tecnici dell’azienda sono in grado di elaborare, con sistemi 2D e 3D, studi sia per la realizzazione di un concept di macchina che per per l’industrializzazione di un prodotto e, grazie a software dedicati viene realizzata internamente tutta quella che viene definita “progettazione elettrica” (dagli schemi alla programmazione PLC).</p>
		  <p class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;">La “by errebi” ha scelto la zona industriale di Vivaro (PN) come sede operativa; qui, in un capannone di proprietà, organizza le sue attività in un’area coperta di circa 1400 mq. Questa superficie comprende :</p>
			<ul class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;">
			  <li>Zona uffici</li>
			  <li>Area tecnica atta a supportare i clienti nelle fasi pre-commessa e nell’assistenza post-commessa</li>
			<!--</ul>
		  <div class="w3-row-padding w3-center" style="margin-top:30px;margin-bottom:60px">
			<div class="w3-quarter">
			  <p class="w3-large">Zona uffici</p>
			  <img class="w3-image w3-margin-bottom w3-jumbo" src="images/uffici.jpg" alt="Zona uffici" >
			</div>
			<div class="w3-quarter">
			  <p class="w3-large">Area tecnica</p>
			  <img class="w3-image w3-margin-bottom w3-jumbo" src="images/tecnica1.jpg" alt="Area tecnica" >
			</div>
			<div class="w3-quarter">
			  <p class="w3-large">Area tecnica</p>
			  <img class="w3-image w3-margin-bottom w3-jumbo" src="images/tecnica2.jpg" alt="Area tecnica" >
			</div>
			<div class="w3-quarter">
			  <p class="w3-large">Area tecnica</p>
			  <img class="w3-image w3-margin-bottom w3-jumbo" src="images/tecnica3.jpg" alt="Area tecnica" >
			</div>
		  </div>
			<a class="buttonReadMore w3-center" onclick="document.getElementById('containerReadMore').style.display='block';" role="button">
				<span>Leggi di più</span>
				<div class="iconReadMore">
					<i class="fa btnPlus"></i>
				</div>
			</a>
			<div id="containerReadMore" style="display:none">
				<ul class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;margin-top:60px;">-->
					<li>Area adibita alle lavorazioni di precisione con attrezzature manuali e a controllo numerico (frese, torni, stozzatrici, rettifiche, etc.)</li>
				<!--</ul>
				<div class="w3-row-padding w3-center" style="margin-top:60px;transition:all .2s;">
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/precisione1.jpg" alt="Precisione" >
					</div>
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/precisione2.jpg" alt="Precisione" >
					</div>
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/precisione3.jpg" alt="Precisione" >
					</div>
				</div>
				<ul class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;margin-top:60px;">-->
					<li>Reparto “carpenterie”, attrezzato con scantonatrici, cesoia, pressopiega, saldatrici (Acciaio al carbonio, acciaio inox, alluminio), etc…</li>
				<!--</ul>
				<div class="w3-row-padding w3-center" style="margin-top:60px;transition:all .2s">
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/carpenterie1.jpg" alt="Carpenterie" >
					</div>
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/carpenterie2.jpg" alt="Carpenterie" >
					</div>
				</div>
				<ul class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;margin-top:60px;">-->
					<li>Reparto “revisione macchine e collaudi”, attrezzato con paranchi e diversi strumenti di controllo e misura</li>
				<!--</ul>
				<div class="w3-row-padding w3-center" style="margin-top:60px;transition:all .2s">
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/revisione1.jpg" alt="Revisione" >
					</div>
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/revisione2.jpg" alt="Revisione" >
					</div>
				</div>
				<ul class="w3-large w3-left-align" style="width:80%;max-width:80%;margin-left:10%;margin-top:60px;">-->
					<li>Magazzino di circa 200mq, dove vengono stoccati materiali meccanici ed elettrici codificati con codici a barre per far fronte ad interventi d’urgenza</li>
				</ul>
				<!--<div class="w3-row-padding w3-center" style="margin-top:60px;transition:all .2s">
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/magazzino1.jpg" alt="Magazzino" >
					</div>
					<div class="w3-quarter">
					<img class="w3-image w3-margin-bottom w3-jumbo" src="images/magazzino2.jpg" alt="Magazzino" >
					</div>
				</div>-->
		</div>
<div style="width:80%;margin-left:10%;margin-right:10%;text-align:center;margin-bottom:50px">
<img class="w3-image w3-margin-bottom w3-jumbo" src="images/sede.jpg" alt="Sede" >
</div>
		<!--</div>		-->

		<!-- Contact Section -->
		<div class="w3-container w3-light-grey" id="contact">
		  <h3 class="w3-center"><a href="#contact" id="linkContattaci">CONTATTACI</a></h3>
		  <p class="w3-center w3-large">I nostri contatti e la nostra sede</p>
		  <div class="w3-row-padding" style="margin-top:64px">
			<div class="w3-center" style="text-align:justify">
			  <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Via San Marco 31 <b>&nbsp|&nbsp</b> Vivaro (PN)</p>
			  <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Telefono : 042797322</p>
			  <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email : info@byerrebi.com</p>
			  <br>
			  <!--<fieldset style="border:none">
				<p><input class="w3-input w3-border" type="text" placeholder="Nome" name="nome" id="inputNome"></p>
				<p><input class="w3-input w3-border" type="text" placeholder="Email" name="email" id="inputEmail"></p>
				<p><input class="w3-input w3-border" type="text" placeholder="Oggetto" name="oggetto" id="inputOggetto"></p>
				<p><input class="w3-input w3-border" type="text" placeholder="Messaggio" name="messaggio" id="inputMessaggio"></p>
				<p>
				  <button class="w3-button w3-black" onclick="sendMail()">
					<i class="fa fa-paper-plane"></i> INVIA MESSAGGIO
				  </button>
				  <i id="successIcon" style="padding-left:10px;padding-right:10px;display:none;" class="fa fa-check"></i>
				  <i id="failIcon" style="padding-left:10px;padding-right:10px;display:none;" class="fa fa-times"></i>
				</p>
			  </fieldset>-->
			</div>
			<div class="w3-center" style="">
			  
			  <!-- Add Google Maps <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;">
			  <iframe width="100%" height="100%" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=via%20san%20marco%2031%20vivaro&key=AIzaSyC8V96sGgzrasorg2xPOlrlp-cpQFPLSxM" allowfullscreen></iframe></div>-->
			  <iframe width="90%" height="510px" frameborder="0" id="mappaGoogleMaps" src="https://www.google.com/maps/embed/v1/place?q=byerrebi&key=AIzaSyC8V96sGgzrasorg2xPOlrlp-cpQFPLSxM" allowfullscreen></iframe>
			</div>
		  </div>
		</div>
		<!-- Team Section -->
		<div class="w3-container" style="padding:128px 16px" id="team">
		  <h3 class="w3-center">CONTATTI DIRETTI</h3>
		  <p class="w3-center w3-large">I contatti di riferimento della By Errebi</p>
		  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l3 m6 w3-margin-bottom">
			  <div class="w3-card">
				<!--<img src="/w3images/team2.jpg" alt="John" style="width:100%">-->
				<div class="w3-container">
				  <h3>Direzione</h3>
				  <p class="w3-opacity" ><a href="mailto:info@byerrebi.com" class="linkMail" id="mailDirezione1" target="_top">info@byerrebi.com</a></p>
				  <p class="w3-opacity" style="color:white">empty</p>
				  <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope" onclick="contatta('info@byerrebi.com')"></i> Contatta</button></p>-->
				</div>
			  </div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
			  <div class="w3-card">
				<!--<img src="/w3images/team2.jpg" alt="John" style="width:100%">-->
				<div class="w3-container">
				  <h3>Amministrazione</h3>
				  <p class="w3-opacity"><a href="mailto:amministrazione@byerrebi.com?" class="linkMail" id="mailAmministrazione1" target="_top">amministrazione@byerrebi.com</a></p>
				  <p class="w3-opacity"><a href="mailto:amministrazione02@byerrebi.com?" class="linkMail" target="_top">amministrazione02@byerrebi.com</a></p>
				  <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope" onclick="document.getElementById('mailAmministrazione1').click();"></i> Contatta</button></p>-->
				</div>
			  </div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
			  <div class="w3-card">
				<!--<img src="/w3images/team2.jpg" alt="John" style="width:100%">-->
				<div class="w3-container">
				  <h3>Ufficio tecnico</h3>
				  <p class="w3-opacity" ><a href="mailto:tecnico@byerrebi.com?" class="linkMail" id="mailUfficioTecnico1" target="_top">tecnico@byerrebi.com</a><a href="tel:0427976968" class="linkTel" target="_top">0427 976968</a></p>
				  <p class="w3-opacity" ><a href="mailto:cad@byerrebi.com?" class="linkMail" target="_top">cad@byerrebi.com</a><a style="float:right" href="tel:0427976969" class="linkTel" target="_top">0427 976969</a></p>
				  <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope" onclick="document.getElementById('mailUfficioTecnico1').click();"></i> Contatta</button></p>-->
				</div>
			  </div>
			</div>
			<div class="w3-col l3 m6 w3-margin-bottom">
			  <div class="w3-card">
				<!--<img src="/w3images/team2.jpg" alt="John" style="width:100%">-->
				<div class="w3-container">
				  <h3>Divisione el.</h3>
				  <p class="w3-opacity"><a href="mailto:assistenza@byerrebi.com?" class="linkMail" id="mailDivisioneEl1" target="_top">assistenza@byerrebi.com</a></p>
				  <p class="w3-opacity" style="color:white">empty</p>
				  <!--<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope" onclick="document.getElementById('mailAmministrazione1').click();"></i> Contatta</button></p>-->
				</div>
			  </div>
			</div>
		  </div>
		</div>

		<!-- Footer -->
		<footer class="w3-center w3-black w3-padding-64">
		  <a href="#" onclick="topFunction()" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Top</a>
		  <br><br><a style="color:white;font-family:'Montserrat',sans-serif;" href="policy.html" title="Privacy policy" class="w3-hover-text-red">Privacy policy</a></p>
		 <div class="w3-medium w3-section" style="color:gray;font-family:'Montserrat',sans-serif;padding-top:5px;">
			By Errebi di Borghese Renato<b style="color:white;padding-left:10px;padding-right:10px;">|</b>Via San Marco 31<b style="color:white;padding-left:10px;padding-right:10px;">|</b>33099 Vivaro (PN)</p>
			<!-- <i class="fa fa-facebook-official w3-hover-opacity"></i>
			<i class="fa fa-instagram w3-hover-opacity"></i>
			<i class="fa fa-snapchat w3-hover-opacity"></i>
			<i class="fa fa-pinterest-p w3-hover-opacity"></i>
			<i class="fa fa-twitter w3-hover-opacity"></i>
			<i class="fa fa-linkedin w3-hover-opacity"></i>-->
		  </div>
		  <p style="color:gray;font-family:'Montserrat',sans-serif;">Powered by <a style="color:white;font-family:'Montserrat',sans-serif;" href="https://www.servizioglobale.it" title="Servizio Globale" target="_blank" class="w3-hover-text-blue">Servizio globale</a></p>
		</footer>
		 
		<!-- Add Google Maps -->
		<script>
		// Modal Image Gallery
		function onClick(element) 
		{
		  document.getElementById("img01").src = element.src;
		  document.getElementById("modal01").style.display = "block";
		  var captionText = document.getElementById("caption");
		  captionText.innerHTML = element.alt;
		}

		var mySidebar = document.getElementById("mySidebar");
		// Toggle between showing and hiding the sidebar when clicking the menu icon
		function w3_open() 
		{
			if (mySidebar.style.display === 'block') 
			{
				mySidebar.style.display = 'none';
			} 
			else 
			{
				mySidebar.style.display = 'block';
			}
		}

		// Close the sidebar with the close button
		function w3_close() {
			mySidebar.style.display = "none";
		}
		</script>
		<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->

		<!--
		To use this code on your website, get a free API key from Google.
		Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
		-->

	</body>
</html>
