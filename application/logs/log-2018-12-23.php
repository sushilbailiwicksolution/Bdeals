<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-23 08:28:24 538716 --> Config Class Initialized
INFO - 2018-12-23 08:28:24 539032 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:28:24 561826 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:28:24 561949 --> Utf8 Class Initialized
INFO - 2018-12-23 08:28:24 563566 --> URI Class Initialized
DEBUG - 2018-12-23 08:28:24 601114 --> No URI present. Default controller set.
INFO - 2018-12-23 08:28:24 601264 --> Router Class Initialized
INFO - 2018-12-23 08:28:24 616929 --> Output Class Initialized
INFO - 2018-12-23 08:28:24 627610 --> Security Class Initialized
DEBUG - 2018-12-23 08:28:24 639355 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:28:24 639488 --> Input Class Initialized
INFO - 2018-12-23 08:28:24 640260 --> Language Class Initialized
INFO - 2018-12-23 08:28:24 655203 --> Loader Class Initialized
INFO - 2018-12-23 08:28:24 670888 --> Helper loaded: url_helper
INFO - 2018-12-23 08:28:24 674534 --> Helper loaded: utility_helper
INFO - 2018-12-23 13:58:24 727298 --> Database Driver Class Initialized
INFO - 2018-12-23 13:58:24 794524 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 13:58:24 912898 --> Controller Class Initialized
INFO - 2018-12-23 13:58:24 931096 --> Parser Class Initialized
INFO - 2018-12-23 13:58:24 931967 --> Helper loaded: html_helper
INFO - 2018-12-23 13:58:24 954359 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 13:58:24 956382 --> Model Class Initialized
DEBUG - 2018-12-23 13:58:25 131854 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-23 13:58:25 135370 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-23'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-23 13:58:25 138046 --> Model Class Initialized
DEBUG - 2018-12-23 13:58:25 139000 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-23 13:58:25 199590 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 13:58:25 211385 --> Helper loaded: file_helper
DEBUG - 2018-12-23 13:58:25 218535 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 13:58:25 244101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 252618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 310533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 313519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 315038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 315295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 315697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 316217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 317733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 317953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 318320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 318846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 320319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 320543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 320910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 321408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 322972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 323201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 323635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 324143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 325916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 326142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 326539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 327032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 328603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 328834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 329221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 329719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 331252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 331494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 331888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 332377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 333950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 334177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 334588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 335081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 336775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 337003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 337413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 337915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 338385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 338861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 339315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 339802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 340253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 340708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 341157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 341629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 342262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 342732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 343343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 343807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 344254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 344717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 345207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 345626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 346031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 346440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 346863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 347337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 349097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 349318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 349776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 350249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 351896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 352123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 352586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 353069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 354681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 354907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 355354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 355839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 357578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 357808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 358253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 358736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 360336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 360574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 361031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 361507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 363101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 363329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 363801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 365415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 365936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 367577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 368069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 369666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 370160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 371820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 372324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 373927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 374432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 376029 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 13:58:25 376524 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-23 13:58:25 389667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 411463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 412220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:25 415963 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 13:58:25 416793 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 13:58:25 425503 --> Final output sent to browser
DEBUG - 2018-12-23 13:58:25 425616 --> Total execution time: 0.8939
INFO - 2018-12-23 08:28:51 191035 --> Config Class Initialized
INFO - 2018-12-23 08:28:51 191361 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:28:51 193751 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:28:51 193877 --> Utf8 Class Initialized
INFO - 2018-12-23 08:28:51 195353 --> URI Class Initialized
DEBUG - 2018-12-23 08:28:51 197732 --> No URI present. Default controller set.
INFO - 2018-12-23 08:28:51 197860 --> Router Class Initialized
INFO - 2018-12-23 08:28:51 200414 --> Output Class Initialized
INFO - 2018-12-23 08:28:51 202445 --> Security Class Initialized
DEBUG - 2018-12-23 08:28:51 204511 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:28:51 204639 --> Input Class Initialized
INFO - 2018-12-23 08:28:51 205235 --> Language Class Initialized
INFO - 2018-12-23 08:28:51 209111 --> Loader Class Initialized
INFO - 2018-12-23 08:28:51 210695 --> Helper loaded: url_helper
INFO - 2018-12-23 08:28:51 211564 --> Helper loaded: utility_helper
INFO - 2018-12-23 13:58:51 221822 --> Database Driver Class Initialized
INFO - 2018-12-23 13:58:51 231499 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 13:58:51 233189 --> Controller Class Initialized
INFO - 2018-12-23 13:58:51 233954 --> Parser Class Initialized
INFO - 2018-12-23 13:58:51 235126 --> Helper loaded: html_helper
INFO - 2018-12-23 13:58:51 236363 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 13:58:51 239392 --> Model Class Initialized
DEBUG - 2018-12-23 13:58:51 247992 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-23 13:58:51 251518 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-23'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-23 13:58:51 252055 --> Model Class Initialized
DEBUG - 2018-12-23 13:58:51 252651 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-23 13:58:51 254892 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 13:58:51 256810 --> Helper loaded: file_helper
DEBUG - 2018-12-23 13:58:51 256993 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 13:58:51 262295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 264224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 274801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 276520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 278795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 279159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 279737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 280550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 283072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 283447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 283986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 285118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 287369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 287714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 288240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 289000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 292814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 293139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 294116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 294928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 297152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 297492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 298099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 298894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 301373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 301733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 302678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 303492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 305819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 306149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 306801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 307585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 310085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 310451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 311042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 311794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 314172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 314650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 315257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 315994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 316711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 317698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 318550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 319308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 320213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 321154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 322212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 323214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 324219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 325295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 326297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 327250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 328217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 329211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 330681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 331779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 332860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 333966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 335098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 336216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 341253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 341840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 343064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 344214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 349278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 349895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 351119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 352175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 356391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 356930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 358041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 358993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 363454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 364003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 365139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 366177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 371112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 371799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 373471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 374512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 378575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 379087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 380148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 384043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 385068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 389049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 390079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 394788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 396850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 401011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 401946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 404305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 405158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 407555 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 13:58:51 408286 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-23 13:58:51 410408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 411885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 412214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 13:58:51 414597 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 13:58:51 415162 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 13:58:51 423568 --> Final output sent to browser
DEBUG - 2018-12-23 13:58:51 423683 --> Total execution time: 0.2271
INFO - 2018-12-23 08:29:00 499779 --> Config Class Initialized
INFO - 2018-12-23 08:29:00 499974 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:29:00 501254 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:29:00 501326 --> Utf8 Class Initialized
INFO - 2018-12-23 08:29:00 502203 --> URI Class Initialized
INFO - 2018-12-23 08:29:00 504528 --> Router Class Initialized
INFO - 2018-12-23 08:29:00 505897 --> Output Class Initialized
INFO - 2018-12-23 08:29:00 506946 --> Security Class Initialized
DEBUG - 2018-12-23 08:29:00 508006 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:29:00 508075 --> Input Class Initialized
INFO - 2018-12-23 08:29:00 515054 --> Config Class Initialized
INFO - 2018-12-23 08:29:00 515238 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:29:00 516534 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:29:00 516602 --> Utf8 Class Initialized
INFO - 2018-12-23 08:29:00 517469 --> URI Class Initialized
INFO - 2018-12-23 08:29:00 519757 --> Router Class Initialized
INFO - 2018-12-23 08:29:00 521177 --> Output Class Initialized
INFO - 2018-12-23 08:29:00 522228 --> Security Class Initialized
DEBUG - 2018-12-23 08:29:00 523297 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:29:00 523366 --> Input Class Initialized
INFO - 2018-12-23 08:29:00 523705 --> Language Class Initialized
INFO - 2018-12-23 08:29:00 523996 --> Language Class Initialized
ERROR - 2018-12-23 08:29:00 532114 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2018-12-23 08:29:00 532659 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-23 08:29:00 963592 --> Config Class Initialized
INFO - 2018-12-23 08:29:00 963872 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:29:00 966131 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:29:00 966244 --> Utf8 Class Initialized
INFO - 2018-12-23 08:29:00 967747 --> URI Class Initialized
INFO - 2018-12-23 08:29:00 970786 --> Router Class Initialized
INFO - 2018-12-23 08:29:00 973232 --> Output Class Initialized
INFO - 2018-12-23 08:29:00 974987 --> Security Class Initialized
DEBUG - 2018-12-23 08:29:00 977000 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:29:00 977102 --> Input Class Initialized
INFO - 2018-12-23 08:29:00 977610 --> Language Class Initialized
INFO - 2018-12-23 08:29:01 011921 --> Loader Class Initialized
INFO - 2018-12-23 08:29:01 012845 --> Helper loaded: url_helper
INFO - 2018-12-23 08:29:01 013329 --> Helper loaded: utility_helper
INFO - 2018-12-23 13:59:01 019570 --> Database Driver Class Initialized
INFO - 2018-12-23 13:59:01 028223 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 13:59:01 029503 --> Controller Class Initialized
INFO - 2018-12-23 13:59:01 030333 --> Final output sent to browser
DEBUG - 2018-12-23 13:59:01 030427 --> Total execution time: 0.0688
INFO - 2018-12-23 08:32:27 680788 --> Config Class Initialized
INFO - 2018-12-23 08:32:27 681042 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:32:27 682832 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:32:27 682929 --> Utf8 Class Initialized
INFO - 2018-12-23 08:32:27 684228 --> URI Class Initialized
INFO - 2018-12-23 08:32:27 687150 --> Router Class Initialized
INFO - 2018-12-23 08:32:27 689311 --> Output Class Initialized
INFO - 2018-12-23 08:32:27 692852 --> Security Class Initialized
DEBUG - 2018-12-23 08:32:27 695724 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:32:27 695826 --> Input Class Initialized
INFO - 2018-12-23 08:32:27 696307 --> Language Class Initialized
INFO - 2018-12-23 08:32:27 699311 --> Loader Class Initialized
INFO - 2018-12-23 08:32:27 700509 --> Helper loaded: url_helper
INFO - 2018-12-23 08:32:27 701175 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:02:27 708873 --> Database Driver Class Initialized
INFO - 2018-12-23 14:02:27 715281 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:02:27 716336 --> Controller Class Initialized
INFO - 2018-12-23 14:02:27 716908 --> Parser Class Initialized
INFO - 2018-12-23 14:02:27 717853 --> Helper loaded: html_helper
INFO - 2018-12-23 14:02:27 719763 --> Model Class Initialized
INFO - 2018-12-23 14:02:27 736243 --> Model Class Initialized
DEBUG - 2018-12-23 14:02:27 738893 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:02:27 739799 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:02:27 749267 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-23 14:02:27 749455 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-23 14:02:27 751568 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:02:27 753150 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:02:27 753283 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:02:27 754199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 754771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 755377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 755960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 756486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 757004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 757534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 758378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 759278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 759825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 760337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 760895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 761404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 762172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 763109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 763794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 764585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 765234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 765868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 766503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 767142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 767782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 768405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 769046 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-23 14:02:27 769874 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-23 14:02:27 770081 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-23 14:02:27 770210 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-23 14:02:27 772187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 776964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 778992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:02:27 787008 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:02:27 788558 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:02:27 796391 --> Final output sent to browser
DEBUG - 2018-12-23 14:02:27 796509 --> Total execution time: 0.1098
INFO - 2018-12-23 08:32:29 688940 --> Config Class Initialized
INFO - 2018-12-23 08:32:29 689069 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:32:29 691555 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:32:29 691732 --> Utf8 Class Initialized
INFO - 2018-12-23 08:32:29 693485 --> URI Class Initialized
INFO - 2018-12-23 08:32:29 696329 --> Router Class Initialized
INFO - 2018-12-23 08:32:29 699601 --> Output Class Initialized
INFO - 2018-12-23 08:32:29 701997 --> Security Class Initialized
DEBUG - 2018-12-23 08:32:29 704327 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:32:29 704484 --> Input Class Initialized
INFO - 2018-12-23 08:32:29 705162 --> Language Class Initialized
INFO - 2018-12-23 08:32:29 712268 --> Loader Class Initialized
INFO - 2018-12-23 08:32:29 713488 --> Helper loaded: url_helper
INFO - 2018-12-23 08:32:29 714191 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:02:29 727426 --> Database Driver Class Initialized
INFO - 2018-12-23 14:02:29 733594 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:02:29 735392 --> Controller Class Initialized
INFO - 2018-12-23 14:02:29 736489 --> Final output sent to browser
DEBUG - 2018-12-23 14:02:29 736596 --> Total execution time: 0.0490
INFO - 2018-12-23 08:33:18 605818 --> Config Class Initialized
INFO - 2018-12-23 08:33:18 606180 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:18 609348 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:18 609508 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:18 611257 --> URI Class Initialized
INFO - 2018-12-23 08:33:18 615586 --> Router Class Initialized
INFO - 2018-12-23 08:33:18 618259 --> Output Class Initialized
INFO - 2018-12-23 08:33:18 620842 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:18 623712 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:18 623898 --> Input Class Initialized
INFO - 2018-12-23 08:33:18 624855 --> Language Class Initialized
INFO - 2018-12-23 08:33:18 629441 --> Loader Class Initialized
INFO - 2018-12-23 08:33:18 631083 --> Helper loaded: url_helper
INFO - 2018-12-23 08:33:18 631995 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:03:18 645108 --> Database Driver Class Initialized
INFO - 2018-12-23 14:03:18 654637 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:03:18 656156 --> Controller Class Initialized
INFO - 2018-12-23 14:03:18 656939 --> Parser Class Initialized
INFO - 2018-12-23 14:03:18 658269 --> Helper loaded: html_helper
INFO - 2018-12-23 14:03:18 661482 --> Model Class Initialized
DEBUG - 2018-12-23 14:03:18 681175 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-23 14:03:18 682133 --> Model Class Initialized
DEBUG - 2018-12-23 14:03:18 683234 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:03:18 684568 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:03:18 728748 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:03:18 732790 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:03:18 732978 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:03:18 737818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 739804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 750627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 751817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 753050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 753886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 754319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 766928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 768002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 769117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 769906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 770304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 779934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 781336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 782460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 783202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 783626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 786689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 787702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 788841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 789625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 790047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 793232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 794253 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:03:18 795414 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-23 14:03:18 798453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 800359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 800791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:03:18 808479 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:03:18 811613 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:03:18 820782 --> Final output sent to browser
DEBUG - 2018-12-23 14:03:18 820924 --> Total execution time: 0.2094
INFO - 2018-12-23 08:33:19 216021 --> Config Class Initialized
INFO - 2018-12-23 08:33:19 216186 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:19 218437 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:19 218590 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:19 219912 --> URI Class Initialized
INFO - 2018-12-23 08:33:19 223297 --> Router Class Initialized
INFO - 2018-12-23 08:33:19 225730 --> Output Class Initialized
INFO - 2018-12-23 08:33:19 227610 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:19 229470 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:19 229609 --> Input Class Initialized
INFO - 2018-12-23 08:33:19 230189 --> Language Class Initialized
ERROR - 2018-12-23 08:33:19 231141 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-23 08:33:19 298146 --> Config Class Initialized
INFO - 2018-12-23 08:33:19 298521 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:19 301270 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:19 301417 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:19 303563 --> URI Class Initialized
INFO - 2018-12-23 08:33:19 308990 --> Router Class Initialized
INFO - 2018-12-23 08:33:19 312201 --> Output Class Initialized
INFO - 2018-12-23 08:33:19 315814 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:19 319503 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:19 319771 --> Input Class Initialized
INFO - 2018-12-23 08:33:19 320426 --> Language Class Initialized
ERROR - 2018-12-23 08:33:19 321870 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-23 08:33:19 332487 --> Config Class Initialized
INFO - 2018-12-23 08:33:19 332639 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:19 334902 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:19 335038 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:19 336369 --> URI Class Initialized
INFO - 2018-12-23 08:33:19 340008 --> Router Class Initialized
INFO - 2018-12-23 08:33:19 343352 --> Output Class Initialized
INFO - 2018-12-23 08:33:19 347212 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:19 349961 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:19 350099 --> Input Class Initialized
INFO - 2018-12-23 08:33:19 351119 --> Language Class Initialized
ERROR - 2018-12-23 08:33:19 353193 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-23 08:33:19 457818 --> Config Class Initialized
INFO - 2018-12-23 08:33:19 458213 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:19 460886 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:19 461024 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:19 462374 --> URI Class Initialized
INFO - 2018-12-23 08:33:19 466388 --> Router Class Initialized
INFO - 2018-12-23 08:33:19 468923 --> Output Class Initialized
INFO - 2018-12-23 08:33:19 471685 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:19 473596 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:19 473731 --> Input Class Initialized
INFO - 2018-12-23 08:33:19 474306 --> Language Class Initialized
ERROR - 2018-12-23 08:33:19 476643 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-23 08:33:19 784691 --> Config Class Initialized
INFO - 2018-12-23 08:33:19 784909 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:33:19 786411 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:33:19 786498 --> Utf8 Class Initialized
INFO - 2018-12-23 08:33:19 787511 --> URI Class Initialized
INFO - 2018-12-23 08:33:19 789211 --> Router Class Initialized
INFO - 2018-12-23 08:33:19 790832 --> Output Class Initialized
INFO - 2018-12-23 08:33:19 792046 --> Security Class Initialized
DEBUG - 2018-12-23 08:33:19 793284 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:33:19 793365 --> Input Class Initialized
INFO - 2018-12-23 08:33:19 793759 --> Language Class Initialized
INFO - 2018-12-23 08:33:19 803975 --> Loader Class Initialized
INFO - 2018-12-23 08:33:19 806806 --> Helper loaded: url_helper
INFO - 2018-12-23 08:33:19 808237 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:03:19 827965 --> Database Driver Class Initialized
INFO - 2018-12-23 14:03:19 833533 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:03:19 834453 --> Controller Class Initialized
INFO - 2018-12-23 14:03:19 835108 --> Final output sent to browser
DEBUG - 2018-12-23 14:03:19 835184 --> Total execution time: 0.0517
INFO - 2018-12-23 08:34:13 910952 --> Config Class Initialized
INFO - 2018-12-23 08:34:13 911150 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:13 913142 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:13 913240 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:13 915100 --> URI Class Initialized
INFO - 2018-12-23 08:34:13 920603 --> Router Class Initialized
INFO - 2018-12-23 08:34:13 923152 --> Output Class Initialized
INFO - 2018-12-23 08:34:13 926820 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:13 931034 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:13 933751 --> Input Class Initialized
INFO - 2018-12-23 08:34:13 938152 --> Language Class Initialized
INFO - 2018-12-23 08:34:13 962860 --> Loader Class Initialized
INFO - 2018-12-23 08:34:13 970321 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:13 973911 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:13 997087 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:14 008654 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:14 017219 --> Controller Class Initialized
INFO - 2018-12-23 14:04:14 024616 --> Parser Class Initialized
INFO - 2018-12-23 14:04:14 028594 --> Helper loaded: html_helper
DEBUG - 2018-12-23 14:04:14 031560 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-23 14:04:14 034341 --> Model Class Initialized
INFO - 2018-12-23 14:04:14 227364 --> Helper loaded: cookie_helper
INFO - 2018-12-23 14:04:14 272016 --> Model Class Initialized
DEBUG - 2018-12-23 14:04:14 273308 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:04:14 276745 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:04:14 288083 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:04:14 301321 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:04:14 301621 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:04:14 331469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 334851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 352298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 359236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 360151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 361059 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:14 362219 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-23 14:04:14 364725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 366487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 366875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:14 369957 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:14 372044 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:04:14 389391 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:14 389561 --> Total execution time: 0.4635
INFO - 2018-12-23 08:34:14 686907 --> Config Class Initialized
INFO - 2018-12-23 08:34:14 687062 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:14 689230 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:14 689361 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:14 702713 --> URI Class Initialized
INFO - 2018-12-23 08:34:14 706540 --> Router Class Initialized
INFO - 2018-12-23 08:34:14 708975 --> Output Class Initialized
INFO - 2018-12-23 08:34:14 724972 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:14 726901 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:14 727037 --> Input Class Initialized
INFO - 2018-12-23 08:34:14 727639 --> Language Class Initialized
ERROR - 2018-12-23 08:34:14 728604 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:14 731312 --> Config Class Initialized
INFO - 2018-12-23 08:34:14 731659 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:14 734138 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:14 734267 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:14 735959 --> URI Class Initialized
INFO - 2018-12-23 08:34:14 753371 --> Router Class Initialized
INFO - 2018-12-23 08:34:14 763717 --> Output Class Initialized
INFO - 2018-12-23 08:34:14 765774 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:14 767844 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:14 767976 --> Input Class Initialized
INFO - 2018-12-23 08:34:14 768655 --> Language Class Initialized
ERROR - 2018-12-23 08:34:14 769721 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:14 801932 --> Config Class Initialized
INFO - 2018-12-23 08:34:14 802125 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:14 804204 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:14 804280 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:14 810022 --> Config Class Initialized
INFO - 2018-12-23 08:34:14 810197 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:14 811512 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:14 811584 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:14 813612 --> URI Class Initialized
INFO - 2018-12-23 08:34:14 816056 --> Router Class Initialized
INFO - 2018-12-23 08:34:14 817811 --> URI Class Initialized
INFO - 2018-12-23 08:34:14 818608 --> Output Class Initialized
INFO - 2018-12-23 08:34:14 825251 --> Router Class Initialized
INFO - 2018-12-23 08:34:14 826709 --> Output Class Initialized
INFO - 2018-12-23 08:34:14 827791 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:14 828939 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:14 829015 --> Input Class Initialized
INFO - 2018-12-23 08:34:14 829355 --> Language Class Initialized
INFO - 2018-12-23 08:34:14 830909 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:14 832084 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:14 832155 --> Input Class Initialized
INFO - 2018-12-23 08:34:14 832504 --> Language Class Initialized
ERROR - 2018-12-23 08:34:14 833095 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:14 845849 --> Loader Class Initialized
INFO - 2018-12-23 08:34:14 846735 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:14 847254 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:14 863090 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:14 883181 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:14 884710 --> Controller Class Initialized
INFO - 2018-12-23 14:04:14 885760 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:14 885888 --> Total execution time: 0.0768
INFO - 2018-12-23 08:34:14 907330 --> Config Class Initialized
INFO - 2018-12-23 08:34:14 907500 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:14 909614 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:14 909748 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:14 914803 --> URI Class Initialized
INFO - 2018-12-23 08:34:14 923253 --> Router Class Initialized
INFO - 2018-12-23 08:34:14 937800 --> Output Class Initialized
INFO - 2018-12-23 08:34:14 939058 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:14 940376 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:14 940479 --> Input Class Initialized
INFO - 2018-12-23 08:34:14 940891 --> Language Class Initialized
ERROR - 2018-12-23 08:34:14 941549 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:15 040832 --> Config Class Initialized
INFO - 2018-12-23 08:34:15 041008 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:15 043106 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:15 043236 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:15 044650 --> URI Class Initialized
INFO - 2018-12-23 08:34:15 047732 --> Router Class Initialized
INFO - 2018-12-23 08:34:15 050034 --> Output Class Initialized
INFO - 2018-12-23 08:34:15 051831 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:15 053643 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:15 053771 --> Input Class Initialized
INFO - 2018-12-23 08:34:15 054322 --> Language Class Initialized
ERROR - 2018-12-23 08:34:15 065237 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:22 846508 --> Config Class Initialized
INFO - 2018-12-23 08:34:22 846851 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:22 849287 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:22 849447 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:22 851111 --> URI Class Initialized
INFO - 2018-12-23 08:34:22 854522 --> Router Class Initialized
INFO - 2018-12-23 08:34:22 857197 --> Output Class Initialized
INFO - 2018-12-23 08:34:22 859280 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:22 861351 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:22 861500 --> Input Class Initialized
INFO - 2018-12-23 08:34:22 862138 --> Language Class Initialized
INFO - 2018-12-23 08:34:22 866017 --> Loader Class Initialized
INFO - 2018-12-23 08:34:22 867624 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:22 868535 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:22 879120 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:22 892934 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:22 895301 --> Controller Class Initialized
INFO - 2018-12-23 14:04:22 896409 --> Parser Class Initialized
INFO - 2018-12-23 14:04:22 898529 --> Helper loaded: html_helper
DEBUG - 2018-12-23 14:04:22 898730 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-23 14:04:22 903119 --> Model Class Initialized
INFO - 2018-12-23 14:04:22 911312 --> Helper loaded: cookie_helper
INFO - 2018-12-23 14:04:22 911808 --> Model Class Initialized
DEBUG - 2018-12-23 14:04:22 912307 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:04:22 913036 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:04:22 914880 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:04:22 916161 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:04:22 916259 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:04:22 923363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 924623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 926321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 927022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 927548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 928086 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:22 928694 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-23 14:04:22 930092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 931121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 931345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:22 932979 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:22 934576 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:04:22 942626 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:22 942729 --> Total execution time: 0.0911
INFO - 2018-12-23 08:34:23 149210 --> Config Class Initialized
INFO - 2018-12-23 08:34:23 149386 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:23 156649 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:23 156758 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:23 157824 --> URI Class Initialized
INFO - 2018-12-23 08:34:23 161142 --> Router Class Initialized
INFO - 2018-12-23 08:34:23 163480 --> Output Class Initialized
INFO - 2018-12-23 08:34:23 165435 --> Config Class Initialized
INFO - 2018-12-23 08:34:23 165841 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:23 169163 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:23 169272 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:23 170690 --> URI Class Initialized
INFO - 2018-12-23 08:34:23 174529 --> Router Class Initialized
INFO - 2018-12-23 08:34:23 175802 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:23 177323 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:23 177447 --> Input Class Initialized
INFO - 2018-12-23 08:34:23 177930 --> Language Class Initialized
ERROR - 2018-12-23 08:34:23 178719 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:23 181668 --> Output Class Initialized
INFO - 2018-12-23 08:34:23 183336 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:23 184997 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:23 185102 --> Input Class Initialized
INFO - 2018-12-23 08:34:23 185630 --> Language Class Initialized
ERROR - 2018-12-23 08:34:23 186758 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:23 220077 --> Config Class Initialized
INFO - 2018-12-23 08:34:23 220360 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:23 222358 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:23 222486 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:23 223829 --> URI Class Initialized
INFO - 2018-12-23 08:34:23 227504 --> Router Class Initialized
INFO - 2018-12-23 08:34:23 229635 --> Output Class Initialized
INFO - 2018-12-23 08:34:23 231302 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:23 232961 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:23 233069 --> Input Class Initialized
INFO - 2018-12-23 08:34:23 233912 --> Language Class Initialized
ERROR - 2018-12-23 08:34:23 235375 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:23 951312 --> Config Class Initialized
INFO - 2018-12-23 08:34:23 951503 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:23 953610 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:23 953737 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:23 955005 --> URI Class Initialized
INFO - 2018-12-23 08:34:23 958108 --> Router Class Initialized
INFO - 2018-12-23 08:34:23 960469 --> Output Class Initialized
INFO - 2018-12-23 08:34:23 962287 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:23 964226 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:23 964354 --> Input Class Initialized
INFO - 2018-12-23 08:34:23 964963 --> Language Class Initialized
ERROR - 2018-12-23 08:34:23 965907 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:24 069610 --> Config Class Initialized
INFO - 2018-12-23 08:34:24 069761 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:24 071907 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:24 072035 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:24 073313 --> URI Class Initialized
INFO - 2018-12-23 08:34:24 076508 --> Router Class Initialized
INFO - 2018-12-23 08:34:24 078985 --> Output Class Initialized
INFO - 2018-12-23 08:34:24 080825 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:24 082711 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:24 082840 --> Input Class Initialized
INFO - 2018-12-23 08:34:24 083445 --> Language Class Initialized
ERROR - 2018-12-23 08:34:24 084383 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:24 471529 --> Config Class Initialized
INFO - 2018-12-23 08:34:24 471688 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:24 473793 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:24 473922 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:24 475199 --> URI Class Initialized
INFO - 2018-12-23 08:34:24 477607 --> Router Class Initialized
INFO - 2018-12-23 08:34:24 479976 --> Output Class Initialized
INFO - 2018-12-23 08:34:24 481829 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:24 483674 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:24 483803 --> Input Class Initialized
INFO - 2018-12-23 08:34:24 484364 --> Language Class Initialized
INFO - 2018-12-23 08:34:24 492306 --> Loader Class Initialized
INFO - 2018-12-23 08:34:24 493942 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:24 494852 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:24 505315 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:24 513593 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:24 515091 --> Controller Class Initialized
INFO - 2018-12-23 14:04:24 516138 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:24 516262 --> Total execution time: 0.0469
INFO - 2018-12-23 08:34:26 441025 --> Config Class Initialized
INFO - 2018-12-23 08:34:26 441149 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:26 442698 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:26 442796 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:26 443763 --> URI Class Initialized
INFO - 2018-12-23 08:34:26 446037 --> Router Class Initialized
INFO - 2018-12-23 08:34:26 447854 --> Output Class Initialized
INFO - 2018-12-23 08:34:26 449209 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:26 450576 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:26 450675 --> Input Class Initialized
INFO - 2018-12-23 08:34:26 451097 --> Language Class Initialized
ERROR - 2018-12-23 08:34:26 451812 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-23 08:34:51 190165 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 190429 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 192423 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 192545 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 193752 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 196118 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 198128 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 199580 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 201023 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 201118 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 201577 --> Language Class Initialized
INFO - 2018-12-23 08:34:51 204278 --> Loader Class Initialized
INFO - 2018-12-23 08:34:51 205430 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:51 206099 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:51 215420 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:51 222249 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:51 223336 --> Controller Class Initialized
INFO - 2018-12-23 14:04:51 223886 --> Parser Class Initialized
INFO - 2018-12-23 14:04:51 224760 --> Helper loaded: html_helper
DEBUG - 2018-12-23 14:04:51 224874 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-23 14:04:51 226785 --> Model Class Initialized
INFO - 2018-12-23 14:04:51 306977 --> Helper loaded: cookie_helper
INFO - 2018-12-23 14:04:51 307893 --> Model Class Initialized
DEBUG - 2018-12-23 14:04:51 308502 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:04:51 310442 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:04:51 313810 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:04:51 315332 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:04:51 315479 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:04:51 325509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 327253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 329574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 330558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 331223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 331937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 342648 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:51 343501 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-23 14:04:51 345685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 347064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 347368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:04:51 349658 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:04:51 351138 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:04:51 359615 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:51 359693 --> Total execution time: 0.1633
INFO - 2018-12-23 08:34:51 562834 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 563066 --> Hooks Class Initialized
INFO - 2018-12-23 08:34:51 569937 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 570034 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 571530 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 571616 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 572454 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 574840 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 576483 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 577667 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 578859 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 578944 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 579333 --> Language Class Initialized
DEBUG - 2018-12-23 08:34:51 579857 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 579937 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 581021 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 588592 --> Router Class Initialized
ERROR - 2018-12-23 08:34:51 590261 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:34:51 594419 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 596446 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 598650 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 598809 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 599419 --> Language Class Initialized
ERROR - 2018-12-23 08:34:51 600428 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:34:51 654289 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 654639 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 657047 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 657176 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 658826 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 663376 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 666126 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 668169 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 670176 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 670303 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 670964 --> Language Class Initialized
ERROR - 2018-12-23 08:34:51 671945 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:34:51 680775 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 680877 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 682215 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 682300 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 683111 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 684616 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 686096 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 687294 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 688477 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 688561 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 688921 --> Language Class Initialized
INFO - 2018-12-23 08:34:51 693453 --> Loader Class Initialized
INFO - 2018-12-23 08:34:51 694356 --> Helper loaded: url_helper
INFO - 2018-12-23 08:34:51 694859 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:04:51 701056 --> Database Driver Class Initialized
INFO - 2018-12-23 14:04:51 708718 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:04:51 710212 --> Controller Class Initialized
INFO - 2018-12-23 14:04:51 711025 --> Final output sent to browser
DEBUG - 2018-12-23 14:04:51 711139 --> Total execution time: 0.0314
INFO - 2018-12-23 08:34:51 729089 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 729319 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 734102 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 734313 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 737195 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 746099 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 751954 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 753479 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 754782 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 754868 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 755254 --> Language Class Initialized
ERROR - 2018-12-23 08:34:51 755889 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:34:51 851432 --> Config Class Initialized
INFO - 2018-12-23 08:34:51 851596 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:51 853884 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:51 854012 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:51 855465 --> URI Class Initialized
INFO - 2018-12-23 08:34:51 859308 --> Router Class Initialized
INFO - 2018-12-23 08:34:51 862114 --> Output Class Initialized
INFO - 2018-12-23 08:34:51 864409 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:51 866923 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:51 867048 --> Input Class Initialized
INFO - 2018-12-23 08:34:51 867774 --> Language Class Initialized
ERROR - 2018-12-23 08:34:51 868860 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:34:52 962973 --> Config Class Initialized
INFO - 2018-12-23 08:34:52 963130 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:34:52 965267 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:34:52 965405 --> Utf8 Class Initialized
INFO - 2018-12-23 08:34:52 966705 --> URI Class Initialized
INFO - 2018-12-23 08:34:52 970351 --> Router Class Initialized
INFO - 2018-12-23 08:34:52 972790 --> Output Class Initialized
INFO - 2018-12-23 08:34:52 974649 --> Security Class Initialized
DEBUG - 2018-12-23 08:34:52 979214 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:34:52 979470 --> Input Class Initialized
INFO - 2018-12-23 08:34:52 980993 --> Language Class Initialized
ERROR - 2018-12-23 08:34:52 983437 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-23 08:35:27 014458 --> Config Class Initialized
INFO - 2018-12-23 08:35:27 014940 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:35:27 019825 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:35:27 020028 --> Utf8 Class Initialized
INFO - 2018-12-23 08:35:27 022641 --> URI Class Initialized
INFO - 2018-12-23 08:35:27 027822 --> Router Class Initialized
INFO - 2018-12-23 08:35:27 032330 --> Output Class Initialized
INFO - 2018-12-23 08:35:27 035836 --> Security Class Initialized
DEBUG - 2018-12-23 08:35:27 039519 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:35:27 039725 --> Input Class Initialized
INFO - 2018-12-23 08:35:27 041110 --> Language Class Initialized
INFO - 2018-12-23 08:35:27 059154 --> Loader Class Initialized
INFO - 2018-12-23 08:35:27 063966 --> Helper loaded: url_helper
INFO - 2018-12-23 08:35:27 066618 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:05:27 077656 --> Database Driver Class Initialized
INFO - 2018-12-23 14:05:27 089349 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:05:27 092581 --> Controller Class Initialized
INFO - 2018-12-23 14:05:27 093655 --> Parser Class Initialized
INFO - 2018-12-23 14:05:27 094904 --> Helper loaded: html_helper
INFO - 2018-12-23 14:05:27 096086 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 14:05:27 107445 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/register.php
ERROR - 2018-12-23 14:05:27 121460 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:05:27 126471 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:05:27 126764 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:05:27 137758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:05:27 139945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:05:27 148639 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:05:27 150315 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:05:27 157473 --> Final output sent to browser
DEBUG - 2018-12-23 14:05:27 157563 --> Total execution time: 0.1401
INFO - 2018-12-23 08:35:27 394604 --> Config Class Initialized
INFO - 2018-12-23 08:35:27 394716 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:35:27 396163 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:35:27 396253 --> Utf8 Class Initialized
INFO - 2018-12-23 08:35:27 397106 --> URI Class Initialized
INFO - 2018-12-23 08:35:27 398725 --> Router Class Initialized
INFO - 2018-12-23 08:35:27 400338 --> Output Class Initialized
INFO - 2018-12-23 08:35:27 401595 --> Security Class Initialized
DEBUG - 2018-12-23 08:35:27 402858 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:35:27 402966 --> Input Class Initialized
INFO - 2018-12-23 08:35:27 403354 --> Language Class Initialized
INFO - 2018-12-23 08:35:27 408245 --> Loader Class Initialized
INFO - 2018-12-23 08:35:27 410924 --> Helper loaded: url_helper
INFO - 2018-12-23 08:35:27 412357 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:05:27 430252 --> Database Driver Class Initialized
INFO - 2018-12-23 14:05:27 433813 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:05:27 434766 --> Controller Class Initialized
INFO - 2018-12-23 14:05:27 435364 --> Final output sent to browser
DEBUG - 2018-12-23 14:05:27 435457 --> Total execution time: 0.0420
INFO - 2018-12-23 08:35:28 621757 --> Config Class Initialized
INFO - 2018-12-23 08:35:28 621920 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:35:28 624032 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:35:28 624165 --> Utf8 Class Initialized
INFO - 2018-12-23 08:35:28 625478 --> URI Class Initialized
INFO - 2018-12-23 08:35:28 629425 --> Router Class Initialized
INFO - 2018-12-23 08:35:28 631815 --> Output Class Initialized
INFO - 2018-12-23 08:35:28 633677 --> Security Class Initialized
DEBUG - 2018-12-23 08:35:28 635516 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:35:28 635647 --> Input Class Initialized
INFO - 2018-12-23 08:35:28 636204 --> Language Class Initialized
ERROR - 2018-12-23 08:35:28 637131 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-23 08:37:29 719837 --> Config Class Initialized
INFO - 2018-12-23 08:37:29 720190 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:37:29 722654 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:37:29 722788 --> Utf8 Class Initialized
INFO - 2018-12-23 08:37:29 724421 --> URI Class Initialized
INFO - 2018-12-23 08:37:29 727267 --> Router Class Initialized
INFO - 2018-12-23 08:37:29 729918 --> Output Class Initialized
INFO - 2018-12-23 08:37:29 731921 --> Security Class Initialized
DEBUG - 2018-12-23 08:37:29 733958 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:37:29 734090 --> Input Class Initialized
INFO - 2018-12-23 08:37:29 734745 --> Language Class Initialized
INFO - 2018-12-23 08:37:29 742806 --> Loader Class Initialized
INFO - 2018-12-23 08:37:29 744441 --> Helper loaded: url_helper
INFO - 2018-12-23 08:37:29 745326 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:07:29 755871 --> Database Driver Class Initialized
INFO - 2018-12-23 14:07:29 765033 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:07:29 766557 --> Controller Class Initialized
INFO - 2018-12-23 14:07:29 767287 --> Parser Class Initialized
INFO - 2018-12-23 14:07:29 768368 --> Helper loaded: html_helper
INFO - 2018-12-23 14:07:29 769526 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 14:07:29 770164 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/register.php
ERROR - 2018-12-23 14:07:29 774395 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:07:29 776499 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:07:29 776679 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:07:29 783092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:07:29 784889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:07:29 803602 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:07:29 806061 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:07:29 814709 --> Final output sent to browser
DEBUG - 2018-12-23 14:07:29 814876 --> Total execution time: 0.0891
INFO - 2018-12-23 08:37:30 028139 --> Config Class Initialized
INFO - 2018-12-23 08:37:30 028366 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:37:30 031060 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:37:30 031198 --> Utf8 Class Initialized
INFO - 2018-12-23 08:37:30 032505 --> URI Class Initialized
INFO - 2018-12-23 08:37:30 035016 --> Router Class Initialized
INFO - 2018-12-23 08:37:30 037502 --> Output Class Initialized
INFO - 2018-12-23 08:37:30 039371 --> Security Class Initialized
DEBUG - 2018-12-23 08:37:30 041244 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:37:30 041373 --> Input Class Initialized
INFO - 2018-12-23 08:37:30 041995 --> Language Class Initialized
INFO - 2018-12-23 08:37:30 049314 --> Loader Class Initialized
INFO - 2018-12-23 08:37:30 050795 --> Helper loaded: url_helper
INFO - 2018-12-23 08:37:30 051587 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:07:30 060965 --> Database Driver Class Initialized
INFO - 2018-12-23 14:07:30 136914 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:07:30 138465 --> Controller Class Initialized
INFO - 2018-12-23 14:07:30 139353 --> Final output sent to browser
DEBUG - 2018-12-23 14:07:30 139478 --> Total execution time: 0.1145
INFO - 2018-12-23 08:38:10 766283 --> Config Class Initialized
INFO - 2018-12-23 08:38:10 766645 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:10 769093 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:10 769226 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:10 770754 --> URI Class Initialized
DEBUG - 2018-12-23 08:38:10 773246 --> No URI present. Default controller set.
INFO - 2018-12-23 08:38:10 773379 --> Router Class Initialized
INFO - 2018-12-23 08:38:10 776026 --> Output Class Initialized
INFO - 2018-12-23 08:38:10 778048 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:10 780781 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:10 780917 --> Input Class Initialized
INFO - 2018-12-23 08:38:10 781542 --> Language Class Initialized
INFO - 2018-12-23 08:38:10 787179 --> Loader Class Initialized
INFO - 2018-12-23 08:38:10 791053 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:10 792504 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:10 803575 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:10 812758 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:10 814486 --> Controller Class Initialized
INFO - 2018-12-23 14:08:10 815243 --> Parser Class Initialized
INFO - 2018-12-23 14:08:10 816320 --> Helper loaded: html_helper
INFO - 2018-12-23 14:08:10 817486 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 14:08:10 820099 --> Model Class Initialized
DEBUG - 2018-12-23 14:08:10 831701 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-23 14:08:10 837327 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-23'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-23 14:08:10 838131 --> Model Class Initialized
DEBUG - 2018-12-23 14:08:10 838908 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-23 14:08:10 842096 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:08:10 844238 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:08:10 844415 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:08:10 850087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 851913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 862977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 865345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 868324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 868786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 869551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 870620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 873620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 874049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 874794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 875823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 878793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 879205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 879935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 880956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 884159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 884622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 885365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 886389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 889312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 889763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 890522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 891561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 894604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 895044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 895812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 896804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 899871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 900302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 901072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 902076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 905210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 905674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 906456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 907464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 910598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 911031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 911840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 912875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 913990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 915121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 916426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 917366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 918414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 919356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 926853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 927654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 928649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 929548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 930416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 931245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 931929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 932785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 934154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 934987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 935791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 936592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 937395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 938148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 941843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 942272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 943208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 944143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 947355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 947813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 948698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 949383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 952591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 953018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 953912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 954849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 958268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 958734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 959631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 960582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 963794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 964243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 965145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 966028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 969178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 969649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 971004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 974157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 975023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 978252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 979104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 982255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 983146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 986634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 987656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 992252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 993182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:10 996663 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:08:10 997448 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-23 14:08:11 002402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:11 008563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:11 009635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:08:11 014159 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:08:11 015000 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:08:11 023919 --> Final output sent to browser
DEBUG - 2018-12-23 14:08:11 024097 --> Total execution time: 0.2524
INFO - 2018-12-23 08:38:11 888405 --> Config Class Initialized
INFO - 2018-12-23 08:38:11 888577 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:11 890749 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:11 890878 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:11 892214 --> URI Class Initialized
INFO - 2018-12-23 08:38:11 907116 --> Config Class Initialized
INFO - 2018-12-23 08:38:11 907499 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:11 909929 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:11 910058 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:11 911799 --> URI Class Initialized
INFO - 2018-12-23 08:38:11 916479 --> Router Class Initialized
INFO - 2018-12-23 08:38:11 918998 --> Output Class Initialized
INFO - 2018-12-23 08:38:11 920990 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:11 922873 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:11 923000 --> Input Class Initialized
INFO - 2018-12-23 08:38:11 923599 --> Language Class Initialized
INFO - 2018-12-23 08:38:11 926419 --> Router Class Initialized
INFO - 2018-12-23 08:38:11 929095 --> Output Class Initialized
INFO - 2018-12-23 08:38:11 931090 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:11 933120 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:11 933244 --> Input Class Initialized
INFO - 2018-12-23 08:38:11 933861 --> Language Class Initialized
ERROR - 2018-12-23 08:38:11 934587 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2018-12-23 08:38:11 937072 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-23 08:38:11 977101 --> Config Class Initialized
INFO - 2018-12-23 08:38:11 977482 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:11 980700 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:11 980833 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:11 983059 --> URI Class Initialized
INFO - 2018-12-23 08:38:11 986546 --> Router Class Initialized
INFO - 2018-12-23 08:38:11 989814 --> Output Class Initialized
INFO - 2018-12-23 08:38:11 992095 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:11 994359 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:11 994554 --> Input Class Initialized
INFO - 2018-12-23 08:38:11 995378 --> Language Class Initialized
INFO - 2018-12-23 08:38:12 004750 --> Loader Class Initialized
INFO - 2018-12-23 08:38:12 006576 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:12 007505 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:12 018395 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:12 028415 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:12 030358 --> Controller Class Initialized
INFO - 2018-12-23 14:08:12 031399 --> Final output sent to browser
DEBUG - 2018-12-23 14:08:12 031544 --> Total execution time: 0.0569
INFO - 2018-12-23 08:38:18 864805 --> Config Class Initialized
INFO - 2018-12-23 08:38:18 865232 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:18 866930 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:18 867084 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:18 868746 --> URI Class Initialized
INFO - 2018-12-23 08:38:18 889499 --> Router Class Initialized
INFO - 2018-12-23 08:38:19 001240 --> Output Class Initialized
INFO - 2018-12-23 08:38:19 002542 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:19 003707 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:19 003777 --> Input Class Initialized
INFO - 2018-12-23 08:38:19 004098 --> Language Class Initialized
INFO - 2018-12-23 08:38:19 021714 --> Loader Class Initialized
INFO - 2018-12-23 08:38:19 024286 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:19 025588 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:19 033166 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:19 038762 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:19 040656 --> Controller Class Initialized
INFO - 2018-12-23 08:38:19 254478 --> Config Class Initialized
INFO - 2018-12-23 08:38:19 254568 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:19 255750 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:19 255820 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:19 256495 --> URI Class Initialized
INFO - 2018-12-23 08:38:19 257772 --> Router Class Initialized
INFO - 2018-12-23 08:38:19 258980 --> Output Class Initialized
INFO - 2018-12-23 08:38:19 259943 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:19 260941 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:19 261009 --> Input Class Initialized
INFO - 2018-12-23 08:38:19 261318 --> Language Class Initialized
INFO - 2018-12-23 08:38:19 263355 --> Loader Class Initialized
INFO - 2018-12-23 08:38:19 264082 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:19 264483 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:19 269994 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:19 273017 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:19 273751 --> Controller Class Initialized
DEBUG - 2018-12-23 14:08:19 273825 --> In LOGOUT
INFO - 2018-12-23 08:38:29 412909 --> Config Class Initialized
INFO - 2018-12-23 08:38:29 413242 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:29 415652 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:29 415779 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:29 417375 --> URI Class Initialized
INFO - 2018-12-23 08:38:29 421782 --> Router Class Initialized
INFO - 2018-12-23 08:38:29 425246 --> Output Class Initialized
INFO - 2018-12-23 08:38:29 428534 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:29 431878 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:29 432055 --> Input Class Initialized
INFO - 2018-12-23 08:38:29 432823 --> Language Class Initialized
INFO - 2018-12-23 08:38:29 437490 --> Loader Class Initialized
INFO - 2018-12-23 08:38:29 439069 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:29 439951 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:29 450365 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:29 458861 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:29 460335 --> Controller Class Initialized
INFO - 2018-12-23 08:38:29 560225 --> Config Class Initialized
INFO - 2018-12-23 08:38:29 560380 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:38:29 563174 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:38:29 563361 --> Utf8 Class Initialized
INFO - 2018-12-23 08:38:29 565507 --> URI Class Initialized
INFO - 2018-12-23 08:38:29 569468 --> Router Class Initialized
INFO - 2018-12-23 08:38:29 573360 --> Output Class Initialized
INFO - 2018-12-23 08:38:29 576433 --> Security Class Initialized
DEBUG - 2018-12-23 08:38:29 579571 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:38:29 579751 --> Input Class Initialized
INFO - 2018-12-23 08:38:29 580640 --> Language Class Initialized
INFO - 2018-12-23 08:38:29 584800 --> Loader Class Initialized
INFO - 2018-12-23 08:38:29 586338 --> Helper loaded: url_helper
INFO - 2018-12-23 08:38:29 587095 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:08:29 596136 --> Database Driver Class Initialized
INFO - 2018-12-23 14:08:29 601293 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:08:29 602715 --> Controller Class Initialized
DEBUG - 2018-12-23 14:08:29 602853 --> In LOGOUT
INFO - 2018-12-23 08:40:35 663880 --> Config Class Initialized
INFO - 2018-12-23 08:40:35 664227 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:40:35 666655 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:40:35 666788 --> Utf8 Class Initialized
INFO - 2018-12-23 08:40:35 668437 --> URI Class Initialized
INFO - 2018-12-23 08:40:35 672883 --> Router Class Initialized
INFO - 2018-12-23 08:40:35 675513 --> Output Class Initialized
INFO - 2018-12-23 08:40:35 677505 --> Security Class Initialized
DEBUG - 2018-12-23 08:40:35 679523 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:40:35 679656 --> Input Class Initialized
INFO - 2018-12-23 08:40:35 680270 --> Language Class Initialized
INFO - 2018-12-23 08:40:35 684978 --> Loader Class Initialized
INFO - 2018-12-23 08:40:35 686616 --> Helper loaded: url_helper
INFO - 2018-12-23 08:40:35 687530 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:10:35 700943 --> Database Driver Class Initialized
INFO - 2018-12-23 14:10:35 714286 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:10:35 715790 --> Controller Class Initialized
INFO - 2018-12-23 08:40:35 808670 --> Config Class Initialized
INFO - 2018-12-23 08:40:35 808830 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:40:35 810925 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:40:35 811058 --> Utf8 Class Initialized
INFO - 2018-12-23 08:40:35 812305 --> URI Class Initialized
INFO - 2018-12-23 08:40:35 814616 --> Router Class Initialized
INFO - 2018-12-23 08:40:35 816957 --> Output Class Initialized
INFO - 2018-12-23 08:40:35 818785 --> Security Class Initialized
DEBUG - 2018-12-23 08:40:35 820703 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:40:35 820833 --> Input Class Initialized
INFO - 2018-12-23 08:40:35 821440 --> Language Class Initialized
INFO - 2018-12-23 08:40:35 824963 --> Loader Class Initialized
INFO - 2018-12-23 08:40:35 826365 --> Helper loaded: url_helper
INFO - 2018-12-23 08:40:35 827128 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:10:35 836952 --> Database Driver Class Initialized
INFO - 2018-12-23 14:10:35 842365 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:10:35 843797 --> Controller Class Initialized
DEBUG - 2018-12-23 14:10:35 843938 --> In LOGOUT
INFO - 2018-12-23 08:41:56 877159 --> Config Class Initialized
INFO - 2018-12-23 08:41:56 877381 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:41:56 878901 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:56 878983 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:56 880063 --> URI Class Initialized
INFO - 2018-12-23 08:41:56 882333 --> Router Class Initialized
INFO - 2018-12-23 08:41:56 883857 --> Output Class Initialized
INFO - 2018-12-23 08:41:56 885014 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:56 886162 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:56 886244 --> Input Class Initialized
INFO - 2018-12-23 08:41:56 886625 --> Language Class Initialized
INFO - 2018-12-23 08:41:56 888783 --> Loader Class Initialized
INFO - 2018-12-23 08:41:56 889741 --> Helper loaded: url_helper
INFO - 2018-12-23 08:41:56 890264 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:11:56 896409 --> Database Driver Class Initialized
INFO - 2018-12-23 14:11:56 903207 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:11:56 904100 --> Controller Class Initialized
INFO - 2018-12-23 14:11:56 904551 --> Parser Class Initialized
INFO - 2018-12-23 14:11:56 905267 --> Helper loaded: html_helper
DEBUG - 2018-12-23 14:11:56 905451 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-23 14:11:56 908514 --> Model Class Initialized
INFO - 2018-12-23 14:11:56 915916 --> Helper loaded: cookie_helper
INFO - 2018-12-23 14:11:56 916565 --> Model Class Initialized
DEBUG - 2018-12-23 14:11:56 917381 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-23 14:11:56 918133 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-23 14:11:56 920202 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:11:56 921513 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:11:56 921622 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:11:56 932507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 934294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 937128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 938014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 938791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 939575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 941375 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:11:56 942385 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-23 14:11:56 944766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 946758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 947015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:11:56 949198 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:11:56 950894 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:11:56 957686 --> Final output sent to browser
DEBUG - 2018-12-23 14:11:56 957797 --> Total execution time: 0.0755
INFO - 2018-12-23 08:41:57 173475 --> Config Class Initialized
INFO - 2018-12-23 08:41:57 173810 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:41:57 179955 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:57 180200 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:57 184750 --> URI Class Initialized
INFO - 2018-12-23 08:41:57 213274 --> Router Class Initialized
INFO - 2018-12-23 08:41:57 219383 --> Config Class Initialized
INFO - 2018-12-23 08:41:57 219662 --> Hooks Class Initialized
INFO - 2018-12-23 08:41:57 227499 --> Output Class Initialized
INFO - 2018-12-23 08:41:57 233853 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:57 235937 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:57 236079 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:57 237518 --> URI Class Initialized
INFO - 2018-12-23 08:41:57 241455 --> Router Class Initialized
DEBUG - 2018-12-23 08:41:57 248490 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:57 248630 --> Input Class Initialized
INFO - 2018-12-23 08:41:57 249259 --> Language Class Initialized
ERROR - 2018-12-23 08:41:57 250303 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-23 08:41:57 254014 --> Output Class Initialized
INFO - 2018-12-23 08:41:57 257117 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:57 263565 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:57 263834 --> Input Class Initialized
INFO - 2018-12-23 08:41:57 265372 --> Language Class Initialized
ERROR - 2018-12-23 08:41:57 267040 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-23 08:41:57 283277 --> Config Class Initialized
INFO - 2018-12-23 08:41:57 283646 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:41:57 286075 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:57 286204 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:57 287867 --> URI Class Initialized
INFO - 2018-12-23 08:41:57 292390 --> Router Class Initialized
INFO - 2018-12-23 08:41:57 296447 --> Output Class Initialized
INFO - 2018-12-23 08:41:57 302798 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:57 309461 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:57 309710 --> Input Class Initialized
INFO - 2018-12-23 08:41:57 311286 --> Language Class Initialized
ERROR - 2018-12-23 08:41:57 313822 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-23 08:41:57 345207 --> Config Class Initialized
INFO - 2018-12-23 08:41:57 345318 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:41:57 346918 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:57 347003 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:57 347831 --> URI Class Initialized
INFO - 2018-12-23 08:41:57 349441 --> Router Class Initialized
INFO - 2018-12-23 08:41:57 351206 --> Output Class Initialized
INFO - 2018-12-23 08:41:57 352441 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:57 354089 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:57 354177 --> Input Class Initialized
INFO - 2018-12-23 08:41:57 354640 --> Language Class Initialized
INFO - 2018-12-23 08:41:57 360882 --> Loader Class Initialized
INFO - 2018-12-23 08:41:57 361948 --> Helper loaded: url_helper
INFO - 2018-12-23 08:41:57 362699 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:11:57 371932 --> Database Driver Class Initialized
INFO - 2018-12-23 14:11:57 383189 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:11:57 386523 --> Controller Class Initialized
INFO - 2018-12-23 14:11:57 387881 --> Final output sent to browser
DEBUG - 2018-12-23 14:11:57 388009 --> Total execution time: 0.0439
INFO - 2018-12-23 08:41:59 520617 --> Config Class Initialized
INFO - 2018-12-23 08:41:59 520773 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:41:59 522921 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:41:59 523051 --> Utf8 Class Initialized
INFO - 2018-12-23 08:41:59 524415 --> URI Class Initialized
INFO - 2018-12-23 08:41:59 527522 --> Router Class Initialized
INFO - 2018-12-23 08:41:59 529896 --> Output Class Initialized
INFO - 2018-12-23 08:41:59 531764 --> Security Class Initialized
DEBUG - 2018-12-23 08:41:59 533747 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:41:59 533876 --> Input Class Initialized
INFO - 2018-12-23 08:41:59 534486 --> Language Class Initialized
ERROR - 2018-12-23 08:41:59 535451 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-23 08:42:04 844485 --> Config Class Initialized
INFO - 2018-12-23 08:42:04 844680 --> Hooks Class Initialized
DEBUG - 2018-12-23 08:42:04 845984 --> UTF-8 Support Enabled
INFO - 2018-12-23 08:42:04 846056 --> Utf8 Class Initialized
INFO - 2018-12-23 08:42:04 846894 --> URI Class Initialized
DEBUG - 2018-12-23 08:42:04 848191 --> No URI present. Default controller set.
INFO - 2018-12-23 08:42:04 848263 --> Router Class Initialized
INFO - 2018-12-23 08:42:04 849720 --> Output Class Initialized
INFO - 2018-12-23 08:42:04 850784 --> Security Class Initialized
DEBUG - 2018-12-23 08:42:04 851882 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-23 08:42:04 851954 --> Input Class Initialized
INFO - 2018-12-23 08:42:04 852278 --> Language Class Initialized
INFO - 2018-12-23 08:42:04 854372 --> Loader Class Initialized
INFO - 2018-12-23 08:42:04 855268 --> Helper loaded: url_helper
INFO - 2018-12-23 08:42:04 855783 --> Helper loaded: utility_helper
INFO - 2018-12-23 14:12:04 861360 --> Database Driver Class Initialized
INFO - 2018-12-23 14:12:04 867681 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-23 14:12:04 868473 --> Controller Class Initialized
INFO - 2018-12-23 14:12:04 868891 --> Parser Class Initialized
INFO - 2018-12-23 14:12:04 869473 --> Helper loaded: html_helper
INFO - 2018-12-23 14:12:04 870284 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-23 14:12:04 872062 --> Model Class Initialized
DEBUG - 2018-12-23 14:12:04 883795 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-23 14:12:04 889630 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-23'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-23 14:12:04 890048 --> Model Class Initialized
DEBUG - 2018-12-23 14:12:04 890790 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-23 14:12:04 892580 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-23 14:12:04 893750 --> Helper loaded: file_helper
DEBUG - 2018-12-23 14:12:04 893850 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-23 14:12:04 897005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 898154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 903733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 904946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 906572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 906976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 907382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 908005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 909538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 909765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 910172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 910718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 912338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 912575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 913223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 913778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 915381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 915630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 916034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 916590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 918169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 918431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 918848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 919387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 921307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 921571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 921986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 922564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 924521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 924766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 925177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 925724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 927397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 927649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 928102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 928853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 931154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 931406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 931968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 932708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 933387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 934076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 934838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 935661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 936822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 937613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 938343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 939080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 939821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 940570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 941278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 941997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 942723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 943464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 944350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 944979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 945601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 946194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 946826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 947623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 950367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 950719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 951373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 952234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 954750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 955089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 955775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 956583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 959002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 959332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 960012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 960809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 963469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 963814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 964517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 965315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 967756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 968092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 968781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 969599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 972909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 973328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 974204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 977132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 978221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 981245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 982186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 988204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 989891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 996623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:04 997888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 001168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 002363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 005660 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:12:05 006755 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-23 14:12:05 009741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 011753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 012192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-23 14:12:05 015439 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-23 14:12:05 016223 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-23 14:12:05 025047 --> Final output sent to browser
DEBUG - 2018-12-23 14:12:05 025186 --> Total execution time: 0.1739
