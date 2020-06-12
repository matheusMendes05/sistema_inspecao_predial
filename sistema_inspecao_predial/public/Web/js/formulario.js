
let select = document.querySelector('#descValue');
let content = document.querySelector('#content')


let estruturas =

    '<select class="custom-select" name="txt_elemento_formulario" id="elemento">' +
    '<option selected>Fissuras</option>' +
    '<option value="Destacamento-desagregacao-desplacamento">Destacamento / desagregação / desplacamento</option>' +
    '<option value="Armadura-exposta">Armadura exposta</option>' +
    '<option value="Corrosao">Corrosão</option>' +
    '<option value="Peca-estrutural-com-deformacao-excessiva">Peça estrutural com deformação excessiva</option>' +
    '<option value="Irregularidades-geometricas-falhas-de-concretagem">Irregularidades geométricas, falhas de concretagem</option>' +
    '<option value="Eflorescencia-lixiviacao-infiltracao">Eflorescência / lixiviação / infiltração</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';


let fundacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Erosao-do-solo"selected>Erosão do solo</option>' +
    '<option value="Recalque-diferencial">Recalque diferencial</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let vedacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Fissura"selected>Fissura/Trinca</option>' +
    '<option value="Eflorescencia">Eflorescência</option>' +
    '<option value="Infiltracao">Infiltração</option>' +
    '<option value="Irregularidades-geometricas (esquadro / prumo / nível / planeza)">Irregularidades geométricas (esquadro / prumo / nível / planeza)</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let forro =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Deformacao-excessiva" selected>Deformação excessiva</option>' +
    '<option value="Fissura">Fissura</option>' +
    '<option value="Desencaixe">Desencaixe</option>' +
    '<option value="Utilizacao-de-material-sujeito-a-corrosao">Utilização de material sujeito a corrosão</option>' +
    '<option value="Deficiencia-no-dimensionamento-ou-inexistencia-de-alcapoes">Deficiência no dimensionamento ou inexistência de alçapões </option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let parede =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Fissura" selected>Fissura</option>' +
    '<option value="Destacamento-desagregacao-descolamento">Destacamento / desagregação / descolamento</option>' +
    '<option value="Infiltracao">Infiltração</option>' +
    '<option value="Eflorescencia-manchas-de-mofo-bolor">Eflorescência / manchas de mofo / bolor</option>' +
    '<option value="falta-ou-deficiencia-nas-juntas-de-trabalho-e-rejunte">Falta ou deficiência nas juntas de trabalho e rejunte </option>' +
    '<option value="Descascamento-bolhas-enrugamento">Descascamento / bolhas / enrugamento</option>' +
    '<option value="Falha-rejunte">Falha rejunte </option>' +
    '<option value="Abertura-improvisada-para-passagem-de-cabos">Abertura improvisada para passagem de cabos</option>' +
    '<option value="Som-cavo">Som cavo</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let piso =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Fissura" selected>Fissura</option>' +
    '<option value="Falta-ou-deficiência-nas-juntas-de-trabalho-e-rejunte">Falta ou deficiência nas juntas de trabalho e rejunte</option>' +
    '<option value="Destacamento-descolamento">Destacamento / descolamento</option>' +
    '<option value="Caimento-inadequado-nas-areas-molhaveis-ou-lavaveis">Caimento inadequado nas áreas molháveis ou laváveis</option>' +
    '<option value="Escadas-sem-protecao-antiderrapante-e-pisos-externos-escorregadios">Escadas sem proteção antiderrapante e pisos externos escorregadios</option>' +
    '<option value="Manchas-decorrentes-de-umidade-ascendente-do-solo-Eflorescência">Manchas decorrentes de umidade ascendente do solo / Eflorescência</option>' +
    '<option value="Abatimento-do-piso">Abatimento do piso</option>' +
    '<option value="Som-cavo">Som cavo</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let fachada =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Fissura" selected>Fissura</option>' +
    '<option value="Destacamento / desagregação / descolamento">Destacamento / desagregação / descolamento</option>' +
    '<option value="Descascamento / bolhas / enrugament">Descascamento / bolhas / enrugament</option>' +
    '<option value="Eflorescência / manchas de mofo / bolor">Eflorescência / manchas de mofo / bolor</option>' +
    '<option value="Falta ou deficiência nas juntas de trabalho e rejunte">Falta ou deficiência nas juntas de trabalho e rejunte</option>' +
    '<option value="Deficiência na pintura, oxidação e corrosão das esquadrias">Deficiência na pintura, oxidação e corrosão das esquadrias</option>' +
    '<option value="Desgaste (fissuras, escurecimentos, perda de cor) das esquadrias">Desgaste (fissuras, escurecimentos, perda de cor) das esquadrias</option>' +
    '<option value="Ataque de pragas nas esquadrias">Som cavo</option>' +
    '<option value="Vidros soltos ou quebrados">Vidros soltos ou quebrados</option>' +
    '<option value="Rompimento ou descolamento do material selante">Rompimento ou descolamento do material selante</option>' +
    '<option value="Caixa de ar condicionado danificada">Caixa de ar condicionado danificada</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let esquadria =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Deficiência na pintura, oxidação e corrosão " selected>Deficiência na pintura, oxidação e corrosão </option>' +
    '<option value="Ataque de pragas">Ataque de pragas</option>' +
    '<option value="Perda de mobilidade e/ou deficiências na abertura e fechamento">Perda de mobilidade e/ou deficiências na abertura e fechamento</option>' +
    '<option value="Folga na fixação dos vidros, vidros soltos ou quebrados">Folga na fixação dos vidros, vidros soltos ou quebrados</option>' +
    '<option value="Rompimento ou descolamento do material selante / Infiltração">Rompimento ou descolamento do material selante / Infiltração</option>' +
    '<option value="Componentes danificados">Componentes danificados</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let impermeabilizacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Infiltração" selected>Infiltração</option>' +
    '<option value="Descolamento da manta">Descolamento da manta</option>' +
    '<option value="Sistema de impermeabilização perfurado">Sistema de impermeabilização perfurado</option>' +
    '<option value="Ressecamento e/ou craqueamento do sistema impermeabilizante por falta de proteção mecânica">Ressecamento e/ou craqueamento do sistema impermeabilizante por falta de proteção mecânica</option>' +
    '<option value="Falta de junta de dilatação em proteção mecânica">Falta de junta de dilatação em proteção mecânica</option>' +
    '<option value="Falta de caimento para os ralos">Falta de caimento para os ralos</option>' +
    '<option value="Falta de impermeabilização no teto dos reservatórios">Falta de impermeabilização no teto dos reservatórios</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let instalacao_hidrossanitaria =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Vazamento" selected>Vazamento</option>' +
    '<option value="Deterioração / deformação nas tubulações">Deterioração / deformação nas tubulações</option>' +
    '<option value="Deterioração / deformação nas tubulações">Deterioração / deformação nas tubulações</option>' +
    '<option value="Não conformidade na pintura das tubulações">Não conformidade na pintura das tubulações</option>' +
    '<option value="Falta de identificação nos registros do barrilete">Falta de identificação nos registros do barrilete</option>' +
    '<option value="Tubulações obstruídas">Tubulações obstruídas</option>' +
    '<option value="Entupimento / extravasamento de calhas / ralos">Entupimento / extravasamento de calhas / ralos</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let instalacao_gas =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Vazamento" selected>Vazamento</option>' +
    '<option value="Deterioração / corrosão das tubulações">Deterioração / corrosão das tubulações</option>' +
    '<option value="Não conformidade na pintura das tubulações">Não conformidade na pintura das tubulações</option>' +
    '<option value="Não conformidade nas dimensões mínimas do abrigo">Não conformidade nas dimensões mínimas do abrigo</option>' +
    '<option value="Falta de abertura inferior do abrigo">Falta de abertura inferior do abrigo</option>' +
    '<option value="Abertura do abrigo permitindo acesso pela via pública">Abertura do abrigo permitindo acesso pela via pública</option>' +
    '<option value="Falta de sinalização obrigatória">Falta de sinalização obrigatória</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let instalacao_eletrica =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Lâmpadas queimadas / ausência de lâmpadas" selected>Lâmpadas queimadas / ausência de lâmpadas</option>' +
    '<option value="Ataque de pragas urbanas em quadros elétricos e de telefonia com fundo de madeira">Ataque de pragas urbanas em quadros elétricos e de telefonia com fundo de madeira</option>' +
    '<option value="Modificações das instalações elétricas / improvisos">Modificações das instalações elétricas / improvisos</option>' +
    '<option value="Superaquecimento">Superaquecimento</option>' +
    '<option value="Fiações e cabos elétricos aparentes / com muitas emendas / partes vivas expostas">Fiações e cabos elétricos aparentes / com muitas emendas / partes vivas expostas</option>' +
    '<option value="Curto circuito">Curto circuito</option>' +
    '<option value="Quadro de luz obstruído / trancado / sem identificação dos circuitos">Quadro de luz obstruído / trancado / sem identificação dos circuitos</option>' +
    '<option value="Ausência proteção barramento">Ausência proteção barramento</option>' +
    '<option value="Falha de tomada / interruptor">Falha de tomada / interruptor</option>' +
    '<option value="Cerca elétrica danificada">Cerca elétrica danificada</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let elevadores =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Cabina desprovida de corrimã" selected>Cabina desprovida de corrimã</option>' +
    '<option value="Quebra de botões da cabina / pavimentos">Quebra de botões da cabina / pavimentos</option>' +
    '<option value="Porta da cabina abre em movimento ou não fecha totalmente">Porta da cabina abre em movimento ou não fecha totalmente</option>' +
    '<option value="Falha de funcionamento do alarme / interfone / iluminação / ventilação">Falha de funcionamento do alarme / interfone / iluminação / ventilação</option>' +
    '<option value="Movimento do elevador com trepidações ou paradas bruscas">Movimento do elevador com trepidações ou paradas bruscas</option>' +
    '<option value="Desnível entre o piso da cabina e o pavimento maior que 5mm / 20mm (com inclinação)">Desnível entre o piso da cabina e o pavimento maior que 5mm / 20mm (com inclinação)</option>' +
    '<option value="Poço de elevador molhado / sujo / obstruído / com falha do sistema de iluminação">Poço de elevador molhado / sujo / obstruído / com falha do sistema de iluminação</option>' +
    '<option value="Vazamento óleo das máquinas">Vazamento óleo das máquinas</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let climatizacao =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Filtro de ar com excesso de sujeira" selected>Filtro de ar com excesso de sujeira</option>' +
    '<option value="Ruídos anormais durante funcionamento dos condicionares">Ruídos anormais durante funcionamento dos condicionares</option>' +
    '<option value="Aparelho subdimensionado">Aparelho subdimensionado</option>' +
    '<option value="Ar condicionado não ajustado conforme a ABNT NBR 6401">Ar condicionado não ajustado conforme a ABNT NBR 6401</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let ventilacao_exaustao_mencanica =

    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Erros no dimensionamento / instalação do sistema" selected>Erros no dimensionamento / instalação do sistema</option>' +
    '<option value="Falta de testes periódicos">Falta de testes periódicos</option>' +
    '<option value="Aparelho subdimensionado">Aparelho subdimensionado</option>' +
    '<option value="Falta de treinamento de operadores locais">Falta de treinamento de operadores locais</option>' +
    '<option value="Presença de contaminantes próximos às tomadas de ar">Presença de contaminantes próximos às tomadas de ar</option>' +
    '<option value="Falta de limpeza periódica dos filtros e caixas de gordura">Falta de limpeza periódica dos filtros e caixas de gordura</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let motor_eletrico =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Aquecimento excessivo do motor" selected>Aquecimento excessivo do motor</option>' +
    '<option value="Partidas demoradas">Partidas demoradas</option>' +
    '<option value="Falha do funcionamento do quadro de comando elétrico">Falha do funcionamento do quadro de comando elétrico</option>' +
    '<option value="Degradação da fiação e dos isolantes elétricos">Degradação da fiação e dos isolantes elétricos</option>' +
    '<option value="Local com excesso de poeiras">Local com excesso de poeiras</option>' +
    '<option value="Ataques por vapores ácidos e corrosivos">Ataques por vapores ácidos e corrosivos</option>' +
    '<option value="Vazamentos de óleos e graxas">Vazamentos de óleos e graxas</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let bomba_hidraulica =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Problemas de vedação" selected>Problemas de vedação</option>' +
    '<option value="Perda de lubrificação">perda de lubrificação</option>' +
    '<option value="Materiais armazenados inadequadamente na casa de bomba">Materiais armazenados inadequadamente na casa de bomba</option>' +
    '<option value="Óleo degradado / contaminado">Óleo degradado / contaminado</option>' +
    '<option value="Níveis de ruído / vibração muito altos">Níveis de ruído / vibração muito altos</option>' +
    '<option value="Vazamentos na carcaça da bomba">Vazamentos na carcaça da bomba</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let cobertura =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Deformações excessivas" selected>Deformações excessivas</option>' +
    '<option value="Abertura de frestas">Abertura de frestas</option>' +
    '<option value="Umidade na estrutura">Materiais armazenados inadequadamente na casa de bomba</option>' +
    '<option value="Deslocamentos, desalinhamentos e quebras de telhas">Deslocamentos, desalinhamentos e quebras de telhas</option>' +
    '<option value="Corrosão de parafusos de fixação / rufo metálico / calha metálica">Corrosão de parafusos de fixação / rufo metálico / calha metálica</option>' +
    '<option value="Ressecamentos das borrachas de vedação / vedantes de calhas e rufos">Ressecamentos das borrachas de vedação / vedantes de calhas e rufos</option>' +
    '<option value="Destacamentos de rufos">Destacamentos de rufos</option>' +
    '<option value="Transbordamento e entupimento de calha / ralo">Transbordamento e entupimento de calha / ralo</option>' +
    '<option value="Ausência da grelha do ralo">Ausência da grelha do ralo</option>' +
    '<option value="Ausência de extravasor da calha">Ausência de extravasor da calha</option>' +
    '<option value="Caimento do telhado insuficiente">Caimento do telhado insuficiente</option>' +
    '<option value="Falta de condições de segurança">Falta de condições de segurança</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';


