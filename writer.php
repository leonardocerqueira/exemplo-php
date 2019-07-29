<?php 

require_once('./vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;

$mod_file = './spreadsheets/models/doc.xlsx';
$new_file = './spreadsheets/sheets/document.xlsx';
$file_type = 'Xlsx';

try {

  $reader = IOFactory::createReader($file_type);
  $reader->setIncludeCharts(true);
  $spreadsheet = $reader->load($mod_file);
  $worksheet = $spreadsheet->getActiveSheet();

  foreach ($_POST as $chave => $valor) {
    $worksheet->getCell($chave)->setValue($valor);
  }
  
  $writer = IOFactory::createWriter($spreadsheet, $file_type);
  $writer->setIncludeCharts(true);
  $writer->save($new_file);

  echo 'Documento criado em: <b>'
    . realpath($new_file)
    . '<b><br><a href=./>voltar</a>';
}

catch (Exception $e) {
  echo "Erro: {$e->getMessage()}";
}
