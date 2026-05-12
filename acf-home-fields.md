# ACF Field Map — Home Page
> Todos os campos editáveis da `home-page.html` / `wedding-theme/page-home.php`  
> Nomes de campo em inglês, prontos para criar no Advanced Custom Fields.

---

## 1. HEADER / NAVIGATION

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Logo Image | `header_logo_image` | Image | Logo principal no header (Jacque Prates) | `<img>` dentro de `.nav-logo` e `.sie-header_8` |
| Logo Title Text | `header_logo_title` | Text | Texto "Willow" acima do subtítulo | `.sie-header_yLJYsCWGd_0-text` |
| Logo Subtitle Text | `header_logo_subtitle` | Text | Texto "photography" abaixo do título | `.sie-header_yLJYsCWGd_1-text` |
| Nav Link 1 Label | `nav_link_1_label` | Text | Label do link "Home" | `<a href="#hero">` no `#navbar-custom` |
| Nav Link 2 Label | `nav_link_2_label` | Text | Label do link "About" | `<a href="#about">` |
| Nav Link 3 Label | `nav_link_3_label` | Text | Label do link "Galleries" | `<a href="#manual-posts">` |
| Nav Link 4 Label | `nav_link_4_label` | Text | Label do link "Wedding" | `<a href="#wedding">` |
| Nav Link 5 Label | `nav_link_5_label` | Text | Label do link "Investment" | `<a href="#freebie">` |

---

## 2. HERO SECTION (`#hero` / `.sib-hero`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Hero Background Image | `hero_background_image` | Image | Foto de fundo do hero (desktop e mobile) | CSS `.sib-hero .ss-bg { background-image }` |
| Hero Heading Line 1 | `hero_heading_line_1` | Text | Texto "For The Real" | `.sie-hero_0-text` — `<h1>` |
| Hero Heading Line 2 | `hero_heading_line_2` | Text | Texto "Journey" | `.sie-hero_1-text` — `<h2>` |
| Hero CTA Button Label | `hero_cta_label` | Text | Texto do botão "Let's do it?" | `.elegant-cta-btn > span` |
| Hero CTA Button URL | `hero_cta_url` | URL | Link do botão CTA do hero | `<a href="/journey/">` |
| Hero Decorative Image 1 | `hero_deco_image_1` | Image | Foto decorativa canto inferior esquerdo | `.sie-hero_3` — `data-img="hero_3"` |
| Hero Decorative Image 2 | `hero_deco_image_2` | Image | Foto decorativa canto superior direito | `.sie-hero_4` — `data-img="hero_4"` |
| Hero Decorative Image 3 | `hero_deco_image_3` | Image | Foto decorativa pequena canto inferior direito | `.sie-hero_5` — `data-img="hero_5"` |
| Hero Decorative Image 4 | `hero_deco_image_4` | Image | Foto decorativa canto superior esquerdo | `.sie-hero_6` — `data-img="hero_6"` |

---

## 3. EDITORIAL / INTRO SECTION (`.journey-editorial`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Editorial Eyebrow Text | `editorial_eyebrow` | Text | Texto pequeno acima "First Things First...." | `.journey-editorial__eyebrow` |
| Editorial Main Text | `editorial_closing` | Textarea | Parágrafo principal da intro | `.journey-editorial__closing` |

---

## 4. ABOUT SECTION (`#about` / `.journey-testimonial`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| About Photo | `about_photo` | Image | Foto da Jacque na seção About | `.journey-testimonial__image` — `src` |
| About Heading | `about_heading` | Text | Título "Hi! am Jacque" | `.journey-editorial__breath` dentro do `#about` |
| About Body Text | `about_body_text` | Textarea | Texto biográfico completo da Jacque | `.journey-testimonial__text` dentro do `#about` |

---

## 5. VIDEO SECTION (`.journey-video`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| YouTube Video URL | `video_youtube_url` | URL | URL do vídeo do YouTube | `const youtubeUrl = "..."` no `<script>` |

---

