<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluxograma - Processo Seletivo OTT</title>
    <script src="https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs"></script>
</head>
<body>
    <div class="mermaid">
        graph TD
            A[Inscrição no processo seletivo - OTT] -->|De 08 de AGO a 21 AGO 23| B(Divulgação dos Inscritos com Pontuação Inicial)
            B -->|22 AGO 23| C(Divulgação dos candidatos que terão sua documentação analisada)
            C -->|18 SET 23| D(Divulgação dos resultados da Avaliação Curricular)
            D -->|25 SET 23| E(Prazo Recurso Resultado Avaliação Curricular)
            E -->|26 SET 23 - 28 SET 23| F(Publicação dos Resultados dos Recursos)
            F -->|16 OUT 23| G(Divulgação dos candidatos chamados para Avaliação Prática Pedagógica)
            G -->|16 OUT 23| H(Realização da Avaliação Prática da Capacidade Pedagógica)
            H -->|17 OUT 23| I(Resultado da Avaliação Prática da Capacidade Pedagógica)
            I -->|18 OUT 23| J(Prazo do Recurso Resultado da Avaliação Prática)
            J -->|19 OUT 23 - 20 OUT 23| K(Divulgação dos candidatos convocados para Inspeção de Saúde)
            K -->|25 OUT 23| L(Realização da Inspeção de Saúde)
            L -->|27 NOV 23 - 30 NOV 23| M(Resultado Inspeção de Saúde)
            M -->|07 DEZ 23| N(Recurso resultado Inspeção de Saúde)
            N -->|11 DEZ 23 - 12 DEZ 23| O(Divulgação dos candidatos convocados para IS em Grau de Recurso)
            O -->|02 JAN 24| P(Inspeção de Saúde em Grau de Recurso)
            P -->|03 JAN 24| Q(Resultado IS em Grau de Recurso)
            Q -->|04 JAN 24| R(Divulgação dos candidatos convocados para o EAF)
            R -->|05 JAN 24| S(Realização do Exame de Aptidão Física - EAF)
            S -->|08 JAN 24 - 10 JAN 24| T(Divulgação do resultado do EAF)
            T -->|17 JAN 24| U(Prazo recurso resultado EAF)
            U -->|18 JAN 24 - 19 JAN 24| V(Definição e Publicação das vagas disponíveis para Incorporação)
            V -->|22 JAN 24| W(Divulgação dos candidatos Convocados para Seleção Complementar)
            W -->|22 JAN 24| X(Seleção Complementar)
            X -->|23 JAN 24| Y(Resultado da Seleção Complementar)
            Y -->|26 JAN 24| Z(Recurso Resultado Seleção Complementar)
            Z -->|29 JAN 24 - 30 JAN 24| AA(Chamada para incorporação/Reincorporação)
            AA -->|31 JAN 24| AB(Incorporação)
            AB -->|01 FEV 24| AC(Of R/2 Dispensados de frequentar o EST)
            AC -->|01 FEV 24| AD(Encerramento 1ª Fase)
            AD -->|18 MAR 24| AE(Inicio 2ª Fase do EST e Apresentação na OM destino)
            AE -->|A contar de 19 MAR 24|
    </div>

    <script>
        mermaid.initialize({ startOnLoad: true });
        mermaid.init(undefined, document.querySelector('.mermaid'));
    </script>
</body>
</html>
