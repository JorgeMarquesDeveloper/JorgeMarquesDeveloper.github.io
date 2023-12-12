<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela do Sistema</title>
    <!-- Inclua seu arquivo de estilo CSS -->
    <link type="text/css" rel="stylesheet" href="resources/sheet.css">
    <style type="text/css">
        /* Copie os estilos do seu arquivo de estilo ou insira diretamente aqui */
        /* ... */
    </style>
</head>
<body>
    <?php
    // Conteúdo da tabela HTML
    $tabelaHTML = '
    <div class="ritz grid-container" dir="ltr">
        <table class="waffle" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="row-header freezebar-origin-ltr"></th>
                    <th style="width:90px;" class="column-headers-background">A</th>
                    <th style="width:94px;" class="column-headers-background">B</th>
                    <!-- ... Mais cabeçalhos de colunas ... -->
                    <th style="width:69px;" class="column-headers-background">J</th>
                </tr>
            </thead>
            <tbody>
                <!-- Linhas da tabela -->
                <tr style="height: 36px">
                    <th style="height: 36px;" class="row-headers-background">
                        <div class="row-header-wrapper" style="line-height: 36px">1</div>
                    </th>
                    <td class="s0" colspan="10">IDENTIFICAÇÃO</td>
                </tr>
                <!-- ... Mais linhas da tabela ... -->
            </tbody>
        </table>
    </div>';

    // Imprimir a tabela HTML
    echo $tabelaHTML;
    ?>
</body>
</html>
