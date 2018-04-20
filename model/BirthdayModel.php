<?php
function getAllBirthdays() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY birthdays.day ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function deleteUser($id) {
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function editUser($id) {
	$db = openDatabaseConnection();
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "UPDATE birthdays SET person=:name, day=:day, month=:month, year=:year WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":day" => $day,
		":month" => $month,
		":year" => $year,
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}

function insertUser() {
	$db = openDatabaseConnection();
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:name, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":name" => $name,
		":day" => $day,
		":month" => $month,
		":year" => $year
	));
	$db = null;
	return $query->fetchAll();
}

function getUser($id) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id=:id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));
	$db = null;
	return $query->fetchAll();
}