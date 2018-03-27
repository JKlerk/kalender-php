<?php

require(ROOT . "model/BirthdayModel.php");

function index(){
	render("home/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function kalender(){
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function delete($id){
	deleteUser($id);
	header("Location: /Kalender/birthday/kalender");
}

function postEdit($id){
	editUser($id);
	header("Location: /Kalender/birthday/kalender");
}

function edit($id){
	render("birthday/edit", array(
		"result" => getUser($id)
	));
}

function create(){
	render("birthday/create");
}

function insert(){
	insertUser();
	header("Location: /Kalender/birthday/kalender");
}