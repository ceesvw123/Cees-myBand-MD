<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
define('DB_HOST','localhost');
define('DB_NAME','18522_damien');
define('DB_USERNAME','cees123');
define('DB_PASSWORD','cees123');


define('ITEMS_PAGE_NEWS',3);
define('ITEMS_PAGE_NEWS_DAMIEN_NEWS',1);
define('ITEMS_PAGE_NEWS_DAMIEN_IMAGES',3);
define('ITEMS_PAGE_NEWS_DAMIEN_AGENDA',1);
define('ITEMS_PAGE_EXHIBITION',5);


?>