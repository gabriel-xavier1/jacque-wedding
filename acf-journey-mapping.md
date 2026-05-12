# ACF Mapping - Journey Page

## Scope
This document maps the editable content for `journey.html` using ACF free version patterns.

## Free-Version Rules
- Use single fields instead of Repeater/Flexible Content.
- Use a dedicated field for each repeated gallery image or testimonial item.
- Use URL or iframe-code fields for embeds.
- Keep shared branding fields in a separate global page if needed.

## Recommended Field Groups
- `journey_page_content`
- `journey_media`
- `journey_cta`
- `journey_settings`

## Section Order
1. Header / mobile navigation
2. Hero
3. Intro
4. Highlights
5. Gallery 1
6. Gallery 2
7. Gallery 3
8. Testimonials
9. Featured strip
10. Post section
11. Contact CTA
12. Contact form iframe
13. Footer
14. Pop-out menu
15. Pop-up

## Global Fields
| Field name | Type | Purpose |
|---|---|---|
| `global_logo` | image | Main logo used in the header and footer |
| `global_menu_home_label` | text | Home menu label |
| `global_menu_journey_label` | text | Journey menu label |
| `global_menu_investment_label` | text | Investment menu label |
| `global_menu_services_label` | text | Services menu label |
| `global_menu_contact_label` | text | Contact menu label |
| `global_instagram_url` | url | Social link used in shared header/footer areas |
| `global_whatsapp_url` | url | Shared contact link |

## Journey Fields

### Header / Navigation
| Field name | Type | Notes |
|---|---|---|
| `journey_header_logo` | image | Header logo |
| `journey_header_menu_label_1` | text | First menu label |
| `journey_header_menu_label_2` | text | Second menu label |
| `journey_header_menu_label_3` | text | Third menu label |
| `journey_header_menu_label_4` | text | Fourth menu label |
| `journey_header_menu_label_5` | text | Fifth menu label |
| `journey_header_menu_label_6` | text | Sixth menu label |
| `journey_header_button_text` | text | Header button text |
| `journey_header_button_url` | url | Header button link |

### Hero
| Field name | Type | Notes |
|---|---|---|
| `journey_hero_title` | text | Main hero headline |
| `journey_hero_subtitle` | textarea | Supporting line(s) |
| `journey_hero_button_text` | text | Hero button label |
| `journey_hero_button_url` | url | Hero CTA link |
| `journey_hero_background_image` | image | Hero background image |
| `journey_hero_background_alt` | text | Alternative text for the hero image |

### Intro
| Field name | Type | Notes |
|---|---|---|
| `journey_intro_title` | text | Intro headline |
| `journey_intro_text` | textarea | Intro copy |
| `journey_intro_image` | image | Supporting image |
| `journey_intro_image_alt` | text | Image alt text |

### Highlights
| Field name | Type | Notes |
|---|---|---|
| `journey_highlights_title` | text | Section title |
| `journey_highlights_text` | textarea | Section description |
| `journey_highlight_1_title` | text | Highlight 1 title |
| `journey_highlight_1_text` | textarea | Highlight 1 text |
| `journey_highlight_1_image` | image | Highlight 1 image |
| `journey_highlight_2_title` | text | Highlight 2 title |
| `journey_highlight_2_text` | textarea | Highlight 2 text |
| `journey_highlight_2_image` | image | Highlight 2 image |
| `journey_highlight_3_title` | text | Highlight 3 title |
| `journey_highlight_3_text` | textarea | Highlight 3 text |
| `journey_highlight_3_image` | image | Highlight 3 image |

### Galleries
| Field name | Type | Notes |
|---|---|---|
| `journey_gallery_1_title` | text | Gallery 1 title |
| `journey_gallery_1_text` | textarea | Gallery 1 copy |
| `journey_gallery_1_image_1` | image | First gallery image |
| `journey_gallery_1_image_2` | image | Second gallery image |
| `journey_gallery_1_image_3` | image | Third gallery image |
| `journey_gallery_2_title` | text | Gallery 2 title |
| `journey_gallery_2_text` | textarea | Gallery 2 copy |
| `journey_gallery_2_image_1` | image | First gallery image |
| `journey_gallery_2_image_2` | image | Second gallery image |
| `journey_gallery_2_image_3` | image | Third gallery image |
| `journey_gallery_3_title` | text | Gallery 3 title |
| `journey_gallery_3_text` | textarea | Gallery 3 copy |
| `journey_gallery_3_image_1` | image | First gallery image |
| `journey_gallery_3_image_2` | image | Second gallery image |
| `journey_gallery_3_image_3` | image | Third gallery image |

