<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-30 05:08:08 711539 --> Config Class Initialized
INFO - 2019-01-30 05:08:08 711882 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:08 720458 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:08 720551 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:08 721569 --> URI Class Initialized
DEBUG - 2019-01-30 05:08:08 728799 --> No URI present. Default controller set.
INFO - 2019-01-30 05:08:08 728878 --> Router Class Initialized
INFO - 2019-01-30 05:08:08 738321 --> Output Class Initialized
INFO - 2019-01-30 05:08:08 739830 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:08 747287 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:08 747365 --> Input Class Initialized
INFO - 2019-01-30 05:08:08 747920 --> Language Class Initialized
INFO - 2019-01-30 05:08:08 764158 --> Loader Class Initialized
INFO - 2019-01-30 05:08:08 773958 --> Helper loaded: url_helper
INFO - 2019-01-30 05:08:08 784455 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:38:08 801127 --> Database Driver Class Initialized
INFO - 2019-01-30 10:38:08 829904 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:38:08 835445 --> Controller Class Initialized
INFO - 2019-01-30 10:38:08 843628 --> Parser Class Initialized
INFO - 2019-01-30 10:38:08 847883 --> Helper loaded: html_helper
INFO - 2019-01-30 10:38:08 865269 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 10:38:08 874324 --> Model Class Initialized
DEBUG - 2019-01-30 10:38:08 898890 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 10:38:08 904119 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 10:38:08 909481 --> Model Class Initialized
DEBUG - 2019-01-30 10:38:08 910801 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 10:38:08 929239 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:38:08 938080 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:38:08 938319 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:38:08 954399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 960953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 975763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 982355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 984827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 985227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 985886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 986704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 988989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 989298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 990427 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:38:08 995827 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:38:08 995959 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:38:08 996121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:08 999686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 000144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 001148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 001977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 004611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 004951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 005562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 006160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 008514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 008846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 009512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 010078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 012778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 013113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 013695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 014296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 016995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 017323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 018241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 018892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 021250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 021605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 022182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 022950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 026278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 026729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 027332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 028064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 030544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 030891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 031585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 032210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 034940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 035274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 036088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 036691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 039321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 039678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 040431 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:38:09 041007 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:38:09 041126 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:38:09 041378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 043919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 044251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 045087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 045737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 048321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 048688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 049319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 049935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 052490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 052829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 053472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 054050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 056361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 056708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 057337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 057938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 060254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 060614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 061244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 061918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 062469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 063098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 063994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 064635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 065160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 065910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 066448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 066967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 067594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 068109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 068676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 069224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 069849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 070353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 070991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 071669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 072458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 073592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 074551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 075611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 076411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 077151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 077765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 078457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 079173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 079929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 080840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 081482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 082169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 082942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 083513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 084228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 084837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 085378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 087903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 088242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 089046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 089775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 092300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 092673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 093337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 094078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 096695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 097167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 097852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 098426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 101304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 101677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 102344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 102952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 105905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 106293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 107323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 108002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 112297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 112890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 113823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 116512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 116848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 117506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 118099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 120646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 120995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 121655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 122231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 124947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 125706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 126672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 127427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 136226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 137321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 139031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 139652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 142483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 142935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 143739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 144319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 146866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 147213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 147969 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:38:09 148669 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 10:38:09 159878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 161566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 162025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:09 164657 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:38:09 165323 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:38:09 174491 --> Final output sent to browser
DEBUG - 2019-01-30 10:38:09 174596 --> Total execution time: 0.4750
INFO - 2019-01-30 05:08:11 008157 --> Config Class Initialized
INFO - 2019-01-30 05:08:11 008294 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:11 010351 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:11 010472 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:11 011730 --> URI Class Initialized
DEBUG - 2019-01-30 05:08:11 013839 --> No URI present. Default controller set.
INFO - 2019-01-30 05:08:11 013958 --> Router Class Initialized
INFO - 2019-01-30 05:08:11 016261 --> Output Class Initialized
INFO - 2019-01-30 05:08:11 017766 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:11 019068 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:11 019138 --> Input Class Initialized
INFO - 2019-01-30 05:08:11 019521 --> Language Class Initialized
INFO - 2019-01-30 05:08:11 022841 --> Loader Class Initialized
INFO - 2019-01-30 05:08:11 024183 --> Helper loaded: url_helper
INFO - 2019-01-30 05:08:11 024952 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:38:11 031687 --> Database Driver Class Initialized
INFO - 2019-01-30 10:38:11 037571 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:38:11 038511 --> Controller Class Initialized
INFO - 2019-01-30 10:38:11 038983 --> Parser Class Initialized
INFO - 2019-01-30 10:38:11 039655 --> Helper loaded: html_helper
INFO - 2019-01-30 10:38:11 040369 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 10:38:11 042403 --> Model Class Initialized
DEBUG - 2019-01-30 10:38:11 056957 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 10:38:11 064671 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 10:38:11 065149 --> Model Class Initialized
DEBUG - 2019-01-30 10:38:11 065992 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 10:38:11 068125 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:38:11 069328 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:38:11 069461 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:38:11 072766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 074335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 083312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 085135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 087119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 087419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 087920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 088836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 090738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 091013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 091502 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:38:11 092700 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:38:11 092812 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:38:11 092950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 094862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 095136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 095628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 096365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 098351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 098665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 099162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 099874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 101840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 102134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 102670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 103396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 105390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 105688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 106189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 106901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 108922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 109209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 109735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 110431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 112478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 112771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 113286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 113995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 116050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 116337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 116875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 117583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 119647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 119936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 120485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 121186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 123305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 123615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 124162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 124866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 126981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 127274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 127840 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:38:11 128510 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:38:11 128618 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:38:11 128751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 130846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 131139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 131712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 132419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 134542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 134835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 135390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 136096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 138195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 138504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 139065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 139849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 141963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 142257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 142833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 143693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 145798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 146095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 146677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 147300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 147881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 148458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 149009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 149627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 150676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 151588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 152431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 153307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 154196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 155044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 155879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 156733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 157573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 158422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 159315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 160280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 161082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 161818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 162528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 163220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 164032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 164808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 165644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 166423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 167203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 167952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 168742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 169466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 170254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 170988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 171787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 172508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 173316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 174120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 177159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 177582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 178333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 179188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 181950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 182339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 183109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 183938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 186642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 187022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 187813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 188631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 191381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 191793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 192572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 193420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 196158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 196568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 197329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 198194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 201010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 201416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 202198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 204915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 205296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 206048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 206988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 209778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 210196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 210948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 211781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 214478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 214869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 215671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 216605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 219429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 219837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 220594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 221483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 224227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 224642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 225377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 226246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 228969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 229361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 230112 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:38:11 230971 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 10:38:11 233381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 235212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 235620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:38:11 238301 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:38:11 238977 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:38:11 247149 --> Final output sent to browser
DEBUG - 2019-01-30 10:38:11 247277 --> Total execution time: 0.2330
INFO - 2019-01-30 05:08:13 829406 --> Config Class Initialized
INFO - 2019-01-30 05:08:13 840653 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:13 843183 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:13 843318 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:13 845824 --> URI Class Initialized
INFO - 2019-01-30 05:08:13 850156 --> Router Class Initialized
INFO - 2019-01-30 05:08:13 853605 --> Config Class Initialized
INFO - 2019-01-30 05:08:13 854046 --> Hooks Class Initialized
INFO - 2019-01-30 05:08:13 859483 --> Output Class Initialized
INFO - 2019-01-30 05:08:13 861512 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:13 863500 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:13 863634 --> Input Class Initialized
INFO - 2019-01-30 05:08:13 864217 --> Language Class Initialized
ERROR - 2019-01-30 05:08:13 865678 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 05:08:13 868056 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:13 868191 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:13 870538 --> URI Class Initialized
INFO - 2019-01-30 05:08:13 878681 --> Router Class Initialized
INFO - 2019-01-30 05:08:13 881597 --> Output Class Initialized
INFO - 2019-01-30 05:08:13 884974 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:13 887644 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:13 887803 --> Input Class Initialized
INFO - 2019-01-30 05:08:13 889149 --> Language Class Initialized
ERROR - 2019-01-30 05:08:13 890829 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:08:13 912926 --> Config Class Initialized
INFO - 2019-01-30 05:08:13 913274 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:13 915829 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:13 915961 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:13 927195 --> Config Class Initialized
INFO - 2019-01-30 05:08:13 927571 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:13 930107 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:13 930236 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:13 931710 --> URI Class Initialized
INFO - 2019-01-30 05:08:13 942368 --> Config Class Initialized
INFO - 2019-01-30 05:08:13 942706 --> Hooks Class Initialized
INFO - 2019-01-30 05:08:13 944938 --> URI Class Initialized
INFO - 2019-01-30 05:08:13 949702 --> Router Class Initialized
INFO - 2019-01-30 05:08:13 951354 --> Router Class Initialized
INFO - 2019-01-30 05:08:13 954256 --> Output Class Initialized
INFO - 2019-01-30 05:08:13 956321 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:13 959381 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:13 959537 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:13 961205 --> URI Class Initialized
INFO - 2019-01-30 05:08:13 966586 --> Output Class Initialized
INFO - 2019-01-30 05:08:13 968640 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:13 970633 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:13 970761 --> Input Class Initialized
INFO - 2019-01-30 05:08:13 971383 --> Language Class Initialized
ERROR - 2019-01-30 05:08:13 974905 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 05:08:13 980587 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:15 774823 --> Router Class Initialized
INFO - 2019-01-30 05:08:15 776307 --> Output Class Initialized
INFO - 2019-01-30 05:08:15 777390 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:15 778423 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:15 778513 --> Input Class Initialized
INFO - 2019-01-30 05:08:15 778845 --> Language Class Initialized
ERROR - 2019-01-30 05:08:15 779372 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:08:15 779484 --> Config Class Initialized
INFO - 2019-01-30 05:08:15 779567 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:15 780742 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:15 780812 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:15 781502 --> URI Class Initialized
INFO - 2019-01-30 05:08:15 783222 --> Router Class Initialized
INFO - 2019-01-30 05:08:15 783545 --> Input Class Initialized
INFO - 2019-01-30 05:08:15 783915 --> Language Class Initialized
ERROR - 2019-01-30 05:08:15 784461 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:08:15 787483 --> Config Class Initialized
INFO - 2019-01-30 05:08:15 787628 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:15 789175 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:15 789267 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:15 790159 --> URI Class Initialized
INFO - 2019-01-30 05:08:15 792268 --> Router Class Initialized
INFO - 2019-01-30 05:08:15 793888 --> Output Class Initialized
INFO - 2019-01-30 05:08:15 797450 --> Config Class Initialized
INFO - 2019-01-30 05:08:15 797549 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:08:15 799048 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:08:15 799138 --> Utf8 Class Initialized
INFO - 2019-01-30 05:08:15 800000 --> URI Class Initialized
INFO - 2019-01-30 05:08:15 802956 --> Output Class Initialized
INFO - 2019-01-30 05:08:15 806296 --> Security Class Initialized
INFO - 2019-01-30 05:08:15 811023 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:15 815054 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:15 815221 --> Input Class Initialized
INFO - 2019-01-30 05:08:15 816674 --> Router Class Initialized
INFO - 2019-01-30 05:08:15 822236 --> Output Class Initialized
DEBUG - 2019-01-30 05:08:15 823132 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:15 823225 --> Input Class Initialized
INFO - 2019-01-30 05:08:15 823657 --> Language Class Initialized
ERROR - 2019-01-30 05:08:15 824328 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:08:15 826217 --> Language Class Initialized
ERROR - 2019-01-30 05:08:15 826888 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:08:15 829396 --> Security Class Initialized
DEBUG - 2019-01-30 05:08:15 831202 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:08:15 831371 --> Input Class Initialized
INFO - 2019-01-30 05:08:15 832441 --> Language Class Initialized
INFO - 2019-01-30 05:08:15 855262 --> Loader Class Initialized
INFO - 2019-01-30 05:08:15 857538 --> Helper loaded: url_helper
INFO - 2019-01-30 05:08:15 858037 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:38:15 867145 --> Database Driver Class Initialized
INFO - 2019-01-30 10:38:15 876117 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:38:15 876960 --> Controller Class Initialized
ERROR - 2019-01-30 10:38:15 877571 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 10:38:15 878228 --> Final output sent to browser
DEBUG - 2019-01-30 10:38:15 878305 --> Total execution time: 0.0819
INFO - 2019-01-30 05:10:05 383584 --> Config Class Initialized
INFO - 2019-01-30 05:10:05 383774 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:05 385080 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:05 385152 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:05 386898 --> URI Class Initialized
INFO - 2019-01-30 05:10:05 389667 --> Router Class Initialized
INFO - 2019-01-30 05:10:05 391112 --> Output Class Initialized
INFO - 2019-01-30 05:10:05 392190 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:05 393220 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:05 393291 --> Input Class Initialized
INFO - 2019-01-30 05:10:05 393635 --> Language Class Initialized
INFO - 2019-01-30 05:10:05 403975 --> Loader Class Initialized
INFO - 2019-01-30 05:10:05 405009 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:05 405503 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:05 411210 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:05 416697 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:05 417512 --> Controller Class Initialized
INFO - 2019-01-30 05:10:05 507904 --> Config Class Initialized
INFO - 2019-01-30 05:10:05 508028 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:05 509891 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:05 509989 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:05 511120 --> URI Class Initialized
INFO - 2019-01-30 05:10:05 513443 --> Router Class Initialized
INFO - 2019-01-30 05:10:05 515558 --> Output Class Initialized
INFO - 2019-01-30 05:10:05 516653 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:05 518529 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:05 518646 --> Input Class Initialized
INFO - 2019-01-30 05:10:05 519458 --> Language Class Initialized
INFO - 2019-01-30 05:10:05 531322 --> Loader Class Initialized
INFO - 2019-01-30 05:10:05 532118 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:05 532561 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:05 538022 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:05 541078 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:05 541815 --> Controller Class Initialized
DEBUG - 2019-01-30 10:40:05 541892 --> In LOGOUT
INFO - 2019-01-30 05:10:05 668526 --> Config Class Initialized
INFO - 2019-01-30 05:10:05 668620 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:05 669769 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:05 669837 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:05 670485 --> URI Class Initialized
DEBUG - 2019-01-30 05:10:05 671663 --> No URI present. Default controller set.
INFO - 2019-01-30 05:10:05 671735 --> Router Class Initialized
INFO - 2019-01-30 05:10:05 672986 --> Output Class Initialized
INFO - 2019-01-30 05:10:05 673996 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:05 674981 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:05 675065 --> Input Class Initialized
INFO - 2019-01-30 05:10:05 675375 --> Language Class Initialized
INFO - 2019-01-30 05:10:05 677412 --> Loader Class Initialized
INFO - 2019-01-30 05:10:05 678186 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:05 678606 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:05 683831 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:05 687171 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:05 687932 --> Controller Class Initialized
INFO - 2019-01-30 10:40:05 688314 --> Parser Class Initialized
INFO - 2019-01-30 10:40:05 688880 --> Helper loaded: html_helper
INFO - 2019-01-30 10:40:05 689531 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 10:40:05 691266 --> Model Class Initialized
DEBUG - 2019-01-30 10:40:05 709760 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 10:40:05 715998 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 10:40:05 716487 --> Model Class Initialized
DEBUG - 2019-01-30 10:40:05 716905 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 10:40:05 718712 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:40:05 719800 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:40:05 719893 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:40:05 722346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 724306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 729926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 731141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 732692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 732923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 733309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 733865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 735326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 735585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 735959 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:40:05 736912 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:40:05 737001 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:40:05 737112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 738677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 738890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 739263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 742908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 744805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 745038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 745429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 746094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 747649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 747879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 748265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 748815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 750374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 750641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 751036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 751590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 753171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 753400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 753813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 758095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 759938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 760169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 760591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 761184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 762823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 763056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 763484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 764199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 765844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 766069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 766500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 767400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 769227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 769515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 769965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 770699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 772559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 772815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 773258 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:40:05 773976 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:40:05 774060 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:40:05 774173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 776120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 776360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 776803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 777436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 779187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 779436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 779884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 780493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 782166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 782401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 782854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 783437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 785177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 785419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 785864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 786482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 788182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 788429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 788873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 789442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 789928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 790394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 790880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 791336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 791810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 792268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 792737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 793195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 793674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 794133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 794605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 795063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 795531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 795986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 796467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 797099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 797586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 798011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 798437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 798866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 799283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 799736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 800235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 800728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 801213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 801672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 802155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 802619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 803112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 803576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 804188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 804770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 805479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 806159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 809516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 809951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 810792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 811542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 813779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 814055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 814734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 815370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 817280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 817550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 818030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 818650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 820581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 820857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 821333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 822113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 823926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 824173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 824660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 825239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 827076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 827326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 827847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 829524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 829760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 830202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 830879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 832583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 832828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 833267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 833867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 835602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 835844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 836285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 836893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 838617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 838860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 839299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 839921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 841583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 841820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 842258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 842814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 844474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 844717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 845155 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:40:05 845704 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 10:40:05 847193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 848227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 848484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:05 850917 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:40:05 851330 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:40:05 859299 --> Final output sent to browser
DEBUG - 2019-01-30 10:40:05 859416 --> Total execution time: 0.1845
INFO - 2019-01-30 05:10:06 308110 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 308310 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 309746 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 309822 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 310767 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 313424 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 324489 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 328088 --> Security Class Initialized
INFO - 2019-01-30 05:10:06 328452 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 328742 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 332724 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 332865 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 335439 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 346770 --> Router Class Initialized
DEBUG - 2019-01-30 05:10:06 349495 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 349586 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 349931 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 350487 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 353064 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 354147 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 355273 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 355340 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 355673 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 356204 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 428972 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 429402 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 450284 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 450541 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 458295 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 458729 --> Hooks Class Initialized
INFO - 2019-01-30 05:10:06 472917 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 473066 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 475238 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 475366 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 476681 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 483805 --> URI Class Initialized
DEBUG - 2019-01-30 05:10:06 489036 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 489175 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 490982 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 494117 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 499049 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 513010 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 515930 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 516547 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 519112 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 519248 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 520903 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 522114 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 524104 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 525996 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 526127 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 526572 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 526895 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 529423 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 529558 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 533837 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 536952 --> Config Class Initialized
INFO - 2019-01-30 05:10:06 537089 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:06 539182 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:06 539308 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:06 539761 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 540724 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 544262 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 546238 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 546365 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 546993 --> Language Class Initialized
INFO - 2019-01-30 05:10:06 552367 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 558000 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 559948 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 562685 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 565537 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 568278 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 569103 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 571077 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 571202 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 571844 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 573048 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 576675 --> URI Class Initialized
INFO - 2019-01-30 05:10:06 579236 --> Router Class Initialized
INFO - 2019-01-30 05:10:06 581805 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 583806 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 583936 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 584582 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 585978 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 590365 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 592880 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 593081 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 593802 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 594834 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 596930 --> Output Class Initialized
INFO - 2019-01-30 05:10:06 598906 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:06 600796 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:06 600927 --> Input Class Initialized
INFO - 2019-01-30 05:10:06 601526 --> Language Class Initialized
ERROR - 2019-01-30 05:10:06 602624 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:06 613693 --> Loader Class Initialized
INFO - 2019-01-30 05:10:06 615391 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:06 616252 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:06 626653 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:06 634789 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:06 636276 --> Controller Class Initialized
ERROR - 2019-01-30 10:40:06 637188 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 10:40:06 638050 --> Final output sent to browser
DEBUG - 2019-01-30 10:40:06 638173 --> Total execution time: 0.1029
INFO - 2019-01-30 05:10:20 600364 --> Config Class Initialized
INFO - 2019-01-30 05:10:20 600672 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:20 603588 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:20 603713 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:20 605596 --> URI Class Initialized
INFO - 2019-01-30 05:10:20 612222 --> Router Class Initialized
INFO - 2019-01-30 05:10:20 615694 --> Output Class Initialized
INFO - 2019-01-30 05:10:20 618190 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:20 620666 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:20 620810 --> Input Class Initialized
INFO - 2019-01-30 05:10:20 621475 --> Language Class Initialized
INFO - 2019-01-30 05:10:20 627217 --> Loader Class Initialized
INFO - 2019-01-30 05:10:20 629097 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:20 630038 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:20 640539 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:20 646078 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:20 646984 --> Controller Class Initialized
INFO - 2019-01-30 05:10:20 738445 --> Config Class Initialized
INFO - 2019-01-30 05:10:20 738549 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:20 739888 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:20 739962 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:20 740667 --> URI Class Initialized
INFO - 2019-01-30 05:10:20 742007 --> Router Class Initialized
INFO - 2019-01-30 05:10:20 743309 --> Output Class Initialized
INFO - 2019-01-30 05:10:20 744271 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:20 745476 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:20 745549 --> Input Class Initialized
INFO - 2019-01-30 05:10:20 745871 --> Language Class Initialized
INFO - 2019-01-30 05:10:20 747921 --> Loader Class Initialized
INFO - 2019-01-30 05:10:20 748740 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:20 749149 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:20 754475 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:20 758785 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:20 760173 --> Controller Class Initialized
DEBUG - 2019-01-30 10:40:20 760320 --> In LOGOUT
INFO - 2019-01-30 05:10:20 865972 --> Config Class Initialized
INFO - 2019-01-30 05:10:20 866077 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:20 867399 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:20 867505 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:20 868252 --> URI Class Initialized
DEBUG - 2019-01-30 05:10:20 870202 --> No URI present. Default controller set.
INFO - 2019-01-30 05:10:20 870353 --> Router Class Initialized
INFO - 2019-01-30 05:10:20 872909 --> Output Class Initialized
INFO - 2019-01-30 05:10:20 874903 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:20 876827 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:20 876956 --> Input Class Initialized
INFO - 2019-01-30 05:10:20 877585 --> Language Class Initialized
INFO - 2019-01-30 05:10:20 881505 --> Loader Class Initialized
INFO - 2019-01-30 05:10:20 882999 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:20 883804 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:40:20 894349 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:20 899310 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:20 900755 --> Controller Class Initialized
INFO - 2019-01-30 10:40:20 901500 --> Parser Class Initialized
INFO - 2019-01-30 10:40:20 902606 --> Helper loaded: html_helper
INFO - 2019-01-30 10:40:20 904028 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 10:40:20 907430 --> Model Class Initialized
DEBUG - 2019-01-30 10:40:21 109287 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 10:40:21 203411 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 10:40:21 204375 --> Model Class Initialized
DEBUG - 2019-01-30 10:40:21 205046 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 10:40:21 208741 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:40:21 210828 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:40:21 211002 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:40:21 215197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 216787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 226311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 228276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 231270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 231724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 232487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 233251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 236126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 236568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 237277 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:40:21 238640 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:40:21 238806 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:40:21 239008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 241919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 242331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 243057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 243771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 246733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 247169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 247921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 248648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 251564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 251998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 252758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 253498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 256443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 256876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 257638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 258343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 261346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 261786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 262619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 263382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 266498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 266930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 267724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 268465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 271534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 271961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 272767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 273494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 276669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 277106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 277995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 278841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 282043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 282507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 283327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 284068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 287235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 287698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 288537 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:40:21 289215 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 10:40:21 289366 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 10:40:21 289586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 292759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 293200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 294049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 294814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 297946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 298378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 299221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 299993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 303141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 303601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 304435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 305198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 308387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 308851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 309726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 310797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 314230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 314702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 315567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 316570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 317697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 318324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 319221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 319911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 320579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 321217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 321871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 322519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 323151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 323786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 324409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 325074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 325727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 326375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 327053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 327773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 328366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 328919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 329463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 329997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 330539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 331080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 331696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 332285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 333179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 333739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 335310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 335865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 336510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 337050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 337654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 338191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 338857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 339543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 341900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 342190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 342786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 343400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 345495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 345793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 346366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 347403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 349446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 349740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 350311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 350960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 353034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 353327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 353919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 354609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 356652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 356944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 357533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 359282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 361355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 361666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 362251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 364281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 364584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 365140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 365807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 367878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 368176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 368743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 370004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 373085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 373584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 374448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 375641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 378892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 379343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 380251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 381165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 384301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 384771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 385643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 386535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 389688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 390136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 391011 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:40:21 391968 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 10:40:21 394756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 396678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 397114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:40:21 400245 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:40:21 401034 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:40:21 410017 --> Final output sent to browser
DEBUG - 2019-01-30 10:40:21 410155 --> Total execution time: 0.5374
INFO - 2019-01-30 05:10:21 620409 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 620593 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 623366 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 623725 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 625523 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 629401 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 632169 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 634108 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 636095 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 636225 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 636858 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 637955 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:21 706152 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 706662 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 713541 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 713788 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 716500 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 723514 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 726239 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 728254 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 730222 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 730351 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 731005 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 732002 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:21 744335 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 744498 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 746591 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 746721 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 748428 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 751487 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 753815 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 755640 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 757375 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 757524 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 758079 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 758974 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:21 815713 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 815876 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 817996 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 818126 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 824476 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 827627 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 836091 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 837943 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 839718 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 839848 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 840403 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 863315 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:21 865230 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 865391 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 867582 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 867711 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 869040 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 872020 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 872250 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 874017 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 874110 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 875279 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 880188 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 882016 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 884361 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 888668 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 891134 --> Config Class Initialized
INFO - 2019-01-30 05:10:21 891360 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 893171 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 893265 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 894463 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 896435 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:10:21 898277 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:10:21 898370 --> Utf8 Class Initialized
INFO - 2019-01-30 05:10:21 905394 --> URI Class Initialized
INFO - 2019-01-30 05:10:21 913785 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 914463 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 917634 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 917823 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 918796 --> Language Class Initialized
INFO - 2019-01-30 05:10:21 919922 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 923459 --> Security Class Initialized
INFO - 2019-01-30 05:10:21 926204 --> Output Class Initialized
INFO - 2019-01-30 05:10:21 927670 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 929078 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 929171 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 929677 --> Language Class Initialized
INFO - 2019-01-30 05:10:21 932152 --> Router Class Initialized
INFO - 2019-01-30 05:10:21 934175 --> Output Class Initialized
DEBUG - 2019-01-30 05:10:21 936995 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 937099 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 937597 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 938318 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 05:10:21 945516 --> Loader Class Initialized
INFO - 2019-01-30 05:10:21 946765 --> Helper loaded: url_helper
INFO - 2019-01-30 05:10:21 947379 --> Helper loaded: utility_helper
INFO - 2019-01-30 05:10:21 953418 --> Security Class Initialized
DEBUG - 2019-01-30 05:10:21 954883 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:10:21 954977 --> Input Class Initialized
INFO - 2019-01-30 05:10:21 955439 --> Language Class Initialized
ERROR - 2019-01-30 05:10:21 956167 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-30 05:10:21 957910 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:40:21 963347 --> Database Driver Class Initialized
INFO - 2019-01-30 10:40:21 971668 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:40:21 973603 --> Controller Class Initialized
ERROR - 2019-01-30 10:40:21 974267 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 10:40:21 975024 --> Final output sent to browser
DEBUG - 2019-01-30 10:40:21 975177 --> Total execution time: 0.1201
INFO - 2019-01-30 05:11:08 785531 --> Config Class Initialized
INFO - 2019-01-30 05:11:08 785768 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:08 787252 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:08 787329 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:08 788743 --> URI Class Initialized
INFO - 2019-01-30 05:11:08 791616 --> Router Class Initialized
INFO - 2019-01-30 05:11:08 793160 --> Output Class Initialized
INFO - 2019-01-30 05:11:08 794277 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:08 795366 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:08 795450 --> Input Class Initialized
INFO - 2019-01-30 05:11:08 795804 --> Language Class Initialized
INFO - 2019-01-30 05:11:08 798082 --> Loader Class Initialized
INFO - 2019-01-30 05:11:08 799247 --> Helper loaded: url_helper
INFO - 2019-01-30 05:11:08 799746 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:41:08 809196 --> Database Driver Class Initialized
INFO - 2019-01-30 10:41:08 816334 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:41:08 817184 --> Controller Class Initialized
INFO - 2019-01-30 10:41:08 817620 --> Parser Class Initialized
INFO - 2019-01-30 10:41:08 818228 --> Helper loaded: html_helper
INFO - 2019-01-30 10:41:08 820295 --> Model Class Initialized
INFO - 2019-01-30 10:41:08 989326 --> Model Class Initialized
DEBUG - 2019-01-30 10:41:08 992862 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-30 10:41:08 994015 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-30 10:41:08 999757 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-30 10:41:08 999898 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-30 10:41:09 001449 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:41:09 003174 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:41:09 003310 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:41:09 004241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 005021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 005765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 006568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 299674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 300529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 301314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 302103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 302933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 303708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 304464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 305241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 306072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 306860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 307703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 308459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 309443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 310213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 311017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 311912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 312741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 313616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 314703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 315474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 316209 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 10:41:09 317384 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-30 10:41:09 317543 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-30 10:41:09 317647 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-30 10:41:09 320173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 325520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 327522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:09 342542 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:41:09 344916 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:41:09 353687 --> Final output sent to browser
DEBUG - 2019-01-30 10:41:09 353801 --> Total execution time: 0.5616
INFO - 2019-01-30 05:11:10 382505 --> Config Class Initialized
INFO - 2019-01-30 05:11:10 382662 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:10 385128 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:10 385255 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:10 386671 --> URI Class Initialized
INFO - 2019-01-30 05:11:10 389503 --> Router Class Initialized
INFO - 2019-01-30 05:11:10 392142 --> Output Class Initialized
INFO - 2019-01-30 05:11:10 394285 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:10 396250 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:10 396375 --> Input Class Initialized
INFO - 2019-01-30 05:11:10 397072 --> Language Class Initialized
INFO - 2019-01-30 05:11:10 402926 --> Loader Class Initialized
INFO - 2019-01-30 05:11:10 403857 --> Helper loaded: url_helper
INFO - 2019-01-30 05:11:10 404370 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:41:10 412372 --> Database Driver Class Initialized
INFO - 2019-01-30 10:41:10 416356 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:41:10 417344 --> Controller Class Initialized
ERROR - 2019-01-30 10:41:10 417921 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 10:41:10 418478 --> Final output sent to browser
DEBUG - 2019-01-30 10:41:10 418581 --> Total execution time: 0.0381
INFO - 2019-01-30 05:11:12 382000 --> Config Class Initialized
INFO - 2019-01-30 05:11:12 382244 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:12 383738 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:12 383810 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:12 385723 --> URI Class Initialized
INFO - 2019-01-30 05:11:12 390095 --> Router Class Initialized
INFO - 2019-01-30 05:11:12 392580 --> Output Class Initialized
INFO - 2019-01-30 05:11:12 394815 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:12 396759 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:12 396884 --> Input Class Initialized
INFO - 2019-01-30 05:11:12 397475 --> Language Class Initialized
INFO - 2019-01-30 05:11:12 399979 --> Loader Class Initialized
INFO - 2019-01-30 05:11:12 401168 --> Helper loaded: url_helper
INFO - 2019-01-30 05:11:12 401742 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:41:12 412005 --> Database Driver Class Initialized
INFO - 2019-01-30 10:41:12 418304 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:41:12 419101 --> Controller Class Initialized
INFO - 2019-01-30 10:41:12 419507 --> Parser Class Initialized
INFO - 2019-01-30 10:41:12 420084 --> Helper loaded: html_helper
INFO - 2019-01-30 10:41:12 423270 --> Model Class Initialized
DEBUG - 2019-01-30 10:41:12 725310 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '18'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-30 10:41:12 735687 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-30 10:41:12 736720 --> Model Class Initialized
DEBUG - 2019-01-30 10:41:12 737596 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-30 10:41:12 738919 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-30 10:41:12 747536 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 10:41:12 749628 --> Helper loaded: file_helper
DEBUG - 2019-01-30 10:41:12 749813 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 10:41:12 753407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 755214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 764842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 765490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 765794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 767776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 768290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 768577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 770518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 771015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 771275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 773257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 773786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 774046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 776081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 776639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 776912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 778937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 779548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 780405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 789791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 791779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 792658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 802249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 803211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 803735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 807260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 808150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 808602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 812146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 814321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 814755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 818635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 821671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 823014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 823591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 828573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 830100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 832050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 833497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 834227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 839436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 841058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 843063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 844536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 845287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 849699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 851103 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:41:12 852379 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-30 10:41:12 855422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 857357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 857819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 10:41:12 861170 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 10:41:12 861943 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 10:41:12 872544 --> Final output sent to browser
DEBUG - 2019-01-30 10:41:12 872757 --> Total execution time: 0.4825
INFO - 2019-01-30 05:11:13 199254 --> Config Class Initialized
INFO - 2019-01-30 05:11:13 199434 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:13 201754 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:13 201884 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:13 203254 --> URI Class Initialized
INFO - 2019-01-30 05:11:13 206747 --> Router Class Initialized
INFO - 2019-01-30 05:11:13 209170 --> Output Class Initialized
INFO - 2019-01-30 05:11:13 211065 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:13 212886 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:13 213032 --> Input Class Initialized
INFO - 2019-01-30 05:11:13 213639 --> Language Class Initialized
ERROR - 2019-01-30 05:11:13 214618 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-30 05:11:13 242335 --> Config Class Initialized
INFO - 2019-01-30 05:11:13 242538 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:13 243892 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:13 243964 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:13 244862 --> URI Class Initialized
INFO - 2019-01-30 05:11:13 247294 --> Router Class Initialized
INFO - 2019-01-30 05:11:13 248722 --> Output Class Initialized
INFO - 2019-01-30 05:11:13 249809 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:13 250859 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:13 250945 --> Input Class Initialized
INFO - 2019-01-30 05:11:13 251288 --> Language Class Initialized
ERROR - 2019-01-30 05:11:13 251826 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-30 05:11:13 309151 --> Config Class Initialized
INFO - 2019-01-30 05:11:13 309341 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:13 311491 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:13 311640 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:13 312798 --> URI Class Initialized
INFO - 2019-01-30 05:11:13 315222 --> Router Class Initialized
INFO - 2019-01-30 05:11:13 317074 --> Output Class Initialized
INFO - 2019-01-30 05:11:13 318100 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:13 319103 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:13 319175 --> Input Class Initialized
INFO - 2019-01-30 05:11:13 319597 --> Language Class Initialized
ERROR - 2019-01-30 05:11:13 320216 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-30 05:11:13 764012 --> Config Class Initialized
INFO - 2019-01-30 05:11:13 764153 --> Hooks Class Initialized
DEBUG - 2019-01-30 05:11:13 766033 --> UTF-8 Support Enabled
INFO - 2019-01-30 05:11:13 766149 --> Utf8 Class Initialized
INFO - 2019-01-30 05:11:13 767236 --> URI Class Initialized
INFO - 2019-01-30 05:11:13 769269 --> Router Class Initialized
INFO - 2019-01-30 05:11:13 771291 --> Output Class Initialized
INFO - 2019-01-30 05:11:13 772897 --> Security Class Initialized
DEBUG - 2019-01-30 05:11:13 774401 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 05:11:13 774532 --> Input Class Initialized
INFO - 2019-01-30 05:11:13 775013 --> Language Class Initialized
INFO - 2019-01-30 05:11:13 781173 --> Loader Class Initialized
INFO - 2019-01-30 05:11:13 782438 --> Helper loaded: url_helper
INFO - 2019-01-30 05:11:13 783126 --> Helper loaded: utility_helper
INFO - 2019-01-30 10:41:13 791074 --> Database Driver Class Initialized
INFO - 2019-01-30 10:41:13 795543 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 10:41:13 796751 --> Controller Class Initialized
ERROR - 2019-01-30 10:41:13 797506 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 10:41:13 798211 --> Final output sent to browser
DEBUG - 2019-01-30 10:41:13 798315 --> Total execution time: 0.0358
INFO - 2019-01-30 06:31:52 087618 --> Config Class Initialized
INFO - 2019-01-30 06:31:52 092108 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:52 098515 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:52 098650 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:52 100145 --> URI Class Initialized
DEBUG - 2019-01-30 06:31:52 108453 --> No URI present. Default controller set.
INFO - 2019-01-30 06:31:52 108582 --> Router Class Initialized
INFO - 2019-01-30 06:31:52 114593 --> Output Class Initialized
INFO - 2019-01-30 06:31:52 116518 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:52 122631 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:52 122741 --> Input Class Initialized
INFO - 2019-01-30 06:31:52 123471 --> Language Class Initialized
INFO - 2019-01-30 06:31:52 134845 --> Loader Class Initialized
INFO - 2019-01-30 06:31:52 143357 --> Helper loaded: url_helper
INFO - 2019-01-30 06:31:52 153378 --> Helper loaded: utility_helper
INFO - 2019-01-30 12:01:52 172827 --> Database Driver Class Initialized
INFO - 2019-01-30 12:01:52 207369 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 12:01:52 212651 --> Controller Class Initialized
INFO - 2019-01-30 12:01:52 220817 --> Parser Class Initialized
INFO - 2019-01-30 12:01:52 221920 --> Helper loaded: html_helper
INFO - 2019-01-30 12:01:52 229115 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 12:01:52 238217 --> Model Class Initialized
DEBUG - 2019-01-30 12:01:52 258500 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 12:01:52 263657 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 12:01:52 267185 --> Model Class Initialized
DEBUG - 2019-01-30 12:01:52 268908 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 12:01:52 294867 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 12:01:52 301841 --> Helper loaded: file_helper
DEBUG - 2019-01-30 12:01:52 302006 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 12:01:52 312453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 322186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 346695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 348833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 351247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 351619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 352205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 353128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 355377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 355724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 356285 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 12:01:52 357872 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 12:01:52 358011 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 12:01:52 358176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 360466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 360791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 361351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 362150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 364506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 364855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 365452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 366225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 368556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 368901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 369505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 370259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 373344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 373788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 374555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 375489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 378479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 378901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 379677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 380618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 383639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 384064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 384835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 385776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 388833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 389250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 390038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 391011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 394078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 394526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 395312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 396264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 399383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 399827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 400650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 401607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 404720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 405147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 405982 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 12:01:52 406867 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 12:01:52 407021 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 12:01:52 407217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 410270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 410720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 411559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 412513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 415599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 416024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 416898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 417838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 420937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 421365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 422205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 423166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 426256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 426717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 427565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 428508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 431605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 432034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 432873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 433788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 434654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 435529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 436347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 437180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 438024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 438863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 439743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 440567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 441378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 442202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 443012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 443852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 444684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 445576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 446572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 447462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 448348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 449186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 450005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 450829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 451653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 452474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 453351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 454256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 455147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 455970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 456851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 457674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 458580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 459372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 460305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 461121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 462032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 462903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 466150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 466609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 467499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 468413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 471600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 472042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 472929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 473854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 476917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 477349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 478220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 479132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 482294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 482759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 483652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 484555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 487664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 488100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 488992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 489928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 493041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 493500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 494375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 497494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 497925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 498780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 499792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 502940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 503417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 504261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 505188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 508279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 508745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 509602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 510533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 513689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 514138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 515007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 515950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 519042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 519505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 520340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 521291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 524441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 524899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 525814 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 12:01:52 526803 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 12:01:52 535167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 537096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 537554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:01:52 540647 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 12:01:52 541403 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 12:01:52 550443 --> Final output sent to browser
DEBUG - 2019-01-30 12:01:52 550578 --> Total execution time: 0.4695
INFO - 2019-01-30 06:31:55 259387 --> Config Class Initialized
INFO - 2019-01-30 06:31:55 259607 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:55 261235 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:55 261315 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:55 262336 --> URI Class Initialized
INFO - 2019-01-30 06:31:55 264163 --> Router Class Initialized
INFO - 2019-01-30 06:31:55 265851 --> Output Class Initialized
INFO - 2019-01-30 06:31:55 267184 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:55 268332 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:55 268424 --> Input Class Initialized
INFO - 2019-01-30 06:31:55 268836 --> Language Class Initialized
INFO - 2019-01-30 06:31:55 288711 --> Loader Class Initialized
INFO - 2019-01-30 06:31:55 290714 --> Helper loaded: url_helper
INFO - 2019-01-30 06:31:55 291949 --> Helper loaded: utility_helper
INFO - 2019-01-30 12:01:55 307496 --> Database Driver Class Initialized
INFO - 2019-01-30 12:01:55 331767 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 12:01:55 333256 --> Controller Class Initialized
ERROR - 2019-01-30 12:01:55 334191 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 12:01:55 335108 --> Final output sent to browser
DEBUG - 2019-01-30 12:01:55 335233 --> Total execution time: 0.0770
INFO - 2019-01-30 06:31:55 645522 --> Config Class Initialized
INFO - 2019-01-30 06:31:55 645627 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:55 647111 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:55 647203 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:55 647880 --> URI Class Initialized
INFO - 2019-01-30 06:31:55 651746 --> Router Class Initialized
INFO - 2019-01-30 06:31:55 653904 --> Output Class Initialized
INFO - 2019-01-30 06:31:55 655139 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:55 656183 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:55 656255 --> Input Class Initialized
INFO - 2019-01-30 06:31:55 656564 --> Language Class Initialized
ERROR - 2019-01-30 06:31:55 657099 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:56 100749 --> Config Class Initialized
INFO - 2019-01-30 06:31:56 100902 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:56 103681 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:56 103811 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:56 105164 --> URI Class Initialized
INFO - 2019-01-30 06:31:56 109328 --> Router Class Initialized
INFO - 2019-01-30 06:31:56 111725 --> Output Class Initialized
INFO - 2019-01-30 06:31:56 113782 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:56 115566 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:56 115695 --> Input Class Initialized
INFO - 2019-01-30 06:31:56 116256 --> Language Class Initialized
ERROR - 2019-01-30 06:31:56 117186 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:56 905337 --> Config Class Initialized
INFO - 2019-01-30 06:31:56 905563 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:56 908045 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:56 908179 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:56 909780 --> URI Class Initialized
INFO - 2019-01-30 06:31:56 912113 --> Router Class Initialized
INFO - 2019-01-30 06:31:56 913681 --> Output Class Initialized
INFO - 2019-01-30 06:31:56 914895 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:56 916800 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:56 916923 --> Input Class Initialized
INFO - 2019-01-30 06:31:56 917578 --> Language Class Initialized
ERROR - 2019-01-30 06:31:56 918615 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:57 344317 --> Config Class Initialized
INFO - 2019-01-30 06:31:57 344435 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:57 345820 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:57 345906 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:57 346744 --> URI Class Initialized
INFO - 2019-01-30 06:31:57 348747 --> Router Class Initialized
INFO - 2019-01-30 06:31:57 350265 --> Output Class Initialized
INFO - 2019-01-30 06:31:57 351454 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:57 352546 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:57 352632 --> Input Class Initialized
INFO - 2019-01-30 06:31:57 352993 --> Language Class Initialized
ERROR - 2019-01-30 06:31:57 353586 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:57 437223 --> Config Class Initialized
INFO - 2019-01-30 06:31:57 437325 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:57 438647 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:57 438730 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:57 439516 --> URI Class Initialized
INFO - 2019-01-30 06:31:57 441504 --> Router Class Initialized
INFO - 2019-01-30 06:31:57 443134 --> Output Class Initialized
INFO - 2019-01-30 06:31:57 444520 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:57 446055 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:57 446137 --> Input Class Initialized
INFO - 2019-01-30 06:31:57 446501 --> Language Class Initialized
ERROR - 2019-01-30 06:31:57 447050 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:57 761375 --> Config Class Initialized
INFO - 2019-01-30 06:31:57 761634 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:57 763238 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:57 763324 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:57 764383 --> URI Class Initialized
INFO - 2019-01-30 06:31:57 767309 --> Router Class Initialized
INFO - 2019-01-30 06:31:57 769040 --> Output Class Initialized
INFO - 2019-01-30 06:31:57 770334 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:57 771541 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:57 771626 --> Input Class Initialized
INFO - 2019-01-30 06:31:57 772022 --> Language Class Initialized
ERROR - 2019-01-30 06:31:57 772695 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:31:57 821980 --> Config Class Initialized
INFO - 2019-01-30 06:31:57 822206 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:31:57 823703 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:31:57 823782 --> Utf8 Class Initialized
INFO - 2019-01-30 06:31:57 824779 --> URI Class Initialized
INFO - 2019-01-30 06:31:57 827498 --> Router Class Initialized
INFO - 2019-01-30 06:31:57 829129 --> Output Class Initialized
INFO - 2019-01-30 06:31:57 830313 --> Security Class Initialized
DEBUG - 2019-01-30 06:31:57 831406 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:31:57 831497 --> Input Class Initialized
INFO - 2019-01-30 06:31:57 831861 --> Language Class Initialized
ERROR - 2019-01-30 06:31:57 832477 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 06:32:01 482285 --> Config Class Initialized
INFO - 2019-01-30 06:32:01 482516 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:32:01 485039 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:32:01 485229 --> Utf8 Class Initialized
INFO - 2019-01-30 06:32:01 486772 --> URI Class Initialized
INFO - 2019-01-30 06:32:01 489641 --> Router Class Initialized
INFO - 2019-01-30 06:32:01 491239 --> Output Class Initialized
INFO - 2019-01-30 06:32:01 493588 --> Security Class Initialized
DEBUG - 2019-01-30 06:32:01 494781 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:32:01 494859 --> Input Class Initialized
INFO - 2019-01-30 06:32:01 495264 --> Language Class Initialized
INFO - 2019-01-30 12:02:01 503923 --> Loader Class Initialized
INFO - 2019-01-30 12:02:01 505343 --> Helper loaded: url_helper
INFO - 2019-01-30 12:02:01 505861 --> Helper loaded: utility_helper
INFO - 2019-01-30 12:02:01 512883 --> Database Driver Class Initialized
INFO - 2019-01-30 12:02:01 519860 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 12:02:01 520889 --> Controller Class Initialized
INFO - 2019-01-30 12:02:01 521459 --> Parser Class Initialized
INFO - 2019-01-30 12:02:01 522135 --> Helper loaded: html_helper
INFO - 2019-01-30 12:02:01 522896 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-30 12:02:01 529387 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 2
ERROR - 2019-01-30 12:02:01 529509 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 2
ERROR - 2019-01-30 12:02:01 529670 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 122
ERROR - 2019-01-30 12:02:01 529750 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 122
INFO - 2019-01-30 12:02:01 529850 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/contact.php
ERROR - 2019-01-30 12:02:01 533474 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 12:02:01 534734 --> Helper loaded: file_helper
DEBUG - 2019-01-30 12:02:01 534846 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 12:02:01 538903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:02:01 540513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 12:02:01 548132 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 12:02:01 549917 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 12:02:01 557990 --> Final output sent to browser
DEBUG - 2019-01-30 12:02:01 558125 --> Total execution time: 0.0694
INFO - 2019-01-30 06:32:02 206068 --> Config Class Initialized
INFO - 2019-01-30 06:32:02 206243 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:32:02 209635 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:32:02 209806 --> Utf8 Class Initialized
INFO - 2019-01-30 06:32:02 223707 --> URI Class Initialized
INFO - 2019-01-30 06:32:02 228811 --> Router Class Initialized
INFO - 2019-01-30 06:32:02 231945 --> Output Class Initialized
INFO - 2019-01-30 06:32:02 239955 --> Security Class Initialized
DEBUG - 2019-01-30 06:32:02 242175 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:32:02 242327 --> Input Class Initialized
INFO - 2019-01-30 06:32:02 242971 --> Language Class Initialized
INFO - 2019-01-30 06:32:02 253367 --> Loader Class Initialized
INFO - 2019-01-30 06:32:02 256324 --> Helper loaded: url_helper
INFO - 2019-01-30 06:32:02 257313 --> Helper loaded: utility_helper
INFO - 2019-01-30 12:02:02 273071 --> Database Driver Class Initialized
INFO - 2019-01-30 12:02:02 279757 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 12:02:02 281492 --> Controller Class Initialized
ERROR - 2019-01-30 12:02:02 282551 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 12:02:02 283162 --> Final output sent to browser
DEBUG - 2019-01-30 12:02:02 283279 --> Total execution time: 0.0796
INFO - 2019-01-30 06:32:33 473478 --> Config Class Initialized
INFO - 2019-01-30 06:32:33 473659 --> Hooks Class Initialized
DEBUG - 2019-01-30 06:32:33 474945 --> UTF-8 Support Enabled
INFO - 2019-01-30 06:32:33 475013 --> Utf8 Class Initialized
INFO - 2019-01-30 06:32:33 475887 --> URI Class Initialized
INFO - 2019-01-30 06:32:33 478252 --> Router Class Initialized
INFO - 2019-01-30 06:32:33 479686 --> Output Class Initialized
INFO - 2019-01-30 06:32:33 480725 --> Security Class Initialized
DEBUG - 2019-01-30 06:32:33 481700 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 06:32:33 481769 --> Input Class Initialized
INFO - 2019-01-30 06:32:33 482085 --> Language Class Initialized
ERROR - 2019-01-30 06:32:33 482606 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 08:17:04 233907 --> Config Class Initialized
INFO - 2019-01-30 08:17:04 247159 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:04 274091 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:04 274210 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:04 282345 --> URI Class Initialized
DEBUG - 2019-01-30 08:17:04 297148 --> No URI present. Default controller set.
INFO - 2019-01-30 08:17:04 297300 --> Router Class Initialized
INFO - 2019-01-30 08:17:04 306072 --> Output Class Initialized
INFO - 2019-01-30 08:17:04 307636 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:04 309746 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:04 309819 --> Input Class Initialized
INFO - 2019-01-30 08:17:04 310405 --> Language Class Initialized
INFO - 2019-01-30 08:17:04 320538 --> Loader Class Initialized
INFO - 2019-01-30 08:17:04 329222 --> Helper loaded: url_helper
INFO - 2019-01-30 08:17:04 339808 --> Helper loaded: utility_helper
INFO - 2019-01-30 13:47:04 357501 --> Database Driver Class Initialized
INFO - 2019-01-30 13:47:04 384473 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:47:04 391760 --> Controller Class Initialized
INFO - 2019-01-30 13:47:04 399784 --> Parser Class Initialized
INFO - 2019-01-30 13:47:04 400676 --> Helper loaded: html_helper
INFO - 2019-01-30 13:47:04 410783 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 13:47:04 432708 --> Model Class Initialized
DEBUG - 2019-01-30 13:47:04 623135 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 13:47:04 628643 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 13:47:04 636791 --> Model Class Initialized
DEBUG - 2019-01-30 13:47:04 638169 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 13:47:04 662662 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 13:47:04 671283 --> Helper loaded: file_helper
DEBUG - 2019-01-30 13:47:04 671519 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 13:47:04 681304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 689013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 707566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 710243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 712380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 712703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 713198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 714009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 716984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 717273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 717961 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 13:47:04 720134 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 13:47:04 720253 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 13:47:04 720423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 722599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 722878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 723355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 724126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 726263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 726593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 727091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 727746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 729867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 730169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 730685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 731282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 733412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 733836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 734344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 735074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 737241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 737559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 738066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 738804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 741508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 741808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 742322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 743124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 745405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 745709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 746232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 747200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 749396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 749699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 750235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 750879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 753072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 753370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 753940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 754573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 756797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 757091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 757663 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 13:47:04 758193 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 13:47:04 758297 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 13:47:04 758447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 760727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 761023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 761595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 762171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 764369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 764799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 765355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 765954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 768151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 768476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 769136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 769758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 771960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 772254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 772962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 773556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 775882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 776187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 776762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 777462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 778179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 779113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 779894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 780540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 781171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 781934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 782569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 783220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 783976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 784593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 785206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 785939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 786569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 787179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 787885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 788666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 789268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 790067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 790637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 791168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 791924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 792500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 793323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 794079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 795144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 795902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 796586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 797130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 797820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 798358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 798902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 799731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 800381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 801034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 803772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 804076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 804681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 805360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 807723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 808031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 808676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 809353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 811737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 812042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 812645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 813494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 817409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 817910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 819000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 819967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 822082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 822381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 822984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 823709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 825777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 826073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 826822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 828943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 829240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 829813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 830626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 833161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 833522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 834191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 834964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 837447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 837759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 838320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 839157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 841461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 841794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 842358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 843310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 845771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 846082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 846780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 847614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 849858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 850167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 850894 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:47:04 851717 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 13:47:04 869856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 874325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 874798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:47:04 876759 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:47:04 877188 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 13:47:04 884953 --> Final output sent to browser
DEBUG - 2019-01-30 13:47:04 885104 --> Total execution time: 0.6636
INFO - 2019-01-30 08:17:06 802416 --> Config Class Initialized
INFO - 2019-01-30 08:17:06 802567 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:06 804956 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:06 805080 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:06 806636 --> URI Class Initialized
INFO - 2019-01-30 08:17:06 809539 --> Router Class Initialized
INFO - 2019-01-30 08:17:06 811325 --> Output Class Initialized
INFO - 2019-01-30 08:17:06 812643 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:06 813774 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:06 813863 --> Input Class Initialized
INFO - 2019-01-30 08:17:06 814300 --> Language Class Initialized
ERROR - 2019-01-30 08:17:06 814948 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:06 824547 --> Config Class Initialized
INFO - 2019-01-30 08:17:06 824764 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:06 827819 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:06 827908 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:06 829063 --> URI Class Initialized
INFO - 2019-01-30 08:17:06 832254 --> Router Class Initialized
INFO - 2019-01-30 08:17:06 834182 --> Output Class Initialized
INFO - 2019-01-30 08:17:06 835655 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:06 836954 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:06 837040 --> Input Class Initialized
INFO - 2019-01-30 08:17:06 837460 --> Language Class Initialized
ERROR - 2019-01-30 08:17:06 838124 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:07 050340 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 050438 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:07 051620 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 051692 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 052411 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 054275 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 055701 --> Output Class Initialized
INFO - 2019-01-30 08:17:07 056797 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 057807 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 057881 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 058216 --> Language Class Initialized
ERROR - 2019-01-30 08:17:07 058746 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:07 061489 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 061621 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:07 063616 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 063724 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 064762 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 067250 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 069211 --> Output Class Initialized
INFO - 2019-01-30 08:17:07 070873 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 072201 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 072307 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 072773 --> Language Class Initialized
ERROR - 2019-01-30 08:17:07 073513 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:07 188328 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 188585 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:07 190679 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 190777 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 192133 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 195667 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 197329 --> Output Class Initialized
INFO - 2019-01-30 08:17:07 205907 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 206090 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:07 207514 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 207587 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 208511 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 211086 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 212619 --> Output Class Initialized
INFO - 2019-01-30 08:17:07 213749 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 214791 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 214864 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 215212 --> Language Class Initialized
ERROR - 2019-01-30 08:17:07 215774 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:07 217468 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 218574 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 218647 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 219073 --> Language Class Initialized
ERROR - 2019-01-30 08:17:07 219671 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 08:17:07 650228 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 650381 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:17:07 652462 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 652554 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 653460 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 655087 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 656724 --> Output Class Initialized
INFO - 2019-01-30 08:17:07 658029 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 659295 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 659384 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 659801 --> Language Class Initialized
INFO - 2019-01-30 08:17:07 682605 --> Config Class Initialized
INFO - 2019-01-30 08:17:07 682714 --> Hooks Class Initialized
INFO - 2019-01-30 08:17:07 683585 --> Loader Class Initialized
INFO - 2019-01-30 08:17:07 685039 --> Helper loaded: url_helper
INFO - 2019-01-30 08:17:07 685720 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 08:17:07 697376 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:17:07 697581 --> Utf8 Class Initialized
INFO - 2019-01-30 08:17:07 699441 --> URI Class Initialized
INFO - 2019-01-30 08:17:07 704052 --> Router Class Initialized
INFO - 2019-01-30 08:17:07 708756 --> Output Class Initialized
INFO - 2019-01-30 13:47:07 712827 --> Database Driver Class Initialized
INFO - 2019-01-30 08:17:07 714848 --> Security Class Initialized
DEBUG - 2019-01-30 08:17:07 716147 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:17:07 716240 --> Input Class Initialized
INFO - 2019-01-30 08:17:07 716794 --> Language Class Initialized
ERROR - 2019-01-30 08:17:07 717622 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:47:07 725330 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:47:07 726356 --> Controller Class Initialized
ERROR - 2019-01-30 13:47:07 727049 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 13:47:07 727690 --> Final output sent to browser
DEBUG - 2019-01-30 13:47:07 727777 --> Total execution time: 0.0795
INFO - 2019-01-30 08:18:09 674911 --> Config Class Initialized
INFO - 2019-01-30 08:18:09 675096 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:09 676388 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:09 676471 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:09 677340 --> URI Class Initialized
INFO - 2019-01-30 08:18:09 679529 --> Router Class Initialized
INFO - 2019-01-30 08:18:09 681027 --> Output Class Initialized
INFO - 2019-01-30 08:18:09 682094 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:09 683063 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:09 683135 --> Input Class Initialized
INFO - 2019-01-30 08:18:09 683473 --> Language Class Initialized
INFO - 2019-01-30 08:18:09 685535 --> Loader Class Initialized
INFO - 2019-01-30 08:18:09 686424 --> Helper loaded: url_helper
INFO - 2019-01-30 08:18:09 686883 --> Helper loaded: utility_helper
INFO - 2019-01-30 13:48:09 692281 --> Database Driver Class Initialized
INFO - 2019-01-30 13:48:09 697966 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:48:09 698775 --> Controller Class Initialized
INFO - 2019-01-30 13:48:09 699167 --> Parser Class Initialized
INFO - 2019-01-30 13:48:09 699752 --> Helper loaded: html_helper
INFO - 2019-01-30 13:48:09 701546 --> Model Class Initialized
DEBUG - 2019-01-30 13:48:09 708349 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-30 13:48:09 727294 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-30 13:48:09 740334 --> Model Class Initialized
DEBUG - 2019-01-30 13:48:09 742542 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-30 13:48:09 743845 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-30 13:48:09 755821 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 13:48:09 757355 --> Helper loaded: file_helper
DEBUG - 2019-01-30 13:48:09 757509 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 13:48:09 761255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 762718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 770715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 771292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 771591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 773483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 774096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 774343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 776526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 776998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 777232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 779217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 779786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 780028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 781858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 782960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 783198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 784902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 786700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 787179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 787442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 789284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 789985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 790654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 791110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 791352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 793809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 794943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 795623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 796083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 796328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 798527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 799304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 799968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 800492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 800749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 803105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 804271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 805130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 805666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 805937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 809626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 810913 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:48:09 812829 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-30 13:48:09 816472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 819871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 820404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:48:09 824868 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:48:09 825637 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 13:48:09 834952 --> Final output sent to browser
DEBUG - 2019-01-30 13:48:09 835047 --> Total execution time: 0.1527
INFO - 2019-01-30 08:18:10 370122 --> Config Class Initialized
INFO - 2019-01-30 08:18:10 370287 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:10 383946 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:10 384062 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:10 385287 --> URI Class Initialized
INFO - 2019-01-30 08:18:10 389244 --> Router Class Initialized
INFO - 2019-01-30 08:18:10 392529 --> Output Class Initialized
INFO - 2019-01-30 08:18:10 395452 --> Config Class Initialized
INFO - 2019-01-30 08:18:10 395688 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:10 397861 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:10 397953 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:10 399334 --> URI Class Initialized
INFO - 2019-01-30 08:18:10 403335 --> Router Class Initialized
INFO - 2019-01-30 08:18:10 404113 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:10 406219 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:10 406363 --> Input Class Initialized
INFO - 2019-01-30 08:18:10 407258 --> Language Class Initialized
ERROR - 2019-01-30 08:18:10 408555 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-30 08:18:10 412990 --> Output Class Initialized
INFO - 2019-01-30 08:18:10 414962 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:10 416503 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:10 416610 --> Input Class Initialized
INFO - 2019-01-30 08:18:10 417368 --> Language Class Initialized
ERROR - 2019-01-30 08:18:10 418124 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-30 08:18:10 462229 --> Config Class Initialized
INFO - 2019-01-30 08:18:10 462599 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:10 465728 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:10 465872 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:10 467925 --> URI Class Initialized
INFO - 2019-01-30 08:18:10 474814 --> Router Class Initialized
INFO - 2019-01-30 08:18:10 478518 --> Output Class Initialized
INFO - 2019-01-30 08:18:10 481133 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:10 483725 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:10 483872 --> Input Class Initialized
INFO - 2019-01-30 08:18:10 484649 --> Language Class Initialized
ERROR - 2019-01-30 08:18:10 485953 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-30 08:18:11 176114 --> Config Class Initialized
INFO - 2019-01-30 08:18:11 176451 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:11 179625 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:11 179802 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:11 181632 --> URI Class Initialized
INFO - 2019-01-30 08:18:11 184678 --> Router Class Initialized
INFO - 2019-01-30 08:18:11 187504 --> Output Class Initialized
INFO - 2019-01-30 08:18:11 189804 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:11 191797 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:11 191927 --> Input Class Initialized
INFO - 2019-01-30 08:18:11 192550 --> Language Class Initialized
INFO - 2019-01-30 08:18:11 201565 --> Loader Class Initialized
INFO - 2019-01-30 08:18:11 203241 --> Helper loaded: url_helper
INFO - 2019-01-30 08:18:11 204135 --> Helper loaded: utility_helper
INFO - 2019-01-30 13:48:11 215553 --> Database Driver Class Initialized
INFO - 2019-01-30 13:48:11 225562 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:48:11 227051 --> Controller Class Initialized
ERROR - 2019-01-30 13:48:11 227994 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 13:48:11 229193 --> Final output sent to browser
DEBUG - 2019-01-30 13:48:11 229322 --> Total execution time: 0.0552
INFO - 2019-01-30 08:18:16 490783 --> Config Class Initialized
INFO - 2019-01-30 08:18:16 491018 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:18:16 492696 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:18:16 492786 --> Utf8 Class Initialized
INFO - 2019-01-30 08:18:16 493921 --> URI Class Initialized
INFO - 2019-01-30 08:18:16 497068 --> Router Class Initialized
INFO - 2019-01-30 08:18:16 498878 --> Output Class Initialized
INFO - 2019-01-30 08:18:16 500246 --> Security Class Initialized
DEBUG - 2019-01-30 08:18:16 501499 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:18:16 501589 --> Input Class Initialized
INFO - 2019-01-30 08:18:16 502003 --> Language Class Initialized
ERROR - 2019-01-30 08:18:16 502846 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-30 08:22:00 281296 --> Config Class Initialized
INFO - 2019-01-30 08:22:00 281773 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:00 285512 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:00 285660 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:00 287230 --> URI Class Initialized
INFO - 2019-01-30 08:22:00 290283 --> Router Class Initialized
INFO - 2019-01-30 08:22:00 292756 --> Output Class Initialized
INFO - 2019-01-30 08:22:00 294548 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:00 296267 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:00 296390 --> Input Class Initialized
INFO - 2019-01-30 08:22:00 297008 --> Language Class Initialized
INFO - 2019-01-30 08:22:00 334381 --> Loader Class Initialized
INFO - 2019-01-30 08:22:00 336076 --> Helper loaded: url_helper
INFO - 2019-01-30 08:22:00 336982 --> Helper loaded: utility_helper
INFO - 2019-01-30 13:52:00 349994 --> Database Driver Class Initialized
INFO - 2019-01-30 13:52:00 362745 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:52:00 364170 --> Controller Class Initialized
INFO - 2019-01-30 13:52:00 365354 --> Parser Class Initialized
INFO - 2019-01-30 13:52:00 366852 --> Helper loaded: html_helper
DEBUG - 2019-01-30 13:52:00 366990 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-30 13:52:00 370388 --> Model Class Initialized
INFO - 2019-01-30 13:52:00 395172 --> Helper loaded: cookie_helper
DEBUG - 2019-01-30 13:52:00 397485 --> updatecount for view business88888888 [UPDATE `bd_business_details` SET `num_business_viewed` = 1
WHERE `form_id` = '172']
INFO - 2019-01-30 13:52:00 398255 --> Model Class Initialized
DEBUG - 2019-01-30 13:52:00 399024 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-30 13:52:00 400146 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-30 13:52:00 413822 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 13:52:00 416480 --> Helper loaded: file_helper
DEBUG - 2019-01-30 13:52:00 416964 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 13:52:00 428970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 432885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 435795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 436975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 438144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 439013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:00 451304 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:52:00 452440 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-30 13:52:00 454894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:02 183506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:02 185018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:52:02 194165 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:52:02 196616 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 13:52:02 205161 --> Final output sent to browser
DEBUG - 2019-01-30 13:52:02 205282 --> Total execution time: 1.9198
INFO - 2019-01-30 08:22:02 490907 --> Config Class Initialized
INFO - 2019-01-30 08:22:02 491000 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:02 492218 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:02 492290 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:02 492980 --> URI Class Initialized
INFO - 2019-01-30 08:22:02 494992 --> Router Class Initialized
INFO - 2019-01-30 08:22:02 496258 --> Output Class Initialized
INFO - 2019-01-30 08:22:02 497230 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:02 498123 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:02 498194 --> Input Class Initialized
INFO - 2019-01-30 08:22:02 498512 --> Language Class Initialized
ERROR - 2019-01-30 08:22:02 499013 --> 404 Page Not Found: Browse-sector-listing-details/172
INFO - 2019-01-30 08:22:02 595541 --> Config Class Initialized
INFO - 2019-01-30 08:22:02 595854 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:02 598227 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:02 598349 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:02 599919 --> URI Class Initialized
INFO - 2019-01-30 08:22:02 604242 --> Router Class Initialized
INFO - 2019-01-30 08:22:02 606173 --> Config Class Initialized
INFO - 2019-01-30 08:22:02 606508 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:02 608890 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:02 609009 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:02 610538 --> URI Class Initialized
INFO - 2019-01-30 08:22:02 614847 --> Router Class Initialized
INFO - 2019-01-30 08:22:02 616844 --> Output Class Initialized
INFO - 2019-01-30 08:22:02 618731 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:02 620482 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:02 620604 --> Input Class Initialized
INFO - 2019-01-30 08:22:02 621171 --> Language Class Initialized
ERROR - 2019-01-30 08:22:02 622107 --> 404 Page Not Found: Browse-sector-listing-details/172
INFO - 2019-01-30 08:22:02 626240 --> Output Class Initialized
INFO - 2019-01-30 08:22:02 628192 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:02 629939 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:02 630059 --> Input Class Initialized
INFO - 2019-01-30 08:22:02 630651 --> Language Class Initialized
ERROR - 2019-01-30 08:22:02 631588 --> 404 Page Not Found: Browse-sector-listing-details/172
INFO - 2019-01-30 08:22:02 815942 --> Config Class Initialized
INFO - 2019-01-30 08:22:02 816088 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:02 818183 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:02 818294 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:02 819509 --> URI Class Initialized
INFO - 2019-01-30 08:22:02 821777 --> Router Class Initialized
INFO - 2019-01-30 08:22:02 824062 --> Output Class Initialized
INFO - 2019-01-30 08:22:02 825674 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:02 827548 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:02 827688 --> Input Class Initialized
INFO - 2019-01-30 08:22:02 828448 --> Language Class Initialized
INFO - 2019-01-30 08:22:02 834728 --> Loader Class Initialized
INFO - 2019-01-30 08:22:02 835521 --> Helper loaded: url_helper
INFO - 2019-01-30 08:22:02 835952 --> Helper loaded: utility_helper
INFO - 2019-01-30 13:52:02 840975 --> Database Driver Class Initialized
INFO - 2019-01-30 13:52:02 844211 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 13:52:02 845010 --> Controller Class Initialized
ERROR - 2019-01-30 13:52:02 845552 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 13:52:02 845971 --> Final output sent to browser
DEBUG - 2019-01-30 13:52:02 846039 --> Total execution time: 0.0317
INFO - 2019-01-30 08:22:03 540632 --> Config Class Initialized
INFO - 2019-01-30 08:22:03 540734 --> Hooks Class Initialized
DEBUG - 2019-01-30 08:22:03 542268 --> UTF-8 Support Enabled
INFO - 2019-01-30 08:22:03 542350 --> Utf8 Class Initialized
INFO - 2019-01-30 08:22:03 543250 --> URI Class Initialized
INFO - 2019-01-30 08:22:03 546099 --> Router Class Initialized
INFO - 2019-01-30 08:22:03 547666 --> Output Class Initialized
INFO - 2019-01-30 08:22:03 549267 --> Security Class Initialized
DEBUG - 2019-01-30 08:22:03 551168 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 08:22:03 551481 --> Input Class Initialized
INFO - 2019-01-30 08:22:03 551914 --> Language Class Initialized
ERROR - 2019-01-30 08:22:03 552512 --> 404 Page Not Found: Browse-sector-listing-details/172
INFO - 2019-01-30 10:54:40 370085 --> Config Class Initialized
INFO - 2019-01-30 10:54:40 376583 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:40 385637 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:40 385730 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:40 387240 --> URI Class Initialized
DEBUG - 2019-01-30 10:54:40 394109 --> No URI present. Default controller set.
INFO - 2019-01-30 10:54:40 394201 --> Router Class Initialized
INFO - 2019-01-30 10:54:40 403255 --> Output Class Initialized
INFO - 2019-01-30 10:54:40 409863 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:40 420519 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:40 420614 --> Input Class Initialized
INFO - 2019-01-30 10:54:40 421315 --> Language Class Initialized
INFO - 2019-01-30 10:54:40 434345 --> Loader Class Initialized
INFO - 2019-01-30 10:54:40 442982 --> Helper loaded: url_helper
INFO - 2019-01-30 10:54:40 451198 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:24:40 470674 --> Database Driver Class Initialized
INFO - 2019-01-30 16:24:40 495512 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:24:40 501461 --> Controller Class Initialized
INFO - 2019-01-30 16:24:40 508902 --> Parser Class Initialized
INFO - 2019-01-30 16:24:40 510061 --> Helper loaded: html_helper
INFO - 2019-01-30 16:24:40 520893 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:24:40 526252 --> Model Class Initialized
DEBUG - 2019-01-30 16:24:40 903933 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 16:24:41 005131 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 16:24:41 016649 --> Model Class Initialized
DEBUG - 2019-01-30 16:24:41 022547 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 16:24:41 040148 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:24:41 047657 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:24:41 047851 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:24:41 107355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 123373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 212450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 215189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 218241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 218708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 219502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 220617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 223515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 223938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 224690 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:24:41 226636 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:24:41 226814 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:24:41 227029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 229970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 230386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 231141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 232172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 235214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 235698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 236489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 237533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 240535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 240983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 241769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 242784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 245856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 246294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 247081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 248130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 251231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 251713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 252518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 253612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 256839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 257292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 258100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 259237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 273617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 274063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 274895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 275954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 279143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 279623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 280462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 281527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 284818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 285270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 286122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 287233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 290483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 290960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 291831 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:24:41 303086 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:24:41 303364 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:24:41 303738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 310031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 310523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 311383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 312721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 315956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 316401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 317270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 318310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 321542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 321988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 322856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 324013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 329102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 329787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 330684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 331834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 335092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 335567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 336426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 337498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 338500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 339494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 340501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 341484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 342473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 343439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 344422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 345424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 346400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 347374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 348347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 349315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 350286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 351504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 352503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 353859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 355561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 356408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 357526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 358388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 359322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 360208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 361284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 362215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 363233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 364106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 365127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 365993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 366992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 367855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 402995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 404289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 405531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 406501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 410269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 410736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 411653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 412652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 415867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 416317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 417215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 418215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 421475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 421925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 422835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 423856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 427149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 427630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 428558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 429558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 432771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 433222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 434130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 435270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 438528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 438980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 439902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 443058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 443514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 444356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 445535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 448843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 449301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 450172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 451211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 454463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 454921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 455792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 503514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 507694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 508164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 509046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 510230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 513407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 513875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 514743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 515789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 518969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 519428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 520339 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:24:41 521460 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 16:24:41 530200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 532249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 532713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:41 536092 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:24:41 536879 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:24:41 546148 --> Final output sent to browser
DEBUG - 2019-01-30 16:24:41 546288 --> Total execution time: 1.1803
INFO - 2019-01-30 10:54:43 455204 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 455363 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 457612 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 457743 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 459075 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 474369 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 476869 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 478763 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 480479 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 480612 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 481182 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 482125 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 483937 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 484258 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 486707 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 486836 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 488504 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 494961 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 497658 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 499655 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 501517 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 501648 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 502259 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 503262 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 645240 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 645607 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 648015 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 648150 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 650638 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 660398 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 663113 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 665103 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 666969 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 667098 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 667731 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 668724 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 721457 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 721615 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 724419 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 724622 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 726408 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 737982 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 738325 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 740793 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 740925 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 744232 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 749418 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 758493 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 763153 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 767277 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 768975 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 769104 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 769687 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 770598 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 772687 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 774698 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 776566 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 776694 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 777304 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 778284 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 779453 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 779792 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 782265 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 782397 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 784046 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 789706 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 792388 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 794380 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 796262 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 796391 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 797024 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 798012 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:43 906002 --> Config Class Initialized
INFO - 2019-01-30 10:54:43 906145 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:43 908307 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:43 908437 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:43 909568 --> URI Class Initialized
INFO - 2019-01-30 10:54:43 913157 --> Router Class Initialized
INFO - 2019-01-30 10:54:43 915927 --> Output Class Initialized
INFO - 2019-01-30 10:54:43 918873 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:43 921680 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:43 921804 --> Input Class Initialized
INFO - 2019-01-30 10:54:43 922321 --> Language Class Initialized
ERROR - 2019-01-30 10:54:43 923705 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:54:44 016093 --> Config Class Initialized
INFO - 2019-01-30 10:54:44 016230 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:44 018055 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:44 018182 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:44 019265 --> URI Class Initialized
INFO - 2019-01-30 10:54:44 021483 --> Router Class Initialized
INFO - 2019-01-30 10:54:44 023669 --> Output Class Initialized
INFO - 2019-01-30 10:54:44 025324 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:44 026886 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:44 027000 --> Input Class Initialized
INFO - 2019-01-30 10:54:44 027535 --> Language Class Initialized
INFO - 2019-01-30 10:54:44 046294 --> Loader Class Initialized
INFO - 2019-01-30 10:54:44 047743 --> Helper loaded: url_helper
INFO - 2019-01-30 10:54:44 048501 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:24:44 057285 --> Database Driver Class Initialized
INFO - 2019-01-30 16:24:44 065161 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:24:44 066448 --> Controller Class Initialized
ERROR - 2019-01-30 16:24:44 067229 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:24:44 067982 --> Final output sent to browser
DEBUG - 2019-01-30 16:24:44 068090 --> Total execution time: 0.0534
INFO - 2019-01-30 10:54:54 195940 --> Config Class Initialized
INFO - 2019-01-30 10:54:54 196274 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:54 202954 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:54 203197 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:54 207607 --> URI Class Initialized
INFO - 2019-01-30 10:54:54 217469 --> Router Class Initialized
INFO - 2019-01-30 10:54:54 220740 --> Output Class Initialized
INFO - 2019-01-30 10:54:54 223484 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:54 225918 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:54 226049 --> Input Class Initialized
INFO - 2019-01-30 10:54:54 226690 --> Language Class Initialized
INFO - 2019-01-30 10:54:54 240518 --> Loader Class Initialized
INFO - 2019-01-30 10:54:54 242063 --> Helper loaded: url_helper
INFO - 2019-01-30 10:54:54 242981 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:24:54 254142 --> Database Driver Class Initialized
INFO - 2019-01-30 16:24:54 262837 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:24:54 264317 --> Controller Class Initialized
INFO - 2019-01-30 16:24:54 265060 --> Parser Class Initialized
INFO - 2019-01-30 16:24:54 266160 --> Helper loaded: html_helper
INFO - 2019-01-30 16:24:54 267369 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:24:54 272130 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/forget-password.php
ERROR - 2019-01-30 16:24:54 277002 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:24:54 279068 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:24:54 279258 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:24:54 285428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:54 287164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:24:54 297703 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:24:54 300570 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:24:54 309276 --> Final output sent to browser
DEBUG - 2019-01-30 16:24:54 309422 --> Total execution time: 0.1078
INFO - 2019-01-30 10:54:54 849948 --> Config Class Initialized
INFO - 2019-01-30 10:54:54 850045 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:54:54 851366 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:54:54 851453 --> Utf8 Class Initialized
INFO - 2019-01-30 10:54:54 852185 --> URI Class Initialized
INFO - 2019-01-30 10:54:54 854438 --> Router Class Initialized
INFO - 2019-01-30 10:54:54 855804 --> Output Class Initialized
INFO - 2019-01-30 10:54:54 856812 --> Security Class Initialized
DEBUG - 2019-01-30 10:54:54 857769 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:54:54 857841 --> Input Class Initialized
INFO - 2019-01-30 10:54:54 858249 --> Language Class Initialized
INFO - 2019-01-30 10:54:54 867557 --> Loader Class Initialized
INFO - 2019-01-30 10:54:54 869431 --> Helper loaded: url_helper
INFO - 2019-01-30 10:54:54 870184 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:24:54 880767 --> Database Driver Class Initialized
INFO - 2019-01-30 16:24:54 886007 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:24:54 886778 --> Controller Class Initialized
ERROR - 2019-01-30 16:24:54 887275 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:24:54 887738 --> Final output sent to browser
DEBUG - 2019-01-30 16:24:54 887805 --> Total execution time: 0.0391
INFO - 2019-01-30 10:55:09 872746 --> Config Class Initialized
INFO - 2019-01-30 10:55:09 873074 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:55:09 875287 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:55:09 875463 --> Utf8 Class Initialized
INFO - 2019-01-30 10:55:09 876893 --> URI Class Initialized
INFO - 2019-01-30 10:55:09 880688 --> Router Class Initialized
INFO - 2019-01-30 10:55:09 883507 --> Output Class Initialized
INFO - 2019-01-30 10:55:09 885909 --> Security Class Initialized
DEBUG - 2019-01-30 10:55:09 887794 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:55:09 887908 --> Input Class Initialized
INFO - 2019-01-30 10:55:09 888456 --> Language Class Initialized
INFO - 2019-01-30 10:55:09 895941 --> Loader Class Initialized
INFO - 2019-01-30 10:55:09 897317 --> Helper loaded: url_helper
INFO - 2019-01-30 10:55:09 898144 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:25:09 908823 --> Database Driver Class Initialized
INFO - 2019-01-30 16:25:09 917460 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:25:09 918816 --> Controller Class Initialized
INFO - 2019-01-30 16:25:09 919476 --> Parser Class Initialized
INFO - 2019-01-30 16:25:09 920466 --> Helper loaded: html_helper
INFO - 2019-01-30 16:25:09 921974 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:25:09 927035 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/register.php
ERROR - 2019-01-30 16:25:09 933221 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:25:09 935234 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:25:09 935408 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:25:09 941464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:25:09 943231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:25:09 955173 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:25:09 957101 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:25:09 965245 --> Final output sent to browser
DEBUG - 2019-01-30 16:25:09 965384 --> Total execution time: 0.0878
INFO - 2019-01-30 10:55:10 503421 --> Config Class Initialized
INFO - 2019-01-30 10:55:10 503532 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:55:10 504991 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:55:10 505075 --> Utf8 Class Initialized
INFO - 2019-01-30 10:55:10 505907 --> URI Class Initialized
INFO - 2019-01-30 10:55:10 507447 --> Router Class Initialized
INFO - 2019-01-30 10:55:10 508960 --> Output Class Initialized
INFO - 2019-01-30 10:55:10 510149 --> Security Class Initialized
DEBUG - 2019-01-30 10:55:10 511250 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:55:10 511337 --> Input Class Initialized
INFO - 2019-01-30 10:55:10 511748 --> Language Class Initialized
INFO - 2019-01-30 10:55:10 516303 --> Loader Class Initialized
INFO - 2019-01-30 10:55:10 517277 --> Helper loaded: url_helper
INFO - 2019-01-30 10:55:10 517811 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:25:10 526201 --> Database Driver Class Initialized
INFO - 2019-01-30 16:25:10 531455 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:25:10 532790 --> Controller Class Initialized
ERROR - 2019-01-30 16:25:10 533638 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:25:10 534418 --> Final output sent to browser
DEBUG - 2019-01-30 16:25:10 534543 --> Total execution time: 0.0322
INFO - 2019-01-30 10:58:17 417347 --> Config Class Initialized
INFO - 2019-01-30 10:58:17 417701 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:17 420113 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:17 420245 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:17 421763 --> URI Class Initialized
DEBUG - 2019-01-30 10:58:17 424197 --> No URI present. Default controller set.
INFO - 2019-01-30 10:58:17 424331 --> Router Class Initialized
INFO - 2019-01-30 10:58:17 426940 --> Output Class Initialized
INFO - 2019-01-30 10:58:17 428924 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:17 430963 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:17 431097 --> Input Class Initialized
INFO - 2019-01-30 10:58:17 431740 --> Language Class Initialized
INFO - 2019-01-30 10:58:17 435725 --> Loader Class Initialized
INFO - 2019-01-30 10:58:17 437324 --> Helper loaded: url_helper
INFO - 2019-01-30 10:58:17 438194 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:28:17 470202 --> Database Driver Class Initialized
INFO - 2019-01-30 16:28:17 507081 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:28:17 508605 --> Controller Class Initialized
INFO - 2019-01-30 16:28:17 509336 --> Parser Class Initialized
INFO - 2019-01-30 16:28:17 510441 --> Helper loaded: html_helper
INFO - 2019-01-30 16:28:17 511665 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:28:17 515024 --> Model Class Initialized
DEBUG - 2019-01-30 16:28:17 525243 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 16:28:17 530086 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 16:28:17 530877 --> Model Class Initialized
DEBUG - 2019-01-30 16:28:17 531450 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 16:28:17 534827 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:28:17 536935 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:28:17 537113 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:28:17 541239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 544015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 553924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 555912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 558885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 559326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 560080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 560851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 563683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 564093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 564825 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:28:17 566262 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:28:17 566447 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:28:17 566682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 569602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 570010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 570800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 571635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 574642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 575078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 576915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 578742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 591135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 591645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 592402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 593271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 596345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 596796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 597582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 598397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 601511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 601938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 602752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 603634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 606781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 607218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 608010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 608795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 611900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 612329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 613127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 613867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 616987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 617429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 618243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 619003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 622199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 622663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 623498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 624221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 627391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 627845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 628690 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:28:17 629565 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:28:17 629720 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:28:17 629925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 633095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 633558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 634382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 635190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 638355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 638822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 639676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 640542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 643733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 644170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 645021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 645833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 649053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 649514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 650355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 651175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 654350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 654808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 655668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 656454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 657164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 657867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 658565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 659238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 659909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 660583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 661256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 661953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 662625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 663279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 664000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 664678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 665328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 665996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 666672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 667716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 668667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 669538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 670363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 671190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 672019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 672875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 673629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 674595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 675935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 679189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 680608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 683873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 685313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 688579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 689918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 693181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 694662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 696039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 707706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 708218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 709150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 710118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 721822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 722817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 724566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 725732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 731216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 731713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 732635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 733578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 736917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 737382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 738292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 739073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 749597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 751054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 754654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 756099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 771414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 772933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 776577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 789196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 789679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 790548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 791641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 798134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 798630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 799491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 800451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 806884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 807391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 808265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 809134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 815798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 817327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 820782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 822235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 833240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 833734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 834606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 835457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 838633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 839083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 839952 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:28:17 840992 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 16:28:17 844022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 846224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 846698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:28:17 849999 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:28:17 850838 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:28:17 874794 --> Final output sent to browser
DEBUG - 2019-01-30 16:28:17 875014 --> Total execution time: 0.4362
INFO - 2019-01-30 10:58:19 067819 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 067915 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 069525 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 069601 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 070324 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 074626 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 076414 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 077404 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 078723 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 079174 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 079727 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 082227 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:19 191817 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 191910 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 193239 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 193339 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 194664 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 197932 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 200269 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 202929 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 204833 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 204930 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 205503 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 206269 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:19 402410 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 402574 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 403948 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 404028 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 405288 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 408232 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 410084 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 412122 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 414352 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 414499 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 415091 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 415961 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:19 479002 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 479294 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 482387 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 482513 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 483647 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 486753 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 490242 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 492310 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 493642 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 493724 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 494172 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 494968 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:19 516550 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 516753 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 519301 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 519392 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 520251 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 526551 --> Config Class Initialized
INFO - 2019-01-30 10:58:19 526767 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:19 528341 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:19 528435 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:19 529525 --> URI Class Initialized
INFO - 2019-01-30 10:58:19 532624 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 534245 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 535491 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 536689 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 536776 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 537147 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 537816 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:19 539102 --> Router Class Initialized
INFO - 2019-01-30 10:58:19 540904 --> Output Class Initialized
INFO - 2019-01-30 10:58:19 542287 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:19 543638 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:19 543729 --> Input Class Initialized
INFO - 2019-01-30 10:58:19 544148 --> Language Class Initialized
ERROR - 2019-01-30 10:58:19 544828 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 10:58:20 671550 --> Config Class Initialized
INFO - 2019-01-30 10:58:20 671683 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:20 673674 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:20 673799 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:20 674704 --> URI Class Initialized
INFO - 2019-01-30 10:58:20 676744 --> Router Class Initialized
INFO - 2019-01-30 10:58:20 678663 --> Output Class Initialized
INFO - 2019-01-30 10:58:20 679742 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:20 681241 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:20 681340 --> Input Class Initialized
INFO - 2019-01-30 10:58:20 681874 --> Language Class Initialized
INFO - 2019-01-30 10:58:20 687603 --> Loader Class Initialized
INFO - 2019-01-30 10:58:20 688658 --> Helper loaded: url_helper
INFO - 2019-01-30 10:58:20 689174 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:28:20 694870 --> Database Driver Class Initialized
INFO - 2019-01-30 16:28:20 700475 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:28:20 701905 --> Controller Class Initialized
ERROR - 2019-01-30 16:28:20 702759 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:28:20 703557 --> Final output sent to browser
DEBUG - 2019-01-30 16:28:20 703653 --> Total execution time: 0.0337
INFO - 2019-01-30 10:58:20 955869 --> Config Class Initialized
INFO - 2019-01-30 10:58:20 956110 --> Hooks Class Initialized
DEBUG - 2019-01-30 10:58:20 957901 --> UTF-8 Support Enabled
INFO - 2019-01-30 10:58:20 957992 --> Utf8 Class Initialized
INFO - 2019-01-30 10:58:20 959691 --> URI Class Initialized
INFO - 2019-01-30 10:58:20 962621 --> Router Class Initialized
INFO - 2019-01-30 10:58:20 964238 --> Output Class Initialized
INFO - 2019-01-30 10:58:20 966300 --> Security Class Initialized
DEBUG - 2019-01-30 10:58:20 967770 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 10:58:20 967843 --> Input Class Initialized
INFO - 2019-01-30 10:58:20 968317 --> Language Class Initialized
ERROR - 2019-01-30 10:58:20 969029 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:04:48 379056 --> Config Class Initialized
INFO - 2019-01-30 11:04:48 379395 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:04:48 381813 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:04:48 381946 --> Utf8 Class Initialized
INFO - 2019-01-30 11:04:48 383600 --> URI Class Initialized
INFO - 2019-01-30 11:04:48 388205 --> Router Class Initialized
INFO - 2019-01-30 11:04:48 390894 --> Output Class Initialized
INFO - 2019-01-30 11:04:48 392934 --> Security Class Initialized
DEBUG - 2019-01-30 11:04:48 396298 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:04:48 396567 --> Input Class Initialized
INFO - 2019-01-30 11:04:48 398144 --> Language Class Initialized
ERROR - 2019-01-30 11:04:48 400674 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:09:17 507072 --> Config Class Initialized
INFO - 2019-01-30 11:09:17 507266 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:09:17 508667 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:09:17 508744 --> Utf8 Class Initialized
INFO - 2019-01-30 11:09:17 509629 --> URI Class Initialized
INFO - 2019-01-30 11:09:17 512234 --> Router Class Initialized
INFO - 2019-01-30 11:09:17 513957 --> Output Class Initialized
INFO - 2019-01-30 11:09:17 515022 --> Security Class Initialized
DEBUG - 2019-01-30 11:09:17 516329 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:09:17 516565 --> Input Class Initialized
INFO - 2019-01-30 11:09:17 516982 --> Language Class Initialized
ERROR - 2019-01-30 11:09:17 517689 --> 404 Page Not Found: Forget-passwordphp/index
INFO - 2019-01-30 11:09:49 094873 --> Config Class Initialized
INFO - 2019-01-30 11:09:49 095067 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:09:49 096398 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:09:49 096486 --> Utf8 Class Initialized
INFO - 2019-01-30 11:09:49 097369 --> URI Class Initialized
INFO - 2019-01-30 11:09:49 098944 --> Router Class Initialized
INFO - 2019-01-30 11:09:49 100380 --> Output Class Initialized
INFO - 2019-01-30 11:09:49 101473 --> Security Class Initialized
DEBUG - 2019-01-30 11:09:49 102668 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:09:49 102740 --> Input Class Initialized
INFO - 2019-01-30 11:09:49 103085 --> Language Class Initialized
INFO - 2019-01-30 11:09:49 105789 --> Loader Class Initialized
INFO - 2019-01-30 11:09:49 106692 --> Helper loaded: url_helper
INFO - 2019-01-30 11:09:49 107175 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:39:49 115495 --> Database Driver Class Initialized
INFO - 2019-01-30 16:39:49 122493 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:39:49 123348 --> Controller Class Initialized
INFO - 2019-01-30 16:39:49 123775 --> Parser Class Initialized
INFO - 2019-01-30 16:39:49 124476 --> Helper loaded: html_helper
INFO - 2019-01-30 16:39:49 125319 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:39:49 125549 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/forget-password.php
ERROR - 2019-01-30 16:39:49 127984 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:39:49 129189 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:39:49 129300 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:39:49 133280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:39:49 134561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:39:49 143217 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:39:49 145349 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:39:49 151329 --> Final output sent to browser
DEBUG - 2019-01-30 16:39:49 151410 --> Total execution time: 0.0521
INFO - 2019-01-30 11:09:49 359738 --> Config Class Initialized
INFO - 2019-01-30 11:09:49 359854 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:09:49 361752 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:09:49 361848 --> Utf8 Class Initialized
INFO - 2019-01-30 11:09:49 362977 --> URI Class Initialized
INFO - 2019-01-30 11:09:49 365272 --> Router Class Initialized
INFO - 2019-01-30 11:09:49 367522 --> Output Class Initialized
INFO - 2019-01-30 11:09:49 369205 --> Security Class Initialized
DEBUG - 2019-01-30 11:09:49 370960 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:09:49 371057 --> Input Class Initialized
INFO - 2019-01-30 11:09:49 371560 --> Language Class Initialized
INFO - 2019-01-30 11:09:49 378706 --> Loader Class Initialized
INFO - 2019-01-30 11:09:49 380013 --> Helper loaded: url_helper
INFO - 2019-01-30 11:09:49 380703 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:39:49 389847 --> Database Driver Class Initialized
INFO - 2019-01-30 16:39:49 394443 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:39:49 395675 --> Controller Class Initialized
ERROR - 2019-01-30 16:39:49 396430 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:39:49 397078 --> Final output sent to browser
DEBUG - 2019-01-30 16:39:49 397166 --> Total execution time: 0.0390
INFO - 2019-01-30 11:11:06 837476 --> Config Class Initialized
INFO - 2019-01-30 11:11:06 837836 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:11:06 840528 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:11:06 840666 --> Utf8 Class Initialized
INFO - 2019-01-30 11:11:06 842850 --> URI Class Initialized
INFO - 2019-01-30 11:11:06 848155 --> Router Class Initialized
INFO - 2019-01-30 11:11:06 851428 --> Output Class Initialized
INFO - 2019-01-30 11:11:06 856848 --> Security Class Initialized
DEBUG - 2019-01-30 11:11:06 860136 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:11:06 860296 --> Input Class Initialized
INFO - 2019-01-30 11:11:06 861232 --> Language Class Initialized
ERROR - 2019-01-30 11:11:06 862767 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:24:32 766129 --> Config Class Initialized
INFO - 2019-01-30 11:24:32 766398 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:32 768580 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:32 768743 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:32 770227 --> URI Class Initialized
DEBUG - 2019-01-30 11:24:32 772631 --> No URI present. Default controller set.
INFO - 2019-01-30 11:24:32 772737 --> Router Class Initialized
INFO - 2019-01-30 11:24:32 774787 --> Output Class Initialized
INFO - 2019-01-30 11:24:32 776422 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:32 778006 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:32 778187 --> Input Class Initialized
INFO - 2019-01-30 11:24:32 778966 --> Language Class Initialized
INFO - 2019-01-30 11:24:32 783001 --> Loader Class Initialized
INFO - 2019-01-30 11:24:32 785008 --> Helper loaded: url_helper
INFO - 2019-01-30 11:24:32 786246 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:54:32 795208 --> Database Driver Class Initialized
INFO - 2019-01-30 16:54:32 803966 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:54:32 805704 --> Controller Class Initialized
INFO - 2019-01-30 16:54:32 806519 --> Parser Class Initialized
INFO - 2019-01-30 16:54:32 807760 --> Helper loaded: html_helper
INFO - 2019-01-30 16:54:32 809202 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 16:54:32 813303 --> Model Class Initialized
DEBUG - 2019-01-30 16:54:32 824805 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 16:54:32 830946 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 16:54:32 831640 --> Model Class Initialized
DEBUG - 2019-01-30 16:54:32 832488 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 16:54:32 835206 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 16:54:32 836791 --> Helper loaded: file_helper
DEBUG - 2019-01-30 16:54:32 836930 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 16:54:32 840439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 842179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 852047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 854269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 857723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 858169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 858936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 860023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 862951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 863372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 864104 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:54:32 865735 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:54:32 865902 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:54:32 866107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 868971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 869376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 870117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 871083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 874033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 874490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 875227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 876205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 879220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 879698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 880455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 881479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 884402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 884845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 885611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 886590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 889686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 890120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 890952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 891930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 895816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 896282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 897078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 898076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 901164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 901621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 902420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 903398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 907087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 907560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 908364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 909373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 912678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 913121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 913964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 914983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 918143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 918606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 919454 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 16:54:32 920361 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 16:54:32 920541 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 16:54:32 920743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 923947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 924385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 925236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 926225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 929371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 929832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 930685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 931654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 934789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 935225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 936074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 937035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 940850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 941565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 942981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 944232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 946400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 946712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 947266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 947937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 948776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 949348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 949943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 950550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 951302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 951975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 952636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 953344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 954051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 954694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 955456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 956075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 956716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 957367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 958024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 958652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 959245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 959801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 960334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 960877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 961416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 961965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 962596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 963187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 964179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 965521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 966542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 967884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 968692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 969233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 969840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 970376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 970989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 971560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 973814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 974103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 974704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 975300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 977363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 977798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 978802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 979422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 981435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 981733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 982306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 982991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 985059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 985369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 985959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 986741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 988817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 989115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 989736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 990458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 992510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 992804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 993386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 995419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 995712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 996263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 997014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 999077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 999371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:32 999941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 000667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 002701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 002990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 003562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 004297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 006356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 006669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 007224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 008122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 010162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 010468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 011023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 011765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 013809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 014105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 014678 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:54:33 015492 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 16:54:33 017553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 018906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 019202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 16:54:33 021295 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 16:54:33 021806 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 16:54:33 029926 --> Final output sent to browser
DEBUG - 2019-01-30 16:54:33 030026 --> Total execution time: 0.2587
INFO - 2019-01-30 11:24:33 980536 --> Config Class Initialized
INFO - 2019-01-30 11:24:33 980645 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:33 983048 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:33 983135 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:33 984019 --> URI Class Initialized
INFO - 2019-01-30 11:24:33 986845 --> Router Class Initialized
INFO - 2019-01-30 11:24:33 988382 --> Output Class Initialized
INFO - 2019-01-30 11:24:33 990444 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:33 992988 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:33 993103 --> Input Class Initialized
INFO - 2019-01-30 11:24:33 993675 --> Language Class Initialized
ERROR - 2019-01-30 11:24:33 994823 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:24:34 463027 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 463144 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 464891 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 464979 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 465799 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 467883 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 469609 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 470942 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 472165 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 472250 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 472625 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 473288 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:34 548512 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 548739 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 550299 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 550384 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 551542 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 554655 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 556874 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 558310 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 559798 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 559883 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 560276 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 560903 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:24:34 661853 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 661962 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 663708 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 663794 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 664649 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 666773 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 668616 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 670118 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 671458 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 671544 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 671919 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 672528 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:34 814336 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 814943 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 817389 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 817512 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 818900 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 823685 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 826231 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 828027 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 829879 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 829982 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 830532 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 831455 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:34 880635 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 880989 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 884452 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 884603 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 886708 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 894268 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 897635 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 899627 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 902638 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 902772 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 903384 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 904668 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:34 926815 --> Config Class Initialized
INFO - 2019-01-30 11:24:34 926924 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:34 928416 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:34 928512 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:34 929382 --> URI Class Initialized
INFO - 2019-01-30 11:24:34 931580 --> Router Class Initialized
INFO - 2019-01-30 11:24:34 933406 --> Output Class Initialized
INFO - 2019-01-30 11:24:34 934896 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:34 936161 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:34 936250 --> Input Class Initialized
INFO - 2019-01-30 11:24:34 936680 --> Language Class Initialized
ERROR - 2019-01-30 11:24:34 937302 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:35 043751 --> Config Class Initialized
INFO - 2019-01-30 11:24:35 043940 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:35 045205 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:35 045274 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:35 046149 --> URI Class Initialized
INFO - 2019-01-30 11:24:35 048926 --> Router Class Initialized
INFO - 2019-01-30 11:24:35 050452 --> Output Class Initialized
INFO - 2019-01-30 11:24:35 051525 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:35 052632 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:35 052700 --> Input Class Initialized
INFO - 2019-01-30 11:24:35 053031 --> Language Class Initialized
ERROR - 2019-01-30 11:24:35 053571 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:35 118400 --> Config Class Initialized
INFO - 2019-01-30 11:24:35 118515 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:35 119988 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:35 120075 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:35 121027 --> URI Class Initialized
INFO - 2019-01-30 11:24:35 123161 --> Router Class Initialized
INFO - 2019-01-30 11:24:35 125004 --> Output Class Initialized
INFO - 2019-01-30 11:24:35 126518 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:35 127789 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:35 127878 --> Input Class Initialized
INFO - 2019-01-30 11:24:35 128271 --> Language Class Initialized
ERROR - 2019-01-30 11:24:35 128915 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:24:35 956248 --> Config Class Initialized
INFO - 2019-01-30 11:24:35 956562 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:35 959274 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:35 959403 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:35 961190 --> URI Class Initialized
INFO - 2019-01-30 11:24:35 964621 --> Router Class Initialized
INFO - 2019-01-30 11:24:35 967078 --> Output Class Initialized
INFO - 2019-01-30 11:24:35 968517 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:35 970031 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:35 970185 --> Input Class Initialized
INFO - 2019-01-30 11:24:35 970993 --> Language Class Initialized
INFO - 2019-01-30 11:24:35 979618 --> Loader Class Initialized
INFO - 2019-01-30 11:24:35 980603 --> Helper loaded: url_helper
INFO - 2019-01-30 11:24:35 981108 --> Helper loaded: utility_helper
INFO - 2019-01-30 16:54:35 987205 --> Database Driver Class Initialized
INFO - 2019-01-30 16:54:35 992948 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 16:54:35 993901 --> Controller Class Initialized
ERROR - 2019-01-30 16:54:35 994457 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 16:54:35 995007 --> Final output sent to browser
DEBUG - 2019-01-30 16:54:35 995079 --> Total execution time: 0.0412
INFO - 2019-01-30 11:24:39 510804 --> Config Class Initialized
INFO - 2019-01-30 11:24:39 510938 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:24:39 513086 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:24:39 513200 --> Utf8 Class Initialized
INFO - 2019-01-30 11:24:39 514991 --> URI Class Initialized
INFO - 2019-01-30 11:24:39 518034 --> Router Class Initialized
INFO - 2019-01-30 11:24:39 519845 --> Output Class Initialized
INFO - 2019-01-30 11:24:39 521471 --> Security Class Initialized
DEBUG - 2019-01-30 11:24:39 522747 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:24:39 522835 --> Input Class Initialized
INFO - 2019-01-30 11:24:39 523231 --> Language Class Initialized
ERROR - 2019-01-30 11:24:39 523909 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 11:25:10 796046 --> Config Class Initialized
INFO - 2019-01-30 11:25:10 796402 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:25:10 799041 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:25:10 799175 --> Utf8 Class Initialized
INFO - 2019-01-30 11:25:10 801848 --> URI Class Initialized
INFO - 2019-01-30 11:25:10 807714 --> Router Class Initialized
INFO - 2019-01-30 11:25:10 810451 --> Output Class Initialized
INFO - 2019-01-30 11:25:10 812725 --> Security Class Initialized
DEBUG - 2019-01-30 11:25:10 817019 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:25:10 817198 --> Input Class Initialized
INFO - 2019-01-30 11:25:10 817981 --> Language Class Initialized
ERROR - 2019-01-30 11:25:10 819057 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:31:11 808420 --> Config Class Initialized
INFO - 2019-01-30 11:31:11 808897 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:31:11 811969 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:31:11 812109 --> Utf8 Class Initialized
INFO - 2019-01-30 11:31:11 814047 --> URI Class Initialized
INFO - 2019-01-30 11:31:11 819328 --> Router Class Initialized
INFO - 2019-01-30 11:31:11 822803 --> Output Class Initialized
INFO - 2019-01-30 11:31:11 825423 --> Security Class Initialized
DEBUG - 2019-01-30 11:31:11 827569 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:31:11 827702 --> Input Class Initialized
INFO - 2019-01-30 11:31:11 828428 --> Language Class Initialized
ERROR - 2019-01-30 11:31:11 829705 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:31:25 397392 --> Config Class Initialized
INFO - 2019-01-30 11:31:25 397744 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:31:25 400161 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:31:25 400294 --> Utf8 Class Initialized
INFO - 2019-01-30 11:31:25 413327 --> Config Class Initialized
INFO - 2019-01-30 11:31:25 413707 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:31:25 416131 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:31:25 416263 --> Utf8 Class Initialized
INFO - 2019-01-30 11:31:25 417917 --> URI Class Initialized
INFO - 2019-01-30 11:31:25 422313 --> URI Class Initialized
INFO - 2019-01-30 11:31:25 440927 --> Router Class Initialized
INFO - 2019-01-30 11:31:25 443484 --> Router Class Initialized
INFO - 2019-01-30 11:31:25 446190 --> Output Class Initialized
INFO - 2019-01-30 11:31:25 448204 --> Security Class Initialized
DEBUG - 2019-01-30 11:31:25 450236 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:31:25 450366 --> Input Class Initialized
INFO - 2019-01-30 11:31:25 451030 --> Language Class Initialized
INFO - 2019-01-30 11:31:25 453710 --> Output Class Initialized
INFO - 2019-01-30 11:31:25 455727 --> Security Class Initialized
DEBUG - 2019-01-30 11:31:25 457828 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:31:25 457959 --> Input Class Initialized
INFO - 2019-01-30 11:31:25 458606 --> Language Class Initialized
ERROR - 2019-01-30 11:31:25 459597 --> 404 Page Not Found: Assets/js
ERROR - 2019-01-30 11:31:25 462512 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:32:10 312519 --> Config Class Initialized
INFO - 2019-01-30 11:32:10 312715 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:32:10 313982 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:32:10 314069 --> Utf8 Class Initialized
INFO - 2019-01-30 11:32:10 315704 --> URI Class Initialized
INFO - 2019-01-30 11:32:10 319708 --> Router Class Initialized
INFO - 2019-01-30 11:32:10 321137 --> Output Class Initialized
INFO - 2019-01-30 11:32:10 322164 --> Security Class Initialized
DEBUG - 2019-01-30 11:32:10 323235 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:32:10 323303 --> Input Class Initialized
INFO - 2019-01-30 11:32:10 323645 --> Language Class Initialized
ERROR - 2019-01-30 11:32:10 324158 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:33:10 897510 --> Config Class Initialized
INFO - 2019-01-30 11:33:10 897835 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:10 900088 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:10 900213 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:10 901654 --> URI Class Initialized
DEBUG - 2019-01-30 11:33:10 904050 --> No URI present. Default controller set.
INFO - 2019-01-30 11:33:10 904175 --> Router Class Initialized
INFO - 2019-01-30 11:33:10 906769 --> Output Class Initialized
INFO - 2019-01-30 11:33:10 909709 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:10 913008 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:10 913192 --> Input Class Initialized
INFO - 2019-01-30 11:33:10 914109 --> Language Class Initialized
INFO - 2019-01-30 11:33:10 919660 --> Loader Class Initialized
INFO - 2019-01-30 11:33:10 922055 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:10 923366 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:10 938345 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:10 947630 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:10 949174 --> Controller Class Initialized
INFO - 2019-01-30 17:03:10 949953 --> Parser Class Initialized
INFO - 2019-01-30 17:03:10 951102 --> Helper loaded: html_helper
INFO - 2019-01-30 17:03:10 952389 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:03:10 955849 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:11 022614 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:03:11 029493 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:03:11 030323 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:11 103136 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:03:11 106962 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:03:11 109127 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:03:11 109311 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:03:11 115433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 120136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 135523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 138559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 141963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 142469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 143291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 144521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 147789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 148235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 148986 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:11 150877 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:11 151051 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:11 151272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 154278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 154737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 155479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 156620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 159637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 160103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 160876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 162055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 165049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 165513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 166268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 167361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 170377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 170830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 171614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 172744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 175864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 176301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 177089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 178200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 181337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 181797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 182617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 183610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 186736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 187167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 187978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 188991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 192148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 192615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 193434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 194495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 197866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 198317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 199160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 200223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 203452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 203896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 204751 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:11 206077 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:11 206263 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:11 206507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 211036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 211518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 212361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 213407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 216613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 217056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 217940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 218956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 222176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 222655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 223515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 224524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 227706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 228147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 229015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 230056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 233351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 233819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 234695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 235680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 236649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 237720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 238634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 239537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 240485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 241478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 242456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 243377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 244307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 245279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 246212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 247162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 248087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 249068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 250026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 251171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 252110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 252959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 253804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 254646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 255577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 257222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 258289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 259229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 260246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 261109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 262125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 262985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 263923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 264790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 265770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 266628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 267632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 268615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 272279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 272763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 273680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 274692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 277987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 278466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 279366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 280488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 283696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 284146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 285057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 286154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 289457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 289935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 290868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 291915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 295157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 295631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 296582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 297832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 305094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 305620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 306943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 310498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 310971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 311866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 313114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 316565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 317040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 317936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 319226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 322757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 323226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 324111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 325361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 328886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 329355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 330229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 331337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 334572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 335024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 335896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 336925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 340164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 340646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 341515 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:11 342597 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:03:11 345954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 348294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 348767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 352730 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:11 353543 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:03:11 383666 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:11 383961 --> Total execution time: 0.4595
INFO - 2019-01-30 11:33:11 928541 --> Config Class Initialized
INFO - 2019-01-30 11:33:11 928800 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:11 930704 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:11 930804 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:11 932235 --> URI Class Initialized
DEBUG - 2019-01-30 11:33:11 934139 --> No URI present. Default controller set.
INFO - 2019-01-30 11:33:11 934210 --> Router Class Initialized
INFO - 2019-01-30 11:33:11 936820 --> Output Class Initialized
INFO - 2019-01-30 11:33:11 938074 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:11 939861 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:11 939955 --> Input Class Initialized
INFO - 2019-01-30 11:33:11 940484 --> Language Class Initialized
INFO - 2019-01-30 11:33:11 943922 --> Loader Class Initialized
INFO - 2019-01-30 11:33:11 945343 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:11 946093 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:11 954320 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:11 960663 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:11 961703 --> Controller Class Initialized
INFO - 2019-01-30 17:03:11 962233 --> Parser Class Initialized
INFO - 2019-01-30 17:03:11 963012 --> Helper loaded: html_helper
INFO - 2019-01-30 17:03:11 963937 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:03:11 966378 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:11 976886 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:03:11 980823 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:03:11 981317 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:11 981925 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:03:11 984585 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:03:11 986171 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:03:11 986305 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:03:11 988080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 988445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 991266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 992079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 994945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 995352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 996068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:11 997183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 000147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 000602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 001315 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:12 003192 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:12 003365 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:12 003599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 006736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 007164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 007925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 008819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 011915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 012353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 013106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 014087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 017122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 017590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 018336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 019344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 022433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 022875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 023658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 024585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 027705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 028135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 028928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 029839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 032977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 033420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 034210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 035134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 038258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 038708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 039531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 040515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 043715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 044153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 045010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 045934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 049132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 049602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 050436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 051340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 054543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 054979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 055826 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:12 056766 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:12 056925 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:12 057130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 060276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 060739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 061594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 062565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 065735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 066173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 067028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 068048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 071206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 071672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 072527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 073405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 076582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 077025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 077889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 078783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 081916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 082356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 083209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 084135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 085020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 085870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 086709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 087585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 088449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 089148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 090166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 090928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 091732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 092576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 093283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 094068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 094887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 095745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 096585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 097718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 098664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 099507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 100320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 101155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 101994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 102849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 103880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 104846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 105858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 106697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 107600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 108421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 109464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 110300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 111238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 112088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 114566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 115600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 124762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 125461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 126434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 127557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 132549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 133054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 134145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 135394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 139122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 139624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 140553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 141635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 145080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 145570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 146492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 147559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 152661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 153148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 154082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 155122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 158646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 159117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 160136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 163358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 163876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 164813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 176068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 180392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 180942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 182979 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:33:12 192536 --> Config Class Initialized
INFO - 2019-01-30 11:33:12 192874 --> Hooks Class Initialized
DEBUG - 2019-01-30 17:03:12 194823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 198887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 199371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 200273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 11:33:12 201739 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:12 201873 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:12 203708 --> URI Class Initialized
DEBUG - 2019-01-30 11:33:12 206341 --> No URI present. Default controller set.
INFO - 2019-01-30 11:33:12 206492 --> Router Class Initialized
INFO - 2019-01-30 11:33:12 209281 --> Output Class Initialized
INFO - 2019-01-30 11:33:12 211340 --> Security Class Initialized
DEBUG - 2019-01-30 17:03:12 211811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 216097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 216636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 218063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 11:33:12 222289 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:12 222444 --> Input Class Initialized
INFO - 2019-01-30 11:33:12 223113 --> Language Class Initialized
DEBUG - 2019-01-30 17:03:12 226789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 231832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 232364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 233275 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:33:12 235677 --> Loader Class Initialized
INFO - 2019-01-30 11:33:12 237421 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:12 238323 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 17:03:12 241795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 245951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 246454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 247334 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:12 248518 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:03:12 251674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 253829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 254292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 257838 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:12 265929 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:12 266735 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:03:12 279109 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:12 279290 --> Total execution time: 0.3411
INFO - 2019-01-30 17:03:12 298666 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:12 300215 --> Controller Class Initialized
INFO - 2019-01-30 17:03:12 301001 --> Parser Class Initialized
INFO - 2019-01-30 17:03:12 302146 --> Helper loaded: html_helper
INFO - 2019-01-30 17:03:12 303631 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:03:12 307730 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:12 415679 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:03:12 422750 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:03:12 423499 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:12 424253 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:03:12 427386 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:03:12 429289 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:03:12 429462 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:03:12 431418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 431799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 434792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 435545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 438080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 438443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 439124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 503262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 506477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 506843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 507492 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:12 509030 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:12 509180 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:12 509366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 512000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 512368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 513034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 513926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 516596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 516977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 517643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 518506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 521114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 521517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 522164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 522986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 525648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 526021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 526700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 527525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 530232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 530639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 531311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 532149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 534889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 535497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 536777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 537674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 540368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 540752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 541456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 542287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 545022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 545397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 546123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 546960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 549721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 550105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 550837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 551666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 554406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 554809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 555540 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:03:12 556319 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:03:12 556493 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:03:12 556677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 559431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 559825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 560559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 561433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 564218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 564621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 565346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 566221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 568978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 569372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 570116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 570969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 573750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 574135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 574879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 575736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 578497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 578886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 579631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 580478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 581268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 582048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 582837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 583605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 584352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 585118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 585874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 586628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 587369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 588160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 588927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 589687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 590434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 591197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 591959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 592989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 593816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 594546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 595248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 595977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 596709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 597448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 598273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 599108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 599901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 600636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 601425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 602150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 602940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 603682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 604480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 605197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 606031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 606841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 609987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 610388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 611181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 612112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 615030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 615442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 616230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 617147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 619906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 620290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 621079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 621937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 624739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 625135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 626038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 626900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 629621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 630009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 630795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 631618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 634435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 634834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 635622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 638313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 638720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 639461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 640327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 643114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 643529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 644260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 645116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 647841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 648247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 649000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 649884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 652712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 653115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 653876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 654772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 657490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 657881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 658637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 659468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 662231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 662655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 663388 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:12 664242 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:03:12 666917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 668632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 669017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:03:12 671761 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:03:12 672395 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:03:12 681267 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:12 681394 --> Total execution time: 0.4830
INFO - 2019-01-30 11:33:13 881288 --> Config Class Initialized
INFO - 2019-01-30 11:33:13 881517 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:13 883457 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:13 883575 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:13 884866 --> URI Class Initialized
INFO - 2019-01-30 11:33:13 887871 --> Router Class Initialized
INFO - 2019-01-30 11:33:13 892230 --> Output Class Initialized
INFO - 2019-01-30 11:33:13 894072 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:13 895955 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:13 896064 --> Input Class Initialized
INFO - 2019-01-30 11:33:13 896557 --> Language Class Initialized
INFO - 2019-01-30 11:33:13 903318 --> Loader Class Initialized
INFO - 2019-01-30 11:33:13 904557 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:13 905174 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:13 914531 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:13 919531 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:13 920603 --> Controller Class Initialized
ERROR - 2019-01-30 17:03:13 921278 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:03:13 921850 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:13 921952 --> Total execution time: 0.0422
INFO - 2019-01-30 11:33:14 671372 --> Config Class Initialized
INFO - 2019-01-30 11:33:14 671598 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:14 674648 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:14 674830 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:14 677092 --> URI Class Initialized
INFO - 2019-01-30 11:33:14 689110 --> Router Class Initialized
INFO - 2019-01-30 11:33:14 692924 --> Output Class Initialized
INFO - 2019-01-30 11:33:14 695760 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:14 699435 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:14 699794 --> Input Class Initialized
INFO - 2019-01-30 11:33:14 700870 --> Language Class Initialized
ERROR - 2019-01-30 11:33:14 702047 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:14 891690 --> Config Class Initialized
INFO - 2019-01-30 11:33:14 891839 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:14 894256 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:14 894412 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:14 896317 --> URI Class Initialized
INFO - 2019-01-30 11:33:14 903151 --> Router Class Initialized
INFO - 2019-01-30 11:33:14 907025 --> Output Class Initialized
INFO - 2019-01-30 11:33:14 910181 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:14 913858 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:14 914083 --> Input Class Initialized
INFO - 2019-01-30 11:33:14 915088 --> Language Class Initialized
ERROR - 2019-01-30 11:33:14 916940 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:15 133712 --> Config Class Initialized
INFO - 2019-01-30 11:33:15 134119 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:15 137931 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:15 138099 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:15 140511 --> URI Class Initialized
INFO - 2019-01-30 11:33:15 146800 --> Router Class Initialized
INFO - 2019-01-30 11:33:15 149775 --> Output Class Initialized
INFO - 2019-01-30 11:33:15 151825 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:15 153892 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:15 154016 --> Input Class Initialized
INFO - 2019-01-30 11:33:15 154953 --> Language Class Initialized
ERROR - 2019-01-30 11:33:15 156347 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:15 264003 --> Config Class Initialized
INFO - 2019-01-30 11:33:15 264275 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:15 266674 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:15 266798 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:15 268111 --> URI Class Initialized
INFO - 2019-01-30 11:33:15 271152 --> Router Class Initialized
INFO - 2019-01-30 11:33:15 273551 --> Output Class Initialized
INFO - 2019-01-30 11:33:15 275592 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:15 277991 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:15 278115 --> Input Class Initialized
INFO - 2019-01-30 11:33:15 278698 --> Language Class Initialized
ERROR - 2019-01-30 11:33:15 279983 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:15 363277 --> Config Class Initialized
INFO - 2019-01-30 11:33:15 363514 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:15 366657 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:15 366800 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:15 382774 --> Config Class Initialized
INFO - 2019-01-30 11:33:15 382924 --> Hooks Class Initialized
INFO - 2019-01-30 11:33:15 385544 --> URI Class Initialized
INFO - 2019-01-30 11:33:15 390232 --> Router Class Initialized
INFO - 2019-01-30 11:33:15 393913 --> Output Class Initialized
INFO - 2019-01-30 11:33:15 396572 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:15 399317 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:15 399481 --> Input Class Initialized
INFO - 2019-01-30 11:33:15 400199 --> Language Class Initialized
ERROR - 2019-01-30 11:33:15 401271 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 11:33:15 405102 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:15 405246 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:15 407480 --> URI Class Initialized
INFO - 2019-01-30 11:33:15 412906 --> Router Class Initialized
INFO - 2019-01-30 11:33:15 419424 --> Output Class Initialized
INFO - 2019-01-30 11:33:15 422499 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:15 425537 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:15 425692 --> Input Class Initialized
INFO - 2019-01-30 11:33:15 426470 --> Language Class Initialized
ERROR - 2019-01-30 11:33:15 427751 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:15 526124 --> Config Class Initialized
INFO - 2019-01-30 11:33:15 526253 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:15 527971 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:15 528067 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:15 529093 --> URI Class Initialized
INFO - 2019-01-30 11:33:15 531999 --> Router Class Initialized
INFO - 2019-01-30 11:33:15 533893 --> Output Class Initialized
INFO - 2019-01-30 11:33:15 535221 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:15 536578 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:15 536672 --> Input Class Initialized
INFO - 2019-01-30 11:33:15 537075 --> Language Class Initialized
ERROR - 2019-01-30 11:33:15 537815 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:33:19 772061 --> Config Class Initialized
INFO - 2019-01-30 11:33:19 772182 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:19 774283 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:19 774429 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:19 775986 --> URI Class Initialized
INFO - 2019-01-30 11:33:19 780092 --> Router Class Initialized
INFO - 2019-01-30 11:33:19 783737 --> Output Class Initialized
INFO - 2019-01-30 11:33:19 786082 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:19 788595 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:19 788736 --> Input Class Initialized
INFO - 2019-01-30 11:33:19 789416 --> Language Class Initialized
ERROR - 2019-01-30 11:33:19 790735 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 11:33:35 700084 --> Config Class Initialized
INFO - 2019-01-30 11:33:35 700450 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:35 702903 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:35 703035 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:35 704699 --> URI Class Initialized
INFO - 2019-01-30 11:33:35 709270 --> Router Class Initialized
INFO - 2019-01-30 11:33:35 711939 --> Output Class Initialized
INFO - 2019-01-30 11:33:35 713973 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:35 716022 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:35 716156 --> Input Class Initialized
INFO - 2019-01-30 11:33:35 716830 --> Language Class Initialized
INFO - 2019-01-30 11:33:35 720638 --> Loader Class Initialized
INFO - 2019-01-30 11:33:35 722285 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:35 723161 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:35 733704 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:35 742589 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:35 744091 --> Controller Class Initialized
INFO - 2019-01-30 17:03:35 760184 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:35 764272 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 17:03:35 764543 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:35 764661 --> Total execution time: 0.0666
INFO - 2019-01-30 11:33:35 864798 --> Config Class Initialized
INFO - 2019-01-30 11:33:35 864900 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:35 866158 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:35 866231 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:35 867002 --> URI Class Initialized
INFO - 2019-01-30 11:33:35 868647 --> Router Class Initialized
INFO - 2019-01-30 11:33:35 869899 --> Output Class Initialized
INFO - 2019-01-30 11:33:35 870886 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:35 871891 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:35 871961 --> Input Class Initialized
INFO - 2019-01-30 11:33:35 872267 --> Language Class Initialized
INFO - 2019-01-30 11:33:35 874047 --> Loader Class Initialized
INFO - 2019-01-30 11:33:35 874794 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:35 875193 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:35 880001 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:35 883239 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:35 884020 --> Controller Class Initialized
INFO - 2019-01-30 17:03:35 887550 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:35 889081 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 17:03:35 889203 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:35 889264 --> Total execution time: 0.0255
INFO - 2019-01-30 11:33:47 328293 --> Config Class Initialized
INFO - 2019-01-30 11:33:47 328531 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:47 330060 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:47 330168 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:47 331216 --> URI Class Initialized
INFO - 2019-01-30 11:33:47 334201 --> Router Class Initialized
INFO - 2019-01-30 11:33:47 336543 --> Output Class Initialized
INFO - 2019-01-30 11:33:47 337873 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:47 339212 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:47 339299 --> Input Class Initialized
INFO - 2019-01-30 11:33:47 339735 --> Language Class Initialized
INFO - 2019-01-30 11:33:47 342170 --> Loader Class Initialized
INFO - 2019-01-30 11:33:47 343254 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:47 343833 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:47 351190 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:47 357193 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:47 358720 --> Controller Class Initialized
INFO - 2019-01-30 17:03:47 366168 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:47 368829 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 17:03:47 369019 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:47 369112 --> Total execution time: 0.0422
INFO - 2019-01-30 11:33:47 463124 --> Config Class Initialized
INFO - 2019-01-30 11:33:47 463237 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:33:47 464996 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:33:47 465128 --> Utf8 Class Initialized
INFO - 2019-01-30 11:33:47 466187 --> URI Class Initialized
INFO - 2019-01-30 11:33:47 468099 --> Router Class Initialized
INFO - 2019-01-30 11:33:47 469854 --> Output Class Initialized
INFO - 2019-01-30 11:33:47 472588 --> Security Class Initialized
DEBUG - 2019-01-30 11:33:47 473570 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:33:47 473643 --> Input Class Initialized
INFO - 2019-01-30 11:33:47 473947 --> Language Class Initialized
INFO - 2019-01-30 11:33:47 476234 --> Loader Class Initialized
INFO - 2019-01-30 11:33:47 477257 --> Helper loaded: url_helper
INFO - 2019-01-30 11:33:47 478082 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:03:47 491647 --> Database Driver Class Initialized
INFO - 2019-01-30 17:03:47 497370 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:03:47 498956 --> Controller Class Initialized
INFO - 2019-01-30 17:03:47 506567 --> Model Class Initialized
DEBUG - 2019-01-30 17:03:47 509747 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 17:03:47 509958 --> Final output sent to browser
DEBUG - 2019-01-30 17:03:47 510113 --> Total execution time: 0.0487
INFO - 2019-01-30 11:34:50 459597 --> Config Class Initialized
INFO - 2019-01-30 11:34:50 459933 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:34:50 462320 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:34:50 462466 --> Utf8 Class Initialized
INFO - 2019-01-30 11:34:50 464098 --> URI Class Initialized
INFO - 2019-01-30 11:34:50 468699 --> Router Class Initialized
INFO - 2019-01-30 11:34:50 471290 --> Output Class Initialized
INFO - 2019-01-30 11:34:50 472714 --> Config Class Initialized
INFO - 2019-01-30 11:34:50 473021 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:34:50 475385 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:34:50 475532 --> Utf8 Class Initialized
INFO - 2019-01-30 11:34:50 477124 --> URI Class Initialized
INFO - 2019-01-30 11:34:50 483436 --> Security Class Initialized
DEBUG - 2019-01-30 11:34:50 485526 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:34:50 485652 --> Input Class Initialized
INFO - 2019-01-30 11:34:50 486273 --> Language Class Initialized
ERROR - 2019-01-30 11:34:50 487261 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:34:50 490248 --> Router Class Initialized
INFO - 2019-01-30 11:34:50 492897 --> Output Class Initialized
INFO - 2019-01-30 11:34:50 494873 --> Security Class Initialized
DEBUG - 2019-01-30 11:34:50 497117 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:34:50 497246 --> Input Class Initialized
INFO - 2019-01-30 11:34:50 497884 --> Language Class Initialized
ERROR - 2019-01-30 11:34:50 498859 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:40:39 008725 --> Config Class Initialized
INFO - 2019-01-30 11:40:39 008955 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:39 010282 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:39 010355 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:39 011272 --> URI Class Initialized
DEBUG - 2019-01-30 11:40:39 012924 --> No URI present. Default controller set.
INFO - 2019-01-30 11:40:39 013031 --> Router Class Initialized
INFO - 2019-01-30 11:40:39 014765 --> Output Class Initialized
INFO - 2019-01-30 11:40:39 015871 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:39 017154 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:39 017229 --> Input Class Initialized
INFO - 2019-01-30 11:40:39 017589 --> Language Class Initialized
INFO - 2019-01-30 11:40:39 019846 --> Loader Class Initialized
INFO - 2019-01-30 11:40:39 020853 --> Helper loaded: url_helper
INFO - 2019-01-30 11:40:39 021347 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:10:39 027267 --> Database Driver Class Initialized
INFO - 2019-01-30 17:10:39 033519 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:10:39 034378 --> Controller Class Initialized
INFO - 2019-01-30 17:10:39 034799 --> Parser Class Initialized
INFO - 2019-01-30 17:10:39 035388 --> Helper loaded: html_helper
INFO - 2019-01-30 17:10:39 036061 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:10:39 037838 --> Model Class Initialized
DEBUG - 2019-01-30 17:10:39 050133 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:10:39 055430 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:10:39 055860 --> Model Class Initialized
DEBUG - 2019-01-30 17:10:39 056468 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:10:39 058412 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:10:39 059609 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:10:39 059709 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:10:39 062319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 063524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 070497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 072233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 075508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 075871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 077027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 077945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 080542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 080914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 081742 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:10:39 083259 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:10:39 083431 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:10:39 083638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 086702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 087004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 087850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 088609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 090383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 090639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 091044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 091753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 093548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 093846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 094254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 094918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 099370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 099647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 100095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 100857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 102627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 102868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 103409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 104346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 106698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 107059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 107841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 108577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 111562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 112049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 113004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 114087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 118189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 118717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 119478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 120965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 125091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 125593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 126449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 127455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 130703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 131151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 131999 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:10:39 133080 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:10:39 133236 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:10:39 133464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 136795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 137270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 138137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 139142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 142364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 142823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 143718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 144670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 147886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 148325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 149178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 150078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 153359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 153836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 154716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 155596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 158849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 159296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 160188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 161170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 161936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 162666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 163352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 164052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 164743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 165410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 166301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 167022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 167731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 168414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 169122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 169826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 170572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 171271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 172132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 173369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 174324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 175170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 176004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 176870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 177706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 178591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 179457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 180366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 181243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 182084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 182914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 183759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 184596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 185410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 186252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 187117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 188391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 189295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 193217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 193703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 194621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 195561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 198841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 199300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 200208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 201097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 204363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 204830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 205777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 206618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 209918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 210381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 211289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 212130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 215409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 215878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 217734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 220904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 244303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 244888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 245871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 249069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 249532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 250380 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:40:39 257180 --> Config Class Initialized
INFO - 2019-01-30 11:40:39 257531 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:39 260011 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:39 260143 --> Utf8 Class Initialized
DEBUG - 2019-01-30 17:10:39 261847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 266038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 266544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 267409 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:40:39 268070 --> URI Class Initialized
DEBUG - 2019-01-30 11:40:39 276016 --> No URI present. Default controller set.
INFO - 2019-01-30 11:40:39 276279 --> Router Class Initialized
DEBUG - 2019-01-30 17:10:39 278039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 294123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 295690 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:40:39 302058 --> Output Class Initialized
INFO - 2019-01-30 11:40:39 304189 --> Security Class Initialized
DEBUG - 2019-01-30 17:10:39 309602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 11:40:39 311243 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:39 311502 --> Input Class Initialized
INFO - 2019-01-30 11:40:39 313205 --> Language Class Initialized
DEBUG - 2019-01-30 17:10:39 321127 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 11:40:39 332340 --> Loader Class Initialized
INFO - 2019-01-30 11:40:39 334116 --> Helper loaded: url_helper
INFO - 2019-01-30 11:40:39 336374 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 17:10:39 346071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 347760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 362202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 363940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 368287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 368849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 369766 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:10:39 376822 --> Database Driver Class Initialized
DEBUG - 2019-01-30 17:10:39 377613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 381812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 382342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 383265 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:10:39 387106 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:10:39 390660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 392960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 393451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 397202 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:10:39 405246 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:10:39 426814 --> Final output sent to browser
DEBUG - 2019-01-30 17:10:39 427109 --> Total execution time: 0.4011
INFO - 2019-01-30 17:10:39 427951 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:10:39 432234 --> Controller Class Initialized
INFO - 2019-01-30 17:10:39 434149 --> Parser Class Initialized
INFO - 2019-01-30 17:10:39 444226 --> Helper loaded: html_helper
INFO - 2019-01-30 17:10:39 448309 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:10:39 477273 --> Model Class Initialized
DEBUG - 2019-01-30 17:10:39 493139 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:10:39 501976 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:10:39 502821 --> Model Class Initialized
DEBUG - 2019-01-30 17:10:39 503665 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:10:39 507180 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:10:39 509305 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:10:39 509504 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:10:39 511815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 512239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 515960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 516793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 519618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 520020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 520742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 521744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 524636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 525046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 525777 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:10:39 527278 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:10:39 527455 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:10:39 527683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 530668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 531091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 531845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 532718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 535748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 536180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 536941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 537942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 540957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 541399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 542161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 542980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 546021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 546463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 547297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 548290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 551367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 551820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 552609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 553594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 556942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 557387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 558191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 559343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 562632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 563067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 563896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 565201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 568427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 568873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 569719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 570744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 574131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 574611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 575473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 576503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 579720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 580159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 582897 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:10:39 584502 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:10:39 584847 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:10:39 585223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 588584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 589037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 589896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 590961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 595031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 595527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 596384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 597381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 600538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 600979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 601841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 602818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 606013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 606478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 607321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 608308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 611434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 611890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 612759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 613692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 614558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 615508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 616337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 617170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 617996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 618832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 619645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 620436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 621223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 622026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 622819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 623724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 624517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 625288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 626096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 627159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 628087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 628930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 629765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 630599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 631405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 632253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 633136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 634080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 634938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 635795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 636665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 637502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 638348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 639187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 640032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 640891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 641791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 642687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 646132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 646617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 647525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 648410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 651645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 652096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 653000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 653912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 657047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 657505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 658387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 659339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 662542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 662995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 663898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 664839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 668034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 668605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 669559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 670501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 673758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 674206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 675127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 678252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 678728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 679594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 680651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 683896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 684355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 685398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 686475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 689627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 690078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 691057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 692090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 695323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 695802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 696682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 697685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 700930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 701394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 702265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 704948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 711447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 712363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 713984 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:10:39 715621 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:10:39 718974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 721173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 721707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:10:39 725275 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:10:39 726108 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:10:39 735526 --> Final output sent to browser
DEBUG - 2019-01-30 17:10:39 735706 --> Total execution time: 0.4723
INFO - 2019-01-30 11:40:40 639611 --> Config Class Initialized
INFO - 2019-01-30 11:40:40 639800 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:40 641351 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:40 641448 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:40 642323 --> URI Class Initialized
INFO - 2019-01-30 11:40:40 643857 --> Router Class Initialized
INFO - 2019-01-30 11:40:40 645226 --> Output Class Initialized
INFO - 2019-01-30 11:40:40 646260 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:40 647331 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:40 647403 --> Input Class Initialized
INFO - 2019-01-30 11:40:40 647732 --> Language Class Initialized
INFO - 2019-01-30 11:40:40 651843 --> Loader Class Initialized
INFO - 2019-01-30 11:40:40 652688 --> Helper loaded: url_helper
INFO - 2019-01-30 11:40:40 653134 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:10:40 658570 --> Database Driver Class Initialized
INFO - 2019-01-30 17:10:40 663450 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:10:40 664206 --> Controller Class Initialized
ERROR - 2019-01-30 17:10:40 664725 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:10:40 665247 --> Final output sent to browser
DEBUG - 2019-01-30 17:10:40 665312 --> Total execution time: 0.0268
INFO - 2019-01-30 11:40:41 611757 --> Config Class Initialized
INFO - 2019-01-30 11:40:41 611903 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:41 613890 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:41 614248 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:41 615372 --> URI Class Initialized
INFO - 2019-01-30 11:40:41 620023 --> Router Class Initialized
INFO - 2019-01-30 11:40:41 622373 --> Output Class Initialized
INFO - 2019-01-30 11:40:41 624203 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:41 626298 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:41 626399 --> Input Class Initialized
INFO - 2019-01-30 11:40:41 626847 --> Language Class Initialized
ERROR - 2019-01-30 11:40:41 627590 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:41 692852 --> Config Class Initialized
INFO - 2019-01-30 11:40:41 693248 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:41 697058 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:41 697204 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:41 698622 --> URI Class Initialized
INFO - 2019-01-30 11:40:41 702317 --> Router Class Initialized
INFO - 2019-01-30 11:40:41 704062 --> Output Class Initialized
INFO - 2019-01-30 11:40:41 705269 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:41 706532 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:41 706602 --> Input Class Initialized
INFO - 2019-01-30 11:40:41 706933 --> Language Class Initialized
ERROR - 2019-01-30 11:40:41 707541 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:41 986341 --> Config Class Initialized
INFO - 2019-01-30 11:40:41 986473 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:41 987984 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:41 988073 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:41 989017 --> URI Class Initialized
INFO - 2019-01-30 11:40:41 991269 --> Router Class Initialized
INFO - 2019-01-30 11:40:41 993062 --> Output Class Initialized
INFO - 2019-01-30 11:40:41 994539 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:41 995882 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:41 995971 --> Input Class Initialized
INFO - 2019-01-30 11:40:41 996385 --> Language Class Initialized
ERROR - 2019-01-30 11:40:41 997052 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:42 027338 --> Config Class Initialized
INFO - 2019-01-30 11:40:42 027631 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:42 029875 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:42 029983 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:42 031423 --> URI Class Initialized
INFO - 2019-01-30 11:40:42 036428 --> Router Class Initialized
INFO - 2019-01-30 11:40:42 038547 --> Output Class Initialized
INFO - 2019-01-30 11:40:42 040003 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:42 041084 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:42 041157 --> Input Class Initialized
INFO - 2019-01-30 11:40:42 041680 --> Language Class Initialized
ERROR - 2019-01-30 11:40:42 042416 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:42 099437 --> Config Class Initialized
INFO - 2019-01-30 11:40:42 099787 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:42 102319 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:42 102453 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:42 104125 --> URI Class Initialized
INFO - 2019-01-30 11:40:42 108727 --> Router Class Initialized
INFO - 2019-01-30 11:40:42 111349 --> Output Class Initialized
INFO - 2019-01-30 11:40:42 119934 --> Config Class Initialized
INFO - 2019-01-30 11:40:42 120076 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:42 122304 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:42 122441 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:42 123810 --> URI Class Initialized
INFO - 2019-01-30 11:40:42 127074 --> Router Class Initialized
INFO - 2019-01-30 11:40:42 129707 --> Output Class Initialized
INFO - 2019-01-30 11:40:42 131664 --> Security Class Initialized
INFO - 2019-01-30 11:40:42 133362 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:42 135447 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:42 135591 --> Input Class Initialized
INFO - 2019-01-30 11:40:42 136215 --> Language Class Initialized
ERROR - 2019-01-30 11:40:42 137208 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 11:40:42 140891 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:42 141025 --> Input Class Initialized
INFO - 2019-01-30 11:40:42 141644 --> Language Class Initialized
ERROR - 2019-01-30 11:40:42 142610 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:42 152159 --> Config Class Initialized
INFO - 2019-01-30 11:40:42 152301 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:42 154591 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:42 154720 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:42 156061 --> URI Class Initialized
INFO - 2019-01-30 11:40:42 159334 --> Router Class Initialized
INFO - 2019-01-30 11:40:42 161873 --> Output Class Initialized
INFO - 2019-01-30 11:40:42 163815 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:42 165743 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:42 165873 --> Input Class Initialized
INFO - 2019-01-30 11:40:42 166482 --> Language Class Initialized
ERROR - 2019-01-30 11:40:42 167408 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:40:46 768279 --> Config Class Initialized
INFO - 2019-01-30 11:40:46 768452 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:40:46 770720 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:40:46 770849 --> Utf8 Class Initialized
INFO - 2019-01-30 11:40:46 772200 --> URI Class Initialized
INFO - 2019-01-30 11:40:46 775537 --> Router Class Initialized
INFO - 2019-01-30 11:40:46 778063 --> Output Class Initialized
INFO - 2019-01-30 11:40:46 783674 --> Security Class Initialized
DEBUG - 2019-01-30 11:40:46 790239 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:40:46 790498 --> Input Class Initialized
INFO - 2019-01-30 11:40:46 792046 --> Language Class Initialized
ERROR - 2019-01-30 11:40:46 794528 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 11:41:18 700978 --> Config Class Initialized
INFO - 2019-01-30 11:41:18 701358 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:41:18 704384 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:41:18 704547 --> Utf8 Class Initialized
INFO - 2019-01-30 11:41:18 721111 --> Config Class Initialized
INFO - 2019-01-30 11:41:18 721514 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:41:18 724895 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:41:18 725042 --> Utf8 Class Initialized
INFO - 2019-01-30 11:41:18 727049 --> URI Class Initialized
INFO - 2019-01-30 11:41:18 727565 --> URI Class Initialized
INFO - 2019-01-30 11:41:18 733891 --> Router Class Initialized
INFO - 2019-01-30 11:41:18 737306 --> Output Class Initialized
INFO - 2019-01-30 11:41:18 739831 --> Security Class Initialized
DEBUG - 2019-01-30 11:41:18 742486 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:41:18 742641 --> Input Class Initialized
INFO - 2019-01-30 11:41:18 743515 --> Language Class Initialized
ERROR - 2019-01-30 11:41:18 744745 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:41:18 752511 --> Router Class Initialized
INFO - 2019-01-30 11:41:18 755963 --> Output Class Initialized
INFO - 2019-01-30 11:41:18 759493 --> Security Class Initialized
DEBUG - 2019-01-30 11:41:18 762202 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:41:18 762381 --> Input Class Initialized
INFO - 2019-01-30 11:41:18 763161 --> Language Class Initialized
ERROR - 2019-01-30 11:41:18 764318 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 11:49:15 752093 --> Config Class Initialized
INFO - 2019-01-30 11:49:15 752357 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:15 754101 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:15 754173 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:15 755069 --> URI Class Initialized
DEBUG - 2019-01-30 11:49:15 756545 --> No URI present. Default controller set.
INFO - 2019-01-30 11:49:15 756619 --> Router Class Initialized
INFO - 2019-01-30 11:49:15 758019 --> Output Class Initialized
INFO - 2019-01-30 11:49:15 759028 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:15 760008 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:15 760077 --> Input Class Initialized
INFO - 2019-01-30 11:49:15 760407 --> Language Class Initialized
INFO - 2019-01-30 11:49:15 762536 --> Loader Class Initialized
INFO - 2019-01-30 11:49:15 763520 --> Helper loaded: url_helper
INFO - 2019-01-30 11:49:15 764031 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:19:15 769711 --> Database Driver Class Initialized
INFO - 2019-01-30 17:19:15 775135 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:19:15 775943 --> Controller Class Initialized
INFO - 2019-01-30 17:19:15 776369 --> Parser Class Initialized
INFO - 2019-01-30 17:19:15 776949 --> Helper loaded: html_helper
INFO - 2019-01-30 17:19:15 777595 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:19:15 779835 --> Model Class Initialized
DEBUG - 2019-01-30 17:19:15 790865 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:19:15 796243 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:19:15 796679 --> Model Class Initialized
DEBUG - 2019-01-30 17:19:15 797348 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:19:15 799731 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:19:15 801424 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:19:15 801589 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:19:15 804903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 806215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 815047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 816294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 817913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 818145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 818763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 819823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 821352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 821584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 821958 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:19:15 822925 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:19:15 823014 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:19:15 823131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 824733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 824980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 825664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 826256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 827857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 828089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 828490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 829049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 830672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 830949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 831343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 831964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 833501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 833753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 834162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 834670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 836371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 836613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 837163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 837713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 839658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 839893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 840311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 840836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 842492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 842801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 843274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 843851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 846050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 846327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 847104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 848315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 852876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 853941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 855010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 856137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 858078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 858338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 858834 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:19:15 859602 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:19:15 859699 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:19:15 859818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 861644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 861897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 862377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 862999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 864824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 865077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 865573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 866153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 874150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 874974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 876900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 877950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 886647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 887461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 889393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 890681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 892870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 893115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 893573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 894450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 895081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 895684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 896269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 896862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 897444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 898010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 898605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 899162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 899739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 900293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 900868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 901432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 901989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 902559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 903127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 903764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 904233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 904673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 905092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 905524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 905941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 906363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 906974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 907447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 908049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 908488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 909087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 909528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 910124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 910557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 911140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 911576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 912187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 912785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 914865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 915096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 915576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 916179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 917819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 918052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 918526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 919127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 920725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 920950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 921406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 922009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 923651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 923883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 924338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 924952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 926570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 926810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 927284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 927907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 929543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 929774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 930233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 931844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 932070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 932518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 933155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 934801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 935033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 935482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 936094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 937701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 937928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 938359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 938978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 940629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 940862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 941294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 941915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 943531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 943761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 944190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 944830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 946451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 946686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 947119 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:19:15 947758 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:19:15 949511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 950512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 950741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:15 952452 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:19:15 952847 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:19:15 960846 --> Final output sent to browser
DEBUG - 2019-01-30 17:19:15 960928 --> Total execution time: 0.2032
INFO - 2019-01-30 11:49:17 472352 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 472537 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 474860 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 474993 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 476365 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 480695 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 483107 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 485002 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 486748 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 486881 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 487473 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 488441 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 576617 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 576965 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 579845 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 579984 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 581929 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 587951 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 591238 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 593624 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 595923 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 596060 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 596787 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 597908 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 640161 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 640326 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 642534 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 642667 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 643973 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 647121 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 660609 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 662524 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 664232 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 664365 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 664953 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 665887 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 669485 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 669814 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 672286 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 672430 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 674113 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 689762 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 692567 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 694601 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 696494 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 696625 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 697244 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 698244 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 700046 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 700362 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 703603 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 703896 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 709171 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 729782 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 732630 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 734740 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 736702 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 736843 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 737487 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 738497 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 741460 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 741792 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 744307 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 744474 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 746187 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 752633 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 755445 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 757500 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 759398 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 759553 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 760178 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 761188 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 790879 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 791011 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 793998 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 794095 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 795032 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 797185 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 800494 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 801729 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 802954 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 803050 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 803453 --> Language Class Initialized
ERROR - 2019-01-30 11:49:17 804096 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:17 837922 --> Config Class Initialized
INFO - 2019-01-30 11:49:17 838148 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:17 840008 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:17 840107 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:17 841079 --> URI Class Initialized
INFO - 2019-01-30 11:49:17 843431 --> Router Class Initialized
INFO - 2019-01-30 11:49:17 845429 --> Output Class Initialized
INFO - 2019-01-30 11:49:17 846812 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:17 848606 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:17 848783 --> Input Class Initialized
INFO - 2019-01-30 11:49:17 849191 --> Language Class Initialized
INFO - 2019-01-30 11:49:17 853976 --> Loader Class Initialized
INFO - 2019-01-30 11:49:17 855191 --> Helper loaded: url_helper
INFO - 2019-01-30 11:49:17 855813 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:19:17 861876 --> Database Driver Class Initialized
INFO - 2019-01-30 17:19:17 867780 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:19:17 868679 --> Controller Class Initialized
ERROR - 2019-01-30 17:19:17 869240 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:19:17 869812 --> Final output sent to browser
DEBUG - 2019-01-30 17:19:17 869889 --> Total execution time: 0.0334
INFO - 2019-01-30 11:49:28 032999 --> Config Class Initialized
INFO - 2019-01-30 11:49:28 033329 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:28 037663 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:28 037822 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:28 040528 --> URI Class Initialized
DEBUG - 2019-01-30 11:49:28 044857 --> No URI present. Default controller set.
INFO - 2019-01-30 11:49:28 044941 --> Router Class Initialized
INFO - 2019-01-30 11:49:28 046654 --> Output Class Initialized
INFO - 2019-01-30 11:49:28 047925 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:28 049144 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:28 049227 --> Input Class Initialized
INFO - 2019-01-30 11:49:28 049945 --> Language Class Initialized
INFO - 2019-01-30 11:49:28 057940 --> Loader Class Initialized
INFO - 2019-01-30 11:49:28 060895 --> Helper loaded: url_helper
INFO - 2019-01-30 11:49:28 062382 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:19:28 083100 --> Database Driver Class Initialized
INFO - 2019-01-30 17:19:28 101551 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:19:28 102540 --> Controller Class Initialized
INFO - 2019-01-30 17:19:28 103005 --> Parser Class Initialized
INFO - 2019-01-30 17:19:28 103725 --> Helper loaded: html_helper
INFO - 2019-01-30 17:19:28 104510 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:19:28 106664 --> Model Class Initialized
DEBUG - 2019-01-30 17:19:28 123908 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:19:28 130435 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:19:28 130975 --> Model Class Initialized
DEBUG - 2019-01-30 17:19:28 131598 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:19:28 133795 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:19:28 135109 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:19:28 135224 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:19:28 138025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 139127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 147406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 149194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 151082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 151369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 151855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 152780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 154592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 154855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 155307 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:19:28 156392 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:19:28 156516 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:19:28 156655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 158499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 158760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 159212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 159954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 161850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 162131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 162632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 163360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 165266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 165561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 166035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 166794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 168809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 169086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 169580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 170442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 172400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 172693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 173188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 173938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 175945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 176223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 176733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 177866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 179903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 180177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 180697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 181452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 183430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 183708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 184221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 185153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 187227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 187536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 188062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 188736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 190813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 191124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 191673 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:19:28 192310 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:19:28 192411 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:19:28 192562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 194595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 194878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 195425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 196089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 198141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 198435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 198982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 199691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 201766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 202054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 202651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 203361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 205451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 205741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 206275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 207026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 209125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 209423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 209980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 210638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 211213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 211800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 212361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 212929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 213496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 214060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 214631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 215188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 215756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 216335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 216933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 217503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 218059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 218619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 219182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 219942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 220570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 221088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 221617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 222130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 222676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 223201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 223817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 224400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 225001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 225548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 226130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 226679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 227260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 227822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 228409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 228949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 229577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 230187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 232556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 232847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 233421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 234059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 236180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 236484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 237056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 237730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 239820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 240103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 240684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 241318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 243365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 243690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 244257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 244894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 246910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 247198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 247777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 248472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 250591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 250885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 251470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 253473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 253756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 254296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 255027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 257152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 257461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 258006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 258678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 260685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 260971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 261564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 262202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 264247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 264558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 265096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 265728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 267752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 268057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 268614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 269237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 278640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 279638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 281845 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:19:28 282871 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:19:28 284769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 286036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 286319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:19:28 288489 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:19:28 288976 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:19:28 297095 --> Final output sent to browser
DEBUG - 2019-01-30 17:19:28 297195 --> Total execution time: 0.2607
INFO - 2019-01-30 11:49:32 010675 --> Config Class Initialized
INFO - 2019-01-30 11:49:32 010965 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:32 013369 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:32 013487 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:32 015048 --> URI Class Initialized
INFO - 2019-01-30 11:49:32 018064 --> Router Class Initialized
INFO - 2019-01-30 11:49:32 020801 --> Output Class Initialized
INFO - 2019-01-30 11:49:32 022768 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:32 024646 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:32 024770 --> Input Class Initialized
INFO - 2019-01-30 11:49:32 025333 --> Language Class Initialized
INFO - 2019-01-30 11:49:32 033746 --> Loader Class Initialized
INFO - 2019-01-30 11:49:32 035433 --> Helper loaded: url_helper
INFO - 2019-01-30 11:49:32 036299 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:19:32 047285 --> Database Driver Class Initialized
INFO - 2019-01-30 17:19:32 055694 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:19:32 057156 --> Controller Class Initialized
ERROR - 2019-01-30 17:19:32 058039 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:19:32 058836 --> Final output sent to browser
DEBUG - 2019-01-30 17:19:32 058944 --> Total execution time: 0.0502
INFO - 2019-01-30 11:49:34 681890 --> Config Class Initialized
INFO - 2019-01-30 11:49:34 682219 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:34 684617 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:34 684746 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:34 686381 --> URI Class Initialized
INFO - 2019-01-30 11:49:34 690996 --> Router Class Initialized
INFO - 2019-01-30 11:49:34 693656 --> Output Class Initialized
INFO - 2019-01-30 11:49:34 695709 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:34 697575 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:34 697701 --> Input Class Initialized
INFO - 2019-01-30 11:49:34 698309 --> Language Class Initialized
ERROR - 2019-01-30 11:49:34 699281 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:34 904186 --> Config Class Initialized
INFO - 2019-01-30 11:49:34 904537 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:34 907291 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:34 907427 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:34 910312 --> URI Class Initialized
INFO - 2019-01-30 11:49:34 916040 --> Router Class Initialized
INFO - 2019-01-30 11:49:34 919184 --> Output Class Initialized
INFO - 2019-01-30 11:49:34 921705 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:34 924154 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:34 924335 --> Input Class Initialized
INFO - 2019-01-30 11:49:34 925087 --> Language Class Initialized
ERROR - 2019-01-30 11:49:34 926553 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:35 806219 --> Config Class Initialized
INFO - 2019-01-30 11:49:35 806504 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:35 809056 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:35 809168 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:35 810678 --> URI Class Initialized
INFO - 2019-01-30 11:49:35 815871 --> Router Class Initialized
INFO - 2019-01-30 11:49:35 818490 --> Output Class Initialized
INFO - 2019-01-30 11:49:35 820674 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:35 822413 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:35 822535 --> Input Class Initialized
INFO - 2019-01-30 11:49:35 823091 --> Language Class Initialized
ERROR - 2019-01-30 11:49:35 824019 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:35 993707 --> Config Class Initialized
INFO - 2019-01-30 11:49:35 994152 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:35 996226 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:35 996349 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:35 997991 --> URI Class Initialized
INFO - 2019-01-30 11:49:36 001179 --> Router Class Initialized
INFO - 2019-01-30 11:49:36 003357 --> Output Class Initialized
INFO - 2019-01-30 11:49:36 004863 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:36 006092 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:36 006192 --> Input Class Initialized
INFO - 2019-01-30 11:49:36 006797 --> Language Class Initialized
ERROR - 2019-01-30 11:49:36 007405 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:36 021825 --> Config Class Initialized
INFO - 2019-01-30 11:49:36 022032 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:36 023344 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:36 023422 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:36 024322 --> URI Class Initialized
INFO - 2019-01-30 11:49:36 026917 --> Router Class Initialized
INFO - 2019-01-30 11:49:36 028398 --> Output Class Initialized
INFO - 2019-01-30 11:49:36 029505 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:36 030491 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:36 030606 --> Input Class Initialized
INFO - 2019-01-30 11:49:36 031193 --> Language Class Initialized
ERROR - 2019-01-30 11:49:36 032332 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:36 123111 --> Config Class Initialized
INFO - 2019-01-30 11:49:36 123260 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:36 125456 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:36 125562 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:36 126878 --> URI Class Initialized
INFO - 2019-01-30 11:49:36 129529 --> Router Class Initialized
INFO - 2019-01-30 11:49:36 131479 --> Output Class Initialized
INFO - 2019-01-30 11:49:36 133287 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:36 135216 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:36 135346 --> Input Class Initialized
INFO - 2019-01-30 11:49:36 135855 --> Language Class Initialized
ERROR - 2019-01-30 11:49:36 136674 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:49:36 144608 --> Config Class Initialized
INFO - 2019-01-30 11:49:36 144762 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:49:36 146879 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:49:36 147010 --> Utf8 Class Initialized
INFO - 2019-01-30 11:49:36 148293 --> URI Class Initialized
INFO - 2019-01-30 11:49:36 151587 --> Router Class Initialized
INFO - 2019-01-30 11:49:36 154170 --> Output Class Initialized
INFO - 2019-01-30 11:49:36 156126 --> Security Class Initialized
DEBUG - 2019-01-30 11:49:36 157955 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:49:36 158087 --> Input Class Initialized
INFO - 2019-01-30 11:49:36 158700 --> Language Class Initialized
ERROR - 2019-01-30 11:49:36 159693 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:50:19 548633 --> Config Class Initialized
INFO - 2019-01-30 11:50:19 548829 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:50:19 550192 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:50:19 550267 --> Utf8 Class Initialized
INFO - 2019-01-30 11:50:19 551194 --> URI Class Initialized
INFO - 2019-01-30 11:50:19 554296 --> Router Class Initialized
INFO - 2019-01-30 11:50:19 555707 --> Output Class Initialized
INFO - 2019-01-30 11:50:19 556751 --> Security Class Initialized
DEBUG - 2019-01-30 11:50:19 557729 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:50:19 557801 --> Input Class Initialized
INFO - 2019-01-30 11:50:19 558130 --> Language Class Initialized
ERROR - 2019-01-30 11:50:19 558698 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 11:51:00 755425 --> Config Class Initialized
INFO - 2019-01-30 11:51:00 755770 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:00 758177 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:00 758311 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:00 759825 --> URI Class Initialized
DEBUG - 2019-01-30 11:51:00 762341 --> No URI present. Default controller set.
INFO - 2019-01-30 11:51:00 762491 --> Router Class Initialized
INFO - 2019-01-30 11:51:00 765125 --> Output Class Initialized
INFO - 2019-01-30 11:51:00 767102 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:00 769154 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:00 769287 --> Input Class Initialized
INFO - 2019-01-30 11:51:00 769926 --> Language Class Initialized
INFO - 2019-01-30 11:51:00 773834 --> Loader Class Initialized
INFO - 2019-01-30 11:51:00 775468 --> Helper loaded: url_helper
INFO - 2019-01-30 11:51:00 776335 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:21:00 786725 --> Database Driver Class Initialized
INFO - 2019-01-30 17:21:00 795686 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:21:00 797175 --> Controller Class Initialized
INFO - 2019-01-30 17:21:00 797930 --> Parser Class Initialized
INFO - 2019-01-30 17:21:00 799032 --> Helper loaded: html_helper
INFO - 2019-01-30 17:21:00 800285 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:21:00 803674 --> Model Class Initialized
DEBUG - 2019-01-30 17:21:00 818852 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:21:00 826129 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:21:00 826945 --> Model Class Initialized
DEBUG - 2019-01-30 17:21:00 827637 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:21:00 831131 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:21:00 833220 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:21:00 833399 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:21:00 837861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 839555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 850755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 852809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 855640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 856050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 856756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 857757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 860383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 860785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 861488 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:21:00 862930 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:21:00 863086 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:21:00 863287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 865987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 866365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 867156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 868311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 871119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 871550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 872237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 873092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 875808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 876214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 876918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 877724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 880470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 880867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 881575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 882488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 885292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 885729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 886460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 887335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 890203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 890635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 891345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 892159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 895030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 895435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 896162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 896972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 899852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 900252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 901022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 901844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 904803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 905205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 905978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 906806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 909722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 910125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 910904 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:21:00 911654 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:21:00 911803 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:21:00 911988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 914890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 915292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 916076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 917130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 920190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 920628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 921473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 922463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 925390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 925818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 926656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 928010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 933818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 934245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 935045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 936079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 939065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 939697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 940512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 941513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 942365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 943207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 944036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 944864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 945707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 946547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 947370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 948193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 949012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 949834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 950666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 951596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 952476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 953389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 954269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 955293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 956157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 956979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 957766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 958534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 959285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 960069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 960993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 963051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 964333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 965117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 966031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 966816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 967721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 968508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 969400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 970186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 971118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 972012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 975254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 975687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 976527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 977530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 980621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 981050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 981894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 982866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 985833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 986263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 987109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 988080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 991051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 991487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 992302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 993249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 996201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 996639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 997502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:00 998433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 003269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 003930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 005429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 008682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 009140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 009977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 011121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 014436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 014875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 015686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 016715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 019634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 020050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 021091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 022211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 025477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 025923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 026738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 027781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 030730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 031147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 031949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 032932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 035867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 036284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 037090 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:21:01 038170 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:21:01 041104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 042968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 043385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:21:01 046353 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:21:01 047074 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:21:01 056538 --> Final output sent to browser
DEBUG - 2019-01-30 17:21:01 056670 --> Total execution time: 0.2947
INFO - 2019-01-30 11:51:02 007551 --> Config Class Initialized
INFO - 2019-01-30 11:51:02 008145 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:02 010303 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:02 010377 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:02 011507 --> URI Class Initialized
INFO - 2019-01-30 11:51:02 013487 --> Router Class Initialized
INFO - 2019-01-30 11:51:02 015081 --> Output Class Initialized
INFO - 2019-01-30 11:51:02 016406 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:02 018091 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:02 018203 --> Input Class Initialized
INFO - 2019-01-30 11:51:02 018903 --> Language Class Initialized
INFO - 2019-01-30 11:51:02 024589 --> Loader Class Initialized
INFO - 2019-01-30 11:51:02 025599 --> Helper loaded: url_helper
INFO - 2019-01-30 11:51:02 026185 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:21:02 033222 --> Database Driver Class Initialized
INFO - 2019-01-30 17:21:02 041212 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:21:02 043015 --> Controller Class Initialized
ERROR - 2019-01-30 17:21:02 043819 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:21:02 044526 --> Final output sent to browser
DEBUG - 2019-01-30 17:21:02 044600 --> Total execution time: 0.0381
INFO - 2019-01-30 11:51:02 870773 --> Config Class Initialized
INFO - 2019-01-30 11:51:02 871037 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:02 873606 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:02 873745 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:02 875415 --> URI Class Initialized
INFO - 2019-01-30 11:51:02 880744 --> Router Class Initialized
INFO - 2019-01-30 11:51:02 883174 --> Output Class Initialized
INFO - 2019-01-30 11:51:02 884979 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:02 887388 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:02 887538 --> Input Class Initialized
INFO - 2019-01-30 11:51:02 888078 --> Language Class Initialized
ERROR - 2019-01-30 11:51:02 889009 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 000049 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 000222 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 002794 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 002912 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 005196 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 016552 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 019280 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 021277 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 023293 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 023432 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 024049 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 025069 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 369873 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 370075 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 371556 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 371629 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 372987 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 377984 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 380572 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 382179 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 384082 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 384180 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 384712 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 385704 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 414915 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 415236 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 417947 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 418181 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 420337 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 428103 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 430506 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 432498 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 433799 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 433872 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 434206 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 434743 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 525405 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 525518 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 526729 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 526798 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 527565 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 529241 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 530566 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 531578 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 532567 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 532638 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 532948 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 533442 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 628281 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 628441 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 630248 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 630321 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 631309 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 633260 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 634840 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 636245 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 637557 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 637655 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 638026 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 638550 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:03 729893 --> Config Class Initialized
INFO - 2019-01-30 11:51:03 729989 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:03 731347 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:03 731435 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:03 732234 --> URI Class Initialized
INFO - 2019-01-30 11:51:03 734028 --> Router Class Initialized
INFO - 2019-01-30 11:51:03 735713 --> Output Class Initialized
INFO - 2019-01-30 11:51:03 736763 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:03 737782 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:03 737854 --> Input Class Initialized
INFO - 2019-01-30 11:51:03 738234 --> Language Class Initialized
ERROR - 2019-01-30 11:51:03 738842 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:51:12 547749 --> Config Class Initialized
INFO - 2019-01-30 11:51:12 548077 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:51:12 551075 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:51:12 551207 --> Utf8 Class Initialized
INFO - 2019-01-30 11:51:12 552831 --> URI Class Initialized
INFO - 2019-01-30 11:51:12 557703 --> Router Class Initialized
INFO - 2019-01-30 11:51:12 560344 --> Output Class Initialized
INFO - 2019-01-30 11:51:12 562323 --> Security Class Initialized
DEBUG - 2019-01-30 11:51:12 564384 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:51:12 564531 --> Input Class Initialized
INFO - 2019-01-30 11:51:12 565149 --> Language Class Initialized
ERROR - 2019-01-30 11:51:12 566118 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 11:55:46 624593 --> Config Class Initialized
INFO - 2019-01-30 11:55:46 624933 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:46 627377 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:46 627532 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:46 629053 --> URI Class Initialized
DEBUG - 2019-01-30 11:55:46 632163 --> No URI present. Default controller set.
INFO - 2019-01-30 11:55:46 632320 --> Router Class Initialized
INFO - 2019-01-30 11:55:46 635046 --> Output Class Initialized
INFO - 2019-01-30 11:55:46 637878 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:46 639816 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:46 639946 --> Input Class Initialized
INFO - 2019-01-30 11:55:46 640605 --> Language Class Initialized
INFO - 2019-01-30 11:55:46 644650 --> Loader Class Initialized
INFO - 2019-01-30 11:55:46 646265 --> Helper loaded: url_helper
INFO - 2019-01-30 11:55:46 647186 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:25:46 657704 --> Database Driver Class Initialized
INFO - 2019-01-30 17:25:46 666143 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:25:46 667658 --> Controller Class Initialized
INFO - 2019-01-30 17:25:46 668390 --> Parser Class Initialized
INFO - 2019-01-30 17:25:46 669539 --> Helper loaded: html_helper
INFO - 2019-01-30 17:25:46 670782 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:25:46 674180 --> Model Class Initialized
DEBUG - 2019-01-30 17:25:47 726726 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:25:47 733062 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:25:47 733608 --> Model Class Initialized
DEBUG - 2019-01-30 17:25:47 734738 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:25:47 737752 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:25:47 739043 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:25:47 739154 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:25:47 742127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 743308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 756537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 758399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 760165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 760447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 760927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 761765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 763449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 763705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 764137 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:25:47 765307 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:25:47 765412 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:25:47 765563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 767326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 767590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 768023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 768826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 770620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 770885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 771331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 772157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 773973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 774243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 774708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 775557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 777388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 777657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 778119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 779083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 781008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 781271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 781761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 782665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 784544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 784811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 785279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 786196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 788150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 788413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 788902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 789707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 791836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 792212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 792732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 793634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 795561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 795826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 796318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 797122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 798990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 799254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 799771 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:25:47 800513 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:25:47 800607 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:25:47 800733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 802841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 803359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 803896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 804699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 806606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 806869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 808167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 809005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 811060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 811336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 812628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 813482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 815495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 816170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 816711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 817679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 824578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 825072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 825910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 827066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 828012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 828937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 829823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 830725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 831629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 832494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 833245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 833842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 834389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 834952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 835519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 836061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 836636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 837177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 837735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 838498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 839049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 839551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 840040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 840548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 841033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 841541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 842128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 842708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 843290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 843895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 844737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 845710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 847208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 848159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 849006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 849904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 850800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 851954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 855917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 856394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 857456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 858536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 862518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 863042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 864257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 865408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 869064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 869546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 870517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 871707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 875271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 875761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 876748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 877775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 881278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 881767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 882747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 883783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 887296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 887631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 888228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 891330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 891819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 892833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 893884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 896039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 896347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 896919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 897785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 900487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 900933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 901525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 902627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 906203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 906539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 907193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 907985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 910231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 910633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 911262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 912066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 914206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 914527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 915091 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:25:47 915883 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:25:47 917893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 919163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 919460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:25:47 921719 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:25:47 922221 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:25:47 931788 --> Final output sent to browser
DEBUG - 2019-01-30 17:25:47 931937 --> Total execution time: 1.3011
INFO - 2019-01-30 11:55:48 544121 --> Config Class Initialized
INFO - 2019-01-30 11:55:48 544306 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:48 545605 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:48 545679 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:48 546555 --> URI Class Initialized
INFO - 2019-01-30 11:55:48 549767 --> Router Class Initialized
INFO - 2019-01-30 11:55:48 551548 --> Output Class Initialized
INFO - 2019-01-30 11:55:48 552592 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:48 553606 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:48 553678 --> Input Class Initialized
INFO - 2019-01-30 11:55:48 554011 --> Language Class Initialized
ERROR - 2019-01-30 11:55:48 554660 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:55:48 636763 --> Config Class Initialized
INFO - 2019-01-30 11:55:48 637028 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:48 638971 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:48 639076 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:48 640398 --> URI Class Initialized
INFO - 2019-01-30 11:55:48 647983 --> Router Class Initialized
INFO - 2019-01-30 11:55:48 653973 --> Output Class Initialized
INFO - 2019-01-30 11:55:48 659006 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:48 663728 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:48 663928 --> Input Class Initialized
INFO - 2019-01-30 11:55:48 665191 --> Language Class Initialized
ERROR - 2019-01-30 11:55:48 667212 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:55:48 850953 --> Config Class Initialized
INFO - 2019-01-30 11:55:48 851102 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:48 853212 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:48 853342 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:48 854636 --> URI Class Initialized
INFO - 2019-01-30 11:55:48 857868 --> Router Class Initialized
INFO - 2019-01-30 11:55:48 866503 --> Config Class Initialized
INFO - 2019-01-30 11:55:48 866647 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:48 868731 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:48 868860 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:48 870143 --> URI Class Initialized
INFO - 2019-01-30 11:55:48 873366 --> Router Class Initialized
INFO - 2019-01-30 11:55:48 875932 --> Output Class Initialized
INFO - 2019-01-30 11:55:48 877877 --> Security Class Initialized
INFO - 2019-01-30 11:55:48 880395 --> Output Class Initialized
INFO - 2019-01-30 11:55:48 882339 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:48 884144 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:48 884274 --> Input Class Initialized
INFO - 2019-01-30 11:55:48 884880 --> Language Class Initialized
ERROR - 2019-01-30 11:55:48 885848 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 11:55:48 888041 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:48 888207 --> Input Class Initialized
INFO - 2019-01-30 11:55:48 888845 --> Language Class Initialized
ERROR - 2019-01-30 11:55:48 890111 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:55:49 317007 --> Config Class Initialized
INFO - 2019-01-30 11:55:49 317112 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:49 318475 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:49 318558 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:49 319344 --> URI Class Initialized
INFO - 2019-01-30 11:55:49 321506 --> Router Class Initialized
INFO - 2019-01-30 11:55:49 323048 --> Output Class Initialized
INFO - 2019-01-30 11:55:49 324354 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:49 326034 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:49 326143 --> Input Class Initialized
INFO - 2019-01-30 11:55:49 326539 --> Language Class Initialized
ERROR - 2019-01-30 11:55:49 327142 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:55:49 401678 --> Config Class Initialized
INFO - 2019-01-30 11:55:49 401777 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:49 403163 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:49 403281 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:49 404191 --> URI Class Initialized
INFO - 2019-01-30 11:55:49 407105 --> Router Class Initialized
INFO - 2019-01-30 11:55:49 409398 --> Output Class Initialized
INFO - 2019-01-30 11:55:49 420363 --> Config Class Initialized
INFO - 2019-01-30 11:55:49 420509 --> Hooks Class Initialized
INFO - 2019-01-30 11:55:49 423185 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:49 424381 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:49 424484 --> Input Class Initialized
INFO - 2019-01-30 11:55:49 424815 --> Language Class Initialized
ERROR - 2019-01-30 11:55:49 425657 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 11:55:49 427465 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:49 427550 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:49 428453 --> URI Class Initialized
INFO - 2019-01-30 11:55:49 432580 --> Router Class Initialized
INFO - 2019-01-30 11:55:49 434668 --> Output Class Initialized
INFO - 2019-01-30 11:55:49 435970 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:49 437310 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:49 437418 --> Input Class Initialized
INFO - 2019-01-30 11:55:49 438146 --> Language Class Initialized
ERROR - 2019-01-30 11:55:49 438853 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 11:55:49 911370 --> Config Class Initialized
INFO - 2019-01-30 11:55:49 911514 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:55:49 913541 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:55:49 913649 --> Utf8 Class Initialized
INFO - 2019-01-30 11:55:49 914973 --> URI Class Initialized
INFO - 2019-01-30 11:55:49 916728 --> Router Class Initialized
INFO - 2019-01-30 11:55:49 918148 --> Output Class Initialized
INFO - 2019-01-30 11:55:49 919281 --> Security Class Initialized
DEBUG - 2019-01-30 11:55:49 920536 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:55:49 920646 --> Input Class Initialized
INFO - 2019-01-30 11:55:49 921292 --> Language Class Initialized
INFO - 2019-01-30 11:55:49 929061 --> Loader Class Initialized
INFO - 2019-01-30 11:55:49 930711 --> Helper loaded: url_helper
INFO - 2019-01-30 11:55:49 931484 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:25:49 941556 --> Database Driver Class Initialized
INFO - 2019-01-30 17:25:49 950371 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:25:49 951745 --> Controller Class Initialized
ERROR - 2019-01-30 17:25:49 952554 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:25:49 953289 --> Final output sent to browser
DEBUG - 2019-01-30 17:25:49 953388 --> Total execution time: 0.0437
INFO - 2019-01-30 11:56:03 158293 --> Config Class Initialized
INFO - 2019-01-30 11:56:03 158538 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:56:03 160171 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:56:03 160262 --> Utf8 Class Initialized
INFO - 2019-01-30 11:56:03 161371 --> URI Class Initialized
INFO - 2019-01-30 11:56:03 164489 --> Router Class Initialized
INFO - 2019-01-30 11:56:03 166299 --> Output Class Initialized
INFO - 2019-01-30 11:56:03 167646 --> Security Class Initialized
DEBUG - 2019-01-30 11:56:03 168920 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:56:03 169008 --> Input Class Initialized
INFO - 2019-01-30 11:56:03 169430 --> Language Class Initialized
INFO - 2019-01-30 11:56:03 173265 --> Loader Class Initialized
INFO - 2019-01-30 11:56:03 174942 --> Helper loaded: url_helper
INFO - 2019-01-30 11:56:03 175875 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:26:03 187113 --> Database Driver Class Initialized
INFO - 2019-01-30 17:26:03 194278 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:26:03 195456 --> Controller Class Initialized
INFO - 2019-01-30 17:26:03 200798 --> Model Class Initialized
DEBUG - 2019-01-30 17:26:03 203218 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'ra']
INFO - 2019-01-30 17:26:03 203437 --> Final output sent to browser
DEBUG - 2019-01-30 17:26:03 203558 --> Total execution time: 0.0465
INFO - 2019-01-30 11:56:11 183012 --> Config Class Initialized
INFO - 2019-01-30 11:56:11 183355 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:56:11 185930 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:56:11 186064 --> Utf8 Class Initialized
INFO - 2019-01-30 11:56:11 187901 --> URI Class Initialized
INFO - 2019-01-30 11:56:11 192615 --> Router Class Initialized
INFO - 2019-01-30 11:56:11 195302 --> Output Class Initialized
INFO - 2019-01-30 11:56:11 197307 --> Security Class Initialized
DEBUG - 2019-01-30 11:56:11 199213 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:56:11 199343 --> Input Class Initialized
INFO - 2019-01-30 11:56:11 199984 --> Language Class Initialized
INFO - 2019-01-30 11:56:11 203852 --> Loader Class Initialized
INFO - 2019-01-30 11:56:11 205549 --> Helper loaded: url_helper
INFO - 2019-01-30 11:56:11 206423 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:26:11 216943 --> Database Driver Class Initialized
INFO - 2019-01-30 17:26:11 232379 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:26:11 234780 --> Controller Class Initialized
INFO - 2019-01-30 17:26:11 244378 --> Model Class Initialized
DEBUG - 2019-01-30 17:26:11 247906 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'gaurav@gmail.com']
INFO - 2019-01-30 17:26:11 269839 --> Email Class Initialized
ERROR - 2019-01-30 17:26:11 270515 --> Severity: 4096 --> Argument 1 passed to CI_Email::initialize() must be of the type array, null given, called in /home/hzswn06npic1/public_html/bdeals/application/controllers/Login.php on line 84 and defined /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 413
ERROR - 2019-01-30 17:26:11 270648 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 417
DEBUG - 2019-01-30 17:26:11 274353 --> User_model: registerUser: [INSERT INTO `bd_user_register_otp` (`otp_number`, `customerid`, `status`, `otp_datetime`) VALUES (938185, 'gaurav@gmail.com', '0', '2019-01-30 05:26:11')]
ERROR - 2019-01-30 17:26:12 280654 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (Connection refused) /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 2055
INFO - 2019-01-30 17:26:12 297065 --> Language file loaded: language/english/email_lang.php
INFO - 2019-01-30 17:26:12 297256 --> Email not send to  address
INFO - 2019-01-30 17:26:12 297420 --> Final output sent to browser
DEBUG - 2019-01-30 17:26:12 297518 --> Total execution time: 1.1166
INFO - 2019-01-30 11:56:12 423293 --> Config Class Initialized
INFO - 2019-01-30 11:56:12 423430 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:56:12 425144 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:56:12 425241 --> Utf8 Class Initialized
INFO - 2019-01-30 11:56:12 426287 --> URI Class Initialized
INFO - 2019-01-30 11:56:12 429377 --> Router Class Initialized
INFO - 2019-01-30 11:56:12 431144 --> Output Class Initialized
INFO - 2019-01-30 11:56:12 432179 --> Security Class Initialized
DEBUG - 2019-01-30 11:56:12 433101 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:56:12 433172 --> Input Class Initialized
INFO - 2019-01-30 11:56:12 433491 --> Language Class Initialized
INFO - 2019-01-30 11:56:12 435277 --> Loader Class Initialized
INFO - 2019-01-30 11:56:12 436063 --> Helper loaded: url_helper
INFO - 2019-01-30 11:56:12 436501 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:26:12 441276 --> Database Driver Class Initialized
INFO - 2019-01-30 17:26:12 444358 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:26:12 445080 --> Controller Class Initialized
INFO - 2019-01-30 17:26:12 445471 --> Parser Class Initialized
INFO - 2019-01-30 17:26:12 446010 --> Helper loaded: html_helper
INFO - 2019-01-30 17:26:12 446614 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:26:12 457284 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/forgetUseridOtp.php
ERROR - 2019-01-30 17:26:12 459537 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:26:12 460661 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:26:12 460763 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:26:12 464210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:26:12 465367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:26:12 472045 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:26:12 473548 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:26:12 478892 --> Final output sent to browser
DEBUG - 2019-01-30 17:26:12 478987 --> Total execution time: 0.0521
INFO - 2019-01-30 11:56:13 245959 --> Config Class Initialized
INFO - 2019-01-30 11:56:13 246073 --> Hooks Class Initialized
DEBUG - 2019-01-30 11:56:13 248172 --> UTF-8 Support Enabled
INFO - 2019-01-30 11:56:13 248279 --> Utf8 Class Initialized
INFO - 2019-01-30 11:56:13 249001 --> URI Class Initialized
INFO - 2019-01-30 11:56:13 250912 --> Router Class Initialized
INFO - 2019-01-30 11:56:13 252938 --> Output Class Initialized
INFO - 2019-01-30 11:56:13 254089 --> Security Class Initialized
DEBUG - 2019-01-30 11:56:13 255294 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 11:56:13 255368 --> Input Class Initialized
INFO - 2019-01-30 11:56:13 255692 --> Language Class Initialized
INFO - 2019-01-30 11:56:13 259840 --> Loader Class Initialized
INFO - 2019-01-30 11:56:13 261007 --> Helper loaded: url_helper
INFO - 2019-01-30 11:56:13 261514 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:26:13 266828 --> Database Driver Class Initialized
INFO - 2019-01-30 17:26:13 270459 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:26:13 271442 --> Controller Class Initialized
ERROR - 2019-01-30 17:26:13 272013 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 17:26:13 272437 --> Final output sent to browser
DEBUG - 2019-01-30 17:26:13 272510 --> Total execution time: 0.0275
INFO - 2019-01-30 12:03:10 931529 --> Config Class Initialized
INFO - 2019-01-30 12:03:10 931870 --> Hooks Class Initialized
DEBUG - 2019-01-30 12:03:10 935436 --> UTF-8 Support Enabled
INFO - 2019-01-30 12:03:10 935591 --> Utf8 Class Initialized
INFO - 2019-01-30 12:03:10 937906 --> URI Class Initialized
DEBUG - 2019-01-30 12:03:10 942358 --> No URI present. Default controller set.
INFO - 2019-01-30 12:03:10 942528 --> Router Class Initialized
INFO - 2019-01-30 12:03:10 947287 --> Output Class Initialized
INFO - 2019-01-30 12:03:10 950836 --> Security Class Initialized
DEBUG - 2019-01-30 12:03:10 954219 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 12:03:10 954376 --> Input Class Initialized
INFO - 2019-01-30 12:03:10 955324 --> Language Class Initialized
INFO - 2019-01-30 12:03:10 960063 --> Loader Class Initialized
INFO - 2019-01-30 12:03:10 961158 --> Helper loaded: url_helper
INFO - 2019-01-30 12:03:10 961749 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:33:10 968482 --> Database Driver Class Initialized
INFO - 2019-01-30 17:33:10 974839 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:33:10 975814 --> Controller Class Initialized
INFO - 2019-01-30 17:33:10 976291 --> Parser Class Initialized
INFO - 2019-01-30 17:33:10 977020 --> Helper loaded: html_helper
INFO - 2019-01-30 17:33:10 977837 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 17:33:10 980022 --> Model Class Initialized
DEBUG - 2019-01-30 17:33:10 991817 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 17:33:10 999315 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 17:33:10 999885 --> Model Class Initialized
DEBUG - 2019-01-30 17:33:11 000708 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 17:33:11 002958 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 17:33:11 004322 --> Helper loaded: file_helper
DEBUG - 2019-01-30 17:33:11 004450 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 17:33:11 007905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 009530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 018086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 019820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 021728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 022018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 022572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 023655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 025482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 025753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 026217 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:33:11 027343 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:33:11 027478 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:33:11 027817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 034986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 035276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 035767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 036622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 038613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 038901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 039386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 040179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 043611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 044102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 044965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 045661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 047621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 047916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 048419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 049093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 051115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 051400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 051917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 052586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 054600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 054892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 055398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 056420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 058494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 058775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 059283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 060265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 062294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 062592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 063117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 064105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 066221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 066526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 067069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 067871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 069971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 070261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 070821 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 17:33:11 071692 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 17:33:11 071799 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 17:33:11 071940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 074064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 074352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 074913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 075799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 077879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 078170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 078772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 079664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 081762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 082053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 082617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 083889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 093787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 094748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 096934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 098387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 100698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 100991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 101562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 102699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 103765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 104733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 105741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 106739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 107755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 109704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 110621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 111438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 112196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 112953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 113812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 114665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 115436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 116170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 116906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 118021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 118958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 119801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 120635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 121449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 122271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 123114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 124089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 125022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 125844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 126689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 127444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 128274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 129010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 129853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 130573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 131388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 132126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 132828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 136363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 136840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 138031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 139003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 142452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 142956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 144102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 145641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 153516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 153997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 155023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 156161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 159436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 159907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 160825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 161933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 165116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 165589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 166527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 167520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 170830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 171284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 172205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 175457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 175910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 176784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 177905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 181407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 181905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 182787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 183846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 187199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 187684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 188560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 189733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 193162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 193662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 194538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 195964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 200825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 201319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 202280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 203638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 206957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 207427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 208290 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:33:11 209448 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 17:33:11 212667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 214755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 215198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 17:33:11 218647 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 17:33:11 219625 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 17:33:11 228373 --> Final output sent to browser
DEBUG - 2019-01-30 17:33:11 232862 --> Total execution time: 0.2925
INFO - 2019-01-30 12:03:23 817251 --> Config Class Initialized
INFO - 2019-01-30 12:03:23 817569 --> Hooks Class Initialized
DEBUG - 2019-01-30 12:03:23 820247 --> UTF-8 Support Enabled
INFO - 2019-01-30 12:03:23 820373 --> Utf8 Class Initialized
INFO - 2019-01-30 12:03:23 822016 --> URI Class Initialized
INFO - 2019-01-30 12:03:23 828437 --> Router Class Initialized
INFO - 2019-01-30 12:03:23 831603 --> Output Class Initialized
INFO - 2019-01-30 12:03:23 833832 --> Security Class Initialized
DEBUG - 2019-01-30 12:03:23 835706 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 12:03:23 835850 --> Input Class Initialized
INFO - 2019-01-30 12:03:23 836639 --> Language Class Initialized
INFO - 2019-01-30 12:03:23 839941 --> Loader Class Initialized
INFO - 2019-01-30 12:03:23 841274 --> Helper loaded: url_helper
INFO - 2019-01-30 12:03:23 841869 --> Helper loaded: utility_helper
INFO - 2019-01-30 17:33:23 849198 --> Database Driver Class Initialized
INFO - 2019-01-30 17:33:23 856919 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 17:33:23 858429 --> Controller Class Initialized
INFO - 2019-01-30 17:33:23 863214 --> Model Class Initialized
DEBUG - 2019-01-30 17:33:23 865756 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'gaurav@gmail.com']
INFO - 2019-01-30 17:33:23 915031 --> Email Class Initialized
ERROR - 2019-01-30 17:33:23 916337 --> Severity: 4096 --> Argument 1 passed to CI_Email::initialize() must be of the type array, null given, called in /home/hzswn06npic1/public_html/bdeals/application/controllers/Login.php on line 84 and defined /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 413
ERROR - 2019-01-30 17:33:23 916635 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 417
DEBUG - 2019-01-30 17:33:24 004426 --> User_model: registerUser: [INSERT INTO `bd_user_register_otp` (`otp_number`, `customerid`, `status`, `otp_datetime`) VALUES (757669, 'gaurav@gmail.com', '0', '2019-01-30 05:33:24')]
ERROR - 2019-01-30 17:33:25 021718 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (Connection refused) /home/hzswn06npic1/public_html/bdeals/system/libraries/Email.php 2055
INFO - 2019-01-30 17:33:25 022212 --> Language file loaded: language/english/email_lang.php
INFO - 2019-01-30 17:33:25 022389 --> Email not send to  address
INFO - 2019-01-30 17:33:25 022593 --> Final output sent to browser
DEBUG - 2019-01-30 17:33:25 022697 --> Total execution time: 1.2079
INFO - 2019-01-30 13:53:41 284409 --> Config Class Initialized
INFO - 2019-01-30 13:53:41 287708 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:41 291927 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:41 292471 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:41 294655 --> URI Class Initialized
DEBUG - 2019-01-30 13:53:41 307645 --> No URI present. Default controller set.
INFO - 2019-01-30 13:53:41 307899 --> Router Class Initialized
INFO - 2019-01-30 13:53:41 317348 --> Output Class Initialized
INFO - 2019-01-30 13:53:41 320255 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:41 329279 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:41 329413 --> Input Class Initialized
INFO - 2019-01-30 13:53:41 330328 --> Language Class Initialized
INFO - 2019-01-30 13:53:41 346211 --> Config Class Initialized
INFO - 2019-01-30 13:53:41 346621 --> Hooks Class Initialized
INFO - 2019-01-30 13:53:41 348968 --> Loader Class Initialized
DEBUG - 2019-01-30 13:53:41 351830 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:41 351973 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:41 353807 --> URI Class Initialized
INFO - 2019-01-30 13:53:41 357501 --> Helper loaded: url_helper
DEBUG - 2019-01-30 13:53:41 358287 --> No URI present. Default controller set.
INFO - 2019-01-30 13:53:41 358385 --> Router Class Initialized
INFO - 2019-01-30 13:53:41 360426 --> Output Class Initialized
INFO - 2019-01-30 13:53:41 362030 --> Security Class Initialized
INFO - 2019-01-30 13:53:41 365847 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 13:53:41 367662 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:41 367768 --> Input Class Initialized
INFO - 2019-01-30 13:53:41 368264 --> Language Class Initialized
INFO - 2019-01-30 13:53:41 371535 --> Loader Class Initialized
INFO - 2019-01-30 13:53:41 372906 --> Helper loaded: url_helper
INFO - 2019-01-30 13:53:41 373596 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:23:41 382519 --> Database Driver Class Initialized
INFO - 2019-01-30 19:23:41 387732 --> Database Driver Class Initialized
INFO - 2019-01-30 19:23:41 407812 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:23:41 409261 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:23:41 413126 --> Controller Class Initialized
INFO - 2019-01-30 19:23:41 414498 --> Controller Class Initialized
INFO - 2019-01-30 19:23:41 421329 --> Parser Class Initialized
INFO - 2019-01-30 19:23:41 422465 --> Helper loaded: html_helper
INFO - 2019-01-30 19:23:41 423155 --> Parser Class Initialized
INFO - 2019-01-30 19:23:41 424098 --> Helper loaded: html_helper
INFO - 2019-01-30 19:23:41 430325 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:23:41 431590 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:23:41 441353 --> Model Class Initialized
INFO - 2019-01-30 19:23:41 448092 --> Model Class Initialized
INFO - 2019-01-30 13:53:41 457315 --> Config Class Initialized
INFO - 2019-01-30 13:53:41 457503 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:41 460340 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:41 460414 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:41 461231 --> URI Class Initialized
DEBUG - 2019-01-30 13:53:41 462532 --> No URI present. Default controller set.
INFO - 2019-01-30 13:53:41 462601 --> Router Class Initialized
INFO - 2019-01-30 13:53:41 463982 --> Output Class Initialized
INFO - 2019-01-30 13:53:41 465004 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:41 466078 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:41 466146 --> Input Class Initialized
INFO - 2019-01-30 13:53:41 466512 --> Language Class Initialized
INFO - 2019-01-30 13:53:41 471118 --> Loader Class Initialized
INFO - 2019-01-30 13:53:41 472038 --> Helper loaded: url_helper
INFO - 2019-01-30 13:53:41 472537 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:23:41 477993 --> Database Driver Class Initialized
INFO - 2019-01-30 19:23:41 482834 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:23:41 483642 --> Controller Class Initialized
INFO - 2019-01-30 19:23:41 484019 --> Parser Class Initialized
INFO - 2019-01-30 19:23:41 484632 --> Helper loaded: html_helper
INFO - 2019-01-30 19:23:41 485282 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:23:41 487065 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 513508 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:23:41 515379 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:23:41 518642 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:23:41 518878 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
DEBUG - 2019-01-30 19:23:41 522125 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:23:41 524064 --> Model Class Initialized
INFO - 2019-01-30 19:23:41 524599 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 524930 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
DEBUG - 2019-01-30 19:23:41 525459 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
DEBUG - 2019-01-30 19:23:41 525758 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
INFO - 2019-01-30 19:23:41 526083 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 526633 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:23:41 540961 --> Cache: Failed to initialize APC; extension not loaded/enabled?
ERROR - 2019-01-30 19:23:41 541472 --> Cache: Failed to initialize APC; extension not loaded/enabled?
ERROR - 2019-01-30 19:23:41 541934 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:23:41 549952 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:23:41 550060 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-01-30 19:23:41 550790 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:23:41 550894 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-01-30 19:23:41 551923 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:23:41 552026 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
ERROR - 2019-01-30 19:23:41 556225 --> Severity: Warning --> unlink(/home/hzswn06npic1/public_html/bdeals/application/cache/bd_cache_country): No such file or directory /home/hzswn06npic1/public_html/bdeals/system/libraries/Cache/drivers/Cache_file.php 279
DEBUG - 2019-01-30 19:23:41 559242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 559811 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 561503 --> Severity: Warning --> unlink(/home/hzswn06npic1/public_html/bdeals/application/cache/bd_cache_state): No such file or directory /home/hzswn06npic1/public_html/bdeals/system/libraries/Cache/drivers/Cache_file.php 279
DEBUG - 2019-01-30 19:23:41 562283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 562805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 565226 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 569751 --> Severity: Warning --> unlink(/home/hzswn06npic1/public_html/bdeals/application/cache/bd_cache_city): No such file or directory /home/hzswn06npic1/public_html/bdeals/system/libraries/Cache/drivers/Cache_file.php 279
DEBUG - 2019-01-30 19:23:41 573314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 579143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 580457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 583085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 583482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 584103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 584816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 587661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 588298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 589544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 591748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 594743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 595093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 595715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 596818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 597186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 597836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 606250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 606642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 607243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 607826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 610699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 611053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 611675 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 612158 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 612289 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 612495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 616050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 616400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 617032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 617599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 620585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 620929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 621535 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 627074 --> Config Class Initialized
INFO - 2019-01-30 13:53:41 627341 --> Hooks Class Initialized
ERROR - 2019-01-30 19:23:41 627660 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 627791 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 627983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 631310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 631683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 632281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 632716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 636356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 636749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 637365 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 638262 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 638403 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 638633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 641931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 642297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:53:41 644669 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:41 644782 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:41 646043 --> URI Class Initialized
DEBUG - 2019-01-30 13:53:41 648086 --> No URI present. Default controller set.
INFO - 2019-01-30 13:53:41 648191 --> Router Class Initialized
DEBUG - 2019-01-30 19:23:41 648710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 652369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 652780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 653404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 655298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 658936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 659307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 659954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 660212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 660763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 663670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 664036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 664678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 665185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 668405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 668790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 669403 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 671709 --> Output Class Initialized
INFO - 2019-01-30 13:53:41 673353 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:41 675029 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:41 675134 --> Input Class Initialized
DEBUG - 2019-01-30 19:23:41 675697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 678706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 679068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 679713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 680205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 682754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 683120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 683762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 684227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 689356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 689748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 690376 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 690949 --> Language Class Initialized
INFO - 2019-01-30 13:53:41 694194 --> Loader Class Initialized
DEBUG - 2019-01-30 19:23:41 695765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 699017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 699384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 700051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 700599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 703722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 704083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 704703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 707607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 707973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 708627 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 713582 --> Helper loaded: url_helper
INFO - 2019-01-30 13:53:41 714317 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 19:23:41 718728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 722084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 722970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 723539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 726721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 727088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 727683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 730693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 731062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 731734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 736489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 737504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 740797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 744206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 744591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 745285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 745692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 748716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 749070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 750212 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:41 752805 --> Database Driver Class Initialized
INFO - 2019-01-30 13:53:41 755934 --> Config Class Initialized
INFO - 2019-01-30 13:53:41 756311 --> Hooks Class Initialized
DEBUG - 2019-01-30 19:23:41 756836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 760796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 761151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:53:41 766275 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:41 766382 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:41 767724 --> URI Class Initialized
DEBUG - 2019-01-30 19:23:41 769062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 770807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 771347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 775213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 775998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 779834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 780333 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:41 783771 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-01-30 19:23:41 784738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:53:41 790282 --> No URI present. Default controller set.
INFO - 2019-01-30 13:53:41 790396 --> Router Class Initialized
INFO - 2019-01-30 19:23:41 793183 --> Controller Class Initialized
INFO - 2019-01-30 19:23:41 794018 --> Parser Class Initialized
INFO - 2019-01-30 19:23:41 795095 --> Helper loaded: html_helper
INFO - 2019-01-30 19:23:41 796077 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
DEBUG - 2019-01-30 19:23:41 796771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 797983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 799705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 800590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 801033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 801898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 802460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 806054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 806910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 810764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 811237 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 811816 --> Output Class Initialized
INFO - 2019-01-30 13:53:41 813791 --> Security Class Initialized
INFO - 2019-01-30 19:23:41 818464 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 820717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 823770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 824124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 824877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 825373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 826107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:53:41 826385 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:41 826508 --> Input Class Initialized
INFO - 2019-01-30 13:53:41 827049 --> Language Class Initialized
DEBUG - 2019-01-30 19:23:41 831119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 832043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 835635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 837667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 837924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 838393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 838749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 840658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 840910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 841377 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:53:41 842015 --> Loader Class Initialized
INFO - 2019-01-30 13:53:41 842930 --> Helper loaded: url_helper
INFO - 2019-01-30 13:53:41 843415 --> Helper loaded: utility_helper
ERROR - 2019-01-30 19:23:41 846540 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 846637 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 846760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 848529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 848778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 849260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 852035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 852303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 852822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 853537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 855545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 855792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 856251 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:41 859041 --> Database Driver Class Initialized
ERROR - 2019-01-30 19:23:41 859453 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 859546 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 859673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 861371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 861624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 862082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 862385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 864245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 864504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 864964 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 865237 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 865324 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 865449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 867125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 867363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 867836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 869673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 871498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 871741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 872193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 872524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 874342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 874598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 875055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 875375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 877149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 877388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 877855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 878201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 879919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 880160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 880629 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:41 882939 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:23:41 883744 --> Controller Class Initialized
INFO - 2019-01-30 19:23:41 884130 --> Parser Class Initialized
INFO - 2019-01-30 19:23:41 884722 --> Helper loaded: html_helper
INFO - 2019-01-30 19:23:41 885358 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
DEBUG - 2019-01-30 19:23:41 886569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 888510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 888751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 889204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 889547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 891376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 891622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 892064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 892368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 896689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 896931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 897382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 898514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 904414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 906831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 907205 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:23:41 908782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 909254 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:41 909440 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 910933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 912417 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:23:41 912842 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:41 913248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 913502 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:23:41 915313 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:23:41 916409 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:23:41 916510 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:23:41 917632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 917855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 919663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 920058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 921571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 921787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 922163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 922418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 922914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 924936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 926481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 926702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 927084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 927719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 930414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 930671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 931129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 931471 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:23:41 934636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 934956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 935448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 935842 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:41 936486 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:41 936579 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:41 936700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 938517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 938744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 939141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 939414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 939702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 939992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 940232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 940483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 940743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 940989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 943095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 943829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 945322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 945616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 946162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 946708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 947242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 947782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 948312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 948852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 949379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 949923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 950459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 950987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 951519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 952045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 952579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 953104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 953648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 954171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 954706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 955231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 955761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 956291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 956825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 957354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 957896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 958427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 958687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 958913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 959134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 959352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 959583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 959806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 960042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 960803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 961291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 961740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 962177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 962625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 963059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 963526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 963772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 964006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 964232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 964595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 964818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 965054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 965570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 965811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 966043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 966280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 967060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 967576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 968015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 968462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 968902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 969557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 970381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 970992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 972127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 972664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 973109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 973592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 974035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 974488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 974934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 975263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 977499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 977740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 978144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 978465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 979058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 979324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 979829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 980078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 980531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 980789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 981358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 981635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 983236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 983481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 983895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 984138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 984595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 984848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 985294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 985553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 985995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 986238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 986691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 986933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 987369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 987622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 988065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 988329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 988581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 989022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 989272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 991344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 991605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 992083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 992332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 992791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 993038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 993505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 993767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 995409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 995644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 996054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 996299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 996756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 997024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 997278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 997531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 999191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 999453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:41 999933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 000186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 002367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 002638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 003185 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:23:42 003648 --> Model Class Initialized
DEBUG - 2019-01-30 19:23:42 003884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 004139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 004342 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:23:42 013524 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:23:42 016376 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:23:42 016555 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:23:42 020721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 024657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 028692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 037234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 037869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 041379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 041636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 042061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 043344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 043623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 044130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 044542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 046174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 046410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 046844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 048064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 048325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 048832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 049103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 049442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 050009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 050673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 051084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 052617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 052833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 053210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 053550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 055427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 055675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 056154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 056484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 058629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 058876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 059360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 059691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 061646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 061880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 062314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 062663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 064743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 064990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 065483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 065845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 067684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 067904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 068284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 068598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 070560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 070807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 071285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 071609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 073522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 073762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 074240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 074563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 076432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 076940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 077893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 078439 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:42 082108 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:42 082231 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:42 082395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 084922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 085210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 085721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 086721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 087044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 087896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 088531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 092659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 095612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 095927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 096611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 098831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 099138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 099757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 100677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 103322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 103636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 104191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 104722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 108500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 109026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 110295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 110735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 112612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 112920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 113511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 114008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 116605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 116918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 118127 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:42 118563 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:42 118680 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:42 118834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 121325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 121644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 122672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 125890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 126221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 127160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 127520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 127966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 128686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 129220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 132384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 132728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 133304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 133641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 136250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 136683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 137341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 137682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 140842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 141172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 141488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 145508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 145859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 146764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 149578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 149967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 152092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 155045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 155363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 155724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 160788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 163836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 164134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 164938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 165338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 165981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 168986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 169341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 169914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 170428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 173465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 173780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 174755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 176004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 176350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 177930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 179730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 183146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 183651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 185015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 185674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 189289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 189719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 194196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 194943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 199126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 199703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 203912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 204940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 205698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 206355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 207468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 207837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 208427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 211916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 212388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 213654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 217437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 217895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 218429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 219067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 220143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 220519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 221735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 222081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 226213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 226713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 230380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 233184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 234071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 234435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 238538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 239013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 239432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 239783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 240119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 241365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 241977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 245647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 246081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 246679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 247205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 250983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 251646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 252537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 253066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 253616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 257319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 257623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 258138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 261554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 262012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 262622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 263433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 263922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 264236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 265228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 265739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 266225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 269469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 269918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 270625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 271306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 272208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 272743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 273226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 276484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 276943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 277628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 278418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 278898 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 279387 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:23:42 280488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 280977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 284188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 284677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 285633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 286272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 286746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 287220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 290452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 290904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 291621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 294351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 296369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 297343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 298494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 299418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 300259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 301100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 301959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 302838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 303704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 303982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 304265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 304774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 308085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 308578 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 309681 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:23:42 312891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 314858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 318186 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 318958 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
DEBUG - 2019-01-30 19:23:42 319885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 320384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 321388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 321918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 325360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 325829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 326626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 327472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 327795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 328269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 329118 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 330012 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:23:42 333647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 334523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 336013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 336496 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 349047 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:42 349186 --> Total execution time: 0.8839
DEBUG - 2019-01-30 19:23:42 357939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 358561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 359643 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:23:42 360133 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:23:42 360290 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:23:42 360522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 364195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 364701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 369669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 373342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 373816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 375698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 378015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 379501 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 380455 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:23:42 391803 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:42 391943 --> Total execution time: 1.0374
DEBUG - 2019-01-30 19:23:42 400866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 401935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 403189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 407516 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 408319 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
DEBUG - 2019-01-30 19:23:42 408699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 412255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 412734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 414000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 418133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 421797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 422269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 423197 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 433285 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:42 433440 --> Total execution time: 1.1603
DEBUG - 2019-01-30 19:23:42 442811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 447765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 451442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 451917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 452806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 453366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 457129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 457614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 458529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 459091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 462378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 462845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 463723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 464216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 467478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 467947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 468871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 469392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 472640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 473090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 473963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 474519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 477808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 478265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 479187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 479717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 480165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 483453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 483920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 484855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 488040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 488508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 489373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 489697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 490427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 490923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 491187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 491869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 492556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 493233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 493922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 494611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 495282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 495980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 496675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 497345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 498071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 498745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 499434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 500554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 501493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 502330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 503227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 504090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 504941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 505811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 507023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 507551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 508435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 508953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 509943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 510463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 513710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 514167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 515054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 515561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 516486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 517000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 517271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 518121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 521604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 522075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 522964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 523458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 524305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 524832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 525197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 526129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 527080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 527945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 531481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 531935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 532919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 535641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 536113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 537003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 537580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 544651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 545114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 546030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 546551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 549786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 550246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 551124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 551623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 554855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 555305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 556232 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 556770 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:23:42 566014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 567836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 585288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 586735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 589704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 590197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 591130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 595658 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 596443 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
DEBUG - 2019-01-30 19:23:42 598954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 602298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 602775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 603714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 605376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 608697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 609160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 610083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 613218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 613696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 614583 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 620419 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:42 620573 --> Total execution time: 0.9722
DEBUG - 2019-01-30 19:23:42 634633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 638345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 638830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 639708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 640568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 643688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 644135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 645004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 645796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 648993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 649466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 650315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 651108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 654258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 654742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 655616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 656388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 659560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 660017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 660891 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 661678 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:23:42 664694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 666655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 667099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:23:42 670243 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:23:42 671011 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:23:42 679796 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:42 679934 --> Total execution time: 0.9358
INFO - 2019-01-30 13:53:43 755820 --> Config Class Initialized
INFO - 2019-01-30 13:53:43 755914 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:43 757122 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:43 757194 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:43 757916 --> URI Class Initialized
INFO - 2019-01-30 13:53:43 759346 --> Router Class Initialized
INFO - 2019-01-30 13:53:43 760668 --> Output Class Initialized
INFO - 2019-01-30 13:53:43 761676 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:43 762680 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:43 762749 --> Input Class Initialized
INFO - 2019-01-30 13:53:43 763068 --> Language Class Initialized
INFO - 2019-01-30 13:53:43 773915 --> Loader Class Initialized
INFO - 2019-01-30 13:53:43 774677 --> Helper loaded: url_helper
INFO - 2019-01-30 13:53:43 775080 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:23:43 780020 --> Database Driver Class Initialized
INFO - 2019-01-30 19:23:43 783401 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:23:43 784143 --> Controller Class Initialized
ERROR - 2019-01-30 19:23:43 784617 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 19:23:43 785026 --> Final output sent to browser
DEBUG - 2019-01-30 19:23:43 785090 --> Total execution time: 0.0302
INFO - 2019-01-30 13:53:44 957946 --> Config Class Initialized
INFO - 2019-01-30 13:53:44 958081 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:44 960131 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:44 960211 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:44 961369 --> URI Class Initialized
INFO - 2019-01-30 13:53:44 965573 --> Router Class Initialized
INFO - 2019-01-30 13:53:44 967823 --> Output Class Initialized
INFO - 2019-01-30 13:53:44 969491 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:44 971149 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:44 971242 --> Input Class Initialized
INFO - 2019-01-30 13:53:44 971709 --> Language Class Initialized
ERROR - 2019-01-30 13:53:44 972321 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:45 717817 --> Config Class Initialized
INFO - 2019-01-30 13:53:45 717914 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:45 719655 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:45 719728 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:45 720618 --> URI Class Initialized
INFO - 2019-01-30 13:53:45 723468 --> Router Class Initialized
INFO - 2019-01-30 13:53:45 725191 --> Output Class Initialized
INFO - 2019-01-30 13:53:45 726450 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:45 727608 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:45 727680 --> Input Class Initialized
INFO - 2019-01-30 13:53:45 727991 --> Language Class Initialized
ERROR - 2019-01-30 13:53:45 728604 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:46 590091 --> Config Class Initialized
INFO - 2019-01-30 13:53:46 590248 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:46 591490 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:46 591561 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:46 592236 --> URI Class Initialized
INFO - 2019-01-30 13:53:46 593919 --> Router Class Initialized
INFO - 2019-01-30 13:53:46 595186 --> Output Class Initialized
INFO - 2019-01-30 13:53:46 596164 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:46 597122 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:46 597192 --> Input Class Initialized
INFO - 2019-01-30 13:53:46 597524 --> Language Class Initialized
ERROR - 2019-01-30 13:53:46 598011 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:46 693723 --> Config Class Initialized
INFO - 2019-01-30 13:53:46 693814 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:46 694972 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:46 695041 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:46 695729 --> URI Class Initialized
INFO - 2019-01-30 13:53:46 697365 --> Router Class Initialized
INFO - 2019-01-30 13:53:46 698637 --> Output Class Initialized
INFO - 2019-01-30 13:53:46 699624 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:46 700577 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:46 700648 --> Input Class Initialized
INFO - 2019-01-30 13:53:46 700942 --> Language Class Initialized
ERROR - 2019-01-30 13:53:46 701432 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:46 805780 --> Config Class Initialized
INFO - 2019-01-30 13:53:46 805876 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:46 807054 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:46 807127 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:46 807995 --> URI Class Initialized
INFO - 2019-01-30 13:53:46 809803 --> Router Class Initialized
INFO - 2019-01-30 13:53:46 811608 --> Output Class Initialized
INFO - 2019-01-30 13:53:46 813278 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:46 815227 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:46 815332 --> Input Class Initialized
INFO - 2019-01-30 13:53:46 816127 --> Language Class Initialized
ERROR - 2019-01-30 13:53:46 817336 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:46 937995 --> Config Class Initialized
INFO - 2019-01-30 13:53:46 938127 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:46 940346 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:46 940459 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:46 941967 --> URI Class Initialized
INFO - 2019-01-30 13:53:46 945346 --> Router Class Initialized
INFO - 2019-01-30 13:53:46 947230 --> Output Class Initialized
INFO - 2019-01-30 13:53:46 948580 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:46 949632 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:46 949706 --> Input Class Initialized
INFO - 2019-01-30 13:53:46 950011 --> Language Class Initialized
ERROR - 2019-01-30 13:53:46 950699 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:47 044711 --> Config Class Initialized
INFO - 2019-01-30 13:53:47 044807 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:47 045979 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:47 046051 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:47 046749 --> URI Class Initialized
INFO - 2019-01-30 13:53:47 049035 --> Router Class Initialized
INFO - 2019-01-30 13:53:47 050826 --> Output Class Initialized
INFO - 2019-01-30 13:53:47 051831 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:47 052808 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:47 052879 --> Input Class Initialized
INFO - 2019-01-30 13:53:47 053180 --> Language Class Initialized
ERROR - 2019-01-30 13:53:47 053837 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:53:53 958041 --> Config Class Initialized
INFO - 2019-01-30 13:53:53 958513 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:53 962532 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:53 962683 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:53 964724 --> URI Class Initialized
INFO - 2019-01-30 13:53:53 974076 --> Router Class Initialized
INFO - 2019-01-30 13:53:53 977212 --> Output Class Initialized
INFO - 2019-01-30 13:53:53 979417 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:53 981574 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:53 981704 --> Input Class Initialized
INFO - 2019-01-30 13:53:53 982944 --> Language Class Initialized
ERROR - 2019-01-30 13:53:53 984558 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 13:53:54 037636 --> Config Class Initialized
INFO - 2019-01-30 13:53:54 037983 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:53:54 041050 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:53:54 041182 --> Utf8 Class Initialized
INFO - 2019-01-30 13:53:54 042937 --> URI Class Initialized
INFO - 2019-01-30 13:53:54 048227 --> Router Class Initialized
INFO - 2019-01-30 13:53:54 050961 --> Output Class Initialized
INFO - 2019-01-30 13:53:54 053076 --> Security Class Initialized
DEBUG - 2019-01-30 13:53:54 055315 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:53:54 055464 --> Input Class Initialized
INFO - 2019-01-30 13:53:54 056211 --> Language Class Initialized
ERROR - 2019-01-30 13:53:54 057209 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 13:54:00 044051 --> Config Class Initialized
INFO - 2019-01-30 13:54:00 044306 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:54:00 046257 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:54:00 046355 --> Utf8 Class Initialized
INFO - 2019-01-30 13:54:00 047729 --> URI Class Initialized
INFO - 2019-01-30 13:54:00 052062 --> Router Class Initialized
INFO - 2019-01-30 13:54:00 054373 --> Output Class Initialized
INFO - 2019-01-30 13:54:00 056104 --> Security Class Initialized
DEBUG - 2019-01-30 13:54:00 057877 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:54:00 057967 --> Input Class Initialized
INFO - 2019-01-30 13:54:00 058464 --> Language Class Initialized
ERROR - 2019-01-30 13:54:00 059233 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 13:56:45 436150 --> Config Class Initialized
INFO - 2019-01-30 13:56:45 436398 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:56:45 438066 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:56:45 438147 --> Utf8 Class Initialized
INFO - 2019-01-30 13:56:45 439260 --> URI Class Initialized
INFO - 2019-01-30 13:56:45 442770 --> Router Class Initialized
INFO - 2019-01-30 13:56:45 444695 --> Output Class Initialized
INFO - 2019-01-30 13:56:45 446065 --> Security Class Initialized
DEBUG - 2019-01-30 13:56:45 447510 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:56:45 447592 --> Input Class Initialized
INFO - 2019-01-30 13:56:45 448012 --> Language Class Initialized
ERROR - 2019-01-30 13:56:45 448681 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 13:58:30 547683 --> Config Class Initialized
INFO - 2019-01-30 13:58:30 547916 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:30 549608 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:30 549698 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:30 551671 --> URI Class Initialized
DEBUG - 2019-01-30 13:58:30 553301 --> No URI present. Default controller set.
INFO - 2019-01-30 13:58:30 553389 --> Router Class Initialized
INFO - 2019-01-30 13:58:30 555116 --> Output Class Initialized
INFO - 2019-01-30 13:58:30 556670 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:30 558355 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:30 558461 --> Input Class Initialized
INFO - 2019-01-30 13:58:30 558914 --> Language Class Initialized
INFO - 2019-01-30 13:58:30 561634 --> Loader Class Initialized
INFO - 2019-01-30 13:58:30 563472 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:30 564425 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:30 572958 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:30 579530 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:30 580663 --> Controller Class Initialized
INFO - 2019-01-30 19:28:30 581146 --> Parser Class Initialized
INFO - 2019-01-30 19:28:30 581866 --> Helper loaded: html_helper
INFO - 2019-01-30 19:28:30 582745 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:28:30 586529 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:30 600506 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:28:30 608453 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:28:30 609688 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:30 610948 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:28:30 617248 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:28:30 621876 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:28:30 622149 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:28:30 627677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 629614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 640110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 644026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 649955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 650434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 651187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 652312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 655198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 655692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 656413 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:30 658189 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:30 658353 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:30 658586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 661556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 661963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 662688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 663743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 666696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 667148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 667902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 668962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 671904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 672341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 673115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 674066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 677087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 677553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 678303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 679230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 682261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 682719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 683533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 684489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 687606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 688040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 688833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 689851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 692950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 693373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 694174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 695161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 698309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 698760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 699589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 700411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 703768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 704210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 705055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 706454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 710386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 710900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 711779 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:30 713076 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:30 713236 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:30 713468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 717077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 717561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 718481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 719825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 723532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 723994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 724864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 726083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 729669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 730132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 731002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 732189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 735583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 736033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 736923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 738090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 741498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 741950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 742824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 743984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 744920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 745829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 746728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 747618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 748521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 749407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 750303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 751198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 752089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 752974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 753896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 754781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 755661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 756556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 757477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 758761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 759713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 760541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 761347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 762166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 762996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 763849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 764961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 765902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 766869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 767736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 768677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 769522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 770503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 771344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 772281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 773135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 774090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 775011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 778925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 779393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 780317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 781461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 784961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 785480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 786391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 787564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 790997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 791472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 792371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 793502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 796880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 797348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 798269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 799412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 802822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 803287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 804219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 805334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 808789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 809262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 810256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 813522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 813980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 814863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 816180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 819753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 820231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 821119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 825750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 841624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 843168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 846323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 848311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 863383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 864943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 868320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 870621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 885416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 886912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 890147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 892271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 906266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 907769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 910804 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:30 913491 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:28:30 921892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 929601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 930927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:30 943891 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:30 946655 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:28:30 971868 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:30 972151 --> Total execution time: 0.4029
INFO - 2019-01-30 13:58:31 906374 --> Config Class Initialized
INFO - 2019-01-30 13:58:31 906733 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:31 909260 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:31 909404 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:31 911134 --> URI Class Initialized
INFO - 2019-01-30 13:58:31 917625 --> Router Class Initialized
INFO - 2019-01-30 13:58:31 920013 --> Output Class Initialized
INFO - 2019-01-30 13:58:31 921756 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:31 923507 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:31 923619 --> Input Class Initialized
INFO - 2019-01-30 13:58:31 924164 --> Language Class Initialized
ERROR - 2019-01-30 13:58:31 925019 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 13:58:32 406122 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 406469 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 408332 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 408456 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 409724 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 413753 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 415523 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 417926 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 419462 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 419563 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 419979 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 420638 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:32 492575 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 492949 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 494780 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 494936 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 496027 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 499363 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 501180 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 502541 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 503925 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 504012 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 505218 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 506215 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:32 681375 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 681549 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 685853 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 685985 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 687335 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 690644 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 693169 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 695103 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 697058 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 697190 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 697807 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 698760 --> 404 Page Not Found: Assets/js
INFO - 2019-01-30 13:58:32 805449 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 805567 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 807284 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 807374 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 808306 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 810834 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 812701 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 814006 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 816143 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 816428 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 817025 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 818037 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:32 881572 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 881707 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 884157 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 884422 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 886830 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 890942 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 893022 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 894540 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 897103 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 897211 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 897814 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 898998 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:32 931663 --> Config Class Initialized
INFO - 2019-01-30 13:58:32 931822 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:32 933976 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:32 934104 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:32 935483 --> URI Class Initialized
INFO - 2019-01-30 13:58:32 938724 --> Router Class Initialized
INFO - 2019-01-30 13:58:32 941174 --> Output Class Initialized
INFO - 2019-01-30 13:58:32 943146 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:32 945127 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:32 945255 --> Input Class Initialized
INFO - 2019-01-30 13:58:32 945885 --> Language Class Initialized
ERROR - 2019-01-30 13:58:32 946846 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:33 000107 --> Config Class Initialized
INFO - 2019-01-30 13:58:33 000231 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:33 001954 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:33 002051 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:33 003057 --> URI Class Initialized
INFO - 2019-01-30 13:58:33 005527 --> Router Class Initialized
INFO - 2019-01-30 13:58:33 007801 --> Output Class Initialized
INFO - 2019-01-30 13:58:33 009465 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:33 011636 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:33 011735 --> Input Class Initialized
INFO - 2019-01-30 13:58:33 012177 --> Language Class Initialized
ERROR - 2019-01-30 13:58:33 012881 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:33 050628 --> Config Class Initialized
INFO - 2019-01-30 13:58:33 050786 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:33 052895 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:33 053024 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:33 054305 --> URI Class Initialized
INFO - 2019-01-30 13:58:33 057393 --> Router Class Initialized
INFO - 2019-01-30 13:58:33 059827 --> Output Class Initialized
INFO - 2019-01-30 13:58:33 061813 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:33 063750 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:33 063882 --> Input Class Initialized
INFO - 2019-01-30 13:58:33 064507 --> Language Class Initialized
ERROR - 2019-01-30 13:58:33 065473 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:33 176245 --> Config Class Initialized
INFO - 2019-01-30 13:58:33 176400 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:33 178519 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:33 178653 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:33 179903 --> URI Class Initialized
INFO - 2019-01-30 13:58:33 182323 --> Router Class Initialized
INFO - 2019-01-30 13:58:33 184739 --> Output Class Initialized
INFO - 2019-01-30 13:58:33 186676 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:33 188637 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:33 188766 --> Input Class Initialized
INFO - 2019-01-30 13:58:33 189354 --> Language Class Initialized
INFO - 2019-01-30 13:58:33 197277 --> Loader Class Initialized
INFO - 2019-01-30 13:58:33 198930 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:33 199799 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:33 210686 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:33 218420 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:33 219789 --> Controller Class Initialized
ERROR - 2019-01-30 19:28:33 220626 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 19:28:33 221435 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:33 221560 --> Total execution time: 0.0470
INFO - 2019-01-30 13:58:41 009804 --> Config Class Initialized
INFO - 2019-01-30 13:58:41 010046 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:41 011725 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:41 011832 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:41 013659 --> URI Class Initialized
INFO - 2019-01-30 13:58:41 017395 --> Router Class Initialized
INFO - 2019-01-30 13:58:41 020291 --> Output Class Initialized
INFO - 2019-01-30 13:58:41 021668 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:41 023087 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:41 023175 --> Input Class Initialized
INFO - 2019-01-30 13:58:41 023619 --> Language Class Initialized
ERROR - 2019-01-30 13:58:41 024291 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 13:58:50 401274 --> Config Class Initialized
INFO - 2019-01-30 13:58:50 401624 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:50 403659 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:50 403748 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:50 404818 --> URI Class Initialized
DEBUG - 2019-01-30 13:58:50 406831 --> No URI present. Default controller set.
INFO - 2019-01-30 13:58:50 406920 --> Router Class Initialized
INFO - 2019-01-30 13:58:50 409095 --> Output Class Initialized
INFO - 2019-01-30 13:58:50 410836 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:50 413106 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:50 413233 --> Input Class Initialized
INFO - 2019-01-30 13:58:50 413898 --> Language Class Initialized
INFO - 2019-01-30 13:58:50 418960 --> Loader Class Initialized
INFO - 2019-01-30 13:58:50 421937 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:50 423474 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:50 432064 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:50 440838 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:50 442210 --> Controller Class Initialized
INFO - 2019-01-30 19:28:50 442837 --> Parser Class Initialized
INFO - 2019-01-30 19:28:50 443670 --> Helper loaded: html_helper
INFO - 2019-01-30 19:28:50 445130 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:28:50 447702 --> Model Class Initialized
INFO - 2019-01-30 13:58:50 459045 --> Config Class Initialized
INFO - 2019-01-30 13:58:50 459290 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:50 461368 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:50 461472 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:50 462738 --> URI Class Initialized
DEBUG - 2019-01-30 13:58:50 464812 --> No URI present. Default controller set.
INFO - 2019-01-30 13:58:50 464903 --> Router Class Initialized
INFO - 2019-01-30 13:58:50 469003 --> Output Class Initialized
INFO - 2019-01-30 13:58:50 471425 --> Security Class Initialized
DEBUG - 2019-01-30 19:28:50 472193 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 13:58:50 476089 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:50 476177 --> Input Class Initialized
INFO - 2019-01-30 13:58:50 476661 --> Language Class Initialized
DEBUG - 2019-01-30 19:28:50 478007 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:28:50 478513 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:50 479170 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:28:50 481935 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:28:50 484038 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:28:50 484206 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-01-30 13:58:50 486850 --> Loader Class Initialized
INFO - 2019-01-30 13:58:50 487934 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:50 488533 --> Helper loaded: utility_helper
DEBUG - 2019-01-30 19:28:50 495076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 496941 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:50 505503 --> Database Driver Class Initialized
DEBUG - 2019-01-30 19:28:50 509584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 511641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 514038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 514339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 514919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 516860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 518939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 519221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 519743 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:50 521248 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:50 521364 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:50 521594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 523677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 523955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 524559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 527667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 530464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 530993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 531624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 532382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 535526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 535926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 536504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 537250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 539365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 539670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 540173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 541105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 544058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 544586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 545178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 545989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 548839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 549140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 551562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 552418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 554686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 554979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 555516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 556431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 558854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 559690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 560993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 562064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 567202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 567914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 568627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 569416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 572099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 572530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 573194 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:50 574106 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:50 574342 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:50 574510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 577606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 578221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 579220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 580194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 585833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 586671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 587672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 588695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 592490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 592863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 593441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 594331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 597368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 598083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 599170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 600152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 603044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 603715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 604631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 606393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 608959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 609769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 610812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 611577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 612355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 613251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 614026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 614883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 615638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 616344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 617089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 617852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 618616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 619379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 620100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 621231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 622068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 622642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 623183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 624089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 626709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 633301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 635294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 638353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 641560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 644193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 645085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 646142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 647223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 648209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 649221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 649810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 650576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 651838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 655210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 655550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 656467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 657453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 660634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 660960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 661704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 662674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 664963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 665508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 666251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 667103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 670653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 671027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 671947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 672872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 675712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 676027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 676678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 677823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 680588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 681132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 682008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 686064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 686893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 687676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 689030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 692337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 692677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 694025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 695220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 697854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 698164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 698765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 699898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 702649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 702990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 707648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 710820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 718336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 719175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 720870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 722511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 727747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 728118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 728883 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:50 730237 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:28:50 733583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 736251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 736771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 739507 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:50 740080 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:28:50 748548 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:50 748720 --> Total execution time: 0.3411
INFO - 2019-01-30 19:28:50 749233 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:50 751141 --> Controller Class Initialized
INFO - 2019-01-30 19:28:50 751980 --> Parser Class Initialized
INFO - 2019-01-30 19:28:50 753479 --> Helper loaded: html_helper
INFO - 2019-01-30 19:28:50 755075 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:28:50 763372 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:50 776581 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:28:50 782038 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:28:50 782588 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:50 783109 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:28:50 786973 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:28:50 789735 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:28:50 789972 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:28:50 793178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 793639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 798226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 799424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 805149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 805963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 807363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 808501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 812573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 812865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 813363 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:50 814785 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:50 814908 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:50 815057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 817287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 817671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 818670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 819278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 822118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 822738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 823640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 824419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 828150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 828660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 829703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 830455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 834160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 835242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 836206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 836926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 839922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 840303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 841171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 841882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 844815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 845217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 846036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 846709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 849764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 850146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 850888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 851555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 855035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 855442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 856236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 856897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 858930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 859318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 859863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 860470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 863090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 863555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 864209 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:50 864800 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:50 864893 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:50 865009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 866832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 867113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 867765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 868355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 870281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 870548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 871010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 871582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 874747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 875406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 876270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 877006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 880811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 881238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 881848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 882385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 884146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 884705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 885189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 885699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 886163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 886678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 887118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 887612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 888216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 888674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 889106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 889542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 889981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 890415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 890990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 891448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 892004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 892782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 893605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 894916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 896258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 897275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 898328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 899193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 899673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 900142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 900763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 901278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 901820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 902878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 903625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 904849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 905600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 906949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 907708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 908981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 909768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 910554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 913120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 913466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 914588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 915174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 917773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 918358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 919176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 919789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 922631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 923007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 923744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 924223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 926677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 927098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 927711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 928199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 933325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 933804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 934824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 935518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 937762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 938014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 938514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 940820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 941142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 941670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 942178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 944088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 944374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 945657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 946285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 949583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 949939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 950418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 950963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 952862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 953475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 954382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 955032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 958354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 958626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 959089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 959589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 961225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 961807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 963221 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:50 963777 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:28:50 966418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 968835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 969233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:50 972222 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:50 972686 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:28:50 980360 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:50 980488 --> Total execution time: 0.5157
INFO - 2019-01-30 13:58:51 917656 --> Config Class Initialized
INFO - 2019-01-30 13:58:51 917820 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:51 920017 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:51 920130 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:51 921634 --> URI Class Initialized
INFO - 2019-01-30 13:58:51 924390 --> Router Class Initialized
INFO - 2019-01-30 13:58:51 926676 --> Output Class Initialized
INFO - 2019-01-30 13:58:51 928030 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:51 929102 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:51 929181 --> Input Class Initialized
INFO - 2019-01-30 13:58:51 929554 --> Language Class Initialized
INFO - 2019-01-30 13:58:51 933887 --> Loader Class Initialized
INFO - 2019-01-30 13:58:51 935519 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:51 935969 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:51 942004 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:51 946758 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:51 947541 --> Controller Class Initialized
ERROR - 2019-01-30 19:28:51 948123 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 19:28:51 948581 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:51 948656 --> Total execution time: 0.0330
INFO - 2019-01-30 13:58:52 571923 --> Config Class Initialized
INFO - 2019-01-30 13:58:52 572030 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:52 573354 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:52 573445 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:52 574198 --> URI Class Initialized
DEBUG - 2019-01-30 13:58:52 575541 --> No URI present. Default controller set.
INFO - 2019-01-30 13:58:52 575623 --> Router Class Initialized
INFO - 2019-01-30 13:58:52 577068 --> Output Class Initialized
INFO - 2019-01-30 13:58:52 578246 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:52 579385 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:52 579482 --> Input Class Initialized
INFO - 2019-01-30 13:58:52 579833 --> Language Class Initialized
INFO - 2019-01-30 13:58:52 581975 --> Loader Class Initialized
INFO - 2019-01-30 13:58:52 582849 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:52 583303 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:52 588906 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:52 592072 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:52 592904 --> Controller Class Initialized
INFO - 2019-01-30 19:28:52 593334 --> Parser Class Initialized
INFO - 2019-01-30 19:28:52 593933 --> Helper loaded: html_helper
INFO - 2019-01-30 19:28:52 594604 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:28:52 596426 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:52 604605 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:28:52 608386 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:28:52 608867 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:52 609368 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:28:52 611310 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:28:52 612432 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:28:52 612554 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:28:52 615151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 616451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 623076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 624391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 626234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 626528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 626991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 627688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 629432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 629694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 630139 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:52 631095 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:52 631201 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:52 631330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 633114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 633368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 633829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 634414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 636255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 636547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 637015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 637583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 639393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 639683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 640151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 640701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 642554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 642834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 643304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 643860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 645756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 646028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 646522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 647088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 648991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 649265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 649766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 650315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 652220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 652504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 652997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 653553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 655459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 655729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 656233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 656825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 658781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 659054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 659584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 660147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 662115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 662393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 662929 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:52 663518 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:52 663619 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:52 663746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 665695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 665970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 666510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 667094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 669047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 669322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 669858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 670416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 672333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 672625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 673150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 673753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 675724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 675997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 676537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 677191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 679116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 679393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 679934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 680553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 681162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 681746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 682343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 682939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 683515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 684078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 684649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 685277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 685856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 687745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 688716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 689575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 691375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 692055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 692759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 693833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 694777 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:52 705897 --> Config Class Initialized
INFO - 2019-01-30 13:58:52 706002 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:52 707386 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:52 707470 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:52 708168 --> URI Class Initialized
DEBUG - 2019-01-30 13:58:52 709475 --> No URI present. Default controller set.
INFO - 2019-01-30 13:58:52 709548 --> Router Class Initialized
INFO - 2019-01-30 13:58:52 710854 --> Output Class Initialized
INFO - 2019-01-30 13:58:52 711865 --> Security Class Initialized
DEBUG - 2019-01-30 19:28:52 712604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 713543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 714008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 714498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 715559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:58:52 716911 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:52 716984 --> Input Class Initialized
INFO - 2019-01-30 13:58:52 717310 --> Language Class Initialized
INFO - 2019-01-30 13:58:52 719265 --> Loader Class Initialized
INFO - 2019-01-30 13:58:52 720102 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:52 720550 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:52 725769 --> Database Driver Class Initialized
DEBUG - 2019-01-30 19:28:52 726067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 726803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 727691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 728275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 728954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 729407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 730072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 730551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 731192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 731657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 732325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 733047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 735317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 735611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 736098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 737267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 738965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 739212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 739897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 740679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 743634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 744026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 744838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 745632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 748819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 749236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 750086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 750881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 753870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 754270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 755095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 755868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 758912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 759315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 760155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 763108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 763516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 764312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 765189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 768275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 768697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 769494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 770303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 773228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 773633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 774410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 775221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 777959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 778211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 778717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 779499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 781177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 781428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 781888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 782687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 784322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 784578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 785034 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:52 785829 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:28:52 787585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 788610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 788849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 790535 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:52 790935 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 19:28:52 798585 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:52 798664 --> Total execution time: 0.2208
INFO - 2019-01-30 19:28:52 798916 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:52 799763 --> Controller Class Initialized
INFO - 2019-01-30 19:28:52 800168 --> Parser Class Initialized
INFO - 2019-01-30 19:28:52 800743 --> Helper loaded: html_helper
INFO - 2019-01-30 19:28:52 801393 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-30 19:28:52 803193 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:52 820048 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-30 19:28:52 824809 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-30'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-30 19:28:52 825233 --> Model Class Initialized
DEBUG - 2019-01-30 19:28:52 825700 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-30 19:28:52 827539 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-30 19:28:52 828566 --> Helper loaded: file_helper
DEBUG - 2019-01-30 19:28:52 828660 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-30 19:28:52 829802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 830025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 831857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 832247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 833748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 833961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 834331 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:52 841476 --> Config Class Initialized
INFO - 2019-01-30 13:58:52 841593 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:52 843498 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:52 843621 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:52 844671 --> URI Class Initialized
DEBUG - 2019-01-30 19:28:52 845736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 848546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 848885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 849495 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:52 851018 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:52 851156 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:52 851366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 853787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 854135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 854746 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:52 857647 --> Router Class Initialized
INFO - 2019-01-30 13:58:52 859658 --> Output Class Initialized
INFO - 2019-01-30 13:58:52 861171 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:52 862687 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:52 862791 --> Input Class Initialized
INFO - 2019-01-30 13:58:52 863249 --> Language Class Initialized
ERROR - 2019-01-30 13:58:52 864000 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 19:28:52 864881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 875984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 877146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 879482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 881717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 884259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 884639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 885240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 886044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 888473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 888817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 889456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 890213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 892668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 893011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 893651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 894413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 896884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 897234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 897872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 898634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 901209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 901587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 902235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 903059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 905592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 905945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 906620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 907387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 909931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 910284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 910962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 911739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 914232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 914601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 915254 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-30 19:28:52 916003 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-30 19:28:52 916132 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-30 19:28:52 916296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 918771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 919120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 919795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 920572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 924180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 924602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 925281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 926246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 928790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 929146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 929843 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:52 940045 --> Config Class Initialized
INFO - 2019-01-30 13:58:52 940304 --> Hooks Class Initialized
DEBUG - 2019-01-30 19:28:52 940650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 943454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 943813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:52 944530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 13:58:53 435928 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:53 436228 --> Utf8 Class Initialized
DEBUG - 2019-01-30 19:28:53 437057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 440855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 441319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 442184 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:53 444410 --> URI Class Initialized
INFO - 2019-01-30 13:58:53 449126 --> Router Class Initialized
DEBUG - 2019-01-30 19:28:53 450699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 451903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 452964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 454036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 455068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 456094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 457123 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:53 457704 --> Output Class Initialized
DEBUG - 2019-01-30 19:28:53 458174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 459198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 460257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 461302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 462353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 463393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 464433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 465478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 466525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 467664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 468611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 469449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 470268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 471113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 471954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 472809 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 13:58:53 473444 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:53 475730 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:53 475862 --> Input Class Initialized
INFO - 2019-01-30 13:58:53 476519 --> Language Class Initialized
ERROR - 2019-01-30 13:58:53 477549 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-30 19:28:53 480082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 481101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 482078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 482945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 483875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 484740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 485704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 486562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 487514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 488347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 489331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 490262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 493793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 494246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 495153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 496095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 499314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 499788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 500699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 501626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 504771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 505215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 506117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 507046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 510279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 510766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 511677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 512614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 515769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 516218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 517128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 518053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 521214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 521696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 522628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 525770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 526213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 527089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 528064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 531281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 531765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 532655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 533668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 536798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 537245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 538115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 539067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 542330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 542820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 543709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 544677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 547821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 548275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 549148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 550111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 553291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 553767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 554652 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:53 555628 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-30 19:28:53 558325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 560266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 560739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-30 19:28:53 563971 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-30 19:28:53 564877 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-30 13:58:53 576289 --> Config Class Initialized
INFO - 2019-01-30 13:58:53 576405 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:53 577841 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:53 577927 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:53 579546 --> URI Class Initialized
INFO - 2019-01-30 13:58:53 581702 --> Router Class Initialized
INFO - 2019-01-30 13:58:53 584220 --> Output Class Initialized
INFO - 2019-01-30 19:28:53 590637 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:53 590739 --> Total execution time: 0.8649
INFO - 2019-01-30 13:58:53 603558 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:53 604795 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:53 604881 --> Input Class Initialized
INFO - 2019-01-30 13:58:53 605622 --> Language Class Initialized
ERROR - 2019-01-30 13:58:53 606654 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:53 639245 --> Config Class Initialized
INFO - 2019-01-30 13:58:53 639516 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:53 641547 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:53 641633 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:53 642731 --> URI Class Initialized
INFO - 2019-01-30 13:58:53 646313 --> Router Class Initialized
INFO - 2019-01-30 13:58:53 648859 --> Output Class Initialized
INFO - 2019-01-30 13:58:53 650171 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:53 651823 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:53 651910 --> Input Class Initialized
INFO - 2019-01-30 13:58:53 652343 --> Language Class Initialized
ERROR - 2019-01-30 13:58:53 653646 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:53 710051 --> Config Class Initialized
INFO - 2019-01-30 13:58:53 710298 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:53 711760 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:53 711846 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:53 713330 --> URI Class Initialized
INFO - 2019-01-30 13:58:53 715406 --> Router Class Initialized
INFO - 2019-01-30 13:58:53 717777 --> Output Class Initialized
INFO - 2019-01-30 13:58:53 719086 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:53 721317 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:53 721429 --> Input Class Initialized
INFO - 2019-01-30 13:58:53 721826 --> Language Class Initialized
ERROR - 2019-01-30 13:58:53 722415 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:54 986795 --> Config Class Initialized
INFO - 2019-01-30 13:58:54 987070 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:54 989583 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:54 989782 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:54 991255 --> URI Class Initialized
INFO - 2019-01-30 13:58:54 993758 --> Router Class Initialized
INFO - 2019-01-30 13:58:54 996660 --> Output Class Initialized
INFO - 2019-01-30 13:58:54 998214 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:54 999907 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:55 000009 --> Input Class Initialized
INFO - 2019-01-30 13:58:55 001336 --> Language Class Initialized
INFO - 2019-01-30 13:58:55 010185 --> Loader Class Initialized
INFO - 2019-01-30 13:58:55 011457 --> Helper loaded: url_helper
INFO - 2019-01-30 13:58:55 012120 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:28:55 021589 --> Database Driver Class Initialized
INFO - 2019-01-30 19:28:55 028316 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:28:55 029511 --> Controller Class Initialized
ERROR - 2019-01-30 19:28:55 030247 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-30 19:28:55 030955 --> Final output sent to browser
DEBUG - 2019-01-30 19:28:55 031054 --> Total execution time: 0.0461
INFO - 2019-01-30 13:58:55 950826 --> Config Class Initialized
INFO - 2019-01-30 13:58:55 950927 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:55 952131 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:55 952203 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:55 952970 --> URI Class Initialized
INFO - 2019-01-30 13:58:55 955777 --> Router Class Initialized
INFO - 2019-01-30 13:58:55 957129 --> Output Class Initialized
INFO - 2019-01-30 13:58:55 958259 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:55 959417 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:55 959502 --> Input Class Initialized
INFO - 2019-01-30 13:58:55 960104 --> Language Class Initialized
ERROR - 2019-01-30 13:58:55 961182 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 030741 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 030947 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 032295 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 032370 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 033256 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 035640 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 037015 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 038072 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 039221 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 039292 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 039671 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 040198 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 295877 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 296036 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 298261 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 298391 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 299756 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 303301 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 307090 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 309184 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 312140 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 312329 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 313256 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 314296 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 357485 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 357640 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 359755 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 359885 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 361219 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 364305 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 366656 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 368495 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 370313 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 370466 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 371032 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 371937 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 420121 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 420231 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 422940 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 423079 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 424870 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 427184 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 429066 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 430421 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 431760 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 431847 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 432229 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 432847 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 478224 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 478369 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 480514 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 480633 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 481810 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 484072 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 486012 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 487988 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 489298 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 489383 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 489799 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 490366 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:58:56 530292 --> Config Class Initialized
INFO - 2019-01-30 13:58:56 530453 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:58:56 532852 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:58:56 532974 --> Utf8 Class Initialized
INFO - 2019-01-30 13:58:56 534395 --> URI Class Initialized
INFO - 2019-01-30 13:58:56 538449 --> Router Class Initialized
INFO - 2019-01-30 13:58:56 541152 --> Output Class Initialized
INFO - 2019-01-30 13:58:56 543167 --> Security Class Initialized
DEBUG - 2019-01-30 13:58:56 545248 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:58:56 545372 --> Input Class Initialized
INFO - 2019-01-30 13:58:56 545960 --> Language Class Initialized
ERROR - 2019-01-30 13:58:56 547084 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-30 13:59:00 069278 --> Config Class Initialized
INFO - 2019-01-30 13:59:00 069746 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:59:00 075304 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:59:00 075535 --> Utf8 Class Initialized
INFO - 2019-01-30 13:59:00 076955 --> URI Class Initialized
INFO - 2019-01-30 13:59:00 082968 --> Router Class Initialized
INFO - 2019-01-30 13:59:00 085778 --> Output Class Initialized
INFO - 2019-01-30 13:59:00 087831 --> Security Class Initialized
DEBUG - 2019-01-30 13:59:00 090610 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:59:00 090744 --> Input Class Initialized
INFO - 2019-01-30 13:59:00 091341 --> Language Class Initialized
ERROR - 2019-01-30 13:59:00 092359 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-30 13:59:15 713399 --> Config Class Initialized
INFO - 2019-01-30 13:59:15 713769 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:59:15 716229 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:59:15 716377 --> Utf8 Class Initialized
INFO - 2019-01-30 13:59:15 718058 --> URI Class Initialized
INFO - 2019-01-30 13:59:15 722696 --> Router Class Initialized
INFO - 2019-01-30 13:59:15 725406 --> Output Class Initialized
INFO - 2019-01-30 13:59:15 727432 --> Security Class Initialized
DEBUG - 2019-01-30 13:59:15 729473 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:59:15 729607 --> Input Class Initialized
INFO - 2019-01-30 13:59:15 730233 --> Language Class Initialized
INFO - 2019-01-30 13:59:15 744900 --> Loader Class Initialized
INFO - 2019-01-30 13:59:15 746586 --> Helper loaded: url_helper
INFO - 2019-01-30 13:59:15 747442 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:29:15 757822 --> Database Driver Class Initialized
INFO - 2019-01-30 19:29:15 766163 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:29:15 767647 --> Controller Class Initialized
INFO - 2019-01-30 19:29:15 781269 --> Model Class Initialized
DEBUG - 2019-01-30 19:29:15 792006 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 19:29:15 792213 --> Final output sent to browser
DEBUG - 2019-01-30 19:29:15 792309 --> Total execution time: 0.0810
INFO - 2019-01-30 13:59:17 617494 --> Config Class Initialized
INFO - 2019-01-30 13:59:17 617768 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:59:17 622503 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:59:17 622723 --> Utf8 Class Initialized
INFO - 2019-01-30 13:59:17 625572 --> URI Class Initialized
INFO - 2019-01-30 13:59:17 632961 --> Router Class Initialized
INFO - 2019-01-30 13:59:17 636847 --> Output Class Initialized
INFO - 2019-01-30 13:59:17 640717 --> Security Class Initialized
DEBUG - 2019-01-30 13:59:17 644330 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:59:17 644484 --> Input Class Initialized
INFO - 2019-01-30 13:59:17 645093 --> Language Class Initialized
INFO - 2019-01-30 13:59:17 649213 --> Loader Class Initialized
INFO - 2019-01-30 13:59:17 651241 --> Helper loaded: url_helper
INFO - 2019-01-30 13:59:17 652131 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:29:17 664702 --> Database Driver Class Initialized
INFO - 2019-01-30 19:29:17 672018 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:29:17 674520 --> Controller Class Initialized
INFO - 2019-01-30 19:29:17 683823 --> Model Class Initialized
DEBUG - 2019-01-30 19:29:17 686810 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 19:29:17 687021 --> Final output sent to browser
DEBUG - 2019-01-30 19:29:17 687136 --> Total execution time: 0.0736
INFO - 2019-01-30 13:59:17 800719 --> Config Class Initialized
INFO - 2019-01-30 13:59:17 800908 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:59:17 803349 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:59:17 803514 --> Utf8 Class Initialized
INFO - 2019-01-30 13:59:17 804792 --> URI Class Initialized
INFO - 2019-01-30 13:59:17 808022 --> Router Class Initialized
INFO - 2019-01-30 13:59:17 810415 --> Output Class Initialized
INFO - 2019-01-30 13:59:17 812288 --> Security Class Initialized
DEBUG - 2019-01-30 13:59:17 814640 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:59:17 814855 --> Input Class Initialized
INFO - 2019-01-30 13:59:17 815498 --> Language Class Initialized
INFO - 2019-01-30 13:59:17 819264 --> Loader Class Initialized
INFO - 2019-01-30 13:59:17 821837 --> Helper loaded: url_helper
INFO - 2019-01-30 13:59:17 822724 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:29:17 835798 --> Database Driver Class Initialized
INFO - 2019-01-30 19:29:17 845504 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:29:17 848563 --> Controller Class Initialized
INFO - 2019-01-30 19:29:17 858872 --> Model Class Initialized
DEBUG - 2019-01-30 19:29:17 862133 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 19:29:17 862354 --> Final output sent to browser
DEBUG - 2019-01-30 19:29:17 862498 --> Total execution time: 0.0636
INFO - 2019-01-30 13:59:17 962023 --> Config Class Initialized
INFO - 2019-01-30 13:59:17 962182 --> Hooks Class Initialized
DEBUG - 2019-01-30 13:59:17 964267 --> UTF-8 Support Enabled
INFO - 2019-01-30 13:59:17 964396 --> Utf8 Class Initialized
INFO - 2019-01-30 13:59:17 965809 --> URI Class Initialized
INFO - 2019-01-30 13:59:17 968880 --> Router Class Initialized
INFO - 2019-01-30 13:59:17 971195 --> Output Class Initialized
INFO - 2019-01-30 13:59:17 973022 --> Security Class Initialized
DEBUG - 2019-01-30 13:59:17 974868 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-30 13:59:17 974997 --> Input Class Initialized
INFO - 2019-01-30 13:59:17 975577 --> Language Class Initialized
INFO - 2019-01-30 13:59:17 981103 --> Loader Class Initialized
INFO - 2019-01-30 13:59:17 982515 --> Helper loaded: url_helper
INFO - 2019-01-30 13:59:17 983267 --> Helper loaded: utility_helper
INFO - 2019-01-30 19:29:17 992363 --> Database Driver Class Initialized
INFO - 2019-01-30 19:29:17 997142 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-30 19:29:17 998466 --> Controller Class Initialized
INFO - 2019-01-30 19:29:18 004926 --> Model Class Initialized
DEBUG - 2019-01-30 19:29:18 007539 --> User_model: validateCustomer2222: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = '']
INFO - 2019-01-30 19:29:18 007744 --> Final output sent to browser
DEBUG - 2019-01-30 19:29:18 007853 --> Total execution time: 0.0476
