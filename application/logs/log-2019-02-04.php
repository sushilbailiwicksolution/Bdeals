<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-02-04 00:01:57 884058 --> Database Driver Class Initialized
INFO - 2019-02-04 00:01:57 892514 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:01:57 893867 --> Controller Class Initialized
INFO - 2019-02-04 00:01:57 894546 --> Parser Class Initialized
INFO - 2019-02-04 00:01:57 895540 --> Helper loaded: html_helper
INFO - 2019-02-04 00:01:57 896668 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:01:57 899673 --> Model Class Initialized
DEBUG - 2019-02-04 00:01:57 916179 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:01:57 922419 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:01:57 923218 --> Model Class Initialized
DEBUG - 2019-02-04 00:01:57 923959 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:01:57 927474 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:01:57 929652 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:01:57 929838 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:01:57 934329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 936094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 954061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 959089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 962726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 963191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 963975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 965140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 968146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 968748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 969626 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:01:57 971472 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:01:57 971649 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:01:57 971882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 975069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 975522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 976258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 977387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 980591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 981055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 981848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 983004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 989252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 989799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 990607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 991674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 994801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 995240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 996042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:57 997056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 001470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 002137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 003534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 004992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 009799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 010267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 011157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 012275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 015516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 015965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 016794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 017853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 021054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 021524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 022419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 023492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 026765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 027220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 028091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 029086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 032294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 032785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 033667 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:01:58 034605 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:01:58 034775 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:01:58 034986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 038161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 038645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 039524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 040519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 043751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 044197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 045072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 046068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 049294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 049771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 050658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 051734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 056041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 056529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 057394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 058429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 061675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 062128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 063010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 063994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 064934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 065882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 066811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 067728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 068676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 069621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 070535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 071432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 072335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 073254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 074177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 075083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 075989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 076903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 077820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 078818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 079814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 080687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 081561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 082390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 083241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 084104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 085059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 086015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 086971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 087881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 088835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 089709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 090657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 091523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 092478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 093328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 094305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 095329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 098908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 099363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 100285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 101248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 106491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 107206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 108669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 109914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 113277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 113765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 114701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 115653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 118931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 119399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 120343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 121490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 124711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 125166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 126126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 127057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 130322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 130815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 131762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 134974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 135432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 136310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 137343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 140614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 141083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 141997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 143183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 146372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 146842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 147753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 148683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 151967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 152443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 153320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 154232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 157443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 157934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 158829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 159749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 162997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 163482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 164360 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:01:58 165267 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:01:58 173866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 175895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 176347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:01:58 179637 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:01:58 180433 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:01:58 202569 --> Final output sent to browser
DEBUG - 2019-02-04 00:01:58 202712 --> Total execution time: 0.3279
INFO - 2019-02-04 00:01:59 235856 --> Database Driver Class Initialized
INFO - 2019-02-04 00:01:59 244782 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:01:59 246256 --> Controller Class Initialized
INFO - 2019-02-04 00:01:59 247287 --> Final output sent to browser
DEBUG - 2019-02-04 00:01:59 247411 --> Total execution time: 0.0923
INFO - 2019-02-04 00:03:15 216192 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:15 225481 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:15 226999 --> Controller Class Initialized
INFO - 2019-02-04 00:03:15 227726 --> Parser Class Initialized
INFO - 2019-02-04 00:03:15 228782 --> Helper loaded: html_helper
INFO - 2019-02-04 00:03:15 229970 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:03:15 234044 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:15 248552 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:03:15 304627 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:03:15 305860 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:15 307235 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:03:15 312874 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:03:15 315640 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:03:15 315881 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:03:15 322285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 325324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 339303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 342377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 345253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 345854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 346573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 347552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 350220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 350634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 351299 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:15 352977 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:15 353141 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:15 353342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 356106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 356511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 357173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 358078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 361073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 361509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 362761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 363770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 367650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 368415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 369713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 371067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 375322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 375880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 377178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 378154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 382021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 382457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 383299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 384462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 388169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 388633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 390029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 391014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 394892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 395312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 397066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 398359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 406372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 407176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 408879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 410356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 414674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 415052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 415889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 416809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 419491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 419857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 420555 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:15 421382 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:15 421745 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:15 421920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 424649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 425009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 425707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 426567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 429442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 429815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 430512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 431324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 434120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 434504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 435251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 436145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 439537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 439913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 440699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 441596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 448005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 448375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 449124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 449960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 450732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 451529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 452263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 453092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 454637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 455496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 456232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 457006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 457743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 458532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 459264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 460458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 461415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 462176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 462930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 463942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 464992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 465720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 466404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 467091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 467792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 468480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 469294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 470041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 470875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 471606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 473074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 473778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 474602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 475311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 476119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 478136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 481033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 481957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 486001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 486428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 487215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 488087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 490880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 491316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 492094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 493007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 496126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 496542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 497718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 498583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 501332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 501739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 502705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 503914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 506638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 507330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 508265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 509432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 512190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 512600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 513367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 516057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 516438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 517179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 518238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 521864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 522269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 523143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 524400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 527190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 527601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 528384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 529244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 533370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 533812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 535083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 536274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 542401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 543251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 544399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 545613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 551944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 552670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 554476 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:15 555783 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:03:15 560981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 564693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 565280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:15 570903 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:15 572149 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:03:15 590476 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:15 590626 --> Total execution time: 0.3921
INFO - 2019-02-04 00:03:18 663487 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:18 671242 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:18 672570 --> Controller Class Initialized
INFO - 2019-02-04 00:03:18 673429 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:18 673543 --> Total execution time: 0.0626
INFO - 2019-02-04 00:03:28 943737 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:28 948822 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:28 949604 --> Controller Class Initialized
INFO - 2019-02-04 00:03:28 949997 --> Parser Class Initialized
INFO - 2019-02-04 00:03:28 950591 --> Helper loaded: html_helper
INFO - 2019-02-04 00:03:28 951252 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:03:28 953026 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:28 973331 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:03:28 980724 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:03:28 981525 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:28 982343 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:03:28 986145 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:03:28 987916 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:03:28 988044 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:03:28 992711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:28 994393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 002470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 004869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 009877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 010355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 011177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 012348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 014375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 014621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 015019 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:29 016231 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:29 016324 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:29 016453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 018153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 018378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 018776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 019731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 021415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 021658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 022061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 022828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 024485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 024724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 025127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 025921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 027566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 027796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 028202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 028981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 030599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 030829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 031239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 031935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 033576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 033809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 034221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 034929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 036559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 036804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 037223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 037913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 039544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 039772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 040204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 040916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 042571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 042805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 043241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 044039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 045672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 045907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 046345 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:29 047010 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:29 047097 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:29 047205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 048841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 049074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 049530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 050211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 051892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 052129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 052591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 053260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 054891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 055125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 055597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 056277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 057918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 058151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 058614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 059284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 060923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 061156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 062174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 063138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 064069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 064991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 065915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 066838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 067768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 068682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 069694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 070610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 071516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 072427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 073339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 074245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 075145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 076045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 076972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 078763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 080595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 082231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 083880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 085522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 087165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 088880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 089940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 091757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 092802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 094436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 095386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 097033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 097995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 099623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 100613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 102241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 103302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 104269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 112361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 113147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 114996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 116194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 124311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 125123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 126936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 128159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 135736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 136466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 138256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 139343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 147070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 147842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 149647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 150701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 158307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 159070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 160907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 161936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 169576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 170337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 172173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 179869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 180613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 182346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 183608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 191382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 192164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 193902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 195127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 200975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 201234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 201711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 202541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 204243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 204508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 204966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 205797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 207587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 207829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 208282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 209306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 210988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 211230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 211705 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:29 212465 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:03:29 214173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 215214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 215461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:29 217139 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:29 217554 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:03:29 225824 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:29 225914 --> Total execution time: 0.2969
INFO - 2019-02-04 00:03:30 068243 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:30 076688 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:30 078162 --> Controller Class Initialized
INFO - 2019-02-04 00:03:30 079196 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:30 079322 --> Total execution time: 0.1018
INFO - 2019-02-04 00:03:41 987708 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:41 996318 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:41 997838 --> Controller Class Initialized
ERROR - 2019-02-04 00:03:41 998681 --> Severity: Warning --> Missing argument 1 for Buyer::browseBuyerListing() /home/hzswn06npic1/public_html/bdeals/application/controllers/Buyer.php 285
INFO - 2019-02-04 00:03:41 999424 --> Parser Class Initialized
INFO - 2019-02-04 00:03:42 000534 --> Helper loaded: html_helper
INFO - 2019-02-04 00:03:42 004084 --> Model Class Initialized
INFO - 2019-02-04 00:03:42 009907 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:42 010873 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:03:42 012190 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:03:42 014811 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:03:42 016906 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:03:42 017090 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:03:42 021416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 023318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 025098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 026933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 028686 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:42 030337 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:03:42 033299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 035053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 036631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:42 046740 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:42 048719 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:03:42 057693 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:42 057862 --> Total execution time: 0.1030
INFO - 2019-02-04 00:03:42 722733 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:42 732069 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:42 733504 --> Controller Class Initialized
INFO - 2019-02-04 00:03:42 734354 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:42 734509 --> Total execution time: 0.0551
INFO - 2019-02-04 00:03:45 648855 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:45 655431 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:45 657557 --> Controller Class Initialized
DEBUG - 2019-02-04 00:03:45 657687 --> In LOGOUT
INFO - 2019-02-04 00:03:45 834882 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:45 839072 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:45 840265 --> Controller Class Initialized
INFO - 2019-02-04 00:03:45 840888 --> Parser Class Initialized
INFO - 2019-02-04 00:03:45 841774 --> Helper loaded: html_helper
INFO - 2019-02-04 00:03:45 842715 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:03:45 845573 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:45 855143 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:03:45 859622 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:03:45 860264 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:45 860831 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:03:45 864017 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:03:45 865946 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:03:45 866106 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:03:45 869697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 871412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 882072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 884157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 887065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 887470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 888112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 888809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 891479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 891932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 892630 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:45 894572 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:45 894726 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:45 894912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 897608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 897974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 898654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 899477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 902015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 902427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 903774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 905052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 907753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 908087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 908658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 909326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 912653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 912978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 913558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 914243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 917870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 918194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 918781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 919562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 921874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 922195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 922777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 923496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 925772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 926091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 926681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 927350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 930197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 930598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 931802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 932652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 935528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 936042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 936671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 937482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 940054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 940377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 941000 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:45 941653 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:45 941771 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:45 941921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 944717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 945054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 945857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 946547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 948941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 949263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 949887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 950572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 952827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 953162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 953787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 954461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 956994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 957453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 958714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 959568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 961853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 962233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 963248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 964072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 964868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 965694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 966873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 967812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 968868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 969805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 970712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 971663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 972635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 973567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 974392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 975131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 975945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 976761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 977634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 978842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 979990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 981105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 981735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 982330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 983140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 983894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 984714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 985513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 986432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 987055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 987850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 988548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 989326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 989934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 990835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 991480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 992352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 993252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 996505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 997016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 998078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:45 999078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 003166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 003736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 004904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 005840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 008157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 008517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 009175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 009924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 012250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 012803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 013768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 014530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 017002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 017910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 018824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 019880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 023933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 024352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 025367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 028162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 028512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 029130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 029903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 032210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 032567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 033185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 034053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 036427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 036765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 037378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 038211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 040618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 041368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 042016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 042773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 045115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 045558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 046180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 046921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 049215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 049572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 050205 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:46 051000 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:03:46 053036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 054594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 054920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:46 057262 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:46 057982 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:03:46 068068 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:46 068212 --> Total execution time: 0.2509
INFO - 2019-02-04 00:03:47 273979 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:47 282666 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:47 284215 --> Controller Class Initialized
INFO - 2019-02-04 00:03:47 285324 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:47 285470 --> Total execution time: 0.0887
INFO - 2019-02-04 00:03:55 469854 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:55 478610 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:55 479674 --> Controller Class Initialized
INFO - 2019-02-04 00:03:55 617367 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:55 621344 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:55 622323 --> Controller Class Initialized
DEBUG - 2019-02-04 00:03:55 622425 --> In LOGOUT
INFO - 2019-02-04 00:03:55 774394 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:55 778459 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:55 779453 --> Controller Class Initialized
INFO - 2019-02-04 00:03:55 779979 --> Parser Class Initialized
INFO - 2019-02-04 00:03:55 780747 --> Helper loaded: html_helper
INFO - 2019-02-04 00:03:55 781589 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:03:55 783938 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:55 795561 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:03:55 800781 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:03:55 801314 --> Model Class Initialized
DEBUG - 2019-02-04 00:03:55 801989 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:03:55 804366 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:03:55 805831 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:03:55 805959 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:03:55 809159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 810539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 818131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 820094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 822124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 822443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 822985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 823832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 825846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 826141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 826680 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:55 827857 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:55 827980 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:55 828128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 830200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 830514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 831041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 831788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 833940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 834254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 834813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 835583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 837693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 838010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 838574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 839299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 841443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 841767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 842315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 843050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 845236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 845567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 846127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 846899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 849108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 849425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 850006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 850747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 852953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 853262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 853856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 854587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 856801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 857112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 857713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 858464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 860727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 861046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 861661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 862391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 864628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 864943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 865556 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:03:55 866271 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:03:55 866380 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:03:55 866544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 868746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 869059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 869714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 870454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 872677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 872991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 873621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 874347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 876569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 876883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 877507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 878267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 880532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 880852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 881459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 882251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 884474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 884793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 885395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 886167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 886897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 887608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 888289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 888986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 889658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 890331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 891082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 891765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 892426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 893273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 893985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 894701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 895380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 896197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 896898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 897555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 898207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 898813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 899395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 899998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 900602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 901199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 902070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 902761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 903821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 905704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 906794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 907685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 908694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 909581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 910563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 911432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 912446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 913412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 917505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 917982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 918941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 919949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 923333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 923841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 924894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 926275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 930484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 931014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 932161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 933186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 936506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 936980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 937936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 938954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 942406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 943207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 944166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 945080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 948848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 949373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 950323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 953686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 954145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 955049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 955964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 959268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 959786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 960706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 961622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 964925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 965390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 966309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 967248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 970597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 971076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 971988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 972909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 976594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 977077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 978009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 978914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 982284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 982781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 983701 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:55 984666 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:03:55 987739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 990041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 990531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:03:55 994004 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:03:55 995184 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:03:56 014173 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:56 014321 --> Total execution time: 0.2429
INFO - 2019-02-04 00:03:56 998274 --> Database Driver Class Initialized
INFO - 2019-02-04 00:03:57 003524 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:03:57 004884 --> Controller Class Initialized
INFO - 2019-02-04 00:03:57 005747 --> Final output sent to browser
DEBUG - 2019-02-04 00:03:57 005872 --> Total execution time: 0.0696
INFO - 2019-02-04 00:06:46 938376 --> Database Driver Class Initialized
INFO - 2019-02-04 00:06:46 945880 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:06:46 947076 --> Controller Class Initialized
INFO - 2019-02-04 00:06:46 947680 --> Parser Class Initialized
INFO - 2019-02-04 00:06:46 948576 --> Helper loaded: html_helper
INFO - 2019-02-04 00:06:46 949542 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:06:46 952518 --> Model Class Initialized
DEBUG - 2019-02-04 00:06:46 965076 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:06:46 972279 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:06:46 973242 --> Model Class Initialized
DEBUG - 2019-02-04 00:06:46 974137 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:06:46 977788 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:06:46 979465 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:06:46 979612 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:06:46 983345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:46 984879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:46 995076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:46 996941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 001358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 001738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 002324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 003257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 006568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 006910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 007492 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:06:47 008838 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:06:47 008976 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:06:47 009145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 011645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 012701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 013480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 014283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 016607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 016952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 017735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 018731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 023165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 023554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 024148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 024988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 027823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 028289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 028934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 029802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 032469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 032825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 033441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 034526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 039627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 040116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 042081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 043148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 047492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 048043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 049442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 050647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 056679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 057486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 058631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 059468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 064867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 065277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 065968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 067043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 069935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 070358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 071115 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:06:47 072020 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:06:47 072150 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:06:47 072316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 074930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 075288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 075963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 076807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 079279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 079653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 080318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 081115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 083663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 084021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 084788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 085604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 088080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 088462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 090296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 091276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 094372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 094758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 095441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 096189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 096926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 097645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 098395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 099159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 099891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 100581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 101264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 102011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 102767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 103501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 104218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 105077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 105808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 106551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 107522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 109082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 110407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 112027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 113265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 114552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 115673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 116791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 117933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 118896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 119760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 120596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 121367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 122257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 123016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 123877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 124619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 125422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 126200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 126925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 130373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 130831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 131721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 132498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 135621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 136060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 136969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 137722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 140928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 141377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 142263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 143276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 146368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 146835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 147713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 148566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 151797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 152251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 153172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 154200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 157367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 157836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 158718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 159730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 162885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 163342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 164222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 165261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 168407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 168886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 169819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 172956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 173417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 174263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 175360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 178493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 178939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 179820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 180887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 184106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 184586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 185420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 186463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 189578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 190047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 190898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 191925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 195112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 195586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 196460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 197489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 200778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 201230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 202075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 203093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 206213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 206708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 207561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 208584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 211703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 212147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 213038 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:06:47 214056 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:06:47 217279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 219337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 219805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:06:47 222956 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:06:47 223762 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:06:47 234612 --> Final output sent to browser
DEBUG - 2019-02-04 00:06:47 234746 --> Total execution time: 0.3169
INFO - 2019-02-04 00:06:48 309458 --> Database Driver Class Initialized
INFO - 2019-02-04 00:06:48 314619 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:06:48 315371 --> Controller Class Initialized
INFO - 2019-02-04 00:06:48 315944 --> Final output sent to browser
DEBUG - 2019-02-04 00:06:48 316051 --> Total execution time: 0.0765
INFO - 2019-02-04 00:13:21 372262 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:21 380878 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:21 382209 --> Controller Class Initialized
INFO - 2019-02-04 00:13:21 382877 --> Parser Class Initialized
INFO - 2019-02-04 00:13:21 383841 --> Helper loaded: html_helper
INFO - 2019-02-04 00:13:21 384903 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:13:21 387928 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:21 410250 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:13:21 420794 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:13:21 422274 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:21 423378 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:13:21 427968 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:13:21 429687 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:13:21 429838 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:13:21 433901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 435492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 444820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 446890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 449342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 449719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 450314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 452737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 455801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 456231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 456964 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:21 458576 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:21 458750 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:21 458961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 461858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 462264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 462986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 464062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 467022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 467473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 468210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 469144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 472048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 472507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 473249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 474065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 477051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 477494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 478239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 479053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 482080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 482526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 483278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 484072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 487162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 487641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 488419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 489264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 492522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 492948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 493751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 494672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 497773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 498197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 499018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 499835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 503007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 503456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 504275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 505227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 508430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 508877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 509740 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:21 510642 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:21 510795 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:21 510992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 514173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 514638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 515475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 516387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 519563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 519999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 520853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 521809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 524926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 525358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 526226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 527040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 530174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 530687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 531552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 532337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 535449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 536901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 540316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 541750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 543097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 544446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 545186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 545886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 546621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 547312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 548073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 548773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 549465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 550147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 550837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 551527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 552200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 552874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 553586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 554527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 555429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 556251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 557070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 557928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 558758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 559602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 560333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 561233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 561937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 562798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 563493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 564300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 565038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 565875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 566608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 567431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 568139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 568798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 572259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 572719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 573664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 575028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 578193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 578666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 579570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 580455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 583733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 584192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 585093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 586005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 589198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 589665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 590564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 591392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 594626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 595079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 595978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 596865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 600013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 600477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 601351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 602199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 605334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 605809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 606714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 607583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 610703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 611146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 612075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 615241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 615700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 616564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 617527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 620662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 621110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 621972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 622814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 626030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 626513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 627360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 628123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 631247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 631712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 632574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 633529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 636734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 637187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 638053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 638994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 642235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 642724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 643587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 644584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 647735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 648180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 649044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 649985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 653131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 653604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 654468 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:21 655824 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:13:21 659082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 661070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 661533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:21 664694 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:21 665472 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:13:21 676251 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:21 676398 --> Total execution time: 0.3327
INFO - 2019-02-04 00:13:22 705660 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:22 708873 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:22 709597 --> Controller Class Initialized
INFO - 2019-02-04 00:13:22 710036 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:22 710098 --> Total execution time: 0.0463
INFO - 2019-02-04 00:13:26 457343 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:26 466547 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:26 468115 --> Controller Class Initialized
ERROR - 2019-02-04 00:13:26 468946 --> Severity: Warning --> Missing argument 1 for Buyer::browseBuyerListing() /home/hzswn06npic1/public_html/bdeals/application/controllers/Buyer.php 285
INFO - 2019-02-04 00:13:26 469695 --> Parser Class Initialized
INFO - 2019-02-04 00:13:26 470793 --> Helper loaded: html_helper
INFO - 2019-02-04 00:13:26 474554 --> Model Class Initialized
INFO - 2019-02-04 00:13:26 480598 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:26 481437 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:13:26 482872 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:13:26 485781 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:13:26 487903 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:13:26 488086 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:13:26 493108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 494956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 496740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 498522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 500250 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:26 502047 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:13:26 505075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 506905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 509329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:26 519988 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:26 522237 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:13:26 532114 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:26 532265 --> Total execution time: 0.1008
INFO - 2019-02-04 00:13:27 617439 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:27 621315 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:27 624178 --> Controller Class Initialized
INFO - 2019-02-04 00:13:27 625648 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:27 625827 --> Total execution time: 0.0336
INFO - 2019-02-04 00:13:33 254991 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:33 263837 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:33 265623 --> Controller Class Initialized
INFO - 2019-02-04 00:13:33 266542 --> Parser Class Initialized
INFO - 2019-02-04 00:13:33 267679 --> Helper loaded: html_helper
INFO - 2019-02-04 00:13:33 268785 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:13:33 271856 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:33 284800 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:13:33 290261 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:13:33 291070 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:33 291771 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:13:33 295427 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:13:33 298192 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:13:33 298345 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:13:33 302448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 304044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 317145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 319683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 323949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 324614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 325659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 326590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 330565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 331113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 332094 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:33 333779 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:33 333971 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:33 334224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 338239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 338687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 339627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 340447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 343669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 344047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 344682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 345442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 348860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 349240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 349878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 350788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 353867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 354228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 354870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 355925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 359669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 360105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 360768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 361627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 364293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 364742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 365668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 366549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 370336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 371166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 372114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 373004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 375844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 376204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 376887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 377885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 382186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 382673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 383348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 384226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 387234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 387629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 388890 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:33 390085 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:33 390288 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:33 390569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 395104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 395709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 397128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 398431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 404074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 404517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 406090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 406987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 409800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 410538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 411467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 412467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 414751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 415075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 415713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 416625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 418893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 419218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 419841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 420763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 421616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 422332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 423049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 423759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 424484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 425169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 425935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 426702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 428708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 429548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 430258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 430962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 431726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 433314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 434387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 435262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 435988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 436611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 437220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 437884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 438500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 439811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 440697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 441471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 442259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 442884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 443671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 444266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 445061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 445830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 446599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 447797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 448685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 449474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 452632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 452985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 453685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 454546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 456909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 457245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 457930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 458712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 461168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 461628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 462316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 463061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 465370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 465717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 466892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 467891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 472019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 472959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 474055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 475167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 479239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 479613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 480269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 481304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 483952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 484317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 485049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 485956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 488251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 488620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 489270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 491590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 491918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 492549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 493345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 495866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 496202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 496843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 497905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 500576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 500950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 501620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 502412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 504770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 505103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 505740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 506544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 509130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 509489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 510111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 510890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 513225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 513845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 514545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 515367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 517643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 517992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 518627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 519583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 521857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 522221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 522850 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:33 523607 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:13:33 525980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 527481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 527829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:33 530812 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:33 531388 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:13:33 540966 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:33 541078 --> Total execution time: 0.3071
INFO - 2019-02-04 00:13:34 662043 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:34 668975 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:34 670129 --> Controller Class Initialized
INFO - 2019-02-04 00:13:34 670880 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:34 670968 --> Total execution time: 0.0498
INFO - 2019-02-04 00:13:45 416214 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:45 423374 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:45 424607 --> Controller Class Initialized
INFO - 2019-02-04 00:13:45 425209 --> Parser Class Initialized
INFO - 2019-02-04 00:13:45 426095 --> Helper loaded: html_helper
INFO - 2019-02-04 00:13:45 427094 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:13:45 429864 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:45 444341 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:13:45 450910 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:13:45 451611 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:45 452452 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:13:45 455250 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:13:45 456950 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:13:45 457098 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:13:45 461117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 462738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 471883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 474143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 476679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 477052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 477700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 478760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 481096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 481448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 482036 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:45 483490 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:45 483632 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:45 483808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 486366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 486725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 487304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 488177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 490633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 490991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 491652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 492641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 495059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 495426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 496067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 496893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 499342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 499731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 500343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 501427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 504014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 504369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 505004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 505930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 508443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 508810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 509455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 510334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 512829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 513176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 513829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 514853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 517375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 517745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 518394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 519294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 521866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 522219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 522900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 523785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 526375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 526750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 527426 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:45 528340 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:13:45 528506 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:13:45 528692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 531730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 532102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 532800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 533674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 536262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 536645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 537321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 538176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 540760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 541120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 541826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 542661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 545244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 545625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 546305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 547159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 549732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 550095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 550798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 551610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 552351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 553091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 553824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 554577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 555289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 556041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 556832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 557565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 558290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 559186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 559910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 560631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 561352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 562206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 562952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 563916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 564686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 565351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 566236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 567013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 567756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 568460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 569282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 570059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 570842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 571551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 572307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 573015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 573812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 574521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 575275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 576004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 576798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 577560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 581090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 581521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 582290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 583169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 585897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 586283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 587085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 587945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 590699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 591079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 591836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 592685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 595712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 596095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 596851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 597739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 601351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 601769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 602562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 603456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 606107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 606534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 607285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 609216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 612025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 612411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 613162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 614042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 616767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 617151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 618182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 621190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 621594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 622304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 623275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 625998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 626384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 627131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 628252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 631057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 631337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 631850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 632611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 634300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 634572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 635049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 635587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 637332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 637605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 638083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 638637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 640409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 640669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 641159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 641685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 643379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 643647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 644115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 644627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 646303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 646572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 647042 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:45 647562 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:13:45 649421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 650496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 650746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:45 652421 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:45 652861 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:13:45 661462 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:45 661537 --> Total execution time: 0.2900
INFO - 2019-02-04 00:13:46 519344 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:46 528290 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:46 529886 --> Controller Class Initialized
INFO - 2019-02-04 00:13:46 530941 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:46 531068 --> Total execution time: 0.1114
INFO - 2019-02-04 00:13:56 444216 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:56 453166 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:56 454716 --> Controller Class Initialized
INFO - 2019-02-04 00:13:56 455477 --> Parser Class Initialized
INFO - 2019-02-04 00:13:56 456578 --> Helper loaded: html_helper
INFO - 2019-02-04 00:13:56 460091 --> Model Class Initialized
INFO - 2019-02-04 00:13:56 465282 --> Model Class Initialized
DEBUG - 2019-02-04 00:13:56 466191 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:13:56 467464 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:13:56 468733 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-02-04 00:13:56 468903 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-02-04 00:13:56 470791 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:13:56 472901 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:13:56 473078 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:13:56 474137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 475080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 476042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 476963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 477880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 478832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 479775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 480695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 481759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 483226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 484198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 485292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 486239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 487178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 488118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 489036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 489959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 490890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 491849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 492804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 493750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 494860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 495845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 496792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 497744 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:13:56 498826 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-02-04 00:13:56 498985 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-02-04 00:13:56 499108 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-02-04 00:13:56 501945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 507113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 509052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:13:56 519634 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:13:56 522010 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:13:56 530981 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:56 531124 --> Total execution time: 0.1140
INFO - 2019-02-04 00:13:57 016535 --> Database Driver Class Initialized
INFO - 2019-02-04 00:13:57 021325 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:13:57 022703 --> Controller Class Initialized
INFO - 2019-02-04 00:13:57 023619 --> Final output sent to browser
DEBUG - 2019-02-04 00:13:57 023745 --> Total execution time: 0.0540
INFO - 2019-02-04 00:14:00 137033 --> Database Driver Class Initialized
INFO - 2019-02-04 00:14:00 142652 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:14:00 144051 --> Controller Class Initialized
INFO - 2019-02-04 00:14:00 144818 --> Parser Class Initialized
INFO - 2019-02-04 00:14:00 146908 --> Helper loaded: html_helper
INFO - 2019-02-04 00:14:00 150141 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:14:00 156389 --> Model Class Initialized
DEBUG - 2019-02-04 00:14:00 304313 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:14:00 503729 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:14:00 504612 --> Model Class Initialized
DEBUG - 2019-02-04 00:14:00 505589 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:14:00 509022 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:14:00 510951 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:14:00 511130 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:14:00 605545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 607736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 617110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 619117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 622210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 622693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 623441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 624334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 627188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 627629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 628345 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:14:00 629836 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:14:00 630023 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:14:00 630234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 633172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 633610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 634336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 635138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 638138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 638614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 639370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 640400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 643382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 643850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 644633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 645618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 648627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 649060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 649844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 703083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 706932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 707375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 708168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 709331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 712435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 712887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 713689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 714684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 717839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 718274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 719084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 720032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 723160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 723620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 724442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 725361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 728648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 729100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 729953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 730979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 734154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 734623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 735471 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:14:00 736493 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:14:00 736664 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:14:00 736888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 740686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 741138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 742001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 743001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 746166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 746637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 747489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 748461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 751617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 752058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 752923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 753849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 757035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 757493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 758333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 759264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 762408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 762871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 763737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 764637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 765517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 766370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 767292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 768151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 769001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 769834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 770678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 771512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 772325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 773155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 773981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 774956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 775897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 776840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 777800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 778908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 779849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 780699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 781533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 782350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 783181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 784033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 785026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 785994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 786973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 787837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 788821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 789685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 790673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 791529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 792566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 793405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 794469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 795468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 799041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 799511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 800404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 801433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 804831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 805296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 806200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 807220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 810506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 811016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 811928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 812954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 816121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 816596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 817574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 818690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 822153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 822650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 823566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 824618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 827821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 828278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 829185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 830192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 833375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 833847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 834759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 835769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 838948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 839401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 840327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 843564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 844014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 844899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 846035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 849250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 849730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 850614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 851682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 854958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 855429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 856297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 857364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 860610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 861067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 861999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 863511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 865446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 865720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 866194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 867052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 868850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 869106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 869595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 870376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 872104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 872356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 872840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 873589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 875284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 875554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 876027 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:14:00 903556 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:14:00 912192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 919466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 920686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:14:00 931001 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:14:00 932358 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:14:00 953443 --> Final output sent to browser
DEBUG - 2019-02-04 00:14:00 953624 --> Total execution time: 0.8271
INFO - 2019-02-04 00:14:02 228388 --> Database Driver Class Initialized
INFO - 2019-02-04 00:14:02 234452 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:14:02 235454 --> Controller Class Initialized
INFO - 2019-02-04 00:14:02 236150 --> Final output sent to browser
DEBUG - 2019-02-04 00:14:02 236231 --> Total execution time: 0.1805
INFO - 2019-02-04 00:15:34 309212 --> Database Driver Class Initialized
INFO - 2019-02-04 00:15:34 318242 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:15:34 319714 --> Controller Class Initialized
INFO - 2019-02-04 00:15:34 320451 --> Parser Class Initialized
INFO - 2019-02-04 00:15:34 321532 --> Helper loaded: html_helper
INFO - 2019-02-04 00:15:34 322730 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:15:34 326126 --> Model Class Initialized
DEBUG - 2019-02-04 00:15:34 344907 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:15:34 351280 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:15:34 352061 --> Model Class Initialized
DEBUG - 2019-02-04 00:15:34 352866 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:15:34 356275 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:15:34 358315 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:15:34 358508 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:15:34 362890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 364649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 376362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 378909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 381962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 382427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 383162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 384305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 387125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 387553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 388243 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:15:34 390007 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:15:34 390176 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:15:34 390435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 393299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 393719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 394421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 395472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 398392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 398874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 399611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 400538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 403505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 403939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 404686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 406202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 409203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 409641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 410372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 411429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 414429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 415657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 417442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 418885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 422105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 422565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 423324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 424396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 428200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 428658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 429435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 430452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 433581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 434039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 434853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 435797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 438976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 439415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 440270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 441211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 444351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 444842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 445724 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:15:34 446608 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:15:34 446767 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:15:34 446970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 450102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 450582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 451392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 452353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 455491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 455919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 456790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 457735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 460880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 461314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 462150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 463049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 466171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 466638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 467504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 468380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 471525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 471961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 472810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 473670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 474488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 475267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 476035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 476800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 477591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 478337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 479109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 479854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 480607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 481337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 482086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 482824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 483561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 484282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 485043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 486041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 487183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 488044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 488869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 489696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 490514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 491323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 492257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 493160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 494184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 495018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 495894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 496721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 497555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 498349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 499167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 500000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 500885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 501727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 505270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 505740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 506634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 507545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 510693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 511141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 512033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 512907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 516069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 516546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 517426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 518300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 521362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 521819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 522702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 523576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 526738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 527184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 528074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 528970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 532084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 532550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 533427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 534275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 537369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 537827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 538714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 539572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 542661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 543103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 544012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 547090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 547548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 548381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 549278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 552344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 552815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 553682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 554538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 557692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 558139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 559099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 559981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 563059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 563518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 564351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 565218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 568361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 568835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 569688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 570528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 573726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 574172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 575027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 575867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 578974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 579427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 580276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 581144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 584235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 584707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 585560 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:15:34 586414 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:15:34 589648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 591630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 592070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:34 596671 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:15:34 597460 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:15:34 608124 --> Final output sent to browser
DEBUG - 2019-02-04 00:15:34 608283 --> Total execution time: 0.3280
INFO - 2019-02-04 00:15:35 486838 --> Database Driver Class Initialized
INFO - 2019-02-04 00:15:35 496355 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:15:35 497836 --> Controller Class Initialized
INFO - 2019-02-04 00:15:35 498893 --> Final output sent to browser
DEBUG - 2019-02-04 00:15:35 499017 --> Total execution time: 0.0905
INFO - 2019-02-04 00:15:38 887731 --> Database Driver Class Initialized
INFO - 2019-02-04 00:15:38 891503 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:15:38 892482 --> Controller Class Initialized
ERROR - 2019-02-04 00:15:38 893026 --> Severity: Warning --> Missing argument 1 for Buyer::browseBuyerListing() /home/hzswn06npic1/public_html/bdeals/application/controllers/Buyer.php 285
INFO - 2019-02-04 00:15:38 893534 --> Parser Class Initialized
INFO - 2019-02-04 00:15:38 894275 --> Helper loaded: html_helper
INFO - 2019-02-04 00:15:38 896718 --> Model Class Initialized
INFO - 2019-02-04 00:15:38 900832 --> Model Class Initialized
DEBUG - 2019-02-04 00:15:38 901530 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:15:38 902405 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:15:38 904171 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:15:38 906263 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:15:38 906451 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:15:38 910818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 912616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 914321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 916053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 917783 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:15:38 919403 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:15:38 922183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 923897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 925649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:15:38 936186 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:15:38 938298 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:15:38 948081 --> Final output sent to browser
DEBUG - 2019-02-04 00:15:38 948211 --> Total execution time: 0.0737
INFO - 2019-02-04 00:15:39 506328 --> Database Driver Class Initialized
INFO - 2019-02-04 00:15:39 600291 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:15:39 601732 --> Controller Class Initialized
INFO - 2019-02-04 00:15:39 602377 --> Final output sent to browser
DEBUG - 2019-02-04 00:15:39 602534 --> Total execution time: 0.1294
INFO - 2019-02-04 00:16:45 066922 --> Database Driver Class Initialized
INFO - 2019-02-04 00:16:45 073750 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:16:45 074871 --> Controller Class Initialized
INFO - 2019-02-04 00:16:45 075443 --> Parser Class Initialized
INFO - 2019-02-04 00:16:45 076272 --> Helper loaded: html_helper
INFO - 2019-02-04 00:16:45 077162 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:16:45 079668 --> Model Class Initialized
DEBUG - 2019-02-04 00:16:45 124192 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:16:45 138258 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:16:45 139597 --> Model Class Initialized
DEBUG - 2019-02-04 00:16:45 140849 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:16:45 146559 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:16:45 149369 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:16:45 149574 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:16:45 154488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 156665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 168170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 170624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 173630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 174073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 174851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 175961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 178922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 179348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 180098 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:16:45 181823 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:16:45 181996 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:16:45 182208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 185184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 185627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 186367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 187418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 190466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 190927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 191720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 192784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 195827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 196276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 197092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 198122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 201175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 201632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 202440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 203495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 206602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 207058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 207864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 208926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 212060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 212532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 213325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 214363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 217542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 217983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 218822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 219851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 223043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 223495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 224313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 225366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 228615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 229063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 229916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 231044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 234282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 234774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 235646 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:16:45 236619 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:16:45 236788 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:16:45 237001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 240253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 240741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 241666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 242759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 245990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 246444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 247323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 248337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 251579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 252028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 252908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 253914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 257149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 257630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 258517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 259538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 262768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 263221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 264103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 265079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 266042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 266980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 267913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 268837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 269763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 270678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 271635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 272559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 273468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 274374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 275289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 276216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 277133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 278196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 279145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 280159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 281131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 282098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 283044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 283925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 284884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 285787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 286727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 287589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 288547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 289386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 290357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 291307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 294879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 295331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 296260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 297233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 300473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 300940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 301866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 302850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 306148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 306833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 308528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 309533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 312757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 313227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 314160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 315129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 318521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 318999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 319930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 320921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 324121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 324606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 325519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 326483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 329719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 330194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 331125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 332166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 335469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 335951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 336906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 340109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 340595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 341475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 342483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 345721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 346199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 347089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 348073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 351355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 351836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 352731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 353699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 356909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 357366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 358254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 359257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 362585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 363055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 363990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 365000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 368217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 368722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 369622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 370610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 373836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 374294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 375180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 376199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 379590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 380059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 380954 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:16:45 381953 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:16:45 385082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 387099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 387576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:16:45 390773 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:16:45 391573 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:16:45 402596 --> Final output sent to browser
DEBUG - 2019-02-04 00:16:45 402733 --> Total execution time: 0.3514
INFO - 2019-02-04 00:16:46 320971 --> Database Driver Class Initialized
INFO - 2019-02-04 00:16:46 329893 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:16:46 331440 --> Controller Class Initialized
INFO - 2019-02-04 00:16:46 332537 --> Final output sent to browser
DEBUG - 2019-02-04 00:16:46 332669 --> Total execution time: 0.1863
INFO - 2019-02-04 00:17:09 782665 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:09 796540 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:09 799086 --> Controller Class Initialized
INFO - 2019-02-04 00:17:09 800343 --> Parser Class Initialized
INFO - 2019-02-04 00:17:09 802242 --> Helper loaded: html_helper
INFO - 2019-02-04 00:17:09 804402 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:17:09 810508 --> Model Class Initialized
DEBUG - 2019-02-04 00:17:09 831409 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:17:09 841078 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:17:09 842492 --> Model Class Initialized
DEBUG - 2019-02-04 00:17:09 843720 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:17:09 849324 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:17:09 852735 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:17:09 853043 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:17:09 860846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 863748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 883229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 886846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 892674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 893470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 894864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 896318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 901665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 902374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 903704 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:17:09 906339 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:17:09 906591 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:17:09 906900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 912007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 912694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 913887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 915256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 920547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 921252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 922547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 923902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 929152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 929909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 931230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 932555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 938113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 938832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 940083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 941298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 946741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 947451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 948740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 949915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 955681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 956475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 957803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 958978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 964849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 965589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 966842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 967715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 969975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 970227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 970698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 971384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 973150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 973397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 973889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 974553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 976290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 976550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 977009 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:17:09 977580 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:17:09 977669 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:17:09 977785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 979518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 979762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 980240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 980814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 982564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 982809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 983268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 983812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 985553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 985797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 986279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 986845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 988739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 988996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 989483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 990205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 992027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 992279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 992789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 993486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 994079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 994658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 995177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 995755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 996289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 996849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 997406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 998689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:09 999375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 000011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 000539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 001066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 001610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 002058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 002515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 003465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 004004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 004551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 005088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 005666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 006372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 007584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 008332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 009490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 010206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 011212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 011928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 012614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 016587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 016854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 017340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 017973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 019637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 019877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 020365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 020925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 022654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 022898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 023366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 023895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 025549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 025787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 026271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 026786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 028538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 028784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 029248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 029864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 031534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 031774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 032239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 032763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 034388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 034658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 035126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 035659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 037300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 037565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 038058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 039717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 039954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 040397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 040975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 042608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 042871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 043320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 043858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 045578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 045824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 046272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 046807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 048456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 048702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 049170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 049720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 051433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 051687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 052138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 052674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 054352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 054615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 055083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 055661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 057358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 057621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 058096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 058710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 060576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 060834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 061310 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:17:10 061944 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:17:10 063760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 064918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 065165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:10 067174 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:17:10 067632 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:17:10 075853 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:10 075934 --> Total execution time: 0.3447
INFO - 2019-02-04 00:17:12 873101 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:12 881963 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:12 883258 --> Controller Class Initialized
INFO - 2019-02-04 00:17:12 884273 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:12 884386 --> Total execution time: 0.0533
INFO - 2019-02-04 00:17:42 344882 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:42 357141 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:42 359421 --> Controller Class Initialized
INFO - 2019-02-04 00:17:42 360517 --> Parser Class Initialized
INFO - 2019-02-04 00:17:42 362152 --> Helper loaded: html_helper
INFO - 2019-02-04 00:17:42 363918 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:17:42 368853 --> Model Class Initialized
DEBUG - 2019-02-04 00:17:42 383469 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:17:42 389528 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:17:42 390562 --> Model Class Initialized
DEBUG - 2019-02-04 00:17:42 391370 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:17:42 395066 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:17:42 396929 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:17:42 397079 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:17:42 400986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 402487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 413742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 416064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 420892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 421597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 422760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 423804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 426764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 427186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 427918 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:17:42 430126 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:17:42 430310 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:17:42 430552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 433547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 433959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 434688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 436012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 438962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 439403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 440160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 441840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 444813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 445261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 446023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 447175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 450153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 450608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 451360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 452553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 456120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 456587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 457350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 458353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 461400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 461858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 462646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 463748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 466836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 467264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 468058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 469094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 472208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 472683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 473505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 474535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 477700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 478138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 478984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 479999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 483138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 483645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 484491 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:17:42 485462 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:17:42 485630 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:17:42 485836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 489001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 489473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 490335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 491355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 494519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 494956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 495809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 496782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 499927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 500372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 501220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 502187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 505326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 505774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 506628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 507599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 510732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 511168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 512021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 512973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 513906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 514816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 515724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 516619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 517523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 518399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 519299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 520193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 521095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 521989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 522895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 523783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 524686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 525572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 526467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 527580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 528654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 529767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 530720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 531568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 532507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 533332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 534259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 535099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 536026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 536881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 537846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 538759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 542210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 542692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 543636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 544583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 548127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 548615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 549515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 550457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 553652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 554102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 555002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 555937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 559063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 559525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 560401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 561336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 564555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 565009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 565918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 566852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 569972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 570427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 571312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 572242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 575436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 575901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 576807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 577783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 580935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 581383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 582292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 585431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 585886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 586749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 587703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 591279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 591774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 592648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 593622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 596862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 597327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 598191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 599149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 602271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 602757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 603624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 604583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 608087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 608633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 609508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 610471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 613663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 614125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 614989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 615955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 619147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 619628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 620491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 621440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 624725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 625185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 626293 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:17:42 627279 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:17:42 630273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 632222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 632689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:42 635888 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:17:42 636676 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:17:42 647721 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:42 647856 --> Total execution time: 0.3410
INFO - 2019-02-04 00:17:44 824058 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:44 833256 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:44 835627 --> Controller Class Initialized
INFO - 2019-02-04 00:17:44 836910 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:44 837037 --> Total execution time: 0.0508
INFO - 2019-02-04 00:17:52 025158 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:52 030965 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:52 032387 --> Controller Class Initialized
INFO - 2019-02-04 00:17:52 033286 --> Parser Class Initialized
INFO - 2019-02-04 00:17:52 034286 --> Helper loaded: html_helper
INFO - 2019-02-04 00:17:52 037422 --> Model Class Initialized
INFO - 2019-02-04 00:17:52 041824 --> Model Class Initialized
DEBUG - 2019-02-04 00:17:52 042597 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:17:52 043863 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:17:52 047528 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:17:52 050877 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:17:52 051192 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-02-04 00:17:52 060877 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:17:52 065642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:52 069880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:52 071650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:17:52 082981 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:17:52 085202 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:17:52 093794 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:52 093931 --> Total execution time: 0.0976
INFO - 2019-02-04 00:17:52 606823 --> Database Driver Class Initialized
INFO - 2019-02-04 00:17:52 612518 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:17:52 614043 --> Controller Class Initialized
INFO - 2019-02-04 00:17:52 615014 --> Final output sent to browser
DEBUG - 2019-02-04 00:17:52 615144 --> Total execution time: 0.0489
INFO - 2019-02-04 00:18:04 397334 --> Database Driver Class Initialized
INFO - 2019-02-04 00:18:04 403362 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:18:04 404438 --> Controller Class Initialized
INFO - 2019-02-04 00:18:04 404968 --> Parser Class Initialized
INFO - 2019-02-04 00:18:04 406328 --> Helper loaded: html_helper
INFO - 2019-02-04 00:18:04 407071 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:18:04 409183 --> Model Class Initialized
DEBUG - 2019-02-04 00:18:04 507757 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:18:04 513068 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:18:04 513606 --> Model Class Initialized
DEBUG - 2019-02-04 00:18:04 514267 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:18:04 516174 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:18:04 518866 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:18:04 519038 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:18:04 523662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 525432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 537381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 539289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 540841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 541081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 541502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 542382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 544054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 544280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 544718 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:18:04 545938 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:18:04 546031 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:18:04 546145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 547719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 547941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 548335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 549041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 550673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 550913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 551323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 551999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 553606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 553847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 554258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 554915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 556535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 556778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 557198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 557847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 559484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 559720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 560142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 560789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 562433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 562680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 563107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 563986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 565643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 565879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 566306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 567078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 568742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 568978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 569423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 570116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 571816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 572055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 572514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 573167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 574846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 575084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 575808 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:18:04 576894 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:18:04 577075 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:18:04 577341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 584952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 585678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 587364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 588386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 595953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 596678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 598361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 599436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 605051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 605290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 605751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 606504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 608135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 608370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 608839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 609713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 611345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 611593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 612040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 612724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 613374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 614023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 614645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 615336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 616143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 616991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 617616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 618232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 618844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 619451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 620079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 620717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 621313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 621921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 622737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 623292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 623930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 624417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 625066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 625511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 626133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 626586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 627212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 627666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 628282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 628732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 629400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 630124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 632581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 632827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 633306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 633873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 635540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 635782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 636259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 636866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 639154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 639408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 639903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 640459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 642105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 642343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 642838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 643332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 645028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 645273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 645770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 646322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 647969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 648214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 648705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 649197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 650863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 651107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 651602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 652106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 653814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 654061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 654560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 656198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 656450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 656914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 657428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 659085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 659327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 659831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 660357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 662054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 662303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 662779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 663400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 665051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 665292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 665766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 666270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 667965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 668216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 668694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 669192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 670846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 671091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 671569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 672329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 673995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 674247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 674720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 675589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 677304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 677570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 678029 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:18:04 678895 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:18:04 680511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 681545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 681787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:18:04 683434 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:18:04 683845 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:18:04 692333 --> Final output sent to browser
DEBUG - 2019-02-04 00:18:04 692406 --> Total execution time: 0.3139
INFO - 2019-02-04 00:18:06 481221 --> Database Driver Class Initialized
INFO - 2019-02-04 00:18:06 487201 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:18:06 488791 --> Controller Class Initialized
INFO - 2019-02-04 00:18:06 489485 --> Final output sent to browser
DEBUG - 2019-02-04 00:18:06 489593 --> Total execution time: 0.0449
INFO - 2019-02-04 00:19:57 853404 --> Database Driver Class Initialized
INFO - 2019-02-04 00:19:57 862464 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:19:57 864090 --> Controller Class Initialized
INFO - 2019-02-04 00:19:57 864717 --> Parser Class Initialized
INFO - 2019-02-04 00:19:57 865540 --> Helper loaded: html_helper
INFO - 2019-02-04 00:19:57 868143 --> Model Class Initialized
INFO - 2019-02-04 00:19:57 871416 --> Model Class Initialized
DEBUG - 2019-02-04 00:19:57 871897 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:19:57 872739 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:19:57 874469 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:19:57 876005 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:19:57 876136 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-02-04 00:19:57 880450 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:19:57 882405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:19:57 883634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:19:57 884824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:19:57 891704 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:19:57 893115 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:19:57 900755 --> Final output sent to browser
DEBUG - 2019-02-04 00:19:57 900892 --> Total execution time: 0.0800
INFO - 2019-02-04 00:19:58 385539 --> Database Driver Class Initialized
INFO - 2019-02-04 00:19:58 389611 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:19:58 390712 --> Controller Class Initialized
INFO - 2019-02-04 00:19:58 391402 --> Final output sent to browser
DEBUG - 2019-02-04 00:19:58 391515 --> Total execution time: 0.0333
INFO - 2019-02-04 00:20:07 754998 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:07 763997 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:07 765501 --> Controller Class Initialized
INFO - 2019-02-04 00:20:07 766231 --> Parser Class Initialized
INFO - 2019-02-04 00:20:07 767352 --> Helper loaded: html_helper
INFO - 2019-02-04 00:20:07 768590 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:20:07 772053 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:07 788537 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:20:07 795345 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:20:07 796152 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:07 796947 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:20:07 800281 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:20:07 802325 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:20:07 802539 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:20:07 806930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 808712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 818835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 821027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 823991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 824429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 825150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 826199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 828993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 829395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 830106 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:07 831819 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:07 831999 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:07 832202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 835020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 835434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 836136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 837162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 840054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 840496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 841217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 842228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 845074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 845530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 846254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 847309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 850205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 850647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 851378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 852369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 855340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 855776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 856534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 857507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 860538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 860964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 861733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 862759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 865807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 866221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 867003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 868032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 871083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 871556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 872350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 873333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 876467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 876904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 877728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 878684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 881863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 882294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 883121 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:07 884068 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:07 884222 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:07 884445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 887541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 887964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 888807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 889822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 892921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 893346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 894172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 895174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 898256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 898711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 899584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 900562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 903688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 904118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 904973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 906611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 909720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 910150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 910994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 912100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 913052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 913974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 915635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 916538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 917416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 918320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 919137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 920428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 921324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 922226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 923144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 924066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 924868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 925606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 926330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 927362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 928150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 929060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 929855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 930691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 931474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 932276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 933065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 933909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 934700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 935519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 936323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 937093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 940480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 940916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 941801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 942594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 945677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 946115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 947004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 947796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 950952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 951394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 952275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 953114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 956193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 956645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 957529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 958308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 961477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 961922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 962810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 963599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 966690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 967128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 968008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 968787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 971932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 972378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 973264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 974082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 979646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 980093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 980986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 984061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 984508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 985332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 986191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 989270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 989737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 990583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 991378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 994539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 995003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 995851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 996666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:07 999739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 000174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 001024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 001842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 005002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 005470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 006300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 007155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 010227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 010701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 011552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 012350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 015434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 015887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 016737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 017577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 020782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 021226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 022077 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:08 022921 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:20:08 025945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 027900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 028337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:08 031435 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:08 032196 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:20:08 042978 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:08 043109 --> Total execution time: 0.3259
INFO - 2019-02-04 00:20:09 593868 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:09 605159 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:09 606677 --> Controller Class Initialized
INFO - 2019-02-04 00:20:09 607700 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:09 607825 --> Total execution time: 0.0793
INFO - 2019-02-04 00:20:46 456154 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:46 464929 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:46 466475 --> Controller Class Initialized
INFO - 2019-02-04 00:20:46 467219 --> Parser Class Initialized
INFO - 2019-02-04 00:20:46 468326 --> Helper loaded: html_helper
INFO - 2019-02-04 00:20:46 469599 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:20:46 473114 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:46 489284 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:20:46 496212 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:20:46 497080 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:46 497873 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:20:46 501353 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:20:46 503463 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:20:46 503644 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:20:46 508079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 509888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 520567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 522913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 526284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 526804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 527601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 528780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 531671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 532087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 532885 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:46 534419 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:46 534601 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:46 534816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 537790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 538208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 538963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 539794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 542820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 543262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 544034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 544872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 547863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 548311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 549084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 549900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 553575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 554028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 554831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 555692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 558784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 559223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 560024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 560856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 564038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 564510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 565294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 566194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 569340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 569802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 571111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 572110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 575288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 575751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 576596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 577565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 580806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 581254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 582109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 583005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 586452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 586910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 587779 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:46 588685 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:46 588851 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:46 589057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 592238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 592715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 593589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 594520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 597774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 598242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 599112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 600014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 603220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 603697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 604585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 605602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 608957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 609443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 610306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 611262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 614460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 614917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 615803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 616689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 617531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 618333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 619175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 619982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 620775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 621575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 622350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 623195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 624025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 624808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 625588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 626358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 627185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 627968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 628762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 629664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 630558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 631494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 632322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 633232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 634146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 635011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 635847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 636704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 637564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 638401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 639256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 640089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 643362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 643835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 644783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 645643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 648821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 649281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 650202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 651110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 654371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 654856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 655791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 656646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 659821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 660269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 661185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 662041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 665288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 665772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 666718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 667582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 670769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 671227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 672142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 672996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 676202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 676685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 677609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 678530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 681747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 682202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 683130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 686306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 686779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 687669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 688564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 691745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 692203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 693083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 693978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 697233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 697726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 698620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 699496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 702749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 703212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 704099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 705013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 708283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 708781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 709672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 710562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 713748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 714207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 715118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 715993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 719192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 719682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 720570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 721472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 724808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 725271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 726159 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:46 727076 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:20:46 730221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 732225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 732708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:46 735915 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:46 736722 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:20:46 747997 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:46 748135 --> Total execution time: 0.3161
INFO - 2019-02-04 00:20:47 860972 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:47 869687 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:47 871222 --> Controller Class Initialized
INFO - 2019-02-04 00:20:47 872297 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:47 872462 --> Total execution time: 0.1619
INFO - 2019-02-04 00:20:48 726457 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:48 738343 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:48 742182 --> Controller Class Initialized
INFO - 2019-02-04 00:20:48 743122 --> Parser Class Initialized
INFO - 2019-02-04 00:20:48 744255 --> Helper loaded: html_helper
INFO - 2019-02-04 00:20:48 745620 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:20:48 750463 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:48 764599 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:20:48 771223 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:20:48 772146 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:48 772994 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:20:48 776446 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:20:48 778558 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:20:48 778738 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:20:48 783137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 784833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 794682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 796824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 799846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 800280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 801033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 801997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 804867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 805284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 806014 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:48 807574 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:48 807742 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:48 807948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 810815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 811218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 811944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 812865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 815793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 816225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 816977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 817903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 820811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 821247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 822005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 822936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 825947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 826375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 827174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 828074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 831162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 831711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 832500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 833384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 836441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 836890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 837670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 838587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 841650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 842071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 842911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 843817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 846931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 847357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 848170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 849055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 852284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 852751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 853586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 854547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 857743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 858184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 859021 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:48 859872 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:48 860023 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:48 860224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 863439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 863923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 864775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 865679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 868822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 869252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 870095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 871081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 874216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 874671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 875523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 876394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 879569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 880001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 880851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 881738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 884859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 885293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 886143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 887006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 887830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 888638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 889432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 890221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 891006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 891798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 892591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 893361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 894171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 894948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 895728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 896505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 897265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 898045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 898859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 899785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 900665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 901572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 902407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 903234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 904071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 904901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 906194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 907030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 907869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 908703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 909569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 910378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 913817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 914258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 915157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 916001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 919122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 919595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 920481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 921336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 924576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 925046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 925995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 927140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 930267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 930732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 931624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 932723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 935915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 936363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 937261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 938159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 941277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 941742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 942639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 943533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 946666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 947107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 948003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 948896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 952047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 952512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 953403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 956541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 956971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 957830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 958735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 961868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 962310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 963164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 964041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 967247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 967730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 968591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 969453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 972579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 973016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 973877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 974744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 977940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 978388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 979239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 980143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 983319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 983880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 984760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 985696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 988841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 989281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 990138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 991029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 994276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 994746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:48 995611 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:48 996491 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:20:48 999502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:49 001452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:49 001900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:49 004993 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:49 005779 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:20:49 016856 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:49 017002 --> Total execution time: 0.3134
INFO - 2019-02-04 00:20:49 640718 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:49 652081 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:49 653709 --> Controller Class Initialized
INFO - 2019-02-04 00:20:49 654762 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:49 654889 --> Total execution time: 0.1468
INFO - 2019-02-04 00:20:57 467153 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:57 477662 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:57 479176 --> Controller Class Initialized
INFO - 2019-02-04 00:20:57 479922 --> Parser Class Initialized
INFO - 2019-02-04 00:20:57 481029 --> Helper loaded: html_helper
INFO - 2019-02-04 00:20:57 482243 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:20:57 485732 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:57 500122 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:20:57 506854 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:20:57 508156 --> Model Class Initialized
DEBUG - 2019-02-04 00:20:57 509190 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:20:57 514722 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:20:57 517946 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:20:57 518189 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:20:57 525341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 527811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 544548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 547786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 553116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 553833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 555064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 556386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 561280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 561944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 563137 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:57 565349 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:57 565593 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:57 565895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 570842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 571520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 572716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 574002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 578962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 579736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 580964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 582237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 587110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 587860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 589099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 590413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 595345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 596016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 597249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 598509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 601500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 601927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 605654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 606811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 610284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 610747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 611568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 612612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 615721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 616147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 616933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 617908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 621833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 622265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 623213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 624207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 627371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 627850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 628746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 629734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 634216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 634680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 635504 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:20:57 636507 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:20:57 636662 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:20:57 636862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 639955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 640402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 641810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 642905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 646042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 646568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 647417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 648489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 651617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 652046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 652910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 653753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 656924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 657362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 658201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 658936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 662094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 662554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 663500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 664195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 664841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 665487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 666099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 666699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 667309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 667939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 668556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 669425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 670232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 671020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 671812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 672590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 673342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 674175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 674952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 675854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 702855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 703879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 704771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 705670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 706516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 707362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 708198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 709064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 709904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 710762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 711625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 712426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 715981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 716427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 717338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 718216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 721348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 721803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 722687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 723563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 726906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 727355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 728255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 728943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 732033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 732484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 733366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 734016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 737225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 737713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 738600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 739512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 742629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 743100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 744025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 744894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 748022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 748485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 749353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 750196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 753295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 753751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 754638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 757708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 758136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 758975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 759825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 762908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 763361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 764246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 765098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 768244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 768714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 769558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 770370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 773468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 773902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 774749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 775650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 778784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 779232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 780076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 780935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 784013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 784470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 785299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 786130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 789208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 789671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 790513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 791325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 794581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 795032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 795896 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:57 796776 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:20:57 799791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 801712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 802145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:20:57 805197 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:20:57 805968 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:20:57 824800 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:57 824933 --> Total execution time: 0.3688
INFO - 2019-02-04 00:20:58 835957 --> Database Driver Class Initialized
INFO - 2019-02-04 00:20:58 858645 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:20:58 860212 --> Controller Class Initialized
INFO - 2019-02-04 00:20:58 861303 --> Final output sent to browser
DEBUG - 2019-02-04 00:20:58 861445 --> Total execution time: 0.1584
INFO - 2019-02-04 00:21:56 178535 --> Database Driver Class Initialized
INFO - 2019-02-04 00:21:56 187385 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:21:56 188884 --> Controller Class Initialized
INFO - 2019-02-04 00:21:56 189634 --> Parser Class Initialized
INFO - 2019-02-04 00:21:56 190717 --> Helper loaded: html_helper
INFO - 2019-02-04 00:21:56 191930 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:21:56 195339 --> Model Class Initialized
DEBUG - 2019-02-04 00:21:56 210695 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:21:56 216948 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:21:56 217737 --> Model Class Initialized
DEBUG - 2019-02-04 00:21:56 218517 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:21:56 221879 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:21:56 223946 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:21:56 224121 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:21:56 228482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 230192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 240197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 242307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 245326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 245785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 246537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 247497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 250328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 250755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 251476 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:21:56 252963 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:21:56 253129 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:21:56 253334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 256198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 256637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 257344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 258234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 261188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 261647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 262382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 263519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 266462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 266910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 267674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 268774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 271759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 272186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 272964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 276783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 281258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 281738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 282526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 283641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 286776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 287214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 288000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 289031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 292156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 292628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 293414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 294449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 297642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 298079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 298912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 299943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 303232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 303708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 304552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 305541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 309252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 309725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 310695 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:21:56 311631 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:21:56 311794 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:21:56 311997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 315203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 315681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 316534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 317523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 321261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 321734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 322594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 323585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 327542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 328099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 329560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 330676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 333862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 334304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 335166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 336124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 339278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 339744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 340619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 341581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 342498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 343396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 344309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 345252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 346155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 347043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 347961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 348867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 349751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 350635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 351548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 352427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 353317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 354203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 355101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 356148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 357084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 358349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 359287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 360552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 361494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 362332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 363811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 365149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 366270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 367613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 368633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 369539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 374587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 375030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 375946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 376713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 379856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 380301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 381201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 382101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 385328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 385795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 386714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 387474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 390613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 391050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 391949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 392705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 395916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 396367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 397270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 399049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 402211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 402703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 403611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 404663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 408284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 408751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 409667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 410620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 413808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 414258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 415180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 418359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 418833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 419707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 420675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 423863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 424315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 425178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 426063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 429356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 429840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 430715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 431591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 434880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 435333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 436194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 437052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 440267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 440747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 441625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 442472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 445632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 446082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 446952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 447892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 451040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 451503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 452353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 453217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 456500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 456949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 457825 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:21:56 458697 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:21:56 461707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 463670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 464109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:21:56 467349 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:21:56 468135 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:21:56 479196 --> Final output sent to browser
DEBUG - 2019-02-04 00:21:56 479331 --> Total execution time: 0.3244
INFO - 2019-02-04 00:21:57 314855 --> Database Driver Class Initialized
INFO - 2019-02-04 00:21:57 440561 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:21:57 441947 --> Controller Class Initialized
INFO - 2019-02-04 00:21:57 442991 --> Final output sent to browser
DEBUG - 2019-02-04 00:21:57 443198 --> Total execution time: 0.2491
INFO - 2019-02-04 00:23:07 130340 --> Database Driver Class Initialized
INFO - 2019-02-04 00:23:07 142153 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:23:07 143197 --> Controller Class Initialized
INFO - 2019-02-04 00:23:07 143723 --> Parser Class Initialized
INFO - 2019-02-04 00:23:07 144481 --> Helper loaded: html_helper
INFO - 2019-02-04 00:23:07 145317 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:23:07 147682 --> Model Class Initialized
DEBUG - 2019-02-04 00:23:07 217211 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:23:07 304133 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:23:07 304832 --> Model Class Initialized
DEBUG - 2019-02-04 00:23:07 305912 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:23:07 309526 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:23:07 311624 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:23:07 311805 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:23:07 316432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 318331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 333818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 337095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 340121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 340589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 341320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 342437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 345329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 345766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 346492 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:23:07 348170 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:23:07 348340 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:23:07 348581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 351449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 351865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 352596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 353625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 356606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 357039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 357796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 358824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 361768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 362210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 362971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 364334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 367363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 367815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 368588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 369601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 372709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 373142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 373924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 374895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 377993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 378432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 379204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 380168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 383268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 383718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 384519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 385442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 388566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 388991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 389816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 390788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 393980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 394438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 395272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 396249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 399399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 402265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 403134 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:23:07 404033 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:23:07 404191 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:23:07 404392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 408153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 408612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 409466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 410393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 413631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 414072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 414927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 415921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 419066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 419523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 420362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 421329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 424518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 424954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 425826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 426806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 429954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 430392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 431258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 432224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 433089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 433934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 434772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 435602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 436408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 437239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 438091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 438920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 439769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 440587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 441386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 442198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 442986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 443844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 444684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 445740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 446638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 447571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 448422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 449268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 450135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 450989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 451874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 452721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 453594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 454426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 455315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 456161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 459705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 460153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 461066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 461958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 465100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 465573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 466480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 467355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 470599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 471049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 471990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 472882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 476021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 476476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 477360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 478246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 481477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 481930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 482856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 483788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 487010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 487490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 488372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 489262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 492423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 492886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 493792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 494690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 497914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 498363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 499278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 502424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 502872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 503737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 504695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 507848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 508294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 509152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 510077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 513302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 513777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 514647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 515563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 518702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 519139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 519999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 520883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 524069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 524540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 525389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 526281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 529434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 529897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 530761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 531697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 534856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 535305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 536159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 537082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 540342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 540821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 541686 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:23:07 542603 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:23:07 545640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 547616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 548052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:23:07 551187 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:23:07 551970 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:23:07 562983 --> Final output sent to browser
DEBUG - 2019-02-04 00:23:07 563121 --> Total execution time: 0.4474
INFO - 2019-02-04 00:23:08 358633 --> Database Driver Class Initialized
INFO - 2019-02-04 00:23:08 363590 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:23:08 364932 --> Controller Class Initialized
INFO - 2019-02-04 00:23:08 365720 --> Final output sent to browser
DEBUG - 2019-02-04 00:23:08 365842 --> Total execution time: 0.0418
INFO - 2019-02-04 00:24:11 786788 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:11 796295 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:11 797846 --> Controller Class Initialized
INFO - 2019-02-04 00:24:11 798681 --> Parser Class Initialized
INFO - 2019-02-04 00:24:11 799793 --> Helper loaded: html_helper
INFO - 2019-02-04 00:24:11 801014 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:24:11 805032 --> Model Class Initialized
DEBUG - 2019-02-04 00:24:11 818994 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:24:11 825916 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:24:11 826721 --> Model Class Initialized
DEBUG - 2019-02-04 00:24:11 827711 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:24:11 831098 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:24:11 833448 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:24:11 833632 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:24:11 838402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 840281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 852204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 855192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 858270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 858728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 859469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 860539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 863315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 863744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 864458 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:24:11 866581 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:24:11 866909 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:24:11 867127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 870147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 870873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 871716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 872778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 875938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 876379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 877706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 879106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 882287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 882802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 883568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 884608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 887521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 887947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 888851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 889843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 893064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 893518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 894269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 895345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 898384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 898840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 899621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 900536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 903733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 904161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 904958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 906260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 909755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 910192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 911005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 911881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 915061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 915525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 916331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 917206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 920353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 920811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 921787 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:24:11 922620 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:24:11 922797 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:24:11 923001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 926109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 926568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 927382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 928267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 931525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 932193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 933047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 933932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 937160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 937673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 938522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 939380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 942625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 944053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 945976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 946914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 950001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 950453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 951284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 952169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 953006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 953799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 954587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 955347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 956119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 956935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 957709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 958473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 959224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 959990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 960755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 961849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 962728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 963537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 964306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 965169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 965982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 966887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 967706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 968566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 969377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 970216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 971344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 972858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 974160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 974999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 975851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 976655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 980043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 980535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 981431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 982264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 985783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 986238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 987176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 988022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 991199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 991681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 992799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 993633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 996726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 997427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 998307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:11 999146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 002310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 002808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 003706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 004565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 007668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 008115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 008999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 009862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 013180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 013660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 014558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 015450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 018762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 019404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 020297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 023562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 024569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 025722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 026638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 030088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 030571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 031672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 032581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 035908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 036540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 037841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 039237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 043591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 044045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 044905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 046094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 050189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 050684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 051551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 052609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 055943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 056415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 057267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 058171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 062128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 062617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 063493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 064517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 067825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 068418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 069444 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:12 070312 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:24:12 074481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 076616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 077061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:12 080213 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:12 081018 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:24:12 101207 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:12 101356 --> Total execution time: 0.3437
INFO - 2019-02-04 00:24:13 127065 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:13 131669 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:13 132437 --> Controller Class Initialized
INFO - 2019-02-04 00:24:13 132985 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:13 133049 --> Total execution time: 0.0437
INFO - 2019-02-04 00:24:16 611304 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:16 616815 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:16 618263 --> Controller Class Initialized
ERROR - 2019-02-04 00:24:16 619263 --> Severity: Warning --> Missing argument 1 for Buyer::browseBuyerListing() /home/hzswn06npic1/public_html/bdeals/application/controllers/Buyer.php 285
INFO - 2019-02-04 00:24:16 619998 --> Parser Class Initialized
INFO - 2019-02-04 00:24:16 621206 --> Helper loaded: html_helper
INFO - 2019-02-04 00:24:16 625019 --> Model Class Initialized
INFO - 2019-02-04 00:24:16 630940 --> Model Class Initialized
DEBUG - 2019-02-04 00:24:16 631742 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:24:16 633008 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:24:16 635656 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:24:16 638143 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:24:16 638530 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:24:16 643378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 645308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 647084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 648983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 650789 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:16 652471 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:24:16 655375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 657476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 659486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:16 669900 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:16 672339 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:24:16 681446 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:16 681634 --> Total execution time: 0.0966
INFO - 2019-02-04 00:24:17 477278 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:17 482559 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:17 484173 --> Controller Class Initialized
INFO - 2019-02-04 00:24:17 484891 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:17 485019 --> Total execution time: 0.0531
INFO - 2019-02-04 00:24:51 834350 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:51 842565 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:51 844029 --> Controller Class Initialized
INFO - 2019-02-04 00:24:51 844789 --> Parser Class Initialized
INFO - 2019-02-04 00:24:51 845884 --> Helper loaded: html_helper
INFO - 2019-02-04 00:24:51 847109 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:24:51 850558 --> Model Class Initialized
DEBUG - 2019-02-04 00:24:51 863810 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:24:51 869985 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:24:51 870768 --> Model Class Initialized
DEBUG - 2019-02-04 00:24:51 871510 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:24:51 874830 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:24:51 876883 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:24:51 877054 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:24:51 881717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 883514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 893702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 895827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 898808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 899233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 899966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 900887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 903673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 904077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 904798 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:24:51 906739 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:24:51 906904 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:24:51 907107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 909941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 910340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 911047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 911956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 914836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 915260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 915997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 916892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 919742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 920169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 920912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 921818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 924715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 925127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 925879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 926743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 929719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 930150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 930908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 931807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 934814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 935239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 936008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 936907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 939950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 940366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 941143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 942013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 945219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 945677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 946485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 947326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 950458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 950894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 951716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 952589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 955677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 956103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 956928 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:24:51 957748 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:24:51 957905 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:24:51 958100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 961154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 961602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 962413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 963644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 966743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 967174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 968005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 968904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 971988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 972419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 973249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 974102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 977199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 977669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 978526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 979393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 982487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 982923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 983786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 984621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 985403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 986180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 986943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 987934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 988826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 989630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 990415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 991184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 991945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 992717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 993472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 994211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 994960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 995711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 996474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 997313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 998138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:51 999042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 000030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 000854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 001682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 002490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 003298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 004112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 005055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 005875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 006831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 007664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 010904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 011336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 012212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 013053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 016197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 016671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 017550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 018395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 021615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 022068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 022958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 023828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 026916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 027349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 028220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 029088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 032242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 032710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 033596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 034446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 037533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 037972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 038855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 039695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 042792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 043227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 044121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 044998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 048113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 048577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 049458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 052548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 052977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 053828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 054704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 057787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 058342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 059266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 060147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 063314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 063786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 064642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 065574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 068788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 069230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 070085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 070962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 074116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 074594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 075432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 076297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 079381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 079842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 080692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 081609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 084742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 085190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 086042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 086914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 090138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 090626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 091475 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:52 092318 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:24:52 095257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 097197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 097661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:24:52 100759 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:24:52 101531 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:24:52 112385 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:52 112545 --> Total execution time: 0.3058
INFO - 2019-02-04 00:24:55 706846 --> Database Driver Class Initialized
INFO - 2019-02-04 00:24:55 716408 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:24:55 718096 --> Controller Class Initialized
INFO - 2019-02-04 00:24:55 719391 --> Final output sent to browser
DEBUG - 2019-02-04 00:24:55 719553 --> Total execution time: 0.0562
INFO - 2019-02-04 00:25:05 836154 --> Database Driver Class Initialized
INFO - 2019-02-04 00:25:05 844947 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:25:05 846436 --> Controller Class Initialized
INFO - 2019-02-04 00:25:05 847168 --> Parser Class Initialized
INFO - 2019-02-04 00:25:05 848248 --> Helper loaded: html_helper
INFO - 2019-02-04 00:25:05 851758 --> Model Class Initialized
INFO - 2019-02-04 00:25:05 857321 --> Model Class Initialized
DEBUG - 2019-02-04 00:25:05 858104 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:25:05 859322 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:25:05 861823 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:25:05 863852 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:25:05 864032 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:25:05 868585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:25:05 870369 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:25:05 872103 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:25:05 874978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:25:05 876697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:25:05 878509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:25:05 889486 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:25:05 891613 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:25:05 901092 --> Final output sent to browser
DEBUG - 2019-02-04 00:25:05 901226 --> Total execution time: 0.1108
INFO - 2019-02-04 00:25:07 136656 --> Database Driver Class Initialized
INFO - 2019-02-04 00:25:07 147945 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:25:07 151002 --> Controller Class Initialized
INFO - 2019-02-04 00:25:07 152013 --> Final output sent to browser
DEBUG - 2019-02-04 00:25:07 152137 --> Total execution time: 0.0517
INFO - 2019-02-04 00:26:41 632955 --> Database Driver Class Initialized
INFO - 2019-02-04 00:26:41 641963 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:26:41 643492 --> Controller Class Initialized
INFO - 2019-02-04 00:26:41 644234 --> Parser Class Initialized
INFO - 2019-02-04 00:26:41 645323 --> Helper loaded: html_helper
INFO - 2019-02-04 00:26:41 646586 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:26:41 650866 --> Model Class Initialized
DEBUG - 2019-02-04 00:26:41 665064 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:26:41 671891 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:26:41 672743 --> Model Class Initialized
DEBUG - 2019-02-04 00:26:41 673607 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:26:41 677066 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:26:41 679136 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:26:41 679312 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:26:41 683906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 685769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 696521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 698759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 702208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 702698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 703449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 704564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 707459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 707878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 708664 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:26:41 710300 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:26:41 710494 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:26:41 710726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 713673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 714082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 714806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 715807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 718847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 719283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 720045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 721029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 723978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 724446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 725188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 726201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 729224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 729696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 730453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 731551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 734153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 734453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 734941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 735757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 737662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 737938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 738428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 739159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 741343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 741633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 742341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 743089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 745021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 745290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 745809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 746525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 748513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 748788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 749294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 750031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 752005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 752276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 752809 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:26:41 753474 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:26:41 753577 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:26:41 753705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 755662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 755934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 756464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 757139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 759098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 759370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 759900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 760592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 762615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 762897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 763426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 764107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 766319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 766623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 767148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 767848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 769815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 770090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 770632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 771291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 771944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 772586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 773209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 773845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 774472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 775089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 775719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 776326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 776952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 777573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 778182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 778805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 779412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 780024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 780666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 781194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 781845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 782407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 783143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 783673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 784454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 784962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 785661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 786170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 786849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 787369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 788070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 788753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 790815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 791089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 791659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 792337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 794294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 794712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 795267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 796000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 798186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 798490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 799041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 799654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 801611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 801886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 802453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 803045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 805054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 805336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 805898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 806507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 808845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 809132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 809706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 810327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 812293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 812588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 813144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 813787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 815751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 816031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 816618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 818594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 818870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 819397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 820024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 821983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 822263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 822813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 823457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 825478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 825779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 826311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 827073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 829019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 829296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 829838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 830488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 832495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 832781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 833309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 833936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 835902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 836184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 836734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 837328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 839293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 839593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 840126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 840732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 842698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 842981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 843527 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:26:41 844127 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:26:41 846071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 847270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 847564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:26:41 849510 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:26:41 849991 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:26:41 859088 --> Final output sent to browser
DEBUG - 2019-02-04 00:26:41 859174 --> Total execution time: 0.2526
INFO - 2019-02-04 00:26:44 824193 --> Database Driver Class Initialized
INFO - 2019-02-04 00:26:44 830322 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:26:44 831382 --> Controller Class Initialized
INFO - 2019-02-04 00:26:44 832149 --> Final output sent to browser
DEBUG - 2019-02-04 00:26:44 832233 --> Total execution time: 0.0373
INFO - 2019-02-04 00:28:06 216459 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:06 224947 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:06 226443 --> Controller Class Initialized
INFO - 2019-02-04 00:28:06 227185 --> Parser Class Initialized
INFO - 2019-02-04 00:28:06 228254 --> Helper loaded: html_helper
INFO - 2019-02-04 00:28:06 229494 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:28:06 232899 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:06 246639 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:28:06 253444 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:28:06 254256 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:06 255081 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:28:06 258474 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:28:06 260523 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:28:06 260706 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:28:06 265162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 267024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 277054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 279244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 282237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 282690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 283421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 284396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 287200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 287636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 288332 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:06 289985 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:06 290153 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:06 290359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 293257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 293692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 294387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 295366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 298285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 298737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 299489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 300597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 303527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 303957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 304708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 305931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 309077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 309525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 310267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 311240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 314397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 314843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 315606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 316621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 319679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 320106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 320887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 321856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 324923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 325342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 326133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 327119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 330254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 330715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 331526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 332495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 335680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 336111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 336941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 337946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 341075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 341525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 342333 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:06 343266 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:06 343460 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:06 343691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 346827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 347258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 348093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 349052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 352210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 352679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 353518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 354507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 357630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 358066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 358907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 359893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 363049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 363511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 364350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 365427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 368602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 369050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 369911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 370883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 371845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 372734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 373625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 374500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 375400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 376292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 377193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 378091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 379061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 379964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 380846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 381705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 382602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 383465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 384380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 385354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 386255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 387171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 388101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 388941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 389858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 390702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 391619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 392437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 393340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 394175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 395139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 396034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 399441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 399889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 400778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 401758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 404927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 405942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 406769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 407648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 410630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 411046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 411873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 412754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 415651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 416053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 416876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 417738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 420706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 421123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 421952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 422844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 425738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 426146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 426970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 427835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 430751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 431169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 431996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 432884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 435789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 436202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 437042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 439905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 440305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 441092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 441996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 444895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 445310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 446094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 446993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 449965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 450383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 451174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 452076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 454966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 455378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 456167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 457092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 460050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 460489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 461277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 462177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 465095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 465537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 466309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 467231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 470124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 470556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 471329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 472254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 475296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 475749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 476541 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:06 477422 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:28:06 480204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 482084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 482512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:06 485481 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:06 486195 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:28:06 496227 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:06 496365 --> Total execution time: 0.3111
INFO - 2019-02-04 00:28:08 663964 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:08 669581 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:08 670463 --> Controller Class Initialized
INFO - 2019-02-04 00:28:08 671101 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:08 671173 --> Total execution time: 0.0296
INFO - 2019-02-04 00:28:23 835704 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:23 845084 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:23 846638 --> Controller Class Initialized
INFO - 2019-02-04 00:28:23 847376 --> Parser Class Initialized
INFO - 2019-02-04 00:28:23 848469 --> Helper loaded: html_helper
INFO - 2019-02-04 00:28:23 849742 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:28:23 853290 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:23 866835 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:28:23 873306 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:28:23 874154 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:23 874931 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:28:23 878386 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:28:23 880542 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:28:23 880719 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:28:23 885219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 887020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 909769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 911952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 914959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 915397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 916145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 917025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 919869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 920278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 921005 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:23 922516 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:23 922683 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:23 922887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 925760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 926166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 926893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 928045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 931021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 931477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 932212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 933114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 936026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 936486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 937227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 938137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 941076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 941540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 942286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 943152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 946168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 946619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 947369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 948256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 951386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 951857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 952644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 953524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 956608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 957031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 957834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 958678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 961776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 962203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 963027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 963852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 967065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 967529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 968346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 969177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 972316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 972765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 973617 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:23 974387 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:23 974561 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:23 974761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 977864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 978295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 979139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 979964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 983143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 983611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 984453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 985282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 988414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 988859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:23 989717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 052149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 055659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 056094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 056953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 057847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 060914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 061347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 062184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 062984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 063744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 064506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 065234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 065998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 066731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 067433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 068154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 068869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 069657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 070420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 071125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 071831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 072587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 073287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 074006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 074877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 075634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 076533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 077285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 078110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 078871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 079693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 080452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 081998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 083158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 083988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 084790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 085551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 088788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 089220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 090114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 090919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 094022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 094481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 095336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 096117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 099329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 099832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 100752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 101562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 104660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 105091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 105977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 106754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 109913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 110358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 111243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 111964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 115051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 115509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 116370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 117645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 121161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 121639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 122531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 123239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 126351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 126811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 127717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 130796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 131228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 132076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 132781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 135876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 136318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 137164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 137892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 141053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 141525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 142357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 143093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 146177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 146696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 147557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 148319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 151503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 151983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 152842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 153584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 156685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 157126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 157984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 158704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 161801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 162261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 163119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 163851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 167154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 167629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 168486 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:24 169210 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:28:24 172247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 174190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 174655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:24 177753 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:24 178527 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:28:24 190325 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:24 190531 --> Total execution time: 0.3800
INFO - 2019-02-04 00:28:25 764790 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:25 770184 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:25 771617 --> Controller Class Initialized
INFO - 2019-02-04 00:28:25 772540 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:25 772660 --> Total execution time: 0.0422
INFO - 2019-02-04 00:28:52 208718 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:52 223515 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:52 225202 --> Controller Class Initialized
INFO - 2019-02-04 00:28:52 226056 --> Parser Class Initialized
INFO - 2019-02-04 00:28:52 227229 --> Helper loaded: html_helper
INFO - 2019-02-04 00:28:52 228634 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:28:52 232667 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:52 246849 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:28:52 253643 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:28:52 254563 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:52 255354 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:28:52 260291 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:28:52 263561 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:28:52 263817 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:28:52 270832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 272782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 283396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 285691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 290127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 290940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 292670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 294050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 298116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 298573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 299283 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:52 300873 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:52 301215 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:52 301613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 308650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 309642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 311162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 312532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 318850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 319614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 320847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 322024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 325719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 326174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 326942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 327884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 330899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 331332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 332185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 333422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 338169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 338649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 339417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 340346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 343523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 343969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 344763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 345812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 349102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 349576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 350590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 351536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 355081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 355595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 356600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 357687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 362046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 362530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 363590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 364584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 367865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 368309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 369142 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:28:52 370006 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:28:52 370167 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:28:52 370372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 373619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 374058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 374974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 375947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 379645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 380095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 381108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 382051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 385834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 386351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 387299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 388386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 391649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 392095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 392966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 393913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 397316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 397793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 398878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 399795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 400638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 401540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 402342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 403476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 404658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 406295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 407318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 408324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 409359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 410568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 411819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 413043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 414244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 415539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 416843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 418699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 419912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 420856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 421899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 422981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 424103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 424953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 425971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 426816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 428050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 429722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 430784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 431624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 435581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 436031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 437228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 438306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 441716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 442167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 443073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 444000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 448080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 448961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 452363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 453804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 460772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 461560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 463314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 464880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 471461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 472292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 474097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 475379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 481563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 482326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 484021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 485208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 491707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 492494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 494065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 495376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 501112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 501606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 502635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 509028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 509776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 512052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 513443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 519504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 520409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 522052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 523370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 530061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 530570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 531455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 532390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 535578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 536138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 537091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 538206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 542277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 542773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 543669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 544526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 547688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 548142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 549268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 550153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 553378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 553860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 554744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 555643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 559524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 560401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 562180 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:52 563199 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:28:52 566234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 568545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 569148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:52 572341 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:52 573143 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:28:52 591942 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:52 592178 --> Total execution time: 0.4092
INFO - 2019-02-04 00:28:54 365964 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:54 372060 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:54 373008 --> Controller Class Initialized
INFO - 2019-02-04 00:28:54 373694 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:54 373778 --> Total execution time: 0.0320
INFO - 2019-02-04 00:28:58 935497 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:58 944096 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:58 945612 --> Controller Class Initialized
INFO - 2019-02-04 00:28:58 947073 --> Parser Class Initialized
INFO - 2019-02-04 00:28:58 948203 --> Helper loaded: html_helper
INFO - 2019-02-04 00:28:58 952474 --> Model Class Initialized
INFO - 2019-02-04 00:28:58 958808 --> Model Class Initialized
DEBUG - 2019-02-04 00:28:58 959671 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:28:58 960921 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:28:58 963789 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:28:58 966120 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:28:58 966319 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-02-04 00:28:58 972419 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:28:58 978476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:58 982193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:58 984412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:28:58 997700 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:28:58 999928 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:28:59 008070 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:59 008205 --> Total execution time: 0.1066
INFO - 2019-02-04 00:28:59 547496 --> Database Driver Class Initialized
INFO - 2019-02-04 00:28:59 552721 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:28:59 554100 --> Controller Class Initialized
INFO - 2019-02-04 00:28:59 555008 --> Final output sent to browser
DEBUG - 2019-02-04 00:28:59 555134 --> Total execution time: 0.0412
INFO - 2019-02-04 00:29:01 838916 --> Database Driver Class Initialized
INFO - 2019-02-04 00:29:01 848683 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:29:01 850560 --> Controller Class Initialized
INFO - 2019-02-04 00:29:01 851335 --> Parser Class Initialized
INFO - 2019-02-04 00:29:01 852471 --> Helper loaded: html_helper
INFO - 2019-02-04 00:29:01 856488 --> Model Class Initialized
INFO - 2019-02-04 00:29:01 862379 --> Model Class Initialized
DEBUG - 2019-02-04 00:29:01 863276 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-02-04 00:29:01 864553 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-02-04 00:29:01 867237 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:29:01 869856 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:29:01 876213 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-02-04 00:29:01 881923 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
DEBUG - 2019-02-04 00:29:01 885179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:29:01 893862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:29:01 896405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:29:01 909286 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:29:01 911631 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:29:01 920572 --> Final output sent to browser
DEBUG - 2019-02-04 00:29:01 920738 --> Total execution time: 0.1146
INFO - 2019-02-04 00:29:02 542792 --> Database Driver Class Initialized
INFO - 2019-02-04 00:29:02 549875 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:29:02 550928 --> Controller Class Initialized
INFO - 2019-02-04 00:29:02 552033 --> Final output sent to browser
DEBUG - 2019-02-04 00:29:02 552128 --> Total execution time: 0.0410
INFO - 2019-02-04 00:41:34 218560 --> Database Driver Class Initialized
INFO - 2019-02-04 00:41:34 227865 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:41:34 229366 --> Controller Class Initialized
INFO - 2019-02-04 00:41:34 230113 --> Parser Class Initialized
INFO - 2019-02-04 00:41:34 231213 --> Helper loaded: html_helper
INFO - 2019-02-04 00:41:34 232451 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:41:34 235897 --> Model Class Initialized
DEBUG - 2019-02-04 00:41:34 250710 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:41:34 258424 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:41:34 259185 --> Model Class Initialized
DEBUG - 2019-02-04 00:41:34 259928 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:41:34 262933 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:41:34 264794 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:41:34 264951 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:41:34 268928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 270610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 281389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 283590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 286195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 286607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 287295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 288288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 290838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 291203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 291846 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:41:34 293353 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:41:34 293524 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:41:34 293715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 296186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 296570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 297188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 298096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 300688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 301073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 301739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 302673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 305289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 305706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 306360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 307224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 309880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 310259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 310939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 311799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 314425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 314815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 315498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 316348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 319246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 319669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 320347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 321222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 323906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 324687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 325407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 326276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 328990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 329369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 330090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 330961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 333720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 334106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 334844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 335712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 338439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 338921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 340231 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:41:34 341182 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:41:34 341331 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:41:34 341541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 344259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 344672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 345402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 346679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 349524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 349911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 350660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 351557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 354402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 354810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 355566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 356439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 359165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 359575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 360302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 361175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 363934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 364331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 367697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 369060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 369931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 370799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 371726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 372539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 373632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 374456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 375312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 376338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 377197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 378079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 379041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 379848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 380825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 381623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 382591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 383616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 384454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 385844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 386691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 388649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 389868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 390705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 391877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 393176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 394108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 395531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 396413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 397275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 402066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 402700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 404479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 405342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 407727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 408066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 408729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 409452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 411796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 412131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 412830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 413794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 416543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 416920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 417686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 418468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 420859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 421200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 421865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 422610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 425215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 425582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 426227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 426940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 430171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 430542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 431236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 432169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 434937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 435286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 436372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 439208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 439595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 440301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 441387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 444554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 444941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 445591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 446381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 448780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 449152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 449798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 450808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 453135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 453511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 454134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 454891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 457267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 457634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 458259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 459031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 463011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 463363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 464035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 464798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 467190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 467546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 468190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 469037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 471430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 471833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 472481 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:41:34 473273 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:41:34 475536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 477514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 477860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:41:34 480561 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:41:34 481133 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:41:34 491139 --> Final output sent to browser
DEBUG - 2019-02-04 00:41:34 491247 --> Total execution time: 0.2978
INFO - 2019-02-04 00:41:35 498198 --> Database Driver Class Initialized
INFO - 2019-02-04 00:41:35 503169 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:41:35 503938 --> Controller Class Initialized
ERROR - 2019-02-04 00:41:35 504842 --> Severity: Warning --> imagettftext(): Could not find/open font /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 88
INFO - 2019-02-04 00:41:35 505724 --> Final output sent to browser
DEBUG - 2019-02-04 00:41:35 505789 --> Total execution time: 0.0490
INFO - 2019-02-04 00:41:47 395665 --> Database Driver Class Initialized
INFO - 2019-02-04 00:41:47 402103 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:41:47 403218 --> Controller Class Initialized
ERROR - 2019-02-04 00:41:47 405441 --> Severity: Warning --> imagettftext(): Could not find/open font /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 88
INFO - 2019-02-04 00:41:47 407026 --> Final output sent to browser
DEBUG - 2019-02-04 00:41:47 407140 --> Total execution time: 0.0451
INFO - 2019-02-04 00:41:48 164382 --> Database Driver Class Initialized
INFO - 2019-02-04 00:41:48 169142 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:41:48 170274 --> Controller Class Initialized
ERROR - 2019-02-04 00:41:48 171447 --> Severity: Warning --> imagettftext(): Could not find/open font /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 88
INFO - 2019-02-04 00:41:48 172636 --> Final output sent to browser
DEBUG - 2019-02-04 00:41:48 172734 --> Total execution time: 0.0348
INFO - 2019-02-04 00:41:48 829895 --> Database Driver Class Initialized
INFO - 2019-02-04 00:41:48 908648 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:41:48 910003 --> Controller Class Initialized
ERROR - 2019-02-04 00:41:48 911439 --> Severity: Warning --> imagettftext(): Could not find/open font /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 88
INFO - 2019-02-04 00:41:48 912955 --> Final output sent to browser
DEBUG - 2019-02-04 00:41:48 913078 --> Total execution time: 0.1214
INFO - 2019-02-04 00:44:30 690532 --> Database Driver Class Initialized
INFO - 2019-02-04 00:44:30 696095 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:44:30 696862 --> Controller Class Initialized
INFO - 2019-02-04 00:44:30 697238 --> Parser Class Initialized
INFO - 2019-02-04 00:44:30 697802 --> Helper loaded: html_helper
INFO - 2019-02-04 00:44:30 698410 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:44:30 700136 --> Model Class Initialized
DEBUG - 2019-02-04 00:44:30 710774 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:44:30 717005 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:44:30 717463 --> Model Class Initialized
DEBUG - 2019-02-04 00:44:30 717905 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:44:30 719676 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:44:30 720762 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:44:30 720855 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:44:30 723211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 724185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 729432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 730571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 732053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 732281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 732672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 733189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 734635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 734847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 735209 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:44:30 736035 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:44:30 736124 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:44:30 736232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 737698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 737909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 738276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 738776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 740286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 740528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 740912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 741441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 743007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 743242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 743673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 744257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 745898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 746138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 746548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 747111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 748768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 748992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 749391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 749934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 751512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 751739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 752140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 752660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 754225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 754451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 754865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 755359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 756934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 757157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 757587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 758119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 759737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 759965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 760386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 760919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 762561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 762789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 763215 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:44:30 763704 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:44:30 763788 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:44:30 763895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 765475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 765701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 766125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 766628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 768395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 768632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 769059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 769566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 771150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 771378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 771821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 772311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 773909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 774139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 774585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 775091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 776685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 776915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 777343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 777839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 778311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 778788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 779247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 779709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 780165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 780626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 781091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 781553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 782006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 782463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 782917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 783369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 783838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 784291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 784760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 785207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 785681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 786150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 786631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 787058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 787545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 787970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 788451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 788882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 789354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 789791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 790277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 790759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 792427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 792663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 793122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 793628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 795219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 795464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 795919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 796432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 798053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 798289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 798758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 799266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 800860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 801089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 801554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 802058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 803723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 803958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 804419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 804907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 806498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 806731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 807182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 807683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 809273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 809520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 809979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 810487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 812159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 812397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 812874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 814469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 814713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 815149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 815663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 817248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 817492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 817929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 818434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 820063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 820302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 820754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 821249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 822840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 823075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 823525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 824017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 825649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 825887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 826325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 826828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 828411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 828660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 829096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 829595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 831181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 831420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 831878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 832376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 834059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 834300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 834749 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:44:30 835253 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:44:30 836816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 837810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 838040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:44:30 839626 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:44:30 840015 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:44:30 848356 --> Final output sent to browser
DEBUG - 2019-02-04 00:44:30 848433 --> Total execution time: 0.1671
INFO - 2019-02-04 00:47:08 686994 --> Database Driver Class Initialized
INFO - 2019-02-04 00:47:08 698394 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:47:08 700525 --> Controller Class Initialized
INFO - 2019-02-04 00:47:08 701523 --> Parser Class Initialized
INFO - 2019-02-04 00:47:08 703054 --> Helper loaded: html_helper
INFO - 2019-02-04 00:47:08 704854 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:47:08 710006 --> Model Class Initialized
DEBUG - 2019-02-04 00:47:08 727358 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:47:08 736386 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:47:08 737551 --> Model Class Initialized
DEBUG - 2019-02-04 00:47:08 738430 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:47:08 742265 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:47:08 744139 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:47:08 744299 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:47:08 748460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 750154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 760094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 762170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 765166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 765588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 766510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 767466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 769922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 770282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 770920 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:47:08 772387 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:47:08 772553 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:47:08 772738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 775227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 775619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 776241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 777120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 779719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 780101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 780766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 781629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 784177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 784579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 785228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 786535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 789125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 789515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 790170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 791018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 793680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 794054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 794739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 795650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 798312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 798713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 799386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 800240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 802989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 803385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 804088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 804873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 807576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 807951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 808675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 809420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 812180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 812586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 813298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 814348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 817126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 817528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 818244 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:47:08 819185 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:47:08 819323 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:47:08 819519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 822228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 822629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 823349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 824352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 827104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 827512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 828237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 829339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 832122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 832525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 833254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 834369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 837116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 837515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 838243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 839246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 841969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 842355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 843101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 844095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 845056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 845993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 846918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 847836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 848743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 849762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 850713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 851537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 852318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 853101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 853872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 854631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 855384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 856138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 856904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 858161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 858975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 859911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 860724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 861581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 862365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 863204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 864255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 865144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 866350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 867201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 868227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 869208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 872989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 873445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 874361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 875278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 878428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 878891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 879792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 880662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 883883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 884337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 885247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 886111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 889256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 889727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 890628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 891489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 894723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 895179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 896090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 897005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 900182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 900670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 901577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 902623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 906497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 906985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 908006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 909248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 912801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 913271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 914207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 917473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 917918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 918795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 920195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 923544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 924006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 924895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 926033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 929377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 929855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 930720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 931798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 934916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 935363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 936228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 937331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 940705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 941178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 942053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 943177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 946624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 947123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 948056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 949280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 952542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 953003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 953875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 954983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 958256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 958735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 959609 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:47:08 960726 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:47:08 963855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 965939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 966387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:47:08 969897 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:47:08 970686 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:47:08 982413 --> Final output sent to browser
DEBUG - 2019-02-04 00:47:08 982625 --> Total execution time: 0.3156
INFO - 2019-02-04 00:47:09 851214 --> Database Driver Class Initialized
INFO - 2019-02-04 00:47:09 859873 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:47:09 861423 --> Controller Class Initialized
INFO - 2019-02-04 00:47:09 862488 --> Final output sent to browser
DEBUG - 2019-02-04 00:47:09 862613 --> Total execution time: 0.1503
INFO - 2019-02-04 00:48:26 017221 --> Database Driver Class Initialized
INFO - 2019-02-04 00:48:26 022299 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:48:26 023073 --> Controller Class Initialized
INFO - 2019-02-04 00:48:26 023468 --> Parser Class Initialized
INFO - 2019-02-04 00:48:26 024029 --> Helper loaded: html_helper
INFO - 2019-02-04 00:48:26 024661 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:48:26 026393 --> Model Class Initialized
DEBUG - 2019-02-04 00:48:26 116842 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:48:26 122364 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:48:26 122860 --> Model Class Initialized
DEBUG - 2019-02-04 00:48:26 123543 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:48:26 125410 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:48:26 126596 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:48:26 126702 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:48:26 129364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 130651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 137269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 138699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 140307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 140572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 141000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 141736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 143300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 143552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 143965 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:48:26 145031 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:48:26 145129 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:48:26 145247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 146912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 147145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 147583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 148263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 149955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 150202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 150650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 151336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 153007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 153256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 153707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 154397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 156079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 156321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 156770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 157449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 159146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 159392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 159847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 160526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 162226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 162482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 162920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 163604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 165277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 165541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 165982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 166657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 168350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 168607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 169055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 169735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 171483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 171727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 172177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 172847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 174544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 174786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 175240 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:48:26 175906 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:48:26 175992 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:48:26 176105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 177802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 178052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 178549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 179287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 181094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 181353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 181823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 182492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 184175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 184420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 184896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 185570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 187238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 187490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 187958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 188630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 190296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 190557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 191034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 191709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 192347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 192979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 193604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 194215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 194833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 195444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 196054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 196677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 197350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 198010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 198663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 199306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 199943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 200576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 201200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 201673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 202312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 202852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 203510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 203950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 204634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 205074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 205729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 206168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 206819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 207258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 207937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 208596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 210319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 210571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 211045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 211721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 213361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 213620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 214095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 214761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 216439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 216686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 217158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 217883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 219523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 219760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 220232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 220895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 222635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 222883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 223361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 225620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 227258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 227523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 227996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 228686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 230326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 230591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 231065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 231744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 233397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 233652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 234141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 235790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 236030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 236498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 237134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 238778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 239020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 239480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 240166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 241853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 242096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 242566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 243211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 244862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 245100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 245577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 246203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 247884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 248127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 248605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 249237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 250884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 251126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 251595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 252214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 253876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 254117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 254589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 255207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 256939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 257184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 257661 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:48:26 258315 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:48:26 259921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 260943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 261183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:26 262824 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:48:26 263225 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:48:26 271475 --> Final output sent to browser
DEBUG - 2019-02-04 00:48:26 271548 --> Total execution time: 0.2638
INFO - 2019-02-04 00:48:27 957447 --> Database Driver Class Initialized
INFO - 2019-02-04 00:48:27 965977 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:48:27 967485 --> Controller Class Initialized
INFO - 2019-02-04 00:48:27 968513 --> Final output sent to browser
DEBUG - 2019-02-04 00:48:27 968635 --> Total execution time: 0.0488
INFO - 2019-02-04 00:48:52 733865 --> Database Driver Class Initialized
INFO - 2019-02-04 00:48:52 743511 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:48:52 745179 --> Controller Class Initialized
INFO - 2019-02-04 00:48:52 745879 --> Parser Class Initialized
INFO - 2019-02-04 00:48:52 747047 --> Helper loaded: html_helper
INFO - 2019-02-04 00:48:52 748626 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-02-04 00:48:52 754004 --> Model Class Initialized
DEBUG - 2019-02-04 00:48:52 804348 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-02-04 00:48:52 815851 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_startup_business_details` ON `bd_startup_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2019-02-04'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-02-04 00:48:52 816620 --> Model Class Initialized
DEBUG - 2019-02-04 00:48:52 817466 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-02-04 00:48:52 822326 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-02-04 00:48:52 824376 --> Helper loaded: file_helper
DEBUG - 2019-02-04 00:48:52 824573 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-02-04 00:48:52 828855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 830563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 844058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 846373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 849533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 849992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 850786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 851788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 854712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 855133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 855907 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:48:52 857589 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:48:52 857765 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:48:52 857983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 860994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 861414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 862169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 863167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 866254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 866729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 867520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 868442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 871479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 871934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 872733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 873651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 876693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 877127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 877924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 878812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 881932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 882370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 883219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 884133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 887321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 887816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 888641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 889579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 892729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 893172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 893992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 894877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 898097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 898574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 899389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 900300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 904175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 904653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 905498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 906629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 909816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 910259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 911122 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-02-04 00:48:52 911947 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
ERROR - 2019-02-04 00:48:52 912108 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 257
DEBUG - 2019-02-04 00:48:52 912313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 915477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 915923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 916793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 917753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 921000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 921463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 922327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 923351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 926558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 927009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 927887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 929037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 932254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 932723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 933613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 934720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 937964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 938424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 939302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 940228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 941128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 942011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 942841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 943671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 944549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 945377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 946187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 946990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 947787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 948636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 949476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 950277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 951215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 952002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 952836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 953747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 954593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 955530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 956370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 957225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 958121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 958978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 959830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 960690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 961543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 962373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 963255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 964164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 967652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 968103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 969053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 970004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 973207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 973690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 974626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 975498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 978812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 979281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 980222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 981313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 984594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 985059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 986001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 986982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 990289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 990787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 991761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 992662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 995917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 996383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 997328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:52 998218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 001501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 001969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 002940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 003863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 007138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 007637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 008599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 011856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 012320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 013226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 014143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 017494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 017993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 018934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 019865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 023200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 023715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 024631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 025563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 028817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 029280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 030189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 031110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 034440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 034931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 035849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 036778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 040031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 040523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 041441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 042387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 045643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 046109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 047017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 047939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 051311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 051826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 052730 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:48:53 053643 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-02-04 00:48:53 056720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 058715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 059174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-02-04 00:48:53 062366 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-02-04 00:48:53 063752 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-02-04 00:48:53 082966 --> Final output sent to browser
DEBUG - 2019-02-04 00:48:53 083127 --> Total execution time: 0.3764
INFO - 2019-02-04 00:48:55 586347 --> Database Driver Class Initialized
INFO - 2019-02-04 00:48:55 595576 --> Session: Class initialized using 'files' driver.
INFO - 2019-02-04 00:48:55 596946 --> Controller Class Initialized
INFO - 2019-02-04 00:48:55 597914 --> Final output sent to browser
DEBUG - 2019-02-04 00:48:55 598031 --> Total execution time: 0.0521