// combate_incendio
let extintores =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Descarregados / prazos de validade vencidos" selected>Descarregados / prazos de validade vencidos</option>' +
    '<option value="Lacre violado / vencido">Lacre violado / vencido</option>' +
    '<option value="Sem indicação da sua classe">Sem indicação da sua classe</option>' +
    '<option value="Quadro de instruções ilegível ou inexistente">Quadro de instruções ilegível ou inexistente</option>' +
    '<option value="Quantidade insuficiente / instalados acima de 1,60m / abaixo de 0,20m do piso acabado">Quantidade insuficiente / instalados acima de 1,60m / abaixo de 0,20m do piso acabado</option>' +
    '<option value="Mangueira de descarga apresenta danos / deformação / ressecamento">Mangueira de descarga apresenta danos / deformação / ressecamento</option>' +
    '<option value="Sinalização incorreta">Sinalização incorreta</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let hidrantes =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Falta de conservação e sinalização da bomba de incêndio" selected>Falta de conservação e sinalização da bomba de incêndio</option>' +
    '<option value="Dispositivo de comando da bomba quebrado / em mau estado de conservação">Dispositivo de comando da bomba quebrado / em mau estado de conservação</option>' +
    '<option value="Mau estado de conservação das caixas de hidrantes">Mau estado de conservação das caixas de hidrantes</option>' +
    '<option value="Mangueira do hidrante enrolada inadequadamente / furada / cortada / ausente">Mangueira do hidrante enrolada inadequadamente / furada / cortada / ausente</option>' +
    '<option value="Registro emperrado/com vazamento">Registro emperrado/com vazamento</option>' +
    '<option value="Mangueira conectada">Mangueira conectada</option>' +
    '<option value="Ausência da mangueira">Ausência da mangueira</option>' +
    '<option value="Ausência do esguicho">Ausência do esguicho</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let saida_emergencia =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Ausência de sinalização das rotas de fuga e saídas de emergência" selected>Ausência de sinalização das rotas de fuga e saídas de emergência</option>' +
    '<option value="Portas obstruídas">Portas obstruídas </option>' +
    '<option value="Portas corta-fogo em mau estado de funcionamento das fechaduras">Portas corta-fogo em mau estado de funcionamento das fechaduras</option>' +
    '<option value="Portas corta-fogo abertas e travadas com objetos">Portas corta-fogo abertas e travadas com objetos</option>' +
    '<option value="Falha de iluminação autônoma">Falha de iluminação autônoma</option>' +
    '<option value="Portas que abrem para o interior do edifício">Portas que abrem para o interior do edifício</option>' +
    '<option value="Saídas com menos de 1,20m de largura">Saídas com menos de 1,20m de largura</option>' +
    '<option value="Escada sem corrimão">Escada sem corrimão</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let chuveiros_automaticos =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Detectores sujos / pintados" selected> Detectores sujos / pintados</option>' +
    '<option value="Área de atuação prejudicada por obstáculos">Área de atuação prejudicada por obstáculos </option>' +
    '<option value="Materiais como fios e encanamentos amarrados nas tubulações do sistema">Materiais como fios e encanamentos amarrados nas tubulações do sistema</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let spda =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Ausência do sistema (A>1500m² ou H>12m)" selected> Ausência do sistema (A>1500m² ou H>12m)</option>' +
    '<option value="Queda de haste / antenas">Queda de haste / antenas </option>' +
    '<option value="Corrosão em cabos / conexões / hastes">Corrosão em cabos / conexões / hastes</option>' +
    '<option value="Descidas insuficientes (exigência de uma descida a cada 20m de perímetro)">Descidas insuficientes (exigência de uma descida a cada 20m de perímetro)</option>' +
    '<option value="Ausência de luz de topo na haste do SPDA">Ausência de luz de topo na haste do SPDA</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

