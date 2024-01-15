

<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato -->


<form action="./index.php" method="$_GET">
    <label for="utente">Inserisci il nome</label>
    <input type="text" name="utente" id="utente">
    <?php 
        if (strlen($name ) != 3) {
            echo 'Il nome deve avere almeno 4 caratteri'
        }
    ?>
<br>
    <label for="email">Inserisci la tua email</label>
    <input type="email" name="email" id="email">
<br>
    <label for="number">Inserisci la tua età</label>
    <input type="number" name="eta" id="eta">
<br>
    <button type="submit">Invia</button>
</form>