# Processo de uso do ACF

Este documento explica, de forma prática, como organizar e usar o Advanced Custom Fields (ACF) neste projeto.

## Resumo rápido

- No **WordPress**, você cria os campos no ACF e edita o conteúdo pelo painel.
- No **código**, o template para de usar texto fixo e passa a buscar os valores com `get_field()`.
- Para esta versão free, o ideal é usar campos simples e organizar por seção.

## O que muda no WordPress

- os textos deixam de ficar presos no HTML
- as imagens passam a ser trocadas no painel
- os botões e links ficam editáveis sem mexer no código
- a logo e o branding podem ficar centralizados em um bloco global

## O que muda no código

- o HTML deixa de ter conteúdo fixo e passa a receber dados do ACF
- cada seção busca seus campos com `get_field()`
- imagens, títulos e botões são renderizados dinamicamente
- o layout continua igual, mas o conteúdo fica mais fácil de manter

## 1. O que o ACF faz

O ACF serve para transformar partes do conteúdo do site em campos editáveis no WordPress. Em vez de alterar o HTML manualmente, você passa a editar textos, imagens, botões e links direto no painel.

## 2. Objetivo no projeto

Neste site, o ACF será usado para:

- editar logo e branding
- alterar textos da home
- trocar imagens principais
- atualizar botões e links
- centralizar dados globais quando fizer sentido

## 3. Estrutura recomendada

Como estamos na versão free, o ideal é manter a estrutura simples e organizada.

### Sugestão de organização

- **Global Settings**: logo, nome da marca, tagline e links gerais
- **Home Page**: campos específicos da página inicial
- **Outras páginas**: seções próprias quando necessário

## 4. Fluxo de trabalho

O processo ideal é este:

1. identificar o conteúdo que pode ser editado
2. separar por seção da página
3. definir nomes em inglês e `snake_case`
4. escolher o tipo correto de campo
5. mapear no template do WordPress
6. testar no painel e revisar o layout

## 5. Tipos de campo mais usados

### `text`
Use para títulos curtos, nomes, subtítulos e labels de botões.

### `textarea`
Use para parágrafos e textos maiores sem formatação complexa.

### `wysiwyg`
Use quando o conteúdo precisar de formatação como negrito, links e quebras de linha.

### `image`
Use para fotos, logo, banners e imagens decorativas.

### `url`
Use para links de botões, menus e chamadas externas.

### `number`
Use para contadores, estatísticas e ordem de exibição.

### `true_false`
Use para mostrar ou esconder uma seção.

### `color picker`
Use para cores de fundo, overlay ou destaque.

## 6. Nomeação dos campos

Para facilitar a manutenção, use nomes em inglês e bem descritivos.

### Exemplo correto

- `home_hero_title_line_1`
- `home_hero_title_line_2`
- `home_hero_cta_label`
- `home_hero_cta_url`

### Regras boas

- usar prefixo por página ou grupo: `home_`, `global_`
- evitar nomes genéricos demais como `title` ou `image`
- manter padrão em todas as seções

## 7. Processo de edição

Quando um campo é criado no ACF, o template precisa buscar esse valor e mostrar no HTML.

### Exemplo simples

```php
<?php echo esc_html(get_field('home_hero_title_line_1')); ?>
```

### Exemplo com imagem

```php
<?php $image = get_field('home_hero_background_image'); ?>
<?php if ($image): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
<?php endif; ?>
```

## 8. Processo para imagem e botão

### Imagem

1. criar o campo `image`
2. selecionar a imagem no painel
3. puxar no template com `get_field()`
4. usar `alt` sempre que possível

### Botão

1. criar um campo de texto para o label
2. criar um campo `url` para o destino
3. renderizar no template com o link correto

## 9. Processo para a versão free

Como a versão free do ACF tem limitações, o melhor caminho é:

- evitar `Repeater`
- evitar `Flexible Content`
- evitar `Options Page`
- usar campos simples e repetição manual quando necessário

### Exemplo prático

Se uma seção tiver 3 depoimentos, você pode criar:

- `testimonial_1_name`
- `testimonial_1_quote`
- `testimonial_2_name`
- `testimonial_2_quote`
- `testimonial_3_name`
- `testimonial_3_quote`

## 10. Quando usar uma página global

Uma página global vale a pena quando o mesmo conteúdo aparece em vários lugares, por exemplo:

- logo principal
- nome da marca
- tagline
- links de redes sociais
- CTA principal

Isso evita duplicação e facilita mudanças futuras.

## 11. Processo recomendado para este site

Para esta home, o ideal é dividir assim:

- **Global**: logo e branding
- **Home**: hero, intro, about, wedding, vídeos, testimonials, stats, galleries, investment, contact form e logo strip

## 12. Vantagens dessa estrutura

- conteúdo fácil de editar
- menos risco de mexer no código
- organização clara por seção
- manutenção mais rápida
- troca de imagens e textos sem abrir o HTML

## 13. Resumo do fluxo

O fluxo final fica assim:

1. mapear o conteúdo
2. criar os campos no ACF
3. ligar os campos ao template
4. testar no WordPress
5. ajustar layout e responsividade

## 14. Próximo passo sugerido

Depois deste guia, o próximo passo pode ser criar:

- a lista final de campos ACF para a home
- o grupo global de branding
- o código PHP para puxar os campos no tema
