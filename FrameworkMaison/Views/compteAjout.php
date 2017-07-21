<div>
    <h2>Créer un compte</h2>

    <form method="post" action="index.php?action=traitementForm">

        <p><input type="text" name="nom" placeholder="Saisissez votre nom"></p>
        <p><input type="text" name="prenom" placeholder="Saisissez votre prénom"></p>
        <p><input type="email" name="email" placeholder="Saisissez votre email"></p>
        <?php if ($action == ''){?>
        <p><input type="password" name="pwd" placeholder="Saisissez votre password"></p>
        <p><input type="password" name="verifpwd" placeholder="Saisissez à nouveau votre password"></p>
        <?php } ?>

            <p>
                <select name="profil"></select>
            </p>
        <p><button type="submit" class="success button">Envoyer mon formulaire</button> </p>


    </form>

</div>