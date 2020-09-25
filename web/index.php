<?php

use PhpOffice\PhpSpreadsheet\Writer\Ods as Writer;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use smaloron\modernPHP\Model\BookModel;

require "../vendor/autoload.php";


$book = new BookModel();

// Instanciation de la feuille de calcul
$spreadSheet = new Spreadsheet();
// Obtention de la feuille active
$activeSheet = $spreadSheet->getActiveSheet();

$activeSheet->setCellValue("A1", "Nom");
$activeSheet->setCellValue("A2", "Joe");

// Enregistrement dans un fichier
$writer = new Writer($spreadSheet);

$writer->save('test.ods');
