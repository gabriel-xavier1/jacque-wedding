# Investment Page ACF Mapping

Este documento mapeia os campos editáveis atuais de `invesment.html` para uso no Advanced Custom Fields, com nomes em inglês, campos separados por seção e estrutura compatível com a versão free.

## Naming standard

- Use `snake_case` para todos os campos.
- Use prefixo `investment_` para manter o template organizado.
- Para itens de menu e botões, sempre crie o par `label + url`.
- Para imagens, use um campo por imagem, sem Repeater.

## Free-version rules

- Não usar Options Page, Repeater ou Flexible Content.
- Manter cada item repetido como campo individual.
- Iframes devem usar um campo de URL ou textarea com o embed completo.
- Conteúdo compartilhado pode ficar em uma página global separada, se necessário.

## Suggested section classes

- `investment-header`
- `investment-hero`
- `investment-intro`
- `investment-scrolling-images`
- `investment-video-intro`
- `investment-service-one`
- `investment-service-two`
- `investment-service-three`
- `investment-service-three-b`
- `investment-packages`
- `investment-freebie`
- `investment-portfolio`
- `investment-testimonials`
- `investment-faq`
- `investment-contact-cta`
- `investment-footer`
- `investment-popout-menu`
- `investment-popup`

## Section order

1. Header / mobile navigation
2. Hero
3. Intro
4. Scrolling images
5. Video intro
6. Service block 1
7. Service block 3b
8. Service block 2
9. Service block 3
10. Packages
11. Freebie
12. Portfolio
13. Testimonials
14. FAQ
15. Contact CTA
16. Footer
17. Pop-out menu
18. Pop-up

## Global editable content

Use this only for values shared by multiple templates.

| ACF field name | Type | Description |
|---|---|---|
| `global_site_logo` | image | Shared logo used across pages |
| `global_instagram_url` | url | Shared Instagram link |
| `global_whatsapp_url` | url | Shared WhatsApp link |
| `global_menu_home_label` | text | Shared Home label |
| `global_menu_moments_label` | text | Shared Moments label |
| `global_menu_style_label` | text | Shared My Style label |
| `global_menu_video_label` | text | Shared Video label |
| `global_menu_pricing_label` | text | Shared Pricing label |
| `global_menu_faq_label` | text | Shared FAQ label |

## Header / navigation

Current structure: top brand/logo area plus a custom menu with six links and a CTA button.

| ACF field name | Type | Description | Current role |
|---|---|---|---|
| `investment_header_logo` | image | Main logo shown in the header | Header brand mark |
| `investment_nav_home_label` | text | Label for the first nav item | `HOME` → `#hero` |
| `investment_nav_home_url` | url | URL or anchor for Home | Goes to the hero section |
| `investment_nav_moments_label` | text | Label for the second nav item | `MOMENTS` → `#collage-intro` |
| `investment_nav_moments_url` | url | URL or anchor for Moments | Links to the moments/intro area |
| `investment_nav_style_label` | text | Label for the third nav item | `MY STYLE` → `#intro-custom` |
| `investment_nav_style_url` | url | URL or anchor for My Style | Links to the style/story area |
| `investment_nav_video_label` | text | Label for the fourth nav item | `VIDEO` → `#video-intro` |
| `investment_nav_video_url` | url | URL or anchor for Video | Links to the video section |
| `investment_nav_pricing_label` | text | Label for the fifth nav item | `PRICING` → `#service-1` |
| `investment_nav_pricing_url` | url | URL or anchor for Pricing | Links to packages/pricing |
| `investment_nav_faq_label` | text | Label for the sixth nav item | `FAQ` → `#faq-custom` |
| `investment_nav_faq_url` | url | URL or anchor for FAQ | Links to the FAQ section |
| `investment_nav_button_text` | text | Header CTA button text | Small action button in the header |
| `investment_nav_button_url` | url | Header CTA button link | Button destination |

## Hero

Current structure: full-width hero image with the headline "HOW MUCH WILL IT COST?" and CTA.