## 6. WEDDING SECTION (`#wedding` / `.journey-testimonial-2`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Wedding Section Heading | `wedding_heading` | Text | Título "Wedding" em itálico | `.journey-testimonial-2__wedding-heading` |
| Wedding Body Text | `wedding_body_text` | Textarea | Texto poético sobre o casamento | `.journey-testimonial-2__text.testimonial-light-text` |
| Wedding CTA Label | `wedding_cta_label` | Text | Texto do botão "The Journey" | `.journey-testimonial-2__cta-link span` |
| Wedding CTA URL | `wedding_cta_url` | URL | Link do botão "The Journey" | `<a href="/journey/">` |
| Wedding Section Photo | `wedding_section_photo` | Image | Foto ao lado do texto da seção Wedding | `.journey-testimonial-2__image` — `src` |

---

## 7. TESTIMONIALS SECTION (`#testimonials` / `.sib-testimonials`)

### Cabeçalho
| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Testimonials Section Title | `testimonials_section_title` | Text | "What the most Amazing People say..." | `.sie-testimonials_0-text` |

### Testimonial 1
| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Testimonial 1 Author | `testimonial_1_author` | Text | Nome "Herni & Graham" | `.sie-testimonials_view-1_0-text` |
| Testimonial 1 Quote | `testimonial_1_quote` | Textarea | Texto do depoimento | `.sie-testimonials_view-1_1-text` |

### Testimonial 2
| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Testimonial 2 Author | `testimonial_2_author` | Text | Nome "Martha & Matt" | `.sie-testimonials_view-1-1_0-text` |
| Testimonial 2 Quote | `testimonial_2_quote` | Textarea | Texto do depoimento | `.sie-testimonials_view-1-1_1-text` |

### Testimonial 3
| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Testimonial 3 Author | `testimonial_3_author` | Text | Nome "Josie Stubbs" | `.sie-testimonials_view-1-2_0-text` |
| Testimonial 3 Quote | `testimonial_3_quote` | Textarea | Texto do depoimento | `.sie-testimonials_view-1-2_1-text` |

---

## 8. STATS SECTION (`.stats-cards`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Stat 1 Value | `stat_1_value` | Number | Número "3" (Working Years) | `.stats-cards__card:nth-child(1) [data-target]` |
| Stat 1 Label | `stat_1_label` | Text | Label "Working Years" | `.stats-cards__card:nth-child(1) .stats-cards__label` |
| Stat 2 Value | `stat_2_value` | Number | Número "322" (Photos Edited) | `.stats-cards__card:nth-child(2) [data-target]` |
| Stat 2 Label | `stat_2_label` | Text | Label "Photos Edited" | `.stats-cards__card:nth-child(2) .stats-cards__label` |
| Stat 3 Value | `stat_3_value` | Number | Número "389" (Weddings) | `.stats-cards__card:nth-child(3) [data-target]` |
| Stat 3 Label | `stat_3_label` | Text | Label "Weddings" | `.stats-cards__card:nth-child(3) .stats-cards__label` |

---

## 9. GALLERIES SECTION (`#manual-posts` / `.sib-index-manual-posts`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Galleries Section Title | `galleries_section_title` | Text | Título "Galleries" | `.sie-manual-posts_2-text` |
| Gallery 1 Image | `gallery_1_image` | Image | Foto da galeria 1 (Steph & Iain) | `.sie-manual-posts_0 .se-img` — `background-image` |
| Gallery 1 Couple Name | `gallery_1_couple_name` | Text | Nome "Steph & Iain" | `.sie-manual-posts_1-text` |
| Gallery 1 URL | `gallery_1_url` | URL | Link da galeria 1 | `<a href="...">` em `.sie-manual-posts_0` |
| Gallery 2 Image | `gallery_2_image` | Image | Foto da galeria 2 (Joe & Sarka) | `.sie-manual-posts_3 .se-img` — `background-image` |
| Gallery 2 Couple Name | `gallery_2_couple_name` | Text | Nome "Joe & Sarka" | `.sie-manual-posts_4-text` |
| Gallery 2 URL | `gallery_2_url` | URL | Link da galeria 2 | `<a href="...">` em `.sie-manual-posts_3` |
| Gallery 3 Image | `gallery_3_image` | Image | Foto da galeria 3 (Mr & Mrs Scobell) | `.sie-manual-posts_5 .se-img` — `background-image` |
| Gallery 3 Couple Name | `gallery_3_couple_name` | Text | Nome "Mr & Mrs Scobell" | `.sie-manual-posts_6-text` |
| Gallery 3 URL | `gallery_3_url` | URL | Link da galeria 3 | `<a href="...">` em `.sie-manual-posts_5` |

