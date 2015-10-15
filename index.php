<?php
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'libs/functions.php';
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Damien Hirst');
// Toon de template: output html

$action = isset($_GET['action']) ? $_GET['action'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$templateParser->assign('page',$page);
// Haal de nieuws artikelen op
// Toon de nieuwsberichten. Oude stijl:
// Bouw dit om naar een template systeem
$templateParser->display('footer.tpl');


$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

switch($page){
    case 'damien':
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        require 'model/select_damien_1.php';
        require 'model/select_damien_2.php';
        require 'model/select_damien_3.php';
        $templateParser->assign('data1',resultToArray($data1));
        $templateParser->assign('data2',resultToArray($data2));
        $templateParser->assign('data3',resultToArray($data3));
        $templateParser->display('damien.tpl');
        break;
    case 'news':

        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'model/select_newsarticles.php';
        require 'model/count_items_newsarticles.php';
        $templateParser->assign('data',resultToArray($data));
        $templateParser->assign('total_pages',$total_pages);
        $templateParser->assign('page_nr',$page_nr);
        $templateParser->display('newsarticles.tpl');
        //include 'views/newsarticle.php';
        break;
    case 'gallery':
        require 'model/select_images.php';
        $templateParser->assign('data',resultToArray($data));
        $templateParser->display('gallery.tpl');
        break;
    case 'agenda':

        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'model/select_exhibition.php';
        require 'model/count_items_exhibition.php';
        $templateParser->assign('data',resultToArray($data));
        $templateParser->assign('total_pages',$total_pages);
        $templateParser->assign('page_nr',$page_nr);
        $templateParser->display('agenda.tpl');
        //include 'views/exhibition.php';
        break;
    case 'contact':
        $templateParser->display('contact.tpl');
        break;
    case 'search':
        require ('model/search.php');
        $templateParser->assign('searchResult', resultToArray($searchResult));
        $templateParser->display('views/search.tpl');
}