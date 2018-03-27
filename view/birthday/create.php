<form action="<?= URL ?>birthday/insert" method="POST">
	<h1>Vul gegevens in</h1>
	<h2>Naam <input required="true" type="text" name="name" autocomplete="off"></h2>
	<h2>Geboorte dag <input required="true" type="text" autocomplete="off" name="day" autocomplete="off"></h2>
	<h2>Geboorte maand <input required="true" type="text" autocomplete="off" name="month" autocomplete="off"></h2>
	<h2>Geboorte jaar <input required="true" type="text" autocomplete="off" name="year" autocomplete="off"></h2>
	<button type="submit">Versturen</button>
</form>	