| ACF field name | Type | Description |
|---|---|---|
| `investment_hero_background_image` | image | Background image used in the hero |
| `investment_hero_background_alt` | text | Alt text for the hero background image |
| `investment_hero_title_line_1` | text | First line of the hero headline: `HOW MUCH WILL IT COST?` |
| `investment_hero_title_line_2` | text | Optional second line if the layout needs it |
| `investment_hero_text` | textarea | Supporting hero copy below the title |
| `investment_hero_button_text` | text | Hero CTA button text |
| `investment_hero_button_url` | url | Hero CTA button URL |

## Intro

Current structure: intro block with the current copy about remembering the wedding day, emotions and small moments.

| ACF field name | Type | Description |
|---|---|---|
| `investment_intro_eyebrow` | text | Small lead-in line above the main text |
| `investment_intro_heading` | text | Main intro heading |
| `investment_intro_text_1` | textarea | Current intro copy: `Imagine looking back on your images, feeling like you're instantly transported back to that moment on your wedding day.` |
| `investment_intro_text_2` | textarea | Current intro copy: `Those are the photos I'd want from my wedding day, that's for sure!` |
| `investment_intro_text_3` | textarea | Current intro copy: `Your wedding day happens so quickly...` plus the supporting paragraph about grandma, guests and barefoot dancing |
| `investment_intro_button_text` | text | Intro CTA button text |
| `investment_intro_button_url` | url | Intro CTA button URL |

## Scrolling images

Current structure: decorative/scenic image strip used as visual filler between sections.

| ACF field name | Type | Description |
|---|---|---|
| `investment_scrolling_image_1` | image | First moving image |
| `investment_scrolling_image_2` | image | Second moving image |
| `investment_scrolling_image_3` | image | Third moving image |
| `investment_scrolling_image_4` | image | Fourth moving image |
| `investment_scrolling_image_5` | image | Fifth moving image |

## Video intro

Current structure: a video section with text on one side and a YouTube iframe on the other.

| ACF field name | Type | Description |
|---|---|---|
| `investment_video_intro_heading` | text | Heading for the video section |
| `investment_video_intro_text` | textarea | Copy beside the video |
| `investment_video_iframe_url` | url | YouTube embed URL |
| `investment_video_iframe_code` | textarea | Optional full iframe embed code |
| `investment_video_fallback_text` | textarea | Text shown if the embed is unavailable |

## Service block 1

Current structure: large editorial/service block with image, heading, description, highlights and button.

| ACF field name | Type | Description |
|---|---|---|
| `investment_service_1_image` | image | Main image for the section |
| `investment_service_1_heading` | text | Section heading |
| `investment_service_1_text` | textarea | Main descriptive copy |
| `investment_service_1_point_1` | text | First supporting line |
| `investment_service_1_point_2` | text | Second supporting line |
| `investment_service_1_point_3` | text | Third supporting line |
| `investment_service_1_button_text` | text | Section button label |
| `investment_service_1_button_url` | url | Section button URL |

## Service block 3b

Current structure: second service layout variant with the same content style but different visual arrangement.

| ACF field name | Type | Description |
|---|---|---|
| `investment_service_3b_image` | image | Main image for the section |
| `investment_service_3b_heading` | text | Section heading |
| `investment_service_3b_text` | textarea | Main descriptive copy |
| `investment_service_3b_point_1` | text | First supporting line |
| `investment_service_3b_point_2` | text | Second supporting line |
| `investment_service_3b_point_3` | text | Third supporting line |
| `investment_service_3b_button_text` | text | Section button label |
| `investment_service_3b_button_url` | url | Section button URL |

## Service block 2

Current structure: another content block with image, title, longer text and a CTA.

| ACF field name | Type | Description |
|---|---|---|
| `investment_service_2_image` | image | Main image for the section |
| `investment_service_2_heading` | text | Section heading |
| `investment_service_2_text` | textarea | Main descriptive copy |
| `investment_service_2_point_1` | text | First supporting line |
| `investment_service_2_point_2` | text | Second supporting line |
| `investment_service_2_point_3` | text | Third supporting line |
| `investment_service_2_button_text` | text | Section button label |
| `investment_service_2_button_url` | url | Section button URL |

## Service block 3

Current structure: background-image section with text overlay and CTA.

| ACF field name | Type | Description |
|---|---|---|
| `investment_service_3_background_image` | image | Background image used in the section |
| `investment_service_3_heading` | text | Section heading |
| `investment_service_3_text` | textarea | Main section copy |
| `investment_service_3_button_text` | text | Button text |
| `investment_service_3_button_url` | url | Button URL |