### Testimonials
| Field name | Type | Notes |
|---|---|---|
| `journey_testimonials_title` | text | Testimonials section title |
| `journey_testimonial_1_quote` | textarea | Testimonial 1 quote |
| `journey_testimonial_1_name` | text | Testimonial 1 author |
| `journey_testimonial_1_role` | text | Testimonial 1 role/location |
| `journey_testimonial_1_image` | image | Testimonial 1 image |
| `journey_testimonial_2_quote` | textarea | Testimonial 2 quote |
| `journey_testimonial_2_name` | text | Testimonial 2 author |
| `journey_testimonial_2_role` | text | Testimonial 2 role/location |
| `journey_testimonial_2_image` | image | Testimonial 2 image |
| `journey_testimonial_3_quote` | textarea | Testimonial 3 quote |
| `journey_testimonial_3_name` | text | Testimonial 3 author |
| `journey_testimonial_3_role` | text | Testimonial 3 role/location |
| `journey_testimonial_3_image` | image | Testimonial 3 image |

### Featured Strip
| Field name | Type | Notes |
|---|---|---|
| `journey_featured_text` | text | Small featured label |
| `journey_featured_logo_1` | image | Featured logo 1 |
| `journey_featured_logo_2` | image | Featured logo 2 |
| `journey_featured_logo_3` | image | Featured logo 3 |

### Post Section
| Field name | Type | Notes |
|---|---|---|
| `journey_post_title` | text | Post section title |
| `journey_post_text` | textarea | Post section copy |
| `journey_post_image` | image | Post image |
| `journey_post_button_text` | text | Post CTA label |
| `journey_post_button_url` | url | Post CTA link |

### Contact CTA
| Field name | Type | Notes |
|---|---|---|
| `journey_cta_title` | text | Contact section title |
| `journey_cta_text` | textarea | Contact section copy |
| `journey_cta_button_text` | text | CTA button label |
| `journey_cta_button_url` | url | CTA button link |
| `journey_cta_background_image` | image | Background image for CTA |
| `journey_cta_background_alt` | text | Background image alt text |

### Contact Form Embed
| Field name | Type | Notes |
|---|---|---|
| `journey_contact_form_iframe_url` | url | StudioNinja iframe source URL |
| `journey_contact_form_embed_code` | textarea | Optional full iframe code |
| `journey_contact_form_fallback_text` | textarea | Fallback message if embed fails |

### Footer
| Field name | Type | Notes |
|---|---|---|
| `journey_footer_logo` | image | Footer logo |
| `journey_footer_text` | textarea | Footer description |
| `journey_footer_address` | textarea | Footer address or studio info |
| `journey_footer_email` | text | Footer email |
| `journey_footer_phone` | text | Footer phone |
| `journey_footer_instagram_url` | url | Footer Instagram link |

### Pop-Out Menu
| Field name | Type | Notes |
|---|---|---|
| `journey_popout_title` | text | Pop-out menu title |
| `journey_popout_text` | textarea | Pop-out menu text |
| `journey_popout_button_text` | text | Pop-out button label |
| `journey_popout_button_url` | url | Pop-out button link |

### Pop-Up
| Field name | Type | Notes |
|---|---|---|
| `journey_popup_enabled` | true/false | Enable or disable the popup |
| `journey_popup_title` | text | Popup headline |
| `journey_popup_text` | textarea | Popup copy |
| `journey_popup_button_text` | text | Popup button label |
| `journey_popup_button_url` | url | Popup link |
| `journey_popup_image` | image | Popup image |
| `journey_popup_close_text` | text | Close text or label |

## Implementation Notes
- Keep each gallery image as a separate field because the free version does not include Repeater.
- Replace static text and images in the template with `get_field()` calls.
- Use the contact form iframe field to swap the embed without editing the HTML manually.
- If the pop-up is not needed yet, leave that section inactive until the content is ready.
