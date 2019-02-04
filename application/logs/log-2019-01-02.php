<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-02 00:06:25 775234 --> Database Driver Class Initialized
INFO - 2019-01-02 00:06:25 782958 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 00:06:25 784451 --> Controller Class Initialized
INFO - 2019-01-02 00:06:25 785183 --> Parser Class Initialized
INFO - 2019-01-02 00:06:25 786294 --> Helper loaded: html_helper
INFO - 2019-01-02 00:06:25 787422 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-02 00:06:25 790539 --> Model Class Initialized
DEBUG - 2019-01-02 00:06:25 806802 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-02 00:06:25 814657 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-02'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-02 00:06:25 815433 --> Model Class Initialized
DEBUG - 2019-01-02 00:06:25 816219 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-02 00:06:25 819468 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 00:06:25 821538 --> Helper loaded: file_helper
DEBUG - 2019-01-02 00:06:25 821712 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 00:06:25 826062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 827830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 838776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 840954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 843975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 844454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 845189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 846149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 849037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 849466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 850188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 851114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 854053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 854495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 855206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 856098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 859085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 859541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 860280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 861197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 864146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 864612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 865386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 866345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 869477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 869914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 870692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 871591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 874703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 875164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 875958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 876913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 880050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 880506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 881268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 882179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 885318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 885797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 886619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 887495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 890678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 891107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 891921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 892802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 895986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 896425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 897245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 898125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 901284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 901747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 902662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 903630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 906774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 907205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 908050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 908978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 912106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 912563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 913389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 914712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 917880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 918318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 919167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 920089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 923239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 923703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 924571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 925441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 928677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 929124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 929984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 930847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 931673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 932476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 933305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 934289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 935107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 935914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 936846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 937630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 938462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 939243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 940030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 940830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 941617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 942456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 943242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 944196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 945058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 945894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 946731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 947578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 948427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 951725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 952159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 953062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 954021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 957226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 957705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 958615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 959527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 962661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 963103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 964051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 965044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 968240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 968729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 969630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 970520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 973653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 974097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 974997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 975986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 979121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 979597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 980508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 983628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 984545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 987797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 988748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 991864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 992872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 996081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:25 996929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 000065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 000988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 004136 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 00:06:26 005043 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-02 00:06:26 007921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 009880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 010320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 00:06:26 013494 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 00:06:26 014245 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 00:06:26 023139 --> Final output sent to browser
DEBUG - 2019-01-02 00:06:26 023273 --> Total execution time: 0.2575
INFO - 2019-01-02 00:06:26 975807 --> Database Driver Class Initialized
INFO - 2019-01-02 00:06:26 984163 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 00:06:26 985965 --> Controller Class Initialized
INFO - 2019-01-02 00:06:26 987036 --> Final output sent to browser
DEBUG - 2019-01-02 00:06:26 987162 --> Total execution time: 0.0789
INFO - 2019-01-02 00:06:30 964730 --> Database Driver Class Initialized
INFO - 2019-01-02 00:06:30 968339 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 00:06:30 969332 --> Controller Class Initialized
INFO - 2019-01-02 00:06:31 110471 --> Database Driver Class Initialized
INFO - 2019-01-02 00:06:31 116458 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 00:06:31 117165 --> Controller Class Initialized
DEBUG - 2019-01-02 00:06:31 117284 --> In LOGOUT
INFO - 2019-01-02 11:24:10 939120 --> Config Class Initialized
INFO - 2019-01-02 11:24:10 965151 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:10 993767 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:11 000605 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:11 002800 --> URI Class Initialized
DEBUG - 2019-01-02 11:24:11 039601 --> No URI present. Default controller set.
INFO - 2019-01-02 11:24:11 054625 --> Router Class Initialized
INFO - 2019-01-02 11:24:11 084175 --> Output Class Initialized
INFO - 2019-01-02 11:24:11 094393 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:11 127943 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:11 140535 --> Input Class Initialized
INFO - 2019-01-02 11:24:11 141546 --> Language Class Initialized
INFO - 2019-01-02 11:24:11 202960 --> Loader Class Initialized
INFO - 2019-01-02 11:24:11 223382 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:11 234318 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:11 371063 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:11 422801 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:11 437020 --> Controller Class Initialized
INFO - 2019-01-02 16:54:11 441380 --> Parser Class Initialized
INFO - 2019-01-02 16:54:11 449714 --> Helper loaded: html_helper
INFO - 2019-01-02 16:54:11 469652 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-02 16:54:11 482650 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:11 528110 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-02 16:54:11 532555 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-02'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-02 16:54:11 540112 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:11 541292 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-02 16:54:11 583908 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:54:11 601628 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:54:11 611613 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 16:54:11 632761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 640407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 703406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 706780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 709657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 710295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 711271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 712126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 715065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 715569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 716337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 717327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 721478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 721983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 722954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 723787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 727751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 728293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 729090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 730016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 734720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 735316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 736177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 737085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 739192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 739494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 740010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 740819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 742952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 743236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 743778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 744581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 746597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 746880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 749092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 750201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 754486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 754960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 755935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 757014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 761204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 761639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 762218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 762989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 765252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 765604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 766242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 767011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 769217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 769546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 770132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 770872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 773118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 773444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 774030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 774770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 777456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 777779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 778979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 779942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 782654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 783184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 784059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 784833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 787422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 787750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 788480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 789298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 791991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 792511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 793369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 794179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 794872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 795648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 796504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 797298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 798043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 798794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 799483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 800132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 800786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 801445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 802089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 802774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 803567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 804258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 804951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 805695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 806325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 806951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 807560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 808151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 808867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 811322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 811655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 812277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 813002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 815481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 815809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 816447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 817169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 819372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 819700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 820312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 821027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 823362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 823700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 824325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 825067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 827279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 827617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 828239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 828954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 831221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 831562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 832191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 834429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 835195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 837475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 838200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 840656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 841402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 843785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 844538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 847106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 848172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 854044 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:11 855034 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-02 16:54:11 863487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 865257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 865607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:11 868551 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:11 869107 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 16:54:11 878731 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:11 878891 --> Total execution time: 0.9650
INFO - 2019-01-02 11:24:13 798983 --> Config Class Initialized
INFO - 2019-01-02 11:24:13 799139 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:13 801347 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:13 801529 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:13 802856 --> URI Class Initialized
INFO - 2019-01-02 11:24:13 814165 --> Config Class Initialized
INFO - 2019-01-02 11:24:13 817179 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:13 819691 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:13 819819 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:13 821430 --> URI Class Initialized
INFO - 2019-01-02 11:24:13 825992 --> Router Class Initialized
INFO - 2019-01-02 11:24:13 827440 --> Router Class Initialized
INFO - 2019-01-02 11:24:13 829826 --> Output Class Initialized
INFO - 2019-01-02 11:24:13 831733 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:13 833436 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:13 833576 --> Input Class Initialized
INFO - 2019-01-02 11:24:13 834148 --> Language Class Initialized
INFO - 2019-01-02 11:24:13 835968 --> Output Class Initialized
INFO - 2019-01-02 11:24:13 838025 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:13 839888 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:13 840013 --> Input Class Initialized
INFO - 2019-01-02 11:24:13 840629 --> Language Class Initialized
ERROR - 2019-01-02 11:24:13 841609 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-02 11:24:13 842364 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:13 934362 --> Config Class Initialized
INFO - 2019-01-02 11:24:13 934808 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:13 937486 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:13 937617 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:13 939243 --> URI Class Initialized
INFO - 2019-01-02 11:24:13 943880 --> Router Class Initialized
INFO - 2019-01-02 11:24:13 946578 --> Output Class Initialized
INFO - 2019-01-02 11:24:13 948575 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:13 950426 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:13 950562 --> Input Class Initialized
INFO - 2019-01-02 11:24:13 951158 --> Language Class Initialized
ERROR - 2019-01-02 11:24:13 952124 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:13 968259 --> Config Class Initialized
INFO - 2019-01-02 11:24:13 980760 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:13 986742 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:13 986988 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:13 989613 --> URI Class Initialized
INFO - 2019-01-02 11:24:13 991451 --> Config Class Initialized
INFO - 2019-01-02 11:24:13 991784 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:13 994266 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:13 994390 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:13 996015 --> URI Class Initialized
INFO - 2019-01-02 11:24:14 000663 --> Router Class Initialized
INFO - 2019-01-02 11:24:14 004272 --> Router Class Initialized
INFO - 2019-01-02 11:24:14 006982 --> Output Class Initialized
INFO - 2019-01-02 11:24:14 008996 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:14 010838 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:14 010966 --> Input Class Initialized
INFO - 2019-01-02 11:24:14 015641 --> Language Class Initialized
ERROR - 2019-01-02 11:24:14 016665 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:14 021043 --> Output Class Initialized
INFO - 2019-01-02 11:24:14 023087 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:14 024960 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:14 025089 --> Input Class Initialized
INFO - 2019-01-02 11:24:14 025710 --> Language Class Initialized
INFO - 2019-01-02 11:24:14 028676 --> Config Class Initialized
INFO - 2019-01-02 11:24:14 028812 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:14 030901 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:14 031028 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:14 032362 --> URI Class Initialized
INFO - 2019-01-02 11:24:14 035417 --> Router Class Initialized
INFO - 2019-01-02 11:24:14 041151 --> Output Class Initialized
ERROR - 2019-01-02 11:24:14 045077 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:14 052194 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:14 056225 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:14 056355 --> Input Class Initialized
INFO - 2019-01-02 11:24:14 056936 --> Language Class Initialized
ERROR - 2019-01-02 11:24:14 057836 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:14 141278 --> Config Class Initialized
INFO - 2019-01-02 11:24:14 141438 --> Hooks Class Initialized
INFO - 2019-01-02 11:24:14 141737 --> Config Class Initialized
INFO - 2019-01-02 11:24:14 142018 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:14 143541 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:14 143667 --> Utf8 Class Initialized
DEBUG - 2019-01-02 11:24:14 144306 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:14 144428 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:14 146450 --> URI Class Initialized
INFO - 2019-01-02 11:24:14 151287 --> Router Class Initialized
INFO - 2019-01-02 11:24:14 153616 --> Output Class Initialized
INFO - 2019-01-02 11:24:14 155464 --> URI Class Initialized
INFO - 2019-01-02 11:24:14 157838 --> Router Class Initialized
INFO - 2019-01-02 11:24:14 160007 --> Output Class Initialized
INFO - 2019-01-02 11:24:14 161678 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:14 163224 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:14 163345 --> Input Class Initialized
INFO - 2019-01-02 11:24:14 163957 --> Language Class Initialized
INFO - 2019-01-02 11:24:14 164510 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:14 166665 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:14 166784 --> Input Class Initialized
INFO - 2019-01-02 11:24:14 167435 --> Language Class Initialized
ERROR - 2019-01-02 11:24:14 168348 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 11:24:14 255372 --> Loader Class Initialized
INFO - 2019-01-02 11:24:14 257055 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:14 257863 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:14 269412 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:14 282525 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:14 284903 --> Controller Class Initialized
INFO - 2019-01-02 16:54:14 286361 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:14 286554 --> Total execution time: 0.1468
INFO - 2019-01-02 11:24:17 123732 --> Config Class Initialized
INFO - 2019-01-02 11:24:17 123913 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:17 127787 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:17 127999 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:17 130081 --> URI Class Initialized
INFO - 2019-01-02 11:24:17 136200 --> Router Class Initialized
INFO - 2019-01-02 11:24:17 139260 --> Output Class Initialized
INFO - 2019-01-02 11:24:17 141588 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:17 143711 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:17 143852 --> Input Class Initialized
INFO - 2019-01-02 11:24:17 144514 --> Language Class Initialized
ERROR - 2019-01-02 11:24:17 145562 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-02 11:24:32 258898 --> Config Class Initialized
INFO - 2019-01-02 11:24:32 259249 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:32 261532 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:32 261637 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:32 262939 --> URI Class Initialized
INFO - 2019-01-02 11:24:32 266594 --> Router Class Initialized
INFO - 2019-01-02 11:24:32 268738 --> Output Class Initialized
INFO - 2019-01-02 11:24:32 270328 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:32 271833 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:32 271938 --> Input Class Initialized
INFO - 2019-01-02 11:24:32 272444 --> Language Class Initialized
INFO - 2019-01-02 11:24:32 288058 --> Loader Class Initialized
INFO - 2019-01-02 11:24:32 290261 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:32 291249 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:32 301640 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:32 311475 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:32 312946 --> Controller Class Initialized
INFO - 2019-01-02 16:54:32 325841 --> Model Class Initialized
INFO - 2019-01-02 11:24:32 349873 --> Config Class Initialized
INFO - 2019-01-02 11:24:32 350193 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:32 352667 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:32 352796 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:32 354270 --> URI Class Initialized
INFO - 2019-01-02 16:54:32 356323 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:32 356468 --> Total execution time: 0.0993
DEBUG - 2019-01-02 11:24:32 361968 --> No URI present. Default controller set.
INFO - 2019-01-02 11:24:32 362102 --> Router Class Initialized
INFO - 2019-01-02 11:24:32 364768 --> Output Class Initialized
INFO - 2019-01-02 11:24:32 366766 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:32 368697 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:32 368829 --> Input Class Initialized
INFO - 2019-01-02 11:24:32 369432 --> Language Class Initialized
INFO - 2019-01-02 11:24:32 373343 --> Loader Class Initialized
INFO - 2019-01-02 11:24:32 375082 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:32 375984 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:32 386368 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:32 395807 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:32 397036 --> Controller Class Initialized
INFO - 2019-01-02 16:54:32 397648 --> Parser Class Initialized
INFO - 2019-01-02 16:54:32 398566 --> Helper loaded: html_helper
INFO - 2019-01-02 16:54:32 399543 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-02 16:54:32 401981 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 422094 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-02 16:54:32 427932 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-02'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-02 16:54:32 428626 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 429375 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-02 16:54:32 432163 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:54:32 433866 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:54:32 434007 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 16:54:32 437572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 438991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 447602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 449323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 451744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 452091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 452689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 453535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 455777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 456108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 456687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 457469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 459795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 460119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 460697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 461473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 463795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 464137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 464737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 465521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 467813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 468163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 468777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 469568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 471925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 472264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 472876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 473647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 476051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 476389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 477010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 477781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 480216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 480583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 481189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 481956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 484419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 484782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 485394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 486166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 488672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 489018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 489665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 490443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 493031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 493386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 494050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 494829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 497733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 498086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 498771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 499558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 502145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 502525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 503182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 504347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 507110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 507476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 508136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 508920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 511421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 511785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 512465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 513228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 515767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 516114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 516796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 517580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 520062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 520416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 521086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 521848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 522574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 523283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 524004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 524715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 525415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 526123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 526829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 527544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 528239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 528945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 529670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 530360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 531066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 531765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 532483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 533319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 533982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 534651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 535289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 535959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 536698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 539387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 539786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 540518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 541246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 543852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 544213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 544931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 545675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 548907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 549268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 550246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 551354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 555529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 555902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 556627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 557456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 559982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 560343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 561054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 561813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 564301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 564691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 565399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 567909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 568999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 579062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 579926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 582825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 583609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 586143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 586905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 589386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 590152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 592641 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:32 593378 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-02 16:54:32 595771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 597287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 597660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:32 600163 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:32 600805 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 11:24:32 615828 --> Config Class Initialized
INFO - 2019-01-02 11:24:32 615947 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:32 617675 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:32 617791 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:32 619043 --> URI Class Initialized
INFO - 2019-01-02 11:24:32 620934 --> Router Class Initialized
INFO - 2019-01-02 11:24:32 625255 --> Output Class Initialized
INFO - 2019-01-02 11:24:32 632654 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:32 634218 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:32 634440 --> Input Class Initialized
INFO - 2019-01-02 11:24:32 635150 --> Language Class Initialized
INFO - 2019-01-02 11:24:32 652142 --> Loader Class Initialized
INFO - 2019-01-02 11:24:32 653485 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:32 654026 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:32 668144 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:32 704919 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:32 705039 --> Total execution time: 0.2541
INFO - 2019-01-02 16:54:32 710558 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:32 712032 --> Controller Class Initialized
INFO - 2019-01-02 16:54:32 712786 --> Parser Class Initialized
INFO - 2019-01-02 16:54:32 713938 --> Helper loaded: html_helper
INFO - 2019-01-02 16:54:32 726480 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 729263 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'gaurav@gmail.com']
INFO - 2019-01-02 16:54:32 736270 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 740411 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'gaurav@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2019-01-02 16:54:32 746232 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 751744 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `num_business_viewed`, `add_to_favorite`, `business_add_date`
FROM `bd_business_details`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
DEBUG - 2019-01-02 16:54:32 766000 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`name`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `buy_invest_in`, `num_business_viewed`, `added_date`
FROM `bd_business_details`
LEFT JOIN `bd_buy_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
INFO - 2019-01-02 16:54:32 774267 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 776825 --> Last query to getBuyContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-02 16:54:32 777825 --> Last query to getAllContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-02 16:54:32 779768 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-02 16:54:32 781088 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-02 16:54:32 786345 --> Last query to getContact33333  [SELECT *
FROM `bd_property_view_user`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_view_user`.`viewed_form_id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `viewed_user_id` = 'gaurav@gmail.com']
DEBUG - 2019-01-02 16:54:32 789146 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `like_user_id` = 'gaurav@gmail.com']
DEBUG - 2019-01-02 16:54:32 791131 --> Last query to getFhhhhhavCou88888ntAll  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com']
DEBUG - 2019-01-02 16:54:32 792372 --> Last query to getContact33333  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `customer_id` = 'gaurav@gmail.com']
DEBUG - 2019-01-02 16:54:32 793692 --> Last query to getFavCountBuy  [SELECT COUNT(*) AS `numrows`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'gaurav@gmail.com'
AND `business_type` = 'buy_a_business'
AND `add_to_favorite` = '1']
INFO - 2019-01-02 16:54:32 797843 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:32 801740 --> listing_model: RecommendedBusinessList: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `listing_category` = '']
DEBUG - 2019-01-02 16:54:32 808545 --> listing_model: RecommendedBusinessList111: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
WHERE `listing_category` = '']
DEBUG - 2019-01-02 16:54:32 810278 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '310']
DEBUG - 2019-01-02 16:54:32 813065 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '310']
DEBUG - 2019-01-02 16:54:32 815988 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '309']
DEBUG - 2019-01-02 16:54:32 818437 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '309']
DEBUG - 2019-01-02 16:54:32 821846 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '308']
DEBUG - 2019-01-02 16:54:32 823401 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '308']
DEBUG - 2019-01-02 16:54:32 826004 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '307']
DEBUG - 2019-01-02 16:54:32 827656 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '307']
DEBUG - 2019-01-02 16:54:32 829380 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '306']
DEBUG - 2019-01-02 16:54:32 831870 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '306']
DEBUG - 2019-01-02 16:54:32 833852 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '305']
DEBUG - 2019-01-02 16:54:32 835311 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '305']
DEBUG - 2019-01-02 16:54:32 837443 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '304']
DEBUG - 2019-01-02 16:54:32 839147 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '304']
DEBUG - 2019-01-02 16:54:32 840789 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '303']
DEBUG - 2019-01-02 16:54:32 842266 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '303']
DEBUG - 2019-01-02 16:54:32 843934 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '302']
DEBUG - 2019-01-02 16:54:32 845849 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '302']
DEBUG - 2019-01-02 16:54:32 847651 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '301']
DEBUG - 2019-01-02 16:54:32 849272 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '301']
DEBUG - 2019-01-02 16:54:32 851382 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '300']
DEBUG - 2019-01-02 16:54:32 852938 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '300']
DEBUG - 2019-01-02 16:54:32 854907 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '299']
DEBUG - 2019-01-02 16:54:32 856589 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '299']
DEBUG - 2019-01-02 16:54:32 858299 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '298']
DEBUG - 2019-01-02 16:54:32 860255 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '298']
DEBUG - 2019-01-02 16:54:32 861987 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '297']
DEBUG - 2019-01-02 16:54:32 863957 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '297']
DEBUG - 2019-01-02 16:54:32 865803 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '296']
DEBUG - 2019-01-02 16:54:32 867305 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '296']
DEBUG - 2019-01-02 16:54:32 869040 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '295']
DEBUG - 2019-01-02 16:54:32 871124 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '295']
DEBUG - 2019-01-02 16:54:32 873236 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '294']
DEBUG - 2019-01-02 16:54:32 875061 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '294']
DEBUG - 2019-01-02 16:54:32 876967 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '293']
DEBUG - 2019-01-02 16:54:32 878693 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '293']
DEBUG - 2019-01-02 16:54:32 880348 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '292']
DEBUG - 2019-01-02 16:54:32 882530 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '292']
DEBUG - 2019-01-02 16:54:32 884253 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '291']
DEBUG - 2019-01-02 16:54:32 885904 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '291']
DEBUG - 2019-01-02 16:54:32 887475 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '290']
DEBUG - 2019-01-02 16:54:32 889156 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '290']
DEBUG - 2019-01-02 16:54:32 890983 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '289']
DEBUG - 2019-01-02 16:54:32 892950 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '289']
DEBUG - 2019-01-02 16:54:32 894813 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '288']
DEBUG - 2019-01-02 16:54:32 896528 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '288']
DEBUG - 2019-01-02 16:54:32 898334 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '287']
DEBUG - 2019-01-02 16:54:32 900410 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '287']
DEBUG - 2019-01-02 16:54:32 902138 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '286']
DEBUG - 2019-01-02 16:54:32 903487 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '286']
DEBUG - 2019-01-02 16:54:32 905226 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '285']
DEBUG - 2019-01-02 16:54:32 906971 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '285']
DEBUG - 2019-01-02 16:54:32 908555 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '284']
DEBUG - 2019-01-02 16:54:32 910072 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '284']
DEBUG - 2019-01-02 16:54:32 913083 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '283']
DEBUG - 2019-01-02 16:54:32 916001 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '283']
DEBUG - 2019-01-02 16:54:32 918401 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '282']
DEBUG - 2019-01-02 16:54:32 919847 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '282']
DEBUG - 2019-01-02 16:54:32 921521 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '280']
DEBUG - 2019-01-02 16:54:32 924043 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '280']
DEBUG - 2019-01-02 16:54:32 926254 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '279']
DEBUG - 2019-01-02 16:54:32 928200 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '279']
DEBUG - 2019-01-02 16:54:32 930708 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '278']
DEBUG - 2019-01-02 16:54:32 932514 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '278']
DEBUG - 2019-01-02 16:54:32 934236 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '277']
DEBUG - 2019-01-02 16:54:32 936765 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '277']
DEBUG - 2019-01-02 16:54:32 938795 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '276']
DEBUG - 2019-01-02 16:54:32 940639 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '276']
DEBUG - 2019-01-02 16:54:32 942343 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '275']
DEBUG - 2019-01-02 16:54:32 943851 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '275']
DEBUG - 2019-01-02 16:54:32 945847 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '274']
DEBUG - 2019-01-02 16:54:32 947257 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '274']
DEBUG - 2019-01-02 16:54:32 948791 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '273']
DEBUG - 2019-01-02 16:54:32 950608 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '273']
DEBUG - 2019-01-02 16:54:32 953182 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '271']
DEBUG - 2019-01-02 16:54:32 955321 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '271']
DEBUG - 2019-01-02 16:54:32 957705 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '264']
DEBUG - 2019-01-02 16:54:32 959883 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '264']
DEBUG - 2019-01-02 16:54:32 962502 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '263']
DEBUG - 2019-01-02 16:54:32 964173 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '263']
DEBUG - 2019-01-02 16:54:32 967363 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '262']
DEBUG - 2019-01-02 16:54:32 969193 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '262']
DEBUG - 2019-01-02 16:54:32 970789 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '261']
DEBUG - 2019-01-02 16:54:32 972982 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '261']
DEBUG - 2019-01-02 16:54:32 975884 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '260']
DEBUG - 2019-01-02 16:54:32 977971 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '260']
DEBUG - 2019-01-02 16:54:32 980267 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '259']
DEBUG - 2019-01-02 16:54:32 982471 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '259']
DEBUG - 2019-01-02 16:54:32 984703 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '258']
DEBUG - 2019-01-02 16:54:32 987029 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '258']
DEBUG - 2019-01-02 16:54:32 988723 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '257']
DEBUG - 2019-01-02 16:54:32 990243 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '257']
DEBUG - 2019-01-02 16:54:32 991883 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '256']
DEBUG - 2019-01-02 16:54:32 993865 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '256']
DEBUG - 2019-01-02 16:54:32 995894 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '255']
DEBUG - 2019-01-02 16:54:32 997585 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '255']
DEBUG - 2019-01-02 16:54:32 999753 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '254']
DEBUG - 2019-01-02 16:54:33 001682 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '254']
DEBUG - 2019-01-02 16:54:33 004009 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '253']
DEBUG - 2019-01-02 16:54:33 006052 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '253']
DEBUG - 2019-01-02 16:54:33 008544 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '252']
DEBUG - 2019-01-02 16:54:33 011054 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '252']
DEBUG - 2019-01-02 16:54:33 013509 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '251']
DEBUG - 2019-01-02 16:54:33 015764 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '251']
DEBUG - 2019-01-02 16:54:33 017607 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '250']
DEBUG - 2019-01-02 16:54:33 019860 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '250']
DEBUG - 2019-01-02 16:54:33 022953 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '249']
DEBUG - 2019-01-02 16:54:33 024669 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '249']
DEBUG - 2019-01-02 16:54:33 028481 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '248']
DEBUG - 2019-01-02 16:54:33 030127 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '248']
DEBUG - 2019-01-02 16:54:33 031850 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '247']
DEBUG - 2019-01-02 16:54:33 033282 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '247']
DEBUG - 2019-01-02 16:54:33 034779 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '246']
DEBUG - 2019-01-02 16:54:33 036503 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '246']
DEBUG - 2019-01-02 16:54:33 038142 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '245']
DEBUG - 2019-01-02 16:54:33 040354 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '245']
DEBUG - 2019-01-02 16:54:33 042210 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '244']
DEBUG - 2019-01-02 16:54:33 044096 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '244']
DEBUG - 2019-01-02 16:54:33 045758 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '243']
DEBUG - 2019-01-02 16:54:33 047192 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '243']
DEBUG - 2019-01-02 16:54:33 048531 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '242']
DEBUG - 2019-01-02 16:54:33 049770 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '242']
DEBUG - 2019-01-02 16:54:33 051702 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '241']
DEBUG - 2019-01-02 16:54:33 053637 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '241']
DEBUG - 2019-01-02 16:54:33 055326 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '240']
DEBUG - 2019-01-02 16:54:33 057177 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '240']
DEBUG - 2019-01-02 16:54:33 059195 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '239']
DEBUG - 2019-01-02 16:54:33 061276 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '239']
DEBUG - 2019-01-02 16:54:33 063239 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '238']
DEBUG - 2019-01-02 16:54:33 065109 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '238']
DEBUG - 2019-01-02 16:54:33 067343 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '237']
DEBUG - 2019-01-02 16:54:33 069247 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '237']
DEBUG - 2019-01-02 16:54:33 071330 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '236']
DEBUG - 2019-01-02 16:54:33 073342 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '236']
DEBUG - 2019-01-02 16:54:33 075534 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '235']
DEBUG - 2019-01-02 16:54:33 077454 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '235']
DEBUG - 2019-01-02 16:54:33 079045 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '234']
DEBUG - 2019-01-02 16:54:33 080554 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '234']
DEBUG - 2019-01-02 16:54:33 082911 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '233']
DEBUG - 2019-01-02 16:54:33 085231 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '233']
DEBUG - 2019-01-02 16:54:33 087120 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '232']
DEBUG - 2019-01-02 16:54:33 089262 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '232']
DEBUG - 2019-01-02 16:54:33 091214 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '231']
DEBUG - 2019-01-02 16:54:33 093214 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '231']
DEBUG - 2019-01-02 16:54:33 094650 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '230']
DEBUG - 2019-01-02 16:54:33 095886 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '230']
DEBUG - 2019-01-02 16:54:33 098124 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '229']
DEBUG - 2019-01-02 16:54:33 100035 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '229']
DEBUG - 2019-01-02 16:54:33 102214 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '228']
DEBUG - 2019-01-02 16:54:33 104111 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '228']
DEBUG - 2019-01-02 16:54:33 105731 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '227']
DEBUG - 2019-01-02 16:54:33 107234 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '227']
DEBUG - 2019-01-02 16:54:33 109038 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '226']
DEBUG - 2019-01-02 16:54:33 110533 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '226']
DEBUG - 2019-01-02 16:54:33 112323 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '222']
DEBUG - 2019-01-02 16:54:33 113802 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '222']
DEBUG - 2019-01-02 16:54:33 115537 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '220']
DEBUG - 2019-01-02 16:54:33 116998 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '220']
DEBUG - 2019-01-02 16:54:33 118668 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '217']
DEBUG - 2019-01-02 16:54:33 120301 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '217']
DEBUG - 2019-01-02 16:54:33 121927 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '216']
DEBUG - 2019-01-02 16:54:33 123512 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '216']
DEBUG - 2019-01-02 16:54:33 125613 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '215']
DEBUG - 2019-01-02 16:54:33 127981 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '215']
DEBUG - 2019-01-02 16:54:33 129677 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '200']
DEBUG - 2019-01-02 16:54:33 131378 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '200']
DEBUG - 2019-01-02 16:54:33 133179 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '199']
DEBUG - 2019-01-02 16:54:33 134870 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '199']
DEBUG - 2019-01-02 16:54:33 137101 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '198']
DEBUG - 2019-01-02 16:54:33 138792 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '198']
DEBUG - 2019-01-02 16:54:33 140603 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '197']
DEBUG - 2019-01-02 16:54:33 142396 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '197']
DEBUG - 2019-01-02 16:54:33 144258 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '190']
DEBUG - 2019-01-02 16:54:33 145924 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '190']
DEBUG - 2019-01-02 16:54:33 147752 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '189']
DEBUG - 2019-01-02 16:54:33 149801 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '189']
DEBUG - 2019-01-02 16:54:33 151684 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '188']
DEBUG - 2019-01-02 16:54:33 152955 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '188']
DEBUG - 2019-01-02 16:54:33 154536 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '184']
DEBUG - 2019-01-02 16:54:33 156080 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '184']
DEBUG - 2019-01-02 16:54:33 157602 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '183']
DEBUG - 2019-01-02 16:54:33 159149 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '183']
DEBUG - 2019-01-02 16:54:33 160835 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '182']
DEBUG - 2019-01-02 16:54:33 162848 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '182']
DEBUG - 2019-01-02 16:54:33 164211 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '181']
DEBUG - 2019-01-02 16:54:33 165481 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '181']
DEBUG - 2019-01-02 16:54:33 166847 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '177']
DEBUG - 2019-01-02 16:54:33 168236 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '177']
DEBUG - 2019-01-02 16:54:33 169574 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '176']
DEBUG - 2019-01-02 16:54:33 170828 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '176']
DEBUG - 2019-01-02 16:54:33 172502 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '175']
DEBUG - 2019-01-02 16:54:33 174129 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '175']
DEBUG - 2019-01-02 16:54:33 175499 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '174']
DEBUG - 2019-01-02 16:54:33 176768 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '174']
DEBUG - 2019-01-02 16:54:33 178148 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '173']
DEBUG - 2019-01-02 16:54:33 179392 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '173']
DEBUG - 2019-01-02 16:54:33 181232 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '172']
DEBUG - 2019-01-02 16:54:33 183681 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '172']
DEBUG - 2019-01-02 16:54:33 185060 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '171']
DEBUG - 2019-01-02 16:54:33 186331 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '171']
DEBUG - 2019-01-02 16:54:33 187707 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '170']
DEBUG - 2019-01-02 16:54:33 188970 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '170']
DEBUG - 2019-01-02 16:54:33 190361 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '169']
DEBUG - 2019-01-02 16:54:33 191670 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '169']
DEBUG - 2019-01-02 16:54:33 193030 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '168']
DEBUG - 2019-01-02 16:54:33 194396 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '168']
DEBUG - 2019-01-02 16:54:33 196417 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '167']
DEBUG - 2019-01-02 16:54:33 197712 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '167']
DEBUG - 2019-01-02 16:54:33 199069 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '166']
DEBUG - 2019-01-02 16:54:33 200331 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '166']
DEBUG - 2019-01-02 16:54:33 201683 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '165']
DEBUG - 2019-01-02 16:54:33 202965 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '165']
DEBUG - 2019-01-02 16:54:33 204319 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '164']
DEBUG - 2019-01-02 16:54:33 205591 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '164']
DEBUG - 2019-01-02 16:54:33 207133 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '163']
DEBUG - 2019-01-02 16:54:33 208410 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '163']
DEBUG - 2019-01-02 16:54:33 209799 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '162']
DEBUG - 2019-01-02 16:54:33 211055 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '162']
DEBUG - 2019-01-02 16:54:33 212380 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '161']
DEBUG - 2019-01-02 16:54:33 214006 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '161']
DEBUG - 2019-01-02 16:54:33 216037 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '160']
DEBUG - 2019-01-02 16:54:33 217319 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '160']
DEBUG - 2019-01-02 16:54:33 218696 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '159']
DEBUG - 2019-01-02 16:54:33 219954 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '159']
DEBUG - 2019-01-02 16:54:33 221306 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '158']
DEBUG - 2019-01-02 16:54:33 222592 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '158']
DEBUG - 2019-01-02 16:54:33 224078 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '157']
DEBUG - 2019-01-02 16:54:33 225438 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '157']
DEBUG - 2019-01-02 16:54:33 226851 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '156']
DEBUG - 2019-01-02 16:54:33 228148 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '156']
DEBUG - 2019-01-02 16:54:33 229542 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '155']
DEBUG - 2019-01-02 16:54:33 230887 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '155']
DEBUG - 2019-01-02 16:54:33 232330 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '154']
DEBUG - 2019-01-02 16:54:33 233731 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '154']
DEBUG - 2019-01-02 16:54:33 235115 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '153']
DEBUG - 2019-01-02 16:54:33 236370 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '153']
DEBUG - 2019-01-02 16:54:33 237725 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '152']
DEBUG - 2019-01-02 16:54:33 239121 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '152']
DEBUG - 2019-01-02 16:54:33 240595 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '151']
DEBUG - 2019-01-02 16:54:33 242243 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '151']
DEBUG - 2019-01-02 16:54:33 243752 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '150']
DEBUG - 2019-01-02 16:54:33 245307 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '150']
DEBUG - 2019-01-02 16:54:33 246768 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '149']
DEBUG - 2019-01-02 16:54:33 248532 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '149']
DEBUG - 2019-01-02 16:54:33 249912 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '148']
DEBUG - 2019-01-02 16:54:33 251332 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '148']
DEBUG - 2019-01-02 16:54:33 252814 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '147']
DEBUG - 2019-01-02 16:54:33 254048 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '147']
DEBUG - 2019-01-02 16:54:33 255311 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '146']
DEBUG - 2019-01-02 16:54:33 256567 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '146']
DEBUG - 2019-01-02 16:54:33 257862 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '145']
DEBUG - 2019-01-02 16:54:33 259212 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '145']
DEBUG - 2019-01-02 16:54:33 260514 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '144']
DEBUG - 2019-01-02 16:54:33 261982 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '144']
DEBUG - 2019-01-02 16:54:33 264302 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '143']
DEBUG - 2019-01-02 16:54:33 266110 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '143']
DEBUG - 2019-01-02 16:54:33 268541 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '142']
DEBUG - 2019-01-02 16:54:33 269998 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '142']
DEBUG - 2019-01-02 16:54:33 271528 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '141']
DEBUG - 2019-01-02 16:54:33 272708 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '141']
DEBUG - 2019-01-02 16:54:33 273967 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '140']
DEBUG - 2019-01-02 16:54:33 275202 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '140']
DEBUG - 2019-01-02 16:54:33 276458 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '139']
DEBUG - 2019-01-02 16:54:33 279457 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '139']
DEBUG - 2019-01-02 16:54:33 280996 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '138']
DEBUG - 2019-01-02 16:54:33 285398 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '138']
DEBUG - 2019-01-02 16:54:33 286729 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '137']
DEBUG - 2019-01-02 16:54:33 287950 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '137']
DEBUG - 2019-01-02 16:54:33 289232 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '136']
DEBUG - 2019-01-02 16:54:33 290416 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '136']
DEBUG - 2019-01-02 16:54:33 291716 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '135']
DEBUG - 2019-01-02 16:54:33 292907 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '135']
DEBUG - 2019-01-02 16:54:33 294184 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '134']
DEBUG - 2019-01-02 16:54:33 295372 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '134']
DEBUG - 2019-01-02 16:54:33 296659 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '133']
DEBUG - 2019-01-02 16:54:33 297863 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '133']
DEBUG - 2019-01-02 16:54:33 299130 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '132']
DEBUG - 2019-01-02 16:54:33 300318 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '132']
DEBUG - 2019-01-02 16:54:33 301625 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '131']
DEBUG - 2019-01-02 16:54:33 302869 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '131']
DEBUG - 2019-01-02 16:54:33 304879 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '130']
DEBUG - 2019-01-02 16:54:33 306124 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '130']
DEBUG - 2019-01-02 16:54:33 307604 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '129']
DEBUG - 2019-01-02 16:54:33 308806 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '129']
DEBUG - 2019-01-02 16:54:33 310096 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '128']
DEBUG - 2019-01-02 16:54:33 311284 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '128']
DEBUG - 2019-01-02 16:54:33 312577 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '127']
DEBUG - 2019-01-02 16:54:33 313776 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '127']
DEBUG - 2019-01-02 16:54:33 315066 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '126']
DEBUG - 2019-01-02 16:54:33 316576 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '126']
DEBUG - 2019-01-02 16:54:33 318075 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '125']
DEBUG - 2019-01-02 16:54:33 319345 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '125']
DEBUG - 2019-01-02 16:54:33 320640 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '124']
DEBUG - 2019-01-02 16:54:33 322999 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '124']
DEBUG - 2019-01-02 16:54:33 324311 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '123']
DEBUG - 2019-01-02 16:54:33 325661 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '123']
DEBUG - 2019-01-02 16:54:33 328535 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '122']
DEBUG - 2019-01-02 16:54:33 329754 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '122']
DEBUG - 2019-01-02 16:54:33 331197 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '121']
DEBUG - 2019-01-02 16:54:33 332395 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '121']
DEBUG - 2019-01-02 16:54:33 333802 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '120']
DEBUG - 2019-01-02 16:54:33 335314 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '120']
DEBUG - 2019-01-02 16:54:33 336850 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '119']
DEBUG - 2019-01-02 16:54:33 338295 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '119']
DEBUG - 2019-01-02 16:54:33 339920 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '118']
DEBUG - 2019-01-02 16:54:33 341325 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '118']
DEBUG - 2019-01-02 16:54:33 342909 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '117']
DEBUG - 2019-01-02 16:54:33 344404 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '117']
DEBUG - 2019-01-02 16:54:33 345704 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '116']
DEBUG - 2019-01-02 16:54:33 347065 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '116']
DEBUG - 2019-01-02 16:54:33 348337 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '115']
DEBUG - 2019-01-02 16:54:33 349543 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '115']
DEBUG - 2019-01-02 16:54:33 350811 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '114']
DEBUG - 2019-01-02 16:54:33 352014 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '114']
DEBUG - 2019-01-02 16:54:33 353282 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '113']
DEBUG - 2019-01-02 16:54:33 354811 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '113']
DEBUG - 2019-01-02 16:54:33 356398 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '112']
DEBUG - 2019-01-02 16:54:33 357621 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '112']
DEBUG - 2019-01-02 16:54:33 358891 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '111']
DEBUG - 2019-01-02 16:54:33 360083 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '111']
DEBUG - 2019-01-02 16:54:33 361370 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '110']
DEBUG - 2019-01-02 16:54:33 362565 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '110']
DEBUG - 2019-01-02 16:54:33 363823 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '109']
DEBUG - 2019-01-02 16:54:33 365014 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '109']
DEBUG - 2019-01-02 16:54:33 366300 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '108']
DEBUG - 2019-01-02 16:54:33 367496 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '108']
DEBUG - 2019-01-02 16:54:33 368911 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '107']
DEBUG - 2019-01-02 16:54:33 370100 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '107']
DEBUG - 2019-01-02 16:54:33 371834 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '106']
DEBUG - 2019-01-02 16:54:33 373287 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '106']
DEBUG - 2019-01-02 16:54:33 374752 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '105']
DEBUG - 2019-01-02 16:54:33 376008 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '105']
DEBUG - 2019-01-02 16:54:33 377283 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '104']
DEBUG - 2019-01-02 16:54:33 378626 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '104']
DEBUG - 2019-01-02 16:54:33 379920 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '103']
DEBUG - 2019-01-02 16:54:33 381124 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '103']
DEBUG - 2019-01-02 16:54:33 382395 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '102']
DEBUG - 2019-01-02 16:54:33 383589 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '102']
DEBUG - 2019-01-02 16:54:33 384881 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '101']
DEBUG - 2019-01-02 16:54:33 386085 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '101']
DEBUG - 2019-01-02 16:54:33 387351 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '100']
DEBUG - 2019-01-02 16:54:33 388581 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '100']
DEBUG - 2019-01-02 16:54:33 389847 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '99']
DEBUG - 2019-01-02 16:54:33 391176 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '99']
DEBUG - 2019-01-02 16:54:33 393302 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '98']
DEBUG - 2019-01-02 16:54:33 394541 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '98']
DEBUG - 2019-01-02 16:54:33 395992 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '97']
DEBUG - 2019-01-02 16:54:33 397830 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '97']
DEBUG - 2019-01-02 16:54:33 399153 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '96']
DEBUG - 2019-01-02 16:54:33 400377 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '96']
DEBUG - 2019-01-02 16:54:33 401699 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '95']
DEBUG - 2019-01-02 16:54:33 403002 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '95']
DEBUG - 2019-01-02 16:54:33 404454 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '94']
DEBUG - 2019-01-02 16:54:33 405698 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '94']
DEBUG - 2019-01-02 16:54:33 407875 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '93']
DEBUG - 2019-01-02 16:54:33 409136 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '93']
DEBUG - 2019-01-02 16:54:33 410459 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '92']
DEBUG - 2019-01-02 16:54:33 411731 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '92']
DEBUG - 2019-01-02 16:54:33 413053 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '88']
DEBUG - 2019-01-02 16:54:33 414293 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '88']
DEBUG - 2019-01-02 16:54:33 415620 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '87']
DEBUG - 2019-01-02 16:54:33 416845 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '87']
DEBUG - 2019-01-02 16:54:33 418212 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '86']
DEBUG - 2019-01-02 16:54:33 419450 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '86']
DEBUG - 2019-01-02 16:54:33 420804 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '85']
DEBUG - 2019-01-02 16:54:33 422105 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '85']
DEBUG - 2019-01-02 16:54:33 423451 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '84']
DEBUG - 2019-01-02 16:54:33 424735 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '84']
DEBUG - 2019-01-02 16:54:33 426048 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '83']
DEBUG - 2019-01-02 16:54:33 427277 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '83']
DEBUG - 2019-01-02 16:54:33 428597 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '82']
DEBUG - 2019-01-02 16:54:33 429825 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '82']
DEBUG - 2019-01-02 16:54:33 431178 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '81']
DEBUG - 2019-01-02 16:54:33 432405 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '81']
DEBUG - 2019-01-02 16:54:33 433882 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '78']
DEBUG - 2019-01-02 16:54:33 435372 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '78']
DEBUG - 2019-01-02 16:54:33 437056 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '77']
DEBUG - 2019-01-02 16:54:33 438319 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '77']
DEBUG - 2019-01-02 16:54:33 440368 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '76']
DEBUG - 2019-01-02 16:54:33 441919 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '76']
DEBUG - 2019-01-02 16:54:33 443285 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '75']
DEBUG - 2019-01-02 16:54:33 444930 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '75']
DEBUG - 2019-01-02 16:54:33 446402 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '74']
DEBUG - 2019-01-02 16:54:33 447652 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '74']
DEBUG - 2019-01-02 16:54:33 448971 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '69']
DEBUG - 2019-01-02 16:54:33 450165 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '69']
DEBUG - 2019-01-02 16:54:33 451407 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '67']
DEBUG - 2019-01-02 16:54:33 452750 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '67']
DEBUG - 2019-01-02 16:54:33 454021 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '66']
DEBUG - 2019-01-02 16:54:33 455220 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '66']
DEBUG - 2019-01-02 16:54:33 456496 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '65']
DEBUG - 2019-01-02 16:54:33 457676 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '65']
DEBUG - 2019-01-02 16:54:33 458942 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '64']
DEBUG - 2019-01-02 16:54:33 460125 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '64']
DEBUG - 2019-01-02 16:54:33 461380 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '57']
DEBUG - 2019-01-02 16:54:33 462579 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '57']
DEBUG - 2019-01-02 16:54:33 464059 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '56']
DEBUG - 2019-01-02 16:54:33 465239 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '56']
DEBUG - 2019-01-02 16:54:33 466505 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '55']
DEBUG - 2019-01-02 16:54:33 467679 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '55']
DEBUG - 2019-01-02 16:54:33 468951 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '54']
DEBUG - 2019-01-02 16:54:33 470143 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '54']
DEBUG - 2019-01-02 16:54:33 471405 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '53']
DEBUG - 2019-01-02 16:54:33 472609 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '53']
DEBUG - 2019-01-02 16:54:33 474208 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '52']
DEBUG - 2019-01-02 16:54:33 475713 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '52']
DEBUG - 2019-01-02 16:54:33 477241 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '51']
DEBUG - 2019-01-02 16:54:33 478696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '51']
DEBUG - 2019-01-02 16:54:33 480467 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '50']
DEBUG - 2019-01-02 16:54:33 481947 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '50']
DEBUG - 2019-01-02 16:54:33 483530 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '49']
DEBUG - 2019-01-02 16:54:33 485063 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '49']
DEBUG - 2019-01-02 16:54:33 486732 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '48']
DEBUG - 2019-01-02 16:54:33 488224 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '48']
DEBUG - 2019-01-02 16:54:33 489803 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '47']
DEBUG - 2019-01-02 16:54:33 491280 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '47']
DEBUG - 2019-01-02 16:54:33 492887 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '46']
DEBUG - 2019-01-02 16:54:33 494318 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '46']
DEBUG - 2019-01-02 16:54:33 496069 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '45']
DEBUG - 2019-01-02 16:54:33 497519 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '45']
DEBUG - 2019-01-02 16:54:33 499242 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '44']
DEBUG - 2019-01-02 16:54:33 501065 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '44']
DEBUG - 2019-01-02 16:54:33 502660 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '43']
DEBUG - 2019-01-02 16:54:33 504215 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '43']
DEBUG - 2019-01-02 16:54:33 505719 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '42']
DEBUG - 2019-01-02 16:54:33 507383 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '42']
DEBUG - 2019-01-02 16:54:33 509013 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '41']
DEBUG - 2019-01-02 16:54:33 510514 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '41']
DEBUG - 2019-01-02 16:54:33 512121 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '40']
DEBUG - 2019-01-02 16:54:33 513699 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '40']
DEBUG - 2019-01-02 16:54:33 516611 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '39']
DEBUG - 2019-01-02 16:54:33 518395 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '39']
DEBUG - 2019-01-02 16:54:33 520098 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '38']
DEBUG - 2019-01-02 16:54:33 521512 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '38']
DEBUG - 2019-01-02 16:54:33 523061 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '37']
DEBUG - 2019-01-02 16:54:33 524671 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '37']
DEBUG - 2019-01-02 16:54:33 526191 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '36']
DEBUG - 2019-01-02 16:54:33 527558 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '36']
DEBUG - 2019-01-02 16:54:33 529262 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '35']
DEBUG - 2019-01-02 16:54:33 530626 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '35']
DEBUG - 2019-01-02 16:54:33 532566 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '34']
DEBUG - 2019-01-02 16:54:33 534029 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '34']
DEBUG - 2019-01-02 16:54:33 535586 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '33']
DEBUG - 2019-01-02 16:54:33 537297 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '33']
DEBUG - 2019-01-02 16:54:33 538892 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '32']
DEBUG - 2019-01-02 16:54:33 540532 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '32']
DEBUG - 2019-01-02 16:54:33 542138 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '31']
DEBUG - 2019-01-02 16:54:33 543754 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '31']
DEBUG - 2019-01-02 16:54:33 545500 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '30']
DEBUG - 2019-01-02 16:54:33 547327 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '30']
DEBUG - 2019-01-02 16:54:33 548866 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '29']
DEBUG - 2019-01-02 16:54:33 550597 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '29']
DEBUG - 2019-01-02 16:54:33 552285 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '28']
DEBUG - 2019-01-02 16:54:33 553739 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '28']
DEBUG - 2019-01-02 16:54:33 555313 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '27']
DEBUG - 2019-01-02 16:54:33 557262 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '27']
DEBUG - 2019-01-02 16:54:33 559087 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '26']
DEBUG - 2019-01-02 16:54:33 560549 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '26']
DEBUG - 2019-01-02 16:54:33 562261 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '25']
DEBUG - 2019-01-02 16:54:33 563895 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '25']
DEBUG - 2019-01-02 16:54:33 565471 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '24']
DEBUG - 2019-01-02 16:54:33 566836 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '24']
DEBUG - 2019-01-02 16:54:33 568361 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '23']
DEBUG - 2019-01-02 16:54:33 569940 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '23']
DEBUG - 2019-01-02 16:54:33 571636 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '22']
DEBUG - 2019-01-02 16:54:33 573018 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '22']
DEBUG - 2019-01-02 16:54:33 574798 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '21']
DEBUG - 2019-01-02 16:54:33 576375 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '21']
DEBUG - 2019-01-02 16:54:33 577896 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '20']
DEBUG - 2019-01-02 16:54:33 579444 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '20']
DEBUG - 2019-01-02 16:54:33 581783 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '19']
DEBUG - 2019-01-02 16:54:33 584085 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '19']
DEBUG - 2019-01-02 16:54:33 586566 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '18']
DEBUG - 2019-01-02 16:54:33 588726 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '18']
DEBUG - 2019-01-02 16:54:33 591047 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '17']
DEBUG - 2019-01-02 16:54:33 592387 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '17']
DEBUG - 2019-01-02 16:54:33 594089 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '16']
DEBUG - 2019-01-02 16:54:33 595604 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '16']
DEBUG - 2019-01-02 16:54:33 597199 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '15']
DEBUG - 2019-01-02 16:54:33 598627 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '15']
DEBUG - 2019-01-02 16:54:33 600219 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '13']
DEBUG - 2019-01-02 16:54:33 601659 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '13']
DEBUG - 2019-01-02 16:54:33 602978 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '12']
DEBUG - 2019-01-02 16:54:33 604609 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '12']
DEBUG - 2019-01-02 16:54:33 605901 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '11']
DEBUG - 2019-01-02 16:54:33 607182 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '11']
DEBUG - 2019-01-02 16:54:33 608608 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '10']
DEBUG - 2019-01-02 16:54:33 610142 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '10']
DEBUG - 2019-01-02 16:54:33 612291 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '9']
DEBUG - 2019-01-02 16:54:33 613796 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '9']
DEBUG - 2019-01-02 16:54:33 615483 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '8']
DEBUG - 2019-01-02 16:54:33 617064 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '8']
DEBUG - 2019-01-02 16:54:33 619148 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '6']
DEBUG - 2019-01-02 16:54:33 620938 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '6']
DEBUG - 2019-01-02 16:54:33 622612 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '5']
DEBUG - 2019-01-02 16:54:33 624411 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '5']
DEBUG - 2019-01-02 16:54:33 625787 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '4']
DEBUG - 2019-01-02 16:54:33 627108 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '4']
DEBUG - 2019-01-02 16:54:33 628357 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '3']
DEBUG - 2019-01-02 16:54:33 629776 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '3']
DEBUG - 2019-01-02 16:54:33 631125 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '1']
DEBUG - 2019-01-02 16:54:33 633080 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '1']
INFO - 2019-01-02 16:54:33 633888 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-02 16:54:33 646634 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:54:33 648211 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:54:33 648456 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
ERROR - 2019-01-02 16:54:33 649808 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 649926 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 650055 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 651091 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 651191 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 651303 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 651943 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 652031 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 652148 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 652890 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 652975 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 653070 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 653650 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 653731 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 653825 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 654418 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 654504 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 654598 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 655293 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 655437 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 655610 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 656549 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 656637 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 656735 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 657296 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 657376 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 657489 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 658032 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 658113 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 658210 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 658795 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 658875 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 658970 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 659635 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 659785 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 659969 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 660815 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 660957 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 661144 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 661953 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 662107 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 662285 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 663158 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 663311 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 663491 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 664251 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 664381 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 664572 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 665388 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 665560 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 665735 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 666558 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 666707 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 667081 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 667917 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 668055 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 668241 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 669059 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 669225 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 669477 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 670435 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 670548 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 670648 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 671329 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 671478 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 671647 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 672390 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 672513 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 672632 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 673270 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 673362 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 673491 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 674133 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 674225 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 674350 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 675040 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 675129 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 675236 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 675848 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 675937 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 676043 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 676671 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 676760 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 676867 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 677443 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 677536 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 677642 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 678292 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 678482 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 678693 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 679471 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 679634 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 679749 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 680254 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 680345 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 680468 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 681052 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 681140 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 681246 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 682914 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 683020 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 683126 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 683660 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 683748 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 683842 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 684348 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 684437 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 684540 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 685041 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 685123 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 685214 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 685729 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 685811 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 685903 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 686877 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 686959 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 687051 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 687566 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 687648 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 687738 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 688235 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 688316 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 688414 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 688920 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 689001 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 689093 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 689599 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 689691 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 689784 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 690274 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 690354 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 690457 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 690952 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 691034 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 691124 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 691627 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 691709 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 691801 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 692291 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 692369 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 692485 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 692985 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 693063 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 693155 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 693655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 693737 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 693828 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 694315 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 694396 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 694541 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 695039 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 695117 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 695208 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 695724 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 695806 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 695898 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 696392 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 696500 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 696593 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 697094 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 697175 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 697268 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 697760 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 697846 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 697938 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 698442 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 698534 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 698626 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 699110 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 699198 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 699289 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 699785 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 699872 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 699964 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 700465 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 700555 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 700647 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 701128 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 701212 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 701314 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 701812 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 701899 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 701992 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 702498 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 702580 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 702676 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 703160 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 703238 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 703335 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 703840 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 703922 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 704018 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 704518 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 704601 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 704696 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 705183 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 705264 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 705359 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 705869 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 705951 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 706043 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 706540 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 706620 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 706712 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 707201 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 707282 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 707381 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 707890 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 707971 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 708061 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 708604 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 708684 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 708776 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 709268 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 709347 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 709450 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 709943 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 710022 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 710114 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 710618 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 710699 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 710789 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 711277 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 711357 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 711477 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 711985 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 712064 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 712156 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 712661 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 712743 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 712833 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 713321 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 713426 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 713531 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 714023 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 714102 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 714195 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 714735 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 714818 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 714911 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 715420 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 715511 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 715605 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 716097 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 716176 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 716269 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 716762 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 716842 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 716934 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 717442 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 717533 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 717623 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 718137 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 718218 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 718308 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 718842 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 718925 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 719017 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 719557 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2019-01-02 16:54:33 719674 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 720191 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
DEBUG - 2019-01-02 16:54:33 720298 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 720832 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 720913 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 721004 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 721529 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 721610 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 721702 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 722213 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 722291 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 722383 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 722915 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 722995 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 723087 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 723606 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 723686 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 723778 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 724287 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 724366 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 724478 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 724992 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 725071 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 725162 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 725827 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 725909 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 726011 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 726560 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 726640 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 726732 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 727246 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 727324 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 727425 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 727952 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 728030 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 728122 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 728645 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 728725 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 728816 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 729321 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 729414 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 729512 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 730019 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 730098 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 730187 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 730701 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 730787 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 730880 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 731378 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 731514 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 731611 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 732110 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 732193 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 732299 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 732817 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 732903 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 732995 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 733522 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 733608 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 733699 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 734200 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 734285 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 734375 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 734893 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 734977 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 735068 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 735580 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 735661 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 735755 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 736258 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 736336 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 736439 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 736948 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 737026 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 737123 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 737812 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 737894 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 737989 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 738503 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 738599 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 738696 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 739197 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 739275 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 739367 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 739912 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 739993 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 740083 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:33 740602 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:33 740683 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:33 740789 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 930064 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 930165 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 930270 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 930752 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 930830 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 930917 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 931380 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 931471 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 931559 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 932022 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 932097 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 932183 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 932676 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 932754 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 932841 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 933325 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 933418 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 933514 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 933979 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 934053 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 934139 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 934612 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 934689 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 934775 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 935231 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 935307 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 935394 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 935866 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 935940 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 936027 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 936506 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 936585 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 936671 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 937133 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 937206 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 937290 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 937789 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 937865 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 937949 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 938415 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 938498 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 938585 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 939178 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 939273 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 939737 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 939814 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 939898 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 940357 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 940439 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 940531 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 940989 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 941066 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 941149 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 941618 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 941700 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 941787 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 942240 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 942322 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 942414 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 942892 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 942970 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 943056 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 943527 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 943608 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 943700 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 944154 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 944232 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 944318 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 944782 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 944870 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 944957 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 945424 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 945507 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 945595 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 946048 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 946122 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 946212 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 946675 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 946748 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 946839 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 947289 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 947362 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 947473 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 947926 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 948000 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 948086 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 948546 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 948626 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 948710 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 949167 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 949242 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 949326 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 949810 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 949887 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 949973 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 950453 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 950529 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 950613 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 951065 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 951139 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 951224 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 951692 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 951767 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 951850 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 952308 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 952383 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 952488 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 952945 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 953020 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 953107 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 953576 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 953651 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 953737 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 954195 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 954269 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 954355 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 954834 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 954909 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 954993 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 955460 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 955535 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 955629 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 956089 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 956165 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 956248 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 956720 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 956796 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 956883 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 957341 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 957428 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 957521 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 957981 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 958054 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 958137 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 958600 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 958676 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 958760 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 959220 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 959295 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 959378 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 959858 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 959935 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 960021 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 960493 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 960568 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 960653 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 961108 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 961183 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 961276 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 961746 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 961822 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 961906 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 962374 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 962471 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 962558 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 963018 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 963092 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 963176 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 963649 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 963731 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 963815 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 964272 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 964350 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 964453 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 964907 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 964991 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 965075 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 965534 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 965615 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 965699 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 966154 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 966233 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 966319 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 966799 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 966887 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 966973 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 967430 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 967513 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 967606 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 968059 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 968136 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 968225 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 968717 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-02 16:54:35 968792 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-02 16:54:35 968882 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:35 969392 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
ERROR - 2019-01-02 16:54:35 969578 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
ERROR - 2019-01-02 16:54:35 969650 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
INFO - 2019-01-02 16:54:35 969715 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php
DEBUG - 2019-01-02 16:54:35 972985 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:35 975195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:35 976183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:35 981304 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:35 982424 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 16:54:35 999327 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:35 999420 --> Total execution time: 3.3721
INFO - 2019-01-02 11:24:40 036715 --> Config Class Initialized
INFO - 2019-01-02 11:24:40 036853 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:40 039457 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:40 039575 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:40 041210 --> URI Class Initialized
INFO - 2019-01-02 11:24:40 044312 --> Router Class Initialized
INFO - 2019-01-02 11:24:40 047147 --> Output Class Initialized
INFO - 2019-01-02 11:24:40 048840 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:40 050290 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:40 050412 --> Input Class Initialized
INFO - 2019-01-02 11:24:40 051093 --> Language Class Initialized
INFO - 2019-01-02 11:24:40 058403 --> Loader Class Initialized
INFO - 2019-01-02 11:24:40 059824 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:40 060637 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:40 072772 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:40 078824 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:40 080333 --> Controller Class Initialized
INFO - 2019-01-02 16:54:40 081099 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:40 081218 --> Total execution time: 0.0464
INFO - 2019-01-02 11:24:44 218509 --> Config Class Initialized
INFO - 2019-01-02 11:24:44 218735 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:44 221883 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:44 222043 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:44 223855 --> URI Class Initialized
INFO - 2019-01-02 11:24:44 228756 --> Router Class Initialized
INFO - 2019-01-02 11:24:44 232095 --> Output Class Initialized
INFO - 2019-01-02 11:24:44 233967 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:44 235625 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:44 235758 --> Input Class Initialized
INFO - 2019-01-02 11:24:44 236304 --> Language Class Initialized
INFO - 2019-01-02 11:24:44 239773 --> Loader Class Initialized
INFO - 2019-01-02 11:24:44 241164 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:44 241914 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:44 260029 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:44 268810 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:44 271977 --> Controller Class Initialized
INFO - 2019-01-02 16:54:44 273116 --> Parser Class Initialized
INFO - 2019-01-02 16:54:44 274835 --> Helper loaded: html_helper
INFO - 2019-01-02 16:54:44 278956 --> Model Class Initialized
INFO - 2019-01-02 16:54:44 329333 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:44 331721 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-02 16:54:44 332328 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-02 16:54:44 346606 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-02 16:54:44 346776 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-02 16:54:44 348087 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:54:44 349421 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:54:44 349564 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 16:54:44 350550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 351249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 351871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 352493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 353140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 353804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 354441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 355204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 355809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 356427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 357139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 357754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 358349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 358957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 359569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 360148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 360769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 361350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 361943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 362543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 363122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 363713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 364288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 365008 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-02 16:54:44 365744 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-02 16:54:44 365828 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-02 16:54:44 365891 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-02 16:54:44 367274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 369736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 371059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:44 377190 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:44 378631 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 16:54:44 384447 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:44 384524 --> Total execution time: 0.1632
INFO - 2019-01-02 11:24:45 415915 --> Config Class Initialized
INFO - 2019-01-02 11:24:45 416106 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:45 417510 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:45 417582 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:45 418797 --> URI Class Initialized
INFO - 2019-01-02 11:24:45 420438 --> Router Class Initialized
INFO - 2019-01-02 11:24:45 422115 --> Output Class Initialized
INFO - 2019-01-02 11:24:45 423676 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:45 424664 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:45 424736 --> Input Class Initialized
INFO - 2019-01-02 11:24:45 425126 --> Language Class Initialized
INFO - 2019-01-02 11:24:45 430020 --> Loader Class Initialized
INFO - 2019-01-02 11:24:45 430928 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:45 431430 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:45 437202 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:45 443732 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:45 444502 --> Controller Class Initialized
INFO - 2019-01-02 16:54:45 445044 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:45 445107 --> Total execution time: 0.0303
INFO - 2019-01-02 11:24:52 351396 --> Config Class Initialized
INFO - 2019-01-02 11:24:52 351623 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:52 353176 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:52 353260 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:52 354293 --> URI Class Initialized
INFO - 2019-01-02 11:24:52 356950 --> Router Class Initialized
INFO - 2019-01-02 11:24:52 358649 --> Output Class Initialized
INFO - 2019-01-02 11:24:52 359910 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:52 361087 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:52 361170 --> Input Class Initialized
INFO - 2019-01-02 11:24:52 361567 --> Language Class Initialized
INFO - 2019-01-02 11:24:52 364033 --> Loader Class Initialized
INFO - 2019-01-02 11:24:52 365088 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:52 365674 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:52 372283 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:52 382774 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:52 385040 --> Controller Class Initialized
INFO - 2019-01-02 16:54:52 385795 --> Parser Class Initialized
INFO - 2019-01-02 16:54:52 386904 --> Helper loaded: html_helper
INFO - 2019-01-02 16:54:52 390105 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:52 401485 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-02 16:54:52 413347 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-02 16:54:52 415525 --> Model Class Initialized
DEBUG - 2019-01-02 16:54:52 417561 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-02 16:54:52 419897 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-02 16:54:52 426759 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:54:52 428891 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:54:52 429069 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 16:54:52 432558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 434412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 445020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 445950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 446372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 449254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 449999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 450378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 453170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 453910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 454281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 457133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 457892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 458273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 461122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 463592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 464350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 464760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 467658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 468705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 470894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 471661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 472040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 475212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 476310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 478385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 479190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 479612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 482690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 483699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 485790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 486567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 486963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 490082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 491091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 493185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 494009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 494434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 497605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 498616 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:52 500849 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-02 16:54:52 503588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 505641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 506057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:54:52 509280 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:54:52 510015 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 16:54:52 519043 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:52 519175 --> Total execution time: 0.1610
INFO - 2019-01-02 11:24:53 275697 --> Config Class Initialized
INFO - 2019-01-02 11:24:53 275831 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:53 278260 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:53 278382 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:53 279870 --> URI Class Initialized
INFO - 2019-01-02 11:24:53 282747 --> Router Class Initialized
INFO - 2019-01-02 11:24:53 284293 --> Output Class Initialized
INFO - 2019-01-02 11:24:53 285456 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:53 286454 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:53 286539 --> Input Class Initialized
INFO - 2019-01-02 11:24:53 286878 --> Language Class Initialized
ERROR - 2019-01-02 11:24:53 287414 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:24:53 371349 --> Config Class Initialized
INFO - 2019-01-02 11:24:53 371586 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:53 373336 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:53 373460 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:53 386586 --> Config Class Initialized
INFO - 2019-01-02 11:24:53 386909 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:53 389327 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:53 390167 --> URI Class Initialized
INFO - 2019-01-02 11:24:53 394870 --> Router Class Initialized
INFO - 2019-01-02 11:24:53 397562 --> Output Class Initialized
INFO - 2019-01-02 11:24:53 399493 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:53 401154 --> URI Class Initialized
INFO - 2019-01-02 11:24:53 405831 --> Router Class Initialized
INFO - 2019-01-02 11:24:53 408515 --> Output Class Initialized
INFO - 2019-01-02 11:24:53 409586 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:53 411470 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:53 411602 --> Input Class Initialized
INFO - 2019-01-02 11:24:53 412201 --> Language Class Initialized
ERROR - 2019-01-02 11:24:53 413180 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:24:53 417005 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:53 420089 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:53 420263 --> Input Class Initialized
INFO - 2019-01-02 11:24:53 421338 --> Language Class Initialized
ERROR - 2019-01-02 11:24:53 422343 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:24:53 645335 --> Config Class Initialized
INFO - 2019-01-02 11:24:53 645642 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:53 648200 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:53 648334 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:53 650136 --> URI Class Initialized
INFO - 2019-01-02 11:24:53 655791 --> Router Class Initialized
INFO - 2019-01-02 11:24:53 659769 --> Output Class Initialized
INFO - 2019-01-02 11:24:53 662156 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:53 663980 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:53 664099 --> Input Class Initialized
INFO - 2019-01-02 11:24:53 665071 --> Language Class Initialized
ERROR - 2019-01-02 11:24:53 666042 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:24:55 382755 --> Config Class Initialized
INFO - 2019-01-02 11:24:55 383037 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:24:55 385648 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:24:55 385771 --> Utf8 Class Initialized
INFO - 2019-01-02 11:24:55 386946 --> URI Class Initialized
INFO - 2019-01-02 11:24:55 392452 --> Router Class Initialized
INFO - 2019-01-02 11:24:55 395159 --> Output Class Initialized
INFO - 2019-01-02 11:24:55 397950 --> Security Class Initialized
DEBUG - 2019-01-02 11:24:55 399986 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:24:55 400125 --> Input Class Initialized
INFO - 2019-01-02 11:24:55 400703 --> Language Class Initialized
INFO - 2019-01-02 11:24:55 414823 --> Loader Class Initialized
INFO - 2019-01-02 11:24:55 417273 --> Helper loaded: url_helper
INFO - 2019-01-02 11:24:55 418587 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:54:55 432713 --> Database Driver Class Initialized
INFO - 2019-01-02 16:54:55 448527 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:54:55 450941 --> Controller Class Initialized
INFO - 2019-01-02 16:54:55 452491 --> Final output sent to browser
DEBUG - 2019-01-02 16:54:55 452663 --> Total execution time: 0.0731
INFO - 2019-01-02 11:25:05 025913 --> Config Class Initialized
INFO - 2019-01-02 11:25:05 026151 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:05 028635 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:05 028753 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:05 030412 --> URI Class Initialized
INFO - 2019-01-02 11:25:05 033296 --> Router Class Initialized
INFO - 2019-01-02 11:25:05 035832 --> Output Class Initialized
INFO - 2019-01-02 11:25:05 037827 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:05 039223 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:05 039314 --> Input Class Initialized
INFO - 2019-01-02 11:25:05 039741 --> Language Class Initialized
INFO - 2019-01-02 11:25:05 043917 --> Loader Class Initialized
INFO - 2019-01-02 11:25:05 045829 --> Helper loaded: url_helper
INFO - 2019-01-02 11:25:05 046755 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:55:05 058545 --> Database Driver Class Initialized
INFO - 2019-01-02 16:55:05 066485 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:55:05 067514 --> Controller Class Initialized
INFO - 2019-01-02 16:55:05 068053 --> Parser Class Initialized
INFO - 2019-01-02 16:55:05 068856 --> Helper loaded: html_helper
INFO - 2019-01-02 16:55:05 071084 --> Model Class Initialized
DEBUG - 2019-01-02 16:55:05 077769 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_sell_business_details`.`price_range_type` = 'Upto 50 Lac'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-02 16:55:05 086029 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-02 16:55:05 086687 --> Model Class Initialized
DEBUG - 2019-01-02 16:55:05 087305 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-02 16:55:05 088958 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-02 16:55:05 090976 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 16:55:05 092403 --> Helper loaded: file_helper
DEBUG - 2019-01-02 16:55:05 092531 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 16:55:05 095010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 096254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 104337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 104967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 105257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 107206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 107757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 108023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 115864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 117933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 118771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 125664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 126538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 126969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 132368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 135638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 136317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 136658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 139185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 140093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 141797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 142395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 142723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 145104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 145950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 147599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 148221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 148556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 151006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 151858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 154917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 155551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 155872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 158981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 159811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 161473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 162094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 162422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 164927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 165719 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:55:05 167433 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-02 16:55:05 169917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 171431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 171775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 16:55:05 174261 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 16:55:05 174856 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 16:55:05 183320 --> Final output sent to browser
DEBUG - 2019-01-02 16:55:05 183438 --> Total execution time: 0.1509
INFO - 2019-01-02 11:25:05 564934 --> Config Class Initialized
INFO - 2019-01-02 11:25:05 565102 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:05 568295 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:05 568451 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:05 570386 --> URI Class Initialized
INFO - 2019-01-02 11:25:05 575865 --> Router Class Initialized
INFO - 2019-01-02 11:25:05 578978 --> Output Class Initialized
INFO - 2019-01-02 11:25:05 581180 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:05 583923 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:05 584062 --> Input Class Initialized
INFO - 2019-01-02 11:25:05 584947 --> Language Class Initialized
ERROR - 2019-01-02 11:25:05 586281 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:25:05 642235 --> Config Class Initialized
INFO - 2019-01-02 11:25:05 651158 --> Config Class Initialized
INFO - 2019-01-02 11:25:05 651382 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:05 653305 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:05 653426 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:05 655267 --> URI Class Initialized
INFO - 2019-01-02 11:25:05 656539 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:05 658410 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:05 658512 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:05 659610 --> URI Class Initialized
INFO - 2019-01-02 11:25:05 662720 --> Router Class Initialized
INFO - 2019-01-02 11:25:05 667886 --> Router Class Initialized
INFO - 2019-01-02 11:25:05 669734 --> Output Class Initialized
INFO - 2019-01-02 11:25:05 671084 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:05 672328 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:05 672415 --> Input Class Initialized
INFO - 2019-01-02 11:25:05 672852 --> Language Class Initialized
ERROR - 2019-01-02 11:25:05 673515 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:25:05 675086 --> Output Class Initialized
INFO - 2019-01-02 11:25:05 676527 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:05 677767 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:05 677855 --> Input Class Initialized
INFO - 2019-01-02 11:25:05 678261 --> Language Class Initialized
ERROR - 2019-01-02 11:25:05 678930 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:25:05 787842 --> Config Class Initialized
INFO - 2019-01-02 11:25:05 787965 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:05 789762 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:05 789858 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:05 790961 --> URI Class Initialized
INFO - 2019-01-02 11:25:05 793864 --> Router Class Initialized
INFO - 2019-01-02 11:25:05 796072 --> Output Class Initialized
INFO - 2019-01-02 11:25:05 797821 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:05 799401 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:05 799520 --> Input Class Initialized
INFO - 2019-01-02 11:25:05 800040 --> Language Class Initialized
ERROR - 2019-01-02 11:25:05 800863 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 11:25:06 063600 --> Config Class Initialized
INFO - 2019-01-02 11:25:06 063766 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:06 066562 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:06 066689 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:06 068075 --> URI Class Initialized
INFO - 2019-01-02 11:25:06 071173 --> Router Class Initialized
INFO - 2019-01-02 11:25:06 073194 --> Output Class Initialized
INFO - 2019-01-02 11:25:06 074162 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:06 075028 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:06 075097 --> Input Class Initialized
INFO - 2019-01-02 11:25:06 075382 --> Language Class Initialized
INFO - 2019-01-02 11:25:06 079010 --> Loader Class Initialized
INFO - 2019-01-02 11:25:06 079819 --> Helper loaded: url_helper
INFO - 2019-01-02 11:25:06 080233 --> Helper loaded: utility_helper
INFO - 2019-01-02 16:55:06 084939 --> Database Driver Class Initialized
INFO - 2019-01-02 16:55:06 088207 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 16:55:06 088956 --> Controller Class Initialized
INFO - 2019-01-02 16:55:06 089479 --> Final output sent to browser
DEBUG - 2019-01-02 16:55:06 089545 --> Total execution time: 0.0284
INFO - 2019-01-02 11:25:07 531246 --> Config Class Initialized
INFO - 2019-01-02 11:25:07 531500 --> Hooks Class Initialized
DEBUG - 2019-01-02 11:25:07 534954 --> UTF-8 Support Enabled
INFO - 2019-01-02 11:25:07 535140 --> Utf8 Class Initialized
INFO - 2019-01-02 11:25:07 536942 --> URI Class Initialized
INFO - 2019-01-02 11:25:07 540015 --> Router Class Initialized
INFO - 2019-01-02 11:25:07 542324 --> Output Class Initialized
INFO - 2019-01-02 11:25:07 544143 --> Security Class Initialized
DEBUG - 2019-01-02 11:25:07 545788 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 11:25:07 545914 --> Input Class Initialized
INFO - 2019-01-02 11:25:07 546477 --> Language Class Initialized
ERROR - 2019-01-02 11:25:07 547350 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 14:00:41 153208 --> Config Class Initialized
INFO - 2019-01-02 14:00:41 156290 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:41 167207 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:41 167346 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:41 169464 --> URI Class Initialized
DEBUG - 2019-01-02 14:00:41 182002 --> No URI present. Default controller set.
INFO - 2019-01-02 14:00:41 182143 --> Router Class Initialized
INFO - 2019-01-02 14:00:41 190807 --> Output Class Initialized
INFO - 2019-01-02 14:00:41 195225 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:41 204593 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:41 204725 --> Input Class Initialized
INFO - 2019-01-02 14:00:41 206681 --> Language Class Initialized
INFO - 2019-01-02 14:00:41 222989 --> Loader Class Initialized
INFO - 2019-01-02 14:00:41 231853 --> Helper loaded: url_helper
INFO - 2019-01-02 14:00:41 235651 --> Helper loaded: utility_helper
INFO - 2019-01-02 19:30:41 261885 --> Database Driver Class Initialized
INFO - 2019-01-02 19:30:41 289210 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 19:30:41 297564 --> Controller Class Initialized
INFO - 2019-01-02 19:30:41 298902 --> Parser Class Initialized
INFO - 2019-01-02 19:30:41 300530 --> Helper loaded: html_helper
INFO - 2019-01-02 19:30:41 312973 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-02 19:30:41 318221 --> Model Class Initialized
DEBUG - 2019-01-02 19:30:41 341829 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-02 19:30:41 348898 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-02'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-02 19:30:41 360753 --> Model Class Initialized
DEBUG - 2019-01-02 19:30:41 362920 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-02 19:30:41 377757 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-02 19:30:41 390384 --> Helper loaded: file_helper
DEBUG - 2019-01-02 19:30:41 390618 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-02 19:30:41 404055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 408190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 438920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 452270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 460997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 461863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 463692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 465281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 469734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 470175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 471147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 472470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 476412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 477155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 479171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 480340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 483509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 486047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 487492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 488922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 493465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 494194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 494993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 496040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 499366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 499835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 500869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 501878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 505280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 505748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 506733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 507989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 511470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 512054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 513252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 514657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 517796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 518229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 519135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 520108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 523478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 523926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 524765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 525811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 529055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 529531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 531456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 532545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 536060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 536540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 537424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 539385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 544323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 544804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 545752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 547290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 549366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 549664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 550188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 551562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 553518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 553797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 554317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 555198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 557157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 557440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 557976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 558909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 560863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 561141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 561696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 562382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 562969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 563539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 564096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 564659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 565212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 565787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 566344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 566953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 567522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 568070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 568636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 569185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 569753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 570316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 570883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 571681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 572202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 572737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 573249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 573863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 574455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 576715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 577002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 577573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 578176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 580202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 580523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 581080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 581675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 583643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 583924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 584482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 585086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 587080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 587367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 587930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 588537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 590477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 590761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 591314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 591908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 593868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 594151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 594732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 596663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 597300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 599276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 599905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 601840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 602447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 604417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 605040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 606986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 607604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 609546 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 19:30:41 610133 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-02 19:30:41 624948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 628036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 628962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-02 19:30:41 634717 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-02 19:30:41 635783 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-02 19:30:41 647346 --> Final output sent to browser
DEBUG - 2019-01-02 19:30:41 647573 --> Total execution time: 0.5067
INFO - 2019-01-02 14:00:43 819968 --> Config Class Initialized
INFO - 2019-01-02 14:00:43 820154 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:43 821516 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:43 821583 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:43 822434 --> URI Class Initialized
INFO - 2019-01-02 14:00:43 824201 --> Router Class Initialized
INFO - 2019-01-02 14:00:43 825635 --> Output Class Initialized
INFO - 2019-01-02 14:00:43 826900 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:43 827876 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:43 827944 --> Input Class Initialized
INFO - 2019-01-02 14:00:43 828253 --> Language Class Initialized
INFO - 2019-01-02 14:00:43 839708 --> Loader Class Initialized
INFO - 2019-01-02 14:00:43 840610 --> Helper loaded: url_helper
INFO - 2019-01-02 14:00:43 841068 --> Helper loaded: utility_helper
INFO - 2019-01-02 19:30:43 846539 --> Database Driver Class Initialized
INFO - 2019-01-02 19:30:43 851149 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-02 19:30:43 851953 --> Controller Class Initialized
INFO - 2019-01-02 19:30:43 852557 --> Final output sent to browser
DEBUG - 2019-01-02 19:30:43 852622 --> Total execution time: 0.0337
INFO - 2019-01-02 14:00:44 303386 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 303653 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 305890 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 305985 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 307444 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 311480 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 313481 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 314944 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 316270 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 316365 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 316849 --> Language Class Initialized
INFO - 2019-01-02 14:00:44 339461 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 339621 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 341176 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 341270 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 342181 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 345235 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 347029 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 348385 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 349639 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 349737 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 350197 --> Language Class Initialized
ERROR - 2019-01-02 14:00:44 555803 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-02 14:00:44 556936 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 14:00:44 713388 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 713762 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 715598 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 715692 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 717175 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 721497 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 724360 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 727277 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 730556 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 730741 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 731826 --> Language Class Initialized
ERROR - 2019-01-02 14:00:44 734473 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 14:00:44 792045 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 792200 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 794320 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 794478 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 795756 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 798890 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 801248 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 806389 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 806546 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 808661 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 808788 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 810070 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 813359 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 815920 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 817989 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 819870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 820009 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 820605 --> Language Class Initialized
INFO - 2019-01-02 14:00:44 823257 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 824981 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 825109 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 825680 --> Language Class Initialized
ERROR - 2019-01-02 14:00:44 826602 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-02 14:00:44 828572 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 14:00:44 856758 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 856914 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 859502 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 859637 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 860913 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 864844 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 867976 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 872183 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 875614 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 875761 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 876444 --> Language Class Initialized
ERROR - 2019-01-02 14:00:44 877979 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 14:00:44 945488 --> Config Class Initialized
INFO - 2019-01-02 14:00:44 945647 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:44 948214 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:44 948540 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:44 950102 --> URI Class Initialized
INFO - 2019-01-02 14:00:44 955763 --> Router Class Initialized
INFO - 2019-01-02 14:00:44 964916 --> Output Class Initialized
INFO - 2019-01-02 14:00:44 967565 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:44 969305 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:44 969455 --> Input Class Initialized
INFO - 2019-01-02 14:00:44 970108 --> Language Class Initialized
ERROR - 2019-01-02 14:00:44 971054 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-02 14:00:46 141870 --> Config Class Initialized
INFO - 2019-01-02 14:00:46 142213 --> Hooks Class Initialized
DEBUG - 2019-01-02 14:00:46 144699 --> UTF-8 Support Enabled
INFO - 2019-01-02 14:00:46 144826 --> Utf8 Class Initialized
INFO - 2019-01-02 14:00:46 146442 --> URI Class Initialized
INFO - 2019-01-02 14:00:46 151062 --> Router Class Initialized
INFO - 2019-01-02 14:00:46 153817 --> Output Class Initialized
INFO - 2019-01-02 14:00:46 155879 --> Security Class Initialized
DEBUG - 2019-01-02 14:00:46 157774 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 14:00:46 157902 --> Input Class Initialized
INFO - 2019-01-02 14:00:46 158509 --> Language Class Initialized
ERROR - 2019-01-02 14:00:46 159483 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-02 18:38:29 817136 --> Config Class Initialized
INFO - 2019-01-02 18:38:29 818416 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:29 856686 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:29 859498 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:29 861320 --> URI Class Initialized
INFO - 2019-01-02 18:38:29 905914 --> Router Class Initialized
INFO - 2019-01-02 18:38:29 948103 --> Output Class Initialized
INFO - 2019-01-02 18:38:29 953496 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:29 990061 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:30 000518 --> Input Class Initialized
INFO - 2019-01-02 18:38:30 002036 --> Language Class Initialized
INFO - 2019-01-02 18:38:30 062814 --> Loader Class Initialized
INFO - 2019-01-02 18:38:30 067595 --> Helper loaded: url_helper
INFO - 2019-01-02 18:38:30 085422 --> Helper loaded: utility_helper
INFO - 2019-01-02 18:38:31 826098 --> Config Class Initialized
INFO - 2019-01-02 18:38:31 826448 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:31 828918 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:31 829049 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:31 830724 --> URI Class Initialized
INFO - 2019-01-02 18:38:31 833712 --> Router Class Initialized
INFO - 2019-01-02 18:38:31 836383 --> Output Class Initialized
INFO - 2019-01-02 18:38:31 838510 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:31 840359 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:31 840507 --> Input Class Initialized
INFO - 2019-01-02 18:38:31 841106 --> Language Class Initialized
INFO - 2019-01-02 18:38:31 856765 --> Loader Class Initialized
INFO - 2019-01-02 18:38:31 858402 --> Helper loaded: url_helper
INFO - 2019-01-02 18:38:31 859291 --> Helper loaded: utility_helper
INFO - 2019-01-02 18:38:33 984078 --> Config Class Initialized
INFO - 2019-01-02 18:38:33 984232 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:33 986821 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:33 986915 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:33 988303 --> URI Class Initialized
INFO - 2019-01-02 18:38:33 992089 --> Router Class Initialized
INFO - 2019-01-02 18:38:33 995093 --> Output Class Initialized
INFO - 2019-01-02 18:38:33 997363 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:33 999346 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:33 999448 --> Input Class Initialized
INFO - 2019-01-02 18:38:33 999999 --> Language Class Initialized
INFO - 2019-01-02 18:38:34 004098 --> Loader Class Initialized
INFO - 2019-01-02 18:38:34 005722 --> Helper loaded: url_helper
INFO - 2019-01-02 18:38:34 006680 --> Helper loaded: utility_helper
INFO - 2019-01-02 18:38:34 455629 --> Config Class Initialized
INFO - 2019-01-02 18:38:34 455744 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:34 457259 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:34 457348 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:34 458273 --> URI Class Initialized
INFO - 2019-01-02 18:38:34 467732 --> Config Class Initialized
INFO - 2019-01-02 18:38:34 467834 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:34 469326 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:34 469427 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:34 470273 --> URI Class Initialized
INFO - 2019-01-02 18:38:34 473095 --> Router Class Initialized
INFO - 2019-01-02 18:38:34 475889 --> Config Class Initialized
INFO - 2019-01-02 18:38:34 476111 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:34 477838 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:34 477925 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:34 479273 --> URI Class Initialized
INFO - 2019-01-02 18:38:34 481631 --> Router Class Initialized
INFO - 2019-01-02 18:38:34 483371 --> Output Class Initialized
INFO - 2019-01-02 18:38:34 484728 --> Security Class Initialized
INFO - 2019-01-02 18:38:34 486222 --> Output Class Initialized
INFO - 2019-01-02 18:38:34 487565 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:34 488682 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:34 488769 --> Input Class Initialized
DEBUG - 2019-01-02 18:38:34 489162 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:34 489262 --> Input Class Initialized
INFO - 2019-01-02 18:38:34 489670 --> Language Class Initialized
ERROR - 2019-01-02 18:38:34 490289 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 18:38:34 491590 --> Router Class Initialized
INFO - 2019-01-02 18:38:34 493501 --> Output Class Initialized
INFO - 2019-01-02 18:38:34 494894 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:34 496150 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:34 496237 --> Input Class Initialized
INFO - 2019-01-02 18:38:34 496660 --> Language Class Initialized
ERROR - 2019-01-02 18:38:34 497337 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 18:38:34 497720 --> Language Class Initialized
ERROR - 2019-01-02 18:38:34 498373 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-02 18:38:34 758012 --> Config Class Initialized
INFO - 2019-01-02 18:38:34 758112 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:34 759409 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:34 759497 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:34 760231 --> URI Class Initialized
INFO - 2019-01-02 18:38:34 761621 --> Router Class Initialized
INFO - 2019-01-02 18:38:34 763001 --> Output Class Initialized
INFO - 2019-01-02 18:38:34 764076 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:34 765058 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:34 765136 --> Input Class Initialized
INFO - 2019-01-02 18:38:34 765474 --> Language Class Initialized
INFO - 2019-01-02 18:38:34 769593 --> Loader Class Initialized
INFO - 2019-01-02 18:38:34 770425 --> Helper loaded: url_helper
INFO - 2019-01-02 18:38:34 770885 --> Helper loaded: utility_helper
INFO - 2019-01-02 18:38:36 059798 --> Config Class Initialized
INFO - 2019-01-02 18:38:36 059961 --> Hooks Class Initialized
DEBUG - 2019-01-02 18:38:36 062119 --> UTF-8 Support Enabled
INFO - 2019-01-02 18:38:36 062252 --> Utf8 Class Initialized
INFO - 2019-01-02 18:38:36 063575 --> URI Class Initialized
INFO - 2019-01-02 18:38:36 067289 --> Router Class Initialized
INFO - 2019-01-02 18:38:36 069751 --> Output Class Initialized
INFO - 2019-01-02 18:38:36 071643 --> Security Class Initialized
DEBUG - 2019-01-02 18:38:36 073342 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-02 18:38:36 073493 --> Input Class Initialized
INFO - 2019-01-02 18:38:36 074057 --> Language Class Initialized
ERROR - 2019-01-02 18:38:36 076054 --> 404 Page Not Found: Browse-sector-list/1
