<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-24 05:04:16 935547 --> Config Class Initialized
INFO - 2018-12-24 05:04:16 936574 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:04:16 971800 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:04:16 975553 --> Utf8 Class Initialized
INFO - 2018-12-24 05:04:16 977025 --> URI Class Initialized
DEBUG - 2018-12-24 05:04:17 016335 --> No URI present. Default controller set.
INFO - 2018-12-24 05:04:17 025572 --> Router Class Initialized
INFO - 2018-12-24 05:04:17 057967 --> Output Class Initialized
INFO - 2018-12-24 05:04:17 063566 --> Security Class Initialized
DEBUG - 2018-12-24 05:04:17 098059 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:04:17 111649 --> Input Class Initialized
INFO - 2018-12-24 05:04:17 112749 --> Language Class Initialized
INFO - 2018-12-24 05:04:17 173413 --> Loader Class Initialized
INFO - 2018-12-24 05:04:17 180068 --> Helper loaded: url_helper
INFO - 2018-12-24 05:04:17 193893 --> Helper loaded: utility_helper
INFO - 2018-12-24 10:34:17 335217 --> Database Driver Class Initialized
INFO - 2018-12-24 10:34:17 414285 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-24 10:34:17 542927 --> Controller Class Initialized
INFO - 2018-12-24 10:34:17 552131 --> Parser Class Initialized
INFO - 2018-12-24 10:34:17 555639 --> Helper loaded: html_helper
INFO - 2018-12-24 10:34:17 577745 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-24 10:34:17 614079 --> Model Class Initialized
DEBUG - 2018-12-24 10:34:17 638040 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-24 10:34:17 642041 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-24'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-24 10:34:17 651875 --> Model Class Initialized
DEBUG - 2018-12-24 10:34:17 653168 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-24 10:34:17 696835 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-24 10:34:17 709758 --> Helper loaded: file_helper
DEBUG - 2018-12-24 10:34:17 720571 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-24 10:34:17 740735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 760073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 819943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 826416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 829416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 829868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 830631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 831640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 834523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 834935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 835663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 836653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 839890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 840303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 841036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 842004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 845166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 845633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 846365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 847347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 850328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 850786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 851553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 852529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 855561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 855998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 856769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 857733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 860760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 861191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 861975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 909493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 912631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 913064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 913850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 914834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 918142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 918607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 919382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 920341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 921260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 922177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 923083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 924588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 925508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 926382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 927278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 928173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 929079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 929982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 930869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 931756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 932640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 933525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 934396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 935194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 935992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 936847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 937685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 939003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 943594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 944026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 944919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 945862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 949070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 949536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 950395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 951457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 954588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 955013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 955900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 956830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 960376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 960851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 961745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 962690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 966228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 967174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 968563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 969501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 972671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 973109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 974009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 977216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 978209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 981419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 982384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 985555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 986537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 989772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 990751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 995007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 995980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:17 999140 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-24 10:34:18 000087 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-24 10:34:18 011528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:18 013505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:18 013946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:34:18 017085 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-24 10:34:18 017899 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-24 10:34:18 026931 --> Final output sent to browser
DEBUG - 2018-12-24 10:34:18 027062 --> Total execution time: 1.1141
INFO - 2018-12-24 05:04:23 150782 --> Config Class Initialized
INFO - 2018-12-24 05:04:23 151043 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:04:23 153039 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:04:23 153135 --> Utf8 Class Initialized
INFO - 2018-12-24 05:04:23 154300 --> URI Class Initialized
INFO - 2018-12-24 05:04:23 156825 --> Router Class Initialized
INFO - 2018-12-24 05:04:23 158710 --> Output Class Initialized
INFO - 2018-12-24 05:04:23 160120 --> Security Class Initialized
DEBUG - 2018-12-24 05:04:23 161566 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:04:23 161659 --> Input Class Initialized
INFO - 2018-12-24 05:04:23 162101 --> Language Class Initialized
INFO - 2018-12-24 05:04:23 196439 --> Loader Class Initialized
INFO - 2018-12-24 05:04:23 197894 --> Helper loaded: url_helper
INFO - 2018-12-24 05:04:23 199208 --> Helper loaded: utility_helper
INFO - 2018-12-24 10:34:23 209569 --> Database Driver Class Initialized
INFO - 2018-12-24 10:34:23 216206 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-24 10:34:23 217299 --> Controller Class Initialized
INFO - 2018-12-24 10:34:23 218090 --> Final output sent to browser
DEBUG - 2018-12-24 10:34:23 218180 --> Total execution time: 0.0710
INFO - 2018-12-24 05:04:26 385112 --> Config Class Initialized
INFO - 2018-12-24 05:04:26 385366 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:04:26 387212 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:04:26 387312 --> Utf8 Class Initialized
INFO - 2018-12-24 05:04:26 390366 --> URI Class Initialized
INFO - 2018-12-24 05:04:26 395636 --> Router Class Initialized
INFO - 2018-12-24 05:04:26 410754 --> Output Class Initialized
INFO - 2018-12-24 05:04:26 411884 --> Security Class Initialized
DEBUG - 2018-12-24 05:04:26 412964 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:04:26 413033 --> Input Class Initialized
INFO - 2018-12-24 05:04:26 413367 --> Language Class Initialized
INFO - 2018-12-24 05:04:26 415641 --> Config Class Initialized
INFO - 2018-12-24 05:04:26 415817 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:04:26 417124 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:04:26 417193 --> Utf8 Class Initialized
INFO - 2018-12-24 05:04:26 418067 --> URI Class Initialized
INFO - 2018-12-24 05:04:26 420406 --> Router Class Initialized
INFO - 2018-12-24 05:04:26 421801 --> Output Class Initialized
INFO - 2018-12-24 05:04:26 422882 --> Security Class Initialized
ERROR - 2018-12-24 05:04:26 423844 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2018-12-24 05:04:26 425179 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:04:26 425267 --> Input Class Initialized
INFO - 2018-12-24 05:04:26 425718 --> Language Class Initialized
ERROR - 2018-12-24 05:04:26 426393 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-24 05:04:28 587691 --> Config Class Initialized
INFO - 2018-12-24 05:04:28 588047 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:04:28 591850 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:04:28 591993 --> Utf8 Class Initialized
INFO - 2018-12-24 05:04:28 593919 --> URI Class Initialized
INFO - 2018-12-24 05:04:28 597311 --> Router Class Initialized
INFO - 2018-12-24 05:04:28 601600 --> Output Class Initialized
INFO - 2018-12-24 05:04:28 604844 --> Security Class Initialized
DEBUG - 2018-12-24 05:04:28 608897 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:04:28 609064 --> Input Class Initialized
INFO - 2018-12-24 05:04:28 609997 --> Language Class Initialized
ERROR - 2018-12-24 05:04:28 611677 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-24 05:05:42 110037 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 110315 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 112272 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 112377 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 113697 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 116322 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 118396 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 120004 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 121613 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 121716 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 122206 --> Language Class Initialized
INFO - 2018-12-24 05:05:42 138634 --> Loader Class Initialized
INFO - 2018-12-24 05:05:42 139954 --> Helper loaded: url_helper
INFO - 2018-12-24 05:05:42 140672 --> Helper loaded: utility_helper
INFO - 2018-12-24 10:35:42 149019 --> Database Driver Class Initialized
INFO - 2018-12-24 10:35:42 155904 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-24 10:35:42 157102 --> Controller Class Initialized
INFO - 2018-12-24 10:35:42 157706 --> Parser Class Initialized
INFO - 2018-12-24 10:35:42 158600 --> Helper loaded: html_helper
DEBUG - 2018-12-24 10:35:42 158718 --> Controller:::::::::::::::: sell_a_business
INFO - 2018-12-24 10:35:42 160831 --> Model Class Initialized
INFO - 2018-12-24 10:35:42 177047 --> Helper loaded: cookie_helper
INFO - 2018-12-24 10:35:42 183900 --> Model Class Initialized
DEBUG - 2018-12-24 10:35:42 187091 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2018-12-24 10:35:42 188070 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2018-12-24 10:35:42 200962 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-24 10:35:42 202663 --> Helper loaded: file_helper
DEBUG - 2018-12-24 10:35:42 202810 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-24 10:35:42 212023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 213880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 216680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 217526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 218892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 219562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 233983 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-24 10:35:42 234983 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2018-12-24 10:35:42 237113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 238778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 239116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-24 10:35:42 241765 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-24 10:35:42 243556 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-24 10:35:42 251902 --> Final output sent to browser
DEBUG - 2018-12-24 10:35:42 252034 --> Total execution time: 0.1362
INFO - 2018-12-24 05:05:42 387651 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 387975 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 390252 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 390376 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 391951 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 396142 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 400141 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 402785 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 404823 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 404977 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 405579 --> Language Class Initialized
ERROR - 2018-12-24 05:05:42 406503 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-24 05:05:42 446854 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 447005 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 448970 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 449069 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 450341 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 453996 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 455776 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 457159 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 459095 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 459270 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 459938 --> Language Class Initialized
ERROR - 2018-12-24 05:05:42 460901 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-24 05:05:42 474998 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 475322 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 477778 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 477906 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 479563 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 485455 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 488127 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 490215 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 492280 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 492408 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 493083 --> Language Class Initialized
ERROR - 2018-12-24 05:05:42 494064 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-24 05:05:42 623466 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 623680 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 626916 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 627091 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 629084 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 634589 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 638813 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 641799 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 643834 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 643975 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 644599 --> Language Class Initialized
ERROR - 2018-12-24 05:05:42 645618 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2018-12-24 05:05:42 667548 --> Config Class Initialized
INFO - 2018-12-24 05:05:42 667699 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:42 669843 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:42 669990 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:42 671279 --> URI Class Initialized
INFO - 2018-12-24 05:05:42 673635 --> Router Class Initialized
INFO - 2018-12-24 05:05:42 676033 --> Output Class Initialized
INFO - 2018-12-24 05:05:42 677903 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:42 679754 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:42 679887 --> Input Class Initialized
INFO - 2018-12-24 05:05:42 680454 --> Language Class Initialized
INFO - 2018-12-24 05:05:42 687654 --> Loader Class Initialized
INFO - 2018-12-24 05:05:42 689193 --> Helper loaded: url_helper
INFO - 2018-12-24 05:05:42 689986 --> Helper loaded: utility_helper
INFO - 2018-12-24 10:35:42 699415 --> Database Driver Class Initialized
INFO - 2018-12-24 10:35:42 704833 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-24 10:35:42 706298 --> Controller Class Initialized
INFO - 2018-12-24 10:35:42 707166 --> Final output sent to browser
DEBUG - 2018-12-24 10:35:42 707287 --> Total execution time: 0.0413
INFO - 2018-12-24 05:05:44 174349 --> Config Class Initialized
INFO - 2018-12-24 05:05:44 174464 --> Hooks Class Initialized
DEBUG - 2018-12-24 05:05:44 175575 --> UTF-8 Support Enabled
INFO - 2018-12-24 05:05:44 175642 --> Utf8 Class Initialized
INFO - 2018-12-24 05:05:44 176309 --> URI Class Initialized
INFO - 2018-12-24 05:05:44 177923 --> Router Class Initialized
INFO - 2018-12-24 05:05:44 179169 --> Output Class Initialized
INFO - 2018-12-24 05:05:44 180150 --> Security Class Initialized
DEBUG - 2018-12-24 05:05:44 181173 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-24 05:05:44 181241 --> Input Class Initialized
INFO - 2018-12-24 05:05:44 181555 --> Language Class Initialized
ERROR - 2018-12-24 05:05:44 182035 --> 404 Page Not Found: Browse-sector-listing-details/125
