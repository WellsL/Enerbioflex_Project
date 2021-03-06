<?php 

	require_once('functions.inc.php');
	require_once('annonce.php');
	require_once('webservices.php');
	
	head_html( 'Mes annonces', "../img/logo.png", array( "../css/base.css", 
	"../css/contenu-box.css" ,
	"../css/annonce.css" , 
	"../media/FR_regnew_js/cmap/style.css",
	"../vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css",
	"../vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"
	),'');
?>


	<body>
	

	
		<?php  
		session_start();
		
		// BARRE
		bar('GERER ANNONCES');
		
		// CONNECTION BDD 
		require 'connection_BDD.php';
		
		if ( isset($_SESSION['id'])){
		
			// recherche de mes annonces
			$req = search_mes_articles($bdd, $_SESSION['id']);
			$i=0;
			while($resultat = $req->fetch(PDO::FETCH_ASSOC)){
				write_article_modif($resultat['id_article'],$resultat['titre'],$resultat['prix'], $resultat['description'], $resultat['region'], $resultat['departement'], $resultat['ville'], $resultat['photo']);
				$i++;
				}
			if($i==0)
			{
				echo'<div id="box">';
				echo'<p class="texte-centre" style="color:red;">Vous n\'avez pas posté d\'annonce.</p>';
				echo'<p class="texte-centre"><a href="../">Retour à la page d\'accueil.</a></p>';
				echo'</div>	';
			}
			
		}
		else{
			echo'<div id="box">';
				echo'<p class="texte-centre" style="color:red;">Une connexion est requise pour poster une annonce.</p>';
				echo'<p class="texte-centre"><a href="../../membre/">Retour à la page de connexion.</a></p>';
			echo'</div>	';
		}
	?>
	</body>
</html>