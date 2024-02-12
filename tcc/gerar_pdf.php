<?php
require('db.php'); // Arquivo de conexão com o banco de dados
require('tcpdf/tcpdf.php'); // Inclua o arquivo da biblioteca TCPDF

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta ao banco de dados para obter todos os dados do ID específico
    $query = "SELECT * FROM formulario WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Inicializar o objeto TCPDF
        $pdf = new TCPDF();
        $pdf->SetCreator('PDF Generator');
        $pdf->SetTitle('Dados do Formulário');

        // Adicionar conteúdo ao PDF
        $pdf->AddPage();

        // Adicionar background gradiente
        $pdf->SetFillColor(255,255 , 255); // Cor inicial do gradiente (preto)
        $pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'F');

        // Cor de fundo para o título
        $pdf->SetFillColor(00, 64, 00); // Cor: Royal Blue
        $pdf->Rect(00, 64, 00, 15, 'F'); // Retângulo de fundo para o título

        // Estilo do título
        $pdf->SetFont('Courier', 'B', 18); // Usando a fonte Courier
        $pdf->SetTextColor(255, 255, 255); // Cor: Branca
        $pdf->Cell(0, 15, 'Dados do Formulário', 0, 1, 'C', 1);

        // Restaurar configurações padrão para texto
        $pdf->SetTextColor(00, 00, 00); // Cor: Branca
        $pdf->SetFont('Courier', '', 12); // Usando a fonte Courier para o conteúdo

        // Adicionar subtítulo para informações pessoais
        $pdf->SetFont('Courier', 'B', 14);
        $pdf->Ln(10);
        $pdf->Cell(0, 10, 'Informações Pessoais', 0, 1);
        $pdf->SetFont('Courier', '', 12);

        // Iterar sobre as colunas relacionadas a informações pessoais e adicionar ao PDF
        $camposInformacoesPessoais = array('nome', 'idade', 'sexo', 'escolaridade');
        foreach ($camposInformacoesPessoais as $campo) {
            $pdf->Cell(40, 10, ucfirst($campo), 0, 0);
            $pdf->Cell(0, 10, ': ' . $row[$campo], 0, 1);
        }

        // Adicionar subtítulo para informações de deslocamento
        $pdf->SetFont('Courier', 'B', 14);
        $pdf->Ln(10);
        $pdf->Cell(0, 10, 'Informações de Deslocamento', 0, 1);
        $pdf->SetFont('Courier', '', 12);

        // Iterar sobre as colunas relacionadas a informações de deslocamento e adicionar ao PDF
        $camposDeslocamento = array('procedencia', 'tempo_deslocamento', 'tipo_transporte');
        foreach ($camposDeslocamento as $campo) {
            $pdf->Cell(40, 10, ucfirst($campo), 0, 0);
            $pdf->Cell(0, 10, ': ' . $row[$campo], 0, 1);
        }

        // Adicionar mais seções e campos conforme necessário

        // Saída do PDF
        $pdf->Output();
    }
}
?>
