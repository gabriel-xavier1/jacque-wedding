# Home Page ACF Mapping

Este documento mapeia os campos editáveis da home page atual para uso no Advanced Custom Fields, com nomes em inglês, organização por seção e propriedades utilizadas.

## Naming standard

- Use `snake_case` for all ACF field names.
- Use English names that are descriptive and easy to locate.
- Keep the same base name for the HTML class and the ACF field when possible.
- Recommended template prefix: `home_`.

### Suggested section classes

- `home-header`
- `home-hero`
- `home-editorial-intro`
- `home-testimonial-about`
- `home-wedding-story`
- `home-testimonials`
- `home-stats`
- `home-galleries`
- `home-investment`
- `home-contact-form`
- `home-logo-strip`

## Global editable content

These values appear across multiple parts of the page and should be centralized in ACF when possible.

| ACF field name | Type | Description | Source / use |
|---|---|---|---|
| `home_site_logo` | image | Main logo used in the custom navbar and header. | Custom nav logo image |
| `home_primary_brand_name` | text | Brand name shown in the logo area. | Header brand label |
| `home_brand_tagline` | text | Small subtitle under the brand name. | Header subtitle |
| `home_primary_cta_label` | text | Main CTA label used in hero and investment sections. | Buttons |
| `home_primary_cta_url` | url | Main CTA destination. | Buttons |
| `home_secondary_cta_label` | text | Secondary CTA label where needed. | Buttons |
| `home_secondary_cta_url` | url | Secondary CTA destination. | Buttons |
| `home_section_eyebrow` | text | Small uppercase or intro line above headings. | Section intro labels |
| `home_section_heading` | text | Section main heading. | H1/H2 titles |
| `home_section_subheading` | text | Supporting heading below the main title. | Subtitle text |
| `home_section_body` | textarea | Paragraph or editorial body copy. | Long text blocks |
| `home_section_image` | image | Primary section image. | Portraits / feature images |
| `home_section_background_image` | image | Background image for full-width sections. | Hero / CTA sections |

## Header / Navigation

Suggested class: `home-header`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_nav_logo` | image | Logo displayed centered in the navbar. | Jacque Prates logo |
| `home_nav_home_label` | text | Link label for Home. | `Home` |
| `home_nav_home_url` | url | Home anchor or page URL. | `#hero` |
| `home_nav_about_label` | text | Link label for About. | `About` |
| `home_nav_about_url` | url | About anchor or page URL. | `#about` |
| `home_nav_galleries_label` | text | Link label for Galleries. | `Galleries` |
| `home_nav_galleries_url` | url | Galleries anchor or page URL. | `#manual-posts` |
| `home_nav_wedding_label` | text | Link label for Wedding. | `Wedding` |
| `home_nav_wedding_url` | url | Wedding anchor or page URL. | `#wedding` |
| `home_nav_investment_label` | text | Link label for Investment. | `Investment` |
| `home_nav_investment_url` | url | Investment anchor or page URL. | `#freebie` |

### Properties used

- `href` for navigation targets.
- `target` for external links when required.
- `alt` for logo accessibility.
- Sticky/fixed positioning.
- Gradient overlay background.

## Hero

Suggested class: `home-hero`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_hero_background_image` | image | Full-width hero background image. | Wedding couple image |
| `home_hero_title_line_1` | text | First line of the hero title. | `For The Real` |
| `home_hero_title_line_2` | text | Second line of the hero title. | `Journey` |
| `home_hero_cta_label` | text | Button label shown in the hero. | `Let's do it?` |
| `home_hero_cta_url` | url | Button destination. | `journey.html` |

### Properties used
- `background-image`
- `background-size: cover`
- `background-position: center`
- `button` label and URL
- Decorative image layers with opacity and transform

## Editorial intro

