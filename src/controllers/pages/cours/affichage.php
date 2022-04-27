<?php
require_once("databases/SessionManagement.php");
require_once("databases/CoursCRUD.php");
require_once("controllers/utils.php");
require_once "views/pages/cours/creation-modification/creation-modification.php";

SessionManagement::session_start();

$coursId = $_GET["id"];

$isLogged = SessionManagement::isLogged();

//verif URL
if (!$coursId) die("ID du cours non spécifié.");

// Vérification connexion.
if (!$isLogged) die("Vous devez être connecté");

// Effectuer la récupération du cours et l'affichage.
$conn = new DatabaseManagement();
$coursCRUD = new CoursCRUD($conn);

$isEditMode = false;
$cours = $coursCRUD->readCoursById($coursId);
if (!$cours) die("Cours n'existe pas.");


// Affichage de la vue.
afficherVue($isEditMode, $cours);

//redirect("/", "success", "Affichage du cours");