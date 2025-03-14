<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul IMC</title>
</head>

<body>
    <form action="Formulaire2.php" method="post">
        <h2>Calcul de l'IMC</h2>

        <form action="#" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="annee">Année de Naissance :</label>
            <input type="text" id="annee" name="annee" pattern="\d{4}" required placeholder="YYYY"><br>

            <label for="mois">Mois de Naissance :</label>
            <select id="mois" name="mois" required>

                <option value="" disabled selected>Sélectionnez le mois</option>
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select><br>

            <label for="jour">Jour de Naissance :</label>
            <input type="number" id="jour" name="jour" min="1" max="31" required><br>

            <label for="poids">Poids (en kg) :</label>
            <input type="number" id="poids" name="poids" step="0.01" min="1" required><br>

            <label for="taille">Taille (en m) :</label>
            <input type="number" id="taille" name="taille" step="0.01" min="0.1" required><br>

            <input type="submit" value="Soumettre">

        </form>

    </form>
</body>

</html>