## Packages

Current structure: three package blocks with the current names Lover, Mine and Ours.

| ACF field name | Type | Description |
|---|---|---|
| `investment_packages_heading` | text | Section heading: `HOW MUCH WILL IT COST?` |
| `investment_packages_subheading` | text | Small intro line if needed |
| `investment_package_1_name` | text | Package 1 title: `Lover` |
| `investment_package_1_price` | text | Package 1 price |
| `investment_package_1_text` | textarea | Package 1 details, including `up to 10 hours coverage`, two photographers, same day previews, memory box, online gallery and consultation meetings |
| `investment_package_1_button_text` | text | Package 1 button label |
| `investment_package_1_button_url` | url | Package 1 button URL |
| `investment_package_2_name` | text | Package 2 title: `Mine` |
| `investment_package_2_price` | text | Package 2 price |
| `investment_package_2_text` | textarea | Package 2 details, including `up to 5 hours coverage`, one photographer, same day previews, online gallery and consultation meetings |
| `investment_package_2_button_text` | text | Package 2 button label |
| `investment_package_2_button_url` | url | Package 2 button URL |
| `investment_package_3_name` | text | Package 3 title: `Ours` |
| `investment_package_3_price` | text | Package 3 price |
| `investment_package_3_text` | textarea | Package 3 details, including the hourly package structure and the same gallery/meeting features |
| `investment_package_3_button_text` | text | Package 3 button label |
| `investment_package_3_button_url` | url | Package 3 button URL |

## Freebie

Current structure: a promotional block with image, short text and a CTA that opens the popup.

| ACF field name | Type | Description |
|---|---|---|
| `investment_freebie_image` | image | Freebie image |
| `investment_freebie_heading` | text | Freebie heading |
| `investment_freebie_text` | textarea | Freebie description |
| `investment_freebie_button_text` | text | Freebie button label |
| `investment_freebie_button_url` | url | Freebie destination or popup trigger URL |

## Portfolio

Current structure: sliding gallery/portfolio area with cards and CTA.

| ACF field name | Type | Description |
|---|---|---|
| `investment_portfolio_heading` | text | Portfolio heading |
| `investment_portfolio_text` | textarea | Portfolio intro copy |
| `investment_portfolio_button_text` | text | Portfolio CTA label |
| `investment_portfolio_button_url` | url | Portfolio CTA URL |
| `investment_portfolio_image_1` | image | Portfolio image 1 |
| `investment_portfolio_image_2` | image | Portfolio image 2 |
| `investment_portfolio_image_3` | image | Portfolio image 3 |
| `investment_portfolio_image_4` | image | Portfolio image 4 |
| `investment_portfolio_image_5` | image | Portfolio image 5 |

## Testimonials

Current structure: testimonial carousel with three visible slides/cards.

| ACF field name | Type | Description |
|---|---|---|
| `investment_testimonials_heading` | text | Section heading |
| `investment_testimonial_1_quote` | textarea | Testimonial 1 quote |
| `investment_testimonial_1_name` | text | Testimonial 1 name |
| `investment_testimonial_1_role` | text | Testimonial 1 role or location |
| `investment_testimonial_1_image` | image | Testimonial 1 image |
| `investment_testimonial_2_quote` | textarea | Testimonial 2 quote |
| `investment_testimonial_2_name` | text | Testimonial 2 name |
| `investment_testimonial_2_role` | text | Testimonial 2 role or location |
| `investment_testimonial_2_image` | image | Testimonial 2 image |
| `investment_testimonial_3_quote` | textarea | Testimonial 3 quote |
| `investment_testimonial_3_name` | text | Testimonial 3 name |
| `investment_testimonial_3_role` | text | Testimonial 3 role or location |
| `investment_testimonial_3_image` | image | Testimonial 3 image |

## FAQ

Current structure: long FAQ area with four current questions/answers and a newsletter popup trigger in the section state.

