<html>
<head>
    <title>Spedire le informazioni con il browser</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Spedire le informazioni con il browser</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Semplice Form</p>
<hr>
<br>
<form action="send.php">
<h3>Inserisci il tuo nome<input type="text" name="nome" size="20" maxlength="20"></h3>
<h3>Inserisci il tuo cognome<input type="text" name="cognome" size="20" maxlength="20"></h3>
<h3>Inserisci la tua data di nascita<input type="text" name="data" size="20" maxlength="20"></h3>
<h3>Inserisci il tuo sesso: uomo <input type="radio" name="sesso" value="m">donna<input type="radio" name="sesso" value="f"></h3>
<h3>Luogo di nascita<select name="luogo">
<option value="Torino" SELECTED>Torino</option>
<option value="Milano">Milano</option>
<option value="Palermo">Palermo</option>
<option value="Genova">Genova</option>
<option value="Padova">Padova</option>
</select></h3>
<input type="submit" value="Invia">
</form>
<br>
<hr>

</body>
</html>