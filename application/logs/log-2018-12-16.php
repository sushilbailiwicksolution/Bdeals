<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-16 18:01:34 068197 --> Config Class Initialized
INFO - 2018-12-16 18:01:34 068531 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:34 075239 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:34 075331 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:34 076896 --> URI Class Initialized
DEBUG - 2018-12-16 18:01:34 090348 --> No URI present. Default controller set.
INFO - 2018-12-16 18:01:34 090615 --> Router Class Initialized
INFO - 2018-12-16 18:01:34 102354 --> Output Class Initialized
INFO - 2018-12-16 18:01:34 121675 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:34 214740 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:34 214874 --> Input Class Initialized
INFO - 2018-12-16 18:01:34 229823 --> Language Class Initialized
INFO - 2018-12-16 18:01:34 264841 --> Loader Class Initialized
INFO - 2018-12-16 18:01:34 286514 --> Helper loaded: url_helper
INFO - 2018-12-16 18:01:34 296690 --> Helper loaded: utility_helper
INFO - 2018-12-16 23:31:34 326278 --> Database Driver Class Initialized
INFO - 2018-12-16 23:31:34 350222 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:31:34 361108 --> Controller Class Initialized
INFO - 2018-12-16 23:31:34 362004 --> Parser Class Initialized
INFO - 2018-12-16 23:31:34 363204 --> Helper loaded: html_helper
INFO - 2018-12-16 23:31:34 369291 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-16 23:31:34 378216 --> Model Class Initialized
DEBUG - 2018-12-16 23:31:34 405044 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-16 23:31:34 411597 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-16'
AND `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-16 23:31:34 422786 --> Model Class Initialized
DEBUG - 2018-12-16 23:31:34 424475 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-16 23:31:34 440746 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-16 23:31:34 456500 --> Helper loaded: file_helper
DEBUG - 2018-12-16 23:31:34 456681 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-16 23:31:34 478420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 485836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 524779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 528434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 534070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 534759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 535927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 537035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 539597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 539968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 540669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 541665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 544719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 545094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 545742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 546730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 549464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 549849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 550514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 551430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 554122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 554531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 555210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 556158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 559020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 559413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 560094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 560981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 563801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 564189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 564929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 565833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 569230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 569679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 570758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 571686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 575768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 576152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 576868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 577760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 580569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 580950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 581696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 582593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 585388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 585793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 586525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 587415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 590248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 590658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 591387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 592284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 595119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 595529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 596250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 597162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 599920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 600302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 601042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 601921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 602749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 603873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 604983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 606096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 607289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 608485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 609616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 610693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 611829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 612982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 614144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 615230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 616327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 617480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 619112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 620351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 621680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 622915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 624207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 625150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 628293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 628704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 629482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 630131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 632992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 633326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 633976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 634561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 637917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 638917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 641427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 642534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 653222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 654238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 656744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 657833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 662866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 663197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 663850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 664444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 667478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 668509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 671052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 672097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 683170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 684241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 686768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 687802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 697004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 697359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 698029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 700247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 700977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 710386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 711606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 716149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 717075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 720326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 721216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 723995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 724878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 727354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 727988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 730283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 731386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 733266 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:31:34 734893 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-16 23:31:34 747910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 750117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 750663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:34 754259 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:31:34 755023 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-16 23:31:34 763917 --> Final output sent to browser
DEBUG - 2018-12-16 23:31:34 764054 --> Total execution time: 0.7070
INFO - 2018-12-16 18:01:36 801908 --> Config Class Initialized
INFO - 2018-12-16 18:01:36 802171 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:36 804631 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:36 804781 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:36 806036 --> URI Class Initialized
INFO - 2018-12-16 18:01:36 810832 --> Router Class Initialized
INFO - 2018-12-16 18:01:36 813942 --> Output Class Initialized
INFO - 2018-12-16 18:01:36 815458 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:36 816495 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:36 816569 --> Input Class Initialized
INFO - 2018-12-16 18:01:36 816895 --> Language Class Initialized
INFO - 2018-12-16 18:01:36 824110 --> Config Class Initialized
INFO - 2018-12-16 18:01:36 824307 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:36 825731 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:36 825803 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:36 826683 --> URI Class Initialized
ERROR - 2018-12-16 18:01:36 827868 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-16 18:01:36 829732 --> Router Class Initialized
INFO - 2018-12-16 18:01:36 831257 --> Output Class Initialized
INFO - 2018-12-16 18:01:36 833183 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:36 835720 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:36 835798 --> Input Class Initialized
INFO - 2018-12-16 18:01:36 836129 --> Language Class Initialized
ERROR - 2018-12-16 18:01:36 836703 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-16 18:01:36 900262 --> Config Class Initialized
INFO - 2018-12-16 18:01:36 900389 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:36 902049 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:36 902124 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:36 902820 --> URI Class Initialized
DEBUG - 2018-12-16 18:01:36 904030 --> No URI present. Default controller set.
INFO - 2018-12-16 18:01:36 904099 --> Router Class Initialized
INFO - 2018-12-16 18:01:36 905419 --> Output Class Initialized
INFO - 2018-12-16 18:01:36 906419 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:36 907355 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:36 907423 --> Input Class Initialized
INFO - 2018-12-16 18:01:36 907752 --> Language Class Initialized
INFO - 2018-12-16 18:01:36 909749 --> Loader Class Initialized
INFO - 2018-12-16 18:01:36 910619 --> Helper loaded: url_helper
INFO - 2018-12-16 18:01:36 911082 --> Helper loaded: utility_helper
INFO - 2018-12-16 23:31:36 916393 --> Database Driver Class Initialized
INFO - 2018-12-16 18:01:36 996937 --> Config Class Initialized
INFO - 2018-12-16 18:01:36 997132 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:36 998447 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:36 998519 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:36 999370 --> URI Class Initialized
INFO - 2018-12-16 18:01:37 000857 --> Router Class Initialized
INFO - 2018-12-16 18:01:37 002240 --> Output Class Initialized
INFO - 2018-12-16 18:01:37 003724 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:37 005372 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:37 005486 --> Input Class Initialized
INFO - 2018-12-16 18:01:37 005968 --> Language Class Initialized
INFO - 2018-12-16 23:31:37 009829 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:31:37 011313 --> Controller Class Initialized
INFO - 2018-12-16 23:31:37 011861 --> Parser Class Initialized
INFO - 2018-12-16 23:31:37 012711 --> Helper loaded: html_helper
INFO - 2018-12-16 23:31:37 013761 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-16 23:31:37 015707 --> Model Class Initialized
INFO - 2018-12-16 18:01:37 023894 --> Loader Class Initialized
INFO - 2018-12-16 18:01:37 027189 --> Helper loaded: url_helper
INFO - 2018-12-16 18:01:37 028034 --> Helper loaded: utility_helper
INFO - 2018-12-16 23:31:37 039844 --> Database Driver Class Initialized
DEBUG - 2018-12-16 23:31:37 044641 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-16 23:31:37 051640 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-16'
AND `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-16 23:31:37 052126 --> Model Class Initialized
DEBUG - 2018-12-16 23:31:37 052923 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-16 23:31:37 054900 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-16 23:31:37 056711 --> Helper loaded: file_helper
DEBUG - 2018-12-16 23:31:37 056816 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-16 23:31:37 059834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 061036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 067388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 068681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 070447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 070694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 071111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 071693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 073297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 073545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 073939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 074520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 076073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 076299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 076702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 077253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 078861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 079128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 079560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 080096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 081696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 081937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 082340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 082920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 084597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 085122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 085961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 086636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 088922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 089262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 089929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 090640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 093477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 093961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 094794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 095642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 099562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 099945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 100676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 101386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 104418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 104823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 105618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 106324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 110470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 111048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 111794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 112685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 115083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 115529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 115992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 116574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 118997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 119544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 120048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 120601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 123626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 123886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 124578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 125600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 126913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 127629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 128329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 129019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 129833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 130330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 131522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 132021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 132652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 134701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 136496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 137738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 138499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 139223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 140517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 141344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 141906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 142404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 142919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 143591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 145750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 146020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 146564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 147218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 149075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 149343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 149880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 150542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 152379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 152652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 153172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 153845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 155699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 155960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 156516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 157041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 158879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 159146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 159686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 160238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 162101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 162364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 162900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 163441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 165458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 165736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 166260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 166752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 168643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 168916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 169450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 171288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 171824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 173691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 174206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 176084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 176608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 178455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 178961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 180810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 181318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 183171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 183690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 185571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 186086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 188003 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:31:37 188502 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-16 23:31:37 190150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 191293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 191577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:31:37 193526 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:31:37 193979 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-16 23:31:37 201915 --> Final output sent to browser
DEBUG - 2018-12-16 23:31:37 202002 --> Total execution time: 0.2960
INFO - 2018-12-16 23:31:37 202282 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:31:37 203253 --> Controller Class Initialized
INFO - 2018-12-16 23:31:37 204274 --> Final output sent to browser
DEBUG - 2018-12-16 23:31:37 205549 --> Total execution time: 0.2085
INFO - 2018-12-16 18:01:37 755167 --> Config Class Initialized
INFO - 2018-12-16 18:01:37 755290 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:01:37 757123 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:01:37 757220 --> Utf8 Class Initialized
INFO - 2018-12-16 18:01:37 758363 --> URI Class Initialized
INFO - 2018-12-16 18:01:37 761357 --> Router Class Initialized
INFO - 2018-12-16 18:01:37 763556 --> Output Class Initialized
INFO - 2018-12-16 18:01:37 765301 --> Security Class Initialized
DEBUG - 2018-12-16 18:01:37 766885 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:01:37 766982 --> Input Class Initialized
INFO - 2018-12-16 18:01:37 767453 --> Language Class Initialized
ERROR - 2018-12-16 18:01:37 768263 --> 404 Page Not Found: Images/favicon.php
INFO - 2018-12-16 18:08:43 763451 --> Config Class Initialized
INFO - 2018-12-16 18:08:43 763765 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:08:43 766211 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:08:43 766330 --> Utf8 Class Initialized
INFO - 2018-12-16 18:08:43 767872 --> URI Class Initialized
DEBUG - 2018-12-16 18:08:43 770232 --> No URI present. Default controller set.
INFO - 2018-12-16 18:08:43 770349 --> Router Class Initialized
INFO - 2018-12-16 18:08:43 772756 --> Output Class Initialized
INFO - 2018-12-16 18:08:43 774516 --> Security Class Initialized
DEBUG - 2018-12-16 18:08:43 776187 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:08:43 776304 --> Input Class Initialized
INFO - 2018-12-16 18:08:43 776837 --> Language Class Initialized
INFO - 2018-12-16 18:08:43 780333 --> Loader Class Initialized
INFO - 2018-12-16 18:08:43 781794 --> Helper loaded: url_helper
INFO - 2018-12-16 18:08:43 782649 --> Helper loaded: utility_helper
INFO - 2018-12-16 23:38:43 792273 --> Database Driver Class Initialized
INFO - 2018-12-16 23:38:43 800182 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:38:43 801640 --> Controller Class Initialized
INFO - 2018-12-16 23:38:43 802669 --> Parser Class Initialized
INFO - 2018-12-16 23:38:43 804094 --> Helper loaded: html_helper
INFO - 2018-12-16 23:38:43 805685 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-16 23:38:43 809699 --> Model Class Initialized
DEBUG - 2018-12-16 23:38:43 823391 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-16 23:38:43 828150 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-16'
AND `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-16 23:38:43 828845 --> Model Class Initialized
DEBUG - 2018-12-16 23:38:43 829490 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-16 23:38:43 832400 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-16 23:38:43 834240 --> Helper loaded: file_helper
DEBUG - 2018-12-16 23:38:43 834397 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-16 23:38:43 838376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 839931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 849463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 851398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 854175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 854583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 855221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 856054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 858555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 858917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 859616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 860343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 862828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 863178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 863811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 864552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 867192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 867607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 868544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 869271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 872009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 872432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 873126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 873950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 876631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 877018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 877702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 878489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 881162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 881565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 882225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 883111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 885819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 886193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 886929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 887835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 890518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 890891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 891587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 892405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 895114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 895503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 896198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 897032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 899835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 900217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 900943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 901782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 904714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 905142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 905981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 906897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 909709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 910101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 910857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 911798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 914944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 915586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 916821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 918050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 919003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 919922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 920840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 921792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 922743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 923688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 924628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 925637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 926688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 927839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 928895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 929838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 930872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 931663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 932702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 933429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 934142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 934864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 935597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 936382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 939939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 940335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 941107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 941946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 944705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 945094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 945884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 946721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 950274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 950965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 952033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 952898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 955933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 956324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 957102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 957937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 960659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 961046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 961821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 962622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 965384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 965794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 966577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 967381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 970160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 970577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 971334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 972152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 974941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 975336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 976109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 978812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 979661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 982371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 983181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 985898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 986709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 989403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 990219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 992934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 993765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 996479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:43 997286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 000037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 000919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 003906 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:38:44 004784 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-16 23:38:44 009712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 012871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 013509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 020250 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:38:44 021435 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-16 23:38:44 032504 --> Final output sent to browser
DEBUG - 2018-12-16 23:38:44 032691 --> Total execution time: 0.2619
INFO - 2018-12-16 18:08:44 500540 --> Config Class Initialized
INFO - 2018-12-16 18:08:44 500746 --> Hooks Class Initialized
INFO - 2018-12-16 18:08:44 508635 --> Config Class Initialized
INFO - 2018-12-16 18:08:44 508836 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:08:44 510176 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:08:44 510248 --> Utf8 Class Initialized
INFO - 2018-12-16 18:08:44 514712 --> URI Class Initialized
DEBUG - 2018-12-16 18:08:44 526837 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:08:44 527075 --> Utf8 Class Initialized
INFO - 2018-12-16 18:08:44 531547 --> URI Class Initialized
INFO - 2018-12-16 18:08:44 537240 --> Router Class Initialized
INFO - 2018-12-16 18:08:44 557879 --> Config Class Initialized
INFO - 2018-12-16 18:08:44 558118 --> Hooks Class Initialized
INFO - 2018-12-16 18:08:44 560072 --> Router Class Initialized
INFO - 2018-12-16 18:08:44 562181 --> Output Class Initialized
INFO - 2018-12-16 18:08:44 563596 --> Security Class Initialized
DEBUG - 2018-12-16 18:08:44 564865 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:08:44 564949 --> Input Class Initialized
INFO - 2018-12-16 18:08:44 566615 --> Output Class Initialized
INFO - 2018-12-16 18:08:44 569809 --> Security Class Initialized
DEBUG - 2018-12-16 18:08:44 571722 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:08:44 571897 --> Utf8 Class Initialized
INFO - 2018-12-16 18:08:44 574736 --> URI Class Initialized
INFO - 2018-12-16 18:08:44 580554 --> Language Class Initialized
ERROR - 2018-12-16 18:08:44 581500 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2018-12-16 18:08:44 584340 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:08:44 584429 --> Input Class Initialized
INFO - 2018-12-16 18:08:44 584775 --> Language Class Initialized
ERROR - 2018-12-16 18:08:44 585319 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-16 18:08:44 587529 --> Config Class Initialized
INFO - 2018-12-16 18:08:44 587711 --> Hooks Class Initialized
DEBUG - 2018-12-16 18:08:44 589030 --> UTF-8 Support Enabled
INFO - 2018-12-16 18:08:44 589102 --> Utf8 Class Initialized
INFO - 2018-12-16 18:08:44 589904 --> URI Class Initialized
DEBUG - 2018-12-16 18:08:44 591233 --> No URI present. Default controller set.
INFO - 2018-12-16 18:08:44 591305 --> Router Class Initialized
INFO - 2018-12-16 18:08:44 592710 --> Output Class Initialized
INFO - 2018-12-16 18:08:44 594813 --> Router Class Initialized
INFO - 2018-12-16 18:08:44 596272 --> Output Class Initialized
INFO - 2018-12-16 18:08:44 597316 --> Security Class Initialized
INFO - 2018-12-16 18:08:44 597798 --> Security Class Initialized
DEBUG - 2018-12-16 18:08:44 598793 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:08:44 598865 --> Input Class Initialized
INFO - 2018-12-16 18:08:44 599179 --> Language Class Initialized
INFO - 2018-12-16 18:08:44 601227 --> Loader Class Initialized
INFO - 2018-12-16 18:08:44 602067 --> Helper loaded: url_helper
INFO - 2018-12-16 18:08:44 602560 --> Helper loaded: utility_helper
DEBUG - 2018-12-16 18:08:44 608316 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-16 18:08:44 608390 --> Input Class Initialized
INFO - 2018-12-16 18:08:44 608724 --> Language Class Initialized
INFO - 2018-12-16 18:08:44 612891 --> Loader Class Initialized
INFO - 2018-12-16 18:08:44 613728 --> Helper loaded: url_helper
INFO - 2018-12-16 18:08:44 614182 --> Helper loaded: utility_helper
INFO - 2018-12-16 23:38:44 617945 --> Database Driver Class Initialized
INFO - 2018-12-16 23:38:44 620337 --> Database Driver Class Initialized
INFO - 2018-12-16 23:38:44 625960 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:38:44 626776 --> Controller Class Initialized
INFO - 2018-12-16 23:38:44 627171 --> Parser Class Initialized
INFO - 2018-12-16 23:38:44 628963 --> Helper loaded: html_helper
INFO - 2018-12-16 23:38:44 630809 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-16 23:38:44 639426 --> Model Class Initialized
DEBUG - 2018-12-16 23:38:44 650654 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-16 23:38:44 654833 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-16'
AND `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-16 23:38:44 655268 --> Model Class Initialized
DEBUG - 2018-12-16 23:38:44 655889 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-16 23:38:44 657696 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-16 23:38:44 658792 --> Helper loaded: file_helper
DEBUG - 2018-12-16 23:38:44 658885 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-16 23:38:44 660033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 660239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 662183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 662585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 664077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 664289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 664671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 665381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 667016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 667363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 667999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 668627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 670705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 677095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 677532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 678117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 680175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 680413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 680814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 681334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 683347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 683595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 683990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 684586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 686305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 686553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 686975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 687520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 689158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 689394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 689865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 690447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 692102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 692334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 692770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 693316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 694936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 695180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 695669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 696208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 697858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 698096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 698554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 699141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 700782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 701010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 701445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 702076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 703716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 703943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 704370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 704896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 706512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 706738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 707165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 707668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 709268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 709520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 709952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 710450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 710920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 711390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 711869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 712410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 712899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 713367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 713836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 714293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 714761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 715218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 715682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 716181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 716677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 717159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 717782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 718209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 718643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 719062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 719502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 719981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 721793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 722022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 722486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 722979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 724594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 724824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 725271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 725771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 727405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 727641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 728094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 728595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 730207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 730444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 730904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 731410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 733027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 733261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 733726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 734220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 735830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 736078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 736552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 737067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 738899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 739142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 739645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 740140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 741781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 742019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 742487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 744337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 745016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 746654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 747343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 748950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 749459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 751074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 751617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 753228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 753736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 755352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 755865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 757561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 758061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 759723 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:38:44 760232 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-16 23:38:44 761703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 762725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 762959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-16 23:38:44 764646 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-16 23:38:44 765029 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-16 23:38:44 772804 --> Final output sent to browser
DEBUG - 2018-12-16 23:38:44 772911 --> Total execution time: 0.1863
INFO - 2018-12-16 23:38:44 773179 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-16 23:38:44 774085 --> Controller Class Initialized
INFO - 2018-12-16 23:38:44 774715 --> Final output sent to browser
DEBUG - 2018-12-16 23:38:44 774782 --> Total execution time: 0.2182
