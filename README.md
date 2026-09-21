# Algoritmo-Animais-PHP
Este repositório tem como objetivo aplicar conceitos e fundamentos de PHP para construir um script que seja capaz de identificar  qual animal foi escolhido a partir de uma sequência  de pergutas e respostas.

## Estrutura

```
Algoritmo-Animais-PHP/
├── src/
│   └── questao1.php
└── docker-compose.yml
```

## Como executar

Com Docker (PHP 8.3):

```bash
docker compose run --rm php php questao1.php
```

Ou, com o PHP instalado localmente, entre na pasta `src` e execute:

```bash
php questao1.php
```

O script faz perguntas pelo terminal (respostas: `sim` ou `nao`) até identificar o animal.
Animais possíveis: leão, cavalo, homem, macaco, morcego, baleia, avestruz, pinguim, pato, águia, tartaruga, crocodilo e cobra.
