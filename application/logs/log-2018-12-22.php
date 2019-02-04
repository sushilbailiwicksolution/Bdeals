<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-22 05:32:40 085782 --> Config Class Initialized
INFO - 2018-12-22 05:32:40 086278 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:32:40 120171 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:32:40 123590 --> Utf8 Class Initialized
INFO - 2018-12-22 05:32:40 126233 --> URI Class Initialized
DEBUG - 2018-12-22 05:32:40 177895 --> No URI present. Default controller set.
INFO - 2018-12-22 05:32:40 178123 --> Router Class Initialized
INFO - 2018-12-22 05:32:40 208600 --> Output Class Initialized
INFO - 2018-12-22 05:32:40 214354 --> Security Class Initialized
DEBUG - 2018-12-22 05:32:40 256251 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:32:40 261508 --> Input Class Initialized
INFO - 2018-12-22 05:32:40 262428 --> Language Class Initialized
INFO - 2018-12-22 05:32:40 323487 --> Loader Class Initialized
INFO - 2018-12-22 05:32:40 351691 --> Helper loaded: url_helper
INFO - 2018-12-22 05:32:40 359339 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:02:40 496965 --> Database Driver Class Initialized
INFO - 2018-12-22 11:02:40 548998 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:02:40 562916 --> Controller Class Initialized
INFO - 2018-12-22 11:02:40 567420 --> Parser Class Initialized
INFO - 2018-12-22 11:02:40 575679 --> Helper loaded: html_helper
INFO - 2018-12-22 11:02:40 593105 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 11:02:40 631057 --> Model Class Initialized
DEBUG - 2018-12-22 11:02:41 131668 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 11:02:41 138703 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 11:02:41 240326 --> Model Class Initialized
DEBUG - 2018-12-22 11:02:41 243537 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 11:02:41 549922 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:02:41 565124 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:02:41 568646 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:02:41 589823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 593868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 661252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 664741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 667711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 668150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 668914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 669814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 672714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 673130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 673851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 674669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 677500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 677900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 678616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 679399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 682272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 682709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 683446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 684245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 687191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 687648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 688384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 689198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 692267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 692739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 693501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 694288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 697395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 697856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 698630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 699420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 702570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 703003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 703783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 704720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 707891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 708329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 709116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 709985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 710731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 711610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 712410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 713140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 713843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 714538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 715215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 715872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 716546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 717192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 717814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 718450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 719080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 719718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 720679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 721468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 722240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 723088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 723923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 724638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 728215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 728687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 729568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 730262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 733448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 733896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 734776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 735491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 738630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 739053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 739933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 740664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 744045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 744502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 745367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 746078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 749298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 749803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 750706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 751399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 754585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 755023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 755918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 759047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 759807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 763046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 763818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 766980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 767734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 770962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 771708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 774836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 775573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 778717 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:02:41 779409 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 11:02:41 807730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 811563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 812311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:41 817528 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:02:41 818320 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:02:41 827584 --> Final output sent to browser
DEBUG - 2018-12-22 11:02:41 827737 --> Total execution time: 1.7683
INFO - 2018-12-22 05:32:43 122076 --> Config Class Initialized
INFO - 2018-12-22 05:32:43 122163 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:32:43 123337 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:32:43 123478 --> Utf8 Class Initialized
INFO - 2018-12-22 05:32:43 124147 --> URI Class Initialized
DEBUG - 2018-12-22 05:32:43 125312 --> No URI present. Default controller set.
INFO - 2018-12-22 05:32:43 125380 --> Router Class Initialized
INFO - 2018-12-22 05:32:43 126633 --> Output Class Initialized
INFO - 2018-12-22 05:32:43 127613 --> Security Class Initialized
DEBUG - 2018-12-22 05:32:43 128621 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:32:43 128690 --> Input Class Initialized
INFO - 2018-12-22 05:32:43 129004 --> Language Class Initialized
INFO - 2018-12-22 05:32:43 130871 --> Loader Class Initialized
INFO - 2018-12-22 05:32:43 131653 --> Helper loaded: url_helper
INFO - 2018-12-22 05:32:43 132081 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:02:43 136900 --> Database Driver Class Initialized
INFO - 2018-12-22 11:02:43 140229 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:02:43 140964 --> Controller Class Initialized
INFO - 2018-12-22 11:02:43 141329 --> Parser Class Initialized
INFO - 2018-12-22 11:02:43 141874 --> Helper loaded: html_helper
INFO - 2018-12-22 11:02:43 142446 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 11:02:43 143738 --> Model Class Initialized
DEBUG - 2018-12-22 11:02:43 151787 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 11:02:43 155524 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 11:02:43 155932 --> Model Class Initialized
DEBUG - 2018-12-22 11:02:43 156539 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 11:02:43 158210 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:02:43 159538 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:02:43 159635 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:02:43 162086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 163232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 170324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 171729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 173374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 173619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 174001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 174735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 176371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 176608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 176978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 177635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 179460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 179680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 180128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 180790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 182600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 182826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 183212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 183861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 185362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 185596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 185983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 186717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 188277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 188532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 188925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 189743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 191380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 191622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 192048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 192711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 194286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 194529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 194931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 195604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 197194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 197427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 197858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 198558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 199248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 199862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 200805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 201405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 202156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 202815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 203917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 204704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 206619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 207463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 208163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 208908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 209860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 210594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 211317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 211783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 212229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 212682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 213140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 213690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 215732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 215975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 216475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 217019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 218785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 219031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 219527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 220077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 221801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 222042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 222549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 223031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 224905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 225152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 225653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 226125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 227869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 228112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 228621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 229171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 230906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 231152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 231661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 233396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 233937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 235698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 236202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 237924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 238426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 240175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 332523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 334573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 335179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 336919 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:02:43 337446 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 11:02:43 338989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 340086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 340336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:02:43 342152 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:02:43 342585 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:02:43 350253 --> Final output sent to browser
DEBUG - 2018-12-22 11:02:43 350328 --> Total execution time: 0.2222
INFO - 2018-12-22 05:32:53 013010 --> Config Class Initialized
INFO - 2018-12-22 05:32:53 013462 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:32:53 017241 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:32:53 017436 --> Utf8 Class Initialized
INFO - 2018-12-22 05:32:53 019992 --> URI Class Initialized
INFO - 2018-12-22 05:32:53 025355 --> Router Class Initialized
INFO - 2018-12-22 05:32:53 028048 --> Output Class Initialized
INFO - 2018-12-22 05:32:53 030067 --> Security Class Initialized
DEBUG - 2018-12-22 05:32:53 032083 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:32:53 032212 --> Input Class Initialized
INFO - 2018-12-22 05:32:53 032850 --> Language Class Initialized
ERROR - 2018-12-22 05:32:53 039860 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 05:32:53 222318 --> Config Class Initialized
INFO - 2018-12-22 05:32:53 222585 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:32:53 224697 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:32:53 224802 --> Utf8 Class Initialized
INFO - 2018-12-22 05:32:53 226366 --> URI Class Initialized
INFO - 2018-12-22 05:32:53 230890 --> Router Class Initialized
INFO - 2018-12-22 05:32:53 233419 --> Output Class Initialized
INFO - 2018-12-22 05:32:53 235186 --> Security Class Initialized
DEBUG - 2018-12-22 05:32:53 237034 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:32:53 237137 --> Input Class Initialized
INFO - 2018-12-22 05:32:53 237710 --> Language Class Initialized
ERROR - 2018-12-22 05:32:53 238547 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 05:32:53 639389 --> Config Class Initialized
INFO - 2018-12-22 05:32:53 639704 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:32:53 641597 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:32:53 641696 --> Utf8 Class Initialized
INFO - 2018-12-22 05:32:53 642950 --> URI Class Initialized
INFO - 2018-12-22 05:32:53 645104 --> Router Class Initialized
INFO - 2018-12-22 05:32:53 647109 --> Output Class Initialized
INFO - 2018-12-22 05:32:53 648632 --> Security Class Initialized
DEBUG - 2018-12-22 05:32:53 650127 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:32:53 650228 --> Input Class Initialized
INFO - 2018-12-22 05:32:53 650715 --> Language Class Initialized
INFO - 2018-12-22 05:32:53 687565 --> Loader Class Initialized
INFO - 2018-12-22 05:32:53 688519 --> Helper loaded: url_helper
INFO - 2018-12-22 05:32:53 689013 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:02:53 694948 --> Database Driver Class Initialized
INFO - 2018-12-22 11:02:53 702986 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:02:53 704607 --> Controller Class Initialized
INFO - 2018-12-22 11:02:53 713016 --> Final output sent to browser
DEBUG - 2018-12-22 11:02:53 861598 --> Total execution time: 0.0761
INFO - 2018-12-22 05:33:07 492842 --> Config Class Initialized
INFO - 2018-12-22 05:33:07 493033 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:07 494353 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:07 494429 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:07 495217 --> URI Class Initialized
DEBUG - 2018-12-22 05:33:07 496468 --> No URI present. Default controller set.
INFO - 2018-12-22 05:33:07 496541 --> Router Class Initialized
INFO - 2018-12-22 05:33:07 497886 --> Output Class Initialized
INFO - 2018-12-22 05:33:07 498897 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:07 499953 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:07 500022 --> Input Class Initialized
INFO - 2018-12-22 05:33:07 500344 --> Language Class Initialized
INFO - 2018-12-22 05:33:07 502376 --> Loader Class Initialized
INFO - 2018-12-22 05:33:07 503257 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:07 503771 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:07 509152 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:07 514987 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:07 515786 --> Controller Class Initialized
INFO - 2018-12-22 11:03:07 516201 --> Parser Class Initialized
INFO - 2018-12-22 11:03:07 516822 --> Helper loaded: html_helper
INFO - 2018-12-22 11:03:07 517421 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 11:03:07 519047 --> Model Class Initialized
DEBUG - 2018-12-22 11:03:07 528143 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 11:03:07 531409 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 11:03:07 531810 --> Model Class Initialized
DEBUG - 2018-12-22 11:03:07 532259 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 11:03:07 534007 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:03:07 535074 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:03:07 535196 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:03:07 537575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 538527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 544419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 545826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 547399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 547688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 548585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 549891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 552889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 553304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 554028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 554968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 557826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 558223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 558947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 559756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 562668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 563091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 563847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 564764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 568017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 568480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 569231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 570204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 573436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 573892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 574734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 575736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 579401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 579965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 580823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 581710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 584903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 585334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 586276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 587188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 590435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 590884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 591684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 592504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 593147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 593816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 594444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 596323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 597028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 597770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 598437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 599091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 599739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 600374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 601042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 601680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 602322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 603682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 604783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 605601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 606374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 607170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 607992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 609563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 613014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 613450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 614331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 615304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 618590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 619035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 619923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 620938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 624092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 624536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 625473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 626461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 631198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 631695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 632603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 633395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 636564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 637000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 637903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 638880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 642050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 642513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 643398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 646584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 647500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 650872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 651750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 655359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 656224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 659437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 660288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 663460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 664222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 667359 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:03:07 668212 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 11:03:07 671138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 673140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 673613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:07 676924 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:03:07 677710 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:03:07 686378 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:07 686533 --> Total execution time: 0.1870
INFO - 2018-12-22 05:33:08 984761 --> Config Class Initialized
INFO - 2018-12-22 05:33:08 985069 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:08 986771 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:08 986856 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:08 987912 --> URI Class Initialized
INFO - 2018-12-22 05:33:08 989690 --> Router Class Initialized
INFO - 2018-12-22 05:33:08 991357 --> Output Class Initialized
INFO - 2018-12-22 05:33:08 992604 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:08 993906 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:08 994054 --> Input Class Initialized
INFO - 2018-12-22 05:33:08 994458 --> Language Class Initialized
INFO - 2018-12-22 05:33:08 999422 --> Loader Class Initialized
INFO - 2018-12-22 05:33:09 000479 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:09 001028 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:09 007502 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:09 015362 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:09 016808 --> Controller Class Initialized
INFO - 2018-12-22 11:03:09 017739 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:09 017853 --> Total execution time: 0.0352
INFO - 2018-12-22 05:33:11 872988 --> Config Class Initialized
INFO - 2018-12-22 05:33:11 873336 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:11 875818 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:11 875947 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:11 877609 --> URI Class Initialized
INFO - 2018-12-22 05:33:11 882133 --> Router Class Initialized
INFO - 2018-12-22 05:33:11 884823 --> Output Class Initialized
INFO - 2018-12-22 05:33:11 886845 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:11 888869 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:11 888998 --> Input Class Initialized
INFO - 2018-12-22 05:33:11 889630 --> Language Class Initialized
ERROR - 2018-12-22 05:33:11 890662 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 05:33:11 948216 --> Config Class Initialized
INFO - 2018-12-22 05:33:11 948441 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:11 950170 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:11 950279 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:11 951272 --> URI Class Initialized
INFO - 2018-12-22 05:33:11 954061 --> Router Class Initialized
INFO - 2018-12-22 05:33:11 955703 --> Output Class Initialized
INFO - 2018-12-22 05:33:11 956859 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:11 958035 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:11 958115 --> Input Class Initialized
INFO - 2018-12-22 05:33:11 958498 --> Language Class Initialized
ERROR - 2018-12-22 05:33:11 959089 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 05:33:15 426495 --> Config Class Initialized
INFO - 2018-12-22 05:33:15 426698 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:15 428090 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:15 428165 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:15 429095 --> URI Class Initialized
INFO - 2018-12-22 05:33:15 431736 --> Router Class Initialized
INFO - 2018-12-22 05:33:15 433234 --> Output Class Initialized
INFO - 2018-12-22 05:33:15 434403 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:15 436829 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:15 436974 --> Input Class Initialized
INFO - 2018-12-22 05:33:15 437668 --> Language Class Initialized
ERROR - 2018-12-22 05:33:15 438770 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-22 05:33:18 780263 --> Config Class Initialized
INFO - 2018-12-22 05:33:18 780356 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:18 781465 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:18 781538 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:18 782193 --> URI Class Initialized
INFO - 2018-12-22 05:33:18 783724 --> Router Class Initialized
INFO - 2018-12-22 05:33:18 784943 --> Output Class Initialized
INFO - 2018-12-22 05:33:18 785908 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:18 786910 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:18 786982 --> Input Class Initialized
INFO - 2018-12-22 05:33:18 787297 --> Language Class Initialized
INFO - 2018-12-22 05:33:18 789295 --> Loader Class Initialized
INFO - 2018-12-22 05:33:18 790159 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:18 790627 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:18 795892 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:18 800614 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:18 801378 --> Controller Class Initialized
INFO - 2018-12-22 11:03:18 801776 --> Parser Class Initialized
INFO - 2018-12-22 11:03:18 802345 --> Helper loaded: html_helper
INFO - 2018-12-22 11:03:18 803740 --> Model Class Initialized
INFO - 2018-12-22 11:03:18 965887 --> Model Class Initialized
DEBUG - 2018-12-22 11:03:18 968682 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 11:03:18 969410 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 11:03:18 979537 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-22 11:03:18 979644 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-22 11:03:18 980628 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:03:18 981730 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:03:18 981833 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:03:18 982610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 983133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 983695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 984127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 984559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 984978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 985389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 985869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 986396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 986888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 987505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 988091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 988706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 989140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 989571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 990104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 990622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 991266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 991899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 992502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 993115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 993748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 994349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 995053 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-22 11:03:18 995814 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-22 11:03:18 995903 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-22 11:03:18 995970 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-22 11:03:18 997414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:18 999799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:19 000781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:19 006424 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:03:19 007559 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:03:19 012933 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:19 013005 --> Total execution time: 0.2287
INFO - 2018-12-22 05:33:19 673352 --> Config Class Initialized
INFO - 2018-12-22 05:33:19 673697 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:19 676803 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:19 676906 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:19 678173 --> URI Class Initialized
INFO - 2018-12-22 05:33:19 680330 --> Router Class Initialized
INFO - 2018-12-22 05:33:19 682533 --> Output Class Initialized
INFO - 2018-12-22 05:33:19 685574 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:19 688209 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:19 688313 --> Input Class Initialized
INFO - 2018-12-22 05:33:19 688813 --> Language Class Initialized
INFO - 2018-12-22 05:33:19 698014 --> Loader Class Initialized
INFO - 2018-12-22 05:33:19 699342 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:19 700083 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:19 714761 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:19 724503 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:19 726037 --> Controller Class Initialized
INFO - 2018-12-22 11:03:19 727097 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:19 727220 --> Total execution time: 0.0566
INFO - 2018-12-22 05:33:23 101346 --> Config Class Initialized
INFO - 2018-12-22 05:33:23 101473 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:23 102972 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:23 103064 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:23 103974 --> URI Class Initialized
INFO - 2018-12-22 05:33:23 106592 --> Router Class Initialized
INFO - 2018-12-22 05:33:23 108323 --> Output Class Initialized
INFO - 2018-12-22 05:33:23 109716 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:23 111000 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:23 111089 --> Input Class Initialized
INFO - 2018-12-22 05:33:23 111498 --> Language Class Initialized
INFO - 2018-12-22 05:33:23 115329 --> Loader Class Initialized
INFO - 2018-12-22 05:33:23 118444 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:23 120001 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:23 129832 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:23 134058 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:23 134996 --> Controller Class Initialized
INFO - 2018-12-22 11:03:23 135524 --> Parser Class Initialized
INFO - 2018-12-22 11:03:23 136241 --> Helper loaded: html_helper
INFO - 2018-12-22 11:03:23 137960 --> Model Class Initialized
DEBUG - 2018-12-22 11:03:23 916376 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-22 11:03:23 917001 --> Model Class Initialized
DEBUG - 2018-12-22 11:03:23 917684 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 11:03:23 918679 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 11:03:23 934912 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:03:23 936230 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:03:23 936327 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:03:23 938522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 940011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 947326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 948014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 949100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 949525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 949755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 951199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 951874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 952455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 952824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 953022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 954505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 955029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 955638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 956101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 956305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 957834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 958384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 958940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 959314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 959542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 961136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 961704 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:03:23 962264 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-22 11:03:23 964684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 965709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 965918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:03:23 968420 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:03:23 969669 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:03:23 977443 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:23 977531 --> Total execution time: 0.8703
INFO - 2018-12-22 05:33:24 199095 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 199182 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 200326 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 200395 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 201067 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 202820 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 204045 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 204999 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 205935 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 206001 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 206298 --> Language Class Initialized
ERROR - 2018-12-22 05:33:24 206790 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:33:24 258927 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 259170 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 261331 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 261431 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 275157 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 284132 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 285289 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 285602 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 287893 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 288005 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 289412 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 293400 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 296463 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 298311 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 300066 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 300194 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 300765 --> Language Class Initialized
ERROR - 2018-12-22 05:33:24 301636 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:33:24 304945 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 306766 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 308639 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 308779 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 309333 --> Language Class Initialized
ERROR - 2018-12-22 05:33:24 310225 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:33:24 507637 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 507884 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 513401 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 513631 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 516046 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 518702 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 520724 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 522284 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 524008 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 524121 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 524646 --> Language Class Initialized
ERROR - 2018-12-22 05:33:24 525449 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:33:24 626171 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 626321 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 628173 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 628285 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 629395 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 632081 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 634043 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 635593 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 637140 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 637265 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 637773 --> Language Class Initialized
ERROR - 2018-12-22 05:33:24 638571 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:33:24 695636 --> Config Class Initialized
INFO - 2018-12-22 05:33:24 695724 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:24 696804 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:24 696871 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:24 697521 --> URI Class Initialized
INFO - 2018-12-22 05:33:24 698723 --> Router Class Initialized
INFO - 2018-12-22 05:33:24 699917 --> Output Class Initialized
INFO - 2018-12-22 05:33:24 700851 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:24 701831 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:24 701900 --> Input Class Initialized
INFO - 2018-12-22 05:33:24 702202 --> Language Class Initialized
INFO - 2018-12-22 05:33:24 707484 --> Loader Class Initialized
INFO - 2018-12-22 05:33:24 708774 --> Helper loaded: url_helper
INFO - 2018-12-22 05:33:24 709476 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:03:24 718175 --> Database Driver Class Initialized
INFO - 2018-12-22 11:03:24 724525 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:03:24 725301 --> Controller Class Initialized
INFO - 2018-12-22 11:03:24 725862 --> Final output sent to browser
DEBUG - 2018-12-22 11:03:24 725927 --> Total execution time: 0.0312
INFO - 2018-12-22 05:33:25 708276 --> Config Class Initialized
INFO - 2018-12-22 05:33:25 708436 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:33:25 710866 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:33:25 710988 --> Utf8 Class Initialized
INFO - 2018-12-22 05:33:25 712516 --> URI Class Initialized
INFO - 2018-12-22 05:33:25 715023 --> Router Class Initialized
INFO - 2018-12-22 05:33:25 716792 --> Output Class Initialized
INFO - 2018-12-22 05:33:25 718163 --> Security Class Initialized
DEBUG - 2018-12-22 05:33:25 719533 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:33:25 719635 --> Input Class Initialized
INFO - 2018-12-22 05:33:25 720067 --> Language Class Initialized
ERROR - 2018-12-22 05:33:25 720750 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 05:34:54 758486 --> Config Class Initialized
INFO - 2018-12-22 05:34:54 758795 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:54 760977 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:54 761094 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:54 762557 --> URI Class Initialized
INFO - 2018-12-22 05:34:54 765480 --> Router Class Initialized
INFO - 2018-12-22 05:34:54 767777 --> Output Class Initialized
INFO - 2018-12-22 05:34:54 769514 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:54 771245 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:54 771359 --> Input Class Initialized
INFO - 2018-12-22 05:34:54 771918 --> Language Class Initialized
INFO - 2018-12-22 05:34:54 802326 --> Loader Class Initialized
INFO - 2018-12-22 05:34:54 803864 --> Helper loaded: url_helper
INFO - 2018-12-22 05:34:54 804652 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:04:54 813770 --> Database Driver Class Initialized
INFO - 2018-12-22 11:04:54 886003 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:04:54 887310 --> Controller Class Initialized
INFO - 2018-12-22 11:04:54 887972 --> Parser Class Initialized
INFO - 2018-12-22 11:04:54 888991 --> Helper loaded: html_helper
DEBUG - 2018-12-22 11:04:54 889122 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-22 11:04:54 891392 --> Model Class Initialized
INFO - 2018-12-22 11:04:54 903460 --> Helper loaded: cookie_helper
DEBUG - 2018-12-22 11:04:54 905230 --> updatecount for view business88888888 [UPDATE `bd_business_details` SET `num_business_viewed` = 2
WHERE `form_id` = '305']
INFO - 2018-12-22 11:04:54 905857 --> Model Class Initialized
DEBUG - 2018-12-22 11:04:54 906692 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 11:04:54 907710 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 11:04:54 918863 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:04:54 923775 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:04:54 923898 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:04:56 835697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 837162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 839047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 839703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 840246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 840851 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:04:56 841517 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-22 11:04:56 843053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 844130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 844377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:04:56 850670 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:04:56 852036 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:04:56 859047 --> Final output sent to browser
DEBUG - 2018-12-22 11:04:56 859129 --> Total execution time: 2.0959
INFO - 2018-12-22 05:34:57 002769 --> Config Class Initialized
INFO - 2018-12-22 05:34:57 003052 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:57 004869 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:57 005007 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:57 005981 --> URI Class Initialized
INFO - 2018-12-22 05:34:57 008548 --> Router Class Initialized
INFO - 2018-12-22 05:34:57 010052 --> Output Class Initialized
INFO - 2018-12-22 05:34:57 011229 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:57 012368 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:57 012460 --> Input Class Initialized
INFO - 2018-12-22 05:34:57 012821 --> Language Class Initialized
ERROR - 2018-12-22 05:34:57 013412 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 05:34:57 103843 --> Config Class Initialized
INFO - 2018-12-22 05:34:57 104042 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:57 105386 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:57 105473 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:57 106370 --> URI Class Initialized
INFO - 2018-12-22 05:34:57 115358 --> Config Class Initialized
INFO - 2018-12-22 05:34:57 115545 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:57 117274 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:57 117377 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:57 119149 --> URI Class Initialized
INFO - 2018-12-22 05:34:57 123920 --> Router Class Initialized
INFO - 2018-12-22 05:34:57 126693 --> Output Class Initialized
INFO - 2018-12-22 05:34:57 130099 --> Router Class Initialized
INFO - 2018-12-22 05:34:57 133987 --> Output Class Initialized
INFO - 2018-12-22 05:34:57 136034 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:57 138077 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:57 138210 --> Input Class Initialized
INFO - 2018-12-22 05:34:57 138859 --> Language Class Initialized
ERROR - 2018-12-22 05:34:57 139897 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 05:34:57 148871 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:57 150924 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:57 151057 --> Input Class Initialized
INFO - 2018-12-22 05:34:57 151709 --> Language Class Initialized
ERROR - 2018-12-22 05:34:57 152739 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 05:34:57 157166 --> Config Class Initialized
INFO - 2018-12-22 05:34:57 157313 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:57 159509 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:57 159642 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:57 160906 --> URI Class Initialized
INFO - 2018-12-22 05:34:57 163258 --> Router Class Initialized
INFO - 2018-12-22 05:34:57 165673 --> Output Class Initialized
INFO - 2018-12-22 05:34:57 167514 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:57 169460 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:57 169598 --> Input Class Initialized
INFO - 2018-12-22 05:34:57 170198 --> Language Class Initialized
INFO - 2018-12-22 05:34:57 180802 --> Loader Class Initialized
INFO - 2018-12-22 05:34:57 182483 --> Helper loaded: url_helper
INFO - 2018-12-22 05:34:57 183363 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:04:57 194279 --> Database Driver Class Initialized
INFO - 2018-12-22 11:04:57 204041 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:04:57 205569 --> Controller Class Initialized
INFO - 2018-12-22 11:04:57 206615 --> Final output sent to browser
DEBUG - 2018-12-22 11:04:57 206742 --> Total execution time: 0.0608
INFO - 2018-12-22 05:34:57 253163 --> Config Class Initialized
INFO - 2018-12-22 05:34:57 253319 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:57 255486 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:57 255621 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:57 256970 --> URI Class Initialized
INFO - 2018-12-22 05:34:57 260313 --> Router Class Initialized
INFO - 2018-12-22 05:34:57 263026 --> Output Class Initialized
INFO - 2018-12-22 05:34:57 264255 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:57 265531 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:57 265619 --> Input Class Initialized
INFO - 2018-12-22 05:34:57 266010 --> Language Class Initialized
ERROR - 2018-12-22 05:34:57 266643 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 05:34:58 045934 --> Config Class Initialized
INFO - 2018-12-22 05:34:58 046036 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:34:58 047164 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:34:58 047235 --> Utf8 Class Initialized
INFO - 2018-12-22 05:34:58 048454 --> URI Class Initialized
INFO - 2018-12-22 05:34:58 051326 --> Router Class Initialized
INFO - 2018-12-22 05:34:58 053587 --> Output Class Initialized
INFO - 2018-12-22 05:34:58 055301 --> Security Class Initialized
DEBUG - 2018-12-22 05:34:58 057070 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:34:58 057193 --> Input Class Initialized
INFO - 2018-12-22 05:34:58 057742 --> Language Class Initialized
ERROR - 2018-12-22 05:34:58 058583 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 05:35:25 793237 --> Config Class Initialized
INFO - 2018-12-22 05:35:25 793523 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:25 795520 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:25 795624 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:25 797043 --> URI Class Initialized
INFO - 2018-12-22 05:35:25 799866 --> Router Class Initialized
INFO - 2018-12-22 05:35:25 801935 --> Output Class Initialized
INFO - 2018-12-22 05:35:25 804915 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:25 807498 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:25 807641 --> Input Class Initialized
INFO - 2018-12-22 05:35:25 808336 --> Language Class Initialized
INFO - 2018-12-22 05:35:25 813013 --> Loader Class Initialized
INFO - 2018-12-22 05:35:25 815021 --> Helper loaded: url_helper
INFO - 2018-12-22 05:35:25 815772 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:05:25 824307 --> Database Driver Class Initialized
INFO - 2018-12-22 11:05:25 833076 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:05:25 834799 --> Controller Class Initialized
INFO - 2018-12-22 11:05:25 835381 --> Parser Class Initialized
INFO - 2018-12-22 11:05:25 836251 --> Helper loaded: html_helper
DEBUG - 2018-12-22 11:05:25 836364 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-22 11:05:25 838442 --> Model Class Initialized
INFO - 2018-12-22 11:05:25 845263 --> Helper loaded: cookie_helper
DEBUG - 2018-12-22 11:05:25 848592 --> updatecount for view business88888888 [UPDATE `bd_business_details` SET `num_business_viewed` = 2
WHERE `form_id` = '281']
INFO - 2018-12-22 11:05:25 848998 --> Model Class Initialized
DEBUG - 2018-12-22 11:05:25 849509 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 11:05:25 850115 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 11:05:25 851737 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 11:05:25 852818 --> Helper loaded: file_helper
DEBUG - 2018-12-22 11:05:25 852920 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 11:05:25 859396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 860543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 862303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 862929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 863482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 864012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 892864 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:05:25 894059 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-22 11:05:25 896330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 897871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 898211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 11:05:25 900938 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 11:05:25 902864 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 11:05:25 911288 --> Final output sent to browser
DEBUG - 2018-12-22 11:05:25 911413 --> Total execution time: 0.1121
INFO - 2018-12-22 05:35:26 051244 --> Config Class Initialized
INFO - 2018-12-22 05:35:26 051599 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:26 054035 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:26 054164 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:26 055881 --> URI Class Initialized
INFO - 2018-12-22 05:35:26 060360 --> Router Class Initialized
INFO - 2018-12-22 05:35:26 062990 --> Output Class Initialized
INFO - 2018-12-22 05:35:26 064976 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:26 066986 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:26 067116 --> Input Class Initialized
INFO - 2018-12-22 05:35:26 067753 --> Language Class Initialized
ERROR - 2018-12-22 05:35:26 068746 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-22 05:35:26 139499 --> Config Class Initialized
INFO - 2018-12-22 05:35:26 139605 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:26 140985 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:26 141067 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:26 141911 --> URI Class Initialized
INFO - 2018-12-22 05:35:26 149239 --> Router Class Initialized
INFO - 2018-12-22 05:35:26 151658 --> Output Class Initialized
INFO - 2018-12-22 05:35:26 153517 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:26 155342 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:26 155493 --> Input Class Initialized
INFO - 2018-12-22 05:35:26 156069 --> Language Class Initialized
ERROR - 2018-12-22 05:35:26 156991 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-22 05:35:26 168061 --> Config Class Initialized
INFO - 2018-12-22 05:35:26 168382 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:26 170871 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:26 171001 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:26 172663 --> URI Class Initialized
INFO - 2018-12-22 05:35:26 177148 --> Router Class Initialized
INFO - 2018-12-22 05:35:26 179783 --> Output Class Initialized
INFO - 2018-12-22 05:35:26 181763 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:26 183773 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:26 183902 --> Input Class Initialized
INFO - 2018-12-22 05:35:26 184533 --> Language Class Initialized
ERROR - 2018-12-22 05:35:26 185528 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-22 05:35:26 216593 --> Config Class Initialized
INFO - 2018-12-22 05:35:26 216743 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:26 219510 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:26 219692 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:26 221719 --> URI Class Initialized
INFO - 2018-12-22 05:35:26 225706 --> Router Class Initialized
INFO - 2018-12-22 05:35:26 228739 --> Output Class Initialized
INFO - 2018-12-22 05:35:26 230730 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:26 232964 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:26 233102 --> Input Class Initialized
INFO - 2018-12-22 05:35:26 233736 --> Language Class Initialized
INFO - 2018-12-22 05:35:26 241945 --> Loader Class Initialized
INFO - 2018-12-22 05:35:26 243612 --> Helper loaded: url_helper
INFO - 2018-12-22 05:35:26 244515 --> Helper loaded: utility_helper
INFO - 2018-12-22 11:05:26 259365 --> Database Driver Class Initialized
INFO - 2018-12-22 11:05:26 268594 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 11:05:26 270091 --> Controller Class Initialized
INFO - 2018-12-22 11:05:26 271116 --> Final output sent to browser
DEBUG - 2018-12-22 11:05:26 271239 --> Total execution time: 0.0564
INFO - 2018-12-22 05:35:26 286645 --> Config Class Initialized
INFO - 2018-12-22 05:35:26 286791 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:26 290534 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:26 290666 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:26 292247 --> URI Class Initialized
INFO - 2018-12-22 05:35:26 295469 --> Router Class Initialized
INFO - 2018-12-22 05:35:26 302223 --> Output Class Initialized
INFO - 2018-12-22 05:35:26 304354 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:26 306426 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:26 306544 --> Input Class Initialized
INFO - 2018-12-22 05:35:26 307105 --> Language Class Initialized
ERROR - 2018-12-22 05:35:26 307996 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-22 05:35:27 046961 --> Config Class Initialized
INFO - 2018-12-22 05:35:27 047096 --> Hooks Class Initialized
DEBUG - 2018-12-22 05:35:27 049665 --> UTF-8 Support Enabled
INFO - 2018-12-22 05:35:27 049938 --> Utf8 Class Initialized
INFO - 2018-12-22 05:35:27 050641 --> URI Class Initialized
INFO - 2018-12-22 05:35:27 052690 --> Router Class Initialized
INFO - 2018-12-22 05:35:27 053920 --> Output Class Initialized
INFO - 2018-12-22 05:35:27 054887 --> Security Class Initialized
DEBUG - 2018-12-22 05:35:27 055847 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 05:35:27 055919 --> Input Class Initialized
INFO - 2018-12-22 05:35:27 056224 --> Language Class Initialized
ERROR - 2018-12-22 05:35:27 056720 --> 404 Page Not Found: Browse-sector-listing-details/281
INFO - 2018-12-22 08:21:17 005706 --> Config Class Initialized
INFO - 2018-12-22 08:21:17 011439 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:17 034234 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:17 034560 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:17 036309 --> URI Class Initialized
DEBUG - 2018-12-22 08:21:17 043433 --> No URI present. Default controller set.
INFO - 2018-12-22 08:21:17 043569 --> Router Class Initialized
INFO - 2018-12-22 08:21:17 055306 --> Output Class Initialized
INFO - 2018-12-22 08:21:17 057586 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:17 067487 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:17 067626 --> Input Class Initialized
INFO - 2018-12-22 08:21:17 068365 --> Language Class Initialized
INFO - 2018-12-22 08:21:17 086226 --> Loader Class Initialized
INFO - 2018-12-22 08:21:17 095731 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:17 102349 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:17 123285 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:17 158919 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:17 165692 --> Controller Class Initialized
INFO - 2018-12-22 13:51:17 173876 --> Parser Class Initialized
INFO - 2018-12-22 13:51:17 175713 --> Helper loaded: html_helper
INFO - 2018-12-22 13:51:17 186238 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 13:51:17 191337 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:17 203681 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 13:51:17 206361 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 13:51:17 217173 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:17 218220 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 13:51:17 241837 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:51:17 253725 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:51:17 253871 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:51:17 268148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 276489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 289174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 290674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 292685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 293124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 293719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 294374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 296092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 296322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 296730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 297287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 299248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 299787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 300340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 301067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 302856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 303092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 303582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 304133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 305982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 306250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 306678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 307265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 308953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 309195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 309654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 310353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 312757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 313031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 313543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 314117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 316135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 316719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 317451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 318516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 321000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 321243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 321832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 322367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 322931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 323496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 324038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 324564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 325074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 325576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 326086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 326585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 327076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 327753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 328252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 328747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 329227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 329721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 330215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 330658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 331079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 331723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 332170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 332750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 334954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 335194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 335686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 336210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 338160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 338407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 339037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 339571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 341696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 342214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 343162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 343975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 348031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 348330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 348850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 349433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 351316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 351622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 352099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 352639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 354371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 354640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 355118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 356980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 357553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 359287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 359853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 361856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 362586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 366424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 367099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 368792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 369426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 371973 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:17 372664 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 13:51:17 380703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 381767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 382009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:17 384042 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:17 384471 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:51:17 392194 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:17 392267 --> Total execution time: 0.4052
INFO - 2018-12-22 08:21:20 280371 --> Config Class Initialized
INFO - 2018-12-22 08:21:20 280499 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:20 281878 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:20 281958 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:20 282764 --> URI Class Initialized
DEBUG - 2018-12-22 08:21:20 284190 --> No URI present. Default controller set.
INFO - 2018-12-22 08:21:20 284271 --> Router Class Initialized
INFO - 2018-12-22 08:21:20 285857 --> Output Class Initialized
INFO - 2018-12-22 08:21:20 287034 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:20 288229 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:20 288309 --> Input Class Initialized
INFO - 2018-12-22 08:21:20 288706 --> Language Class Initialized
INFO - 2018-12-22 08:21:20 290994 --> Loader Class Initialized
INFO - 2018-12-22 08:21:20 291929 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:20 292412 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:20 307145 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:20 312500 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:20 313841 --> Controller Class Initialized
INFO - 2018-12-22 13:51:20 314469 --> Parser Class Initialized
INFO - 2018-12-22 13:51:20 315382 --> Helper loaded: html_helper
INFO - 2018-12-22 13:51:20 316371 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 13:51:20 318782 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:20 329281 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 13:51:20 334263 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 13:51:20 335124 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:20 335834 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 13:51:20 338814 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:51:20 340080 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:51:20 340198 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:51:20 343013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 344233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 350728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 352361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 354094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 354360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 354816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 355503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 357189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 357448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 357880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 358489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 360193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 360447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 360877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 361493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 363220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 363487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 363939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 364557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 366323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 366600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 367048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 367681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 369524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 369790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 370242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 370877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 372745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 373009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 373482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 374111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 375978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 376243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 376728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 377402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 379254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 379534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 380002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 380589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 381114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 381661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 382210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 382769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 383304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 383848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 384375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 384918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 385452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 385982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 386586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 387490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 388386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 389292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 390778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 392040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 393004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 394021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 395915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 396699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 403790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 404072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 404623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 405445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 407349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 407628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 408153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 409007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 410892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 411151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 411703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 412276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 414304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 414602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 415149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 415796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 417704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 417980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 418576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 419281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 421365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 421681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 422295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 424338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 425041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 426940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 427540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 429380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 430077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 431973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 432576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 434431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 435023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 436883 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:20 437493 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 13:51:20 439243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 440402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 440675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:20 442617 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:20 443063 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:51:20 451245 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:20 451333 --> Total execution time: 0.1645
INFO - 2018-12-22 08:21:25 710266 --> Config Class Initialized
INFO - 2018-12-22 08:21:25 710505 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:25 711904 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:25 711981 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:25 712960 --> URI Class Initialized
INFO - 2018-12-22 08:21:25 715517 --> Router Class Initialized
INFO - 2018-12-22 08:21:25 717472 --> Output Class Initialized
INFO - 2018-12-22 08:21:25 718755 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:25 720593 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:25 720741 --> Input Class Initialized
INFO - 2018-12-22 08:21:25 721127 --> Language Class Initialized
ERROR - 2018-12-22 08:21:25 725049 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 08:21:25 821894 --> Config Class Initialized
INFO - 2018-12-22 08:21:25 822082 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:25 823379 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:25 823482 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:25 824348 --> URI Class Initialized
INFO - 2018-12-22 08:21:25 826677 --> Router Class Initialized
INFO - 2018-12-22 08:21:25 828036 --> Output Class Initialized
INFO - 2018-12-22 08:21:25 829085 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:25 830127 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:25 830194 --> Input Class Initialized
INFO - 2018-12-22 08:21:25 830530 --> Language Class Initialized
ERROR - 2018-12-22 08:21:25 831057 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 08:21:26 085638 --> Config Class Initialized
INFO - 2018-12-22 08:21:26 085793 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:26 087961 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:26 088092 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:26 089354 --> URI Class Initialized
INFO - 2018-12-22 08:21:26 091722 --> Router Class Initialized
INFO - 2018-12-22 08:21:26 094118 --> Output Class Initialized
INFO - 2018-12-22 08:21:26 095964 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:26 097978 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:26 098108 --> Input Class Initialized
INFO - 2018-12-22 08:21:26 098737 --> Language Class Initialized
INFO - 2018-12-22 08:21:26 130942 --> Loader Class Initialized
INFO - 2018-12-22 08:21:26 132652 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:26 133579 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:26 145028 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:26 154700 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:26 156990 --> Controller Class Initialized
INFO - 2018-12-22 13:51:26 158087 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:26 158212 --> Total execution time: 0.0744
INFO - 2018-12-22 08:21:40 029774 --> Config Class Initialized
INFO - 2018-12-22 08:21:40 029967 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:40 031572 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:40 031646 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:40 032928 --> URI Class Initialized
INFO - 2018-12-22 08:21:40 035696 --> Router Class Initialized
INFO - 2018-12-22 08:21:40 037370 --> Output Class Initialized
INFO - 2018-12-22 08:21:40 038758 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:40 040258 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:40 040468 --> Input Class Initialized
INFO - 2018-12-22 08:21:40 040812 --> Language Class Initialized
INFO - 2018-12-22 08:21:40 043121 --> Loader Class Initialized
INFO - 2018-12-22 08:21:40 044063 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:40 044796 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:40 052340 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:40 058696 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:40 059801 --> Controller Class Initialized
INFO - 2018-12-22 13:51:40 060250 --> Parser Class Initialized
INFO - 2018-12-22 13:51:40 060836 --> Helper loaded: html_helper
INFO - 2018-12-22 13:51:40 062635 --> Model Class Initialized
INFO - 2018-12-22 13:51:40 079993 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:40 083136 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 13:51:40 084551 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 13:51:40 092071 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-22 13:51:40 092192 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2018-12-22 13:51:40 093466 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:51:40 095987 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:51:40 096332 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:51:40 097050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 097877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 098483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 099195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 099814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 101787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 102576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 103090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 103614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 104231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 104999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 105741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 106419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 106966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 107615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 108128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 108798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 109395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 110028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 110608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 111175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 111824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 112369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 112997 --> Cache class already loaded. Second attempt ignored.
ERROR - 2018-12-22 13:51:40 113697 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2018-12-22 13:51:40 113836 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2018-12-22 13:51:40 113948 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2018-12-22 13:51:40 115855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 121942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 123872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:40 132108 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:40 133352 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:51:40 141449 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:40 141586 --> Total execution time: 0.1054
INFO - 2018-12-22 08:21:40 671997 --> Config Class Initialized
INFO - 2018-12-22 08:21:40 672087 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:40 673264 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:40 673336 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:40 674009 --> URI Class Initialized
INFO - 2018-12-22 08:21:40 675247 --> Router Class Initialized
INFO - 2018-12-22 08:21:40 676522 --> Output Class Initialized
INFO - 2018-12-22 08:21:40 677493 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:40 678443 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:40 678527 --> Input Class Initialized
INFO - 2018-12-22 08:21:40 678831 --> Language Class Initialized
INFO - 2018-12-22 08:21:40 682483 --> Loader Class Initialized
INFO - 2018-12-22 08:21:40 683219 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:40 683638 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:40 688393 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:40 691392 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:40 692104 --> Controller Class Initialized
INFO - 2018-12-22 13:51:40 692620 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:40 692687 --> Total execution time: 0.0216
INFO - 2018-12-22 08:21:44 498630 --> Config Class Initialized
INFO - 2018-12-22 08:21:44 498872 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:44 500813 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:44 500907 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:44 502043 --> URI Class Initialized
INFO - 2018-12-22 08:21:44 504904 --> Router Class Initialized
INFO - 2018-12-22 08:21:44 506676 --> Output Class Initialized
INFO - 2018-12-22 08:21:44 508024 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:44 509378 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:44 509481 --> Input Class Initialized
INFO - 2018-12-22 08:21:44 509893 --> Language Class Initialized
INFO - 2018-12-22 08:21:44 512583 --> Loader Class Initialized
INFO - 2018-12-22 08:21:44 513672 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:44 514230 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:44 521332 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:44 527420 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:44 528419 --> Controller Class Initialized
INFO - 2018-12-22 13:51:44 528920 --> Parser Class Initialized
INFO - 2018-12-22 13:51:44 529665 --> Helper loaded: html_helper
INFO - 2018-12-22 13:51:44 531493 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:44 538727 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2018-12-22 13:51:44 539303 --> Model Class Initialized
DEBUG - 2018-12-22 13:51:44 540025 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 13:51:44 540854 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 13:51:44 551475 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:51:44 553561 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:51:44 553703 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:51:44 556582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 557724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 564400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 565294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 565962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 566387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 566628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 568197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 568778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 569346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 569753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 569964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 571520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 572026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 572609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 572994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 573201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 574817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 575675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 576265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 576678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 576901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 578644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 579271 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:44 579884 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2018-12-22 13:51:44 581487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 582509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 582727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:51:44 584393 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:51:44 586061 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:51:44 594264 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:44 594352 --> Total execution time: 0.0902
INFO - 2018-12-22 08:21:44 825690 --> Config Class Initialized
INFO - 2018-12-22 08:21:44 825865 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:44 827069 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:44 827131 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:44 827955 --> URI Class Initialized
INFO - 2018-12-22 08:21:44 830146 --> Router Class Initialized
INFO - 2018-12-22 08:21:44 831439 --> Output Class Initialized
INFO - 2018-12-22 08:21:44 832380 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:44 833344 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:44 833405 --> Input Class Initialized
INFO - 2018-12-22 08:21:44 833710 --> Language Class Initialized
ERROR - 2018-12-22 08:21:44 834218 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 08:21:44 838198 --> Config Class Initialized
INFO - 2018-12-22 08:21:44 838269 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:44 839349 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:44 839412 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:44 840059 --> URI Class Initialized
INFO - 2018-12-22 08:21:44 841721 --> Router Class Initialized
INFO - 2018-12-22 08:21:44 842915 --> Output Class Initialized
INFO - 2018-12-22 08:21:44 843831 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:44 844743 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:44 844805 --> Input Class Initialized
INFO - 2018-12-22 08:21:44 845087 --> Language Class Initialized
ERROR - 2018-12-22 08:21:44 845557 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 08:21:44 910305 --> Config Class Initialized
INFO - 2018-12-22 08:21:44 910592 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:44 913590 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:44 913710 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:44 915709 --> URI Class Initialized
INFO - 2018-12-22 08:21:44 921214 --> Router Class Initialized
INFO - 2018-12-22 08:21:44 923652 --> Output Class Initialized
INFO - 2018-12-22 08:21:44 924715 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:44 925765 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:44 925831 --> Input Class Initialized
INFO - 2018-12-22 08:21:44 926142 --> Language Class Initialized
ERROR - 2018-12-22 08:21:44 926667 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 08:21:44 979033 --> Config Class Initialized
INFO - 2018-12-22 08:21:44 979119 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:44 980120 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:44 980184 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:44 980818 --> URI Class Initialized
INFO - 2018-12-22 08:21:44 982264 --> Router Class Initialized
INFO - 2018-12-22 08:21:44 983385 --> Output Class Initialized
INFO - 2018-12-22 08:21:44 984253 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:44 985193 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:44 985255 --> Input Class Initialized
INFO - 2018-12-22 08:21:44 985554 --> Language Class Initialized
ERROR - 2018-12-22 08:21:44 986008 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 08:21:45 054819 --> Config Class Initialized
INFO - 2018-12-22 08:21:45 054976 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:45 057502 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:45 057625 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:45 059112 --> URI Class Initialized
INFO - 2018-12-22 08:21:45 061939 --> Router Class Initialized
INFO - 2018-12-22 08:21:45 064913 --> Output Class Initialized
INFO - 2018-12-22 08:21:45 067301 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:45 068846 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:45 068944 --> Input Class Initialized
INFO - 2018-12-22 08:21:45 069406 --> Language Class Initialized
INFO - 2018-12-22 08:21:45 075342 --> Loader Class Initialized
INFO - 2018-12-22 08:21:45 076596 --> Helper loaded: url_helper
INFO - 2018-12-22 08:21:45 077225 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:51:45 085078 --> Database Driver Class Initialized
INFO - 2018-12-22 13:51:45 091347 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:51:45 092489 --> Controller Class Initialized
INFO - 2018-12-22 13:51:45 093259 --> Final output sent to browser
DEBUG - 2018-12-22 13:51:45 093349 --> Total execution time: 0.0407
INFO - 2018-12-22 08:21:45 132312 --> Config Class Initialized
INFO - 2018-12-22 08:21:45 132416 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:21:45 133646 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:21:45 133722 --> Utf8 Class Initialized
INFO - 2018-12-22 08:21:45 134469 --> URI Class Initialized
INFO - 2018-12-22 08:21:45 136235 --> Router Class Initialized
INFO - 2018-12-22 08:21:45 137629 --> Output Class Initialized
INFO - 2018-12-22 08:21:45 138688 --> Security Class Initialized
DEBUG - 2018-12-22 08:21:45 139744 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:21:45 139820 --> Input Class Initialized
INFO - 2018-12-22 08:21:45 140146 --> Language Class Initialized
ERROR - 2018-12-22 08:21:45 140681 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2018-12-22 08:23:16 028954 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 029241 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 031337 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 031456 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 033473 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 036952 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 039839 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 041943 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 044265 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 044369 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 045295 --> Language Class Initialized
INFO - 2018-12-22 08:23:16 065665 --> Loader Class Initialized
INFO - 2018-12-22 08:23:16 066900 --> Helper loaded: url_helper
INFO - 2018-12-22 08:23:16 067502 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:53:16 077147 --> Database Driver Class Initialized
INFO - 2018-12-22 13:53:16 084954 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:53:16 086201 --> Controller Class Initialized
INFO - 2018-12-22 13:53:16 086726 --> Parser Class Initialized
INFO - 2018-12-22 13:53:16 087526 --> Helper loaded: html_helper
DEBUG - 2018-12-22 13:53:16 087713 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-22 13:53:16 089806 --> Model Class Initialized
INFO - 2018-12-22 13:53:16 132405 --> Helper loaded: cookie_helper
INFO - 2018-12-22 13:53:16 133320 --> Model Class Initialized
DEBUG - 2018-12-22 13:53:16 133992 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-22 13:53:16 135684 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-22 13:53:16 148328 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:53:16 150736 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:53:16 150913 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:53:16 161417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 163059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 166033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 166766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 167498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 168183 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:53:16 168931 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-22 13:53:16 171134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 173377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 173687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:53:16 176137 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:53:16 177757 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:53:16 185368 --> Final output sent to browser
DEBUG - 2018-12-22 13:53:16 185482 --> Total execution time: 0.1522
INFO - 2018-12-22 08:23:16 346900 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 347206 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 349430 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 349567 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 351075 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 355340 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 357830 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 359671 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 361593 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 361711 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 362262 --> Language Class Initialized
ERROR - 2018-12-22 08:23:16 363178 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 08:23:16 398557 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 398674 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 400608 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 400700 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 401663 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 405258 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 407816 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 409560 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 411240 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 411358 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 411892 --> Language Class Initialized
ERROR - 2018-12-22 08:23:16 412765 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 08:23:16 437271 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 437633 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 440077 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 440205 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 441874 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 446365 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 448988 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 450972 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 453016 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 453144 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 453753 --> Language Class Initialized
ERROR - 2018-12-22 08:23:16 454750 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 08:23:16 465270 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 465374 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 467508 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 467601 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 468492 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 470078 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 471708 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 472954 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 474178 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 474267 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 474845 --> Language Class Initialized
INFO - 2018-12-22 08:23:16 480792 --> Loader Class Initialized
INFO - 2018-12-22 08:23:16 482954 --> Helper loaded: url_helper
INFO - 2018-12-22 08:23:16 484203 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:53:16 491508 --> Database Driver Class Initialized
INFO - 2018-12-22 13:53:16 495629 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:53:16 496640 --> Controller Class Initialized
INFO - 2018-12-22 13:53:16 497566 --> Final output sent to browser
DEBUG - 2018-12-22 13:53:16 497657 --> Total execution time: 0.0335
INFO - 2018-12-22 08:23:16 608565 --> Config Class Initialized
INFO - 2018-12-22 08:23:16 608719 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:23:16 610995 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:23:16 611171 --> Utf8 Class Initialized
INFO - 2018-12-22 08:23:16 612778 --> URI Class Initialized
INFO - 2018-12-22 08:23:16 615946 --> Router Class Initialized
INFO - 2018-12-22 08:23:16 618484 --> Output Class Initialized
INFO - 2018-12-22 08:23:16 620484 --> Security Class Initialized
DEBUG - 2018-12-22 08:23:16 622545 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:23:16 622684 --> Input Class Initialized
INFO - 2018-12-22 08:23:16 623357 --> Language Class Initialized
ERROR - 2018-12-22 08:23:16 624344 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2018-12-22 08:24:40 963515 --> Config Class Initialized
INFO - 2018-12-22 08:24:40 963974 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:24:40 965966 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:24:40 966062 --> Utf8 Class Initialized
INFO - 2018-12-22 08:24:40 967700 --> URI Class Initialized
DEBUG - 2018-12-22 08:24:40 969383 --> No URI present. Default controller set.
INFO - 2018-12-22 08:24:40 969597 --> Router Class Initialized
INFO - 2018-12-22 08:24:40 971894 --> Output Class Initialized
INFO - 2018-12-22 08:24:40 973709 --> Security Class Initialized
DEBUG - 2018-12-22 08:24:40 976566 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:24:40 976701 --> Input Class Initialized
INFO - 2018-12-22 08:24:40 977737 --> Language Class Initialized
INFO - 2018-12-22 08:24:40 982956 --> Loader Class Initialized
INFO - 2018-12-22 08:24:40 985009 --> Helper loaded: url_helper
INFO - 2018-12-22 08:24:40 986831 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:54:40 996347 --> Database Driver Class Initialized
INFO - 2018-12-22 13:54:41 003849 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:54:41 005075 --> Controller Class Initialized
INFO - 2018-12-22 13:54:41 005609 --> Parser Class Initialized
INFO - 2018-12-22 13:54:41 006360 --> Helper loaded: html_helper
INFO - 2018-12-22 13:54:41 007389 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-22 13:54:41 009510 --> Model Class Initialized
DEBUG - 2018-12-22 13:54:41 019180 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-22 13:54:41 023488 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-22'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-22 13:54:41 024003 --> Model Class Initialized
DEBUG - 2018-12-22 13:54:41 024684 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-22 13:54:41 026913 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-22 13:54:41 028389 --> Helper loaded: file_helper
DEBUG - 2018-12-22 13:54:41 028531 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-22 13:54:41 033714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 035849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 046751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 048692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 051131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 051408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 051889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 052671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 055062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 055315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 055756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 056643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 059153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 059504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 060374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 061109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 062827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 063082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 063721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 064428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 066414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 066679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 067111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 067843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 069931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 070199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 070672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 071368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 073554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 073816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 074259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 074965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 076986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 077248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 077897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 078624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 080635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 080905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 081365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 082254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 082915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 083568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 084192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 085108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 085853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 086704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 087733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 088511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 089607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 090249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 090890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 091516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 092346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 092992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 093895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 094542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 095011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 095526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 096087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 096779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 098948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 099199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 099741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 100410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 102380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 102684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 103238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 103909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 105756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 106040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 106564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 107243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 109616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 109883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 110426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 111155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 113420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 113746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 114329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 115807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 118141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 118498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 119230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 124564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 125946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 131320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 132750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 135935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 136713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 138948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 139820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 142039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 143052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 145629 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:54:41 146512 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-22 13:54:41 148365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 150804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 151072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-22 13:54:41 153017 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-22 13:54:41 153704 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-22 13:54:41 162072 --> Final output sent to browser
DEBUG - 2018-12-22 13:54:41 162168 --> Total execution time: 0.1927
INFO - 2018-12-22 08:24:41 785617 --> Config Class Initialized
INFO - 2018-12-22 08:24:41 785954 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:24:41 788430 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:24:41 788579 --> Utf8 Class Initialized
INFO - 2018-12-22 08:24:41 790225 --> URI Class Initialized
INFO - 2018-12-22 08:24:41 794722 --> Router Class Initialized
INFO - 2018-12-22 08:24:41 797332 --> Output Class Initialized
INFO - 2018-12-22 08:24:41 799313 --> Security Class Initialized
DEBUG - 2018-12-22 08:24:41 801311 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:24:41 801455 --> Input Class Initialized
INFO - 2018-12-22 08:24:41 802072 --> Language Class Initialized
ERROR - 2018-12-22 08:24:41 803495 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 08:24:41 829416 --> Config Class Initialized
INFO - 2018-12-22 08:24:41 829761 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:24:41 832618 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:24:41 832818 --> Utf8 Class Initialized
INFO - 2018-12-22 08:24:41 835935 --> URI Class Initialized
INFO - 2018-12-22 08:24:41 840476 --> Router Class Initialized
INFO - 2018-12-22 08:24:41 843105 --> Output Class Initialized
INFO - 2018-12-22 08:24:41 845132 --> Security Class Initialized
DEBUG - 2018-12-22 08:24:41 847156 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:24:41 847284 --> Input Class Initialized
INFO - 2018-12-22 08:24:41 847907 --> Language Class Initialized
ERROR - 2018-12-22 08:24:41 848911 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-22 08:24:41 862373 --> Config Class Initialized
INFO - 2018-12-22 08:24:41 862677 --> Hooks Class Initialized
DEBUG - 2018-12-22 08:24:41 865082 --> UTF-8 Support Enabled
INFO - 2018-12-22 08:24:41 865196 --> Utf8 Class Initialized
INFO - 2018-12-22 08:24:41 866740 --> URI Class Initialized
INFO - 2018-12-22 08:24:41 869515 --> Router Class Initialized
INFO - 2018-12-22 08:24:41 872107 --> Output Class Initialized
INFO - 2018-12-22 08:24:41 874083 --> Security Class Initialized
DEBUG - 2018-12-22 08:24:41 876123 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-22 08:24:41 876243 --> Input Class Initialized
INFO - 2018-12-22 08:24:41 876831 --> Language Class Initialized
INFO - 2018-12-22 08:24:41 885060 --> Loader Class Initialized
INFO - 2018-12-22 08:24:41 886687 --> Helper loaded: url_helper
INFO - 2018-12-22 08:24:41 887522 --> Helper loaded: utility_helper
INFO - 2018-12-22 13:54:41 897941 --> Database Driver Class Initialized
INFO - 2018-12-22 13:54:41 906260 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-22 13:54:41 908979 --> Controller Class Initialized
INFO - 2018-12-22 13:54:41 909946 --> Final output sent to browser
DEBUG - 2018-12-22 13:54:41 910084 --> Total execution time: 0.0495
