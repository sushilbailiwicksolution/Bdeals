<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-27 08:07:53 207762 --> Config Class Initialized
INFO - 2019-01-27 08:07:53 208030 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:07:53 229918 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:07:53 230091 --> Utf8 Class Initialized
INFO - 2019-01-27 08:07:53 231869 --> URI Class Initialized
DEBUG - 2019-01-27 08:07:53 247864 --> No URI present. Default controller set.
INFO - 2019-01-27 08:07:53 248035 --> Router Class Initialized
INFO - 2019-01-27 08:07:53 263537 --> Output Class Initialized
INFO - 2019-01-27 08:07:53 266057 --> Security Class Initialized
DEBUG - 2019-01-27 08:07:53 273698 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:07:53 273806 --> Input Class Initialized
INFO - 2019-01-27 08:07:53 274492 --> Language Class Initialized
INFO - 2019-01-27 08:07:53 300753 --> Loader Class Initialized
INFO - 2019-01-27 08:07:53 317308 --> Helper loaded: url_helper
INFO - 2019-01-27 08:07:53 325649 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:37:53 343907 --> Database Driver Class Initialized
INFO - 2019-01-27 13:37:53 376279 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:37:53 382863 --> Controller Class Initialized
INFO - 2019-01-27 13:37:53 384008 --> Parser Class Initialized
INFO - 2019-01-27 13:37:53 385055 --> Helper loaded: html_helper
INFO - 2019-01-27 13:37:53 391462 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:37:53 398310 --> Model Class Initialized
DEBUG - 2019-01-27 13:37:53 442651 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:37:53 447750 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:37:53 456377 --> Model Class Initialized
DEBUG - 2019-01-27 13:37:53 458693 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:37:53 485521 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:37:53 496208 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:37:53 496373 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:37:53 505501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 514305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 539343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 541501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 543914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 544262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 544850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 545686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 547904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 548229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 548813 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:37:53 550381 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:37:53 550529 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:37:53 550688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 552999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 553308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 553878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 554697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 557028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 557379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 558012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 558850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 561351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 561722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 562292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 563091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 565480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 565808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 566378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 567178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 569583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 569910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 570517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 571300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 573705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 574040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 574646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 575444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 577877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 578202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 578838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 579629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 582063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 582403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 583017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 583808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 586343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 586694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 587320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 588161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 590749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 591082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 591737 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:37:53 592549 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:37:53 592673 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:37:53 592828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 595319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 595674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 596308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 597141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 599607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 599939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 600595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 601378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 603878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 604211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 604870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 605640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 608237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 608594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 609234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 610075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 612641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 612981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 613636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 614409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 615104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 615783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 616471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 617142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 617841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 618690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 619714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 620410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 621100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 621769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 622445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 623096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 623764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 624468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 625169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 626009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 626738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 627361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 627995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 628642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 629257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 629905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 630620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 631321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 632066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 632733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 633424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 634066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 634763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 635406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 636096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 636754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 637520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 638220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 641058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 641412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 642102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 642824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 645343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 645705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 646384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 647115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 649610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 649949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 650638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 651355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 653939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 654289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 655025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 655770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 658428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 658781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 659523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 660265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 662827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 663173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 663878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 666516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 666852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 667522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 668311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 670958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 671304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 671967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 672734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 675185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 675544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 676194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 676942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 679466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 679814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 680980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 681782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 684422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 684796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 685503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 686280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 688931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 689296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 690006 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:37:53 690830 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:37:53 703236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 705172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 705578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:53 708348 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:37:53 709011 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:37:53 718075 --> Final output sent to browser
DEBUG - 2019-01-27 13:37:53 718209 --> Total execution time: 0.5205
INFO - 2019-01-27 08:07:54 333076 --> Config Class Initialized
INFO - 2019-01-27 08:07:54 333302 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:07:54 337742 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:07:54 337930 --> Utf8 Class Initialized
INFO - 2019-01-27 08:07:54 340539 --> URI Class Initialized
DEBUG - 2019-01-27 08:07:54 345480 --> No URI present. Default controller set.
INFO - 2019-01-27 08:07:54 345670 --> Router Class Initialized
INFO - 2019-01-27 08:07:54 350925 --> Output Class Initialized
INFO - 2019-01-27 08:07:54 354934 --> Security Class Initialized
DEBUG - 2019-01-27 08:07:54 358848 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:07:54 359033 --> Input Class Initialized
INFO - 2019-01-27 08:07:54 360104 --> Language Class Initialized
INFO - 2019-01-27 08:07:54 368001 --> Loader Class Initialized
INFO - 2019-01-27 08:07:54 370865 --> Helper loaded: url_helper
INFO - 2019-01-27 08:07:54 372390 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:37:54 393815 --> Database Driver Class Initialized
INFO - 2019-01-27 13:37:54 402493 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:37:54 405196 --> Controller Class Initialized
INFO - 2019-01-27 13:37:54 406408 --> Parser Class Initialized
INFO - 2019-01-27 13:37:54 408337 --> Helper loaded: html_helper
INFO - 2019-01-27 13:37:54 410836 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:37:54 417901 --> Model Class Initialized
DEBUG - 2019-01-27 13:37:54 437428 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:37:54 448060 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:37:54 449405 --> Model Class Initialized
DEBUG - 2019-01-27 13:37:54 450270 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:37:54 456840 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:37:54 460390 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:37:54 460656 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:37:54 465862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 466653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 474788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 475887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 478207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 478554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 479125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 479986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 482326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 482672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 483252 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:37:54 484519 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:37:54 484661 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:37:54 484833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 487276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 487643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 488248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 489020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 491512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 491863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 492476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 493282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 496068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 496815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 497607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 498409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 501322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 501702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 502326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 503149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 505733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 506081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 506726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 507519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 510083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 510452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 511091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 511903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 514488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 514833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 515500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 516283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 518956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 519362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 520044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 520930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 523567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 523921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 524610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 525417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 528059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 528415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 529254 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:37:54 530092 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:37:54 530222 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:37:54 530388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 532972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 533322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 534250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 535116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 538806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 539175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 540215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 541049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 543771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 544379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 545649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 546756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 551754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 552119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 552822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 556515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 559166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 559549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 560229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 561038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 561815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 562587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 563324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 564110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 564862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 565587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 566284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 566999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 567723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 568425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 569153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 569868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 570570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 571269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 572006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 572945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 573719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 574397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 575092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 575768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 576433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 577112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 577892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 578684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 579456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 580147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 580889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 581589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 582318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 583039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 583792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 584501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 585273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 586011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 588967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 589327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 590063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 590835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 593692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 594062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 594799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 595592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 598330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 598711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 599433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 600260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 603482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 603862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 604617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 605427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 608664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 609046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 609833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 610836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 614522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 615135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 616321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 619694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 620066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 620776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 621701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 624358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 624810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 625576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 626455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 629131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 629571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 630275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 631167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 633836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 634203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 634910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 635797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 638385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 638777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 639517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 640587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 643237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 643721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 644632 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:37:54 645528 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:37:54 648695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 650295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 650669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:37:54 653263 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:37:54 653897 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:37:54 661788 --> Final output sent to browser
DEBUG - 2019-01-27 13:37:54 661905 --> Total execution time: 0.3256
INFO - 2019-01-27 08:07:58 824219 --> Config Class Initialized
INFO - 2019-01-27 08:07:58 824465 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:07:58 826894 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:07:58 826989 --> Utf8 Class Initialized
INFO - 2019-01-27 08:07:58 828013 --> URI Class Initialized
INFO - 2019-01-27 08:07:58 830568 --> Router Class Initialized
INFO - 2019-01-27 08:07:58 831962 --> Output Class Initialized
INFO - 2019-01-27 08:07:58 832993 --> Security Class Initialized
DEBUG - 2019-01-27 08:07:58 833981 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:07:58 834049 --> Input Class Initialized
INFO - 2019-01-27 08:07:58 834367 --> Language Class Initialized
ERROR - 2019-01-27 08:07:58 835072 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:07:58 869591 --> Config Class Initialized
INFO - 2019-01-27 08:07:58 869676 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:07:58 870811 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:07:58 870879 --> Utf8 Class Initialized
INFO - 2019-01-27 08:07:58 871597 --> URI Class Initialized
INFO - 2019-01-27 08:07:58 873908 --> Router Class Initialized
INFO - 2019-01-27 08:07:58 875232 --> Output Class Initialized
INFO - 2019-01-27 08:07:58 876312 --> Security Class Initialized
DEBUG - 2019-01-27 08:07:58 877654 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:07:58 877789 --> Input Class Initialized
INFO - 2019-01-27 08:07:58 878173 --> Language Class Initialized
ERROR - 2019-01-27 08:07:58 878802 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:07:59 984380 --> Config Class Initialized
INFO - 2019-01-27 08:07:59 984488 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:07:59 985656 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:07:59 985727 --> Utf8 Class Initialized
INFO - 2019-01-27 08:07:59 986738 --> URI Class Initialized
INFO - 2019-01-27 08:07:59 988888 --> Config Class Initialized
INFO - 2019-01-27 08:07:59 989262 --> Hooks Class Initialized
INFO - 2019-01-27 08:07:59 989731 --> Router Class Initialized
INFO - 2019-01-27 08:07:59 992569 --> Output Class Initialized
INFO - 2019-01-27 08:07:59 994721 --> Security Class Initialized
DEBUG - 2019-01-27 08:07:59 996912 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:07:59 997044 --> Input Class Initialized
INFO - 2019-01-27 08:07:59 997656 --> Language Class Initialized
DEBUG - 2019-01-27 08:08:00 006850 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:00 006989 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:00 008696 --> URI Class Initialized
INFO - 2019-01-27 08:08:00 018022 --> Config Class Initialized
INFO - 2019-01-27 08:08:00 018333 --> Hooks Class Initialized
ERROR - 2019-01-27 08:08:00 019675 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:00 022802 --> Router Class Initialized
INFO - 2019-01-27 08:08:00 025556 --> Output Class Initialized
INFO - 2019-01-27 08:08:00 027566 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:00 029525 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:00 029655 --> Input Class Initialized
INFO - 2019-01-27 08:08:00 030267 --> Language Class Initialized
ERROR - 2019-01-27 08:08:00 031277 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-27 08:08:00 033931 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:00 034063 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:00 035742 --> URI Class Initialized
INFO - 2019-01-27 08:08:00 040564 --> Router Class Initialized
INFO - 2019-01-27 08:08:00 044333 --> Output Class Initialized
INFO - 2019-01-27 08:08:00 046443 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:00 048465 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:00 048599 --> Input Class Initialized
INFO - 2019-01-27 08:08:00 049210 --> Language Class Initialized
ERROR - 2019-01-27 08:08:00 050224 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:00 092875 --> Config Class Initialized
INFO - 2019-01-27 08:08:00 093067 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:00 094388 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:00 094490 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:00 095391 --> URI Class Initialized
INFO - 2019-01-27 08:08:00 098000 --> Router Class Initialized
INFO - 2019-01-27 08:08:00 099486 --> Output Class Initialized
INFO - 2019-01-27 08:08:00 100553 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:00 101587 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:00 101656 --> Input Class Initialized
INFO - 2019-01-27 08:08:00 101984 --> Language Class Initialized
ERROR - 2019-01-27 08:08:00 102566 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:00 125056 --> Config Class Initialized
INFO - 2019-01-27 08:08:00 125143 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:00 126346 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:00 126424 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:00 127213 --> URI Class Initialized
INFO - 2019-01-27 08:08:00 128969 --> Router Class Initialized
INFO - 2019-01-27 08:08:00 130346 --> Output Class Initialized
INFO - 2019-01-27 08:08:00 131359 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:00 132350 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:00 132430 --> Input Class Initialized
INFO - 2019-01-27 08:08:00 133019 --> Language Class Initialized
ERROR - 2019-01-27 08:08:00 133667 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:01 299585 --> Config Class Initialized
INFO - 2019-01-27 08:08:01 299757 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:01 303510 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:01 303653 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:01 305408 --> URI Class Initialized
INFO - 2019-01-27 08:08:01 309379 --> Router Class Initialized
INFO - 2019-01-27 08:08:01 311464 --> Output Class Initialized
INFO - 2019-01-27 08:08:01 313025 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:01 314707 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:01 314811 --> Input Class Initialized
INFO - 2019-01-27 08:08:01 315285 --> Language Class Initialized
INFO - 2019-01-27 08:08:01 332061 --> Loader Class Initialized
INFO - 2019-01-27 08:08:01 333693 --> Helper loaded: url_helper
INFO - 2019-01-27 08:08:01 334444 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:38:01 343528 --> Database Driver Class Initialized
INFO - 2019-01-27 13:38:01 351983 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:38:01 353393 --> Controller Class Initialized
ERROR - 2019-01-27 13:38:01 354310 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:38:01 358494 --> Final output sent to browser
DEBUG - 2019-01-27 13:38:01 358604 --> Total execution time: 0.0604
INFO - 2019-01-27 08:08:09 186100 --> Config Class Initialized
INFO - 2019-01-27 08:08:09 186353 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:09 188224 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:09 188323 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:09 189574 --> URI Class Initialized
INFO - 2019-01-27 08:08:09 193249 --> Router Class Initialized
INFO - 2019-01-27 08:08:09 196274 --> Output Class Initialized
INFO - 2019-01-27 08:08:09 197803 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:09 199268 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:09 199366 --> Input Class Initialized
INFO - 2019-01-27 08:08:09 199850 --> Language Class Initialized
ERROR - 2019-01-27 08:08:09 200622 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-27 08:08:14 049863 --> Config Class Initialized
INFO - 2019-01-27 08:08:14 050017 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:14 052076 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:14 052201 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:14 053477 --> URI Class Initialized
DEBUG - 2019-01-27 08:08:14 055798 --> No URI present. Default controller set.
INFO - 2019-01-27 08:08:14 055924 --> Router Class Initialized
INFO - 2019-01-27 08:08:14 058478 --> Output Class Initialized
INFO - 2019-01-27 08:08:14 060374 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:14 062284 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:14 062422 --> Input Class Initialized
INFO - 2019-01-27 08:08:14 063020 --> Language Class Initialized
INFO - 2019-01-27 08:08:14 066896 --> Loader Class Initialized
INFO - 2019-01-27 08:08:14 068600 --> Helper loaded: url_helper
INFO - 2019-01-27 08:08:14 069470 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:38:14 079680 --> Database Driver Class Initialized
INFO - 2019-01-27 13:38:14 088238 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:38:14 089725 --> Controller Class Initialized
INFO - 2019-01-27 13:38:14 090462 --> Parser Class Initialized
INFO - 2019-01-27 13:38:14 091561 --> Helper loaded: html_helper
INFO - 2019-01-27 13:38:14 092758 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:38:14 096093 --> Model Class Initialized
DEBUG - 2019-01-27 13:38:14 117003 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:38:14 123327 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:38:14 124125 --> Model Class Initialized
DEBUG - 2019-01-27 13:38:14 124882 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:38:14 128354 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:38:14 131222 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:38:14 131438 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:38:14 136811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 139055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 153001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 155627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 159178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 159656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 160568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 161664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 165002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 165492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 166322 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:38:14 168107 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:38:14 168303 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:38:14 168554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 172112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 172823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 173669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 174990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 178092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 178749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 179617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 181078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 184930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 185476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 186312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 187331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 190711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 191214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 192027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 193164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 196603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 197252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 198318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 199243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 204687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 205391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 206842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 207910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 213047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 213593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 214452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 215207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 218566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 219023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 221180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 222443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 225830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 226306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 227143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 228081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 231869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 232323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 233160 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:38:14 234139 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:38:14 234302 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:38:14 234534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 237828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 238291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 239125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 240060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 243423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 243875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 244868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 245858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 249233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 249700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 250591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 251528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 254822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 255260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 256110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 257064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 260234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 260899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 261765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 262716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 263566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 264338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 265249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 266055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 266850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 267755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 268647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 269531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 270350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 271235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 272368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 273564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 274378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 275177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 276005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 277152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 278063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 278902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 279731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 280550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 281344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 282176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 283051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 283960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 284800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 285625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 286454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 287259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 288081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 288908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 289714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 290544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 291383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 292186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 295758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 296209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 297105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 297988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 302234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 302736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 303643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 304591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 307758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 308202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 309093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 310247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 314250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 314743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 315658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 316612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 319801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 320250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 321172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 322025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 325167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 325637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 326545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 329647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 330082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 330943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 331895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 335067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 335541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 336380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 337261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 340369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 340831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 341692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 342555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 345733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 346187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 347109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 348006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 351265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 351738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 352611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 353498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 356643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 357090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 357949 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:38:14 358849 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:38:14 361854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 363856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 364295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:38:14 367516 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:38:14 368283 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:38:14 377480 --> Final output sent to browser
DEBUG - 2019-01-27 13:38:14 377620 --> Total execution time: 0.3212
INFO - 2019-01-27 08:08:17 118077 --> Config Class Initialized
INFO - 2019-01-27 08:08:17 118417 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:17 120883 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:17 121012 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:17 122644 --> URI Class Initialized
INFO - 2019-01-27 08:08:17 125582 --> Router Class Initialized
INFO - 2019-01-27 08:08:17 128269 --> Output Class Initialized
INFO - 2019-01-27 08:08:17 130268 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:17 132225 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:17 132354 --> Input Class Initialized
INFO - 2019-01-27 08:08:17 132976 --> Language Class Initialized
INFO - 2019-01-27 08:08:17 141031 --> Loader Class Initialized
INFO - 2019-01-27 08:08:17 142723 --> Helper loaded: url_helper
INFO - 2019-01-27 08:08:17 143613 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:38:17 155884 --> Database Driver Class Initialized
INFO - 2019-01-27 13:38:17 164783 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:38:17 166301 --> Controller Class Initialized
ERROR - 2019-01-27 13:38:17 167269 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:38:17 168169 --> Final output sent to browser
DEBUG - 2019-01-27 13:38:17 168296 --> Total execution time: 0.0522
INFO - 2019-01-27 08:08:18 304886 --> Config Class Initialized
INFO - 2019-01-27 08:08:18 305044 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:18 307209 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:18 307338 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:18 315613 --> Config Class Initialized
INFO - 2019-01-27 08:08:18 315757 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:18 318249 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:18 318383 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:18 319680 --> URI Class Initialized
INFO - 2019-01-27 08:08:18 322864 --> Router Class Initialized
INFO - 2019-01-27 08:08:18 325236 --> Output Class Initialized
INFO - 2019-01-27 08:08:18 327090 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:18 328879 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:18 329006 --> Input Class Initialized
INFO - 2019-01-27 08:08:18 329720 --> URI Class Initialized
INFO - 2019-01-27 08:08:18 333937 --> Router Class Initialized
INFO - 2019-01-27 08:08:18 336355 --> Output Class Initialized
INFO - 2019-01-27 08:08:18 338293 --> Security Class Initialized
INFO - 2019-01-27 08:08:18 339632 --> Language Class Initialized
ERROR - 2019-01-27 08:08:18 340568 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-27 08:08:18 343164 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:18 343296 --> Input Class Initialized
INFO - 2019-01-27 08:08:18 343883 --> Language Class Initialized
ERROR - 2019-01-27 08:08:18 344806 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:19 206022 --> Config Class Initialized
INFO - 2019-01-27 08:08:19 206305 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:19 208551 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:19 208686 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:19 209840 --> URI Class Initialized
INFO - 2019-01-27 08:08:19 214152 --> Router Class Initialized
INFO - 2019-01-27 08:08:19 216355 --> Output Class Initialized
INFO - 2019-01-27 08:08:19 217925 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:19 219132 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:19 219223 --> Input Class Initialized
INFO - 2019-01-27 08:08:19 219804 --> Language Class Initialized
ERROR - 2019-01-27 08:08:19 220493 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:19 732913 --> Config Class Initialized
INFO - 2019-01-27 08:08:19 733004 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:19 734447 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:19 734520 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:19 735414 --> URI Class Initialized
INFO - 2019-01-27 08:08:19 737214 --> Router Class Initialized
INFO - 2019-01-27 08:08:19 738668 --> Output Class Initialized
INFO - 2019-01-27 08:08:19 749867 --> Config Class Initialized
INFO - 2019-01-27 08:08:19 749943 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:19 751239 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:19 751337 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:19 752229 --> URI Class Initialized
INFO - 2019-01-27 08:08:19 753978 --> Router Class Initialized
INFO - 2019-01-27 08:08:19 755755 --> Output Class Initialized
INFO - 2019-01-27 08:08:19 757062 --> Security Class Initialized
INFO - 2019-01-27 08:08:19 757754 --> Config Class Initialized
INFO - 2019-01-27 08:08:19 757945 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:19 759239 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:19 759308 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:19 760158 --> URI Class Initialized
INFO - 2019-01-27 08:08:19 762947 --> Router Class Initialized
INFO - 2019-01-27 08:08:19 764339 --> Output Class Initialized
INFO - 2019-01-27 08:08:19 764934 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:19 765954 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:19 766024 --> Input Class Initialized
INFO - 2019-01-27 08:08:19 766335 --> Language Class Initialized
ERROR - 2019-01-27 08:08:19 766875 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-27 08:08:19 768680 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:19 768749 --> Input Class Initialized
INFO - 2019-01-27 08:08:19 769097 --> Language Class Initialized
ERROR - 2019-01-27 08:08:19 769608 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:19 771528 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:19 772542 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:19 772610 --> Input Class Initialized
INFO - 2019-01-27 08:08:19 772924 --> Language Class Initialized
ERROR - 2019-01-27 08:08:19 773498 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:20 111772 --> Config Class Initialized
INFO - 2019-01-27 08:08:20 112096 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:20 114558 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:20 114686 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:20 116303 --> URI Class Initialized
INFO - 2019-01-27 08:08:20 121192 --> Router Class Initialized
INFO - 2019-01-27 08:08:20 123842 --> Output Class Initialized
INFO - 2019-01-27 08:08:20 125838 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:20 128210 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:20 128338 --> Input Class Initialized
INFO - 2019-01-27 08:08:20 128961 --> Language Class Initialized
ERROR - 2019-01-27 08:08:20 129961 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:08:24 361195 --> Config Class Initialized
INFO - 2019-01-27 08:08:24 361321 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:08:24 363018 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:08:24 363122 --> Utf8 Class Initialized
INFO - 2019-01-27 08:08:24 364211 --> URI Class Initialized
INFO - 2019-01-27 08:08:24 366833 --> Router Class Initialized
INFO - 2019-01-27 08:08:24 368844 --> Output Class Initialized
INFO - 2019-01-27 08:08:24 370377 --> Security Class Initialized
DEBUG - 2019-01-27 08:08:24 371913 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:08:24 372018 --> Input Class Initialized
INFO - 2019-01-27 08:08:24 372502 --> Language Class Initialized
ERROR - 2019-01-27 08:08:24 373245 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-27 08:09:38 446455 --> Config Class Initialized
INFO - 2019-01-27 08:09:38 446737 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:38 448770 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:38 448879 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:38 450189 --> URI Class Initialized
INFO - 2019-01-27 08:09:38 454516 --> Router Class Initialized
INFO - 2019-01-27 08:09:38 456769 --> Output Class Initialized
INFO - 2019-01-27 08:09:38 458504 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:38 460273 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:38 460489 --> Input Class Initialized
INFO - 2019-01-27 08:09:38 461237 --> Language Class Initialized
INFO - 2019-01-27 08:09:38 464941 --> Loader Class Initialized
INFO - 2019-01-27 08:09:38 466259 --> Helper loaded: url_helper
INFO - 2019-01-27 08:09:38 467327 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:39:38 476192 --> Database Driver Class Initialized
INFO - 2019-01-27 13:39:38 484760 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:39:38 485559 --> Controller Class Initialized
INFO - 2019-01-27 13:39:38 485956 --> Parser Class Initialized
INFO - 2019-01-27 13:39:38 486551 --> Helper loaded: html_helper
INFO - 2019-01-27 13:39:38 488323 --> Model Class Initialized
INFO - 2019-01-27 13:39:38 497946 --> Model Class Initialized
DEBUG - 2019-01-27 13:39:38 506875 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:39:38 508244 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:39:38 513923 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-27 13:39:38 514025 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-27 13:39:38 515010 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:39:38 516113 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:39:38 516208 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:39:38 517010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 517666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 518336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 518965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 519594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 520242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 520857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 521502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 522139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 522789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 523403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 524039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 524668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 525264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 525878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 526465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 527051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 527642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 528218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 528826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 529406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 530020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 530656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 531227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 531843 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:39:38 532526 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-27 13:39:38 532608 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-27 13:39:38 532669 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-27 13:39:38 534178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 536926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 538172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:38 543772 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:39:38 545747 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:39:38 551546 --> Final output sent to browser
DEBUG - 2019-01-27 13:39:38 551620 --> Total execution time: 0.1016
INFO - 2019-01-27 08:09:39 440126 --> Config Class Initialized
INFO - 2019-01-27 08:09:39 440411 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:39 442625 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:39 442730 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:39 444046 --> URI Class Initialized
INFO - 2019-01-27 08:09:39 446602 --> Router Class Initialized
INFO - 2019-01-27 08:09:39 448854 --> Output Class Initialized
INFO - 2019-01-27 08:09:39 451230 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:39 452847 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:39 452955 --> Input Class Initialized
INFO - 2019-01-27 08:09:39 453639 --> Language Class Initialized
INFO - 2019-01-27 08:09:39 460366 --> Loader Class Initialized
INFO - 2019-01-27 08:09:39 461744 --> Helper loaded: url_helper
INFO - 2019-01-27 08:09:39 462477 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:39:39 472848 --> Database Driver Class Initialized
INFO - 2019-01-27 13:39:39 482440 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:39:39 483675 --> Controller Class Initialized
ERROR - 2019-01-27 13:39:39 484498 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:39:39 485229 --> Final output sent to browser
DEBUG - 2019-01-27 13:39:39 485330 --> Total execution time: 0.0469
INFO - 2019-01-27 08:09:42 474673 --> Config Class Initialized
INFO - 2019-01-27 08:09:42 474848 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:42 476103 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:42 476181 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:42 477047 --> URI Class Initialized
INFO - 2019-01-27 08:09:42 479286 --> Router Class Initialized
INFO - 2019-01-27 08:09:42 480643 --> Output Class Initialized
INFO - 2019-01-27 08:09:42 481668 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:42 482651 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:42 482717 --> Input Class Initialized
INFO - 2019-01-27 08:09:42 483040 --> Language Class Initialized
INFO - 2019-01-27 08:09:42 485054 --> Loader Class Initialized
INFO - 2019-01-27 08:09:42 485889 --> Helper loaded: url_helper
INFO - 2019-01-27 08:09:42 486334 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:39:42 491693 --> Database Driver Class Initialized
INFO - 2019-01-27 13:39:42 496231 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:39:42 496999 --> Controller Class Initialized
INFO - 2019-01-27 13:39:42 497396 --> Parser Class Initialized
INFO - 2019-01-27 13:39:42 497961 --> Helper loaded: html_helper
INFO - 2019-01-27 13:39:42 499696 --> Model Class Initialized
DEBUG - 2019-01-27 13:39:42 504378 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '21'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-27 13:39:42 512159 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-27 13:39:42 512679 --> Model Class Initialized
DEBUG - 2019-01-27 13:39:42 513125 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:39:42 513814 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:39:42 523335 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:39:42 524442 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:39:42 524545 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:39:42 526391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 527347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 532705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 533166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 533390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 534887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 535269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 535475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 536917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 537290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 537493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 538958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 539339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 539566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 541201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 541716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 541929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 543451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 543911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 544116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 545694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 546096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 546303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 547907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 548309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 548532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 550143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 550561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 550798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 552385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 553380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 553612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 555190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 556495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 556948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 557184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 558816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 559408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 560003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 560441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 560663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 562283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 562817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 563433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 563872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 564095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 565737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 566246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 566871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 567331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 567576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 569283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 569822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 570415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 570868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 571094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 572751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 573270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 573895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 574362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 574744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 576436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 576956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 577578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 578017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 578243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 579886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 580389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 580992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 581449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 581680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 583271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 583806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 584412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 584856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 585083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 586702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 587201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 587811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 588263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 588501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 590102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 590625 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:39:42 591263 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-27 13:39:42 593147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 594182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 594415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:39:42 596028 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:39:42 596441 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:39:42 605241 --> Final output sent to browser
DEBUG - 2019-01-27 13:39:42 605325 --> Total execution time: 0.1236
INFO - 2019-01-27 08:09:42 786667 --> Config Class Initialized
INFO - 2019-01-27 08:09:42 786787 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:42 788427 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:42 788533 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:42 789500 --> URI Class Initialized
INFO - 2019-01-27 08:09:42 792135 --> Router Class Initialized
INFO - 2019-01-27 08:09:42 793919 --> Output Class Initialized
INFO - 2019-01-27 08:09:42 795285 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:42 796605 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:42 796700 --> Input Class Initialized
INFO - 2019-01-27 08:09:42 797123 --> Language Class Initialized
ERROR - 2019-01-27 08:09:42 797816 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-27 08:09:42 837778 --> Config Class Initialized
INFO - 2019-01-27 08:09:42 837873 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:42 839103 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:42 839179 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:42 841063 --> URI Class Initialized
INFO - 2019-01-27 08:09:42 848150 --> Router Class Initialized
INFO - 2019-01-27 08:09:42 849519 --> Output Class Initialized
INFO - 2019-01-27 08:09:42 850574 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:42 851588 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:42 851663 --> Input Class Initialized
INFO - 2019-01-27 08:09:42 851984 --> Language Class Initialized
ERROR - 2019-01-27 08:09:42 852513 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-27 08:09:42 891882 --> Config Class Initialized
INFO - 2019-01-27 08:09:42 892133 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:42 893979 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:42 894076 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:42 895329 --> URI Class Initialized
INFO - 2019-01-27 08:09:42 899010 --> Router Class Initialized
INFO - 2019-01-27 08:09:42 900994 --> Output Class Initialized
INFO - 2019-01-27 08:09:42 903532 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:42 904823 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:42 904906 --> Input Class Initialized
INFO - 2019-01-27 08:09:42 905297 --> Language Class Initialized
ERROR - 2019-01-27 08:09:42 905941 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-27 08:09:43 006155 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 006257 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 007596 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 007664 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 008378 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 010092 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 011542 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 012801 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 014164 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 014235 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 014585 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 015086 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-27 08:09:43 115623 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 115757 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 117022 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 117120 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 117988 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 119744 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 120990 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 121998 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 123294 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 123385 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 123944 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 124562 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 198035 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 198218 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 199778 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 199846 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 200694 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 203526 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 205341 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 207283 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 208966 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 209034 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 209353 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 210280 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 238631 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 238718 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 239912 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 239980 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 240650 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 242650 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 248872 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 250098 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 257685 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 257802 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 258265 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 259018 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 261039 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 261151 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 262876 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 262973 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 263977 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 266403 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 278924 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 279170 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 281004 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 281101 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 282331 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 283328 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 284811 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 286183 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 286278 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 286722 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 287447 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 290590 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 290824 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 292659 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 292756 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 293999 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 300265 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 302277 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 303791 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 305238 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 305339 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 305811 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 306582 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 312127 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 314219 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 318689 --> Security Class Initialized
INFO - 2019-01-27 08:09:43 324810 --> Config Class Initialized
DEBUG - 2019-01-27 08:09:43 325539 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 325637 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 326100 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 326873 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 334268 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 334374 --> Hooks Class Initialized
INFO - 2019-01-27 08:09:43 335464 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 337286 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 337383 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 338638 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 342350 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 345072 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 346594 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 348053 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 348149 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 348627 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 349364 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-27 08:09:43 350999 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 351116 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 352145 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 354687 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 356689 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 358140 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 359566 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 359663 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 360101 --> Language Class Initialized
ERROR - 2019-01-27 08:09:43 360826 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:09:43 604743 --> Config Class Initialized
INFO - 2019-01-27 08:09:43 604897 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:43 606971 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:43 607095 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:43 608334 --> URI Class Initialized
INFO - 2019-01-27 08:09:43 610889 --> Router Class Initialized
INFO - 2019-01-27 08:09:43 613394 --> Output Class Initialized
INFO - 2019-01-27 08:09:43 615298 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:43 617177 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:43 617305 --> Input Class Initialized
INFO - 2019-01-27 08:09:43 617896 --> Language Class Initialized
INFO - 2019-01-27 08:09:43 628030 --> Loader Class Initialized
INFO - 2019-01-27 08:09:43 629697 --> Helper loaded: url_helper
INFO - 2019-01-27 08:09:43 630573 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:39:43 640789 --> Database Driver Class Initialized
INFO - 2019-01-27 13:39:43 649092 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:39:43 650568 --> Controller Class Initialized
ERROR - 2019-01-27 13:39:43 651467 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:39:43 652316 --> Final output sent to browser
DEBUG - 2019-01-27 13:39:43 652443 --> Total execution time: 0.0494
INFO - 2019-01-27 08:09:44 662257 --> Config Class Initialized
INFO - 2019-01-27 08:09:44 662359 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:09:44 663963 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:09:44 664041 --> Utf8 Class Initialized
INFO - 2019-01-27 08:09:44 664830 --> URI Class Initialized
INFO - 2019-01-27 08:09:44 666747 --> Router Class Initialized
INFO - 2019-01-27 08:09:44 668181 --> Output Class Initialized
INFO - 2019-01-27 08:09:44 669348 --> Security Class Initialized
DEBUG - 2019-01-27 08:09:44 670408 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:09:44 670505 --> Input Class Initialized
INFO - 2019-01-27 08:09:44 670845 --> Language Class Initialized
ERROR - 2019-01-27 08:09:44 671387 --> 404 Page Not Found: Browse-sector-list/21
INFO - 2019-01-27 08:10:00 000936 --> Config Class Initialized
INFO - 2019-01-27 08:10:00 001240 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:00 003529 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:00 003648 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:00 005012 --> URI Class Initialized
DEBUG - 2019-01-27 08:10:00 007350 --> No URI present. Default controller set.
INFO - 2019-01-27 08:10:00 007491 --> Router Class Initialized
INFO - 2019-01-27 08:10:00 009907 --> Output Class Initialized
INFO - 2019-01-27 08:10:00 011734 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:00 013550 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:00 013665 --> Input Class Initialized
INFO - 2019-01-27 08:10:00 014220 --> Language Class Initialized
INFO - 2019-01-27 08:10:00 017822 --> Loader Class Initialized
INFO - 2019-01-27 08:10:00 019304 --> Helper loaded: url_helper
INFO - 2019-01-27 08:10:00 020101 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:40:00 029663 --> Database Driver Class Initialized
INFO - 2019-01-27 13:40:00 037137 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:40:00 038517 --> Controller Class Initialized
INFO - 2019-01-27 13:40:00 039190 --> Parser Class Initialized
INFO - 2019-01-27 13:40:00 040199 --> Helper loaded: html_helper
INFO - 2019-01-27 13:40:00 041331 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:40:00 044445 --> Model Class Initialized
DEBUG - 2019-01-27 13:40:00 057862 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:40:00 064527 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:40:00 065259 --> Model Class Initialized
DEBUG - 2019-01-27 13:40:00 065973 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:40:00 069730 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:40:00 071636 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:40:00 071798 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:40:00 075880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 077481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 086786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 088743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 091485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 091903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 092591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 093827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 096688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 097071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 097738 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:40:00 099131 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:40:00 099282 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:40:00 099483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 102096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 102499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 103143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 104053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 106909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 107311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 108004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 108915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 111619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 112023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 112720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 113605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 116326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 116729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 117419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 118309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 121103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 121512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 122205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 123089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 125916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 126312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 127032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 127914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 130767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 131158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 131881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 132771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 135641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 136034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 136785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 137675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 141299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 141830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 142926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 144196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 148443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 149076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 149931 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:40:00 151052 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:40:00 151302 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:40:00 151695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 155154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 155643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 157038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 158508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 163590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 164093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 164968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 166286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 169931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 170521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 171397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 172943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 178013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 178572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 180118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 203002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 205204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 205455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 205910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 206739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 207421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 208085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 208746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 209428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 210108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 210769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 211421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 212086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 212779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 213517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 214256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 214879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 215661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 216505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 217320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 217907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 218374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 218806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 219293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 219727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 220145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 220582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 221525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 221988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 222662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 223081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 223735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 224159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 224807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 225234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 226103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 226542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 227291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 227941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 229825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 230052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 230519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 231122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 232765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 233000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 233486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 234163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 235766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 235996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 236490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 237080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 238729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 238965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 239434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 239932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 241548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 241782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 242254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 242746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 244375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 244620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 245080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 246685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 246913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 247347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 247872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 249516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 249756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 250190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 250709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 252310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 252572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 253304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 253935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 255635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 255876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 256310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 256869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 258728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 258974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 259422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 259964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 261581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 261816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 262253 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:40:00 262789 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:40:00 264394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 265405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 265641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:40:00 267261 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:40:00 267669 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:40:00 275500 --> Final output sent to browser
DEBUG - 2019-01-27 13:40:00 275577 --> Total execution time: 0.2693
INFO - 2019-01-27 08:10:00 586560 --> Config Class Initialized
INFO - 2019-01-27 08:10:00 586692 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:00 588551 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:00 588663 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:00 589792 --> URI Class Initialized
INFO - 2019-01-27 08:10:00 593571 --> Router Class Initialized
INFO - 2019-01-27 08:10:00 595639 --> Output Class Initialized
INFO - 2019-01-27 08:10:00 597194 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:00 599070 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:00 599181 --> Input Class Initialized
INFO - 2019-01-27 08:10:00 599718 --> Language Class Initialized
ERROR - 2019-01-27 08:10:00 600532 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:00 787782 --> Config Class Initialized
INFO - 2019-01-27 08:10:00 787919 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:00 789766 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:00 789877 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:00 790985 --> URI Class Initialized
INFO - 2019-01-27 08:10:00 793772 --> Router Class Initialized
INFO - 2019-01-27 08:10:00 795803 --> Output Class Initialized
INFO - 2019-01-27 08:10:00 797363 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:00 798901 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:00 799011 --> Input Class Initialized
INFO - 2019-01-27 08:10:00 799505 --> Language Class Initialized
ERROR - 2019-01-27 08:10:00 800271 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:00 978956 --> Config Class Initialized
INFO - 2019-01-27 08:10:00 979110 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:00 981307 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:00 981457 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:00 982830 --> URI Class Initialized
INFO - 2019-01-27 08:10:00 986110 --> Router Class Initialized
INFO - 2019-01-27 08:10:00 992252 --> Config Class Initialized
INFO - 2019-01-27 08:10:00 993429 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:00 995528 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:00 995632 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:00 997055 --> URI Class Initialized
INFO - 2019-01-27 08:10:01 001264 --> Router Class Initialized
INFO - 2019-01-27 08:10:01 003449 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 005022 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 006511 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 006616 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 007066 --> Language Class Initialized
ERROR - 2019-01-27 08:10:01 007829 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:01 009382 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 011097 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 012825 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 012928 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 013437 --> Language Class Initialized
ERROR - 2019-01-27 08:10:01 014282 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:01 059115 --> Config Class Initialized
INFO - 2019-01-27 08:10:01 059346 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:01 061299 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:01 061419 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:01 063862 --> URI Class Initialized
INFO - 2019-01-27 08:10:01 070379 --> Router Class Initialized
INFO - 2019-01-27 08:10:01 072371 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 073678 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 074929 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 075014 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 075421 --> Language Class Initialized
ERROR - 2019-01-27 08:10:01 076100 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:01 091744 --> Config Class Initialized
INFO - 2019-01-27 08:10:01 091917 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:01 101263 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:01 101416 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:01 103347 --> URI Class Initialized
INFO - 2019-01-27 08:10:01 109715 --> Router Class Initialized
INFO - 2019-01-27 08:10:01 120018 --> Config Class Initialized
INFO - 2019-01-27 08:10:01 120301 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:01 125508 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:01 125624 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:01 126960 --> URI Class Initialized
INFO - 2019-01-27 08:10:01 131748 --> Router Class Initialized
INFO - 2019-01-27 08:10:01 133635 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 135325 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 136765 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 136871 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 137356 --> Language Class Initialized
ERROR - 2019-01-27 08:10:01 138761 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:01 141391 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 143857 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 146255 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 146450 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 146992 --> Language Class Initialized
ERROR - 2019-01-27 08:10:01 147838 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:10:01 175488 --> Config Class Initialized
INFO - 2019-01-27 08:10:01 175652 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:10:01 180562 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:10:01 180715 --> Utf8 Class Initialized
INFO - 2019-01-27 08:10:01 182842 --> URI Class Initialized
INFO - 2019-01-27 08:10:01 187870 --> Router Class Initialized
INFO - 2019-01-27 08:10:01 191354 --> Output Class Initialized
INFO - 2019-01-27 08:10:01 193672 --> Security Class Initialized
DEBUG - 2019-01-27 08:10:01 196736 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:10:01 196887 --> Input Class Initialized
INFO - 2019-01-27 08:10:01 197719 --> Language Class Initialized
INFO - 2019-01-27 08:10:01 210129 --> Loader Class Initialized
INFO - 2019-01-27 08:10:01 211843 --> Helper loaded: url_helper
INFO - 2019-01-27 08:10:01 223813 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:40:01 247097 --> Database Driver Class Initialized
INFO - 2019-01-27 13:40:01 270759 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:40:01 272162 --> Controller Class Initialized
ERROR - 2019-01-27 13:40:01 273006 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:40:01 273763 --> Final output sent to browser
DEBUG - 2019-01-27 13:40:01 273871 --> Total execution time: 0.1011
INFO - 2019-01-27 08:11:05 374754 --> Config Class Initialized
INFO - 2019-01-27 08:11:05 375046 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:05 376787 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:05 376876 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:05 378016 --> URI Class Initialized
INFO - 2019-01-27 08:11:05 382496 --> Router Class Initialized
INFO - 2019-01-27 08:11:05 385997 --> Output Class Initialized
INFO - 2019-01-27 08:11:05 388782 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:05 390908 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:05 391031 --> Input Class Initialized
INFO - 2019-01-27 08:11:05 391638 --> Language Class Initialized
INFO - 2019-01-27 08:11:05 461141 --> Loader Class Initialized
INFO - 2019-01-27 08:11:05 462924 --> Helper loaded: url_helper
INFO - 2019-01-27 08:11:05 463886 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:41:05 475297 --> Database Driver Class Initialized
INFO - 2019-01-27 13:41:05 484431 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:41:05 485241 --> Controller Class Initialized
INFO - 2019-01-27 13:41:05 485646 --> Parser Class Initialized
INFO - 2019-01-27 13:41:05 486222 --> Helper loaded: html_helper
DEBUG - 2019-01-27 13:41:05 486296 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-27 13:41:05 488058 --> Model Class Initialized
INFO - 2019-01-27 13:41:05 527002 --> Helper loaded: cookie_helper
INFO - 2019-01-27 13:41:05 527415 --> Model Class Initialized
DEBUG - 2019-01-27 13:41:05 528003 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:41:05 528702 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:41:05 540431 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:41:05 542484 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:41:05 542660 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:41:05 553525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 555773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 559005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 560039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 561021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 561918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 590670 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:41:05 591917 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-27 13:41:05 594640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 596558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 596965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:41:05 599987 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:41:05 601978 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:41:05 610634 --> Final output sent to browser
DEBUG - 2019-01-27 13:41:05 610706 --> Total execution time: 0.2298
INFO - 2019-01-27 08:11:05 815956 --> Config Class Initialized
INFO - 2019-01-27 08:11:05 816092 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:05 817960 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:05 818049 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:05 818749 --> URI Class Initialized
INFO - 2019-01-27 08:11:05 822577 --> Router Class Initialized
INFO - 2019-01-27 08:11:05 824784 --> Output Class Initialized
INFO - 2019-01-27 08:11:05 826358 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:05 827939 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:05 828037 --> Input Class Initialized
INFO - 2019-01-27 08:11:05 828516 --> Language Class Initialized
ERROR - 2019-01-27 08:11:05 829133 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:11:05 903151 --> Config Class Initialized
INFO - 2019-01-27 08:11:05 903347 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:05 904661 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:05 904730 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:05 905669 --> URI Class Initialized
INFO - 2019-01-27 08:11:05 908284 --> Router Class Initialized
INFO - 2019-01-27 08:11:05 909719 --> Output Class Initialized
INFO - 2019-01-27 08:11:05 914315 --> Config Class Initialized
INFO - 2019-01-27 08:11:05 914391 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:05 915543 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:05 915611 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:05 916269 --> URI Class Initialized
INFO - 2019-01-27 08:11:05 917890 --> Router Class Initialized
INFO - 2019-01-27 08:11:05 919128 --> Output Class Initialized
INFO - 2019-01-27 08:11:05 920447 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:05 921916 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:05 922005 --> Input Class Initialized
INFO - 2019-01-27 08:11:05 922440 --> Language Class Initialized
ERROR - 2019-01-27 08:11:05 923134 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:11:05 925509 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:05 927525 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:05 927593 --> Input Class Initialized
INFO - 2019-01-27 08:11:05 927915 --> Language Class Initialized
ERROR - 2019-01-27 08:11:05 928443 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:11:06 148072 --> Config Class Initialized
INFO - 2019-01-27 08:11:06 148190 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:06 150080 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:06 150201 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:06 151828 --> URI Class Initialized
INFO - 2019-01-27 08:11:06 155348 --> Router Class Initialized
INFO - 2019-01-27 08:11:06 158255 --> Output Class Initialized
INFO - 2019-01-27 08:11:06 160440 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:06 162585 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:06 162709 --> Input Class Initialized
INFO - 2019-01-27 08:11:06 163532 --> Language Class Initialized
INFO - 2019-01-27 08:11:06 169128 --> Loader Class Initialized
INFO - 2019-01-27 08:11:06 170320 --> Helper loaded: url_helper
INFO - 2019-01-27 08:11:06 171425 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:41:06 178529 --> Database Driver Class Initialized
INFO - 2019-01-27 13:41:06 206134 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:41:06 207519 --> Controller Class Initialized
ERROR - 2019-01-27 13:41:06 208188 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:41:06 208895 --> Final output sent to browser
DEBUG - 2019-01-27 13:41:06 209023 --> Total execution time: 0.0622
INFO - 2019-01-27 08:11:09 376029 --> Config Class Initialized
INFO - 2019-01-27 08:11:09 376127 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:11:09 377906 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:11:09 377984 --> Utf8 Class Initialized
INFO - 2019-01-27 08:11:09 378726 --> URI Class Initialized
INFO - 2019-01-27 08:11:09 380564 --> Router Class Initialized
INFO - 2019-01-27 08:11:09 382004 --> Output Class Initialized
INFO - 2019-01-27 08:11:09 383125 --> Security Class Initialized
DEBUG - 2019-01-27 08:11:09 384762 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:11:09 384852 --> Input Class Initialized
INFO - 2019-01-27 08:11:09 385185 --> Language Class Initialized
ERROR - 2019-01-27 08:11:09 385731 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:12:01 530324 --> Config Class Initialized
INFO - 2019-01-27 08:12:01 530590 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:01 532193 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:01 532274 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:01 533308 --> URI Class Initialized
INFO - 2019-01-27 08:12:01 536747 --> Router Class Initialized
INFO - 2019-01-27 08:12:01 538623 --> Output Class Initialized
INFO - 2019-01-27 08:12:01 539870 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:01 541140 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:01 541218 --> Input Class Initialized
INFO - 2019-01-27 08:12:01 541596 --> Language Class Initialized
INFO - 2019-01-27 08:12:01 553205 --> Loader Class Initialized
INFO - 2019-01-27 08:12:01 554785 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:01 555438 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:01 561852 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:01 567744 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:01 568618 --> Controller Class Initialized
INFO - 2019-01-27 13:42:01 582408 --> Model Class Initialized
INFO - 2019-01-27 13:42:01 585495 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:01 585575 --> Total execution time: 0.0568
INFO - 2019-01-27 08:12:01 682545 --> Config Class Initialized
INFO - 2019-01-27 08:12:01 682696 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:01 684676 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:01 684799 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:01 685492 --> URI Class Initialized
INFO - 2019-01-27 08:12:01 687525 --> Router Class Initialized
INFO - 2019-01-27 08:12:01 690752 --> Output Class Initialized
INFO - 2019-01-27 08:12:01 693059 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:01 694829 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:01 694963 --> Input Class Initialized
INFO - 2019-01-27 08:12:01 695630 --> Language Class Initialized
INFO - 2019-01-27 08:12:01 697964 --> Loader Class Initialized
INFO - 2019-01-27 08:12:01 699110 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:01 699950 --> Helper loaded: utility_helper
INFO - 2019-01-27 08:12:01 711429 --> Config Class Initialized
INFO - 2019-01-27 08:12:01 711739 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:01 715368 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:01 715517 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:01 717052 --> URI Class Initialized
INFO - 2019-01-27 08:12:01 719182 --> Router Class Initialized
INFO - 2019-01-27 08:12:01 721049 --> Output Class Initialized
INFO - 2019-01-27 13:42:01 727052 --> Database Driver Class Initialized
INFO - 2019-01-27 08:12:01 729280 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:01 731492 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:01 731604 --> Input Class Initialized
INFO - 2019-01-27 08:12:01 732167 --> Language Class Initialized
INFO - 2019-01-27 08:12:01 735841 --> Loader Class Initialized
INFO - 2019-01-27 08:12:01 737384 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:01 738149 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:01 748522 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:01 805093 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:01 807141 --> Controller Class Initialized
INFO - 2019-01-27 13:42:01 808053 --> Parser Class Initialized
INFO - 2019-01-27 13:42:01 809257 --> Helper loaded: html_helper
DEBUG - 2019-01-27 13:42:01 809420 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-27 13:42:01 813323 --> Model Class Initialized
INFO - 2019-01-27 13:42:01 830957 --> Helper loaded: cookie_helper
INFO - 2019-01-27 13:42:01 831886 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:01 832859 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:42:01 834414 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:42:01 837846 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:42:01 840142 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:42:01 840315 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:42:01 853241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 855351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 858730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 859589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 860318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 861025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 862714 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:01 865104 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-27 13:42:01 867814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 870182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 870867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 875204 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:01 877640 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:42:01 886311 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:01 886476 --> Total execution time: 0.1971
INFO - 2019-01-27 13:42:01 886890 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:01 888617 --> Controller Class Initialized
INFO - 2019-01-27 13:42:01 889430 --> Parser Class Initialized
INFO - 2019-01-27 13:42:01 890656 --> Helper loaded: html_helper
DEBUG - 2019-01-27 13:42:01 890804 --> Controller:::::::::::::::: user_business_profile
INFO - 2019-01-27 13:42:01 899374 --> Model Class Initialized
INFO - 2019-01-27 13:42:01 910600 --> Helper loaded: cookie_helper
INFO - 2019-01-27 13:42:01 913638 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:01 914599 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:42:01 915929 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:42:01 920727 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:42:01 922997 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:42:01 923172 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:42:01 926294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 926804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:01 931199 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:01 932107 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:42:01 940793 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:01 940962 --> Total execution time: 0.2236
INFO - 2019-01-27 08:12:02 194060 --> Config Class Initialized
INFO - 2019-01-27 08:12:02 194189 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:02 196155 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:02 196254 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:02 197432 --> URI Class Initialized
INFO - 2019-01-27 08:12:02 210771 --> Config Class Initialized
INFO - 2019-01-27 08:12:02 211020 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:02 213181 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:02 213280 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:02 214499 --> URI Class Initialized
INFO - 2019-01-27 08:12:02 216540 --> Router Class Initialized
INFO - 2019-01-27 08:12:02 218955 --> Output Class Initialized
INFO - 2019-01-27 08:12:02 220822 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:02 222522 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:02 222619 --> Input Class Initialized
INFO - 2019-01-27 08:12:02 223165 --> Language Class Initialized
ERROR - 2019-01-27 08:12:02 224034 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:12:02 228509 --> Router Class Initialized
INFO - 2019-01-27 08:12:02 231057 --> Output Class Initialized
INFO - 2019-01-27 08:12:02 232903 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:02 234744 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:02 234841 --> Input Class Initialized
INFO - 2019-01-27 08:12:02 235373 --> Language Class Initialized
ERROR - 2019-01-27 08:12:02 236283 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:12:02 279644 --> Config Class Initialized
INFO - 2019-01-27 08:12:02 279773 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:02 281877 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:02 281980 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:02 283318 --> URI Class Initialized
INFO - 2019-01-27 08:12:02 287326 --> Router Class Initialized
INFO - 2019-01-27 08:12:02 289716 --> Output Class Initialized
INFO - 2019-01-27 08:12:02 290841 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:02 291914 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:02 291995 --> Input Class Initialized
INFO - 2019-01-27 08:12:02 292342 --> Language Class Initialized
ERROR - 2019-01-27 08:12:02 292922 --> 404 Page Not Found: Browse-sector-listing-details/125
INFO - 2019-01-27 08:12:02 342811 --> Config Class Initialized
INFO - 2019-01-27 08:12:02 342899 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:02 343992 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:02 344059 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:02 344764 --> URI Class Initialized
INFO - 2019-01-27 08:12:02 345973 --> Router Class Initialized
INFO - 2019-01-27 08:12:02 347213 --> Output Class Initialized
INFO - 2019-01-27 08:12:02 348170 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:02 349103 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:02 349170 --> Input Class Initialized
INFO - 2019-01-27 08:12:02 349498 --> Language Class Initialized
INFO - 2019-01-27 08:12:02 353106 --> Loader Class Initialized
INFO - 2019-01-27 08:12:02 353890 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:02 354289 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:02 358944 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:02 361768 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:02 362513 --> Controller Class Initialized
ERROR - 2019-01-27 13:42:02 363028 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:42:02 363403 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:02 363476 --> Total execution time: 0.0216
INFO - 2019-01-27 08:12:15 813926 --> Config Class Initialized
INFO - 2019-01-27 08:12:15 814415 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:15 818408 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:15 818624 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:15 821190 --> URI Class Initialized
INFO - 2019-01-27 08:12:15 827366 --> Router Class Initialized
INFO - 2019-01-27 08:12:15 831773 --> Output Class Initialized
INFO - 2019-01-27 08:12:15 835093 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:15 838181 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:15 838327 --> Input Class Initialized
INFO - 2019-01-27 08:12:15 838958 --> Language Class Initialized
INFO - 2019-01-27 08:12:15 842689 --> Loader Class Initialized
INFO - 2019-01-27 08:12:15 844340 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:15 845205 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:15 857738 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:15 865540 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:15 867208 --> Controller Class Initialized
INFO - 2019-01-27 13:42:15 868022 --> Parser Class Initialized
INFO - 2019-01-27 13:42:15 869069 --> Helper loaded: html_helper
DEBUG - 2019-01-27 13:42:15 869210 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-27 13:42:15 872725 --> Model Class Initialized
INFO - 2019-01-27 13:42:15 879635 --> Helper loaded: cookie_helper
INFO - 2019-01-27 13:42:15 880322 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:15 880927 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:42:15 882323 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:42:15 885158 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:42:15 887216 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:42:15 887386 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:42:15 897095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 898670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 901467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 902194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 902919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 903608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 905344 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:15 907279 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-27 13:42:15 911186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 915076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 915699 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:15 919733 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:15 921658 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:42:15 930006 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:15 930135 --> Total execution time: 0.1121
INFO - 2019-01-27 08:12:29 929583 --> Config Class Initialized
INFO - 2019-01-27 08:12:29 929826 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:29 931581 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:29 931673 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:29 932770 --> URI Class Initialized
DEBUG - 2019-01-27 08:12:29 934624 --> No URI present. Default controller set.
INFO - 2019-01-27 08:12:29 934721 --> Router Class Initialized
INFO - 2019-01-27 08:12:29 936619 --> Output Class Initialized
INFO - 2019-01-27 08:12:29 938055 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:29 939552 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:29 939642 --> Input Class Initialized
INFO - 2019-01-27 08:12:29 940078 --> Language Class Initialized
INFO - 2019-01-27 08:12:29 943002 --> Loader Class Initialized
INFO - 2019-01-27 08:12:29 944236 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:29 944880 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:29 952409 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:29 958915 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:29 960019 --> Controller Class Initialized
INFO - 2019-01-27 13:42:29 960560 --> Parser Class Initialized
INFO - 2019-01-27 13:42:29 961342 --> Helper loaded: html_helper
INFO - 2019-01-27 13:42:29 962284 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:42:29 964715 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:29 977695 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:42:29 983870 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:42:29 984491 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:29 985173 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:42:29 987663 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:42:29 989145 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:42:29 989269 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:42:29 992746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:29 994380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 002641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 004579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 006683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 006992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 007520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 008431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 010420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 010719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 011595 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:42:30 013108 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:42:30 013228 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:42:30 013375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 015474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 015949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 016801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 018263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 020780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 021087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 021768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 022815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 025296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 025638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 026197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 026869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 029851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 030354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 031260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 032071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 035104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 035609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 036545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 037374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 040914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 041232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 041841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 042578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 045841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 046158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 046734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 047457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 049664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 049973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 050869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 051574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 053839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 054150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 054748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 055450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 057662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 058202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 059243 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:42:30 059921 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:42:30 060035 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:42:30 060184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 063280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 063654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 064248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 064959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 067164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 067523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 068116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 117669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 120345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 120677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 121267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 122034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 124243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 124604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 125341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 126060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 128321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 128653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 129245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 129930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 130585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 131220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 131870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 132514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 133575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 134227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 135006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 135652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 136280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 136910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 137553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 138174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 138803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 139648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 140280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 141274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 141946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 142705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 143629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 144454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 145302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 146065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 146910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 147782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 148631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 149378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 150162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 150799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 151488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 152098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 152805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 153475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 154200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 154889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 157418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 157752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 158375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 159161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 162200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 162842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 163733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 164494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 167119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 167459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 168901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 170224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 173372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 173723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 174359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 175091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 177365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 177710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 178534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 179680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 182962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 183419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 184325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 187908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 188349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 189238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 190277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 193671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 194170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 195029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 195991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 199137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 199600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 200433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 201385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 209527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 210557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 211978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 213200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 218225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 218679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 219624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 220733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 223506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 223898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 224647 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:30 225591 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:42:30 228213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 230443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 230844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:30 236499 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:30 238195 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:42:30 247114 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:30 247227 --> Total execution time: 0.3113
INFO - 2019-01-27 08:12:30 512507 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 512598 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 513748 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 513816 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 514503 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 516741 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 517963 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 518904 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:30 519865 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 519932 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 520247 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 520750 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:30 765402 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 765738 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 768177 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 768306 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 769931 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 774740 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 777354 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 779342 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:30 781264 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 781388 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 782004 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 782993 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:30 850569 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 850719 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 852623 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 852737 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 853905 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 856587 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 881638 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 883308 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:30 884855 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 884973 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 896183 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 896467 --> Hooks Class Initialized
INFO - 2019-01-27 08:12:30 900403 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 900675 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 902755 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 902863 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 903484 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 904284 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:30 907773 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 908058 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 910221 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 910331 --> Utf8 Class Initialized
DEBUG - 2019-01-27 08:12:30 916668 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 916872 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 919361 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 923703 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 928828 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 929954 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 941431 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 941725 --> Hooks Class Initialized
INFO - 2019-01-27 08:12:30 944865 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 947743 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 950129 --> Output Class Initialized
DEBUG - 2019-01-27 08:12:30 951929 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 952042 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 954087 --> Config Class Initialized
INFO - 2019-01-27 08:12:30 954207 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:30 956000 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:30 956109 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:30 957217 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 959573 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 961292 --> Security Class Initialized
INFO - 2019-01-27 08:12:30 962503 --> URI Class Initialized
INFO - 2019-01-27 08:12:30 966236 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 967992 --> Security Class Initialized
INFO - 2019-01-27 08:12:30 970968 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:30 972687 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 972799 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 973324 --> Language Class Initialized
DEBUG - 2019-01-27 08:12:30 975016 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 975127 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 975672 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 976545 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:30 979505 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 981686 --> Output Class Initialized
INFO - 2019-01-27 08:12:30 983812 --> Router Class Initialized
INFO - 2019-01-27 08:12:30 986126 --> Output Class Initialized
DEBUG - 2019-01-27 08:12:30 986702 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 986813 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 987361 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 988306 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-27 08:12:30 990961 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:30 995168 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:30 996891 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:30 997001 --> Input Class Initialized
INFO - 2019-01-27 08:12:30 997545 --> Language Class Initialized
ERROR - 2019-01-27 08:12:30 998390 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:12:31 001360 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:31 003074 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:31 003186 --> Input Class Initialized
INFO - 2019-01-27 08:12:31 003711 --> Language Class Initialized
INFO - 2019-01-27 08:12:31 010503 --> Loader Class Initialized
INFO - 2019-01-27 08:12:31 011920 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:31 012681 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:31 023741 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:31 034188 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:31 035732 --> Controller Class Initialized
ERROR - 2019-01-27 13:42:31 036952 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:42:31 037849 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:31 037993 --> Total execution time: 0.0994
INFO - 2019-01-27 08:12:42 513376 --> Config Class Initialized
INFO - 2019-01-27 08:12:42 513567 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:42 515125 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:42 515221 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:42 516639 --> URI Class Initialized
INFO - 2019-01-27 08:12:42 521033 --> Router Class Initialized
INFO - 2019-01-27 08:12:42 523566 --> Output Class Initialized
INFO - 2019-01-27 08:12:42 525290 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:42 526984 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:42 527085 --> Input Class Initialized
INFO - 2019-01-27 08:12:42 527594 --> Language Class Initialized
INFO - 2019-01-27 08:12:42 545541 --> Loader Class Initialized
INFO - 2019-01-27 08:12:42 548207 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:42 549657 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:42 555676 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:42 560867 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:42 561651 --> Controller Class Initialized
ERROR - 2019-01-27 13:42:42 562079 --> Severity: Warning --> Missing argument 1 for Buyer::browseBuyerListing() /home/hzswn06npic1/public_html/bdeals/application/controllers/Buyer.php 285
INFO - 2019-01-27 13:42:42 562463 --> Parser Class Initialized
INFO - 2019-01-27 13:42:42 563030 --> Helper loaded: html_helper
INFO - 2019-01-27 13:42:42 565154 --> Model Class Initialized
INFO - 2019-01-27 13:42:42 724075 --> Model Class Initialized
DEBUG - 2019-01-27 13:42:42 724931 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:42:42 726386 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:42:42 741231 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-buyer-listing.php
ERROR - 2019-01-27 13:42:42 745971 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:42:42 747329 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:42:42 747464 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:42:42 821796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:42 823853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:42:42 834964 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:42:42 837367 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:42:42 845596 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:42 845733 --> Total execution time: 0.3258
INFO - 2019-01-27 08:12:43 722585 --> Config Class Initialized
INFO - 2019-01-27 08:12:43 722697 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:12:43 724153 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:12:43 724239 --> Utf8 Class Initialized
INFO - 2019-01-27 08:12:43 725236 --> URI Class Initialized
INFO - 2019-01-27 08:12:43 726903 --> Router Class Initialized
INFO - 2019-01-27 08:12:43 728625 --> Output Class Initialized
INFO - 2019-01-27 08:12:43 729887 --> Security Class Initialized
DEBUG - 2019-01-27 08:12:43 731157 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:12:43 731242 --> Input Class Initialized
INFO - 2019-01-27 08:12:43 731695 --> Language Class Initialized
INFO - 2019-01-27 08:12:43 736988 --> Loader Class Initialized
INFO - 2019-01-27 08:12:43 738029 --> Helper loaded: url_helper
INFO - 2019-01-27 08:12:43 738584 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:42:43 745820 --> Database Driver Class Initialized
INFO - 2019-01-27 13:42:43 749681 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:42:43 750716 --> Controller Class Initialized
ERROR - 2019-01-27 13:42:43 751341 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:42:43 751913 --> Final output sent to browser
DEBUG - 2019-01-27 13:42:43 751992 --> Total execution time: 0.0306
INFO - 2019-01-27 08:13:14 022020 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 022337 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 024621 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 024744 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 026140 --> URI Class Initialized
DEBUG - 2019-01-27 08:13:14 028475 --> No URI present. Default controller set.
INFO - 2019-01-27 08:13:14 028599 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 031033 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 032882 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 034722 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 034866 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 035442 --> Language Class Initialized
INFO - 2019-01-27 08:13:14 039052 --> Loader Class Initialized
INFO - 2019-01-27 08:13:14 040545 --> Helper loaded: url_helper
INFO - 2019-01-27 08:13:14 041336 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:43:14 050940 --> Database Driver Class Initialized
INFO - 2019-01-27 13:43:14 058803 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:43:14 060175 --> Controller Class Initialized
INFO - 2019-01-27 13:43:14 060874 --> Parser Class Initialized
INFO - 2019-01-27 13:43:14 061892 --> Helper loaded: html_helper
INFO - 2019-01-27 13:43:14 063097 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:43:14 066174 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:14 080058 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:43:14 090359 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:43:14 091084 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:14 091835 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:43:14 095047 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:43:14 096971 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:43:14 097136 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:43:14 101315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 103328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 114221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 116559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 119560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 120017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 120812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 121838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 124768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 125195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 125930 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:14 127578 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:43:14 127751 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:43:14 127964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 131016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 131625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 132354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 133378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 136476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 136924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 137707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 138715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 141721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 142193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 142962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 143975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 147043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 147494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 148277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 149269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 152432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 152884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 153666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 154696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 157869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 158312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 159116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 160101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 163280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 163739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 164566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 165649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 168961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 169404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 170227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 171247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 174516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 174966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 175852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 176862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 180665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 181114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 182010 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:14 184575 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:43:14 184739 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:43:14 184962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 189546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 190012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 190879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 191898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 195179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 195662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 196559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 197590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 200826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 201273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 202126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 203151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 207129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 207982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 209590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 210984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 218595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 219060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 220108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 221014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 222445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 223701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 225214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 226164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 227117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 228039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 228980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 229912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 230834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 232186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 233323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 234251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 235331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 236186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 237124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 238686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 239653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 240489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 242861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 244431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 245709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 246613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 247826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 249327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 250423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 251801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 252826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 253931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 254739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 255600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 256335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 257168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 257930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 259186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 262660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 263102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 264024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 303653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 308999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 309497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 310398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 311379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 314584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 315033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 315948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 316780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 319997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 320470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 321358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 322313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 326005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 326524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 327562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 328692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 332222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 332731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 333825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 337361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 337866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 338855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 340048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 344115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 344656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 345531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 346554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 350358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 350876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 351830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 352901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 356157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 356678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 357557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 358546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 361821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 362277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 363200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 364183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 367403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 367882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 368756 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:43:14 369776 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:43:14 374067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 377094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 377654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:14 381261 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:43:14 382175 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:43:14 391345 --> Final output sent to browser
DEBUG - 2019-01-27 13:43:14 391509 --> Total execution time: 0.3632
INFO - 2019-01-27 08:13:14 687742 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 687911 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 690130 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 690262 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 691607 --> URI Class Initialized
INFO - 2019-01-27 08:13:14 696137 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 699074 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 700958 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 702856 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 702986 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 703584 --> Language Class Initialized
ERROR - 2019-01-27 08:13:14 704521 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:14 745858 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 746012 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 748132 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 748264 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 749562 --> URI Class Initialized
INFO - 2019-01-27 08:13:14 752681 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 755021 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 756853 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 758610 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 758740 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 759298 --> Language Class Initialized
ERROR - 2019-01-27 08:13:14 760202 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:14 866043 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 866203 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 868330 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 868480 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 869774 --> URI Class Initialized
INFO - 2019-01-27 08:13:14 872903 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 875235 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 877072 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 878829 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 878958 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 879534 --> Language Class Initialized
ERROR - 2019-01-27 08:13:14 880434 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:14 912005 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 912230 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 915297 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 915424 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 916495 --> URI Class Initialized
INFO - 2019-01-27 08:13:14 919637 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 921796 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 923386 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 924849 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 924958 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 925427 --> Language Class Initialized
ERROR - 2019-01-27 08:13:14 926506 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:14 960501 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 960932 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:14 964725 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:14 964904 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:14 967453 --> URI Class Initialized
INFO - 2019-01-27 08:13:14 975260 --> Router Class Initialized
INFO - 2019-01-27 08:13:14 985035 --> Output Class Initialized
INFO - 2019-01-27 08:13:14 986876 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:14 988425 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:14 988534 --> Input Class Initialized
INFO - 2019-01-27 08:13:14 989008 --> Language Class Initialized
ERROR - 2019-01-27 08:13:14 989810 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:14 999181 --> Config Class Initialized
INFO - 2019-01-27 08:13:14 999391 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:15 003320 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:15 003530 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:15 006032 --> URI Class Initialized
INFO - 2019-01-27 08:13:15 011749 --> Router Class Initialized
INFO - 2019-01-27 08:13:15 016014 --> Output Class Initialized
INFO - 2019-01-27 08:13:15 019367 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:15 022480 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:15 022664 --> Input Class Initialized
INFO - 2019-01-27 08:13:15 023560 --> Language Class Initialized
ERROR - 2019-01-27 08:13:15 024997 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:15 050107 --> Config Class Initialized
INFO - 2019-01-27 08:13:15 050446 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:15 052901 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:15 053031 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:15 054703 --> URI Class Initialized
INFO - 2019-01-27 08:13:15 062278 --> Config Class Initialized
INFO - 2019-01-27 08:13:15 062623 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:15 066107 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:15 066240 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:15 067893 --> URI Class Initialized
INFO - 2019-01-27 08:13:15 072741 --> Router Class Initialized
INFO - 2019-01-27 08:13:15 075439 --> Output Class Initialized
INFO - 2019-01-27 08:13:15 077466 --> Security Class Initialized
INFO - 2019-01-27 08:13:15 080939 --> Router Class Initialized
DEBUG - 2019-01-27 08:13:15 084309 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:15 084450 --> Input Class Initialized
INFO - 2019-01-27 08:13:15 084886 --> Language Class Initialized
ERROR - 2019-01-27 08:13:15 085594 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:13:15 087519 --> Output Class Initialized
INFO - 2019-01-27 08:13:15 088937 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:15 090234 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:15 090321 --> Input Class Initialized
INFO - 2019-01-27 08:13:15 090744 --> Language Class Initialized
INFO - 2019-01-27 08:13:15 095963 --> Loader Class Initialized
INFO - 2019-01-27 08:13:15 097048 --> Helper loaded: url_helper
INFO - 2019-01-27 08:13:15 097661 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:43:15 107690 --> Database Driver Class Initialized
INFO - 2019-01-27 13:43:15 113337 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:43:15 114356 --> Controller Class Initialized
ERROR - 2019-01-27 13:43:15 114994 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:43:15 115642 --> Final output sent to browser
DEBUG - 2019-01-27 13:43:15 115725 --> Total execution time: 0.0569
INFO - 2019-01-27 08:13:56 164843 --> Config Class Initialized
INFO - 2019-01-27 08:13:56 165105 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:56 167020 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:56 167115 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:56 168107 --> URI Class Initialized
INFO - 2019-01-27 08:13:56 170957 --> Router Class Initialized
INFO - 2019-01-27 08:13:56 173456 --> Output Class Initialized
INFO - 2019-01-27 08:13:56 175156 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:56 176250 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:56 176325 --> Input Class Initialized
INFO - 2019-01-27 08:13:56 176672 --> Language Class Initialized
INFO - 2019-01-27 08:13:56 185405 --> Loader Class Initialized
INFO - 2019-01-27 08:13:56 187252 --> Helper loaded: url_helper
INFO - 2019-01-27 08:13:56 188282 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:43:56 196916 --> Database Driver Class Initialized
INFO - 2019-01-27 13:43:56 201950 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:43:56 202770 --> Controller Class Initialized
INFO - 2019-01-27 13:43:56 203167 --> Parser Class Initialized
INFO - 2019-01-27 13:43:56 203771 --> Helper loaded: html_helper
INFO - 2019-01-27 13:43:56 214685 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:56 218118 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'unnatinanda18@gmail.com']
INFO - 2019-01-27 13:43:56 224867 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:56 226963 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'unnatinanda18@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
INFO - 2019-01-27 13:43:56 235445 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:56 239389 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `key_headline`, `contact`, `business_type`, `listing_category`, `num_business_viewed`, `add_to_favorite`, `business_add_date`
FROM `bd_business_details`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
DEBUG - 2019-01-27 13:43:56 244857 --> Last query [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`name`, `bd_business_details`.`status`, `bd_package`.`name` as `packagename`, `bd_buy_business_details`.`industry_preference`, `key_headline`, `contact`, `business_type`, `listing_category`, `buy_invest_in`, `num_business_viewed`, `added_date`, `key_requirement`
FROM `bd_business_details`
LEFT JOIN `bd_buy_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
LEFT JOIN `bd_customer_package` ON `bd_business_details`.`form_id` = `bd_customer_package`.`form_id`
LEFT JOIN `bd_package` ON `bd_customer_package`.`package_id` = `bd_package`.`id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
ORDER BY `bd_business_details`.`form_id` DESC]
INFO - 2019-01-27 13:43:56 250978 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:56 253946 --> Last query to getBuyContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-27 13:43:56 255383 --> Last query to getAllContactCount  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-27 13:43:56 256941 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business']
DEBUG - 2019-01-27 13:43:56 258383 --> Last query to getAllViewedCount  [SELECT SUM(`num_business_viewed`) AS `num_business_viewed`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` != 'buy_a_business']
DEBUG - 2019-01-27 13:43:56 262953 --> Last query to getContact33333  [SELECT *
FROM `bd_property_view_user`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_view_user`.`viewed_form_id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `viewed_user_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-27 13:43:56 265569 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `like_user_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-27 13:43:56 268872 --> Last query to getFhhhhhavCou88888ntAll  [SELECT COUNT(*) AS `numrows`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-27 13:43:56 270251 --> Last query to getContact33333  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `customer_id` = 'unnatinanda18@gmail.com']
DEBUG - 2019-01-27 13:43:56 271791 --> Last query to getFavCountBuy  [SELECT COUNT(*) AS `numrows`
FROM `bd_business_details`
WHERE `bd_business_details`.`customer_id` = 'unnatinanda18@gmail.com'
AND `business_type` = 'buy_a_business'
AND `add_to_favorite` = '1']
INFO - 2019-01-27 13:43:56 276499 --> Model Class Initialized
DEBUG - 2019-01-27 13:43:56 282174 --> listing_model: RecommendedBusinessList: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
LEFT JOIN `bd_customer_details` ON `bd_customer_details`.`customer_id` = `bd_business_details`.`customer_id`
WHERE `listing_category` = '']
DEBUG - 2019-01-27 13:43:56 288693 --> listing_model: RecommendedBusinessList111: [SELECT *
FROM `bd_business_details`
LEFT JOIN `bd_sector_list` ON `bd_business_details`.`listing_category` = `bd_sector_list`.`id`
WHERE `listing_category` = '']
DEBUG - 2019-01-27 13:43:56 290946 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '315']
DEBUG - 2019-01-27 13:43:56 292987 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '315']
DEBUG - 2019-01-27 13:43:56 295144 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '314']
DEBUG - 2019-01-27 13:43:56 297158 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '314']
DEBUG - 2019-01-27 13:43:56 299463 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '313']
DEBUG - 2019-01-27 13:43:56 301536 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '313']
DEBUG - 2019-01-27 13:43:56 307527 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '312']
DEBUG - 2019-01-27 13:43:56 314513 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '312']
DEBUG - 2019-01-27 13:43:56 316802 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '311']
DEBUG - 2019-01-27 13:43:56 346286 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '311']
DEBUG - 2019-01-27 13:43:56 348220 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '270']
DEBUG - 2019-01-27 13:43:56 349443 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '270']
DEBUG - 2019-01-27 13:43:56 351226 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '269']
DEBUG - 2019-01-27 13:43:56 352794 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '269']
DEBUG - 2019-01-27 13:43:56 354397 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '268']
DEBUG - 2019-01-27 13:43:56 355911 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '268']
DEBUG - 2019-01-27 13:43:56 357486 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '267']
DEBUG - 2019-01-27 13:43:56 359045 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '267']
DEBUG - 2019-01-27 13:43:56 360707 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '266']
DEBUG - 2019-01-27 13:43:56 362251 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '266']
DEBUG - 2019-01-27 13:43:56 363905 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '265']
DEBUG - 2019-01-27 13:43:56 365483 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '265']
DEBUG - 2019-01-27 13:43:56 367151 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '225']
DEBUG - 2019-01-27 13:43:56 368736 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '225']
DEBUG - 2019-01-27 13:43:56 370383 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '224']
DEBUG - 2019-01-27 13:43:56 371951 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '224']
DEBUG - 2019-01-27 13:43:56 373538 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '223']
DEBUG - 2019-01-27 13:43:56 375000 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '223']
DEBUG - 2019-01-27 13:43:56 376617 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '221']
DEBUG - 2019-01-27 13:43:56 378165 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '221']
DEBUG - 2019-01-27 13:43:56 379888 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '219']
DEBUG - 2019-01-27 13:43:56 381462 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '219']
DEBUG - 2019-01-27 13:43:56 383058 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '218']
DEBUG - 2019-01-27 13:43:56 384593 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '218']
DEBUG - 2019-01-27 13:43:56 386179 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '212']
DEBUG - 2019-01-27 13:43:56 387676 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '212']
DEBUG - 2019-01-27 13:43:56 389281 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '196']
DEBUG - 2019-01-27 13:43:56 390782 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '196']
DEBUG - 2019-01-27 13:43:56 392344 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '195']
DEBUG - 2019-01-27 13:43:56 393840 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '195']
DEBUG - 2019-01-27 13:43:56 395406 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '194']
DEBUG - 2019-01-27 13:43:56 396879 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '194']
DEBUG - 2019-01-27 13:43:56 398427 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '193']
DEBUG - 2019-01-27 13:43:56 399923 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '193']
DEBUG - 2019-01-27 13:43:56 401479 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '192']
DEBUG - 2019-01-27 13:43:56 403028 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '192']
DEBUG - 2019-01-27 13:43:56 405824 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '191']
DEBUG - 2019-01-27 13:43:56 408334 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '191']
DEBUG - 2019-01-27 13:43:56 410835 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '187']
DEBUG - 2019-01-27 13:43:56 421041 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '187']
DEBUG - 2019-01-27 13:43:56 424002 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '186']
DEBUG - 2019-01-27 13:43:56 426100 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '186']
DEBUG - 2019-01-27 13:43:56 428270 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '185']
DEBUG - 2019-01-27 13:43:56 430494 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '185']
DEBUG - 2019-01-27 13:43:56 432755 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '180']
DEBUG - 2019-01-27 13:43:56 434875 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '180']
DEBUG - 2019-01-27 13:43:56 437089 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '179']
DEBUG - 2019-01-27 13:43:56 439119 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '179']
DEBUG - 2019-01-27 13:43:56 441359 --> Last query to getContact  [SELECT `bd_listing_contacts`.`name`, `bd_listing_contacts`.`email`, `bd_listing_contacts`.`mobile`, `bd_listing_contacts`.`message`, `bd_listing_contacts`.`contact_to`, `bd_business_details`.`form_id`, `bd_business_details`.`business_type`, `bd_business_details`.`key_headline`
FROM `bd_listing_contacts`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_listing_contacts`.`form_id`
WHERE `bd_listing_contacts`.`form_id` = '178']
DEBUG - 2019-01-27 13:43:56 443485 --> Last query to getContact33333  [SELECT *
FROM `bd_property_favorite`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_property_favorite`.`property_form_id`
WHERE `property_form_id` = '178']
INFO - 2019-01-27 13:43:56 444869 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:43:56 458666 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:43:56 461071 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:43:56 461224 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:43:56 462502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 463413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 464278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 465133 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 468224 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 290
DEBUG - 2019-01-27 13:43:56 468591 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 469762 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 469918 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 470107 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 471013 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 471329 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 471529 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 472476 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 472655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 472829 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 473896 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 474044 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 474214 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 475162 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 475311 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 475503 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 476414 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 476572 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 476756 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 477665 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 477813 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 477982 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 478945 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 479090 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 479345 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 480334 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 480503 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 480674 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 481583 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 481740 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 481910 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 482948 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 483093 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 483263 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 484196 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 484342 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 484559 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 485486 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 485634 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 485805 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 486715 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 486861 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 487025 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 488234 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 488380 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 488576 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 489507 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 489655 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 489826 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 490804 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 490956 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 491127 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 492209 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 492358 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 492563 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 493782 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 493944 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 494115 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 495059 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 495204 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 495378 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 496416 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 496572 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 496748 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 497654 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 497798 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 497972 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 498902 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 499047 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 499217 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 500145 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 500296 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
DEBUG - 2019-01-27 13:43:56 500487 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:43:56 501393 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 564
ERROR - 2019-01-27 13:43:56 501559 --> Severity: Warning --> Invalid argument supplied for foreach() /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 633
ERROR - 2019-01-27 13:43:56 501838 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 710
ERROR - 2019-01-27 13:43:56 501972 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php 710
INFO - 2019-01-27 13:43:56 502088 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-business-profile.php
DEBUG - 2019-01-27 13:43:56 505867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 511343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 515434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:43:56 532867 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:43:56 536158 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:43:56 557944 --> Final output sent to browser
DEBUG - 2019-01-27 13:43:56 558168 --> Total execution time: 0.3748
INFO - 2019-01-27 08:13:57 715480 --> Config Class Initialized
INFO - 2019-01-27 08:13:57 715641 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:13:57 718116 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:13:57 718228 --> Utf8 Class Initialized
INFO - 2019-01-27 08:13:57 719485 --> URI Class Initialized
INFO - 2019-01-27 08:13:57 726383 --> Router Class Initialized
INFO - 2019-01-27 08:13:57 728708 --> Output Class Initialized
INFO - 2019-01-27 08:13:57 730473 --> Security Class Initialized
DEBUG - 2019-01-27 08:13:57 732136 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:13:57 732258 --> Input Class Initialized
INFO - 2019-01-27 08:13:57 732815 --> Language Class Initialized
INFO - 2019-01-27 08:13:57 739506 --> Loader Class Initialized
INFO - 2019-01-27 08:13:57 740885 --> Helper loaded: url_helper
INFO - 2019-01-27 08:13:57 741640 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:43:57 750931 --> Database Driver Class Initialized
INFO - 2019-01-27 13:43:57 755646 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:43:57 757492 --> Controller Class Initialized
ERROR - 2019-01-27 13:43:57 758272 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:43:57 758913 --> Final output sent to browser
DEBUG - 2019-01-27 13:43:57 759026 --> Total execution time: 0.0453
INFO - 2019-01-27 08:14:32 704752 --> Config Class Initialized
INFO - 2019-01-27 08:14:32 705096 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:32 707596 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:32 707731 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:32 709407 --> URI Class Initialized
INFO - 2019-01-27 08:14:32 712342 --> Router Class Initialized
INFO - 2019-01-27 08:14:32 715029 --> Output Class Initialized
INFO - 2019-01-27 08:14:32 717072 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:32 719120 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:32 719254 --> Input Class Initialized
INFO - 2019-01-27 08:14:32 719897 --> Language Class Initialized
INFO - 2019-01-27 08:14:32 727947 --> Loader Class Initialized
INFO - 2019-01-27 08:14:32 729623 --> Helper loaded: url_helper
INFO - 2019-01-27 08:14:32 730514 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:44:32 741014 --> Database Driver Class Initialized
INFO - 2019-01-27 13:44:32 750077 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:44:32 751599 --> Controller Class Initialized
INFO - 2019-01-27 13:44:32 752351 --> Parser Class Initialized
INFO - 2019-01-27 13:44:32 753492 --> Helper loaded: html_helper
INFO - 2019-01-27 13:44:32 760799 --> Model Class Initialized
DEBUG - 2019-01-27 13:44:32 763160 --> User_model: getAssignedEmployee: [select emp.name, emp.contact_no, emp.email from bd_employee emp, bd_customer_responsibility cr, bd_customer_details cd where cd.customer_id = 'unnatinanda18@gmail.com' AND cr.customer_id = cd.id and emp.id = cr.assigned_to]
DEBUG - 2019-01-27 13:44:32 764692 --> Query to get contacts[SELECT `bd_listing_contacts`.`id`, `bd_listing_contacts`.`name`, `key_headline`, `mobile`, `country`, `state`, `city`
FROM `bd_listing_contacts`
JOIN `bd_business_details` ON `bd_listing_contacts`.`form_id` = `bd_business_details`.`form_id`
WHERE `bd_listing_contacts`.`CONTACT_TO` = 'unnatinanda18@gmail.com']
INFO - 2019-01-27 13:44:32 769921 --> Model Class Initialized
DEBUG - 2019-01-27 13:44:32 770864 --> Startup_model: getBasicProfile: [SELECT *
FROM `bd_customer_details`
WHERE `CUSTOMER_ID` = 'unnatinanda18@gmail.com']
INFO - 2019-01-27 13:44:32 772241 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:44:32 781326 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/user-contacts.php
ERROR - 2019-01-27 13:44:32 785770 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:44:32 787848 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:44:32 788029 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:44:32 792818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:44:32 794735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:44:32 805078 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:44:32 807353 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:44:32 815515 --> Final output sent to browser
DEBUG - 2019-01-27 13:44:32 815665 --> Total execution time: 0.1054
INFO - 2019-01-27 08:14:33 050976 --> Config Class Initialized
INFO - 2019-01-27 08:14:33 051076 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:33 052577 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:33 052655 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:33 053628 --> URI Class Initialized
INFO - 2019-01-27 08:14:33 056955 --> Router Class Initialized
INFO - 2019-01-27 08:14:33 059055 --> Output Class Initialized
INFO - 2019-01-27 08:14:33 061050 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:33 062870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:33 063002 --> Input Class Initialized
INFO - 2019-01-27 08:14:33 063607 --> Language Class Initialized
ERROR - 2019-01-27 08:14:33 064564 --> 404 Page Not Found: User_contacts/basic
INFO - 2019-01-27 08:14:33 079265 --> Config Class Initialized
INFO - 2019-01-27 08:14:33 079607 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:33 082077 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:33 082207 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:33 083846 --> URI Class Initialized
INFO - 2019-01-27 08:14:33 088773 --> Router Class Initialized
INFO - 2019-01-27 08:14:33 091412 --> Output Class Initialized
INFO - 2019-01-27 08:14:33 093430 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:33 095383 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:33 095568 --> Input Class Initialized
INFO - 2019-01-27 08:14:33 096548 --> Language Class Initialized
ERROR - 2019-01-27 08:14:33 097652 --> 404 Page Not Found: User_contacts/basic
INFO - 2019-01-27 08:14:33 143383 --> Config Class Initialized
INFO - 2019-01-27 08:14:33 143654 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:33 145325 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:33 145416 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:33 146579 --> URI Class Initialized
INFO - 2019-01-27 08:14:33 149877 --> Router Class Initialized
INFO - 2019-01-27 08:14:33 151721 --> Output Class Initialized
INFO - 2019-01-27 08:14:33 153095 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:33 154417 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:33 154520 --> Input Class Initialized
INFO - 2019-01-27 08:14:33 154951 --> Language Class Initialized
ERROR - 2019-01-27 08:14:33 155657 --> 404 Page Not Found: User_contacts/basic
INFO - 2019-01-27 08:14:33 176512 --> Config Class Initialized
INFO - 2019-01-27 08:14:33 176620 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:33 178037 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:33 178126 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:33 179404 --> URI Class Initialized
INFO - 2019-01-27 08:14:33 180697 --> Router Class Initialized
INFO - 2019-01-27 08:14:33 181924 --> Output Class Initialized
INFO - 2019-01-27 08:14:33 182925 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:33 183856 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:33 183928 --> Input Class Initialized
INFO - 2019-01-27 08:14:33 184230 --> Language Class Initialized
INFO - 2019-01-27 08:14:33 187905 --> Loader Class Initialized
INFO - 2019-01-27 08:14:33 188714 --> Helper loaded: url_helper
INFO - 2019-01-27 08:14:33 189141 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:44:33 194031 --> Database Driver Class Initialized
INFO - 2019-01-27 13:44:33 197300 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:44:33 198033 --> Controller Class Initialized
ERROR - 2019-01-27 13:44:33 198489 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:44:33 198890 --> Final output sent to browser
DEBUG - 2019-01-27 13:44:33 198955 --> Total execution time: 0.0237
INFO - 2019-01-27 08:14:34 049199 --> Config Class Initialized
INFO - 2019-01-27 08:14:34 049359 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:14:34 051465 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:14:34 051604 --> Utf8 Class Initialized
INFO - 2019-01-27 08:14:34 052933 --> URI Class Initialized
INFO - 2019-01-27 08:14:34 056083 --> Router Class Initialized
INFO - 2019-01-27 08:14:34 058410 --> Output Class Initialized
INFO - 2019-01-27 08:14:34 060235 --> Security Class Initialized
DEBUG - 2019-01-27 08:14:34 062009 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:14:34 062138 --> Input Class Initialized
INFO - 2019-01-27 08:14:34 062714 --> Language Class Initialized
ERROR - 2019-01-27 08:14:34 063616 --> 404 Page Not Found: User_contacts/basic
INFO - 2019-01-27 08:16:53 594744 --> Config Class Initialized
INFO - 2019-01-27 08:16:53 594937 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:53 596230 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:53 596301 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:53 597112 --> URI Class Initialized
DEBUG - 2019-01-27 08:16:53 598433 --> No URI present. Default controller set.
INFO - 2019-01-27 08:16:53 598515 --> Router Class Initialized
INFO - 2019-01-27 08:16:53 599879 --> Output Class Initialized
INFO - 2019-01-27 08:16:53 600922 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:53 601953 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:53 602022 --> Input Class Initialized
INFO - 2019-01-27 08:16:53 602344 --> Language Class Initialized
INFO - 2019-01-27 08:16:53 604440 --> Loader Class Initialized
INFO - 2019-01-27 08:16:53 605319 --> Helper loaded: url_helper
INFO - 2019-01-27 08:16:53 605788 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:46:53 611247 --> Database Driver Class Initialized
INFO - 2019-01-27 13:46:53 616297 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:46:53 617697 --> Controller Class Initialized
INFO - 2019-01-27 13:46:53 618426 --> Parser Class Initialized
INFO - 2019-01-27 13:46:53 619139 --> Helper loaded: html_helper
INFO - 2019-01-27 13:46:53 619865 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:46:53 621650 --> Model Class Initialized
DEBUG - 2019-01-27 13:46:53 647730 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:46:53 657872 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:46:53 658332 --> Model Class Initialized
DEBUG - 2019-01-27 13:46:53 659868 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:46:53 661747 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:46:53 663630 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:46:53 663733 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:46:53 666925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 668482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 678889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 680913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 682475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 682715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 683114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 684040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 685533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 685750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 686134 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:46:53 687335 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:46:53 687438 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:46:53 687558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 689076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 689295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 689693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 690541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 692109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 692341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 692758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 693612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 695179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 695421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 695832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 696692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 698270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 698542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 698956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 699804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 701402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 701668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 702083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 702941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 704576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 704811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 705224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 705890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 707534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 707765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 708188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 708846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 710496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 710730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 711158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 711911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 713597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 713830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 714267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 715442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 719114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 719578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 720334 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:46:53 721470 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:46:53 721600 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:46:53 721807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 724742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 725166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 725987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 727046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 730051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 730469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 731256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 732361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 735438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 735894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 736676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 737375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 740427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 740838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 741813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 742676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 745676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 746083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 746905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 747756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 748553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 749308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 749972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 750588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 751224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 752036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 752686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 753556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 754795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 755552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 756351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 757112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 757795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 758493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 759128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 759716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 760210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 760668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 761109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 761559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 761998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 762453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 763006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 763508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 764058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 764509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 765048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 765501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 766048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 766504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 767035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 767494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 768057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 768596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 770613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 770853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 771332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 771897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 773588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 773833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 774307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 774904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 776554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 776791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 777261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 777795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 779529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 779823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 780298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 780813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 782490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 782733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 783236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 783740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 785413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 785661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 786139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 787786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 788018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 788481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 788979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 790668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 790913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 791364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 791879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 793531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 793770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 794224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 794728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 796407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 796658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 797111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 797635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 799279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 799536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 799990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 800489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 802131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 802371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 802848 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:46:53 803364 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:46:53 805133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 806185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 806435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:46:53 808082 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:46:53 808500 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:46:53 816559 --> Final output sent to browser
DEBUG - 2019-01-27 13:46:53 816631 --> Total execution time: 0.2155
INFO - 2019-01-27 08:16:54 102113 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 102205 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 103430 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 103508 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 105865 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 110318 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 112755 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 114619 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 127612 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 127758 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 128370 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 129446 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 133460 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 133810 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 136318 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 136472 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 138165 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 143323 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 146579 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 148636 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 150623 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 150753 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 151376 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 152394 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 313747 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 313994 --> Hooks Class Initialized
INFO - 2019-01-27 08:16:54 315064 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 315211 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 317290 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 317482 --> Utf8 Class Initialized
DEBUG - 2019-01-27 08:16:54 318535 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 318691 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 319196 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 319992 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 323102 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 324537 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 325505 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 327408 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 329164 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 329293 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 329968 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 331919 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 333817 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 333947 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 334564 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 335530 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 337908 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 338846 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 432028 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 432188 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 434317 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 434463 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 435770 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 438930 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 441371 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 443344 --> Security Class Initialized
INFO - 2019-01-27 08:16:54 459103 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 459244 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 466624 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 466757 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 467459 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 468420 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-27 08:16:54 471189 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 471312 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 472580 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 475847 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 493376 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 495711 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 496021 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 498536 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 498709 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 500807 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 509372 --> Config Class Initialized
INFO - 2019-01-27 08:16:54 512909 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 514550 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 514664 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 515160 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 515969 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 518054 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:16:54 520569 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:16:54 520683 --> Utf8 Class Initialized
INFO - 2019-01-27 08:16:54 522115 --> URI Class Initialized
INFO - 2019-01-27 08:16:54 524943 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 528075 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 528466 --> Router Class Initialized
INFO - 2019-01-27 08:16:54 531013 --> Output Class Initialized
INFO - 2019-01-27 08:16:54 532911 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 535244 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 535423 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 536283 --> Language Class Initialized
ERROR - 2019-01-27 08:16:54 537763 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:16:54 541086 --> Security Class Initialized
DEBUG - 2019-01-27 08:16:54 545464 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:16:54 545665 --> Input Class Initialized
INFO - 2019-01-27 08:16:54 546662 --> Language Class Initialized
INFO - 2019-01-27 08:16:54 560813 --> Loader Class Initialized
INFO - 2019-01-27 08:16:54 563313 --> Helper loaded: url_helper
INFO - 2019-01-27 08:16:54 564785 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:46:54 581461 --> Database Driver Class Initialized
INFO - 2019-01-27 13:46:54 589299 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:46:54 591182 --> Controller Class Initialized
ERROR - 2019-01-27 13:46:54 592102 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:46:54 592994 --> Final output sent to browser
DEBUG - 2019-01-27 13:46:54 593111 --> Total execution time: 0.0860
INFO - 2019-01-27 08:17:20 458309 --> Config Class Initialized
INFO - 2019-01-27 08:17:20 458673 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:20 461380 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:20 461535 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:20 463171 --> URI Class Initialized
INFO - 2019-01-27 08:17:20 468054 --> Router Class Initialized
INFO - 2019-01-27 08:17:20 474344 --> Output Class Initialized
INFO - 2019-01-27 08:17:20 478674 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:20 482095 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:20 482238 --> Input Class Initialized
INFO - 2019-01-27 08:17:20 483555 --> Language Class Initialized
INFO - 2019-01-27 08:17:20 491192 --> Loader Class Initialized
INFO - 2019-01-27 08:17:20 493181 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:20 494252 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:20 515786 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:20 527935 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:20 529515 --> Controller Class Initialized
INFO - 2019-01-27 13:47:20 530262 --> Parser Class Initialized
INFO - 2019-01-27 13:47:20 531554 --> Helper loaded: html_helper
INFO - 2019-01-27 13:47:20 535387 --> Model Class Initialized
INFO - 2019-01-27 13:47:20 541413 --> Model Class Initialized
DEBUG - 2019-01-27 13:47:20 543531 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:47:20 544884 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:47:20 546663 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-27 13:47:20 546837 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-27 13:47:20 548682 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:47:20 551187 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:47:20 551369 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:47:20 552505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 553456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 554380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 555303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 556215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 557128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 558113 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 559063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 559983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 560894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 561801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 562733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 563636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 564549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 565469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 566448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 567339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 568270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 569184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 570141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 572168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 573656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 574918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 575865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 576783 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:47:20 577792 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-27 13:47:20 577970 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-27 13:47:20 578092 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-27 13:47:20 581835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 588263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 590261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:20 605293 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:47:20 607989 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:47:20 616713 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:20 616852 --> Total execution time: 0.1531
INFO - 2019-01-27 08:17:21 335510 --> Config Class Initialized
INFO - 2019-01-27 08:17:21 335869 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:21 338368 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:21 338520 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:21 340195 --> URI Class Initialized
INFO - 2019-01-27 08:17:21 343241 --> Router Class Initialized
INFO - 2019-01-27 08:17:21 346004 --> Output Class Initialized
INFO - 2019-01-27 08:17:21 348050 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:21 350126 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:21 350255 --> Input Class Initialized
INFO - 2019-01-27 08:17:21 350888 --> Language Class Initialized
INFO - 2019-01-27 08:17:21 359062 --> Loader Class Initialized
INFO - 2019-01-27 08:17:21 360757 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:21 361670 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:21 372361 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:21 380701 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:21 382205 --> Controller Class Initialized
ERROR - 2019-01-27 13:47:21 383151 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:47:21 384049 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:21 384176 --> Total execution time: 0.0507
INFO - 2019-01-27 08:17:24 208456 --> Config Class Initialized
INFO - 2019-01-27 08:17:24 208596 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:24 210362 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:24 210510 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:24 211541 --> URI Class Initialized
INFO - 2019-01-27 08:17:24 214627 --> Router Class Initialized
INFO - 2019-01-27 08:17:24 216576 --> Output Class Initialized
INFO - 2019-01-27 08:17:24 218133 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:24 219784 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:24 219983 --> Input Class Initialized
INFO - 2019-01-27 08:17:24 221191 --> Language Class Initialized
INFO - 2019-01-27 08:17:24 230928 --> Loader Class Initialized
INFO - 2019-01-27 08:17:24 234397 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:24 235033 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:24 242522 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:24 247090 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:24 248225 --> Controller Class Initialized
INFO - 2019-01-27 13:47:24 248830 --> Parser Class Initialized
INFO - 2019-01-27 13:47:24 249711 --> Helper loaded: html_helper
INFO - 2019-01-27 13:47:24 252468 --> Model Class Initialized
DEBUG - 2019-01-27 13:47:24 260087 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
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
DEBUG - 2019-01-27 13:47:24 268817 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-27 13:47:24 269598 --> Model Class Initialized
DEBUG - 2019-01-27 13:47:24 270350 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-27 13:47:24 272399 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-27 13:47:24 274950 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:47:24 276627 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:47:24 276786 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:47:24 280020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 283509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 295583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 296689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 297133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 300234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 300997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 301405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 304267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 305013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 305386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 308284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 309031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 309401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 312305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 313083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 313493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 316436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 317224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 317634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 320664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 321432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 321834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 324959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 325758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 326172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 329349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 330158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 330615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 333731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 335659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 336116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 339355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 341731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 342596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 343050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 346307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 347428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 349874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 350989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 351492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 354713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 355798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 358139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 358998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 359471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 362694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 363871 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:47:24 366246 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-27 13:47:24 369209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 371216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 371673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:24 374898 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:47:24 375680 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:47:24 385356 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:24 385552 --> Total execution time: 0.1698
INFO - 2019-01-27 08:17:24 581278 --> Config Class Initialized
INFO - 2019-01-27 08:17:24 581567 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:24 583564 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:24 583672 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:24 585520 --> URI Class Initialized
INFO - 2019-01-27 08:17:24 592538 --> Router Class Initialized
INFO - 2019-01-27 08:17:24 596540 --> Output Class Initialized
INFO - 2019-01-27 08:17:24 599972 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:24 603354 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:24 603562 --> Input Class Initialized
INFO - 2019-01-27 08:17:24 604562 --> Language Class Initialized
ERROR - 2019-01-27 08:17:24 605520 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-27 08:17:24 613854 --> Config Class Initialized
INFO - 2019-01-27 08:17:24 613986 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:24 615861 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:24 615972 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:24 617079 --> URI Class Initialized
INFO - 2019-01-27 08:17:24 620100 --> Router Class Initialized
INFO - 2019-01-27 08:17:24 622190 --> Output Class Initialized
INFO - 2019-01-27 08:17:24 623789 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:24 625330 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:24 625456 --> Input Class Initialized
INFO - 2019-01-27 08:17:24 625955 --> Language Class Initialized
ERROR - 2019-01-27 08:17:24 626749 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-27 08:17:24 648267 --> Config Class Initialized
INFO - 2019-01-27 08:17:24 648564 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:24 650651 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:24 650762 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:24 652473 --> URI Class Initialized
INFO - 2019-01-27 08:17:24 657696 --> Router Class Initialized
INFO - 2019-01-27 08:17:24 660188 --> Output Class Initialized
INFO - 2019-01-27 08:17:24 662120 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:24 664256 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:24 664401 --> Input Class Initialized
INFO - 2019-01-27 08:17:24 665007 --> Language Class Initialized
ERROR - 2019-01-27 08:17:24 665874 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-27 08:17:24 890192 --> Config Class Initialized
INFO - 2019-01-27 08:17:24 890481 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:24 893136 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:24 893244 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:24 894673 --> URI Class Initialized
INFO - 2019-01-27 08:17:24 900032 --> Router Class Initialized
INFO - 2019-01-27 08:17:24 903281 --> Output Class Initialized
INFO - 2019-01-27 08:17:24 905947 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:24 908251 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:24 908358 --> Input Class Initialized
INFO - 2019-01-27 08:17:24 908978 --> Language Class Initialized
ERROR - 2019-01-27 08:17:24 910126 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-27 08:17:25 032474 --> Config Class Initialized
INFO - 2019-01-27 08:17:25 032603 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:25 034641 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:25 034749 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:25 035917 --> URI Class Initialized
INFO - 2019-01-27 08:17:25 038784 --> Router Class Initialized
INFO - 2019-01-27 08:17:25 041996 --> Output Class Initialized
INFO - 2019-01-27 08:17:25 043567 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:25 045137 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:25 045306 --> Input Class Initialized
INFO - 2019-01-27 08:17:25 045882 --> Language Class Initialized
INFO - 2019-01-27 08:17:25 053359 --> Loader Class Initialized
INFO - 2019-01-27 08:17:25 054765 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:25 055604 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:25 064995 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:25 073587 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:25 074949 --> Controller Class Initialized
ERROR - 2019-01-27 13:47:25 075692 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:47:25 076390 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:25 076510 --> Total execution time: 0.0455
INFO - 2019-01-27 08:17:26 226775 --> Config Class Initialized
INFO - 2019-01-27 08:17:26 226938 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:26 229060 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:26 229192 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:26 230560 --> URI Class Initialized
INFO - 2019-01-27 08:17:26 233828 --> Router Class Initialized
INFO - 2019-01-27 08:17:26 236402 --> Output Class Initialized
INFO - 2019-01-27 08:17:26 238348 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:26 240223 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:26 240358 --> Input Class Initialized
INFO - 2019-01-27 08:17:26 240972 --> Language Class Initialized
ERROR - 2019-01-27 08:17:26 241926 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-27 08:17:58 472893 --> Config Class Initialized
INFO - 2019-01-27 08:17:58 473284 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:58 476448 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:58 476605 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:58 478586 --> URI Class Initialized
DEBUG - 2019-01-27 08:17:58 481008 --> No URI present. Default controller set.
INFO - 2019-01-27 08:17:58 481127 --> Router Class Initialized
INFO - 2019-01-27 08:17:58 483691 --> Output Class Initialized
INFO - 2019-01-27 08:17:58 485584 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:58 487416 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:58 487548 --> Input Class Initialized
INFO - 2019-01-27 08:17:58 488081 --> Language Class Initialized
INFO - 2019-01-27 08:17:58 491635 --> Loader Class Initialized
INFO - 2019-01-27 08:17:58 493108 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:58 494111 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:58 503459 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:58 512979 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:58 515033 --> Controller Class Initialized
INFO - 2019-01-27 13:47:58 515997 --> Parser Class Initialized
INFO - 2019-01-27 13:47:58 517656 --> Helper loaded: html_helper
INFO - 2019-01-27 13:47:58 519401 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-27 13:47:58 524280 --> Model Class Initialized
DEBUG - 2019-01-27 13:47:58 536147 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-27 13:47:58 540924 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-27'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-27 13:47:58 541652 --> Model Class Initialized
DEBUG - 2019-01-27 13:47:58 542232 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-27 13:47:58 545710 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-27 13:47:58 547864 --> Helper loaded: file_helper
DEBUG - 2019-01-27 13:47:58 548022 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-27 13:47:58 552644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 555253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 565644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 567476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 570095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 570504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 571149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 571949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 574714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 575083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 576015 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:47:58 577289 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:47:58 577461 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:47:58 577670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 580243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 581197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 582412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 583245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 585917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 586307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 587002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 587734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 590446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 590840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 591630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 592669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 595256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 595554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 596036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 596723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 598623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 598896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 599375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 600054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 602227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 602538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 603024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 603705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 605633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 605902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 606393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 607059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 609112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 609391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 609911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 610712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 612760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 613040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 613573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 614223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 616162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 616445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 616972 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-27 13:47:58 617611 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-27 13:47:58 617712 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-27 13:47:58 617837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 619782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 620058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 620603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 621256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 623203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 623486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 624011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 624671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 626640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 626923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 627460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 628110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 630081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 630361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 630903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 631573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 633512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 633790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 634316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 634962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 635598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 636204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 636811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 637402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 638009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 638606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 639194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 639791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 640372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 640976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 641576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 642157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 642745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 643322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 643932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 644485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 645055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 645586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 646099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 646636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 647147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 647682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 648298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 648885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 649513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 650033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 650661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 651173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 651799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 652309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 652937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 653456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 654102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 654723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 656749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 657026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 657596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 658216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 660253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 660561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 661118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 661761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 663702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 663979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 664542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 665163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 667148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 667438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 667999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 668636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 670578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 670860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 671453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 672084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 674047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 674329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 674905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 676846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 677120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 677670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 678306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 680761 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 681024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 681529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 682109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 683887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 684144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 684649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 685226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 687052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 687326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 687833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 688414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 690198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 690465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 690956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 691549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 693317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 693593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 694082 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:47:58 694685 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-27 13:47:58 696501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 697639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 697896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-27 13:47:58 699676 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-27 13:47:58 700122 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-27 13:47:58 707998 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:58 708075 --> Total execution time: 0.2313
INFO - 2019-01-27 08:17:58 948704 --> Config Class Initialized
INFO - 2019-01-27 08:17:58 948837 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:58 951857 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:58 952071 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:58 955449 --> URI Class Initialized
INFO - 2019-01-27 08:17:58 959496 --> Router Class Initialized
INFO - 2019-01-27 08:17:58 961646 --> Output Class Initialized
INFO - 2019-01-27 08:17:58 963268 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:58 976875 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:58 977091 --> Input Class Initialized
INFO - 2019-01-27 08:17:58 977917 --> Language Class Initialized
ERROR - 2019-01-27 08:17:58 979084 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:58 981674 --> Config Class Initialized
INFO - 2019-01-27 08:17:58 982024 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:58 985287 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:58 985452 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:58 987504 --> URI Class Initialized
INFO - 2019-01-27 08:17:58 994499 --> Router Class Initialized
INFO - 2019-01-27 08:17:58 998182 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 000763 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 003381 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 003566 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 004281 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 005523 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 136805 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 136986 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:59 140208 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 140367 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 142174 --> URI Class Initialized
INFO - 2019-01-27 08:17:59 148252 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 148405 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:59 150609 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 150739 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 152020 --> URI Class Initialized
INFO - 2019-01-27 08:17:59 155172 --> Router Class Initialized
INFO - 2019-01-27 08:17:59 157643 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 160018 --> Router Class Initialized
INFO - 2019-01-27 08:17:59 162695 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 164689 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 166614 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 166742 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 167323 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 168288 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 169612 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 171478 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 171607 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 172168 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 173091 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 308085 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 308351 --> Hooks Class Initialized
INFO - 2019-01-27 08:17:59 327488 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 327790 --> Hooks Class Initialized
DEBUG - 2019-01-27 08:17:59 332947 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 333182 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 336416 --> URI Class Initialized
DEBUG - 2019-01-27 08:17:59 353485 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 353764 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 357074 --> URI Class Initialized
INFO - 2019-01-27 08:17:59 378031 --> Router Class Initialized
INFO - 2019-01-27 08:17:59 383200 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 383716 --> Hooks Class Initialized
INFO - 2019-01-27 08:17:59 387082 --> Config Class Initialized
INFO - 2019-01-27 08:17:59 387587 --> Hooks Class Initialized
INFO - 2019-01-27 08:17:59 395570 --> Router Class Initialized
INFO - 2019-01-27 08:17:59 402793 --> Output Class Initialized
DEBUG - 2019-01-27 08:17:59 407728 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 407810 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 409054 --> URI Class Initialized
INFO - 2019-01-27 08:17:59 411520 --> Router Class Initialized
DEBUG - 2019-01-27 08:17:59 413871 --> UTF-8 Support Enabled
INFO - 2019-01-27 08:17:59 413968 --> Utf8 Class Initialized
INFO - 2019-01-27 08:17:59 415235 --> URI Class Initialized
INFO - 2019-01-27 08:17:59 419979 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 420963 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 421875 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 421942 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 422234 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 422712 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 424458 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 425429 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 425502 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 425806 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 426297 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 427879 --> Router Class Initialized
INFO - 2019-01-27 08:17:59 429272 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 430304 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 431294 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 431360 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 431685 --> Language Class Initialized
ERROR - 2019-01-27 08:17:59 432198 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-27 08:17:59 433629 --> Output Class Initialized
INFO - 2019-01-27 08:17:59 434688 --> Security Class Initialized
DEBUG - 2019-01-27 08:17:59 435678 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-27 08:17:59 435745 --> Input Class Initialized
INFO - 2019-01-27 08:17:59 436055 --> Language Class Initialized
INFO - 2019-01-27 08:17:59 440136 --> Loader Class Initialized
INFO - 2019-01-27 08:17:59 440996 --> Helper loaded: url_helper
INFO - 2019-01-27 08:17:59 441453 --> Helper loaded: utility_helper
INFO - 2019-01-27 13:47:59 446866 --> Database Driver Class Initialized
INFO - 2019-01-27 13:47:59 451453 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-27 13:47:59 452218 --> Controller Class Initialized
ERROR - 2019-01-27 13:47:59 452713 --> Severity: Warning --> imagecolorallocate() expects exactly 4 parameters, 5 given /home/hzswn06npic1/public_html/bdeals/application/controllers/User.php 65
INFO - 2019-01-27 13:47:59 453192 --> Final output sent to browser
DEBUG - 2019-01-27 13:47:59 453255 --> Total execution time: 0.0924