// area de lazer
let piscina =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Falha da impermeabilização" selected> Falha da impermeabilização</option>' +
    '<option value="Afundamento / trinca / descolamento / desgaste do revestimento / piso">Afundamento / trinca / descolamento / desgaste do revestimento / piso</option>' +
    '<option value="Falha no rejunte">Falha no rejunte</option>' +
    '<option value="Equipamento de apoio / proteção com folga / solto / corrosão / ausente">Equipamento de apoio / proteção com folga / solto / corrosão / ausente</option>' +
    '<option value="Armazenar cloro em local não ventilado">Armazenar cloro em local não ventilado</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let playground =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Falha na estrutura" selected> Falha na estrutura</option>' +
    '<option value="Afrouxamento / rompimento de pinos / porcas / parafusos">Afrouxamento / rompimento de pinos / porcas / parafusos</option>' +
    '<option value="Peças ausentes / dobradas / rompidas / afrouxadas e/ou ganchos gastos / corrosão">Peças ausentes / dobradas / rompidas / afrouxadas e/ou ganchos gastos / corrosão</option>' +
    '<option value="Arestas ou cantos vivos">Equipamento de apoio / proteção com folga / solto / corrosão / ausente</option>' +
    '<option value="Falta de lubrificação / emperramento / movimento anormal">Falta de lubrificação / emperramento / movimento anormal</option>' +
    '<option value="Barra de segurança / corrimão / barreira ausentes, rompidas ou afrouxadas">Barra de segurança / corrimão / barreira ausentes, rompidas ou afrouxadas</option>' +
    '<option value="Piso / degrau quebrado ou sem superfície antiderrapant">Piso / degrau quebrado ou sem superfície antiderrapant</option>' +
    '<option value="Problema de escoamento da água pluvial">Problema de escoamento da água pluvial</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let quadra_esportiva =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Desgaste da pintura / do piso" selected>Desgaste da pintura / do piso</option>' +
    '<option value="Corrosão da estrutura do alambrado de fechamento ou das cestas">Corrosão da estrutura do alambrado de fechamento ou das cestas</option>' +
    '<option value="Furos no piso para encaixe de postes sem tampas">Furos no piso para encaixe de postes sem tampas</option>' +
    '<option value="Piso com falha no caimento">Piso com falha no caimento</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