---

## 10. INVESTMENT / FREEBIE SECTION (`#freebie` / `.sib-index-freebie`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Investment Section Photo | `investment_photo` | Image | Foto ao lado do texto (Chloe & Louis) | `.sie-freebie_0 .se-img` — `background-image` |
| Investment Heading | `investment_heading` | Text | Título "Investments" em itálico | `.sie-freebie_3-text` |
| Investment Subheading | `investment_subheading` | Text | Subtítulo "How much will it cost?" | `.sie-freebie_4-text` |
| Investment Body Text | `investment_body_text` | Textarea | Texto "Wedding planning is overwhelming..." | `.journey-testimonial-2__text` dentro do `#freebie` |
| Investment CTA Label | `investment_cta_label` | Text | Texto do botão "View Investments" | `#show-contact-form-btn span` |

---

## 11. CONTACT FORM SECTION (`#contact-form`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Contact Form Background Image | `contact_bg_image` | Image | Foto de fundo do formulário (Martha & Matt) | `background: url(...)` no `#contact-form` |
| Contact Form Heading | `contact_form_heading` | Text | Título "Let's do this?" | `<h2>` dentro do `#contact-form` |
| Contact Form Embed URL | `contact_form_embed_url` | URL | URL do iframe do Studio Ninja | `<iframe src="...">` dentro do `#contact-form` |

---

## 12. LOGOS / AWARDS SECTION (`.logos-roll`)

| Campo ACF | Field Name (slug) | Tipo | Descrição | Localização no HTML |
|---|---|---|---|---|
| Logos Strip Desktop | `logos_strip_desktop` | Image | Imagem única com todas as logos (desktop) | `.logos-roll__strip` — `src` |
| Logo Mobile Badge 1 | `logo_mobile_badge_1` | Image | Badge circular 1 (Best of Bridebook) | `.logos-roll__mobile-badges img:nth-child(1)` |
| Logo Mobile Badge 2 | `logo_mobile_badge_2` | Image | Badge circular 2 (Gold Award 2024) | `.logos-roll__mobile-badges img:nth-child(2)` |
| Logo Mobile Finalist | `logo_mobile_finalist` | Image | Wedding Industry Awards portrait | `.logos-roll__mobile-finalist img` |
| Logo Mobile Strip 1 | `logo_mobile_strip_1` | Image | Bride Association logo | `.logos-roll__mobile-strip` — 1ª img |
| Logo Mobile Strip 2 | `logo_mobile_strip_2` | Image | This is Reportage logo | `.logos-roll__mobile-strip` — 2ª img |
| Logo Mobile Strip 3 | `logo_mobile_strip_3` | Image | Inspiration Photographers logo | `.logos-roll__mobile-strip` — 3ª img |
| Logo Mobile Strip 4 | `logo_mobile_strip_4` | Image | To Have & To Hold magazine | `.logos-roll__mobile-strip` — 4ª img |

---

## Resumo por tipo de campo

| Tipo | Quantidade |
|---|---|
| Text | 22 |
| Textarea | 7 |
| Image | 22 |
| URL | 6 |
| Number | 3 |
| **Total** | **60** |

---

> **Nota de implementação:** No `wedding-theme/page-home.php`, substituir cada valor hardcoded pelo `get_field('field_name')` correspondente. Exemplo:
> ```php
> <img src="<?php echo get_field('about_photo')['url']; ?>" alt="..." />
> ```
> Para textos:
> ```php
> <?php echo get_field('about_heading'); ?>
> ```
