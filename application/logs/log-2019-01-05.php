<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-05 05:39:02 093650 --> Config Class Initialized
INFO - 2019-01-05 05:39:02 093961 --> Hooks Class Initialized
DEBUG - 2019-01-05 05:39:02 111948 --> UTF-8 Support Enabled
INFO - 2019-01-05 05:39:02 112102 --> Utf8 Class Initialized
INFO - 2019-01-05 05:39:02 114300 --> URI Class Initialized
DEBUG - 2019-01-05 05:39:02 118822 --> No URI present. Default controller set.
INFO - 2019-01-05 05:39:02 118957 --> Router Class Initialized
INFO - 2019-01-05 05:39:02 131931 --> Output Class Initialized
INFO - 2019-01-05 05:39:02 138981 --> Security Class Initialized
DEBUG - 2019-01-05 05:39:02 153055 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 05:39:02 153281 --> Input Class Initialized
INFO - 2019-01-05 05:39:02 162619 --> Language Class Initialized
INFO - 2019-01-05 05:39:02 191725 --> Loader Class Initialized
INFO - 2019-01-05 05:39:02 218708 --> Helper loaded: url_helper
INFO - 2019-01-05 05:39:02 225549 --> Helper loaded: utility_helper
INFO - 2019-01-05 11:09:02 255410 --> Database Driver Class Initialized
INFO - 2019-01-05 11:09:02 485872 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 11:09:02 939784 --> Controller Class Initialized
INFO - 2019-01-05 11:09:02 947904 --> Parser Class Initialized
INFO - 2019-01-05 11:09:02 952081 --> Helper loaded: html_helper
INFO - 2019-01-05 11:09:02 972768 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 11:09:03 005698 --> Model Class Initialized
DEBUG - 2019-01-05 11:09:03 042071 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 11:09:03 047557 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 11:09:03 056083 --> Model Class Initialized
DEBUG - 2019-01-05 11:09:03 057173 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 11:09:03 256222 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 11:09:03 277340 --> Helper loaded: file_helper
DEBUG - 2019-01-05 11:09:03 280529 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 11:09:03 307578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:03 450824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 498331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 515965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 526922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 528934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 531779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 532601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 535718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 536159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 536899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 537657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 540560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 540977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 541726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 542517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 545443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 545888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 546644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 547399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 550299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 550753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 551500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 552262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 555383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 555819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 556579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 557332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 560359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 560795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 561616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 562374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 565535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 565968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 566802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 567601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 570679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 571098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 571892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 572669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 575776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 576195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 577013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 577802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 580997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 581439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 582256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 583048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 586163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 586623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 587443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 588182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 591387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 591839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 592674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 593429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 596621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 597060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 597898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 598680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 601850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 602289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 603147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 603914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 607034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 607861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 608426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 609030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 611124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 611430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 611996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 612752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 613814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 614850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 615873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 616849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 617433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 617969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 618501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 619016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 619535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 620173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 620968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 621979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 622601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 623147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 623696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 624346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 624910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 625480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 626027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 626600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 627165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 629338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 629648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 630238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 630990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 633146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 633462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 634056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 634665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 636771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 637068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 637698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 638277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 640429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 640743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 641331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 641911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 644023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 644325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 644946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 645566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 647676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 647979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 648591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 650695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 651319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 653472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 654088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 656181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 656805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 658956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 659584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 661700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 662313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 664405 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 11:09:05 665014 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 11:09:05 672364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 673681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 673974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 11:09:05 676085 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 11:09:05 676609 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 11:09:05 684720 --> Final output sent to browser
DEBUG - 2019-01-05 11:09:05 684819 --> Total execution time: 3.6026
INFO - 2019-01-05 05:39:06 748673 --> Config Class Initialized
INFO - 2019-01-05 05:39:06 748955 --> Hooks Class Initialized
DEBUG - 2019-01-05 05:39:06 751293 --> UTF-8 Support Enabled
INFO - 2019-01-05 05:39:06 751408 --> Utf8 Class Initialized
INFO - 2019-01-05 05:39:06 752990 --> URI Class Initialized
INFO - 2019-01-05 05:39:06 757953 --> Router Class Initialized
INFO - 2019-01-05 05:39:06 760531 --> Output Class Initialized
INFO - 2019-01-05 05:39:06 762480 --> Security Class Initialized
DEBUG - 2019-01-05 05:39:06 764002 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 05:39:06 764085 --> Input Class Initialized
INFO - 2019-01-05 05:39:06 764517 --> Language Class Initialized
ERROR - 2019-01-05 05:39:06 911680 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 07:47:22 535218 --> Config Class Initialized
INFO - 2019-01-05 07:47:22 536381 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:22 545321 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:22 545423 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:22 546720 --> URI Class Initialized
DEBUG - 2019-01-05 07:47:22 562088 --> No URI present. Default controller set.
INFO - 2019-01-05 07:47:22 562258 --> Router Class Initialized
INFO - 2019-01-05 07:47:22 573856 --> Output Class Initialized
INFO - 2019-01-05 07:47:22 583785 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:22 592449 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:22 592530 --> Input Class Initialized
INFO - 2019-01-05 07:47:22 593044 --> Language Class Initialized
INFO - 2019-01-05 07:47:22 604583 --> Loader Class Initialized
INFO - 2019-01-05 07:47:22 613729 --> Helper loaded: url_helper
INFO - 2019-01-05 07:47:22 619874 --> Helper loaded: utility_helper
INFO - 2019-01-05 13:17:22 635948 --> Database Driver Class Initialized
INFO - 2019-01-05 13:17:22 671120 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 13:17:22 676518 --> Controller Class Initialized
INFO - 2019-01-05 13:17:22 677236 --> Parser Class Initialized
INFO - 2019-01-05 13:17:22 678175 --> Helper loaded: html_helper
INFO - 2019-01-05 13:17:22 686968 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 13:17:22 689718 --> Model Class Initialized
DEBUG - 2019-01-05 13:17:22 707444 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 13:17:22 711250 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 13:17:22 715981 --> Model Class Initialized
DEBUG - 2019-01-05 13:17:22 717802 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 13:17:22 733310 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 13:17:22 743558 --> Helper loaded: file_helper
DEBUG - 2019-01-05 13:17:22 743683 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 13:17:22 754765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 767096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 780909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 791714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 793824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 794157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 794682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 795434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 797347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 797641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 798122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 798795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 800749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 801032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 801543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 802248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 804236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 804552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 805048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 805742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 807718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 808013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 808530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 809206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 811206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 811511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 812011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 812691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 814755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 815047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 815573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 816216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:22 818300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 278646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 281590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 282592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 297424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 298152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 299480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 300760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 306032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 306700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 308006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 309168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 314867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 315555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 316879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 318042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 323545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 324214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 325558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 326690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 331976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 332638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 333961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 335073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 340141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 340823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 342143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 343269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 348092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 349405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 350881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 351706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 354376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 354775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 355789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 356528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 359827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 360224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 360966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 361651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 362242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 362838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 363409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 363996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 364593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 365159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 365776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 366333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 367113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 367861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 368614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 369343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 370089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 371845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 372625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 373553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 374921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 376307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 378465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 379909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 380779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 385997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 386537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 387311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 388812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 392738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 393287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 394107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:24 394937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 399866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 402065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 404439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 405311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 407183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 407457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 407960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 408780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 410476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 410727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 411207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 412030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 413724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 413975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 414493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 416344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 417015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 418878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 419595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 421513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 422192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 424132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 425199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 427073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 428854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 432255 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 13:17:28 433366 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 13:17:28 439491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 441659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 442114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 13:17:28 445770 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 13:17:28 448153 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 13:17:28 458823 --> Final output sent to browser
DEBUG - 2019-01-05 13:17:28 459043 --> Total execution time: 5.9288
INFO - 2019-01-05 07:47:30 315268 --> Config Class Initialized
INFO - 2019-01-05 07:47:30 315776 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:30 318038 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:30 318265 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:30 319807 --> URI Class Initialized
INFO - 2019-01-05 07:47:30 325305 --> Router Class Initialized
INFO - 2019-01-05 07:47:30 327848 --> Output Class Initialized
INFO - 2019-01-05 07:47:30 329664 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:30 331253 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:30 331367 --> Input Class Initialized
INFO - 2019-01-05 07:47:30 331908 --> Language Class Initialized
ERROR - 2019-01-05 07:47:30 334820 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:30 534048 --> Config Class Initialized
INFO - 2019-01-05 07:47:30 534179 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:30 536323 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:30 536454 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:30 537595 --> URI Class Initialized
INFO - 2019-01-05 07:47:30 541183 --> Router Class Initialized
INFO - 2019-01-05 07:47:30 543965 --> Output Class Initialized
INFO - 2019-01-05 07:47:30 545886 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:30 547445 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:30 547563 --> Input Class Initialized
INFO - 2019-01-05 07:47:30 548355 --> Language Class Initialized
ERROR - 2019-01-05 07:47:30 549377 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:30 889333 --> Config Class Initialized
INFO - 2019-01-05 07:47:30 889684 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:30 892079 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:30 892208 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:30 893852 --> URI Class Initialized
INFO - 2019-01-05 07:47:30 898561 --> Router Class Initialized
INFO - 2019-01-05 07:47:30 901313 --> Output Class Initialized
INFO - 2019-01-05 07:47:30 903352 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:30 905262 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:30 905391 --> Input Class Initialized
INFO - 2019-01-05 07:47:30 906013 --> Language Class Initialized
ERROR - 2019-01-05 07:47:30 907002 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:31 241132 --> Config Class Initialized
INFO - 2019-01-05 07:47:31 241549 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:31 244461 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:31 244632 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:31 246500 --> URI Class Initialized
INFO - 2019-01-05 07:47:31 251755 --> Router Class Initialized
INFO - 2019-01-05 07:47:31 254971 --> Output Class Initialized
INFO - 2019-01-05 07:47:31 257164 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:31 259022 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:31 259151 --> Input Class Initialized
INFO - 2019-01-05 07:47:31 259769 --> Language Class Initialized
ERROR - 2019-01-05 07:47:31 260761 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:31 269856 --> Config Class Initialized
INFO - 2019-01-05 07:47:31 270018 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:31 272083 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:31 272212 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:31 273531 --> URI Class Initialized
INFO - 2019-01-05 07:47:31 276771 --> Router Class Initialized
INFO - 2019-01-05 07:47:31 279261 --> Output Class Initialized
INFO - 2019-01-05 07:47:31 281198 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:31 282994 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:31 283124 --> Input Class Initialized
INFO - 2019-01-05 07:47:31 283726 --> Language Class Initialized
ERROR - 2019-01-05 07:47:31 284677 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:31 367429 --> Config Class Initialized
INFO - 2019-01-05 07:47:31 367579 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:31 369668 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:31 369782 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:31 370987 --> URI Class Initialized
INFO - 2019-01-05 07:47:31 375305 --> Router Class Initialized
INFO - 2019-01-05 07:47:31 377530 --> Output Class Initialized
INFO - 2019-01-05 07:47:31 379426 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:31 381165 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:31 381282 --> Input Class Initialized
INFO - 2019-01-05 07:47:31 381809 --> Language Class Initialized
ERROR - 2019-01-05 07:47:31 382992 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:31 440083 --> Config Class Initialized
INFO - 2019-01-05 07:47:31 440335 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:31 442626 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:31 442765 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:31 444039 --> URI Class Initialized
INFO - 2019-01-05 07:47:31 447154 --> Router Class Initialized
INFO - 2019-01-05 07:47:31 449577 --> Output Class Initialized
INFO - 2019-01-05 07:47:31 451611 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:31 453428 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:31 453569 --> Input Class Initialized
INFO - 2019-01-05 07:47:31 454196 --> Language Class Initialized
ERROR - 2019-01-05 07:47:31 455167 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 07:47:31 900950 --> Config Class Initialized
INFO - 2019-01-05 07:47:31 901103 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:31 903110 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:31 903230 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:31 904417 --> URI Class Initialized
INFO - 2019-01-05 07:47:31 906780 --> Router Class Initialized
INFO - 2019-01-05 07:47:31 910809 --> Output Class Initialized
INFO - 2019-01-05 07:47:31 914383 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:31 917062 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:31 917196 --> Input Class Initialized
INFO - 2019-01-05 07:47:31 917818 --> Language Class Initialized
INFO - 2019-01-05 07:47:31 933505 --> Loader Class Initialized
INFO - 2019-01-05 07:47:31 935595 --> Helper loaded: url_helper
INFO - 2019-01-05 07:47:31 936628 --> Helper loaded: utility_helper
INFO - 2019-01-05 13:17:31 951200 --> Database Driver Class Initialized
INFO - 2019-01-05 13:17:31 962137 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 13:17:31 964133 --> Controller Class Initialized
INFO - 2019-01-05 13:17:31 965358 --> Final output sent to browser
DEBUG - 2019-01-05 13:17:31 965534 --> Total execution time: 0.0676
INFO - 2019-01-05 07:47:33 559178 --> Config Class Initialized
INFO - 2019-01-05 07:47:33 559329 --> Hooks Class Initialized
DEBUG - 2019-01-05 07:47:33 561393 --> UTF-8 Support Enabled
INFO - 2019-01-05 07:47:33 561537 --> Utf8 Class Initialized
INFO - 2019-01-05 07:47:33 562835 --> URI Class Initialized
INFO - 2019-01-05 07:47:33 565953 --> Router Class Initialized
INFO - 2019-01-05 07:47:33 568310 --> Output Class Initialized
INFO - 2019-01-05 07:47:33 574364 --> Security Class Initialized
DEBUG - 2019-01-05 07:47:33 577580 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 07:47:33 577712 --> Input Class Initialized
INFO - 2019-01-05 07:47:33 578284 --> Language Class Initialized
ERROR - 2019-01-05 07:47:33 579226 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 11:25:22 385386 --> Config Class Initialized
INFO - 2019-01-05 11:25:22 394944 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:22 434169 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:22 435525 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:22 437614 --> URI Class Initialized
DEBUG - 2019-01-05 11:25:22 487243 --> No URI present. Default controller set.
INFO - 2019-01-05 11:25:22 494544 --> Router Class Initialized
INFO - 2019-01-05 11:25:22 525008 --> Output Class Initialized
INFO - 2019-01-05 11:25:22 542747 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:22 575711 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:22 584554 --> Input Class Initialized
INFO - 2019-01-05 11:25:22 585676 --> Language Class Initialized
INFO - 2019-01-05 11:25:22 644324 --> Loader Class Initialized
INFO - 2019-01-05 11:25:22 658756 --> Helper loaded: url_helper
INFO - 2019-01-05 11:25:22 674523 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:55:22 846690 --> Database Driver Class Initialized
INFO - 2019-01-05 16:55:23 091506 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:55:23 589492 --> Controller Class Initialized
INFO - 2019-01-05 16:55:23 592364 --> Parser Class Initialized
INFO - 2019-01-05 16:55:23 600697 --> Helper loaded: html_helper
INFO - 2019-01-05 16:55:23 628576 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 16:55:23 662342 --> Model Class Initialized
DEBUG - 2019-01-05 16:55:23 703254 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 16:55:23 710269 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 16:55:23 711865 --> Model Class Initialized
DEBUG - 2019-01-05 16:55:23 721781 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 16:55:23 915786 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:55:23 933598 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:55:23 938643 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:55:24 006822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 173844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 323400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 343450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 345731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 346051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 346592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 347767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 349914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 350214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 350733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 351697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 353776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 354065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 354584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 355293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 357372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 357696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 358213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 358906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 360961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 361270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 361805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 362520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 364631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 364933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 365547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 366444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 368602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 368904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 369441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 372704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 375050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 375286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 375705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 376271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 377870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 378092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 378509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 378968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 380999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 381347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 381793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 382615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 384308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 384550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 384968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 385452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 387068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 387293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 387731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 388186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 389808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 390033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 390486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 391004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 392621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 392846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 393270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 394295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 395932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 396162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 396616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 397125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 398747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 398973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 399415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 399899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 401514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 401742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 402172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 405555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 406030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 406452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 406883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 407286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 407706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 408094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 409035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 409696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 410226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 410706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 411483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 412425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 412852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 413247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 413675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 414557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 414990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 415415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 415843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 416285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 416752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 418848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 419083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 419564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 420013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 421674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 421915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 422373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 422837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 424455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 424684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 425133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 425570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 427212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 427469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 427932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 428482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 430260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 430515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 430974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 431473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 433082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 433314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 433800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 435451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 436012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 437661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 438165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 439764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 440232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 441876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 442367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 443979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 444463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 446098 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:55:24 446561 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 16:55:24 452601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 453816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 454047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:55:24 455987 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:55:24 456382 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:55:24 465430 --> Final output sent to browser
DEBUG - 2019-01-05 16:55:24 465586 --> Total execution time: 2.0932
INFO - 2019-01-05 11:25:26 183022 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 183211 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 184804 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 184895 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 185775 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 188349 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 189836 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 190877 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 191848 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 191917 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 192231 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 192878 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:26 274573 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 274759 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 276056 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 276124 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 276988 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 279448 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 280812 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 290693 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 290869 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 292612 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 292680 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 293915 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 302237 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 302314 --> Hooks Class Initialized
INFO - 2019-01-05 11:25:26 303298 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 304613 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 304683 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 305222 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 305761 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 11:25:26 309109 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 309185 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 310491 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 313381 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 315908 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 318408 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 320410 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 321780 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 321851 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 322510 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 323142 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:26 326589 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 328684 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 330652 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 330751 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 331197 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 331965 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:26 399585 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 399697 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 401236 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 401323 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 402210 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 404453 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 406234 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 407617 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 408833 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 408921 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 409320 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 409980 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:26 419311 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 419420 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 420866 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 420958 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 421824 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 423995 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 425640 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 426947 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 428200 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 428287 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 428694 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 429332 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:26 596762 --> Config Class Initialized
INFO - 2019-01-05 11:25:26 596954 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:26 599581 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:26 599704 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:26 600903 --> URI Class Initialized
INFO - 2019-01-05 11:25:26 603647 --> Router Class Initialized
INFO - 2019-01-05 11:25:26 605118 --> Output Class Initialized
INFO - 2019-01-05 11:25:26 606239 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:26 607856 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:26 607969 --> Input Class Initialized
INFO - 2019-01-05 11:25:26 608505 --> Language Class Initialized
ERROR - 2019-01-05 11:25:26 609241 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:25:27 374250 --> Config Class Initialized
INFO - 2019-01-05 11:25:27 374340 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:27 375500 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:27 375567 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:27 376224 --> URI Class Initialized
INFO - 2019-01-05 11:25:27 377576 --> Router Class Initialized
INFO - 2019-01-05 11:25:28 240216 --> Output Class Initialized
INFO - 2019-01-05 11:25:28 242343 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:28 244308 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:28 244427 --> Input Class Initialized
INFO - 2019-01-05 11:25:28 244823 --> Language Class Initialized
INFO - 2019-01-05 11:25:28 260945 --> Loader Class Initialized
INFO - 2019-01-05 11:25:28 261929 --> Helper loaded: url_helper
INFO - 2019-01-05 11:25:28 262428 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:55:28 268738 --> Database Driver Class Initialized
INFO - 2019-01-05 16:55:28 274696 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:55:28 275612 --> Controller Class Initialized
INFO - 2019-01-05 16:55:28 276573 --> Final output sent to browser
DEBUG - 2019-01-05 16:55:28 276650 --> Total execution time: 0.9033
INFO - 2019-01-05 11:25:29 015185 --> Config Class Initialized
INFO - 2019-01-05 11:25:29 015341 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:25:29 017539 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:25:29 017668 --> Utf8 Class Initialized
INFO - 2019-01-05 11:25:29 018996 --> URI Class Initialized
INFO - 2019-01-05 11:25:29 022393 --> Router Class Initialized
INFO - 2019-01-05 11:25:29 024996 --> Output Class Initialized
INFO - 2019-01-05 11:25:29 026976 --> Security Class Initialized
DEBUG - 2019-01-05 11:25:29 028769 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:25:29 028902 --> Input Class Initialized
INFO - 2019-01-05 11:25:29 029512 --> Language Class Initialized
ERROR - 2019-01-05 11:25:29 030488 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 11:27:21 741530 --> Config Class Initialized
INFO - 2019-01-05 11:27:21 741864 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:21 744280 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:21 744410 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:21 746012 --> URI Class Initialized
INFO - 2019-01-05 11:27:21 750183 --> Router Class Initialized
INFO - 2019-01-05 11:27:21 752861 --> Output Class Initialized
INFO - 2019-01-05 11:27:21 754868 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:21 756695 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:21 756820 --> Input Class Initialized
INFO - 2019-01-05 11:27:21 757407 --> Language Class Initialized
INFO - 2019-01-05 11:27:21 761347 --> Loader Class Initialized
INFO - 2019-01-05 11:27:21 762923 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:21 764163 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:21 786286 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:21 794759 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:21 796220 --> Controller Class Initialized
INFO - 2019-01-05 16:57:21 796960 --> Parser Class Initialized
INFO - 2019-01-05 16:57:21 798079 --> Helper loaded: html_helper
INFO - 2019-01-05 16:57:21 801331 --> Model Class Initialized
INFO - 2019-01-05 16:57:21 821044 --> Model Class Initialized
DEBUG - 2019-01-05 16:57:21 824455 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:57:21 825387 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:57:21 842236 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 16:57:21 842354 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 16:57:21 843612 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:57:21 845057 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:57:21 845261 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:57:21 846122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 846801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 847450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 848089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 848810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 849538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 850300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 851016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 851712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 852382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 853070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 853746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 854413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 855076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 855786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 856477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 857132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 857748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 858242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 858817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 859303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 859819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 860316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 860815 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:57:21 861413 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-05 16:57:21 861532 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-05 16:57:21 861615 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-05 16:57:21 863620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 866944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 868165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:21 875739 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:57:21 877157 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:57:21 884833 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:21 884927 --> Total execution time: 0.1383
INFO - 2019-01-05 11:27:22 463542 --> Config Class Initialized
INFO - 2019-01-05 11:27:22 463695 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:22 465898 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:22 466023 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:22 467299 --> URI Class Initialized
INFO - 2019-01-05 11:27:22 469682 --> Router Class Initialized
INFO - 2019-01-05 11:27:22 472083 --> Output Class Initialized
INFO - 2019-01-05 11:27:22 473939 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:22 475620 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:22 475745 --> Input Class Initialized
INFO - 2019-01-05 11:27:22 476300 --> Language Class Initialized
INFO - 2019-01-05 11:27:22 483453 --> Loader Class Initialized
INFO - 2019-01-05 11:27:22 484910 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:22 485733 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:22 495277 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:22 499686 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:22 501036 --> Controller Class Initialized
INFO - 2019-01-05 16:57:22 501930 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:22 502051 --> Total execution time: 0.0403
INFO - 2019-01-05 11:27:22 775770 --> Config Class Initialized
INFO - 2019-01-05 11:27:22 775985 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:22 777540 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:22 777623 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:22 778650 --> URI Class Initialized
INFO - 2019-01-05 11:27:22 781546 --> Router Class Initialized
INFO - 2019-01-05 11:27:22 783253 --> Output Class Initialized
INFO - 2019-01-05 11:27:22 784519 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:22 785639 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:22 785721 --> Input Class Initialized
INFO - 2019-01-05 11:27:22 786097 --> Language Class Initialized
ERROR - 2019-01-05 11:27:22 786726 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 11:27:28 417721 --> Config Class Initialized
INFO - 2019-01-05 11:27:28 417916 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:28 419348 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:28 419424 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:28 420281 --> URI Class Initialized
INFO - 2019-01-05 11:27:28 422894 --> Router Class Initialized
INFO - 2019-01-05 11:27:28 424546 --> Output Class Initialized
INFO - 2019-01-05 11:27:28 426281 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:28 428493 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:28 428612 --> Input Class Initialized
INFO - 2019-01-05 11:27:28 429172 --> Language Class Initialized
INFO - 2019-01-05 11:27:28 431550 --> Loader Class Initialized
INFO - 2019-01-05 11:27:28 432387 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:28 432840 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:28 438568 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:28 443720 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:28 444703 --> Controller Class Initialized
INFO - 2019-01-05 16:57:28 445086 --> Parser Class Initialized
INFO - 2019-01-05 16:57:28 445687 --> Helper loaded: html_helper
INFO - 2019-01-05 16:57:28 447386 --> Model Class Initialized
DEBUG - 2019-01-05 16:57:28 456171 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-05 16:57:28 462291 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-05 16:57:28 462992 --> Model Class Initialized
DEBUG - 2019-01-05 16:57:28 464854 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:57:28 465567 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:57:28 480374 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:57:28 481481 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:57:28 481579 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:57:28 483408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 485074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 493812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 494291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 494538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 496145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 496632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 496840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 498552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 498929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 499129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 500940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 501637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 501847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 503546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 504513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 504719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 506190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 508543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 509098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 509366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 511272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 512057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 512821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 513226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 513441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 515669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 517175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 517838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 518240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 518465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 520281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 521102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 521677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 522094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 522309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 523994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 524844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 525424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 525849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 526264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 528386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 529464 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:57:28 530661 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-05 16:57:28 533576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 535558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 535979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:28 539232 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:57:28 539968 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:57:28 549031 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:28 549163 --> Total execution time: 0.1246
INFO - 2019-01-05 11:27:29 322690 --> Config Class Initialized
INFO - 2019-01-05 11:27:29 323043 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:29 326036 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:29 326318 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:29 335603 --> Config Class Initialized
INFO - 2019-01-05 11:27:29 335938 --> Hooks Class Initialized
INFO - 2019-01-05 11:27:29 338076 --> URI Class Initialized
DEBUG - 2019-01-05 11:27:29 341195 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:29 341330 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:29 347968 --> Router Class Initialized
INFO - 2019-01-05 11:27:29 352787 --> URI Class Initialized
INFO - 2019-01-05 11:27:29 359936 --> Router Class Initialized
INFO - 2019-01-05 11:27:29 369028 --> Output Class Initialized
INFO - 2019-01-05 11:27:29 371910 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:29 376382 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:29 376667 --> Input Class Initialized
INFO - 2019-01-05 11:27:29 377311 --> Language Class Initialized
ERROR - 2019-01-05 11:27:29 378325 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 11:27:29 380851 --> Output Class Initialized
INFO - 2019-01-05 11:27:29 383378 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:29 385376 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:29 395052 --> Input Class Initialized
INFO - 2019-01-05 11:27:29 395560 --> Config Class Initialized
INFO - 2019-01-05 11:27:29 395900 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:29 398415 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:29 398559 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:29 400275 --> URI Class Initialized
INFO - 2019-01-05 11:27:29 402700 --> Language Class Initialized
ERROR - 2019-01-05 11:27:29 403748 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 11:27:29 409840 --> Router Class Initialized
INFO - 2019-01-05 11:27:29 417447 --> Output Class Initialized
INFO - 2019-01-05 11:27:29 419821 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:29 424634 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:29 424782 --> Input Class Initialized
INFO - 2019-01-05 11:27:29 425416 --> Language Class Initialized
ERROR - 2019-01-05 11:27:29 426558 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 11:27:29 661586 --> Config Class Initialized
INFO - 2019-01-05 11:27:29 661751 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:29 665466 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:29 665714 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:29 669677 --> URI Class Initialized
INFO - 2019-01-05 11:27:29 674034 --> Router Class Initialized
INFO - 2019-01-05 11:27:29 676590 --> Output Class Initialized
INFO - 2019-01-05 11:27:29 678607 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:29 680536 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:29 680757 --> Input Class Initialized
INFO - 2019-01-05 11:27:29 682039 --> Language Class Initialized
INFO - 2019-01-05 11:27:29 690277 --> Loader Class Initialized
INFO - 2019-01-05 11:27:29 691890 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:29 692734 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:29 703124 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:29 711652 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:29 713195 --> Controller Class Initialized
INFO - 2019-01-05 16:57:29 714216 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:29 714339 --> Total execution time: 0.0552
INFO - 2019-01-05 11:27:30 002280 --> Config Class Initialized
INFO - 2019-01-05 11:27:30 002484 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:30 005085 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:30 005182 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:30 006191 --> URI Class Initialized
INFO - 2019-01-05 11:27:30 008522 --> Router Class Initialized
INFO - 2019-01-05 11:27:30 010230 --> Output Class Initialized
INFO - 2019-01-05 11:27:30 012151 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:30 013469 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:30 013566 --> Input Class Initialized
INFO - 2019-01-05 11:27:30 013963 --> Language Class Initialized
ERROR - 2019-01-05 11:27:30 014664 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 11:27:48 440489 --> Config Class Initialized
INFO - 2019-01-05 11:27:48 440982 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:48 447879 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:48 448122 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:48 452580 --> URI Class Initialized
INFO - 2019-01-05 11:27:48 465528 --> Router Class Initialized
INFO - 2019-01-05 11:27:48 470949 --> Output Class Initialized
INFO - 2019-01-05 11:27:48 473016 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:48 474914 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:48 475040 --> Input Class Initialized
INFO - 2019-01-05 11:27:48 475651 --> Language Class Initialized
INFO - 2019-01-05 11:27:48 484817 --> Loader Class Initialized
INFO - 2019-01-05 11:27:48 486409 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:48 487230 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:48 498008 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:48 507071 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:48 508604 --> Controller Class Initialized
INFO - 2019-01-05 16:57:48 509330 --> Parser Class Initialized
INFO - 2019-01-05 16:57:48 510487 --> Helper loaded: html_helper
DEBUG - 2019-01-05 16:57:48 510632 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-05 16:57:48 514060 --> Model Class Initialized
INFO - 2019-01-05 16:57:48 533858 --> Helper loaded: cookie_helper
DEBUG - 2019-01-05 16:57:48 535972 --> updatecount for view business88888888 [UPDATE `bd_business_details` SET `num_business_viewed` = 6
WHERE `form_id` = '305']
INFO - 2019-01-05 16:57:48 536747 --> Model Class Initialized
DEBUG - 2019-01-05 16:57:48 537544 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:57:48 538750 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:57:48 549217 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:57:48 551356 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:57:48 551567 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:57:48 563469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 565288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 568001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 568859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 569626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 570552 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:57:48 571475 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-05 16:57:48 573755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 575325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 575690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:57:48 578147 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:57:48 579911 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:57:48 588021 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:48 588134 --> Total execution time: 0.1466
INFO - 2019-01-05 11:27:48 743534 --> Config Class Initialized
INFO - 2019-01-05 11:27:48 743751 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:48 745254 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:48 745335 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:48 746484 --> URI Class Initialized
INFO - 2019-01-05 11:27:48 749269 --> Router Class Initialized
INFO - 2019-01-05 11:27:48 751173 --> Output Class Initialized
INFO - 2019-01-05 11:27:48 752969 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:48 754291 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:48 754371 --> Input Class Initialized
INFO - 2019-01-05 11:27:48 754762 --> Language Class Initialized
ERROR - 2019-01-05 11:27:48 755774 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:27:48 773844 --> Config Class Initialized
INFO - 2019-01-05 11:27:48 774027 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:48 777609 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:48 778084 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:48 780795 --> URI Class Initialized
INFO - 2019-01-05 11:27:48 787704 --> Router Class Initialized
INFO - 2019-01-05 11:27:48 789931 --> Output Class Initialized
INFO - 2019-01-05 11:27:48 791116 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:48 792197 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:48 792279 --> Input Class Initialized
INFO - 2019-01-05 11:27:48 792654 --> Language Class Initialized
ERROR - 2019-01-05 11:27:48 793241 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:27:48 837491 --> Config Class Initialized
INFO - 2019-01-05 11:27:48 837814 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:48 840235 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:48 840362 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:48 842010 --> URI Class Initialized
INFO - 2019-01-05 11:27:48 846659 --> Router Class Initialized
INFO - 2019-01-05 11:27:48 849302 --> Output Class Initialized
INFO - 2019-01-05 11:27:48 851296 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:48 853143 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:48 853271 --> Input Class Initialized
INFO - 2019-01-05 11:27:48 853890 --> Language Class Initialized
ERROR - 2019-01-05 11:27:48 854871 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:27:48 856000 --> Config Class Initialized
INFO - 2019-01-05 11:27:48 856132 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:48 859158 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:48 859275 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:48 860570 --> URI Class Initialized
INFO - 2019-01-05 11:27:48 863598 --> Router Class Initialized
INFO - 2019-01-05 11:27:48 866029 --> Output Class Initialized
INFO - 2019-01-05 11:27:48 867858 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:48 869724 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:48 869837 --> Input Class Initialized
INFO - 2019-01-05 11:27:48 870348 --> Language Class Initialized
INFO - 2019-01-05 11:27:48 879590 --> Loader Class Initialized
INFO - 2019-01-05 11:27:48 881356 --> Helper loaded: url_helper
INFO - 2019-01-05 11:27:48 882239 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:57:48 892996 --> Database Driver Class Initialized
INFO - 2019-01-05 16:57:48 918909 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:57:48 921164 --> Controller Class Initialized
INFO - 2019-01-05 16:57:48 922559 --> Final output sent to browser
DEBUG - 2019-01-05 16:57:48 922688 --> Total execution time: 0.0687
INFO - 2019-01-05 11:27:49 531757 --> Config Class Initialized
INFO - 2019-01-05 11:27:49 532037 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:27:49 534441 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:27:49 534558 --> Utf8 Class Initialized
INFO - 2019-01-05 11:27:49 536148 --> URI Class Initialized
INFO - 2019-01-05 11:27:49 541380 --> Router Class Initialized
INFO - 2019-01-05 11:27:49 543612 --> Output Class Initialized
INFO - 2019-01-05 11:27:49 544852 --> Security Class Initialized
DEBUG - 2019-01-05 11:27:49 545964 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:27:49 546119 --> Input Class Initialized
INFO - 2019-01-05 11:27:49 546681 --> Language Class Initialized
ERROR - 2019-01-05 11:27:49 547708 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:19 605480 --> Config Class Initialized
INFO - 2019-01-05 11:28:19 605719 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:19 607474 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:19 607568 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:19 608679 --> URI Class Initialized
INFO - 2019-01-05 11:28:19 616527 --> Config Class Initialized
INFO - 2019-01-05 11:28:19 616751 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:19 618393 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:19 618546 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:19 625372 --> Router Class Initialized
INFO - 2019-01-05 11:28:19 629939 --> Output Class Initialized
INFO - 2019-01-05 11:28:19 630597 --> URI Class Initialized
INFO - 2019-01-05 11:28:19 632973 --> Router Class Initialized
INFO - 2019-01-05 11:28:19 634792 --> Output Class Initialized
INFO - 2019-01-05 11:28:19 636136 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:19 637414 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:19 637511 --> Input Class Initialized
INFO - 2019-01-05 11:28:19 637922 --> Language Class Initialized
INFO - 2019-01-05 11:28:19 641550 --> Loader Class Initialized
INFO - 2019-01-05 11:28:19 641609 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:19 642915 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:19 643004 --> Input Class Initialized
INFO - 2019-01-05 11:28:19 643424 --> Language Class Initialized
INFO - 2019-01-05 11:28:19 644774 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:19 645327 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:19 652316 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:19 658166 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:19 659157 --> Controller Class Initialized
INFO - 2019-01-05 16:58:19 659667 --> Parser Class Initialized
INFO - 2019-01-05 16:58:19 660407 --> Helper loaded: html_helper
DEBUG - 2019-01-05 16:58:19 660510 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-05 11:28:19 669122 --> Loader Class Initialized
INFO - 2019-01-05 11:28:19 672219 --> Helper loaded: url_helper
INFO - 2019-01-05 16:58:19 673772 --> Model Class Initialized
INFO - 2019-01-05 11:28:19 674889 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:19 691071 --> Helper loaded: cookie_helper
INFO - 2019-01-05 16:58:19 691602 --> Model Class Initialized
DEBUG - 2019-01-05 16:58:19 692065 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:58:19 692854 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:58:19 694897 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:58:19 696274 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:58:19 696391 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
INFO - 2019-01-05 16:58:19 700526 --> Database Driver Class Initialized
DEBUG - 2019-01-05 16:58:19 704276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 707122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 712697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 713495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 714178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 714946 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:19 715701 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-05 16:58:19 717483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 718733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 719007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:19 721096 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:19 724646 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:58:19 734312 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:19 734415 --> Total execution time: 0.1119
INFO - 2019-01-05 16:58:19 734738 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:19 735783 --> Controller Class Initialized
INFO - 2019-01-05 16:58:19 751394 --> Model Class Initialized
INFO - 2019-01-05 16:58:19 806782 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:19 806890 --> Total execution time: 0.2028
INFO - 2019-01-05 11:28:19 971901 --> Config Class Initialized
INFO - 2019-01-05 11:28:19 972228 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:19 974700 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:19 974828 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:19 976461 --> URI Class Initialized
INFO - 2019-01-05 11:28:19 981029 --> Router Class Initialized
INFO - 2019-01-05 11:28:19 983678 --> Output Class Initialized
INFO - 2019-01-05 11:28:19 985646 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:19 987479 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:19 987608 --> Input Class Initialized
INFO - 2019-01-05 11:28:19 988202 --> Language Class Initialized
ERROR - 2019-01-05 11:28:19 989171 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:20 044867 --> Config Class Initialized
INFO - 2019-01-05 11:28:20 044996 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:20 059087 --> Config Class Initialized
INFO - 2019-01-05 11:28:20 059360 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:20 063411 --> Config Class Initialized
INFO - 2019-01-05 11:28:20 063692 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:20 065659 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:20 065761 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:20 067076 --> URI Class Initialized
DEBUG - 2019-01-05 11:28:20 067811 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:20 067917 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:20 068949 --> URI Class Initialized
INFO - 2019-01-05 11:28:20 071999 --> Router Class Initialized
INFO - 2019-01-05 11:28:20 074174 --> Output Class Initialized
DEBUG - 2019-01-05 11:28:20 075433 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:20 075550 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:20 076853 --> URI Class Initialized
INFO - 2019-01-05 11:28:20 079205 --> Router Class Initialized
INFO - 2019-01-05 11:28:20 081373 --> Output Class Initialized
INFO - 2019-01-05 11:28:20 084851 --> Router Class Initialized
INFO - 2019-01-05 11:28:20 086997 --> Output Class Initialized
INFO - 2019-01-05 11:28:20 089654 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:20 091006 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:20 091109 --> Input Class Initialized
INFO - 2019-01-05 11:28:20 091624 --> Language Class Initialized
ERROR - 2019-01-05 11:28:20 092376 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:20 329014 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:20 331835 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:20 331970 --> Input Class Initialized
INFO - 2019-01-05 11:28:20 332606 --> Language Class Initialized
INFO - 2019-01-05 11:28:20 336503 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:20 338450 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:20 338591 --> Input Class Initialized
INFO - 2019-01-05 11:28:20 339189 --> Language Class Initialized
ERROR - 2019-01-05 11:28:20 340179 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:20 346599 --> Loader Class Initialized
INFO - 2019-01-05 11:28:20 348186 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:20 349006 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:20 359421 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:20 367275 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:20 368762 --> Controller Class Initialized
INFO - 2019-01-05 16:58:20 369816 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:20 369939 --> Total execution time: 0.3124
INFO - 2019-01-05 11:28:20 870632 --> Config Class Initialized
INFO - 2019-01-05 11:28:20 870877 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:20 872504 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:20 872572 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:20 873707 --> URI Class Initialized
INFO - 2019-01-05 11:28:20 877115 --> Router Class Initialized
INFO - 2019-01-05 11:28:20 878597 --> Output Class Initialized
INFO - 2019-01-05 11:28:20 879812 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:20 880722 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:20 880789 --> Input Class Initialized
INFO - 2019-01-05 11:28:20 881093 --> Language Class Initialized
ERROR - 2019-01-05 11:28:20 881606 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:45 449079 --> Config Class Initialized
INFO - 2019-01-05 11:28:45 449430 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:45 452090 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:45 452229 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:45 453927 --> URI Class Initialized
INFO - 2019-01-05 11:28:45 457659 --> Config Class Initialized
INFO - 2019-01-05 11:28:45 457972 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:45 461098 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:45 461251 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:45 463062 --> URI Class Initialized
INFO - 2019-01-05 11:28:45 468353 --> Router Class Initialized
INFO - 2019-01-05 11:28:45 471491 --> Output Class Initialized
INFO - 2019-01-05 11:28:45 473824 --> Security Class Initialized
INFO - 2019-01-05 11:28:45 479468 --> Router Class Initialized
INFO - 2019-01-05 11:28:45 482422 --> Output Class Initialized
INFO - 2019-01-05 11:28:45 484411 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:45 486011 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:45 486211 --> Input Class Initialized
INFO - 2019-01-05 11:28:45 487353 --> Language Class Initialized
INFO - 2019-01-05 11:28:45 491246 --> Loader Class Initialized
DEBUG - 2019-01-05 11:28:45 493618 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:45 493753 --> Input Class Initialized
INFO - 2019-01-05 11:28:45 494390 --> Language Class Initialized
INFO - 2019-01-05 11:28:45 496900 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:45 497550 --> Helper loaded: utility_helper
INFO - 2019-01-05 11:28:45 508841 --> Loader Class Initialized
INFO - 2019-01-05 11:28:45 510618 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:45 511555 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:45 517786 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:45 525840 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:45 538754 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:45 540369 --> Controller Class Initialized
INFO - 2019-01-05 16:58:45 541167 --> Parser Class Initialized
INFO - 2019-01-05 16:58:45 542404 --> Helper loaded: html_helper
DEBUG - 2019-01-05 16:58:45 542551 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-05 16:58:45 551196 --> Model Class Initialized
INFO - 2019-01-05 16:58:45 559283 --> Helper loaded: cookie_helper
INFO - 2019-01-05 16:58:45 559860 --> Model Class Initialized
DEBUG - 2019-01-05 16:58:45 560559 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:58:45 561383 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:58:45 563499 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:58:45 564913 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:58:45 565033 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:58:45 576113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 577923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 580184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 580957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 581690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 582587 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:45 583939 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-05 16:58:45 585774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 587029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 587301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:45 589334 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:45 590871 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:58:45 599111 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:45 599234 --> Total execution time: 0.1448
INFO - 2019-01-05 16:58:45 599677 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:45 601121 --> Controller Class Initialized
INFO - 2019-01-05 16:58:45 610837 --> Model Class Initialized
INFO - 2019-01-05 16:58:45 618330 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:45 618486 --> Total execution time: 0.1728
INFO - 2019-01-05 11:28:46 922470 --> Config Class Initialized
INFO - 2019-01-05 11:28:46 922703 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:46 926052 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:46 926219 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:46 928185 --> URI Class Initialized
INFO - 2019-01-05 11:28:46 943651 --> Router Class Initialized
INFO - 2019-01-05 11:28:46 947318 --> Output Class Initialized
INFO - 2019-01-05 11:28:46 949991 --> Security Class Initialized
INFO - 2019-01-05 11:28:46 959544 --> Config Class Initialized
INFO - 2019-01-05 11:28:46 959928 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:46 963989 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:46 964155 --> Input Class Initialized
INFO - 2019-01-05 11:28:46 964948 --> Language Class Initialized
ERROR - 2019-01-05 11:28:46 966250 --> 404 Page Not Found: Browse-sector-listing-details/305
DEBUG - 2019-01-05 11:28:46 970324 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:46 970508 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:46 973097 --> URI Class Initialized
INFO - 2019-01-05 11:28:46 980993 --> Router Class Initialized
INFO - 2019-01-05 11:28:46 986691 --> Output Class Initialized
INFO - 2019-01-05 11:28:46 988612 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:46 990523 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:46 990647 --> Input Class Initialized
INFO - 2019-01-05 11:28:46 991204 --> Language Class Initialized
ERROR - 2019-01-05 11:28:46 992139 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:47 010001 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 010703 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:47 013125 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 013247 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 014781 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 020348 --> Router Class Initialized
INFO - 2019-01-05 11:28:47 022928 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 024975 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 026707 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 026957 --> Input Class Initialized
INFO - 2019-01-05 11:28:47 027538 --> Language Class Initialized
ERROR - 2019-01-05 11:28:47 028464 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:47 105603 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 105812 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:47 107462 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 107541 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 108637 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 111107 --> Router Class Initialized
INFO - 2019-01-05 11:28:47 112952 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 114332 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 115638 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 115715 --> Input Class Initialized
INFO - 2019-01-05 11:28:47 116116 --> Language Class Initialized
INFO - 2019-01-05 11:28:47 118699 --> Loader Class Initialized
INFO - 2019-01-05 11:28:47 119782 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:47 120337 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:47 127826 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:47 134424 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:47 135432 --> Controller Class Initialized
INFO - 2019-01-05 16:58:47 135922 --> Parser Class Initialized
INFO - 2019-01-05 16:58:47 136658 --> Helper loaded: html_helper
DEBUG - 2019-01-05 16:58:47 136749 --> Controller:::::::::::::::: user_business_profile
INFO - 2019-01-05 16:58:47 139216 --> Model Class Initialized
INFO - 2019-01-05 16:58:47 146312 --> Helper loaded: cookie_helper
INFO - 2019-01-05 16:58:47 146826 --> Model Class Initialized
DEBUG - 2019-01-05 16:58:47 147489 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 16:58:47 148318 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:58:47 151278 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:58:47 152662 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:58:47 152769 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:58:47 156446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:47 157916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:47 167572 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:47 169214 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:58:47 175535 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:47 175627 --> Total execution time: 0.0656
INFO - 2019-01-05 11:28:47 322838 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 323177 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:47 325989 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 326122 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 328016 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 331871 --> Router Class Initialized
INFO - 2019-01-05 11:28:47 333900 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 335400 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 336810 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 336908 --> Input Class Initialized
INFO - 2019-01-05 11:28:47 337357 --> Language Class Initialized
ERROR - 2019-01-05 11:28:47 338097 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:47 627144 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 627271 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:47 628958 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 629064 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 630095 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 637360 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 637487 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:47 644059 --> Config Class Initialized
INFO - 2019-01-05 11:28:47 644171 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:47 646763 --> Router Class Initialized
INFO - 2019-01-05 11:28:47 648806 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 650357 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 651844 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 651954 --> Input Class Initialized
DEBUG - 2019-01-05 11:28:47 653305 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 653409 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 654445 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 657521 --> Router Class Initialized
DEBUG - 2019-01-05 11:28:47 659912 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:47 660017 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:47 661030 --> URI Class Initialized
INFO - 2019-01-05 11:28:47 666462 --> Language Class Initialized
ERROR - 2019-01-05 11:28:47 668483 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:47 671667 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 673701 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 675064 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 675165 --> Input Class Initialized
INFO - 2019-01-05 11:28:47 675638 --> Language Class Initialized
ERROR - 2019-01-05 11:28:47 676369 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 11:28:47 678057 --> Router Class Initialized
INFO - 2019-01-05 11:28:47 680136 --> Output Class Initialized
INFO - 2019-01-05 11:28:47 681721 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:47 683157 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:47 683267 --> Input Class Initialized
INFO - 2019-01-05 11:28:47 683748 --> Language Class Initialized
INFO - 2019-01-05 11:28:47 690090 --> Loader Class Initialized
INFO - 2019-01-05 11:28:47 691350 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:47 692023 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:47 700330 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:47 706974 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:47 708173 --> Controller Class Initialized
INFO - 2019-01-05 16:58:47 709005 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:47 709104 --> Total execution time: 0.0663
INFO - 2019-01-05 11:28:58 193641 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 193841 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 195250 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 195327 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 196192 --> URI Class Initialized
DEBUG - 2019-01-05 11:28:58 197653 --> No URI present. Default controller set.
INFO - 2019-01-05 11:28:58 197742 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 199255 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 200388 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 201488 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 201565 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 201911 --> Language Class Initialized
INFO - 2019-01-05 11:28:58 204174 --> Loader Class Initialized
INFO - 2019-01-05 11:28:58 205086 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:58 205583 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:58 211530 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:58 216840 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:58 217689 --> Controller Class Initialized
INFO - 2019-01-05 16:58:58 218108 --> Parser Class Initialized
INFO - 2019-01-05 16:58:58 218755 --> Helper loaded: html_helper
INFO - 2019-01-05 16:58:58 219439 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 16:58:58 221312 --> Model Class Initialized
DEBUG - 2019-01-05 16:58:58 229662 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 16:58:58 234797 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 16:58:58 235620 --> Model Class Initialized
DEBUG - 2019-01-05 16:58:58 236514 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 16:58:58 239995 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:58:58 242285 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:58:58 242480 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:58:58 246772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 248258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 257827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 261048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 265650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 266098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 266845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 267833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 271557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 272371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 273103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 273987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 276813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 277209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 277929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 278856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 281743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 282167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 282907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 283827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 286710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 287138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 287884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 288630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 291548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 292021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 292785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 293500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 296514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 296941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 297717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 298429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 301465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 301893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 302681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 303397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 306432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 306866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 307648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 308362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 311455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 311897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 312850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 314337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 319022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 319758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 321131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 323270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 330315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 330836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 331686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 332473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 335601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 336030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 336868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 337604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 340714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 341142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 341984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 342711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 345827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 346257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 347098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 347812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 350940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 351371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 352205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 352926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 356053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 356513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 357332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 358042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 358686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 359297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 359911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 360517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 361114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 361707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 362296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 362896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 363487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 364062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 364644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 365216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 365797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 366367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 366987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 367979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 368817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 369632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 370426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 371247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 371916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 375241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 375714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 376595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 377253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 380487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 380930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 381824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 382517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 385632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 386058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 386934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 387612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 390818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 391258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 392151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 392816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 395970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 396409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 397289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 397967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 401108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 401575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 402513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 410588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 411885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 420495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 421349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 424499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 425211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 428409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 429128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 432236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 432940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 436038 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:58 436705 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 16:58:58 439745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 441777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 442219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:58:58 445399 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:58:58 446161 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:58:58 456342 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:58 456573 --> Total execution time: 0.2552
INFO - 2019-01-05 11:28:58 684994 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 685333 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 688339 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 688497 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 690154 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 695122 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 698328 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 700454 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 702464 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 702596 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 703197 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 705033 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 741338 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 741554 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 744458 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 744592 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 745913 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 751102 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 756135 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 758984 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 772090 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 772278 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 773179 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 781609 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 808731 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 809045 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:58 819041 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 819178 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 821242 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 821367 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 825360 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 825684 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:58 830652 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 833885 --> Router Class Initialized
DEBUG - 2019-01-05 11:28:58 836122 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 836246 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 837865 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 840780 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 841079 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 843529 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 843657 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 845283 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 846508 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 846821 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:28:58 849245 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 849370 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 852394 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 854366 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 861634 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 861763 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 863348 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 867909 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 870008 --> URI Class Initialized
DEBUG - 2019-01-05 11:28:58 875221 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 875353 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 875996 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 876949 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 882277 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 886049 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 888756 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 897823 --> Config Class Initialized
INFO - 2019-01-05 11:28:58 897960 --> Hooks Class Initialized
INFO - 2019-01-05 11:28:58 899781 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 901664 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 901793 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 902391 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 906553 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 908720 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 911437 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 913436 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 915395 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 917243 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 917370 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 918637 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 919632 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 11:28:58 921796 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:28:58 921952 --> Utf8 Class Initialized
INFO - 2019-01-05 11:28:58 923259 --> URI Class Initialized
INFO - 2019-01-05 11:28:58 925589 --> Router Class Initialized
INFO - 2019-01-05 11:28:58 927457 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 929461 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 931294 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 931438 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 932049 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 933024 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 934438 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 936445 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 936621 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 937222 --> Language Class Initialized
ERROR - 2019-01-05 11:28:58 938242 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:28:58 940835 --> Output Class Initialized
INFO - 2019-01-05 11:28:58 942694 --> Security Class Initialized
DEBUG - 2019-01-05 11:28:58 944340 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:28:58 944482 --> Input Class Initialized
INFO - 2019-01-05 11:28:58 945027 --> Language Class Initialized
INFO - 2019-01-05 11:28:58 952991 --> Loader Class Initialized
INFO - 2019-01-05 11:28:58 954438 --> Helper loaded: url_helper
INFO - 2019-01-05 11:28:58 955231 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:58:58 964284 --> Database Driver Class Initialized
INFO - 2019-01-05 16:58:58 971771 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:58:58 975737 --> Controller Class Initialized
INFO - 2019-01-05 16:58:58 976911 --> Final output sent to browser
DEBUG - 2019-01-05 16:58:58 977032 --> Total execution time: 0.0809
INFO - 2019-01-05 11:29:02 055056 --> Config Class Initialized
INFO - 2019-01-05 11:29:02 055279 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:02 058847 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:02 059037 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:02 061111 --> URI Class Initialized
INFO - 2019-01-05 11:29:02 065310 --> Router Class Initialized
INFO - 2019-01-05 11:29:02 069495 --> Output Class Initialized
INFO - 2019-01-05 11:29:02 072768 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:02 075727 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:02 075907 --> Input Class Initialized
INFO - 2019-01-05 11:29:02 076853 --> Language Class Initialized
INFO - 2019-01-05 11:29:02 096911 --> Loader Class Initialized
INFO - 2019-01-05 11:29:02 099313 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:02 100716 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:02 116077 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:02 128134 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:02 130651 --> Controller Class Initialized
INFO - 2019-01-05 16:59:02 149358 --> Model Class Initialized
INFO - 2019-01-05 11:29:02 248028 --> Config Class Initialized
INFO - 2019-01-05 11:29:02 248219 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:02 251086 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:02 251246 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:02 253047 --> URI Class Initialized
INFO - 2019-01-05 11:29:02 256699 --> Router Class Initialized
INFO - 2019-01-05 11:29:02 260162 --> Output Class Initialized
INFO - 2019-01-05 11:29:02 262859 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:02 265360 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:02 265571 --> Input Class Initialized
INFO - 2019-01-05 11:29:02 266297 --> Language Class Initialized
INFO - 2019-01-05 11:29:02 272450 --> Loader Class Initialized
INFO - 2019-01-05 11:29:02 273726 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:02 274358 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:02 283988 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:02 290186 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:02 291590 --> Controller Class Initialized
INFO - 2019-01-05 16:59:02 292201 --> Parser Class Initialized
INFO - 2019-01-05 16:59:02 293282 --> Helper loaded: html_helper
INFO - 2019-01-05 16:59:02 294229 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:59:02 305865 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:59:02 307766 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:59:02 307928 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:59:02 314030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 335607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 337379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 350364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 352224 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:59:02 368546 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/sell_a_business/listbusiness/basic-information.php
DEBUG - 2019-01-05 16:59:02 371109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 373764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 374196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:02 378032 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:59:02 378946 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:59:02 387392 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:02 387561 --> Total execution time: 0.1344
INFO - 2019-01-05 11:29:03 032368 --> Config Class Initialized
INFO - 2019-01-05 11:29:03 032511 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:03 034982 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:03 041687 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:03 043109 --> URI Class Initialized
INFO - 2019-01-05 11:29:03 044668 --> Router Class Initialized
INFO - 2019-01-05 11:29:03 046070 --> Output Class Initialized
INFO - 2019-01-05 11:29:03 047133 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:03 048147 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:03 048237 --> Input Class Initialized
INFO - 2019-01-05 11:29:03 048561 --> Language Class Initialized
INFO - 2019-01-05 11:29:03 052998 --> Loader Class Initialized
INFO - 2019-01-05 11:29:03 053874 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:03 054323 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:03 060159 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:03 065288 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:03 067307 --> Controller Class Initialized
INFO - 2019-01-05 16:59:03 067940 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:03 068013 --> Total execution time: 0.0374
INFO - 2019-01-05 11:29:13 222491 --> Config Class Initialized
INFO - 2019-01-05 11:29:13 222716 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:13 224740 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:13 224826 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:13 225852 --> URI Class Initialized
INFO - 2019-01-05 11:29:13 227896 --> Router Class Initialized
INFO - 2019-01-05 11:29:13 229667 --> Output Class Initialized
INFO - 2019-01-05 11:29:13 230947 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:13 232250 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:13 232335 --> Input Class Initialized
INFO - 2019-01-05 11:29:13 232728 --> Language Class Initialized
INFO - 2019-01-05 11:29:13 236524 --> Loader Class Initialized
INFO - 2019-01-05 11:29:13 237518 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:13 238089 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:13 244993 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:13 326951 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:13 328484 --> Controller Class Initialized
INFO - 2019-01-05 16:59:13 329354 --> Parser Class Initialized
INFO - 2019-01-05 16:59:13 330439 --> Helper loaded: html_helper
INFO - 2019-01-05 16:59:13 335655 --> Model Class Initialized
INFO - 2019-01-05 16:59:13 336488 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 16:59:13 351255 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/sell_a_business/listbusiness/business-description.php
ERROR - 2019-01-05 16:59:13 354121 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:59:13 355263 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:59:13 355364 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:59:13 358839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:13 359870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:13 365850 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:59:13 366983 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:59:13 373158 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:13 373229 --> Total execution time: 0.1465
INFO - 2019-01-05 11:29:13 532769 --> Config Class Initialized
INFO - 2019-01-05 11:29:13 533020 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:13 534867 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:13 534965 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:13 536175 --> URI Class Initialized
INFO - 2019-01-05 11:29:13 539169 --> Router Class Initialized
INFO - 2019-01-05 11:29:13 541169 --> Output Class Initialized
INFO - 2019-01-05 11:29:13 542686 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:13 544079 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:13 544177 --> Input Class Initialized
INFO - 2019-01-05 11:29:13 544646 --> Language Class Initialized
INFO - 2019-01-05 11:29:13 550616 --> Loader Class Initialized
INFO - 2019-01-05 11:29:13 551805 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:13 552414 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:13 560211 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:13 607440 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:13 608572 --> Controller Class Initialized
INFO - 2019-01-05 16:59:13 609350 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:13 609451 --> Total execution time: 0.0782
INFO - 2019-01-05 11:29:28 064104 --> Config Class Initialized
INFO - 2019-01-05 11:29:28 064312 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:28 065970 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:28 066051 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:28 067135 --> URI Class Initialized
INFO - 2019-01-05 11:29:28 069000 --> Router Class Initialized
INFO - 2019-01-05 11:29:28 070859 --> Output Class Initialized
INFO - 2019-01-05 11:29:28 072251 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:28 073898 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:28 074021 --> Input Class Initialized
INFO - 2019-01-05 11:29:28 074724 --> Language Class Initialized
INFO - 2019-01-05 11:29:28 081995 --> Loader Class Initialized
INFO - 2019-01-05 11:29:28 083595 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:28 084284 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:28 094017 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:28 103244 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:28 104751 --> Controller Class Initialized
INFO - 2019-01-05 16:59:28 105508 --> Parser Class Initialized
INFO - 2019-01-05 16:59:28 106889 --> Helper loaded: html_helper
INFO - 2019-01-05 16:59:28 121721 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:28 124628 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'unnatinanda18@gmail.com']
INFO - 2019-01-05 16:59:28 131731 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:28 133625 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'unnatinanda18@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2019-01-05 16:59:28 140508 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:28 146338 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `num_business_viewed`, `add_to_favorite`, `business_add_date`
FROM `bd_business_details`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
DEBUG - 2019-01-05 16:59:28 151420 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`name`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `buy_invest_in`, `num_business_viewed`, `added_date`
FROM `bd_business_details`
LEFT JOIN `bd_buy_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
INFO - 2019-01-05 16:59:28 157779 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:28 161467 --> Last query to getBuyContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-05 16:59:28 163256 --> Last query to getAllContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-05 16:59:28 164956 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-05 16:59:28 166659 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-05 16:59:28 172696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_view_user`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_view_user`.`viewed_form_id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `viewed_user_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-05 16:59:28 178019 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `like_user_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-05 16:59:28 180833 --> Last query to getFhhhhhavCou88888ntAll  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-05 16:59:28 182723 --> Last query to getContact33333  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `customer_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-05 16:59:28 184560 --> Last query to getFavCountBuy  [SELECT COUNT(*) AS `numrows`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business'
AND `add_to_favorite` = '1']
INFO - 2019-01-05 16:59:28 190025 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:28 250430 --> listing_model: RecommendedBusinessList: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `listing_category` = '']
DEBUG - 2019-01-05 16:59:28 255527 --> listing_model: RecommendedBusinessList111: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
WHERE `listing_category` = '']
DEBUG - 2019-01-05 16:59:28 257194 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '270']
DEBUG - 2019-01-05 16:59:28 259437 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '270']
DEBUG - 2019-01-05 16:59:28 261059 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '269']
DEBUG - 2019-01-05 16:59:28 262597 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '269']
DEBUG - 2019-01-05 16:59:28 264126 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '268']
DEBUG - 2019-01-05 16:59:28 265595 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '268']
DEBUG - 2019-01-05 16:59:28 267194 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '267']
DEBUG - 2019-01-05 16:59:28 268652 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '267']
DEBUG - 2019-01-05 16:59:28 270189 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '266']
DEBUG - 2019-01-05 16:59:28 271680 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '266']
DEBUG - 2019-01-05 16:59:28 273206 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '265']
DEBUG - 2019-01-05 16:59:28 274696 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '265']
DEBUG - 2019-01-05 16:59:28 276281 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '225']
DEBUG - 2019-01-05 16:59:28 277800 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '225']
DEBUG - 2019-01-05 16:59:28 279378 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '224']
DEBUG - 2019-01-05 16:59:28 280824 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '224']
DEBUG - 2019-01-05 16:59:28 282322 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '223']
DEBUG - 2019-01-05 16:59:28 283837 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '223']
DEBUG - 2019-01-05 16:59:28 285348 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '221']
DEBUG - 2019-01-05 16:59:28 286849 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '221']
DEBUG - 2019-01-05 16:59:28 288422 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '219']
DEBUG - 2019-01-05 16:59:28 289882 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '219']
DEBUG - 2019-01-05 16:59:28 291441 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '218']
DEBUG - 2019-01-05 16:59:28 292908 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '218']
DEBUG - 2019-01-05 16:59:28 294445 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '212']
DEBUG - 2019-01-05 16:59:28 295897 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '212']
DEBUG - 2019-01-05 16:59:28 297451 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '196']
DEBUG - 2019-01-05 16:59:28 298896 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '196']
DEBUG - 2019-01-05 16:59:28 300436 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '195']
DEBUG - 2019-01-05 16:59:28 301872 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '195']
DEBUG - 2019-01-05 16:59:28 303512 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '194']
DEBUG - 2019-01-05 16:59:28 304979 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '194']
DEBUG - 2019-01-05 16:59:28 306571 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '193']
DEBUG - 2019-01-05 16:59:28 308041 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '193']
DEBUG - 2019-01-05 16:59:28 309608 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '192']
DEBUG - 2019-01-05 16:59:28 311096 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '192']
DEBUG - 2019-01-05 16:59:28 312640 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '191']
DEBUG - 2019-01-05 16:59:28 314966 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '191']
DEBUG - 2019-01-05 16:59:28 318737 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '187']
DEBUG - 2019-01-05 16:59:28 320259 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '187']
DEBUG - 2019-01-05 16:59:28 321912 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '186']
DEBUG - 2019-01-05 16:59:28 323493 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '186']
DEBUG - 2019-01-05 16:59:28 325098 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '185']
DEBUG - 2019-01-05 16:59:28 326596 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '185']
DEBUG - 2019-01-05 16:59:28 328116 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '180']
DEBUG - 2019-01-05 16:59:28 329556 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '180']
DEBUG - 2019-01-05 16:59:28 331077 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '179']
DEBUG - 2019-01-05 16:59:28 332518 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '179']
DEBUG - 2019-01-05 16:59:28 334027 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '178']
DEBUG - 2019-01-05 16:59:28 335458 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '178']
INFO - 2019-01-05 16:59:28 336276 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 16:59:28 351906 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 248
ERROR - 2019-01-05 16:59:28 353190 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:59:28 354480 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:59:28 354594 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
ERROR - 2019-01-05 16:59:28 355535 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 355628 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 355743 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 356452 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 356544 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 356647 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 357292 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 357374 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 357573 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 358213 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 358295 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 358401 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 359047 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 359128 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 359235 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 359890 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 359973 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 360074 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 360759 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 793742 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 794137 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 795794 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 796053 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 796380 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 797785 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 798041 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 798341 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 799762 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 800014 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 800331 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 801695 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 801948 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 802262 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 803574 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 803829 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 804146 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 805512 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 805766 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 806083 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 807328 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 807595 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 807909 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 824002 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 824182 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 824399 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 825633 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 825779 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 825952 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 827069 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 827214 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 827385 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 829065 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 829297 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 829622 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 830949 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 831093 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
DEBUG - 2019-01-05 16:59:28 831257 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 16:59:28 832441 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 525
ERROR - 2019-01-05 16:59:28 832593 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 594
ERROR - 2019-01-05 16:59:28 832861 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
ERROR - 2019-01-05 16:59:28 832990 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 671
INFO - 2019-01-05 16:59:28 833105 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php
DEBUG - 2019-01-05 16:59:28 836766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:28 840980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:28 842863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:28 853107 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:59:28 855345 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:59:28 865921 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:28 866076 --> Total execution time: 0.7937
INFO - 2019-01-05 11:29:29 067848 --> Config Class Initialized
INFO - 2019-01-05 11:29:29 068187 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:29 070650 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:29 070780 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:29 072397 --> URI Class Initialized
INFO - 2019-01-05 11:29:29 075525 --> Router Class Initialized
INFO - 2019-01-05 11:29:29 078224 --> Output Class Initialized
INFO - 2019-01-05 11:29:29 080223 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:29 082106 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:29 082235 --> Input Class Initialized
INFO - 2019-01-05 11:29:29 082875 --> Language Class Initialized
INFO - 2019-01-05 11:29:29 090931 --> Loader Class Initialized
INFO - 2019-01-05 11:29:29 092561 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:29 093395 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:29 104718 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:29 114197 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:29 115694 --> Controller Class Initialized
INFO - 2019-01-05 16:59:29 116705 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:29 116827 --> Total execution time: 0.0510
INFO - 2019-01-05 11:29:46 335629 --> Config Class Initialized
INFO - 2019-01-05 11:29:46 335900 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:46 338179 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:46 338285 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:46 339777 --> URI Class Initialized
INFO - 2019-01-05 11:29:46 342307 --> Router Class Initialized
INFO - 2019-01-05 11:29:46 344892 --> Output Class Initialized
INFO - 2019-01-05 11:29:46 346729 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:46 348505 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:46 348609 --> Input Class Initialized
INFO - 2019-01-05 11:29:46 349145 --> Language Class Initialized
INFO - 2019-01-05 11:29:46 357047 --> Loader Class Initialized
INFO - 2019-01-05 11:29:46 358541 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:46 359024 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:46 365130 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:46 370490 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:46 371352 --> Controller Class Initialized
INFO - 2019-01-05 16:59:46 371802 --> Parser Class Initialized
INFO - 2019-01-05 16:59:46 372456 --> Helper loaded: html_helper
INFO - 2019-01-05 16:59:46 376698 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:46 378519 --> User_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-05 16:59:46 379144 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'unnatinanda18@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2019-01-05 16:59:46 382122 --> Model Class Initialized
DEBUG - 2019-01-05 16:59:46 382762 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'unnatinanda18@gmail.com']
INFO - 2019-01-05 16:59:46 383524 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 16:59:46 408572 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-profile.php
ERROR - 2019-01-05 16:59:46 411242 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 16:59:46 412491 --> Helper loaded: file_helper
DEBUG - 2019-01-05 16:59:46 412601 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 16:59:46 416677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:46 417814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 16:59:46 427787 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 16:59:46 429363 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 16:59:46 435926 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:46 436014 --> Total execution time: 0.0962
INFO - 2019-01-05 11:29:50 511615 --> Config Class Initialized
INFO - 2019-01-05 11:29:50 512026 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:29:50 514961 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:29:50 515077 --> Utf8 Class Initialized
INFO - 2019-01-05 11:29:50 517838 --> URI Class Initialized
INFO - 2019-01-05 11:29:50 522644 --> Router Class Initialized
INFO - 2019-01-05 11:29:50 525497 --> Output Class Initialized
INFO - 2019-01-05 11:29:50 527281 --> Security Class Initialized
DEBUG - 2019-01-05 11:29:50 529139 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:29:50 529254 --> Input Class Initialized
INFO - 2019-01-05 11:29:50 530220 --> Language Class Initialized
INFO - 2019-01-05 11:29:50 539043 --> Loader Class Initialized
INFO - 2019-01-05 11:29:50 540513 --> Helper loaded: url_helper
INFO - 2019-01-05 11:29:50 541796 --> Helper loaded: utility_helper
INFO - 2019-01-05 16:59:50 553105 --> Database Driver Class Initialized
INFO - 2019-01-05 16:59:50 561170 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 16:59:50 562545 --> Controller Class Initialized
INFO - 2019-01-05 16:59:50 563452 --> Final output sent to browser
DEBUG - 2019-01-05 16:59:50 563563 --> Total execution time: 0.0558
INFO - 2019-01-05 11:30:08 030729 --> Config Class Initialized
INFO - 2019-01-05 11:30:08 030973 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:08 032747 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:08 032841 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:08 034002 --> URI Class Initialized
INFO - 2019-01-05 11:30:08 036381 --> Router Class Initialized
INFO - 2019-01-05 11:30:08 038294 --> Output Class Initialized
INFO - 2019-01-05 11:30:08 039710 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:08 041024 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:08 041124 --> Input Class Initialized
INFO - 2019-01-05 11:30:08 041565 --> Language Class Initialized
INFO - 2019-01-05 17:00:08 050515 --> Loader Class Initialized
INFO - 2019-01-05 17:00:08 051655 --> Helper loaded: url_helper
INFO - 2019-01-05 17:00:08 052118 --> Helper loaded: utility_helper
INFO - 2019-01-05 17:00:08 058487 --> Database Driver Class Initialized
INFO - 2019-01-05 17:00:08 065546 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 17:00:08 066399 --> Controller Class Initialized
INFO - 2019-01-05 17:00:08 066823 --> Parser Class Initialized
INFO - 2019-01-05 17:00:08 067472 --> Helper loaded: html_helper
INFO - 2019-01-05 17:00:08 068149 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 17:00:08 079047 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 2
ERROR - 2019-01-05 17:00:08 079149 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 2
ERROR - 2019-01-05 17:00:08 079296 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 122
ERROR - 2019-01-05 17:00:08 079374 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/contact.php 122
INFO - 2019-01-05 17:00:08 079484 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/contact.php
ERROR - 2019-01-05 17:00:08 082037 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 17:00:08 083252 --> Helper loaded: file_helper
DEBUG - 2019-01-05 17:00:08 083358 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 17:00:08 088427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:08 089683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:08 097285 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 17:00:08 099071 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 17:00:08 107381 --> Final output sent to browser
DEBUG - 2019-01-05 17:00:08 107558 --> Total execution time: 0.0704
INFO - 2019-01-05 11:30:12 184411 --> Config Class Initialized
INFO - 2019-01-05 11:30:12 184542 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:12 186233 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:12 186335 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:12 187701 --> URI Class Initialized
INFO - 2019-01-05 11:30:12 190033 --> Router Class Initialized
INFO - 2019-01-05 11:30:12 192398 --> Output Class Initialized
INFO - 2019-01-05 11:30:12 194226 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:12 195909 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:12 196037 --> Input Class Initialized
INFO - 2019-01-05 11:30:12 196611 --> Language Class Initialized
INFO - 2019-01-05 11:30:12 203660 --> Loader Class Initialized
INFO - 2019-01-05 11:30:12 205110 --> Helper loaded: url_helper
INFO - 2019-01-05 11:30:12 205924 --> Helper loaded: utility_helper
INFO - 2019-01-05 17:00:12 215082 --> Database Driver Class Initialized
INFO - 2019-01-05 17:00:12 220252 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 17:00:12 221662 --> Controller Class Initialized
INFO - 2019-01-05 17:00:12 222621 --> Final output sent to browser
DEBUG - 2019-01-05 17:00:12 222743 --> Total execution time: 0.0397
INFO - 2019-01-05 11:30:31 837084 --> Config Class Initialized
INFO - 2019-01-05 11:30:31 837281 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:31 838702 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:31 838777 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:31 839622 --> URI Class Initialized
DEBUG - 2019-01-05 11:30:31 841027 --> No URI present. Default controller set.
INFO - 2019-01-05 11:30:31 841101 --> Router Class Initialized
INFO - 2019-01-05 11:30:31 842571 --> Output Class Initialized
INFO - 2019-01-05 11:30:31 843689 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:31 844739 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:31 844814 --> Input Class Initialized
INFO - 2019-01-05 11:30:31 845151 --> Language Class Initialized
INFO - 2019-01-05 11:30:31 847362 --> Loader Class Initialized
INFO - 2019-01-05 11:30:31 848251 --> Helper loaded: url_helper
INFO - 2019-01-05 11:30:31 848720 --> Helper loaded: utility_helper
INFO - 2019-01-05 17:00:31 854406 --> Database Driver Class Initialized
INFO - 2019-01-05 17:00:31 859678 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 17:00:31 860497 --> Controller Class Initialized
INFO - 2019-01-05 17:00:31 860901 --> Parser Class Initialized
INFO - 2019-01-05 17:00:31 861516 --> Helper loaded: html_helper
INFO - 2019-01-05 17:00:31 862165 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 17:00:31 863971 --> Model Class Initialized
DEBUG - 2019-01-05 17:00:32 024127 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 17:00:32 027966 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 17:00:32 028538 --> Model Class Initialized
DEBUG - 2019-01-05 17:00:32 031028 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 17:00:32 033277 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 17:00:32 034481 --> Helper loaded: file_helper
DEBUG - 2019-01-05 17:00:32 034580 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 17:00:32 037492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 038661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 045177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 046385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 047909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 048141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 048533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 049215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 050694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 050909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 051275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 051837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 053316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 053539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 053931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 054450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 055979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 056210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 056612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 057121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 058649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 058876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 059257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 059772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 061295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 061528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 061932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 062437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 064208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 064450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 064847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 065356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 066917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 067142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 067548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 068069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 069665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 069888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 070288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 070805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 072374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 072608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 073016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 073559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 075171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 075397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 075828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 076349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 077966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 078192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 078632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 079137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 080743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 080966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 081389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 081902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 083506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 083731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 084156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 084669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 086412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 086659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 087089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 087634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 089232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 089466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 089901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 090404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 092003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 092231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 092674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 093167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 093672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 094137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 094618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 095077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 095963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 096524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 097011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 098077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 098728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 099203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 099684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 100158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 100666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 101138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 101624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 102138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 102588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 103020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 103456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 103912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 104404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 106225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 106466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 106944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 107453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 109163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 109404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 109883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 110377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 112041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 112281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 112761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 113782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 116868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 117558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 118114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 118701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 120373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 120647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 121119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 121974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 123656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 123897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 124370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 126035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 126677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 128364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 128920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 130574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 131087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 132805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 133666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 135324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 140270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 141990 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 17:00:32 142530 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 17:00:32 144119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 145421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 145677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 17:00:32 147349 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 17:00:32 147766 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 17:00:32 156032 --> Final output sent to browser
DEBUG - 2019-01-05 17:00:32 156106 --> Total execution time: 0.3126
INFO - 2019-01-05 11:30:32 638890 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 639229 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 641690 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 641819 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 643484 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 647888 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 648190 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 650650 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 650780 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 655096 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 658216 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 660142 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 672460 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 674465 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 674580 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 675268 --> Language Class Initialized
INFO - 2019-01-05 11:30:32 684178 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 684262 --> Hooks Class Initialized
INFO - 2019-01-05 11:30:32 688785 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 690342 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 691570 --> Security Class Initialized
ERROR - 2019-01-05 11:30:32 692945 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 11:30:32 695790 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 695903 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 697164 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 702656 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 702846 --> Hooks Class Initialized
INFO - 2019-01-05 11:30:32 704945 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 705193 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 707642 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 707752 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 709295 --> URI Class Initialized
DEBUG - 2019-01-05 11:30:32 709978 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 710099 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 710542 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 711658 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 11:30:32 714767 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 714961 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 717274 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 725965 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 729214 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 731698 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 733683 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 735444 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 737476 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 738069 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 739300 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:30:32 741723 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 745836 --> Security Class Initialized
INFO - 2019-01-05 11:30:32 748483 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 752603 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 755870 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 757781 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 757910 --> Input Class Initialized
DEBUG - 2019-01-05 11:30:32 759445 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 759582 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 760183 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 761173 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:30:32 763338 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 764369 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:30:32 898097 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 898195 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 899586 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 899662 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 900463 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 902297 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 903745 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 904846 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 905850 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 905925 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 906253 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 906812 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:30:32 913768 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 913850 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 915033 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 915122 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 915899 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 917694 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 920579 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 922243 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 923181 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 923257 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 923595 --> Language Class Initialized
ERROR - 2019-01-05 11:30:32 924097 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 11:30:32 982786 --> Config Class Initialized
INFO - 2019-01-05 11:30:32 982948 --> Hooks Class Initialized
DEBUG - 2019-01-05 11:30:32 985121 --> UTF-8 Support Enabled
INFO - 2019-01-05 11:30:32 985322 --> Utf8 Class Initialized
INFO - 2019-01-05 11:30:32 987756 --> URI Class Initialized
INFO - 2019-01-05 11:30:32 990318 --> Router Class Initialized
INFO - 2019-01-05 11:30:32 992938 --> Output Class Initialized
INFO - 2019-01-05 11:30:32 995546 --> Security Class Initialized
DEBUG - 2019-01-05 11:30:32 997378 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 11:30:32 997530 --> Input Class Initialized
INFO - 2019-01-05 11:30:32 998112 --> Language Class Initialized
INFO - 2019-01-05 11:30:33 008259 --> Loader Class Initialized
INFO - 2019-01-05 11:30:33 009903 --> Helper loaded: url_helper
INFO - 2019-01-05 11:30:33 010731 --> Helper loaded: utility_helper
INFO - 2019-01-05 17:00:33 021121 --> Database Driver Class Initialized
INFO - 2019-01-05 17:00:33 029511 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 17:00:33 031024 --> Controller Class Initialized
INFO - 2019-01-05 17:00:33 032044 --> Final output sent to browser
DEBUG - 2019-01-05 17:00:33 032183 --> Total execution time: 0.0511
INFO - 2019-01-05 17:29:05 412549 --> Config Class Initialized
INFO - 2019-01-05 17:29:05 429011 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:05 464771 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:05 468530 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:05 470560 --> URI Class Initialized
DEBUG - 2019-01-05 17:29:05 519763 --> No URI present. Default controller set.
INFO - 2019-01-05 17:29:05 523503 --> Router Class Initialized
INFO - 2019-01-05 17:29:05 559130 --> Output Class Initialized
INFO - 2019-01-05 17:29:05 561726 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:05 595858 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:05 609539 --> Input Class Initialized
INFO - 2019-01-05 17:29:05 610379 --> Language Class Initialized
INFO - 2019-01-05 17:29:05 670523 --> Loader Class Initialized
INFO - 2019-01-05 17:29:05 679332 --> Helper loaded: url_helper
INFO - 2019-01-05 17:29:05 699083 --> Helper loaded: utility_helper
INFO - 2019-01-05 22:59:05 824064 --> Database Driver Class Initialized
INFO - 2019-01-05 22:59:05 891247 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 22:59:05 904529 --> Controller Class Initialized
INFO - 2019-01-05 22:59:05 905906 --> Parser Class Initialized
INFO - 2019-01-05 22:59:05 911314 --> Helper loaded: html_helper
INFO - 2019-01-05 22:59:05 931677 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 22:59:05 960803 --> Model Class Initialized
DEBUG - 2019-01-05 22:59:05 989298 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 22:59:05 997616 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 22:59:05 998176 --> Model Class Initialized
DEBUG - 2019-01-05 22:59:05 999398 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 22:59:06 053522 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 22:59:06 071916 --> Helper loaded: file_helper
DEBUG - 2019-01-05 22:59:06 080543 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 22:59:06 098515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 112257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 169369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 176954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 178577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 179081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 179488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 180047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 181526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 181766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 182133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 182646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 184287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 184520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 184892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 185411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 186919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 187146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 187553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 188064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 189620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 189851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 190236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 252064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 254172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 254410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 254848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 255548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 258374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 258748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 259414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 260123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 262300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 262548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 262952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 263529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 265135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 265357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 265774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 266311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 267915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 268140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 268570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 269128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 270775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 271003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 271431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 271992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 273706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 273936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 274362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 274895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 276520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 276746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 277173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 277712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 279476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 279707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 280137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 280695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 282284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 282536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 282968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 283509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 285109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 285339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 285782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 286309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 287947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 288180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 288629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 289172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 289680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 290185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 290703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 291193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 291764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 292246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 292737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 293212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 293694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 294164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 294668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 295208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 295711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 296190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 296680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 297156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 297602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 298034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 298469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 298901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 299453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 301285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 301548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 302009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 302570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 304194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 304440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 304897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 306106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 307873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 308109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 308585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 309143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 310792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 311029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 311506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 312015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 313898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 314137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 314611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 315109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 316721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 316956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 317449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 319051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 319580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 321222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 321744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 323334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 323863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 325504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 326013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 327622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 328128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 329785 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 22:59:06 330301 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 22:59:06 339729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 340783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 341017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 22:59:06 342641 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 22:59:06 343045 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 22:59:06 351409 --> Final output sent to browser
DEBUG - 2019-01-05 22:59:06 351521 --> Total execution time: 0.9608
INFO - 2019-01-05 17:29:49 294634 --> Config Class Initialized
INFO - 2019-01-05 17:29:49 294991 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:49 297621 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:49 297884 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:49 299911 --> URI Class Initialized
INFO - 2019-01-05 17:29:49 304842 --> Router Class Initialized
INFO - 2019-01-05 17:29:49 307862 --> Output Class Initialized
INFO - 2019-01-05 17:29:49 310359 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:49 312360 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:49 312536 --> Input Class Initialized
INFO - 2019-01-05 17:29:49 313429 --> Language Class Initialized
ERROR - 2019-01-05 17:29:49 322999 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:52 100106 --> Config Class Initialized
INFO - 2019-01-05 17:29:52 100270 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:52 102469 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:52 102607 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:52 103899 --> URI Class Initialized
INFO - 2019-01-05 17:29:52 107251 --> Router Class Initialized
INFO - 2019-01-05 17:29:52 109822 --> Output Class Initialized
INFO - 2019-01-05 17:29:52 113039 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:52 114962 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:52 115097 --> Input Class Initialized
INFO - 2019-01-05 17:29:52 115720 --> Language Class Initialized
ERROR - 2019-01-05 17:29:52 116708 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:53 170840 --> Config Class Initialized
INFO - 2019-01-05 17:29:53 171009 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:53 173352 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:53 173504 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:53 174931 --> URI Class Initialized
INFO - 2019-01-05 17:29:53 178848 --> Router Class Initialized
INFO - 2019-01-05 17:29:53 181767 --> Output Class Initialized
INFO - 2019-01-05 17:29:53 183980 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:53 186134 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:53 186271 --> Input Class Initialized
INFO - 2019-01-05 17:29:53 186906 --> Language Class Initialized
ERROR - 2019-01-05 17:29:53 187935 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:55 615463 --> Config Class Initialized
INFO - 2019-01-05 17:29:55 615700 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:55 619132 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:55 619324 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:55 621553 --> URI Class Initialized
INFO - 2019-01-05 17:29:55 627392 --> Router Class Initialized
INFO - 2019-01-05 17:29:55 630014 --> Output Class Initialized
INFO - 2019-01-05 17:29:55 631978 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:55 633873 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:55 634010 --> Input Class Initialized
INFO - 2019-01-05 17:29:55 634635 --> Language Class Initialized
ERROR - 2019-01-05 17:29:55 635605 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:55 766957 --> Config Class Initialized
INFO - 2019-01-05 17:29:55 767121 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:55 769278 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:55 769423 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:55 770740 --> URI Class Initialized
INFO - 2019-01-05 17:29:55 774147 --> Router Class Initialized
INFO - 2019-01-05 17:29:55 776604 --> Output Class Initialized
INFO - 2019-01-05 17:29:55 778601 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:55 780512 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:55 780648 --> Input Class Initialized
INFO - 2019-01-05 17:29:55 781236 --> Language Class Initialized
ERROR - 2019-01-05 17:29:55 782821 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:55 914143 --> Config Class Initialized
INFO - 2019-01-05 17:29:55 914345 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:55 916513 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:55 916646 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:55 917906 --> URI Class Initialized
INFO - 2019-01-05 17:29:55 922738 --> Router Class Initialized
INFO - 2019-01-05 17:29:55 925214 --> Output Class Initialized
INFO - 2019-01-05 17:29:55 927500 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:55 929430 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:55 929575 --> Input Class Initialized
INFO - 2019-01-05 17:29:55 930231 --> Language Class Initialized
ERROR - 2019-01-05 17:29:55 931853 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:29:56 393743 --> Config Class Initialized
INFO - 2019-01-05 17:29:56 393901 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:29:56 396008 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:29:56 396137 --> Utf8 Class Initialized
INFO - 2019-01-05 17:29:56 397475 --> URI Class Initialized
INFO - 2019-01-05 17:29:56 400722 --> Router Class Initialized
INFO - 2019-01-05 17:29:56 404031 --> Output Class Initialized
INFO - 2019-01-05 17:29:56 407530 --> Security Class Initialized
DEBUG - 2019-01-05 17:29:56 409405 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:29:56 409552 --> Input Class Initialized
INFO - 2019-01-05 17:29:56 410141 --> Language Class Initialized
ERROR - 2019-01-05 17:29:56 411104 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:30:15 683022 --> Config Class Initialized
INFO - 2019-01-05 17:30:15 683214 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:30:15 684493 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:30:15 684561 --> Utf8 Class Initialized
INFO - 2019-01-05 17:30:15 685379 --> URI Class Initialized
INFO - 2019-01-05 17:30:15 686868 --> Router Class Initialized
INFO - 2019-01-05 17:30:15 688220 --> Output Class Initialized
INFO - 2019-01-05 17:30:15 689239 --> Security Class Initialized
DEBUG - 2019-01-05 17:30:15 690229 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:30:15 690299 --> Input Class Initialized
INFO - 2019-01-05 17:30:15 690627 --> Language Class Initialized
INFO - 2019-01-05 17:30:15 709347 --> Loader Class Initialized
INFO - 2019-01-05 17:30:15 711378 --> Helper loaded: url_helper
INFO - 2019-01-05 17:30:15 711910 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:00:15 717186 --> Database Driver Class Initialized
INFO - 2019-01-05 23:00:15 722048 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:00:15 722820 --> Controller Class Initialized
INFO - 2019-01-05 23:00:15 723402 --> Final output sent to browser
DEBUG - 2019-01-05 23:00:15 723478 --> Total execution time: 0.0414
INFO - 2019-01-05 17:31:43 146755 --> Config Class Initialized
INFO - 2019-01-05 17:31:43 147054 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:31:43 149151 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:31:43 149264 --> Utf8 Class Initialized
INFO - 2019-01-05 17:31:43 150677 --> URI Class Initialized
INFO - 2019-01-05 17:31:43 154716 --> Router Class Initialized
INFO - 2019-01-05 17:31:43 157036 --> Output Class Initialized
INFO - 2019-01-05 17:31:43 158763 --> Security Class Initialized
DEBUG - 2019-01-05 17:31:43 160422 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:31:43 160543 --> Input Class Initialized
INFO - 2019-01-05 17:31:43 161066 --> Language Class Initialized
ERROR - 2019-01-05 17:31:43 161917 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 17:38:58 719712 --> Config Class Initialized
INFO - 2019-01-05 17:38:58 719970 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:38:58 722151 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:38:58 722250 --> Utf8 Class Initialized
INFO - 2019-01-05 17:38:58 723637 --> URI Class Initialized
INFO - 2019-01-05 17:38:58 727700 --> Router Class Initialized
INFO - 2019-01-05 17:38:58 730204 --> Output Class Initialized
INFO - 2019-01-05 17:38:58 732017 --> Security Class Initialized
DEBUG - 2019-01-05 17:38:58 733802 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:38:58 733906 --> Input Class Initialized
INFO - 2019-01-05 17:38:58 734464 --> Language Class Initialized
INFO - 2019-01-05 17:38:58 740010 --> Loader Class Initialized
INFO - 2019-01-05 17:38:58 742626 --> Helper loaded: url_helper
INFO - 2019-01-05 17:38:58 743959 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:08:58 773173 --> Database Driver Class Initialized
INFO - 2019-01-05 17:38:58 777606 --> Config Class Initialized
INFO - 2019-01-05 17:38:58 777993 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:38:58 781871 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:38:58 782046 --> Utf8 Class Initialized
INFO - 2019-01-05 17:38:58 784444 --> URI Class Initialized
INFO - 2019-01-05 17:38:58 795550 --> Router Class Initialized
INFO - 2019-01-05 17:38:58 800484 --> Output Class Initialized
INFO - 2019-01-05 17:38:58 802860 --> Security Class Initialized
INFO - 2019-01-05 23:08:58 811583 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:08:58 813724 --> Controller Class Initialized
INFO - 2019-01-05 23:08:58 814733 --> Parser Class Initialized
INFO - 2019-01-05 23:08:58 816262 --> Helper loaded: html_helper
DEBUG - 2019-01-05 17:38:58 817042 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:38:58 817205 --> Input Class Initialized
INFO - 2019-01-05 17:38:58 818078 --> Language Class Initialized
INFO - 2019-01-05 17:38:58 824006 --> Loader Class Initialized
INFO - 2019-01-05 17:38:58 826338 --> Helper loaded: url_helper
INFO - 2019-01-05 17:38:58 833209 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:08:58 834482 --> Model Class Initialized
INFO - 2019-01-05 23:08:58 857023 --> Database Driver Class Initialized
INFO - 2019-01-05 23:08:58 879084 --> Model Class Initialized
DEBUG - 2019-01-05 23:08:58 884455 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 23:08:58 886261 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 23:08:58 897542 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 23:08:58 897741 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 23:08:58 899379 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:08:58 901348 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:08:58 901492 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:08:58 902570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 943321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 944300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 944956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 945645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 946325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 947026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 947691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 948378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 949027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 949716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:58 950360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 034524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 035851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 037019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 038224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 039330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 040440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 041573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 042666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 043766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 047715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 049225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 050375 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 23:08:59 051704 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-05 23:08:59 051918 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-05 23:08:59 052074 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-05 23:08:59 056248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 063487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 066281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 084840 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:08:59 088248 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:08:59 097788 --> Final output sent to browser
DEBUG - 2019-01-05 23:08:59 097948 --> Total execution time: 0.3715
INFO - 2019-01-05 23:08:59 098392 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:08:59 099885 --> Controller Class Initialized
INFO - 2019-01-05 23:08:59 100559 --> Parser Class Initialized
INFO - 2019-01-05 23:08:59 101619 --> Helper loaded: html_helper
INFO - 2019-01-05 23:08:59 105257 --> Model Class Initialized
INFO - 2019-01-05 23:08:59 122070 --> Model Class Initialized
DEBUG - 2019-01-05 23:08:59 125926 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 23:08:59 127129 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 23:08:59 128273 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 23:08:59 128437 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-05 23:08:59 130074 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:08:59 131974 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:08:59 132123 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:08:59 133307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 134051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 134777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 135512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 136205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 136910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 137665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 138391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 139094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 139799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 140518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 141208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 141961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 142697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 143445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 144162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 144860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 145590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 146311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 147016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 147722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 148421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 149120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 149820 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-05 23:08:59 150671 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-05 23:08:59 150826 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-05 23:08:59 150934 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-05 23:08:59 153652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 156220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 156609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:08:59 160279 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:08:59 161091 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:08:59 169497 --> Final output sent to browser
DEBUG - 2019-01-05 23:08:59 169651 --> Total execution time: 0.3880
INFO - 2019-01-05 17:39:00 464715 --> Config Class Initialized
INFO - 2019-01-05 17:39:00 464839 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:00 466149 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:00 466227 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:00 467312 --> URI Class Initialized
INFO - 2019-01-05 17:39:00 469413 --> Router Class Initialized
INFO - 2019-01-05 17:39:00 471128 --> Output Class Initialized
INFO - 2019-01-05 17:39:00 472404 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:00 473366 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:00 473454 --> Input Class Initialized
INFO - 2019-01-05 17:39:00 473759 --> Language Class Initialized
INFO - 2019-01-05 17:39:00 477580 --> Loader Class Initialized
INFO - 2019-01-05 17:39:00 478354 --> Helper loaded: url_helper
INFO - 2019-01-05 17:39:00 478790 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:09:00 484251 --> Database Driver Class Initialized
INFO - 2019-01-05 23:09:00 488192 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:09:00 489423 --> Controller Class Initialized
INFO - 2019-01-05 23:09:00 490204 --> Final output sent to browser
DEBUG - 2019-01-05 23:09:00 490312 --> Total execution time: 0.0266
INFO - 2019-01-05 17:39:08 200301 --> Config Class Initialized
INFO - 2019-01-05 17:39:08 200583 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:08 202347 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:08 202464 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:08 203592 --> URI Class Initialized
INFO - 2019-01-05 17:39:08 206588 --> Router Class Initialized
INFO - 2019-01-05 17:39:08 208369 --> Output Class Initialized
INFO - 2019-01-05 17:39:08 210189 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:08 212256 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:08 212388 --> Input Class Initialized
INFO - 2019-01-05 17:39:08 213036 --> Language Class Initialized
INFO - 2019-01-05 17:39:08 216186 --> Loader Class Initialized
INFO - 2019-01-05 17:39:08 217299 --> Helper loaded: url_helper
INFO - 2019-01-05 17:39:08 217922 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:09:08 226366 --> Database Driver Class Initialized
INFO - 2019-01-05 23:09:08 233695 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:09:08 235337 --> Controller Class Initialized
INFO - 2019-01-05 23:09:08 236076 --> Parser Class Initialized
INFO - 2019-01-05 23:09:08 237046 --> Helper loaded: html_helper
INFO - 2019-01-05 23:09:08 239331 --> Model Class Initialized
DEBUG - 2019-01-05 23:09:08 250046 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-05 23:09:08 256478 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-05 23:09:08 257069 --> Model Class Initialized
DEBUG - 2019-01-05 23:09:08 257632 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 23:09:08 258475 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 23:09:08 294362 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:09:08 297827 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:09:08 298000 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:09:08 301887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 303694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 317114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 318140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 319607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 322611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 323339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 323745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 326512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 327223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 327615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 330460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 331191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 331589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 334460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 336319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 336724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 339519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 341711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 342490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 342890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 345881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 346817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 347873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 348628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 349004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 352021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 352838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 353916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 354676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 355065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 358078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 358958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 360021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 360797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 361192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 364320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 365271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 366352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 367145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 367595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 370858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 372082 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:09:08 373193 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-05 23:09:08 376054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 378030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 378454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:08 381680 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:09:08 382409 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:09:08 391581 --> Final output sent to browser
DEBUG - 2019-01-05 23:09:08 391720 --> Total execution time: 0.1847
INFO - 2019-01-05 17:39:08 746478 --> Config Class Initialized
INFO - 2019-01-05 17:39:08 746665 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:08 750411 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:08 750570 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:08 752872 --> URI Class Initialized
INFO - 2019-01-05 17:39:08 757282 --> Router Class Initialized
INFO - 2019-01-05 17:39:08 760219 --> Output Class Initialized
INFO - 2019-01-05 17:39:08 762131 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:08 778837 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:08 778971 --> Input Class Initialized
INFO - 2019-01-05 17:39:08 779742 --> Language Class Initialized
ERROR - 2019-01-05 17:39:08 781059 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:08 794415 --> Config Class Initialized
INFO - 2019-01-05 17:39:08 794676 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:08 796518 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:08 796614 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:08 798234 --> Config Class Initialized
INFO - 2019-01-05 17:39:08 798484 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:08 800302 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:08 800400 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:08 801641 --> URI Class Initialized
INFO - 2019-01-05 17:39:08 808173 --> URI Class Initialized
INFO - 2019-01-05 17:39:08 814570 --> Router Class Initialized
INFO - 2019-01-05 17:39:08 816664 --> Output Class Initialized
INFO - 2019-01-05 17:39:08 818990 --> Router Class Initialized
INFO - 2019-01-05 17:39:08 821055 --> Output Class Initialized
INFO - 2019-01-05 17:39:08 822576 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:08 825021 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:08 825185 --> Input Class Initialized
INFO - 2019-01-05 17:39:08 825774 --> Language Class Initialized
ERROR - 2019-01-05 17:39:08 826545 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:08 828299 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:08 829792 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:08 829888 --> Input Class Initialized
INFO - 2019-01-05 17:39:08 830355 --> Language Class Initialized
ERROR - 2019-01-05 17:39:08 831104 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:08 961285 --> Config Class Initialized
INFO - 2019-01-05 17:39:08 961429 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:08 963200 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:08 963305 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:08 964400 --> URI Class Initialized
INFO - 2019-01-05 17:39:08 967119 --> Router Class Initialized
INFO - 2019-01-05 17:39:08 969201 --> Output Class Initialized
INFO - 2019-01-05 17:39:08 972218 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:08 975739 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:08 975820 --> Input Class Initialized
INFO - 2019-01-05 17:39:08 976135 --> Language Class Initialized
ERROR - 2019-01-05 17:39:08 976650 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:09 086739 --> Config Class Initialized
INFO - 2019-01-05 17:39:09 086826 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:09 087961 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:09 088030 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:09 088845 --> URI Class Initialized
INFO - 2019-01-05 17:39:09 091707 --> Router Class Initialized
INFO - 2019-01-05 17:39:09 093571 --> Output Class Initialized
INFO - 2019-01-05 17:39:09 094566 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:09 095518 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:09 095590 --> Input Class Initialized
INFO - 2019-01-05 17:39:09 095891 --> Language Class Initialized
ERROR - 2019-01-05 17:39:09 096378 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:09 568706 --> Config Class Initialized
INFO - 2019-01-05 17:39:09 568803 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:09 570004 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:09 570076 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:09 570782 --> URI Class Initialized
INFO - 2019-01-05 17:39:09 572315 --> Router Class Initialized
INFO - 2019-01-05 17:39:09 573713 --> Output Class Initialized
INFO - 2019-01-05 17:39:09 574758 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:09 576342 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:09 576477 --> Input Class Initialized
INFO - 2019-01-05 17:39:09 576951 --> Language Class Initialized
INFO - 2019-01-05 17:39:09 582031 --> Loader Class Initialized
INFO - 2019-01-05 17:39:09 582962 --> Helper loaded: url_helper
INFO - 2019-01-05 17:39:09 583456 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:09:09 590214 --> Database Driver Class Initialized
INFO - 2019-01-05 23:09:09 599522 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:09:09 601001 --> Controller Class Initialized
INFO - 2019-01-05 23:09:09 602018 --> Final output sent to browser
DEBUG - 2019-01-05 23:09:09 602139 --> Total execution time: 0.0345
INFO - 2019-01-05 17:39:26 257405 --> Config Class Initialized
INFO - 2019-01-05 17:39:26 257761 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:26 260227 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:26 260356 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:26 262003 --> URI Class Initialized
INFO - 2019-01-05 17:39:26 266711 --> Router Class Initialized
INFO - 2019-01-05 17:39:26 269346 --> Output Class Initialized
INFO - 2019-01-05 17:39:26 271336 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:26 273262 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:26 273389 --> Input Class Initialized
INFO - 2019-01-05 17:39:26 274034 --> Language Class Initialized
ERROR - 2019-01-05 17:39:26 275032 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-05 17:39:58 833030 --> Config Class Initialized
INFO - 2019-01-05 17:39:58 833400 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:39:58 835985 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:39:58 836119 --> Utf8 Class Initialized
INFO - 2019-01-05 17:39:58 838731 --> URI Class Initialized
INFO - 2019-01-05 17:39:58 846225 --> Router Class Initialized
INFO - 2019-01-05 17:39:58 852106 --> Output Class Initialized
INFO - 2019-01-05 17:39:58 855549 --> Security Class Initialized
DEBUG - 2019-01-05 17:39:58 859319 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:39:58 859623 --> Input Class Initialized
INFO - 2019-01-05 17:39:58 860912 --> Language Class Initialized
INFO - 2019-01-05 17:39:58 877268 --> Loader Class Initialized
INFO - 2019-01-05 17:39:58 880072 --> Helper loaded: url_helper
INFO - 2019-01-05 17:39:58 881567 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:09:58 902947 --> Database Driver Class Initialized
INFO - 2019-01-05 23:09:58 918010 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:09:58 920511 --> Controller Class Initialized
INFO - 2019-01-05 23:09:58 921659 --> Parser Class Initialized
INFO - 2019-01-05 23:09:58 923306 --> Helper loaded: html_helper
DEBUG - 2019-01-05 23:09:58 923580 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-05 23:09:58 930124 --> Model Class Initialized
INFO - 2019-01-05 23:09:58 953088 --> Helper loaded: cookie_helper
INFO - 2019-01-05 23:09:58 954317 --> Model Class Initialized
DEBUG - 2019-01-05 23:09:58 955470 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 23:09:58 957775 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 23:09:58 970513 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:09:58 972708 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:09:58 972902 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:09:58 986360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:58 988392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:58 991708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:09:58 992652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:10:00 960599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:10:00 961491 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:10:00 964960 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-05 23:10:00 967901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:10:00 970608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:10:00 972687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:10:00 987226 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:10:00 990390 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:10:00 999201 --> Final output sent to browser
DEBUG - 2019-01-05 23:10:00 999335 --> Total execution time: 2.1618
INFO - 2019-01-05 17:40:01 218904 --> Config Class Initialized
INFO - 2019-01-05 17:40:01 219264 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:01 222311 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:01 222537 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:01 224679 --> URI Class Initialized
INFO - 2019-01-05 17:40:01 234879 --> Config Class Initialized
INFO - 2019-01-05 17:40:01 235033 --> Hooks Class Initialized
INFO - 2019-01-05 17:40:01 240911 --> Router Class Initialized
INFO - 2019-01-05 17:40:01 244230 --> Output Class Initialized
INFO - 2019-01-05 17:40:01 246479 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:01 247710 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:01 247874 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:01 249330 --> URI Class Initialized
INFO - 2019-01-05 17:40:01 253686 --> Router Class Initialized
INFO - 2019-01-05 17:40:01 256597 --> Output Class Initialized
DEBUG - 2019-01-05 17:40:01 259136 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:01 259284 --> Input Class Initialized
INFO - 2019-01-05 17:40:01 259962 --> Language Class Initialized
ERROR - 2019-01-05 17:40:01 261003 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:40:01 264534 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:01 266345 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:01 266550 --> Input Class Initialized
INFO - 2019-01-05 17:40:01 267371 --> Language Class Initialized
ERROR - 2019-01-05 17:40:01 268367 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:40:01 287556 --> Config Class Initialized
INFO - 2019-01-05 17:40:01 287643 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:01 288774 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:01 288842 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:01 289526 --> URI Class Initialized
INFO - 2019-01-05 17:40:01 291207 --> Router Class Initialized
INFO - 2019-01-05 17:40:01 292984 --> Output Class Initialized
INFO - 2019-01-05 17:40:01 295725 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:01 296912 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:01 296982 --> Input Class Initialized
INFO - 2019-01-05 17:40:01 297281 --> Language Class Initialized
ERROR - 2019-01-05 17:40:01 297790 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:40:01 305232 --> Config Class Initialized
INFO - 2019-01-05 17:40:01 305416 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:01 306689 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:01 306756 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:01 307596 --> URI Class Initialized
INFO - 2019-01-05 17:40:01 309098 --> Router Class Initialized
INFO - 2019-01-05 17:40:01 310679 --> Output Class Initialized
INFO - 2019-01-05 17:40:01 312102 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:01 313144 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:01 313213 --> Input Class Initialized
INFO - 2019-01-05 17:40:01 313550 --> Language Class Initialized
INFO - 2019-01-05 17:40:01 318057 --> Loader Class Initialized
INFO - 2019-01-05 17:40:01 318914 --> Helper loaded: url_helper
INFO - 2019-01-05 17:40:01 319361 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:10:01 324781 --> Database Driver Class Initialized
INFO - 2019-01-05 23:10:01 330049 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:10:01 330827 --> Controller Class Initialized
INFO - 2019-01-05 23:10:01 331377 --> Final output sent to browser
DEBUG - 2019-01-05 23:10:01 331454 --> Total execution time: 0.0272
INFO - 2019-01-05 17:40:04 375632 --> Config Class Initialized
INFO - 2019-01-05 17:40:04 375741 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:04 377227 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:04 377314 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:04 378303 --> URI Class Initialized
INFO - 2019-01-05 17:40:04 380647 --> Router Class Initialized
INFO - 2019-01-05 17:40:04 382499 --> Output Class Initialized
INFO - 2019-01-05 17:40:04 383899 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:04 385176 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:04 385268 --> Input Class Initialized
INFO - 2019-01-05 17:40:04 385829 --> Language Class Initialized
ERROR - 2019-01-05 17:40:04 386629 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:40:04 498262 --> Config Class Initialized
INFO - 2019-01-05 17:40:04 498373 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:04 499773 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:04 499857 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:04 500729 --> URI Class Initialized
INFO - 2019-01-05 17:40:04 502887 --> Router Class Initialized
INFO - 2019-01-05 17:40:04 504725 --> Output Class Initialized
INFO - 2019-01-05 17:40:04 506125 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:04 507358 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:04 507463 --> Input Class Initialized
INFO - 2019-01-05 17:40:04 507848 --> Language Class Initialized
ERROR - 2019-01-05 17:40:04 508519 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:40:05 410259 --> Config Class Initialized
INFO - 2019-01-05 17:40:05 410382 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:40:05 412240 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:40:05 412338 --> Utf8 Class Initialized
INFO - 2019-01-05 17:40:05 413585 --> URI Class Initialized
INFO - 2019-01-05 17:40:05 416388 --> Router Class Initialized
INFO - 2019-01-05 17:40:05 418483 --> Output Class Initialized
INFO - 2019-01-05 17:40:05 420099 --> Security Class Initialized
DEBUG - 2019-01-05 17:40:05 421691 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:40:05 421794 --> Input Class Initialized
INFO - 2019-01-05 17:40:05 422274 --> Language Class Initialized
ERROR - 2019-01-05 17:40:05 423054 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-05 17:42:45 198407 --> Config Class Initialized
INFO - 2019-01-05 17:42:45 198761 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:45 201256 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:45 201389 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:45 203298 --> URI Class Initialized
DEBUG - 2019-01-05 17:42:45 208081 --> No URI present. Default controller set.
INFO - 2019-01-05 17:42:45 208266 --> Router Class Initialized
INFO - 2019-01-05 17:42:45 213248 --> Output Class Initialized
INFO - 2019-01-05 17:42:45 217621 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:45 220051 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:45 220185 --> Input Class Initialized
INFO - 2019-01-05 17:42:45 220822 --> Language Class Initialized
INFO - 2019-01-05 17:42:45 224865 --> Loader Class Initialized
INFO - 2019-01-05 17:42:45 226571 --> Helper loaded: url_helper
INFO - 2019-01-05 17:42:45 227420 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:12:45 238094 --> Database Driver Class Initialized
INFO - 2019-01-05 23:12:45 247061 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:12:45 248619 --> Controller Class Initialized
INFO - 2019-01-05 23:12:45 249341 --> Parser Class Initialized
INFO - 2019-01-05 23:12:45 250447 --> Helper loaded: html_helper
INFO - 2019-01-05 23:12:45 251583 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 23:12:45 254976 --> Model Class Initialized
DEBUG - 2019-01-05 23:12:45 430442 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 23:12:45 436527 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 23:12:45 437282 --> Model Class Initialized
DEBUG - 2019-01-05 23:12:45 438026 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 23:12:45 441276 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:12:45 443344 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:12:45 443531 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:12:45 448239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 450126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 462239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 464508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 467437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 467874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 468605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 469634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 472384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 472800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 473500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 474457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 477264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 477691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 478383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 479365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 482225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 482673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 483388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 484386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 487268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 487740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 488483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 489372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 492274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 492723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 493470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 494477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 497431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 497862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 498642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 499907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 503223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 503932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 505237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 506824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 511477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 512195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 513547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 514784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 519272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 519740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 520553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 521591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 524868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 525305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 526185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 527359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 530641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 531101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 531953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 533078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 536509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 536948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 537786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 539120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 542273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 542725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 543617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 544821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 548055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 548522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 549346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 550369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 553508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 553939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 554800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 555918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 559042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 559490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 560312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 561372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 562323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 563231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 564127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 564935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 565809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 566685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 567581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 568432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 569303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 570172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 571036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 571904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 572768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 573632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 574502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 575579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 576380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 577189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 577999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 578838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 579808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 584347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 584808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 585702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 586715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 590106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 590698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 592896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 594259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 598267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 598766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 599679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 600783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 604187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 604661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 605561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 606595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 609822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 610270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 611160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 612864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 616116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 616640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 617563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 620763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 621967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 625206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 626241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 629373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 630383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 633626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 634654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 637809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 638798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 641902 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:12:45 642846 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 23:12:45 645684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 647680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 648114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:12:45 651242 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:12:45 652029 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:12:45 660670 --> Final output sent to browser
DEBUG - 2019-01-05 23:12:45 660809 --> Total execution time: 0.4570
INFO - 2019-01-05 17:42:47 013577 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 013911 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:47 016386 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 016537 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 018140 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 022958 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 025958 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 028016 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 030015 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 030143 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 030778 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 031814 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:42:47 116353 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 116733 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:47 119162 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 119296 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 142164 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 142327 --> Hooks Class Initialized
INFO - 2019-01-05 17:42:47 159029 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 165755 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 166075 --> Hooks Class Initialized
INFO - 2019-01-05 17:42:47 169528 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 169665 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:47 172539 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 172669 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 173990 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 177272 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 177617 --> Hooks Class Initialized
INFO - 2019-01-05 17:42:47 179990 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 182770 --> Output Class Initialized
DEBUG - 2019-01-05 17:42:47 185652 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 185782 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 187400 --> URI Class Initialized
DEBUG - 2019-01-05 17:42:47 188760 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 188886 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 190148 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 196270 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 197494 --> Router Class Initialized
DEBUG - 2019-01-05 17:42:47 203299 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 203521 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 206437 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 214482 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 217305 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 217521 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 218164 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 219156 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:42:47 222343 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 225080 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 227056 --> Security Class Initialized
INFO - 2019-01-05 17:42:47 228477 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 230356 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 232105 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 232230 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 237026 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 239768 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 242125 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 244127 --> Security Class Initialized
INFO - 2019-01-05 17:42:47 245841 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 246803 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 17:42:47 249176 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 249311 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 249923 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 250888 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 17:42:47 253313 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 253458 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 254086 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 255075 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:42:47 258483 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 260456 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 260586 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 261200 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 262186 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 17:42:47 338104 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 338263 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:47 340374 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 340568 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 341888 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 344439 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 346961 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 349477 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 351744 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 351882 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 352507 --> Language Class Initialized
INFO - 2019-01-05 17:42:47 357232 --> Config Class Initialized
INFO - 2019-01-05 17:42:47 357371 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:42:47 359483 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:42:47 359613 --> Utf8 Class Initialized
INFO - 2019-01-05 17:42:47 361067 --> URI Class Initialized
INFO - 2019-01-05 17:42:47 364722 --> Router Class Initialized
INFO - 2019-01-05 17:42:47 367379 --> Output Class Initialized
INFO - 2019-01-05 17:42:47 369545 --> Security Class Initialized
DEBUG - 2019-01-05 17:42:47 371283 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:42:47 372673 --> Loader Class Initialized
INFO - 2019-01-05 17:42:47 374531 --> Helper loaded: url_helper
INFO - 2019-01-05 17:42:47 375421 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:12:47 385756 --> Database Driver Class Initialized
INFO - 2019-01-05 17:42:47 386192 --> Input Class Initialized
INFO - 2019-01-05 17:42:47 386856 --> Language Class Initialized
ERROR - 2019-01-05 17:42:47 387784 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 23:12:47 403552 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:12:47 404654 --> Controller Class Initialized
INFO - 2019-01-05 23:12:47 405369 --> Final output sent to browser
DEBUG - 2019-01-05 23:12:47 405463 --> Total execution time: 0.0691
INFO - 2019-01-05 17:44:15 407428 --> Config Class Initialized
INFO - 2019-01-05 17:44:15 407792 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:15 410212 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:15 410339 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:15 411957 --> URI Class Initialized
INFO - 2019-01-05 17:44:15 415163 --> Router Class Initialized
INFO - 2019-01-05 17:44:15 417831 --> Output Class Initialized
INFO - 2019-01-05 17:44:15 419814 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:15 421741 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:15 421868 --> Input Class Initialized
INFO - 2019-01-05 17:44:15 422498 --> Language Class Initialized
INFO - 2019-01-05 17:44:15 437577 --> Loader Class Initialized
INFO - 2019-01-05 17:44:15 439196 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:15 440124 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:15 450504 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:15 458583 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:15 460074 --> Controller Class Initialized
INFO - 2019-01-05 17:44:15 650615 --> Config Class Initialized
INFO - 2019-01-05 17:44:15 650697 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:15 651751 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:15 651813 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:15 652430 --> URI Class Initialized
INFO - 2019-01-05 17:44:15 653623 --> Router Class Initialized
INFO - 2019-01-05 17:44:15 654777 --> Output Class Initialized
INFO - 2019-01-05 17:44:15 655673 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:15 656524 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:15 656588 --> Input Class Initialized
INFO - 2019-01-05 17:44:15 656861 --> Language Class Initialized
INFO - 2019-01-05 17:44:15 672266 --> Loader Class Initialized
INFO - 2019-01-05 17:44:15 672996 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:15 673362 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:15 677992 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:15 681420 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:15 682164 --> Controller Class Initialized
DEBUG - 2019-01-05 23:14:15 682235 --> In LOGOUT
INFO - 2019-01-05 17:44:16 339308 --> Config Class Initialized
INFO - 2019-01-05 17:44:16 339586 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:16 341258 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:16 341346 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:16 342449 --> URI Class Initialized
INFO - 2019-01-05 17:44:16 346014 --> Router Class Initialized
INFO - 2019-01-05 17:44:16 348676 --> Output Class Initialized
INFO - 2019-01-05 17:44:16 350009 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:16 351305 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:16 351399 --> Input Class Initialized
INFO - 2019-01-05 17:44:16 351825 --> Language Class Initialized
INFO - 2019-01-05 17:44:16 355773 --> Loader Class Initialized
INFO - 2019-01-05 17:44:16 356878 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:16 357877 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:16 369826 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:16 377571 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:16 378850 --> Controller Class Initialized
INFO - 2019-01-05 17:44:16 580482 --> Config Class Initialized
INFO - 2019-01-05 17:44:16 580626 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:16 582072 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:16 582160 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:16 583333 --> URI Class Initialized
INFO - 2019-01-05 17:44:16 585179 --> Router Class Initialized
INFO - 2019-01-05 17:44:16 588119 --> Output Class Initialized
INFO - 2019-01-05 17:44:16 589356 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:16 590538 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:16 590627 --> Input Class Initialized
INFO - 2019-01-05 17:44:16 591061 --> Language Class Initialized
INFO - 2019-01-05 17:44:16 593688 --> Loader Class Initialized
INFO - 2019-01-05 17:44:16 594408 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:16 594795 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:16 602946 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:16 609249 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:16 610776 --> Controller Class Initialized
DEBUG - 2019-01-05 23:14:16 610918 --> In LOGOUT
INFO - 2019-01-05 17:44:23 258372 --> Config Class Initialized
INFO - 2019-01-05 17:44:23 258641 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:23 260515 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:23 260617 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:23 261760 --> URI Class Initialized
DEBUG - 2019-01-05 17:44:23 263652 --> No URI present. Default controller set.
INFO - 2019-01-05 17:44:23 263751 --> Router Class Initialized
INFO - 2019-01-05 17:44:23 265738 --> Output Class Initialized
INFO - 2019-01-05 17:44:23 267230 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:23 268723 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:23 268822 --> Input Class Initialized
INFO - 2019-01-05 17:44:23 269289 --> Language Class Initialized
INFO - 2019-01-05 17:44:23 272233 --> Loader Class Initialized
INFO - 2019-01-05 17:44:23 273474 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:23 274113 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:23 281919 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:23 289252 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:23 290354 --> Controller Class Initialized
INFO - 2019-01-05 23:14:23 290981 --> Parser Class Initialized
INFO - 2019-01-05 23:14:23 291795 --> Helper loaded: html_helper
INFO - 2019-01-05 23:14:23 292632 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-05 23:14:23 295133 --> Model Class Initialized
DEBUG - 2019-01-05 23:14:23 416712 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-05 23:14:23 509730 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-05'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-05 23:14:23 510313 --> Model Class Initialized
DEBUG - 2019-01-05 23:14:23 511028 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-05 23:14:23 513505 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:14:23 515054 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:14:23 515189 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:14:23 519644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 521121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 531131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 532888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 535106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 535442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 536010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 536808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 538954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 539263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 539819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 540595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 542840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 543153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 543715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 544513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 546812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 547143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 547729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 548494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 550710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 551043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 551629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 552366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 554639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 554961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 555551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 556288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 558574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 558898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 559497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 560234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 562577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 562911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 563513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 564266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 566625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 566948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 567563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 568325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 570725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 571054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 571692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 572448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 574918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 575257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 575898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 576680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 579085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 579421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 580065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 580893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 583311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 583666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 584296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 585122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 587579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 587918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 588571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 589371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 591777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 592113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 593564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 594515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 597683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 598117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 598968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 599860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 603045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 603502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 604336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 605202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 606019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 606823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 607621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 608388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 609177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 609940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 610712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 611471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 612221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 612984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 613744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 614547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 615648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 616848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 618046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 619322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 620397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 621248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 622083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 622940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 623856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 627114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 627573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 628468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 629319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 632594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 633059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 634037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 634921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 638240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 638736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 639687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 640580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 643927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 644387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 645389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 646307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 649703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 650197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 651228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 652142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 655365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 655849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 656761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 659986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 660906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 664289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 665447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 668704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 669764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 673064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 674132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 677339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 678421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 681683 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:14:23 682734 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-05 23:14:23 685683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 687725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 688175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:23 691454 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:14:23 692517 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:14:23 702419 --> Final output sent to browser
DEBUG - 2019-01-05 23:14:23 702572 --> Total execution time: 0.4370
INFO - 2019-01-05 17:44:29 060173 --> Config Class Initialized
INFO - 2019-01-05 17:44:29 060424 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:29 062113 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:29 062203 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:29 063317 --> URI Class Initialized
INFO - 2019-01-05 17:44:29 065427 --> Router Class Initialized
INFO - 2019-01-05 17:44:29 067217 --> Output Class Initialized
INFO - 2019-01-05 17:44:29 068622 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:29 069943 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:29 070034 --> Input Class Initialized
INFO - 2019-01-05 17:44:29 070466 --> Language Class Initialized
INFO - 2019-01-05 17:44:29 088655 --> Loader Class Initialized
INFO - 2019-01-05 17:44:29 089802 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:29 090745 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:29 100150 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:29 108083 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:29 109126 --> Controller Class Initialized
INFO - 2019-01-05 17:44:29 218003 --> Config Class Initialized
INFO - 2019-01-05 17:44:29 218168 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:29 220376 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:29 220530 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:29 221798 --> URI Class Initialized
INFO - 2019-01-05 17:44:29 224186 --> Router Class Initialized
INFO - 2019-01-05 17:44:29 226605 --> Output Class Initialized
INFO - 2019-01-05 17:44:29 228456 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:29 230223 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:29 230361 --> Input Class Initialized
INFO - 2019-01-05 17:44:29 230943 --> Language Class Initialized
INFO - 2019-01-05 17:44:29 234391 --> Loader Class Initialized
INFO - 2019-01-05 17:44:29 235837 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:29 236624 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:29 245971 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:29 250963 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:29 252378 --> Controller Class Initialized
DEBUG - 2019-01-05 23:14:29 252546 --> In LOGOUT
INFO - 2019-01-05 17:44:37 015988 --> Config Class Initialized
INFO - 2019-01-05 17:44:37 016422 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:37 020391 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:37 020639 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:37 023092 --> URI Class Initialized
INFO - 2019-01-05 17:44:37 045677 --> Router Class Initialized
INFO - 2019-01-05 17:44:37 050190 --> Output Class Initialized
INFO - 2019-01-05 17:44:37 053749 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:37 055968 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:37 056097 --> Input Class Initialized
INFO - 2019-01-05 17:44:37 056742 --> Language Class Initialized
INFO - 2019-01-05 17:44:37 069933 --> Loader Class Initialized
INFO - 2019-01-05 17:44:37 071580 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:37 072442 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:37 082791 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:37 091145 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:37 093230 --> Controller Class Initialized
INFO - 2019-01-05 17:44:37 196914 --> Config Class Initialized
INFO - 2019-01-05 17:44:37 197066 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:37 199172 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:37 199299 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:37 200567 --> URI Class Initialized
INFO - 2019-01-05 17:44:37 202886 --> Router Class Initialized
INFO - 2019-01-05 17:44:37 205239 --> Output Class Initialized
INFO - 2019-01-05 17:44:37 207057 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:37 208826 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:37 208954 --> Input Class Initialized
INFO - 2019-01-05 17:44:37 209523 --> Language Class Initialized
INFO - 2019-01-05 17:44:37 212857 --> Loader Class Initialized
INFO - 2019-01-05 17:44:37 214252 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:37 214998 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:37 224375 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:37 229449 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:37 230829 --> Controller Class Initialized
DEBUG - 2019-01-05 23:14:37 230963 --> In LOGOUT
INFO - 2019-01-05 17:44:40 089112 --> Config Class Initialized
INFO - 2019-01-05 17:44:40 089354 --> Hooks Class Initialized
DEBUG - 2019-01-05 17:44:40 093786 --> UTF-8 Support Enabled
INFO - 2019-01-05 17:44:40 093967 --> Utf8 Class Initialized
INFO - 2019-01-05 17:44:40 096020 --> URI Class Initialized
INFO - 2019-01-05 17:44:40 103866 --> Router Class Initialized
INFO - 2019-01-05 17:44:40 108891 --> Output Class Initialized
INFO - 2019-01-05 17:44:40 111942 --> Security Class Initialized
DEBUG - 2019-01-05 17:44:40 116091 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 17:44:40 116272 --> Input Class Initialized
INFO - 2019-01-05 17:44:40 117202 --> Language Class Initialized
INFO - 2019-01-05 17:44:40 124901 --> Loader Class Initialized
INFO - 2019-01-05 17:44:40 126899 --> Helper loaded: url_helper
INFO - 2019-01-05 17:44:40 128113 --> Helper loaded: utility_helper
INFO - 2019-01-05 23:14:40 141257 --> Database Driver Class Initialized
INFO - 2019-01-05 23:14:40 146526 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-05 23:14:40 148008 --> Controller Class Initialized
INFO - 2019-01-05 23:14:40 148823 --> Parser Class Initialized
INFO - 2019-01-05 23:14:40 149979 --> Helper loaded: html_helper
INFO - 2019-01-05 23:14:40 153515 --> Model Class Initialized
DEBUG - 2019-01-05 23:14:40 224272 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-05 23:14:40 234242 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-05 23:14:40 235107 --> Model Class Initialized
DEBUG - 2019-01-05 23:14:40 235944 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-05 23:14:40 237186 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-05 23:14:40 240291 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-05 23:14:40 242419 --> Helper loaded: file_helper
DEBUG - 2019-01-05 23:14:40 242623 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-05 23:14:40 246023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 247891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 259114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 260046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 260494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 263364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 264125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 264533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 267352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 268090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 268490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 271363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 272119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 272521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 275479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 277367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 277776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 280641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 283055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 283871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 284280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 287285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 288324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 289412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 290184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 290596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 293616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 294511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 295594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 296360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 296792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 299896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 300793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 301899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 302706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 303114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 306408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 307408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 308548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 309354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 309803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 322905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 324701 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:14:40 327193 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-05 23:14:40 330019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 331998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 332437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-05 23:14:40 335674 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-05 23:14:40 336409 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-05 23:14:40 345943 --> Final output sent to browser
DEBUG - 2019-01-05 23:14:40 346079 --> Total execution time: 0.2534
INFO - 2019-01-05 19:30:33 474584 --> Config Class Initialized
INFO - 2019-01-05 19:30:33 478368 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:33 512763 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:33 515539 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:33 517040 --> URI Class Initialized
DEBUG - 2019-01-05 19:30:33 574513 --> No URI present. Default controller set.
INFO - 2019-01-05 19:30:33 574675 --> Router Class Initialized
INFO - 2019-01-05 19:30:33 603673 --> Output Class Initialized
INFO - 2019-01-05 19:30:33 616121 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:33 646881 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:33 659589 --> Input Class Initialized
INFO - 2019-01-05 19:30:33 660612 --> Language Class Initialized
INFO - 2019-01-05 19:30:33 720820 --> Loader Class Initialized
INFO - 2019-01-05 19:30:33 729173 --> Helper loaded: url_helper
INFO - 2019-01-05 19:30:33 742599 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:35 944964 --> Config Class Initialized
INFO - 2019-01-05 19:30:35 945278 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:35 947559 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:35 947719 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:35 949897 --> URI Class Initialized
INFO - 2019-01-05 19:30:35 952646 --> Router Class Initialized
INFO - 2019-01-05 19:30:35 954233 --> Output Class Initialized
INFO - 2019-01-05 19:30:35 955406 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:35 956496 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:35 956573 --> Input Class Initialized
INFO - 2019-01-05 19:30:35 956974 --> Language Class Initialized
ERROR - 2019-01-05 19:30:35 957851 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:35 987905 --> Config Class Initialized
INFO - 2019-01-05 19:30:35 988061 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:35 990293 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:35 990458 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:35 991775 --> URI Class Initialized
INFO - 2019-01-05 19:30:35 995965 --> Router Class Initialized
INFO - 2019-01-05 19:30:35 998437 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 001111 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 003742 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 003890 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 004496 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 005403 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:36 128612 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 128770 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:36 130856 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 130985 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 132257 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 135509 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 138015 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 152493 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 152626 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:36 154423 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 154524 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 155662 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 159162 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 159534 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:36 161700 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 161798 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 162906 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 164527 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 164628 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 165090 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 165847 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:36 175086 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 177829 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 179991 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 184664 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 191668 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 191912 --> Hooks Class Initialized
INFO - 2019-01-05 19:30:36 194566 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 196073 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 196171 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 196654 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 197833 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:36 200316 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 201926 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 203464 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 204104 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 205368 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 206163 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-05 19:30:36 207479 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 207581 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 209050 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 212503 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 215451 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 217531 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 231470 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 231621 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 232150 --> Language Class Initialized
INFO - 2019-01-05 19:30:36 235838 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 236073 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:36 238063 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 238159 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 239636 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 244215 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 247181 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 249341 --> Security Class Initialized
INFO - 2019-01-05 19:30:36 258290 --> Loader Class Initialized
INFO - 2019-01-05 19:30:36 260226 --> Helper loaded: url_helper
DEBUG - 2019-01-05 19:30:36 262197 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 262330 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 263005 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 264214 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:36 266911 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:36 302078 --> Config Class Initialized
INFO - 2019-01-05 19:30:36 302189 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:36 303678 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:36 303766 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:36 304647 --> URI Class Initialized
INFO - 2019-01-05 19:30:36 307311 --> Router Class Initialized
INFO - 2019-01-05 19:30:36 309070 --> Output Class Initialized
INFO - 2019-01-05 19:30:36 310416 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:36 312494 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:36 312585 --> Input Class Initialized
INFO - 2019-01-05 19:30:36 312983 --> Language Class Initialized
ERROR - 2019-01-05 19:30:36 313683 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-05 19:30:38 335931 --> Config Class Initialized
INFO - 2019-01-05 19:30:38 336036 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:38 337383 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:38 337476 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:38 338267 --> URI Class Initialized
INFO - 2019-01-05 19:30:38 340317 --> Router Class Initialized
INFO - 2019-01-05 19:30:38 341882 --> Output Class Initialized
INFO - 2019-01-05 19:30:38 343111 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:38 344211 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:38 344290 --> Input Class Initialized
INFO - 2019-01-05 19:30:38 344671 --> Language Class Initialized
ERROR - 2019-01-05 19:30:38 345248 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-05 19:30:42 243189 --> Config Class Initialized
INFO - 2019-01-05 19:30:42 243347 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:42 245498 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:42 245630 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:42 246979 --> URI Class Initialized
INFO - 2019-01-05 19:30:42 249965 --> Router Class Initialized
INFO - 2019-01-05 19:30:42 252484 --> Output Class Initialized
INFO - 2019-01-05 19:30:42 254471 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:42 256356 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:42 256501 --> Input Class Initialized
INFO - 2019-01-05 19:30:42 257092 --> Language Class Initialized
INFO - 2019-01-05 19:30:42 262191 --> Loader Class Initialized
INFO - 2019-01-05 19:30:42 264121 --> Helper loaded: url_helper
INFO - 2019-01-05 19:30:42 265039 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:43 118916 --> Config Class Initialized
INFO - 2019-01-05 19:30:43 119242 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:43 121649 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:43 121778 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:43 123347 --> URI Class Initialized
INFO - 2019-01-05 19:30:43 126562 --> Router Class Initialized
INFO - 2019-01-05 19:30:43 129184 --> Output Class Initialized
INFO - 2019-01-05 19:30:43 135230 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:43 141055 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:43 141299 --> Input Class Initialized
INFO - 2019-01-05 19:30:43 142875 --> Language Class Initialized
INFO - 2019-01-05 19:30:43 154655 --> Loader Class Initialized
INFO - 2019-01-05 19:30:43 156318 --> Helper loaded: url_helper
INFO - 2019-01-05 19:30:43 157170 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:44 551203 --> Config Class Initialized
INFO - 2019-01-05 19:30:44 551402 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:44 552890 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:44 552964 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:44 553889 --> URI Class Initialized
INFO - 2019-01-05 19:30:44 556193 --> Router Class Initialized
INFO - 2019-01-05 19:30:44 557813 --> Output Class Initialized
INFO - 2019-01-05 19:30:44 558902 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:44 559925 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:44 559997 --> Input Class Initialized
INFO - 2019-01-05 19:30:44 560333 --> Language Class Initialized
INFO - 2019-01-05 19:30:44 562696 --> Loader Class Initialized
INFO - 2019-01-05 19:30:44 563638 --> Helper loaded: url_helper
INFO - 2019-01-05 19:30:44 564215 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:45 074039 --> Config Class Initialized
INFO - 2019-01-05 19:30:45 074183 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:45 076272 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:45 076394 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:45 077860 --> URI Class Initialized
INFO - 2019-01-05 19:30:45 080926 --> Router Class Initialized
INFO - 2019-01-05 19:30:45 097651 --> Output Class Initialized
INFO - 2019-01-05 19:30:45 099566 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:45 101258 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:45 101383 --> Input Class Initialized
INFO - 2019-01-05 19:30:45 101968 --> Language Class Initialized
ERROR - 2019-01-05 19:30:45 102916 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-05 19:30:45 109854 --> Config Class Initialized
INFO - 2019-01-05 19:30:45 110172 --> Hooks Class Initialized
INFO - 2019-01-05 19:30:45 111625 --> Config Class Initialized
INFO - 2019-01-05 19:30:45 111767 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:45 113987 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:45 114113 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:45 115402 --> URI Class Initialized
DEBUG - 2019-01-05 19:30:45 119676 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:45 119803 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:45 121427 --> URI Class Initialized
INFO - 2019-01-05 19:30:45 126045 --> Router Class Initialized
INFO - 2019-01-05 19:30:45 128726 --> Output Class Initialized
INFO - 2019-01-05 19:30:45 129549 --> Router Class Initialized
INFO - 2019-01-05 19:30:45 131953 --> Output Class Initialized
INFO - 2019-01-05 19:30:45 133820 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:45 135502 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:45 135628 --> Input Class Initialized
INFO - 2019-01-05 19:30:45 136181 --> Language Class Initialized
ERROR - 2019-01-05 19:30:45 137094 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-05 19:30:45 140263 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:45 142133 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:45 142262 --> Input Class Initialized
INFO - 2019-01-05 19:30:45 142901 --> Language Class Initialized
ERROR - 2019-01-05 19:30:45 143889 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-05 19:30:45 338316 --> Config Class Initialized
INFO - 2019-01-05 19:30:45 338524 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:45 340972 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:45 341135 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:45 342767 --> URI Class Initialized
INFO - 2019-01-05 19:30:45 346528 --> Router Class Initialized
INFO - 2019-01-05 19:30:45 349361 --> Output Class Initialized
INFO - 2019-01-05 19:30:45 351567 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:45 353574 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:45 353712 --> Input Class Initialized
INFO - 2019-01-05 19:30:45 354293 --> Language Class Initialized
ERROR - 2019-01-05 19:30:45 355237 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-05 19:30:46 068645 --> Config Class Initialized
INFO - 2019-01-05 19:30:46 068988 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:46 071296 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:46 071444 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:46 072885 --> URI Class Initialized
INFO - 2019-01-05 19:30:46 075531 --> Router Class Initialized
INFO - 2019-01-05 19:30:46 077905 --> Output Class Initialized
INFO - 2019-01-05 19:30:46 079832 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:46 081377 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:46 081501 --> Input Class Initialized
INFO - 2019-01-05 19:30:46 082067 --> Language Class Initialized
INFO - 2019-01-05 19:30:46 089591 --> Loader Class Initialized
INFO - 2019-01-05 19:30:46 090795 --> Helper loaded: url_helper
INFO - 2019-01-05 19:30:46 091401 --> Helper loaded: utility_helper
INFO - 2019-01-05 19:30:51 070760 --> Config Class Initialized
INFO - 2019-01-05 19:30:51 070883 --> Hooks Class Initialized
DEBUG - 2019-01-05 19:30:51 072865 --> UTF-8 Support Enabled
INFO - 2019-01-05 19:30:51 072961 --> Utf8 Class Initialized
INFO - 2019-01-05 19:30:51 073966 --> URI Class Initialized
INFO - 2019-01-05 19:30:51 076915 --> Router Class Initialized
INFO - 2019-01-05 19:30:51 079093 --> Output Class Initialized
INFO - 2019-01-05 19:30:51 080962 --> Security Class Initialized
DEBUG - 2019-01-05 19:30:51 082206 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-05 19:30:51 082298 --> Input Class Initialized
INFO - 2019-01-05 19:30:51 082717 --> Language Class Initialized
ERROR - 2019-01-05 19:30:51 083482 --> 404 Page Not Found: Browse-sector-list/1
