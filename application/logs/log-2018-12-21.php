<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-21 10:42:00 071563 --> Config Class Initialized
INFO - 2018-12-21 10:42:00 071974 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:00 102827 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:00 110615 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:00 113079 --> URI Class Initialized
DEBUG - 2018-12-21 10:42:00 146059 --> No URI present. Default controller set.
INFO - 2018-12-21 10:42:00 157604 --> Router Class Initialized
INFO - 2018-12-21 10:42:00 187566 --> Output Class Initialized
INFO - 2018-12-21 10:42:00 195816 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:00 227757 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:00 243602 --> Input Class Initialized
INFO - 2018-12-21 10:42:00 244864 --> Language Class Initialized
INFO - 2018-12-21 10:42:00 294456 --> Loader Class Initialized
INFO - 2018-12-21 10:42:00 302490 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:00 319255 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:00 452140 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:00 507047 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:00 639668 --> Controller Class Initialized
INFO - 2018-12-21 16:12:00 643681 --> Parser Class Initialized
INFO - 2018-12-21 16:12:00 662705 --> Helper loaded: html_helper
INFO - 2018-12-21 16:12:00 674645 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-21 16:12:00 679145 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:00 704885 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-21 16:12:00 711314 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-21 16:12:00 719835 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:00 721344 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-21 16:12:00 765127 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:12:00 779859 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:12:00 790611 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:12:00 953046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 094315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 149635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 160079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 163675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 164568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 165287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 166202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 168024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 168292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 168732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 169380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 171138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 171384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 171849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 172494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 174180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 174437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 174897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 176800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 178642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 178903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 179339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 179965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 181767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 182028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 182483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 183099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 184900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 185161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 185622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 186474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 188314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 188590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 189204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 189899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 192174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 192456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 192928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 193641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 194181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 194726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 195270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 195810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 196327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 196892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 197438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 197959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 201622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 202645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 203433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 204478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 205301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 206048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 207333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 208259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 209155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 210119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 211293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 212194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 215734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 216243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 217189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 218007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 221148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 221489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 222374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 223289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 225872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 226366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 227330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 228002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 230065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 230330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 230856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 231699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 233630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 233990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 234532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 235136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 237153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 237422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 237976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 239797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 240499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 242332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 243618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 245457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 246054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 247912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 248696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 250598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 251218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 253045 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:01 253642 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-21 16:12:01 268819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 271152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 271599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:01 275110 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:01 275923 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:12:01 284600 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:01 284745 --> Total execution time: 1.2440
INFO - 2018-12-21 10:42:02 910327 --> Config Class Initialized
INFO - 2018-12-21 10:42:02 910649 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:02 913598 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:02 913722 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:02 915673 --> URI Class Initialized
INFO - 2018-12-21 10:42:02 919742 --> Router Class Initialized
INFO - 2018-12-21 10:42:02 923775 --> Output Class Initialized
INFO - 2018-12-21 10:42:02 926587 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:02 929323 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:02 929471 --> Input Class Initialized
INFO - 2018-12-21 10:42:02 930280 --> Language Class Initialized
INFO - 2018-12-21 10:42:02 941332 --> Loader Class Initialized
INFO - 2018-12-21 10:42:02 942235 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:02 942706 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:02 949119 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:02 954933 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:02 955810 --> Controller Class Initialized
INFO - 2018-12-21 16:12:02 956443 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:02 956520 --> Total execution time: 0.0488
INFO - 2018-12-21 10:42:03 127893 --> Config Class Initialized
INFO - 2018-12-21 10:42:03 128015 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:03 129997 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:03 130103 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:03 131299 --> URI Class Initialized
INFO - 2018-12-21 10:42:03 135381 --> Router Class Initialized
INFO - 2018-12-21 10:42:03 137639 --> Output Class Initialized
INFO - 2018-12-21 10:42:03 139331 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:03 140928 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:03 141037 --> Input Class Initialized
INFO - 2018-12-21 10:42:03 141540 --> Language Class Initialized
ERROR - 2018-12-21 10:42:03 142456 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:42:03 195780 --> Config Class Initialized
INFO - 2018-12-21 10:42:03 195888 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:03 197501 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:03 197577 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:03 198288 --> URI Class Initialized
INFO - 2018-12-21 10:42:03 200362 --> Router Class Initialized
INFO - 2018-12-21 10:42:03 201611 --> Output Class Initialized
INFO - 2018-12-21 10:42:03 202595 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:03 203500 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:03 203569 --> Input Class Initialized
INFO - 2018-12-21 10:42:03 203866 --> Language Class Initialized
ERROR - 2018-12-21 10:42:03 204349 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:42:14 079790 --> Config Class Initialized
INFO - 2018-12-21 10:42:14 080046 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:14 081892 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:14 081990 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:14 083142 --> URI Class Initialized
DEBUG - 2018-12-21 10:42:14 085031 --> No URI present. Default controller set.
INFO - 2018-12-21 10:42:14 085144 --> Router Class Initialized
INFO - 2018-12-21 10:42:14 087147 --> Output Class Initialized
INFO - 2018-12-21 10:42:14 088670 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:14 090141 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:14 090241 --> Input Class Initialized
INFO - 2018-12-21 10:42:14 090718 --> Language Class Initialized
INFO - 2018-12-21 10:42:14 093686 --> Loader Class Initialized
INFO - 2018-12-21 10:42:14 094919 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:14 095586 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:14 103426 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:14 110080 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:14 111253 --> Controller Class Initialized
INFO - 2018-12-21 16:12:14 111834 --> Parser Class Initialized
INFO - 2018-12-21 16:12:14 112668 --> Helper loaded: html_helper
INFO - 2018-12-21 16:12:14 113543 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-21 16:12:14 115566 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:14 125359 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-21 16:12:14 129767 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-21 16:12:14 130335 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:14 131042 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-21 16:12:14 133445 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:12:14 135046 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:12:14 135180 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:12:14 138681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 140170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 148179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 149996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 152229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 152584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 153844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 154853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 157761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 158176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 158905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 159822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 162691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 163093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 163822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 164726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 167613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 168030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 168781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 169680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 172563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 172981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 173742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 174633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 177658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 178091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 178853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 179733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 182838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 183276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 184051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 184978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 188170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 188632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 189392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 190624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 193802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 194354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 195149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 196118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 196978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 197858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 198657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 199433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 200200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 200963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 201801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 202616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 203391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 204159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 204854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 205540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 206343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 207267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 208200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 208987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 210133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 212202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 213579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 214639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 218019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 218460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 219316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 220233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 223372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 223820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 224684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 225581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 228656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 229074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 229952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 230833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 234152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 234608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 235480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 236352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 239428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 239866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 240751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 241647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 244703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 245131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 246011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 249068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 250005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 253122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 254024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 257132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 258068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 261210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 262144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 265212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 268430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 272034 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:14 273257 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-21 16:12:14 276263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 279026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 279798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:14 283386 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:14 284164 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:12:14 376523 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:14 376697 --> Total execution time: 0.2073
INFO - 2018-12-21 10:42:14 992954 --> Config Class Initialized
INFO - 2018-12-21 10:42:14 993113 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:14 995480 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:14 995609 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:14 996952 --> URI Class Initialized
INFO - 2018-12-21 10:42:15 001235 --> Router Class Initialized
INFO - 2018-12-21 10:42:15 004338 --> Output Class Initialized
INFO - 2018-12-21 10:42:15 006274 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:15 008030 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:15 008158 --> Input Class Initialized
INFO - 2018-12-21 10:42:15 008769 --> Language Class Initialized
ERROR - 2018-12-21 10:42:15 009742 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:42:15 070797 --> Config Class Initialized
INFO - 2018-12-21 10:42:15 070976 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:15 072205 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:15 072273 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:15 073115 --> URI Class Initialized
INFO - 2018-12-21 10:42:15 075433 --> Router Class Initialized
INFO - 2018-12-21 10:42:15 076857 --> Output Class Initialized
INFO - 2018-12-21 10:42:15 077866 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:15 078823 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:15 078888 --> Input Class Initialized
INFO - 2018-12-21 10:42:15 079195 --> Language Class Initialized
ERROR - 2018-12-21 10:42:15 079729 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:42:15 103782 --> Config Class Initialized
INFO - 2018-12-21 10:42:15 103887 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:15 105025 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:15 105099 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:15 105792 --> URI Class Initialized
INFO - 2018-12-21 10:42:15 106997 --> Router Class Initialized
INFO - 2018-12-21 10:42:15 108458 --> Output Class Initialized
INFO - 2018-12-21 10:42:15 109380 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:15 110275 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:15 110342 --> Input Class Initialized
INFO - 2018-12-21 10:42:15 110661 --> Language Class Initialized
INFO - 2018-12-21 10:42:15 114527 --> Loader Class Initialized
INFO - 2018-12-21 10:42:15 115281 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:15 115715 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:15 120954 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:15 124223 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:15 124938 --> Controller Class Initialized
INFO - 2018-12-21 16:12:15 125443 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:15 125528 --> Total execution time: 0.0236
INFO - 2018-12-21 10:42:25 036376 --> Config Class Initialized
INFO - 2018-12-21 10:42:25 036735 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:25 039165 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:25 039297 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:25 040956 --> URI Class Initialized
INFO - 2018-12-21 10:42:25 045593 --> Router Class Initialized
INFO - 2018-12-21 10:42:25 048266 --> Output Class Initialized
INFO - 2018-12-21 10:42:25 050328 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:25 052272 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:25 052442 --> Input Class Initialized
INFO - 2018-12-21 10:42:25 053057 --> Language Class Initialized
INFO - 2018-12-21 10:42:25 056905 --> Loader Class Initialized
INFO - 2018-12-21 10:42:25 058573 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:25 059464 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:25 069941 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:25 085994 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:25 087531 --> Controller Class Initialized
INFO - 2018-12-21 16:12:25 094994 --> Model Class Initialized
INFO - 2018-12-21 16:12:25 099390 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:25 099545 --> Total execution time: 0.0652
INFO - 2018-12-21 10:42:25 215224 --> Config Class Initialized
INFO - 2018-12-21 10:42:25 215331 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:25 216700 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:25 216784 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:25 217576 --> URI Class Initialized
INFO - 2018-12-21 10:42:25 218961 --> Router Class Initialized
INFO - 2018-12-21 10:42:25 220424 --> Output Class Initialized
INFO - 2018-12-21 10:42:25 221585 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:25 222660 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:25 222743 --> Input Class Initialized
INFO - 2018-12-21 10:42:25 223097 --> Language Class Initialized
INFO - 2018-12-21 10:42:25 227510 --> Loader Class Initialized
INFO - 2018-12-21 10:42:25 228379 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:25 228856 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:25 234457 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:25 237746 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:25 238631 --> Controller Class Initialized
INFO - 2018-12-21 16:12:25 239078 --> Parser Class Initialized
INFO - 2018-12-21 16:12:25 239774 --> Helper loaded: html_helper
INFO - 2018-12-21 16:12:25 243004 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:25 244693 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'gaurav@gmail.com']
INFO - 2018-12-21 16:12:25 249003 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:25 251092 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'gaurav@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2018-12-21 16:12:25 251859 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:25 256288 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `num_business_viewed`, `add_to_favorite`, `business_add_date`
FROM `bd_business_details`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
DEBUG - 2018-12-21 16:12:25 270343 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`name`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `buy_invest_in`, `num_business_viewed`, `added_date`
FROM `bd_business_details`
LEFT JOIN `bd_buy_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
INFO - 2018-12-21 16:12:25 272346 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:25 274787 --> Last query to getBuyContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2018-12-21 16:12:25 275816 --> Last query to getAllContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2018-12-21 16:12:25 277127 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2018-12-21 16:12:25 278872 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2018-12-21 16:12:25 284869 --> Last query to getContact33333  [SELECT *
FROM `bd_property_view_user`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_view_user`.`viewed_form_id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `viewed_user_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-21 16:12:25 287765 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `like_user_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-21 16:12:25 289289 --> Last query to getFhhhhhavCou88888ntAll  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-21 16:12:25 290199 --> Last query to getContact33333  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `customer_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-21 16:12:25 291276 --> Last query to getFavCountBuy  [SELECT COUNT(*) AS `numrows`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business'
AND `add_to_favorite` = '1']
INFO - 2018-12-21 16:12:25 294646 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:25 299283 --> listing_model: RecommendedBusinessList: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `listing_category` = '']
DEBUG - 2018-12-21 16:12:25 305843 --> listing_model: RecommendedBusinessList111: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
WHERE `listing_category` = '']
DEBUG - 2018-12-21 16:12:25 307867 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '310']
DEBUG - 2018-12-21 16:12:25 309717 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '310']
DEBUG - 2018-12-21 16:12:25 311706 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '309']
DEBUG - 2018-12-21 16:12:25 313569 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '309']
DEBUG - 2018-12-21 16:12:25 316293 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '308']
DEBUG - 2018-12-21 16:12:25 323726 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '308']
DEBUG - 2018-12-21 16:12:25 327956 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '307']
DEBUG - 2018-12-21 16:12:25 330147 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '307']
DEBUG - 2018-12-21 16:12:25 332423 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '306']
DEBUG - 2018-12-21 16:12:25 334678 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '306']
DEBUG - 2018-12-21 16:12:25 337730 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '305']
DEBUG - 2018-12-21 16:12:25 340514 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '305']
DEBUG - 2018-12-21 16:12:25 343555 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '304']
DEBUG - 2018-12-21 16:12:25 346227 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '304']
DEBUG - 2018-12-21 16:12:25 348994 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '303']
DEBUG - 2018-12-21 16:12:25 351509 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '303']
DEBUG - 2018-12-21 16:12:25 354681 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '302']
DEBUG - 2018-12-21 16:12:25 356729 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '302']
DEBUG - 2018-12-21 16:12:25 358705 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '301']
DEBUG - 2018-12-21 16:12:25 360492 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '301']
DEBUG - 2018-12-21 16:12:25 362174 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '300']
DEBUG - 2018-12-21 16:12:25 364288 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '300']
DEBUG - 2018-12-21 16:12:25 365974 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '299']
DEBUG - 2018-12-21 16:12:25 367809 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '299']
DEBUG - 2018-12-21 16:12:25 369493 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '298']
DEBUG - 2018-12-21 16:12:25 371428 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '298']
DEBUG - 2018-12-21 16:12:25 373100 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '297']
DEBUG - 2018-12-21 16:12:25 375212 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '297']
DEBUG - 2018-12-21 16:12:25 377051 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '296']
DEBUG - 2018-12-21 16:12:25 379013 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '296']
DEBUG - 2018-12-21 16:12:25 380688 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '295']
DEBUG - 2018-12-21 16:12:25 382600 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '295']
DEBUG - 2018-12-21 16:12:25 384272 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '294']
DEBUG - 2018-12-21 16:12:25 389709 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '294']
DEBUG - 2018-12-21 16:12:25 391977 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '293']
DEBUG - 2018-12-21 16:12:25 393915 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '293']
DEBUG - 2018-12-21 16:12:25 396847 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '292']
DEBUG - 2018-12-21 16:12:25 399202 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '292']
DEBUG - 2018-12-21 16:12:25 402452 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '291']
DEBUG - 2018-12-21 16:12:25 405303 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '291']
DEBUG - 2018-12-21 16:12:25 407605 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '290']
DEBUG - 2018-12-21 16:12:25 409745 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '290']
DEBUG - 2018-12-21 16:12:25 412365 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '289']
DEBUG - 2018-12-21 16:12:25 414575 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '289']
DEBUG - 2018-12-21 16:12:25 416871 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '288']
DEBUG - 2018-12-21 16:12:25 419308 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '288']
DEBUG - 2018-12-21 16:12:25 421896 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '287']
DEBUG - 2018-12-21 16:12:25 424307 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '287']
DEBUG - 2018-12-21 16:12:25 426944 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '286']
DEBUG - 2018-12-21 16:12:25 429379 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '286']
DEBUG - 2018-12-21 16:12:25 431951 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '285']
DEBUG - 2018-12-21 16:12:25 434370 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '285']
DEBUG - 2018-12-21 16:12:25 436881 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '284']
DEBUG - 2018-12-21 16:12:25 439313 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '284']
DEBUG - 2018-12-21 16:12:25 441858 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '283']
DEBUG - 2018-12-21 16:12:25 444252 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '283']
DEBUG - 2018-12-21 16:12:25 446597 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '282']
DEBUG - 2018-12-21 16:12:25 448664 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '282']
DEBUG - 2018-12-21 16:12:25 450772 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '280']
DEBUG - 2018-12-21 16:12:25 452758 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '280']
DEBUG - 2018-12-21 16:12:25 454816 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '279']
DEBUG - 2018-12-21 16:12:25 456940 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '279']
DEBUG - 2018-12-21 16:12:25 463555 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '278']
DEBUG - 2018-12-21 16:12:25 465789 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '278']
DEBUG - 2018-12-21 16:12:25 467634 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '277']
DEBUG - 2018-12-21 16:12:25 469948 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '277']
DEBUG - 2018-12-21 16:12:25 472358 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '276']
DEBUG - 2018-12-21 16:12:25 474196 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '276']
DEBUG - 2018-12-21 16:12:25 476006 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '275']
DEBUG - 2018-12-21 16:12:25 477794 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '275']
DEBUG - 2018-12-21 16:12:25 479233 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '274']
DEBUG - 2018-12-21 16:12:25 480555 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '274']
DEBUG - 2018-12-21 16:12:25 481873 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '273']
DEBUG - 2018-12-21 16:12:25 483124 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '273']
DEBUG - 2018-12-21 16:12:25 484438 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '271']
DEBUG - 2018-12-21 16:12:25 485675 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '271']
DEBUG - 2018-12-21 16:12:25 486998 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '264']
DEBUG - 2018-12-21 16:12:25 488260 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '264']
DEBUG - 2018-12-21 16:12:25 489613 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '263']
DEBUG - 2018-12-21 16:12:25 490860 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '263']
DEBUG - 2018-12-21 16:12:25 492197 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '262']
DEBUG - 2018-12-21 16:12:25 493429 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '262']
DEBUG - 2018-12-21 16:12:25 494776 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '261']
DEBUG - 2018-12-21 16:12:25 496016 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '261']
DEBUG - 2018-12-21 16:12:25 497328 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '260']
DEBUG - 2018-12-21 16:12:25 498581 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '260']
DEBUG - 2018-12-21 16:12:25 499912 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '259']
DEBUG - 2018-12-21 16:12:25 501169 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '259']
DEBUG - 2018-12-21 16:12:25 502593 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '258']
DEBUG - 2018-12-21 16:12:25 504297 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '258']
DEBUG - 2018-12-21 16:12:25 505697 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '257']
DEBUG - 2018-12-21 16:12:25 506978 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '257']
DEBUG - 2018-12-21 16:12:25 508384 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '256']
DEBUG - 2018-12-21 16:12:25 509635 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '256']
DEBUG - 2018-12-21 16:12:25 511061 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '255']
DEBUG - 2018-12-21 16:12:25 512696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '255']
DEBUG - 2018-12-21 16:12:25 514452 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '254']
DEBUG - 2018-12-21 16:12:25 516060 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '254']
DEBUG - 2018-12-21 16:12:25 517446 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '253']
DEBUG - 2018-12-21 16:12:25 518717 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '253']
DEBUG - 2018-12-21 16:12:25 520066 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '252']
DEBUG - 2018-12-21 16:12:25 521336 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '252']
DEBUG - 2018-12-21 16:12:25 522697 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '251']
DEBUG - 2018-12-21 16:12:25 523962 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '251']
DEBUG - 2018-12-21 16:12:25 525563 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '250']
DEBUG - 2018-12-21 16:12:25 527041 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '250']
DEBUG - 2018-12-21 16:12:25 528676 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '249']
DEBUG - 2018-12-21 16:12:25 530085 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '249']
DEBUG - 2018-12-21 16:12:25 531913 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '248']
DEBUG - 2018-12-21 16:12:25 533366 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '248']
DEBUG - 2018-12-21 16:12:25 535135 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '247']
DEBUG - 2018-12-21 16:12:25 536722 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '247']
DEBUG - 2018-12-21 16:12:25 538291 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '246']
DEBUG - 2018-12-21 16:12:25 539786 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '246']
DEBUG - 2018-12-21 16:12:25 541306 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '245']
DEBUG - 2018-12-21 16:12:25 542793 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '245']
DEBUG - 2018-12-21 16:12:25 544389 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '244']
DEBUG - 2018-12-21 16:12:25 548830 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '244']
DEBUG - 2018-12-21 16:12:25 550550 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '243']
DEBUG - 2018-12-21 16:12:25 552212 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '243']
DEBUG - 2018-12-21 16:12:25 553709 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '242']
DEBUG - 2018-12-21 16:12:25 555120 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '242']
DEBUG - 2018-12-21 16:12:25 556693 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '241']
DEBUG - 2018-12-21 16:12:25 558182 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '241']
DEBUG - 2018-12-21 16:12:25 559861 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '240']
DEBUG - 2018-12-21 16:12:25 561220 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '240']
DEBUG - 2018-12-21 16:12:25 562586 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '239']
DEBUG - 2018-12-21 16:12:25 563836 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '239']
DEBUG - 2018-12-21 16:12:25 565212 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '238']
DEBUG - 2018-12-21 16:12:25 566548 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '238']
DEBUG - 2018-12-21 16:12:25 567878 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '237']
DEBUG - 2018-12-21 16:12:25 569123 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '237']
DEBUG - 2018-12-21 16:12:25 570480 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '236']
DEBUG - 2018-12-21 16:12:25 571748 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '236']
DEBUG - 2018-12-21 16:12:25 573090 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '235']
DEBUG - 2018-12-21 16:12:25 574407 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '235']
DEBUG - 2018-12-21 16:12:25 575748 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '234']
DEBUG - 2018-12-21 16:12:25 576992 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '234']
DEBUG - 2018-12-21 16:12:25 578311 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '233']
DEBUG - 2018-12-21 16:12:25 579569 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '233']
DEBUG - 2018-12-21 16:12:25 580940 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '232']
DEBUG - 2018-12-21 16:12:25 582200 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '232']
DEBUG - 2018-12-21 16:12:25 583533 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '231']
DEBUG - 2018-12-21 16:12:25 584788 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '231']
DEBUG - 2018-12-21 16:12:25 586116 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '230']
DEBUG - 2018-12-21 16:12:25 587352 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '230']
DEBUG - 2018-12-21 16:12:25 588696 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '229']
DEBUG - 2018-12-21 16:12:25 589936 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '229']
DEBUG - 2018-12-21 16:12:25 591272 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '228']
DEBUG - 2018-12-21 16:12:25 592528 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '228']
DEBUG - 2018-12-21 16:12:25 593878 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '227']
DEBUG - 2018-12-21 16:12:25 595127 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '227']
DEBUG - 2018-12-21 16:12:25 596484 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '226']
DEBUG - 2018-12-21 16:12:25 597745 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '226']
DEBUG - 2018-12-21 16:12:25 599090 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '222']
DEBUG - 2018-12-21 16:12:25 600347 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '222']
DEBUG - 2018-12-21 16:12:25 601744 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '220']
DEBUG - 2018-12-21 16:12:25 603010 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '220']
DEBUG - 2018-12-21 16:12:25 604337 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '217']
DEBUG - 2018-12-21 16:12:25 605629 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '217']
DEBUG - 2018-12-21 16:12:25 606969 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '216']
DEBUG - 2018-12-21 16:12:25 608266 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '216']
DEBUG - 2018-12-21 16:12:25 609659 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '215']
DEBUG - 2018-12-21 16:12:25 610898 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '215']
DEBUG - 2018-12-21 16:12:25 612276 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '200']
DEBUG - 2018-12-21 16:12:25 613601 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '200']
DEBUG - 2018-12-21 16:12:25 614963 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '199']
DEBUG - 2018-12-21 16:12:25 616568 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '199']
DEBUG - 2018-12-21 16:12:25 618041 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '198']
DEBUG - 2018-12-21 16:12:25 619303 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '198']
DEBUG - 2018-12-21 16:12:25 620729 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '197']
DEBUG - 2018-12-21 16:12:25 621984 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '197']
DEBUG - 2018-12-21 16:12:25 623346 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '190']
DEBUG - 2018-12-21 16:12:25 624651 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '190']
DEBUG - 2018-12-21 16:12:25 626002 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '189']
DEBUG - 2018-12-21 16:12:25 627299 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '189']
DEBUG - 2018-12-21 16:12:25 628670 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '188']
DEBUG - 2018-12-21 16:12:25 629962 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '188']
DEBUG - 2018-12-21 16:12:25 631319 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '184']
DEBUG - 2018-12-21 16:12:25 632606 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '184']
DEBUG - 2018-12-21 16:12:25 633949 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '183']
DEBUG - 2018-12-21 16:12:25 635231 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '183']
DEBUG - 2018-12-21 16:12:25 636723 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '182']
DEBUG - 2018-12-21 16:12:25 637995 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '182']
DEBUG - 2018-12-21 16:12:25 639364 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '181']
DEBUG - 2018-12-21 16:12:25 640638 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '181']
DEBUG - 2018-12-21 16:12:25 642011 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '177']
DEBUG - 2018-12-21 16:12:25 643270 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '177']
DEBUG - 2018-12-21 16:12:25 644634 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '176']
DEBUG - 2018-12-21 16:12:25 645884 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '176']
DEBUG - 2018-12-21 16:12:25 647238 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '175']
DEBUG - 2018-12-21 16:12:25 648678 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '175']
DEBUG - 2018-12-21 16:12:25 650448 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '174']
DEBUG - 2018-12-21 16:12:25 651740 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '174']
DEBUG - 2018-12-21 16:12:25 653654 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '173']
DEBUG - 2018-12-21 16:12:25 655215 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '173']
DEBUG - 2018-12-21 16:12:25 656959 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '172']
DEBUG - 2018-12-21 16:12:25 658509 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '172']
DEBUG - 2018-12-21 16:12:25 660136 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '171']
DEBUG - 2018-12-21 16:12:25 661700 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '171']
DEBUG - 2018-12-21 16:12:25 663331 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '170']
DEBUG - 2018-12-21 16:12:25 664891 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '170']
DEBUG - 2018-12-21 16:12:25 666533 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '169']
DEBUG - 2018-12-21 16:12:25 668061 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '169']
DEBUG - 2018-12-21 16:12:25 669751 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '168']
DEBUG - 2018-12-21 16:12:25 671295 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '168']
DEBUG - 2018-12-21 16:12:25 672930 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '167']
DEBUG - 2018-12-21 16:12:25 674490 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '167']
DEBUG - 2018-12-21 16:12:25 676166 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '166']
DEBUG - 2018-12-21 16:12:25 677696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '166']
DEBUG - 2018-12-21 16:12:25 679336 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '165']
DEBUG - 2018-12-21 16:12:25 680963 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '165']
DEBUG - 2018-12-21 16:12:25 682599 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '164']
DEBUG - 2018-12-21 16:12:25 684142 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '164']
DEBUG - 2018-12-21 16:12:25 685779 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '163']
DEBUG - 2018-12-21 16:12:25 687315 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '163']
DEBUG - 2018-12-21 16:12:25 688976 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '162']
DEBUG - 2018-12-21 16:12:25 690517 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '162']
DEBUG - 2018-12-21 16:12:25 692152 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '161']
DEBUG - 2018-12-21 16:12:25 693694 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '161']
DEBUG - 2018-12-21 16:12:25 695332 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '160']
DEBUG - 2018-12-21 16:12:25 696887 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '160']
DEBUG - 2018-12-21 16:12:25 698513 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '159']
DEBUG - 2018-12-21 16:12:25 700073 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '159']
DEBUG - 2018-12-21 16:12:25 701706 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '158']
DEBUG - 2018-12-21 16:12:25 703296 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '158']
DEBUG - 2018-12-21 16:12:25 704991 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '157']
DEBUG - 2018-12-21 16:12:25 706552 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '157']
DEBUG - 2018-12-21 16:12:25 708178 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '156']
DEBUG - 2018-12-21 16:12:25 714602 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '156']
DEBUG - 2018-12-21 16:12:25 716423 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '155']
DEBUG - 2018-12-21 16:12:25 717989 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '155']
DEBUG - 2018-12-21 16:12:25 719681 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '154']
DEBUG - 2018-12-21 16:12:25 721215 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '154']
DEBUG - 2018-12-21 16:12:25 722863 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '153']
DEBUG - 2018-12-21 16:12:25 724392 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '153']
DEBUG - 2018-12-21 16:12:25 726082 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '152']
DEBUG - 2018-12-21 16:12:25 727633 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '152']
DEBUG - 2018-12-21 16:12:25 729288 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '151']
DEBUG - 2018-12-21 16:12:25 730842 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '151']
DEBUG - 2018-12-21 16:12:25 732518 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '150']
DEBUG - 2018-12-21 16:12:25 734085 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '150']
DEBUG - 2018-12-21 16:12:25 735766 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '149']
DEBUG - 2018-12-21 16:12:25 737323 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '149']
DEBUG - 2018-12-21 16:12:25 738970 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '148']
DEBUG - 2018-12-21 16:12:25 740744 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '148']
DEBUG - 2018-12-21 16:12:25 742367 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '147']
DEBUG - 2018-12-21 16:12:25 743922 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '147']
DEBUG - 2018-12-21 16:12:25 745565 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '146']
DEBUG - 2018-12-21 16:12:25 747116 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '146']
DEBUG - 2018-12-21 16:12:25 748763 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '145']
DEBUG - 2018-12-21 16:12:25 750299 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '145']
DEBUG - 2018-12-21 16:12:25 751939 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '144']
DEBUG - 2018-12-21 16:12:25 753482 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '144']
DEBUG - 2018-12-21 16:12:25 755114 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '143']
DEBUG - 2018-12-21 16:12:25 756665 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '143']
DEBUG - 2018-12-21 16:12:25 758313 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '142']
DEBUG - 2018-12-21 16:12:25 759902 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '142']
DEBUG - 2018-12-21 16:12:25 761549 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '141']
DEBUG - 2018-12-21 16:12:25 763119 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '141']
DEBUG - 2018-12-21 16:12:25 764769 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '140']
DEBUG - 2018-12-21 16:12:25 766310 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '140']
DEBUG - 2018-12-21 16:12:25 767951 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '139']
DEBUG - 2018-12-21 16:12:25 769526 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '139']
DEBUG - 2018-12-21 16:12:25 771166 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '138']
DEBUG - 2018-12-21 16:12:25 772701 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '138']
DEBUG - 2018-12-21 16:12:25 774393 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '137']
DEBUG - 2018-12-21 16:12:25 775938 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '137']
DEBUG - 2018-12-21 16:12:25 777596 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '136']
DEBUG - 2018-12-21 16:12:25 779174 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '136']
DEBUG - 2018-12-21 16:12:25 780792 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '135']
DEBUG - 2018-12-21 16:12:25 782315 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '135']
DEBUG - 2018-12-21 16:12:25 783994 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '134']
DEBUG - 2018-12-21 16:12:25 785553 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '134']
DEBUG - 2018-12-21 16:12:25 787193 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '133']
DEBUG - 2018-12-21 16:12:25 788718 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '133']
DEBUG - 2018-12-21 16:12:25 790350 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '132']
DEBUG - 2018-12-21 16:12:25 791913 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '132']
DEBUG - 2018-12-21 16:12:25 793581 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '131']
DEBUG - 2018-12-21 16:12:25 795129 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '131']
DEBUG - 2018-12-21 16:12:25 796787 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '130']
DEBUG - 2018-12-21 16:12:25 798316 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '130']
DEBUG - 2018-12-21 16:12:25 799993 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '129']
DEBUG - 2018-12-21 16:12:25 801527 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '129']
DEBUG - 2018-12-21 16:12:25 806843 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '128']
DEBUG - 2018-12-21 16:12:25 808407 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '128']
DEBUG - 2018-12-21 16:12:25 810110 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '127']
DEBUG - 2018-12-21 16:12:25 811640 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '127']
DEBUG - 2018-12-21 16:12:25 813318 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '126']
DEBUG - 2018-12-21 16:12:25 814996 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '126']
DEBUG - 2018-12-21 16:12:25 816693 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '125']
DEBUG - 2018-12-21 16:12:25 818391 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '125']
DEBUG - 2018-12-21 16:12:25 820090 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '124']
DEBUG - 2018-12-21 16:12:25 821655 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '124']
DEBUG - 2018-12-21 16:12:25 823314 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '123']
DEBUG - 2018-12-21 16:12:25 824858 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '123']
DEBUG - 2018-12-21 16:12:25 826764 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '122']
DEBUG - 2018-12-21 16:12:25 828300 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '122']
DEBUG - 2018-12-21 16:12:25 830250 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '121']
DEBUG - 2018-12-21 16:12:25 831820 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '121']
DEBUG - 2018-12-21 16:12:25 833460 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '120']
DEBUG - 2018-12-21 16:12:25 835339 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '120']
DEBUG - 2018-12-21 16:12:25 836992 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '119']
DEBUG - 2018-12-21 16:12:25 838536 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '119']
DEBUG - 2018-12-21 16:12:25 840178 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '118']
DEBUG - 2018-12-21 16:12:25 841706 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '118']
DEBUG - 2018-12-21 16:12:25 843437 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '117']
DEBUG - 2018-12-21 16:12:25 844974 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '117']
DEBUG - 2018-12-21 16:12:25 846626 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '116']
DEBUG - 2018-12-21 16:12:25 848175 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '116']
DEBUG - 2018-12-21 16:12:25 849842 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '115']
DEBUG - 2018-12-21 16:12:25 851371 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '115']
DEBUG - 2018-12-21 16:12:25 853029 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '114']
DEBUG - 2018-12-21 16:12:25 854581 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '114']
DEBUG - 2018-12-21 16:12:25 856228 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '113']
DEBUG - 2018-12-21 16:12:25 857783 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '113']
DEBUG - 2018-12-21 16:12:25 859464 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '112']
DEBUG - 2018-12-21 16:12:25 861059 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '112']
DEBUG - 2018-12-21 16:12:25 862694 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '111']
DEBUG - 2018-12-21 16:12:25 864227 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '111']
DEBUG - 2018-12-21 16:12:25 865899 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '110']
DEBUG - 2018-12-21 16:12:25 867465 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '110']
DEBUG - 2018-12-21 16:12:25 869117 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '109']
DEBUG - 2018-12-21 16:12:25 870646 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '109']
DEBUG - 2018-12-21 16:12:25 872289 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '108']
DEBUG - 2018-12-21 16:12:25 873842 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '108']
DEBUG - 2018-12-21 16:12:25 875514 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '107']
DEBUG - 2018-12-21 16:12:25 877078 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '107']
DEBUG - 2018-12-21 16:12:25 878712 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '106']
DEBUG - 2018-12-21 16:12:25 880250 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '106']
DEBUG - 2018-12-21 16:12:25 881901 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '105']
DEBUG - 2018-12-21 16:12:25 883445 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '105']
DEBUG - 2018-12-21 16:12:25 885075 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '104']
DEBUG - 2018-12-21 16:12:25 886614 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '104']
DEBUG - 2018-12-21 16:12:25 888252 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '103']
DEBUG - 2018-12-21 16:12:25 889789 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '103']
DEBUG - 2018-12-21 16:12:25 891422 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '102']
DEBUG - 2018-12-21 16:12:25 892962 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '102']
DEBUG - 2018-12-21 16:12:25 894581 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '101']
DEBUG - 2018-12-21 16:12:25 896115 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '101']
DEBUG - 2018-12-21 16:12:25 897758 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '100']
DEBUG - 2018-12-21 16:12:25 899270 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '100']
DEBUG - 2018-12-21 16:12:25 900950 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '99']
DEBUG - 2018-12-21 16:12:25 902502 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '99']
DEBUG - 2018-12-21 16:12:25 904159 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '98']
DEBUG - 2018-12-21 16:12:25 905703 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '98']
DEBUG - 2018-12-21 16:12:25 907357 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '97']
DEBUG - 2018-12-21 16:12:25 908935 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '97']
DEBUG - 2018-12-21 16:12:25 910599 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '96']
DEBUG - 2018-12-21 16:12:25 912153 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '96']
DEBUG - 2018-12-21 16:12:25 913785 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '95']
DEBUG - 2018-12-21 16:12:25 915332 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '95']
DEBUG - 2018-12-21 16:12:25 916990 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '94']
DEBUG - 2018-12-21 16:12:25 918550 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '94']
DEBUG - 2018-12-21 16:12:25 920279 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '93']
DEBUG - 2018-12-21 16:12:25 921833 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '93']
DEBUG - 2018-12-21 16:12:25 923465 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '92']
DEBUG - 2018-12-21 16:12:25 925017 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '92']
DEBUG - 2018-12-21 16:12:25 926661 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '88']
DEBUG - 2018-12-21 16:12:25 928184 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '88']
DEBUG - 2018-12-21 16:12:25 929820 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '87']
DEBUG - 2018-12-21 16:12:25 931323 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '87']
DEBUG - 2018-12-21 16:12:25 933253 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '86']
DEBUG - 2018-12-21 16:12:25 934811 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '86']
DEBUG - 2018-12-21 16:12:25 936430 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '85']
DEBUG - 2018-12-21 16:12:25 937998 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '85']
DEBUG - 2018-12-21 16:12:25 939640 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '84']
DEBUG - 2018-12-21 16:12:25 941207 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '84']
DEBUG - 2018-12-21 16:12:25 942848 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '83']
DEBUG - 2018-12-21 16:12:25 944384 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '83']
DEBUG - 2018-12-21 16:12:25 946026 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '82']
DEBUG - 2018-12-21 16:12:25 947587 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '82']
DEBUG - 2018-12-21 16:12:25 949238 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '81']
DEBUG - 2018-12-21 16:12:25 950812 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '81']
DEBUG - 2018-12-21 16:12:25 952522 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '78']
DEBUG - 2018-12-21 16:12:25 954085 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '78']
DEBUG - 2018-12-21 16:12:25 955755 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '77']
DEBUG - 2018-12-21 16:12:25 957285 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '77']
DEBUG - 2018-12-21 16:12:25 959002 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '76']
DEBUG - 2018-12-21 16:12:25 960551 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '76']
DEBUG - 2018-12-21 16:12:25 962184 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '75']
DEBUG - 2018-12-21 16:12:25 963726 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '75']
DEBUG - 2018-12-21 16:12:25 965354 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '74']
DEBUG - 2018-12-21 16:12:25 966913 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '74']
DEBUG - 2018-12-21 16:12:25 968571 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '69']
DEBUG - 2018-12-21 16:12:25 970117 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '69']
DEBUG - 2018-12-21 16:12:25 971775 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '67']
DEBUG - 2018-12-21 16:12:25 973293 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '67']
DEBUG - 2018-12-21 16:12:25 974939 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '66']
DEBUG - 2018-12-21 16:12:25 976480 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '66']
DEBUG - 2018-12-21 16:12:25 978096 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '65']
DEBUG - 2018-12-21 16:12:25 979621 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '65']
DEBUG - 2018-12-21 16:12:25 981244 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '64']
DEBUG - 2018-12-21 16:12:25 982788 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '64']
DEBUG - 2018-12-21 16:12:25 984416 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '57']
DEBUG - 2018-12-21 16:12:25 985982 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '57']
DEBUG - 2018-12-21 16:12:25 987617 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '56']
DEBUG - 2018-12-21 16:12:25 989146 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '56']
DEBUG - 2018-12-21 16:12:25 990799 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '55']
DEBUG - 2018-12-21 16:12:25 992321 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '55']
DEBUG - 2018-12-21 16:12:25 993988 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '54']
DEBUG - 2018-12-21 16:12:25 995518 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '54']
DEBUG - 2018-12-21 16:12:25 997143 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '53']
DEBUG - 2018-12-21 16:12:25 998667 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '53']
DEBUG - 2018-12-21 16:12:26 000292 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '52']
DEBUG - 2018-12-21 16:12:26 001837 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '52']
DEBUG - 2018-12-21 16:12:26 003506 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '51']
DEBUG - 2018-12-21 16:12:26 005068 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '51']
DEBUG - 2018-12-21 16:12:26 006762 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '50']
DEBUG - 2018-12-21 16:12:26 008841 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '50']
DEBUG - 2018-12-21 16:12:26 010766 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '49']
DEBUG - 2018-12-21 16:12:26 012454 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '49']
DEBUG - 2018-12-21 16:12:26 014234 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '48']
DEBUG - 2018-12-21 16:12:26 015909 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '48']
DEBUG - 2018-12-21 16:12:26 017685 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '47']
DEBUG - 2018-12-21 16:12:26 019299 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '47']
DEBUG - 2018-12-21 16:12:26 021033 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '46']
DEBUG - 2018-12-21 16:12:26 022677 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '46']
DEBUG - 2018-12-21 16:12:26 024394 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '45']
DEBUG - 2018-12-21 16:12:26 025980 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '45']
DEBUG - 2018-12-21 16:12:26 027710 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '44']
DEBUG - 2018-12-21 16:12:26 029519 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '44']
DEBUG - 2018-12-21 16:12:26 031358 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '43']
DEBUG - 2018-12-21 16:12:26 033037 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '43']
DEBUG - 2018-12-21 16:12:26 034766 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '42']
DEBUG - 2018-12-21 16:12:26 036498 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '42']
DEBUG - 2018-12-21 16:12:26 038355 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '41']
DEBUG - 2018-12-21 16:12:26 040107 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '41']
DEBUG - 2018-12-21 16:12:26 042746 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '40']
DEBUG - 2018-12-21 16:12:26 045660 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '40']
DEBUG - 2018-12-21 16:12:26 048528 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '39']
DEBUG - 2018-12-21 16:12:26 050822 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '39']
DEBUG - 2018-12-21 16:12:26 053030 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '38']
DEBUG - 2018-12-21 16:12:26 055061 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '38']
DEBUG - 2018-12-21 16:12:26 056960 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '37']
DEBUG - 2018-12-21 16:12:26 058382 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '37']
DEBUG - 2018-12-21 16:12:26 059954 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '36']
DEBUG - 2018-12-21 16:12:26 061343 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '36']
DEBUG - 2018-12-21 16:12:26 062879 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '35']
DEBUG - 2018-12-21 16:12:26 064259 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '35']
DEBUG - 2018-12-21 16:12:26 065809 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '34']
DEBUG - 2018-12-21 16:12:26 067282 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '34']
DEBUG - 2018-12-21 16:12:26 068802 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '33']
DEBUG - 2018-12-21 16:12:26 070194 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '33']
DEBUG - 2018-12-21 16:12:26 071713 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '32']
DEBUG - 2018-12-21 16:12:26 073101 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '32']
DEBUG - 2018-12-21 16:12:26 074598 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '31']
DEBUG - 2018-12-21 16:12:26 075999 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '31']
DEBUG - 2018-12-21 16:12:26 077527 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '30']
DEBUG - 2018-12-21 16:12:26 078917 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '30']
DEBUG - 2018-12-21 16:12:26 080409 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '29']
DEBUG - 2018-12-21 16:12:26 081777 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '29']
DEBUG - 2018-12-21 16:12:26 083272 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '28']
DEBUG - 2018-12-21 16:12:26 084656 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '28']
DEBUG - 2018-12-21 16:12:26 086199 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '27']
DEBUG - 2018-12-21 16:12:26 087696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '27']
DEBUG - 2018-12-21 16:12:26 089214 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '26']
DEBUG - 2018-12-21 16:12:26 090603 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '26']
DEBUG - 2018-12-21 16:12:26 092200 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '25']
DEBUG - 2018-12-21 16:12:26 093600 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '25']
DEBUG - 2018-12-21 16:12:26 095099 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '24']
DEBUG - 2018-12-21 16:12:26 096472 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '24']
DEBUG - 2018-12-21 16:12:26 098001 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '23']
DEBUG - 2018-12-21 16:12:26 099364 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '23']
DEBUG - 2018-12-21 16:12:26 100883 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '22']
DEBUG - 2018-12-21 16:12:26 102252 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '22']
DEBUG - 2018-12-21 16:12:26 103841 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '21']
DEBUG - 2018-12-21 16:12:26 107237 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '21']
DEBUG - 2018-12-21 16:12:26 108869 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '20']
DEBUG - 2018-12-21 16:12:26 110282 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '20']
DEBUG - 2018-12-21 16:12:26 112209 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '19']
DEBUG - 2018-12-21 16:12:26 113656 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '19']
DEBUG - 2018-12-21 16:12:26 115210 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '18']
DEBUG - 2018-12-21 16:12:26 116612 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '18']
DEBUG - 2018-12-21 16:12:26 118164 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '17']
DEBUG - 2018-12-21 16:12:26 119561 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '17']
DEBUG - 2018-12-21 16:12:26 121069 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '16']
DEBUG - 2018-12-21 16:12:26 122450 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '16']
DEBUG - 2018-12-21 16:12:26 123986 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '15']
DEBUG - 2018-12-21 16:12:26 125359 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '15']
DEBUG - 2018-12-21 16:12:26 126887 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '13']
DEBUG - 2018-12-21 16:12:26 128253 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '13']
DEBUG - 2018-12-21 16:12:26 129868 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '12']
DEBUG - 2018-12-21 16:12:26 131475 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '12']
DEBUG - 2018-12-21 16:12:26 133017 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '11']
DEBUG - 2018-12-21 16:12:26 135271 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '11']
DEBUG - 2018-12-21 16:12:26 137634 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '10']
DEBUG - 2018-12-21 16:12:26 139801 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '10']
DEBUG - 2018-12-21 16:12:26 141541 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '9']
DEBUG - 2018-12-21 16:12:26 143024 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '9']
DEBUG - 2018-12-21 16:12:26 144575 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '8']
DEBUG - 2018-12-21 16:12:26 146024 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '8']
DEBUG - 2018-12-21 16:12:26 147542 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '6']
DEBUG - 2018-12-21 16:12:26 148912 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '6']
DEBUG - 2018-12-21 16:12:26 150463 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '5']
DEBUG - 2018-12-21 16:12:26 151839 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '5']
DEBUG - 2018-12-21 16:12:26 153937 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '4']
DEBUG - 2018-12-21 16:12:26 155531 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '4']
DEBUG - 2018-12-21 16:12:26 157228 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '3']
DEBUG - 2018-12-21 16:12:26 158823 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '3']
DEBUG - 2018-12-21 16:12:26 160578 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '1']
DEBUG - 2018-12-21 16:12:26 162473 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '1']
INFO - 2018-12-21 16:12:26 163671 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:12:26 169126 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:12:26 171180 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:12:26 171363 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
ERROR - 2018-12-21 16:12:26 172986 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 173149 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 173329 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 174225 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 174369 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 174568 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 175470 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 175625 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 175816 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 176687 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 176827 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 176991 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 177951 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 178087 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 178250 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 179095 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 179238 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 179424 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 180114 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 180260 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 180433 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 181113 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 181258 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 181440 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 182126 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 182257 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 182430 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 183098 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 183231 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 183415 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 184067 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 184201 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 184370 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 185034 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 185167 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 185331 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 186014 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 186151 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 186311 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 187050 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 187186 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 187350 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 188071 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 188209 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 188380 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 189167 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 189299 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 189479 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 190186 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 190334 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 190516 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 191222 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 191355 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 191550 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 192250 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 192382 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 192576 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 193278 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 193418 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 193605 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 194322 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 194483 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 194650 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 195355 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 195513 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 195678 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 196518 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 196655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 196816 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 197658 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 197792 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 197956 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 198766 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 198900 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 199068 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 199908 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 200042 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 200205 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 200980 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 201116 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 201278 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 202100 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 202234 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 202426 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 203228 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 203360 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 203545 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 204339 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 204499 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 204669 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 205471 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 205609 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 205770 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 206568 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 206712 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 206876 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 207827 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 207977 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 208142 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 209259 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 209505 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 209698 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 210616 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 210757 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 210917 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 211833 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 211982 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 212143 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 213049 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 213198 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 213361 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 214278 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 214432 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 214610 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 215567 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 215708 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 215868 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 217266 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 217416 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 217612 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 218549 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 218687 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 218843 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 219819 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 219954 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 220109 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 221050 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 221193 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 221375 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 222316 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 222485 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 222655 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 223650 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 223792 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 223952 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 224869 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 225012 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 225172 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 226079 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 226222 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 226386 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 227307 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 227469 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 227638 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 228848 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 229001 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 229163 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 230058 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 230214 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 230376 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 231297 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 231467 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 231637 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 232547 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 232728 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 232950 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 233860 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 234008 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 234169 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 235061 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 235213 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 235375 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 236360 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 236545 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 236709 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 237634 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 237776 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 237946 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 238895 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 239038 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 239207 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 240122 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 240268 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 240467 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 241421 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 241605 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 241913 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 243243 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 243506 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 243695 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 244404 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 244581 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 244859 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 245841 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 246045 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 246274 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 247400 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 247705 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 248038 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 249285 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 249531 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 249706 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 250533 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 250674 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 250833 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 251514 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 251653 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 251811 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 252487 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 252625 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 252783 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 253457 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 253595 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 253802 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 254690 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 254880 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 255140 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 255913 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 256053 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 256216 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 256897 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 257034 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 257190 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 257862 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 257998 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 258156 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 258830 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 258970 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 259129 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 259809 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 259946 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 260102 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 260746 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 260880 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 261035 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 261692 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 261826 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 261981 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 262897 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 263039 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 263199 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 264106 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 264254 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 264448 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 265357 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 265521 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 265683 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 266594 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 266740 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 266906 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 267824 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 267970 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 268131 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 269040 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 269184 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 269349 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 270265 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 270416 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 270593 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 271503 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 271651 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 271814 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 272722 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 272865 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 273027 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 273935 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 274085 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 274246 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 275171 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2018-12-21 16:12:26 275362 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 276288 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2018-12-21 16:12:26 276500 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 277419 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 277580 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 277744 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 278713 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 278858 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 279023 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 279956 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 280100 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 280262 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 281208 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 281353 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 281538 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 282474 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 282619 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 282782 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 283684 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 283827 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 283992 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 284913 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 285054 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 285217 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 286147 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 286297 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 286478 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 287369 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 287561 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 287736 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 288649 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 288805 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 288968 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 289884 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 290040 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 290201 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 291380 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 291603 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 291821 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 293087 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 293308 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 293608 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 295085 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 295315 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 295591 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 297148 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 297467 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 297768 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 298861 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 299084 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 299354 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 300533 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 300873 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 301327 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 302687 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 302901 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 303153 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 304241 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 304474 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 304666 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 305593 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 305742 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 305958 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 307054 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 307225 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 307430 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 308429 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 308585 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 308748 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 309664 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 309814 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 309978 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 310910 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 311057 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 311218 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 312136 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 312282 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 312463 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 313374 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 313541 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:26 313723 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:26 314685 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:26 314855 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 386754 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 388242 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 388456 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 388678 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 389733 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 389918 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 390126 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 391132 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 391319 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 391542 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 392518 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 392699 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 392906 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 393904 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 394087 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 394294 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 395282 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 395478 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 395688 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 396655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 396835 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 397038 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 398072 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 398257 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 398494 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 399472 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 399671 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 399883 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 400909 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 401092 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 401295 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 402256 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 402466 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 402621 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 403270 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 403389 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 403552 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 404418 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 404659 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 404905 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 405781 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 405910 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 406055 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 406860 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 406985 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 407126 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 407912 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 408036 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 408180 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 409184 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 409357 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 410152 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 410290 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 410448 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 411233 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 411366 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 411581 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 412367 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 412516 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 412661 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 413458 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 413655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 413861 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 414936 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 415071 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 415221 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 416043 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 416174 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 416322 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 417113 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 417238 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 417396 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 418185 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 418317 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 418483 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 419254 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 419379 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 419565 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 420336 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 420486 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 420631 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 421415 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 421564 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 421710 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 422498 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 422626 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 422766 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 423563 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 423695 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 423835 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 424638 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 424763 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 424909 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 425704 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 425834 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 425975 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 426778 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 426903 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 427045 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 427831 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 427963 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 428102 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 428920 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 429054 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 429209 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 430000 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 430126 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 430268 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 431055 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 431188 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 431334 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 432125 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 432251 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 432398 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 433196 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 433321 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 433494 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 434278 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 434406 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 434567 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 435337 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 435482 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 435630 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 436398 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 436561 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 436703 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 437495 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 437624 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 437767 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 438566 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 438707 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 438848 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 439647 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 439775 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 439917 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 440701 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 440830 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 440973 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 441764 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 441895 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 442039 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 442831 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 442959 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 443099 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 443886 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 444024 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 444165 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 444950 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 445081 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 445223 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 446002 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 446140 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 446283 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 447069 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 447204 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 447348 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 448143 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 448290 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 448467 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 449254 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 449382 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 449551 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 450366 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 450536 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 450680 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 451785 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 451982 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 452193 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 453301 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 453537 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 453780 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 454814 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 454988 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 455153 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 456137 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 456234 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 456343 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 457051 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 457137 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 457236 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 457850 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 457937 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 458029 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 458632 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 458712 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 458802 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 459383 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 459480 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 459594 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 460333 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-21 16:12:27 460419 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-21 16:12:27 460522 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:27 461158 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
ERROR - 2018-12-21 16:12:27 461340 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
ERROR - 2018-12-21 16:12:27 461430 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
INFO - 2018-12-21 16:12:27 461513 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php
DEBUG - 2018-12-21 16:12:27 465101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:27 467776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:27 468899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:27 475209 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:27 476542 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:12:27 495702 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:27 495794 --> Total execution time: 2.2631
INFO - 2018-12-21 10:42:29 815098 --> Config Class Initialized
INFO - 2018-12-21 10:42:29 815188 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:29 816415 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:29 816493 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:29 817202 --> URI Class Initialized
INFO - 2018-12-21 10:42:29 818486 --> Router Class Initialized
INFO - 2018-12-21 10:42:29 819756 --> Output Class Initialized
INFO - 2018-12-21 10:42:29 820748 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:29 821755 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:29 821829 --> Input Class Initialized
INFO - 2018-12-21 10:42:29 822144 --> Language Class Initialized
INFO - 2018-12-21 10:42:29 826054 --> Loader Class Initialized
INFO - 2018-12-21 10:42:29 826850 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:29 827271 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:29 832348 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:29 835561 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:29 836303 --> Controller Class Initialized
INFO - 2018-12-21 16:12:29 836755 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:29 836836 --> Total execution time: 0.0227
INFO - 2018-12-21 10:42:32 913130 --> Config Class Initialized
INFO - 2018-12-21 10:42:32 913239 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:32 914630 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:32 914716 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:32 915534 --> URI Class Initialized
INFO - 2018-12-21 10:42:32 918593 --> Router Class Initialized
INFO - 2018-12-21 10:42:32 920675 --> Output Class Initialized
INFO - 2018-12-21 10:42:32 921896 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:32 923031 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:32 923116 --> Input Class Initialized
INFO - 2018-12-21 10:42:32 923491 --> Language Class Initialized
INFO - 2018-12-21 10:42:32 925721 --> Loader Class Initialized
INFO - 2018-12-21 10:42:32 926661 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:32 927141 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:32 932969 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:32 937212 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:32 938076 --> Controller Class Initialized
INFO - 2018-12-21 16:12:32 938539 --> Parser Class Initialized
INFO - 2018-12-21 16:12:32 939163 --> Helper loaded: html_helper
INFO - 2018-12-21 16:12:32 940676 --> Model Class Initialized
INFO - 2018-12-21 16:12:32 949753 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:32 952538 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:12:32 953680 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:12:32 954457 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:12:32 954613 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:12:32 955591 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:12:32 957099 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:12:32 957233 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:12:32 958053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 958754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 959445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 960199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 960967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 961504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 962078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 962753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 963339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 963860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 964344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 964997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 965792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 966407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 967025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 967580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 968064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 968704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 969338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 969975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 970637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 971302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 971982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 972708 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:12:32 973398 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-21 16:12:32 973503 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-21 16:12:32 973572 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-21 16:12:32 975733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 980041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 981473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:32 986726 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:32 987922 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:12:32 994153 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:32 994249 --> Total execution time: 0.0763
INFO - 2018-12-21 10:42:33 856172 --> Config Class Initialized
INFO - 2018-12-21 10:42:33 856270 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:33 857911 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:33 857986 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:33 858776 --> URI Class Initialized
INFO - 2018-12-21 10:42:33 860220 --> Router Class Initialized
INFO - 2018-12-21 10:42:33 861561 --> Output Class Initialized
INFO - 2018-12-21 10:42:33 862602 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:33 863564 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:33 863641 --> Input Class Initialized
INFO - 2018-12-21 10:42:33 864039 --> Language Class Initialized
INFO - 2018-12-21 10:42:33 867929 --> Loader Class Initialized
INFO - 2018-12-21 10:42:33 868837 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:33 869379 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:33 878583 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:33 882472 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:33 883312 --> Controller Class Initialized
INFO - 2018-12-21 16:12:33 883884 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:33 883994 --> Total execution time: 0.0289
INFO - 2018-12-21 10:42:35 427073 --> Config Class Initialized
INFO - 2018-12-21 10:42:35 427490 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:35 429502 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:35 429644 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:35 431191 --> URI Class Initialized
INFO - 2018-12-21 10:42:35 433815 --> Router Class Initialized
INFO - 2018-12-21 10:42:35 435257 --> Output Class Initialized
INFO - 2018-12-21 10:42:35 436310 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:35 437331 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:35 437417 --> Input Class Initialized
INFO - 2018-12-21 10:42:35 437773 --> Language Class Initialized
INFO - 2018-12-21 10:42:35 439955 --> Loader Class Initialized
INFO - 2018-12-21 10:42:35 441023 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:35 441581 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:35 447593 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:35 632473 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:35 633522 --> Controller Class Initialized
INFO - 2018-12-21 16:12:35 633934 --> Parser Class Initialized
INFO - 2018-12-21 16:12:35 634552 --> Helper loaded: html_helper
INFO - 2018-12-21 16:12:35 635987 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:35 651964 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-21 16:12:35 652813 --> Model Class Initialized
DEBUG - 2018-12-21 16:12:35 653965 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:12:35 655890 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:12:35 658860 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:12:35 660993 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:12:35 661169 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:12:35 664287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 047049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 059932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 060905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 066070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 066818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 068734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 071240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 072376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 074182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 074831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 075184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 077688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 078553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 080238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 080876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 081203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 083760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 085052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 087424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 088073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 088418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 090982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 092026 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:38 094216 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-21 16:12:38 096801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 098422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 098778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:12:38 101764 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:12:38 105632 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:12:38 117265 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:38 117507 --> Total execution time: 2.6820
INFO - 2018-12-21 10:42:38 464273 --> Config Class Initialized
INFO - 2018-12-21 10:42:38 464524 --> Hooks Class Initialized
INFO - 2018-12-21 10:42:38 470235 --> Config Class Initialized
INFO - 2018-12-21 10:42:38 470312 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:38 471425 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:38 471498 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:38 472374 --> URI Class Initialized
INFO - 2018-12-21 10:42:38 476897 --> Config Class Initialized
INFO - 2018-12-21 10:42:38 476999 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:38 478854 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:38 478950 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:38 480040 --> URI Class Initialized
INFO - 2018-12-21 10:42:38 482022 --> Router Class Initialized
DEBUG - 2018-12-21 10:42:38 483520 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:38 483632 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:38 484967 --> URI Class Initialized
INFO - 2018-12-21 10:42:38 487027 --> Router Class Initialized
INFO - 2018-12-21 10:42:38 488346 --> Output Class Initialized
INFO - 2018-12-21 10:42:38 489330 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:38 490261 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:38 490329 --> Input Class Initialized
INFO - 2018-12-21 10:42:38 490655 --> Language Class Initialized
ERROR - 2018-12-21 10:42:38 491158 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:42:38 494409 --> Router Class Initialized
INFO - 2018-12-21 10:42:38 495836 --> Output Class Initialized
INFO - 2018-12-21 10:42:38 496886 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:38 497874 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:38 497942 --> Input Class Initialized
INFO - 2018-12-21 10:42:38 498259 --> Language Class Initialized
ERROR - 2018-12-21 10:42:38 498794 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:42:38 499671 --> Output Class Initialized
INFO - 2018-12-21 10:42:38 500715 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:38 501621 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:38 501692 --> Input Class Initialized
INFO - 2018-12-21 10:42:38 501991 --> Language Class Initialized
ERROR - 2018-12-21 10:42:38 502501 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:42:38 627281 --> Config Class Initialized
INFO - 2018-12-21 10:42:38 627372 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:38 628542 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:38 628612 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:38 629292 --> URI Class Initialized
INFO - 2018-12-21 10:42:38 631011 --> Router Class Initialized
INFO - 2018-12-21 10:42:38 632333 --> Output Class Initialized
INFO - 2018-12-21 10:42:38 633352 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:38 634402 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:38 634486 --> Input Class Initialized
INFO - 2018-12-21 10:42:38 634800 --> Language Class Initialized
ERROR - 2018-12-21 10:42:38 635308 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:42:38 697741 --> Config Class Initialized
INFO - 2018-12-21 10:42:38 697926 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:42:38 699198 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:42:38 699265 --> Utf8 Class Initialized
INFO - 2018-12-21 10:42:38 700134 --> URI Class Initialized
INFO - 2018-12-21 10:42:38 701667 --> Router Class Initialized
INFO - 2018-12-21 10:42:38 703054 --> Output Class Initialized
INFO - 2018-12-21 10:42:38 704098 --> Security Class Initialized
DEBUG - 2018-12-21 10:42:38 705107 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:42:38 705177 --> Input Class Initialized
INFO - 2018-12-21 10:42:38 705506 --> Language Class Initialized
INFO - 2018-12-21 10:42:38 709628 --> Loader Class Initialized
INFO - 2018-12-21 10:42:38 710498 --> Helper loaded: url_helper
INFO - 2018-12-21 10:42:38 710952 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:12:38 716347 --> Database Driver Class Initialized
INFO - 2018-12-21 16:12:38 721123 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:12:38 721918 --> Controller Class Initialized
INFO - 2018-12-21 16:12:38 722513 --> Final output sent to browser
DEBUG - 2018-12-21 16:12:38 722587 --> Total execution time: 0.0258
INFO - 2018-12-21 10:43:20 101984 --> Config Class Initialized
INFO - 2018-12-21 10:43:20 102324 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:20 106132 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:20 106297 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:20 107870 --> URI Class Initialized
DEBUG - 2018-12-21 10:43:20 110435 --> No URI present. Default controller set.
INFO - 2018-12-21 10:43:20 110584 --> Router Class Initialized
INFO - 2018-12-21 10:43:20 113317 --> Output Class Initialized
INFO - 2018-12-21 10:43:20 115318 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:20 117260 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:20 117394 --> Input Class Initialized
INFO - 2018-12-21 10:43:20 118022 --> Language Class Initialized
INFO - 2018-12-21 10:43:20 121985 --> Loader Class Initialized
INFO - 2018-12-21 10:43:20 123651 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:20 124528 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:20 135004 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:20 143498 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:20 144987 --> Controller Class Initialized
INFO - 2018-12-21 16:13:20 145745 --> Parser Class Initialized
INFO - 2018-12-21 16:13:20 146847 --> Helper loaded: html_helper
INFO - 2018-12-21 16:13:20 148025 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-21 16:13:20 150635 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:20 209880 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-21 16:13:20 215080 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-21 16:13:20 215929 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:20 216758 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-21 16:13:20 219974 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:13:20 222059 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:13:20 222235 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:13:20 226701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 228519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 239180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 241461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 244420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 244869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 245616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 246635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 249516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 249929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 250653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 251633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 254496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 254901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 255629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 256613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 259491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 259916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 260689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 261962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 266825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 267261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 268019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 269078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 272166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 272643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 273405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 274421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 277553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 278002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 278834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 279827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 282906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 283339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 284133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 285106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 288217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 288672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 289464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 290424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 291335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 292239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 293143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 294039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 294938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 295870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 296762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 297646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 298544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 299427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 300313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 301202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 302092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 303008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 303939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 304737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 305550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 306329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 307159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 308118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 311471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 311904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 312798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 313946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 317320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 317845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 318847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 319845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 323533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 323976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 324889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 325869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 329096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 329562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 330463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 331451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 334800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 335241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 336148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 337125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 340548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 341000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 341911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 345067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 346086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 349277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 350265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 353799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 354899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 358346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 359344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 362472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 363471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 366624 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:20 367597 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-21 16:13:20 370764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 372730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 373172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:20 376363 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:20 377135 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:13:20 386639 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:20 386830 --> Total execution time: 0.2783
INFO - 2018-12-21 10:43:22 454582 --> Config Class Initialized
INFO - 2018-12-21 10:43:22 454863 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:22 457618 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:22 457727 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:22 459544 --> URI Class Initialized
INFO - 2018-12-21 10:43:22 463296 --> Router Class Initialized
INFO - 2018-12-21 10:43:22 466429 --> Output Class Initialized
INFO - 2018-12-21 10:43:22 468861 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:22 471062 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:22 471168 --> Input Class Initialized
INFO - 2018-12-21 10:43:22 471795 --> Language Class Initialized
INFO - 2018-12-21 10:43:22 482597 --> Loader Class Initialized
INFO - 2018-12-21 10:43:22 484683 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:22 485627 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:22 494317 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:22 502563 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:22 504003 --> Controller Class Initialized
INFO - 2018-12-21 16:13:22 505003 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:22 505115 --> Total execution time: 0.0528
INFO - 2018-12-21 10:43:24 595544 --> Config Class Initialized
INFO - 2018-12-21 10:43:24 595851 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:24 597948 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:24 598068 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:24 600110 --> URI Class Initialized
INFO - 2018-12-21 10:43:24 604537 --> Router Class Initialized
INFO - 2018-12-21 10:43:24 606812 --> Output Class Initialized
INFO - 2018-12-21 10:43:24 608283 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:24 609653 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:24 609744 --> Input Class Initialized
INFO - 2018-12-21 10:43:24 610165 --> Language Class Initialized
ERROR - 2018-12-21 10:43:24 610888 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:43:24 771718 --> Config Class Initialized
INFO - 2018-12-21 10:43:24 772083 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:24 773487 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:24 773561 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:24 774653 --> URI Class Initialized
INFO - 2018-12-21 10:43:24 777453 --> Router Class Initialized
INFO - 2018-12-21 10:43:24 778925 --> Output Class Initialized
INFO - 2018-12-21 10:43:24 780112 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:24 781169 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:24 781243 --> Input Class Initialized
INFO - 2018-12-21 10:43:24 781596 --> Language Class Initialized
ERROR - 2018-12-21 10:43:24 782155 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 10:43:26 846733 --> Config Class Initialized
INFO - 2018-12-21 10:43:26 846848 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:26 848330 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:26 848431 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:26 849337 --> URI Class Initialized
INFO - 2018-12-21 10:43:26 851885 --> Router Class Initialized
INFO - 2018-12-21 10:43:26 853559 --> Output Class Initialized
INFO - 2018-12-21 10:43:26 854839 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:26 856043 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:26 856134 --> Input Class Initialized
INFO - 2018-12-21 10:43:26 856544 --> Language Class Initialized
INFO - 2018-12-21 10:43:26 858995 --> Loader Class Initialized
INFO - 2018-12-21 10:43:26 859993 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:26 860533 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:26 867141 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:26 871105 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:26 872108 --> Controller Class Initialized
INFO - 2018-12-21 16:13:26 872642 --> Parser Class Initialized
INFO - 2018-12-21 16:13:26 873405 --> Helper loaded: html_helper
INFO - 2018-12-21 16:13:26 875236 --> Model Class Initialized
INFO - 2018-12-21 16:13:26 878897 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:26 879492 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:13:26 880367 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:13:26 881285 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:13:26 881402 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:13:26 882700 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:13:26 884145 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:13:26 884270 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:13:26 885126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 885776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 886404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 887053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 887686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 888314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 888956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 889580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 890197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 890821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 891443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 892061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 892684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 893301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 893982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 894659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 895263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 895880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 896518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 897126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 897742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 898345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 898972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 899585 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:13:26 900291 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-21 16:13:26 900403 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-21 16:13:26 900507 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-21 16:13:26 902579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 907042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 908329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:26 917428 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:26 920078 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:13:26 927998 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:26 928159 --> Total execution time: 0.0755
INFO - 2018-12-21 10:43:29 427373 --> Config Class Initialized
INFO - 2018-12-21 10:43:29 427727 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:29 430151 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:29 430280 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:29 431950 --> URI Class Initialized
INFO - 2018-12-21 10:43:29 436199 --> Router Class Initialized
INFO - 2018-12-21 10:43:29 438904 --> Output Class Initialized
INFO - 2018-12-21 10:43:29 440895 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:29 445976 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:29 446228 --> Input Class Initialized
INFO - 2018-12-21 10:43:29 447813 --> Language Class Initialized
INFO - 2018-12-21 10:43:29 460509 --> Loader Class Initialized
INFO - 2018-12-21 10:43:29 465173 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:29 467531 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:29 502762 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:29 510715 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:29 512211 --> Controller Class Initialized
INFO - 2018-12-21 16:13:29 512969 --> Parser Class Initialized
INFO - 2018-12-21 16:13:29 514070 --> Helper loaded: html_helper
INFO - 2018-12-21 16:13:29 516716 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:29 526722 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-21 16:13:29 527549 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:29 528189 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:13:29 530184 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:13:29 533082 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:13:29 535182 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:13:29 535361 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:13:29 538598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 540183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 550441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 551356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 553457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 554229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 554665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 557563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 558630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 560611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 561320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 562444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 575923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 577531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 587594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 590405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 591661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 603202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 604578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 606652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 607407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 607811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 610920 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 10:43:29 637111 --> Config Class Initialized
INFO - 2018-12-21 10:43:29 637444 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:29 639844 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:29 639971 --> Utf8 Class Initialized
DEBUG - 2018-12-21 16:13:29 641772 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:29 643989 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-21 16:13:29 646832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 648741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 649121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:29 652237 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 10:43:29 653151 --> URI Class Initialized
INFO - 2018-12-21 10:43:29 655281 --> Router Class Initialized
INFO - 2018-12-21 10:43:29 657248 --> Output Class Initialized
INFO - 2018-12-21 10:43:29 658665 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:29 660006 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:29 660099 --> Input Class Initialized
INFO - 2018-12-21 10:43:29 660541 --> Language Class Initialized
INFO - 2018-12-21 16:13:29 664202 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:13:29 669924 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:29 670023 --> Total execution time: 0.2399
INFO - 2018-12-21 10:43:29 681241 --> Loader Class Initialized
INFO - 2018-12-21 10:43:29 682406 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:29 683026 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:29 690311 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:29 695964 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:29 697010 --> Controller Class Initialized
INFO - 2018-12-21 16:13:29 697772 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:29 697860 --> Total execution time: 0.0628
INFO - 2018-12-21 10:43:30 381073 --> Config Class Initialized
INFO - 2018-12-21 10:43:30 381316 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:30 383224 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:30 383318 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:30 384716 --> URI Class Initialized
INFO - 2018-12-21 10:43:30 389575 --> Router Class Initialized
INFO - 2018-12-21 10:43:30 391969 --> Output Class Initialized
INFO - 2018-12-21 10:43:30 393721 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:30 395375 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:30 395477 --> Input Class Initialized
INFO - 2018-12-21 10:43:30 395803 --> Language Class Initialized
ERROR - 2018-12-21 10:43:30 396332 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:43:30 500799 --> Config Class Initialized
INFO - 2018-12-21 10:43:30 501022 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:30 502800 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:30 502907 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:30 504322 --> URI Class Initialized
INFO - 2018-12-21 10:43:30 509785 --> Router Class Initialized
INFO - 2018-12-21 10:43:30 512769 --> Output Class Initialized
INFO - 2018-12-21 10:43:30 515021 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:30 516968 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:30 517034 --> Input Class Initialized
INFO - 2018-12-21 10:43:30 517327 --> Language Class Initialized
ERROR - 2018-12-21 10:43:30 517827 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:43:30 872500 --> Config Class Initialized
INFO - 2018-12-21 10:43:30 872797 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:30 874844 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:30 874979 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:30 876421 --> URI Class Initialized
INFO - 2018-12-21 10:43:30 879820 --> Router Class Initialized
INFO - 2018-12-21 10:43:30 881300 --> Output Class Initialized
INFO - 2018-12-21 10:43:30 882381 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:30 883379 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:30 883477 --> Input Class Initialized
INFO - 2018-12-21 10:43:30 884007 --> Language Class Initialized
ERROR - 2018-12-21 10:43:30 884742 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:43:30 982718 --> Config Class Initialized
INFO - 2018-12-21 10:43:30 982809 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:30 983922 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:30 984057 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:30 984798 --> URI Class Initialized
INFO - 2018-12-21 10:43:30 987113 --> Router Class Initialized
INFO - 2018-12-21 10:43:30 988445 --> Output Class Initialized
INFO - 2018-12-21 10:43:30 989439 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:30 991056 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:30 991156 --> Input Class Initialized
INFO - 2018-12-21 10:43:30 991569 --> Language Class Initialized
ERROR - 2018-12-21 10:43:30 992077 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:43:31 755124 --> Config Class Initialized
INFO - 2018-12-21 10:43:31 755218 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:31 756465 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:31 756542 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:31 757534 --> URI Class Initialized
INFO - 2018-12-21 10:43:31 758963 --> Router Class Initialized
INFO - 2018-12-21 10:43:31 760196 --> Output Class Initialized
INFO - 2018-12-21 10:43:31 761200 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:31 762134 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:31 762201 --> Input Class Initialized
INFO - 2018-12-21 10:43:31 762559 --> Language Class Initialized
INFO - 2018-12-21 10:43:31 766926 --> Loader Class Initialized
INFO - 2018-12-21 10:43:31 767791 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:31 768249 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:31 773695 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:31 778672 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:31 779480 --> Controller Class Initialized
INFO - 2018-12-21 16:13:31 780029 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:31 780092 --> Total execution time: 0.0264
INFO - 2018-12-21 10:43:40 943265 --> Config Class Initialized
INFO - 2018-12-21 10:43:40 943623 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:40 946039 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:40 946172 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:40 947875 --> URI Class Initialized
INFO - 2018-12-21 10:43:40 951266 --> Router Class Initialized
INFO - 2018-12-21 10:43:40 954013 --> Output Class Initialized
INFO - 2018-12-21 10:43:40 956018 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:40 957959 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:40 958091 --> Input Class Initialized
INFO - 2018-12-21 10:43:40 958717 --> Language Class Initialized
INFO - 2018-12-21 10:43:40 962438 --> Loader Class Initialized
INFO - 2018-12-21 10:43:40 964070 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:40 964951 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:40 975282 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:40 984188 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:40 985688 --> Controller Class Initialized
INFO - 2018-12-21 16:13:40 986428 --> Parser Class Initialized
INFO - 2018-12-21 16:13:40 987528 --> Helper loaded: html_helper
DEBUG - 2018-12-21 16:13:40 987673 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-21 16:13:40 990263 --> Model Class Initialized
INFO - 2018-12-21 16:13:41 010561 --> Helper loaded: cookie_helper
DEBUG - 2018-12-21 16:13:41 013514 --> updatecount for view business88888888 [INSERT INTO `bd_property_view_user` (`viewed_form_id`, `viewed_user_id`, `view_datetime`) VALUES ('305', 'gaurav@gmail.com', '2018-12-21 04:13:41')]
INFO - 2018-12-21 16:13:41 014238 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:41 015938 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:13:41 017909 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:13:41 023720 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:13:41 026112 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:13:41 026298 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:13:41 037755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 039906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 044723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 046068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 047310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 048607 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:41 051456 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-21 16:13:41 054161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 056997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 058031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:41 062221 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:41 064600 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:13:41 073663 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:41 073822 --> Total execution time: 0.1245
INFO - 2018-12-21 10:43:41 357218 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 357495 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:41 364670 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 364805 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 367496 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 368402 --> Hooks Class Initialized
INFO - 2018-12-21 10:43:41 369643 --> URI Class Initialized
DEBUG - 2018-12-21 10:43:41 373486 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 375602 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 377351 --> URI Class Initialized
INFO - 2018-12-21 10:43:41 378380 --> Router Class Initialized
INFO - 2018-12-21 10:43:41 383033 --> Output Class Initialized
INFO - 2018-12-21 10:43:41 387613 --> Security Class Initialized
INFO - 2018-12-21 10:43:41 389257 --> Router Class Initialized
DEBUG - 2018-12-21 10:43:41 394171 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 394309 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 394927 --> Language Class Initialized
INFO - 2018-12-21 10:43:41 397178 --> Output Class Initialized
ERROR - 2018-12-21 10:43:41 399108 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:41 402019 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:41 405282 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 405487 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 406449 --> Language Class Initialized
ERROR - 2018-12-21 10:43:41 408044 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:41 446221 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 446573 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:41 449060 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 449192 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 450881 --> URI Class Initialized
INFO - 2018-12-21 10:43:41 455534 --> Router Class Initialized
INFO - 2018-12-21 10:43:41 458200 --> Output Class Initialized
INFO - 2018-12-21 10:43:41 460417 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:41 461615 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 461697 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 462069 --> Language Class Initialized
ERROR - 2018-12-21 10:43:41 462697 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:41 471787 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 471985 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:41 473469 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 473555 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 474548 --> URI Class Initialized
INFO - 2018-12-21 10:43:41 476313 --> Router Class Initialized
INFO - 2018-12-21 10:43:41 477930 --> Output Class Initialized
INFO - 2018-12-21 10:43:41 479176 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:41 480336 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 480420 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 480806 --> Language Class Initialized
INFO - 2018-12-21 10:43:41 485632 --> Loader Class Initialized
INFO - 2018-12-21 10:43:41 486664 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:41 487195 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:41 493515 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:41 498867 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:41 499785 --> Controller Class Initialized
INFO - 2018-12-21 16:13:41 500443 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:41 500524 --> Total execution time: 0.0299
INFO - 2018-12-21 10:43:41 509855 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 510003 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:41 512094 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 512224 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 513569 --> URI Class Initialized
INFO - 2018-12-21 10:43:41 516618 --> Router Class Initialized
INFO - 2018-12-21 10:43:41 522646 --> Output Class Initialized
INFO - 2018-12-21 10:43:41 524466 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:41 526168 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 526295 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 526868 --> Language Class Initialized
ERROR - 2018-12-21 10:43:41 527781 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:41 629498 --> Config Class Initialized
INFO - 2018-12-21 10:43:41 629703 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:41 632968 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:41 633145 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:41 635185 --> URI Class Initialized
INFO - 2018-12-21 10:43:41 639657 --> Router Class Initialized
INFO - 2018-12-21 10:43:41 642468 --> Output Class Initialized
INFO - 2018-12-21 10:43:41 644418 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:41 646161 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:41 646291 --> Input Class Initialized
INFO - 2018-12-21 10:43:41 646873 --> Language Class Initialized
ERROR - 2018-12-21 10:43:41 647804 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:42 587202 --> Config Class Initialized
INFO - 2018-12-21 10:43:42 587348 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:42 589157 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:42 589268 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:42 590372 --> URI Class Initialized
INFO - 2018-12-21 10:43:42 593025 --> Router Class Initialized
INFO - 2018-12-21 10:43:42 595047 --> Output Class Initialized
INFO - 2018-12-21 10:43:42 596642 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:42 598154 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:42 598263 --> Input Class Initialized
INFO - 2018-12-21 10:43:42 598756 --> Language Class Initialized
ERROR - 2018-12-21 10:43:42 599524 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:49 099926 --> Config Class Initialized
INFO - 2018-12-21 10:43:49 100265 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:49 102726 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:49 102859 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:49 104515 --> URI Class Initialized
INFO - 2018-12-21 10:43:49 107937 --> Router Class Initialized
INFO - 2018-12-21 10:43:49 110611 --> Output Class Initialized
INFO - 2018-12-21 10:43:49 112606 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:49 114517 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:49 114646 --> Input Class Initialized
INFO - 2018-12-21 10:43:49 115242 --> Language Class Initialized
INFO - 2018-12-21 10:43:49 118985 --> Loader Class Initialized
INFO - 2018-12-21 10:43:49 120606 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:49 121474 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:49 131803 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:49 140779 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:49 142258 --> Controller Class Initialized
INFO - 2018-12-21 16:13:49 143002 --> Parser Class Initialized
INFO - 2018-12-21 16:13:49 144097 --> Helper loaded: html_helper
DEBUG - 2018-12-21 16:13:49 144239 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-21 16:13:49 146960 --> Model Class Initialized
INFO - 2018-12-21 16:13:49 156027 --> Helper loaded: cookie_helper
INFO - 2018-12-21 16:13:49 156784 --> Model Class Initialized
DEBUG - 2018-12-21 16:13:49 157757 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:13:49 158982 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:13:49 161953 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:13:49 164051 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:13:49 164227 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:13:49 175993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 177953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 181044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 182101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 182982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 184052 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:49 186089 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-21 16:13:49 188684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 190574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 190979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:13:49 193978 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:13:49 196043 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:13:49 204473 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:49 204607 --> Total execution time: 0.0991
INFO - 2018-12-21 10:43:49 551960 --> Config Class Initialized
INFO - 2018-12-21 10:43:49 552146 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:49 554548 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:49 554707 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:49 556428 --> URI Class Initialized
INFO - 2018-12-21 10:43:49 566190 --> Router Class Initialized
INFO - 2018-12-21 10:43:49 569025 --> Output Class Initialized
INFO - 2018-12-21 10:43:49 570909 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:49 574049 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:49 574223 --> Input Class Initialized
INFO - 2018-12-21 10:43:49 574975 --> Language Class Initialized
INFO - 2018-12-21 10:43:49 584060 --> Config Class Initialized
INFO - 2018-12-21 10:43:49 584386 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:49 589288 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:49 589436 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:49 591109 --> URI Class Initialized
ERROR - 2018-12-21 10:43:49 596060 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:49 599551 --> Router Class Initialized
INFO - 2018-12-21 10:43:49 602369 --> Output Class Initialized
INFO - 2018-12-21 10:43:49 606322 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:49 609711 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:49 609896 --> Input Class Initialized
INFO - 2018-12-21 10:43:49 610960 --> Language Class Initialized
ERROR - 2018-12-21 10:43:49 612543 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:49 627929 --> Config Class Initialized
INFO - 2018-12-21 10:43:49 628061 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:49 629936 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:49 630012 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:49 630717 --> URI Class Initialized
INFO - 2018-12-21 10:43:49 632427 --> Router Class Initialized
INFO - 2018-12-21 10:43:49 633707 --> Output Class Initialized
INFO - 2018-12-21 10:43:49 634700 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:49 635636 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:49 635708 --> Input Class Initialized
INFO - 2018-12-21 10:43:49 636013 --> Language Class Initialized
ERROR - 2018-12-21 10:43:49 636514 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:50 403031 --> Config Class Initialized
INFO - 2018-12-21 10:43:50 403372 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:50 406487 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:50 406639 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:50 407596 --> URI Class Initialized
INFO - 2018-12-21 10:43:50 410182 --> Router Class Initialized
INFO - 2018-12-21 10:43:50 412322 --> Output Class Initialized
INFO - 2018-12-21 10:43:50 413667 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:50 415102 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:50 415195 --> Input Class Initialized
INFO - 2018-12-21 10:43:50 415606 --> Language Class Initialized
ERROR - 2018-12-21 10:43:50 416286 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:50 518716 --> Config Class Initialized
INFO - 2018-12-21 10:43:50 518878 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:50 520831 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:50 520925 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:50 522082 --> URI Class Initialized
INFO - 2018-12-21 10:43:50 525170 --> Router Class Initialized
INFO - 2018-12-21 10:43:50 527584 --> Output Class Initialized
INFO - 2018-12-21 10:43:50 529396 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:50 531126 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:50 531255 --> Input Class Initialized
INFO - 2018-12-21 10:43:50 531829 --> Language Class Initialized
ERROR - 2018-12-21 10:43:50 532742 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:43:51 227199 --> Config Class Initialized
INFO - 2018-12-21 10:43:51 227356 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:51 229178 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:51 229293 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:51 230376 --> URI Class Initialized
INFO - 2018-12-21 10:43:51 232332 --> Router Class Initialized
INFO - 2018-12-21 10:43:51 234306 --> Output Class Initialized
INFO - 2018-12-21 10:43:51 235815 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:51 237662 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:51 237775 --> Input Class Initialized
INFO - 2018-12-21 10:43:51 238243 --> Language Class Initialized
INFO - 2018-12-21 10:43:51 244024 --> Loader Class Initialized
INFO - 2018-12-21 10:43:51 245263 --> Helper loaded: url_helper
INFO - 2018-12-21 10:43:51 245930 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:13:51 255338 --> Database Driver Class Initialized
INFO - 2018-12-21 16:13:51 259963 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:13:51 262111 --> Controller Class Initialized
INFO - 2018-12-21 16:13:51 263175 --> Final output sent to browser
DEBUG - 2018-12-21 16:13:51 263384 --> Total execution time: 0.0386
INFO - 2018-12-21 10:43:57 934310 --> Config Class Initialized
INFO - 2018-12-21 10:43:57 934803 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:43:57 938549 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:43:57 938730 --> Utf8 Class Initialized
INFO - 2018-12-21 10:43:57 942660 --> URI Class Initialized
INFO - 2018-12-21 10:43:57 947509 --> Router Class Initialized
INFO - 2018-12-21 10:43:57 950236 --> Output Class Initialized
INFO - 2018-12-21 10:43:57 952250 --> Security Class Initialized
DEBUG - 2018-12-21 10:43:57 954200 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:43:57 954341 --> Input Class Initialized
INFO - 2018-12-21 10:43:57 954957 --> Language Class Initialized
ERROR - 2018-12-21 10:43:57 955960 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-21 10:44:54 130664 --> Config Class Initialized
INFO - 2018-12-21 10:44:54 130919 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:54 132683 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:54 132771 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:54 133986 --> URI Class Initialized
INFO - 2018-12-21 10:44:54 136343 --> Router Class Initialized
INFO - 2018-12-21 10:44:54 137762 --> Output Class Initialized
INFO - 2018-12-21 10:44:54 138808 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:54 139830 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:54 139899 --> Input Class Initialized
INFO - 2018-12-21 10:44:54 140216 --> Language Class Initialized
INFO - 2018-12-21 10:44:54 142250 --> Loader Class Initialized
INFO - 2018-12-21 10:44:54 143100 --> Helper loaded: url_helper
INFO - 2018-12-21 10:44:54 143574 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:14:54 148978 --> Database Driver Class Initialized
INFO - 2018-12-21 16:14:54 154256 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:14:54 155047 --> Controller Class Initialized
INFO - 2018-12-21 16:14:54 155441 --> Parser Class Initialized
INFO - 2018-12-21 16:14:54 156033 --> Helper loaded: html_helper
INFO - 2018-12-21 16:14:54 157406 --> Model Class Initialized
INFO - 2018-12-21 16:14:54 222203 --> Model Class Initialized
DEBUG - 2018-12-21 16:14:54 222754 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:14:54 223444 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:14:54 224155 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:14:54 224246 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-21 16:14:54 225214 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:14:54 226330 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:14:54 226429 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:14:54 227036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 227540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 228029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 228514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 228986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 229494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 229974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 230452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 230927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 231394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 231875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 232340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 232820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 233298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 233865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 234333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 234827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 235294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 235759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 236226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 236696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 237162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 237647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 238118 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-21 16:14:54 238693 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-21 16:14:54 238781 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-21 16:14:54 238848 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-21 16:14:54 240324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 242770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 243788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:54 249423 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:14:54 250622 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:14:54 256234 --> Final output sent to browser
DEBUG - 2018-12-21 16:14:54 256314 --> Total execution time: 0.1219
INFO - 2018-12-21 10:44:55 322643 --> Config Class Initialized
INFO - 2018-12-21 10:44:55 322736 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:55 325727 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:55 325895 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:55 328423 --> URI Class Initialized
INFO - 2018-12-21 10:44:55 331415 --> Router Class Initialized
INFO - 2018-12-21 10:44:55 332981 --> Output Class Initialized
INFO - 2018-12-21 10:44:55 334196 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:55 335351 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:55 335444 --> Input Class Initialized
INFO - 2018-12-21 10:44:55 335830 --> Language Class Initialized
INFO - 2018-12-21 10:44:55 340435 --> Loader Class Initialized
INFO - 2018-12-21 10:44:55 341409 --> Helper loaded: url_helper
INFO - 2018-12-21 10:44:55 341942 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:14:55 348165 --> Database Driver Class Initialized
INFO - 2018-12-21 16:14:55 351511 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:14:55 352386 --> Controller Class Initialized
INFO - 2018-12-21 16:14:55 353007 --> Final output sent to browser
DEBUG - 2018-12-21 16:14:55 353086 --> Total execution time: 0.0314
INFO - 2018-12-21 10:44:57 594278 --> Config Class Initialized
INFO - 2018-12-21 10:44:57 594451 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:57 596538 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:57 596667 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:57 597938 --> URI Class Initialized
INFO - 2018-12-21 10:44:57 600858 --> Router Class Initialized
INFO - 2018-12-21 10:44:57 604310 --> Output Class Initialized
INFO - 2018-12-21 10:44:57 606216 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:57 608057 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:57 608192 --> Input Class Initialized
INFO - 2018-12-21 10:44:57 608774 --> Language Class Initialized
INFO - 2018-12-21 10:44:57 612271 --> Loader Class Initialized
INFO - 2018-12-21 10:44:57 613728 --> Helper loaded: url_helper
INFO - 2018-12-21 10:44:57 614491 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:14:57 623635 --> Database Driver Class Initialized
INFO - 2018-12-21 16:14:57 628221 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:14:57 629620 --> Controller Class Initialized
INFO - 2018-12-21 16:14:57 630306 --> Parser Class Initialized
INFO - 2018-12-21 16:14:57 631308 --> Helper loaded: html_helper
INFO - 2018-12-21 16:14:57 633910 --> Model Class Initialized
DEBUG - 2018-12-21 16:14:57 645555 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-21 16:14:57 646369 --> Model Class Initialized
DEBUG - 2018-12-21 16:14:57 647346 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:14:57 649557 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:14:57 652877 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:14:57 654138 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:14:57 654261 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:14:57 656825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 658071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 665431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 666184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 667593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 668107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 668384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 670274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 670978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 672274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 672760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 673015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 674904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 675605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 676911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 677381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 677651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 679653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 680347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 681685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 682173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 682444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 684422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 685113 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:14:57 686461 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-21 16:14:57 688275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 689569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 689831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:14:57 692035 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:14:57 693633 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:14:57 701736 --> Final output sent to browser
DEBUG - 2018-12-21 16:14:57 701844 --> Total execution time: 0.1019
INFO - 2018-12-21 10:44:58 097151 --> Config Class Initialized
INFO - 2018-12-21 10:44:58 097242 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:58 098396 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:58 098474 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:58 099138 --> URI Class Initialized
INFO - 2018-12-21 10:44:58 102961 --> Config Class Initialized
INFO - 2018-12-21 10:44:58 103130 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:58 104408 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:58 104480 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:58 105374 --> URI Class Initialized
INFO - 2018-12-21 10:44:58 107861 --> Router Class Initialized
INFO - 2018-12-21 10:44:58 109339 --> Output Class Initialized
INFO - 2018-12-21 10:44:58 110925 --> Router Class Initialized
INFO - 2018-12-21 10:44:58 112210 --> Output Class Initialized
INFO - 2018-12-21 10:44:58 113179 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:58 114084 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:58 114151 --> Input Class Initialized
INFO - 2018-12-21 10:44:58 114464 --> Language Class Initialized
ERROR - 2018-12-21 10:44:58 114952 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:44:58 116055 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:58 117129 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:58 117197 --> Input Class Initialized
INFO - 2018-12-21 10:44:58 117522 --> Language Class Initialized
ERROR - 2018-12-21 10:44:58 118036 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:44:58 183482 --> Config Class Initialized
INFO - 2018-12-21 10:44:58 183727 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:58 185687 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:58 185786 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:58 187134 --> URI Class Initialized
INFO - 2018-12-21 10:44:58 191324 --> Router Class Initialized
INFO - 2018-12-21 10:44:58 193598 --> Output Class Initialized
INFO - 2018-12-21 10:44:58 195220 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:58 196826 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:58 196922 --> Input Class Initialized
INFO - 2018-12-21 10:44:58 197398 --> Language Class Initialized
ERROR - 2018-12-21 10:44:58 198370 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2018-12-21 10:44:58 224850 --> Config Class Initialized
INFO - 2018-12-21 10:44:58 224968 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:44:58 226258 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:44:58 226327 --> Utf8 Class Initialized
INFO - 2018-12-21 10:44:58 226988 --> URI Class Initialized
INFO - 2018-12-21 10:44:58 228195 --> Router Class Initialized
INFO - 2018-12-21 10:44:58 229418 --> Output Class Initialized
INFO - 2018-12-21 10:44:58 230346 --> Security Class Initialized
DEBUG - 2018-12-21 10:44:58 231230 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:44:58 231298 --> Input Class Initialized
INFO - 2018-12-21 10:44:58 231725 --> Language Class Initialized
INFO - 2018-12-21 10:44:58 235583 --> Loader Class Initialized
INFO - 2018-12-21 10:44:58 236318 --> Helper loaded: url_helper
INFO - 2018-12-21 10:44:58 236723 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:14:58 241415 --> Database Driver Class Initialized
INFO - 2018-12-21 16:14:58 244307 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:14:58 245016 --> Controller Class Initialized
INFO - 2018-12-21 16:14:58 245389 --> Final output sent to browser
DEBUG - 2018-12-21 16:14:58 245490 --> Total execution time: 0.0222
INFO - 2018-12-21 10:45:03 877824 --> Config Class Initialized
INFO - 2018-12-21 10:45:03 878160 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:03 880703 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:03 880832 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:03 882561 --> URI Class Initialized
INFO - 2018-12-21 10:45:03 886509 --> Router Class Initialized
INFO - 2018-12-21 10:45:03 889422 --> Output Class Initialized
INFO - 2018-12-21 10:45:03 891609 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:03 893805 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:03 893937 --> Input Class Initialized
INFO - 2018-12-21 10:45:03 894562 --> Language Class Initialized
INFO - 2018-12-21 10:45:03 898736 --> Loader Class Initialized
INFO - 2018-12-21 10:45:03 900491 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:03 901413 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:03 913400 --> Database Driver Class Initialized
INFO - 2018-12-21 16:15:03 922784 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:03 924422 --> Controller Class Initialized
INFO - 2018-12-21 16:15:03 925220 --> Parser Class Initialized
INFO - 2018-12-21 16:15:03 926384 --> Helper loaded: html_helper
DEBUG - 2018-12-21 16:15:03 926538 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-21 16:15:03 929553 --> Model Class Initialized
INFO - 2018-12-21 16:15:03 939300 --> Helper loaded: cookie_helper
DEBUG - 2018-12-21 16:15:03 942130 --> updatecount for view business88888888 [INSERT INTO `bd_property_view_user` (`viewed_form_id`, `viewed_user_id`, `view_datetime`) VALUES ('281', 'gaurav@gmail.com', '2018-12-21 04:15:03')]
INFO - 2018-12-21 16:15:03 942914 --> Model Class Initialized
DEBUG - 2018-12-21 16:15:03 943737 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:15:03 945063 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:15:03 948218 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:15:03 950448 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:15:03 950640 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:15:03 965128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 967504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 971338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 972402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 973319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 974261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 989734 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:03 992500 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-21 16:15:03 995368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 997987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:03 998492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:04 002899 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:04 005740 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:15:04 014127 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:04 014293 --> Total execution time: 0.1312
INFO - 2018-12-21 10:45:05 970669 --> Config Class Initialized
INFO - 2018-12-21 10:45:05 970760 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:05 971945 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:05 972016 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:05 972706 --> URI Class Initialized
INFO - 2018-12-21 10:45:05 974082 --> Router Class Initialized
INFO - 2018-12-21 10:45:05 975342 --> Output Class Initialized
INFO - 2018-12-21 10:45:05 976317 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:05 977236 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:05 977305 --> Input Class Initialized
INFO - 2018-12-21 10:45:05 977629 --> Language Class Initialized
INFO - 2018-12-21 10:45:05 979402 --> Loader Class Initialized
INFO - 2018-12-21 10:45:05 980176 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:05 980633 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:05 985456 --> Database Driver Class Initialized
INFO - 2018-12-21 16:15:05 988981 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:05 989722 --> Controller Class Initialized
INFO - 2018-12-21 16:15:05 990092 --> Parser Class Initialized
INFO - 2018-12-21 16:15:05 990637 --> Helper loaded: html_helper
DEBUG - 2018-12-21 16:15:05 990715 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-21 16:15:05 992116 --> Model Class Initialized
INFO - 2018-12-21 16:15:05 999087 --> Helper loaded: cookie_helper
DEBUG - 2018-12-21 16:15:06 103590 --> updatecount for view business88888888 [INSERT INTO `bd_property_view_user` (`viewed_form_id`, `viewed_user_id`, `view_datetime`) VALUES ('272', 'gaurav@gmail.com', '2018-12-21 04:15:06')]
INFO - 2018-12-21 16:15:06 104074 --> Model Class Initialized
DEBUG - 2018-12-21 16:15:06 104563 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:15:06 105232 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:15:06 107176 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:15:06 108211 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:15:06 108309 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:15:06 115669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 116882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 118690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 119399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 120115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 120759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 122077 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:06 123179 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-21 16:15:06 124459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 125684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 125912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:06 127612 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:06 128787 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:15:06 136611 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:06 136694 --> Total execution time: 0.1596
INFO - 2018-12-21 10:45:06 759723 --> Config Class Initialized
INFO - 2018-12-21 10:45:06 759865 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:06 761857 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:06 761975 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:06 763159 --> URI Class Initialized
INFO - 2018-12-21 10:45:06 766854 --> Router Class Initialized
INFO - 2018-12-21 10:45:06 769038 --> Output Class Initialized
INFO - 2018-12-21 10:45:06 770734 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:06 772326 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:06 772459 --> Input Class Initialized
INFO - 2018-12-21 10:45:06 772980 --> Language Class Initialized
ERROR - 2018-12-21 10:45:06 773821 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:06 862957 --> Config Class Initialized
INFO - 2018-12-21 10:45:06 863044 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:06 864701 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:06 864795 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:06 865837 --> URI Class Initialized
INFO - 2018-12-21 10:45:06 868855 --> Router Class Initialized
INFO - 2018-12-21 10:45:06 871109 --> Output Class Initialized
INFO - 2018-12-21 10:45:06 872771 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:06 874228 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:06 874324 --> Input Class Initialized
INFO - 2018-12-21 10:45:06 883671 --> Config Class Initialized
INFO - 2018-12-21 10:45:06 883912 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:06 886171 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:06 886292 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:06 887670 --> URI Class Initialized
INFO - 2018-12-21 10:45:06 891079 --> Router Class Initialized
INFO - 2018-12-21 10:45:06 892508 --> Output Class Initialized
INFO - 2018-12-21 10:45:06 893549 --> Security Class Initialized
INFO - 2018-12-21 10:45:06 894728 --> Language Class Initialized
ERROR - 2018-12-21 10:45:06 895231 --> 404 Page Not Found: Browse-sector-listing-details/281
DEBUG - 2018-12-21 10:45:06 896836 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:06 896908 --> Input Class Initialized
INFO - 2018-12-21 10:45:06 897249 --> Language Class Initialized
ERROR - 2018-12-21 10:45:06 897803 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:07 057383 --> Config Class Initialized
INFO - 2018-12-21 10:45:07 057519 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:07 059488 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:07 059588 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:07 060749 --> URI Class Initialized
INFO - 2018-12-21 10:45:07 063791 --> Router Class Initialized
INFO - 2018-12-21 10:45:07 066036 --> Output Class Initialized
INFO - 2018-12-21 10:45:07 067766 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:07 069423 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:07 069551 --> Input Class Initialized
INFO - 2018-12-21 10:45:07 070086 --> Language Class Initialized
ERROR - 2018-12-21 10:45:07 071041 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:07 277190 --> Config Class Initialized
INFO - 2018-12-21 10:45:07 277335 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:07 279246 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:07 279359 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:07 280441 --> URI Class Initialized
INFO - 2018-12-21 10:45:07 282453 --> Router Class Initialized
INFO - 2018-12-21 10:45:07 284507 --> Output Class Initialized
INFO - 2018-12-21 10:45:07 286154 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:07 287765 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:07 287879 --> Input Class Initialized
INFO - 2018-12-21 10:45:07 288382 --> Language Class Initialized
INFO - 2018-12-21 10:45:07 295236 --> Loader Class Initialized
INFO - 2018-12-21 10:45:07 296668 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:07 297409 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:07 307919 --> Database Driver Class Initialized
INFO - 2018-12-21 16:15:07 318840 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:07 321084 --> Controller Class Initialized
INFO - 2018-12-21 16:15:07 322163 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:07 322274 --> Total execution time: 0.0465
INFO - 2018-12-21 10:45:07 773658 --> Config Class Initialized
INFO - 2018-12-21 10:45:07 773785 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:07 775753 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:07 775852 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:07 777077 --> URI Class Initialized
INFO - 2018-12-21 10:45:07 780220 --> Router Class Initialized
INFO - 2018-12-21 10:45:07 782325 --> Output Class Initialized
INFO - 2018-12-21 10:45:07 783447 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:07 784356 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:07 784451 --> Input Class Initialized
INFO - 2018-12-21 10:45:07 784761 --> Language Class Initialized
ERROR - 2018-12-21 10:45:07 785377 --> 404 Page Not Found: Browse-sector-listing-details/272
INFO - 2018-12-21 10:45:07 961023 --> Config Class Initialized
INFO - 2018-12-21 10:45:07 961117 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:07 962328 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:07 962407 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:07 963129 --> URI Class Initialized
INFO - 2018-12-21 10:45:07 964833 --> Router Class Initialized
INFO - 2018-12-21 10:45:07 966140 --> Output Class Initialized
INFO - 2018-12-21 10:45:07 968202 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:07 969373 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:07 969479 --> Input Class Initialized
INFO - 2018-12-21 10:45:07 969938 --> Language Class Initialized
ERROR - 2018-12-21 10:45:07 970829 --> 404 Page Not Found: Browse-sector-listing-details/272
INFO - 2018-12-21 10:45:08 174782 --> Config Class Initialized
INFO - 2018-12-21 10:45:08 174916 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:08 176757 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:08 176858 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:08 177947 --> URI Class Initialized
INFO - 2018-12-21 10:45:08 180978 --> Router Class Initialized
INFO - 2018-12-21 10:45:08 183110 --> Output Class Initialized
INFO - 2018-12-21 10:45:08 185003 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:08 186764 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:08 186894 --> Input Class Initialized
INFO - 2018-12-21 10:45:08 187463 --> Language Class Initialized
ERROR - 2018-12-21 10:45:08 188354 --> 404 Page Not Found: Browse-sector-listing-details/272
INFO - 2018-12-21 10:45:09 250116 --> Config Class Initialized
INFO - 2018-12-21 10:45:09 250222 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:09 251579 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:09 251667 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:09 252487 --> URI Class Initialized
INFO - 2018-12-21 10:45:09 254440 --> Router Class Initialized
INFO - 2018-12-21 10:45:09 255947 --> Output Class Initialized
INFO - 2018-12-21 10:45:09 257113 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:09 258224 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:09 258306 --> Input Class Initialized
INFO - 2018-12-21 10:45:09 258677 --> Language Class Initialized
ERROR - 2018-12-21 10:45:09 259254 --> 404 Page Not Found: Browse-sector-listing-details/272
INFO - 2018-12-21 10:45:09 556468 --> Config Class Initialized
INFO - 2018-12-21 10:45:09 556617 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:09 558675 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:09 558751 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:09 559448 --> URI Class Initialized
INFO - 2018-12-21 10:45:09 560662 --> Router Class Initialized
INFO - 2018-12-21 10:45:09 561894 --> Output Class Initialized
INFO - 2018-12-21 10:45:09 562838 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:09 563759 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:09 563827 --> Input Class Initialized
INFO - 2018-12-21 10:45:09 564124 --> Language Class Initialized
INFO - 2018-12-21 10:45:09 568814 --> Loader Class Initialized
INFO - 2018-12-21 10:45:09 570586 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:09 571227 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:09 577418 --> Database Driver Class Initialized
INFO - 2018-12-21 16:15:09 580238 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:09 580944 --> Controller Class Initialized
INFO - 2018-12-21 16:15:09 581273 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:09 581338 --> Total execution time: 0.0268
INFO - 2018-12-21 10:45:17 690175 --> Config Class Initialized
INFO - 2018-12-21 10:45:17 690505 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:17 692753 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:17 692874 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:17 694497 --> URI Class Initialized
INFO - 2018-12-21 10:45:17 699697 --> Router Class Initialized
INFO - 2018-12-21 10:45:17 704828 --> Output Class Initialized
INFO - 2018-12-21 10:45:17 706731 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:17 708544 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:17 708664 --> Input Class Initialized
INFO - 2018-12-21 10:45:17 709219 --> Language Class Initialized
ERROR - 2018-12-21 10:45:17 710150 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:18 627511 --> Config Class Initialized
INFO - 2018-12-21 10:45:18 627619 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:18 629024 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:18 629111 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:18 629987 --> URI Class Initialized
INFO - 2018-12-21 10:45:18 632520 --> Router Class Initialized
INFO - 2018-12-21 10:45:18 635046 --> Output Class Initialized
INFO - 2018-12-21 10:45:18 636389 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:18 637655 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:18 637741 --> Input Class Initialized
INFO - 2018-12-21 10:45:18 638134 --> Language Class Initialized
ERROR - 2018-12-21 10:45:18 638786 --> 404 Page Not Found: Browse-sector-listing-details/272
INFO - 2018-12-21 10:45:45 443322 --> Config Class Initialized
INFO - 2018-12-21 10:45:45 443658 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:45 446217 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:45 446314 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:45 447793 --> URI Class Initialized
INFO - 2018-12-21 10:45:45 450671 --> Router Class Initialized
INFO - 2018-12-21 10:45:45 452749 --> Output Class Initialized
INFO - 2018-12-21 10:45:45 454876 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:45 458420 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:45 458605 --> Input Class Initialized
INFO - 2018-12-21 10:45:45 459419 --> Language Class Initialized
INFO - 2018-12-21 10:45:45 464392 --> Loader Class Initialized
INFO - 2018-12-21 10:45:45 465694 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:45 466319 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:45 475090 --> Database Driver Class Initialized
INFO - 2018-12-21 16:15:45 481875 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:45 484107 --> Controller Class Initialized
INFO - 2018-12-21 16:15:45 484843 --> Parser Class Initialized
INFO - 2018-12-21 16:15:45 485634 --> Helper loaded: html_helper
DEBUG - 2018-12-21 16:15:45 485740 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-21 16:15:45 487674 --> Model Class Initialized
INFO - 2018-12-21 16:15:45 494240 --> Helper loaded: cookie_helper
INFO - 2018-12-21 16:15:45 494796 --> Model Class Initialized
DEBUG - 2018-12-21 16:15:45 495369 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-21 16:15:45 496371 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-21 16:15:45 498502 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 16:15:45 500098 --> Helper loaded: file_helper
DEBUG - 2018-12-21 16:15:45 500226 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 16:15:45 508964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 510684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 513552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 514520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 515171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 515799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 517141 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:45 518619 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-21 16:15:45 520606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 521936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 522228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 16:15:45 524530 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 16:15:45 526362 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 16:15:45 534579 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:45 534684 --> Total execution time: 0.0856
INFO - 2018-12-21 10:45:46 393809 --> Config Class Initialized
INFO - 2018-12-21 10:45:46 394145 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:46 396591 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:46 396723 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:46 414702 --> URI Class Initialized
INFO - 2018-12-21 10:45:46 421300 --> Router Class Initialized
INFO - 2018-12-21 10:45:46 424397 --> Output Class Initialized
INFO - 2018-12-21 10:45:46 427521 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:46 429503 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:46 429635 --> Input Class Initialized
INFO - 2018-12-21 10:45:46 430233 --> Language Class Initialized
ERROR - 2018-12-21 10:45:46 431284 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:46 432845 --> Config Class Initialized
INFO - 2018-12-21 10:45:46 433176 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:46 436207 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:46 436337 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:46 438069 --> URI Class Initialized
INFO - 2018-12-21 10:45:46 443864 --> Router Class Initialized
INFO - 2018-12-21 10:45:46 446592 --> Output Class Initialized
INFO - 2018-12-21 10:45:46 448620 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:46 450583 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:46 450714 --> Input Class Initialized
INFO - 2018-12-21 10:45:46 451307 --> Language Class Initialized
ERROR - 2018-12-21 10:45:46 452368 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:46 467194 --> Config Class Initialized
INFO - 2018-12-21 10:45:46 467541 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:46 469971 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:46 470099 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:46 471787 --> URI Class Initialized
INFO - 2018-12-21 10:45:46 476461 --> Router Class Initialized
INFO - 2018-12-21 10:45:46 479203 --> Output Class Initialized
INFO - 2018-12-21 10:45:46 481221 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:46 483179 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:46 483306 --> Input Class Initialized
INFO - 2018-12-21 10:45:46 483916 --> Language Class Initialized
ERROR - 2018-12-21 10:45:46 484932 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 10:45:46 575584 --> Config Class Initialized
INFO - 2018-12-21 10:45:46 575689 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:46 578800 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:46 578887 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:46 579751 --> URI Class Initialized
INFO - 2018-12-21 10:45:46 581316 --> Router Class Initialized
INFO - 2018-12-21 10:45:46 582921 --> Output Class Initialized
INFO - 2018-12-21 10:45:46 584109 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:46 585747 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:46 585829 --> Input Class Initialized
INFO - 2018-12-21 10:45:46 586182 --> Language Class Initialized
INFO - 2018-12-21 10:45:46 590868 --> Loader Class Initialized
INFO - 2018-12-21 10:45:46 591866 --> Helper loaded: url_helper
INFO - 2018-12-21 10:45:46 592372 --> Helper loaded: utility_helper
INFO - 2018-12-21 16:15:46 598485 --> Database Driver Class Initialized
INFO - 2018-12-21 10:45:46 607723 --> Config Class Initialized
INFO - 2018-12-21 10:45:46 607811 --> Hooks Class Initialized
DEBUG - 2018-12-21 10:45:46 609078 --> UTF-8 Support Enabled
INFO - 2018-12-21 10:45:46 609157 --> Utf8 Class Initialized
INFO - 2018-12-21 10:45:46 609952 --> URI Class Initialized
INFO - 2018-12-21 10:45:46 611968 --> Router Class Initialized
INFO - 2018-12-21 16:15:46 614420 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 16:15:46 615390 --> Controller Class Initialized
INFO - 2018-12-21 16:15:46 616056 --> Final output sent to browser
DEBUG - 2018-12-21 16:15:46 616132 --> Total execution time: 0.0416
INFO - 2018-12-21 10:45:46 618113 --> Output Class Initialized
INFO - 2018-12-21 10:45:46 619371 --> Security Class Initialized
DEBUG - 2018-12-21 10:45:46 620981 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 10:45:46 621089 --> Input Class Initialized
INFO - 2018-12-21 10:45:46 621648 --> Language Class Initialized
ERROR - 2018-12-21 10:45:46 622505 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-21 15:53:14 944860 --> Config Class Initialized
INFO - 2018-12-21 15:53:15 018611 --> Hooks Class Initialized
DEBUG - 2018-12-21 15:53:15 054753 --> UTF-8 Support Enabled
INFO - 2018-12-21 15:53:15 058523 --> Utf8 Class Initialized
INFO - 2018-12-21 15:53:15 060348 --> URI Class Initialized
DEBUG - 2018-12-21 15:53:15 098186 --> No URI present. Default controller set.
INFO - 2018-12-21 15:53:15 109623 --> Router Class Initialized
INFO - 2018-12-21 15:53:15 140800 --> Output Class Initialized
INFO - 2018-12-21 15:53:15 150378 --> Security Class Initialized
DEBUG - 2018-12-21 15:53:15 182890 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 15:53:15 195638 --> Input Class Initialized
INFO - 2018-12-21 15:53:15 196991 --> Language Class Initialized
INFO - 2018-12-21 15:53:15 256325 --> Loader Class Initialized
INFO - 2018-12-21 15:53:15 266120 --> Helper loaded: url_helper
INFO - 2018-12-21 15:53:15 277260 --> Helper loaded: utility_helper
INFO - 2018-12-21 21:23:15 419944 --> Database Driver Class Initialized
INFO - 2018-12-21 21:23:15 471460 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 21:23:15 481930 --> Controller Class Initialized
INFO - 2018-12-21 21:23:15 486418 --> Parser Class Initialized
INFO - 2018-12-21 21:23:15 494649 --> Helper loaded: html_helper
INFO - 2018-12-21 21:23:15 525777 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-21 21:23:15 528883 --> Model Class Initialized
DEBUG - 2018-12-21 21:23:15 574151 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-21 21:23:15 579224 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-21'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-21 21:23:15 586169 --> Model Class Initialized
DEBUG - 2018-12-21 21:23:15 587644 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-21 21:23:15 808262 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-21 21:23:15 818676 --> Helper loaded: file_helper
DEBUG - 2018-12-21 21:23:15 827680 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-21 21:23:15 850141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 853642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 922800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 942881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 946016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 946485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 947227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 948250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 951131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 951620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 952347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 953324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 956249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 957519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 960329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 962027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 972909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 973349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 974137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 975095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 978043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 978560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 979309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 980185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 983225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 983691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 984466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 985295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 988317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 988815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 989622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 990708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 993859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 994311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 995095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 996232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 999454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:15 999893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 000694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 001739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 002706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 003683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 004528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 005330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 006136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 006932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 007735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 008584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 009363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 010221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 011022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 011809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 012595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 013283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 014205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 015016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 015870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 016683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 017513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 018256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 021599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 022023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 022912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 023650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 026845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 027287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 028212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 028989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 032304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 032810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 033798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 034616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 038019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 038485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 039359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 040137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 043481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 043930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 044838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 045605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 048865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 049315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 050259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 053441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 054363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 057760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 058579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 061888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 062705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 066096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 066896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 070056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 070852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 074065 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 21:23:16 074878 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-21 21:23:16 087430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 089521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 089968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-21 21:23:16 093329 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-21 21:23:16 094142 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-21 21:23:16 102855 --> Final output sent to browser
DEBUG - 2018-12-21 21:23:16 103008 --> Total execution time: 1.1840
INFO - 2018-12-21 15:53:17 281980 --> Config Class Initialized
INFO - 2018-12-21 15:53:17 282218 --> Hooks Class Initialized
DEBUG - 2018-12-21 15:53:17 294661 --> UTF-8 Support Enabled
INFO - 2018-12-21 15:53:17 294828 --> Utf8 Class Initialized
INFO - 2018-12-21 15:53:17 296186 --> URI Class Initialized
INFO - 2018-12-21 15:53:17 300337 --> Router Class Initialized
INFO - 2018-12-21 15:53:17 304941 --> Config Class Initialized
INFO - 2018-12-21 15:53:17 305267 --> Hooks Class Initialized
DEBUG - 2018-12-21 15:53:17 309119 --> UTF-8 Support Enabled
INFO - 2018-12-21 15:53:17 309253 --> Utf8 Class Initialized
INFO - 2018-12-21 15:53:17 311316 --> URI Class Initialized
INFO - 2018-12-21 15:53:17 313013 --> Output Class Initialized
INFO - 2018-12-21 15:53:17 316112 --> Security Class Initialized
DEBUG - 2018-12-21 15:53:17 317873 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 15:53:17 318003 --> Input Class Initialized
INFO - 2018-12-21 15:53:17 318594 --> Language Class Initialized
INFO - 2018-12-21 15:53:17 323010 --> Router Class Initialized
ERROR - 2018-12-21 15:53:17 327469 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 15:53:17 327867 --> Output Class Initialized
INFO - 2018-12-21 15:53:17 331964 --> Security Class Initialized
DEBUG - 2018-12-21 15:53:17 335871 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 15:53:17 336066 --> Input Class Initialized
INFO - 2018-12-21 15:53:17 336863 --> Language Class Initialized
ERROR - 2018-12-21 15:53:17 337883 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-21 15:53:17 593977 --> Config Class Initialized
INFO - 2018-12-21 15:53:17 594320 --> Hooks Class Initialized
DEBUG - 2018-12-21 15:53:17 597131 --> UTF-8 Support Enabled
INFO - 2018-12-21 15:53:17 597265 --> Utf8 Class Initialized
INFO - 2018-12-21 15:53:17 599065 --> URI Class Initialized
INFO - 2018-12-21 15:53:17 602658 --> Router Class Initialized
INFO - 2018-12-21 15:53:17 605951 --> Output Class Initialized
INFO - 2018-12-21 15:53:17 608383 --> Security Class Initialized
DEBUG - 2018-12-21 15:53:17 610646 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-21 15:53:17 610786 --> Input Class Initialized
INFO - 2018-12-21 15:53:17 611479 --> Language Class Initialized
INFO - 2018-12-21 15:53:17 633443 --> Loader Class Initialized
INFO - 2018-12-21 15:53:17 635154 --> Helper loaded: url_helper
INFO - 2018-12-21 15:53:17 636014 --> Helper loaded: utility_helper
INFO - 2018-12-21 21:23:17 646508 --> Database Driver Class Initialized
INFO - 2018-12-21 21:23:17 654407 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-21 21:23:17 655879 --> Controller Class Initialized
INFO - 2018-12-21 21:23:17 656927 --> Final output sent to browser
DEBUG - 2018-12-21 21:23:17 657052 --> Total execution time: 0.0655