| ACF field name | Type | Description |
|---|---|---|
| `investment_faq_heading` | text | FAQ heading: `FAQ` / `Frequently asked questions` |
| `investment_faq_text` | textarea | Intro text for the FAQ section |
| `investment_faq_question_1` | text | `Which area do you cover?` |
| `investment_faq_answer_1` | textarea | Current answer about Derby, Scotland, England and travel costs |
| `investment_faq_question_2` | text | `Do you have backup equipment?` |
| `investment_faq_answer_2` | textarea | Current answer about carrying backup equipment at all times |
| `investment_faq_question_3` | text | `What is your payment policy?` |
| `investment_faq_answer_3` | textarea | Current answer about 10% deposit and balance a week before the wedding |
| `investment_faq_question_4` | text | `Can we meet in person or have a consultation before booking?` |
| `investment_faq_answer_4` | textarea | Current answer about having at least one call or coffee near the wedding day |
| `investment_faq_question_5` | text | `How soon will we receive our photos?` |
| `investment_faq_answer_5` | textarea | Current answer about up to 4 weeks during busy periods |
| `investment_faq_popup_enabled` | true/false | Enables the newsletter popup trigger |

## Contact CTA

Current structure: final contact section with background image, short text and one button.

| ACF field name | Type | Description |
|---|---|---|
| `investment_cta_background_image` | image | Background image for the CTA |
| `investment_cta_background_alt` | text | Alt text for the background image |
| `investment_cta_heading` | text | Main CTA heading |
| `investment_cta_text` | textarea | CTA paragraph |
| `investment_cta_button_text` | text | CTA button label |
| `investment_cta_button_url` | url | CTA button URL |

## Footer

Current structure: footer copy, social links and footer bar.

| ACF field name | Type | Description |
|---|---|---|
| `investment_footer_logo` | image | Footer logo |
| `investment_footer_text_1` | textarea | Footer description line 1 |
| `investment_footer_text_2` | textarea | Footer description line 2 |
| `investment_footer_email` | text | Footer email |
| `investment_footer_phone` | text | Footer phone |
| `investment_footer_instagram_url` | url | Footer Instagram link |
| `investment_footer_facebook_url` | url | Footer Facebook link if used |

## Pop-out menu

Current structure: mobile overlay menu with links, image and close action.

| ACF field name | Type | Description |
|---|---|---|
| `investment_popout_heading` | text | Pop-out menu heading |
| `investment_popout_text` | textarea | Pop-out menu copy |
| `investment_popout_close_label` | text | Close label or text |
| `investment_popout_image` | image | Menu image |
| `investment_popout_home_label` | text | Menu label for Home (`HOME`) |
| `investment_popout_home_url` | url | Menu link for Home (`#hero`) |
| `investment_popout_moments_label` | text | Menu label for Moments (`MOMENTS`) |
| `investment_popout_moments_url` | url | Menu link for Moments (`#collage-intro`) |
| `investment_popout_style_label` | text | Menu label for My Style (`MY STYLE`) |
| `investment_popout_style_url` | url | Menu link for My Style (`#intro-custom`) |
| `investment_popout_video_label` | text | Menu label for Video (`VIDEO`) |
| `investment_popout_video_url` | url | Menu link for Video (`#video-intro`) |
| `investment_popout_pricing_label` | text | Menu label for Pricing (`PRICING`) |
| `investment_popout_pricing_url` | url | Menu link for Pricing (`#service-1`) |
| `investment_popout_faq_label` | text | Menu label for FAQ (`FAQ`) |
| `investment_popout_faq_url` | url | Menu link for FAQ (`#faq-custom`) |

## Pop-up

Current structure: hidden modal used by the freebie/newsletter trigger and optional promotional content.

| ACF field name | Type | Description |
|---|---|---|
| `investment_popup_enabled` | true/false | Turns the popup on or off |
| `investment_popup_heading` | text | Popup heading |
| `investment_popup_text` | textarea | Popup copy |
| `investment_popup_button_text` | text | Popup button label |
| `investment_popup_button_url` | url | Popup button URL |
| `investment_popup_image` | image | Popup image |
| `investment_popup_close_label` | text | Close label or text |

## Implementation notes

- Use `get_field()` in the WordPress template to replace static HTML.
- Keep the nav fields in label + URL pairs so each item remains editable.
- Keep package, testimonial and FAQ items as individual fields because the free version does not support Repeater.
- Use the iframe URL field for the video block and the fallback text for graceful degradation.
- If the popup is not ready, keep `investment_popup_enabled` off and leave the trigger inactive.
