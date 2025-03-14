<link rel="stylesheet" href="css2.css">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $annee = $_POST["annee"];
    $mois = $_POST["mois"];
    $jour = $_POST["jour"];
    $poids = $_POST["poids"];
    $taille = $_POST["taille"];

    $informations_correctes = true;

    try {
        $date_naissance = new DateTime("$annee-$mois-$jour");
    } catch (Exception $e) {
        $informations_correctes = false;
        echo "Erreur de date : " . $e->getMessage() . "<br>";
    }

    date_default_timezone_set('Europe/Paris');
    $date = new DateTime();
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    echo "Date du jour : " . $formatter->format($date) . "</br>";

    function isValidDate($dateString, $format = 'Y-m-d') {
        try {
            $date = new DateTime($dateString);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    if ($informations_correctes) {
        echo "Bienvenue, $prenom $nom <br>";
        echo "Votre date de naissance est le $jour/$mois/$annee.<br>";
        echo "Votre poids est $poids kg et votre taille est $taille m.<br>";
        
        $taille_en_metres = $taille ; 
        $imc = $poids / ($taille_en_metres ** 2);

        $aujourdhui = new DateTime();
        $date_naissance = new DateTime("$annee-$mois-$jour");
        $difference = $aujourdhui->diff($date_naissance);
        $age = $difference->y;

        if ($age >= 18) {
            echo "Votre IMC est : " . number_format($imc, 2) . "<br>";
            
            if ($imc < 16.5) {
                echo "Catégorie d'IMC : Famine";
            } elseif ($imc >= 16.5 && $imc < 18.5) {
                echo "Catégorie d'IMC : Maigre";
            } elseif ($imc >= 18.5 && $imc < 25) {
                echo "Catégorie d'IMC : Corpulence normale";
            } elseif ($imc >= 25 && $imc < 30) {
                echo "Catégorie d'IMC : Surpoids";
            } elseif ($imc >= 30 && $imc < 35) {
                echo "Catégorie d'IMC : Obésité";
            } elseif ($imc >= 35 && $imc < 40) {
                echo "Catégorie d'IMC : Obésité sévère";
            } else {
                echo "Catégorie d'IMC : Obésité massive";
            }
        } else {
            echo "IMC non représentatif pour un enfant.<br>";
        }
    } else {
        echo "Certaines informations sont incorrectes. Veuillez vérifier le formulaire.";
    }

    echo '<br><br><a href="IMC_Saisie.php"><button>Retour</button></a>';
} else {
    echo "Certaines informations sont incorrectes. Veuillez vérifier le formulaire.";
}

?>



