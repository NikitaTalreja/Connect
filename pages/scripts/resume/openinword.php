<?php
    require_once("../../selected-template.php");
    
   require_once("vendor/autoload.php");
   $phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection();
   \PhpOffice\PhpWord\Shared\Html::addHtml($section, $_POST['htmlstring']);
    
   $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('resume.docx');
?>
