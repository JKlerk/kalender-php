<?php
	foreach ($result as $birthday) {
		echo '<form action="/kalender-php/birthday/postEdit/'. $birthday['id'] .'" method="POST"><h1>Vul gegevens in</h1>
		<h2>Naam <input required="true" type="text"autocomplete="off" name="name" value="'. $birthday['person'] .'"></h2>
		<h2>Geboorte dag <input required="true" type="text" autocomplete="off" name="day" value="'. $birthday['day'] .'"></h2>
		<h2>Geboorte maand <input required="true" type="text" autocomplete="off" name="month" value="'. $birthday['month'] .'"></h2>
		<h2>Geboorte jaar <input required="true" type="text" autocomplete="off" name="year" value="'. $birthday['year'] .'"></h2>
		<button type="submit">Opslaan</button>';
	}
?>
</form>