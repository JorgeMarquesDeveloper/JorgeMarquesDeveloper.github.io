<?php
require 'PHPOffice/PhpSpreadsheet/IOFactory.php';
require 'PHPOffice/PhpSpreadsheet/Spreadsheet.php';
require 'PHPOffice/PhpSpreadsheet/Writer/Xlsx.php';

// Conexão com o banco de dados (substitua com suas próprias credenciais)
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'project001';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die('Erro na conexão com o banco de dados: ' . $connection->connect_error);
}

// Consulta SQL para selecionar os dados da tabela
$query = "SELECT nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora FROM formulario";

$result = $connection->query($query);

// Criar um novo objeto PhpSpreadsheet
$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Cabeçalhos da tabela
$sheet->setCellValue('A1', 'Nome')
      ->setCellValue('B1', 'Idade')
      ->setCellValue('C1', 'Sexo')
      ->setCellValue('D1', 'Escolaridade')
      ->setCellValue('E1', 'Renda')
      ->setCellValue('F1', 'Procedência')
      ->setCellValue('G1', 'Tempo de Deslocamento')
      ->setCellValue('H1', 'Tipo de Transporte')
      ->setCellValue('I1', 'Passagem/Estadia/Refeição')
      ->setCellValue('J1', 'Cuidador')
      ->setCellValue('K1', 'Força Motora');

// Preencher a tabela com os dados do banco de dados
$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $sheet->setCellValue('A' . $row, $row_data['nome'])
          ->setCellValue('B' . $row, $row_data['idade'])
          ->setCellValue('C' . $row, $row_data['sexo'])
          ->setCellValue('D' . $row, $row_data['escolaridade'])
          ->setCellValue('E' . $row, $row_data['renda'])
          ->setCellValue('F' . $row, $row_data['procedencia'])
          ->setCellValue('G' . $row, $row_data['tempo_deslocamento'])
          ->setCellValue('H' . $row, $row_data['tipo_transporte'])
          ->setCellValue('I' . $row, $row_data['passagem_estadia_refeicao'])
          ->setCellValue('J' . $row, $row_data['cuidador'])
          ->setCellValue('K' . $row, $row_data['forca_motora']);
    $row++;
}

// Definir a largura das colunas
foreach (range('A', 'K') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}

// Cabeçalho do arquivo XLSX
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="relatorio.xlsx"');
header('Cache-Control: max-age=0');

$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