let brinquedoteca =
    '<select class="custom-select" name="txt_elemento_formulario" id="">' +
    '<option value="Tomadas baixas desprotegidas" selected>Tomadas baixas desprotegidas</option>' +
    '<option value="Quinas vivas em paredes / mobiliários">Quinas vivas em paredes / mobiliários</option>' +
    '<option value="Pisos desprotegidos / com emborrachado danificado">Pisos desprotegidos / com emborrachado danificado</option>' +
    '<option value="Outro">Outro</option>' +
    '</select>';

function teste() {
    let value = select.options[select.selectedIndex].value;

    console.log(value);

    if (value == 'Estruturas') {
        content.innerHTML = estruturas;
    }
    if (value == 'Fundacao') {
        content.innerHTML = fundacao;
    }
    if (value == 'Vedacao') {
        content.innerHTML = vedacao;
    }
    if (value == 'Forro') {
        content.innerHTML = forro;
    }
    if (value == 'Parede') {
        content.innerHTML = parede;
    }

    if (value == 'piso') {
        content.innerHTML = piso;
    }

    if (value == 'Fachada') {
        content.innerHTML = fachada;
    }
    if (value == 'Esquadria') {
        content.innerHTML = esquadria;
    }

    if (value == 'Impermeabilizacao') {
        content.innerHTML = impermeabilizacao;
    }

    if (value == 'Histalacao_hidrossanitaria') {
        content.innerHTML = instalacao_hidrossanitaria;
    }

    if (value == 'Instalacao-gas') {
        content.innerHTML = instalacao_gas;
    }

    if (value == 'Instalacao_eletrica') {
        content.innerHTML = instalacao_eletrica;
    }

    if (value == 'Elevadores') {
        content.innerHTML = elevadores;
    }

    if (value == 'Climatizacao') {
        content.innerHTML = climatizacao;
    }

    if (value == 'Ventilacao_exaustao') {
        content.innerHTML = ventilacao_exaustao_mencanica;
    }

    if (value == 'Motor_eletrico') {
        content.innerHTML = motor_eletrico;
    }

    if (value == 'Bomba_hidraulica') {
        content.innerHTML = bomba_hidraulica;
    }

    if (value == 'COBERTURA') {
        content.innerHTML = cobertura;
    }

    if (value == 'SAIDA_DE_EMERGENCIA') {
        content.innerHTML = saida_emergencia;
    }

    if (value == 'CHUVEIROS_AUTOMATICOS') {
        content.innerHTML = chuveiros_automaticos;
    }

    if (value == 'SPDA') {
        content.innerHTML = spda;
    }

    if (value == 'PISCINA') {
        content.innerHTML = piscina;
    }

    if (value == 'PLAYGROUND') {
        content.innerHTML = playground;
    }

    if (value == 'QUADRA_ESPORTIVA') {
        content.innerHTML = quadra_esportiva;
    }

    if (value == 'BRINQUEDOTECA_E_SALAO_DE_JOGOS') {
        content.innerHTML = brinquedoteca;
    }

}