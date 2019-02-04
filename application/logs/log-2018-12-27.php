<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-27 07:57:44 085977 --> Config Class Initialized
INFO - 2018-12-27 07:57:44 086407 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:57:44 114778 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:57:44 118508 --> Utf8 Class Initialized
INFO - 2018-12-27 07:57:44 120768 --> URI Class Initialized
DEBUG - 2018-12-27 07:57:44 177797 --> No URI present. Default controller set.
INFO - 2018-12-27 07:57:44 177968 --> Router Class Initialized
INFO - 2018-12-27 07:57:44 198259 --> Output Class Initialized
INFO - 2018-12-27 07:57:44 206774 --> Security Class Initialized
DEBUG - 2018-12-27 07:57:44 239051 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:57:44 254631 --> Input Class Initialized
INFO - 2018-12-27 07:57:44 255700 --> Language Class Initialized
INFO - 2018-12-27 07:57:44 315387 --> Loader Class Initialized
INFO - 2018-12-27 07:57:44 323678 --> Helper loaded: url_helper
INFO - 2018-12-27 07:57:44 338948 --> Helper loaded: utility_helper
INFO - 2018-12-27 13:27:44 476141 --> Database Driver Class Initialized
INFO - 2018-12-27 13:27:44 524643 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:27:44 541812 --> Controller Class Initialized
INFO - 2018-12-27 13:27:44 552445 --> Parser Class Initialized
INFO - 2018-12-27 13:27:44 554133 --> Helper loaded: html_helper
INFO - 2018-12-27 13:27:44 575772 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-27 13:27:44 610661 --> Model Class Initialized
DEBUG - 2018-12-27 13:27:44 636077 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-27 13:27:44 640360 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-27 13:27:44 648356 --> Model Class Initialized
DEBUG - 2018-12-27 13:27:44 651973 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-27 13:27:44 696954 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-27 13:27:44 710375 --> Helper loaded: file_helper
DEBUG - 2018-12-27 13:27:44 719558 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-27 13:27:44 739097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 745996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 808527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 810902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 812408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 812644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 813018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 813606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 815026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 815233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 815609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 816123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 817574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 817776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 818135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 818644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 820086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 820295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 820687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 821202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 822659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 822874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 823247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 823750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 825248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 825480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 825862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 826370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 827863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 828080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 828469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 828970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 830487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 830704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 831088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 831613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 833126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 833340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 833740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 834228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 834707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 835163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 835619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 836062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 836519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 836961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 837398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 837846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 838383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 838959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 839423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 839879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 840313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 840764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 841250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 841649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 842032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 842413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 842824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 843312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 844980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 845191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 845628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 846106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 847662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 847877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 848298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 848793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 850303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 850528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 850955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 851449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 853076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 853293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 853732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 854216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 855739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 855952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 856380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 856862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 858390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 858624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 859059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 860574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 861088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 862637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 863140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 864635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 865120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 866652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 867135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 868639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 869144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 870659 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 13:27:44 871157 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-27 13:27:44 880451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 909663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 910080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:27:44 913256 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 13:27:44 913960 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-27 13:27:44 922702 --> Final output sent to browser
DEBUG - 2018-12-27 13:27:44 922810 --> Total execution time: 0.8816
INFO - 2018-12-27 07:57:47 454484 --> Config Class Initialized
INFO - 2018-12-27 07:57:47 454642 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:57:47 456828 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:57:47 456954 --> Utf8 Class Initialized
INFO - 2018-12-27 07:57:47 458276 --> URI Class Initialized
INFO - 2018-12-27 07:57:47 464157 --> Router Class Initialized
INFO - 2018-12-27 07:57:47 467181 --> Output Class Initialized
INFO - 2018-12-27 07:57:47 469475 --> Security Class Initialized
DEBUG - 2018-12-27 07:57:47 471170 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:57:47 471298 --> Input Class Initialized
INFO - 2018-12-27 07:57:47 471878 --> Language Class Initialized
ERROR - 2018-12-27 07:57:47 484026 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-27 07:57:47 485574 --> Config Class Initialized
INFO - 2018-12-27 07:57:47 487536 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:57:47 490005 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:57:47 490132 --> Utf8 Class Initialized
INFO - 2018-12-27 07:57:47 491763 --> URI Class Initialized
INFO - 2018-12-27 07:57:47 498044 --> Router Class Initialized
INFO - 2018-12-27 07:57:47 500741 --> Output Class Initialized
INFO - 2018-12-27 07:57:47 502831 --> Security Class Initialized
DEBUG - 2018-12-27 07:57:47 504693 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:57:47 504822 --> Input Class Initialized
INFO - 2018-12-27 07:57:47 505441 --> Language Class Initialized
ERROR - 2018-12-27 07:57:47 506449 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-27 07:57:47 631226 --> Config Class Initialized
INFO - 2018-12-27 07:57:47 631669 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:57:47 635561 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:57:47 635737 --> Utf8 Class Initialized
INFO - 2018-12-27 07:57:47 638183 --> URI Class Initialized
INFO - 2018-12-27 07:57:47 641627 --> Router Class Initialized
INFO - 2018-12-27 07:57:47 644387 --> Output Class Initialized
INFO - 2018-12-27 07:57:47 646699 --> Security Class Initialized
DEBUG - 2018-12-27 07:57:47 648542 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:57:47 648669 --> Input Class Initialized
INFO - 2018-12-27 07:57:47 649259 --> Language Class Initialized
INFO - 2018-12-27 07:57:47 668759 --> Loader Class Initialized
INFO - 2018-12-27 07:57:47 669939 --> Helper loaded: url_helper
INFO - 2018-12-27 07:57:47 670556 --> Helper loaded: utility_helper
INFO - 2018-12-27 13:27:47 678776 --> Database Driver Class Initialized
INFO - 2018-12-27 13:27:47 685241 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:27:47 686295 --> Controller Class Initialized
INFO - 2018-12-27 13:27:47 687052 --> Final output sent to browser
DEBUG - 2018-12-27 13:27:47 687139 --> Total execution time: 0.0593
INFO - 2018-12-27 07:57:49 168601 --> Config Class Initialized
INFO - 2018-12-27 07:57:49 168752 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:57:49 170821 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:57:49 170947 --> Utf8 Class Initialized
INFO - 2018-12-27 07:57:49 172249 --> URI Class Initialized
INFO - 2018-12-27 07:57:49 176224 --> Router Class Initialized
INFO - 2018-12-27 07:57:49 178653 --> Output Class Initialized
INFO - 2018-12-27 07:57:49 180495 --> Security Class Initialized
DEBUG - 2018-12-27 07:57:49 182130 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:57:49 182255 --> Input Class Initialized
INFO - 2018-12-27 07:57:49 182831 --> Language Class Initialized
ERROR - 2018-12-27 07:57:49 183752 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-27 07:58:05 369436 --> Config Class Initialized
INFO - 2018-12-27 07:58:05 369765 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:58:05 372142 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:58:05 372267 --> Utf8 Class Initialized
INFO - 2018-12-27 07:58:05 385240 --> Config Class Initialized
INFO - 2018-12-27 07:58:05 385607 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:58:05 387990 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:58:05 388118 --> Utf8 Class Initialized
INFO - 2018-12-27 07:58:05 392041 --> URI Class Initialized
INFO - 2018-12-27 07:58:05 393767 --> URI Class Initialized
DEBUG - 2018-12-27 07:58:05 396331 --> No URI present. Default controller set.
INFO - 2018-12-27 07:58:05 396476 --> Router Class Initialized
INFO - 2018-12-27 07:58:05 399178 --> Output Class Initialized
INFO - 2018-12-27 07:58:05 401166 --> Security Class Initialized
DEBUG - 2018-12-27 07:58:05 403088 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:58:05 403215 --> Input Class Initialized
INFO - 2018-12-27 07:58:05 406899 --> Router Class Initialized
INFO - 2018-12-27 07:58:05 409579 --> Output Class Initialized
INFO - 2018-12-27 07:58:05 411581 --> Security Class Initialized
INFO - 2018-12-27 07:58:05 413847 --> Language Class Initialized
INFO - 2018-12-27 07:58:05 417738 --> Loader Class Initialized
INFO - 2018-12-27 07:58:05 419348 --> Helper loaded: url_helper
INFO - 2018-12-27 07:58:05 420176 --> Helper loaded: utility_helper
DEBUG - 2018-12-27 07:58:05 423459 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:58:05 423607 --> Input Class Initialized
INFO - 2018-12-27 07:58:05 424205 --> Language Class Initialized
INFO - 2018-12-27 13:28:05 431808 --> Database Driver Class Initialized
INFO - 2018-12-27 07:58:05 435677 --> Loader Class Initialized
INFO - 2018-12-27 07:58:05 437271 --> Helper loaded: url_helper
INFO - 2018-12-27 07:58:05 438122 --> Helper loaded: utility_helper
INFO - 2018-12-27 13:28:05 451252 --> Database Driver Class Initialized
INFO - 2018-12-27 13:28:05 456325 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:28:05 457765 --> Controller Class Initialized
INFO - 2018-12-27 13:28:05 458503 --> Parser Class Initialized
INFO - 2018-12-27 13:28:05 459583 --> Helper loaded: html_helper
INFO - 2018-12-27 13:28:05 460751 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-27 13:28:05 463356 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:05 613518 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-27 13:28:05 617443 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-27 13:28:05 617902 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:05 618561 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-27 13:28:05 620301 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-27 13:28:05 621421 --> Helper loaded: file_helper
DEBUG - 2018-12-27 13:28:05 621520 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-27 13:28:05 624042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 625152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 631726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 633059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 634558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 634789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 635165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 635891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 637353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 637583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 637948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 638576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 640192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 640422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 640798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 641412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 642889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 643106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 643506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 644115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 645795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 646135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 646787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 647525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 649286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 649538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 649925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 650548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 652098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 652323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 652728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 653332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 654920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 655153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 655699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 656313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 658010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 658236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 658657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 659265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 659848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 660415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 660989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 661561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 662121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 662708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 663280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 663855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 664421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 664994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 665555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 666157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 666729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 667285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 667870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 668282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 668781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 669190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 669631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 670237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 672099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 672324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 672780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 673491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 675224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 675468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 675913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 676647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 678522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 678745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 679191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 679831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 681554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 681782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 682224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 682869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 684566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 684793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 685254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 686002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 687618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 687845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 688297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 689893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 690572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 692173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 693406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 697312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 698338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 701567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 702651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 705765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 708163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 711656 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 13:28:05 713670 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-27 13:28:05 716547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 718813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 719253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:05 722451 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 13:28:05 723206 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-27 13:28:05 814037 --> Final output sent to browser
DEBUG - 2018-12-27 13:28:05 814279 --> Total execution time: 0.3570
INFO - 2018-12-27 13:28:05 823209 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:28:05 825223 --> Controller Class Initialized
INFO - 2018-12-27 13:28:05 846987 --> Model Class Initialized
INFO - 2018-12-27 13:28:05 852026 --> Final output sent to browser
DEBUG - 2018-12-27 13:28:05 852155 --> Total execution time: 0.4689
INFO - 2018-12-27 07:58:06 009327 --> Config Class Initialized
INFO - 2018-12-27 07:58:06 009505 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:58:06 011575 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:58:06 011704 --> Utf8 Class Initialized
INFO - 2018-12-27 07:58:06 013598 --> URI Class Initialized
INFO - 2018-12-27 07:58:06 015783 --> Router Class Initialized
INFO - 2018-12-27 07:58:06 018126 --> Output Class Initialized
INFO - 2018-12-27 07:58:06 020013 --> Security Class Initialized
DEBUG - 2018-12-27 07:58:06 021676 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:58:06 021804 --> Input Class Initialized
INFO - 2018-12-27 07:58:06 022351 --> Language Class Initialized
INFO - 2018-12-27 07:58:06 029316 --> Loader Class Initialized
INFO - 2018-12-27 07:58:06 030728 --> Helper loaded: url_helper
INFO - 2018-12-27 07:58:06 031470 --> Helper loaded: utility_helper
INFO - 2018-12-27 13:28:06 040605 --> Database Driver Class Initialized
INFO - 2018-12-27 13:28:06 045506 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:28:06 046899 --> Controller Class Initialized
INFO - 2018-12-27 13:28:06 047629 --> Parser Class Initialized
INFO - 2018-12-27 13:28:06 048708 --> Helper loaded: html_helper
INFO - 2018-12-27 13:28:06 060067 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:06 062870 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'gaurav@gmail.com']
INFO - 2018-12-27 13:28:06 069956 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:06 076004 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'gaurav@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2018-12-27 13:28:06 085042 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:06 088922 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `num_business_viewed`, `add_to_favorite`, `business_add_date`
FROM `bd_business_details`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
DEBUG - 2018-12-27 13:28:06 105607 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`name`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `buy_invest_in`, `num_business_viewed`, `added_date`
FROM `bd_business_details`
LEFT JOIN `bd_buy_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
INFO - 2018-12-27 13:28:06 118361 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:06 122296 --> Last query to getBuyContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2018-12-27 13:28:06 123759 --> Last query to getAllContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2018-12-27 13:28:06 125298 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2018-12-27 13:28:06 126816 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2018-12-27 13:28:06 133052 --> Last query to getContact33333  [SELECT *
FROM `bd_property_view_user`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_view_user`.`viewed_form_id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `viewed_user_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-27 13:28:06 139333 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `like_user_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-27 13:28:06 141484 --> Last query to getFhhhhhavCou88888ntAll  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-27 13:28:06 142937 --> Last query to getContact33333  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `customer_id` = 'gaurav@gmail.com']
DEBUG - 2018-12-27 13:28:06 144762 --> Last query to getFavCountBuy  [SELECT COUNT(*) AS `numrows`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business'
AND `add_to_favorite` = '1']
INFO - 2018-12-27 13:28:06 148791 --> Model Class Initialized
DEBUG - 2018-12-27 13:28:06 154215 --> listing_model: RecommendedBusinessList: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `listing_category` = '']
DEBUG - 2018-12-27 13:28:06 160927 --> listing_model: RecommendedBusinessList111: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
WHERE `listing_category` = '']
DEBUG - 2018-12-27 13:28:06 163100 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '310']
DEBUG - 2018-12-27 13:28:06 165530 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '310']
DEBUG - 2018-12-27 13:28:06 167608 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '309']
DEBUG - 2018-12-27 13:28:06 169576 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '309']
DEBUG - 2018-12-27 13:28:06 171674 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '308']
DEBUG - 2018-12-27 13:28:06 173657 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '308']
DEBUG - 2018-12-27 13:28:06 175734 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '307']
DEBUG - 2018-12-27 13:28:06 177966 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '307']
DEBUG - 2018-12-27 13:28:06 180047 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '306']
DEBUG - 2018-12-27 13:28:06 181999 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '306']
DEBUG - 2018-12-27 13:28:06 184103 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '305']
DEBUG - 2018-12-27 13:28:06 186094 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '305']
DEBUG - 2018-12-27 13:28:06 188174 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '304']
DEBUG - 2018-12-27 13:28:06 190105 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '304']
DEBUG - 2018-12-27 13:28:06 192264 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '303']
DEBUG - 2018-12-27 13:28:06 194844 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '303']
DEBUG - 2018-12-27 13:28:06 196969 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '302']
DEBUG - 2018-12-27 13:28:06 199281 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '302']
DEBUG - 2018-12-27 13:28:06 201400 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '301']
DEBUG - 2018-12-27 13:28:06 203411 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '301']
DEBUG - 2018-12-27 13:28:06 205562 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '300']
DEBUG - 2018-12-27 13:28:06 208412 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '300']
DEBUG - 2018-12-27 13:28:06 211968 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '299']
DEBUG - 2018-12-27 13:28:06 214194 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '299']
DEBUG - 2018-12-27 13:28:06 216793 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '298']
DEBUG - 2018-12-27 13:28:06 218606 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '298']
DEBUG - 2018-12-27 13:28:06 220220 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '297']
DEBUG - 2018-12-27 13:28:06 221798 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '297']
DEBUG - 2018-12-27 13:28:06 223351 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '296']
DEBUG - 2018-12-27 13:28:06 224771 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '296']
DEBUG - 2018-12-27 13:28:06 226278 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '295']
DEBUG - 2018-12-27 13:28:06 227897 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '295']
DEBUG - 2018-12-27 13:28:06 229760 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '294']
DEBUG - 2018-12-27 13:28:06 231323 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '294']
DEBUG - 2018-12-27 13:28:06 232862 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '293']
DEBUG - 2018-12-27 13:28:06 234257 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '293']
DEBUG - 2018-12-27 13:28:06 235889 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '292']
DEBUG - 2018-12-27 13:28:06 237299 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '292']
DEBUG - 2018-12-27 13:28:06 238894 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '291']
DEBUG - 2018-12-27 13:28:06 240287 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '291']
DEBUG - 2018-12-27 13:28:06 241805 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '290']
DEBUG - 2018-12-27 13:28:06 243184 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '290']
DEBUG - 2018-12-27 13:28:06 244689 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '289']
DEBUG - 2018-12-27 13:28:06 246059 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '289']
DEBUG - 2018-12-27 13:28:06 247574 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '288']
DEBUG - 2018-12-27 13:28:06 248972 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '288']
DEBUG - 2018-12-27 13:28:06 250493 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '287']
DEBUG - 2018-12-27 13:28:06 252347 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '287']
DEBUG - 2018-12-27 13:28:06 253859 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '286']
DEBUG - 2018-12-27 13:28:06 255240 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '286']
DEBUG - 2018-12-27 13:28:06 256769 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '285']
DEBUG - 2018-12-27 13:28:06 258166 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '285']
DEBUG - 2018-12-27 13:28:06 259682 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '284']
DEBUG - 2018-12-27 13:28:06 261100 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '284']
DEBUG - 2018-12-27 13:28:06 262614 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '283']
DEBUG - 2018-12-27 13:28:06 263988 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '283']
DEBUG - 2018-12-27 13:28:06 265502 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '282']
DEBUG - 2018-12-27 13:28:06 266897 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '282']
DEBUG - 2018-12-27 13:28:06 268416 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '280']
DEBUG - 2018-12-27 13:28:06 269800 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '280']
DEBUG - 2018-12-27 13:28:06 271298 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '279']
DEBUG - 2018-12-27 13:28:06 272701 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '279']
DEBUG - 2018-12-27 13:28:06 274259 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '278']
DEBUG - 2018-12-27 13:28:06 275645 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '278']
DEBUG - 2018-12-27 13:28:06 277399 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '277']
DEBUG - 2018-12-27 13:28:06 279194 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '277']
DEBUG - 2018-12-27 13:28:06 281078 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '276']
DEBUG - 2018-12-27 13:28:06 282875 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '276']
DEBUG - 2018-12-27 13:28:06 284765 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '275']
DEBUG - 2018-12-27 13:28:06 286520 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '275']
DEBUG - 2018-12-27 13:28:06 288434 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '274']
DEBUG - 2018-12-27 13:28:06 290245 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '274']
DEBUG - 2018-12-27 13:28:06 292144 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '273']
DEBUG - 2018-12-27 13:28:06 293956 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '273']
DEBUG - 2018-12-27 13:28:06 295829 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '271']
DEBUG - 2018-12-27 13:28:06 297584 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '271']
DEBUG - 2018-12-27 13:28:06 299518 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '264']
DEBUG - 2018-12-27 13:28:06 301289 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '264']
DEBUG - 2018-12-27 13:28:06 303028 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '263']
DEBUG - 2018-12-27 13:28:06 304821 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '263']
DEBUG - 2018-12-27 13:28:06 306927 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '262']
DEBUG - 2018-12-27 13:28:06 308701 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '262']
DEBUG - 2018-12-27 13:28:06 310571 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '261']
DEBUG - 2018-12-27 13:28:06 312278 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '261']
DEBUG - 2018-12-27 13:28:06 314165 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '260']
DEBUG - 2018-12-27 13:28:06 315948 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '260']
DEBUG - 2018-12-27 13:28:06 320316 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '259']
DEBUG - 2018-12-27 13:28:06 322143 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '259']
DEBUG - 2018-12-27 13:28:06 323998 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '258']
DEBUG - 2018-12-27 13:28:06 325735 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '258']
DEBUG - 2018-12-27 13:28:06 327580 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '257']
DEBUG - 2018-12-27 13:28:06 329276 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '257']
DEBUG - 2018-12-27 13:28:06 331113 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '256']
DEBUG - 2018-12-27 13:28:06 332813 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '256']
DEBUG - 2018-12-27 13:28:06 334634 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '255']
DEBUG - 2018-12-27 13:28:06 336327 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '255']
DEBUG - 2018-12-27 13:28:06 338160 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '254']
DEBUG - 2018-12-27 13:28:06 339890 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '254']
DEBUG - 2018-12-27 13:28:06 341722 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '253']
DEBUG - 2018-12-27 13:28:06 343426 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '253']
DEBUG - 2018-12-27 13:28:06 345258 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '252']
DEBUG - 2018-12-27 13:28:06 346967 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '252']
DEBUG - 2018-12-27 13:28:06 348884 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '251']
DEBUG - 2018-12-27 13:28:06 350624 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '251']
DEBUG - 2018-12-27 13:28:06 352441 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '250']
DEBUG - 2018-12-27 13:28:06 354159 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '250']
DEBUG - 2018-12-27 13:28:06 355973 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '249']
DEBUG - 2018-12-27 13:28:06 357656 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '249']
DEBUG - 2018-12-27 13:28:06 359512 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '248']
DEBUG - 2018-12-27 13:28:06 361198 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '248']
DEBUG - 2018-12-27 13:28:06 363006 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '247']
DEBUG - 2018-12-27 13:28:06 364746 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '247']
DEBUG - 2018-12-27 13:28:06 366589 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '246']
DEBUG - 2018-12-27 13:28:06 368302 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '246']
DEBUG - 2018-12-27 13:28:06 370168 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '245']
DEBUG - 2018-12-27 13:28:06 371870 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '245']
DEBUG - 2018-12-27 13:28:06 373688 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '244']
DEBUG - 2018-12-27 13:28:06 375451 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '244']
DEBUG - 2018-12-27 13:28:06 377264 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '243']
DEBUG - 2018-12-27 13:28:06 378988 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '243']
DEBUG - 2018-12-27 13:28:06 383196 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '242']
DEBUG - 2018-12-27 13:28:06 384887 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '242']
DEBUG - 2018-12-27 13:28:06 386636 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '241']
DEBUG - 2018-12-27 13:28:06 388238 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '241']
DEBUG - 2018-12-27 13:28:06 389988 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '240']
DEBUG - 2018-12-27 13:28:06 391737 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '240']
DEBUG - 2018-12-27 13:28:06 393631 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '239']
DEBUG - 2018-12-27 13:28:06 395350 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '239']
DEBUG - 2018-12-27 13:28:06 397217 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '238']
DEBUG - 2018-12-27 13:28:06 399013 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '238']
DEBUG - 2018-12-27 13:28:06 400948 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '237']
DEBUG - 2018-12-27 13:28:06 402738 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '237']
DEBUG - 2018-12-27 13:28:06 404633 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '236']
DEBUG - 2018-12-27 13:28:06 406445 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '236']
DEBUG - 2018-12-27 13:28:06 408324 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '235']
DEBUG - 2018-12-27 13:28:06 410145 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '235']
DEBUG - 2018-12-27 13:28:06 412041 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '234']
DEBUG - 2018-12-27 13:28:06 413882 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '234']
DEBUG - 2018-12-27 13:28:06 415745 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '233']
DEBUG - 2018-12-27 13:28:06 417789 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '233']
DEBUG - 2018-12-27 13:28:06 420408 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '232']
DEBUG - 2018-12-27 13:28:06 422746 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '232']
DEBUG - 2018-12-27 13:28:06 425250 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '231']
DEBUG - 2018-12-27 13:28:06 427678 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '231']
DEBUG - 2018-12-27 13:28:06 430207 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '230']
DEBUG - 2018-12-27 13:28:06 432596 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '230']
DEBUG - 2018-12-27 13:28:06 435112 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '229']
DEBUG - 2018-12-27 13:28:06 437318 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '229']
DEBUG - 2018-12-27 13:28:06 439815 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '228']
DEBUG - 2018-12-27 13:28:06 442451 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '228']
DEBUG - 2018-12-27 13:28:06 445667 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '227']
DEBUG - 2018-12-27 13:28:06 448458 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '227']
DEBUG - 2018-12-27 13:28:06 451531 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '226']
DEBUG - 2018-12-27 13:28:06 454257 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '226']
DEBUG - 2018-12-27 13:28:06 457570 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '222']
DEBUG - 2018-12-27 13:28:06 460580 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '222']
DEBUG - 2018-12-27 13:28:06 463231 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '220']
DEBUG - 2018-12-27 13:28:06 465579 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '220']
DEBUG - 2018-12-27 13:28:06 468152 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '217']
DEBUG - 2018-12-27 13:28:06 470511 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '217']
DEBUG - 2018-12-27 13:28:06 473081 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '216']
DEBUG - 2018-12-27 13:28:06 475502 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '216']
DEBUG - 2018-12-27 13:28:06 478059 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '215']
DEBUG - 2018-12-27 13:28:06 480379 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '215']
DEBUG - 2018-12-27 13:28:06 482944 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '200']
DEBUG - 2018-12-27 13:28:06 485240 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '200']
DEBUG - 2018-12-27 13:28:06 488029 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '199']
DEBUG - 2018-12-27 13:28:06 490381 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '199']
DEBUG - 2018-12-27 13:28:06 492970 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '198']
DEBUG - 2018-12-27 13:28:06 495353 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '198']
DEBUG - 2018-12-27 13:28:06 497906 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '197']
DEBUG - 2018-12-27 13:28:06 500195 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '197']
DEBUG - 2018-12-27 13:28:06 502779 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '190']
DEBUG - 2018-12-27 13:28:06 505075 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '190']
DEBUG - 2018-12-27 13:28:06 507695 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '189']
DEBUG - 2018-12-27 13:28:06 510016 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '189']
DEBUG - 2018-12-27 13:28:06 512592 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '188']
DEBUG - 2018-12-27 13:28:06 514945 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '188']
DEBUG - 2018-12-27 13:28:06 517781 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '184']
DEBUG - 2018-12-27 13:28:06 520132 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '184']
DEBUG - 2018-12-27 13:28:06 522733 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '183']
DEBUG - 2018-12-27 13:28:06 525046 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '183']
DEBUG - 2018-12-27 13:28:06 527657 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '182']
DEBUG - 2018-12-27 13:28:06 530031 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '182']
DEBUG - 2018-12-27 13:28:06 532625 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '181']
DEBUG - 2018-12-27 13:28:06 534961 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '181']
DEBUG - 2018-12-27 13:28:06 537575 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '177']
DEBUG - 2018-12-27 13:28:06 539937 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '177']
DEBUG - 2018-12-27 13:28:06 542524 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '176']
DEBUG - 2018-12-27 13:28:06 544867 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '176']
DEBUG - 2018-12-27 13:28:06 547450 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '175']
DEBUG - 2018-12-27 13:28:06 549854 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '175']
DEBUG - 2018-12-27 13:28:06 552413 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '174']
DEBUG - 2018-12-27 13:28:06 554783 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '174']
DEBUG - 2018-12-27 13:28:06 557354 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '173']
DEBUG - 2018-12-27 13:28:06 559720 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '173']
DEBUG - 2018-12-27 13:28:06 562321 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '172']
DEBUG - 2018-12-27 13:28:06 564708 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '172']
DEBUG - 2018-12-27 13:28:06 567287 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '171']
DEBUG - 2018-12-27 13:28:06 569705 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '171']
DEBUG - 2018-12-27 13:28:06 572251 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '170']
DEBUG - 2018-12-27 13:28:06 574625 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '170']
DEBUG - 2018-12-27 13:28:06 577338 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '169']
DEBUG - 2018-12-27 13:28:06 579557 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '169']
DEBUG - 2018-12-27 13:28:06 581932 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '168']
DEBUG - 2018-12-27 13:28:06 583954 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '168']
DEBUG - 2018-12-27 13:28:06 586292 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '167']
DEBUG - 2018-12-27 13:28:06 588660 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '167']
DEBUG - 2018-12-27 13:28:06 591238 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '166']
DEBUG - 2018-12-27 13:28:06 593621 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '166']
DEBUG - 2018-12-27 13:28:06 596216 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '165']
DEBUG - 2018-12-27 13:28:06 598551 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '165']
DEBUG - 2018-12-27 13:28:06 601147 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '164']
DEBUG - 2018-12-27 13:28:06 603539 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '164']
DEBUG - 2018-12-27 13:28:06 606069 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '163']
DEBUG - 2018-12-27 13:28:06 608371 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '163']
DEBUG - 2018-12-27 13:28:06 611021 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '162']
DEBUG - 2018-12-27 13:28:06 613405 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '162']
DEBUG - 2018-12-27 13:28:06 616065 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '161']
DEBUG - 2018-12-27 13:28:06 618423 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '161']
DEBUG - 2018-12-27 13:28:06 621084 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '160']
DEBUG - 2018-12-27 13:28:06 623508 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '160']
DEBUG - 2018-12-27 13:28:06 626144 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '159']
DEBUG - 2018-12-27 13:28:06 628556 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '159']
DEBUG - 2018-12-27 13:28:06 631155 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '158']
DEBUG - 2018-12-27 13:28:06 633306 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '158']
DEBUG - 2018-12-27 13:28:06 635715 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '157']
DEBUG - 2018-12-27 13:28:06 637856 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '157']
DEBUG - 2018-12-27 13:28:06 640235 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '156']
DEBUG - 2018-12-27 13:28:06 642316 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '156']
DEBUG - 2018-12-27 13:28:06 644803 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '155']
DEBUG - 2018-12-27 13:28:06 646971 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '155']
DEBUG - 2018-12-27 13:28:06 649409 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '154']
DEBUG - 2018-12-27 13:28:06 651787 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '154']
DEBUG - 2018-12-27 13:28:06 654433 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '153']
DEBUG - 2018-12-27 13:28:06 656811 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '153']
DEBUG - 2018-12-27 13:28:06 659430 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '152']
DEBUG - 2018-12-27 13:28:06 661811 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '152']
DEBUG - 2018-12-27 13:28:06 664458 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '151']
DEBUG - 2018-12-27 13:28:06 666887 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '151']
DEBUG - 2018-12-27 13:28:06 669565 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '150']
DEBUG - 2018-12-27 13:28:06 671983 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '150']
DEBUG - 2018-12-27 13:28:06 674710 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '149']
DEBUG - 2018-12-27 13:28:06 677177 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '149']
DEBUG - 2018-12-27 13:28:06 679929 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '148']
DEBUG - 2018-12-27 13:28:06 682487 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '148']
DEBUG - 2018-12-27 13:28:06 685193 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '147']
DEBUG - 2018-12-27 13:28:06 687563 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '147']
DEBUG - 2018-12-27 13:28:06 690205 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '146']
DEBUG - 2018-12-27 13:28:06 693150 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '146']
DEBUG - 2018-12-27 13:28:06 695796 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '145']
DEBUG - 2018-12-27 13:28:06 698131 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '145']
DEBUG - 2018-12-27 13:28:06 700896 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '144']
DEBUG - 2018-12-27 13:28:06 703350 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '144']
DEBUG - 2018-12-27 13:28:06 706136 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '143']
DEBUG - 2018-12-27 13:28:06 708817 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '143']
DEBUG - 2018-12-27 13:28:06 711576 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '142']
DEBUG - 2018-12-27 13:28:06 714075 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '142']
DEBUG - 2018-12-27 13:28:06 717168 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '141']
DEBUG - 2018-12-27 13:28:06 719877 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '141']
DEBUG - 2018-12-27 13:28:06 723037 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '140']
DEBUG - 2018-12-27 13:28:06 725491 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '140']
DEBUG - 2018-12-27 13:28:06 728598 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '139']
DEBUG - 2018-12-27 13:28:06 731077 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '139']
DEBUG - 2018-12-27 13:28:06 733963 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '138']
DEBUG - 2018-12-27 13:28:06 736421 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '138']
DEBUG - 2018-12-27 13:28:06 739141 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '137']
DEBUG - 2018-12-27 13:28:06 741718 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '137']
DEBUG - 2018-12-27 13:28:06 744363 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '136']
DEBUG - 2018-12-27 13:28:06 746716 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '136']
DEBUG - 2018-12-27 13:28:06 749288 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '135']
DEBUG - 2018-12-27 13:28:06 751878 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '135']
DEBUG - 2018-12-27 13:28:06 754575 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '134']
DEBUG - 2018-12-27 13:28:06 757008 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '134']
DEBUG - 2018-12-27 13:28:06 759694 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '133']
DEBUG - 2018-12-27 13:28:06 762111 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '133']
DEBUG - 2018-12-27 13:28:06 765034 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '132']
DEBUG - 2018-12-27 13:28:06 767537 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '132']
DEBUG - 2018-12-27 13:28:06 770534 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '131']
DEBUG - 2018-12-27 13:28:06 773260 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '131']
DEBUG - 2018-12-27 13:28:06 776010 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '130']
DEBUG - 2018-12-27 13:28:06 778393 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '130']
DEBUG - 2018-12-27 13:28:06 781074 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '129']
DEBUG - 2018-12-27 13:28:06 783901 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '129']
DEBUG - 2018-12-27 13:28:06 786748 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '128']
DEBUG - 2018-12-27 13:28:06 789199 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '128']
DEBUG - 2018-12-27 13:28:06 792052 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '127']
DEBUG - 2018-12-27 13:28:06 794559 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '127']
DEBUG - 2018-12-27 13:28:06 797517 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '126']
DEBUG - 2018-12-27 13:28:06 800270 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '126']
DEBUG - 2018-12-27 13:28:06 803133 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '125']
DEBUG - 2018-12-27 13:28:06 805744 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '125']
DEBUG - 2018-12-27 13:28:06 808906 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '124']
DEBUG - 2018-12-27 13:28:06 811983 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '124']
DEBUG - 2018-12-27 13:28:06 815174 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '123']
DEBUG - 2018-12-27 13:28:06 817630 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '123']
DEBUG - 2018-12-27 13:28:06 820456 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '122']
DEBUG - 2018-12-27 13:28:06 823185 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '122']
DEBUG - 2018-12-27 13:28:06 826457 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '121']
DEBUG - 2018-12-27 13:28:06 829565 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '121']
DEBUG - 2018-12-27 13:28:06 833031 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '120']
DEBUG - 2018-12-27 13:28:06 836040 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '120']
DEBUG - 2018-12-27 13:28:06 839262 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '119']
DEBUG - 2018-12-27 13:28:06 841816 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '119']
DEBUG - 2018-12-27 13:28:06 844116 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '118']
DEBUG - 2018-12-27 13:28:06 846270 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '118']
DEBUG - 2018-12-27 13:28:06 848558 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '117']
DEBUG - 2018-12-27 13:28:06 850694 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '117']
DEBUG - 2018-12-27 13:28:06 852932 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '116']
DEBUG - 2018-12-27 13:28:06 855012 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '116']
DEBUG - 2018-12-27 13:28:06 856935 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '115']
DEBUG - 2018-12-27 13:28:06 858705 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '115']
DEBUG - 2018-12-27 13:28:06 860605 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '114']
DEBUG - 2018-12-27 13:28:06 862548 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '114']
DEBUG - 2018-12-27 13:28:06 865159 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '113']
DEBUG - 2018-12-27 13:28:06 867597 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '113']
DEBUG - 2018-12-27 13:28:06 870316 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '112']
DEBUG - 2018-12-27 13:28:06 872750 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '112']
DEBUG - 2018-12-27 13:28:06 875622 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '111']
DEBUG - 2018-12-27 13:28:06 878314 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '111']
DEBUG - 2018-12-27 13:28:06 881104 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '110']
DEBUG - 2018-12-27 13:28:06 883687 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '110']
DEBUG - 2018-12-27 13:28:06 886390 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '109']
DEBUG - 2018-12-27 13:28:06 888761 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '109']
DEBUG - 2018-12-27 13:28:06 891437 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '108']
DEBUG - 2018-12-27 13:28:06 893932 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '108']
DEBUG - 2018-12-27 13:28:06 896569 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '107']
DEBUG - 2018-12-27 13:28:06 899091 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '107']
DEBUG - 2018-12-27 13:28:06 901777 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '106']
DEBUG - 2018-12-27 13:28:06 904236 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '106']
DEBUG - 2018-12-27 13:28:06 906896 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '105']
DEBUG - 2018-12-27 13:28:06 909300 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '105']
DEBUG - 2018-12-27 13:28:06 911911 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '104']
DEBUG - 2018-12-27 13:28:06 914258 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '104']
DEBUG - 2018-12-27 13:28:06 916852 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '103']
DEBUG - 2018-12-27 13:28:06 919188 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '103']
DEBUG - 2018-12-27 13:28:06 921783 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '102']
DEBUG - 2018-12-27 13:28:06 924280 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '102']
DEBUG - 2018-12-27 13:28:06 926974 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '101']
DEBUG - 2018-12-27 13:28:06 929353 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '101']
DEBUG - 2018-12-27 13:28:06 931886 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '100']
DEBUG - 2018-12-27 13:28:06 934155 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '100']
DEBUG - 2018-12-27 13:28:06 936753 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '99']
DEBUG - 2018-12-27 13:28:06 939094 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '99']
DEBUG - 2018-12-27 13:28:06 941711 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '98']
DEBUG - 2018-12-27 13:28:06 944148 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '98']
DEBUG - 2018-12-27 13:28:06 946912 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '97']
DEBUG - 2018-12-27 13:28:06 949287 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '97']
DEBUG - 2018-12-27 13:28:06 952027 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '96']
DEBUG - 2018-12-27 13:28:06 954435 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '96']
DEBUG - 2018-12-27 13:28:06 956989 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '95']
DEBUG - 2018-12-27 13:28:06 959261 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '95']
DEBUG - 2018-12-27 13:28:06 961854 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '94']
DEBUG - 2018-12-27 13:28:06 964127 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '94']
DEBUG - 2018-12-27 13:28:06 966811 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '93']
DEBUG - 2018-12-27 13:28:06 969234 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '93']
DEBUG - 2018-12-27 13:28:06 971836 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '92']
DEBUG - 2018-12-27 13:28:06 974180 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '92']
DEBUG - 2018-12-27 13:28:06 976881 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '88']
DEBUG - 2018-12-27 13:28:06 979223 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '88']
DEBUG - 2018-12-27 13:28:06 981806 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '87']
DEBUG - 2018-12-27 13:28:06 984178 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '87']
DEBUG - 2018-12-27 13:28:06 986810 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '86']
DEBUG - 2018-12-27 13:28:06 989147 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '86']
DEBUG - 2018-12-27 13:28:06 991847 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '85']
DEBUG - 2018-12-27 13:28:06 994235 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '85']
DEBUG - 2018-12-27 13:28:06 996741 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '84']
DEBUG - 2018-12-27 13:28:06 999056 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '84']
DEBUG - 2018-12-27 13:28:07 001667 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '83']
DEBUG - 2018-12-27 13:28:07 004354 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '83']
DEBUG - 2018-12-27 13:28:07 006625 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '82']
DEBUG - 2018-12-27 13:28:07 008671 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '82']
DEBUG - 2018-12-27 13:28:07 010867 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '81']
DEBUG - 2018-12-27 13:28:07 012883 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '81']
DEBUG - 2018-12-27 13:28:07 014633 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '78']
DEBUG - 2018-12-27 13:28:07 015990 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '78']
DEBUG - 2018-12-27 13:28:07 017437 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '77']
DEBUG - 2018-12-27 13:28:07 018750 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '77']
DEBUG - 2018-12-27 13:28:07 020262 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '76']
DEBUG - 2018-12-27 13:28:07 021636 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '76']
DEBUG - 2018-12-27 13:28:07 023063 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '75']
DEBUG - 2018-12-27 13:28:07 024359 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '75']
DEBUG - 2018-12-27 13:28:07 025783 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '74']
DEBUG - 2018-12-27 13:28:07 027137 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '74']
DEBUG - 2018-12-27 13:28:07 028578 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '69']
DEBUG - 2018-12-27 13:28:07 029866 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '69']
DEBUG - 2018-12-27 13:28:07 031276 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '67']
DEBUG - 2018-12-27 13:28:07 032917 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '67']
DEBUG - 2018-12-27 13:28:07 034363 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '66']
DEBUG - 2018-12-27 13:28:07 035686 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '66']
DEBUG - 2018-12-27 13:28:07 037136 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '65']
DEBUG - 2018-12-27 13:28:07 038417 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '65']
DEBUG - 2018-12-27 13:28:07 039849 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '64']
DEBUG - 2018-12-27 13:28:07 041207 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '64']
DEBUG - 2018-12-27 13:28:07 042637 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '57']
DEBUG - 2018-12-27 13:28:07 043936 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '57']
DEBUG - 2018-12-27 13:28:07 045341 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '56']
DEBUG - 2018-12-27 13:28:07 046677 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '56']
DEBUG - 2018-12-27 13:28:07 048113 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '55']
DEBUG - 2018-12-27 13:28:07 049402 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '55']
DEBUG - 2018-12-27 13:28:07 050981 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '54']
DEBUG - 2018-12-27 13:28:07 052767 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '54']
DEBUG - 2018-12-27 13:28:07 054728 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '53']
DEBUG - 2018-12-27 13:28:07 057277 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '53']
DEBUG - 2018-12-27 13:28:07 060497 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '52']
DEBUG - 2018-12-27 13:28:07 062083 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '52']
DEBUG - 2018-12-27 13:28:07 063522 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '51']
DEBUG - 2018-12-27 13:28:07 064827 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '51']
DEBUG - 2018-12-27 13:28:07 066879 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '50']
DEBUG - 2018-12-27 13:28:07 068535 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '50']
DEBUG - 2018-12-27 13:28:07 069974 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '49']
DEBUG - 2018-12-27 13:28:07 071299 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '49']
DEBUG - 2018-12-27 13:28:07 072763 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '48']
DEBUG - 2018-12-27 13:28:07 074125 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '48']
DEBUG - 2018-12-27 13:28:07 075593 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '47']
DEBUG - 2018-12-27 13:28:07 076939 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '47']
DEBUG - 2018-12-27 13:28:07 078397 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '46']
DEBUG - 2018-12-27 13:28:07 079737 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '46']
DEBUG - 2018-12-27 13:28:07 081211 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '45']
DEBUG - 2018-12-27 13:28:07 082572 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '45']
DEBUG - 2018-12-27 13:28:07 084033 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '44']
DEBUG - 2018-12-27 13:28:07 085314 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '44']
DEBUG - 2018-12-27 13:28:07 086751 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '43']
DEBUG - 2018-12-27 13:28:07 088088 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '43']
DEBUG - 2018-12-27 13:28:07 089533 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '42']
DEBUG - 2018-12-27 13:28:07 090904 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '42']
DEBUG - 2018-12-27 13:28:07 092339 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '41']
DEBUG - 2018-12-27 13:28:07 093643 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '41']
DEBUG - 2018-12-27 13:28:07 095048 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '40']
DEBUG - 2018-12-27 13:28:07 096318 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '40']
DEBUG - 2018-12-27 13:28:07 097740 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '39']
DEBUG - 2018-12-27 13:28:07 099028 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '39']
DEBUG - 2018-12-27 13:28:07 101212 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '38']
DEBUG - 2018-12-27 13:28:07 102622 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '38']
DEBUG - 2018-12-27 13:28:07 104121 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '37']
DEBUG - 2018-12-27 13:28:07 105479 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '37']
DEBUG - 2018-12-27 13:28:07 106980 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '36']
DEBUG - 2018-12-27 13:28:07 108329 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '36']
DEBUG - 2018-12-27 13:28:07 109853 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '35']
DEBUG - 2018-12-27 13:28:07 111248 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '35']
DEBUG - 2018-12-27 13:28:07 112737 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '34']
DEBUG - 2018-12-27 13:28:07 114099 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '34']
DEBUG - 2018-12-27 13:28:07 115590 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '33']
DEBUG - 2018-12-27 13:28:07 116969 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '33']
DEBUG - 2018-12-27 13:28:07 118436 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '32']
DEBUG - 2018-12-27 13:28:07 119800 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '32']
DEBUG - 2018-12-27 13:28:07 121284 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '31']
DEBUG - 2018-12-27 13:28:07 122641 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '31']
DEBUG - 2018-12-27 13:28:07 124155 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '30']
DEBUG - 2018-12-27 13:28:07 125494 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '30']
DEBUG - 2018-12-27 13:28:07 126964 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '29']
DEBUG - 2018-12-27 13:28:07 128298 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '29']
DEBUG - 2018-12-27 13:28:07 129797 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '28']
DEBUG - 2018-12-27 13:28:07 131160 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '28']
DEBUG - 2018-12-27 13:28:07 132637 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '27']
DEBUG - 2018-12-27 13:28:07 134069 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '27']
DEBUG - 2018-12-27 13:28:07 135535 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '26']
DEBUG - 2018-12-27 13:28:07 136862 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '26']
DEBUG - 2018-12-27 13:28:07 138324 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '25']
DEBUG - 2018-12-27 13:28:07 139678 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '25']
DEBUG - 2018-12-27 13:28:07 141248 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '24']
DEBUG - 2018-12-27 13:28:07 142616 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '24']
DEBUG - 2018-12-27 13:28:07 144084 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '23']
DEBUG - 2018-12-27 13:28:07 145440 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '23']
DEBUG - 2018-12-27 13:28:07 146936 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '22']
DEBUG - 2018-12-27 13:28:07 148264 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '22']
DEBUG - 2018-12-27 13:28:07 149729 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '21']
DEBUG - 2018-12-27 13:28:07 151068 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '21']
DEBUG - 2018-12-27 13:28:07 152548 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '20']
DEBUG - 2018-12-27 13:28:07 153872 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '20']
DEBUG - 2018-12-27 13:28:07 155323 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '19']
DEBUG - 2018-12-27 13:28:07 156675 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '19']
DEBUG - 2018-12-27 13:28:07 158132 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '18']
DEBUG - 2018-12-27 13:28:07 159459 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '18']
DEBUG - 2018-12-27 13:28:07 160950 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '17']
DEBUG - 2018-12-27 13:28:07 162296 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '17']
DEBUG - 2018-12-27 13:28:07 163779 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '16']
DEBUG - 2018-12-27 13:28:07 165138 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '16']
DEBUG - 2018-12-27 13:28:07 166601 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '15']
DEBUG - 2018-12-27 13:28:07 167956 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '15']
DEBUG - 2018-12-27 13:28:07 171546 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '13']
DEBUG - 2018-12-27 13:28:07 172924 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '13']
DEBUG - 2018-12-27 13:28:07 174391 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '12']
DEBUG - 2018-12-27 13:28:07 175735 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '12']
DEBUG - 2018-12-27 13:28:07 177217 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '11']
DEBUG - 2018-12-27 13:28:07 178596 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '11']
DEBUG - 2018-12-27 13:28:07 180053 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '10']
DEBUG - 2018-12-27 13:28:07 181380 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '10']
DEBUG - 2018-12-27 13:28:07 182841 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '9']
DEBUG - 2018-12-27 13:28:07 184178 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '9']
DEBUG - 2018-12-27 13:28:07 185718 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '8']
DEBUG - 2018-12-27 13:28:07 187072 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '8']
DEBUG - 2018-12-27 13:28:07 188535 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '6']
DEBUG - 2018-12-27 13:28:07 189852 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '6']
DEBUG - 2018-12-27 13:28:07 191312 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '5']
DEBUG - 2018-12-27 13:28:07 193264 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '5']
DEBUG - 2018-12-27 13:28:07 194689 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '4']
DEBUG - 2018-12-27 13:28:07 195950 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '4']
DEBUG - 2018-12-27 13:28:07 197304 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '3']
DEBUG - 2018-12-27 13:28:07 198571 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '3']
DEBUG - 2018-12-27 13:28:07 199979 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '1']
DEBUG - 2018-12-27 13:28:07 201491 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '1']
INFO - 2018-12-27 13:28:07 202569 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-27 13:28:07 225866 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-27 13:28:07 227576 --> Helper loaded: file_helper
DEBUG - 2018-12-27 13:28:07 227724 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
ERROR - 2018-12-27 13:28:07 229027 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 229160 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 229305 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 229897 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 230014 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 230149 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 230825 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 230937 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 231105 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 231870 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 231980 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 232112 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 232983 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 233098 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 233227 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 233962 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 234075 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 234205 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 234915 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 235023 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 235152 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 235852 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 235960 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 236088 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 236787 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 236893 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 237023 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 237705 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 237812 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 237950 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 238554 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 238667 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 238795 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 239620 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 239736 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 239881 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 240602 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 240715 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 240845 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 241624 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 241780 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 241914 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 242831 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 242940 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 243077 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 243799 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 243908 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 244040 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 244759 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 244870 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 245002 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 245718 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 245830 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 245959 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 246870 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 246987 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 247119 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 247824 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 247941 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 248080 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 248790 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 248908 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 249051 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 249797 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 249907 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 250037 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 250787 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 250904 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 251034 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 251754 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 251868 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 252002 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 252696 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 252810 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 252945 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 253753 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 253942 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 254137 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 255053 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 255171 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 255311 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 256017 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 256128 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 256263 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 256954 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 257064 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 257200 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 257893 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 258012 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 258141 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 258826 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 258934 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 259068 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 259752 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 259859 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 259993 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 260721 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 260833 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 260965 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 261655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 261761 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 261890 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 262576 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 262682 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 262804 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 263499 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 263606 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 263729 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 264564 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 264676 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 264802 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 265496 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 265609 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 265733 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 266411 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 266920 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 267049 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 267766 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 267874 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 268001 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 268695 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 268800 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 268925 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 269612 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 269718 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 269843 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 270529 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 270634 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 270765 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 271531 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 271644 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 271775 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 272469 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 272578 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 272707 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 273381 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 273513 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 273642 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 274315 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 274427 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 274571 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 275264 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 275367 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 275525 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 276411 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 276582 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 276770 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 277657 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 277823 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 277959 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 278677 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 278788 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 278914 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 279617 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 279725 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 279848 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 280551 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 280659 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 280783 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:07 281488 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:07 281595 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:07 281737 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 451617 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 451798 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 452008 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 452863 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 453025 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 453221 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 454078 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 454247 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 454457 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 455382 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 455560 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 455729 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 456614 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 456773 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 456960 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 457860 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 458017 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 458189 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 459072 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 459219 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 459391 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 460247 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 460401 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 460585 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 461410 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 461570 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 461740 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 462637 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 462831 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 463027 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 463869 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 464019 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 464202 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 465030 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 465183 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 465353 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 466201 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 466356 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 466542 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 467370 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 467559 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 467731 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 468584 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 468740 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 468914 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 469760 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 469926 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 470103 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 470952 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 471096 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 471257 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 472121 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 472265 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 472425 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 473242 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 473390 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 473593 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 474411 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 474612 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 474781 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 475652 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 475820 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 476006 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 476886 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 477060 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 477252 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 478100 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 478252 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 478421 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 479264 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 479423 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 479613 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 480427 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 480598 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 480773 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 481606 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 481761 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 481939 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 482810 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 482965 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 483133 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 483971 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 484127 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 484297 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 485142 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 485310 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 485492 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 486311 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 486479 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 486658 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 487523 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 487674 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 487858 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 488697 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 488847 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 489031 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 489882 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2018-12-27 13:28:09 490092 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 490927 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2018-12-27 13:28:09 491142 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 491966 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 492125 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 492291 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 493109 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 493267 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 493457 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 494309 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 494484 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 494683 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 495538 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 495685 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 495889 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 496736 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 496895 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 497071 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 497906 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 498071 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 498248 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 499083 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 499248 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 499470 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 500277 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 500444 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 500618 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 501439 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 501593 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 501761 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 502624 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 502768 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 502929 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 503783 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 503931 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 504112 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 504959 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 505111 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 505310 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 506198 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 506366 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 506592 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 507500 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 507654 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 507828 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 508697 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 508848 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 509021 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 509891 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 510037 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 510202 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 511058 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 511209 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 511374 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 512156 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 512307 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 512492 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 513254 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 513427 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 513608 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 514309 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 514477 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 514661 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 515357 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 515538 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 515717 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 516419 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 516609 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 516782 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 517497 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 517647 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 517818 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 518585 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 518737 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 518934 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 519670 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 519819 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 519984 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 520715 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 520891 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 521061 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 521775 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 521934 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 522133 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 522898 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 523046 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 523216 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 523935 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 524085 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 524249 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 525013 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 525163 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 525343 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 526084 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 526243 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 526417 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 527139 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 527307 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 527520 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 528237 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 528381 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 528575 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 529272 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 529443 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 529575 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 530205 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 530306 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 530426 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 531028 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 531131 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 531241 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 531837 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 531941 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 532052 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 532664 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 532768 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 532879 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 533482 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 533585 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 533696 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 534284 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 534400 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 534522 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 535105 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 535201 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 535316 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 535914 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 536012 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 536128 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 536720 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 536818 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 536936 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 537698 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 537822 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 538420 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 538557 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 538671 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 539263 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 539359 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 539483 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 540074 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 540169 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 540277 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 540879 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 540977 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 541086 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 541687 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 541796 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 541907 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 542543 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 542640 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 542751 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 543337 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 543448 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 543576 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 544164 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 544260 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 544368 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 544985 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 545083 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 545191 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 545799 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 545897 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 546013 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 546674 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 546772 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 546888 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 547533 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 547641 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 547750 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 548458 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 548567 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 548677 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 549309 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 549422 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 549554 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 550144 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 550240 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 550352 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 550971 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 551068 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 551179 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 551796 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 551894 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 552002 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 552653 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 552751 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 552859 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 553472 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 553571 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 553679 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 554269 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 554363 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 554488 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 555074 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 555170 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 555279 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 555881 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 555977 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 556091 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 556694 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 556797 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 556905 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 557502 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 557605 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 557714 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 558290 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 558398 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 558535 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 559112 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 559212 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 559323 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 559920 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 560020 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 560129 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 560719 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 560822 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 560930 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 561525 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 561623 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 561741 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 562325 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 562436 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 562558 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 563304 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 563461 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 563641 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 564450 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 564595 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 564766 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 565609 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 565756 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 565926 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 566596 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 566695 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 566807 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 567406 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 567519 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 567630 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 568217 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 568320 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 568445 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 569040 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 569135 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 569246 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 569850 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 569948 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 570056 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 570662 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 570760 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 570869 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 571475 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 571573 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 571691 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 572276 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 572371 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 572494 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 573126 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 573271 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 573441 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 574039 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 574134 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 574243 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 574933 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 575028 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 575138 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 575735 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 575830 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 575939 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 576545 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 576642 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 576750 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 577332 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2018-12-27 13:28:09 577444 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2018-12-27 13:28:09 577555 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-27 13:28:09 578310 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
ERROR - 2018-12-27 13:28:09 578632 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
ERROR - 2018-12-27 13:28:09 578737 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
INFO - 2018-12-27 13:28:09 578831 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php
DEBUG - 2018-12-27 13:28:09 583400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:09 586345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:09 587594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 13:28:09 594444 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 13:28:09 596086 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-27 13:28:09 622026 --> Final output sent to browser
DEBUG - 2018-12-27 13:28:09 622153 --> Total execution time: 3.5894
INFO - 2018-12-27 07:58:13 757198 --> Config Class Initialized
INFO - 2018-12-27 07:58:13 757563 --> Hooks Class Initialized
DEBUG - 2018-12-27 07:58:13 760015 --> UTF-8 Support Enabled
INFO - 2018-12-27 07:58:13 760144 --> Utf8 Class Initialized
INFO - 2018-12-27 07:58:13 761775 --> URI Class Initialized
INFO - 2018-12-27 07:58:13 764678 --> Router Class Initialized
INFO - 2018-12-27 07:58:13 768132 --> Output Class Initialized
INFO - 2018-12-27 07:58:13 770570 --> Security Class Initialized
DEBUG - 2018-12-27 07:58:13 772597 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 07:58:13 772728 --> Input Class Initialized
INFO - 2018-12-27 07:58:13 773338 --> Language Class Initialized
INFO - 2018-12-27 07:58:13 788610 --> Loader Class Initialized
INFO - 2018-12-27 07:58:13 790333 --> Helper loaded: url_helper
INFO - 2018-12-27 07:58:13 791203 --> Helper loaded: utility_helper
INFO - 2018-12-27 13:28:13 802670 --> Database Driver Class Initialized
INFO - 2018-12-27 13:28:13 812165 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 13:28:13 813760 --> Controller Class Initialized
INFO - 2018-12-27 13:28:13 814827 --> Final output sent to browser
DEBUG - 2018-12-27 13:28:13 814953 --> Total execution time: 0.0598
INFO - 2018-12-27 08:59:58 219691 --> Config Class Initialized
INFO - 2018-12-27 08:59:58 226974 --> Hooks Class Initialized
DEBUG - 2018-12-27 08:59:58 242062 --> UTF-8 Support Enabled
INFO - 2018-12-27 08:59:58 242211 --> Utf8 Class Initialized
INFO - 2018-12-27 08:59:58 244314 --> URI Class Initialized
DEBUG - 2018-12-27 08:59:58 251501 --> No URI present. Default controller set.
INFO - 2018-12-27 08:59:58 251630 --> Router Class Initialized
INFO - 2018-12-27 08:59:58 258160 --> Output Class Initialized
INFO - 2018-12-27 08:59:58 264266 --> Security Class Initialized
DEBUG - 2018-12-27 08:59:58 273138 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 08:59:58 273267 --> Input Class Initialized
INFO - 2018-12-27 08:59:58 274348 --> Language Class Initialized
INFO - 2018-12-27 08:59:58 290154 --> Loader Class Initialized
INFO - 2018-12-27 08:59:58 298990 --> Helper loaded: url_helper
INFO - 2018-12-27 08:59:58 305315 --> Helper loaded: utility_helper
INFO - 2018-12-27 14:29:58 330730 --> Database Driver Class Initialized
INFO - 2018-12-27 14:29:58 440957 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 14:29:58 447731 --> Controller Class Initialized
INFO - 2018-12-27 14:29:58 455890 --> Parser Class Initialized
INFO - 2018-12-27 14:29:58 457304 --> Helper loaded: html_helper
INFO - 2018-12-27 14:29:58 468847 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-27 14:29:58 474932 --> Model Class Initialized
DEBUG - 2018-12-27 14:29:58 494472 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-27 14:29:58 499865 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-27 14:29:58 511729 --> Model Class Initialized
DEBUG - 2018-12-27 14:29:58 515371 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-27 14:29:58 541349 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-27 14:29:58 554037 --> Helper loaded: file_helper
DEBUG - 2018-12-27 14:29:58 554249 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-27 14:29:58 567694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 575203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 591739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 598153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 601329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 601800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 602574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 603748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 606718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 607142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 607876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 608719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 611659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 612071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 612863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 613668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 616628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 617046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 617822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 618922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 621961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 622404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 623156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 624270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 627443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 627912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 628695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 629735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 632827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 633268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 634052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 635101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 638230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 638696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 639480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 640578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 643791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 644241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 645356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 646589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 648005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 649568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 650933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 652137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 653040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 653954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 654903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 655821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 656754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 657699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 658611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 659544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 660450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 661370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 662524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 663310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 664104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 664916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 665749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 666929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 677328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 678261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 680071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 681711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 689891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 690771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 691941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 693022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 695441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 695760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 696384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 697402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 699856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 700171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 700794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 701878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 704114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 704431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 705053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 705955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 708148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 708481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 709098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 711282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 712204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 714442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 715676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 717912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 718710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 720954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 721750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 723963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 724749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 726957 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 14:29:58 727691 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-27 14:29:58 739808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 743799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 744571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 14:29:58 750334 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 14:29:58 751894 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-27 14:29:58 764539 --> Final output sent to browser
DEBUG - 2018-12-27 14:29:58 764678 --> Total execution time: 0.5593
INFO - 2018-12-27 09:00:00 414500 --> Config Class Initialized
INFO - 2018-12-27 09:00:00 414659 --> Hooks Class Initialized
DEBUG - 2018-12-27 09:00:00 416896 --> UTF-8 Support Enabled
INFO - 2018-12-27 09:00:00 417027 --> Utf8 Class Initialized
INFO - 2018-12-27 09:00:00 418348 --> URI Class Initialized
INFO - 2018-12-27 09:00:00 420907 --> Router Class Initialized
INFO - 2018-12-27 09:00:00 423309 --> Output Class Initialized
INFO - 2018-12-27 09:00:00 425750 --> Security Class Initialized
DEBUG - 2018-12-27 09:00:00 427509 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 09:00:00 427642 --> Input Class Initialized
INFO - 2018-12-27 09:00:00 428211 --> Language Class Initialized
INFO - 2018-12-27 09:00:00 478146 --> Loader Class Initialized
INFO - 2018-12-27 09:00:00 479963 --> Helper loaded: url_helper
INFO - 2018-12-27 09:00:00 480767 --> Helper loaded: utility_helper
INFO - 2018-12-27 14:30:00 490555 --> Database Driver Class Initialized
INFO - 2018-12-27 14:30:00 496164 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 14:30:00 497586 --> Controller Class Initialized
INFO - 2018-12-27 14:30:00 498601 --> Final output sent to browser
DEBUG - 2018-12-27 14:30:00 498749 --> Total execution time: 0.0861
INFO - 2018-12-27 09:00:00 983728 --> Config Class Initialized
INFO - 2018-12-27 09:00:00 983922 --> Hooks Class Initialized
DEBUG - 2018-12-27 09:00:00 985548 --> UTF-8 Support Enabled
INFO - 2018-12-27 09:00:00 985622 --> Utf8 Class Initialized
INFO - 2018-12-27 09:00:00 986655 --> URI Class Initialized
INFO - 2018-12-27 09:00:00 989573 --> Router Class Initialized
INFO - 2018-12-27 09:00:00 991854 --> Output Class Initialized
INFO - 2018-12-27 09:00:00 993232 --> Security Class Initialized
DEBUG - 2018-12-27 09:00:00 994647 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 09:00:00 994765 --> Input Class Initialized
INFO - 2018-12-27 09:00:00 995207 --> Language Class Initialized
ERROR - 2018-12-27 09:00:01 002115 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-27 09:00:01 158288 --> Config Class Initialized
INFO - 2018-12-27 09:00:01 158567 --> Hooks Class Initialized
DEBUG - 2018-12-27 09:00:01 160849 --> UTF-8 Support Enabled
INFO - 2018-12-27 09:00:01 160933 --> Utf8 Class Initialized
INFO - 2018-12-27 09:00:01 162607 --> URI Class Initialized
INFO - 2018-12-27 09:00:01 167026 --> Router Class Initialized
INFO - 2018-12-27 09:00:01 169676 --> Output Class Initialized
INFO - 2018-12-27 09:00:01 171066 --> Security Class Initialized
DEBUG - 2018-12-27 09:00:01 172241 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 09:00:01 172314 --> Input Class Initialized
INFO - 2018-12-27 09:00:01 172796 --> Language Class Initialized
ERROR - 2018-12-27 09:00:01 173489 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-27 09:00:03 480072 --> Config Class Initialized
INFO - 2018-12-27 09:00:03 480323 --> Hooks Class Initialized
DEBUG - 2018-12-27 09:00:03 491144 --> UTF-8 Support Enabled
INFO - 2018-12-27 09:00:03 491264 --> Utf8 Class Initialized
INFO - 2018-12-27 09:00:03 492892 --> URI Class Initialized
INFO - 2018-12-27 09:00:03 511929 --> Router Class Initialized
INFO - 2018-12-27 09:00:03 513710 --> Output Class Initialized
INFO - 2018-12-27 09:00:03 515693 --> Security Class Initialized
DEBUG - 2018-12-27 09:00:03 516995 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 09:00:03 517065 --> Input Class Initialized
INFO - 2018-12-27 09:00:03 517379 --> Language Class Initialized
ERROR - 2018-12-27 09:00:03 527822 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-27 12:17:37 664145 --> Config Class Initialized
INFO - 2018-12-27 12:17:37 670666 --> Hooks Class Initialized
DEBUG - 2018-12-27 12:17:37 704901 --> UTF-8 Support Enabled
INFO - 2018-12-27 12:17:37 708599 --> Utf8 Class Initialized
INFO - 2018-12-27 12:17:37 711621 --> URI Class Initialized
DEBUG - 2018-12-27 12:17:37 748086 --> No URI present. Default controller set.
INFO - 2018-12-27 12:17:37 759563 --> Router Class Initialized
INFO - 2018-12-27 12:17:37 787894 --> Output Class Initialized
INFO - 2018-12-27 12:17:37 796428 --> Security Class Initialized
DEBUG - 2018-12-27 12:17:37 829246 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-27 12:17:37 845587 --> Input Class Initialized
INFO - 2018-12-27 12:17:37 846359 --> Language Class Initialized
INFO - 2018-12-27 12:17:37 905941 --> Loader Class Initialized
INFO - 2018-12-27 12:17:37 915595 --> Helper loaded: url_helper
INFO - 2018-12-27 12:17:37 937247 --> Helper loaded: utility_helper
INFO - 2018-12-27 17:47:38 066961 --> Database Driver Class Initialized
INFO - 2018-12-27 17:47:38 141766 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-27 17:47:38 149908 --> Controller Class Initialized
INFO - 2018-12-27 17:47:38 150784 --> Parser Class Initialized
INFO - 2018-12-27 17:47:38 158472 --> Helper loaded: html_helper
INFO - 2018-12-27 17:47:38 175774 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-27 17:47:38 243278 --> Model Class Initialized
DEBUG - 2018-12-27 17:47:38 269707 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-27 17:47:38 274719 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-27 17:47:38 280987 --> Model Class Initialized
DEBUG - 2018-12-27 17:47:38 285098 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-27 17:47:38 327394 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-27 17:47:38 350684 --> Helper loaded: file_helper
DEBUG - 2018-12-27 17:47:38 353729 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-27 17:47:38 374324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 309746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 323788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 327253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 329968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 330322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 332797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 333619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 336114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 336446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 337069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 337843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 340305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 340626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 341228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 341995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 343746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 343976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 344376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 345031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 346591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 346829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 347229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 347743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 349342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 349587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 349996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 350486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 352077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 352313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 352739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 353229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 354878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 355113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 355545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 356036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 357671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 357902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 358319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 358895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 359399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 359899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 360399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 360897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 361367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 361848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 362318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 362799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 363267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 363763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 364233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 364708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 365180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 365673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 366311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 366755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 367181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 367618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 368058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 368565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 370533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 370767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 371231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 371747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 373435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 373681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 374154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 374654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 376300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 376545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 377012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 377609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 385550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 386307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 388082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 388967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 390649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 390886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 391360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 391880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 393546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 393784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 394258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 395908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 396434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 398113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 398637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 400268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 400788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 402585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 403301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 404967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 405493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 407131 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 17:47:40 407645 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-27 17:47:40 416584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 417814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 418057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-27 17:47:40 419938 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-27 17:47:40 420337 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-27 17:47:40 426600 --> Final output sent to browser
DEBUG - 2018-12-27 17:47:40 426675 --> Total execution time: 2.7869