Suggested class: `home-editorial-intro`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_intro_eyebrow` | text | Small lead-in phrase above the intro. | `First Things First....` |
| `home_intro_body` | textarea | Supporting intro paragraph. | `Documentary wedding photography...` |

### Properties used

- Centered text alignment.
- Heading and paragraph typography.
- Responsive spacing.

## About / Personal story

Suggested class: `home-testimonial-about`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_about_anchor_id` | text | Anchor id for navigation. | `about` |
| `home_about_image` | image | Portrait image of the photographer. | Jacque portrait photo |
| `home_about_greeting` | text | Short greeting heading. | `Hi! am Jacque` |
| `home_about_bio` | wysiwyg | Full bio text block. | Long personal introduction |

### Properties used

- Portrait image with responsive sizing.
- Rich text / line breaks.
- Optional CTA block.

## Wedding story / featured section

Suggested class: `home-wedding-story`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_wedding_heading` | text | Section heading. | `Wedding` |
| `home_wedding_body` | textarea | Story paragraph under the heading. | Wedding storytelling copy |
| `home_wedding_cta_label` | text | CTA label. | `The Journey` |
| `home_wedding_cta_url` | url | CTA destination. | `journey.html` |
| `home_wedding_image` | image | Supporting image on the right. | Wedding attire image |
| `home_wedding_anchor_id` | text | Anchor id used by navbar. | `wedding` |

### Properties used

- Split layout with text and image.
- Button CTA with uppercase styling.
- Responsive stacking on mobile.

## Video embeds

Suggested class: `home-video-section`

This home has 2 video areas in iframe format. Keep them in page order so the editor knows which one appears first and which one appears second.

### Video 1

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_video_1_heading` | text | Main title for the first video block. | `Wedding film` |
| `home_video_1_iframe_url` | url | YouTube or video embed URL for the first video. | YouTube link used in the script |
| `home_video_1_fallback_text` | text | Text shown if the iframe fails to load. | `Wedding film loading` |
| `home_video_1_section_order` | number | Numeric order on the page. | `1` |

### Video 2

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_video_2_heading` | text | Main title for the second video block. | `Wedding film` |
| `home_video_2_iframe_url` | url | YouTube or video embed URL for the second video. | YouTube link used in the script |
| `home_video_2_fallback_text` | text | Text shown if the iframe fails to load. | `Wedding film loading` |
| `home_video_2_section_order` | number | Numeric order on the page. | `2` |

### Properties used

- `iframe` embed URL.
- `title` for accessibility.
- `loading="lazy"` for performance.
- Fallback text when the embed is unavailable.
- Section order number to preserve the page sequence.

## Testimonials

Suggested class: `home-testimonials`

### Section fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_testimonials_heading` | text | Section heading. | `What the most Amazing People say...` |


### Repeater: `home_testimonial_items`

| Sub field name | Type | Description |
|---|---|---|
| `client_name` | text | Couple or client name shown in the card title. |
| `testimonial_quote` | textarea | Full testimonial quote. |


### Current items

- `Herni & Graham`
- `Martha & Matt`
- `Josie Stubbs`

### Properties used

- Slider / carousel behavior.
- Prev/next arrow buttons.
- Auto-rotation timer.
- Fade transition between testimonials.

## Stats cards

Suggested class: `home-stats`

### Repeater: `home_stats_cards`

| Sub field name | Type | Description | Current content |
|---|---|---|---|
| `stat_value` | number | Counter number. | `3`, `322`, `389` |
| `stat_suffix` | text | Optional value suffix. | `k` on photos edited |
| `stat_label` | text | Label under the number. | `Working Years`, `Photos Edited`, `Weddings` |
| `stat_icon` | image or svg | Optional icon for the card. | SVG icons in current markup |

### Properties used

- Animated counters.
- IntersectionObserver trigger.
- Icon-only visual column.

## Galleries / manual posts

Suggested class: `home-galleries`

### Section fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_galleries_heading` | text | Section title. | `Galleries` |
| `home_galleries_source_url` | url | Main external gallery platform. | `https://gallery.jacqueprates.co.uk/` |

### Repeater: `home_gallery_cards`

| Sub field name | Type | Description |
|---|---|---|
| `gallery_image` | image | Card preview image. |
| `gallery_title` | text | Card title / couple names. |
| `gallery_url` | url | Destination link to the full gallery. |
| `gallery_cta_label` | text | CTA text under the title. |
| `gallery_alt_text` | text | Accessible alt text for the image. |

