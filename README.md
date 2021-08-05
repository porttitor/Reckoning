# Reckoning
Porttitor Reckoning Platform ©

Visão geral
###
# Reckoning [![Build Status](https://travis-ci.org/porttitor/Reckoning.svg?branch=master)](https://travis-ci.org/porttitor/Reckoning)

## Começo rápido

Instale o pacote com pip <br>
`pip install Reckoning`

Importe o módulo principal <br>
`from Reckoning import core`

Se a classe da mensagem desejada já foi definida, basta importá-la.
Caso contrário, você precisará construir as mensagens e classes sozinho, consulte os exemplos para obter mais informações. <br>
`from Reckoning import predefinido`

Construir o analisador <br>
`` `
parser = core.Parser ([
  predefinido.CLS_ACK,
  predefinido.CLS_NAV
])
`` `

Em seguida, você pode usar o analisador para decodificar mensagens de qualquer fluxo de bytes. <br>
`cls_name, msg_name, payload = parser.receive_from (porta)`

O resultado é uma tupla que pode ser descompactada conforme mostrado acima. <br>
As variáveis ​​`cls_name` e` msg_name` são strings, ie. `'NAV'`,`' PVT'`. <br>

A carga útil é a dupla nomeada da mensagem e pode ser acessada como um objeto. Os atributos compartilham os nomes dos campos. <br>
`print (cls_name, msg_name, payload.lat, payload.lng)`

Bitfields também são retornados como duplicatas nomeadas e podem ser acessados ​​da mesma maneira. <br>
`print (payload.flags.channel)`

Blocos repetidos são retornados como uma lista de blocos, os campos dentro de cada bloco também são chamados de tuplas. Todos os blocos repetidos nas mensagens predefinidas são denominados `RB`. <br>
`` `
para i no intervalo (len (payload.RB)):
  imprimir (payload.RB [i] .gnssId, payload.RB [i] .flags.health)
`` `

A melhor maneira de ver quais campos estão disponíveis é onde eles são definidos. No entanto, se você quiser inspecionar em tempo real, você pode `help (payload)` e olhar os atributos, ou usar o método protegido por tupla nomeado `payload._asdict ()` que retornará um dicionário ordenado de todos os atributos .


## Exemplos
Para exemplos completos, consulte o diretório de exemplos.

## TODO's
Quer contribuir? Sinta-se à vontade para enviar problemas ou solicitar solicitações.
Nada neste pacote é muito complicado, por favor, dê um crack e me ajude a melhorar isso.

- Adicionar a capacidade de empacotar mensagens em pacotes para comunicações bidirecionais
- Adicione mais e melhores testes
- Adicionar tipo de campo RU1_3
- Adicionar suporte assíncrono 
