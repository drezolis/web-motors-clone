<?php
$veiculos = [
    [
        'marca' => 'Ford',
        'modelo' => 'Mustang',
        'ano_lancamento' => 2020,
        'ano_fabricacao' => 2019,
        'versao' => 'GT',
        'cor' => 'Azul',
        'blindado' => 'N', 
        'km' => "5.000",
        'descricao_inicial' => 'Carro esportivo rápido e elegante',
        'descricao_completa' => 'Um carro de alto desempenho, perfeito para quem gosta de velocidade e estilo.',
        'preco' => "150.000", 
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('mustang') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Chevrolet',
        'modelo' => 'Camaro',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'SS',
        'cor' => 'Vermelho',
        'blindado' => 'S',
        'km' => "2.000",
        'descricao_inicial' => 'O Camaro é um carro potente e de destaque.',
        'descricao_completa' => 'Um carro esportivo com muito estilo, ideal para quem gosta de chamar atenção.',
        'preco' => "250.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('camaro') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Tesla',
        'modelo' => 'Model S',
        'ano_lancamento' => 2022,
        'ano_fabricacao' => 2021,
        'versao' => 'Plaid',
        'cor' => 'Branco',
        'blindado' => 'N',
        'km' => 300,
        'descricao_inicial' => 'Carro elétrico de alto desempenho.',
        'descricao_completa' => 'Um dos carros elétricos mais rápidos do mercado, com tecnologia de ponta.',
        'preco' => "500.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('model s') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Chevrolet',
        'modelo' => 'Corvette',
        'ano_lancamento' => 2020,
        'ano_fabricacao' => 2019,
        'versao' => 'Z06',
        'cor' => 'Amarelo',
        'blindado' => 'N',
        'km' => "1.000",
        'descricao_inicial' => 'Corvette esportivo e elegante.',
        'descricao_completa' => 'Um carro esportivo com alto desempenho e estilo.',
        'preco' => "180.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('corvette') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'BMW',
        'modelo' => 'X5',
        'ano_lancamento' => 2019,
        'ano_fabricacao' => 2018,
        'versao' => 'xDrive40i',
        'cor' => 'Preto',
        'blindado' => 'S',
        'km' => "8.000",
        'descricao_inicial' => 'SUV de luxo e segurança.', 
        'descricao_completa' => 'Um SUV de luxo com blindagem para proteção adicional.',
        'preco' => "280.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('x5') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Land Rover',
        'modelo' => 'Range Rover',
        'ano_lancamento' => 2018,
        'ano_fabricacao' => 2017,
        'versao' => 'Vogue SE',
        'cor' => 'Verde',
        'blindado' => 'N',
        'km' => "10.000",
        'descricao_inicial' => 'SUV de luxo e tradição.',
        'descricao_completa' => 'Um SUV que oferece conforto e luxo com estilo.',
        'preco' => "300.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('range rover') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Ferrari',
        'modelo' => '488',
        'ano_lancamento' => 2019,
        'ano_fabricacao' => 2018,
        'versao' => 'GTB',
        'cor' => 'Vermelho',
        'blindado' => 'N',
        'km' => "5.000",
        'descricao_inicial' => 'Esportivo de alto desempenho',
        'descricao_completa' => 'Ferrari 488 GTB, esportivo com grande potência.',
        'preco' => "380.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('488') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Lamborghini',
        'modelo' => 'Huracan',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'LP 610-4',
        'cor' => 'Laranja',
        'blindado' => 'N',
        'km' => "1.000",
        'descricao_inicial' => 'Lamborghini esportivo',
        'descricao_completa' => 'Lamborghini Huracan, um esportivo icônico.',
        'preco' => "450.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('huracan') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Porsche',
        'modelo' => '911 Carrera',
        'ano_lancamento' => 2019,
        'ano_fabricacao' => 2018,
        'versao' => '4S',
        'cor' => 'Prata',
        'blindado' => 'N',
        'km' => "15.000",
        'descricao_inicial' => 'Clássico esportivo',
        'descricao_completa' => 'Porsche 911 Carrera, um clássico atemporal.',
        'preco' => "360.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('911 carrera') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Chevrolet',
        'modelo' => 'Onix',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'LTZ',
        'cor' => 'Prata',
        'blindado' => 'N',
        'km' => "10.000",
        'descricao_inicial' => 'Compacto com ótimo custo-benefício',
        'descricao_completa' => 'Chevrolet Onix, compacto e econômico.',
        'preco' => "60.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('onix') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Hyundai',
        'modelo' => 'HB20',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'Evolution',
        'cor' => 'Preto',
        'blindado' => 'N',
        'km' => "15.000",
        'descricao_inicial' => 'Hyundai HB20, moderno e eficiente.',
        'descricao_completa' => 'Versão Evolution, com recursos de segurança avançados.',
        'preco' => "70.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('hb20') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Fiat',
        'modelo' => 'Argo',
        'ano_lancamento' => 2020,
        'ano_fabricacao' => 2019,
        'versao' => 'Drive',
        'cor' => 'Vermelho',
        'blindado' => 'N',
        'km' => "20.000",
        'descricao_inicial' => 'Fiat Argo, compacto e confortável.',
        'descricao_completa' => 'Fiat Argo Drive, com bom espaço interno e conforto.',
        'preco' => "65.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('argo') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Volkswagen',
        'modelo' => 'Polo',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'Highline',
        'cor' => 'Azul',
        'blindado' => 'N',
        'km' => "12.000",
        'descricao_inicial' => 'Volkswagen Polo, compacto com bom desempenho.',
        'descricao_completa' => 'Versão Highline, com ótima dirigibilidade e recursos modernos.',
        'preco' => "80.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('polo') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Toyota',
        'modelo' => 'Corolla',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'XEi',
        'cor' => 'Branco',
        'blindado' => 'N',
        'km' => "8.000",
        'descricao_inicial' => 'Toyota Corolla, o clássico sedã.',
        'descricao_completa' => 'Versão XEi, com excelente confiabilidade e eficiência.',
        'preco' => "95.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('corolla') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Honda',
        'modelo' => 'Civic',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'Sport',
        'cor' => 'Cinza',
        'blindado' => 'N',
        'km' => "9.000",
        'descricao_inicial' => 'Honda Civic, desportivo e estiloso.',
        'descricao_completa' => 'Versão Sport, com design moderno e ótimo desempenho.',
        'preco' => "92.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/' . strtolower('civic') . '.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Ford',
        'modelo' => 'Ka',
        'ano_lancamento' => 2022,
        'ano_fabricacao' => 2021,
        'versao' => 'SE 1.0',
        'cor' => 'Vermelho',
        'blindado' => 'N',
        'km' => "15.000",
        'descricao_inicial' => 'Carro compacto e econômico.',
        'descricao_completa' => 'Ford Ka, excelente para uso diário e viagens curtas.',
        'preco' => "52.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/ka.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Honda',
        'modelo' => 'Fit',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'LX 1.5',
        'cor' => 'Azul',
        'blindado' => 'N',
        'km' => "20.000",
        'descricao_inicial' => 'Espaçoso e versátil.',
        'descricao_completa' => 'Honda Fit, ideal para famílias e transporte de carga leve.',
        'preco' => "62.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/fit.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Renault',
        'modelo' => 'Sandero',
        'ano_lancamento' => 2021,
        'ano_fabricacao' => 2020,
        'versao' => 'Expression 1.0',
        'cor' => 'Prata',
        'blindado' => 'N',
        'km' => "18.000",
        'descricao_inicial' => 'Econômico e espaçoso.',
        'descricao_completa' => 'Renault Sandero, ideal para uso urbano.',
        'preco' => "55.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/sandero.jpg',
        'id_usuario' => 8
    ],
    [
        'marca' => 'Fiat',
        'modelo' => 'Uno',
        'ano_lancamento' => 1995,
        'ano_fabricacao' => 1995,
        'versao' => 'Com Escada',
        'cor' => 'Branca',
        'blindado' => 'N',
        'km' => "150.000",
        'descricao_inicial' => 'Uno com escada no teto',
        'descricao_completa' => 'Fiat Uno com escada no teto, ótimo para trabalho',
        'preco' => "15.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/uno.jpg',
        'id_usuario' => 9,
    ],
    [
        'marca' => 'Volkswagen',
        'modelo' => 'Fusca',
        'ano_lancamento' => 1980,
        'ano_fabricacao' => 1980,
        'versao' => 'Clássico',
        'cor' => 'Azul',
        'blindado' => 'N',
        'km' => "200.000",
        'descricao_inicial' => 'Fusca azul clássico',
        'descricao_completa' => 'Volkswagen Fusca azul, em bom estado',
        'preco' => "10.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/fusca.jpg',
        'id_usuario' => 9,
    ],
    [
        'marca' => 'Chevrolet',
        'modelo' => 'Opala',
        'ano_lancamento' => 1978,
        'ano_fabricacao' => 1978,
        'versao' => 'SS',
        'cor' => 'Preta',
        'blindado' => 'N',
        'km' => "180.000",
        'descricao_inicial' => 'Opala preto SS',
        'descricao_completa' => 'Chevrolet Opala preto SS, clássico',
        'preco' => "35.000",
        'anuncio_liberado' => 'N',
        'imagem_anuncio' => '../imgs/anuncio/opala.jpg',
        'id_usuario' => 9,
    ],
];

?>