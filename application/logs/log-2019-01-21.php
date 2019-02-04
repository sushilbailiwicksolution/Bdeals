<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-21 12:41:22 465415 --> Config Class Initialized
INFO - 2019-01-21 12:41:22 465755 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:22 503902 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:22 507514 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:22 509143 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:22 558077 --> No URI present. Default controller set.
INFO - 2019-01-21 12:41:22 566514 --> Router Class Initialized
INFO - 2019-01-21 12:41:22 600687 --> Output Class Initialized
INFO - 2019-01-21 12:41:22 603682 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:22 635478 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:22 652570 --> Input Class Initialized
INFO - 2019-01-21 12:41:22 653546 --> Language Class Initialized
INFO - 2019-01-21 12:41:22 713624 --> Loader Class Initialized
INFO - 2019-01-21 12:41:22 721564 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:22 743206 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:22 885251 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:23 252922 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:23 614998 --> Controller Class Initialized
INFO - 2019-01-21 18:11:23 628926 --> Parser Class Initialized
INFO - 2019-01-21 18:11:23 629813 --> Helper loaded: html_helper
INFO - 2019-01-21 18:11:23 659090 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-21 18:11:23 678169 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:23 718486 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-21 18:11:23 723891 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-01-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-21 18:11:23 731065 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:23 732089 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-21 18:11:23 790781 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:11:23 810404 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:11:23 813529 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:11:23 951571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:23 971163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 026132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 031248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 034204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 034657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 035372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 036266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 039052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 039472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 040170 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:24 041771 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:24 041938 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:24 042139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 044965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 045361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 046108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 047025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 049916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 050343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 051088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 051980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 054836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 055263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 056001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 056915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 059823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 060239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 060997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 061863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 064815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 065232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 066009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 066863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 069895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 070321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 071083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 071938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 074974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 075395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 076193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 077039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 080085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 080521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 081310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 082185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 085371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 085824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 086648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 087518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 090600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 091027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 091856 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:24 092679 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:24 092833 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:24 093029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 096092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 096543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 097356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 098242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 101335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 101778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 102642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 103529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 106699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 107136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 107984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 108706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 111810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 112236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 113075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 113782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 116871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 117300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 118141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 118866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 120057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 120701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 121309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 121932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 122555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 123142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 123737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 124308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 124973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 125569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 126146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 126730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 127300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 127890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 128487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 129327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 130235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 131057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 131875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 132694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 133503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 134308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 134977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 135890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 136550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 137352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 137995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 138823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 139462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 140264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 140908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 141733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 142378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 143013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 146184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 146640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 147526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 148158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 151350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 151817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 152708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 153356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 156450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 156888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 157766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 158396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 161617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 162067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 162955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 163615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 166723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 167161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 168051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 168710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 171802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 172245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 173141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 176255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 176712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 177572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 178256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 181396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 181863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 182712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 183368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 186496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 186939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 187800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 188476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 191689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 192143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 193003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 193672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 196783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 197223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 198076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 198736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 201833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 202280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 203140 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:24 203931 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-21 18:11:24 216329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 218333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 218791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 222013 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:24 222798 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:11:24 232542 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:24 232673 --> Total execution time: 1.7908
INFO - 2019-01-21 12:41:24 485057 --> Config Class Initialized
INFO - 2019-01-21 12:41:24 485276 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:24 486736 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:24 486821 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:24 487745 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:24 489301 --> No URI present. Default controller set.
INFO - 2019-01-21 12:41:24 489444 --> Router Class Initialized
INFO - 2019-01-21 12:41:24 490997 --> Output Class Initialized
INFO - 2019-01-21 12:41:24 492172 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:24 493331 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:24 493462 --> Input Class Initialized
INFO - 2019-01-21 12:41:24 493885 --> Language Class Initialized
INFO - 2019-01-21 12:41:24 496186 --> Loader Class Initialized
INFO - 2019-01-21 12:41:24 497209 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:24 497766 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:24 504158 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:24 538049 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:24 539659 --> Controller Class Initialized
INFO - 2019-01-21 18:11:24 540533 --> Parser Class Initialized
INFO - 2019-01-21 18:11:24 541659 --> Helper loaded: html_helper
INFO - 2019-01-21 18:11:24 542890 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-21 18:11:24 546641 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:24 561820 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-21 18:11:24 568465 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-01-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-21 18:11:24 569278 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:24 570060 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-21 18:11:24 573438 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:11:24 575557 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:11:24 575735 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:11:24 577903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 578298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 581841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 582623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 585549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 585958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 586680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 587857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 590794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 591209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 591953 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:24 593534 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:24 593704 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:24 593916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 597100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 597573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 598328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 599370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 602705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 603275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 604600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 605693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 610224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 611032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 612215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 613118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 617518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 618134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 619117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 620393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 625797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 626568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 627757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 628773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 634161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 634664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 636534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 637782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 642041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 642755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 643919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 645082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 649568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 650178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 651407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 652534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 656092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 656613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 657464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 658369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 661637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 662081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 662935 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:24 663796 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:24 663954 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:24 664156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 667371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 667836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 668745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 669785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 673003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 673463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 674309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 675235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 678395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 678853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 679722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 680639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 683799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 684241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 685106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 685987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 689204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 689686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 690557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 691339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 692049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 692754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 693538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 694272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 695024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 696264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 696964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 697624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 698267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 698945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 699714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 700472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 701304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 702102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 703051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 704714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 706156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 707591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 708839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 710181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 711246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 712654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 713641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 714956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 715867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 716991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 718028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 718899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 719791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 720660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 721576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 722429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 723336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 724184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 727785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 728240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 729168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 730072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 733338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 733819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 734745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 735614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 738760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 739207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 740123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 741010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 744235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 744723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 745663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 746572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 749772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 750228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 751152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 752005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 755269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 755762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 756700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 759882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 760329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 761202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 762087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 765316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 765811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 766701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 767571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 770709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 771153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 772027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 772947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 776184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 776670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 777551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 778424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 781584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 782033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 782906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 783833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 786981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 787447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 788312 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:24 789233 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-21 18:11:24 792319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 794271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 794740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:24 797971 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:24 798739 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:11:24 808602 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:24 808814 --> Total execution time: 0.3162
INFO - 2019-01-21 12:41:28 707674 --> Config Class Initialized
INFO - 2019-01-21 12:41:28 708030 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:28 710299 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:28 710649 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:28 712179 --> URI Class Initialized
INFO - 2019-01-21 12:41:28 714987 --> Router Class Initialized
INFO - 2019-01-21 12:41:28 717577 --> Output Class Initialized
INFO - 2019-01-21 12:41:28 719494 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:28 721497 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:28 721623 --> Input Class Initialized
INFO - 2019-01-21 12:41:28 722201 --> Language Class Initialized
INFO - 2019-01-21 12:41:28 747832 --> Loader Class Initialized
INFO - 2019-01-21 12:41:28 749355 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:28 750188 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:28 761125 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:28 769809 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:28 771526 --> Controller Class Initialized
INFO - 2019-01-21 18:11:28 772947 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:28 773149 --> Total execution time: 0.0675
INFO - 2019-01-21 12:41:33 982861 --> Config Class Initialized
INFO - 2019-01-21 12:41:33 983272 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:33 985959 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:33 986089 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:33 987746 --> URI Class Initialized
INFO - 2019-01-21 12:41:33 994565 --> Router Class Initialized
INFO - 2019-01-21 12:41:33 997375 --> Output Class Initialized
INFO - 2019-01-21 12:41:34 000024 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:34 002770 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:34 002902 --> Input Class Initialized
INFO - 2019-01-21 12:41:34 003604 --> Language Class Initialized
ERROR - 2019-01-21 12:41:34 005040 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:34 084975 --> Config Class Initialized
INFO - 2019-01-21 12:41:34 085311 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:34 087852 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:34 088054 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:34 089834 --> URI Class Initialized
INFO - 2019-01-21 12:41:34 095598 --> Router Class Initialized
INFO - 2019-01-21 12:41:34 098798 --> Output Class Initialized
INFO - 2019-01-21 12:41:34 101175 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:34 105515 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:34 105770 --> Input Class Initialized
INFO - 2019-01-21 12:41:34 106452 --> Language Class Initialized
ERROR - 2019-01-21 12:41:34 107453 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:34 205147 --> Config Class Initialized
INFO - 2019-01-21 12:41:34 205425 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:34 209115 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:34 209386 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:34 212090 --> URI Class Initialized
INFO - 2019-01-21 12:41:34 218348 --> Router Class Initialized
INFO - 2019-01-21 12:41:34 222771 --> Output Class Initialized
INFO - 2019-01-21 12:41:34 226325 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:34 229517 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:34 229892 --> Input Class Initialized
INFO - 2019-01-21 12:41:36 058201 --> Language Class Initialized
ERROR - 2019-01-21 12:41:36 059953 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:36 094739 --> Config Class Initialized
INFO - 2019-01-21 12:41:36 094928 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:36 096225 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:36 096296 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:36 099507 --> Config Class Initialized
INFO - 2019-01-21 12:41:36 099669 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:36 100940 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:36 101010 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:36 101459 --> Config Class Initialized
INFO - 2019-01-21 12:41:36 101660 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:36 103043 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:36 103113 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:36 104042 --> URI Class Initialized
INFO - 2019-01-21 12:41:36 107211 --> Config Class Initialized
INFO - 2019-01-21 12:41:36 107290 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:36 108484 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:36 108566 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:36 109258 --> URI Class Initialized
INFO - 2019-01-21 12:41:36 111071 --> Router Class Initialized
INFO - 2019-01-21 12:41:36 112133 --> URI Class Initialized
INFO - 2019-01-21 12:41:36 114516 --> Router Class Initialized
INFO - 2019-01-21 12:41:36 115901 --> Output Class Initialized
INFO - 2019-01-21 12:41:36 116570 --> Router Class Initialized
INFO - 2019-01-21 12:41:36 118010 --> Output Class Initialized
INFO - 2019-01-21 12:41:36 119076 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:36 120074 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:36 120143 --> Input Class Initialized
INFO - 2019-01-21 12:41:36 120495 --> Language Class Initialized
ERROR - 2019-01-21 12:41:36 121033 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:36 121869 --> URI Class Initialized
INFO - 2019-01-21 12:41:36 124236 --> Router Class Initialized
INFO - 2019-01-21 12:41:36 125636 --> Output Class Initialized
INFO - 2019-01-21 12:41:36 127451 --> Output Class Initialized
INFO - 2019-01-21 12:41:36 128508 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:36 129515 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:36 129586 --> Input Class Initialized
INFO - 2019-01-21 12:41:36 129894 --> Language Class Initialized
ERROR - 2019-01-21 12:41:36 130392 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:36 133341 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:36 134336 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:36 134407 --> Input Class Initialized
INFO - 2019-01-21 12:41:36 134737 --> Language Class Initialized
ERROR - 2019-01-21 12:41:36 135241 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:36 136424 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:36 137440 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:36 137516 --> Input Class Initialized
INFO - 2019-01-21 12:41:36 137835 --> Language Class Initialized
ERROR - 2019-01-21 12:41:36 138341 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:40 300035 --> Config Class Initialized
INFO - 2019-01-21 12:41:40 300194 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:40 302463 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:40 302594 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:40 303885 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:40 306875 --> No URI present. Default controller set.
INFO - 2019-01-21 12:41:40 307053 --> Router Class Initialized
INFO - 2019-01-21 12:41:40 311129 --> Output Class Initialized
INFO - 2019-01-21 12:41:40 313172 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:40 315077 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:40 315210 --> Input Class Initialized
INFO - 2019-01-21 12:41:40 315817 --> Language Class Initialized
INFO - 2019-01-21 12:41:40 319739 --> Loader Class Initialized
INFO - 2019-01-21 12:41:40 321394 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:40 322246 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:40 332684 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:40 341367 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:40 342824 --> Controller Class Initialized
INFO - 2019-01-21 18:11:40 343585 --> Parser Class Initialized
INFO - 2019-01-21 18:11:40 344698 --> Helper loaded: html_helper
INFO - 2019-01-21 18:11:40 345854 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-21 18:11:40 349258 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:40 363210 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-21 18:11:40 369712 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-01-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-21 18:11:40 370558 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:40 371356 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-21 18:11:40 374763 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:11:40 376843 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:11:40 377019 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:11:40 381505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 383311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 394176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 396394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 399972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 400429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 401175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 402199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 405122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 405591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 406311 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:40 408003 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:40 408169 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:40 408375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 411288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 411746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 412693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 413677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 416724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 417165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 417963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 418958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 422055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 422566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 423315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 424309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 427345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 427793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 428606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 429577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 432696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 433128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 433912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 434905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 438050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 438519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 439306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 440294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 443475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 443912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 444716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 445735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 448904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 449361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 450184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 451210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 454463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 454909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 455784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 456779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 459996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 460453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 461297 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:40 462248 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:40 462423 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:40 462645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 465841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 466279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 467128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 468122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 471306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 471780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 472645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 473623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 476881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 477324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 478209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 479190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 482419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 482878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 483741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 484740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 487936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 488432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 489285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 490246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 491362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 492295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 493235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 494179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 495094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 495980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 496897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 497786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 498658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 499586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 500468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 501369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 502247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 503371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 504458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 505795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 506748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 508131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 509044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 510427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 511848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 513254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 514292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 515373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 516350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 517201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 518045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 518951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 520104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 521719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 522655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 523497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 524462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 525321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 528815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 529263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 530172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 531054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 534307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 534786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 535702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 536586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 539815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 540256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 541235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 542117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 545335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 545805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 546722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 547570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 550785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 551235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 552145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 552978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 556133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 556607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 557513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 560688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 561122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 561986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 562858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 566044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 566513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 567358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 568234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 571366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 571856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 572732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 573653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 576922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 577378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 578242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 579103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 582243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 582716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 583580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 584414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 587644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 588099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 588973 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:40 589833 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-21 18:11:40 598330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 606801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 607248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:40 610497 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:40 611258 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:11:40 620812 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:40 620963 --> Total execution time: 0.3143
INFO - 2019-01-21 12:41:44 000360 --> Config Class Initialized
INFO - 2019-01-21 12:41:44 000601 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:44 004069 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:44 004261 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:44 006093 --> URI Class Initialized
INFO - 2019-01-21 12:41:44 009510 --> Router Class Initialized
INFO - 2019-01-21 12:41:44 013832 --> Output Class Initialized
INFO - 2019-01-21 12:41:44 016308 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:44 018304 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:44 018429 --> Input Class Initialized
INFO - 2019-01-21 12:41:44 019170 --> Language Class Initialized
INFO - 2019-01-21 12:41:44 028017 --> Loader Class Initialized
INFO - 2019-01-21 12:41:44 029393 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:44 030342 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:44 038654 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:44 043780 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:44 044934 --> Controller Class Initialized
INFO - 2019-01-21 18:11:44 045674 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:44 045838 --> Total execution time: 0.0482
INFO - 2019-01-21 12:41:45 870588 --> Config Class Initialized
INFO - 2019-01-21 12:41:45 870925 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:45 873560 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:45 873684 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:45 876178 --> URI Class Initialized
INFO - 2019-01-21 12:41:45 881006 --> Router Class Initialized
INFO - 2019-01-21 12:41:45 884037 --> Output Class Initialized
INFO - 2019-01-21 12:41:45 886643 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:45 888662 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:45 888786 --> Input Class Initialized
INFO - 2019-01-21 12:41:45 890117 --> Language Class Initialized
ERROR - 2019-01-21 12:41:45 892508 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:45 945056 --> Config Class Initialized
INFO - 2019-01-21 12:41:45 945338 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:45 947377 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:45 947599 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:45 949774 --> URI Class Initialized
INFO - 2019-01-21 12:41:45 957600 --> Router Class Initialized
INFO - 2019-01-21 12:41:45 961447 --> Output Class Initialized
INFO - 2019-01-21 12:41:45 966463 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:45 969333 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:45 969506 --> Input Class Initialized
INFO - 2019-01-21 12:41:45 970310 --> Language Class Initialized
ERROR - 2019-01-21 12:41:45 971781 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:46 370203 --> Config Class Initialized
INFO - 2019-01-21 12:41:46 370302 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:46 371527 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:46 371598 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:46 372317 --> URI Class Initialized
INFO - 2019-01-21 12:41:46 374054 --> Router Class Initialized
INFO - 2019-01-21 12:41:46 375463 --> Output Class Initialized
INFO - 2019-01-21 12:41:46 376498 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:46 377417 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:46 377500 --> Input Class Initialized
INFO - 2019-01-21 12:41:46 377803 --> Language Class Initialized
ERROR - 2019-01-21 12:41:46 378315 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:46 471729 --> Config Class Initialized
INFO - 2019-01-21 12:41:46 471889 --> Hooks Class Initialized
INFO - 2019-01-21 12:41:46 473227 --> Config Class Initialized
INFO - 2019-01-21 12:41:46 473372 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:46 474009 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:46 474134 --> Utf8 Class Initialized
DEBUG - 2019-01-21 12:41:46 475570 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:46 475702 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:46 476989 --> URI Class Initialized
INFO - 2019-01-21 12:41:46 480262 --> Router Class Initialized
INFO - 2019-01-21 12:41:46 482882 --> Output Class Initialized
INFO - 2019-01-21 12:41:46 484838 --> Security Class Initialized
INFO - 2019-01-21 12:41:46 486499 --> URI Class Initialized
INFO - 2019-01-21 12:41:46 489795 --> Router Class Initialized
INFO - 2019-01-21 12:41:46 493463 --> Output Class Initialized
INFO - 2019-01-21 12:41:46 496720 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:46 499265 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:46 499402 --> Input Class Initialized
INFO - 2019-01-21 12:41:46 500025 --> Language Class Initialized
ERROR - 2019-01-21 12:41:46 500993 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:46 510001 --> Config Class Initialized
INFO - 2019-01-21 12:41:46 510144 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:46 511385 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:46 511538 --> Input Class Initialized
INFO - 2019-01-21 12:41:46 512135 --> Language Class Initialized
ERROR - 2019-01-21 12:41:46 513088 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-21 12:41:46 516686 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:46 516819 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:46 518089 --> URI Class Initialized
INFO - 2019-01-21 12:41:46 521251 --> Router Class Initialized
INFO - 2019-01-21 12:41:46 523749 --> Output Class Initialized
INFO - 2019-01-21 12:41:46 525580 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:46 527285 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:46 527422 --> Input Class Initialized
INFO - 2019-01-21 12:41:46 527986 --> Language Class Initialized
ERROR - 2019-01-21 12:41:46 528882 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:46 717211 --> Config Class Initialized
INFO - 2019-01-21 12:41:46 717359 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:46 718759 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:46 718837 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:46 719645 --> URI Class Initialized
INFO - 2019-01-21 12:41:46 721729 --> Router Class Initialized
INFO - 2019-01-21 12:41:46 723575 --> Output Class Initialized
INFO - 2019-01-21 12:41:46 725001 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:46 725972 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:46 726075 --> Input Class Initialized
INFO - 2019-01-21 12:41:46 726454 --> Language Class Initialized
ERROR - 2019-01-21 12:41:46 727061 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:55 799525 --> Config Class Initialized
INFO - 2019-01-21 12:41:55 799767 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:55 801481 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:55 801578 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:55 802736 --> URI Class Initialized
INFO - 2019-01-21 12:41:55 805036 --> Router Class Initialized
INFO - 2019-01-21 12:41:55 806991 --> Output Class Initialized
INFO - 2019-01-21 12:41:55 808393 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:55 809801 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:55 809894 --> Input Class Initialized
INFO - 2019-01-21 12:41:55 810333 --> Language Class Initialized
INFO - 2019-01-21 12:41:55 831849 --> Loader Class Initialized
INFO - 2019-01-21 12:41:55 833616 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:55 834553 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:55 841948 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:55 848217 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:55 849273 --> Controller Class Initialized
INFO - 2019-01-21 12:41:56 551700 --> Config Class Initialized
INFO - 2019-01-21 12:41:56 551873 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:56 553657 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:56 553755 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:56 555224 --> URI Class Initialized
INFO - 2019-01-21 12:41:56 556719 --> Router Class Initialized
INFO - 2019-01-21 12:41:56 558562 --> Output Class Initialized
INFO - 2019-01-21 12:41:56 559801 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:56 560904 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:56 560985 --> Input Class Initialized
INFO - 2019-01-21 12:41:56 561331 --> Language Class Initialized
INFO - 2019-01-21 12:41:56 573926 --> Loader Class Initialized
INFO - 2019-01-21 12:41:56 574847 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:56 575751 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:56 581831 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:56 585460 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:56 586411 --> Controller Class Initialized
DEBUG - 2019-01-21 18:11:56 586534 --> In LOGOUT
INFO - 2019-01-21 12:41:57 570184 --> Config Class Initialized
INFO - 2019-01-21 12:41:57 570298 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:57 571907 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:57 572001 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:57 572900 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:57 574625 --> No URI present. Default controller set.
INFO - 2019-01-21 12:41:57 574719 --> Router Class Initialized
INFO - 2019-01-21 12:41:57 576390 --> Output Class Initialized
INFO - 2019-01-21 12:41:57 577712 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:57 578943 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:57 579036 --> Input Class Initialized
INFO - 2019-01-21 12:41:57 579452 --> Language Class Initialized
INFO - 2019-01-21 12:41:57 581967 --> Loader Class Initialized
INFO - 2019-01-21 12:41:57 583009 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:57 583575 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:57 590151 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:57 594278 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:57 595252 --> Controller Class Initialized
INFO - 2019-01-21 18:11:57 595788 --> Parser Class Initialized
INFO - 2019-01-21 18:11:57 596570 --> Helper loaded: html_helper
INFO - 2019-01-21 18:11:57 597388 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-21 18:11:57 599811 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:57 613725 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-21 18:11:57 618858 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-01-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-21 18:11:57 619743 --> Model Class Initialized
DEBUG - 2019-01-21 18:11:57 620551 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-21 18:11:57 624324 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:11:57 626477 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:11:57 626662 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:11:57 631983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 633991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 646933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 649097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 652918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 653661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 654985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 656235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 661382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 661823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 662373 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:57 663690 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:57 663815 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:57 663968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 666121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 666436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 666990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 667819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 669975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 670294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 670847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 671761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 673928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 674252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 674809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 675586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 677762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 678072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 678637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 679589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 681802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 682117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 682689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 683649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 685872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 686192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 686769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 687623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 689899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 690215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 690797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 691800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 694057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 694372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 694993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 695889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 698229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 698566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 699158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 699985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 702261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 702613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 703211 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:11:57 703911 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
ERROR - 2019-01-21 18:11:57 704026 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 241
DEBUG - 2019-01-21 18:11:57 704191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 706474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 706794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 707391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 708184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 710486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 710808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 711406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 712265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 714596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 714919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 715540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 716293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 718615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 718935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 719582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 720370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 722656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 723011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 723639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 724622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 725282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 725915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 726526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 727123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 727747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 728327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 729911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 730668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 731358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 732083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 733165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 733923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 735042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 735735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 736396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 737133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 737823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 738440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 739070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 739689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 740282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 740900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 741663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 742320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 743148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 743789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 744775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 745377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 746155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 746779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 747565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 748163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 749042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 749862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 752487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 752815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 753489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 754194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 756530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 756861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 757523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 758287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 760623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 760956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 761621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 762362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 764708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 765043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 765718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 766463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 768775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 769107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 769782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 770529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 772815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 773149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 773829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 776135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 776474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 777107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 777976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 780350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 780711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 781347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 782324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 784646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 784981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 785676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 786628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 789028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 789376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 790079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 791038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 793405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 793766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 794408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 795357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 797705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 798049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 798717 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:57 799716 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-21 18:11:57 801815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 803261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 803649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:11:57 806011 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:11:57 806598 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:11:57 814804 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:57 814914 --> Total execution time: 0.2387
INFO - 2019-01-21 12:41:59 848817 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 848993 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:59 869297 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 869461 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 870809 --> URI Class Initialized
INFO - 2019-01-21 12:41:59 888998 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 889319 --> Hooks Class Initialized
INFO - 2019-01-21 12:41:59 892121 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 892433 --> Hooks Class Initialized
INFO - 2019-01-21 12:41:59 894290 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 896750 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 899111 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 899319 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:59 901000 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 901091 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 904336 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 904561 --> Hooks Class Initialized
INFO - 2019-01-21 12:41:59 907882 --> Config Class Initialized
INFO - 2019-01-21 12:41:59 908088 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:41:59 911014 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 911108 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 912235 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:59 914516 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 914612 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 915713 --> URI Class Initialized
INFO - 2019-01-21 12:41:59 919353 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:59 920578 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 920669 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 921070 --> Language Class Initialized
INFO - 2019-01-21 12:41:59 924278 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:59 928292 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 928386 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 929507 --> URI Class Initialized
DEBUG - 2019-01-21 12:41:59 931886 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:41:59 931981 --> Utf8 Class Initialized
INFO - 2019-01-21 12:41:59 933111 --> URI Class Initialized
INFO - 2019-01-21 12:41:59 937387 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 939254 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 939441 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 941292 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 942666 --> Security Class Initialized
INFO - 2019-01-21 12:41:59 943917 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 945804 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 947154 --> Security Class Initialized
INFO - 2019-01-21 12:41:59 948705 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 950601 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 952332 --> Router Class Initialized
INFO - 2019-01-21 12:41:59 954210 --> Output Class Initialized
INFO - 2019-01-21 12:41:59 958097 --> Loader Class Initialized
INFO - 2019-01-21 12:41:59 959116 --> Helper loaded: url_helper
INFO - 2019-01-21 12:41:59 960691 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:59 962017 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 962105 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 962568 --> Language Class Initialized
ERROR - 2019-01-21 12:41:59 963248 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-21 12:41:59 964029 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 964121 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 964607 --> Language Class Initialized
ERROR - 2019-01-21 12:41:59 965285 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-21 12:41:59 968164 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 968261 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 968705 --> Language Class Initialized
ERROR - 2019-01-21 12:41:59 969388 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:59 971632 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:59 972949 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 973038 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 973479 --> Language Class Initialized
ERROR - 2019-01-21 12:41:59 974149 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:59 975866 --> Security Class Initialized
DEBUG - 2019-01-21 12:41:59 977210 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:41:59 977299 --> Input Class Initialized
INFO - 2019-01-21 12:41:59 977739 --> Language Class Initialized
ERROR - 2019-01-21 12:41:59 978408 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:41:59 980293 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:11:59 986711 --> Database Driver Class Initialized
INFO - 2019-01-21 18:11:59 992022 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:11:59 992995 --> Controller Class Initialized
INFO - 2019-01-21 18:11:59 993634 --> Final output sent to browser
DEBUG - 2019-01-21 18:11:59 993720 --> Total execution time: 0.1468
INFO - 2019-01-21 12:42:00 077784 --> Config Class Initialized
INFO - 2019-01-21 12:42:00 077897 --> Hooks Class Initialized
INFO - 2019-01-21 12:42:00 081732 --> Config Class Initialized
INFO - 2019-01-21 12:42:00 081830 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:00 083250 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:00 083339 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:00 084204 --> URI Class Initialized
INFO - 2019-01-21 12:42:00 086433 --> Router Class Initialized
INFO - 2019-01-21 12:42:00 088160 --> Output Class Initialized
DEBUG - 2019-01-21 12:42:00 090322 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:00 090420 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:00 091286 --> URI Class Initialized
INFO - 2019-01-21 12:42:00 093508 --> Router Class Initialized
INFO - 2019-01-21 12:42:00 095215 --> Output Class Initialized
INFO - 2019-01-21 12:42:00 096528 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:00 097770 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:00 097861 --> Input Class Initialized
INFO - 2019-01-21 12:42:00 098258 --> Language Class Initialized
ERROR - 2019-01-21 12:42:00 098917 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:00 099493 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:00 100765 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:00 100857 --> Input Class Initialized
INFO - 2019-01-21 12:42:00 101253 --> Language Class Initialized
ERROR - 2019-01-21 12:42:00 101921 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:01 512758 --> Config Class Initialized
INFO - 2019-01-21 12:42:01 512980 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:01 517273 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:01 517510 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:01 520206 --> URI Class Initialized
INFO - 2019-01-21 12:42:01 526274 --> Router Class Initialized
INFO - 2019-01-21 12:42:01 533742 --> Output Class Initialized
INFO - 2019-01-21 12:42:01 537960 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:01 542258 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:01 542457 --> Input Class Initialized
INFO - 2019-01-21 12:42:01 543298 --> Language Class Initialized
ERROR - 2019-01-21 12:42:01 545262 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-21 12:42:17 140212 --> Config Class Initialized
INFO - 2019-01-21 12:42:17 140470 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:17 142241 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:17 142337 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:17 143511 --> URI Class Initialized
INFO - 2019-01-21 12:42:17 146512 --> Router Class Initialized
INFO - 2019-01-21 12:42:17 148390 --> Output Class Initialized
INFO - 2019-01-21 12:42:17 149986 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:17 151870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:17 152023 --> Input Class Initialized
INFO - 2019-01-21 12:42:17 152694 --> Language Class Initialized
INFO - 2019-01-21 12:42:17 157150 --> Loader Class Initialized
INFO - 2019-01-21 12:42:17 158920 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:17 159919 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:17 170669 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:17 179745 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:17 181602 --> Controller Class Initialized
INFO - 2019-01-21 18:12:17 182413 --> Parser Class Initialized
INFO - 2019-01-21 18:12:17 183633 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:17 188148 --> Model Class Initialized
INFO - 2019-01-21 18:12:17 208209 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:17 212671 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:17 214060 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:17 218911 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:17 219089 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:17 221046 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:17 223308 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:17 223491 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:17 224442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 225271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 226114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 226958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 227876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 228781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 229651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 230515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 231364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 232230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 233095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 233952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 234817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 235681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 236545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 237389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 238246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 239111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 239964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 240820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 241678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 242535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 243372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 244231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 245109 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:12:17 246093 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-21 18:12:17 246252 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-21 18:12:17 246367 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-21 18:12:17 249082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 253478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 255207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:17 265408 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:17 267507 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:17 275569 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:17 275701 --> Total execution time: 0.1297
INFO - 2019-01-21 12:42:18 023046 --> Config Class Initialized
INFO - 2019-01-21 12:42:18 023204 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:18 025672 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:18 025804 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:18 027764 --> URI Class Initialized
INFO - 2019-01-21 12:42:18 030711 --> Router Class Initialized
INFO - 2019-01-21 12:42:18 034655 --> Output Class Initialized
INFO - 2019-01-21 12:42:18 036648 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:18 038393 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:18 038557 --> Input Class Initialized
INFO - 2019-01-21 12:42:18 039186 --> Language Class Initialized
INFO - 2019-01-21 12:42:18 046963 --> Loader Class Initialized
INFO - 2019-01-21 12:42:18 048448 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:18 049272 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:18 060599 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:18 065778 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:18 067156 --> Controller Class Initialized
INFO - 2019-01-21 18:12:18 068089 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:18 068217 --> Total execution time: 0.0479
INFO - 2019-01-21 12:42:19 664510 --> Config Class Initialized
INFO - 2019-01-21 12:42:19 664663 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:19 666354 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:19 666475 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:19 667696 --> URI Class Initialized
INFO - 2019-01-21 12:42:19 670588 --> Router Class Initialized
INFO - 2019-01-21 12:42:19 672514 --> Output Class Initialized
INFO - 2019-01-21 12:42:19 673975 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:19 676630 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:19 676738 --> Input Class Initialized
INFO - 2019-01-21 12:42:19 677318 --> Language Class Initialized
INFO - 2019-01-21 12:42:19 681760 --> Loader Class Initialized
INFO - 2019-01-21 12:42:19 683579 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:19 684562 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:19 694497 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:19 698652 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:19 699937 --> Controller Class Initialized
INFO - 2019-01-21 18:12:19 700870 --> Parser Class Initialized
INFO - 2019-01-21 18:12:19 702003 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:19 706238 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:19 713630 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '26'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-21 18:12:19 724128 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-21 18:12:19 724903 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:19 725605 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:19 726710 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:19 736609 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:19 738219 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:19 738370 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:19 741200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 742757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 751388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 752144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 752521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 756553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 758179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 758590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 761209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 761867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 762816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 768692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 769309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 769807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 787884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 788608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 788957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 791894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 792993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 794945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 800245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 800919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 801254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 804251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 805017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 805826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 812458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 813568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 814450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 819047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 824109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 824492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 827311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 829457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 830193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 830658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 835181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 836071 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:19 837079 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-21 18:12:19 839159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 840806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 841154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:19 846337 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:19 847481 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:19 856606 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:19 856833 --> Total execution time: 0.1858
INFO - 2019-01-21 12:42:20 210309 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 217811 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 219590 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 219686 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 220913 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 224253 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 225444 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 225794 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 230673 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 230849 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 234067 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 247890 --> Output Class Initialized
INFO - 2019-01-21 12:42:20 252365 --> Security Class Initialized
INFO - 2019-01-21 12:42:20 258121 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 264122 --> Output Class Initialized
DEBUG - 2019-01-21 12:42:20 266691 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 266870 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 267997 --> Language Class Initialized
ERROR - 2019-01-21 12:42:20 268990 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:20 271552 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:20 272908 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 273005 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 273452 --> Language Class Initialized
ERROR - 2019-01-21 12:42:20 274194 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:20 328902 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 329009 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 330390 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 330488 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 331338 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 333811 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 335360 --> Output Class Initialized
INFO - 2019-01-21 12:42:20 336529 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:20 338037 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 338188 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 339101 --> Language Class Initialized
ERROR - 2019-01-21 12:42:20 339704 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:20 368263 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 368366 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 369729 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 369812 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 370615 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 372658 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 374247 --> Output Class Initialized
INFO - 2019-01-21 12:42:20 375435 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:20 376578 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 376661 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 377023 --> Language Class Initialized
ERROR - 2019-01-21 12:42:20 377625 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:20 480819 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 480935 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 482423 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 482521 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 483401 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 485554 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 487220 --> Output Class Initialized
INFO - 2019-01-21 12:42:20 488568 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:20 489959 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 490092 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 490751 --> Language Class Initialized
ERROR - 2019-01-21 12:42:20 491792 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:20 608443 --> Config Class Initialized
INFO - 2019-01-21 12:42:20 608637 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:20 611310 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:20 611495 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:20 614182 --> URI Class Initialized
INFO - 2019-01-21 12:42:20 619479 --> Router Class Initialized
INFO - 2019-01-21 12:42:20 623157 --> Output Class Initialized
INFO - 2019-01-21 12:42:20 625320 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:20 628427 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:20 628654 --> Input Class Initialized
INFO - 2019-01-21 12:42:20 629411 --> Language Class Initialized
INFO - 2019-01-21 12:42:20 646449 --> Loader Class Initialized
INFO - 2019-01-21 12:42:20 650341 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:20 652296 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:20 663580 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:20 678560 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:20 680077 --> Controller Class Initialized
INFO - 2019-01-21 18:12:20 681138 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:20 681268 --> Total execution time: 0.0742
INFO - 2019-01-21 12:42:21 943650 --> Config Class Initialized
INFO - 2019-01-21 12:42:21 943988 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:21 946456 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:21 946599 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:21 948234 --> URI Class Initialized
INFO - 2019-01-21 12:42:21 952872 --> Router Class Initialized
INFO - 2019-01-21 12:42:21 955714 --> Output Class Initialized
INFO - 2019-01-21 12:42:21 957722 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:21 959625 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:21 959753 --> Input Class Initialized
INFO - 2019-01-21 12:42:21 960365 --> Language Class Initialized
ERROR - 2019-01-21 12:42:21 961357 --> 404 Page Not Found: Browse-sector-list/26
INFO - 2019-01-21 12:42:42 321989 --> Config Class Initialized
INFO - 2019-01-21 12:42:42 322350 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:42 325377 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:42 325535 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:42 328274 --> URI Class Initialized
INFO - 2019-01-21 12:42:42 333246 --> Router Class Initialized
INFO - 2019-01-21 12:42:42 336410 --> Output Class Initialized
INFO - 2019-01-21 12:42:42 339329 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:42 341237 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:42 341370 --> Input Class Initialized
INFO - 2019-01-21 12:42:42 342015 --> Language Class Initialized
INFO - 2019-01-21 12:42:42 346487 --> Loader Class Initialized
INFO - 2019-01-21 12:42:42 349498 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:42 350398 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:42 364619 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:42 374146 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:42 375644 --> Controller Class Initialized
INFO - 2019-01-21 18:12:42 376404 --> Parser Class Initialized
INFO - 2019-01-21 18:12:42 377613 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:42 381001 --> Model Class Initialized
INFO - 2019-01-21 18:12:42 386727 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:42 387687 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:42 388878 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:42 390101 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:42 390269 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:42 392092 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:42 394140 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:42 394315 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:42 395319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 396189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 396991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 398416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 399081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 399728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 400357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 401000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 401772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 402703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 403928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 404984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 406178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 407644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 410558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 411659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 412694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 414025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 414858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 416002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 416923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 418632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 419903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 420960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 421855 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:12:42 423070 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-21 18:12:42 423239 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-21 18:12:42 423362 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-21 18:12:42 426484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 431823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 433780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:42 445827 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:42 448132 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:42 457119 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:42 457257 --> Total execution time: 0.1295
INFO - 2019-01-21 12:42:44 818571 --> Config Class Initialized
INFO - 2019-01-21 12:42:44 818721 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:44 822029 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:44 822161 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:44 823538 --> URI Class Initialized
INFO - 2019-01-21 12:42:44 828705 --> Router Class Initialized
INFO - 2019-01-21 12:42:44 832442 --> Output Class Initialized
INFO - 2019-01-21 12:42:44 835417 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:44 838026 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:44 838157 --> Input Class Initialized
INFO - 2019-01-21 12:42:44 838815 --> Language Class Initialized
INFO - 2019-01-21 12:42:44 843291 --> Loader Class Initialized
INFO - 2019-01-21 12:42:44 844969 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:44 845897 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:44 860749 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:44 867094 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:44 868599 --> Controller Class Initialized
INFO - 2019-01-21 18:12:44 869426 --> Parser Class Initialized
INFO - 2019-01-21 18:12:44 871784 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:44 876318 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:44 884756 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '21'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-21 18:12:44 895556 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-21 18:12:44 896370 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:44 897248 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:44 899600 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:44 903132 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:44 905008 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:44 905230 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:44 908618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 910706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 921713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 922749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 923190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 926469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 929485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 930778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 935492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 936497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 937015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 941102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 942179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 942604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 946429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 947244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 947663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 952815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 953608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 954021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 960160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 961652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 962563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 968803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 969774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 970243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 973978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 974800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 975203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 978671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 980565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 980969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 985126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 987473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 988300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 988784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 992141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 993144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 994338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 995242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 995698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:44 999067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 000181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 001894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 002769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 003474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 009236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 010355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 011768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 012620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 013056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 016222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 017255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 018388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 019229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 019694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 022815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 023847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 025024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 025880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 026309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 029558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 030549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 031857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 032741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 033180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 036379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 037509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 038728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 039779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 040191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 043351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 045878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 047100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 047966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 048418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 051564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 052546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 053936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 054805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 055452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 059513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 060533 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:45 061784 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-21 18:12:45 067142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 069509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 070327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:45 077162 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:45 078064 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:45 096824 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:45 096965 --> Total execution time: 0.2634
INFO - 2019-01-21 12:42:45 276690 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 277029 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 279716 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 279850 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 281568 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 289011 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 292362 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 295320 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 297610 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 297826 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 298747 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 300277 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-21 12:42:45 440376 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 440682 --> Hooks Class Initialized
INFO - 2019-01-21 12:42:45 456991 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 457379 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 461652 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 461817 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 464246 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 469127 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 471815 --> Output Class Initialized
DEBUG - 2019-01-21 12:42:45 474550 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 474685 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 476303 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 480911 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 483879 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 485908 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 486037 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 486675 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 487716 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-21 12:42:45 490089 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 492086 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 493962 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 494090 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 494710 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 495683 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-21 12:42:45 581825 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 581979 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 584579 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 584709 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 586062 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 589986 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 592670 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 601763 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 601901 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 604911 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 605041 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 606298 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 607745 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 610469 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 610654 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 611753 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 613440 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 624054 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 626543 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 628401 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 632082 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 632211 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 632793 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 633749 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 635324 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 635529 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 637748 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 637876 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 639163 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 642499 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 645093 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 647109 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 649064 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 649194 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 649799 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 650784 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-21 12:42:45 727070 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 727217 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 729392 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 729593 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 740529 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 740675 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 744371 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 744528 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 745790 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 748302 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 751351 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 753739 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 755681 --> Security Class Initialized
INFO - 2019-01-21 12:42:45 758851 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 761147 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 763012 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 764704 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 764832 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 765373 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 766254 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-21 12:42:45 767862 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 768004 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 768646 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 769638 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 778091 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 778239 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 780376 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 780527 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 781790 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 787175 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 787312 --> Hooks Class Initialized
INFO - 2019-01-21 12:42:45 789911 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 792295 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 794223 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 796392 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 796546 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 797810 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 801022 --> Router Class Initialized
DEBUG - 2019-01-21 12:42:45 805891 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 806046 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 806677 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 807661 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 809864 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 811928 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 813832 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 813963 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 814609 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 815577 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 939233 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 939383 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 941484 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 941615 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 942845 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 947071 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 947208 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 949265 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 949390 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 952135 --> Config Class Initialized
INFO - 2019-01-21 12:42:45 952270 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:45 954302 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:45 954431 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:45 955694 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 959177 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 961555 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 963445 --> Security Class Initialized
INFO - 2019-01-21 12:42:45 964653 --> URI Class Initialized
INFO - 2019-01-21 12:42:45 967715 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 970118 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 972778 --> Router Class Initialized
INFO - 2019-01-21 12:42:45 975130 --> Output Class Initialized
INFO - 2019-01-21 12:42:45 977046 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 979254 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 979381 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 979978 --> Language Class Initialized
INFO - 2019-01-21 12:42:45 986067 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:45 987888 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 988015 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 988610 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 989551 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-21 12:42:45 991751 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:45 991884 --> Input Class Initialized
INFO - 2019-01-21 12:42:45 992518 --> Language Class Initialized
ERROR - 2019-01-21 12:42:45 993479 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-21 12:42:45 997562 --> Loader Class Initialized
INFO - 2019-01-21 12:42:45 999180 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:46 000034 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:46 010324 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:46 019676 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:46 021146 --> Controller Class Initialized
INFO - 2019-01-21 18:12:46 022135 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:46 022258 --> Total execution time: 0.0847
INFO - 2019-01-21 12:42:46 817375 --> Config Class Initialized
INFO - 2019-01-21 12:42:46 817471 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:46 818562 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:46 818629 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:46 819278 --> URI Class Initialized
INFO - 2019-01-21 12:42:46 820873 --> Router Class Initialized
INFO - 2019-01-21 12:42:46 822081 --> Output Class Initialized
INFO - 2019-01-21 12:42:46 823012 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:46 823892 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:46 823959 --> Input Class Initialized
INFO - 2019-01-21 12:42:46 824244 --> Language Class Initialized
ERROR - 2019-01-21 12:42:46 824742 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-21 12:42:52 795380 --> Config Class Initialized
INFO - 2019-01-21 12:42:52 795593 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:52 797055 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:52 797132 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:52 798105 --> URI Class Initialized
INFO - 2019-01-21 12:42:52 800755 --> Router Class Initialized
INFO - 2019-01-21 12:42:52 802560 --> Output Class Initialized
INFO - 2019-01-21 12:42:52 803775 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:52 804966 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:52 805046 --> Input Class Initialized
INFO - 2019-01-21 12:42:52 805427 --> Language Class Initialized
INFO - 2019-01-21 12:42:52 808007 --> Loader Class Initialized
INFO - 2019-01-21 12:42:52 808984 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:52 809595 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:52 818115 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:52 823621 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:52 824517 --> Controller Class Initialized
INFO - 2019-01-21 18:12:52 824958 --> Parser Class Initialized
INFO - 2019-01-21 18:12:52 825637 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:52 827768 --> Model Class Initialized
INFO - 2019-01-21 18:12:52 830781 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:52 831284 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:52 832015 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:52 832771 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:52 832871 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-21 18:12:52 833957 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:52 835226 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:52 835334 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:52 835956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 836509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 837044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 837579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 838104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 838638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 839164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 839699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 840234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 840765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 841285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 841830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 842359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 842891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 843415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 843951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 844486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 845006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 845537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 846056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 846585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 847103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 847630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 848148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 848680 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-21 18:12:52 849267 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-21 18:12:52 849359 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-21 18:12:52 849453 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-21 18:12:52 851102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 853810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 855432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:52 863972 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:52 865706 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:52 873846 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:52 873953 --> Total execution time: 0.0721
INFO - 2019-01-21 12:42:56 895328 --> Config Class Initialized
INFO - 2019-01-21 12:42:56 895497 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:56 897207 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:56 897286 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:56 898890 --> URI Class Initialized
INFO - 2019-01-21 12:42:56 901206 --> Router Class Initialized
INFO - 2019-01-21 12:42:56 903342 --> Output Class Initialized
INFO - 2019-01-21 12:42:56 905726 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:56 907530 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:56 907651 --> Input Class Initialized
INFO - 2019-01-21 12:42:56 908220 --> Language Class Initialized
INFO - 2019-01-21 12:42:56 911029 --> Loader Class Initialized
INFO - 2019-01-21 12:42:56 912026 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:56 912615 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:56 919812 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:56 924209 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:56 925137 --> Controller Class Initialized
INFO - 2019-01-21 18:12:56 925616 --> Parser Class Initialized
INFO - 2019-01-21 18:12:56 926754 --> Helper loaded: html_helper
INFO - 2019-01-21 18:12:56 932960 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:56 941764 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '20'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-21 18:12:56 953205 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-21 18:12:56 953782 --> Model Class Initialized
DEBUG - 2019-01-21 18:12:56 954463 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-21 18:12:56 955634 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-21 18:12:56 958719 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-21 18:12:56 960235 --> Helper loaded: file_helper
DEBUG - 2019-01-21 18:12:56 960419 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-21 18:12:56 962795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 964267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 973525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 974158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 974462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 976326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 976888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 977157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 979958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 980457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 980714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 982624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 983114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 983362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 985268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 985799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 986057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 988028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 988557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 988817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 991533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 992202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 992599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 994884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 995457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 995735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 998409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 998950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:56 999221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 001390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 002923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 003233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 005635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 008531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 009130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 009562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 013268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 014204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 015037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 015605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 015897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 018134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 018986 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:57 019804 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-21 18:12:57 021671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 022931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 023257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-21 18:12:57 025782 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-21 18:12:57 026329 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-21 18:12:57 035054 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:57 035207 --> Total execution time: 0.1329
INFO - 2019-01-21 12:42:57 255335 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 255516 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:57 257739 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 257869 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 259187 --> URI Class Initialized
INFO - 2019-01-21 12:42:57 263361 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 263695 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:57 266113 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 266242 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 267908 --> URI Class Initialized
INFO - 2019-01-21 12:42:57 272542 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 275299 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 277296 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 279205 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 279334 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 279958 --> Language Class Initialized
ERROR - 2019-01-21 12:42:57 280946 --> 404 Page Not Found: Browse-sector-list/20
INFO - 2019-01-21 12:42:57 283473 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 286046 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 287945 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 289716 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 289846 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 290420 --> Language Class Initialized
ERROR - 2019-01-21 12:42:57 291363 --> 404 Page Not Found: Browse-sector-list/20
INFO - 2019-01-21 12:42:57 326771 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 326935 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:57 328926 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 329015 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 338779 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 339004 --> Hooks Class Initialized
INFO - 2019-01-21 12:42:57 339975 --> URI Class Initialized
INFO - 2019-01-21 12:42:57 342677 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 344237 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 345561 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 347361 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 347496 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 348058 --> Language Class Initialized
DEBUG - 2019-01-21 12:42:57 352127 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 352253 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 353916 --> URI Class Initialized
ERROR - 2019-01-21 12:42:57 356600 --> 404 Page Not Found: Browse-sector-list/20
INFO - 2019-01-21 12:42:57 360749 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 363492 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 365518 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 367455 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 367595 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 368217 --> Language Class Initialized
ERROR - 2019-01-21 12:42:57 369210 --> 404 Page Not Found: Uploads/unnatinanda18gmail.com
INFO - 2019-01-21 12:42:57 493444 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 493617 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:57 495863 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 495995 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 497297 --> URI Class Initialized
INFO - 2019-01-21 12:42:57 500598 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 503158 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 505373 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 507234 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 507365 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 507973 --> Language Class Initialized
ERROR - 2019-01-21 12:42:57 508935 --> 404 Page Not Found: Browse-sector-list/20
INFO - 2019-01-21 12:42:57 610275 --> Config Class Initialized
INFO - 2019-01-21 12:42:57 610440 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:57 612567 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:57 612696 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:57 613953 --> URI Class Initialized
INFO - 2019-01-21 12:42:57 616309 --> Router Class Initialized
INFO - 2019-01-21 12:42:57 618735 --> Output Class Initialized
INFO - 2019-01-21 12:42:57 620661 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:57 622499 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:57 622632 --> Input Class Initialized
INFO - 2019-01-21 12:42:57 623222 --> Language Class Initialized
INFO - 2019-01-21 12:42:57 631206 --> Loader Class Initialized
INFO - 2019-01-21 12:42:57 632882 --> Helper loaded: url_helper
INFO - 2019-01-21 12:42:57 633759 --> Helper loaded: utility_helper
INFO - 2019-01-21 18:12:57 647109 --> Database Driver Class Initialized
INFO - 2019-01-21 18:12:57 655543 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-21 18:12:57 657032 --> Controller Class Initialized
INFO - 2019-01-21 18:12:57 658052 --> Final output sent to browser
DEBUG - 2019-01-21 18:12:57 658176 --> Total execution time: 0.0496
INFO - 2019-01-21 12:42:58 412746 --> Config Class Initialized
INFO - 2019-01-21 12:42:58 412914 --> Hooks Class Initialized
DEBUG - 2019-01-21 12:42:58 415388 --> UTF-8 Support Enabled
INFO - 2019-01-21 12:42:58 415544 --> Utf8 Class Initialized
INFO - 2019-01-21 12:42:58 416908 --> URI Class Initialized
INFO - 2019-01-21 12:42:58 420255 --> Router Class Initialized
INFO - 2019-01-21 12:42:58 422862 --> Output Class Initialized
INFO - 2019-01-21 12:42:58 424850 --> Security Class Initialized
DEBUG - 2019-01-21 12:42:58 426712 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-21 12:42:58 426842 --> Input Class Initialized
INFO - 2019-01-21 12:42:58 427432 --> Language Class Initialized
ERROR - 2019-01-21 12:42:58 428395 --> 404 Page Not Found: Browse-sector-list/20
