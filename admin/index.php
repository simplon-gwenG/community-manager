<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
        <title> Community Manager Admin </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="http://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/carousel.js"></script>
        <script type="text/javascript" src="../js/form.js"></script>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
</head>

    <body id="index">
        <?php
            include('../connexion.php');
            if (!isset ($_SESSION['admin'])) {
                Header('Location: login.php');
                 exit();
            }

         ?>
		<div id="wrapper">
        	<header>
                <div class="header_container">
                    <div id="logo">
                        <img src="../img/logo.png" style=" margin-left: -30px;width: 160px; height: 150px;" alt="Community management" title="Community Manager "></a>
                     </div> <!-- end logo -->
                     <div id="img_slogan">
                         <img src="../img/groupe.png" style="width:480px;height:245px;margin-top:-30px;float:left;"></a>
                     </div>
                    <div id="slogan">
                        <h2 class="h3">Un véritable <span class="italic">community manager</span><br> à votre disposition</h2>
                        <div class="cro-increase-button cro-scale"><a href="#footer" title="Contact">Contactez moi</a></div>
                    </div><!-- end img_slogan -->
                    <div class="clearer"></div>
                       <nav>
                            <div class="nav_container">
                                <a href="http://localhost/community%20manager/" title="Accueil">Accueil</a>
                                <a href="#section01" title="Philosophie" class="scroll-link">Philosophie</a>
                                <a href="#section02" title="Les offres" class="scroll-link">Les offres</a>
                            </div><!-- end nav_container -->
                       </nav> <!-- end nav -->
                    </div> <!-- end header_container -->
            </header> <!-- end header -->

            <section id="diapo" class="">
    	<div id="sshow" class="sec_container carousel slide">
    		<!-- Wrapper for slides -->
    		<div class="carousel-inner">
    			<div class="item active">
    				<img src="../img/images.png" style="max-height:350px">
    				<div class="carousel-caption">
    					<p>Passez le relais</p><br>
    					<p> à un communiquant</p><br>
    					<p>entièrement dédié</p>
    				</div>
    			</div>
    			<div class="item">
    				<img src="../img/02.jpg">
    				<div class="carousel-caption">
    					<p>Une Connaissance</p><br>
    					<p>de chaque réseau</p><br>
    					<p>et une adaptabilité aux différentes cibles</p>
    				</div>
    			</div>
    			<div class="item">
    				<img src="../img/03.jpg">
    				<div class="carousel-caption">
    					<p>1 projet</p><br>
    					<p>1 interlocuteur</p><br>
    					<p>un service <br> entièrement personnalisé</p>
    				</div>
    			</div>
    		</div>
    		<div id="over_diapo"></div>
    		<a class="left carousel-control" href="#sshow" data-slide="prev">
    			<span class="icon-prev"></span>
    		</a>
    		<a class="right carousel-control" href="#sshow" data-slide="next">
    			<span class="icon-next"></span>
    		</a>
    	</div>
    </section>

    <section id="section01">
        <!-- TITRE -->
        <div class="h2">Philosophie</div>
        <!-- END_TITRE -->
        <!-- CORPS -->
        <div class="sec_container">
            <div class="part01">
                    <h2><img src="../img/part1-img.png" alt="Agence Community management"></h2>
                    <div class="h3">Une ligne éditotiale claire</div>
    <p style="text-align:justify">Au cœur de toute démarche de communication web, une ligne éditoriale est essentielle pour être efficace et pertinent dans votre approche. Informer, promouvoir ou convertir - nous décortiquons vos objectifs et développons un ensemble de règles claires pour la création de votre contenu. Notre objectif? Harmoniser votre communication avec les facebookers, les twittos et toute autre « communauté ».&nbsp; Ce fil conducteur assurera le reflet de votre marque, votre philosophie et vos aspirations pour votre société!</p>            </div><!-- end .part01 -->
                <div class="part02">
                    <h2><img src="../img/part2-img.png" alt="Action sur les réseaux sociaux"></h2>
                    <div class="h3">Un champ d'action immense</div>
    <p>Être sur le web et les réseaux sociaux, n’est pas une chose anodine pour une collectivité. Cela implique l’image de marque donc une attention permanente et surtout différentes compétences pour rentabiliser concrètement cet investissement dans la sphère virtuelle.Rien n’est laissé au hasard pour optimiser et apporter vitalité à votre présence en ligne.</p>            </div><!-- end .part02 -->
                <div class="part03">
                    <h2><img src="../img/part3-img.png" alt="échanges sur les medias sociaux"></h2>
                    <div class="h3">Une relation de confiance</div>
    <p>Le savoir-faire est loin d’être le seul élément de la réussite d’un projet web : La confiance, la transparence et la proximité sont autant de valeurs que je prône pour garantir votre succès. Ma garantie : une confiance à tous les niveaux. Comment? En apprenant à vous connaitre et en vous présentant mon efficacité au travail – avec en bonus un gigaoctet de bonne humeur - rien de mieux pour collaborer et vous offrir une paix d’esprit sans un accroc.</p>            </div><!-- end .part03 -->
                <div class="part04">
                    <h2><img src="../img/part4-img.png" alt="experts en community management"></h2>
                    <div class="h3">Une connaissance précise du domaine</div>
    <p>Auditer, veiller, repérer les tendances, les influenceurs et les discussions. Nos experts – geeks et créatifs&nbsp;–&nbsp;maîtrisent les données, les outils de veille et l’environnement web pour définir &nbsp;les perspectives de stratégies digitales pointues.&nbsp;A l’affut d’infos sur les réseaux sociaux (et partout ailleurs), ils like, tweet, repèrent, commentent&nbsp;et analysent les statistiques pour trouver les meilleurs moyens d'augmenter votre présence sur les médias sociaux avec toutes les options mises à leurs dispositions et en ne laissant rien au hasard.</p>            </div><!-- end .part04 -->
        </div> <!-- end .sec_container -->
    </section>  <!-- END_CORPS -->

    <section id="section02">
      <div class="h2">Les Offres</div>
      <div class="sec_container">
    	<div class="part01">
    		<div class="sqr">01</div>
    		<div class="content_offres">
    			<h3 class="h4">Formule 1</h3>
    <p>- 1 demi journée / semaine</p>
    <p>- 1 article / mois</p>
    <p class="prix">249<sup>€ HT </sup>/ mois</p>		</div>
    	</div><!-- end .part01 -->
    	<div class="part02">
    		<div class="sqr">02</div>
    		<div class="content_offres">
    			<h3 class="h4">Formule 2</h3>
    <p>- 2 heures / jour</p>
    <p>- 1 article / semaine</p>
    <p class="prix">499<sup>€ HT </sup>/ mois</p>		</div>
    	</div><!-- end .part02 -->
    	<div class="part03">
    		<div class="sqr">03</div>
    		<div class="content_offres">
    			<h3 class="h4">Formule 3</h3>
    <p>1 community manager</p>
    <p>dédié à votre projet.</p>
    <p class="prix">1599<sup>€ HT </sup>/ mois</p>		</div>
    	</div><!-- end .part03 -->
    	<div class="part04">
    		<div class="sqr">Les<br> plus</div>
    		<div class="content_offres">
    			<p>Création de vos comptes sociaux et des visuels.</p>
    <p>+ Développement sur mesure pour vos sites web.</p>
    <p>+ Analyse stratégique et référencement de vos sites internet.</p>		</div>
    	</div><!-- end .part04 -->
      </div> <!-- end .sec_container -->
    </section>
    	</div> <!-- End #wrapper -->

    		<footer id="footer">
    			<a href="#" class="back-to-top">Top</a>
    			<div class="h2">Contact</div>
    			<div class="footer_container">
    				<div id="coor">
    					<div class="h5">LMY Lambert Management for You </div>
    <p>Adresse :<br>
    LAMBERT Mehdi<br>
    17 rue Edouard Manet<br>
    11110 COURSAN</p>
    <p>Téléphone : 06.18.75.27.14</p>
    <p>Mail : lambertyael@aol.com</p>
    				</div>
    				<div id="form">
    					<form name="contact" action="insert_form.php" method="POST">
    						<article id="pers">
    							<input type="text" name="nom" id="nom" placeholder="Nom" required="required">
    							<input type="text" name="prenom" id="prenom" placeholder="Prénom" required="required">
    							<input type="text" name="ville" id="ville" placeholder="Ville" required="required">
    							<input type="email" name="email" id="email" placeholder="E-mail" required="required">
    							<input type="tel" name="telephone" id="telephone" placeholder="Téléphone" required="required">
    						</article>
    						<article id="msg">
    							<textarea name="comment" id="comment" placeholder="Tapez votre message ici" ></textarea>
    							<button class="btnsubmit" type="submit" name="envoyer" >Envoyer</button>
    							<a href="#" id="formresult" style="display: none;"></a>
    						</article>
    					</form><!-- end of form -->
    				</div>
    				<div id="reseaux">
    					<div class="h5">Suivez moi sur les réseaux</div>
    					<a href="https://www.facebook.com/" title="Facebook" target="_blank">Facebook</a>
    					<a href="https://twitter.com/" title="Twitter" target="_blank">Twitter</a>
    					<a href="https://www.instagram.com" title="Instagram" target="_blank">Instagram</a>
    					<a href="http://www.linkedin.com/" title="LinkedIn" target="_blank">LinkedIn</a>
    				</div>
    			</div> <!-- end .footer_container -->
    		</footer> <!-- End #footer -->
</body>
</html>
