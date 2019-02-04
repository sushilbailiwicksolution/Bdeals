<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-01 18:29:28 916568 --> Config Class Initialized
INFO - 2019-01-01 18:29:28 916889 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:28 933773 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:28 933860 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:28 935000 --> URI Class Initialized
DEBUG - 2019-01-01 18:29:28 950834 --> No URI present. Default controller set.
INFO - 2019-01-01 18:29:28 950964 --> Router Class Initialized
INFO - 2019-01-01 18:29:28 965794 --> Output Class Initialized
INFO - 2019-01-01 18:29:29 000065 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:29 018024 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:29 018125 --> Input Class Initialized
INFO - 2019-01-01 18:29:29 018676 --> Language Class Initialized
INFO - 2019-01-01 18:29:29 038773 --> Loader Class Initialized
INFO - 2019-01-01 18:29:29 065063 --> Helper loaded: url_helper
INFO - 2019-01-01 18:29:29 082114 --> Helper loaded: utility_helper
INFO - 2019-01-01 23:59:29 125840 --> Database Driver Class Initialized
INFO - 2019-01-01 23:59:29 218101 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-01 23:59:29 226622 --> Controller Class Initialized
INFO - 2019-01-01 23:59:29 234987 --> Parser Class Initialized
INFO - 2019-01-01 23:59:29 235769 --> Helper loaded: html_helper
INFO - 2019-01-01 23:59:29 243391 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-01 23:59:29 254700 --> Model Class Initialized
DEBUG - 2019-01-01 23:59:29 403048 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-01 23:59:29 408663 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-01'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-01 23:59:29 414421 --> Model Class Initialized
DEBUG - 2019-01-01 23:59:29 416933 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-01 23:59:29 440711 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-01 23:59:29 445035 --> Helper loaded: file_helper
DEBUG - 2019-01-01 23:59:29 445204 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-01 23:59:29 464735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 476412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 500715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 511897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 513398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 513641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 514025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 514595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 516036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 516248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 516635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 517138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 518626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 518840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 519212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 519731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 521234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 521482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 521868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 522376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 523879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 524110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 524513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 525018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 526567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 526789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 527178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 527686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 529247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 529489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 529886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 530402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 532006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 532236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 532653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 533164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 534755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 534979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 535383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 535902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 537501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 537728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 538144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 538665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 540292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 540538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 540962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 541482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 543081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 543307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 543757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 544260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 546277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 546530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 546958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 547487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 549123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 549351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 549799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 550570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 552184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 552418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 552859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 553369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 555039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 555273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 555722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 556241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 557851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 558082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 558537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 559041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 559526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 560003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 560482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 560950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 561423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 561904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 562371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 562849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 563313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 563792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 564256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 564727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 565190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 565673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 566147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 566648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 567074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 567553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 567975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 568409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 568903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 570533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 570763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 571218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 571717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 573353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 573605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 574064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 574558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 576193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 576435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 576898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 577384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 579025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 579261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 579735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 580228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 581897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 582133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 582606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 583091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 584722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 584959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 585432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 587495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 588022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 589705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 590221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 591871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 592384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 594240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 594803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 596409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 596916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 598517 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-01 23:59:29 599014 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-01 23:59:29 606909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 607943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 608172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-01 23:59:29 609788 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-01 23:59:29 610188 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-01 23:59:29 618237 --> Final output sent to browser
DEBUG - 2019-01-01 23:59:29 618318 --> Total execution time: 0.7138
INFO - 2019-01-01 18:29:31 973912 --> Config Class Initialized
INFO - 2019-01-01 18:29:31 974080 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:31 976377 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:31 976568 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:31 977973 --> URI Class Initialized
INFO - 2019-01-01 18:29:31 981219 --> Router Class Initialized
INFO - 2019-01-01 18:29:31 983932 --> Output Class Initialized
INFO - 2019-01-01 18:29:31 985963 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:31 988032 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:31 988151 --> Input Class Initialized
INFO - 2019-01-01 18:29:31 988771 --> Language Class Initialized
INFO - 2019-01-01 18:29:32 006903 --> Loader Class Initialized
INFO - 2019-01-01 18:29:32 008589 --> Helper loaded: url_helper
INFO - 2019-01-01 18:29:32 009459 --> Helper loaded: utility_helper
INFO - 2019-01-01 23:59:32 021365 --> Database Driver Class Initialized
INFO - 2019-01-01 23:59:32 026899 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-01 23:59:32 028450 --> Controller Class Initialized
INFO - 2019-01-01 23:59:32 029406 --> Final output sent to browser
DEBUG - 2019-01-01 23:59:32 029545 --> Total execution time: 0.0581
INFO - 2019-01-01 18:29:32 530427 --> Config Class Initialized
INFO - 2019-01-01 18:29:32 530620 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:32 531893 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:32 531960 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:32 532815 --> URI Class Initialized
INFO - 2019-01-01 18:29:32 535407 --> Router Class Initialized
INFO - 2019-01-01 18:29:32 536865 --> Output Class Initialized
INFO - 2019-01-01 18:29:32 537971 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:32 538949 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:32 539019 --> Input Class Initialized
INFO - 2019-01-01 18:29:32 539334 --> Language Class Initialized
ERROR - 2019-01-01 18:29:32 562048 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:32 599577 --> Config Class Initialized
INFO - 2019-01-01 18:29:32 599767 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:32 601042 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:32 601109 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:32 602013 --> URI Class Initialized
INFO - 2019-01-01 18:29:32 605243 --> Router Class Initialized
INFO - 2019-01-01 18:29:32 606647 --> Output Class Initialized
INFO - 2019-01-01 18:29:32 607723 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:32 608683 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:32 608751 --> Input Class Initialized
INFO - 2019-01-01 18:29:32 609066 --> Language Class Initialized
ERROR - 2019-01-01 18:29:32 609988 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:32 833034 --> Config Class Initialized
INFO - 2019-01-01 18:29:32 833153 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:32 834687 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:32 834781 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:32 835784 --> URI Class Initialized
INFO - 2019-01-01 18:29:32 838148 --> Router Class Initialized
INFO - 2019-01-01 18:29:32 839975 --> Output Class Initialized
INFO - 2019-01-01 18:29:32 841424 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:32 842708 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:32 842808 --> Input Class Initialized
INFO - 2019-01-01 18:29:32 843229 --> Language Class Initialized
ERROR - 2019-01-01 18:29:32 844043 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:32 882231 --> Config Class Initialized
INFO - 2019-01-01 18:29:32 882347 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:32 883933 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:32 884026 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:32 884984 --> URI Class Initialized
INFO - 2019-01-01 18:29:32 887459 --> Router Class Initialized
INFO - 2019-01-01 18:29:32 889293 --> Output Class Initialized
INFO - 2019-01-01 18:29:32 890708 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:32 892049 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:32 892151 --> Input Class Initialized
INFO - 2019-01-01 18:29:32 892590 --> Language Class Initialized
ERROR - 2019-01-01 18:29:32 893290 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:32 952282 --> Config Class Initialized
INFO - 2019-01-01 18:29:32 952415 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:32 953983 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:32 954078 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:32 955693 --> URI Class Initialized
INFO - 2019-01-01 18:29:32 958621 --> Router Class Initialized
INFO - 2019-01-01 18:29:32 961164 --> Output Class Initialized
INFO - 2019-01-01 18:29:32 962994 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:32 965008 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:32 965111 --> Input Class Initialized
INFO - 2019-01-01 18:29:32 965555 --> Language Class Initialized
ERROR - 2019-01-01 18:29:32 966264 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:33 006182 --> Config Class Initialized
INFO - 2019-01-01 18:29:33 006357 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:33 009032 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:33 009182 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:33 010754 --> URI Class Initialized
INFO - 2019-01-01 18:29:33 015120 --> Router Class Initialized
INFO - 2019-01-01 18:29:33 018090 --> Output Class Initialized
INFO - 2019-01-01 18:29:33 021115 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:33 023274 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:33 023427 --> Input Class Initialized
INFO - 2019-01-01 18:29:33 024110 --> Language Class Initialized
ERROR - 2019-01-01 18:29:33 025180 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:33 071629 --> Config Class Initialized
INFO - 2019-01-01 18:29:33 071886 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:33 074606 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:33 074747 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:33 076658 --> URI Class Initialized
INFO - 2019-01-01 18:29:33 083193 --> Router Class Initialized
INFO - 2019-01-01 18:29:33 086620 --> Output Class Initialized
INFO - 2019-01-01 18:29:33 088907 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:33 090962 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:33 091100 --> Input Class Initialized
INFO - 2019-01-01 18:29:33 091734 --> Language Class Initialized
ERROR - 2019-01-01 18:29:33 092724 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:29:34 903359 --> Config Class Initialized
INFO - 2019-01-01 18:29:34 903536 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:34 905668 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:34 905800 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:34 907118 --> URI Class Initialized
INFO - 2019-01-01 18:29:34 910192 --> Router Class Initialized
INFO - 2019-01-01 18:29:34 912570 --> Output Class Initialized
INFO - 2019-01-01 18:29:34 914498 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:34 916325 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:34 916476 --> Input Class Initialized
INFO - 2019-01-01 18:29:34 917057 --> Language Class Initialized
ERROR - 2019-01-01 18:29:34 918000 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-01 18:29:51 297167 --> Config Class Initialized
INFO - 2019-01-01 18:29:51 297521 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:51 299968 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:51 300096 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:51 301700 --> URI Class Initialized
INFO - 2019-01-01 18:29:51 319674 --> Router Class Initialized
INFO - 2019-01-01 18:29:51 323698 --> Output Class Initialized
INFO - 2019-01-01 18:29:51 327493 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:51 329989 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:51 330193 --> Input Class Initialized
INFO - 2019-01-01 18:29:51 331406 --> Language Class Initialized
INFO - 2019-01-01 18:29:51 351722 --> Loader Class Initialized
INFO - 2019-01-01 18:29:51 353615 --> Helper loaded: url_helper
INFO - 2019-01-01 18:29:51 354489 --> Helper loaded: utility_helper
INFO - 2019-01-01 23:59:51 365545 --> Database Driver Class Initialized
INFO - 2019-01-01 23:59:51 375574 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-01 23:59:51 377537 --> Controller Class Initialized
INFO - 2019-01-01 18:29:51 495410 --> Config Class Initialized
INFO - 2019-01-01 18:29:51 495635 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:29:51 498687 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:29:51 498859 --> Utf8 Class Initialized
INFO - 2019-01-01 18:29:51 501492 --> URI Class Initialized
INFO - 2019-01-01 18:29:51 506839 --> Router Class Initialized
INFO - 2019-01-01 18:29:51 509423 --> Output Class Initialized
INFO - 2019-01-01 18:29:51 512856 --> Security Class Initialized
DEBUG - 2019-01-01 18:29:51 516503 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:29:51 516622 --> Input Class Initialized
INFO - 2019-01-01 18:29:51 517057 --> Language Class Initialized
INFO - 2019-01-01 18:29:51 523272 --> Loader Class Initialized
INFO - 2019-01-01 18:29:51 526237 --> Helper loaded: url_helper
INFO - 2019-01-01 18:29:51 527642 --> Helper loaded: utility_helper
INFO - 2019-01-01 23:59:51 542133 --> Database Driver Class Initialized
INFO - 2019-01-01 23:59:51 548152 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-01 23:59:51 549472 --> Controller Class Initialized
DEBUG - 2019-01-01 23:59:51 549603 --> In LOGOUT
INFO - 2019-01-01 18:36:25 759072 --> Config Class Initialized
INFO - 2019-01-01 18:36:25 759264 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:25 760565 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:25 760636 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:25 761430 --> URI Class Initialized
DEBUG - 2019-01-01 18:36:25 762737 --> No URI present. Default controller set.
INFO - 2019-01-01 18:36:25 762810 --> Router Class Initialized
INFO - 2019-01-01 18:36:25 764197 --> Output Class Initialized
INFO - 2019-01-01 18:36:25 765217 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:25 766145 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:25 766216 --> Input Class Initialized
INFO - 2019-01-01 18:36:25 766542 --> Language Class Initialized
INFO - 2019-01-01 18:36:25 768558 --> Loader Class Initialized
INFO - 2019-01-01 18:36:25 769426 --> Helper loaded: url_helper
INFO - 2019-01-01 18:36:25 769869 --> Helper loaded: utility_helper
INFO - 2019-01-01 18:36:26 432209 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 432306 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 433607 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 433684 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 434449 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 436830 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 438186 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 439232 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 440191 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 440268 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 440614 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 441140 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 534697 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 534902 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 536282 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 536356 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 537283 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 539868 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 541378 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 542506 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 543545 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 543636 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 543981 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 544573 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 739677 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 739818 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 741971 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 742082 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 748960 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 749075 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 751077 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 751188 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 752405 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 755486 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 757607 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 761348 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 764123 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 766220 --> Security Class Initialized
INFO - 2019-01-01 18:36:26 767936 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 769881 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 771702 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 771815 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 772367 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 773245 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-01 18:36:26 776750 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 776885 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 777488 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 778420 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 851906 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 852116 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 853692 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 853806 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 854795 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 857322 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 859093 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 860367 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 861330 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 861399 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 861891 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 862062 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 865197 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 865420 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 867158 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 871052 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 872318 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 877005 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 880224 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 882236 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 900541 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 900691 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 901298 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 902328 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 910294 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 910707 --> Hooks Class Initialized
INFO - 2019-01-01 18:36:26 917717 --> Config Class Initialized
INFO - 2019-01-01 18:36:26 918138 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:26 920341 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 920495 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 922338 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 925256 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 928457 --> Output Class Initialized
DEBUG - 2019-01-01 18:36:26 931699 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:26 931833 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:26 933624 --> URI Class Initialized
INFO - 2019-01-01 18:36:26 938971 --> Router Class Initialized
INFO - 2019-01-01 18:36:26 940850 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 942819 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 942948 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 943557 --> Language Class Initialized
INFO - 2019-01-01 18:36:26 951817 --> Output Class Initialized
INFO - 2019-01-01 18:36:26 953830 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:26 956011 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:26 956140 --> Input Class Initialized
INFO - 2019-01-01 18:36:26 956768 --> Language Class Initialized
ERROR - 2019-01-01 18:36:26 957748 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-01 18:36:26 961113 --> Loader Class Initialized
INFO - 2019-01-01 18:36:26 963110 --> Helper loaded: url_helper
INFO - 2019-01-01 18:36:26 964453 --> Helper loaded: utility_helper
INFO - 2019-01-01 18:36:30 897370 --> Config Class Initialized
INFO - 2019-01-01 18:36:30 897589 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:30 902005 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:30 902184 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:30 904839 --> URI Class Initialized
INFO - 2019-01-01 18:36:30 916630 --> Router Class Initialized
INFO - 2019-01-01 18:36:30 922167 --> Output Class Initialized
INFO - 2019-01-01 18:36:30 926367 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:30 930252 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:30 930494 --> Input Class Initialized
INFO - 2019-01-01 18:36:30 931545 --> Language Class Initialized
INFO - 2019-01-01 18:36:30 941442 --> Loader Class Initialized
INFO - 2019-01-01 18:36:30 944438 --> Helper loaded: url_helper
INFO - 2019-01-01 18:36:30 945972 --> Helper loaded: utility_helper
INFO - 2019-01-01 18:36:31 093991 --> Config Class Initialized
INFO - 2019-01-01 18:36:31 094083 --> Hooks Class Initialized
DEBUG - 2019-01-01 18:36:31 095267 --> UTF-8 Support Enabled
INFO - 2019-01-01 18:36:31 095336 --> Utf8 Class Initialized
INFO - 2019-01-01 18:36:31 095995 --> URI Class Initialized
INFO - 2019-01-01 18:36:31 097551 --> Router Class Initialized
INFO - 2019-01-01 18:36:31 098752 --> Output Class Initialized
INFO - 2019-01-01 18:36:31 099982 --> Security Class Initialized
DEBUG - 2019-01-01 18:36:31 101022 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-01 18:36:31 101145 --> Input Class Initialized
INFO - 2019-01-01 18:36:31 101552 --> Language Class Initialized
INFO - 2019-01-01 18:36:31 103322 --> Loader Class Initialized
INFO - 2019-01-01 18:36:31 104167 --> Helper loaded: url_helper
INFO - 2019-01-01 18:36:31 105365 --> Helper loaded: utility_helper
