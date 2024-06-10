<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Vous voici sur une page vulnérable !</h1>

        <h2>Bravo ! Vous venez d'effacer la totalité du site : <?= $_GET['id'] ?></h2>

        <h2>Mais rassurez-vous, c'était juste pour vous faire voir ce qu'était une faille CSRF ;)</h2>
    </body>
</html>