### Current cards

- `Steph & Iain`
- `Joe & Sarka`
- `Mr & Mrs Scobell`

### Properties used

- Linked image cards.
- External target links.
- Hover underline CTA text.

## Investment / pricing intro

Suggested class: `home-investment`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_investment_heading` | text | Main section heading. | `Investments` |
| `home_investment_subheading` | text | Intro question / subtitle. | `How much will it cost?` |
| `home_investment_body` | textarea | Main investment explanation copy. | Planning and limited availability copy |
| `home_investment_button_label` | text | Button label. | `View Investments` |
| `home_investment_button_url` | url | Button destination or action URL. | Contact form trigger or modal action |
| `home_investment_image` | image | Feature image on the left/top. | Wedding image |

### Properties used

- Background and feature image pairing.
- Button reveal action.
- Short editorial paragraph.

## Contact form section

Suggested class: `home-contact-form`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_contact_form_heading` | text | Section heading. | `Let's do this?` |
| `home_contact_form_background_image` | image | Section background image. | `Martha&Matt-948.jpg` |
| `home_contact_form_iframe_url` | url | Embedded form URL. | Studio Ninja iframe URL |
| `home_contact_form_visibility_default` | true_false | Controls whether the section starts visible. | Hidden by default |

### Properties used

- Hidden section toggle.
- Iframe embed.
- Background overlay opacity.
- Button-triggered reveal.

## Logo strip / awards

Suggested class: `home-logo-strip`

### Fields

| ACF field name | Type | Description | Current content |
|---|---|---|---|
| `home_logos_desktop_strip` | image | Desktop logo strip image. | `images/logos/logos-strip.png` |
| `home_logos_mobile_row_1` | image | First mobile logo strip image. | Mobile row 1 |
| `home_logos_mobile_row_2` | image | Second mobile logo strip image. | Mobile row 2 |
| `home_logos_mobile_row_3` | image | Third mobile logo strip image. | Mobile row 3 |
| `home_logos_section_background` | color picker | Section background color. | `#31302b` |

### Properties used

- Marquee-style horizontal strip.
- Mobile fallback image rows.
- Alt text for accessibility.

## Legacy Showit blocks still present in JSON data

These blocks exist in the Showit metadata inside the file, even if the custom HTML currently replaces or hides them.

### `hamburger-menu`


### `pop-out-menu`

| ACF field name | Type | Description |
|---|---|---|
|
| `home_popout_menu_item_1` | text/url | Menu item 1. |
| `home_popout_menu_item_2` | text/url | Menu item 2. |
| `home_popout_menu_item_3` | text/url | Menu item 3. |
| `home_popout_menu_item_4` | text/url | Menu item 4. |
| `home_popout_menu_item_5` | text/url | Menu item 5. |



## Property inventory

Use these property types across the ACF fields above:

- `text` for short labels, headings, names, and URLs when stored as plain string.
- `textarea` for paragraph copy and testimonial text.
- `wysiwyg` for longer editorial copy with line breaks and formatting.
- `image` for all photos, logo assets, and decorative graphics.
- `url` for internal or external link targets.
- `link` if you want label, URL, and target together in one field.
- `repeater` for galleries, testimonials, stats cards, and footer links.
- `color picker` for backgrounds, overlays, and accent colors.
- `number` for counters and stats values.
- `true_false` for show/hide controls.
- `icon` or `svg` for button arrows, menu icons, and decorative symbols.

## Recommended ACF structure

For a clean implementation, split the page into these field groups:

1. `home_header_group`
2. `home_hero_group`
3. `home_intro_group`
4. `home_about_group`
5. `home_wedding_group`
6. `home_testimonials_group`
7. `home_stats_group`
8. `home_galleries_group`
9. `home_investment_group`
10. `home_contact_form_group`
11. `home_logo_strip_group`

## Notes

- The current `home-page.html` mixes Showit metadata with custom HTML/CSS/JS.
- Some legacy Showit elements are still listed in the metadata but are visually replaced by custom sections.
- If you want, the next step can be a ready-to-import ACF field group blueprint in PHP or JSON.